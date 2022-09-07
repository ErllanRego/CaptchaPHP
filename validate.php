<?php

    session_start();

    if($_POST['captchaInput'] == null){

        $_SESSION['captchaValidate'] = "empty";
        header("Location: index.php");

    }elseif($_POST['captchaInput'] == $_SESSION['word']){

        $_SESSION['captchaValidate'] = "correct";
        header("Location: index.php");

    }else{

        $_SESSION['captchaValidate'] = "wrong";
        header("Location: index.php");

    }

?>