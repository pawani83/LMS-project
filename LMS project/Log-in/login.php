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
                color: white;
            }

            .login{
                margin-top: 40px;
                margin-right: 50px;
                margin-left: 50px;
            }


        </style>

    </head>

    <body>


        <div class="container" style="margin-bottom:100px;">
            <div class="row mx-5 pt-3">
                <div class="col-sm-5 p-5 text-brown text-center" style="margin-top: 100px;">
                    <p class="display-4" style="color:#510400"><b>LibraNET</b></p>
                    <p style="color:#510400"><b>Elevate Your Library Experience:</b> Seamlessly Manage, Discover, and Connect with Our Online Library Management System</p>
                </div>
                <div class="col-sm-7 p-3">
                    <div class="container-sm mt-5 d-flex justify-content-center" style="margin-left:40px;">
                        <div class="card mx-5 bg-brown text-center" style="width:400px; height:400px;">
                            <form class="login">
                                <div class="mb-3 mt-3">
                                    <input type="username" class="form-control" id="usr" placeholder="Enter username or email" name="username">
                                </div>
                                <div class="mb-3">
                                    <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
                                </div>
                    
                                <div class="d-grid">
                                    <button type="submit" class="btn btn-primary btn-block rounded-5">LOGIN</button>
                                </div>
                            </form>
                            <hr>
                            
                            <p class="text-lightyellow" >If you are not a member..</p>
                            <p class="display-6"><a href="#" class="btn btn-lg btn-success"><span class="spinner-grow spinner-grow-sm"></span> Buy your membership now.</a></p>
                        </div>
                    </div>
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