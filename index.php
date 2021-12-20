<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Almacenar imagen en MySQL usando PHP</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<style type="text/css">
*
{ 
  font-family:Segoe, "Segoe UI", "DejaVu Sans", "Trebuchet MS", Verdana, sans-serif
}

.main
{ 
    margin:auto; 
    border:4px solid #fff; 
    width:60%; 
    text-align:center; 
    padding:30px; 
    background-image: linear-gradient(to top, #f2b3e2, #ffbecf, #ffcfc5, #ffe2c8, #fdf3d9);
}

input[type=submit]
{ 
  background:#6ca16e; 
  width:100%;
  padding:5px 15px; 
  background:#ccc; 
  cursor:pointer;
	font-size:16px;
   
}
input[type=text]
{  
  width:40%;
  padding:5px 15px; 
  height:25px;
	font-size:16px;
   
}
.form-control {
	padding: 0px 0px;
}

body{
  background-image: linear-gradient(to top, #5b97f0, #4671ca, #324da4, #1f2a7d, #0a0758);
  width:100%;
  height:100%;
}
</style>
</head>


<body>
<bR>
<div class="main">
<h2>Cargar y Almacenar imagenes en MySQL PHP</h2>
  <div class="panel panel-primary">
    <div class="panel-body">

      <form name="MiForm" id="MiForm" method="post" action="cargar.php" enctype="multipart/form-data">
        <h4 class="text-center">Seleccione la imagen a cargar:</h4>
        <div class="form-group">
          <label class="col-sm-2 control-label">Archivos: </label>
          <div class="col-sm-8">
            <input type="file" class="form-control" id="image" name="image" multiple>
          </div>
          <br> <br><br> 
          <button name="submit" class="btn btn-primary">Cargar Imagen</button>
        </div>
      </form>
      <br> 
      <button>  <a href="ver.php"> Ver Imagenes de la BD</a> </button>
 	  </div> 
    </div>
 </div>
 
</body>
</html>