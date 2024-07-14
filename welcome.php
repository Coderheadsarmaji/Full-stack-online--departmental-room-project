<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="Width=device-width,initial-scale=1.0">
    <title>WELCOME</title>
    <style type="text/css">
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body{
            overflow: hidden;
        }
        .header{
            min-height: 100vh;
            width: 100%;
            background-image: linear-gradient(rgba(4,9,30,.5),rgba(4,9,30,.7)),url(image/welcomebg.jpg);
            background-position: center;
            background-size: cover;
            position: relative;
        }
        .text-box{
            width: 900px;
            position: absolute;
            top: 50%;
            left:50%;
            transform: translate(-50%,-50%);
            text-align: center;
        }
        .text-box h1{
            font-size: 58px;
            text-shadow: 0 0 10px #00b3ff,
            0 0 20px #00b3ff,
            0 0 40px #00b3ff,
            0 0 80px #00b3ff,
            0 0 120px #00b3ff;
        }
        .lightbar{
            position: absolute;
            top: 0;
            left: 0;
            width: 5px;
            height: 100%;
            border-radius: 10px;
            background: #fff;
            z-index: 2;
            box-shadow: 0 0 10px #00b3ff,
            0 0 20px #00b3ff,
            0 0 40px #00b3ff,
            0 0 80px #00b3ff,
            0 0 120px #00b3ff;
            animation: bar 5s linear infinite;
        }

        @keyframes bar{
            0%,5%{
                transform: scaleY(0) translateX(0);
            }
            10%{
                transform: scaleY(1) translateX(0);
            }
            90%{
                transform: scaleY(1) translateX(calc(900px - 5px));
            }
            95%,100%{
                transform: scaleY(0) translateX(calc(900px - 5px));
            }
        }
        
        @media(max-width: 700px){
            .text-box h1{
                font-size: 30px;
            }

        }

        .btn{
            padding-top: 500px;
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
            color: white;
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
        <div class="text-box">
            <div class="lightbar"></div>
            <h1> 
                <em>ONLINE DEPARTMENTAL ROOM</em>
            </h1>
        </div>
        <div class="btn">
            <a href="front.php">
            <center>
                <button class="button-link">
                    <span></span>ENTER
                </button>
            </center>
        </a>    
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
