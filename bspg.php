<?php
session_start();
require_once('checksession.php');
?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="Width=device-width,initial-scale=1.0">
	<title>BOOKS & SYLLABUS</title>
	<style type="text/css">
		*{
			margin: 0;
			padding: 0;
		}
		.header{
			min-height: 50vh;
			width: 100%;
			background-image: /*linear-gradient(rgba(4,9,30,.1),rgba(4,9,30,.7)),*/url(image/booklist.jpg); 
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
    }
		.books{
        	width: 100%;
        	margin: auto;
        	text-align: center;
        	padding-top: 100px;
    }
    h1{
        	font-size: 36px;
        	font-weight: 600;
    }
    .books p{
        	color: #ee6363;
        	font-size: 20px;
        	font-weight: 600;
        	line-height: 22px;
        	padding:10px;
    }
    .row{
        	margin-top: 5%;
        	padding: 20px;
        	display: flex;
        	justify-content: space-between;
            flex-direction: column;
            flex-wrap: wrap;
    }
    .books-col{
        	flex-basis: 31%;
        	background: #d69696;
        	border-radius: 10px;
        	margin-bottom: 5%;
        	padding: 20px 12px;
        	box-sizing: border-box;
    }
    h3{
        	text-align: center;
        	font-weight: 600;
        	margin: 10px 0;
    }       
    .books-col img{
        	width: 150px;
        	height: 200px;
        	padding: 10px;
    }
    .books-col img:hover{
        	border-radius: 7px;
        	top: 0;
        	cursor: pointer;
        	background: linear-gradient(rgba(0,0,0,0.5),#009688);
        	transition: 1s;
    }
    .syllabus{
        	border-color: blue;
        	padding: auto;
            margin: auto;
    }

    @media(max-width: 700px){
          .syllabus{
          	width:100%;
          	
          }
          embed{
            height: 350px;
            width: 60%;
          }
          nav ul li:hover{
                background-color: transparent;
            }
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
 		    <a href="homepagepg.php" ><img src="image/LOGO1.jpg"></a>
 		    <div class="nav-links" id="navLinks">
 			    <i class="fa fa-window-close-o" onclick="hideMenu()"></i>
 			    <ul>
 				    <li><a href="homepagepg.php"><b>HOME</b></a></li>
 				    <li><a href="snpg.php" ><b>SCHEDULE & NOTICE</b></a></li>
 				    <li><a href="classlinkpg.php"><b>CLASSROOM</b></a></li>
 				    <li><a href="libpg.php" ><b>LIBRARY</b></a></li>
 				    <li><a href="npyqpg.php"><b>NOTES & PAST YEARS' QUESTIONS</b></a></li>
 				    <li><a href="cspg.php"><b>CONTACT US</b></a></li>
 			    </ul>
 		    </div>
 		    <i class="fa fa-bars" onclick="showMenu()"></i>
 	    </nav>
	</section>
  <!--------book suggestions-------->
	<section class="books">
    <h1>SEMESTER WISE BOOK LIST</h1>
    <p><em>BOOK LIST HAS BEEN GIVEN AS PER THE OFFICIAL SYLLABUS OF KALYANI UNIVERSITY</em></p>
    <div class="row">
        <div class="books-col">
            <h3>1ST SEMESTER</h3>
            <marquee scrolldelay="1" onmouseover="this.stop();"onmouseout="this.start();">
               <img src="image/cc1.1.jpg">
               <a href="https://www.amazon.in/dp/B07XFP7CZ6/ref=cm_sw_r_wa_apa_glt_fabc_DEPQ9B7YM1AA3YTD860T" target="_blank"><i class="fa fa-amazon"></i></a>
               <a href="https://www.flipkart.com/computer-fundamentals-with-cd-6th/p/itmdyueqrgvcaufh?pid=9788176567527&lid=LSTBOK9788176567527UYHOG4&marketplace=FLIPKART&cmpid=content_book_8003060057_u_8965229628_gmc_pla&tgi=sem,1,G,11214002,u,,,395332127672,,,,m,,mobile,,,,,&ef_id=Cj0KCQjwsqmEBhDiARIsANV8H3bELD-3IFtn3wos5qdn2uiPDkoC4H_u8VQnK7-0CYc8zdXbFSQXSEcaApJDEALw_wcB:G:s&s_kwcid=AL!739!3!395332127672!!!u!295092701166!&gclid=Cj0KCQjwsqmEBhDiARIsANV8H3bELD-3IFtn3wos5qdn2uiPDkoC4H_u8VQnK7-0CYc8zdXbFSQXSEcaApJDEALw_wcB&gclsrc=aw.ds"target="_blank"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>               
               <img src="image/cc1.2.jpg">
               <a href="https://www.amazon.in/dp/8131733092/ref=cm_sw_r_wa_apa_glt_fabc_5Q9JKQ3G4T4W6FRHKMK1"target="_blank"><i class="fa fa-amazon"></i></a>
               <a href=" https://www.flipkart.com/computer-fundamentals/p/itmemghmfpcmrsnq"target="_blank"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>               
               <img src="image/cc1.3.jpeg">
               <a href="https://www.amazon.in/dp/9332549443/ref=cm_sw_r_wa_apa_glt_fabc_HK0BBDAX1W48P8S0715R"target="_blank"><i class="fa fa-amazon"></i></a>
               <a href=" https://www.flipkart.com/c-programming-language-2nd/p/itmezunqsgukxa9h"target="_blank"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>              
               <img src="image/cc1.4.jpg">
               <a href="https://www.amazon.in/dp/0070411832/ref=cm_sw_r_wa_apa_glt_fabc_WYQS6V6EBCF5VPQY1HEW"target="_blank"><i class="fa fa-amazon"></i></a>
               <a href=" https://www.flipkart.com/c-complete-reference/p/itmfbujj8zhgfjwg?pid=9780072132953&lid=LSTBOK9780072132953ZKSEO9&marketplace=FLIPKART&cmpid=content_book_12825718239_u_8965229628_gmc_pla&tgi=sem,1,G,11214002,u,,,516793455547,,,,m,,mobile,,,,,&ef_id=Cj0KCQjwsqmEBhDiARIsANV8H3bs2UfZmwQUaDn0zI9Gk6RKGy56bYonq4WfpsjGl-z0BuGU0pIK7EAaAlgrEALw_wcB:G:s&s_kwcid=AL!739!3!516793455547!!!u!293946777986!&gclid=Cj0KCQjwsqmEBhDiARIsANV8H3bs2UfZmwQUaDn0zI9Gk6RKGy56bYonq4WfpsjGl-z0BuGU0pIK7EAaAlgrEALw_wcB"target="_blank"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>               
               <img src="image/cc1.5.jpg">
               <a href="https://www.amazon.in/dp/935316513X/ref=cm_sw_r_wa_apa_glt_fabc_DZJ3YZ7X87C4CY3J8RBK"target="_blank"><i class="fa fa-amazon"></i></a>
               <a href="https://www.flipkart.com/programming-ansi-c/p/itmevd3qfpergcbs"target="_blank"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>              
               <img src="image/cc1.6.jpg">
               <a href="https://www.amazon.in/dp/9389845688/ref=cm_sw_r_wa_apa_glt_fabc_MQRE9VV575GBTPPMTP08"target="_blank"><i class="fa fa-amazon"></i></a>
               <a href="https://www.flipkart.com/let-us-c/p/itmfbuhanayef64r"target="_blank"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
               <img src="image/cc2.1.jpeg">
               <a href=" https://www.amazon.in/Digital-Circuits-Vol-I-Combinational/dp/8189874098"target="_blank"><i class="fa fa-amazon"></i></a>
               <a href="https://www.flipkart.com/digital-circuits-problems-solutions-vol/p/itme4zypm6f6xhqh"target="_blank"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>              
               <img src="image/cc2.2.jpg">
               <a href=" https://www.amazon.in/Digital-Circuits-Vol-Ii-Sequential/dp/8189874144"target="_blank"><i class="fa fa-amazon"></i></a>
               <a href="napg.php"target="_blank"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>              
               <img src="image/cc2.3.jpg">
               <a href=" https://www.amazon.in/Digital-Logic-Computer-Design-1/dp/933254252X/ref=sr_1_2_sspa?dchild=1&keywords=Digital+Logic+and+Computer+Design%2C+M.Morris+Mano&qid=1619806260&s=books&sr=1-2-spons&psc=1&spLa=ZW5jcnlwdGVkUXVhbGlmaWVyPUEySTZEUEFFSllEU1NMJmVuY3J5cHRlZElkPUEwNjI2OTY1MjZTT1VXQ1VDMklBTyZlbmNyeXB0ZWRBZElkPUEwNTUyMjAzM1JOWFAxMTNIMUpLNyZ3aWRnZXROYW1lPXNwX2F0ZiZhY3Rpb249Y2xpY2tSZWRpcmVjdCZkb05vdExvZ0NsaWNrPXRydWU="target="_blank"><i class="fa fa-amazon"></i></a>
               <a href=" https://www.flipkart.com/digital-logic-computer-design/p/itm6c0f935659fda"target="_blank"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>               
               <img src="image/cc2.4.jpg">
               <a href="https://www.amazon.in/Digital-Principles-Applications-Albert-Malvino/dp/0070398836"target="_blank"><i class="fa fa-amazon"></i></a>
               <a href=" https://www.flipkart.com/digital-principles-applications/p/itmevd2hdvjung37"target="_blank"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>              
               <img src="image/cc2.5.jpg">
               <a href="https://www.amazon.in/Digital-Systems-Applications-Ronald-Tocci/dp/0130856347"target="_blank"><i class="fa fa-amazon"></i></a>
               <a href=" https://www.flipkart.com/digtal-systems-principles-applications-10th/p/itma3d79a35ddc91"target="_blank"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>               
               <img src="image/cc2.6.jpg">
               <a href="https://www.amazon.in/Digital-Fundamentals-Thomas-L-Floyd/dp/9332584605/ref=tmm_pap_swatch_0?_encoding=UTF8&qid=&sr="target="_blank"><i class="fa fa-amazon"></i></a>
               <a href="https://www.flipkart.com/digital-fundamentals/p/itmfbtm9zwyycyg5"target="_blank"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>               
            </marquee>
        </div>
        <div class="books-col">
            <h3>2ND SEMESTER</h3>
            <marquee scrolldelay="1" onmouseover="this.stop();"onmouseout="this.start();">
               <img src="image/cc3.1.jpeg">
               <a href="https://www.amazon.in/C-Complete-Reference-Herbert-Schildt/dp/007053246X"target="_blank"><i class="fa fa-amazon"></i></a>
               <a href="https://www.flipkart.com/c-complete-reference-4th-reference/p/itmfbujj8zhgfjwg"target="_blank"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>              
               <img src="image/cc3.2.jpg">
               <a href="https://www.amazon.com/C-Programming-Language-4th/dp/0321563840"target="_blank"><i class="fa fa-amazon"></i></a>
               <a href="https://www.flipkart.com/c-programming-language/p/itmed40d8933e954"target="_blank"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>              
               <img src="image/cc3.3.jpg">
               <a href="https://www.amazon.in/Programming-Principles-Practice-Using-C/dp/0321992784"target="_blank"><i class="fa fa-amazon"></i></a>
               <a href="napg.php"target="_blank"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>               
               <img src="image/cc3.4.jpg">
               <a href="https://www.amazon.in/Object-Oriented-Programming-C-Balagurusamy/dp/9352607996"target="_blank"><i class="fa fa-amazon"></i></a>
               <a href="https://www.flipkart.com/object-oriented-programming-c/p/itmextjwdzgecuu6"target="_blank"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>               
               <img src="image/cc3.5.jpg">
               <a href="https://www.amazon.com/How-Program-8th-Paul-Deitel/dp/0132662361"target="_blank"><i class="fa fa-amazon"></i></a>
               <a href="https://www.flipkart.com/c-program-introducing-new-14-standard-seventh/p/itmf2qcfzh2nk4a6"target="_blank"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>               
               <img src="image/cc3.6.jpg">
               <a href="https://www.amazon.in/Schaums-Outline-Programming-Outlines/dp/0071353461"target="_blank"><i class="fa fa-amazon"></i></a>
               <a href="https://www.flipkart.com/schaum-s-outline-data-structures-c/p/itmczynu4bfsyb2p"target="_blank"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>              
               <img src="image/cc3.7.jpg">
               <a href="https://www.amazon.in/Accelerated-Practical-Programming-Addison-Wesley-Depth/dp/020170353X"target="_blank"><i class="fa fa-amazon"></i></a>
               <a href="https://www.flipkart.com/accelerated-c/p/itm48da96e21f448"target="_blank"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>               
               <img src="image/cc3.8.jpg">
               <a href="https://www.amazon.in/Effective-Specific-Addison-Wesley-Professional-Computing/dp/0321334876"target="_blank"><i class="fa fa-amazon"></i></a>
               <a href="https://www.flipkart.com/effective-c/p/itmfbx9fkjxp6fdc"target="_blank"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
               <img src="image/cc3.9.jpeg">
               <a href="https://www.amazon.in/Head-First-Programming-Definitive-Beginners/dp/1500310891"target="_blank"><i class="fa fa-amazon"></i></a>
               <a href="https://www.flipkart.com/head-first-c-programming-definitive-beginner-s-guide/p/itme3abtxesayfe6"target="_blank"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>               
               <img src="image/cc3.10.jpeg">
               <a href="https://www.amazon.in/Problem-Solving-C-Walter-Savitch/dp/0134448286"target="_blank"><i class="fa fa-amazon"></i></a>
               <a href="https://www.flipkart.com/problem-solving-c/p/itmfbxakpmfgrvnt"target="_blank"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>               
               <img src="image/cc3.11.jpg">
               <a href="https://www.amazon.in/C-Primer-Stanley-B-Lippman/dp/0321714113"target="_blank"><i class="fa fa-amazon"></i></a>
               <a href="https://www.flipkart.com/c-primer/p/itmfbu4zvts7hcgm"target="_blank"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
               <img src="image/cc4.1.jpg">
               <a href="https://www.amazon.in/Computer-System-Architecture-United-States/dp/0131755633"target="_blank"><i class="fa fa-amazon"></i></a>
               <a href="https://www.flipkart.com/computer-system-architecture/p/itmfbchegj3grzuz"target="_blank"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>               
               <img src="image/cc4.2.jpg">
               <a href="https://www.amazon.in/Assembly-Language-Computer-Architecture-Using/dp/0534405274"target="_blank"><i class="fa fa-amazon"></i></a>
               <a href="https://www.flipkart.com/assembly-language-computer-architecture-using-c-java/p/itm1440e674ba959"target="_blank"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>               
               <img src="image/cc4.3.jpg">
               <a href="https://www.amazon.com/Computer-Organization-Architecture-Designing-Performance/dp/0136073735"target="_blank"><i class="fa fa-amazon"></i></a>
               <a href="https://www.flipkart.com/computer-organization-architecture/p/itmfbrzuxkrc7jdx"target="_blank"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>               
               <img src="image/cc4.4.jpeg">
               <a href="https://www.amazon.in/Computer-Organization-HAMACHER/dp/1259005275"target="_blank"><i class="fa fa-amazon"></i></a>
               <a href="https://www.flipkart.com/computer-organization/p/itmfbe3mzyvzbuhr"target="_blank"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>               
           </marquee>            
        </div>
        <div class="books-col">
            <h3>3RD SEMESTER</h3>
            <marquee scrolldelay="1" onmouseover="this.stop();"onmouseout="this.start();">
               <img src="image/cc5.1.jpg">
               <a href="https://www.amazon.in/Data-Structures-Algorithms-Adam-Drozdek/dp/1133608426"target="_blank"><i class="fa fa-amazon"></i></a>
               <a href="https://www.flipkart.com/data-structure-algorithm-c/p/itme8npzzxt3x6gy"target="_blank"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>               
               <img src="image/cc5.2.jpeg">
               <a href="https://www.amazon.in/Data-Structures-Algorithms-Applications-C/dp/007236226X"target="_blank"><i class="fa fa-amazon"></i></a>
               <a href="https://www.flipkart.com/data-structures/p/itmeyf6jvka3kzdu"target="_blank"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>               
               <img src="image/cc5.3.jpg">
               <a href="https://www.amazon.in/Data-Structures-Using-C/dp/8131703282"target="_blank"><i class="fa fa-amazon"></i></a>
               <a href="https://www.flipkart.com/data-structures-using-c/p/itmf8xfygsa9d9hz"target="_blank"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>               
               <img src="image/cc5.4.jpg">
               <a href="https://www.amazon.in/Data-Structures-Program-Design-United/dp/0137689950"target="_blank"><i class="fa fa-amazon"></i></a>
               <a href="napg.php"target="_blank"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>               
               <img src="image/cc5.5.jpg">
               <a href="https://www.amazon.in/Data-Structures-Using-D-Malik/dp/0324782012"target="_blank"><i class="fa fa-amazon"></i></a>
               <a href="https://www.flipkart.com/data-structures-using-c/p/itmeyf5rhz8yy7cm"target="_blank"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>               
               <img src="image/cc5.6.jpg">
               <a href="napg.php"target="_blank"><i class="fa fa-amazon"></i></a>
               <a href="napg.php"target="_blank"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>               
               <img src="image/cc5.7.jpg">
               <a href="https://www.amazon.in/Data-Structures-Using-Moshe-Augenstein/dp/0130477214"target="_blank"><i class="fa fa-amazon"></i></a>
               <a href="https://www.flipkart.com/data-structures-using-c/p/itmf8xfygsa9d9hz"target="_blank"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>               
               <img src="image/cc5.8.jpg">
               <a href="napg.php"target="_blank"><i class="fa fa-amazon"></i></a>
               <a href="napg.php"target="_blank"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>               
               <img src="image/cc5.9.jpg">
               <a href="https://www.amazon.in/Data-Structures-JAVA-Special-Indian/dp/0070146071"target="_blank"><i class="fa fa-amazon"></i></a>
               <a href="https://www.flipkart.com/data-structures-java/p/itmdx92hvympdgpk"target="_blank"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>               
               <img src="image/cc5.10.jpg">
               <a href="napg.php"target="_blank"><i class="fa fa-amazon"></i></a>
               <a href="napg.php"target="_blank"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>              
               <img src="image/cc5.11.jpg">
               <a href="napg.php"target="_blank"><i class="fa fa-amazon"></i></a>
               <a href="napg.php"target="_blank"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
               <img src="image/cc6.1.jpeg">
               <a href="https://www.amazon.in/Introduction-Algorithms-Eastern-Economy-Thomas/dp/8120340078"target="_blank"><i class="fa fa-amazon"></i></a>
               <a href="https://www.flipkart.com/introduction-algorithms-3rd/p/itmdwxyrafdburzg"target="_blank"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>               
               <img src="image/cc6.2.jpg">
               <a href="https://www.amazon.in/Computer-Algorithms-Introduction-Design-Analysis/dp/0201612445"target="_blank"><i class="fa fa-amazon"></i></a>
               <a href="napg.php"target="_blank"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>               
               <img src="image/cc6.3.jpg">
               <a href="https://www.amazon.in/Introduction-Design-Analysis-Algorithms-GOODMAN/dp/0070486425"target="_blank"><i class="fa fa-amazon"></i></a>
               <a href="napg.php"target="_blank"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>               
               <img src="image/cc6.4.jpg">
               <a href="https://www.amazon.in/Books-Sahni-Horowitz/s?rh=n%3A976389031%2Cp_27%3ASahni+Horowitz"target="_blank"><i class="fa fa-amazon"></i></a>
               <a href="https://www.flipkart.com/fundamentals-computer-algorithms/p/itmfbchhs2hhbaqx"target="_blank"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>               
               <img src="image/cc6.5.jpeg">
               <a href=""target="_blank"><i class="fa fa-amazon"></i></a>
               <a href=""target="_blank"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>               
               <img src="image/cc6.6.jpg">
               <a href=""target="_blank"><i class="fa fa-amazon"></i></a>
               <a href=""target="_blank"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>               
               <img src="image/cc6.7.jpg">
               <a href=""target="_blank"><i class="fa fa-amazon"></i></a>
               <a href=""target="_blank"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>               
               <img src="image/cc6.8.jpg">
               <a href=""target="_blank"><i class="fa fa-amazon"></i></a>
               <a href=""target="_blank"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
               <img src="image/cc7.1.jpg">
               <a href=""target="_blank"><i class="fa fa-amazon"></i></a>
               <a href=""target="_blank"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>               
               <img src="image/cc7.2.jpg">
               <a href=""target="_blank"><i class="fa fa-amazon"></i></a>
               <a href=""target="_blank"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>               
               <img src="image/cc7.3.jpg">
               <a href=""target="_blank"><i class="fa fa-amazon"></i></a>
               <a href=""target="_blank"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>               
               <img src="image/cc7.4.jpg">
               <a href=""target="_blank"><i class="fa fa-amazon"></i></a>
               <a href=""target="_blank"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>               
               <img src="image/cc7.5.jpg">
               <a href=""target="_blank"><i class="fa fa-amazon"></i></a>
               <a href=""target="_blank"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
               <img src="image/sc1.1.jpg">
               <a href=""target="_blank"><i class="fa fa-amazon"></i></a>
               <a href=""target="_blank"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>               
               <img src="image/sc1.2.jpg">
               <a href=""target="_blank"><i class="fa fa-amazon"></i></a>
               <a href=""target="_blank"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>               
               <img src="image/sc1.3.jpg">
               <a href=""target="_blank"><i class="fa fa-amazon"></i></a>
               <a href=""target="_blank"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>               
               <img src="image/sc1.4.jpg">
               <a href=""target="_blank"><i class="fa fa-amazon"></i></a>
               <a href=""target="_blank"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>               
            </marquee>   
        </div>
        <div class="books-col">
            <h3>4TH SEMESTER</h3>
            <marquee scrolldelay="1" onmouseover="this.stop();"onmouseout="this.start();">
               <img src="image/cc8.1.jpg">
               <a href=" https://www.amazon.in/Operating-System-Concepts-Silberschatz/dp/8126554274/ref=asc_df_8126554274/?tag=googleshopdes-21&linkCode=df0&hvadid=397081453199&hvpos=&hvnetw=g&hvrand=17998392467250879364&hvpone=&hvptwo=&hvqmt=&hvdev=c&hvdvcmdl=&hvlocint=&hvlocphy=9298505&hvtargid=pla-345853587501&psc=1&ext_vrnc=hi"target="_blank"><i class="fa fa-amazon"></i></a>
               <a href=" https://www.flipkart.com/operating-system-concepts-international-student-version/p/itme93m9whmzzhtf?pid=9788126554270&lid=LSTBOK9788126554270DUDBLZ&marketplace=FLIPKART&cmpid=content_book_8003060057_u_8965229628_gmc_pla&tgi=sem,1,G,11214002,u,,,395332127672,,,,c,,,,,,,&ef_id=Cj0KCQjw4cOEBhDMARIsAA3XDRgTwBilJm2RGQcH5A39OOLMf3SE9cxRBH0lwc9NUcrbJBnDqGjJNDIaApFdEALw_wcB:G:s&s_kwcid=AL!739!3!395332127672!!!u!295092701166!&gclid=Cj0KCQjw4cOEBhDMARIsAA3XDRgTwBilJm2RGQcH5A39OOLMf3SE9cxRBH0lwc9NUcrbJBnDqGjJNDIaApFdEALw_wcB&gclsrc=aw.ds"target="_blank"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>               
               <img src="image/cc8.2.jpg">
               <a href=" https://www.amazon.in/Modern-Operating-Systems-Andrew-Tanenbaum-ebook/dp/B00XN476W0/ref=asc_df_B00XN476W0/?tag=googleshopdes-21&linkCode=df0&hvadid=399106019487&hvpos=&hvnetw=g&hvrand=17138192490500066978&hvpone=&hvptwo=&hvqmt=&hvdev=c&hvdvcmdl=&hvlocint=&hvlocphy=9298505&hvtargid=pla-646468288775&psc=1&ext_vrnc=hi"target="_blank"><i class="fa fa-amazon"></i></a>
               <a href=" https://www.flipkart.com/modern-operating-systems-3/p/itme8p246dsnxx3q?pid=9789332550018&lid=LSTBOK9789332550018QQBWZL&marketplace=FLIPKART&cmpid=content_book_8003060057_u_8965229628_gmc_pla&tgi=sem,1,G,11214002,u,,,395332127672,,,,c,,,,,,,&ef_id=Cj0KCQjw4cOEBhDMARIsAA3XDRjiY5XcNIiN-jCRqcYf4_4CtCodoHO-7aSfhIZAN55CKmJtayK0I8YaAtt1EALw_wcB:G:s&s_kwcid=AL!739!3!395332127672!!!u!295092701166!&gclid=Cj0KCQjw4cOEBhDMARIsAA3XDRjiY5XcNIiN-jCRqcYf4_4CtCodoHO-7aSfhIZAN55CKmJtayK0I8YaAtt1EALw_wcB&gclsrc=aw.ds
              "target="_blank"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>               
               <img src="image/cc8.3.jpg">
               <a href=" https://www.amazon.in/Operating-Systems-Perspective-Gary-Nutt/dp/0805312951/ref=asc_df_0805312951/?tag=googleshopdes-21&linkCode=df0&hvadid=397082017646&hvpos=&hvnetw=g&hvrand=9183052459221854887&hvpone=&hvptwo=&hvqmt=&hvdev=c&hvdvcmdl=&hvlocint=&hvlocphy=9298505&hvtargid=pla-1210663054259&psc=1&ext_vrnc=hi"target="_blank"><i class="fa fa-amazon"></i></a>
               <a href="https://www.flipkart.com/operating-systems/p/itmfbzzsmxmhpcue"target="_blank"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>               
               <img src="image/cc8.4.jpg">
               <a href=" https://www.amazon.in/Operating-Systems-Internals-Design-Principles/dp/9352866711"target="_blank"><i class="fa fa-amazon"></i></a>
               <a href="https://www.flipkart.com/operating-systems/p/itmfc7q5wgs3dzk3?pid=9789352866717&lid=LSTBOK9789352866717XQ4BIX&marketplace=FLIPKART&cmpid=content_book_8003060057_u_8965229628_gmc_pla&tgi=sem,1,G,11214002,u,,,395332127672,,,,c,,,,,,,&ef_id=Cj0KCQjw4cOEBhDMARIsAA3XDRh9VO0uBR3RrtXEP2pZoKhHXRvr4h_O3gxfnS6P4FHQz7mHMfoJs9YaApADEALw_wcB:G:s&s_kwcid=AL!739!3!395332127672!!!u!295092701166!&gclid=Cj0KCQjw4cOEBhDMARIsAA3XDRh9VO0uBR3RrtXEP2pZoKhHXRvr4h_O3gxfnS6P4FHQz7mHMfoJs9YaApADEALw_wcB&gclsrc=aw.ds"target="_blank"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>              
               <img src="image/cc8.5.jpg">
               <a href="https://www.amazon.in/Operating-Systems-Concepts-Milan-Milenkovic/dp/0070419205"target="_blank"><i class="fa fa-amazon"></i></a>
               <a href="https://www.flipkart.com/operating-systems-concepts-design/p/itmczyzgbjdtz2kd"target="_blank"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>              
               <img src="image/cc9.1.jpg">
               <a href="https://www.amazon.in/DATA-COMMUNICATIONS-NETWORKING-Behrouz-Forouzan/dp/0070634149/ref=asc_df_0070634149/?tag=googleshopdes-21&linkCode=df0&hvadid=397080010289&hvpos=&hvnetw=g&hvrand=7934771287097692400&hvpone=&hvptwo=&hvqmt=&hvdev=c&hvdvcmdl=&hvlocint=&hvlocphy=9298505&hvtargid=pla-345677936863&psc=1&ext_vrnc=h"target="_blank"><i class="fa fa-amazon"></i></a>
               <a href=" https://www.flipkart.com/data-comm-netw-5e-global-ed/p/itm34ba2d46108de?pid=9781259064753&lid=LSTBOK97812590647533BTCT2&marketplace=FLIPKART&cmpid=content_book_8003060057_u_8965229628_gmc_pla&tgi=sem,1,G,11214002,u,,,395332127672,,,,c,,,,,,,&ef_id=Cj0KCQjw4cOEBhDMARIsAA3XDRjUaV0c3HhN8sroPJ3-IzuMhITctkytgcqR-C41CuiDRsEeOWRJsKwaAgAPEALw_wcB:G:s&s_kwcid=AL!739!3!395332127672!!!u!295092701166!&gclid=Cj0KCQjw4cOEBhDMARIsAA3XDRjUaV0c3HhN8sroPJ3-IzuMhITctkytgcqR-C41CuiDRsEeOWRJsKwaAgAPEALw_wcB&gclsrc=aw.ds"target="_blank"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>               
               <img src="image/cc9.2.jpg">
               <a href=" https://www.amazon.in/Computer-Networks-5e-5th-Tanenbaum/dp/9332518742/ref=asc_df_9332518742/?tag=googleshopdes-21&linkCode=df0&hvadid=397080949382&hvpos=&hvnetw=g&hvrand=2969898954006334406&hvpone=&hvptwo=&hvqmt=&hvdev=c&hvdvcmdl=&hvlocint=&hvlocphy=9298505&hvtargid=pla-343815692369&psc=1&ext_vrnc=hi"target="_blank"><i class="fa fa-amazon"></i></a>
               <a href=" https://www.flipkart.com/computer-networks/p/itmfbt6qgafcpkuc?pid=9789332518742&lid=LSTBOK9789332518742IETGGM&marketplace=FLIPKART&cmpid=content_book_8003060057_u_8965229628_gmc_pla&tgi=sem,1,G,11214002,u,,,395332127672,,,,c,,,,,,,&ef_id=Cj0KCQjw4cOEBhDMARIsAA3XDRjvjXCaQtSfPYDzewVP0WSGQovhUMcOw0Ymcm2ZSpbm0gO-T4mtJoAaAoykEALw_wcB:G:s&s_kwcid=AL!739!3!395332127672!!!u!295092701166!&gclid=Cj0KCQjw4cOEBhDMARIsAA3XDRjvjXCaQtSfPYDzewVP0WSGQovhUMcOw0Ymcm2ZSpbm0gO-T4mtJoAaAoykEALw_wcB&gclsrc=aw.ds"target="_blank"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>               
               <img src="image/cc9.3.jpg">
               <a href=" https://www.amazon.in/Computer-Communications-Pearson-Stallings-William/dp/9332586934/ref=asc_df_9332586934/?tag=googleshopdes-21&linkCode=df0&hvadid=427101880073&hvpos=&hvnetw=g&hvrand=7531834347297125145&hvpone=&hvptwo=&hvqmt=&hvdev=c&hvdvcmdl=&hvlocint=&hvlocphy=9298505&hvtargid=pla-406164007393&psc=1&ext_vrnc=hi
               "target="_blank"><i class="fa fa-amazon"></i></a>
               <a href=" https://www.flipkart.com/data-computer-communications/p/itmfbryycy3ahezw?pid=9789332586932&lid=LSTBOK9789332586932FDF2IS&marketplace=FLIPKART&cmpid=content_book_8003060057_u_8965229628_gmc_pla&tgi=sem,1,G,11214002,u,,,395332127672,,,,c,,,,,,,&ef_id=Cj0KCQjw4cOEBhDMARIsAA3XDRhai69_B000DXGlGsUNad0nw68f2WVPqGZWxYhfB4MsAJir5e2avg0aAuMoEALw_wcB:G:s&s_kwcid=AL!739!3!395332127672!!!u!295092701166!&gclid=Cj0KCQjw4cOEBhDMARIsAA3XDRhai69_B000DXGlGsUNad0nw68f2WVPqGZWxYhfB4MsAJir5e2avg0aAuMoEALw_wcB&gclsrc=aw.ds"target="_blank"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>               
               <img src="image/cc9.4.jpg">
               <a href="https://www.amazon.in/Introduction-Network-Communications-Michael-Miller/dp/8131505898"target="_blank"><i class="fa fa-amazon"></i></a>
               <a href="https://www.flipkart.com/introduction-data-network-communications-1st/p/itmdytsey7yypq6m"target="_blank"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
               <img src="image/cc10.1.jpg">
               <a href="https://www.amazon.in/Database-System-Concepts-Silberschatz/dp/9332901384"target="_blank"><i class="fa fa-amazon"></i></a>
               <a href=" https://www.flipkart.com/database-system-concepts-6th/p/itmevd3hkrgbhfb5"target="_blank"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>               
               <img src="image/cc10.2.jpg">
               <a href="https://www.amazon.in/Fundamentals-Database-System-Elmasri-Ramez/dp/933258270X/ref=pd_lpo_14_t_0/262-3470330-5398138?_encoding=UTF8&pd_rd_i=933258270X&pd_rd_r=eb5e7969-2b86-4b0b-ba80-1bf07f6cccbc&pd_rd_w=pM4bU&pd_rd_wg=pJEA4&pf_rd_p=6b10875b-45e7-4b58-9b02-21bb75fd5289&pf_rd_r=AA6N7Y2RVF8R86KKP1RZ&psc=1&refRID=AA6N7Y2RVF8R86KKP1RZ"target="_blank"><i class="fa fa-amazon"></i></a>
               <a href="https://www.flipkart.com/database-systems/p/itmey7quqjzzjgkq"target="_blank"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>               
               <img src="image/cc10.3.jpg">
               <a href=" https://www.amazon.in/Database-Management-Systems-Raghu-Ramakrishnan/dp/9339213114/ref=pd_lpo_14_t_0/262-3470330-5398138?_encoding=UTF8&pd_rd_i=9339213114&pd_rd_r=3eb76b96-9785-4fcb-a5d5-4ecf820d7a15&pd_rd_w=ClaUk&pd_rd_wg=4a8WZ&pf_rd_p=6b10875b-45e7-4b58-9b02-21bb75fd5289&pf_rd_r=GDM3J1Y1CMCWKKFGYTP6&psc=1&refRID=GDM3J1Y1CMCWKKFGYTP6"target="_blank"><i class="fa fa-amazon"></i></a>
               <a href="https://www.flipkart.com/database-mgmt-systems-3e/p/itmdy5c3mgcb78dt?pid=9789339213114&lid=LSTBOK97893392131144CS5OU&marketplace=FLIPKART&cmpid=content_book_8003060057_u_8965229628_gmc_pla&tgi=sem,1,G,11214002,u,,,395332127672,,,,c,,,,,,,&ef_id=Cj0KCQjw4cOEBhDMARIsAA3XDRjHxxwVrmywJx_QQZRss98uFq-4BxL0GOV7ar4ITqIWFRYksIOoUpAaAkSJEALw_wcB:G:s&s_kwcid=AL!739!3!395332127672!!!u!295092701166!&gclid=Cj0KCQjw4cOEBhDMARIsAA3XDRjHxxwVrmywJx_QQZRss98uFq-4BxL0GOV7ar4ITqIWFRYksIOoUpAaAkSJEALw_wcB&gclsrc=aw.ds"target="_blank"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>               
               <img src="image/cc10.4.jpg">
               <a href=" https://www.amazon.in/Introduction-Database-Systems-8e/dp/8177585568/ref=asc_df_8177585568/?tag=googleshopdes-21&linkCode=df0&hvadid=397080502307&hvpos=&hvnetw=g&hvrand=8316096184336412317&hvpone=&hvptwo=&hvqmt=&hvdev=c&hvdvcmdl=&hvlocint=&hvlocphy=9298505&hvtargid=pla-792266263138&psc=1&ext_vrnc=hi
               "target="_blank"><i class="fa fa-amazon"></i></a>
               <a href="napg.php"target="_blank"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>               
               <img src="image/cc10.5.jpg">
               <a href="https://www.amazon.in/Principles-Database-Systems-Jeffrey-Ullman/dp/8175155450"target="_blank"><i class="fa fa-amazon"></i></a>
               <a href=" https://www.flipkart.com/principles-database-systems/p/itmdyuazsqd4zfwc?pid=9788175155459&lid=LSTBOK9788175155459EZZVMP&marketplace=FLIPKART&q=%E2%80%9Cprinciples+of+database+systems%E2%80%9D%2C+ullman+jd+&store=bks&srno=s_1_1&otracker=search&otracker1=search&fm=SEARCH&iid=14c6cf93-c7b4-4636-9f36-51550ba5726e.9788175155459.SEARCH&ppt=hp&ppn=homepage&ssid=l9em5srfmo0000001620130952788&qH=a13a5891bb978162"target="_blank"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>               
               <img src="image/sc2.1.jpg">
               <a href="https://www.amazon.in/Matlab-Introduction-Applications-Amos-Gilat/dp/0471694207"target="_blank"><i class="fa fa-amazon"></i></a>
               <a href="https://www.flipkart.com/numerical-methods-engineers-scientists-introduction-applications-using-matlab-annotated/p/itme87xbghzqagdk?pid=9780471734406&otracker=pp_reco_productRecommendation/similar_5"target="_blank"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>               
               <img src="image/sc2.2.jpg">
               <a href="https://www.amazon.in/Numerical-Computing-MATLAB-Moler-C-B/dp/8120346815"target="_blank"><i class="fa fa-amazon"></i></a>
               <a href="https://www.flipkart.com/numerical-computing-matlab/p/itmdyyy6rgh5s2uu"target="_blank"target="_blank"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>               
            </marquee>   
        </div>
        
    </div>
    <!--------syllabus---->
    <div class="syllabus">
      <h1>SYLLABUS</h1>
    	<embed src="files/Msc-Compsc-15-1-19.pdf#toolbar=0" type="application/pdf" width="50%" height="900px">
      <br>
	    <a href="files/Comp.-Sc.-(Hons. & Gereral)-CBCS Syallabi-2020.pdf" target="_blank">
            <button class="button-link">
                <span></span>Click here to download
            </button>
      </a>
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