const { data } = require('jquery');

window.$ = window.jQuery = require('jquery');

let cart = [];
let itens = [];

if (localStorage.getItem('cart')) {
    cart = JSON.parse(localStorage.getItem('cart'));
    itens = cart[0].itens
} else {
    cart = [{
        phone: '',
        itens: itens
    }];
    localStorage.setItem('cart', JSON.stringify(cart));
}

jQuery(function () {
    //itensCart();

    $('.addCart').on('click', function () {
        var id = $(this).attr('data-id');
        updatedCart(id);
    })
    $('.cart--remove-item').on('click', function () {
        var id = $(this).attr('data-id');
        removeItem(id);
    })

});

function updatedCart(v) {
    var id_product = v

    var data = $.grep(itens, function (e) {
        return e.productId == v;
    });

    console.log(data);

    if (data.length == 0) {
        fetch(base + 'api/products/' + id_product)
            .then((r) => r.json())
            .then((data) => {
                itens.push(
                    {
                        productId: data.id,
                        image: data.img_url,
                        price: data.price,
                        name: data.name,
                        qnt: '1'
                    }
                );
                itensCart();
            });
    } else {

        console.log(itens);
        console.log(data);


    }

}

function itensCart() {
    var options = '';

    let subtotal = 0;
    let delivery = 10;
    let desconto = 0;
    let total = 0;
    let itensTotal = 0;

    if (cart[0].itens.length > 0) {
        for (let i in cart[0].itens) {

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

            subtotal += parseInt(cart[0].itens[i].price)
        }
        itensTotal = cart[0].itens.length;
        $('.cart--itens').html(options);
    } else {
        $('.cart--itens').html('<li class="text-center"> CARRINHO VAZIO </li>')
    }

    total = subtotal + delivery;

    $('.cart--qnt').html(itensTotal);

    $('.cart--subtotal').html('R$ ' + subtotal);
    $('.cart--delivery').html('R$ ' + delivery);
    $('.cart--total').html('R$ ' + total);

    localStorage.setItem('cart', JSON.stringify(cart));

}

function removeItem(productId) {

    var data = $.grep(itens, function (e) {
        return e.productId != productId;
    });

    cart[0].itens = data

    localStorage.setItem('cart', JSON.stringify(cart));

    itensCart();
}
