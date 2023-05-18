@extends('Layouts.Main')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-xl-3 col-lg-4 col-md-5">
                <div class="sidebar-categories">
                    <div class="head">Kategori</div>
                    <ul class="main-categories">
                        <li class="main-nav-list"><a data-toggle="collapse" href="#streamingVegetable" aria-expanded="false"
                                aria-controls="streamingVegetable"><span class="lnr lnr-arrow-right"></span>Aplikasi
                                Streaming<span class="number">(53)</span></a>
                            <ul class="collapse" id="streamingVegetable" data-toggle="collapse" aria-expanded="false"
                                aria-controls="fruitsVegetable">
                                <li class="main-nav-list child"><a href="#">Netflix<span
                                            class="number">(13)</span></a></li>
                                <li class="main-nav-list child"><a href="#">Video<span class="number">(09)</span></a>
                                </li>
                            </ul>
                        </li>

                        <li class="main-nav-list"><a data-toggle="collapse" href="#musicVegetable" aria-expanded="false"
                                aria-controls="musicVegetable"><span class="lnr lnr-arrow-right"></span>Aplikasi
                                Musik<span class="number">(53)</span></a>
                            <ul class="collapse" id="musicVegetable" data-toggle="collapse" aria-expanded="false"
                                aria-controls="fruitsVegetable">
                                <li class="main-nav-list child"><a href="#">Spotify<span
                                            class="number">(13)</span></a></li>
                                <li class="main-nav-list child"><a href="#">Joox<span class="number">(09)</span></a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-xl-9 col-lg-8 col-md-7">
                <!-- Start Filter Bar -->
                <div class="filter-bar d-flex flex-wrap align-items-center pt-5 mb-0"></div>
                <!-- End Filter Bar -->
                <!-- Start Best Seller -->
                <section class="lattest-product-area pb-40 category-list">
                    <div class="row">
                        <!-- single product -->
                        <a href="/apk/single">
                            <div class="col-lg-4 col-md-6">
                                <div class="single-product">
                                    <img class="img-fluid" src="{{ asset('/assets') }}/img/product/p1.jpg" alt="">
                                    <div class="product-details">
                                        <h6>Alight Motion Premium</h6>
                                        <div class="price">
                                            <h6>Rp. 25.000</h6>
                                            {{-- <h6 class="l-through">$210.00</h6> --}}
                                        </div>
                                        <div class="prd-bottom">
                                            <a href="" class="social-info">
                                                <span class="ti-bag"></span>
                                                <p class="hover-text">Detail</p>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <!-- single product -->
                        <a href="/apk/single">
                            <div class="col-lg-4 col-md-6">
                                <div class="single-product">
                                    <img class="img-fluid" src="{{ asset('/assets') }}/img/product/p2.jpg" alt="">
                                    <div class="product-details">
                                        <h6>Spotify Premium</h6>
                                        <div class="price">
                                            <h6>Rp. 15.000 - Rp. 30.000</h6>
                                            {{-- <h6 class="l-through">Rp. 20.000</h6> --}}
                                        </div>
                                        <div class="prd-bottom">
                                            <a href="" class="social-info">
                                                <span class="ti-bag"></span>
                                                <p class="hover-text">Detail</p>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <!-- single product -->
                        <a href="/apk/single">
                            <div class="col-lg-4 col-md-6">
                                <div class="single-product">
                                    <img class="img-fluid" src="{{ asset('/assets') }}/img/product/p3.jpg" alt="">
                                    <div class="product-details">
                                        <h6>Youtube Premium</h6>
                                        <div class="price">
                                            <h6>Rp. 10.000 - Rp. 15.000</h6>
                                            {{-- <h6 class="l-through">$210.00</h6> --}}
                                        </div>
                                        <div class="prd-bottom">
                                            <a href="" class="social-info">
                                                <span class="ti-bag"></span>
                                                <p class="hover-text">Detail</p>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </section>
                <!-- End Best Seller -->
                <!-- Start Filter Bar -->
                <div class="filter-bar d-flex flex-wrap align-items-center">
                    <div class="sorting mr-auto">
                        <select>
                            <option value="1">Show 12</option>
                            <option value="1">Show 12</option>
                            <option value="1">Show 12</option>
                        </select>
                    </div>
                    <div class="pagination">
                        <a href="#" class="prev-arrow"><i class="fa fa-long-arrow-left" aria-hidden="true"></i></a>
                        <a href="#" class="active">1</a>
                        <a href="#">2</a>
                        <a href="#">3</a>
                        <a href="#" class="dot-dot"><i class="fa fa-ellipsis-h" aria-hidden="true"></i></a>
                        <a href="#">6</a>
                        <a href="#" class="next-arrow"><i class="fa fa-long-arrow-right"
                                aria-hidden="true"></i></a>
                    </div>
                </div>
                <!-- End Filter Bar -->
            </div>
        </div>
    </div>
    <br>
@endsection
