<?php
session_start();
require_once('checksession.php');
?>

<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="Width=device-width,initial-scale=1.0">
	<title>NOTES & PAST YEARS' QUESTIONS</title>
	<style type="text/css">
		*{
			margin: 0;
			padding: 0;
		}
		.header{
			min-height: 50vh;
			width: 100%;
			background-image: /*linear-gradient(rgba(4,9,30,.1),rgba(4,9,30,.7)),*/url(image/npyq.jpg); 
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
        .notes{
        	width: 100%;
        	margin: auto;
        	text-align: center;        	
        }
        .notes h1{
        	font-size: 36px;
        	font-weight: 600;
        }        
        .notes p{
            color: #ee6363;
            font-size: 20px;
            font-weight: 600;
            line-height: 22px;
            padding: 10px;
            text-align: center;
        }
        .study-mat1{
            color: black;
            margin-top: 5%;
            display: flex;
            justify-content: space-between;
            padding: 10px;
        }
        .study-mat2{           
            color: black;
            margin-top: 5%;
            display: flex;
            justify-content: space-between;
            padding: 10px;
        }
        .sm{
            flex-basis: 31%;
            background-color: #d69696;
            border-radius: 10px;
            margin-bottom: 5%;
            padding: 20px 12px;
            box-sizing: border-box;
        }
        .sm:hover{
            box-shadow: 0 0 20px 0px rgba(0,0,0,0.9);
        }
        @media(max-width: 700px){
        	.study-mat1{
        		flex-direction: column;
        	}
        	.study-mat2{
        		flex-direction: column;
        	}
        }
		.pqn{
        	padding-top: 100px;
        }
        .pqn h1{
        	font-size: 36px;
        	font-weight: 600;
        }
        .pyq1{
            background-color: white;
            color: black;
            margin-top: 5%;
            display: flex;
            justify-content: space-between;
            padding: 10px;
        }
        .pyq2{
            background-color: white;
            color: black;
            margin-top: 5%;
            display: flex;
            justify-content: space-between;
            padding: 10px;
        }
        .qp{
            flex-basis: 31%;
            background-color: #d69696;
            border-radius: 10px;
            margin-bottom: 5%;
            padding: 20px 12px;
            box-sizing: border-box;
            transition: .5s;
        }
        .qp:hover{
            box-shadow: 0 0 20px 0px rgba(0,0,0,0.9);
        }
        @media(max-width: 700px){
        	.pyq1{
        		flex-direction: column;
        	}
        	.pyq2{
        		flex-direction: column;
        	}
        }
        .prev-q p{
            color: #ee6363;
            font-size: 20px;
            font-weight: 600;
            line-height: 22px;
            padding: 10px;
            text-align: center;
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
	</style>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<section class="header">
 	    <nav>
 		    <a href="homepage.php" ><img src="image/LOGO1.jpg"></a>
 		    <div class="nav-links" id="navLinks">
 			    <i class="fa fa-window-close-o" onclick="hideMenu()"></i>
 			    <ul>
                 <li><a href="homepage.php"><b>HOME</b></a></li>
 				    <li><a href="sn.php" ><b>SCHEDULE & NOTICE</b></a></li>
 				    <li><a href="classlink.php"><b>CLASSROOM</b></a></li>
 				    <li><a href="bs.php" ><b>BOOKS & SYLLABUS</b></a></li>
 				    <li><a href="lib.php" ><b>LIBRARY</b></a></li>
 				    <li><a href="cs.php" ><b>CONTACT US</b></a></li>
 			    </ul>
 		    </div>
 		    <i class="fa fa-bars" onclick="showMenu()"></i>
 	    </nav>
 	</section>
    <section class="pqn">
        <!--------notes-------->
	    <div class="notes">
            <h1><center>STUDY MATERIALS</center></h1>
            <p><em>ANY STUDY MATERIAL OR NOTES RELATED TO THE SUBJECT WILL BE UPLOADED HERE<em></p>
            <div class="study-mat1">
                <div class="sm">
                    <h3><center>SEMESTER-1</center></h3>
                    <a href="https://classroom.google.com/c/MzI5MTM5NDc4NTk5?cjc=2q76z3h" target="_blank">
                        <center>
                            <button class="button-link">
                                <span></span>Notes
                            </button>
                        </center>
                    </a>
                </div>
                <div class="sm">
                    <h3><center>SEMESTER-2</center></h3>
                    <a href=" https://classroom.google.com/c/MzI5NDM5Njg3NjUw?cjc=ds7m6ri"target="_blank">
                        <center>
                            <button class="button-link">
                              <span></span>Notes
                            </button>
                        </center>
                    </a>
                </div>
                <div class="sm">
                    <h3><center>SEMESTER-3</center></h3>
                    <a href="https://classroom.google.com/c/MzI5MTM5NDc4ODcw?cjc=jnqrgz7" target="_blank">
                        <center>
                            <button class="button-link">
                               <span></span>Notes
                            </button>
                        </center>
                    </a>
               </div>
            </div>
            <div class="study-mat2">
        	    <div class="sm">
                    <h3><center>SEMESTER-4</center></h3>
                    <a href="https://classroom.google.com/c/MzI5NDQxNTA2MzU5?cjc=6sjycfs"target="_blank">
                        <center>
                            <button class="button-link">
                             <span></span>Notes
                            </button>
                        </center>
                    </a>
                </div>
                <div class="sm">
                    <h3><center>SEMESTER-5</center></h3>
                    <a href="https://classroom.google.com/c/MzI5MTM5NDc4OTQz?cjc=r234u7m"target="_blank">
                        <center>
                            <button class="button-link">
                              <span></span> Notes
                            </button>
                        </center>
                    </a>
                </div>
                <div class="sm">
                    <h3><center>SEMESTER-6</center></h3>
                    <a href=" https://classroom.google.com/c/MzI5NDQxNTA2MzY3?cjc=fhruab4"target="_blank">
                        <center>
                            <button class="button-link">
                                <span></span>Notes
                            </button>
                        </center>
                    </a>
                </div>
            </div>
        </div>
        <!--------past years' questions-------->
        <div class="prev-q">
            <h1><center>PAST YEARS' QUESTION PAPERS</center></h1>
            <p><em>GET ALL THE QUESTION PAPERS OF THE SEMESTER EXAMS OF THE PREVIOUS YEARS</em></p>
            <div class="pyq1">
                <div class="qp">
                    <h3><center>SEMESTER-1</center></h3>
                    <a href="https://classroom.google.com/c/MzI5MDQ4NDI1Nzc4?cjc=4ysqsbu" target="_blank">
                        <center>
                            <button class="button-link">
                                <span></span>Question Papers
                            </button>
                        </center>
                    </a>
                </div>
                <div class="qp">
                    <h3><center>SEMESTER-2</center></h3>
                    <a href="https://classroom.google.com/c/MzI5MDQ4NDI1ODI1?cjc=yjtlmca" target="_blank">
                        <center>
                            <button class="button-link">
                                <span></span>Question Papers
                            </button>
                        </center>
                    </a>
                </div>
                <div class="qp">
                    <h3><center>SEMESTER-3</center></h3>
                    <a href="https://classroom.google.com/c/MzI5MDQ4NDI1ODQ0?cjc=mvwl6x7" target="_blank">
                        <center>
                            <button class="button-link">
                                <span></span>Question Papers
                            </button>
                        </center>
                    </a>
                </div>
            </div>
            <div class="pyq2">
                <div class="qp">
                    <h3><center>SEMESTER-4</center></h3>
                    <a href="https://classroom.google.com/c/MzI5MDQ4NDI1ODY1?cjc=5j76sgm" target="_blank">
                        <center>
                            <button class="button-link">
                                <span></span> Question Papers
                            </button>
                        </center>
                    </a>
                </div>
                <div class="qp">
                    <h3><center>SEMESTER-5</center></h3>
                        <a href="https://classroom.google.com/c/MzI5MDQ4NDI1ODkw?cjc=uu4mlw7"target="_blank">
                            <center>
                                <button class="button-link">
                                    <span></span> Question Papers
                                </button>
                            </center>
                        </a>
                </div>
                <div class="qp">
                    <h3><center>SEMESTER-6</center></h3>
                    <a href="https://classroom.google.com/c/MzI5MDQ4NDI1OTMx?cjc=mbkwzgh"target="_blank">
                        <center>
                            <button class="button-link">
                             <span></span> Question Papers
                            </button>
                        </center>
                    </a>
                </div>
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