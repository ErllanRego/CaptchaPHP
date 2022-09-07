<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Captcha PHP</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!--Bootstrap-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
        <!--Icons-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
        <!--My CSS-->
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <div class="row justify-content-center">
            <div class="form-box col-8">
                <form action="validate.php" method="POST">
                    <div class="row">
                        <div class="col">
                            <h2>
                                <label for="captchaInput">
                                    Captcha PHP
                                </label>
                            </h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <img src="captcha.php" alt="captcha">
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <input type="text" class="form-control" name="captchaInput" id="captchaInput" aria-describedby="captchaField">
                    </div>
                    <div class="row">
                        <div class="col">
                            <button type="submit" class="btn btn-primary"><i class="bi bi-send-fill"></i> Submit</button>
                        </div>
                    </div>
                    <div class="row">
                        <?php if($_SESSION['captchaValidate'] == "empty"): ?>
                            <div class="col">
                                <div class="alert alert-warning" role="alert">
                                    Empty, type something in the field!
                                </div>
                            </div>
                        <?php elseif($_SESSION['captchaValidate'] == "correct"): ?>
                            <div class="col">
                                <div class="alert alert-success" role="alert">
                                    Correct!
                                </div>
                            </div>
                        <?php elseif($_SESSION['captchaValidate'] == "wrong"): ?>
                            <div class="col">
                                <div class="alert alert-danger" role="alert">
                                    Wrong, try again!
                                </div>
                            </div>
                        <?php endif; ?>
                    </div>
                </form>   
            </div>
        </div>
    </body>
</html>

