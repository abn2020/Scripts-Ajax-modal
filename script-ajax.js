//scripts das modais
$(document).ready(function(){
    $('.userinfo').click(function(){
        var userid = $(this).data('id');
        //alert(userid)
        $.ajax({
            type: "POST",
            url: "script.php",
            data: {userid: userid},
            success: function(response){ 
                $('.modal-body').html(response); 
                $('#empModal').modal('show'); 
            }
        });
    });
});

$(document).ready(function(){
    $('.useredit').click(function(){
        var useredit = $(this).data('edit');
       // alert(useredit)
        $.ajax({
            type:"POST",
            url: "form_edit.php",
            data: {useredit: useredit},
            success: function(response){
                $('.modal-body-edit').html(response);
                $('#EditModal').modal('show');
            }
        });
    });
});



//scripts de verificação de campos do formulario 

/*$.validator.setDefaults({
    subtmitHandle: function() {

    }
  });
  $().ready(function() {
    $("#inserir").validate({
      errorElement: 'div',
      rules: {
        nome: "required",
        cpf: {
          required: true,
          number: true
        },
        email: {
          required: true,
          email: true
        }

      },
      messages: {
        nome: "Por favor digite seu nome.",
        cpf: "O campo CPF é obrigatório e deve conter somente numeros.",
        email: "Por favor digite um email válido.",

      }

    });
  });*/


  