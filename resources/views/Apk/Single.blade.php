@extends('Layouts.Main')
@section('content')
    <!--================Single Product Area =================-->
    <div class="product_image_area">
        <div class="container">
            <div class="row s_product_inner">
                <div class="col-lg-3">
                    {{-- <h3>Youtube Premium</h3>
                    <div class="mt-5">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta quam suscipit harum aspernatur
                        repudiandae quae quos veniam ex illum incidunt.
                    </div> --}}
                </div>
                <div class="col-lg-8 offset-lg-1">
                    <div class="s_product_text">
                        <h3>Youtube Premium</h3>
                        <h2 id="label-harga">Rp. 10.000 - Rp. 15.000</h2>
                        <span class="text-secondary" style="color:#c4c4c4 !important;">Harga akan berubah setelah
                            Anda
                            memilih
                            opsi</span>
                        <ul class="list">
                            <li><a class="active" href="#"><span>Kategori</span> : Aplikasi Streaming</a></li>
                            <li><a href="#"><span>Stok</span> : Tersedia</a></li>
                        </ul>

                        <div class="mb-3" style="color:#c4c4c4 !important;">
                            Anda akan dikirimkan email & password melalui
                            chat whatsapp.
                            <ul>
                                <ol>1 Bulan = via invite, bisa pakai email pribadi</ol>
                                <ol>3 Bulan = Anda akan dikirim email baru</ol>
                                <ol>6 Bulan = Anda akan dikirim email baru</ol>
                            </ul>

                        </div>

                        <form action="{{ route('Apk_Checkout') }}" method="post">
                            @csrf

                            @if (isset($includeMenu) && !is_null($includeMenu))
                                @foreach ($includeMenu as $item)
                                    @include('Apk.Menu.' . $item)
                                    <br>
                                @endforeach
                            @endif
                            <br>

                            @if (isset($includeForm) && !is_null($includeForm))
                                @foreach ($includeForm as $item)
                                    @include('Form.' . $item)
                                    <br>
                                @endforeach
                            @endif
                            <br>

                            <!-- Start Button -->
                            <section class="button-area"></section>

                            <div class="card_area d-flex align-items-center">
                                <button type="submit" class="primary-btn border-0" id="btn-beli">Beli Sekarang</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--================End Single Product Area =================-->

    <!--================Product Description Area =================-->
    <section class="product_description_area"></section>
    <!--================End Product Description Area =================-->
@endsection
