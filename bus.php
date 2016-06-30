<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="jaipur bus directory">
    <meta name="author" content="">

    <title>jaipur bus</title>

    


    
    <!-- Custom CSS -->
    <link href="css/freelancer.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    

    <!-- Bootstrap Core CSS - Uses Bootswatch Flatly Theme: http://bootswatch.com/flatly/ -->
    <link href="css/bootstrap.min.css" rel="stylesheet">



    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
   
    <link rel="stylesheet" type="text/css" href="css/custom.css">
<style>
    
#d2, #d3 {
    display: none;
  }

  hr {
    display: block;
    margin-top: 3%;
    margin-bottom: 2em;
    margin-left: auto;
    margin-right: auto;
    border-style: inset;
    border-width: 2px;
}

@media (max-width: 730px) {
    #d2, #d3, #d1{
        display: none;
    }
  }

</style>

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar" aria-expanded="false" aria-controls="#myNavbar">
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

    <!-- Header -->
    <header>
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <img class="img-responsive" src="bus2.png" alt="">       
                </div>

 <div class="row" id="d1">
  <div class="col-sm-6" style="background-color:#18bc9; border-radius:10px">
  <h3>Buses between stops</h3>
  <form class="form-inline" role="form"  action="route.php" method="get">
    <div class="form-group">
      <input type="text" class="form-control" id="example1" placeholder="From" name="from">
    </div>
    <div class="form-group">
      <input type="text" class="form-control" id="example2" placeholder="To" name="to">
    </div>
    <button type="submit" class="btn btn-default">Search</button>
  </form>
 </div>
</div>
 <div class="row" id="d2">
  <div class="col-sm-6" style="background-color:#18bc9; border-radius:10px">
  <h3>Bus route</h3>
  <form class="form-inline" role="form" action="stops.php" method="get" >
    <div class="form-group">
      <input type="text" class="form-control" id="example3" placeholder="Bus No." name="busno">
    </div>
    <button type="submit" class="btn btn-default">Search</button>
  </form>
 </div>
</div>


 <div class="row" id="d3">
  <div class="col-sm-6" style="background-color:#18bc9; border-radius:10px">
  <h3>Bus stops</h3>
  <form class="form-inline" role="form" action="bus.php" method="get" >
    <div class="form-group">
      <input type="text" class="form-control" id="example4" placeholder="" name="stop">
    </div>
    <button type="submit" class="btn btn-default">Search</button>
  </form>
 </div>
</div>


            </div>
        </div>
    </header>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    

    <!-- Plugin JavaScript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="js/classie.js"></script>
    <script src="js/cbpAnimatedHeader.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/freelancer.js"></script>
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

    <script src="js/jquery.bootcomplete.js"></script>

     <script type="text/javascript">
    $('#example1').bootcomplete({
        url:'auto.php',formParams: {
            'stop' : $('#example1')
        }
    });
</script>


     <script type="text/javascript">
    $('#example2').bootcomplete({
        url:'auto.php',formParams: {
            'stop' : $('#example2')
        }
    });
</script>


     <script type="text/javascript">
    $('#example3').bootcomplete({
        url:'auto.php',formParams: {
            'stop' : $('#example3')
        }
    });
</script>


     <script type="text/javascript">
    $('#example4').bootcomplete({
        url:'auto.php',formParams: {
            'stop' : $('#example4')
        }
    });
</script>

<?php


$url = parse_url(getenv("CLEARDB_DATABASE_URL"));

$server = $url["host"];
$username = $url["user"];
$password = $url["pass"];
$db = substr($url["path"], 1);

$conn = new mysqli($server, $username, $password, $db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$a=trim($_GET["stop"]);

$sql = "SELECT * FROM bus where haults like '%".$a."%'";

$result = $conn->query($sql);
if ($result->num_rows > 0) {
	?>
    
    <div class="container">
    <h3 class="margin" style="margin-top:40px;margin-bottom:40px;color:#2c3e50;"><b>Buses passing through <?php echo $_GET["stop"] ?></b></h3>
<table class="table table-striped">
    <thead>
      <tr>
        <th>Bus No.</th>
      </tr>
    </thead>
    <tbody>
<?php 
    while($row = $result->fetch_assoc()) {
    	$temp=explode(";",$row["haults"]);
    	for ($x = 0; $x < count($temp); $x++){
	    	if(stripos($temp[$x], $a)!==false){
	       ?>
         <tr>
        <td><a href=<?php echo "'stops.php?busno=".$row["no"]."'" ; ?>  ><?php echo $row["no"] ?></a></td>
      </tr> 	
    	
<?php  break;}} } ?>
  </tbody>
  </table>
  </div>

  <?php 
} else {
    echo "0 results";
}
$conn->close();
?>

<div class="container">
<hr>
<h4 style="color:#2c3e50;margin-bottom:20px;"><b>contact</b></h4>
<p style="color:#18bc9c;margin-bottom:1px;"><b><i>aditi yaduvanshi</i></b><br></p>
<p>Email - aditi.yaduvanshi95@gmail.com</p>
    </div>

</body>
</html>