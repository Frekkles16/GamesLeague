$('#ModalAgregar').modal('hide');
if ($('.modal-backdrop').is(':visible')) {
    $('body').removeClass('modal-open');
    $('.modal-backdrop').remove();
};