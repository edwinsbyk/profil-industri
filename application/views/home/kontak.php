<!-- Header -->
<header class="header p-0">
  <div class="h-500" id="map" data-marker-lat="-7.813108" data-marker-lng="110.3766936" data-remove-controls="true">
    </body>
    <script>
      var map;

      function initMap() {
        var myLatLng = {
          lat: -7.813108,
          lng: 110.3745049
        };

        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 15,
          center: myLatLng,
          disableDefaultUI: true,
          styles: [{
              "elementType": "geometry",
              "stylers": [{
                "color": "#f5f5f5"
              }]
            },
            {
              "elementType": "labels.icon",
              "stylers": [{
                "visibility": "off"
              }]
            },
            {
              "elementType": "labels.text.fill",
              "stylers": [{
                "color": "#616161"
              }]
            },
            {
              "elementType": "labels.text.stroke",
              "stylers": [{
                "color": "#f5f5f5"
              }]
            },
            {
              "featureType": "administrative.land_parcel",
              "stylers": [{
                "visibility": "off"
              }]
            },
            {
              "featureType": "administrative.land_parcel",
              "elementType": "labels.text.fill",
              "stylers": [{
                "color": "#bdbdbd"
              }]
            },
            {
              "featureType": "administrative.neighborhood",
              "stylers": [{
                "visibility": "off"
              }]
            },
            {
              "featureType": "poi",
              "elementType": "geometry",
              "stylers": [{
                "color": "#eeeeee"
              }]
            },
            {
              "featureType": "poi",
              "elementType": "labels.text.fill",
              "stylers": [{
                "color": "#757575"
              }]
            },
            {
              "featureType": "poi.business",
              "stylers": [{
                "visibility": "off"
              }]
            },
            {
              "featureType": "poi.park",
              "elementType": "geometry",
              "stylers": [{
                "color": "#e5e5e5"
              }]
            },
            {
              "featureType": "poi.park",
              "elementType": "labels.text",
              "stylers": [{
                "visibility": "off"
              }]
            },
            {
              "featureType": "poi.park",
              "elementType": "labels.text.fill",
              "stylers": [{
                "color": "#9e9e9e"
              }]
            },
            {
              "featureType": "road",
              "elementType": "geometry",
              "stylers": [{
                "color": "#ffffff"
              }]
            },
            {
              "featureType": "road",
              "elementType": "labels",
              "stylers": [{
                "visibility": "off"
              }]
            },
            {
              "featureType": "road.arterial",
              "stylers": [{
                "visibility": "off"
              }]
            },
            {
              "featureType": "road.arterial",
              "elementType": "labels.text.fill",
              "stylers": [{
                "color": "#757575"
              }]
            },
            {
              "featureType": "road.highway",
              "elementType": "geometry",
              "stylers": [{
                "color": "#dadada"
              }]
            },
            {
              "featureType": "road.highway",
              "elementType": "labels",
              "stylers": [{
                "visibility": "off"
              }]
            },
            {
              "featureType": "road.highway",
              "elementType": "labels.text.fill",
              "stylers": [{
                "color": "#616161"
              }]
            },
            {
              "featureType": "road.local",
              "stylers": [{
                "visibility": "off"
              }]
            },
            {
              "featureType": "road.local",
              "elementType": "labels.text.fill",
              "stylers": [{
                "color": "#9e9e9e"
              }]
            },
            {
              "featureType": "transit.line",
              "elementType": "geometry",
              "stylers": [{
                "color": "#e5e5e5"
              }]
            },
            {
              "featureType": "transit.station",
              "elementType": "geometry",
              "stylers": [{
                "color": "#eeeeee"
              }]
            },
            {
              "featureType": "water",
              "elementType": "geometry",
              "stylers": [{
                "color": "#c9c9c9"
              }]
            },
            {
              "featureType": "water",
              "elementType": "labels.text",
              "stylers": [{
                "visibility": "off"
              }]
            },
            {
              "featureType": "water",
              "elementType": "labels.text.fill",
              "stylers": [{
                "color": "#9e9e9e"
              }]
            }

          ]

        });

        var marker = new google.maps.Marker({
          position: myLatLng,
          map: map,
          title: 'Yes, right place!'

        }, );
      }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD8n4QEGcGtkULm46S5kS29W_5v5aRFouU&callback=initMap" async defer></script>
  </div>
</header><!-- /.header -->


<!-- Main Content -->
<main class="main-content">


  <section class="section">
    <div class="container">

      <form class="row gap-y" action="<?= base_url('auth/kontak') ?>" method="post">
        <div class="col-lg-7">
          <h3>Hubungi Kami</h3>
          <?= $this->session->flashdata('message'); ?>
          <br>
          <div class="form-row">
            <div class="form-group col-md-6">
              <input class="form-control form-control-lg" type="text" name="name" placeholder="Nama">
              <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>

            <div class="form-group col-md-6">
              <input class="form-control form-control-lg" type="text" name="email" placeholder="Email">
              <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
          </div>
          <div class="form-group">
            <?= form_error('message', '<small class="text-danger pl-3">', '</small>'); ?>

            <textarea class="form-control form-control-lg" rows="4" placeholder="Pesan Anda" name="message"></textarea>

          </div>

          <button class="btn btn-lg btn-primary" type="submit">Kirim Pesan</button>

        </div>


        <div class="col-lg-4 ml-auto text-center text-lg-left">
          <hr class="d-lg-none">
          <h3>Temukan Kami</h3>
          <br>
          <p>Jl. Taman Siswa No. 125<br>Yogyakarta,DIY, 55151</p>
          <p>08121561131<br>08127643463</p>
          <p>info@gi.co.id</p>
        </div>
      </form>

    </div>

  </section>



</main>