<!DOCTYPE html>
<html lang="es">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
</head>
</html>
<?php
    

    $con=mysqli_connect("localhost","root","","BOP");
    if(!$con){
        die("ERROR");
    }
    $query="SELECT * FROM Compra";
    $res =mysqli_query($con,$query);
    if(mysqli_num_rows($res)>0){
        echo '<table border=1>';
       
        echo'<tr><th>ID</th><th>Producto</th><th>Cantidad</th><th>Nombre</th><th>nombre_mercado</th><th>paga?</th></th>';
       
        while($compradores=mysqli_fetch_array($res)){
           
            echo'<tr>';
            echo '<td>'.$compradores['id_compra'] . '</td>';
            echo'<td>'.$compradores['producto'] . '</td>';
            echo'<td>'. $compradores['cantidad'].'</td>';
            echo'<td>'.$compradores['nombre_comprador'].'</td>';
            echo'<td>'.$compradores['mercado_name'].'</td>';
            echo'<td>'.$compradores['paga'].'</td>';
            echo'</tr>';
           
        }
        echo'</table>';
    }  
    else{
        echo'No hay compradores por ahora.';
    }
   


?>