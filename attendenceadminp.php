<?php
session_start();
require_once('checksession.php');
require_once('admincheck.php');
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>ATTENDENCE PG</title>

    <style type="text/css">
        *{
            margin: 0;
            padding: 0;
        }
        .header{
            min-height: 50vh;
            width: 100%;
            background-image: /*linear-gradient(rgba(4,9,30,.1),rgba(4,9,30,.7)),*/url(image/attendance.jpg); 
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
          background-color: none;
          border-radius: 10px;
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
        }

        .notice button{
            margin-left: 400px;
            font-size: 16px;
        }

        .notice h3{
            font-size: 36px;
            font-weight: 600;
            padding: 40px ;
        }

        .form-group{
            padding-left: 40px;
            padding-right: 150px;
            padding-bottom: 30px;
        }

        label{
            font-weight: 600;
        }

        .form-control, .form-control1{
            padding: 20px;
        }

        .form-control{
           margin-left: 54px; 
        }

        .form-control1{
           margin-left: 8px; 
        }

        .form-control:hover{
            box-shadow: 0 0 20px 0px rgba(255,255,0,0.7);
        }

        .form-control1:hover{
            border-color: black;
            border-width: 2px;
            box-shadow: 0 0 20px 0px rgba(255,255,0,0.7);
        }

        .btn{
            width: 200px;
            padding: 5px 10px;
            text-align: center;
            margin-bottom: 50px;
            margin-left: 30px;
            border-radius: 25px;
            font-weight: bold;
            border: 2px solid #009688;
            background: transparent;
            color: black;
            cursor: pointer;
            font-size: 16px;
            position: relative;
            z-index: 1;
        }

        .btn span{
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
         
        .btn:hover{
            border: none;
            border:2px solid #ee6363;
            background: #ee6363;
        }

        .btn:hover span{
            width: 100%;
        }

        @media (max-width: 700px){
            .form-group{
                padding-left: 100px;
                padding-bottom: 30px;
            }
            .form-control1{
                width: 200px;
                height: 50px;
            }

            .notice button{
                margin-left: 160px;
                font-size: 16px;
            }

        }
    </style>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body>

    <section class="header">
        <nav>
            <a href="adminpanel.php"><img src="image/LOGO1.jpg"></a>
            <div class="nav-links" id="navLinks">
                <i class="fa fa-window-close-o" onclick="hideMenu()"></i>
                <ul>   
                    <li><a href="adminpanel.php" ><b>HOME</b></a></li>
                    <li><a href="unicode.php" ><b>PASSWORD</b></a></li>
                    <li><a href="quotes.php" ><b>QUOTES</b></a></li> 
                    <li><a href="notice.php" ><b>NOTICE</b></a></li>
                    <li><a href="attendenceadmin.php" ><b>UG ATTENDENCE</b></a></li>
                    <li><a href="library.php" ><b>UG LIBRARY</b></a></li>
                    <li><a href="librarypg.php" ><b>PG LIBRARY</b></a></li> 
                </ul>
            </div>
            <i class="fa fa-bars" onclick="showMenu()"></i>
        </nav>
    </section>

    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-4">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">PG ATTENDENCE</h4>
                    </div>
                    <div class="card-body">
                        <div>
                            <form action="" method="post">
                                <div class="form-group">
                                    <label>DATE : </label>
                                    <input type="DATE" class="form-control" name="date" placeholder="Enter Date">
                                </div>
                                <div class="form-group">
                                    <label>SEMESTER : </label>
                                    <input type="text" class="form-control" name="sem" placeholder="Enter Semester">
                                </div>
                                <button type="submit" class="btn" name="search"><span></span>SEARCH</button>
                            </form> 
                        </div>
                        
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                      <th scope="col">ID</th>
                                      <th scope="col">NAME</th>
                                      <th scope="col">CODE</th>
                                      <th scope="col">TIME</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        if(isset($_POST['search']))
                                        {
                                            include 'dbh.inc.php';
                                            $id = $_POST['date'];
                                            $sem = $_POST['sem'];
                                            $query = "SELECT * FROM attendence1 WHERE date = '$id' AND sem = '$sem'";
                                            $query_run = mysqli_query($conn, $query);
                                            if(mysqli_num_rows($query_run) > 0){
                                            while ($row = mysqli_fetch_array($query_run)) {
                                    ?>
                                    <tr>
                                      <td><?php echo $row['stid']; ?></td>
                                      <td><?php echo $row['stname']; ?></td>
                                      <td><?php echo $row['code']; ?></td>
                                      <td><?php echo $row['time']; ?></td>
                                    </tr>

                                    <?php
                                            }
                                        }
                                        else
                                        {
                                            ?>
                                            <tr>
                                                <td colspan="4">"NO DATA AVAILABLE"</td>
                                            </tr>
                                            <?php
                                        }

                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

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