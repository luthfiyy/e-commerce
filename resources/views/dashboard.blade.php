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
                            <i class="fa-solid fa-user" class="dropdown-toggle" data-bs-toggle="dropdown"></i>
                         </a>
                         <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                           @if (Route::has('login'))
                           @auth
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

   <!-- Hero Section Begin -->
   <section class="hero">
    <div class="hero__slider owl-carousel">
        <div class="hero__items set-bg" data-setbg="{{asset('asset/user')}}/img/hero.png">
            <div class="container">
                <div class="row">
                    <div class="col-xl-5 col-lg-7 col-md-8">
                        <div class="hero__text">
                            <h6>Summer Collection</h6>
                            <h2>Fall - Winter Collections 2030</h2>
                            <p>A specialist label creating luxury essentials. Ethically crafted with an unwavering
                            commitment to exceptional quality.</p>
                            <a href="#" class="primary-btn">Shop now <span class="arrow_right"></span></a>
                            <div class="hero__social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-pinterest"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="hero__items set-bg" data-setbg="{{asset('asset/user')}}/img/hero5.png">
            <div class="container">
                <div class="row">
                    <div class="col-xl-5 col-lg-7 col-md-8">
                        <div class="hero__text">
                            <h6>Summer Collection</h6>
                            <h2>Fall - Winter Collections 2030</h2>
                            <p>A specialist label creating luxury essentials. Ethically crafted with an unwavering
                            commitment to exceptional quality.</p>
                            <a href="#" class="primary-btn">Shop now <span class="arrow_right"></span></a>
                            <div class="hero__social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-pinterest"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Hero Section End -->

<!-- Banner Section Begin -->
<section class="banner spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 offset-lg-4">
                <div class="banner__item">
                    <div class="banner__item__pic">
                        <img src="{{asset('asset/user')}}/img/hero2.jpeg" width="80%" alt="">
                    </div>
                    <div class="banner__item__text">
                        <h2>Heels Collections 2030</h2>
                        <a href="{{route('shop.index')}}">Shop now</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="banner__item banner__item--middle">
                    <div class="banner__item__pic">
                        <img src="{{asset('asset/user')}}/img/hero3.jpeg" alt="">
                    </div>
                    <div class="banner__item__text">
                        <h2>Heels</h2>
                        <a href="{{route('shop.index')}}">Shop now</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="banner__item banner__item--last">
                    <div class="banner__item__pic">
                        <img src="{{asset('asset/user')}}/img/hero4.jpeg" width="80%" alt="">
                    </div>
                    <div class="banner__item__text">
                        <h2 style="color: white;">Heels Spring 2030</h2>
                        <a href="{{route('shop.index')}}" style="color: white;">Shop now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Banner Section End -->

<!-- Product Section Begin -->
<section class="product spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <ul class="filter__controls">
                    <li class="active" data-filter="*">Best Sellers</li>
                    <li data-filter=".new-arrivals">New Arrivals</li>
                    <li data-filter=".hot-sales">Hot Sales</li>
                </ul>
            </div>
        </div>
        <div class="row product__filter">
            <div class="row">
                    @foreach ($products as $index => $product)
                    @if ($index < 9)
                    <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="product__item" >
                        <div class="product__item__pic set-bg" data-setbg="{{asset('asset/user')}}/img/product/{{$product->image}}">
                            <ul class="product__hover">
                                <form action="{{route('add.cart', $product->id)}}" method="post">
                                    @csrf
                                <li><a href="#"><img src="{{asset('asset/user').'/img/icon/heart.png'}}" alt=""></a></li>
                                <li><input type="number" name="quantity" value="1" min="1" style="width: 35px;"></li>
                                <li>
                                    <button type="submit" style="background: none; border: none; padding: 0; cursor: pointer;">
                                        <img src="{{ asset('asset/user/img/icon/cart.png') }}" alt="Add To Cart">
                                    </button>
                                </li>
                                </li>
                                <li><a href="#"><img src="{{asset('asset/user').'/img/icon/search.png'}}" alt=""></a></li>
                            </form>

                            </ul>
                        </div>
                        <div class="product__item__text">
                            <h6>{{$product->name}}</h6>
                            <span class="font-light">{{$product->category->name}}</span>
                            <a href="{{route('product.details', $product->id)}}" class="add-cart">See More</a>
                            <p>{{$product->short_description}}</p>
                            <div class="rating">
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                            </div>
                            <h5>Rp {{ number_format($product->regular_price, 0, ',', '.') }},-</h5>
                            <div class="product__color__select">
                                <label for="pc-4">
                                    <input type="radio" id="pc-4">
                                </label>
                                <label class="active black" for="pc-5">
                                    <input type="radio" id="pc-5">
                                </label>
                                <label class="grey" for="pc-6">
                                    <input type="radio" id="pc-6">
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                @endif
                @endforeach
            </div>
        </div>
    </div>
</section>
<!-- Product Section End -->



<!-- Instagram Section Begin -->
<section class="instagram spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="instagram__pic">
                    <div class="instagram__pic__item set-bg" data-setbg="{{asset('asset/user')}}/img/instagram/instagram-1.jpg"></div>
                    <div class="instagram__pic__item set-bg" data-setbg="{{asset('asset/user')}}/img/instagram/instagram-2.jpg"></div>
                    <div class="instagram__pic__item set-bg" data-setbg="{{asset('asset/user')}}/img/instagram/instagram-3.jpg"></div>
                    <div class="instagram__pic__item set-bg" data-setbg="{{asset('asset/user')}}/img/instagram/instagram-4.jpg"></div>
                    <div class="instagram__pic__item set-bg" data-setbg="{{asset('asset/user')}}/img/instagram/instagram-5.jpg"></div>
                    <div class="instagram__pic__item set-bg" data-setbg="{{asset('asset/user')}}/img/instagram/instagram-6.jpg"></div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="instagram__text">
                    <h2>Instagram</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                    labore et dolore magna aliqua.</p>
                    <h3>#Male_Fashion</h3>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Instagram Section End -->

<!-- Latest Blog Section Begin -->
<section class="latest spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <span>Latest News</span>
                    <h2>Fashion New Trends</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="blog__item">
                    <div class="blog__item__pic set-bg" data-setbg="{{asset('asset/user')}}/img/blog/blog-1.jpg"></div>
                    <div class="blog__item__text">
                        <span><img src="{{asset('asset/user')}}/img/icon/calendar.png" alt=""> 16 February 2020</span>
                        <h5>What Curling Irons Are The Best Ones</h5>
                        <a href="#">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="blog__item">
                    <div class="blog__item__pic set-bg" data-setbg="{{asset('asset/user')}}/img/blog/blog-2.jpg"></div>
                    <div class="blog__item__text">
                        <span><img src="{{asset('asset/user')}}/img/icon/calendar.png" alt=""> 21 February 2020</span>
                        <h5>Eternity Bands Do Last Forever</h5>
                        <a href="#">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="blog__item">
                    <div class="blog__item__pic set-bg" data-setbg="{{asset('asset/user')}}/img/blog/blog-3.jpg"></div>
                    <div class="blog__item__text">
                        <span><img src="{{asset('asset/user')}}/img/icon/calendar.png" alt=""> 28 February 2020</span>
                        <h5>The Health Benefits Of Sunglasses</h5>
                        <a href="#">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Latest Blog Section End -->


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