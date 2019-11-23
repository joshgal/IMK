<?php $this->load->view('header') ?>
<style>
	#chart {
		max-width: 650px;
		margin: 35px auto;
	}

	.apexcharts-datalabel-value {
		font-size: 50px;
		font-weight: 600;
		line-height: 1.5;
		fill: #2265C9 !important;
		text-align: left;
	}
</style>
<div class="welcome" id="mulai">
	<div class="d-flex justify-content-end">
		<h5>Praktikum saat ini:</h5>
	</div>
	<div class="d-flex justify-content-end">Pemodelan Basis Data - Modul 3</div>
	<div class="d-flex justify-content-end">
		<h5>Asisten Praktikum:</h5>
	</div>
	<div class="d-flex justify-content-end">Ivan Naufal (ZKY)</div>
	<table style="width: 100%">
		<tr>
			<td>
				<div>
					<div class="d-flex justify-content-start sd">
						<h1>Selamat Datang,</h1>
					</div>
					<div class="d-flex justify-content-start">
						<h1>Chan Che Book</h1>
					</div>
				</div>
			</td>
			<td>
				<div>
					<form action="<?= base_url('index.php/praktikanController/halamanJurnal') ?>">
						<div class="d-flex justify-content-end">
							<input type="textbox" name="kodeAuth" class="input-lg" placeholder="Masukkan kode authetifikasi">
						</div>
						<div class="d-flex justify-content-end ">
							<button type="submit" class="btn mulai">Mulai Praktikum</button>
						</div>
					</form>
				</div>
			</td>
		</tr>
	</table>
</div>

<div class="belowWelcome">
	<div id="nilai" style="margin-top: 50px; ">
		<a id="nPrak">Nilai Praktikum</a>
		<p id="show" onclick="viewNilai()" class="fa fa-eye"></p>


		<div id="divChart">
			<div style="width: 700px;height: 400px">
				<canvas id="myChart" style=""></canvas>
			</div>


		</div>
		<hr>
		<h2 id="upload">Upload Jawaban</h2>
		<div class="card" style="margin-bottom: 50px;">

			<img class="card-img" src="<?= base_url('assets/img/upload.png') ?>" alt="Card image cap">

			<div class="card-body" style="">
				<div id="chart" style="margin-left: -100px; position:relative; margin-bottom:-150px; display: inline-block; ">
				</div>
				<div class="" style="display: inline-block; border-left: 1px solid; padding-left: 50px;">
					<div class="d-flex justify-content-start">
						<h5>Praktikum saat ini:</h5>
					</div>
					<div class="d-flex justify-content-start">Pemodelan Basis Data - Modul 3</div>
					<div class="d-flex justify-content-start">
						<h5>Asisten Praktikum:</h5>
					</div>
					<div class="d-flex justify-content-start">Ivan Naufal (ZKY)</div>
				</div>
			</div>
		</div>
	</div>
</div>
</body>

<script type="text/javascript" src="<?= base_url('assets/js/Chart.js') ?>"></script>
<script type="text/javascript" src="<?= base_url('assets/js/Chart-upload.js') ?>"></script>
<script type="text/javascript" src="<?= base_url('assets/js/chart-modul.js') ?>"></script>
<script type="text/javascript" src="<?= base_url('assets/js/cia.js') ?>"></script>
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
<script>
	var options = {
		chart: {
			type: 'radialBar',
			offsetY: -20
		},
		plotOptions: {
			radialBar: {
				startAngle: -90,
				endAngle: 90,
				track: {
					background: "#e7e7e7",
					strokeWidth: '97%',
					margin: 5, // margin is in pixels
					shadow: {
						enabled: true,
						top: 2,
						left: 0,
						color: '#999',
						opacity: 1,
						blur: 2
					}
				},
				dataLabels: {
					name: {
						show: false
					},
					value: {
						offsetY: -2,
						fontSize: '22px'
					}
				}
			}
		},
		fill: {
			type: 'gradient',
			gradient: {
				shade: 'dark',
				type: 'horizontal',
				shadeIntensity: 0.7,
				gradientToColors: ['#030B68'],
				inverseColors: true,
				opacityFrom: 1,
				opacityTo: 1,
				stops: [0, 100]
			},
		},
		series: [75],
		labels: ['Average Results'],

	}

	var chart = new ApexCharts(
		document.querySelector("#chart"),
		options
	);

	chart.render();
</script>

</html>