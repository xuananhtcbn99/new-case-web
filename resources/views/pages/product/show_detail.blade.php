@extends('welcome')
@section('content')

    @foreach ($product_detail as $key => $value)
        <div class="product-details">
            <!--product-details-->
            <div class="col-sm-5">
                <div class="view-product">
                    <img src="{{ asset('upload/product/' . $value->product_image) }}" class="newarrival" alt="" />
                    {{-- <img src="{{ asset('upload/product/' . $value->product_image) }}" width="100px"> --}}
                    {{-- <img src="{{\Illuminate\Support\Facades\URL::to('/public/upload/product/'.$value->product_image)}}" --}}
                    {{-- alt=""/> --}}
                    <h3>Maybi</h3>
                </div>
                <div id="similar-product" class="carousel slide" data-ride="carousel">

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                        <div class="item active">
                            <a href=""><img src="images/product-details/similar1.jpg" alt=""></a>
                            <a href=""><img src="images/product-details/similar2.jpg" alt=""></a>
                            <a href=""><img src="images/product-details/similar3.jpg" alt=""></a>
                        </div>
                        <div class="item">
                            <a href=""><img src="images/product-details/similar1.jpg" alt=""></a>
                            <a href=""><img src="images/product-details/similar2.jpg" alt=""></a>
                            <a href=""><img src="images/product-details/similar3.jpg" alt=""></a>
                        </div>

                    </div>

                    <!-- Controls -->

                </div>

            </div>
            <div class="col-sm-7">
                <div class="product-information">
                    <!--/product-information-->
                    {{-- <img src="{{ asset('upload/product/'.$value->product_image) }}" class="newarrival" alt=""/> --}}
                    <h2>{{ $value->product_name }}</h2>
                    <p>M?? ID: {{ $value->product_id }}</p>
                    {{-- <img src="{{ asset('upload/product/'.$value->product_image) }}" class="newarrival" alt=""/> --}}

                    <form action="{{ \Illuminate\Support\Facades\URL::to('/save-cart') }}" method="post">
                        @csrf
                        <span>
                            <span>{{ number_format($value->product_price) . 'VND' }}</span>
                            <label>Quantity:</label>
                            <input name="qty" type="number" min="1" value="1" />
                            <input name="productid_hidden" type="hidden" min="1" value="{{ $value->product_id }}" />
                            <button type="submit" class="btn btn-fefault cart">
                                <i class="fa fa-shopping-cart"></i>
                                Th??m gi??? h??ng
                            </button>
                        </span>
                    </form>
                    <p><b>T??nh tr???ng:</b> C??n h??ng</p>
                    <p><b>??i???u ki???n:</b> M???i 100%</p>
                    <p><b>Th????ng hi???u:</b> {{ $value->brand_name }}</p>
                    <p><b>Danh m???c:</b> {{ $value->category_name }}</p>
                    <a href=""><img src="images/product-details/share.png" class="share img-responsive" alt="" /></a>
                </div>
                <!--/product-information-->
            </div>

        </div>
        <!--/product-details-->

        <div class="category-tab shop-details-tab">
            <!--category-tab-->
            <div class="col-sm-12">
                <ul class="nav nav-tabs">
                    <li class="active"><a href="#details" data-toggle="tab">M?? t??? s???n ph???m</a></li>
                    <li><a href="#companyprofile" data-toggle="tab">H?????ng d???n b???o qu???n</a></li>
                    {{-- <li><a href="#reviews" data-toggle="tab">????nh gi??</a></li> --}}
                </ul>
            </div>
            <div class="tab-content">
                <div class="tab-pane fade active in" id="details">
                    <p>{!! $value->product_desc !!}</p>

                </div>

                <div class="tab-pane fade" id="companyprofile">

                    <p>{!! $value->product_content !!}</p>

                </div>
            </div>
        </div>
        <!--/category-tab-->
    @endforeach

    <div class="recommended_items">
        <!--recommended_items-->
        <h2 class="title text-center">S???n ph???m li??n quan</h2>

        <div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="item active">
                    @foreach ($relate as $key => $lienquan)
                        <div class="col-sm-4">
                            <div class="product-image-wrapper">
                                <div class="single-products">
                                    <div class="productinfo text-center">
                                        <img src="{{ asset('upload/product/' . $lienquan->product_image) }}" alt="" />
                                        <h2>{{ number_format($lienquan->product_price) . 'VND' }}</h2>
                                        <p>{{ $lienquan->product_name }}</p>
                                        <button type="button" class="btn btn-default add-to-cart"><i
                                                class="fa fa-shopping-cart"></i>Xem chi ti???t
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>


            </div>

        </div>


    </div>
    <!--/recommended_items-->


@endsection
