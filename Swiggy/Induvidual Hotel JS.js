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
 document.getElementById("SwiggyLogoTopNav").onclick()=function(e){
   window.open("http://localhost/aswinPrograms/Swiggy/WorkingPage.php","_blank");
 }