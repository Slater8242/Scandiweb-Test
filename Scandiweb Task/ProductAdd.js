

$("#options").on('change', function() {
    $(".att").hide();
    var value = $(this).val();
    $("."+value).show();
  });
