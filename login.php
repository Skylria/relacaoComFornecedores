<?php
include 'cabecalho.php';
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="css/login.css">
    <meta charset="utf-8">
    <title>Login</title>
</head>
<body>
    <?php
    // session_start();
    if($_SESSION['logado']==True){
        echo "<script> window.location='usuario.php'</script>'";
    }
    ?>
<!--
    you can substitue the span of reauth email for a input with the email and
    include the remember me checkbox
    -->
    <div class="container">
        <div class="card card-container">
            <!-- <img class="profile-img-card" src="//lh3.googleusercontent.com/-6V8xOA6M7BA/AAAAAAAAAAI/AAAAAAAAAAA/rzlHcD0KYwo/photo.jpg?sz=120" alt="" /> -->
            <img id="profile-img" class="profile-img-card" src="imagens/avatar_2x.png" />
            <p id="profile-name" class="profile-name-card"></p>
            <form class="form-signin" action="login_autenticacao.php" method="POST">
                <span id="reauth-email" class="reauth-email"></span>
               <label>Login: </label>
                <input type="text" id="inputEmail" class="form-control" name="login" required autofocus>
                <label>Senha:</label>
                <input type="password" id="inputPassword" class="form-control" name="senha" required>

                <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Entrar</button>
            </form><!-- /form -->

                Ainda não é cadastrado?<br>
                <a href="cadastro_usuario.php" class="forgot-password"> Cadastre-se! </a>
        </div><!-- /card-container -->
    </div><!-- /container -->
</body>
</html>