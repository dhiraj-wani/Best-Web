<!DOCTYPE html>
<html lang="en-US" dir="ltr">
<head>
    <?php include "plantilla/head.php"; ?>

</head>

<body  >

<main>


    <div class="nav">
        <?php include "plantilla/nav.php"; ?>

    </div>

    <div class="module">
        <div class="contenedor2">
            <div class="row">
                <div class="module-title font-alt">Registro</div>
            </div>

            <div class="row">
                <div class="col-md-3 col-sm-3 col-lg-3"></div>
                <div class="col-md-6 col-sm-6 ">
                    <hr/>
                <form action="registrarUsuario.php" id="registraUsuario" method="post" role="form" data-toggle="validator">
                    <div class="form-group">
                        <label for="name" class="titan-title-size-1">Nombre de usuario:</label>
                        <input class="form-control" type="text" id="username" name="username" maxlength="30" placeholder="Nombre de usuario*" required="required" data-validation-required-message="Por favor introduce tu nombre de usuario "/>

                    </div>
                    <div class="form-group">
                        <label for="email" class="titan-title-size-1">Email:</label>
                        <input class="form-control" type="email" id="email" name="email" placeholder="Email*" required="required" data-validation-required-message="Por favor introduce tu E-mail"/>

                    </div>
                    <div class="form-group">
                        <label for="password" class="titan-title-size-1">Elige una contraseña:</label>
                        <input class="form-control" type="password" id="password" name="password" maxlength="40" placeholder="Contraseña*" required="required" data-validation-required-message="Por favor introduce tu contraseña "/>

                    </div>
                    <div class="form-group">
                        <label for="password2" class="titan-title-size-1">Repite tu contraseña:</label>
                        <input class="form-control" type="password" id="password2" name="password2" maxlength="40" placeholder="Repite contraseña*" required="required" data-validation-required-message="Por favor repite tu contraseña"/>

                    </div>
                    <div class="text-center">
                        <button class="btn btn-1 btn-lg mb-20" id="register" type="submit" name="submit">Registrarme</button>
                        <button class="btn btn-1 btn-lg mb-20" id="reset" type="reset" name="reset">Reset</button>

                    </div>
                        <hr/>
                </form>
            </div>

            </div>
        </div>
    </div>

    <footer class=" footer bg-dark">
        <?php include "plantilla/footer.php"; ?>
    </footer>


</main>
<?php include "plantilla/scripts.php"; ?>

</body>
</html>
