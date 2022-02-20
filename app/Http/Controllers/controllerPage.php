<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\User;
use App\Tour;
use App\Hotel;
use App\Room;
use App\tourDay;
use App\Comment;
use App\News;
use App\Rating;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class controllerPage extends Controller
{

    public function getHome()
    {
        $user = Auth::user();
        $getListTour = DB::table('tour')->where('status', 1)->limit(3)->get();
        $getListHotel = DB::table('hotel')->where('status', 1)->limit(3)->get();
        $getNews = DB::table('news')->limit(3)->get();
        return view('client.home', ['user' => $user, 'tour' => $getListTour, 'hotel' => $getListHotel,'news'=>$getNews]);
    }


    public function getAbout()
    {
        $user = Auth::user();
        return view('client.about', ['user' => $user]);
    }

    public function getLogin()
    {
        return view('client.login');
    }
    

    public function getRegister()
    {
        return view('client.register');
    }

    public function getForgotPassword()
    {
        return view('client.forgot-password');
    }

    public function getEmailAuthentication()
    {
        return view('client.email-authentication');
    }


    public function getTourList()
    {
        $listTour = DB::table('tour')->paginate(4);
        $user = Auth::user();
        $rating1 = DB::table('tour')->where('rating', 1)->get()->count();
        $rating2 = DB::table('tour')->where('rating', 2)->get()->count();
        $rating3 = DB::table('tour')->where('rating', 3)->get()->count();
        $rating4 = DB::table('tour')->where('rating', 4)->get()->count();
        $rating5 = DB::table('tour')->where('rating', 5)->get()->count();
        
        $listCountRating = array($rating1, $rating2, $rating3, $rating4, $rating5);
        return view('client.tour-list', ['user' => $user, 'listTour' => $listTour, 'countRating' => $listCountRating]);
    }


    public function listTourFilter(Request $request)
    {
            $user = Auth::user();
            $route = $request->route;
            // dd($request->action);
            if ($request->action == 'filter') {

                $rating = $request->rating;
                $priceMin = $request->priceMin;
                $priceMax = $request->priceMax;
                if ($rating) {
                    $tour = DB::table('tour')->where('rating', $rating)
                        ->where('tour_price', '>=', $priceMin)
                        ->where('tour_price', '<=', $priceMax)
                        ->paginate(4);

                } else {
                    $tour = DB::table('tour')
                    ->where('tour_price', '>=', $priceMin)
                    ->where('tour_price', '<=', $priceMax)
                    ->paginate(4);
                }
                return view('client.showTour', 
                ['listTour' => $tour,'rating' =>$rating,'priceMin'=>$priceMin,'priceMax'=>$priceMax, 'user' => $user,'action'=>$request->action])->render();

            }
            else if ($request->action == 'search') {
                $inputDestination = $request->inputDestination;
                $inputTourCheckInDate = $request->inputTourCheckInDate;
                $inputTourCheckOutDate = $request->inputTourCheckOutDate;
                $inputAdult = $request->inputAdult;
                 
                
                $value = array (
                        'startDate'=>$inputTourCheckInDate,
                        'endDate'=>$inputTourCheckOutDate,
                        'Adult'=>$inputAdult
                );

                $request->session()->put('booking',$value);



                $tour = DB::table('tour')->where('tour_name','like', "%$inputDestination%")->paginate(4);
                   if($route && $route == 'home'){
                    $user = Auth::user();
                    $rating1 = DB::table('tour')->where('rating', 1)->get()->count();
                    $rating2 = DB::table('tour')->where('rating', 2)->get()->count();
                    $rating3 = DB::table('tour')->where('rating', 3)->get()->count();
                    $rating4 = DB::table('tour')->where('rating', 4)->get()->count();
                    $rating5 = DB::table('tour')->where('rating', 5)->get()->count();
                    
                    $listCountRating = array($rating1, $rating2, $rating3, $rating4, $rating5);

                    
                    return view('client.tour-list', ['inputDestination'=>$inputDestination,
                    'action'=>$request->action,'listTour' => $tour, 'user' => $user,'countRating' => $listCountRating]);
                   }else{
                    return view('client.showTour', ['inputDestination'=>$inputDestination,
                    'action'=>$request->action,'listTour' => $tour, 'user' => $user]);
                   }
             

            }else {
                $listTour = DB::table('tour')->paginate(4);
                return view('client.showTour', ['user' => $user, 'listTour' => $listTour])->render();
            }
        }

    

    public function getTourDetail($id_tour)
    {
        $user = Auth::user();
        $tour = Tour::where('id_tour', $id_tour)->first();
        $tourDay = tourDay::where('id_tour', $id_tour)->get();
        $comment = Comment::where('id_tour', $id_tour)->get();
        $ratings = Rating::where('id_tour', $id_tour)->get();

        $totalRating = 0;
        foreach ($ratings as $item) {
            $totalRating += $item->rate_rating;
        }

        if ($totalRating > 0) $value = round($totalRating / $ratings->count());
        else
            $value = 0;
        return view('client.tour-detail', ['user' => $user, 'tour' => $tour, 'tourDay' => $tourDay, 'comment' => $comment
            , 'ratings' => $ratings, 'rating' => $value]);

    }

    public function getHotelList()
    {
        $listHotel = DB::table('hotel')->paginate(4);
        $countHotel = DB::table('hotel')->count();
        $user = Auth::user();
        $rating1 = DB::table('hotel')->where('rating', 1)->get()->count();
        $rating2 = DB::table('hotel')->where('rating', 2)->get()->count();
        $rating3 = DB::table('hotel')->where('rating', 3)->get()->count();
        $rating4 = DB::table('hotel')->where('rating', 4)->get()->count();
        $rating5 = DB::table('hotel')->where('rating', 5)->get()->count();
        
        $listCountRating = array($rating1, $rating2, $rating3, $rating4, $rating5,$countHotel);

        
            return view('client.hotel-list', ['user' => $user, 'listHotel' => $listHotel, 'countRating' => $listCountRating]);
        
    }


    public function listHotelFilter(Request $request)
    {
        
            $user = Auth::user();
            $route = $request->route;
            if ($request->action == 'filter') {
                $rating = $request->rating;
                $priceMin = $request->priceMin;
                $priceMax = $request->priceMax;
                if ($rating) {
                    $hotel = DB::table('hotel')->where('rating', $rating)
                        ->where('hotel_price', '>=', $priceMin)
                        ->where('hotel_price', '<=', $priceMax)
                        ->paginate(4);

                } else {
                    $hotel = DB::table('hotel')
                    ->where('hotel_price', '>=', $priceMin)
                    ->where('hotel_price', '<=', $priceMax)
                    ->paginate(4);
                }
                return view('client.showHotel', 
                ['listHotel' => $hotel,'rating' =>$rating,'priceMin'=>$priceMin,'priceMax'=>$priceMax, 'user' => $user,'action'=>$request->action])->render();

            }
            else if ($request->action == 'search') {
                $inputDestination = $request->inputDestination;
                $inputHotelCheckInDate = $request->inputHotelCheckInDate;
                $inputHotelCheckOutDate = $request->inputHotelCheckOutDate;
                $inputAdult = $request->inputAdult;
                 
                
                $value = array (
                        'startDate'=>$inputHotelCheckInDate,
                        'endDate'=>$inputHotelCheckOutDate,
                        'Adult'=>$inputAdult
                );

                $request->session()->put('booking',$value);



                $hotel = DB::table('hotel')->where('hotel_name','like', "%$inputDestination%")->paginate(4);

                if($route && $route == 'home'){

                    $countHotel = DB::table('hotel')->count();

                    $rating1 = DB::table('hotel')->where('rating', 1)->get()->count();
                    $rating2 = DB::table('hotel')->where('rating', 2)->get()->count();
                    $rating3 = DB::table('hotel')->where('rating', 3)->get()->count();
                    $rating4 = DB::table('hotel')->where('rating', 4)->get()->count();
                    $rating5 = DB::table('hotel')->where('rating', 5)->get()->count();
                    
                    $listCountRating = array($rating1, $rating2, $rating3, $rating4, $rating5,$countHotel);
                 return view('client.hotel-list', ['action'=>$request->action,'inputDestination'=>$inputDestination,'user' => $user, 'listHotel' => $hotel, 'countRating' => $listCountRating]);
                }else{
                    return view('client.showHotel', ['inputDestination'=>$inputDestination,
                    'action'=>$request->action,'listHotel' => $hotel, 'user' => $user]);
                }

              

            }else {
                $listHotel = DB::table('hotel')->paginate(4);
                return view('client.showHotel', ['user' => $user, 'listHotel' => $listHotel])->render();
            }
        

    }


    public function getHotelDetail($id_hotel)
    {
        $user = Auth::user();
        $hotel = Hotel::where('id_hotel', $id_hotel)->first();
        $room = Room::where('id_hotel', $id_hotel)->get();
        $comment = Comment::where('id_hotel', $id_hotel)->get();
        $ratings = Rating::where('id_hotel', $id_hotel)->get();
        $totalRating = 0;
        foreach ($ratings as $item) {
            $totalRating += $item->rate_rating;
        }

        if ($totalRating > 0) $value = round($totalRating / $ratings->count());
        else
            $value = 0;
        return view('client.hotel-detail', ['user' => $user, 'hotel' => $hotel, 'room' => $room,'comment'=>$comment,'ratings' => $ratings,'rating'=>$value]);
    }

    
    public function getProfile()
    {
        $user = Auth::user();
        return view('client.profile', ['user' => $user]);
    }

    public function getChangePassword()
    {
        $user = Auth::user();
        return view('client.change-password', ['user' => $user]);
    }

    public function getContactPage()
    {
        $user = Auth::user();
        return view('client.contact',['user'=>$user]);
    }

    public function getNotificationPage()
    {
        $user = Auth::user();
        return view('client.notification',['user'=>$user]);
    }


    public function getBlogList()
    {
        $user = Auth::user();
        $news = News::get();
        return view('client.blog-list',['user'=>$user,'news'=>$news]);
    }
    public function getBlogDetail($id_news)
    {
        $user = Auth::user();
        $news = News::find($id_news);
        $newsList = News::get();
        return view('client.blog-detail',['user'=>$user,'news'=>$news,'newsList' => $newsList]);
    }
}