<?php include('session.php');?>
<!DOCTYPE html>
<html lang="en">

<head>
   
    <title>Inventory Management System</title>
    <?php include("head.php");?>
    
</head>
<style>
      * {
        margin: 0;
        padding: 0;
        font-family: sans-serif;
      }
      .chartMenu {
        width: 100vw;
        height: 40px;
        background: #1A1A1A;
        color: rgba(54, 162, 235, 1);
      }
      .chartMenu p {
        padding: 10px;
        font-size: 20px;
      }
      .chartCard {
        width: 100vw;
        height: calc(50vh - 50px);
        
        display: flex;
        align-items: center;
       
      }
      .chartBox {
        width: 400px;
        padding: 20px;
        border-radius: 20px;
        border: solid 3px rgba(54, 162, 235, 1);
        background: white;
        height: calc(50vh - 60px);
      }
    </style>

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
                                        <h2>BIDDABD GLOBAL TRANSACTION GRAPH</h2> 
                                    </center>  
                                    </div>   
                                </div>
                            </div>
                        </div>
                    </div>
                         <br>
                              <br>
                                   <center>
                                      <h2>CREDIT</h2>   
                                   </center>
                                    <br>    
                              <div class="chartCard">
                                    <div class="chartBox" style="margin-right:10px;">
                                         <canvas id="mCht"></canvas>
                                    </div>

                                    <div class="chartBox" style="margin-right:10px;">
                                        <canvas id="LineChart"></canvas>
                                    </div>
                                    
                                    <div class="chartBox">
                                        <canvas id="ChartBr"></canvas>
                                    </div>
                              </div>
                              <br>
                              <!----------(credit graph)------->
                              <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>

<script>
            var xValues = ["January", "February", "March", "April", "May", "June", "July","Auguest","September","November","December"];
            var yValues = [55, 49, 44, 24, 15];
            var barColors = ["red", "green","blue","orange","brown"];
            new Chart("mCht", {
            type: "bar",
            data: {
                labels: xValues,
                datasets: [{
                backgroundColor: barColors,
                data: yValues
                }]
            },
            options: {
                legend: {display: false},
                title: {
                display: true,
                text: "Daily"
                }
            }
            });
</script>

              <!----------------------------------->  

<script>
                        var xValues = ["January", "February", "March", "April", "May", "June", "July","Auguest","September","November","December"];
                        var yValues = [55, 49, 44, 24, 15];
                        var barColors = ["red", "green","blue","orange","brown"];

                        new Chart("LineChart", {
                        type: "bar",
                        data: {
                            labels: xValues,
                            datasets: [{
                            backgroundColor: barColors,
                            data: yValues
                            }]
                        },
                        options: {
                            legend: {display: false},
                            title: {
                            display: true,
                            text: "Weekly"
                            }
                        }
                        });
</script>
          
<!--------------------------------------------->
<script>
    var xValues = ["January", "February", "March", "April", "May", "June", "July","Auguest","September","November","December"];
    var yValues = [55, 49, 44, 24, 15];
    var barColors = ["red", "green","blue","orange","brown"];

    new Chart("ChartBr", {
    type: "bar",
    data: {
        labels: xValues,
        datasets: [{
        backgroundColor: barColors,
        data: yValues
        }]
    },
    options: {
        legend: {display: false},
        title: {
        display: true,
        text: "Monthly"
        }
    }
    });
</script>
 
                                <div class="col-12 text-center text-sm-start">
                                    <center>
                                        <h2>DEBIT</h2> 
                                   </center>     
                                </div> 
                                <br>
                                <div class="chartCard">
                                    <div class="chartBox" style="margin-right:10px;">
                                         <canvas id="myChart"></canvas>
                                     </div>
                                      <div class="chartBox" style="margin-right:10px;">
                                         <canvas id="myChat"></canvas>
                                     </div>
                                     <div class="chartBox">
                                         <canvas id="mChat"></canvas>
                                     </div>
                                </div>
                                <br>
                              <div class="col-12 text-center text-sm-start">
                                    <center>
                                        <h2>Overall</h2>  
                                    </center>    
                              </div> 
                                <br>
                                <center>
                                <div class="row">
                                    <div class="col">
                                    <div class="chartBox">
                                         <canvas id="myChartLine"></canvas>
                                     </div>
                                    </div>
                                </div>
                               </center>
                                <br>
                                <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>

<!-----//////////(overall)/////////---->

<script>
    var xValues = ['January', 'February', 'March', 'April', 'May', 'June', 'July','Auguest','September','November','December'];
    var yValues = [7,8,8,9,9,9,10,11,14,14,15];

    new Chart("myChartLine", {
    type: "line",
    data: {
        labels: xValues,
        datasets: [{
        fill: false,
        lineTension: 0,
        backgroundColor: "rgba(0,0,255,1.0)",
        borderColor: "rgba(0,0,255,0.1)",
        data: yValues
        }]
    },
    options: {
        legend: {display: false},
        scales: {
        yAxes: [{ticks: {min: 6, max:16}}],
        }
    }
    });
</script>

<!-- ////////////////////////(debit graph)//////////////////// -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
<script>
    var xValues = ["January", "February", "March", "April", "May", "June", "July","Auguest","September","November","December"];
    var yValues = [55, 49, 44, 24, 15];
    var barColors = ["red", "green","blue","orange","brown"];

    new Chart("myChart", {
    type: "bar",
    data: {
        labels: xValues,
        datasets: [{
        backgroundColor: barColors,
        data: yValues
        }]
    },
    options: {
        legend: {display: false},
        title: {
        display: true,
        text: "Daily"
        }
    }
    });
</script>
<script>
    var xValues = ["January", "February", "March", "April", "May", "June", "July","Auguest","September","November","December"];
    var yValues = [55, 49, 44, 24, 15];
    var barColors = ["red", "green","blue","orange","brown"];

    new Chart("myChat", {
    type: "bar",
    data: {
        labels: xValues,
        datasets: [{
        backgroundColor: barColors,
        data: yValues
        }]
    },
    options: {
        legend: {display: false},
        title: {
        display: true,
        text: "Weekly"
        }
    }
    });
</script>
<script>
    var xValues = ["January", "February", "March", "April", "May", "June", "July","Auguest","September","November","December"];
    var yValues = [55, 49, 44, 24, 15];
    var barColors = ["red", "green","blue","orange","brown"];

    new Chart("mChat", {
    type: "bar",
    data: {
        labels: xValues,
        datasets: [{
        backgroundColor: barColors,
        data: yValues
        }]
    },
    options: {
        legend: {display: false},
        title: {
        display: true,
        text: "Monthly"
        }
    }
    });
</script>
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