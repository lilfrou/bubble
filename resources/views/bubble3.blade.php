<script src="https://github.highcharts.com/master/highcharts.js"></script>
<script src="https://github.highcharts.com/master/highcharts-more.js"></script>
<script src="https://github.highcharts.com/master/modules/exporting.js"></script>
@extends('layouts.backend')

@section('content')
    <!-- Hero -->
    <div class="bg-body-light">
        <div class="content content-full">
            <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                <h1 class="flex-sm-fill h3 my-2">Bubble</h1>
                <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-alt">
                        <li class="breadcrumb-item">App</li>
                        <li class="breadcrumb-item" aria-current="page">
                            <a class="link-fx" href="">Bubble</a>
                        </li>
                    </ol>
                </nav>
            </div>
       </div>
    </div>
    <!-- END Hero -->

    <!-- Page Content -->
    <div class="container">
    <div id="container"></div>
</div>
    <script>
     var data1=<?php echo $data1; ?>;
      var data2=<?php echo $data2; ?>;

 document.addEventListener('DOMContentLoaded', function () {
     Highcharts.chart('container', {
   chart: {
     type: 'packedbubble',
     height: '60%'
   },
   title: {
     useHTML: true,
     text: 'Bubble Size per name length , Collor per Boolean'
   },

   tooltip: {
     useHTML: true,
     pointFormat: '<b>{point.name}:</b> {point.y}</sub>'
   },
   plotOptions: {

     packedbubble: {
        layoutAlgorithm: {
            splitSeries: true,
            parentNodeOptions: {
                    marker: {
                        fillOpacity: 0,
                        lineWidth: 0
                    }
                }
        },
        minSize: 23,
             maxSize: 150,
       dataLabels: {
         enabled: true,
         useHTML: true,
         format: '<center><b>{point.name}<br>{point.y}</b></center>',
         style: {
           color: 'black',
           textOutline: 'none',

           fontWeight: 'normal'
         }
       },
       minPointSize: 5
     }
   },

  series: [{

     name: 'Offline',

          data:  data1,
          color:'#FF465F',
           }, {

           name: 'Online',

          data:  data2 ,
          color:'#468CFF',
       }]


 });



 });


    </script>

    <!-- END Page Content -->
@endsection

