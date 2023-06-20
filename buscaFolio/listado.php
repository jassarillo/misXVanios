<?php
error_reporting(0);
error_reporting(E_ALL);
ini_set('display_errors', '1');
//var_dump($_REQUEST);
$folioPrueba = $_POST['idFolio'];



require('config.php');
$registros = mysqli_query($conn,
"SELECT *  FROM `invitados` where folio = '$folioPrueba' ");

//echo $registros;
?>




<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Almacen</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">  

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
 
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

           

            <table class="table mb-4">
              <thead>
                <tr>
                    <th scope="col">Fecha</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">No. mesa</th>
                    <th scope="col">Folio</th>
                    <th scope="col">Acción</th>

              
                </tr>
              </thead>
              <tbody>
                    
              <?php 
        
            while (list($Id, $Nombre, $fecha, $nomesa, $folio) = mysqli_fetch_array($registros)) {
                echo 
                    "<tr>
                        <td scope='row'>$Nombre </td>  
                        <td scope='row'>$fecha </td> 
                        <td scope='row'>$nomesa </td>
                        <td scope='row'>$folio </td>
                        <td>
                        <input type='checkbox' id='cbox2' value='second_checkbox'>
                        </td>
                    </tr>";
                }
        ?>
                <!--<tr>
                  <th scope="row">1</th>
                  <td>Buy groceries for next week</td>
                  <td>In progress</td>
                  <td>
                    <button type="submit" class="btn btn-danger">Delete</button>
                    <button type="submit" class="btn btn-success ms-1">Finished</button>
                  </td>
                </tr>-->

              </tbody>
            </table>
            <div class="row">
              <div class="col-md-3">
                <button class="btn-primary btn-lg" name="guardar_list">Guardar</button>
              </div>
              <div class="col-md-6"></div>
              <div class="col-md-3">
                <a href="../pdfBoleto/pdf.php" class="form-control btn-success"><i class="bi bi-file-earmark-pdf-fill"></i> Boleto</a>
              </div>
            </div>


          </div>
        </div>
      </div>
    </div>
  </div>
</section>




</body>
</html>
<script type="text/javascript">
  $(".permisos").change(function () 
                              {
                                if ($(this).is(':checked')) 
                                {
                                    //console.log($(this).val());
                                    if ($.inArray($(this).val(), permisos) == -1) {
                                        
                                        permisos.push($(this).val());
                                    }
                                }
                                else 
                                {
                                  permisos.splice($.inArray($(this).val(), permisos), 1);
                                }
                                //console.log(permisos);
                            });
</script>