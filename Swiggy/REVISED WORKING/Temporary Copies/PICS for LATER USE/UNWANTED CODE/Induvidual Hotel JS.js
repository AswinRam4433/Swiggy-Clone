window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
    document.getElementById("header").style.fontSize = "25px";
    document.getElementById("headerImage").style.transform="scale(0.9)";
    document.getElementById("header").style.padding="18px 10px";
    document.querySelector("#header").style.height="170px";
    /*window.getElementById("header").style.top="50px";*/
    document.querySelector("#header").style.position="fixed";
    document.querySelector("#header").style.marginTop="-50px";
    console.log("IF has been triggered");
    
  } else {
    document.getElementById("header").style.fontSize = "30px";
    document.getElementById("headerImage").style.transform="scale(1)";
    document.getElementById("header").style.padding="25px 10px";
    document.querySelector("#header").style.height="200px";
    /*window.getElementById("header").style.top="0px";*/
    document.querySelector("#header").style.position="fixed";
    document.querySelector("#header").style.marginTop="0px";
    console.log("ELSE has been triggered");
    
  }
}



// document.querySelectorAll("#myTopnav a" ).addEventListener("click", clickFunction);

// function clickFunction() {
//   console.log("Top Nav Button has been clicked");
// }
function clicked(){
  console.log("This button has been clicked");
}
const allAinTopNav = document.querySelectorAll("myTopnav a");

 for (let i = 0; i < allAinTopNav.length; i++) {
     allAinTopNav[i].addEventListener("click", function() {
      console.log("Button Has Been clicked")
     });
 }


//  Adding Geolocation Functions

//FAILED GEOLOCATIONS
// function distance(lon1, lat1, lon2, lat2) {
//   var R = 6371; // Radius of the earth in km
//   var dLat = (lat2-lat1).toRad();  // Javascript functions in radians
//   var dLon = (lon2-lon1).toRad(); 
//   var a = Math.sin(dLat/2) * Math.sin(dLat/2) +
//           Math.cos(lat1.toRad()) * Math.cos(lat2.toRad()) * 
//           Math.sin(dLon/2) * Math.sin(dLon/2); 
//   var c = 2 * Math.atan2(Math.sqrt(a), Math.sqrt(1-a)); 
//   var d = R * c; // Distance in km
//   return d;
// }

// /** Converts numeric degrees to radians */
// if (typeof(Number.prototype.toRad) === "undefined") {
//   Number.prototype.toRad = function() {
//     return this * Math.PI / 180;
//   }
// }

// window.navigator.geolocation.getCurrentPosition(function(pos) {
//   console.log(pos); 
//   console.log("geolocation hit");
//   console.log(
//     distance(pos.coords.longitude, pos.coords.latitude, 13.053114216701317, 80.19204139181886)
//   ); 
// });


