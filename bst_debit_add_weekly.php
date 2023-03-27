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
                                    <h2>BST WEEKLY TRANSACTION</h2> 
                                    <h5>(DEBIT-ADD)</h5>
                                </center>
                            </div>   
                       </div>
                    </div>
                </div>
            </div> 
            <br>
            <?php
            include("backend/insert.php");
            $obj= new Insert();
            if(isset($_POST['add']))
            {
                $msg=$obj->bst_debit_add_weekly($_POST);
            }
                    if(isset($msg))
                        {
            ?>
                        <script>
                             swal({
                                title: " <?php  echo $msg;?>",
                                icon: "success",
                                button: "Back",
                                  });
                        </script>
                    <?php
                                   
                        }
            ?>
                <form action="bst_debit_add_weekly.php" method="POST">
                        <div class="row">
                            <div class="col-6">
                                <div class="mb-3"> 
                                    <label for="exampleInputEmail1" class="form-label" style="color: white;font-weight: bold;">Date</label>
                                    <input type="date" style="background-color: white; font-weight: bold; color:red;" required="required" name="date" class="form-control" id="date" >
                                </div>
                            </div>
                        </div> 
                    <button type="submit" class="btn btn-primary" style="color: white;font-weight: bold;" name="add">Submit</button>
                </form>
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