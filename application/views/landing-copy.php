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
<i id="show" onclick="viewNilai()" class="fa fa-eye"></i> show


		<div class="card"id="divChart">
			<div class="card-body"style="width: 700px;height: 400px">
				<canvas id="myChart" style=""></canvas>
			</div>


		</div>
		<hr>
		<form action="">
			<h2 id="upload">Upload Jawaban</h2>
			<div class="card" style="margin-bottom: 50px;">


				<div class="card-body" style="margin-top: 40px; margin-bottom:-20px">
					<div id="chart" style="margin-left: -100px; position:relative; margin-bottom:-150px; display: inline-block; ">
					</div>
					<div class="" style="display: inline-block; border-left: 1px solid; padding-left: 50px;">
						<div class="d-flex justify-content-start">
							<h5>Praktikum saat ini :</h5>
						</div>
						<div class="d-flex justify-content-start">Pemodelan Basis Data - Modul 3</div>
						<div style="margin-top:20px">
							<h5>Asisten Praktikum :</h5>
						</div>
						<div class="">Ivan Naufal (ZKY)</div>
						<div style="margin-top:20px">
							<div style="display: inline-block;">
								<h5>Tipe Upload :</h5>
								<select>
									<option value="tesawal">Tes Awal</option>
									<option value="jurnal">Jurnal</option>
									<option value="tesakhir">Tes Akhir</option>
								</select>
							</div>
							<div style="display: inline-block; margin-left: 50px">
								<h5>Upload File :</h5>
								<input type="file" name="myFile">

							</div>
						</div>
						<div class="d-flex justify-content-start" style="margin-top:0px;">
							<input type="textbox" name="kodeAuth" class="input-lg upload" placeholder="Masukkan kode authetifikasi">
						</div>
						<button type="submit" class="btn upload">Upload Jawaban</button>
		</form>


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
<script type="text/javascript" src="<?= base_url('assets/js/bootstrap-4.2.1.js') ?>"></script>
<script type="text/javascript" src="<?= base_url('assets/js/bootstrap.bundle.min.js') ?>"></script>


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