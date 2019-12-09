
var ctx = document.getElementById("canvas").getContext('2d');
var MONTHS = ["Modul 1", "Modul 2", "Modul 3", "Modul 4", "Modul 5", "Modul 6", "Modul 7", "Modul 8", "Modul 9", "Modul 10"];
var color = Chart.helpers.color;
var barChartData = {
	labels: ["Modul 1", "Modul 2", "Modul 3", "Modul 4", "Modul 5", "Modul 6", "Modul 7"],
	datasets: [{
		label: 'Nilai',
		backgroundColor: color(window.chartColors.blue).alpha(0.5).rgbString(),
		borderColor: window.chartColors.blue,
		borderWidth: 1,
		data: [
			9, 75, 91, 73, 88,50,
			getRandomInt(40,100)
		]
	}]

};

window.onload = function () {
	var ctx = document.getElementById('canvas').getContext('2d');
	window.myBar = new Chart(ctx, {
		type: 'bar',
		data: barChartData,
		options: {
			responsive: true,
			legend: {
				position: 'top',
			},
		}
	});

};
document.getElementById('randomizeData').addEventListener('click', function () {
	var zero = Math.random() < 0.2 ? true : false;
	barChartData.datasets.forEach(function (dataset) {
		dataset.data = dataset.data.map(function () {
			return zero ? 0.0 :getRandomInt(40,100)
		});

	});
	window.myBar.update();
});

var colorNames = Object.keys(window.chartColors);
document.getElementById('addDataset').addEventListener('click', function () {
	var colorName = colorNames[barChartData.datasets.length % colorNames.length];
	var dsColor = window.chartColors[colorName];
	var newDataset = {
		label: 'Nilai',
		backgroundColor: color(dsColor).alpha(0.5).rgbString(),
		borderColor: dsColor,
		borderWidth: 1,
		data: []
	};

	for (var index = 0; index < barChartData.labels.length; ++index) {
		newDataset.data.push(getRandomInt(40,100));
	}

	barChartData.datasets.push(newDataset);
	window.myBar.update();
});

document.getElementById('addData').addEventListener('click', function () {
	if (barChartData.datasets.length > 0) {
		var month = MONTHS[barChartData.labels.length % MONTHS.length];
		barChartData.labels.push(month);

		for (var index = 0; index < barChartData.datasets.length; ++index) {
			// window.myBar.addData(randomScalingFactor(), index);
			barChartData.datasets[index].data.push(getRandomInt(40,100));
		}

		window.myBar.update();
	}
});

document.getElementById('removeDataset').addEventListener('click', function () {
	barChartData.datasets.pop();
	window.myBar.update();
});

document.getElementById('removeData').addEventListener('click', function () {
	barChartData.labels.splice(-1, 1); // remove the label first

	barChartData.datasets.forEach(function (dataset) {
		dataset.data.pop();
	});

	window.myBar.update();
});

function getRandomInt(min, max) {
    min = Math.ceil(min);
    max = Math.floor(max);
    return Math.floor(Math.random() * (max - min + 1)) + min;
}
function addDat() {
	if (barChartData.datasets.length > 0) {
		var month = MONTHS[barChartData.labels.length % MONTHS.length];
		barChartData.labels.push(month);

		for (var index = 0; index < barChartData.datasets.length; ++index) {
			// window.myBar.addData(randomScalingFactor(), index);
			barChartData.datasets[index].data.push(getRandomInt(40,100));
		}

		window.myBar.update();
	}
}