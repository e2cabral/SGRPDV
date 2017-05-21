<?php include 'includes/header.php'; ?>
    <article class="col s12 m12 l12">
        <div class="container">
            
            <div class="" id="mapa">
                
            </div>
            
        </div>
    </article>
<script>
var x = document.getElementById("mapa");

window.addEventListener("load", getLocation);

function getLocation() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition);
    } else { 
        x.innerHTML = "Geolocation is not supported by this browser.";
    }
}

function showPosition(position) {
    var lat = position.coords.latitude; 
    var lng = position.coords.longitude;
    var center =new google.maps.LatLng(lat, lng);
    var mapProp= {
        center:center,
        zoom:14
    };
    var map=new google.maps.Map(x,mapProp);
    var marker = new google.maps.Marker({
        position: center,
        animation:google.maps.Animation.BOUNCE
    });
    marker.setMap(map);
}
</script>
    <?php include 'includes/footer.php'; ?>
