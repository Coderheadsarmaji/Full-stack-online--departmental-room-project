<?php
session_start();
require_once('checksession.php');
?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="Width=device-width,initial-scale=1.0">
	<title>NEWS PORTAL</title>
	<style type="text/css">
		*{
			margin: 0;
			padding: 0;
		}
		.header{
			min-height: 50vh;
			width: 100%;
			background-image: /*linear-gradient(rgba(4,9,30,.1),rgba(4,9,30,.7)),*/url(image/news.jpg); 
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
        .nav-links ul li a:hover{
            color: black;
        }
        

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
            nav ul li:hover{
                background-color: transparent;
            }
            .nav-links ul li a:hover{
            color: white;
        }
            iframe{
                width: 425px;

            }
        }
		.news-portal{
        	padding: 50px;
        	margin: 10px;
        }  

        h1{
        	font-size: 36px;
        	font-weight: 600;
        }

        .news-portal p{
            color: #ee6363;
            font-size: 20px;
            font-weight: 600;
            line-height: 22px;
            padding: 10px;
            text-align: center;
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
				    <li><a href="homepage.php"><b>GO TO HOMEPAGE</b></a></li>
 			    </ul>
 		    </div>
 		    <i class="fa fa-bars" onclick="showMenu()"></i>
 	    </nav>
 	</section>
    <section class="news-portal">
       <h1><b><center>NEWS PORTAL</center></b></h1>
	   <p><em>Get the latest information about computers and the huge domain of its technology.</em></p>
	   <br>
	   <br>
       <hr>
	   <iframe src="https://phys.org/technology-news/computer-sciences/" width="100%" height="5100px" frameborder="0" overflow="hidden"scrolling="no"></iframe>
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



<!-----API Key: 7059f5851406441298a14cd4e8671691----->