<?php include('session.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Inventory Management System</title>
    <?php include("head.php");?>
</head>
<body style="overflow-y:auto;">
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

            <!-- Widgets Start -->
            <div class="container-fluid pt-4 px-4">
            <div class="row g-4">
                <div class="col-sm-12 col-md-12 col-xl-12">
                    <div class="h-100 bg-secondary rounded p-4" style="overflow-x:auto;">
                        <div class="d-flex align-items-center justify-content-between mb-1">
                            <div class="col-12 text-center text-sm-start">
                                <center>
                                    <h2>OVERALL TRANSACTION</h2> 
                                </center>
                            </div> 
                       </div>
                    </div>
                </div>
            </div>
            <br>
            <br>
            <br> 
                   <div class="row g-4">
                        <div class="col-sm-12 col-xl-12">
                            <div class="bg-secondary rounded h-100 p-4">
                               <table class="table table-bordered" style="border: 1px solid; border-color: white;">
                                    <thead style="background-color: #D61355; color: black; text-align: center;">
                                        <tr> 			
                                            <th scope="col">Sl.No</th>
                                            <th scope="col">Description</th>
                                            <th scope="col">Amount</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr style="color: white; text-align: center;">
                                            <th scope="row">01</th>
                                            <td>Overseas</td>
                                            <td>3000</td> 
                                        </tr>
                                        <tr style="color: white; text-align: center;">
                                            <th scope="row">01</th>
                                            <td>Biddabd</td>
                                            <td>3000</td>
                                        </tr>
                                        <tr style="color: white; text-align: center;">
                                            <th scope="row">01</th>
                                            <td>Biddabd Global</td>
                                            <td>3000</td> 
                                        </tr>
                                        <tr style="color: white; text-align: center;">
                                            <th scope="row">01</th>
                                            <td>Bs Techonology</td>
                                            <td>3000</td>
                                        </tr>  
                                    </tbody>
                                </table>
                          </div>
                        </div>
                   </div>
                   <br>
                    <br>
                             <table class="table table-bordered" style="border: 1px solid; border-color: white;">
                              <tbody class="header" style="color: white; text-align: center;">
                                <tr>
                                    <th>Total Amount</th>
                                    <td>50000</td>
                                </tr>
                              </tbody>
                            </table>
  <!------------------------------------->
  <br>             
       </div>        
            <!-- Widgets End -->

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