<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Manage Books</title>
        <meta charset="utf-8">
        <!-- Bootstrap 5 !-->
        <meta name="viewport" content="width = device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Bootstrap 5 icons library !-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">


        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <style>
            body{
                background-color: lightyellow;
            }

            .bg-brown, .text-brown{
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
            
            #my_nav .nav-link{
                color: white;
            }

        </style>

    </head>

    <body>
        <div class="row px-4 pt-3 pb-3 bg-brown"> 
        <div class="col-sm-9">
            <p class="display-4" style="color: white; display: inline-block;"><b>LibraNET</b></p>
            <h4 style="color: white; display: inline-block;"><b>&lt;BOOKS&gt;</b></h4>
        </div>
            <div class="col-sm-3 d-flex justify-content-end">
                <span style="font-size:60px; color: white;">A1_</span>
                <a href="#"><i class="bi bi-person-circle" style="font-size:60px; color:white" ></i></a>   
             </div>
        </div>
        
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark" id="my_nav">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="collapsibleNavbar">
                    <ul class="navbar-nav nav-pills">
                        <li class="nav-item dropdown">
                            <a class="nav-link active dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">All</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Borrowable</a></li>
                                <li><a class="dropdown-item" href="#">Referable</a></li>
                                <li><a class="dropdown-item" href="#">Donated</a></li>
                                <li><a class="dropdown-item" href="#">Bought</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="#">Add</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="#">Remove</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="#">Update</a>
                        </li>  
                    </ul>
                    <form class="d-flex" style="margin-left: 20px;">
                        <input class="form-control me-2" type="text" placeholder="Search">
                        <button class="btn btn-primary" type="button">Search</button>
                    </form>
                </div>
            </div>
        </nav>

        
        
        <!-- Footer Element of the page !-->
        <footer class="footer mt-5 pt-3 bg-dark text-center text-white">
            <div class=" d-flex align-items-center justify-content-center">
                <p>&copy; Copyright 2023 LibraNET. All rights reserved.</p>
            </div>
        </footer>
    </body>
</html>