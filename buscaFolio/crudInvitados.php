<?php
error_reporting(0);
error_reporting(E_ALL);
ini_set('display_errors', '1');
//var_dump($_REQUEST);
//$folioPrueba = $_POST['idFolio'];


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
<script src="https://code.jquery.com/jquery-3.2.1.js"></script>



<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
 





<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>
<body>
    
<section style="background-color: #eee;">
  
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-lg-9 col-xl-7">
        <div class="card rounded-3">
          <div class="card-body p-4">
            <div class="row">
              <div class="col-md-3">
                <a href="../index.php" class="form-control btn-success"><i class="bi bi-arrow-left"></i>Regresar</a>
              </div> 
              <div class="col-md-6"></div>
              <div class="col-md-3">
                <button type="button" class="form-control btn-success" onclick="show_hidde();" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo"><i class="bi bi-plus"></i>Invitado</button>
              </div> 
            </div>
                <div class="row">
                    <div id="content" class="col-lg-12">
                        
                    </div>
                </div>
                
                <!--<div class="row">
                    <div class="col-lg-12 text-center">
                        <a href="#" class="btn btn-secondary button">
                            <i class="fa fa-eye"></i>
                        </a>
                    </div>
                </div>-->
    
            <h4 class="text-center my-3 pb-3">Listado de invitados </h4>

           <input type="hidden" name="idFolio" id="idFolio" value="">

            <table class="table mb-4" id="invitados_list">
              <thead>
                <tr>
                    <!--<th scope="col">Fecha</th>-->
                    <th scope="col">Nombre</th>
                    <th scope="col">Familia</th>
                    <th scope="col">Acción</th>
                    <th scope="col">Invitación</th>
                </tr>
              </thead>
              <tbody>
                    
              </tbody>
            </table>

            <div class="row">
              <div class="col-md-12">
               <div id="list_href"></div>
              </div>
              
            </div>
          </div>
         
        </div>
      </div>
    </div>
  </div>
</section>

<!--
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@fat">Open modal for @fat</button>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap">Open modal for @getbootstrap</button>
-->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Nuevo Invitado</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form id="formCreate">
        <input type="hidden" name="id_input" id="id_input" value="">
      <div class="modal-body">
        
          <div class="form-group">
            <label for="familia" class="col-form-label">Familia:</label>
            <input type="text" class="form-control" id="familia" name="familia" required>
          </div>
          <div class="form-group">
            <label for="nombre_id" class="col-form-label">Nombre Invitado:</label>
            <input type="text" class="form-control" id="nombre_id" name="nombre_id" required>
          </div>
          <div class="form-group">
            <label for="folio" class="col-form-label">Código:</label>
            <input type="text" class="form-control" id="folio" name="folio" required>
          </div>
          <!--<div class="form-group">
            <label for="recipient-name" class="col-form-label">No Mesa:</label>
            <input type="text" class="form-control" id="recipient-name" required>
          </div>-->
        
      </div>
      <div class="modal-footer">
        <input type="submit" class="btn btn-primary" id="guardar" value="Guardar">
        <input type="submit" class="btn btn-success" id="actualiza" value="Actualiza" hidden>
      </div>
      </form>
    </div>
  </div>
</div>
<!-- Modal Registro Exitoso! -->
<!--<div class="alert alert-success" role="alert">
  This is a success alert—check it out!
</div>-->
  <!-- Modal Registro Exitoso! -->

</body>
</html>
<script type="text/javascript">
$(document).ready(function() {  //Inicia document ready
   $('#content').html('<div class="loading"><img src="../images/loader.gif" alt="loading" /><br/>Un momento, por favor...</div>');
 
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
  
    
 $("#guardar").click(function() { //Guardar Datos
      $("#formCreate").submit(function(e){
        e.preventDefault();
      });
            familia = $("#familia").val();
            nombre = $("#nombre_id").val();
            folio = $("#folio").val();

            $.ajax({
                type: "POST",
                dataType: "json",
                url: "backend/insertInvitado.php",
                data: {"familia": familia, "nombre": nombre, "folio": folio },
                success: function (data) {
                  $("#nombre_id").val('');
                   $("#element").val('');
                  //$("#folio").val('');
                  listPermissions();
                  alert("Datos actualizados!");

                },
                error: function (data) {
                    console.log(data);
                }
            });
                   
                        //txt = "You pressed Cancel!";
      });//Fin Guardar Datos

$("#actualiza").click(function() { //Guardar Datos
      $("#formCreate").submit(function(e){
        e.preventDefault();
      });

            $('#content').html('<div class="loading"><img src="../images/loader.gif"/><br/>Un momento, por favor...</div>');

            familia = $("#familia").val();
            nombre = $("#nombre_id").val();
            folio = $("#folio").val();
            id_input = $("#id_input").val();
            
            $.ajax({
                type: "POST",
                dataType: "json",
                url: "backend/actualizaInviData.php",
                data: {"familia": familia, "nombre": nombre, "folio": folio, "id_input":id_input },
                success: function (data) {
                  $('#content').fadeIn(1000).html(data);
                  $("#nombre_id").val('');
                   $("#element").val('');
                  //$("#folio").val('');
                  listPermissions();
                  //alert("Datos actualizados!");

                },
                error: function (data) {
                    console.log(data);
                }
            });
                   
                        //txt = "You pressed Cancel!";
      });//Fin Guardar Datos
 
});  //Fin Document ready

function getParameterByName(name) {
    name = name.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]");
    var regex = new RegExp("[\\?&]" + name + "=([^&#]*)"),
    results = regex.exec(location.search);
    return results === null ? "" : decodeURIComponent(results[1].replace(/\+/g, " "));
}

setTimeout(listPermissions = function(){
  var inicio = getParameterByName('inicio');
  var fin = getParameterByName('fin');
      idFolio = $("#idFolio").val();
      //idFolio = getParameterByName('idFolio');
      invitados =[];
      
      $(".otrasFilas").hide();
      $.ajax({
          type: "GET",        
          dataType: "json",
          url: "inicio.php?inicio="+inicio+'&fin='+fin,
          success: function (data)
          {
              //console.log(data);
               noInt =1;
                $.each(data.resultado, function (idx, opt) {
                  //console.log(opt.estatus); 
               
                   

                   $('#invitados_list').append(
                          '<tr class="otrasFilas">' +
                              //'<td   >'+ opt.fecha  +'</td> ' +
                              '<td   >'+ opt.nombre +'</td> ' +
                              '<td   >'+ opt.familia +'</td> ' +
                              //'<td   >'+ opt.folio  +'</td> ' +
                              '<td   >'+ 
                              '<button type="button" id="editar_btn" onclick="editarInvitado('+ opt.id+');" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@fat"><i class="bi bi-pencil"></i></button>' +

                              '<button type="button" class="btn btn-danger"onclick="eliminarInvitado('+ opt.id+');" role="button" id="eliminar"><i class="bi bi-trash"></i>  </button>'+
                              '</td> ' +
                              '<td   >'+ '<a href="../invitation_generate_pdf.php?idFolio='+ opt.folio +'" class="btn btn-success"><i class="bi bi-file-earmark-pdf-fill"></i></a>' +'</td> ' +
                          '</tr>');
                  noInt++;
              });
                 
                $('#content').fadeIn(1000).html(data);

                $(".invitados").change(function(){
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

                  //paginate ***
                  console.log(data.resultado_count[0].count_id);
                  //var registros = data; 
                  var totalRegistros = data.resultado_count[0].count_id;
                  var enlacesGenerados = 0;
                  var enlacesPorGrupo = 50;
                  var enlace ='';

                  for (var i = 0; i < totalRegistros; i += enlacesPorGrupo) {
                    var inicio = i;
                    var fin = Math.min(i + enlacesPorGrupo - 1, totalRegistros - 1);
                     enlace += '<a href="crudInvitados.php?inicio=' + inicio + '&fin=' + fin + '" class="btn btn-primary">' + i + '</a>';
                    enlacesGenerados++;
                  }
                  /* paginate
                  console.log(enlace);
                  $('#list_href').append(
                    enlace
                    );*/

          },
          error: function (data)
          {
                  alert( data.responseText);
          }
      })
    },8000);  //fin listadoPermissions

//setTimeout(listPermissions(), 3000);
    

    function eliminarInvitado(id) {
      //console.log(id);
      //$("#id_input").val(id);
      $('#content').html('<div class="loading"><img src="../images/loader.gif" alt="loading" /><br/>Un momento, por favor...</div>');
 
      $.ajax({
                type: "get",
                dataType: "json",
                url: "backend/eliminarInvitado.php?id="+id,
                success: function (data) {
                  alert("Datos actualizados!");
                  listPermissions();
                  $('#content').fadeIn(1000).html(data);
                 

                },
                error: function (data) {
                    console.log(data);
                }
            });
    }

    function editarInvitado(id) {
      //console.log(id);
      

      $("#id_input").val(id);
      $.ajax({
                type: "get",
                dataType: "json",
                url: "backend/getEditInvitado.php?id="+id,
                success: function (data) {
                  //console.log(data[0].familia);
                  $("#familia").val(data[0].familia);
                  $("#nombre_id").val(data[0].nombre);
                  $("#folio").val(data[0].folio);
                  $("#familia").prop( "disabled", true );
                  $("#guardar").prop( "hidden", true );
                  $("#actualiza").prop( "hidden", false );

                },
                error: function (data) {
                    console.log(data);
                }
            });
    }

    function show_hidde() { 
      $("#guardar").prop( "hidden", false );
      $("#actualiza").prop( "hidden", true );
      $("#familia").prop( "disabled", false );
    }
    function getParameterByName(name) {
    name = name.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]");
    var regex = new RegExp("[\\?&]" + name + "=([^&#]*)"),
    results = regex.exec(location.search);
    return results === null ? "" : decodeURIComponent(results[1].replace(/\+/g, " "));
    }
</script>