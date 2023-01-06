function initMap(){
   navigator.geolocation.getCurrentPosition(function(position){
    let lat = position.coords.latitude;
    let lng = position.coords.longitude;

    let map = new google.maps.Map(document.getElementById('google-map'),{
        center: {lat: lat, lng:lng},
        zoom:16
    });
   });
}