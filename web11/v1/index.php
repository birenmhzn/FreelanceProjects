<?php
  $printlatlong = null;
  if(isset($_POST['getwalkscore']))
    {   
      $lat = $_POST['lat'];
      $lon = $_POST['lon'];
      $address = $_POST['address1'];
      if ($lat != "" && $lon != ""  && $address != "" )
      {
         function getWalkScore($lat, $lon, $address) {

          $address=urlencode($address);
          $url = "http://api.walkscore.com/score?format=json&address=$address";
          $url .= "&lat=$lat&lon=$lon&wsapikey=bd137b89d85dfdd9e511b0f787f84296";

          $str = @file_get_contents($url); 
          return $str; 
         } 
         $json = getWalkScore($lat,$lon,$address);
         if(strpos($json, 'walkscore":') !== false) {
                  $getscore = explode('walkscore":',$json);
                  $getlatlong = explode(',',$getscore[1]);
                  $printlatlong = $getlatlong[0];
            }
            else {
                $printlatlong = "Walkcode not found";
            }
      }
      else {
        $printlatlong = "";
      }
   }
?>
<!DOCTYPE html>
<html>
  <head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css">
    <link rel="stylesheet" type="text/css" href="https://s3-us-west-1.amazonaws.com/patterns.esri.com/files/calcite-web/1.2.0/css/calcite-web.min.css">
    <script src="https://cdn.polyfill.io/v2/polyfill.js?features=es5,Promise,fetch"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://unpkg.com/@esri/arcgis-rest-request@1.14.3/dist/umd/request.umd.min.js"></script>
    <script src="https://unpkg.com/@esri/arcgis-rest-geocoder@1.14.3/dist/umd/geocoder.umd.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script>
      function addressSearch(e) {
        e.preventDefault();
        geocodeAndShowResults($("#address").val());
        $("#address").autocomplete("close");
      }
      var getlocation;
      function geocodeAndShowResults(input) {
        arcgisRest.geocode(input).then(function(data) {
          document.getElementById("results").innerHTML =
            "<ul>" +
            data.candidates
              .map(function(result) {
                getlocation = JSON.stringify(result.location);
                return (
                  "<li>" +
                  result.address +
                  "<ul><li>" +
                  JSON.stringify(result.location) +
                  "</li><li>Score: " +
                  result.score +
                  "</li></ul></li>");})
              .join("") +"</ul>";
            var replaced = getlocation.replace(/{|"|}|,|y/g,'');
            var arrayat = replaced.split('s');
            var arrayatzero = arrayat[0];
            var getlatlong1 = arrayatzero.split(':');
            document.getElementById("longu").value = getlatlong1[1];
            document.getElementById("lati").value = getlatlong1[2];
        });}
      $(document).ready(function() {
        document
          .getElementById("searchSubmit")
          .addEventListener("submit", addressSearch);

        $("#address").autocomplete({
          classes: {
            "ui-widget": "asdf"
          },
          source: function(request, response) {
            arcgisRest.suggest(request.term).then(
              function(data) {
                response(
                  data.suggestions.map(function(suggestionObject) {
                    return {
                      label: suggestionObject.text,
                      value: suggestionObject.text
                    };}));
              }.bind(this));},
          minLength: 2,
          select: function(event, ui) {
            console.log(ui.item.value);
            geocodeAndShowResults(ui.item.value);
          }});});
    </script>
    <style type="text/css">
      .wrapper {
        .results {
          font-family: monospace;
        }
        
      }
      .ui-widget {
        font-family: inherit !important;
      }
      body {
        width: 100wh;
        height: 90vh;
        color: #fff;
        background: linear-gradient(#EE7752, #E73C7E, #23A6D5, #23D5AB);
        background-size: 400% 400%;
      }

    </style>
  </head>
  <body>
    <div class="grid-container">
      <div class="wrapper column-12 center-column">
        <center>
          <img src="map.png" class="img-responsive" height="200" width="200">
        </center>
        <form action="#" method="post">
          <div class="input-group" style="width: 100%;">
              <input class="search input-group-input" name="address1" type="text" placeholder="Search an Address!" id="address" />
              <input type="hidden" id="lati" name="lat">
              <input type="hidden" id="longu" name="lon">          
          </div><br>
          <div class="">
            <center>
              <span class="input-group-button">
                <button name="getwalkscore" id="searchSubmit" type="submit" style="width: 60%;">Search</button>
              </span>
              </center>
          </div>
          <div> <center><h3><b>Your Walkscore is : <?php echo $printlatlong; ?></b></h3></center></div>
        </form>
      </div>
      <div id="demo"></div>
      <div class="wrapper column-24">
        <div class="results" id="results" style="display: none;"></div>
      </div>
    </div>
  </body>
</html>
