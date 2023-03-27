<?php include('session.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Inventory Management System</title>
    <?php include("head.php");?>
</head>
<style>
 .popup-container {
    width: 600px;
    height: 400px;
    background: #edf6f9;
    position: fixed;
    left: 50%;
    top: 50%;
    transform: translate(-50%, 0%);
    font-family: "Raleway", sans-serif;
    padding: 8px 32px;
    border-radius: 8px;
    box-shadow: 0 4px 20px -8px rgba(0, 0, 0, 0.3);
    padding-bottom: 20px;
    opacity: 0;
    pointer-events: none;
    transition: all 500ms cubic-bezier(0.07, 0.71, 0.3, 1.2);
  }
  .popup-container.active {
    transform: translate(-50%, -50%);
    opacity: 5;
    pointer-events: auto;
  }
  .popup-container .chart-container {
    width: 500px;
    height: 400px;
  }
  
  .popup-container .popup-content {
    display: flex;
  }
  .popup-container .close-btn {
    width: 30px;
    position: absolute;
    right: 24px;
    top: 24px;
    transition: all 100ms ease;
    cursor: pointer;
  }
  .popup-container .close-btn:hover {
    transform: scale(1.2);
  }
  .popup-container .popup-details {
    font-weight: 700;
    line-height: 2;
    color: #24213d;
    border-left: 1px solid #9f96f1;
    padding-left: 20px;
    align-self: center;
  }
  .stats-btn {
    padding: 6px 12px;
    background: #24213d;
    color: #fff;
    border: none;
    border-radius: 8px;
    font-size: 20px;
    cursor: pointer;
  }
    .popup-container {
      width: 80%;
    }
  
    .popup-container .close-btn {
      top: -20px;
      right: 0;
      background: #24213d;
      padding: 2px 4px;
    }
    @media (max-width: 720px) {
        .popup-container .popup-content {
          flex-direction: column;
          align-items: center;
        }
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
                                      <h2>OVERSEAS TRANSACTION GRAPH</h2> 
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
                            <br>
                            <br>
                            <br>
                            <div>
                            <button class="stats-btn">Submit</button>
                            </div>
                       <div class="popup-container">
                                  <h3>Graph</h3>
                                  <div class="popup-content">
                                    <div class="chart-container">
                                      <canvas id="myChart"></canvas>
                                    </div>
                                  </div>
                                  <div class="close-btn">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="#f40076">
                                      <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M6 18L18 6M6 6l12 12"
                                      />
                                      </svg>
                                    </div>
                                  </div>
                                  <br>
                                  <br>
                            <script src="https://cdn.jsdelivr.net/npm/chart.js@3.6.0/dist/chart.min.js"></script>
                            <script>
                              const popupContainer = document.querySelector(".popup-container");
                              const statsBtn = document.querySelector(".stats-btn");
                              const closeBtn = document.querySelector(".popup-container .close-btn");

                              statsBtn.addEventListener("click", () => {
                                popupContainer.classList.add("active");
                              });

                              closeBtn.addEventListener("click", () => {
                                popupContainer.classList.remove("active");
                              });
                            </script>

                            <script>
                              const ctx = document.getElementById("myChart").getContext("2d");
                              const myChart = new Chart(ctx, {
                                type: "bar",
                                data: {
                                  labels: ["January", "February", "March", "April", "May","June","July","Auguest","September","November","December"],
                                  datasets: [
                                    {
                                      label: "# of Votes",
                                      data: [20, 15, 13, 5, 2,20, 15, 13, 5, 2,],
                                      backgroundColor: [
                                        "#f40076",
                                        "#3d348b",
                                        "#44ffd1",
                                        "#f75c03",
                                        "#fca311",
                                      ],

                                      borderWidth: 0,
                                    },
                                  ],
                                },
                              });
                            </script>

                        </div>
                    </from>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
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