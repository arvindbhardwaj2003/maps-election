<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>D3 World Map</title>
    <style>
      path {
        stroke: white;
        stroke-width: 0.5px;
        fill: black;
      }
    </style>
    <script src="http://d3js.org/d3.v3.min.js"></script>
    <script src="http://d3js.org/topojson.v0.min.js"></script>
  </head>
  <body>
    <script type="text/javascript">
      var width = 900;
      var height = 600;

      var projection = d3.geo.mercator();
      
      var svg = d3.select("body").append("svg")
          .attr("width", width)
          .attr("height", height);
      var path = d3.geo.path()
          .projection(projection);
      var g = svg.append("g");
      
      d3.json("gujarat.topo.json", function(error, topology) {
          g.selectAll("path")
            
                .geometries)
          .enter()
            .append("path")
            .attr("d", path)
      });
    </script>
  </body>
</html>