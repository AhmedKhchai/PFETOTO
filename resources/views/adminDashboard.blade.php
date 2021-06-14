@extends('layouts.adminLayout')
@section('contentAdmin')
    {{-- <x-app-layout>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Dashboard') }}
            </h2>
        </x-slot>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        You're logged in!
                    </div>
                </div>
            </div>
        </div>
    </x-app-layout> --}}

    <!--Sliders Section-->
    <section>
        <div class="bannerimg cover-image bg-background3" data-image-src="../../assets/images/banners/banner2.jpg">
            <div class="header-text mb-0">
                <div class="container">
                    <div class="text-center text-white">
                        <h1>Dashboard</h1>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/Sliders Section-->

    <!--Latest Listings-->
    <section class="sptb">
        <div class="container">
            <div class="section-title center-block text-center">
                <h2>Dernier Ajout</h2>
            </div>
            <div id="myCarousel1" class="owl-carousel owl-carousel-icons2">
                @foreach ($articles as $article)

                    <div class="item">
                        <div class="card mb-0 overflow-hidden">
                            <div class="power-ribbon power-ribbon-top-left text-warning">
                                <span class="bg-warning"><i class="fa fa-bolt"></i></span>
                            </div>
                            <div class="item-card2-img">
                                <a href="business-4.html" class="absolute-link"></a>
                                <img src="{{ $article->image }}" alt="img" class="cover-image" />
                                <div class="item-card2-icons">
                                    <a href="business-4.html" class="item-card2-icons-l"><i class="fa fa-cutlery"></i></a>
                                    <a href="#" class="item-card2-icons-r"><i class="fa fa fa-heart-o"></i></a>
                                </div>
                                <div class="blog--category">Hotel</div>
                            </div>
                            <div class="card-body pb-0">
                                <div class="item-card2">
                                    <div class="item-card2-desc">
                                        <div class="item-card2-text">
                                            <a href="business-4.html" class="text-dark">
                                                <h4 class="mb-0">Mazagan Beach Resort</h4>
                                            </a>
                                        </div>
                                        <div class="pt-3">
                                            <a href="mb-1">
                                                <p class="pb-0 pt-0 mb-2 mt-2">
                                                    <i class="fa fa-map-marker mr-2"></i>El Jadida
                                                </p>
                                            </a>
                                            <a href="mb-1">
                                                <p class="pb-0 pt-0 mb-2 mt-2">
                                                    <i class="fa fa-phone mr-2"></i>+212 658-865-965
                                                </p>
                                            </a>
                                            <p class="pb-0 pt-0 mb-2 mt-2">
                                                <i class="fa fa-clock-o mr-2"></i>10am - 9pm<a>
                                                    <span class="badge badge-success ml-2 fs-13">Ouvert</span></a>
                                            </p>
                                        </div>
                                        <p class="">
                                            Lorem ipsum dolor sit amet, quis int nostrum
                                            exercitationem
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="item-card2-footer">
                                    <div class="item-card2-footer-u">
                                        <div class="d-flex">
                                            <div class="rating-stars d-inline-flex">
                                                <input type="number" readonly="readonly" class="rating-value star"
                                                    name="rating-stars-value" value="4" />
                                                <div class="rating-stars-container">
                                                    <div class="rating-star sm">
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                    <div class="rating-star sm">
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                    <div class="rating-star sm">
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                    <div class="rating-star sm">
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                    <div class="rating-star sm">
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                </div>
                                                (25 Reviews)
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                @endforeach

            </div>
    </section>
    <!--Latest Listings-->

@endsection
