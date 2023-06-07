<!DOCTYPE html>
<html lang="en">
    <head>
        <title>LMS</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width = device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

        <style>
            body{
                background-color: lightyellow;
            }

            .bg-brown{
                background-color: #510400;
            }
            
            .text-lightyellow{
                color: lightyellow;
            }

            .custom-para{
                color: white;
            }

            .nav-item{
                padding-left: 25px;
            }

            hr{
                color: #510400;
            }

        </style>

    </head>

    <body>
        <div class="row px-4 pt-3 pb-3"> 
            <div class="col-sm-4">
                <p class="display-4" style="color:#510400"><b>LibraNET</b></p>
            </div>
            <div class="col-sm-8 pt-4 ">
                <ul class="nav justify-content-end">
                    <li class="nav-item">
                        <a class="nav-link" href="#">about us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">books</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">contacts</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#">Disabled</a>
                    </li>
                </ul>
            </div>
        </div>

        <hr>

        <div class="row mx-4">
            <div class="col-sm-4 p-5 bg-brown text-lightyellow">
                <p class="display-4">Welcome to..<br>LibraNET</p>
                <p class="custom-para"><b>Elevate Your Library Experience:</b> Seamlessly Manage, Discover, and Connect with Our Online Library Management System</p>
            </div>
            <div class="col-sm-8" style="background-image: url('jason-leung-D4YrzSwyIEc-unsplash.jpg'); background-size: cover; background-repeat: no-repeat;">
            </div>
        </div><br>
        
        <div class="container-sm">
            <p class="display-6 text-center"><b>You may progress through....</b></p>
        </div>
        
        <div class="row mx-5">
            <div class="col-sm-5 text-white">
                <div class="card rounded bg-brown text-center p-3">
                    <img src="clipart1185851.png" alt="newMembershipIcon" class="mx-auto d-block img-fluid" style="width:250px; height:250px">
                    <p class="display-4 text-lightyellow" >Get your Membership now..</p>
                    <p><a href="#" class="btn btn-lg btn-primary"><span class="spinner-grow spinner-grow-sm"></span> Buy Now</a></p>
                </div>
            </div>
            <div class="col-sm-2"></div>
            <div class="col-sm-5 text-white">
                <div class="card rounded bg-brown text-center p-3">
                    <img src="clipart489671.png" alt="newMembershipIcon" class="mx-auto d-block img-fluid" style="width:250px; height:250px">
                    <p class="display-4 text-lightyellow">Already have a Membership..</p>
                    <p><a href="Log-in/login.php" class="btn btn-lg btn-primary" target="_blank"><span class="spinner-grow spinner-grow-sm"></span> Log-in</a></p>
                </div>
            </div>
        </div>

        <!-- Footer Element of the page !-->
        <footer class="container-fluid mt-5 pt-3 bg-dark text-center text-white">
            <div class=" d-flex align-items-center justify-content-center">
                <p>&copy; Copyright 2023 LibraNET. All rights reserved.</p>
            </div>
        </footer>
    </body>
</html>
