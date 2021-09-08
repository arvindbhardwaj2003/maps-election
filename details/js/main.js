

window.onload = initialize();
    var expressed = 'PARTY';
	//the first function called once the html is loaded
	function initialize(){
		setMap();
	};

	function setMap(){
	
		//map frame dimensions
		var width = 960;
		var height = 960;
	
		//create a new svg element with the above dimensions
		var map = d3
		    .select("#map__container")
			//.select("body")
			.append("svg")
			.attr("width", width)
			.attr("height", height);
	
		//create Europe Albers equal area conic projection, centered on France
		var projection = d3.geo.mercator()
              .center([-12.1, 1.5])
				.scale(60000);
		
		//create svg path generator using the projection
		var path = d3.geo.path()
			.projection(projection);
		
		//use queue.js to parallelize asynchronous data loading
		//queue()
			//.defer(d3.csv, "data/unitsData.csv") //load attributes from csv
			//.defer(d3.json, "data/EuropeCountries.topojson") //load geometry
			//defer(d3.json, "data/FranceRegions.topojson") //load geometry
			//.await(callback); //trigger callback function once data is loaded

        d3.json("./S01_AC.json", function(error, s01) {
               if (error) return console.error(error);
			   	//add Europe countries geometry to map	
            var jsonRegions = s01.objects.S01_AC.geometries;
			for (var a=0; a<jsonRegions.length; a++){
            //alert(jsonRegions[a].properties.PARTY);		
            }
            //var recolorMap = colorScale(csvData);			
			var regions = map.selectAll(".regions")
			.data(topojson.feature(s01,
					 	 s01.objects.S01_AC).features)
			.enter() //create elements
			.append("path") //append elements to svg
			.attr("class", "regions") //assign class for additional styling
			.attr("id", function(d) { return d.properties.PARTY })
			.attr("d", path) //project data as geometry in svg
            .style("fill", function(d) { //color enumeration units
                     return choropleth(d, jsonRegions);
			})
			.on("mouseover", highlight)
		    .on("mouseout", dehighlight)		
		    .on("mousemove", moveLabel)
		
		});
		
		function colorScale(csvData){
	
		//create quantile classes with color scale
		var color = d3.scale.quantile() //designate quantile scale generator
			.range([
				"#D4B9DA",
				"#C994C7",
				"#DF65B0",
				"#DD1C77",
				"#980043"
			]);
			
		//build array of all currently expressed values for input domain
		var domainArray = [];
		for (var i in csvData){
			domainArray.push(Number(csvData[i][expressed]));
		};

		//pass array of expressed values as domain
		color.domain(domainArray);
	
		return color;	 //return the color scale generator
	};
	
	function choropleth(d, recolorMap){
		
		//get data value
		var value = d.properties['PARTY'];
		 //alert(value);
		//if value exists, assign it a color; otherwise assign gray
		if (value == 'INC') {
			return "#33B5FF";
		} else {
			return "#000080";
		};
	};
		
		
			//create graticule generator
	var graticule = d3.geo.graticule()
		.step([10, 10]); //place graticule lines every 10 degrees	

	//create graticule background
	var gratBackground = map.append("path")
		.datum(graticule.outline) //bind graticule background
		.attr("class", "gratBackground") //assign class for styling
		.attr("d", path) //project graticule
	
	//create graticule lines	
	var gratLines = map.selectAll(".gratLines") //select graticule elements	
		.data(graticule.lines) //bind graticule lines to each element
	 	.enter() //create an element for each datum
		.append("path") //append each element to the svg as a path element
		.attr("class", "gratLines") //assign class for styling
		.attr("d", path); //project graticule lines
		
	function highlight(data){
	
		var props = data.properties; //json properties
	
		d3.select("#"+props.AC_NAME) //select the current region in the DOM
			.style("fill", "#000"); //set the enumeration unit fill to black
	
		var labelAttribute = "<h1>"+props[expressed]+
				 "</h1><br><b>"+expressed+"</b>"; //label content
		var labelName = props.name; //html string for name to go in child div
	
		//create info label div
		var infolabel = d3.select("body").append("div")
			.attr("class", "infolabel") //for styling label
			.attr("id", props.AC_NAME+"label") //for label div
			.html(labelAttribute) //add text
			.append("div") //add child div for feature name
			.attr("class", "labelname") //for styling name
			.html(labelName); //add feature name to label
	};

	function dehighlight(data){
	
		//json or csv properties
		var props = data.properties; //json properties
		var region = d3.select("#"+props.AC_NAME); //select the current region
		var fillcolor = region.select("desc").text(); //access original color from desc
		region.style("fill", fillcolor); //reset enumeration unit to orginal color
	
		d3.select("#"+props.AC_NAME+"label").remove(); //remove info label
	};
	function moveLabel() {
		
		var x = d3.event.clientX+10; //horizontal label coordinate
		var y = d3.event.clientY-75; //vertical label coordinate
		
		d3.select(".infolabel") //select the label div for moving
			.style("margin-left", x+"px") //reposition label horizontal
			.style("margin-top", y+"px"); //reposition label vertical
	};
		
	
		
		
	}
