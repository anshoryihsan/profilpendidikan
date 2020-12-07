
<!-- breadcrumbs -->
<div class="container">
    <ul id="breadcrumbs">
      <?php foreach ($peserta as $row):?>
      <li><a href="<?php echo base_url();?>index.php/upt/home"><i class="icsw16-home"></i></a></li>
      <li><a href="javascript:history.back();">Kelola Profil Sekolah</i></a></li>
      <li><a href="#">Data Profil Sekolah</i></a></li>
      <li><a href="<?php echo base_url();?>index.php/upt/Peserta_didik/detailpesertadidik.php?idnss=<?php echo $row->id_skolah; ?>">Data Peseta Didik</i></a></li>
      <li><span>Ubah peserta didik...</span></li>
    <?php endforeach; ?>
    </ul>
</div>
<!-- main content -->
<div class="container">
  <div class="row-fluid">
    <div class="span12">
      <div class="w-box w-box-green">
        <div class="w-box-header">
          <h4>Ubah Peserta Didik</h4>
          <i class="icsw16-settings icsw16-white pull-right"></i>
        </div>
        <div class="w-box-content cnt_a">
          <div class="row-fluid">
            <?php foreach($peserta as $row): ?>

              <form id="validate_field_types" data-toggle="validator" action="<?php echo base_url(). 'index.php/upt/Peserta_didik/updatePeserta_didik'; ?>" method="post" >
              <div class="span6">
                  <div class="formSep">
                    <label for="s_mailer">Nama</label><br>
                    <input type="hidden" name="id_peserta" value="<?php echo $row->id_peserta; ?>">
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
                    <label for="s_mailer">NIK</label><br>
                      <input type="text" class="form-control span8" name="nik" value="<?php echo $row->nik ?>" pattern="^[_0-9]{1,}$" maxlength="20" required />
                  </div>
                  <div class="formSep">
                    <label for="s_mailer">NISN</label><br>
                    <input type="text" class="form-control span8" name="nisn" value="<?php echo $row->nisn ?>" pattern="^[_0-9]{1,}$" maxlength="20" required />
                  </div>

                  <div class="formSep">
                    <label for="s_mailer">Tempat Lahir</label><br>
                      <input type="text" class="form-control span8" name="tempat_lahir" value="<?php echo $row->tempat_lahir ?>" pattern="^[_A-Z a-z]{1,}$" maxlength="25" required />
                  </div>
                  <div class="formSep">
                    <label for="s_mailer">Tanggal Lahir</label><br>
                      <input type="date" class="span8" name="tanggal_lahir" value="<?php echo $row->tanggal_lahir ?>" max= <?php echo date('Y-m-d'); ?> required/>
                  </div>
                  <div class="formSep">
                    <label for="s_mailer">Agama</label><br>
                    <select name="agama" class="span6" required>
                      <option value=""></option>
                      <option value="Islam" <?php if($row->agama == "Islam"){ echo "selected"; } ?>>Islam</option>
                      <option value="Kristen Katolik" <?php if($row->agama == "Kristen Katolik"){ echo "selected"; } ?>>Kristen Katolik</option>
                      <option value="Kristen Protestan" <?php if($row->agama == "Kristen Protestan"){ echo "selected"; } ?>>Kristen Protestan</option>
                      <option value="Hindu" <?php if($row->agama == "Hindu"){ echo "selected"; } ?>>Hindu</option>
                      <option value="Buddha" <?php if($row->agama == "Budha"){ echo "selected"; } ?>>Buddha</option>
                      <option value="Khonghucu" <?php if($row->agama == "Khonghucu"){ echo "selected"; } ?>>Khonghucu</option>
                    </select>
                  </div>
                  <div class="formSep">
                    <label for="s_mailer">Kebutuhan Khusus</label><br>
                    <select name="kebutuhan_khusus" class="span6" required>
                      <option value=""></option>
                      <option value="Ada" <?php if($row->kebutuhan_khusus == "Ada"){ echo "selected"; } ?>>Ada</option>
                      <option value="Tidak Ada" <?php if($row->kebutuhan_khusus == "Tidak ada"){ echo "selected"; } ?>>Tidak ada</option>
                    </select>
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
                    <label for="s_mailer">Nama Dusun</label><br>
                      <input type="text" class="span8" name="nama_dusun" value="<?php echo $row->nama_dusun ?>" pattern="^[_A-Z a-z .]{1,}$" maxlength="25" />
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
                    <select name="kecamatan" class="span6">
                      <option value=""></option>
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
                    <label for="s_mailer">Jenis Tinggal</label><br>
                      <input type="text" class="span8" name="jenis_tinggal" value="<?php echo $row->jenis_tinggal ?>" pattern="^[_a-z A-Z .\]{1,}$" maxlength="15"/>
                  </div>
                  <div class="formSep">
                    <label for="s_mailer">Alat Transportasi</label><br>
                      <input type="text" class="span8" name="alat_transportasi" value="<?php echo $row->alat_transportasi ?>" pattern="^[_a-z A-Z .\]{1,}$" maxlength="15"/>
                  </div>
                  <div class="formSep">
                    <label for="s_mailer">Nomor Telepon</label><br>
                      <input type="text" class="span8" name="nomor_telepon" value="<?php echo $row->nomor_telepon ?>" pattern="^[_0-9]{1,}$" maxlength="15"/>
                  </div>
                  <div class="formSep">
                    <label for="s_mailer">Nomor Handphone</label><br>
                      <input type="text" class="span8" name="nomor_handphone" value="<?php echo $row->nomor_handphone ?>"pattern="^[_0-9]{1,}$" maxlength="15"/>
                  </div>
              </div>
              <div class="span6">
                  <div class="formSep">
                    <label for="s_mailer">Email</label><br>
                      <input type="email" class="span8" name="email" value="<?php echo $row->email ?>" pattern="^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$" maxlength="50" />
                  </div>
                  <div class="formSep">
                    <label for="s_mailer">Terima KPS</label><br>
                      <input type="text" class="span8" name="terima_kps" value="<?php echo $row->terima_kps ?>" pattern="^[_a-z A-Z]{1,}$" maxlength="20"/>
                  </div>
                  <div class="formSep">
                    <label for="s_mailer">Nomor KPS</label><br>
                      <input type="text" class="span8" name="terima_kps" value="<?php echo $row->nomor_kps ?>" pattern="^[_a-z A-Z 0-9 .\]{1,}$" maxlength="15"/>
                  </div>
                  <div class="formSep">
                    <label for="s_mailer">Nama Ayah</label><br>
                    <input type="text" class="span8" name="nama_ayah" value="<?php echo $row->nama_ayah ?>" pattern="^[_A-Z a-z]{1,}$" maxlength="30" />
                  </div>
                  <div class="formSep">
                    <label for="s_mailer">Tahun Lahir Ayah</label><br>
                    <input type="number" name="tahun_lahir_ayah" class="span6" min="1900" max="<?php echo date('Y'); ?>" step="1" value="<?php echo $row->tahun_lahir_ayah?>" />
                  </div>
                  <div class="formSep">
                    <label for="s_mailer">Pendidikan Ayah</label><br>
                    <select name="pendidikan_ayah" class="span6" >
                      <option value=""></option>
                      <option value="SD / Sederajat" <?php if($row->pendidikan_ayah == "SD / sederajat"){ echo "selected"; } ?> >SD / sederajat</option>
                      <option value="SMP / Sederajat" <?php if($row->pendidikan_ayah == "SMP / sederajat"){ echo "selected"; } ?> >SMP / sederajat</option>
                      <option value="SMA / Sederajat" <?php if($row->pendidikan_ayah == "SMA / sederajat"){ echo "selected"; } ?> >SMA / sederajat</option>
                      <option value="D1" <?php if($row->pendidikan_ayah == "D1"){ echo "selected"; } ?> >D1</option>
                      <option value="D2" <?php if($row->pendidikan_ayah == "D2"){ echo "selected"; } ?> >D2</option>
                      <option value="D3" <?php if($row->pendidikan_ayah == "D3"){ echo "selected"; } ?> >D3</option>
                      <option value="S1" <?php if($row->pendidikan_ayah == "S1"){ echo "selected"; } ?> >S1</option>
                      <option value="S2" <?php if($row->pendidikan_ayah == "S2"){ echo "selected"; } ?> >S2</option>
                      <option value="S3" <?php if($row->pendidikan_ayah == "S3"){ echo "selected"; } ?> >S3</option>
                      <option value="Putus SD" <?php if($row->pendidikan_ayah == "Putus SD"){ echo "selected"; } ?> >Putus SD</option>
                      <option value="Putus SMP" <?php if($row->pendidikan_ayah == "Putus SMP"){ echo "selected"; } ?> >Putus SMP</option>
                      <option value="Putus SMA" <?php if($row->pendidikan_ayah == "Putus SMA"){ echo "selected"; } ?> >Putus SMA</option>
                    </select>
                  </div>
                  <div class="formSep">
                    <label for="s_mailer">Penghasilan Ayah</label><br>
                      <select name="penghasilan_ayah" class="span6">
                        <option value=""></option>
                        <option value="Kurang dari Rp. 500,000" <?php if($row->penghasilan_ayah == "Kurang dari Rp. 500,000"){ echo "selected"; } ?> >Kurang dari Rp. 500,000</option>
                        <option value="Rp. 500,000 - Rp. 999,999" <?php if($row->penghasilan_ayah == "Rp. 500,000 - Rp. 999,999"){ echo "selected"; } ?> >Rp. 500,000 - Rp. 999,999</option>
                        <option value="Rp. 1,000,000 - Rp. 1,999,999" <?php if($row->penghasilan_ayah == "Rp. 1,000,000 - Rp. 1,999,999"){ echo "selected"; } ?> >Rp. 1,000,000 - Rp. 1,999,999</option>
                        <option value="Rp. 2,000,000 - Rp. 4,999,999" <?php if($row->penghasilan_ayah == "Rp. 2,000,000 - Rp. 4,999,999"){ echo "selected"; } ?> >Rp. 2,000,000 - Rp. 4,999,999</option>
                        <option value="Lebih dari Rp. 5,000,000" <?php if($row->penghasilan_ayah == "Lebih dari Rp. 5,000,000"){ echo "selected"; } ?> >Lebih dari Rp. 4,000,000</option>
                      </select>
                  </div>
                  <div class="formSep">
                    <label for="s_mailer">Nama Ibu</label><br>
                    <input type="text" class="span8" name="nama_ibu" value="<?php echo $row->nama_ibu ?>" pattern="^[_A-Z a-z]{1,}$" maxlength="30" />
                  </div>
                  <div class="formSep">
                    <label for="s_mailer">Tahun Lahir Ibu</label><br>
                    <input type="number" name="tahun_lahir_ibu" class="span6" min="1900" max="<?php echo date('Y'); ?>" step="1" value="<?php echo $row->tahun_lahir_ibu?>" />
                  </div>
                  <div class="formSep">
                    <label for="s_mailer">Pendidikan Ibu</label><br>
                    <select name="pendidikan_ayah" class="span6">
                      <option value=""></option>
                      <option value="SD / Sederajat" <?php if($row->pendidikan_ibu == "SD / sederajat"){ echo "selected"; } ?> >SD / sederajat</option>
                      <option value="SMP / Sederajat" <?php if($row->pendidikan_ibu == "SMP / sederajat"){ echo "selected"; } ?> >SMP / sederajat</option>
                      <option value="SMA / Sederajat" <?php if($row->pendidikan_ibu == "SMA / sederajat"){ echo "selected"; } ?> >SMA / sederajat</option>
                      <option value="D1" <?php if($row->pendidikan_ibu == "D1"){ echo "selected"; } ?> >D1</option>
                      <option value="D2" <?php if($row->pendidikan_ibu == "D2"){ echo "selected"; } ?> >D2</option>
                      <option value="D3" <?php if($row->pendidikan_ibu == "D3"){ echo "selected"; } ?> >D3</option>
                      <option value="S1" <?php if($row->pendidikan_ibu == "S1"){ echo "selected"; } ?> >S1</option>
                      <option value="S2" <?php if($row->pendidikan_ibu == "S2"){ echo "selected"; } ?> >S2</option>
                      <option value="S3" <?php if($row->pendidikan_ibu == "S3"){ echo "selected"; } ?> >S3</option>
                      <option value="Putus SD" <?php if($row->pendidikan_ibu == "Putus SD"){ echo "selected"; } ?> >Putus SD</option>
                      <option value="Putus SMP" <?php if($row->pendidikan_ibu == "Putus SMP"){ echo "selected"; } ?> >Putus SMP</option>
                      <option value="Putus SMA" <?php if($row->pendidikan_ibu == "Putus SMA"){ echo "selected"; } ?> >Putus SMA</option>
                    </select>
                  </div>
                  <div class="formSep">
                    <label for="s_mailer">Penghasilan Ibu</label><br>
                      <select name="penghasilan_ibu" class="span6">
                        <option value=""></option>
                        <option value="Kurang dari Rp. 500,000" <?php if($row->penghasilan_ibu == "Kurang dari Rp. 500,000"){ echo "selected"; } ?> >Kurang dari Rp. 500,000</option>
                        <option value="Rp. 500,000 - Rp. 999,999" <?php if($row->penghasilan_ibu == "Rp. 500,000 - Rp. 999,999"){ echo "selected"; } ?> >Rp. 500,000 - Rp. 999,999</option>
                        <option value="Rp. 1,000,000 - Rp. 1,999,999" <?php if($row->penghasilan_ibu == "Rp. 1,000,000 - Rp. 1,999,999"){ echo "selected"; } ?> >Rp. 1,000,000 - Rp. 1,999,999</option>
                        <option value="Rp. 2,000,000 - Rp. 4,999,999" <?php if($row->penghasilan_ibu == "Rp. 2,000,000 - Rp. 4,999,999"){ echo "selected"; } ?> >Rp. 2,000,000 - Rp. 4,999,999</option>
                        <option value="Lebih dari Rp. 5,000,000" <?php if($row->penghasilan_ibu == "Lebih dari Rp. 5,000,000"){ echo "selected"; } ?> >Lebih dari Rp. 4,000,000</option>
                      </select>
                  </div>
                  <div class="formSep">
                    <label for="s_mailer">Nama Wali</label><br>
                    <input type="text" class="span8" name="nama_wali" value="<?php echo $row->nama_wali ?>" pattern="^[_A-Z a-z]{1,}$" maxlength="30" />
                  </div>
                  <div class="formSep">
                    <label for="s_mailer">Tahun Lahir wali</label><br>
                    <input type="number" name="tahun_lahir_wali" class="span6" min="1900" max="<?php echo date('Y'); ?>" step="1" value="<?php echo $row->tahun_lahir_wali?>" />
                  </div>
                  <div class="formSep">
                    <label for="s_mailer">Pendidikan wali</label><br>
                    <select name="pendidikan_wali" class="span6">
                      <option value=""></option>
                      <option value="SD / Sederajat" <?php if($row->pendidikan_wali == "SD / sederajat"){ echo "selected"; } ?> >SD / sederajat</option>
                      <option value="SMP / Sederajat" <?php if($row->pendidikan_wali == "SMP / sederajat"){ echo "selected"; } ?> >SMP / sederajat</option>
                      <option value="SMA / Sederajat" <?php if($row->pendidikan_wali == "SMA / sederajat"){ echo "selected"; } ?> >SMA / sederajat</option>
                      <option value="D1" <?php if($row->pendidikan_wali == "D1"){ echo "selected"; } ?> >D1</option>
                      <option value="D2" <?php if($row->pendidikan_wali == "D2"){ echo "selected"; } ?> >D2</option>
                      <option value="D3" <?php if($row->pendidikan_wali == "D3"){ echo "selected"; } ?> >D3</option>
                      <option value="S1" <?php if($row->pendidikan_wali == "S1"){ echo "selected"; } ?> >S1</option>
                      <option value="S2" <?php if($row->pendidikan_wali == "S2"){ echo "selected"; } ?> >S2</option>
                      <option value="S3" <?php if($row->pendidikan_wali == "S3"){ echo "selected"; } ?> >S3</option>
                      <option value="Putus SD" <?php if($row->pendidikan_wali == "Putus SD"){ echo "selected"; } ?> >Putus SD</option>
                      <option value="Putus SMP" <?php if($row->pendidikan_wali == "Putus SMP"){ echo "selected"; } ?> >Putus SMP</option>
                      <option value="Putus SMA" <?php if($row->pendidikan_wali == "Putus SMA"){ echo "selected"; } ?> >Putus SMA</option>
                    </select>
                  </div>
                  <div class="formSep">
                    <label for="s_mailer">Penghasilan Wali</label><br>
                      <select name="pengasilan_wali" class="span6">
                        <option ></option>
                        <option value="Kurang dari Rp. 500,000" <?php if($row->pengasilan_wali == "Kurang dari Rp. 500,000"){ echo "selected"; } ?> >Kurang dari Rp. 500,000</option>
                        <option value="Rp. 500,000 - Rp. 999,999" <?php if($row->pengasilan_wali == "Rp. 500,000 - Rp. 999,999"){ echo "selected"; } ?> >Rp. 500,000 - Rp. 999,999</option>
                        <option value="Rp. 1,000,000 - Rp. 1,999,999" <?php if($row->pengasilan_wali == "Rp. 1,000,000 - Rp. 1,999,999"){ echo "selected"; } ?> >Rp. 1,000,000 - Rp. 1,999,999</option>
                        <option value="Rp. 2,000,000 - Rp. 4,999,999" <?php if($row->pengasilan_wali == "Rp. 2,000,000 - Rp. 4,999,999"){ echo "selected"; } ?> >Rp. 2,000,000 - Rp. 4,999,999</option>
                        <option value="Lebih dari Rp. 5,000,000" <?php if($row->pengasilan_wali == "Lebih dari Rp. 5,000,000"){ echo "selected"; } ?> >Lebih dari Rp. 4,000,000</option>
                      </select>
                  </div>
                  <div class="formSep">
                    <label for="s_mailer">Rombel</label><br>
                    <input type="text" name="id_skolah" class="span8" value="<?php echo $row->rombel; ?>">
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
