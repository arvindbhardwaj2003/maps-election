

window.onload = initialize();
    var expressed = 'Party';
	const HOVER_COLOR = "#d36f80"
	//the first function called once the html is loaded
	function initialize(){
		setMap();
	};
	


	function setMap(){
	
		//map frame dimensions
		var width = 960;
		var height = 960;
		
		var tooltip = d3.select("body")
		.append("div")
		.style("position", "absolute")
		.style("z-index", "10")
		.style("visibility", "hidden")
		.text("a simple tooltip");
	
		//create a new svg element with the above dimensions
		var map = d3
		    .select("#map__container")
			//.select("body")
			.append("svg")
			.attr("width", width)
			.attr("height", height);
	
		//create Europe Albers equal area conic projection, centered on France
		var projection = d3.geo.mercator()
              .center([79.095, 18.8])
				.scale(10000);
		
		//create svg path generator using the projection
		var path = d3.geo.path()
			.projection(projection);
		
		//var q = d3.queue();
		//use queue.js to parallelize asynchronous data loading
		//queue()
			//q.defer(d3.csv, "IndiaVotes_AC__Telangana_2018.csv") //load attributes from csv
			//q.defer(d3.json, "S01_AC.json") //load geometry
			//.defer(d3.json, "data/FranceRegions.topojson") //load geometry
			//q.await(callback); //trigger callback function once data is loaded

        d3.json("./telangana_ac.json", function (error,s01) {
               if (error) return console.error(error);
			   // Load CSV data with more detail information
			   d3.csv ("./IndiaVotes_AC__Telangana_2018.csv",function(error,csvData) {
				    //console.log(csvData);
				    if (error) return console.error(error);
			   var keyArray = ["AC_Name","Type","Party","Winning_Candidate"];
			   var ACMatched = 0;
			   var NTMatched = 0;
			   var NTMatchedConsituency =[];
			   var ACFromTopology = [];
               var jsonRegions = s01.objects.telangana_ac.geometries;
               // Iterate through CSV
               for (var i=0; i<csvData.length; i++) {
                  var Matched = 'NTMATCH';				   
                  var csvAC = csvData[i];
                  var csvAdm1 = csvAC.AC_Name; //adm1 code
				    //console.log(csvAdm1);
				    for (var a=0; a<jsonRegions.length; a++){
						
						if (jsonRegions[a].properties.assembly	== csvAdm1){
							//alert('Match Found');
							//alert(jsonRegions[a].properties.AC_NAME);
							ACMatched = ACMatched + 1;
							Matched = 'MATCH';
							for (var key in keyArray){
								 var attr = keyArray[key];
								 //alert(key + attr);
								 var val = csvAC[attr];
								 //alert(val +"    "+ attr);
								 jsonRegions[a].properties[attr] = val;
							}
							break;
						}
						
						//alert(jsonRegions[a].properties.PARTY);		
					}
					if (Matched == 'NTMATCH'){
						console.log(csvAdm1);
						NTMatchedConsituency.push(csvAdm1);
					}
			   }


			   alert ("Total states matched :" + ACMatched);
               alert(NTMatchedConsituency);
			for (var a=0; a<jsonRegions.length; a++){
             var ACName = jsonRegions[a].properties.assembly;
          		ACFromTopology.push(ACName)	;
				//alert(jsonRegions[a].properties.Winning_Candidate);
            }
			console.log(ACFromTopology);
            //var recolorMap = colorScale(csvData);			
			var regions = map.selectAll(".regions")
			.data(topojson.feature(s01,
					 	 s01.objects.telangana_ac).features)
			.enter() //create elements
			.append("path") //append elements to svg
			.attr("class", "regions") //assign class for additional styling
			.attr("id", function(d) { return d.properties.PARTY })
			.attr("d", path) //project data as geometry in svg
            .style("fill", function(d) { //color enumeration units
                     return choropleth(d, jsonRegions);
			})
			.on("mouseover", mouseOverHandler)
		    .on("mouseout", mouseOutHandler)		
		    //.on("mousemove", moveLabel)
			.on("click", clickHandler)
			.append("desc")
			   .text(function(d) {
   				   return choropleth(d, jsonRegions);
			      });
			   });
		
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
		var value = d.properties['Party'];
		 //alert(value);
		//if value exists, assign it a color; otherwise assign gray
		if (value == 'Telangana Rashtra Samithi') {
			return "#D4B9DA";
		}  
		else if (value == 'Indian National Congress') {
			return "#C994C7";
		}
		else if (value == 'Telugu Desam') {
			return "#DF65B0";
		}
		else if (value == 'All India Majlis-E-Ittehadul Muslimeen') {
			return "#DD1C77";
		}
		else if (value == 'Bharatiya Janta Party') {
			return "#980043";
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
	    //alert (props.AC_NAME);
		d3.select("#"+props.assembly) //select the current region in the DOM
			.style("fill", "#D4B9DA"); //set the enumeration unit fill to black
	
		var labelAttribute = "<h1>"+props[expressed]+
				 "</h1><br><b>"+expressed+"</b>"; //label content
		var labelName = props.assembly; //html string for name to go in child div
	
		//create info label div
		var infolabel = d3
		     .select("#map__text").append("div")
		    // .select("body").append("div")
			.attr("class", "infolabel") //for styling label
			.attr("id", props.AC_Name+"label") //for label div
			.html(labelAttribute) //add text
			.append("div") //add child div for feature name
			.attr("class", "labelname") //for styling name
			.html(labelName); //add feature name to label
	};
	
	function mouseOverHandler(data) {
		    var props = data.properties; //json properties
			d3.select(this).style("fill", HOVER_COLOR)
			return tooltip.style("visibility", "visible");
	}
	
	function mouseOutHandler(data) {
		var props = data.properties;
		var region = d3.select(this);
		var fillColor = region.select("desc").text();
		d3.select(this).style("fill", fillColor)
		}

	
	function moveLabel() {
		
		var x = d3.event.clientX+10; //horizontal label coordinate
		var y = d3.event.clientY-75; //vertical label coordinate
		
		d3.select(".infolabel") //select the label div for moving
			.style("margin-left", x+"px") //reposition label horizontal
			.style("margin-top", y+"px"); //reposition label vertical
	};
	
	function clickHandler(d, i) {
			d3.select("#map__text")
			  .text(`You've selected ${d.properties.AC_NAME} District`)
			  .html(`<div>
<table border="2" >
<tbody>
<tr>
<td>AC_NAME</td>
<td>${d.properties.assembly}</td>
</tr>
<tr>
<td>Candidate</td>
<td>${d.properties.Winning_Candidate}</td>
</tr>
<tr>
<td>Last Won </td>
<td>${d.properties.Party}</td>
</tr>
<tr>
<td>ST_CODE</td>
<td>${d.properties.ST_CODE}</td>
</tr>

</tbody>
</table>
</div>`)
	};
		
	
		
		
	}
