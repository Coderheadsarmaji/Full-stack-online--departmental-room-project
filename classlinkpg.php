<?php
session_start();
require_once('checksession.php');
?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="Width=device-width,initial-scale=1.0">
	<title>CLASSROOM</title>
	<style type="text/css">
        *{
			margin: 0;
			padding: 0;
		}
		.header{
			min-height: 50vh;
			width: 100%;
			background-image: /*linear-gradient(rgba(4,9,30,.1),rgba(4,9,30,.7)),*/url(image/classroom.jpg); 
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
        		min-height: 20vh;
        		width: 100%;
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
            nav ul li:hover{
                background-color: transparent;
            }
        }

		.classroom-link{
        	padding: 50px;
        	margin: 10px;
        }  

        h1{
        	font-size: 36px;
        	font-weight: 600;
        }

        .classroom-link	p{
            color: #ee6363;
            font-size: 20px;
            font-weight: 600;
            line-height: 22px;
            padding: 10px;
            text-align: center;
        }

        .classrooms{
            background-color: white;
            color: black;
            margin-top: 5%;
            display: flex;
            justify-content: space-between;
            flex-direction: row;           
        }

        .class-link{
            flex-basis: 31%;
            background-color: #d69696;
            border-radius: 10px;
            margin-bottom: 5%;
            padding: 20px 12px;
            box-sizing: border-box;
        	transition: 0.5s;
        }

        .class-link:hover{
            box-shadow: 0 0 20px 0px rgba(0,0,0,0.9);
        }

        .button-link{
            width: 200px;
            padding: 5px 10px;
            text-align: center;
            margin: 10px 30px;
            border-radius: 25px;
            font-weight: bold;
            border: 2px solid #009688;
            background: transparent;
            color: black;
            cursor: pointer;
            font-size: 20px;
            position: relative;
            z-index: 1;
        }

        span{
            background: #009688;
            height: 100%;
            width: 0;
            border-radius: 25px;
            position: absolute;
            left: 0;
            bottom: 0;
            z-index: -1;
            transition: 0.5s;
        }

        .button-link:hover span{
            width: 100%;
        }

        .button-link:hover{
            border: none;
            border:2px solid #ee6363;
            background: #ee6363;
         }

        @media(max-width: 700px){
        	.classrooms{
        		flex-direction: column;
        	}
        }
       /* -----code block------  */
        .code h2{
            font-size: 39px;
            font-weight: 600;
            animation: blink 2s linear infinite;  
        }

        .code h3{
            font-size: 36px;
            font-weight: 600;
            padding: 10px 50px 50px 50px;
            background: linear-gradient(90deg,#ff0000,#ee6363,#ff00f3,#0033ff,#ff00c4,#ff0000);
            background-size: 400%;
            -webkit-text-fill-color: transparent;
            -webkit-background-clip: text;
            animation: animate 10s linear infinite;
        }

        .attendence h3{
            font-size: 30px;
            font-weight: 500;
            padding: 10px 10px 10px 10px;
            background: linear-gradient(90deg,#ff0000,#ee6363,#ff00f3,#0033ff,#ff00c4,#ff0000);
            background-size: 400%;
            -webkit-text-fill-color: transparent;
            -webkit-background-clip: text;
            animation: animate 10s linear infinite;
        }

        .button-style{
            margin-left: 625px;
            margin-bottom: 50px;
            border-radius: 15px;
            border: 2px solid #008920;
            background: transparent;
            color: black;
            cursor: pointer;
            font-size: 10px;
        }

        @keyframes animate{
            0%{background-position: 0%;}
            100%{background-position: 400%;}
        }

        @keyframes blink{
            50%{
                opacity: 0;
            }

            80%{
                opacity: 0.5;
            }
        }
	</style>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<section class="header">
 	    <nav>
            <a href="homepagepg.php" ><img src="image/LOGO1.jpg"></a>
 		    <div class="nav-links" id="navLinks">
 			    <i class="fa fa-window-close-o" onclick="hideMenu()"></i>
 			    <ul>
                 <li><a href="homepagepg.php"><b>HOME</b></a></li>
 				    <li><a href="snpg.php" ><b>SCHEDULE & NOTICE</b></a></li>
 				 
 				    <li><a href="bspg.php" ><b>BOOKS & SYLLABUS</b></a></li>
 				    <li><a href="libpg.php"><b>LIBRARY</b></a></li>
 				    <li><a href="npyqpg.php" ><b>NOTES & PAST YEARS' QUESTIONS</b></a></li>
 				    <li><a href="cspg.php"><b>CONTACT US</b></a></li>
 			    </ul>
 		    </div>
 		    <i class="fa fa-bars" onclick="showMenu()"></i>
 	    </nav>
 	</section>
    <!--------class links-------->
	<section class="classroom-link">
        <h1><center>OUR CLASSROOM</center></h1>
        <p><em>JOIN YOUR CLASSES , BY GOING TO YOUR RESPECTIVE ROOMS & CLICKING ON THE "JOIN" BUTTON, ON TIME</em></p>
        <div class="classrooms">
        <div class="class-link">
            <h3><center>ROOM-1</center></h3>
            <a href="https://meet.google.com/bsv-snbq-ihq" target="_blank">
                <center>
                    <button class="button-link">
                    <span></span>Join
                    </button>
            </center>
            </a>
        </div>
        <div class="class-link">
            <h3><center>ROOM-2</center></h3>
            <a href="https://meet.google.com/ufb-gsrg-azi" target="_blank">
                <center>
                    <button class="button-link">
                    <span></span>Join
                    </button>
            </center>
            </a>
        </div>
        <div class="class-link">
            <h3><center>ROOM-3</center></h3>
            <a href="https://meet.google.com/crg-geyi-qrv" target="_blank">
                <center>
                    <button class="button-link">
                    <span></span>Join
                    </button>
            </center>
            </a>
        </div>
        </div>
    </section>

     <section class="attendence">

        <a href="attendencepg.php">  
            <button class="button-style">  
                <h3><center><em>Attendence</em></center></h3>
            </button>
        </a>
 
    </section>

    <section class="code">
      <h2><center>Classes over?</center></h2>
      <h3><center><em>Come Gear Up Your Coding Skills</em></center></h3>
      <iframe src="https://onecompiler.com/" width="100%" height="595px" frameborder="0" overflow="hidden" scrolling="no" ></iframe>
      <h3><center><em>The SQL Code Zone</em></center></h3>
      <!---<iframe src="https://rextester.com/l/sql_server_online_compiler" width="100%" height="700px" frameborder="0" scrolling="no"></iframe>--->
       <iframe src="https://www.jdoodle.com/execute-sql-online/" width="100%" height="890px" frameborder="0" scrolling="no"></iframe>
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