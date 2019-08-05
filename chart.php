<br><script>
window.onload = function () {

var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	theme: "light2",
	title:{
		text: "網路聲量"
	},
	axisX:{
		valueFormatString: "<?php echo $row["datemonth"];?>",
		crosshair: {
			enabled: true,
			snapToDataPoint: true
		}
	},
	axisY: {
		title: "聲量統計",
		crosshair: {
			enabled: true
		}
	},
	toolTip:{
		shared:true
	},  
	legend:{
		cursor:"pointer",
		verticalAlign: "bottom",
		horizontalAlign: "left",
		dockInsidePlotArea: true,
		itemclick: toogleDataSeries
	},
	data: [/*{
		type: "line",A
		showInLegend: true,
		name: "聲量",
		markerType: "square",
		xValueFormatString: "MMM, YYYY",
		color: "#011936",
		// junbhb
		
		dataPoints: [
			{ x: new Date(2016, 10), y: 943 },
			{ x: new Date(2016, 11), y: 970 },
			{ x: new Date(2016, 12), y: 869 },
			{ x: new Date(2017, 1), y: 650 },
			{ x: new Date(2017, 2), y: 700 },
			{ x: new Date(2017, 3), y: 710 },
			{ x: new Date(2017, 4), y: 658 },
			{ x: new Date(2017, 5), y: 734 },
			{ x: new Date(2017, 6), y: 963 },
			{ x: new Date(2017, 7), y: 847 },
			{ x: new Date(2017, 8), y: 853 },
			{ x: new Date(2017, 9), y: 869 },
			

		]
	},*/
	{
		type: "line",
		showInLegend: true,
		name: "Unique Visit",
		lineDashType: "dash",
		color: "#9DD1F1",
		dataPoints: [
		<?php
		$sql = " SELECT * FROM chart where product_id=".$product_id;
		$rs_result = $conn->query($sql); 
		while($row = $rs_result->fetch_assoc()) {
		?>	
			{ x: <?php echo $row["datemonth"];?>, y: <?php echo $row["product_number"];?> },
		<?php };?>	
		]
	}]
});
chart.render();

function toogleDataSeries(e){
	if (typeof(e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
		e.dataSeries.visible = false;
	} else{
		e.dataSeries.visible = true;
	}
	chart.render();
}

}
</script>
<div id="chartContainer" style="height: 450px; width: 300%;"></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</div>
</div>
<hr/>
</div>
</div>