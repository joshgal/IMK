<?php $this->load->view('header')?>
	<div class="welcome" id="mulai">
		<div class="d-flex justify-content-end"><h5>Praktikum saat ini:</h5></div>
		<div class="d-flex justify-content-end">Pemodelan Basis Data - Modul 3</div>
		<div class="d-flex justify-content-end"><h5>Asisten Praktikum:</h5></div>
		<div class="d-flex justify-content-end">Ivan Naufal (ZKY)</div>
		<table style="width: 100%">
			<tr>
				<td>
					<div>
						<div class="d-flex justify-content-start">
							<h1>Selamat Datang,</h1>
						</div>
						<div class="d-flex justify-content-start">
							<h1>Chan Che Book</h1>
						</div>
					</div>
				</td>
				<td>
					<div>
						<form action="<?= base_url('index.php/praktikanController/halamanJurnal')?>">
							<div class="d-flex justify-content-end">
								<input type="textbox" name="kodeAuth" placeholder="Masukkan kode authetifikasi">
							</div>
							<div class="d-flex justify-content-end">
								<button type="submit">Mulai Praktikum</button>
							</div>
						</form>
					</div>
				</td>
			</tr>
		</table>
	</div>

	<div class="belowWelcome">
		<div id="nilai" style="margin-top: 50px">
			<h2>Nilai Praktikum</h2>
			<div class="card">
				<div class="card-body">
					<div class="tabelNilai">
				  		<img class="card-img" src="<?= base_url('assets/img/tabel.png')?>" alt="Card image cap">
				  	</div>
				</div>
			</div>
		</div>

		<h2 id="upload">Upload Jawaban</h2>
		<div class="card" style="margin-bottom: 50px;">
			<div class="card-body">
				<div class="tabelUpload">
			  		<img class="card-img" src="<?= base_url('assets/img/upload.png')?>" alt="Card image cap">
			  	</div>
			</div>
		</div>
	</div>
</body>

</html>