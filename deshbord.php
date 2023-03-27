<?php include('session.php');?>
<!DOCTYPE html>
<html lang="en">

<head>
   
    <title>Inventory Management System</title>
    <?php include("head.php");?>

    
</head>

<body style="overflow-y:auto; overflow-x:auto;">
    <div class="container-fluid position-relative d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->

        <!-- Sidebar Start -->
        <?php include("nev.php");?>
        <!-- Sidebar End -->

        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            <?php include("saide.php");?>
            <!-- Navbar End -->

            <!-- Sale & Revenue Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-line fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">Today Sale</p>
                                <h6 class="mb-0">$1234</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-bar fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">Total Sale</p>
                                <h6 class="mb-0">$1234</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-area fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">Today Revenue</p>
                                <h6 class="mb-0">$1234</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-pie fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">Total Revenue</p>
                                <h6 class="mb-0">$1234</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Sale & Revenue End -->

            <!-- Sales Chart Start --> 
            <div class="container-fluid pt-4 px-4">
            </div> 
            <!-- Sales Chart End -->

            <!-- Recent Sales Start -->
             <div class="container-fluid pt-4 px-4">
            </div> 
            <!-- Recent Sales End -->

            <!-- Widgets Start -->
            <div class="container-fluid pt-4 px-4">
            
                <div class="row g-4">
                    <div class="col-sm-12 col-md-6 col-xl-6" >
                        <div class="h-100 bg-secondary rounded p-6">
                            <div class="d-flex align-items-center justify-content-between mb-4" style="margin-left:20px;">
                                <h5 class="mb-0" style="margin-top: 24px; color:#FF4500">Calender</h5>
                            </div>
                            <div id="calender" style="margin-bottom:20px;"></div>
                        </div>
                    </div> 
                    
                    <div class="col-sm-12 col-md-6 col-xl-6" >
                        <div class="h-100 bg-secondary rounded p-6">
                            <div class="d-flex align-items-center justify-content-between mb-4" style="margin-left:20px;">
                                <h5 class="mb-0" style="margin-top: 24px; color: #FF4500">Time</h5>
                            </div>
                            <div> <center style="text-shadow: 2px 2px 8px red;"><?php include("watch.php");?></center></div>
                            <center><h4 style="color: orange;">Time And Tide Wait For None</h4></center>
                        </div>
                    </div> 

                    <!-- <div class="col-sm-12 col-md-6 col-xl-4" >
                        <canvas id="canvas" width="400" height="400" style="background-color:#333"></canvas>
                    </div>  -->
                </div>
            </div>
            
            <!-- Widgets End -->

        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>        
        <br>
        <br>
        <br>
                    <!-- Footer Start -->
            <?php include("footer.php");?>
            <!-- Footer End -->
        </div>
        <!-- Content End -->

        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <?php include("script.php");?>
</body>
</html>