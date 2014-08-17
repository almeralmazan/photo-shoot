var base_url = window.location.origin;

$( "#submit-reserve" ).click(function( event ) {

    event.preventDefault();

    var form = $("#form-reserve").serializeArray();

    $.ajax({
        url: base_url + '/photo/go_reserve',
        data: form,
        type: 'POST',
        dataType: 'json'
    })
        .done( function(data) {
            if (data.success) {
                toastr.success('Thank you for choosing Printshoppe Photography, we will contact soon as we read your request');
                $("#name").val('');
                $("#email").val('');
                $("#contact").val('');
                $("#message").val('');
                $("#date").val('');
            } else {
                $.each(data, function( index, value ) {
                    toastr.error(value);
                });
            }

        });
});

$( "#submit-contact" ).click(function( econt ) {

    econt.preventDefault();

    var formcon = $("#form-contacts").serializeArray();

    $.ajax({
        url: base_url + '/photo/send_contact',
        data: formcon,
        type: 'POST',
        dataType: 'json'
    }).done( function(data){
        if (data.success) {
            toastr.success('Thank you for choosing Printshoppe Photography');
        } else {
            $.each(data, function( index, value ) {
                toastr.error(value);
            });
        }

    });

});

$( "#btn-apply" ).click(function( ev ) {

    ev.preventDefault();

    var form123 = $("#form-apply").serializeArray();

    $.ajax({
        url: base_url + '/photo/go_apply',
        data: form123,
        type: 'POST',
        dataType: 'json'
    })
        .done( function(data) {
            if (data.success) {
                toastr.success('Thank you for choosing Printshoppe Photography, we will contact soon as we read your request');
                $("#name").val('');
                $("#email").val('');
                $("#contact").val('');
                $("#message").val('');
                $("#date").val('');
            } else {
                $.each(data, function( index, value ) {
                    toastr.error(value);
                });
            }

        });
});

$( "#submit" ).click(function( event ) {

  event.preventDefault();

  var form = $("#form-login").serializeArray();

  $.ajax({
  	url: base_url + '/photo/post_login',
  	data: form,
  	type: 'POST',
  	dataType: 'json'
  }).done( function(data){
  	if (!data.success ) {
  		$("#message").html(data.message).addClass('alert alert-danger');
  	}else{
  		window.location.replace(data.url);
  	}
  });
});

//$(function() {
//    $('.file-input').imgPreview();
//});


$('#go_check').click(function () {
    $('.id_check').prop('checked', this.checked);
});

$('.id_check').change(function () {
    var check = ($('.id_check').filter(":checked").length == $('.id_check').length);
    $('#go_check').prop("checked", check);
});




