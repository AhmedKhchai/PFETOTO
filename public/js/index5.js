


( function ( $ ) {
	/* line chart */
	
	var myCanvas = document.getElementById("lineChart");
	myCanvas.height="100";

	var myCanvasContext = myCanvas.getContext("2d");
	var gradientStroke1 = myCanvasContext.createLinearGradient(0, 0, 0, 380);
	gradientStroke1.addColorStop(0, 'rgba(0, 20, 142,0.3)');
	
	var gradientStroke2 = myCanvasContext.createLinearGradient(0, 0, 0, 280);
	gradientStroke2.addColorStop(0, 'rgba(255, 136, 25,0.3)');
	
    var myChart = new Chart( myCanvas, {
		type: 'line',
		data: {
            labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
            type: 'line',
            datasets: [ {
				label: 'Total Listings',
				data: [0, 50, 40, 80, 40, 79, 50],
				backgroundColor: gradientStroke1,
				borderColor: '#00148e',
				pointBackgroundColor:'#00148e',
				pointHoverBackgroundColor:gradientStroke1,
				pointBorderColor :'#00148e',
				pointHoverBorderColor :gradientStroke1,
				pointBorderWidth :3,
				pointRadius :3,
				pointHoverRadius :2,
				borderWidth: 2
            }, {
				label: "Total Visitors",
				data: [0, 70, 75, 120, 94, 141, 60],
				backgroundColor: gradientStroke2,
				borderColor: '#ff8819',
				pointBackgroundColor:'#ff8819',
				pointHoverBackgroundColor:gradientStroke2,
				pointBorderColor :'#ff8819',
				pointHoverBorderColor :gradientStroke2,
				pointBorderWidth :3,
				pointRadius :3,
				pointHoverRadius :2,
				borderWidth: 2
			}
			]
        },
		options: {
			responsive: true,
			maintainAspectRatio: true,
			tooltips: {
				mode: 'index',
				titleFontSize: 12,
				titleFontColor: '#000',
				bodyFontColor: '#000',
				backgroundColor: '#fff',
				cornerRadius: 3,
				intersect: false,
			},
			legend: {
				display: true,
				labels: {
					usePointStyle: false,
				},
			},
			scales: {
				xAxes: [{
					ticks: {
						fontColor: "#605e7e",
					 },
					display: true,
					gridLines: {
						display: true,
						color:'rgba(96, 94, 126, 0.1)',
						drawBorder: false
					},
					scaleLabel: {
						display: false,
						labelString: 'Month',
						fontColor: 'transparent'
					}
				}],
				yAxes: [{
					ticks: {
						fontColor: "#605e7e",
					 },
					display: true,
					gridLines: {
						display: true,
						color:'rgba(96, 94, 126, 0.1)',
						drawBorder: false
					},
					scaleLabel: {
						display: false,
						labelString: 'sales',
						fontColor: 'transparent'
					}
				}]
			},
			title: {
				display: false,
				text: 'Normal Legend'
			}
		}
	});
	/* line chart end */
} )( jQuery );	
