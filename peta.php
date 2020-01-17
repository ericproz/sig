<?php
$title = "Peta Warnet Medan";
include_once "header.php";
?>

      <div class="row">

        <div class="col-md-12">
          <div class="panel panel-info panel-dashboard centered">
            <div class="panel-heading">
              <h2 class="panel-title"><strong> - TAMPILAN PETA - </strong></h2>
            </div>
            <div class="panel-body">
              <div id="map" style="width:100%;height:380px;"></div>

 <!--  Maps CSS & JS -->
  <script src='https://api.tiles.mapbox.com/mapbox-gl-js/v1.6.0/mapbox-gl.js'></script>
  <link href='https://api.tiles.mapbox.com/mapbox-gl-js/v1.6.0/mapbox-gl.css' rel='stylesheet' />
  <script src='https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v4.4.2/mapbox-gl-geocoder.min.js'></script>
  <link rel='stylesheet' href='https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v4.4.2/mapbox-gl-geocoder.css' type='text/css' />
  <style>
      #map { top:0; bottom:0; width:100%; }
  </style>
<!--  End Maps CSS & JS -->

<!--================Maps Area =================-->
<section class="contact_area p_120">
    <div class="container">
        <div id='map'class="mapBox border border-primary rounded">
            <script>
                // https://docs.mapbox.com/help/tutorials/custom-markers-gl-js/#create-a-mapbox-gl-js-map
                // https://docs.mapbox.com/mapbox-gl-js/example/custom-marker-icons/
                mapboxgl.accessToken = 'pk.eyJ1Ijoia2Vsdmluenh1IiwiYSI6ImNrM2xxcXdnODBuYWozZ25tcGs0eGkzNmwifQ.34XILF-xBBsu2b3YCKn4qw';

                var map = new mapboxgl.Map({
                container: 'map',
                style: 'mapbox://styles/kelvinzxu/ck3mphl0h346k1cmwnqpmnf2i',
                center: [98.669865,3.667922],
                zoom: 15
                });
                map.addControl(new MapboxGeocoder({
                    accessToken: mapboxgl.accessToken,
                    mapboxgl: mapboxgl
                }));
                map.addControl(new mapboxgl.NavigationControl('mapbox.places'));
                new mapboxgl.Marker()
                .setLngLat([98.669865,3.667922])
                .addTo(map);
            </script>
        </div>
        
</div>
</section>
<!--================End Maps Area =================-->


            </div>
          </div>
        </div>
        </div>
      </div>
    </div>
<?php include_once "footer.php"; ?>