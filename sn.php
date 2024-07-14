<?php
session_start();
require_once('checksession.php');
?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="Width=device-width,initial-scale=1.0">
	<title>SCHEDULE & NOTICE</title>
	<style type="text/css">
		*{
			margin: 0;
			padding: 0;
		}
		.header{
			min-height: 50vh;
			width: 100%;
			background-image: /*linear-gradient(rgba(4,9,30,.1),rgba(4,9,30,.7)),*/url(image/sn.jpg); 
			background-position: center;
			background-size: cover;
			position: relative;
		}
		nav{
			display: flex;
			padding: 2% 6%;
			justify-content: space-between;
			align-items: center;			
		}
        nav img{
        	width: 100px;
        }
        .nav-links ul li{
        	list-style: none;
        	display: inline-block;
        	padding: 8px 12px;
        	position: relative;
        }
        nav ul li:hover{
          background-color: #ffcccb;
          border-radius: 10px;
        }
        .nav-links ul li a{
            color: black;
            text-decoration: none;
            font-size: 14px;
        }
        .nav-links ul li::after{
         	content: '';
         	width:0%;
         	height:2px;
         	background: #f44336;
         	display: block;
         	margin:auto;
         	transition: 0.5s;
        }
        .nav-links ul li:hover::after{
           width: 100%;

        }
        nav .fa{
        	display: none;
        }
        @media(max-width: 700px){
        	.header{
        		min-height: 30vh;
        		width: 100%;
        	}        	
        	.nav-links ul li{
        		display: block;
        		height: 100%;
        	}
        	.nav-links{
        		position: fixed;
        		background: #8b008b;
        		height: 100vh;
        		width: 200px;
        		top: 0;
        		right: -200px;
        		text-align: left;
        		z-index: 2;
        		transition: 1s;
        	}
        	nav .fa{
        		display: block;
        		color: #fff;
                margin: 10px;
                font-size: 22px;
                cursor:pointer; 
        	}
        }
	    .sn{
        	width: 80%;
        	margin: auto;
        	text-align: center;
        	padding-top: 100px;
        	position: relative;
        }
        h1{
        	font-size: 36px;
        	font-weight: 600;
        }
        .sn p{
        	color: #ee6363;
        	font-size: 20px;
        	font-weight: 600;
        	line-height: 22px;
        	padding:20px;
        }
        .row{
        	margin-top: 5%;
        	display: flex;
        	justify-content: space-between;
            flex-direction: column;
        }
        .sche-col{
        	flex-basis: 31%;
        	background: #d69696;
        	border-radius: 10px;
        	margin-bottom: 5%;
        	padding: 20px 12px;
        	box-sizing: border-box;
        	transition: 0.5s;
        }
        h3{
        	text-align: center;
        	font-weight: 600;
        	margin: 10px 0;
        }
        .sche-col:hover{
        	box-shadow: 0 0 20px 0px rgba(0,0,0,0.9);
        }
        @media(max-width: 700px){
        	img{
        		width: 350px;
        	}
        	nav ul li:hover{
        		background-color: transparent;
        	}
        }
        .notice{
        	width: 80%;
        	margin: auto;
        	text-align: center;
        	padding-top: 50px;
			height: 50%;
        }
        h1{
        	font-size: 36px;
        	font-weight: 600;
        }
        .not-col{
        	flex-basis: 31%;
        	background: #d69696;
        	border-radius: 10px;
        	margin: 5%;
        	padding: 20px 12px;
        	box-sizing: border-box;
        	transition: 0.5s;
        	align-content: center;
        } 
        .not-col:hover{
        	box-shadow: 0 0 20px 0px rgba(0,0,0,0.9);
        }
        .not-col h3{
        	color: blueviolet;
        	text-decoration: none;
        }
	</style>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<section class="header">
 	    <nav>
		 <a href="homepage.php"><img src="image/LOGO1.jpg"></a>
 		    <div class="nav-links" id="navLinks">
 			    <i class="fa fa-window-close-o" onclick="hideMenu()"></i>
 			    <ul>
				 <li><a href="homepage.php"><b>HOME</b></a></li>
 				   
 				    <li><a href="classlink.php"><b>CLASSROOM</b></a></li>
 				    <li><a href="bs.php" ><b>BOOKS & SYLLABUS</b></a></li>
 				    <li><a href="lib.php" ><b>LIBRARY</b></a></li>
 				    <li><a href="npyq.php" ><b>NOTES & PAST YEARS' QUESTIONS</b></a></li>
 				    <li><a href="cs.php" ><b>CONTACT US</b></a></li>
 			    </ul>
 		    </div>
 		    <i class="fa fa-bars" onclick="showMenu()"></i>
 	    </nav>
    </section>
    <!--------schedule-------->
<section class="sn">
 	<h1>SEMESTER WISE CLASS SCHEDULE</h1>
 	<p><em>SCHEDULES ARE SUBJECT TO CHANGE UNDER CERTAIN CIRCUMSTANCES</em></p>
    <!--<div class="row">
    	<div class="sche-col">
    		<h3>1ST SEMESTER</h3>
    		<img src="image/1stsem.png">
    	</div>
    	<div class="sche-col">
    		<h3>2ND SEMESTER</h3>
    		<img src="image/2ndsem.png">
    	</div>
    	<div class="sche-col">
    		<h3>3RD SEMESTER</h3>
    		<img src="image/3rdsem.png">
    	</div>
    	<div class="sche-col">
    		<h3>4TH SEMESTER</h3>
    		<img src="image/4thsem.png">
    	</div>
    	<div class="sche-col">
    		<h3>5TH SEMESTER</h3>
    		<img src="image/5thsem.png">
    	</div>
    	<div class="sche-col">
    		<h3>6TH SEMESTER</h3>
    		<img src="image/6thsem.png">
    	</div>
    </div>--->

    <?php
	include 'dbh.inc.php';
	/*$connection = mysqli_connect("localhost", "root", "");
	$db = mysqli_select_db($connection, "dept_website");*/
	$query = 'select * from schedule';
	$query_run = mysqli_query($conn, $query);
	while($row = mysqli_fetch_assoc($query_run)){
		?>
		<h3><center><b><?php echo $row['sem'];?></b></h3></center>
		<div class="sche-col">
			<br>
			<!--<h4><center><?php #echo $row['image'];?></center></h4>-->
			<h4><center><?php echo '<img src="data:image;base64,'.base64_encode($row['image']).'" >'; ?></center></h4>
			<br>
			<hr>
			<br>
		</div>
		<?php
	}
	?>

    <!--------notice-------->
	<div class="notice">
    <h1>NOTICE BOARD</h1>
    <div class="not-col">
    <br>
    <center>
	<marquee direction="up" scrolldelay="1" onmouseover="this.stop();"onmouseout="this.start();">
	<?php
	include 'dbh.inc.php';
	/*$connection = mysqli_connect("localhost", "root", "");
	$db = mysqli_select_db($connection, "dept_website");*/
	$query = 'select * from notice ORDER BY idNotice DESC ';
	$query_run = mysqli_query($conn, $query);
	while($row = mysqli_fetch_assoc($query_run)){
		?>
		<h3><b><?php echo $row['submitdate']."   :   ".$row['nsubject'];?></b></h3>
		<br>
		<h4><center><?php echo $row['nmessage'];?></center></h4>
		<br>
		<hr>
		</center>
		<br>
		<?php
	}
	?>
	</marquee>
	</div>
	</div>
</section>
<!---------javascript for toggle menu---------->
    <script>
 	  var navLinks=document.getElementById("navLinks");
 	  function showMenu(){
 		navLinks.style.right = "0";
 	  }
 	   function hideMenu(){
 		navLinks.style.right="-200px";
 	  }
    </script>
</body>
</html>