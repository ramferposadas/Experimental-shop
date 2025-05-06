<?php
$Cantidad=$_POST['cant'];
$Comprador=$_POST['nom'];
$producto='Goma_mapped';
$mercado_pago_name=$_POST['pay'];
$Pregunta=$_POST['pregunta'];

$con = mysqli_connect("localhost", "root", "", "BOP");
if(!$con){
    die("no se conecto a la base de datos");
}

if($Pregunta==""){
    $Pregunta="no";
}else{
    $Pregunta="si";
}


$query="INSERT INTO Compra(producto,cantidad,nombre_comprador,mercado_name,paga) VALUES ('$producto','$Cantidad','$Comprador', '$mercado_pago_name', '$Pregunta' )";
$res=mysqli_query($con, $query);
if(!$res){
    die("ERROR");
}else{
    header("location:Aviso_compra.html");
}
mysqli_close($con);
?>