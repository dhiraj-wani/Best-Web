<!DOCTYPE html>
<html lang="en">
<head>
    <?php include "plantilla/head.php"; ?>
</head>

<body data-spy="scroll" data-target=".onpage-navigation" data-offset="60" >

<main>


    <div class="nav">
        <?php include "plantilla/nav.php"; ?>

    </div>


    <div class="module">
        <div class="contenedor2">
        <div class="row">
            <div class="col-md-6 col-sm-6">
            <h2 class="module-title font-alt">Contactanos</h2>
            <div class="module-subtitle font-serif">Rellena el form para mas informacion</div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 col-sm-6">
            <form action="contactForm.php" id="contactForm" role="form" method="post" enctype="multipart/form-data" data-toggle="validator">
                <div class="form-group">
                    <label class="sr-only" for="name">Name</label>
                    <input class="form-control" type="text" id="name" name="name" placeholder="Nombre*" required="required" data-validation-required-message="Por favor introduce tu nombre "/>

                </div>
                <div class="form-group">
                    <label class="sr-only" for="email">Email</label>
                    <input class="form-control" type="email" id="email" name="email" placeholder="E-Mail*" required="required" data-validation-required-message="Por facor introduce tu e-mail"/>

                </div>
                <div class="form-group">
                    <textarea class="form-control" rows="10" id="message" name="message" placeholder="Tu mensaje*" required="required" data-validation-required-message="Por favor introduce tu mensaje."></textarea>

                </div>
                <div class="text-center">
                    <button class="btn btn-1 btn-lg mb-20" id="cfsubmit" type="submit">Submit</button>
                    <button class="btn btn-1 btn-lg mb-20" id="reset" type="reset">Reset</button>

                </div>
            </form>
            <div class="ajax-response font-alt" id="contactFormResponse"></div>
            </div>

            <div class="col-sm-6 col-md-6">
                <?php include "plantilla/Googlemaps.php"; ?>

                <div class="mt-30 titan-title-size-1">Visitanos los viernes a las 18:30
                    <p>Calle: Calle Ramiro de Maeztu, 7, 28040 Madrid
                        Tambien puedes contactarno con el form </p>
                </div>
            </div>

        </div>
        </div>
    </div>

    <footer class=" footer bg-dark">
        <?php include "plantilla/footer.php"; ?>
    </footer>



</main>


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->


<?php include "plantilla/scripts.php"; ?>
</body>
</html>