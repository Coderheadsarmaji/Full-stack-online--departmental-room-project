<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="Width=device-width,initial-scale=1.0">
	<title>ENTRY CHOICE</title>
	<style type="text/css">
		*{
         margin: 0;
         padding: 0;
         box-sizing: border-box;
         font-family: consolas;
		}
		body{
			height: 100%
			width: 100%; 
			background:#07252d ;
			/*background-image: url(image/login1.jpg);*/
			background-position: center;
			background-size: cover;
			min-height: 110vh;
			display: flex;
			justify-content: center;
			align-items: center;
		}
		
		h1{
			position: relative;
			font-size: 4em;
			letter-spacing: 15px;
			color: #0e3742;
         -webkit-box-reflect: below 1px linear-gradient(transparent,#0004);
         line-height: 0.70em;
         outline: none;
         animation: glow 5s linear infinite;
		}
		@keyframes glow{
			0%{
				color: #0e3742;
				text-shadow: none;
			}
			70%{
				color: #fff;
				text-shadow: 0 0 10px #03bcf4,
            0 0 20px #03bcf4,
            0 0 40px #03bcf4,
            0 0 80px #03bcf4,
            0 0 160px #03bcf4;
			}
		}
		.container{
			position: relative;
			display: flex;
			justify-content: center;
			align-items: center;
			padding: 40px 0;
			flex-wrap: wrap;
		}
		.container .box{
			position: relative;
			width: 250px;
			height: 350px;
			color: #fff;
			background: #111;
			display: flex;
			justify-content: center;
			align-items: center;
			margin: 20px 30px;
			transition: .5s;
		}
		.container .box:hover{
			transform: translateY(-20px);
		}
		.container .box::before{
			content: '';
			position: absolute;
			top: 0;
			left: 0;
			width: 100%;
			height: 100%;
			background: linear-gradient(45deg,#ffbc00,#ff0058);
		}
		.container .box::after{
			content: '';
			position: absolute;
			top: 0;
			left: 0;
			width: 100%;
			height: 100%;
			background: linear-gradient(315deg,#03a9f4,#ff0058);
			filter: blur(30px);
		}
		.container .box:nth-child(2)::before,.container .box:nth-child(2)::after{
			background: linear-gradient(315deg,#4dff03,#00d0ff);
		}
		.container .box span{
			position: absolute;
			top: 6px;
			left: 6px;
			right: 6px;
			bottom: 6px;
			background: rgba(0,0,0,0.6);
			z-index: 2;
		}
		.container .box span::before{
			content: '';
			position: absolute;
			top: 0;
			left: 0;
			width: 100%;
			height: 100%;
			background: rgba(255,255,255,0.1);
			pointer-events: none;
		}
		.container .box .content{
         position: relative;
         z-index: 10;
         padding: 20px 40px;
		}
		.container .box .content h2{
			font-size: 2em;
			color: #fff;
			margin-bottom: 10px;
		}
		.container .box .content a{
			text-decoration: none;
			position: relative;
			display: inline-block;
			color: #fff;
			padding: 12px 36px;
			margin: 20px 30px;
			font-size: 18px;
			border-radius: 40px;
			overflow: hidden;
			background: linear-gradient(90deg,#755bea,#ff72c0);
			
		}
      .container .box .content a:hover{
        	box-shadow: 0 0 20px 0px rgba(0,0,0,0.5);
      }

      @media(max-width: 700px){
         	
         h1{
            font-size: 3em;
            letter-spacing: 5px;
			   padding-left: 20px;
        	}
         .container .box{
			   width: 190px;
			   height: 230px;
			   margin: 50px 30px;
		   }
      }
	</style>
</head>
<body>
	
	<h1>ENTER AS</h1>
	<div class="container">
		<div class="box">
			<span></span>
			<div class="content">
				<h2><center>UG STUDENT</center></h2>
				<a href="login.php">ENTER</a>
			</div>
		</div>
		<div class="box">
			<span></span>
			<div class="content">
				<h2><center>PG STUDENT</center></h2>
				<a href="loginpg.php">ENTER</a>
			</div>
		</div>
		<div class="box">
			<span></span>
			<div class="content">
				<h2><center>ADMIN</center></h2>
				<a href="admin.php">ENTER</a>
			</div>
		</div>
	</div>
</body>
</html>