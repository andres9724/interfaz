<?php 

$alert= "";
/*if (!empty($_POST)) {
    if (empty($_POST['nombre']) || empty($_POST['pass'])) {
        
         
        echo '<script language="javascript">';
        echo 'alert("faltan datos")';
        echo '</script>';
    }else{
        require_once "../db/conexion.php";
        $nombre =$_POST["nombre"];
        $pass = $_POST["pass"];


         $informacion= mysqli_query($conn,"SELECT * FROM usuarios WHERE Nombre_usuario='$nombre' AND contrasena='$pass'");
         $resul=  mysqli_num_rows ($informacion);
         if ($resul> 0)
          {
            $datos=  mysqli_fetch_array($informacion);
            print_r($datos);
            
         }else{

        echo '<script language="javascript">';
        echo 'alert("usuario invalido")';
        echo '</script>';
         }

    }


}*/
 ?>
<html >
<head>
    <title>login</title>

 <link rel="stylesheet" href="../../assets/node_modules/bootstrap/dist/css/bootstrap.css">
<script src="../../assets/node_modules/jquery/dist/jquery.min.js" ></script>
<script src="../../assets/node_modules/jquery-validation/dist/jquery.validate.min.js" ></script>
<script src="../../assets/node_modules/popper.js/dist/umd/popper.js"></script>
<script src="../../assets/node_modules/bootstrap/dist/js/bootstrap.js" ></script>
<script src="../../assets/node_modules/@fortawesome/fontawesome-free/js/all.min.js" data-auto-replace-svg="nest"></script>

   <style type="text/css">
.btn-primary {
background-color: #447401;
border-color: black;

}
   </style>

</head>
<body style="    margin-top: 160px;" background="../../assets/images/thumb-1920-722604.jpg">

    <div class="modal-dialog text-center" style="width: 400px;">
        <div class="col-sm-12 ">
            <div class="modal-content" style="background: #b1da38;">
                <div class="col-12 ">
                    <img src="../../assets/images/user.png" style=" margin-top: -100px ;width: 150px;">
                </div>
                <form class="col-12" action="#" name="form_login " id="form_login">
                    <input type="text"  placeholder="Nombre de usuario" id="nombre" name="nombre" class="form-control" /> 
                    <input type="password"  placeholder="Contrasena" id="pass" name="pass" class="form-control" style="margin-top:5"/>
                    <button  style="margin-top:10px" id="login" name="login"  class="btn btn-success " value="login" >ingresar</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
<script src="login.js"></script>
<script type="text/javascript">
/*
    $(document).ready(function  () {
        $('#login').click(function(){

            var nombre=('#nombre').val();
            var pass =('#pass').val();
            if ($.trim(nombre).length > 0 && trim(pass).length > 0) {
                $.ajax({
                    url:"logeo.php",
                    method:"post",
                    data:{nombre:nombre,pass:pass},
                    cache:"false",
                    beforeSend:function(){
                        $('#login').val("conectando");
                    },
                    success: function(data){
                        $('#login').val("login");
                        if (data=="1") {
                            $("location").attr('href','interfaz.php');

                        }else  {

                            $("#resultado").html("<div class=' alert alert-dismissible alert danger'>erro</div>")
                        } 
                    }
                });

            };


        }

            )
    })

*/
</script>