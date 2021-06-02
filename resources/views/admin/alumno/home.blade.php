<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<a href="{{ route('admin/alumno/crear') }}" class="btn btn-success mt-4 ml-3">  Agregar </a>
 
 <table class="table table-striped table-bordered table-hover">
     <thead>
         <tr>
             <th>Nombre</th>
             <th>Precio</th>
             <th>Stock</th>
             <th>Imagen</th>
             <th>Acciones</th>
         </tr>
     </thead>
     <tbody>
         @foreach($alumno as $alum)
         <tr>
             <td class="v-align-middle">{{$alum->nombre}}</td>
             <td class="v-align-middle">{{$alum->precio}}</td>
             <td class="v-align-middle">{{$alum->stock}}</td>
            
             <td class="v-align-middle">
  
                 <form action="{{ route('admin/alumno/eliminar',$jug->id) }}" method="POST" class="form-horizontal" role="form" onsubmit="return confirmarEliminar()">
  
                     <input type="hidden" name="_method" value="PUT">
                     <input type="hidden" name="_token" value="{{ csrf_token() }}">
                     <a href="{{ route('admin/jugos/actualizar',$jug->id) }}" class="btn btn-primary">Editar</a>
  
                     <button type="submit" class="btn btn-danger">Eliminar</button>
                     <script type="text/javascript">
                            
                            function confirmarEliminar()
                            {
                            var x = confirm("Estas seguro de Eliminar?");
                            if (x)
                                return true;
                            else
                                return false;
                            }
                            
                            </script>
                            
                 </form>
  
             </td>
         </tr>
         @endforeach
     </tbody>
 </table>
</body>
</html>