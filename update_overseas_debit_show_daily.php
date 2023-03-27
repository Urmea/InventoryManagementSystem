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
                                        <h2>OVERSEAS DAILY TRANSACTION</h2> 
                                        <h5>(DEBIT-ADD)</h5>
                                    </center>
                                </div>   
                           </div>
                        </div>
                    </div>
                </div>
            <br>
        <?php
            include("backend/update.php");
            $obj= new Update();
            if(isset($_POST['add']))
            {
                $msg=$obj->update_overses_daily_debit_id($_POST);
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
                <div class="row g-4">
                <?php
                        include("backend/display.php");
                        $obj= new Display();
                        if(isset($_GET['data']))
                        {
                            $update_overses_daily_debit_id=$_GET['update_overses_daily_debit_id'];
                            if($_GET['data']=='update')
                            {
                                $item= $obj->overseas_debit_show_daily($update_overses_daily_debit_id);
                                while ($element = mysqli_fetch_assoc($item)) {        
            ?>
                    <form action="update_overseas_debit_show_daily.php" method="POST">
                        <div class="row">
                            <div class="col-6">
                                <div class="mb-3"> 
                                    <label for="exampleInputEmail1" class="form-label" style="color: white;font-weight: bold;">Mobile Cost</label>
                                    <input type="text" style="background-color: white; font-weight: bold; color:black;" name="mobile_cost" required="required" class="form-control" id="mobile_cost" value="<?php echo $element['mobile_cost']; ?>">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="mb-3"> 
                                    <label for="exampleInputEmail1" class="form-label" style="color: white;font-weight: bold;">Hospitality Cost</label>
                                    <input type="text" style="background-color: white; font-weight: bold; color:black;" required="required" name="hospitality_cost" class="form-control" id="hospitality_cost"  value="<?php echo $element['hospitality_cost']; ?>">
                                </div>
                            </div>
                        </div> 
                        <div class="row">
                            <div class="col-6">
                                <div class="mb-3"> 
                                    <label for="exampleInputEmail1" class="form-label" style="color: white;font-weight: bold;">Visa Process Cost</label>
                                    <input type="text" style="background-color: white; font-weight: bold; color:black;" name="visa_pro_cost" required="required" class="form-control" id="visa_pro_cost" value="<?php echo $element['visa_pro_cost']; ?>">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="mb-3"> 
                                    <label for="exampleInputEmail1" class="form-label" style="color: white;font-weight: bold;">Date</label>
                                    <input type="date" style="background-color: white; font-weight: bold; color:red;" name="date" required="required" class="form-control" id="date" value="<?php echo $element['date']; ?>">
                                </div>
                            </div>
                        </div>
                       <button type="submit" class="btn btn-primary" style="color: white;font-weight: bold;" name="add">Submit</button>
                    </form>
                    <?php 
                                }
                            }
                        }
                    ?>
                </div>
           </div>        
          
<!-- -------------------------------Delete Function Starts here------------------------------- -->

<!-- -------------------------------Delete Function Ends here------------------------------- -->                  
          
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