<?php
    if(isset($_POST['name']))
    {
        $name = $_POST["name"];
        $mail = $_POST["email"];
        $tel = $_POST["tel"];
        $mess = $_POST["message"];
        $otro = $_POST["otro"];

        $para = 'angel_yedid@hotmail.com';
        $asunto = 'Contacto desde la pagina web';

        $conten = "Nombre: " . $name . "\nCorreo: " . $mail . "\nTelefono: " . $tel . "\notro medio de contacto: " . $otro . "\nMensaje: " . $mess;

        mail($para, $asunto, $conten);
        echo "<script>alert('correo enviado')</script>";
        header("Location:index.html");
    }
    else
    {
        header("Location:index.html");
    }
?>
