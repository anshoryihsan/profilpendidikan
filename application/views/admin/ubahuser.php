
<!-- breadcrumbs -->
<div class="container">
    <ul id="breadcrumbs">

      <li><a href="<?php echo base_url();?>index.php/admin/home"><i class="icsw16-home"></i></a></li>
      <li><a href="javascript:history.back();">Data Pengguna</i></a></li>
        <li><span>Ubah Pengguna...</span></li>

    </ul>
</div>
<!-- main content -->
<div class="container">
  <div class="row-fluid">
    <div class="col-md-5 col-md-offset-3">
      <div class="w-box w-box-blue">
        <div class="w-box-header">
          <h4>Ubah Pengguna</h4>
          <i class="icsw16-settings icsw16-white pull-right"></i>
        </div>
        <div class="w-box-content cnt_a">
          <div class="row-fluid">
            <?php foreach($tb_user as $row): ?>
            <form id="validate_field_types" data-toggle="validator" action="<?php echo base_url(). 'index.php/admin/home/simpan_ubah_user'; ?>" method="post" >
            <div class="span12">
              <div class="formSep">
                <label for="s_mailer">Nama pengguna</label><br>
                <input type="hidden" name="id" value="<?php echo $row->id_user ?>">
                  <input type="text" value="<?php echo $row->nama ?>" class="form-control span8" name="nama" pattern="^[_A-Z a-z]{1,}$" maxlength="25" required/>
              </div>
              <div class="formSep">
                <label for="s_mailer">Email</label><br>
                <input type="text" name="email" value="<?php echo $row->email ?>" class="form-control span8" pattern="^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$" required>
              </div>
              <div class="formSep">
                <label for="s_mailer">Password</label><br>
                <input type="password" name="password" value="<?php echo $row->password ?>" class="form-control span8" pattern="^[_A-Z a-z 0-9]{1,}$" maxlength="25" required><br/>
              </div>
              <div class="formSep">
                <label for="s_mailer">Bagian</label><br>
                <select name="level" required>
                  <option value="Admin"<?php if($row->level == "Admin"){ echo "selected"; } ?>>Admin</option>
                  <option value="Kepala Dinas"<?php if($row->level == "Kepala Dinas"){ echo "selected"; } ?>>Kepala Dinas</option>
                  <option value="UPTD"<?php if($row->level == "UPTD"){ echo "selected"; } ?>>UPTD</option>
                  <option value="Bag. Program"<?php if($row->level == "Bag. Program"){ echo "selected"; } ?>>Bag. Program</option>
                </select>
              </div>
              <div class="formSep">
                <label for="s_mailer">Wilayah</label><br>
                <select name="wilayah"  required>
                  <option value="Dinas Pendidikan KBB" value=""<?php if($row->wilayah == "Dinas Pendidikan KBB"){ echo "selected"; } ?>>Dinas Pendidikan KBB</option>
                  <option value="kec. Batujajar" <?php if($row->wilayah == "Kec. Batujajar"){ echo "selected"; } ?>>Kec. Batujajar</option>
                  <option value="Kec. Cipongkor" <?php if($row->wilayah == "Kec. Cinpongkor"){ echo "selected"; } ?>>Kec. Cipongkor</option>
                  <option value="kec. Cikalongwetan" <?php if($row->wilayah == "Kec. Cikalongwetan"){ echo "selected"; } ?>>Kec. Cikalongwetan</option>
                  <option value="kec. Cisarua" <?php if($row->wilayah == "Kec. Cisarua"){ echo "selected"; } ?>>Kec. Cisarua</option>
                  <option value="kec. Cihampelas" <?php if($row->wilayah == "Kec. Cihamplas"){ echo "selected"; } ?>>Kec. Cihamplas</option>
                  <option value="kec. Cililin" <?php if($row->wilayah == "Kec. Cililin"){ echo "selected"; } ?>>Kec. Cililin</option>
                  <option value="kec. Cipatat" <?php if($row->wilayah == "Kec. Cipatat"){ echo "selected"; } ?>>Kec. Cipatat</option>
                  <option value="kec. Cipeundeuy" <?php if($row->wilayah == "Kec. Cipendeuy"){ echo "selected"; } ?>>Kec. Cipeundeuy</option>
                  <option value="kec. Gununghalu" <?php if($row->wilayah == "Kec. Gununghalu"){ echo "selected"; } ?>>Kec. Gununghalu</option>
                  <option value="kec. Lembang" <?php if($row->wilayah == "Kec. Lembang"){ echo "selected"; } ?>>Kec. Lembang</option>
                  <option value="Kec. Ngamprah" <?php if($row->wilayah == "Kec.Ngamprah"){ echo "selected"; } ?>>Kec. Ngamprah</option>
                  <option value="Kec. Padalarang" <?php if($row->wilayah == "Kec. Padalarang"){ echo "selected"; } ?>>Kec. Padalarang</option>
                  <option value="Kec. Parompong" <?php if($row->wilayah == "Kec. Parompong"){ echo "selected"; } ?>>Kec. Parompong</option>
                  <option value="Kec. Rongga" <?php if($row->wilayah == "Kec. ROngga"){ echo "selected"; } ?>>Kec. Rongga</option>
                  <option value="Kec. Sindangkerta" <?php if($row->wilayah == "Kec. Sindangkerta"){ echo "selected"; } ?>>Kec. Sindangkerta</option>
                  <option value="Kec. Saguling" <?php if($row->wilayah == "Kec. Saguling"){ echo "selected"; } ?>>Kec. Saguling</option>
                 </select>
              </div>
            </div>
          </div>
        </div>
        </td> <?php endforeach; ?>
        <div class="w-box-footer">
          <div class="f-center">
              <button class="btn btn-beoro-3" onclick="return confirm ('Merubah data <?php echo $row->nama;?>?')">Save</button>
            </form>
              <button class="btn btn-link"><a href="javascript:history.back()">Cancel</a></button>
          </div>
      </div>
      </div>
    </div>
  </div>
</div>
  <div class="footer_space"></div>
</div>
