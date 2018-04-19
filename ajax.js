$(document).ready(function() {
  $("#klas").change(function() {
    var klas_id = $(this).val();
    if(klas_id != "") {
      $.ajax({
        url:"llnweer.php",
        data:{k_id:klas_id},
        type:'POST',
        success:function(response) {
          var resp = $.trim(response);
          $("#leerling").html(resp);
        }
      });
    } else {
      $("#leerling").html("<option value=''>Selecteer een leerling</option>");
    }
  });
});