<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://d3js.org/d3.v5.js"></script>
</head>
<body>

   <script>
       var dataArray=[100,200,300,400,500];
       var widht=1000;
       var height=1000;
       var widhtScale = d3.scaleLinear()
                                .domain([0,500])
                                .range([0,widht]);

        var color = d3.scaleLinear()
                                .domain([0,500])
                                .range(["red","blue"]);

                                var xaxis= d3.axisBottom(widhtScale).ticks(20);
   var canvas=d3.select("body")
   .append("svg")
    .attr('height',widht )
    .append('g')
    .attr('widht',height    )
    .attr('transform','translate(20,0)');
    var circle =  canvas.append('circle')
        .attr('cx',50)
        .attr('cy',50)
        .attr('r',50);
        circle.transition()
        .delay(500)
        .duration(1500)
    .attr('cx',100)
    .attr('cy',100)
    .transition()
    .attr('cy',300)
    .duration(1500)
    .on('end',function() {d3.select(this).attr('fill','red');});
    var rect =  canvas.selectAll("rect")
    .data(dataArray)
    .enter()
    .append("rect")
    .attr('width', function(d) {return widhtScale(d);})
    .attr('height',50 )
    .attr('fill',function(d){return color(d);})
    .attr('y',function(d,i) {return i*100;});
    // var circle = canvas.append("circle")
    // .attr('cx',30 )
    // .attr('cy',70)
    // .attr('r',14     )
    // .attr('fill',"red");
    canvas.append("g").attr('transform','translate(0,500)').call(xaxis);



   </script>
</body>
</html>
