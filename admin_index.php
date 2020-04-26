<!DOCTYPE html>
<html>
    <head>
        <title>Covid-19 Stat viewer</title>
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

        <div class="title"> Covid-19 Status </div>
        <div class="search-container">
            <div class="search">
                <input id="input-district-name" type="text"  onkeypress="doOnKeyPress(event)" placeholder="Enter District">
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





<div id="map"></div>
<script src="js/district.js"></script>
        <script src="js/admin_index.js"></script>
        <script async defer
          src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDmrlsyUlGOYFsXbMm-P1BpDvBm0JBCh6c&callback=initMap">
        </script>
    </body>
</html>