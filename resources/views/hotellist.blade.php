@extends('layouts.layout')
@section('contentmain')
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

            </div>
        </div>
    </section>
    <!--Latest Listings-->
@endsection
