<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name='title' content="Covid-19 India Tracker">
		<meta name='description' content=" State all info for each indian state with graphical representation ">
		<meta name='keywords' content="coronavirus,corona,covid,covid19,covid-19,covidindia,positive cases in india,total cases in each state india">
    <link rel="icon" href="../images/favicon.ico">

    <title> - Dashboard</title>
    
	
	

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

     
  </head>

<body >
    <div id="gujarat1" style="height: 880px;"></div>
	<script src="../assets/vendor_components/jquery/dist/jquery.js"></script>
			 <script src="http://d3js.org/d3.v3.min.js"></script>
    <script src="http://d3js.org/topojson.v1.min.js"></script>

<script>

var path = d3.geo.path();

d3.json("./S01_AC.json", function(json) {

svg.selectAll("path")
   .data(json.features)
   .enter()
   .append("path")
   .attr("d", path);


   projection = d3.geo.mercator()
                .center([-12.1, 1.5])
				.scale(60000);

});

d3.json("someFile.json", function(json) {
        //Put things here that depend on the JSON loading
});

//Only put things here that can operate independently of the JSON
console.log("I like cats.");

</script>
	
<script src="https://rawgit.com/Anujarya300/bubble_maps/master/data/geography-data/datamaps.none.js"></script>
	
	

	
</body>
</html>
