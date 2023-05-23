<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    <div class="container">
    <h1 class="text-center">Listado de Personas</h1>
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#insertar">
  Nueva Persona
</button>

<br>
<br>
<table class="table caption-top">
  <thead>

    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nombre</th>
      <th scope="col">Apellidos</th>
      <th scope="col">Sexo</th>
      <th scope="col">Dni</th>
      <th scope="col">Editar</th>
      <th scope="col">Eliminar</th>
    </tr>
  </thead>
  <tbody>
    <!--registros de la base de datos-->
<?php include_once("listar.php");?>
<?php foreach($personas as $persona) {?>

<tr>
    <td><?php echo $persona->id?></td>
    <td><?php echo $persona->nombre?></td>
    <td><?php echo $persona->apellidos?></td>
    <td><?php echo $persona->sexo?></td>
    <td><?php echo $persona->dni?></td>
    <td><button type="button" class="btn btn-success editbtn" data-bs-toggle="modal" data-bs-target="#editar">
    Editar
  </button></td>

  <td><button type="button" class="btn btn-danger deletebtn" data-bs-toggle="modal" data-bs-target="#eliminar">
    Eliminar
  </button></td>
</tr>

<?php   }?>
    </tbody>
</table>

    
      
    </div>

    <!-- Modal insertar -->
<div class="modal fade" id="insertar" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Resgitrar Persona</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!--formulario-->
    <form action="registrar.php" method="POST">
    <div class="form-group">
    <label for="">Nombre</label>
    <input type="text" name="nombre" class="form-control">
    </div>

    <div class="form-group">
    <label for="">Apellidos</label>
    <input type="text" name="apellidos" class="form-control">
    </div>

    <div class="form-group">
    <label for="">Genero</label>
    <select name="sexo" id="" class="form-control">
    <option value="M">Masculino</option>
    <option value="F">Femenino</option>

    
    </select>
    </div>
    <div class="form-group">
    <label for="">Dni</label>
    <input type="number" name="dni" class="form-control">
    </div>
    <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Guardar Persona</button>
        </div>
        </form>

    </div>

    </div>      
   </div>
</div>

 <!-- Modal Editar-->
 <div class="modal fade" id="editar" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Editar Persona</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
      </div>
      <div class="modal-body">
        <!--formulario-->
    <form action="editar.php" method="POST">
    <input type="hidden" name="id" id="update_id">
    <div class="form-group">
    <label for="">Nombre</label>
    <input type="text" name="nombre" id="nombre" class="form-control">
    </div>

    <div class="form-group">
    <label for="">Apellidos</label>
    <input type="text" name="apellidos" id="apellidos" class="form-control">
    </div>

    <div class="form-group">
    <label for="">Genero</label>
    <select name="sexo" id="sexo" class="form-control">
    <option value="M">Masculino</option>
    <option value="F">Femenino</option>

    
    </select>
    </div>
    <div class="form-group">
    <label for="">Dni</label>
    <input type="number" name="dni" id="dni" class="form-control">
    </div>
    <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Guardar Cambios</button>
        </div>
        </form>
        
    </div>

    </div>      
   </div>
</div>

 <!-- Modal Eliminar-->
 <div class="modal fade" id="eliminar" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Eliminar Persona</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
      </div>
      <div class="modal-body">
      <h4>Estas Seguro de Eliminar</h4>
        <!--formulario-->
    <form action="eliminar.php" method="POST">
    <input type="hidden" name="id" id="delete_id">
    
    <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
            <button type="submit" class="btn btn-primary">Si,eliminar</button>
        </div>
        </form>
        
    </div>

    </div>      
   </div>
</div>


<script>

    $('.editbtn').on('click',function () {

        $tr=$(this).closest('tr');
        var datos=$tr.children("td").map(function () {
            return $(this).text(); 
        });
        $('#update_id').val(datos[0]);
        $('#nombre').val(datos[1]);
        $('#apellidos').val(datos[2]);
        $('#sexo').val(datos[3]);
        $('#dni').val(datos[4]);
    });
</script>

<script>

    $('.deletebtn').on('click',function () {

        $tr=$(this).closest('tr');
        var datos=$tr.children("td").map(function () {
            return $(this).text(); 
        });
        $('#delete_id').val(datos[0]);
       
    });
</script>


    
</body>
</html>