<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
     crossorigin="anonymous">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" 
     crossorigin="anonymous" referrerpolicy="no-referrer" />

     <link rel="stylesheet" href="../style.css">
     <style>
        .admin_image{
            width: 100px;
            object-fit: contain:
        }
        .footer{
            position:absolute;
            bottom: 0;
        }
     </style>
</head>
<body>
    <div class="container-fluid p-0">
        <nav class="navbar navbar-expand-lg navbar-light bg-info">
            <div class="container-fluid">
                <img src="../images/logo.jpg" alt="" class="logo">
                <nav class="navbar navbar-expand-lg ">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="" class="nav-link">Welcome guest</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </nav>
        <!-- second child-->
        <div class="bg-light">
            <h3 class="text-center p-2">Manage Details</h3>
        </div>

        <!-- Third child-->
        <div class="row">
            <div class="col-md-12 bg-secondary p-1 d-flex align-items-center">
                <div class="px-5">
                     <a href="#"><img src="../images/logo.jpg" alt="" class="admin_image"></a>
                    <p class="text-light text-center">admin name</p>
                </div>
                <div class="button text-center">
                    <button><a href="" class="nav-link text-light bg-info my-1">Insert Products</a></button>
                    <button><a href="" class="nav-link text-light bg-info my-1">View Products</a></button>
                    <button><a href="index.php?insert_category" class="nav-link text-light bg-info my-1">Insert Categories</a></button>
                    <button><a href="" class="nav-link text-light bg-info my-1"></a>View Categories</button>
                    <button><a href="" class="nav-link text-light bg-info my-1"></a>Insert Brands</button>
                    <button><a href="" class="nav-link text-light bg-info my-1"></a>View Brands</button>
                    <button><a href="" class="nav-link text-light bg-info my-1"></a>All orders</button>
                    <button><a href="" class="nav-link text-light bg-info my-1"></a>All payments</button>
                    <button><a href="" class="nav-link text-light bg-info my-1"></a>List users</button>
                    <button><a href="" class="nav-link text-light bg-info my-1"></a>Log out</button>
                </div>
            </div>
        </div>

        <!--forth child-->
         <div class="container">
            <?php
            if(isset($_GET['insert_category'])){
                include('insert_categories.php');
            }
            ?>
         </div>



<div  class="bg-info p-3 text-center footer " >
    <p>All rights reserved &copy; Designed by Nyaga Ian Kuria</p>
</div> 
    </div>

    

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" 
crossorigin="anonymous"></script>
</body>
</html>