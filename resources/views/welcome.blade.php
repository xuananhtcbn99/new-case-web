<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home | MAYBI</title>
    <link href="{{ asset('frontend/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/css/prettyPhoto.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/css/price-range.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/css/responsive.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/css/sweetalert.css') }}" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="{{ asset('frontend/js/html5shiv.js') }}"></script>
    <script src="{{ asset('frontend/js/respond.min.js') }}"></script>
    <![endif]-->
    <link rel="shortcut icon" href="{{ asset('frontend/images/ico/favicon.ico') }}">
    <link rel="apple-touch-icon-precomposed" sizes="144x144"
        href="{{ asset('frontend/images/ico/apple-touch-icon-144-precomposed.png') }}">
    <link rel="apple-touch-icon-precomposed" sizes="114x114"
        href="{{ asset('frontend/images/ico/apple-touch-icon-114-precomposed.png') }}">
    <link rel="apple-touch-icon-precomposed" sizes="72x72"
        href="{{ asset('frontend/images/ico/apple-touch-icon-72-precomposed.png') }}">
    <link rel="apple-touch-icon-precomposed"
        href="{{ asset('frontend/images/ico/apple-touch-icon-57-precomposed.png') }}">

    <link rel="shortcut icon" href="https://theme.hstatic.net/1000341902/1000733930/14/favicon.png?v=222" />

    <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">

</head>
<!--/head-->

<body>
    <header id="header">
        <!--header-->
        <div class="header_top">
            <!--header_top-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-7">
                        <div class="contactinfo">
                            <ul class="nav nav-pills">
                                <li><a href="tel://0942126862"><i class="fa fa-phone"></i> +84 94 212 6862</a></li>
                                <li>
                                    <a href="mailto:pedona.hoangvq@gmail.com?subject='subject text'"><i
                                            class="fa fa-envelope"></i> HoangVQ-Depzai-Top1@gmail.com</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-5">
                        <div class="social-icons pull-right">
                            <ul class="nav navbar-nav">
                                <li><?php
                                    $customer_id = Session::get('customer_id');
                                    if($customer_id!=NULL){
                                    ?>
                                <li><a href="{{ \Illuminate\Support\Facades\URL::to('/logout-checkout') }}"><i
                                            class="fa fa-lock"></i> ????ng xu???t</a></li>

                                <?php
                                    }else{
                                    ?>
                                <li><a href="{{ \Illuminate\Support\Facades\URL::to('/login-checkout') }}"><i
                                            class="fa fa-lock"></i> ????ng nh???p</a></li>
                                <?php
                                    }
                                    ?></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/header_top-->

        <div class="header-middle">
            <!--header-middle-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="logo pull-left">
                            <a href="{{ \Illuminate\Support\Facades\URL::to('/') }}"><img
                                    src="{{ asset('frontend/images/home/logo.png') }}" alt="" /></a>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="shop-menu pull-right">
                            <ul class="nav navbar-nav">
                                <form action="{{ \Illuminate\Support\Facades\URL::to('/tim-kiem') }}" method="POST">
                                    @csrf
                                    <div class="search_box pull-right">
                                        <input type="text" name="keywords_submit" placeholder="T??m ki???m s???n ph???m" />
                                        <input type="submit" style="margin-top:0;color:#fff" name="search_items"
                                            class="btn btn-primary btn-sm" value="T??m ki???m">
                                    </div>
                                </form>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/header-middle-->

        <div class="header-bottom">
            <!--header-bottom-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse"
                                data-target=".navbar-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <div class="mainmenu pull-left">
                            <ul class="nav navbar-nav collapse navbar-collapse">
                                <li><a href="{{ \Illuminate\Support\Facades\URL::to('/trang-chu') }}"
                                        class="active"><strong>TRANG CH???</strong></a></li>
                                <li class="dropdown"><a href="#"><strong>B??? S??U T???P</strong><i
                                            class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        @foreach ($category as $key => $cate)
                                            <li>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading">
                                                        <h4 class="panel-title"><a
                                                                href="{{ \Illuminate\Support\Facades\URL::to('/danh-muc-san-pham/' . $cate->category_id) }}">{{ $cate->category_name }}</a>
                                                        </h4>
                                                    </div>
                                                </div>
                                            </li>
                                        @endforeach

                                    </ul>
                                </li>
                                <li class="dropdown"><a href="#"><strong>CHIA S???</strong><i
                                            class="fa fa-angle-down"></i></a>

                                </li>
                                <li><a href="{{ \Illuminate\Support\Facades\URL::to('/show-cart') }}"><strong>GI???
                                            H??NG</strong></a>
                                </li>
                                <li><a href="tel://0942126862" style="color: red"><strong>LI??N H???</strong></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/header-bottom-->
    </header>
    <!--/header-->


    <section id="slider">
        <!--slider-->
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div id="slider-carousel" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
                            <li data-target="#slider-carousel" data-slide-to="1"></li>
                            <li data-target="#slider-carousel" data-slide-to="2"></li>
                        </ol>

                        <div class="carousel-inner">
                            <div class="item active">
                                <div class="col-sm-6">
                                    <h1><span>M</span>AYBI</h1>
                                    <h2>T??i...</h2>
                                    <p>???Th???i trang ph???i ph???n chi???u ???????c con ng?????i b???n l?? ai, b???n ??ang c???m th???y ra sao v??
                                        b???n s??? ??i ?????n ????u???</p>
                                    <button type="button" class="btn btn-default get">Xem th??m</button>
                                </div>
                                <div class="col-sm-6">
                                    <img src="{{ asset('/frontend/images/home/girl1.png') }}"
                                        class="girl img-responsive" alt="" />
                                </div>
                            </div>
                            <div class="item">
                                <div class="col-sm-6">
                                    <h1><span>MA</span>YBI</h1>
                                    <h2>th??ch =)</h2>
                                    <p>???H??? s??? nh??n b???n ch???m ch???m, h??y khi???n h??? ???????c m??n nh??n???</p>
                                    <button type="button" class="btn btn-default get">Xem th??m</button>
                                </div>
                                <div class="col-sm-6">
                                    <img src="{{ asset('/frontend/images/home/girl2.png') }}"
                                        class="girl img-responsive" alt="" />
                                </div>
                            </div>

                            <div class="item">
                                <div class="col-sm-6">
                                    <h1><span>MAY</span>BI</h1>
                                    <h2>...m???t t??m h???n ?????p !</h2>
                                    <p>???T???n h?????ng vi???c di???n ????? l?? ngh??? thu???t ????ch th???c???</p>
                                    <button type="button" class="btn btn-default get">Xem th??m</button>
                                </div>
                                <div class="col-sm-6">
                                    <img src="{{ asset('/frontend/images/home/girl3.png') }}"
                                        class="girl img-responsive" alt="" />
                                </div>
                            </div>

                        </div>

                        <a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
                            <i class="fa fa-angle-left"></i>
                        </a>
                        <a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!--/slider-->

    <section>
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <div class="left-sidebar">
                        <div class="panel-group category-products" id="accordian">
                            <!--category-productsr-->
                            <h2>B??? S??U T???P</h2>
                            @foreach ($category as $key => $cate)

                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title"><a
                                                href="{{ \Illuminate\Support\Facades\URL::to('/danh-muc-san-pham/' . $cate->category_id) }}">{{ $cate->category_name }}</a>
                                        </h4>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                        <!--/category-products-->

                        <div class="brands_products">
                            <!--brands_products-->
                            <div class="brands-name">
                                <h2>Th????ng hi???u</h2>
                                @foreach ($brand as $key => $brand)
                                    <ul class="nav nav-pills nav-stacked">
                                        <li>
                                            <a
                                                href="{{ \Illuminate\Support\Facades\URL::to('/thuong-hieu-san-pham/' . $brand->brand_id) }}">
                                                <span class="pull-right"></span>{{ $brand->brand_name }}</a>
                                        </li>
                                    </ul>
                                @endforeach
                            </div>
                        </div>
                        <!--/brands_products-->


                    </div>
                </div>

                <div class="col-sm-9 padding-right">

                    @yield('content')
                    <!--features_items-->

                    <!--/category-tab-->

                    <!--/recommended_items-->

                </div>
            </div>
        </div>
    </section>

    <footer id="footer">
        <!--Footer-->
        {{-- <div class="footer-top"> --}}
        <div class="container">
            <div class="row">

                <div class="col-sm-6">
                    <div class="companyinfo">
                        <h2><span>S2</span>-Maybi</h2>
                        <p>
                            ???Th???i trang ph???i ph???n chi???u ???????c con ng?????i b???n l?? ai, b???n ??ang c???m th???y ra sao v?? b???n s??? ??i
                            ?????n ????u???
                        </p>
                    </div>
                </div>
                <div class="col-sm-1">

                </div>
                <div class="col-sm-5">
                    <div class="single-widget">
                        <h2>????ng k?? nh???n th??ng b??o</h2>
                        <form action="#" class="searchform">
                            <input type="text" placeholder="Nh???p Email c???a b???n t???i ????y" />
                            <button type="submit" class="btn btn-default"><i class="fa fa-arrow-circle-o-right"></i>
                            </button>
                            <p>Nh???n nh???ng m??n qu?? b???t ng??? <br />v?? ?? ngh??a nh???t t??? Maybi...</p>
                        </form>
                    </div>

                </div>
            </div>
        </div>
        </div>

        <div class="footer-widget">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="single-widget">
                            <h2>Ch??nh s??ch</h2>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="#">Ch??nh s??ch kh??ch h??ng</a></li>
                                <li><a href="#">Giao h??ng - Thanh to??n</a></li>
                                <li><a href="#">B???o m???t th??ng tin</a></li>
                                <li><a href="#">Ch??nh s??ch ?????i tr???</a></li>
                                {{-- <li><a href="#">FAQ???s</a></li> --}}
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="single-widget">
                            <h2>Ch??nh s??ch ?????i t??c</h2>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="#">?????i t??c b??n h??ng c???a MAYBI</a></li>
                                <li><a href="#">Ch??nh s??ch b??n s???</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="single-widget">
                            <h2>Th??ng tin</h2>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="#">Th??ng tin showroom</a></li>
                                <li><a href="#">Th??ng tin li??n h???</a></li>
                                <li><a href="#">Tuy???n d???ng</a></li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <p class="pull-left">Copyright ?? .</p>
                    <p class="pull-right">Designed by <span><a target="_blank"
                                href="https://github.com/HoangVQ-112714/">HoangVQ depzai top1 v?? tr???</a></span></p>
                </div>
            </div>
        </div>

    </footer>
    <!--/Footer-->


    <script src="{{ asset('frontend/js/jquery.js') }}"></script>
    <script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.scrollUp.min.js') }}"></script>
    <script src="{{ asset('frontend/js/price-range.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.prettyPhoto.js') }}"></script>
    <script src="{{ asset('frontend/js/main.js') }}"></script>
    {{-- <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script> --}}
    <script src="{{ asset('frontend/js/sweetalert.min.js') }}"></script>

    <script src="http://cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script>
    <script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            $('.add-to-cart').click(function() {


                var id = $(this).data('id_product');
                var cart_product_id = $('.cart_product_id_' + id).val();
                var cart_product_name = $('.cart_product_name_' + id).val();
                var cart_product_image = $('.cart_product_image_' + id).val();
                var cart_product_price = $('.cart_product_price_' + id).val();
                var cart_product_qty = $('.cart_product_qty_' + id).val();
                var _token = $('input[name="_token"]').val();
                $.ajax({
                    url: '{{ url('/add-cart-ajax') }}',
                    method: 'POST',
                    data: {
                        cart_product_id: cart_product_id,
                        cart_product_name: cart_product_name,
                        cart_product_image: cart_product_image,
                        cart_product_price: cart_product_price,
                        cart_product_qty: cart_product_qty,
                        _token: _token
                    },
                    success: function() {

                        swal({
                                title: "???? th??m s???n ph???m v??o gi??? h??ng",
                                text: "B???n c?? th??? mua h??ng ti???p ho???c t???i gi??? h??ng ????? ti???n h??nh thanh to??n",
                                showCancelButton: true,
                                cancelButtonText: "Xem ti???p",
                                confirmButtonClass: "btn-success",
                                confirmButtonText: "??i ?????n gi??? h??ng",
                                closeOnConfirm: false
                            },
                            function() {
                                window.location.href = "{{ url('/gio-hang') }}";
                            });

                    }

                });
            });
        });
    </script>

</body>

</html>
