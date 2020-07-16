<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css"
   integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ=="
   crossorigin=""/>
    <!-- Make sure you put this AFTER Leaflet's CSS -->
 <script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js"
   integrity="sha512-gZwIG9x3wUXg2hdXF6+rVkLF/0Vi9U8D2Ntg4Ga5I5BZpVkVxlJWbSQtXPSiUTtC0TjtGOmxa1AJPuV0CPthew=="
   crossorigin=""></script>
   <style type="text/css">
          
   #issMap { height: 480px; width : 720px; }
    </style>
    <title>Halaman Awal</title>
</head>
<body>
 <div id="issMap"></div>
</body>
<script>
    
    const mymap = L.map('issMap').setView([ -8.33277885,114.14164208057488], 11);
    const attribution = '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributor';
   //  var polygon = L.polygon([
   //  [-8.2498082,114.3607127]
   // ]).addTo(mymap);

//                           @foreach($padamTamu as $d)
//    var circle = L.circle(['{{$d->latitude}}','{{$d->longitude}}'], {
//     color: 'red',
//     fillColor: '#f03',
//     fillOpacity: 0.5,
//     radius: 500
// }).addTo(mymap);
//    circle.bindPopup("{{$d->deskripsi_pekerjaan}}");
// @endforeach

  

                          @foreach($padamTamu as $d)
L.marker(['{{$d->trafo_cek->longitude}}','{{$d->trafo_cek->latitude}}']).addTo(mymap)
    .bindPopup('<p>{{$d->jadwal_padam}}</p><p>{{$d->trafo_cek->alamat}}</p><p>{{$d->deskripsi_pekerjaan}}</p>')
    .openPopup();
@endforeach

// @foreach ($padamTamu as $d)
//     const marker = L.marker([
//       [{{ $d->latitude}},
//       {{ $d->longitude}}]
    
//       ]).addTo(mymap);
    
// @endforeach


    const api_url = 'https://nominatim.openstreetmap.org/details.php?place_id=236525347'
    const tileUrl = 'https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png'
    const tiles = L.tileLayer(tileUrl,{ attribution });
    tiles.addTo(mymap);
    async function getISS(){
        const response = await fetch(api_url);
        const data = await response.json();
        const { latitude, longitude } = data;

        document.getElementById('lat').textContent = latitude;
        document.getElementById('lan').textContent = longitude;
    }
</script>
</html>