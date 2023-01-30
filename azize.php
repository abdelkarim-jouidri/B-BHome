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



?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.3.min.js"
    integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="azize.css">
<!-- Include the Flickity CSS -->
<link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">

<!-- Include the Flickity JavaScript -->
<script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>

  <title>home page</title>
</head>

<body>




  <div class="wrapper">

    <div class="carousel " style="    margin-left: 200px; margin-top: 100px;">
      <div class="carousel-cell c-1 me-5">Ajoute piece</div>
      <div class="carousel-cell c-2 me-5" >Chambre</div>
      <div class="carousel-cell c-3">Cuisine</div>
    </div>

    <div id="app"></div>

    <div class="main_container d-flex flex-column">

    

      <div class="alert alert-danger text-center fw-bold d-none" id="alert-allumer" role="alert">
        Pensez à allumer le chauffage ! 
      </div> 

      <div class="alert alert-danger text-center fw-bold d-none"  id="alert-chauffage" role="alert">
        Pensez à arrêter le chauffage ! 
       </div> 
     
       <!-- afficher message temp exterieur -->
       <div class="item text-center  border border-4 border-success ">
        <h6 class="fw-bold"> Bonjour, la température extérieure est de <span><?=$temperature_ext[0]['valeur'];?></span> °C</h6> 
      </div>
      <!-- les 3 logos -->
      <div class="item d-flex flex-wrap justify-content-around  align-item-center">
          <!-- 1 logo -->
          <div class="first-logo border  border-2 border-secondary rounded  p-3 mt-1 mr-1 d-flex justify-content-between align-item-center">
            
             <div><img class="logos-icon-img" src="logo1.png"/></div>
             <div class="pt-4  ">
              <div class="font-weight-bold text-icon d-flex justify-content-between fs-4">

                <span class="me-1" id="temp-mesure"><?=$temp_int[0]['valeur'];?> </span>
                <span>°C</span> 
              </div>
             </div> 
          </div>
          <!-- 2 logo -->

          <div class="second-logo border border-2 border-secondary rounded  p-3 mt-1 mr-1 d-flex justify-content-between align-item-center">
            <div><img class="logos-icon-img" src="logo2.png"/></div>
             <div class="pt-4  ">
              
              <div class="font-weight-bold text-icon d-flex justify-content-between fs-4">
                <span class="me-1"><?= $humidite_int[0]['valeur'];?></span>
                <span>%</span> 
              </div> 
            
            </div> 
               
          </div>
          <!-- 3 logo -->
          <div class="third-logo border border-2 border-secondary rounded  p-3 mt-1 d-flex justify-content-between align-item-center">
            <div><img class="logos-icon-img" src="logo3-removebg-preview.png"/></div>
             <div class="pt-4 ">
              <div class="font-weight-bold text-icon d-flex justify-content-between fs-4">
              <span class="me-1"><?= $luminosite_int[0]['valeur'];?></span>
              <span>Lux</span> 
            </div>  
          </div> 
               
          </div>

        
      </div>

      <div class="item text-center  border border-4 border-success ">
        <h5 class="fw-bold">Modifier les valeurs de consignes </h5> 
      </div>
      <div class=" item">
             

        <!-- <div id="slider">
          <span id="value">50</span>
          <input type="range" id="range" value="50"/>
      </div>  -->
      
      


      <div class="température  p-2 d-flex justify-content-around align-item-center">
          <div class="margin-right-120 fw-bold">Température  </div>
          <div class="range" id="temperatue">
            <!-- <span id="rs-bullet" class="rs-label">0</span> -->
            <input  type="range" value="<?= $piece[0]['t_consigne'];?>" class="form-range slider"  id="input-temperature" min="5" max="30" />
           
           
           
            <datalist id="values">
              <option class="fw-bold" value="0" label="5°C"></option>

              <div class="text-cente fw-bold fs-6" id="temperature-value"></div>

              <option class="fw-bold" value="30" label="30°C"></option>
            </datalist>
           
          </div>

          
      </div>

      <div class="humidite p-2 d-flex justify-content-around align-item-center">
        <div style="margin-right: 51px;" class="margin-right-120 fw-bold">Humidité  </div>
        <div class="range">
          <input type="range" value="<?= $piece[0]['h_consigne'];?>" class="form-range" id="input-humidite" min="0" max="100"/>
          <datalist id="values">

            <option class="fw-bold" value="0" label="0%"></option>

            <div class="text-cente fw-bold fs-6" id="humidite-value"></div>

            <option class="fw-bold" value="100" label="100%"></option>
          </datalist>
         
        </div>
      </div>

      <div class="luminosite p-2 d-flex justify-content-around align-item-center">
        <div class="margin-right-120 fw-bold">Luminosité  </div>
        <div class="range">
          <input type="range" class="form-range" value="<?= $piece[0]['l_consigne'];?>" id="input-luminosite" min="0" max="100"/>
          <datalist id="values">

            <option class="fw-bold" value="0" label="0%"></option>
            <div class="text-cente fw-bold fs-6" id="luminosite-value"></div>
            <option class="fw-bold" value="100" label="100%"></option>
          </datalist>
        </div>
      </div>

      </div>
      <div class="item text-center  border border-4 border-success ">
        <h5 class="fw-bold">Etat </h5> 
      </div>
      <div class="item">
        <div class="Chauffage p-2 d-flex justify-content-around align-item-center">
          
          <div class="margin-right-120 fw-bold">Chauffage  </div>
          <div class="form-check form-switch margin-right-120">
            <input   class="form-check-input padding-right-46" type="checkbox" id="check1" >
            <!-- <label class="form-check-label" for="flexSwitchCheckChecked">Checked switch checkbox input</label> -->
          </div>
      </div>

      <div class="VMC p-2 d-flex justify-content-around align-item-center">
        <div  class="margin-right-120 fw-bold">VMC  </div>
        <div class="form-check form-switch ms-5  margin-right-120 ">
          <input  class="form-check-input padding-right-46" type="checkbox" id="check2" >
          <!-- <label class="form-check-label" for="flexSwitchCheckChecked">Checked switch checkbox input</label> -->
        </div>
      </div>

      <div class="Eclairage p-2 d-flex justify-content-around align-item-center">
        <div style="margin-right: -2px;" class="margin-right-114 fw-bold">Eclairage  </div>
        <div class="range ">
          <input type="range" class="form-range" value="<?=$etat[0]['etat_eclairage'];?>" id="input-eclairage" min="0" max="100"/>
          <datalist id="values">
            <option class="fw-bold" value="0" label="0%"></option>
            <div class="text-cente fw-bold fs-6" id="eclairage-value"></div>
            <option class="fw-bold" value="100" label="100%"></option>
          </datalist>
        </div>
      </div>

      <div class="Volets p-2 d-flex justify-content-around align-item-center">
        <div style="margin-right: 13px;" class="margin-right-114 fw-bold">Volets  </div>
        <div class="range ">
          <input type="range" class="form-range" value="<?=$etat[0]['etat_volet'];?>" id="input-volets" min="0" max="100"/>
          <datalist id="values">
            <option class="fw-bold" value="0" label="0%"></option>
            <div class="text-cente fw-bold fs-6" id="volets-value"></div>
            <option class="fw-bold" value="100" label="100%"></option>
          </datalist>
        </div>
      </div>

      </div>

      <div class="item text-center  border border-4 border-success ">
        <h5 class="fw-bold">Absent ?</h5> 
      </div>
         
      <div class="item">
        <div class="Chauffage p-2 d-flex justify-content-center align-item-center">
          
          <!-- <div class="margin-right-120 fw-bold">Chauffage  </div> -->
          <div class="form-check form-switch ">
            <input   class="form-check-input padding-right-46" type="checkbox" id="check3" >
            <!-- <label class="form-check-label" for="flexSwitchCheckChecked">Checked switch checkbox input</label> -->
          </div>
      </div>

    </div>

    <div class="item  d-flex justify-content-between align-item-center">
    <div id="chart_div"></div>
    <div id="chart_div1"></div>
    <div id="chart_div2"></div>
  </div>


</div>
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

  <script>
    
    google.charts.load('current', {'packages':['corechart']});
    google.charts.setOnLoadCallback(drawChart);

function drawChart() {
  // Create the data table
  var data = new google.visualization.DataTable();
  data.addColumn('string', 'Year');
  data.addColumn('number', 'Sales');
  data.addRows([
    ['2004', 1000],
    ['2005', 1170],
    ['2006', 660],
    ['2007', 1030]
  ]);

  // Set chart options
  var options = {'title':'Company Performance',
                 'width':400,
                 'height':300};

  // Create the chart
  var chart1 = new google.visualization.BarChart(document.getElementById('chart_div'));
  var chart2 = new google.visualization.LineChart(document.getElementById('chart_div1'));
  var chart3= new google.visualization.ScatterChart(document.getElementById('chart_div2'));
  chart1.draw(data, options);
  chart2.draw(data, options);
  chart3.draw(data, options);
}







 $(document).ready(function(){
  // carousel
  var flkty = new Flickity( '.carousel', {});
  flkty.on( 'select', function() {

    if(flkty.selectedIndex==0){
        $('.c-1').addClass('fw-bold');
        $('.c-1').addClass('fs-6');
    }
    if(flkty.selectedIndex==1){
        $('.c-2').addClass('fw-bold');
        $('.c-2').addClass('fs-6');
    }
    if(flkty.selectedIndex==2){
        $('.c-3').addClass('fw-bold');
        $('.c-3').addClass('fs-6');
    }
    console.log( 'Flickity select ' + flkty.selectedIndex )
  });

//temp
var slider_temp = document.getElementById("input-temperature");
var value_temp = document.getElementById("temperature-value");

value_temp.innerHTML = slider_temp.value+'°C'; 
slider_temp.oninput = function() {
value_temp.innerHTML = this.value+'°C';
}


//humidite
var slider_humidite = document.getElementById("input-humidite");
var value_humidite = document.getElementById("humidite-value");

value_humidite.innerHTML = slider_humidite.value+'%'; 
slider_humidite.oninput = function() {
  value_humidite.innerHTML = this.value+'%';
}
//luminosite
var slider_luminosite = document.getElementById("input-luminosite");
var value_luminosite = document.getElementById("luminosite-value");

value_luminosite.innerHTML = slider_luminosite.value+'%'; 
slider_luminosite.oninput = function() {
  value_luminosite.innerHTML = this.value+'%';
}
//eclairage
var slider_eclairage = document.getElementById("input-eclairage");
var value_eclairage = document.getElementById("eclairage-value");

value_eclairage.innerHTML = slider_eclairage.value+'%'; 
slider_eclairage.oninput = function() {
  value_eclairage.innerHTML = this.value+'%';
}

//volets

var slider_volets = document.getElementById("input-volets");
var value_volets = document.getElementById("volets-value");

value_volets.innerHTML = slider_volets.value+'%'; 
slider_volets.oninput = function() {
  value_volets.innerHTML = this.value+'%';
}
// cdt of alerts

let tempConsigne = slider_temp.value;
let tempMesure = document.getElementById("temp-mesure").innerHTML;
 
 console.log(tempMesure);
 console.log(tempConsigne);
 if(tempMesure < tempConsigne + 0.5){
  if(document.getElementById("check1").checked == false ){
    document.getElementById("alert-allumer").classList.remove('d-none');

  }
  
 }
 else if(tempMesure > tempConsigne + 0.5){
  if(document.getElementById("check1").checked == true){

  document.getElementById("alert-chauffage").classList.remove('d-none');
  }


 }
 console.log(document.getElementById("check1").checked);


 
})
  </script>
</body>


</html>