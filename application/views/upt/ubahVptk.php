
<!-- breadcrumbs -->
<div class="container">
    <ul id="breadcrumbs">
      <?php foreach($ptk as $row): ?>
      <li><a href="<?php echo base_url();?>index.php/upt/home"><i class="icsw16-home"></i></a></li>
      <li><a href="<?php echo base_url();?>index.php/upt/home"><i class="icsw16-home"></i></a></li>
      <li><a href="#">Kelola Profil Sekolah</i></a></li>
      <li><a href="#">Profil Sekolah</i></a></li>
      <li><a href="<?php echo base_url();?>index.php/upt/PTK/detailptk?idnss=<?php echo $row->id_skolah; ?>">Data PTK</i></a></li>
      <li><span>Ubah PTK...</span></li>
    <?php endforeach; ?>
    </ul>
</div>
<!-- main content -->
<div class="container">
  <div class="row-fluid">
    <div class="span12">
      <div class="w-box w-box-green">
        <div class="w-box-header">
          <h4>Ubah PTK</h4>
          <i class="icsw16-settings icsw16-white pull-right"></i>
        </div>
        <div class="w-box-content cnt_a">
          <div class="row-fluid">
            <?php foreach($ptk as $row): ?>
            <form id="validate_field_types" data-toggle="validator" action="<?php echo base_url(). 'index.php/upt/PTK/updatePTK'; ?>" method="post" >
            <div class="span6">
                <div class="formSep">
                  <label for="s_mailer">Nama</label><br>
                  <input type="hidden" name="id_ptk" value="<?php echo $row->id_ptk; ?>">
                    <input type="text" class="form-control span8" name="nama" value="<?php echo $row->nama ?>" pattern="^[_A-Z a-z]{1,}$" maxlength="25" required />
                </div>
                <div class="formSep">
                  <label for="s_mailer">Jenis Kelamin</label><br>
                  <select name="jenis_kelamin" class="span6" required>
                    <option value="L" <?php if($row->jenis_kelamin == "L"){ echo "selected"; } ?>>L</option>
                    <option value="P" <?php if($row->jenis_kelamin == "P"){ echo "selected"; } ?>>P</option>
                  </select>
                </div>
                <div class="formSep">
                  <label for="s_mailer">Tempat Lahir</label><br>
                    <input type="text" class="form-control span8" name="tempat_lahir" value="<?php echo $row->tempat_lahir ?>" pattern="^[_A-Z a-z]{1,}$" maxlength="25" required />
                </div>
                <div class="formSep">
                  <label for="s_mailer">Tanggal Lahir</label><br>
                  <input type="date" class="span8" name="tanggal_lahir" value="<?php echo $row->tanggal_lahir ?>"  max= <?php echo date('Y-m-d'); ?> required/>
                </div>
                <div class="formSep">
                  <label for="s_mailer">NIK</label><br>
                    <input type="text" class="form-control span8" name="nik" value="<?php echo $row->nik ?>" pattern="^[0-9]{1,}$" maxlength="25" required />
                </div>
                <div class="formSep">
                  <label for="s_mailer">NIP</label><br>
                    <input type="text" class="form-control span8" name="nip" value="<?php echo $row->nip?>" pattern="^[0-9]{1,}$" maxlength="25" required />
                </div>
                <div class="formSep">
                  <label for="s_mailer">NUPTK</label><br>
                    <input type="text" class="form-control span8" name="nuptk" value="<?php echo $row->nuptk?>" pattern="^[0-9]{1,}$" maxlength="25" required />
                </div>
                <div class="formSep">
                  <label for="s_mailer">Jenis PTK</label><br>
                  <select name="jenis_ptk" class="span6" required>
                    <option value="Guru BK" <?php if($row->jenis_ptk == "Guru BK"){ echo "selected"; } ?>>Guru BK</option>
                    <option value="Guru Kelas" <?php if($row->jenis_ptk == "Guru Kelas"){ echo "selected"; } ?>>Guru Kelas</option>
                    <option value="Guru Mapel"<?php if($row->jenis_ptk == "Guru Mapel"){ echo "selected"; } ?>>Guru Mapel</option>
                    <option value="Tenaga Administrasi" <?php if($row->jenis_ptk == "Tenaga Administrasi Sekolah"){ echo "selected"; } ?>>Tenaga Administrasi Sekolah</option>
                    <option value="Penjaga Sekolah" <?php if($row->jenis_ptk == "Penjaga Sekolah"){ echo "selected"; } ?>>Penjaga Sekolah</option>
                    <option value="Pesuruh/Office Boy" <?php if($row->jenis_ptk == "Pesuruh/Office Boy"){ echo "selected"; } ?>>Pesuruh/Office Boy</option>
                  </select>
                </div>
                <div class="formSep">
                  <label for="s_mailer">Setatus Pegawai</label><br>
                  <select name="setatus_pegawai" class="span6" required>
                    <option value="CPNS" <?php if($row->setatus_pegawai == "CPNS"){ echo "selected"; } ?>>CPNS</option>
                    <option value="PNS" <?php if($row->setatus_pegawai == "PNS"){ echo "selected"; } ?>>PNS</option>
                    <option value="PNS Depag" <?php if($row->setatus_pegawai == "PNS Depag"){ echo "selected"; } ?>>PNS Depag</option>
                    <option value="PNS Diperbantukan" <?php if($row->setatus_pegawai == "PNS Diperbantukan"){ echo "selected"; } ?>>PNS Diperbantukan</option>
                    <option value="GTY/PTY" <?php if($row->setatus_pegawai == "GTY/PTY"){ echo "selected"; } ?>>GTY/PTY</option>
                    <option value="Guru Honor Sekolah" <?php if($row->setatus_pegawai == "Guru Honor Sekolah"){ echo "selected"; } ?>>Guru Honor Sekolah</option>
                    <option value="Tenaga Honor Sekolah" <?php if($row->setatus_pegawai == "Tenaga Honor Sekolah"){ echo "selected"; } ?>>Tenaga Honor Sekolah</option>
                  </select>
                </div>
                <div class="formSep">
                  <label for="s_mailer">Agama</label><br>
                  <select name="agama" class="span6" required>
                    <option value="Islam" <?php if($row->agama == "Islam"){ echo "selected"; } ?>>Islam</option>
                    <option value="Kristen Katolik" <?php if($row->agama == "Kristen Katolik"){ echo "selected"; } ?>>Kristen Katolik</option>
                    <option value="Kristen Protestan" <?php if($row->agama == "Kristen Protestan"){ echo "selected"; } ?>>Kristen Protestan</option>
                    <option value="Hindu" <?php if($row->agama == "Hindu"){ echo "selected"; } ?>>Hindu</option>
                    <option value="Buddha" <?php if($row->agama == "Budha"){ echo "selected"; } ?>>Buddha</option>
                    <option value="Khonghucu" <?php if($row->agama == "Khonghucu"){ echo "selected"; } ?>>Khonghucu</option>
                  </select>
                </div>
                <div class="formSep">
                  <label for="s_mailer">Alamat</label><br>
                    <input type="text" class="span8" name="alamat" value="<?php echo $row->alamat ?>" pattern="^[_A-Z a-z]{1,}$" maxlength="30" required/>
                </div>
                <div class="formSep">
                  <label for="s_mailer">RT/RW</label><br>
                    <input type="text" class="span2" name="rt" value="<?php echo $row->rt ?>" pattern="^[_0-9]{1,}$" maxlength="3" required/> /
                    <input type="text" class="span2" name="rw" value="<?php echo $row->rw ?>" pattern="^[_0-9]{1,}$" maxlength="3" required/>
                </div>
                <div class="formSep">
                  <label for="s_mailer">Dusun</label><br>
                    <input type="text" class="span8" name="dusun" value="<?php echo $row->dusun ?>"pattern="^[_A-Z a-z]{1,}$" maxlength="25" />
                </div>
                <div class="formSep">
                  <label for="s_mailer">Desa/Kelurahan</label><br>
                    <input type="text" class="span8" name="desa_kelurahan" value="<?php echo $row->desa_kelurahan ?>" pattern="^[_A-Z a-z]{1,}$" maxlength="25" required/>
                </div>
                <div class="formSep">
                  <label for="s_mailer">Kode Pos</label><br>
                    <input type="text" class="span8" name="kode_pos" value="<?php echo $row->kode_pos ?>" pattern="^[_0-9]{1,}$" maxlength="6" required/>
                </div>
                <div class="formSep">
                  <label for="s_mailer">Kecamatan</label><br>
                  <select name="kecamatan" class="span6" required>
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
                  <label for="s_mailer">Nomor Telepon</label><br>
                    <input type="text" class="span8" name="nomor_telepon" value="<?php echo $row->nomor_telepon ?>" pattern="^[_0-9]{1,}$" maxlength="15"/>
                </div>
                <div class="formSep">
                  <label for="s_mailer">Nomor HP</label><br>
                    <input type="text" class="span8" name="nomor_hp" value="<?php echo $row->nomor_hp ?>"pattern="^[_0-9]{1,}$" maxlength="15"/>
                </div>
            </div>
            <div class="span6">
                <div class="formSep">
                  <label for="s_mailer">Email</label><br>
                    <input type="email" class="span8" name="email" value="<?php echo $row->email ?>" pattern="^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$" maxlength="50" />
                </div>
                <div class="formSep">
                  <label for="s_mailer">SK CPNS</label><br>
                    <input type="text" class="span8" name="sk_cpns" value="<?php echo $row->sk_cpns ?>" pattern="^[_A-Z a-z 0-1 .\]{1,}$" maxlength="30" />
                </div>
                <div class="formSep">
                  <label for="s_mailer">Tanggal CPNS</label><br>
                  <input type="date" class="span8" name="tanggal_cpns" value="<?php echo $row->tanggal_cpns ?>" max= <?php echo date('Y-m-d'); ?> />
                </div>
                <div class="formSep">
                  <label for="s_mailer">SK Pengangkatan</label><br>
                  <input type="text" class="span8" name="sk_pengangkatan" value="<?php echo $row->sk_pengangkatan ?>" pattern="^[_A-Z a-z 0-1 .\]{1,}$" maxlength="30" />
                </div>
                <div class="formSep">
                  <label for="s_mailer">TMT Pengangkatan</label><br>
                  <input type="date" class="span8" name="tmt_pengangkatan" value="<?php echo $row->tmt_pengangkatan ?>" pattern="^[_A-Z a-z 0-1 .\]{1,}$" max= <?php echo date('Y-m-d'); ?> />
                </div>
                <div class="formSep">
                  <label for="s_mailer">Lembaga</label><br>
                    <input type="text" class="span8" name="lembaga" value="<?php echo $row->lembaga ?>" pattern="^[_A-Z a-z .-\]{1,}$" maxlength="30" />
                </div>
                <div class="formSep">
                  <label for="s_mailer">Sumber Gaji</label><br>
                    <input type="text" class="span8" name="sumber_gaji" value="<?php echo $row->sumber_gaji ?>" pattern="^[_A-Z a-z]{1,}$" maxlength="15" required/>
                </div>
                <div class="formSep">
                  <label for="s_mailer">Nama Ibu Kandung</label><br>
                    <input type="text" class="span8" name="nama_ibu_kandung" value="<?php echo $row->nama_ibu_kandung ?>" pattern="^[_A-Z a-z]{1,}$" maxlength="25" required/>
                </div>
                <div class="formSep">
                  <label for="s_mailer">Status Perkawinan</label><br>
                    <input type="text" class="span8" name="status_perkawinan" value="<?php echo $row->status_perkawinan ?>" pattern="^[_A-Z a-z 0-9]{1,}$" maxlength="30" required/>
                </div>
                <div class="formSep">
                  <label for="s_mailer">Nama Suami/Istri</label><br>
                    <input type="text" class="span8" name="nama_suami_istri" value="<?php echo $row->nama_suami_istri ?>" pattern="^[_a-z A-Z]{1,}$" maxlength="25"/>
                </div>
                <div class="formSep">
                  <label for="s_mailer">NIP Suami/Istri</label><br>
                    <input type="text" class="form-control span8" name="nip_suami_istri" value="<?php echo $row->nip_suami_istri ?>" value="" pattern="^[0-9]{1,}$" maxlength="25" />
                </div>
                <div class="formSep">
                  <label for="s_mailer">Pekerjaan Suami/Istri</label><br>
                    <input type="text" class="span8" name="pekerjaan_suami_istri" value="<?php echo $row->pekerjaan_suami_istri ?>" pattern="^[_A-Z a-z]{1,}$" maxlength="30" required/>
                </div>
                <div class="formSep">
                  <label for="s_mailer">TMT PNS</label><br>
                  <input type="date" class="span8" name="tmt_pns" value="<?php echo $row->tmt_pns ?>" pattern="^[_A-Z a-z]{1,}$" max= <?php echo date('Y-m-d'); ?> />
                </div>
                <div class="formSep">
                  <label for="s_mailer">Lisensi Kepala Sekolah</label><br>
                  <input type="text" class="span8" name="lisensi_kepala_sekolah" value="<?php echo $row->lisensi_kepala_sekolah ?>" pattern="^[_A-Z a-z 0-1 .\]{1,}$" maxlength="30" />
                </div>
                <div class="formSep">
                  <label for="s_mailer">NPWP</label><br>
                  <input type="text" class="span8" name="npwp" value="<?php echo $row->npwp ?>" pattern="^[_A-Z a-z 0-1 .\]{1,}$" maxlength="30" />
                </div>
                <div class="formSep">
                  <label for="s_mailer">Pendidikan Terakhir</label><br>
                  <select name="pendidikan_terakhir" class="span6" required>
                    <option value="SMA / Sederajat" <?php if($row->pendidikan_terakhir == "SMA / Sederajat"){ echo "selected"; } ?>>SMA / Sederajat</option>
                    <option value="D1" <?php if($row->pendidikan_terakhir == "D1"){ echo "selected"; } ?>>D1</option>
                    <option value="D2" <?php if($row->pendidikan_terakhir == "D2"){ echo "selected"; } ?>>D2</option>
                    <option value="D3" <?php if($row->pendidikan_terakhir == "D3"){ echo "selected"; } ?>>D3</option>
                    <option value="S1" <?php if($row->pendidikan_terakhir == "S1"){ echo "selected"; } ?>>S1</option>
                    <option value="S2" <?php if($row->pendidikan_terakhir == "S2"){ echo "selected"; } ?>>S2</option>
                    <option value="S3" <?php if($row->pendidikan_terakhir == "S3"){ echo "selected"; } ?>>S3</option>
                  </select>
                </div>
                <div class="formSep">
                  <label for="s_mailer">Penugasan</label><br>
                  <input type="text" class="span8" name="penugasan" value="<?php echo $row->penugasan ?>" pattern="^[_A-Z a-z]{1,}$" maxlength="20" />
                  <input type="hidden" name="id_skolah" value="<?php echo $row->id_skolah; ?>">
                  <input type="hidden" name="th_ajaran" value="<?php echo $row->th_ajaran; ?>">
                </div>
            </div>
          </div>
        </div>
        <div class="w-box-footer">
          <div class="f-center">
          <?php endforeach; ?>
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
