<!DOCTYPE html>
<html>
    <head>
        <title>Covid-19 Stat viewer</title>
        <script src="https://kit.fontawesome.com/c939d0e917.js"></script>
        <link rel = "stylesheet" href="style/style.css">
        <script src="https://kit.fontawesome.com/c939d0e917.js"></script>
        <link rel = "stylesheet" href="style/style.css">
        <script>
            function doOnKeyPress(event){
            if(event.keyCode == 13 || event.which == 13){
            searchDistrict();   
                    }
                };
        </script>
    </head>
<body>

<?php 
    include "loader.php";
    ?>
<div class="login-btn"><a class="href-btn" role="button" href=""  data-toggle="modal" data-target="#signup" type="button">UPDATE</a></div>
    <div class="title"> Covid-19 Status </div>
        <div class="search-container">
            <div class="search">
                <input id="input-district-name"  onkeypress="doOnKeyPress(event)" type="text" placeholder="Enter District">
                <i class="fas fa-search" onclick="searchDistrict()"></i>
            </div>
        </div>
        
        <div class = "store-list-container">
            <div class="district-list">
                <!-- <div class="store-container">
                    <div class="store-container-background">
                        <div class="store-info-container">
                            <div class="district-name">Name here</div>
                            <div class="district-stat">
                                    <span>Total Cases</span>
                                    <span>Active Cases</span>
                                    <span>Recovered</span>
                                    <span>Deaths</span>
                            </div>
                    </div>
                    <div class="store-number-container">
                        <div class="district-number">1</div>
                    </div>
                </div>
            </div> -->
        </div>
    </div>

<!-- login form -->
<div class="modal fade" role="dialog" tabindex="-1" id="signup">
            <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Log In</h4><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button></div>
                    <div class="modal-body">
                        <form action="login_process.php" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                      <span class="text-primary input-group-text"><i class="fa fa-user"></i></i></span></div>
                                      <input class="form-control" type="text" required="" placeholder="Username" name="username" id="username">
                                    <div class="input-group-append"></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                      <span class="text-primary input-group-text"><i class="fa fa-lock"></i></span></div>
                                      <input class="form-control" type="password" required="" placeholder="Password" name="password" id="password">
                                    <div class="input-group-append"></div>
                                </div>
                            </div>
                            <div class="form-group"><button class="btn btn-primary btn-lg text-white"  href="#" type="submit" id="addarts" name="addarts" style="width: 100%;" type="button">Log in</button></div>
                        </form>
                        </div>
                </div>
            </div>
        </div>
       



<div id="map"></div>
<script src="assets/js//jquery.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script src="js/district.js"></script>
<script src="js/index.js"></script>
        <script async defer
          src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDmrlsyUlGOYFsXbMm-P1BpDvBm0JBCh6c&callback=initMap">
        </script>
    </body>
</html>