<?php $this->load->view('headerNext')?>
	<div class="kotakPraktikum">
		<p><strong>Pemodelan Basis Data - Modul 3</strong>
		<table style="width: 100%">
			<tr>
				<td>
					<div class="d-flex justify-content-start">
						<h3 style="font-family: Arial Rounded MT Bold; font-style: normal; font-weight: bold; font-size: 28px; line-height: 56px; align-items: center; color: #000000;">Tes Awal</h3>
					</div>
				</td>
				<td>
					<div class="d-flex justify-content-end">
						<p style="font-family: Arial Rounded MT Bold; font-style: normal; font-weight: 400; font-size: 24px; line-height: 56px; align-items: center; color: #000000;">00 : 09 : 45
					</div>
				</td>
			</tr>
		</table>
		<p class="aturanJurnal" style="font-size: 28px; line-height: 40px; color: #222222;">Apa kepanjangan dari DBMS?</p>
		<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
  			<a class="nav-link" id="block" onclick="profileOption(event)" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Database Management Sister</a>
  			<a class="nav-link" id="block" onclick="profileOption(event)" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Dimitri Management System</a>
			<a class="nav-link" id="block" onclick="profileOption(event)" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Dadang Mubanda Sudirman</a>
  			<a class="nav-link" id="block" onclick="profileOption(event)" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false"" >Database Management System</a>
		</div>
		<div class="ml-auto">
			<div class="d-flex justify-content-end" style="margin-top: 20px;">
				<p style="font-family:Roboto; font-size: 24px; line-height: 51px;font-weight: 600;"><span style="color: #192E79;">1</span>/1</p>
				<a href="#" style="width: 50px; height: 50px;background: #DCDCDC; border-radius: 8px;margin-left: 10px; text-decoration: none"><span style="font-family: Roboto; font-weight: bold;font-size: 30px;padding-left: 17px; color: #676767"><</span></a>
				<a href="#" style="width: 50px; height: 50px;background: #FFD600; border-radius: 8px;margin-left: 10px;text-decoration: none"><span style="font-family: Roboto; font-weight: bold;font-size: 30px;padding-left: 17px; color: #1A3481">></span></a>
				<a href="<?= base_url('index.php/praktikanController/halamanJurnal2') ?>" style="width: 130px; height: 50px;background: #30E04C; border-radius: 8px;margin-left: 10px; padding-top: 12px;text-decoration: none"><span style="font-family: Roboto; font-weight: 500;font-size: 18px;padding-left: 35px;  color: #FFF">Selesai</span></a>
			</div>
		</div>
	</div>
</body>
<script type="text/javascript">
    function profileOption(evt) {
      var i, tabcontent;
      
      tablinks = document.getElementsById("block");
      for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" aktip", "");
      }
      evt.currentTarget.className += " aktip";
    }
</script>
</html>