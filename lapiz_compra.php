<!DOCTYPE html>
<html lang="es">
 

<style>
    body{
        background:linear-gradient(to top,black ,rgb(103, 117, 143));
        height:700px;   

    }
    img{
        width:500px;
        height:500px;
        margin-top:10px;
        margin-left:200px;
        border-radius:30px;
    }
    .exit{
        width:60px;
        padding:10px;
        background-color:white;
        border:none;
        border-radius:30px;
        text-align:center;
        transition-duration:1s;
        margin-top:20px;
        margin-left:30px;
    }
    .exit:hover{
        transform:scale(1.5);
        background-color:rgb(182, 182, 182);
    }
    a{
        text-decoration:none;
        
    }
    .info{
        width:30%;
        height:620px;
        margin-left:800px;
        margin-top:-500px;
        background-color:white;
        border:none;
        border-radius:30px;

    }
    .inputs{
        width:100px;
        border:none;
        background-color:rgb(197, 197, 197);
        transition-duration:0.5s;
        padding:4px;
        border-radius:3px;
    }
    .inputs:hover{
        transform:scale(1.4);
        background-color:rgb(136, 136, 136);
    }
    .submit{
        background-color:rgb(103, 117, 143);
        border:none;
        font-size:25px;
        margin-left:50px;
        margin-top:15px;
        padding:6px;
        border-radius:20px;
        width:300px;
        transition-duration:0.5s;
    }
    .submit:hover{
        background-color:rgb(74, 83, 102);
        transform:scale(1.2);
        transition-duration:0.2s;

    }
    .submit:active{
       transform:scale(0.5);
    }
    h1{
        
        font-family: "Oswald", sans-serif;
        
      
    }
    .pago{
        margin-left:200px;
    }
    h5{
        margin-top:-20px;
        margin-left:140px;
    }
   

</style>
<head>
 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <meta charset="UTF-8"> 
</head>
<body>
    <fieldset class="exit">
        <a href="index.php">Inicio</a>
    </fieldset>
    <div>
        <img src="lapiz.webp">
    </div>


    <fieldset class="info">
        <h1>Lapiz</h1>
        <?php
        $id_precio=4;
        $con=mysqli_connect("localhost","root","","BOP");
        $query="SELECT precio FROM Precios WHERE id_producto=$id_precio";
        $res=mysqli_query($con,$query);

        while($precios=mysqli_fetch_array($res)){
            echo'<h1 class="precio">'.$precios['precio'].'</h1>';
          
         }
        ?>
        <hr>
        <form action="lapiz_enviar.php" method="POST">
            <h3>Cantidad</h3>
            <input   class="inputs"id="cant" name="cant" type="number"placeholder="Cantidad" required>
            <h3>Curso</h3>
            <input   class="inputs" name="curs"id="curs" type="text" maxlength="2" placeholder="Curso" required >
            <h3>Nombre</h3>
            <input class="inputs"id="nom"name="nom" type="text" placeholder="Nombre" required>
            <h3>Nombre de mercado pago (alias:bop.shop)</h3>
            
            <input class="inputs" id="pay" name="pay" type="text" placeholder="Nombre de mercado pago">
            <input class="pago" type="checkbox" id="pregunta" name="pregunta">
            <h5>¿pagas por mercado pago?</h5>
            
            <input type="submit"class="submit" value="Comprar";>
        </form>
    </fieldset>


</body>








</html>