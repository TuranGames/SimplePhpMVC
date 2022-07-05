    <?php

    ?>
    <script>
          function changePage(page, ct,but){
      console.log('working...');
      var page = "controllers/" + page + "?currentArticle=" + ct;
     var infoSend = "?page=HTML";
     var xhttp = new XMLHttpRequest();

     var content = document.getElementById('contentIsHere');
      xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
     
      if(this.responseText == ""){

      }else{
console.log("sfsf");

        content.innerHTML = this.responseText;
      document.getElementById(but).className = "active-tab";
}

    }
    
  };
  xhttp.open("GET", page, true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send(null);

  }
    function getPage(page){
      console.log('working...');
     var page = "controllers/" + page+ "?page=HTML";
     var infoSend = "?page=HTML";
     var xhttp = new XMLHttpRequest();
     var content = document.getElementById('contentIsHere');
      xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
     
      if(this.responseText == ""){

      }else{

        content.innerHTML = this.responseText;}

    }
    
  };
  xhttp.open("GET", page, true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send(null);

  }
    </script>

    <link href="styles/main.css" rel="stylesheet">
<script type="text/javascript" src="scripts.js"></script>
<link rel="stylesheet" href="styles/font-awesome/css/font-awesome.min.css">
<div id="main-container">
  <!-- Left Menu -->
  <div class="dark-menu">
    <a id="search-btn" href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
    <a onclick="getPage('files.php')"></span><i class="fa fa-folder-o" aria-hidden="true"></i></a>
    <a class="active"  onclick="getPage('articles.php')"><i class="active-icon fa fa-file-text-o" aria-hidden="true"></i></a>
    <a onclick="getPage('statistics.php')"><i class="fa fa-bar-chart" aria-hidden="true"></i></a>
    <a onclick="getPage('users.php')"><i class="fa fa-user" aria-hidden="true"></i></a>
  </div> 
  <!-- END Left Menu -->
<div id="contentIsHere"></div>

</div>

