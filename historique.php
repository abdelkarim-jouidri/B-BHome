<?php
require_once('connDb.php');
  //  temperature logo 1
    $stmt = $conn->prepare("SELECT * FROM temperature_int WHERE  nom_piece=? ");

    $stmt ->execute(['chambre']);

    $temp_int=$stmt->fetchAll();


    // humidite logo 2
    $stmt = $conn->prepare("SELECT * FROM humidite WHERE  nom_piece=? ");

    $stmt ->execute(['chambre']);

    $humidite_int=$stmt->fetchAll();

    // luminosite logo 3
    $stmt = $conn->prepare("SELECT * FROM luminosite WHERE  nom_piece=? ");

    $stmt ->execute(['chambre']);

    $luminosite_int=$stmt->fetchAll();

    // piece

    $stmt = $conn->prepare("SELECT * FROM piece WHERE  nom_piece=? ");

    $stmt ->execute(['chambre']);

    $piece=$stmt->fetchAll();
    // etat
    $stmt = $conn->prepare("SELECT * FROM etat WHERE  nom_piece=? ");

    $stmt ->execute(['chambre']);

    $etat=$stmt->fetchAll();

    // temp_exterieur
    $stmt = $conn->prepare("SELECT * FROM temperature_ext WHERE  nom_piece=? ");

    $stmt ->execute(['chambre']);

    $temperature_ext=$stmt->fetchAll();

    // luminosite
    $stmt = $conn->prepare("SELECT horodatage,valeur FROM temperature_int WHERE  nom_piece=? ");

    $stmt ->execute(['chambre']);

    $luminosite_chart=$stmt->fetchAll();
// print_r($luminosite_chart);
 


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.3.min.js"
  integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="owlfolder/css/owl.carousel.min.css">

  <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="css/owl.carousel.min.css">

  <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>

  <link rel="stylesheet" href="css/helper.css">
  <link rel="stylesheet" href="css/main-styles.css">
  <script src="js/main-script.js" defer></script>
</head>
<body>
  <!----------------------------------------------------------------------- nav bar ------------------------------------------------------------->
  <header class="header">
    <div class="logo-toggle">
      <button class="menu-icon-btn" data-menu-icon-btn>
        <svg viewBox="0 0 24 24" preserveAspectRatio="xMidYMid meet" focusable="false" class="menu-icon"><g ><path d="M3 18h18v-2H3v2zm0-5h18v-2H3v2zm0-7v2h18V6H3z"></path></g></svg>
      </button>
      <div class="logo-img">
        <img src="images/logo-iot-removebg-preview.png" alt="">
      </div>
    </div>
    <div class="weather">
      <div id="ww_559fdfef1145e" v='1.3' loc='id' a='{"t":"horizontal","lang":"fr","sl_lpl":1,"ids":["wl7517"],"font":"Arial","sl_ics":"one_a","sl_sot":"celsius","cl_bkg":"image","cl_font":"#FFFFFF","cl_cloud":"#FFFFFF","cl_persp":"#81D4FA","cl_sun":"#FFC107","cl_moon":"#FFC107","cl_thund":"#FF5722","el_phw":3,"el_whr":3}'>Weather Data Source: <a href="https://meteolabs.fr/meteo_orleans/" id="ww_559fdfef1145e_u" target="_blank">meteolabs.fr</a></div><script async src="https://app1.weatherwidget.org/js/?id=ww_559fdfef1145e"> console.log(document.querySelector('.ww_name')) 
      </script>
     
    </div>
    <div class="logout">
      <a class="logout-link" style="color: black;" href="login.php"> 
        <svg xmlns="http://www.w3.org/2000/svg" class="logout-btn" width="1em" height="1em" viewBox="0 0 512 512"><path fill="red" d="M400 54.1c63 45 104 118.6 104 201.9c0 136.8-110.8 247.7-247.5 248C120 504.3 8.2 393 8 256.4C7.9 173.1 48.9 99.3 111.8 54.2c11.7-8.3 28-4.8 35 7.7L162.6 90c5.9 10.5 3.1 23.8-6.6 31c-41.5 30.8-68 79.6-68 134.9c-.1 92.3 74.5 168.1 168 168.1c91.6 0 168.6-74.2 168-169.1c-.3-51.8-24.7-101.8-68.1-134c-9.7-7.2-12.4-20.5-6.5-30.9l15.8-28.1c7-12.4 23.2-16.1 34.8-7.8zM296 264V24c0-13.3-10.7-24-24-24h-32c-13.3 0-24 10.7-24 24v240c0 13.3 10.7 24 24 24h32c13.3 0 24-10.7 24-24z"/></svg>
      </a>
    </div>
  </header>
  <!----------------------------------------------------------------------- End of nav bar ------------------------------------------------------>

    <div class="Container">
      <!----------------------------------------------------------------------- side bar ------------------------------------------------------->
      <aside class="sidebar" data-sidebar>
        <div class="middle-sidebar">
          <ul class="sidebar-list">
            <li class="sidebar-list-item  " onclick="makeElementActive(this)">
              <a href="chambre.php" id="home-link" class="sidebar-link  ">
                <svg class="sidebar-icon " viewBox="0 0 24 24" preserveAspectRatio="xMidYMid meet" focusable="false" ><g ><path d="M4,10V21h6V15h4v6h6V10L12,3Z" ></path></g></svg>
                <div class="hidden-sidebar sidebar-link-text ">accueil</div>
              </a>
            </li>
            <li class="sidebar-list-item  activated" onclick="makeElementActive(this)">
              <a href="historique.php" class="sidebar-link activated">
                <svg class="sidebar-icon activated"viewBox="0 0 24 24" preserveAspectRatio="xMidYMid meet" focusable="false"  ><g ><path d="M14.97,16.95L10,13.87V7h2v5.76l4.03,2.49L14.97,16.95z M12,2C8.73,2,5.8,3.44,4,5.83V3.02H2V9h6V7H5.62 C7.08,5.09,9.36,4,12,4c4.41,0,8,3.59,8,8s-3.59,8-8,8s-8-3.59-8-8H2c0,5.51,4.49,10,10,10s10-4.49,10-10S17.51,2,12,2z" ></path></g></svg>   
                <div class="hidden-sidebar sidebar-link-text  activated">Historique</div>
              </a>
            </li>
     
          <li class="sidebar-list-item " onclick="makeElementActive(this)">
            <a href="profile.php" class="sidebar-link">
              <svg  xmlns="http://www.w3.org/2000/svg" width="35px" height="25px" viewBox="0 0 48 48">
                <g fill="currentColor">
                  <path fill-rule="evenodd" d="M24 42c9.941 0 18-8.059 18-18S33.941 6 24 6S6 14.059 6 24s8.059 18 18 18Zm0 2c11.046 0 20-8.954 20-20S35.046 4 24 4S4 12.954 4 24s8.954 20 20 20Z" clip-rule="evenodd"/>
                  <path d="M12 35.63c0-1.033.772-1.906 1.8-2.02c7.715-.854 12.72-.777 20.418.019a1.99 1.99 0 0 1 1.108 3.472c-9.085 7.919-14.277 7.81-22.686.008c-.41-.38-.64-.92-.64-1.478Z"/>
                  <path fill-rule="evenodd" d="M34.115 34.623c-7.637-.79-12.57-.864-20.206-.019A1.028 1.028 0 0 0 13 35.631c0 .286.119.557.32.745c4.168 3.866 7.326 5.613 10.413 5.624c3.098.011 6.426-1.722 10.936-5.652a.99.99 0 0 0-.554-1.724ZM13.69 32.616c7.796-.863 12.874-.785 20.632.018a2.99 2.99 0 0 1 1.662 5.221c-4.575 3.988-8.385 6.16-12.257 6.145c-3.883-.014-7.525-2.223-11.766-6.158A3.018 3.018 0 0 1 11 35.63a3.028 3.028 0 0 1 2.69-3.015Z" clip-rule="evenodd"/>
                  <path d="M32 20a8 8 0 1 1-16 0a8 8 0 0 1 16 0Z"/>
                  <path fill-rule="evenodd" d="M24 26a6 6 0 1 0 0-12a6 6 0 0 0 0 12Zm0 2a8 8 0 1 0 0-16a8 8 0 0 0 0 16Z" clip-rule="evenodd"/>
                </g>
              </svg>
              <div class="hidden-sidebar sidebar-link-text ">Profil</div>
            </a>
          </li>
         
          </ul>
        </div>

      </aside>

      <main class="content p-3 gap-3">

    
    <div id="chart_div" style="width: 90%; height : 90%"></div>
    <div id="chart_div_1" style="width: 90%; height : 100%"></div>
              </main>
    
     
                

      

              
         
            </div>
  </div>
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>


<script>
  
  google.charts.load('current', {'packages':['corechart']});
  google.charts.setOnLoadCallback(drawChart);
  google.charts.setOnLoadCallback(drawChart1);

  $(window).resize(function(){
  drawChart();
  drawChart1();
});

function drawChart() {
// Create the data table
var data = new google.visualization.DataTable();
data.addColumn('string', 'Year');
data.addColumn('number', 'Luminosité');

<?php

$json_array = json_encode($luminosite_int);
  ?>
var dataArray =[];
var js_array = JSON.parse('<?php echo $json_array; ?>');


for (var n = 0; n < js_array.length; n++) {
data.addRows([
 [js_array[n]['horodatage'],js_array[n]['valeur']],
 [js_array[n]['horodatage'],js_array[n]['valeur']]
 
  
  
]);
}

var options = {
  'title':'Luminosité',
  'width':75 +'%',
  'height':100+'px'
               };

var chart1 = new google.visualization.LineChart(document.getElementById('chart_div'));
chart1.draw(data, options);

}
// window.addEventListener('resize', function() {
//   // Update chart dimensions
//   chart1.options.responsive = true;
//   chart1.options.maintainAspectRatio = false;
//   chart1.options.width = parent.offsetWidth;
//   chart1.options.height = parent.offsetHeight;

//   // Redraw chart
//   chart1.update();
// });
function drawChart1() {
// Create the data table
var data = new google.visualization.DataTable();
data.addColumn('string', 'Year');
data.addColumn('number', 'temperature');

<?php

$json_array = json_encode($temp_int);
  ?>
var dataArray =[];
var js_array = JSON.parse('<?php echo $json_array; ?>');


for (var n = 0; n < js_array.length; n++) {
data.addRows([
 [js_array[n]['horodatage'],js_array[n]['valeur']],
 [js_array[n]['horodatage'],js_array[n]['valeur']]
 
  
  
]);
}

var options = {
  'title':'Température',
               };

var chart1 = new google.visualization.LineChart(document.getElementById('chart_div_1'));
chart1.draw(data, options);

}



 $(document).ready(function(){



 


 
})
  </script>
  <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" ></script> 
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" ></script>
 
</body>
</html>