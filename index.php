<!DOCTYPE html>
<html lang="en-US" dir="ltr">
  <head>
    <?php include "plantilla/head.php"; ?>

  </head>

  <body data-spy="scroll" data-target=".onpage-navigation" data-offset="60">

  <main>
      <div class="page-loader">
        <div class="loader">Loading...</div>
      </div>

    <div class="nav">
        <?php include "plantilla/nav.php"; ?>

    </div>

    <div class ="row">
      <section class="home-section home-full-height bg-dark-30" id="home" >
        <div class="video-player" data-property="{videoURL:'https://www.youtube.com/watch?v=j3leano1Vus', containment:'.home-section', startAt:2,stopAt:15, mute:true, autoPlay:true, loop:true, opacity:1, showControls:false, showYTLogo:false, vol:20}"></div>
        <div class="video-controls-box">
          <div class="container">
            <div class="video-controls"><a class="fa fa-volume-up" id="video-volume" href="#">&nbsp;</a><a class="fa fa-pause" id="video-play" href="#">&nbsp;</a></div>
          </div>
        </div>
        <div class="titan-caption">
          <div class="caption-content">
            <div class="font-alt mb-30 titan-title-size-2">Hello &amp; welcome</div>
            <div class="font-alt mb-40 titan-title-size-4">We are BEST</div>
          </div>
        </div>

      </section>
    </div>




     <div class=" contenedor1">
      <section id="alt-features">
          <div class="row">
              <h2 class="module-title font-alt align-center">Nuestros Objetivos</h2>
              <div class="module-subtitle font-serif " id="home1">Es proveer formación complementaria a los estudiantes ayudándoles a conseguir una mentalidad internacional y desarrollar su capacidad de trabajar en ambientes culturalmente diversos.</div>
            </div>


          </section>

        <div class="contenedor1">
          <div class="row">


              <div class="alt-features-item">
                <h3 class="alt-features-title font-alt">Mision: </h3>
                <h5><b>Developing students</b></h5>
                BEST helps students to achieve an international mindset,
                to reach a better understanding of cultures and societies and to develop the capacity to work in culturally diverse environments.

                BEST creates opportunities for personal development of students and supports them in reaching their full potential.

              </div>
            </div>



            <div class="row">
              <div class="alt-features-item">
                <h3 class="alt-features-title font-alt">Vision : </h3>
                <h5><b>Empowered diversity</b></h5>
                 People understand and respect different cultures and societies.
                 The environment of empowered diversity supports people in applying their full potential and acting responsibly.

              </div>
            </div>
             </div>
          </div>






      <footer class="footer bg-dark">
          <?php include "plantilla/footer.php"; ?>

        </footer>



      <div class="scroll-up"><a href="#totop"><i class="fa fa-angle-double-up"></i></a></div>
  </main>
    <!--  
    JavaScripts
    =============================================
    -->
  <?php include "plantilla/scripts.php"; ?>


  </body>
</html>