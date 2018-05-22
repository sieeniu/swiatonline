function mapTzn() {
    // Create a map object and specify the DOM element for display.
    var map = new google.maps.Map(document.getElementById('map'), {
        center: {
            lat: 50.814685,
            lng: 19.107705
        },
        zoom: 17
    });
}
