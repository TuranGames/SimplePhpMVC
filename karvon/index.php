

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>KarvonTrade</title>
<link rel='stylesheet' href='res/styles/bootstrap.min.css'>
<link rel='stylesheet' href='res/styles/custom.css'>
<link rel='stylesheet' href='res/styles/font-awesome/css/font-awesome.min.css'>
<styles>

</styles>

<script src='res/scripts/jquery.min.js'></script>
<script src="res/scripts/Chart.bundle.js"></script>
<script src='res/scripts/bootstrap.min.js'></script>
<script src='chart.js'></script>
<link href="main.css" rel="stylesheet">
<script>
  window.console = window.console || function(t) {};
</script>
<script>
  if (document.location.search.match(/type=embed/gi)) {
    window.parent.postMessage("resize", "*");
  }
</script>
</head>
<body translate="no">
<body class="nav-md">
<div class="container body">
<div class="main_container">
<div class="col-md-3 left_col">
<div class="left_col scroll-view">
<div class="navbar nav_title" style="border: 0;">
<a href="index.html" class="site_title"><i class="fa fa-dashboard"></i> <span>KarvonTrade</span></a>
</div>
<div class="clearfix"></div>



<br />

<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
<div class="menu_section">
<h3>General</h3>
<ul class="nav side-menu">
<li><a><i class="fa fa-home"></i> Home </a>

</li>
<li><a><i class="fa fa-edit"></i> Manage <span class="fa fa-chevron-down"></span></a>
<ul class="nav child_menu">
<li><a >Add new</a>
<ul class="nav child_menu">
<li class="sub_menu">
	<a href="level2.html">Category</a>
</li>
<li><a href="#level2_1">Product</a>
</li>
</ul>
</li>
<li><a href="form_advanced.html">Edit exicting</a></li>
</ul>
</li>
<li><a><i class="fa fa-desktop"></i> Products <span class="fa fa-chevron-down"></span></a>
<ul class="nav child_menu">
<li><a href="general_elements.html">Xolodilnik</a></li>
<li><a href="media_gallery.html">Stul</a></li>
<li><a href="typography.html">Kreslo</a></li>
<li><a href="icons.html">Telik</a></li>
</ul>
</li>
<li><a><i class="fa fa-table"></i> Confirm Sales <span class="fa fa-chevron-dow"></span></a>

</li>
<li><a><i class="fa fa-bar-chart-o"></i>Statistcs<span class="fa fa-chevron-down"></span></a>
<ul class="nav child_menu">
<li><a href="chartjs.html">Chart JS</a></li>
<li><a href="chartjs2.html">Chart JS2</a></li>

</ul>
</li>

</ul>
</div>

</div>
</div>
</div>

<div class="top_nav">
<div class="nav_menu">
<nav>
<div class="nav toggle">
<a id="menu_toggle"><i class="fa fa-bars"></i></a>
</div>
</nav>
</div>
</div>

<div class="right_col" role="main" style="background-color: #2a2b3d">
<section class="statis">
<div class="container-fluid">
<div class="row">
<div class="col-md-1">
<div class="bg-primary">
<i class="fa fa-eye borderImag"></i>
<h3>5,154</h3>
<p class="lead">Page views</p>
</div>
</div>
<div class="col-md-1">
<div class="bg-primary" style="background-color: #d9534f">
<i class="fa fa-user-o borderImag" ></i>
<h3>245</h3>
<p class="lead">User registered</p>
</div>
</div>
<div class="col-md-1">
<div class="bg-primary" style="background-color: #f0ad4e">
<i class="fa fa-shopping-cart borderImag"></i>
<h3>5,154</h3>
<p class="lead">Product sales</p>
</div>
</div>
<div class="col-md-1">
<div class="bg-primary" style="background-color:#5cb85c">
<i class="fa fa-handshake-o borderImag"></i>
<h3>5,154</h3>
<p class="lead">Transactions</p>
</div>
</div>
</div>
</div>
</section>

<section class="charts" style="width:100%">
<div class="container-fluid">
<div class="row">
<div class="cv">
<div class="chart-container">
<h3>Chart</h3>

<canvas id="myChart" height="90"></canvas>
</div>
</div>
   <div class="col-md-6 cv">
              <div class="chart-container">
                <h3>Chart2</h3>
                <canvas id="pieChart" height="190"></canvas>
              </div>
            </div>
              <div class="col-md-6 cv">
              <div class="chart-container">
                <h3>Chart2</h3>
                <canvas id="pieChart2" height="190"></canvas>
              </div>
            </div>
</div>
</div>
</section>

</div>

</div>
</div>
</body>

<script id="rendered-js" src="scripts.js"></script>
</body>
</html>
