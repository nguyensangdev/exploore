<div class="header-main" id="page-navbar">
    <nav class="navbar navbar-expand-lg pt-4 pb-4">
        <div class="container">
            <a class="navbar-brand" href="/">
                <img src="{{asset('public/client/img/logo/logo-white-color-1.png')}}" alt="" style="max-width: 125px;">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item ml-3 mr-3">
                        <a class="nav-link text-white" href="/">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item ml-3 mr-3">
                        <a class="nav-link text-white" href="/about">About</a>
                    </li>
                    <li class="nav-item ml-3 mr-3">
                        <a class="nav-link text-white" href="/tour-list">Tour</a>
                    </li>
                    <li class="nav-item ml-3 mr-3">
                        <a class="nav-link text-white" href="/hotel-list">Hotel</a>
                    </li>
                    <li class="nav-item ml-3 mr-3">
                        <a class="nav-link text-white" href="/blog-list">Blog</a>
                    </li>
                    <li class="nav-item ml-3 mr-3">
                        <a class="nav-link text-white" href="#">Contact</a>
                    </li>
                    <li class="nav-item ml-3 mr-3">
                        <div class="dropdown mt-2">
                            <a id="search-box" class="text-white" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                <i class="fas fa-search"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-search-box rounded-0 mt-5"
                                aria-labelledby="search-box">
                                <div class="d-flex flex-row">
                                    <input type="text" class="form-control rounded-0" placeholder="Search"
                                        aria-label="Search" aria-describedby="button-search">
                                    <button class="btn rounded-0 bg-sub-primary" type="button" id="button-search"><i
                                            class="fas fa-search"></i></button>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>

    </nav>
</div>