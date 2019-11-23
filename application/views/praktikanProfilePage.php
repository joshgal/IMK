<?php $this->load->view('headerNext')?>
	<div style="margin-top: 100px; margin-left: 150px;margin-right: 150px">
		<h2 style="font-family: Roboto; font-style: normal; font-weight: bold; font-size: 32px; line-height: 20px; color: #000000; margin-bottom: 30px">Halaman Edit Profil</h2>

		<form action="<?= base_url('index.php/praktikanController/index')?>">
			<div class="form-group row">
			    <label class="col-sm-2 col-form-label">NIM</label>
			    <div class="col-sm-10">
			    	<input type="textbox" class="form-control" id="inputEmail3" placeholder="NIM" disabled>
			    </div>
			</div>

			<div class="form-group row">
			  <label class="col-sm-2 col-form-label">Nama Lengkap</label>
			  <div class="col-sm-10">
			    <input type="textbox" class="form-control" id="inputPassword3" placeholder="Nama Lengkap" disabled>
			  </div>
			</div>

			<div class="form-group row">
			      <label class="col-sm-2 col-form-label"" for="inlineFormCustomSelect">Agama</label>
			      <div class="col-sm-10">
				      <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
				        <option value="Islam">Islam</option>
				        <option value="Katolik">Katolik</option>
				        <option value="Protestan">Protestan</option>
				        <option value="Hindu">Hindu</option>
				        <option value="Budha">Budha</option>
				        <option value="Lain-lain">Lain-lain</option>
				      </select>
			      </div>
			</div>

			<fieldset class="form-group">
			    <div class="row">
			      <legend class="col-form-label col-sm-2 pt-0">Jenis Kelamin</legend>
			      <div class="col-sm-10">
			        <div class="form-check">
			          <input class="form-check-input" type="radio" name="pria" id="radioPria" value="Pria">
			          <label class="form-check-label">
			            Pria
			          </label>
			        </div>
			        <div class="form-check">
			          <input class="form-check-input" type="radio" name="wanita" id="radioWanita" value="Wanita">
			          <label class="form-check-label">
			            Wanita
			          </label>
			        </div>
			      </div>
			    </div>
			</fieldset>

			<div class="form-group row">
			    <label class="col-sm-2 col-form-label">Alamat Bandung</label>
			    <div class="col-sm-10">
			    	<textarea type="textbox" class="" id="alamatBandung" placeholder="Alamat Bandung"></textarea> 
			    </div>
			</div>

			<div class="form-group row">
			  <label class="col-sm-2 col-form-label">Alamat Asal</label>
			  <div class="col-sm-10">
			    <textarea type="textbox" class="" id="alamatAsal" placeholder="Alamat Asal"></textarea>
			  </div>
			</div>

			<div class="form-group row">
			    <label class="col-sm-2 col-form-label">Nomor Telepon</label>
			    <div class="col-sm-10">
			    	<input type="textbox" class="form-control" id="nomorTelp" placeholder="Nomor Telepon">
			    </div>
			</div>

			<div class="form-group row">
			  <label class="col-sm-2 col-form-label">Email</label>
			  <div class="col-sm-10">
			  		<input type="textbox" class="form-control" id="email" placeholder="Email">
			  </div>
			</div>

			<button type="submit" class="btnEditProfil ml-auto">Simpan</button>
		</form>
	</div>
</body>
</html>