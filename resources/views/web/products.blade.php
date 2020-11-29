@extends('web.index')

@section('content')



    <section id="products">
        <div
            class="hero slider-dot-fix slider-dot slider-dot-fix slider-dot--center slider-dot-size--medium slider-dot-circle  slider-dot-style--fill slider-dot-style--fill-white-active-green dot-gap__X--10"
            style="height: 100vh;">
            <div class="hero-slider">
                <div class="hero__content">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 col-lg-8">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- <div class="banner m-t-30 m-b-30">
                                                                        <div class="container-fluid">
                                                                            <div class="row">
                                                                                <div class="col-md-6 col-12">
                                                                                    <div class="banner__box">
                                                                                        <div class="banner__box--single banner__box--single-text-style-1 pos-relative">
                                                                                            <a href="product-single-default.html" class="banner__link">
                                                                                                <img src="{{ asset('img/banner/size-wide/banner-home-1-img-1-wide.jpg') }}" alt=""
                                                                                                    class="banner__img">
                                                                                            </a>
                                                                                            <div class="banner__content banner__content--center pos-absolute"></div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-6 col-12">
                                                                                    <div class="banner__box">
                                                                                        <div class="banner__box--single banner__box--single-text-style-1 pos-relative">
                                                                                            <a href="product-single-default.html" class="banner__link">
                                                                                                <img src="{{ asset('img/banner/size-wide/banner-home-1-img-2-wide.jpg') }}" alt=""
                                                                                                    class="banner__img">
                                                                                            </a>
                                                                                            <div class="banner__content banner__content--center pos-absolute"></div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div> -->
        @foreach ($categories_products as $categories)
            @if (count($categories['products']) > 0)
                <div class="product">
                    <div class="row" style="background-color: {{ $categories['color'] }}; height: 62px;width: 100%;">
                        <div class="col-lg-12 col-sm-10" style="padding: 12px;">
                            <div class="container-fluid">
                                <h4 class="heading__secondary" style="color:#fff;    font-weight: 200;font-size: 31px;">
                                    {{ $categories['categorie_name'] }}
                                </h4>
                            </div>
                        </div>
                    </div>
                    <div class="container-fluid m-t-10">
                        <div class="row">
                            <div class="col-12">
                                <div class="default-slider default-slider--hover-bg-red product-default-slider">
                                    <div class="product-default-slider-4grid-1rows gap__col--30 gap__row--40 pd-10">
                                        @foreach ($categories['products'] as $product)
                                            <div class="product__box product__default--single text-center slick-slide slick-current slick-active "
                                                data-slick-index="0" aria-hidden="false" tabindex="0">
                                                <div class="product__img-box  pos-relative">
                                                    <img class="product__img img-fluid"
                                                        src="{{ asset('storage/' . $product->img_url) }}" alt="">
                                                    <ul class="product__action--link pos-absolute">
                                                        <li>
                                                            <a href="javascript:void(0)"><i data-id="{{ $product->id }}" class="icon-shopping-cart cart--addItem"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a type="button" onclick="modalQuickView('{{ $product->id }}')">
                                                                <i class="icon-eye" style="color:#fff"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="product__content m-t-20">
                                                    <a href="product-single-default.html" style="display: flex;"
                                                        class="product__link" tabindex="0">{{ $product['name'] }}</a>
                                                    <div class="product__price m-t-5" style="display: flex;">
                                                        <span class="product__price" style="font-size: 29px;">
                                                            <!-- <del>R$ {{ $product->price }}</del>-->
                                                            R$ {{ number_format($product->price, 2, ',', '.') }}

                                                            <span style="font-size: 15px;">
                                                                / {{ $product->type }}
                                                            </span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
        @endforeach

        <div class="modal fade" id="modalQuickView" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog  modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col text-right">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true"> <i class="fal fa-times"></i></span>
                                    </button>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="product-gallery-box m-b-60">
                                        <div class="modal-product-image--large">
                                            <img class="img-fluid product--img" src="" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="product-details-box">
                                        <h5 class="title title--normal m-b-20 product--name"></h5>
                                        <div class="product__price">
                                            <span class="product__price-del product--price_formater" style="font-size: 30px;"></span>
                                        </div>
                                        <div class="product-var p-t-30">
                                            <div
                                                class="product-quantity product-var__item d-flex align-items-center flex-wrap">
                                                <span class="product-var__text"></span>
                                                <div
                                                    class="quantity-wrapper d-flex align-items-center mr--30 mr-xs--0 mb-xs--30">
                                                    <div class="quantity">
                                                        <input type="number" class="quantity-input" name="qty" id="qty"
                                                            value="1" min="1">
                                                        <a href="#modalAddCart" data-toggle="modal" data-dismiss="modal" style="margin-left: 78px;width: 221px;"
                                                            class="btn btn--long btn--radius-tiny btn--green btn--green-hover-black btn--uppercase btn--weight m-r-20">Adicionar ao carrinho</a>
                                                    </div>
                                                    <div class="product-var__item"></div>
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

    </main>

@endsection
