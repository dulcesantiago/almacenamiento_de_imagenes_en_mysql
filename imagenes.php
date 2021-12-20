<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Almacenar imagenes en la BD de MySQL usando PHP</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">


<style type="text/css">
*
{ 
    font-family:Segoe, "Segoe UI", Verdana, sans-serif
}

.main
{ 
    margin:auto; 
    border:1px solid #7C7A7A; 
    width:60%; text-align:left; 
    padding:30px; 
    background-image: linear-gradient(to top, #f2b3e2, #ffbecf, #ffcfc5, #ffe2c8, #fdf3d9);
}


input[type=submit]
{ 
    background:#6ca16e; width:100%;
    padding:5px 15px; 
    background:#ccc; 
    cursor:pointer;
	font-size:16px;
   
}

input[type=text]
{  
    width:40%;
    padding:5px 15px; height:25px;
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

input[type="button"] {
    background: none;
    border: none;
    background: #0a9797f1;
    color: #fff;
    width: 20%;
    font-size: 14px;
    padding: 10px 0;
    font-family: Tahoma;
    border-radius: 10px;
    transition: all .5s ease;
    margin: 10px;
    font-weight: bold;
}

input[type="button"]:hover {
  background: #1e2363;
}
</style>
</head>

<body>
<div class="main">
<h1>Mostrando imagen almacenada en MySQL</h1>
  <div class="panel panel-primary">
    <div class="panel-body">
<img src='vista.php?id=3' alt='Img blob desde MySQL' width="100%" />
<img src='vista.php?id=8' alt='Img blob desde MySQL' width="100%" /> 
<img src='vista.php?id=9' alt='Img blob desde MySQL' width="100%" />          
 	  </div> 
    </div>
    <a href="index.php">
    <input type="button" value="Atras">
    </a>
 </div>
</body>
</html>
