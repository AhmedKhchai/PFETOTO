@extends('layouts.layout')
@section('contentmain')
    <!--Sliders Section-->
    <section>
        <div class="banner-1 cover-image sptb-4 sptb-tab bg-background2"
            data-image-src="{{ asset('images/banners/banner6.jpg') }}">
            <div class="header-text mb-0">
                <div class="container">
                    <div class="text-center text-white">
                        <h1 class="mb-1">Trouve Ton Service</h1>
                    </div>
                    <br />
                    <div class="row">
                        <div class="col-xl-9 col-lg-12 col-md-12 d-block mx-auto">
                            <div class="search-background bg-transparent">
                                <div class="form row no-gutters">
                                    <div class="form-group col-xl-4 col-lg-3 col-md-12 mb-0">
                                        <input type="text" class="
                                                          form-control
                                                          input-lg
                                                          br-tr-md-0 br-br-md-0
                                                          keywords-input
                                                        " id="text4" placeholder="Phrase or Keywords" />
                                    </div>
                                    <div class="
                                                        form-group
                                                        col-xl-3 col-lg-3 col-md-12
                                                        select2-lg
                                                        mb-0
                                                      ">
                                        <select class="
                                                          form-control
                                                          select2-show-search
                                                          border-bottom-0
                                                          br-lg-0
                                                        " data-placeholder="Select Category">
                                            <optgroup label="Categories">
                                                <option>Select Category</option>
                                                <option value="0">All Categories</option>
                                                <option value="1">Hotels</option>
                                                <option value="2">Restaurant</option>
                                                <option value="3">Cafe</option>
                                                <option value="4">Boulangerie</option>

                                                <option value="6">Salon & Spa</option>
                                            </optgroup>
                                        </select>
                                    </div>
                                    <div class="col-xl-2 col-lg-3 col-md-12 mb-0">
                                        <a href="#" class="
                                                          btn btn-lg btn-block btn-secondary
                                                          br-tl-md-0 br-bl-md-0
                                                        ">Recherche</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /header-text -->
        </div>
    </section>
    <!--Sliders Section-->
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
                                <a href="/article/{{ $article->id }}" class="absolute-link"></a>
                                <img src="{{ $article->image }}" alt="img" class="cover-image" />
                                <div class="item-card2-icons">
                                    <a href="/article/{{ $article->id }}" class="item-card2-icons-l"><i
                                            class="fa fa-cutlery"></i></a>
                                    <a href="/article/{{ $article->id }}" class="item-card2-icons-r"><i
                                            class="fa fa fa-heart-o"></i></a>
                                </div>
                                <div class="blog--category">{{ $article->categorie }}</div>
                            </div>
                            <div class="card-body pb-0">
                                <div class="item-card2">
                                    <div class="item-card2-desc">
                                        <div class="item-card2-text">
                                            <a href="/article/{{ $article->id }}" class="text-dark">
                                                <h4 class="mb-0">{{ $article->titre }}</h4>
                                            </a>
                                        </div>
                                        <div class="pt-3">
                                            <a href="/article/{{ $article->id }}">
                                                <p class="pb-0 pt-0 mb-2 mt-2">
                                                    <i class="fa fa-map-marker mr-2"></i>{{ $article->adresse }}
                                                </p>
                                            </a>
                                            <a href="/article/{{ $article->id }}">
                                                <p class="pb-0 pt-0 mb-2 mt-2">
                                                    <i class="fa fa-phone mr-2"></i>{{ $article->phone }}
                                                </p>
                                            </a>
                                            <p class="pb-0 pt-0 mb-2 mt-2">
                                                <i class="fa fa-clock-o mr-2"></i>{{ $article->heuresouverture }} -
                                                {{ $article->heuresfermeture }}<a>
                                                    <span class="badge badge-success ml-2 fs-13">Ouvert</span></a>
                                            </p>
                                        </div>
                                        <p class="">
                                            {{ $article->description }}
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

                <div class="item">
                    <div class="card mb-0 overflow-hidden">
                        <div class="power-ribbon power-ribbon-top-left text-warning">
                            <span class="bg-warning"><i class="fa fa-bolt"></i></span>
                        </div>
                        <div class="item-card2-img">
                            <a href="business-4.html" class="absolute-link"></a>
                            <img src="{{ asset('images/products/mazagan.jpg') }}" alt="img" class="cover-image" />
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
                <div class="item">
                    <div class="card mb-0 overflow-hidden">
                        <div class="power-ribbon power-ribbon-top-left text-warning">
                            <span class="bg-warning"><i class="fa fa-bolt"></i></span>
                        </div>
                        <div class="item-card2-img">
                            <a href="business-4.html" class="absolute-link"></a>
                            <img src="{{ asset('images/products/amwaj.jpg') }}" alt="img" class="cover-image" />
                            <div class="item-card2-icons">
                                <a href="#" class="item-card2-icons-l"><i class="fa fa-home"></i></a>
                                <a href="#" class="item-card2-icons-r"><i class="fa fa fa-heart-o"></i></a>
                            </div>
                            <div class="blog--category">Hotel</div>
                        </div>
                        <div class="card-body pb-0">
                            <div class="item-card2">
                                <div class="item-card2-desc">
                                    <div class="item-card2-text">
                                        <a href="business-4.html" class="text-dark">
                                            <h4 class="mb-0">Amwaj Hotel</h4>
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
                                                <i class="fa fa-phone mr-2"></i>+63 658-965-865
                                            </p>
                                        </a>
                                        <p class="pb-0 pt-0 mb-2 mt-2">
                                            <i class="fa fa-clock-o mr-2"></i>9am - 9pm<a>
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
                                                name="rating-stars-value" value="6" />
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
                                            (27 Reviews)
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card mb-0 overflow-hidden">
                        <div class="item-card2-img">
                            <a href="business-4.html" class="absolute-link"></a>
                            <img src="{{ asset('images/products/resto/grillad/grilad.jpg') }}" alt="img"
                                class="cover-image" />
                            <div class="item-card2-icons">
                                <a href="#" class="item-card2-icons-l"><i class="fa fa-home"></i></a>
                                <a href="#" class="item-card2-icons-r"><i class="fa fa fa-heart-o"></i></a>
                            </div>
                            <div class="blog--category">Restaurant</div>
                        </div>
                        <div class="card-body pb-0">
                            <div class="item-card2">
                                <div class="item-card2-desc">
                                    <div class="item-card2-text">
                                        <a href="business-4.html" class="text-dark">
                                            <h4 class="mb-0">La Grilladiare</h4>
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
                                                <i class="fa fa-phone mr-2"></i>+63 965-865-956
                                            </p>
                                        </a>
                                        <p class="pb-0 pt-0 mb-2 mt-2">
                                            <i class="fa fa-clock-o mr-2"></i>8am - 6pm<a>
                                                <span class="badge badge-danger ml-2 fs-13">Fermé</span></a>
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
                                                name="rating-stars-value" value="5" />
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
                                            (75 Reviews)
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Latest Listings-->

    <!--Location-->
    <section class="sptb bg-white">
        <div class="container">
            <div class="section-title center-block text-center">
                <h2>Meilleurs Notes</h2>
            </div>
            <div class="row">
                <div class="col-sm-12 col-lg-3 col-md-6">
                    <div class="item-card overflow-hidden">
                        <div class="item-card-desc">
                            <a href="business-4.html"></a>
                            <div class="card text-center overflow-hidden mb-lg-0">
                                <div class="card-img">
                                    <img src="{{ asset('images/products/mazagan.jpg') }}" alt="img"
                                        class="cover-image" />
                                </div>
                                <div class="item-card-text text-left">
                                    <div class="rating-stars">
                                        <div class="rating-stars-container text-left">
                                            <div class="rating-star sm is--active fs-12">
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <div class="rating-star sm is--active fs-12">
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <div class="rating-star sm is--active fs-12">
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <div class="rating-star sm is--active fs-12">
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <div class="rating-star sm is--active fs-12">
                                                <i class="fa fa-star"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <h4 class="mb-2">Mazagan Beach Resort</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-lg-3 col-md-6">
                    <div class="item-card overflow-hidden">
                        <div class="item-card-desc">
                            <a href="business-4.html"></a>
                            <div class="card text-center overflow-hidden mb-lg-0">
                                <div class="card-img">
                                    <img src="{{ asset('images/products/amwaj.jpg') }}" alt="img" class="cover-image" />
                                </div>
                                <div class="item-card-text text-left">
                                    <div class="rating-stars">
                                        <div class="rating-stars-container text-left">
                                            <div class="rating-star sm is--active fs-12">
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <div class="rating-star sm is--active fs-12">
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <div class="rating-star sm is--active fs-12">
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <div class="rating-star sm is--active fs-12">
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <div class="rating-star sm is--active fs-12">
                                                <i class="fa fa-star"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <h4 class="mb-2">Hotel Amwaj</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-lg-3 col-md-6">
                    <div class="item-card overflow-hidden">
                        <div class="item-card-desc">
                            <a href="business-4.html"></a>
                            <div class="card text-center overflow-hidden mb-md-0">
                                <div class="card-img">
                                    <img src="{{ asset('images/products/resto/grillad/grilad.jpg') }}" alt="img"
                                        class="cover-image" />
                                </div>
                                <div class="item-card-text text-left">
                                    <div class="rating-stars">
                                        <div class="rating-stars-container text-left">
                                            <div class="rating-star sm is--active fs-12">
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <div class="rating-star sm is--active fs-12">
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <div class="rating-star sm is--active fs-12">
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <div class="rating-star sm is--active fs-12">
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <div class="rating-star sm is--active fs-12">
                                                <i class="fa fa-star"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <h4 class="mb-2">La Grilladiare</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/Location-->

    <!--Our Customers Says-->
    <section class="sptb position-relative">
        <div class="container">
            <div class="section-title center-block text-center">
                <h1 class="position-relative">Avis de Nos TESTEURS</h1>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div id="myCarousel" class="owl-carousel testimonial-owl-carousel">
                        <div class="item text-center">
                            <div class="row">
                                <div class="col-xl-8 col-md-12 d-block mx-auto">
                                    <div class="">
                                        <div class="owl-controls clickable mt-3 mb-5">
                                            <div class="owl-pagination">
                                                <div class="owl-page active">
                                                    <span class=""><img src="{{ asset('images/faces/21.jpg') }}"
                                                            style="border-radius: 50%" /></span>
                                                </div>
                                                <div class="owl-page">
                                                    <span class="">
                                                        <img src="{{ asset('images/faces/4.jpg') }}"
                                                            style="border-radius: 50%" />
                                                    </span>
                                                </div>
                                                <div class="owl-page">
                                                    <span class="">
                                                        <img src="{{ asset('images/faces/a3.jpg') }}"
                                                            style="border-radius: 50%" />
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <p class="">
                                            <i class="fa fa-quote-left"></i> Lorem ipsum dolor sit
                                            amet, consectetur adipisicing elit. Quod eos id officiis
                                            hic tenetur quae quaerat ad velit ab. Lorem ipsum dolor
                                            sit amet, consectetur adipisicing elit. Dolore cum
                                            accusamus eveniet molestias voluptatum inventore
                                            laboriosam labore sit, aspernatur praesentium iste
                                            impedit quidem dolor veniam.
                                        </p>
                                        <h3 class="title">Elizabeth</h3>
                                        <span class="post">Testeuse</span>
                                        <div class="rating-stars">
                                            <input type="number" readonly="readonly" class="rating-value star"
                                                name="rating-stars-value" value="4" />
                                            <div class="rating-stars-container">
                                                <div class="rating-star sm is--active">
                                                    <i class="fa fa-star"></i>
                                                </div>
                                                <div class="rating-star sm is--active">
                                                    <i class="fa fa-star"></i>
                                                </div>
                                                <div class="rating-star sm is--active">
                                                    <i class="fa fa-star"></i>
                                                </div>
                                                <div class="rating-star sm">
                                                    <i class="fa fa-star"></i>
                                                </div>
                                                <div class="rating-star sm">
                                                    <i class="fa fa-star"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item text-center">
                            <div class="row">
                                <div class="col-xl-8 col-md-12 d-block mx-auto">
                                    <div class="">
                                        <div class="owl-controls clickable mt-3 mb-5">
                                            <div class="owl-pagination">
                                                <div class="owl-page">
                                                    <span class="">
                                                        <img src="{{ asset('images/faces/21.jpg') }}"
                                                            style="border-radius: 50%" />
                                                    </span>
                                                </div>
                                                <div class="owl-page active">
                                                    <span class="">
                                                        <img src="{{ asset('images/faces/4.jpg') }}"
                                                            style="border-radius: 50%" />
                                                    </span>
                                                </div>
                                                <div class="owl-page">
                                                    <span class="">
                                                        <img src="{{ asset('images/faces/a3.jpg') }}"
                                                            style="border-radius: 50%" />
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <p class="">
                                            <i class="fa fa-quote-left"></i> Nemo enim ipsam
                                            voluptatem quia voluptas sit aspernatur aut odit aut
                                            fugit, sed quia consequuntur magni dolores eos qui
                                            ratione voluptatem sequi nesciunt. Neque porro quisquam
                                            est, qui dolorem ipsum quia dolor sit amet, consectetur,
                                            adipisci velit, sed quia non numquam eius modi tempora
                                            incidunt ut labore.
                                        </p>
                                        <div class="testimonia-data">
                                            <h3 class="title">williamson</h3>
                                            <span class="post">Testeur</span>
                                            <div class="rating-stars">
                                                <input type="number" readonly="readonly" class="rating-value star"
                                                    name="rating-stars-value" value="3" />
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
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item text-center">
                            <div class="row">
                                <div class="col-xl-8 col-md-12 d-block mx-auto">
                                    <div class="">
                                        <div class="owl-controls clickable mb-5 mt-3">
                                            <div class="owl-pagination">
                                                <div class="owl-page">
                                                    <span class="">
                                                        <img src="{{ asset('images/faces/21.jpg') }}"
                                                            style="border-radius: 50%" />
                                                    </span>
                                                </div>
                                                <div class="owl-page">
                                                    <span class="">
                                                        <img src="{{ asset('images/faces/4.jpg') }}"
                                                            style="border-radius: 50%" />
                                                    </span>
                                                </div>
                                                <div class="owl-page active">
                                                    <span class="">
                                                        <img src="{{ asset('images/faces/a3.jpg') }}"
                                                            style="border-radius: 50%" />
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <p class="">
                                            <i class="fa fa-quote-left"></i> Duis aute irure dolor
                                            in reprehenderit in voluptate velit esse cillum dolore
                                            eu fugiat nulla pariatur. Excepteur sint occaecat
                                            cupidatat non proident, sunt in culpa qui officia
                                            deserunt mollit anim id est laborum. Sed ut perspiciatis
                                            unde omnis iste natus error sit voluptatem accusantium
                                            doloremque laudantium.
                                        </p>
                                        <div class="testimonia-data">
                                            <h3 class="title">Sophie Carr</h3>
                                            <span class="post">Testeuse</span>
                                            <div class="rating-stars">
                                                <input type="number" readonly="readonly" class="rating-value star"
                                                    name="rating-stars-value" value="3" />
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
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/Our Customers Says-->

    <!--Section-->
    <section class="sptb cover-image patter-image" data-image-src="{{ asset('images/pngs/7.png') }}">
        <div class="container">
            <div class="section-title center-block text-center">
                <h2>Telecharger Notre Application (Soon)</h2>
                <p>
                    Mauris ut cursus nunc. Morbi eleifend, ligula at consectetur
                    vehicula
                </p>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="text-center text-wrap">
                        <div class="btn-list">
                            <a href="#" class="btn btn-secondary btn-lg mb-sm-0"><i class="fa fa-apple fa-1x mr-2"></i>
                                App Store</a>
                            <a href="#" class="btn btn-primary btn-lg mb-sm-0"><i class="fa fa-android fa-1x mr-2"></i>
                                Google Play</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/Section-->

    <!-- Newsletter-->
    <section class="sptb border-top">
        <div class="container">
            <div class="section-title center-block text-center">
                <h2>S'inscrire a notre Newsletter</h2>
                <p>
                    Mauris ut cursus nunc. Morbi eleifend, ligula at consectetur
                    vehicula
                </p>
            </div>
            <div class="row">
                <div class="col-lg-10 col-xl-8 col-md-12 mx-auto d-block text-center">
                    <div class="input-group sub-input mt-0">
                        <input type="text" class="form-control input-lg" placeholder="Enter your Email" />
                        <div class="input-group-append">
                            <button type="button" class="btn btn-secondary btn-lg br-tr-3 br-br-3 pl-5 pr-5">
                                Subscribe
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/Newsletter-->


@endsection
