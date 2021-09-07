
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
	
<script src="https://rawgit.com/Anujarya300/bubble_maps/master/data/geography-data/datamaps.none.js"></script>
	
	<script>
	 $(document).ready(function(e) { 
	var bubble_map = new Datamap({
            element: document.getElementById('gujarat1'),
            scope: 'S01_AC',
            geographyConfig: {
			    popupTemplate: function(geography, data) {
				
                return '<div class="hoverinfo">' + geography.properties.AC_NAME + '    '+ 'Total Positive: '
              },
                popupOnHover: true,
                highlightOnHover: true,
                borderColor: '#444',
                borderWidth: 0.5,
                dataUrl: './S01_AC.json'
                //dataJson: topoJsonData
            },
            fills: {
                'MAJOR2': 'rgb(255,101,0)',
				'MAJOR': 'rgb(255,0,0)',
                'MEDIUM1': 'rgb(255,132,0)',
				'MEDIUM2': 'rgb(255,153,0)',
				'MEDIUM3': 'rgb(255,193,0)',
				'MEDIUM': 'rgb(255,56,0)',
                'MINOR1': 'rgb(255,61,0)',
				'MINOR2': ' rgb(255,61,0)',
				'MINOR3': ' rgb(254,142,0)',
				'MINOR4': ' rgb(255,153,0)',
				'MINOR': 'rgb(245,198,137)',
				'gradient': 'url(#gradient)',
                defaultFill: 'rgba(23,48,210,0.9)'
            },
			
            //dataUrl: 'data_new.csv',
            //dataType: 'csv',
            data: {"INC":{"fillKey":"rgb(255,101,0)"}},
			
			setProjection: function(element,options) {
            var projection, path;
            projection = d3.geo.mercator()
                .center([-12.1, 1.5])
				.scale(60000);
                
                
				var path = d3.geo.path().projection(projection);
                return { path: path, projection: projection };
}
			
			
			// var projection = d3.geo.mercator()
            
			
        });
	
	 });
	</script>

	
</body>
</html>
