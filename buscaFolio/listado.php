<?php
error_reporting(0);
error_reporting(E_ALL);
ini_set('display_errors', '1');
//var_dump($_REQUEST);
$folioPrueba = $_POST['idFolio'];


?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mis XV</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">  

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
 





<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>
<body>
    
<section class="vh-100" style="background-color: #eee;">
  
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-lg-9 col-xl-7">
        <div class="card rounded-3">
          <div class="card-body p-4">
            <div class="row">
    <div class="col-md-3">
      <a href="../index.php" class="form-control btn-success"><i class="bi bi-arrow-left"></i>Regresar</a>
    </div> 
  </div>
            <h4 class="text-center my-3 pb-3">Listado de invitados por folio Nro. <?php  echo $folioPrueba;?></h4>

           <input type="hidden" name="idFolio" id="idFolio" value="<?php echo $folioPrueba?>">

            <table class="table mb-4" id="invitados_list">
              <thead>
                <tr>
                    <th scope="col">Fecha</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">No. mesa</th>
                    <th scope="col">Folio</th>
                    <th scope="col">
                      <input type="checkbox" id="checkTodos">
                      Confirmar Asistencia
                    </th>

              
                </tr>
              </thead>
              <tbody>
                    
              </tbody>
            </table>
            <div class="row">
              <div class="col-md-6">
                <button type="button" class="form-control btn-success" role="button" id="guardar">Guardar y Generar Boleto</button>
                <!--<button class="btn-primary btn-lg" name="guardar_list">Guardar</button>-->
              </div>
              <div class="col-md-3"></div>
              <div class="col-md-3">
                
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- Modal Registro Exitoso! -->
<!--<div class="alert alert-success" role="alert">
  This is a success alert—check it out!
</div>-->
  <!-- Modal Registro Exitoso! -->

</body>
</html>
<script type="text/javascript">
$(document).ready(function() {  //Inicia document ready
           //console.log('hola mundo!');
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                 }
                }); 

  listPermissions();

var invitados = new Array();
    $("#checkTodos").change(function () {
                $("input:checkbox").prop('checked', $(this).prop("checked"));
                $(".invitados").change();
                console.log(invitados);
    });
  
    

});  


listPermissions = function(){
      idFolio = $("#idFolio").val();
      //idFolio = getParameterByName('idFolio');
      invitados =[];
      
      $(".otrasFilas").hide();
      $.ajax({
          type: "GET",        
          dataType: "json",
          url: "inicio.php?idFolio="+idFolio,
          success: function (data)
          {
              //console.log(data);
               noInt =1;
                $.each(data, function (idx, opt) {
                  //console.log(opt.estatus); 
               
                    if(opt.estatus == 1)
                                  { 
                                      inputCheck ='<input type="checkbox"checked class="invitados" value=' + opt.id + ' >'; 
                                              invitados.push(opt.id+"");
                                              //console.log(invitados);
                                  }
                                  else
                                  {
                                      inputCheck ='<input type="checkbox" class="invitados" value=' + opt.id + '>'; 
                                  }

                   $('#invitados_list').append(
                          '<tr class="otrasFilas">' +
                              '<td   >'+ opt.fecha  +'</td> ' +
                              '<td   >'+ opt.nombre +'</td> ' +
                              '<td   >'+ opt.nomesa +'</td> ' +
                              '<td   >'+ opt.folio  +'</td> ' +
                              '<td   >'+ inputCheck +'</td> ' +
                          '</tr>');
                  noInt++;
              });

                $(".invitados").change(function () 
                {
                  if ($(this).is(':checked')) 
                  {
                      //console.log($(this).val());
                      if ($.inArray($(this).val(), invitados) == -1) {
                          
                          invitados.push($(this).val());
                      }
                  }
                  else 
                  {
                    invitados.splice($.inArray($(this).val(), invitados), 1);
                  }
                  console.log(invitados);
              });

          },
          error: function (data)
          {
                  alert( data.responseText);
          }
      })
    };  //fin listadoPermissions


    $("#guardar").click(function() { //Guardar Datos
                        console.log(invitados);
                        idFolio = $("#idFolio").val();
                        id_user = $("#id_user").val();
                        
                        $.ajax({
                            type: "POST",
                            dataType: "json",
                            url: "backend/updateAsistencia.php",
                            data: {"invitados": invitados, "idFolio": idFolio },

                            success: function (data) {

                              
                                invitados = "";
                                listPermissions();
                              alert("Datos actualizados!");
                              $(location).prop('href', '../pdfBoleto/pdf.php?idFolio='+idFolio);

                            },
                            error: function (data) {
                                console.log(data);
                            }
                        });
                   
                        //txt = "You pressed Cancel!";
                });//Fin Guardar Datos

    function getParameterByName(name) {
    name = name.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]");
    var regex = new RegExp("[\\?&]" + name + "=([^&#]*)"),
    results = regex.exec(location.search);
    return results === null ? "" : decodeURIComponent(results[1].replace(/\+/g, " "));
    }
</script>