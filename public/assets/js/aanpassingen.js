$.ajaxSetup({
        headers: {
            'X-CSRF-Token': $('meta[name="csrf_token"]').attr('content')
        }
    });
var data = {};
$('#prijs').val('35.00');
  console.log('script herkent');
  function checkCoupon(){
    data['coupon'] = $("#coupon").val();
    $.ajax({
     url: '/api/getcoupon',
     data: data,
     dataType: 'json',
     error: function() {
        $('#coupon').removeClass('form-control-success');
        $('#divcoupon').removeClass('has-success');
        $('#coupon').addClass('form-control-danger');
        $('#divcoupon').addClass('has-danger');
        $('#couponfeedback').text('De coupon blijkt niet te werken, probeer opnieuw met een andere');
     },
      success: function(data) {
       console.log('Het werkt');
          $('#coupon').removeClass('form-control-danger');
          $('#divcoupon').removeClass('has-danger');
          $('#coupon').addClass('form-control-success');
          $('#divcoupon').addClass('has-success');
          $('#couponfeedback').text('');
          $('#prijsAankoop').html('€ 30,00');
          $('#prijs').val('30.00');
     },
     type: 'POST'
  });     // The function returns the product of p1 and p2
};
