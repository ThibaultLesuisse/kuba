$.ajaxSetup({
        headers: {
            'X-CSRF-Token': $('meta[name="csrf_token"]').attr('content')
        }
    });
var data = {};

  console.log('script herkent');
  function checkCoupon(){
    data['coupon'] = $("#coupon").text();
    $.ajax({
     url: '/api/getcoupon',
     data: data,
     error: function() {
        $('#coupon').addClass('form-control-danger');
        $('#divcoupon').addClass('has-danger');
        $('#couponfeedback').text('De coupon blijkt niet te werken, probeer opnieuw met een andere');
     },
     dataType: 'json',
     success: function(data) {
       console.log('HEt werkt');
        $('#coupon').addClass('form-control-succes');
        $('#divcoupon').addClass('has-succes');
          $('#couponfeedback').text('');
          $('#prijsAankoop').html('€ 25.00');
     },
     type: 'POST'
  });     // The function returns the product of p1 and p2
};
