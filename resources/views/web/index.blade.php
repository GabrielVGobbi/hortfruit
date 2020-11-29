<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <title>Pé | HortFruit </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" href="{{ asset('img/favicon.png') }}" type="image/png">

    <script src="{{ asset('pages/web/js/cart.js') }}"></script>

    <link rel="stylesheet" href="{{ asset('css/vendor/jquery-ui.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/vendor/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ asset('css/vendor/plaza-icon.css') }}">
    <link rel="stylesheet" href="{{ asset('css/vendor/bootstrap.min.css') }}">

    <link rel="stylesheet" href="{{ asset('css/vendor/vendor.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/plugin/plugins.min.css') }}" />

    <link rel="stylesheet" href="{{ asset('sass/main.css') }}">

    <script> var base = `{{ env('APP_BASE') }}`; </script>
</head>

<body>
    <header>

        <div class="header__center sticky-header p-tb-10">
            <div class="container">
                <div class="row">
                    <div class="col-12 d-flex align-content-center justify-content-center">
                        <!-- Start Logo
                        <div class="header__logo">
                            <a href="index.html" class="header__logo-link img-responsive">
                                <img class="header__logo-img img-fluid" src="{{ asset('img/logo/logo.png') }}" alt="">
                            </a>
                        </div>
                        -->
                        <div class="header-menu">
                            <nav>
                                <ul class="header__nav">
                                    <li class="header__nav-item pos-relative">
                                        <a href="{{ route('categorias', 'frutas') }}" class="header__nav-link">FRUTAS</a>
                                    </li>

                                    <li class="header__nav-item pos-relative">
                                        <a href="{{ route('categorias', 'verduras') }}" class="header__nav-link">VERDURAS</a>
                                    </li>

                                    <li class="header__nav-item pos-relative">
                                        <a href="{{ route('categorias', 'legumes') }}" class="header__nav-link">LEGUMES</a>
                                    </li>

                                    <li class="header__nav-item pos-relative">
                                        <a href="{{ route('categorias', 'organicos') }}" class="header__nav-link">ORGÂNICOS</a>
                                    </li>

                                    <li class="header__nav-item pos-relative">
                                        <a href="#" class="header__nav-link">EMPÓRIO E MERCEARIA</a>
                                    </li>

                                    <li class="header__nav-item pos-relative">
                                        <a href="#" class="header__nav-link">ASSINATURAS</a>
                                    </li>

                                    <li class="header__nav-item pos-relative">
                                        <a href="#" class="header__nav-link">OUTROS</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <!-- <ul class="header__user-action-icon">

                            <li>
                                <a href="my-account.html">
                                    <i class="icon-users"></i>
                                </a>
                            </li>
                            <li>
                                <a href="wishlist.html">
                                    <i class="icon-heart"></i>
                                    <span class="item-count pos-absolute">3</span>
                                </a>
                            </li>
                            <li>
                                <a href="#offcanvas-add-cart__box" class="offcanvas-toggle">
                                    <i class="icon-shopping-cart"></i>
                                    <span class="wishlist-item-count pos-absolute">3</span>
                                </a>
                            </li>
                        </ul> -->
                    </div>

                    <div class="row cover-container d-flex mx-auto flex-column m-t-20" style="max-width: 55em;">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="logo">
                                    <img src="" alt="logo" class="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <form class="header-search" action="#" method="post">
                                    <div class="header-search__content pos-relative">
                                        <input type="search" name="header-search" placeholder="Buscar.." required="">
                                        <button class="pos-absolute" type="submit"><i class="icon-search"></i></button>
                                    </div>
                                </form>
                            </div>

                            <div class="col-md-3 ">
                                <ul class="header__user-action-icon" style="float: right;">
                                    <li>
                                        <a href="my-account.html">
                                            <i class="icon-users"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#offcanvas-add-cart__box" class="offcanvas-toggle">
                                            <i class="icon-shopping-cart"></i>
                                            <span class="wishlist-item-count pos-absolute cart--qnt"></span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <main role="main" id="main-container" class="main-container">
        @yield('content')
    </main>

    <footer class="footer">
        <div class="container">
            <div class="footer__top">
                <div class="row">
                    <div class="col-lg-4 col-md-5">
                        <div class="footer__about">
                            <div class="footer__logo">
                                <a href="index.html" class="footer__logo-link">
                                    <img src="#" alt="logo" class="footer__logo-img">
                                </a>
                            </div>
                            <ul class="footer__address">
                                <li class="footer__address-item"><i class="fa fa-home"></i>Endereço</li>
                                <li class="footer__address-item"><i class="fa fa-phone-alt"></i>Telefone</li>
                                <li class="footer__address-item"><i class="fa fa-envelope"></i>pedehortfruit@email.com
                                </li>
                            </ul>
                            <ul class="footer__social-nav m-t-40" style="margin-top:40px">
                                <li class="footer__social-list"><a href="#" class="footer__social-link"><i
                                            class="fab fa-facebook-f"></i></a></li>
                                <li class="footer__social-list"><a href="#" class="footer__social-link"><i
                                            class="fab fa-instagram"></i></a></li>

                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-6 col-12">
                        <div class="footer__menu">
                            <h4 class="footer__nav-title footer__nav-title--dash footer__nav-title--dash-red">
                                INFORMAÇÃO</h4>
                            <ul class="footer__nav">
                                <li class="footer__list"><a href="" class="footer__link">Delivery</a></li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="footer__bottom">
                <div class="row">
                    <div class="col-lg-8 col-md-6 col-12">

                        <div class="footer__copyright-text">
                            <p>Copyright &copy; <a href="https://hasthemes.com/"></a>. All Rights Reserved</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12">

                        <div class="footer__payment">
                            <a href="#" class="footer__payment-link">
                                <img src="{{ asset('img/company-logo/payment.png') }}" alt=""
                                    class="footer__payment-img">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <button class="material-scrolltop" type="button"></button>

    <div id="offcanvas-add-cart__box" class="offcanvas offcanvas-cart offcanvas-add-cart">
        <div class="offcanvas__top">
            <span class="offcanvas__top-text"><i class="icon-shopping-cart"></i>Carrinho</span>
            <button class="offcanvas-close"><i class="fal fa-times"></i></button>
        </div>
        <!-- Start Add Cart Item Box-->
        <ul class="offcanvas-add-cart__menu cart--itens">
            <!-- <li class="offcanvas-add-cart__list pos-relative d-flex align-items-center justify-content-between ">
                <div class="offcanvas-add-cart__content d-flex align-items-start m-r-10">
                    <div class="offcanvas-add-cart__img-box pos-relative">
                        <a href="product-single-default.html" class="offcanvas-add-cart__img-link img-responsive"><img
                                src="{{ asset('img/product/size-small/product-home-1-img-1.jpg') }}" alt=""
                                class="add-cart__img"></a>
                        <span class="offcanvas-add-cart__item-count pos-absolute">2x</span>
                    </div>
                    <div class="offcanvas-add-cart__detail">
                        <a href="product-single-default.html" class="offcanvas-add-cart__link">Lucky Wooden Elephant</a>
                        <span class="offcanvas-add-cart__price">$29.00</span>
                        <span class="offcanvas-add-cart__info">Dimension: 40x60cm</span>
                    </div>
                </div>
                <button class="offcanvas-add-cart__item-dismiss"><i class="fal fa-times"></i></button>
            </li>-->
        </ul>
        <div class="offcanvas-add-cart__checkout-box-bottom">
            <ul class="offcanvas-add-cart__checkout-info">
                <li class="offcanvas-add-cart__checkout-list">
                    <span class="offcanvas-add-cart__checkout-left-info">Subtotal</span>
                    <span class="offcanvas-add-cart__checkout-right-info cart--subtotal"></span>
                </li>

                <li class="offcanvas-add-cart__checkout-list">
                    <span class="offcanvas-add-cart__checkout-left-info">Entrega</span>
                    <span class="offcanvas-add-cart__checkout-right-info cart--delivery"></span>
                </li>

                <li class="offcanvas-add-cart__checkout-list">
                    <span class="offcanvas-add-cart__checkout-left-info">Total</span>
                    <span class="offcanvas-add-cart__checkout-right-info cart--total"></span>
                </li>
            </ul>

            <div class="offcanvas-add-cart__btn-checkout">
                <a href="checkout.html"
                    class="btn btn--block btn--radius btn--box btn--black btn--black-hover-green btn--large btn--uppercase font--bold">Checkout</a>
            </div>
        </div>
    </div>

    <script src="{{ asset('js/vendor/jquery-3.5.1.min.js') }}"></script>
    <script src="{{ asset('js/vendor/modernizr-3.7.1.min.js') }}"></script>
    <script src="{{ asset('js/vendor/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('js/vendor/bootstrap.bundle.min.js') }}"></script>

    <script src="{{ asset('js/plugin/slick.min.js') }}"></script>
    <script src="{{ asset('js/plugin/jquery.countdown.min.js') }}"></script>
    <script src="{{ asset('js/plugin/material-scrolltop.js') }}"></script>
    <script src="{{ asset('js/plugin/price_range_script.js') }}"></script>
    <script src="{{ asset('js/plugin/in-number.js') }}"></script>
    <script src="{{ asset('js/plugin/jquery.elevateZoom-3.0.8.min.js') }}"></script>
    <script src="{{ asset('js/plugin/venobox.min.js') }}"></script>
    <script src="{{ asset('js/plugin/jquery.waypoints.js') }}"></script>
    <script src="{{ asset('js/plugin/jquery.lineProgressbar.js') }}"></script>

    <script src="{{ asset('js/main.js') }}"></script>

    <script>
        const CART = {
            KEY: 'itens',
            contents: [],
            init() {
                let _contents = localStorage.getItem(CART.KEY);
                if (_contents) {
                    CART.contents = JSON.parse(_contents);
                    CART.sync();
                } else {
                    CART.contents = [];
                    CART.sync();
                }
            },
            async sync() {
                let _cart = JSON.stringify(CART.contents);
                await localStorage.setItem(CART.KEY, _cart);
            },
            find(id) {
                let match = CART.contents.filter(item => {
                    if (item.id == id)
                        return true;
                });
                if (match && match[0])
                    return match[0];
            },
            add(id) {
                if (CART.find(id)) {
                    CART.increase(id, 1);
                } else {
                    fetch(base + 'api/products/' + id)
                        .then((r) => r.json())
                        .then((data) => {
                            let obj = {
                                id: data.id,
                                title: data.name,
                                qty: 1,
                                itemPrice: data.price,
                                image: data.img_url
                            };
                            CART.contents.push(obj);
                            CART.sync();
                            showCart();
                        });

                }
            },
            increase(id, qty = 1) {
                //increase the quantity of an item in the cart
                CART.contents = CART.contents.map(item => {
                    if (item.id === id)
                        item.qty = item.qty + qty;
                    return item;
                });
                //update localStorage
                CART.sync()
                showCart();
            },
            reduce(id, qty = 1) {
                //reduce the quantity of an item in the cart
                CART.contents = CART.contents.map(item => {
                    if (item.id === id)
                        item.qty = item.qty - qty;
                    return item;
                });
                CART.contents.forEach(async item => {
                    if (item.id === id && item.qty === 0)
                        await CART.remove(id);
                });
                //update localStorage
                CART.sync()
                showCart();
            },
            remove(id) {
                //remove an item entirely from CART.contents based on its id
                CART.contents = CART.contents.filter(item => {
                    if (item.id !== id)
                        return true;
                });
                //update localStorage
                CART.sync()
                showCart();
            },
            empty() {
                //empty whole cart
                CART.contents = [];
                //update localStorage
                CART.sync()
            },
            sort(field = 'title') {
                //sort by field - title, price
                //return a sorted shallow copy of the CART.contents array
                let sorted = CART.contents.sort((a, b) => {
                    if (a[field] > b[field]) {
                        return 1;
                    } else if (a[field] < a[field]) {
                        return -1;
                    } else {
                        return 0;
                    }
                });
                return sorted;
                //NO impact on localStorage
            },
            logContents(prefix) {
                console.log(prefix, CART.contents)
            }
        };

        document.addEventListener('DOMContentLoaded', () => {
            var elements = document.getElementsByClassName("cart--addItem");

            for (var i = 0; i < elements.length; i++) {
                elements[i].addEventListener('click', addItem);
            }

            CART.init();

            showCart();


        });

        function showCart() {
            let s = CART.sort('qty');
            console.log(s);
            var options = '';
            let subtotal = 0;
            let delivery = 10;

            s.forEach(item => {
                options += '<li class="offcanvas-add-cart__list pos-relative d-flex align-items-center justify-content-between ">'
                options += '    <div class="offcanvas-add-cart__content d-flex align-items-start m-r-10">'
                options += '        <div class="offcanvas-add-cart__img-box pos-relative" style="width:50%">'
                options += '            <a href="product-single-default.html" class="offcanvas-add-cart__img-link img-responsive"><img'
                options += '                    src="' + base + 'storage/' + item.image + '" alt=""'
                options += '                    class="add-cart__img"></a>'
                options += '            <span class="offcanvas-add-cart__item-count pos-absolute">' + item.qty + 'x</span>'
                options += '        </div>'
                options += '        <div class="offcanvas-add-cart__detail">'
                options += '            <a href="product-single-default.html" class="offcanvas-add-cart__link">' + item.title + '</a>'
                options += '            <span class="offcanvas-add-cart__price">R$ ' + item.itemPrice * item.qty + '</span>'
                options += '            <span class="offcanvas-add-cart__info"></span>'
                options += '            <div class="quantity controls">'
                options += '                <input type="number" class="quantity-input" name="qty" id="qty" value="' + item.qty + '" min="1">'
                options += '                <div data-id="' + item.id + '" class="dec qtybutton">-</div>'
                options += '                <div data-id="' + item.id + '" class="inc qtybutton">+</div>'
                options += '            </div>'
                options += '        </div>'
                options += '    </div>'
                options += '</li>'

                subtotal += parseInt(item.itemPrice) * item.qty
            })

            $('.cart--itens').html(options);

            var elements = document.getElementsByClassName("dec");

            for (var i = 0; i < elements.length; i++) {
                elements[i].addEventListener('click', decrementCart);
            }

            var elements = document.getElementsByClassName("inc");

            for (var i = 0; i < elements.length; i++) {
                elements[i].addEventListener('click', incrementCart);
            }

            total = subtotal + delivery;

            $('.cart--qnt').html(s.length);

            $('.cart--subtotal').html('R$ ' + subtotal);
            $('.cart--delivery').html('R$ ' + delivery);
            $('.cart--total').html('R$ ' + total);
        }

        function incrementCart(ev) {
            ev.preventDefault();
            let id = parseInt(ev.target.getAttribute('data-id'));
            CART.increase(id, 1);
            let controls = ev.target.parentElement;
            let qty = controls.querySelector('input:nth-child(1)');
            let item = CART.find(id);
            if (item) {
                qty.textContent = item.qty;
            } else {
                document.getElementById('cart').removeChild(controls.parentElement);
            }
        }

        function decrementCart(ev) {
            ev.preventDefault();
            let id = parseInt(ev.target.getAttribute('data-id'));
            CART.reduce(id, 1);
            let controls = ev.target.parentElement;
            let qty = controls.querySelector('input:nth-child(1)');
            let item = CART.find(id);
            if (item) {
                qty.textContent = item.qty;
            } else {
                document.getElementById('cart').removeChild(controls.parentElement);
            }
        }

        function addItem(ev) {
            ev.preventDefault();
            let id = parseInt(ev.target.getAttribute('data-id'));
            CART.add(id, 1);
            showCart();
        }

        function errorMessage(err) {
            //display the error message to the user
            console.error(err);
        }

    </script>


</body>

</html>
