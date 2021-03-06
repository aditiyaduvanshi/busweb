


  <html>
<head>
    <meta charset="utf-8">
    <title>Basic Bootstrap Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"> 
    <!-- Optional Bootstrap theme -->
    <link rel="stylesheet" href="css/bootstrap-theme.min.css">
    

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <script>

$(document).ready(function(){
    $(".c1").click(function(){
        $("#d1").show();
        $("#d2").hide();
        $("#d3").hide();
    });
    $(".c2").click(function(){

        $("#d2").show();
        $("#d1").hide();
        $("#d3").hide();
        $(".c2").active;
       
    });
   $(".c3").click(function(){
        $("#d3").show();
        $("#d2").hide();
        $("#d1").hide();
    });
});

  </script>
<link rel="stylesheet" type="text/css" href="css/custom.css">
<style>
  body {
      font: 20px Montserrat, sans-serif;
      line-height: 1.8;
      color: #f5f6f7;
  }
  p {font-size: 16px;}
  .margin {margin-bottom: 45px;}

  h2 {
      font-size: 34px;
      text-transform: uppercase;
      color: #1abc9c;
      font-weight: 600;
      margin-bottom: -30px;
  }
  .bg-1 {
      background-color: white; 
      color: gray;
      text-align: center;
      font-size: 20px;
      font-family: "Montserrat";
      margin-top: 0px;
      margin-bottom: 15px;
  }
  .bg-2 {
      background-color:#fff;
      width: 70%;
      color: white;
      
  }
  .bg-3 {
      margin-top: 20px;
      color: white;
      text-align: center;
      border-radius: 25px;
      padding-bottom: 20px;
  }

 #p1 {
    border-radius: 45px;
  //background: #73AD21;
 // padding: 20px;
 // width: 200px;
 // height: 150px;
}

  .bg-4 {
      background-color: #2f2f2f; /* Black Gray */
      color: #fff;
  }

  #d2, #d3 {
    display: none;
  }

  img {
    opacity: 1;
    filter: alpha(opacity=50); /* For IE8 and earlier */
}

  /* navbar */


  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
      width: 40%;
      margin: auto;
      height: 30%;
  } 
  .carousel-control.right, .carousel-control.left {
      background-image: none;
      color: #1abc9c;
  }
  .carousel-indicators li {
      border-color: #1abc9c;
  }
  .carousel-indicators li.active {
      background-color: #1abc9c;
  } 

 @media screen and (max-width: 768px) {
    .btn {
      margin-bottom: 20px;
    }
  }     
  
  </style>

</head>
<body>
    
    <nav class="navbar navbar-inverse navbar-fixed-top ">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle navbar-responsive-collapse" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#myPage">Jaipur Buses</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li class="c1"><a href="#">Buses between stops</a></li>
        <li class="c2"><a href="#">Bus route</a></li>
        <li class="c3"><a href="#">Bus stops</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="container-fluid bg-1 text-center">
  <h2>Jaipur Buses</h2><br><p style=""><SMALL>[PINK CITY]</SMALL>

</div>

<div class="container-fluid bg-2">
  
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="4.jpg" alt="Chania" width="460" height="345">
      </div>

      <div class="item">
        <img src="5.jpg" alt="Chania" width="460" height="345">
      </div>
    
      <div class="item">
        <img src="6.jpg" alt="Flower" width="460" height="345">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  
</div>

<div class="container bg-3" id="d1">

 <div class="row" id="d1">
  <div class="col-sm-12" style="background-color:#18bc9; border-radius:10px">
  Buses between stops
  <form class="form-inline" role="form"  action="route.php" method="get">
    <div class="form-group">
      <input type="text" class="form-control" id="email" placeholder="From" name="from">
    </div>
    <div class="form-group">
      <input type="text" class="form-control" id="pwd" placeholder="To" name="to">
    </div>
    <button type="submit" class="btn btn-default">Search</button>
  </form>
 </div>
</div>
</div>

<div class="container bg-3" id="d2">

 <div class="row" id="d2">
  <div class="col-sm-12" style="background-color:#18bc9; border-radius:10px">
  Bus route
  <form class="form-inline" role="form" action="stops.php" method="get" >
    <div class="form-group">
      <input type="text" class="form-control" id="email" placeholder="Bus No." name="busno">
    </div>
    <button type="submit" class="btn btn-default">Search</button>
  </form>
 </div>
</div>
</div>

<div class="container bg-3" id="d3">

 <div class="row" id="d3">
  <div class="col-sm-12" style="background-color:#18bc9; border-radius:10px">
  Bus stops
  <form class="form-inline" role="form" action="bus.php" method="get" >
    <div class="form-group">
      <input type="text" class="form-control" id="email" placeholder="" name="stop">
    </div>
    <button type="submit" class="btn btn-default">Search</button>
  </form>
 </div>
</div>
</div>
    
</body>
</html>
