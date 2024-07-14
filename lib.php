<?php
session_start();
require_once('checksession.php');

?>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="Width=device-width,initial-scale=1.0">
    <title>LIBRARY</title>
    <style type="text/css">
        body{
            margin: 0;
            padding: 0;
        }
        .header{
            min-height: 50vh;
            width: 100%;
            background-image: /*linear-gradient(rgba(4,9,30,.1),rgba(4,9,30,.7)),*/url(image/books.jpg);
            background-position: center;
            background-size: cover;
            position: relative;
        }
        nav{
            display: flex;
            padding: 2% 4%;
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
        .lib{
            width: 80%;
            text-align: center;
            padding-top: 50px;
            position: relative;
        }
        h1{
            font-size: 36px;
            font-weight: 600;
            margin: auto;
            padding-left: 300px;
        }
        .lib p{
            color: #ee6363;
            font-size: 20px;
            font-weight: 600;
            line-height: 22px;
            padding-top:10px;
            padding-bottom: 30px;
            padding-left: 400px;
            margin: auto;
        }
        
        .tag{
            width: 98%;
            display: inline-table;
            height: 30px;
            background-color: dimgray;
            text-align:center;
            padding: 10px;
            font-size: 25px;
            font-weight: bold;
            color: whitesmoke;
        }
        .card-list{
            display: flex;
            padding: 3rem;
            margin-left: 200px;
        }
        .card-list3{
            display: flex;
            padding: 3rem;
            margin-left: 70px;
        }
        .card-list4{
            display: flex;
            padding: 3rem;
            margin-left: 130px;
        }
        .card-list5{
            display: flex;
            padding: 3rem;
            margin-left: 70px;
        }
        .card{
            display: flex;
            position: relative;
            flex-direction: column;
            height: 350px;
            width: 180px;
            min-width: 250px;
            padding: 1.5rem;
            border-radius: 16px;
            background: #ffcccb;
            box-shadow: -1rem 0 3rem #000;
            transition: .2s;
        }
        .card:hover{
            transform: translateY(-1rem);
        }
        .card:hover~.card{
            transform: translateX(130px);
        }
        .card:not(:first-child){
            margin-left: -170px;
        }
        .card-author{
            position: relative;
            display: grid;
            grid-template-columns: 75px 1fr;
            align-items: center;
            margin: 3rem 0 0;
        }
        .avatar img{
            display: block;
            width: 100px;
            height: 100px;
            border-radius: 50%;
            margin: 18px 2px;
            overflow: hidden;
        }
        .author-name{
            padding-left: 50px;
        }
        .author-name-prefix{
            font-style: normal;
            font-weight: 700;
            color: black;
        }
        .card-header h2:hover{
            background: linear-gradient(90deg,/*#ff8a00,#e52b50*/#800080,#000);
            text-shadow: none;
            background-clip: text;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        .card-header a{
            text-decoration: none;
            color: black;
        }
        button{
            margin: 10px 5px;
            width: 90px;
            padding: 5px 2px;
            border-radius: 25px;
            border: 2px solid #009688;
            background: transparent;
            color: black;
            cursor: pointer;
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
        button:hover span{
            width: 100%;
        }
        button:hover{
            border: none;
            border:2px solid #ee6363;
            background: #ee6363;
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
        .not-col a{
            color: blueviolet;
            text-decoration: none;
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
            .tag{
                width: 700px;
                text-align: left;
                padding-left: 150px;
            }    
            h1{
                padding-left: 130px;
            }
            .lib p{
                padding-left: 110px;
            }
            .card-list{
            margin-left: 10px;
            }
            .card-list3{
            margin-left: 10px;
            }
            .card-list4{
            margin-left: 10px;
            }
            .card-list5{
            margin-left: 10px;
            }
            .card{
                height: 300px;
                width: 450px;
                min-width: 200px;
                padding: 1.5rem;
            }
 
            .card-header h2{
                font-size: 20px;
            }
            .card-header h3{
               font-size: 15px;
            }
            .author-name h2{
               font-size: 20px;  
            }
            .avatar img{
            width: 80px;
            height: 80px;
            margin: 8px 8px;
        }
            button{
                margin: 3px 1px;
                width: 50px;
                padding: 2px 1px;
                font-size: 7px;
            }
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
                    <li><a href="sn.php"><b>SCHEDULE & NOTICE</b></a></li>
                    <li><a href="classlink.php"><b>CLASSROOM</b></a></li>
                    <li><a href="bs.php" ><b>BOOKS & SYLLABUS</b></a></li>
                    <li><a href="npyq.php" ><b>NOTES & PAST YEARS' QUESTIONS</b></a></li>
                    <li><a href="cs.php" ><b>CONTACT US</b></a></li>
                </ul>
            </div>
            <i class="fa fa-bars" onclick="showMenu()"></i>
        </nav>
    </section>    
    
    <section class="lib">
        <h1><center>LIBRARY</center></h1>
        <p><em>READ,LEARN,DISCOVER,TAKE YOUR DREAMS OFF THE SHELF</em></p>
    </section>
    <div class="container">
        <div class="tag">1ST SEMESTER</div> 
            <section class="card-list">
                <!---paper1:funda & c----->
                <article class="card">
                    <div class="card-header">
                        <h2>Computer Fundamentals</h2>
                        <h3>Pearson Education</h3>
                        <button><a href="https://drive.google.com/file/d/12CoqnrNsZqvO9FQzFvGGpAW7RIdWFEDL/view?usp=sharing"><span></span>READ</a></button>
                    </div>
                    <div class="card-author">
                        <a class="avatar"href="image/cc1.2.jpg">
                            <img src="image/cc1.2.jpg">
                        </a> 
                        <div class="author-name">
                            <div class="author-name-prefix">Author</div>
                            <h2> <em>Dr. Anita Goel</em> </h2>
                        </div>
                    </div>
                </article>
                <article class="card">
                    <div class="card-header">
                        <h2><b>Programming in ANSI C</b></h2>
                        <h3>Tata McGraw-Hill Education,</h3>
                        <button><a href="https://drive.google.com/file/d/1yq9RusQqUG7ATw1KZtwpIEKBBpgXMR5I/view?usp=sharing"><span></span>READ</a></button>
                       
                    </div>
                    <div class="card-author">
                        <a class="avatar"href="image/cc1.5.jpg">
                            <img src="image/cc1.5.jpg">
                        </a> 

                        <div class="author-name">
                            <div class="author-name-prefix">Author</div>
                            <h2> <em> Balagurusamy, E.</em> </h2>
                        </div>
                    </div>
                </article>
                <article class="card">
                    <div class="card-header">
                        <h2><b>Let us C</b></h2>
                        <h3><br>BPB publications</h3>
                        <button><a href="https://drive.google.com/file/d/123Yk5RoaeBKH3_N7m_pD7a62eo3CD21d/view?usp=sharing"><span></span>READ</a></button>
                       
                    </div>
                    <div class="card-author">
                        <a class="avatar"href="image/cc1.6.jpg">
                            <img src="image/cc1.6.jpg">
                        </a> 

                        <div class="author-name">
                            <div class="author-name-prefix">Author</div>
                            <h2> <em>Kanetkar, Yashavant P.</em> </h2>
                        </div>
                    </div>
                </article>
                <!---paper2:digital----->
                <article class="card">
                    <div class="card-header">
                        <h2><b> Digital Logic and Computer Design</b></h2>
                        <h3>PHI</h3>
                        <button><a href="https://drive.google.com/file/d/124y1UgCKTexdxguue9up6Xinb0lzXlaR/view?usp=sharing"><span></span>READ</a></button>
                       
                    </div>
                    <div class="card-author">
                        <a class="avatar"href="image/cc2.3.jpg">
                            <img src="image/cc2.3.jpg">
                        </a> 
                        <div class="author-name">
                            <div class="author-name-prefix">Author</div>
                            <h2> <em>M.Morris Mano</em></h2>
                        </div>
                    </div>
                </article>
                <article class="card">
                    <div class="card-header">
                       <!--<img src="image/cc2.4.jpg">-->
                       <h2><b> Digital Principle and Applications</b></h2>
                       <h3>TMH</h3>
                       <button><a href="https://drive.google.com/file/d/123ID6DSxsYekP_XcQIan9tb_O9SG8gS7/view?usp=sharing"><span></span>READ</a></button>
                      
                   </div>
                   <div class="card-author">
                        <a class="avatar"href="image/cc2.4.jpg">
                            <img src="image/cc2.4.jpg">
                        </a> 
                        <div class="author-name">
                            <div class="author-name-prefix">Author</div>
                            <h2> <em>Malvino & Leach</em> </h2>
                        </div>
                    </div>
                </article>
            </section>
        </div>
        <!---end of 1st sem----->
        <div class="tag">2ND SEMESTER</div> 
            <section class="card-list">
                <!---paper3:c++----->
                <article class="card">
                    <div class="card-header">
                        <h2>C++: The Complete Reference</h2>
                        <h3>McGraw Hill</h3>
                        <button><a href="https://drive.google.com/file/d/1QwvnpshKcZAwWeHp_Ix9JxsKbtEtIXUP/view?usp=sharing"><span></span>READ</a></button>
                       
                    </div>
                    <div class="card-author">
                        <a class="avatar"href="image/cc3.1.jpeg">
                            <img src="image/cc3.1.jpeg">
                        </a> 
                        <div class="author-name">
                            <div class="author-name-prefix">Author</div>
                            <h2> <em> HerbtzSchildt</em> </h2>
                        </div>
                    </div>
                </article>
                <article class="card">
                    <div class="card-header">
                        <h2><b>Object Oriented Prog. with C++</b></h2>
                        <h3>Tata McGraw-Hill Education</h3>
                        <button><a href="https://drive.google.com/file/d/1MahPK-YSzR03qijomS43FUiOEDxNAp6W/view?usp=sharing"><span></span>READ</a></button>
                       
                    </div>
                    <div class="card-author">
                        <a class="avatar"href="image/cc3.4.jpg">
                            <img src="image/cc3.4.jpg">
                        </a> 

                        <div class="author-name">
                            <div class="author-name-prefix">Author</div>
                            <h2> <em>Balaguruswamy E</em> </h2>
                        </div>
                    </div>

                </article>
                <!---paper4:architecture----->
                <article class="card">
                    <div class="card-header">
                       <!--<img src="image/cc2.4.jpg">-->
                       <h2><b>Computer System Architecture</b></h2>
                       <h3> Pearson Education</h3>
                       <button><a href="https://drive.google.com/file/d/1_xfLap5PmB0qBf9aGFtR_uMO79lvYjwN/view?usp=sharing"><span></span>READ</a></button>
                      
                   </div>
                   <div class="card-author">
                        <a class="avatar"href="image/cc4.1.jpg">
                            <img src="image/cc4.1.jpg">
                        </a> 
                        <div class="author-name">
                            <div class="author-name-prefix">Author</div>
                            <h2> <em> M. Mano</em> </h2>
                        </div>
                    </div>
                </article>
                <article class="card">
                    <div class="card-header">
                        <h2><b>Computer Org. & Arche. Designing...</b></h2>
                        <h3>Prentice Hall of India</h3>
                        <button><a href="https://drive.google.com/file/d/1Ad44XuE_1_x-AB1nQRB9Thv4k9zRVTkY/view?usp=sharing"><span></span>READ</a></button>
                       
                    </div>
                    <div class="card-author">
                        <a class="avatar"href="image/cc4.3.jpg">
                            <img src="image/cc4.3.jpg">
                        </a> 
                        <div class="author-name">
                            <div class="author-name-prefix">Author</div>
                            <h2><em>W.Stallings</em></h2>
                        </div>
                    </div>
                </article>
            </section>
        </div>
        <!---end of 2nd sem----->
        <div class="tag">3RD SEMESTER</div> 
            <section class="card-list3">
                <!---paper5:data structure----->
                <article class="card">
                    <div class="card-header">
                        <h2><b>Data Structures and algorithm in C++</b></h2>
                        <h3>Cengage Learning</h3>
                        <button><a href="https://drive.google.com/file/d/13IXrjjqrg_PH-H79qiP4LioD1BEpusCC/view?usp=sharing"><span></span>READ</a></button>
                       
                    </div>
                    <div class="card-author">
                        <a class="avatar"href="image/cc5.1.jpg">
                            <img src="image/cc5.1.jpg">
                        </a> 

                        <div class="author-name">
                            <div class="author-name-prefix">Author</div>
                            <h2> <em>Adam Drozdek</em> </h2>
                        </div>
                    </div>
                </article>
                <article class="card">
                    <div class="card-header">
                        <h2>Data Struct.,Algo. & applications in C++</h2>
                        <h3>Universities Press</h3>
                        <button><a href="https://drive.google.com/file/d/13CXwzjxfAf3uXgiPk6HKqlxd-i6YgEJw/view?usp=sharing"><span></span>READ</a></button>
                       
                    </div>
                    <div class="card-author">
                        <a class="avatar"href="image/cc5.2.jpeg">
                            <img src="image/cc5.2.jpeg">
                        </a> 
                        <div class="author-name">
                            <div class="author-name-prefix">Author</div>
                            <h2> <em>Sartaj<br>Sahni</em> </h2>
                        </div>
                    </div>
                </article>
                <!---paper6:algorithm----->
                <article class="card">
                    <div class="card-header">
                        <h2><b> Introduction to Algorithms</b></h2>
                        <h3>PHI</h3>
                        <button><a href="https://drive.google.com/file/d/1p306dACYhFOPIoTOXQ_6KoJ3FctqWT8u/view?usp=sharing"><span></span>READ</a></button>
                       
                    </div>
                    <div class="card-author">
                        <a class="avatar"href="image/cc6.1.jpeg">
                            <img src="image/cc6.1.jpeg">
                        </a> 
                        <div class="author-name">
                            <div class="author-name-prefix">Author</div>
                            <h2> <em> T.H.<br>Cormen</em> </h2>
                        </div>
                    </div>
                </article>
                <article class="card">
                    <div class="card-header">
                       <!--<img src="image/cc2.4.jpg">-->
                       <h2><b>The Design and Analysis of algorithm</b></h2>
                       <h3>Pearson Education</h3>
                       <button><a href="https://drive.google.com/file/d/17h4zdBFn4u-kizABM22-7olr1eGsIyB6/view?usp=sharing"><span></span>READ</a></button>
                      
                   </div>
                   <div class="card-author">
                        <a class="avatar"href="image/cc6.5.jpeg">
                            <img src="image/cc6.5.jpeg">
                        </a> 
                        <div class="author-name">
                            <div class="author-name-prefix">Author</div>
                            <h2> <em>A.Aho</em> </h2>
                        </div>
                    </div>
                </article>
                <!---paper7:discrete mathemaitcs----->
                <article class="card">
                    <div class="card-header">
                        <h2><b> Discrete Mathematics and Its Applications</b></h2>
                        <h3>McGraw Hill</h3>
                        <button><a href="https://drive.google.com/file/d/1ZsGRp_0RHYwSPAtj4hVVKRsyM2iVKFue/view?usp=sharing"><span></span>READ</a></button>
                       
                    </div>
                    <div class="card-author">
                        <a class="avatar"href="image/cc7.2.jpg">
                            <img src="image/cc7.2.jpg">
                        </a> 
                        <div class="author-name">
                            <div class="author-name-prefix">Author</div>
                            <h2> <em>Kenneth Rosen</em> </h2>
                        </div>
                    </div>
                </article>
                <article class="card">
                    <div class="card-header">
                       <!--<img src="image/cc2.4.jpg">-->
                       <h2><b>Discrete Struct.,Logic & Computa.</b></h2>
                       <h3> Jones and Bartlett Publishers</h3>
                       <button><a href="https://drive.google.com/file/d/1tw6taCxnfwL463SnA_zLyfSNsDX763mT/view?usp=sharing"><span></span>READ</a></button>
                      
                   </div>
                   <div class="card-author">
                        <a class="avatar"href="image/cc6.5.jpeg">
                            <img src="image/cc6.5.jpeg">
                        </a> 
                        <div class="author-name">
                            <div class="author-name-prefix">Author</div>
                            <h2> <em>J.L.Hein</em> </h2>
                        </div>
                    </div>
                </article>
                <!---sec1:unix----->
                <article class="card">
                    <div class="card-header">
                        <h2><b> Unix Concepts And Applications</b></h2>
                        <h3>Tata McGraw-Hill Education</h3>
                        <button><a href="https://drive.google.com/file/d/1oDyKnLC_Hrt-aly5iTf28uaDM1MCixI5/view?usp=sharing"><span></span>READ</a></button>
                       
                    </div>
                    <div class="card-author">
                        <a class="avatar"href="image/sc1.1.jpg">
                            <img src="image/sc1.1.jpg">
                        </a> 
                        <div class="author-name">
                            <div class="author-name-prefix">Author</div>
                            <h2> <em> Sumitabha Das</em> </h2>
                        </div>
                    </div>
                </article>
                <article class="card">
                    <div class="card-header">
                       <!--<img src="image/cc2.4.jpg">-->
                       <h2><b>Unix Network Programming</b></h2>
                       <h3>The sockets Networking API</h3>
                       <button><a href="https://drive.google.com/file/d/133k-ZdMXe1LqpqRu4aVUIidY5NQeEZZ2/view?usp=sharing"><span></span>READ</a></button>
                      
                   </div>
                   <div class="card-author">
                        <a class="avatar"href="image/sc1.4.jpg">
                            <img src="image/sc1.4.jpg">
                        </a> 
                        <div class="author-name">
                            <div class="author-name-prefix">Author</div>
                            <h2> <em>W. Richard Stevens</em> </h2>
                        </div>
                    </div>
                </article>
            </section>
        </div>
        <!---end of 3rd sem----->
        <div class="tag">4TH SEMESTER</div> 
            <section class="card-list4">
                <!---paper8:operating system----->
                <article class="card">
                    <div class="card-header">
                        <h2> Operating Systems Concepts</h2>
                        <h3>John Wiley Publications</h3>
                        <button><a href="https://drive.google.com/file/d/11qa1BRhgFoJfmeQbuss6ocqNkh1UuVg0/view?usp=sharing"><span></span>READ</a></button>
                       
                    </div>
                    <div class="card-author">
                        <a class="avatar"href="image/cc8.1.jpg">
                            <img src="image/cc8.1.jpg">
                        </a> 
                        <div class="author-name">
                            <div class="author-name-prefix">Author</div>
                            <h2> <em>P.B. Galvin</em> </h2>
                        </div>
                    </div>
                </article>
                <article class="card">
                    <div class="card-header">
                        <h2><b> Modern Operating Systems</b></h2>
                        <h3>Pearson Education</h3>
                        <button><a href="https://drive.google.com/file/d/1B-G1KSJRgF6HnW69ZUuCm-XmVhfDRK3e/view?usp=sharing"><span></span>READ</a></button>
                       
                    </div>
                    <div class="card-author">
                        <a class="avatar"href="image/cc8.2.jpg">
                            <img src="image/cc8.2.jpg">
                        </a> 

                        <div class="author-name">
                            <div class="author-name-prefix">Author</div>
                            <h2> <em>A.S.Tanenbaum</em> </h2>
                        </div>
                    </div>
                </article>
                <!---paper9:computer network----->
                <article class="card">
                    <div class="card-header">
                        <h2><b>Data Communications and Networking</b></h2>
                        <h3> THM</h3>
                        <button><a href="https://drive.google.com/file/d/121zPaakJW9x5F0UShL2089CmCca_I8r5/view?usp=sharing"><span></span>READ</a></button>
                       
                    </div>
                    <div class="card-author">
                        <a class="avatar"href="image/cc9.1.jpg">
                            <img src="image/cc9.1.jpg">
                        </a> 
                        <div class="author-name">
                            <div class="author-name-prefix">Author</div>
                            <h2> <em> B.A.Forouzan</em> </h2>
                        </div>
                    </div>
                </article>
                <article class="card">
                    <div class="card-header">
                       <!--<img src="image/cc2.4.jpg">-->
                       <h2><b> Computer Networks</b></h2>
                       <h3><br>PHI</h3>
                       <button><a href="https://drive.google.com/file/d/1-uSmdThfL_SCAeN2Z3GhsU-DwVp1o75-/view?usp=sharing"><span></span>READ</a></button>
                      
                   </div>
                   <div class="card-author">
                        <a class="avatar"href="image/cc9.2.jpg">
                            <img src="image/cc9.2.jpg">
                        </a> 
                        <div class="author-name">
                            <div class="author-name-prefix">Author</div>
                            <h2> <em> A.S.Tanenbaum</em> </h2>
                        </div>
                    </div>
                </article>
                <!---paper10:dbms----->
                <article class="card">
                    <div class="card-header">
                        <h2><b>Database System Concepts</b></h2>
                        <h3> Mc.Graw Hill</h3>
                        <button><a href="https://drive.google.com/file/d/11vcQiFRzsio0ah7128czxvahdbFr5TJy/view?usp=sharing"><span></span>READ</a></button>
                       
                    </div>
                    <div class="card-author">
                        <a class="avatar"href="image/cc10.1.jpg">
                            <img src="image/cc10.1.jpg">
                        </a> 
                        <div class="author-name">
                            <div class="author-name-prefix">Author</div>
                            <h2> <em>Henry F. Korth</em> </h2>
                        </div>
                    </div>
                </article>
                <article class="card">
                    <div class="card-header">
                       <!--<img src="image/cc2.4.jpg">-->
                       <h2><b>Fundamentals of Database Systems</b></h2>
                       <h3>Benjamin Cummings Pub. Co.</h3>
                       <button><a href="https://drive.google.com/file/d/11qDBQ1Pm7THSCUGaPsvzzvEZKT38JWGs/view?usp=sharing"><span></span>READ</a></button>
                      
                   </div>
                   <div class="card-author">
                        <a class="avatar"href="image/cc10.2.jpg">
                            <img src="image/cc10.2.jpg">
                        </a> 
                        <div class="author-name">
                            <div class="author-name-prefix">Author</div>
                            <h2> <em> Novathe Shamkant</em> </h2>
                        </div>
                    </div>
                </article>
                <!---sc2:matlab----->
                <article class="card">
                    <div class="card-header">
                        <h2><b> MATLAB:An Intro with Applications</b></h2>
                        <h3> Wiley</h3>
                        <button><a href="https://drive.google.com/file/d/13N-DBYgWvWaxI1BEQOQ9T9Cb51PS9I6f/view?usp=sharing"><span></span>READ</a></button>
                       
                    </div>
                    <div class="card-author">
                        <a class="avatar"href="image/sc2.1.jpg">
                            <img src="image/sc2.1.jpg">
                        </a> 
                        <div class="author-name">
                            <div class="author-name-prefix">Author</div>
                            <h2> <em> Amos Gila</em> </h2>
                        </div>
                    </div>
                </article>
            </section>
        </div>
        <!---end of 4th sem----->
        <div class="tag">5TH SEMESTER</div> 
            <section class="card-list5">
                <!---paper11:toc----->
                <article class="card">
                    <div class="card-header">
                        <h2> Introduction to Automata theory</h2>
                        <h3>Pearson Education</h3>
                        <button><a href="https://drive.google.com/file/d/10LZsVRSR8RSoa2JHlpWUWCljgvlQZIsR/view?usp=sharing"><span></span>READ</a></button>
                        <br>
                       
                    </div>
                    <div class="card-author">
                        <a class="avatar"href="image/cc11.3.jpeg">
                            <img src="image/cc11.3.jpeg">
                        </a> 
                        <div class="author-name">
                            <div class="author-name-prefix">Author</div>
                            <h2> <em>Hoperoft<br>Aho,Ullman</em> </h2>
                        </div>
                    </div>
                </article>
                <article class="card">
                    <div class="card-header">
                        <h2><b> Theory of Computer Science</b></h2>
                        <h3>PHI</h3>
                        <button><a href="https://drive.google.com/file/d/12orI0AHr4TWlUhT5zJRDDRGdj6DZBjxe/view?usp=sharing"><span></span>READ</a></button>
                       
                    </div>
                    <div class="card-author">
                        <a class="avatar"href="image/cc11.5.jpg">
                            <img src="image/cc11.5.jpg">
                        </a> 

                        <div class="author-name">
                            <div class="author-name-prefix">Author</div>
                            <h2> <em>Mishra <br>Chandrasekaran</em> </h2>
                        </div>
                    </div>
                </article>
                <!---paper12:it----->
                <article class="card">
                    <div class="card-header">
                        <h2><b>Web Enabled Commercial App Devo.</b></h2>
                        <h3>BPB Publications</h3>
                        <button><a href="https://drive.google.com/file/d/1jUd2p1acSIYGd5fwRrG4igzpH3zkym_c/view?usp=sharing"><span></span>READ</a></button>
                       
                    </div>
                    <div class="card-author">
                        <a class="avatar"href="image/cc12.1.jpg">
                            <img src="image/cc12.1.jpg">
                        </a> 
                        <div class="author-name">
                            <div class="author-name-prefix">Author</div>
                            <h2> <em>Ivan Bayross</em> </h2>
                        </div>
                    </div>
                </article>
                <article class="card">
                    <div class="card-header">
                       <!--<img src="image/cc2.4.jpg">-->
                       <h2><b>Java 7,The Complete Reference</b></h2>
                       <h3>Tata McGraw Hil</h3>
                       <button><a href="https://drive.google.com/file/d/12cDSOWUz78cQUHkwGVu13KKdLN_F8n8E/view?usp=sharing"><span></span>READ</a></button>
                      
                   </div>
                   <div class="card-author">
                        <a class="avatar"href="image/cc12.3.jpg">
                            <img src="image/cc12.3.jpg">
                        </a> 
                        <div class="author-name">
                            <div class="author-name-prefix">Author</div>
                            <h2> <em>Herbert Schildt</em> </h2>
                        </div>
                    </div>
                </article>
                <!---de1:mcp----->
                <article class="card">
                    <div class="card-header">
                        <h2><b> Microprocessor architecture</b></h2>
                        <h3>Wiley eastern Ltd</h3>
                        <button><a href="https://drive.google.com/file/d/1RBXHRod2Wi-_pb8c5OPHmZSngn7wgw-Z/view?usp=sharing"><span></span>READ</a></button>
                       
                    </div>
                    <div class="card-author">
                        <a class="avatar"href="image/de1.1.jpg">
                            <img src="image/de1.1.jpg">
                        </a> 
                        <div class="author-name">
                            <div class="author-name-prefix">Author</div>
                            <h2> <em>Ramesh S.Gaonkar</em> </h2>
                        </div>
                    </div>
                </article>
                <article class="card">
                    <div class="card-header">
                       <!--<img src="image/cc2.4.jpg">-->
                       <h2><b> Microprocessors and Interfacing</b></h2>
                       <h3>McGraw Hill International</h3>
                       <button><a href="https://drive.google.com/file/d/1l7_cT3nMHgUo6nyxeRxFrhYATL4QxPG4/view?usp=sharing"><span></span>READ</a></button>
                      
                   </div>
                   <div class="card-author">
                        <a class="avatar"href="image/de1.6.jpg">
                            <img src="image/de1.6.jpg">
                        </a> 
                        <div class="author-name">
                            <div class="author-name-prefix">Author</div>
                            <h2> <em>Douglas V.Hall</em> </h2>
                        </div>
                    </div>
                </article>
                <!---de2:numerical----->
                <article class="card">
                    <div class="card-header">
                        <h2><b>COMPUTER-BASED NUMARICAL TECHNIQUES</b></h2>
                        <h3></h3>
                        <button><a href="https://drive.google.com/file/d/12DRk-C9PKXHeBGmADJfBbIHc0MwxQlQY/view?usp=sharing"><span></span>READ</a></button>
                       
                    </div>
                    <div class="card-author">
                        <a class="avatar"href="image/de2.10.jpg">
                            <img src="image/de2.10.jpg">
                        </a> 
                        <div class="author-name">
                            <div class="author-name-prefix">Author</div>
                            <h2> <em>M.GOYAL</em> </h2>
                        </div>
                    </div>
                </article>
                <article class="card">
                    <div class="card-header">
                       <!--<img src="image/cc2.4.jpg">-->
                       <h2><b>INTRODUCTION TO NUMERICAL ANALYSIS</b></h2>
                       <h3></h3>
                       <button><a href="https://drive.google.com/file/d/12SByc3ZEjec-t4u8hw5mKOtugCc-gpHP/view?usp=sharing"><span></span>READ</a></button>
                      
                   </div>
                   <div class="card-author">
                        <a class="avatar"href="image/de2.11.png">
                            <img src="image/de2.11.png">
                        </a> 
                        <div class="author-name">
                            <div class="author-name-prefix">Author</div>
                            <h2> <em>J.STOER</em> </h2>
                        </div>
                    </div>
                </article>
            </section>
        </div>
        <!---end of 5th sem----->
        <div class="tag">6TH SEMESTER</div> 
            <section class="card-list">
                <!---paper13:software eng----->
                <article class="card">
                    <div class="card-header">
                        <h2>Software Engineering:A Practitioners Approach </h2>
                        <h3>McGrawHill</h3>
                        <button><a href="https://drive.google.com/file/d/1kGMKsGQmKYK3O7lQvqamFxOUIuLQEL05/view?usp=sharing"><span></span>READ</a></button>
                        <br>
                       
                    </div>
                    <div class="card-author">
                        <a class="avatar"href="image/cc13.1.jpg">
                            <img src="image/cc13.1.jpg">
                        </a> 
                        <div class="author-name">
                            <div class="author-name-prefix">Author</div>
                            <h2> <em>R.S. Pressman</em> </h2>
                        </div>
                    </div>
                </article>
                <article class="card">
                    <div class="card-header">
                        <h2><b>Fundamentals of Software Engineering</b></h2>
                        <h3>Prentice-Hall of India</h3>
                        <button><a href="https://drive.google.com/file/d/1l_nNLTNCutvFhbT7bFj79yDBgjc3Sn5f/view?usp=sharing"><span></span>READ</a></button>
                       
                    </div>
                    <div class="card-author">
                        <a class="avatar"href="image/cc13.6.jpg">
                            <img src="image/cc13.6.jpg">
                        </a> 

                        <div class="author-name">
                            <div class="author-name-prefix">Author</div>
                            <h2> <em>R. Mall</em> </h2>
                        </div>
                    </div>
                </article>
                <!---paper14:graphics----->
                <article class="card">
                    <div class="card-header">
                        <h2><b> Computer Graphics Principles & Practice</b></h2>
                        <h3> Addison Wesley</h3>
                        <button><a href="https://drive.google.com/file/d/1_tWJF4c4yhMIBEes-iQKm0BA6TinCWcF/view?usp=sharing"><span></span>READ</a></button>
                       
                    </div>
                    <div class="card-author">
                        <a class="avatar"href="image/cc14.1.jpg">
                            <img src="image/cc14.1.jpg">
                        </a> 
                        <div class="author-name">
                            <div class="author-name-prefix">Author</div>
                            <h2> <em> J.D.Foley</em> </h2>
                        </div>
                    </div>
                </article>
                <article class="card">
                    <div class="card-header">
                       <!--<img src="image/cc2.4.jpg">-->
                       <h2><b> Computer Graphics</b></h2>
                       <h3><br> Prentice Hall of India</h3>
                       <button><a href="https://drive.google.com/file/d/13QTVVUJ1ll9HKWx-6yvNorXBlV8nHGvj/view?usp=sharing"><span></span>READ</a></button>
                      
                   </div>
                   <div class="card-author">
                        <a class="avatar"href="image/cc14.2.jpg">
                            <img src="image/cc14.2.jpg">
                        </a> 
                        <div class="author-name">
                            <div class="author-name-prefix">Author</div>
                            <h2> <em>D.Hearn,<br>Baker</em> </h2>
                        </div>
                    </div>
                </article>
                <!---de3:system programming----->
                <article class="card">
                    <div class="card-header">
                        <h2><b>Compilers:Principles,Techniques & Tools</b></h2>
                        <h3> Prentice Hal</h3>
                        <button><a href="https://drive.google.com/file/d/13SKqQVsM7-WTkj0L1VQM6GEc5rqfoiV4/view?usp=sharing"><span></span>READ</a></button>
                       
                    </div>
                    <div class="card-author">
                        <a class="avatar"href="image/de3.2.jpg">
                            <img src="image/de3.2.jpg">
                        </a> 
                        <div class="author-name">
                            <div class="author-name-prefix">Author</div>
                            <h2> <em> Alfred V.Aho</em> </h2>
                        </div>
                    </div>
                </article>
                <article class="card">
                    <div class="card-header">
                       <!--<img src="image/cc2.4.jpg">-->
                       <h2><b> System Software:An Intro to Sys Prog</b></h2>
                       <h3>Pearson Education</h3>
                       <button><a href="https://drive.google.com/file/d/13Sxgkve-SPOu1WnYPYGaa9lazVwjrnO9/view?usp=sharing"><span></span>READ</a></button>
                      
                   </div>
                   <div class="card-author">
                        <a class="avatar"href="image/de3.4.jpeg">
                            <img src="image/de3.4.jpeg">
                        </a> 
                        <div class="author-name">
                            <div class="author-name-prefix">Author</div>
                            <h2> <em> Leland Beck</em> </h2>
                        </div>
                    </div>
                </article>
            </section>
        </div>
        <!---end of 6th sem----->
        <div class="tag">NEW APPENDER</div>
            <div class="not-col">
                <?php
                    include 'dbh.inc.php';
                    $query = 'select * from books';
                    $query_run = mysqli_query($conn, $query);
                    while($row = mysqli_fetch_assoc($query_run)){
                ?>
                   <a href="<?php echo $row['link'];?>"><h3><b><?php echo "#    ".$row['bname']."   by  ".$row['bauthor']." (Semester ".$row['sem'].")";?></b></h3></a>
                   <br>
                   <hr>
                   <br>
                <?php
                    }
                 ?>
            </div>
        </div>
    </div>
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