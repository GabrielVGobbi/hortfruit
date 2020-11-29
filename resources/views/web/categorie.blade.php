@extends('web.index')

@section('content')
    <div class="product m-t-30">
        <div class="row" style="background-color: {{ $categorie->color }}; height: 62px;width: 100%;">
            <div class="col-lg-12 col-sm-10" style="padding: 12px;">
                <div class="container-fluid">
                    <h4 class="heading__secondary" style="color:#fff;    font-weight: 200;font-size: 31px;">
                        {{ $categorie->name }}
                    </h4>
                </div>
            </div>
        </div>
        <div class="container-fluid m-t-10">
            <div class="row">
                <div class="col-12">
                    <div class="default-slider default-slider--hover-bg-red product-default-slider">
                        <div class="product-default-slider-4grid-2rows gap__col--30 gap__row--40">
                            @foreach ($products as $product)

                                <div class="product__box product__default--single text-center slick-slide slick-current slick-active"
                                    data-slick-index="0" aria-hidden="false" tabindex="0">
                                    <div class="product__img-box  pos-relative">
                                        <a href="product-single-default.html" class="product__img--link"
                                            tabindex="0">
                                            <img class="product__img img-fluid"
                                                src="{{ asset('storage/' . $product->img_url) }}" alt="">
                                        </a>
                                        <ul class="product__action--link pos-absolute">
                                            <li>
                                                <a href="#modalAddCart" data-toggle="modal" tabindex="0"><i
                                                        class="icon-shopping-cart"></i>
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
@endsection
