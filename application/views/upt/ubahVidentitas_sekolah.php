
<!-- breadcrumbs -->
<div class="container">
    <ul id="breadcrumbs">
      <li><a href="<?php echo base_url();?>index.php/upt/home"><i class="icsw16-home"></i></a></li>
      <li><a href="#">Kelola Profil Sekolah</i></a></li>
      <li><span>Ubah Identitas Sekolah...</span></li>
    </ul>
</div>
<!-- main content -->
<div class="container">
  <div class="row-fluid">
    <div class="span12">
      <div class="w-box w-box-green">
        <div class="w-box-header">
          <h4>Ubah Identitas Sekolah</h4>
          <i class="icsw16-settings icsw16-white pull-right"></i>
        </div>
        <div class="w-box-content cnt_a">
          <div class="row-fluid">
            <?php foreach($tb_identitas as $row): ?>
            <form id="validate_field_types" data-toggle="validator" action="<?php echo base_url(). 'index.php/upt/Identias_sekolah/simpan_ubah_Identitas'; ?>" method="post" >
            <div class="span6">
              <div class="formSep">
                <label for="s_mailer">Nama Sekolah</label><br>
                  <input type="hidden" name="id_skolah" value="<?php echo $row->id_skolah ?>">
                  <input type="text" class="form-control span8" value="<?php echo $row->nama_sekolah ?>"  name="nama_sekolah" pattern="^[_A-Z a-z]{1,}$" maxlength="25" required/>
              </div> <?php endforeach; ?>
              <div class="formSep">
                <label for="s_mailer">NSS</label><br>
                  <input type="text" class="form-control span8" value="<?php echo $row->nss ?>"  name="nss" pattern="^[_0-9]{1,}$" maxlength="25" required/>
              </div>
              <div class="formSep">
                <label for="s_mailer">NPSN</label><br>
                  <input type="text" class="span8" value="<?php echo $row->npsn ?>"  name="npsn" pattern="^[_0-9]{1,}$" maxlength="20" required/>
              </div>
              <div class="formSep">
                <label for="s_mailer">Status Sekolah</label><br>
                <select name="status_sekolah" class="span6" required>
                  <option value="Negri" <?php if($row->status_sekolah == "Negri"){ echo "selected"; } ?>>Negeri</option>
                  <option value="Swasta" <?php if($row->status_sekolah == "Swasta"){ echo "selected"; } ?>>Swasta</option>
                </select>
              </div>
              <div class="formSep">
                <label for="s_mailer">Bentuk Pendidikan</label><br>
                <select id="s_mailer" name="bentuk_pndidikan" class="span6" required>
                  <option value="SD" <?php if($row->bentuk_pndidikan == "SD"){ echo "selected"; } ?>>SD</option>
                  <option value="SMP" <?php if($row->bentuk_pndidikan == "SMP"){ echo "selected"; } ?>>SMP</option>
                </select>
              </div>
              <div class="formSep">
                <label for="s_mailer">Alamat</label><br>
                  <input type="text" class="span8" name="alamat" value="<?php echo $row->alamat ?>" pattern="^[_A-Z a-z .\]{1,}$" maxlength="30" required/>
              </div>
              <div class="formSep">
                <label for="s_mailer">RT RW</label><br>
                  <input type="text" class="span4" name="rt" value="<?php echo $row->rt ?>" pattern="^[_0-9]{1,}$" maxlength="3" required/>
                  <input type="text" class="span4" name="rw" value="<?php echo $row->rw ?>" pattern="^[_0-9]{1,}$" maxlength="3" required/>
              </div>
              <div class="formSep">
                <label for="s_mailer">Nama Dusun</label><br>
                  <input type="text" class="span8" name="nama_dusun" value="<?php echo $row->nama_dusun ?>" pattern="^[_A-Z a-z]{1,}$" maxlength="25"/>
              </div>
              <div class="formSep">
                <label for="s_mailer">Desa/Kelurahan</label><br>
                  <input type="text" class="span8" name="desa_kelurahan" value="<?php echo $row->desa_kelurahan ?>" pattern="^[_A-Z a-z .\]{1,}$" maxlength="25" required/>
              </div>
              <div class="formSep">
                <label for="s_mailer">Kode Pos</label><br>
                  <input type="text" class="span8" name="kode_pos" value="<?php echo $row->kode_pos ?>" pattern="^[_0-9]{1,}$" maxlength="6" required/>
              </div>
              <div class="formSep">
                <label for="s_mailer">Kecamatan</label><br>
                <select name="kecamatan" class="span6">
                  <option value="<?php echo $row->kecamatan ?>"><?php echo $row->kecamatan ?></option>
                  <option value="kec. Batujajar" <?php if($row->kecamatan == "Kec. Batujajar"){ echo "selected"; } ?>>Kec. Batujajar</option>
                  <option value="Kec. Cipongkor" <?php if($row->kecamatan == "Kec. Cinpongkor"){ echo "selected"; } ?>>Kec. Cipongkor</option>
                  <option value="kec. Cikalongwetan" <?php if($row->kecamatan == "Kec. Cikalongwetan"){ echo "selected"; } ?>>Kec. Cikalongwetan</option>
                  <option value="kec. Cisarua" <?php if($row->kecamatan == "Kec. Cisarua"){ echo "selected"; } ?>>Kec. Cisarua</option>
                  <option value="kec. Cihampelas" <?php if($row->kecamatan == "Kec. Cihamplas"){ echo "selected"; } ?>>Kec. Cihamplas</option>
                  <option value="kec. Cililin" <?php if($row->kecamatan == "Kec. Cililin"){ echo "selected"; } ?>>Kec. Cililin</option>
                  <option value="kec. Cipatat" <?php if($row->kecamatan == "Kec. Cipatat"){ echo "selected"; } ?>>Kec. Cipatat</option>
                  <option value="kec. Cipeundeuy" <?php if($row->kecamatan == "Kec. Cipendeuy"){ echo "selected"; } ?>>Kec. Cipeundeuy</option>
                  <option value="kec. Gununghalu" <?php if($row->kecamatan == "Kec. Gununghalu"){ echo "selected"; } ?>>Kec. Gununghalu</option>
                  <option value="kec. Lembang" <?php if($row->kecamatan == "Kec. Lembang"){ echo "selected"; } ?>>Kec. Lembang</option>
                  <option value="Kec. Ngamprah" <?php if($row->kecamatan == "Kec.Ngamprah"){ echo "selected"; } ?>>Kec. Ngamprah</option>
                  <option value="Kec. Padalarang" <?php if($row->kecamatan == "Kec. Padalarang"){ echo "selected"; } ?>>Kec. Padalarang</option>
                  <option value="Kec. Parompong" <?php if($row->kecamatan == "Kec. Parompong"){ echo "selected"; } ?>>Kec. Parompong</option>
                  <option value="Kec. Rongga" <?php if($row->kecamatan == "Kec. ROngga"){ echo "selected"; } ?>>Kec. Rongga</option>
                  <option value="Kec. Sindangkerta" <?php if($row->kecamatan == "Kec. Sindangkerta"){ echo "selected"; } ?>>Kec. Sindangkerta</option>
                  <option value="Kec. Saguling" <?php if($row->kecamatan == "Kec. Saguling"){ echo "selected"; } ?>>Kec. Saguling</option>
                </select>
              </div>
              <div class="formSep">
                <label for="s_mailer">Propinsi</label><br>
                  <input type="text" class="span8" name="propinsi" value="<?php echo $row->propinsi ?>" pattern="^[_A-Z a-z .\]{1,}$" maxlength="25" required/>
              </div>
              <div class="formSep">
                <label for="s_mailer">No Telepon</label><br>
                  <input type="text" class="span8" name="telepon" value="<?php echo $row->no_telepon ?>" pattern="^[_0-9]{1,}$" maxlength="15" required/>
              </div>
            </div>
            <div class="span6">
              <div class="formSep">
                <label for="s_mailer">No Fax</label><br>
                  <input type="text" class="span8" name="fax" value="<?php echo $row->no_fax ?>" pattern="^[_0-9]{1,}$" maxlength="15" required/>
              </div>
              <div class="formSep">
                <label for="s_mailer">Email</label><br>
                  <input type="email" class="span8" name="email" value="<?php echo $row->email ?>" pattern="^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$" maxlength="50" required/>
              </div>
              <div class="formSep">
                <label for="s_mailer">Website</label><br>
                  <input type="text" class="span8" name="website" value="<?php echo $row->website ?>" pattern="^[a-zA-Z0-9:/.]{1,}$" maxlength="50" />
              </div>
              <div class="formSep">
                <label for="s_mailer">SK Pendirian Sekolah</label><br>
                  <input type="text" class="span8" name="sk_pendirian_sekolah" value="<?php echo $row->sk_pendirian_sekolah ?>" pattern="^[a-zA-Z0-9:/.]{1,}$" maxlength="40" required/>
              </div>
              <div class="formSep">
                <label for="s_mailer">Tanggal SK Pendirian</label><br>
                  <input type="date" class="span8" name="tanggal_sk_pendirian" value="<?php echo $row->tanggal_sk_pendirian ?>" max= <?php echo date('Y-m-d'); ?> />
              </div>
              <div class="formSep">
                <label for="s_mailer">SK Izin Operasional</label><br>
                  <input type="text" class="span8" name=sk_izin_operasional value="<?php echo $row->sk_izin_operasional ?>" pattern="^[a-zA-Z0-9:/.]{1,}$" maxlength="40" required/>
              </div>
              <div class="formSep">
                <label for="s_mailer">SK Akreditasi</label><br>
                  <input type="text" class="span8" name="sk_akreditasi" value="<?php echo $row->sk_akreditasi ?>" pattern="^[a-z A-Z 0-9 .:-/]{1,}$" maxlength="40" required/>
              </div>
              <div class="formSep">
                <label for="s_mailer">Tanggal SK Akreditasi</label><br>
                  <input type="date" class="span8" name="tanggal_sk_akreditasi" value="<?php echo $row->tanggal_sk_akreditasi ?>" max= <?php echo date('Y-m-d'); ?> required/>
              </div>
              <div class="formSep">
                <label for="s_mailer">Nama Bank</label><br>
                  <input type="text" class="span8" name="nama_bank" value="<?php echo $row->nama_bank ?>" pattern="^[a-z A-Z]{1,}$" maxlength="40" required/>
              </div>
              <div class="formSep">
                <label for="s_mailer">Cabang/KCP/Unit</label><br>
                  <input type="text" class="span8" name="cabang_kcp_unit" value="<?php echo $row->cabang_kcp_unit ?>" pattern="^[a-z A-Z]{1,}$" maxlength="40" required/>
              </div>
              <div class="formSep">
                <label for="s_mailer">Nomor Rekening</label><br>
                  <input type="text" class="span8" name="nomor_rekening" value="<?php echo $row->nomor_rekening ?>" pattern="^[0-9]{1,}$" maxlength="40" required/>
              </div>
              <div class="formSep">
                <label for="s_mailer">Rekening Atas Nama</label><br>
                  <input type="text" class="span8" name="rekening_atas_nama" value="<?php echo $row->rekening_atas_nama ?>" pattern="^[A-Z a-z]{1,}$" maxlength="25" required/>
              </div>
              <div class="formSep">
                <label for="s_mailer">Nama Kepala Sekolah</label><br>
                  <input type="text" class="span8" name="nama_kepala_sekolah" value="<?php echo $row->nama_kepala_sekolah ?>" pattern="^[a-z A-Z]{1,}$" maxlength="40" required/>
              </div>
            </div>
          </div>
        </div>
        <div class="w-box-footer">
          <div class="f-center">
              <button class="btn btn-beoro-3">Save</button>
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
