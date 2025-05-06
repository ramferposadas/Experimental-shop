<!DOCTYPE html>
<html lang="es">
<style>
    .title{
        text-align:center;
        color:rgb(218, 218, 218);
        font-size:100px;
        font-family: "Oswald", sans-serif;
       transition-duration:1s;

        
    }
    
  
    body{
        
        background:linear-gradient(to top,black ,rgb(103, 117, 143));
        height:3800px;
        
    }
    

a{
    text-decoration:none;
    color:black;
}
.compra{
    width:200px;
    margin-left:5%;
    background-color:white;
    height:450px;
    border:none;
    border-radius:30px;
    transition-duration:1s;
   
}
.compra:hover{
    transform:scale(1.1);
    box-shadow: 10px 10px 5px rgb(69, 78, 95);
}
.img{
   height:300px;
   margin-top:10px;
   border-radius:30px;
   border:none;
}
img{
    width:300px;
    height:250px;
    
}
.precioenvio{
    margin-top:-20px;
}
.precio{
    margin-top:-15px;
}
div{
    display:flex;
    padding-top:60px;
    
}
.foot{
    background-color:rgb(14, 14, 14);
    width:99.7%;
    margin-top:160%;
    border:none;
    margin-left:-1%;
    height:200px;
}
.footer{
    color:rgb(153, 153, 153);
}
.franco{
    color:rgb(153, 153, 153);
    transition-duration:1s;
}
.franco:hover{
    color:rgb(231, 231, 231);
}
.secret{
    width:30px;
    margin-left:1000px;
    margin-top:-200px;
    transition-duration:0.5s;
    opacity:0;
    border:none;
    
    
   
}
.secret:hover{
    
   
    opacity:30;
   
    
}
.imgsecret{
    width:100px;
    height:100px;

    
    
}


</style>
<head>
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
</head>

<h1 class="title">BOP Shop</h1>




<!--FILA 1-->

 <div>
    <?php
    $id_precio=2;
    $con=mysqli_connect("localhost","root","","BOP");
    $query="SELECT precio FROM Precios WHERE id_producto = $id_precio";
    $res=mysqli_query($con,$query);
    ?>
   
    <fieldset class="compra">
        <a href="http://localhost/BOP/birome_compra.php">
            <fieldset class="img">
             <img src="birome.webp" alt= "jaja no tenes buen interneet jejejej o capaz no me andan las imagenes.... avisame por las dudas">
          </fieldset>
            <h3>Birome común</h3>
            <?php
                while($precios=mysqli_fetch_array($res)){
                    echo'<h1 class="precio">'.$precios['precio'].'</h1>';
                }
            ?>
            <h4 class="precioenvio">precio envio:$200</h4>
        </a>

    </fieldset>
    <?php
    $id_precio=3;
    $con=mysqli_connect("localhost","root","","BOP");
    $query="SELECT precio FROM Precios WHERE id_producto=$id_precio";
    $res=mysqli_query($con,$query);
    ?>
    <fieldset class="compra">
        <a href="http://localhost/BOP/goma.php">
            <fieldset class="img">
                <img src="gomamapped.webp">
            </fieldset>
            <h3>Goma Maped</h3>
            <?php
             while($precios=mysqli_fetch_array($res)){
                echo'<h1 class="precio">'.$precios['precio'].'</h1>';
              
             }
            ?>
            <h4 class="precioenvio">precio envio:$0</h4>
        </a>
    </fieldset>
    <?php
    $id_precio=4;
    $con=mysqli_connect("localhost","root","","BOP");
    $query="SELECT precio FROM Precios WHERE id_producto=$id_precio";
    $res=mysqli_query($con,$query);
    ?>
    <fieldset class="compra">
        <a href="http://localhost/BOP/lapiz_compra.php">
            <fieldset class="img">
                <img src="lapiz.webp">
            </fieldset>
            <h3>Lapiz (modelo aleatorio)</h3>
            <?php
            while($precios=mysqli_fetch_array($res)){
                echo'<h1 class="precio">'.$precios['precio'].'</h1>';
               
            }

            ?>
            <h4 class="precioenvio">precio envio:$200</h4>
        </a>
    </fieldset>
    


   




</div>

<!--FILA 2-->
<div>
    <?php
    $id_precio=2;
    $con=mysqli_connect("localhost","root","","BOP");
    $query="SELECT precio FROM Precios WHERE id_producto = $id_precio";
    $res=mysqli_query($con,$query);
    ?>
   
    <fieldset class="compra">
        <a href="http://localhost/BOP/birome_compra.php">
            <fieldset class="img">
             <img src="####" >
          </fieldset>
            <h3>?</h3>
            <?php
                while($precios=mysqli_fetch_array($res)){
                    echo'<h1 class="precio">'.$precios['precio'].'</h1>';
                }
            ?>
            <h4 class="precioenvio">precio envio:$200</h4>
        </a>

    </fieldset>
    <?php
    $id_precio=3;
    $con=mysqli_connect("localhost","root","","BOP");
    $query="SELECT precio FROM Precios WHERE id_producto=$id_precio";
    $res=mysqli_query($con,$query);
    ?>
    <fieldset class="compra">
        <a href="http://localhost/BOP/goma_maped.php">
            <fieldset class="img">
                <img src="###">
            </fieldset>
            <h3>?</h3>
            <?php
             while($precios=mysqli_fetch_array($res)){
                echo'<h1 class="precio">'.$precios['precio'].'</h1>';
              
             }
            ?>
            <h4 class="precioenvio">precio envio:$0</h4>
        </a>
    </fieldset>
    <?php
    $id_precio=4;
    $con=mysqli_connect("localhost","root","","BOP");
    $query="SELECT precio FROM Precios WHERE id_producto=$id_precio";
    $res=mysqli_query($con,$query);
    ?>
    <fieldset class="compra">
        <a href="http://localhost/BOP/lapiz_compra.php">
            <fieldset class="img">
                <img src="###">
            </fieldset>
            <h3>?</h3>
            <?php
            while($precios=mysqli_fetch_array($res)){
                echo'<h1 class="precio">'.$precios['precio'].'</h1>';
               
            }

            ?>
            <h4 class="precioenvio">precio envio:$200</h4>
        </a>
    </fieldset>
    


   




</div>





















<footer>
    <fieldset class="foot">
    <h3 class="footer">Esta página fue hecha por <a class="franco" href="http://localhost/BOP/creatorinfo.html" class="footer">Franco</a></h3>
    <h3 class="footer">Si te interesa aprender a hacer páginas háblame, estoy en 5to "A" a la mañana</h3>
    </fieldset>
    
</footer>

<fieldset class="secret">
    <a href="secret.html">  
    <img  class="imgsecret" src="freddy.gif">
    </a>
</fieldset>
</html>