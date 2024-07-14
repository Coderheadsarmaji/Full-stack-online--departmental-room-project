<?php
session_start();
require_once('checksession.php');
require_once('admincheck.php');
?>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="Width=device-width,initial-scale=1.0">
    <title>ADMIN PANEL</title>
    <style type="text/css">
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body{
            overflow: hidden;
        }
        .bg{
            position: absolute;

        }
        .video-bg{
            min-height: 100%;
            min-width: 100%;
            width: auto;
            height: auto;
            z-index: -1;
        }
      /*------Admin Panel------*/
        .header{
            min-height: 100vh;
            width: 100%;
            /*background-image: linear-gradient(rgba(4,9,30,.5),rgba(4,9,30,.7)),url(image/adminpanel.jpg); */
            background-position: center;
            background-size: cover;
            position: relative;
        }
        nav{
            display: flex;
            padding: 2% 6%;
            justify-content: space-between;
            align-items: center;
            /*background-color: #000000;
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
        .nav-links ul li a{
            color: white;
            text-decoration: none;
            font-size: 14px;
        }
        .nav-links ul li::after{
            content: '';
            width:0%;
            height:2px;
            background: /*#ADD8E6*/red;
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
            font-size: 58px;
        }
        .text-box p{
            margin: 10px 0 40px;    
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
            /*background: linear-gradient(90deg,#ffffff,#ff0000,#ffffff);*/
            background: linear-gradient(90deg,/*#ff0000,#ff00f3,*/#ADD8E6, #f44336,#ffff00/*,,#ff00c4*/);
            background-size: 400%;
            -webkit-text-fill-color: transparent;
            -webkit-background-clip: text;
            animation: animate 10s linear infinite;
        }
        @keyframes animate {
            0%{background-position: 0%;}
            100%{background-position: 400%;}
        }
    </style>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <section class="bg">
        <video autoplay loop class="video-bg" muted play-inline>
            <source src="files/bg.mp4" type="video/mp4">
        </video>
    </section>
    <section class="header">
        <nav>
            <img src="image/LOGO1.jpg">
            <div class="nav-links" id="navLinks">
                <i class="fa fa-window-close-o" onclick="hideMenu()"></i>
                <ul> 
                    <li><a href="homepage.php" ><b>UG</b></a></li> 
                    <li><a href="homepagepg.php" ><b>PG</b></a></li> 
                    <li><a href="unicode.php" ><b>PASSWORD</b></a></li> 
                    <li><a href="quotes.php" ><b>QUOTES</b></a></li> 
                    <li><a href="notice.php" ><b>UPLOAD NOTICE</b></a></li>
                    <li><a href="attendenceadmin.php" ><b>UG ATTENDENCE</b></a></li>
                    <li><a href="attendenceadminp.php" ><b>PG ATTENDENCE</b></a></li>
                    <li><a href="library.php" ><b>UG LIBRARY</b></a></li>
                    <li><a href="librarypg.php" ><b>PG LIBRARY</b></a></li> 
                    <li><a href="logout.inc.php"><b>LOG OUT</b></a></li>
                </ul>
            </div>
            <i class="fa fa-bars" onclick="showMenu()"></i>
        </nav>
        <div class="text-box">
            <h1> 
                <em><p class="cc">WELCOME ADMIN</p></em>
            </h1>
        </div>
   </section>
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