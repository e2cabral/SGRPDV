$(document).ready(function () {
    $('ul.tabs').tabs({
        swipeable: true,
        responsiveThreshold: 'infinity'
    });
    $(".button-collapse").sideNav();
    $(document).ready(function () {
        $('select').material_select();
    });

    //############################ NOVA SECÇÃO ############################################
    //var bt = document.getElementById("btn");
//    var mapa document.getElementById("mapa");
//
//    function getLocation() {
//        if (navigator.geoLocation) {
//            navigator.geoLocation.getCurrentPosition(showPosition);
//        } else {
//            mapa.innerHTML = "Geolocation is not supported by this browser.";
//        }
//    }
//    function showPosition(position) {
//        mapa.innerHTML = "Latitude: " + position.coords.latitude +
//                "<br>Longitude: " + position.coords.longitude;
//    }


});
