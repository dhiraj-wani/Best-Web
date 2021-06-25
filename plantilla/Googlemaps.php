<!DOCTYPE html>
<html>
  <head>
    <style>
      #map {
        width: 450px;
        height: 260px;
        background-color: grey;
      }
    </style>
  </head>
  <body>

    <div id="map"></div>
    <script>


          function initMap() {
            var map = new google.maps.Map(document.getElementById('map'), {
              zoom: 15,
              center: {lat: 40.4477145, lng: -3.7173854999999776}
            });

            marker = new google.maps.Marker({
              map: map,
              draggable: true,
              animation: google.maps.Animation.DROP,
              position: {lat: 40.4477145, lng: -3.7173854999999776}
            });
            marker.addListener('click', toggleBounce);
          }

          function toggleBounce() {
            if (marker.getAnimation() !== null) {
              marker.setAnimation(null);
            } else {
              marker.setAnimation(google.maps.Animation.BOUNCE);
            }
          }


        </script>
        <script async defer
        src="">
        </script>
      </body>
    </html>
