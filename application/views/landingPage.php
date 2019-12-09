<?php $this->load->view('header') ?>
<style>

</style>
<div class="welcome" id="mulai" style="margin-bottom: 50px;">
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
							<input type="textbox" name="kodeAuth" class="input-lg" placeholder=" Masukkan kode authetikasi">
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
	<div id="nilai" style="">
		<h2 id="nPrak" style="display: inline;">Nilai Praktikum</h2>
		<p id="show" onclick="viewNilai()" class="fa fa-eye"> show</p>
		<div class="card" id="divChart" style="margin-top:20px;">
			<input type="text" onkeypress="addDat()" style="border:none;   cursor:default;color: transparent;">
			<div class="card-body center" style=" ">
				<canvas id="canvas" style="display: block; width: 85%;height: 230%;" class="chartjs-render-monitor"></canvas>
			</div>
		</div>
	</div>
	<div id="container" style="width: 75%;">

	</div>
	<button id="randomizeData" hidden>Randomize Data</button>
	<button id="addDataset" hidden>Add Dataset</button>
	<button id="removeDataset" hidden>Remove Dataset</button>
	<button id="addData" hidden>Add Data</button>
	<button id="removeData" hidden>Remove Data</button>
	<hr>
	<div id="upload">
		<form action="">
			<h2>Upload Jawaban</h2>
			<div class="card" style="margin-bottom: 50px;margin-top:20px;">


				<div class="card-body" style="margin-top: 40px; margin-bottom:-20px">
					<div id="chart" style="margin-right: -60px; position:relative; margin-bottom:-150px; display: inline-block; ">
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
								<h5 for="tipe">Tipe Upload :</h5>
								<select class="form-control" id="tipe">
									<option>Tes Awal</option>
									<option>Jurnal</option>
									<option>Tes Akhir</option>
								</select>
							</div>
							<div style="display: inline-block; margin-left: 50px">
								<h5>Upload File :</h5>
								<input type="file" name="myFile">

							</div>

						</div>
						<div class="d-flex justify-content-start" style="margin-top:0px;">
							<input type="textbox" name="kodeAuth" class="input-lg upload" placeholder="              Masukkan kode authetikasi">
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
<script type="text/javascript" src="https://www.chartjs.org/samples/latest/utils.js"></script>
<script type="text/javascript" src="<?= base_url('assets/js/Chart-upload.js') ?>"></script>
<script type="text/javascript" src="<?= base_url('assets/js/chart-modul.js') ?>"></script>
<script type="text/javascript" src="<?= base_url('assets/js/cia.js') ?>"></script>
<script type="text/javascript" src="<?= base_url('assets/js/popper.min.js') ?>"></script>
<script type="text/javascript" src="<?= base_url('assets/js/slick.min.js') ?>"></script>
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
					width: '100%',
					height: 'auto',
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
					showOn: 'always',
					name: {
						show: true,
						color: '#888',
						fontSize: '17px'
					},
					value: {
						offsetY: -50,
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
		labels: ['Belum upload jurnal'],

	}

	var chart = new ApexCharts(
		document.querySelector("#chart"),
		options
	);

	chart.render();
</script>

</html>