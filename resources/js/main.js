window.toastr = require('toastr');

jQuery(function () {
    $('[data-toggle="tooltip"]').tooltip()

    $('.btn-delete').on('click', function () {
        var href = $(this).data('href');
        $('#modal-delete').modal('show');
        $('#modal-confirm').on('click', function () {
            window.location.href = href;
        })
    });
});
