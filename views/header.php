 <script>

window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 28 || document.documentElement.scrollTop > 28) {
    document.getElementById("navbar").style.position = "fixed";
	document.getElementById("navbar").style.top = "0px";
  } else {
    document.getElementById("navbar").style.position = "absolute";
	document.getElementById("navbar").style.top = "28px";
  }
}
function opme() {
  if(document.getElementById("open").style.height != "80px"){
	document.getElementById("open").style.height = "80px";
	document.getElementById("open").style.backgroundColor = "#3c4558";
	document.getElementById("section").style.backgroundColor = "#3c4558";}else{document.getElementById("open").style.height = "0px";
	document.getElementById("section").style.backgroundColor = "#4f5a6e";
	document.getElementById("open").style.backgroundColor = "#4f5a6e";}
 

}

   
document.onreadystatechange = function () {
	var width = 0;
	var element = document.getElementById("myBar"); 


  if (document.readyState === "interactive" || document.body.readyState === "interactive") {

  var identity = setInterval(scene, 5); 
  function scene() { 
    if (width >= 20) { 
      clearInterval(identity); 
    } else { 
      width++;  
      element.style.width = width + '%';  
     
  } 
} 
}
    if (document.readyState === "complete" || document.body.readyState === "complete") {
width = 20;
  var identity = setInterval(scene, 2); 
  function scene() { 
    if (width >= 100) { 
      clearInterval(identity);
element.style.opacity = '0';	  
    } else {
		
      width++;  
      element.style.width = width + '%';  
     
  } 
} 
}
};


</script>
<header style="box-sizing:border-box;" id="demo"> 
	<div style="width: 100%;position:fixed;top:0px;z-index:5;">
  <div id="myBar"></div>
</div>
	</header>