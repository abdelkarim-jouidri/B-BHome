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
flkty.selectedIndex
flkty.on( 'select', function() {
if(flkty.selectedIndex==0){
    $('.c-1').addClass('fw-bold');
    $('.c-2').removeClass('fw-bold');
    $('.c-3').removeClass('fw-bold');
    $('.c-1').removeClass('opacity-25');

    $('.c-2').addClass('opacity-25');
    $('.c-3').addClass('opacity-25');
    

    $('.c-1').addClass('fs-6');
}
if(flkty.selectedIndex==1){
    $('.c-2').addClass('fw-bold');
    $('.c-1').removeClass('fw-bold');
    $('.c-3').removeClass('fw-bold');
    $('.c-2').removeClass('opacity-25');

    $('.c-2').addClass('fs-6');
    $('.c-1').removeClass('fs-6');
    $('.c-3').removeClass('fs-6');
    $('.c-1').addClass('opacity-25');
    $('.c-3').addClass('opacity-25');
}
if(flkty.selectedIndex==2){
    $('.c-3').addClass('fw-bold');
    $('.c-3').removeClass('opacity-25');
    $('.c-2').removeClass('fw-bold');
    $('.c-1').removeClass('fw-bold');

    $('.c-2').addClass('opacity-25');
    $('.c-1').addClass('opacity-25');

    $('.c-3').addClass('fs-6');
    $('.c-2').removeClass('fs-6');
    $('.c-1').removeClass('fs-6');
}
console.log( 'Flickity select ' + flkty.selectedIndex )
});

temp
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