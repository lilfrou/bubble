<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
</head>
<body>
    <script type="text/javascript">
        var analytics = <?php echo $name; ?>


        google.charts.load('current', {'packages':['corechart']});

        google.charts.setOnLoadCallback(drawChart);

        function drawChart()
        {

         var data = google.visualization.arrayToDataTable(analytics);
         var options = {
             colorAxis: {colors: ['red', 'blue'],
             legend :{ position:'none'}},
             animation:{"startup": true,
             duration: 2000,

           },
           bubble: {
                   textStyle: {
                       fontSize: 9
                   }
               },


          width: 1050,
                height: 600,
                legend: 'none',

          hAxis: {
          baselineColor: 'none',
       ticks: [],
          viewWindow: {
             min: 0,
             max: {{$maxX}}*1.2
         },
          },
             vAxis: {   baselineColor: 'none',
         ticks: [],

             viewWindow: {
             min: 0,
             max: {{$maxY}}*1.2

         },

             },

         };
         var chart = new google.visualization.BubbleChart(document.getElementById('pie_chart'));
         chart.draw(data, options);
        }
       </script>




         <div class="panel-body" align="center">
          <div id="pie_chart">


         </div>
        </div>
</body>
</html>








