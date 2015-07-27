// Retorna un lat long aleatoria dentro de un bounding box.
function getRandomPoint() {
    var minLAT = -34.578;
    var maxLAT = -34.656;
    var minLNG = -58.386;
    var maxLNG = -58.508;
    var LatLng = [];

    LatLng[0] = (Math.random() * (maxLAT - minLAT) + minLAT).toFixed(3);
    LatLng[1] = (Math.random() * (maxLNG - minLNG) + minLNG).toFixed(3);

    return LatLng;
}

$("#agregaPunto").click(
    function() {
        var latlng = getRandomPoint();
        $.post("proceso.php", {
            latlng_data: latlng[1] + "," + latlng[0]
        }, function(data) {

        })
        .done(function(){capas[1].setQuery("SELECT * FROM mapadepuntos");})
        ;
    });
