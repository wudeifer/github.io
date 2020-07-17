<!DOCTYPE HTML>
<html lang="en">
  <head>
      
      
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Results verification page Zhiming Wu”</title>
    
  </head>
    
<body>
    
    <h3 class="text-center container">Results verification page Zhiming Wu </h3>
        
    <fieldset class="container" style="height:688px;border: 1px solid #999999; border-radius: 10px; background-color: azure">
   
    <!-- Full name -->    
    <div>     
        <div>
            <b style="color: red">*</b><b>Full Name:  </b>
        </div>      
        <div class="container">  
            <?php echo $_POST["fullname"];?>
        </div>
    </div>

    <!-- address -->   
    <div>     
        <div>
            <b style="color: red">*</b><b>Address:  </b>
        </div>      
        <div class="container" id="ad">  
             <?php echo $_POST["street"];?>, <?php echo $_POST["city"]; ?>, <?php echo $_POST["state"]; ?> <?php echo $_POST["zip"]; ?>  
        </div>    
    </div>
     <!-- map -->  
    <div id="map" >google maps</div>
    <br>
    <!-- Birth date -->   
    <div>     
        <div>
            <b style="color: red">*</b><b>Birth Date:  </b>
        </div>      
        <div class="container">  
            <?php echo $_POST["birthdate"];?>
        </div>
    </div>
   
    <!-- Education Level -->   
    <div>     
        <div>
            <b>Education Level:  </b>
        </div>      
        <div class="container">  
            <?php echo $_POST["education"];?>
        </div>
    </div>      
   
    <!-- Height -->   
    <div>     
        <div>
            <b>Height:  </b>
        </div>      
        <div class="container">
            <?php
            if($_POST["height"]!==''){
                echo $_POST["height"];
            }else{
                echo "None";               
            }
            ?>
        </div>
    </div>      
  
    <!-- phone -->    
    <div>     
        <div>
            <b style="color: red">*</b><b>Phone:  </b>
        </div>      
        <div class="container">  
            <?php echo $_POST["phone"];?>
        </div>
    </div>   

    <!-- email -->    
    <div>     
        <div>
            <b style="color: red">*</b><b>Email:  </b>
        </div>      
        <div class="container">  
            <?php echo $_POST["email"];?>
        </div>
    </div>       
    <br>
    <!-- Agree --> 
    <div>
       <b style="color: red">*</b><b>Have agreed to terms and conditions  </b>
    </div>  
    <br>
    <!--submit button -->
    <div>
        <button class="btn btn-primary" type="submit" style="margin-bottom: 10px">Verified and Submit</button> 
    </div>
    <br>

   </fieldset>
    <br>
    <br>
<!-- google maps -->
     <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>

    <style type="text/css">
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 30%;
          width: 30%;
      }

      /* Optional: Makes the sample page fill the window. */
      html,
      body {
        height: 50%;
        margin: 0;
        padding: 0;
      }
    </style>
     <script>
      var geocoder;
      var map;
      var address = <?php echo json_encode($_POST["street"]); ?> + <?php echo json_encode($_POST["city"]); ?> ;
      function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 8,
          center: {lat: 37.773972, lng: -122.431297}
        });
        geocoder = new google.maps.Geocoder();
        codeAddress(geocoder, map);
      }

      function codeAddress(geocoder, map) {
        geocoder.geocode({'address': address}, function(results, status) {
          if (status === 'OK') {
            map.setCenter(results[0].geometry.location);
            var marker = new google.maps.Marker({
              map: map,
              position: results[0].geometry.location
            });
          } else {
            alert('Geocode was not successful for the following reason: ' + status);
          }
        });
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCq0PCyticO-YMJtoZ89VlJPrmhgQuJKes&callback=initMap">
    </script>

    
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>