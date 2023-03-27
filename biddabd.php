<?php include('session.php');?>
<!DOCTYPE html>
<html lang="en">

<head>
   
    <title>Inventory Management System</title>
    <?php include("head.php");?>

</head>
<body>
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
                            <div class="d-flex align-items-center justify-content-between mb-4">
                                <div class="col-12 text-center text-sm-start">
                                    <center>
                                        <h2>BIDDABD TRANSACTION GRAPH</h2> 
                                    </center>
                                    </div>   
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <br>
                    <form>
                        <div class="row" >
                            <div class="col">
                                <div class="form-group">
                                    <select class="form-select" aria-label="Default select example" name="" style=" font-weigth:bold; background-color:white;">
                                        <option >Select Option</option>
                                        <option >Debit</option>
                                        <option >Credit</option>
                                    </select>   
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <select class="form-select" aria-label="Default select example" name=""  style=" font-weigth:bold; background-color:white;">
                                        <option style="background-color:white;" >Select Option</option>
                                        <option >Daily</option>
                                        <option >Weekly</option>
                                        <option >Monthly</option>
                                    </select>   
                                </div>
                            </div>
                            <br>
                            <br>
                            <br>
                            <div>
                                 <button type="submit" class="btn btn-primary"  name="add">Submit</button>
                            </div>
                        </div>
                    </from>
                    <br>
                    <br>
                    <br>
                    <br>
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
                        <body>
                        <canvas id="myChart" style="width:100%;max-width:1000px;background-color:#e2e2e2;"></canvas>
                        <script>
                                var xValues = ['January','February','March','April','May','June','July','Auguest','September','November','December'];
                                var yValues = [1,5,3,6,4,4,6,];

                                new Chart("myChart", {
                                type: "line",
                            
                                data: {
                                    labels: xValues,
                                    datasets: [{
                                    fill: false,
                                    lineTension: 0,
                            
                                    backgroundColor: "black",
                                    borderColor: "black",
                                    data: yValues
                                    }]
                                },
                                options: {
                                    legend: {display: false},
                                    scales: {
                                    yAxes: [{ticks: {min: 0, max:10}}],
                                    }
                                }
                                });
                        </script>
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