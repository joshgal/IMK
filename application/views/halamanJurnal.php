<?php $this->load->view('headerNext')?>
	<div class="kotakPraktikum">
		<p><strong>Pemodelan Basis Data - Modul 3</strong>
		<table style="width: 100%">
			<tr>
				<td>
					<div class="d-flex justify-content-start">
						<h3 style="font-family: Arial Rounded MT Bold; font-style: normal; font-weight: bold; font-size: 28px; line-height: 56px; align-items: center; color: #000000;">Jurnal</h3>
					</div>
				</td>
				<td>
					<div class="d-flex justify-content-end">
						<p style="font-family: Arial Rounded MT Bold; font-style: normal; font-weight: bold; font-size: 24px; line-height: 56px; align-items: center; color: #000000;">01 : 10 : 30
					</div>
				</td>
			</tr>
		</table>
		<p class="aturanJurnal" style="font-family: Roboto; font-weight: 400; font-size: 20px; line-height: 47px; text-align: justify;">Selamat datang di jurnal Praktikum Pemodelan Basis Data - modul 3, silakan download file dibawah ini. Harap memerhatikan waktu pengerjaan jurnal. KETERLAMBATAN upload jawaban menyebabkan jawaban tidak dinilai.</p>
		<form action="<?= base_url('index.php/praktikanController/halamanJurnal3') ?>">
			<div class="d-flex justify-content-center">
				<button id="btnDownloadSoal" style="width: 350px; height: 80px;">Download File</button>	
			</div>
		</form>
		<p class="d-flex justify-content-center"><strong>Password RAR: </strong>modul3EZ</p>
	</div>
</body>

</html>