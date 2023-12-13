"use strict";

async function initMap() {
  await fetch("/webv2/TalasGo/toko_api.php")
    .then((res) => res.json())
    .then((res) => {
      res.forEach((data) => {
        locations.push({
          lat: parseFloat(data.latitude),
          lng: parseFloat(data.longitude),
        });

        locations_content.push({
          content: `<div class="prop-i"> 
          <a href="property.html" class="prop-i-img"><img src="img/1/props/prop1.jpg" alt=""></a> 
          <div class="prop-i-top"> 
          <p class="prop-i-loc"><a href="#">${data.kotakecamatanname}</a></p> 
          </div> 
          <h3 class="prop-i-ttl">${data.productname}</h3> 
          <hr class="prop-i-hr">  
          <ul class="prop-i-infolist"> 
          <li><span class="prop-i-info-icon"><i class="fa fa-arrows-alt"></i></span><a href="${data.linkname}">Open in Google Maps</a></li><br> 
          <li><span class="prop-i-info-icon"><i class="fa fa-clock-o"></i></span>${data.jamname}</li><br> 
          </ul> 
          <div class="prop-i-bottom"> 
          <p class="prop-i-price"><span class="prop-i-price-val">${data.manufacturerbrand}</span></p> 
          <p class="prop-i-type"><a href="#">Telepon</a></p> 
          </div> 
          </div>,`,
        });
      });
      console.log(locations);
    })
    .catch(console.error);

  var map = new google.maps.Map(document.getElementById("map-full"), {
    zoom: 16,
    center: {
      lat: -6.597091368671192,
      lng: 106.80265631622196,
    },
  });

  var markers = locations.map(function (location, i) {
    return new google.maps.Marker({
      position: location,
      icon: "assets/images/marker.png",
    });
  });

  var infowindows = locations_content.map(function (location_content, i) {
    return new google.maps.InfoWindow({
      content: location_content.content,
    });
  });

  var infowindows_events = locations_content.map(function (infowindow, i) {
    markers[i].addListener("click", function () {
      infowindows[i].open(map, markers[i]);
    });
  });

  // Add a marker clusterer to manage the markers.
  var markerCluster = new MarkerClusterer(map, markers, {
    imagePath:
      "https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/m",
  });
}
var locations_content = [];

var locations = [];

(function (window, google) {
  $(document).ready(function () {
    if ($("#map-full").length) {
      initMap();
    }

    if ($("#prop-map").length) {
      var map_options = {
          center: {
            lat: 37.79135,
            lng: -122.435883,
          }, 
          zoom: 17,
          scrollwheel: false,
        },
        map_element = $("#prop-map")[0];
      var contentString =
        '<div class="prop-map-marker-cont">' +
        "<p>" +
        "<b>Comfortable Apartments 15 Sqrt</b><br>" +
        "Spain, Madrid, 774 NE 84th" +
        "</p>" +
        "</div>";

      // Map Init
      var map = new google.maps.Map(map_element, map_options);

      var infowindow = new google.maps.InfoWindow({
        content: contentString,
      });

      var marker = new google.maps.Marker({
        position: {
          lat: 37.79135,
          lng: -122.435883,
        },
        map: map,
        icon: "assets/images/marker.png",
      });

      marker.addListener("click", function () {
        infowindow.open(map, marker);
      });
    }
  });
})(window, google);
