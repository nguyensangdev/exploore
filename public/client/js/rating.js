$(".rating-input").change(function () {
    let valInput = $(this).val();
console.log('ho');
    switch (valInput) {
        case '1':
            $('.rating-checkstar').css('color', '#fff');
            $('.one-star').css('color', '#fd0');
            break;
        case '2':
            $('.rating-checkstar').css('color', '#fff');
            $('.one-star, .two-star').css('color', '#fd0');
            break;
        case '3':
            $('.rating-checkstar').css('color', '#fff');
            $('.one-star, .two-star, .three-star').css('color', '#fd0');
            break;
        case '4':
            $('.rating-checkstar').css('color', '#fff');
            $('.one-star, .two-star, .three-star, .four-star').css('color', '#fd0');
            break;
        case '5':
            $('.rating-checkstar').css('color', '#fff');
            $('.one-star, .two-star, .three-star, .four-star, .five-star').css('color', '#fd0');
            break;
    }
});