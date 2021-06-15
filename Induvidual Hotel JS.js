window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
    document.getElementById("header").style.fontSize = "25px";
    document.getElementById("headerImage").style.transform="scale(0.9)";
    document.getElementById("header").style.padding="18px 10px";
    document.querySelector("#header").style.height="170px";
    
  } else {
    document.getElementById("header").style.fontSize = "30px";
    document.getElementById("headerImage").style.transform="scale(1)";
    document.getElementById("header").style.padding="25px 10px";
    document.querySelector("#header").style.height="200px";
    
  }
}