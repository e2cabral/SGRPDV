$(document).ready(function(){
    $('ul.tabs').tabs({
        swipeable: true,
        responsiveThreshold: 'infinity'
    });
    $(".button-collapse").sideNav();
    $(document).ready(function() {
        $('select').material_select();
    });
});
