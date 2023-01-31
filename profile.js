  
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
        $('.c-2').removeClass('fw-bold');
        $('.c-3').removeClass('fw-bold');

        $('.c-1').addClass('fs-6');
    }
    if(flkty.selectedIndex==1){
        $('.c-2').addClass('fw-bold');
        $('.c-1').removeClass('fw-bold');
        $('.c-3').removeClass('fw-bold');

        $('.c-2').addClass('fs-6');
        $('.c-1').removeClass('fs-6');
        $('.c-3').removeClass('fs-6');
    }
    if(flkty.selectedIndex==2){
        $('.c-3').addClass('fw-bold');
        $('.c-2').removeClass('fw-bold');
        $('.c-1').removeClass('fw-bold');

        $('.c-3').addClass('fs-6');
        $('.c-2').removeClass('fs-6');
        $('.c-1').removeClass('fs-6');
    }
    console.log( 'Flickity select ' + flkty.selectedIndex )
  });


 
})