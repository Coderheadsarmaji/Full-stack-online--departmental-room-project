<?php
session_start();
require_once('checksession.php');
?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="Width=device-width,initial-scale=1.0">
	<title>HOME PAGE</title>
	<style type="text/css">
		*{
			margin: 0;
			padding: 0;
            box-sizing: border-box;
		}
        /*------star------*/
        body{
            overflow: hidden;
        }
        .star{
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100vh;
            background-image: /*linear-gradient(rgba(4,9,30,.5),rgba(4,9,30,.7)),*/url(image/bg2.jpg);
            background-position-x: center;
            background-size: cover;
            animation: animateBg 50s linear infinite;
        }
        @keyframes animateBg{
            0%,100%{
                transform: scale(1.0);
            }
            50%{
                transform: scale(1.2);
            }
        }
        span{
            position: absolute;
            top: 50%;
            left: 50%;
            width: 4px;
            height: 4px;
            background: #fff;
            border-radius: 50%;
            box-shadow: 0 0 0 4px rgba(255, 255, 255, 0.1),
            0 0 0 8px rgba(255, 255, 255, 0.1)
            /*0 0 0 20px rgba(255, 255, 255, 0.1)*/;
            animation: fall 3s linear infinite;
        }
        span::before{
            content: '';
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            width: 300px;
            height: 1px;
            background: linear-gradient(90deg,#fff,transparent);
        }
        @keyframes fall{
            0%{
                transform: rotate(315deg) translateX(0);
                opacity: 1;
            }
            70%{
                opacity: 1;
            }
            100%{
                transform: rotate(315deg) translateX(-1000px);
                opacity: 0;
            }
        }
        span:nth-child(1){
            top: 0;
            right: 0;
            left: initial;
            animation-delay: 0;
            animation-duration: 1s;
        }
        span:nth-child(2){
            top: 0;
            right: 80px;
            left: initial;
            animation-delay: -0.2s;
            animation-duration: 3s;
        }
        span:nth-child(3){
            top: 80px;
            right: 0;
            left: initial;
            animation-delay: 0.4s;
            animation-duration: 2s;
        }
        span:nth-child(4){
            top: 0px;
            right: 180px;
            left: initial;
            animation-delay: 0.6s;
            animation-duration: 1.5s;
        }
        span:nth-child(5){
            top: 0px;
            right: 400px;
            left: initial;
            animation-delay: 0.8s;
            animation-duration: 2.5s;
        }
        span:nth-child(6){
            top: 0px;
            right: 600px;
            left: initial;
            animation-delay: 1s;
            animation-duration: 3s;
        }
        span:nth-child(7){
            top: 300px;
            right: 0;
            left: initial;
            animation-delay: 1.2s;
            animation-duration: 1.75s;
        }
        span:nth-child(8){
            top: 0px;
            right: 700px;
            left: initial;
            animation-delay: 1.4s;
            animation-duration: 1.25s;
        }
        span:nth-child(9){
            top: 0px;
            right: 1000px;
            left: initial;
            animation-delay: .75s;
            animation-duration: 5.25s;
        }
        span:nth-child(10){
            top: 0px;
            right: 450px;
            left: initial;
            animation-delay: 2.4s;
            animation-duration: 2.25s;
        }
        /*------Home page------*/
		.header{
			min-height: 100vh;
			width: 100%;
			position: relative;
        }

        
	    nav{
			display: flex;
			padding: 2% 2%;
			justify-content: space-between;
			align-items: center;
           /* background-color: #ffcccb;
            box-shadow: 0 .3rem 2rem rgba(0, 0, 0, 1.0);*/
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

       /* nav ul li:hover{
          background-color: #ffcccb;
          border-radius: 10px;
        }*/

        .nav-links ul li a{
            color: white;
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
        .text-box{
        	width: 90%;
        	color: #fff;
        	position: absolute;
        	top: 50%;
        	left:50%;
        	transform: translate(-50%,-50%);
        	text-align: center;
        }
        .text-box h1{
        	font-size: /*62px*/58px;
        }
        .text-box p{
        	margin: 10px 0 40px;	
        }
        .text-box h3{
        	color:floralwhite;
        }
        nav .fa{
        	display: none;
        }
        @media(max-width: 700px){
        	.text-box h1{
        		font-size: 20px;
        	}
        	.nav-links ul li{
        		display: block;
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

        .cc{
            background: linear-gradient(90deg,#ff0000,#ff00f3,#ffff00,#ff0000/*,#0033ff,#ff00c4*/);
            background-size: 400%;
            -webkit-text-fill-color: transparent;
            -webkit-background-clip: text;
            animation: animate 10s linear infinite;
        }

        @keyframes animate{
            0%{background-position: 0%;}
            100%{background-position: 400%;}
        }
        
        .news-link{
            color: #d69696;
            text-decoration: none;
            font-size: 22px;
        }
        .news-link:hover{
            font-weight: bold;
            color: orangered;
        }
	</style>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <section class="star">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
    </section>
    <section class="header">
        <nav>
		    <a href="homepagepg.php"><img src="image/LOGO1.jpg"></a>
            <div class="nav-links" id="navLinks">
                <i class="fa fa-window-close-o" onclick="hideMenu()"></i>
                <ul>   
                    <li><a href="snpg.php"><b>SCHEDULE & NOTICE</b></a></li>
                    <li><a href="classlinkpg.php"><b>CLASSROOM</b></a></li>
                    <li><a href="bspg.php"><b>BOOKS & SYLLABUS</b></a></li>
                    <li><a href="libpg.php"><b>LIBRARY</b></a></li>
                    <li><a href="npyqpg.php"><b>NOTES & PAST YEARS' QUESTIONS</b></a></li>
                    <li><a href="cspg.php"><b>CONTACT US</b></a></li>
                    <li><a href="logout.inc.php"><b>LOG OUT</b></a></li>	
                </ul>
            </div>
            <i class="fa fa-bars" onclick="showMenu()"></i>
        </nav>
    	<div class="text-box">
 		    <h1> 
                <em><p>WELCOME</p>
                <p>TO</p>
 			    <p class="cc">DEPARTMENT OF COMPUTER SCIENCE </p>
 		        </em>
 	        </h1>
 	        <h3><marquee>
                <?php
                    include 'dbh.inc.php';
                    /*$connection = mysqli_connect("localhost", "root", "");
                    $db = mysqli_select_db($connection, "dept_website");*/
                    $query = 'SELECT quote FROM tablequotes1 ORDER BY submitid DESC LIMIT 1';
                    $query_run = mysqli_query($conn, $query);
                    while($row = mysqli_fetch_assoc($query_run)){
                      echo $row['quote'];
                    }
                ?>  
            </marquee></h3>
            <br>
            <br>
            <a href="newspg.php" class="news-link"><center>Click here to get the latest news about computers and technology</center></a>
        </div>
   </section>
    <script language="javascript" type="text/javascript">
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





