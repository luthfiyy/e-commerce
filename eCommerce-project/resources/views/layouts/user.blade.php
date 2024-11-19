<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Male_Fashion Template">
    <meta name="keywords" content="Male_Fashion, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hereels</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&display=swap"
    rel="stylesheet">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <!-- Css Styles -->
    <link rel="stylesheet" href="{{ asset('asset/user') }}/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="{{ asset('asset/user') }}/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="{{ asset('asset/user') }}/css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="{{ asset('asset/user') }}/css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="{{ asset('asset/user') }}/css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="{{ asset('asset/user') }}/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="{{ asset('asset/user') }}/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="{{ asset('asset/user') }}/css/style.css" type="text/css">

</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>



    <!-- Header Section Begin -->
    <header class="header">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-md-1">
                    <div class="header__logo">
                        <a href="./index.html"><img src="{{asset('asset/user')}}/img/logo.png" width="80%" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <nav class="header__menu mobile-menu">
                        <ul>
                            <li class="{{ request()->is('home') ? 'active' : '' }}"><a href="{{ route('app.index') }}">Home</a></li>
                            <li class="{{ request()->is('shop') ? 'active' : '' }}"><a href="{{ route('shop.index') }}">Shop</a></li>
                            <li class="{{ request()->is('cart') ? 'active' : '' }}"><a href="{{ route('cart') }}">Cart</a></li>
                        </ul>                        
                    </nav>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="header__nav__option">
                        <a href="#" class="search-switch"><img src="img/icon/search.png" alt=""></a>
                        <a href="#"><img src="{{asset('asset/user')}}/img/icon/heart.png" alt=""></a>
                        <a href="#"><img src="{{asset('asset/user')}}/img/icon/cart.png" alt=""></a>
                        @auth <span>{{Auth::user()->name}}</span>@endauth
                            <i class="fa-solid fa-user" class="dropdown-toggle" data-bs-toggle="dropdown"></i>
                         </a>
                         <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            @if (Route::has('login'))
                                @auth
                                    @if (Auth::user()->utype === 'USR')
                                        <a class="dropdown-item" href="{{route('user.index')}}">My Account</a>
                                        <a class="dropdown-item" href="{{route('order.history', ['id' => Auth::id()])}}">Order History</a>
                                    @endif
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                  document.getElementById('logout-form').submit();">
                                     {{ __('Logout') }}
                                 </a>

                                 <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                     @csrf
                                 </form>
                                 @else
                                 <a class="dropdown-item" href="{{route('login')}}">Login</a>
                                 <a class="dropdown-item" href="{{route('register')}}">Register</a>
                                @endauth
                            @endif
                            
                         </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="canvas__open"><i class="fa fa-bars"></i></div>
        </div>
    </header>
    <!-- Header Section End -->

    @yield('content')


    <!-- Footer Section Begin -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="footer__about">
                        <div class="footer__logo">
                            <a href="#"><img src="img/footer-logo.png" alt=""></a>
                        </div>
                        <p>The customer is at the heart of our unique business model, which includes design.</p>
                        <a href="#"><img src="img/payment.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-2 offset-lg-1 col-md-3 col-sm-6">
                    <div class="footer__widget">
                        <h6>Shopping</h6>
                        <ul>
                            <li><a href="#">Clothing Store</a></li>
                            <li><a href="#">Trending Shoes</a></li>
                            <li><a href="#">Accessories</a></li>
                            <li><a href="#">Sale</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6">
                    <div class="footer__widget">
                        <h6>Shopping</h6>
                        <ul>
                            <li><a href="#">Contact Us</a></li>
                            <li><a href="#">Payment Methods</a></li>
                            <li><a href="#">Delivary</a></li>
                            <li><a href="#">Return & Exchanges</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 offset-lg-1 col-md-6 col-sm-6">
                    <div class="footer__widget">
                        <h6>NewLetter</h6>
                        <div class="footer__newslatter">
                            <p>Be the first to know about new arrivals, look books, sales & promos!</p>
                            <form action="#">
                                <input type="text" placeholder="Your email">
                                <button type="submit"><span class="icon_mail_alt"></span></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="footer__copyright__text">
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        <p>Copyright ©
                            <script>
                                document.write(new Date().getFullYear());
                            </script>2020
                            All rights reserved | This template is made with <i class="fa fa-heart-o"
                            aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                        </p>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Search Begin -->
    <div class="search-model">
        <div class="h-100 d-flex align-items-center justify-content-center">
            <div class="search-close-switch">+</div>
            <form class="search-model-form">
                <input type="text" id="search-input" placeholder="Search here.....">
            </form>
        </div>
    </div>
    <!-- Search End -->

    <!-- Js Plugins -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js"></script>
    <script src="{{ asset('asset/user') }}/js/jquery-3.3.1.min.js"></script>
    <script src="{{ asset('asset/user') }}/js/bootstrap.min.js"></script>
    <script src="{{ asset('asset/user') }}/js/jquery.nice-select.min.js"></script>
    <script src="{{ asset('asset/user') }}/js/jquery.nicescroll.min.js"></script>
    <script src="{{ asset('asset/user') }}/js/jquery.magnific-popup.min.js"></script>
    <script src="{{ asset('asset/user') }}/js/jquery.countdown.min.js"></script>
    <script src="{{ asset('asset/user') }}/js/jquery.slicknav.js"></script>
    <script src="{{ asset('asset/user') }}/js/mixitup.min.js"></script>
    <script src="{{ asset('asset/user') }}/js/owl.carousel.min.js"></script>
    <script src="{{ asset('asset/user') }}/js/main.js"></script>
</body>

</html>