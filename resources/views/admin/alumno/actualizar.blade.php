<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="POST" action="{{ route('admin/alumno/update',$alumno->id) }}" role="form" enctype="multipart/form-data">
 
 <input type="hidden" name="_method" value="PUT">
 <input type="hidden" name="_token" value="{{ csrf_token() }}">

 @include('admin.jugos.frm.prt')
                                                         
</form>
</body>
</html>