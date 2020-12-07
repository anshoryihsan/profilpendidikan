
<!-- breadcrumbs -->
<div class="container">
    <ul id="breadcrumbs">
      <?php foreach ($identitas as $row):?>
      <li><a href="<?php echo base_url();?>index.php/upt/home"><i class="icsw16-home"></i></a></li>
      <li><a href="javascript:history.back();">Kelola Profil Sekolah</i></a></li>
      <li><a href="#">Data Profil Sekolah</i></a></li>
      <li><a href="<?php echo base_url();?>index.php/upt/Peserta_didik/detailpesertadidik.php?idnss=<?php echo $row->id_skolah; ?>">Data Peseta Didik</i></a></li>
      <li><span>Tambah peserta didik...</span></li>
    <?php endforeach; ?>
    </ul>
</div>
<!-- main content -->
<div class="container">
  <div class="row-fluid">
    <div class="span12">
      <div class="w-box w-box-blue">
        <div class="w-box-header">
          <h4>Tambah Peserta Didik</h4>
          <i class="icsw16-settings icsw16-white pull-right"></i>
        </div>
        <div class="w-box-content cnt_a">
          <div class="row-fluid">
            <form id="validate_field_types" data-toggle="validator" action="<?php echo base_url(). 'index.php/upt/Peserta_didik/createPesertadidik'; ?>" method="post" >
            <div class="span6">
              <div class="formSep">
                <label for="s_mailer">Nama</label><br>
                  <input type="text" class="form-control span8" name="nama" pattern="^[_A-Z a-z]{1,}$" maxlength="25" required />
              </div>
              <div class="formSep">
                <label for="s_mailer">Jenis Kelamin</label><br>
                <select name="jenis_kelamin" class="span6" required>
                  <option value="L">L</option>
                  <option value="P">P</option>
                </select>
              </div>
              <div class="formSep">
                <label for="s_mailer">NIK</label><br>
                  <input type="text" class="form-control span8" name="nik" pattern="^[_0-9]{1,}$" maxlength="25" required />
              </div>
              <div class="formSep">
                <label for="s_mailer">NISN</label><br>
                  <input type="text" class="form-control span8" name="nisn" pattern="^[_0-9]{1,}$" maxlength="25" required />
              </div>
              <div class="formSep">
                <label for="s_mailer">Tempat Lahir</label><br>
                  <input type="text" class="form-control span8" name="tempat_lahir" pattern="^[_A-Z a-z]{1,}$" maxlength="25" required />
              </div>
              <div class="formSep">
                <label for="s_mailer">Tanggal Lahir</label><br>
                <input type="date" class="span8" name="tanggal_lahir"  max= <?php echo date('Y-m-d'); ?> required/>
              </div>
              <div class="formSep">
                <label for="s_mailer">Agama</label><br>
                <select name="agama" class="span6" required>
                  <option value="Islam">Islam</option>
                  <option value="Kristen Katolik">Kristen Katolik</option>
                  <option value="Kristen Protestan">Kristen Protestan</option>
                  <option value="Hindu">Hindu</option>
                  <option value="Buddha">Buddha</option>
                  <option value="Khonghucu">Khonghucu</option>
                </select>
              </div>
              <div class="formSep">
                <label for="s_mailer">Kebutuhan Khusus</label><br>
                <select name="kebutuhan_khusus" class="span6" required>
                  <option value="Ada">Ada</option>
                  <option value="Tidak Ada">Tidak Ada</option>
                </select>
              </div>
              <div class="formSep">
                <label for="s_mailer">Alamat</label><br>
                  <input type="text" class="span8" name="alamat" pattern="^[_A-Z a-z]{1,}$" maxlength="30" required/>
              </div>
              <div class="formSep">
                <label for="s_mailer">RT/RW</label><br>
                  <input type="text" class="span2" name="rt" pattern="^[_0-9]{1,}$" maxlength="3" required/> /
                  <input type="text" class="span2" name="rw" pattern="^[_0-9]{1,}$" maxlength="3" required/>
              </div>
              <div class="formSep">
                <label for="s_mailer">Nama Dusun</label><br>
                  <input type="text" class="span8" name="nama_dusun" pattern="^[_A-Z a-z .]{1,}$" maxlength="25" />
              </div>
              <div class="formSep">
                <label for="s_mailer">Desa/Kelurahan</label><br>
                  <input type="text" class="span8" name="desa_kelurahan" pattern="^[_A-Z a-z .\]{1,}$" maxlength="25" required/>
              </div>
              <div class="formSep">
                <label for="s_mailer">Kode Pos</label><br>
                  <input type="text" class="span8" name="kode_pos" pattern="^[_0-9]{1,}$" maxlength="6" required/>
              </div>
              <div class="formSep">
                <label for="s_mailer">Kecamatan</label><br>
                <select name="kecamatan" class="span6" required>
                  <option value="kec. BatuJajar">Kec. Batujajar</option>
                  <option value="Kec. Cipongkor">Kec. Cipongkor</option>
                  <option value="kec. Cikalongwetan">Kec. Cikalongwetan</option>
                  <option value="kec. Cisarua">Kec. Cisarua</option>
                  <option value="kec. Cihampelas">Kec. Cihamplas</option>
                  <option value="kec. Cililin">Kec. Cililin</option>
                  <option value="kec. Cipatat">Kec. Cipatat</option>
                  <option value="kec. Cipeundeuy">Kec. Cipeundeuy</option>
                  <option value="kec. Gununghalu">Kec. Gununghalu</option>
                  <option value="kec. Lembang">Kec. Lembang</option>
                  <option value="Kec. Ngamprah">Kec. Ngamprah</option>
                  <option value="Kec. Padalarang">Kec. Padalarang</option>
                  <option value="Kec. Parompong">Kec. Parompong</option>
                  <option value="Kec. Rongga">Kec. Rongga</option>
                  <option value="Kec. Sindangkerta">Kec. Sindangkerta</option>
                  <option value="Kec. Saguling">Kec. Saguling</option>
                </select>
              </div>
              <div class="formSep">
                <label for="s_mailer">Jenis Tinggal</label><br>
                  <input type="text" class="span8" name="jenis_tinggal" pattern="^[_a-z A-Z .\]{1,}$" maxlength="15"/>
              </div>
              <div class="formSep">
                <label for="s_mailer">Alat Transportasi</label><br>
                  <input type="text" class="span8" name="alat_transportasi" pattern="^[_a-z A-Z .\]{1,}$" maxlength="15"/>
              </div>
              <div class="formSep">
                <label for="s_mailer">Nomor Telepon</label><br>
                  <input type="text" class="span8" name="nomor_telepon" pattern="^[_0-9]{1,}$" maxlength="15"/>
              </div>
              <div class="formSep">
                <label for="s_mailer">Nomor Handphone</label><br>
                  <input type="text" class="span8" name="nomor_handphone"pattern="^[_0-9]{1,}$" maxlength="15"/>
              </div>
              <div class="formSep">
                <label for="s_mailer">Email</label><br>
                  <input type="email" class="span8" name="email" pattern="^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$" maxlength="50" />
              </div>
            </div>
            <div class="span6">
              <div class="formSep">
                <label for="s_mailer">Terima KPS</label><br>
                  <input type="text" class="span8" name="terima_kps" pattern="^[_a-z A-Z .\]{1,}$" maxlength="15"/>
              </div>
              <div class="formSep">
                <label for="s_mailer">Nomor KPS</label><br>
                  <input type="text" class="span8" name="nomor_kps" pattern="^[_0-9]{1,}$" maxlength="20"/>
              </div>
              <div class="formSep">
                <label for="s_mailer">Nama Ayah</label><br>
                  <input type="text" class="span8" name="nama_ayah" pattern="^[_A-Z a-z]{1,}$" maxlength="30" />
              </div>
              <div class="formSep">
                <label for="s_mailer">Tahun Lahir Ayah</label><br>
                  <input type="date" class="span8" name="tahun_lahir_ayah"  max= <?php echo date('Y-m-d'); ?>/>
              </div>
              <div class="formSep">
                <label for="s_mailer">Pendidikan Ayah</label><br>
                <select name="pendidikan_ayah" class="span6" required>
                  <option value="SD / Sederajat">SD / Sederajat</option>
                  <option value="SMP / Sederajat">SMP / Sederajat</option>
                  <option value="SMA / Sederajat">SMA / Sederajat</option>
                  <option value="D1">D1</option>
                  <option value="D2">D2</option>
                  <option value="D3">D3</option>
                  <option value="S1">S1</option>
                  <option value="S2">S2</option>
                  <option value="S3">S3</option>
                  <option value="Putus SD">Putus SD</option>
                  <option value="Putus SMP">Putus SMP</option>
                  <option value="Putus SMA">Putus SMA</option>
                </select>
              </div>
              <div class="formSep">
                <label for="s_mailer">Pekerjaan Ayah</label><br>
                  <input type="text" class="span8" name="pekerjaan_ayah" pattern="^[_A-Z a-z 0-1 .\]{1,}$" maxlength="30" />
              </div>
              <div class="formSep">
                <label for="s_mailer">Penghasilan Ayah</label><br>
                  <input type="text" class="span8" name="penghasilan_ayah" pattern="^[_0-9]{1,}$" maxlength="15"/>
              </div>
              <div class="formSep">
                <label for="s_mailer">Nama Ibu</label><br>
                  <input type="text" class="span8" name="nama_ibu" pattern="^[_a-z A-Z]{1,}$" maxlength="15" required/>
              </div>
              <div class="formSep">
                <label for="s_mailer">Tahun Lahir Ibu</label><br>
                  <input type="date" class="span8" name="tahun_lahir_ibu"  max= <?php echo date('Y-m-d'); ?>/>
              </div>
              <div class="formSep">
                <label for="s_mailer">Pendidikan Ibu</label><br>
                <select name="pendidikan_ibu" class="span6">
                  <option value="SD / Sederajat">SD / Sederajat</option>
                  <option value="SMP / Sederajat">SMP / Sederajat</option>
                  <option value="SMA / Sederajat">SMA / Sederajat</option>
                  <option value="D1">D1</option>
                  <option value="D2">D2</option>
                  <option value="D3">D3</option>
                  <option value="S1">S1</option>
                  <option value="S2">S2</option>
                  <option value="S3">S3</option>
                  <option value="Putus SD">Putus SD</option>
                  <option value="Putus SMP">Putus SMP</option>
                  <option value="Putus SMA">Putus SMA</option>
                </select>
              </div>
              <div class="formSep">
                <label for="s_mailer">Pekerjaan Ibu</label><br>
                  <input type="text" class="span8" name="pekerjaan_ibu" pattern="^[_A-Z a-z]{1,}$" maxlength="30" />
              </div>
              <div class="formSep">
                <label for="s_mailer">Penghasilan Ibu</label><br>
                  <input type="text" class="span8" name="penghasilan_ibu" pattern="^[_0-9]{1,}$" maxlength="15"/>
              </div>
              <div class="formSep">
                <label for="s_mailer">Nama Wali</label><br>
                  <input type="text" class="span8" name="nama_wali" pattern="^[_a-z A-Z]{1,}$" maxlength="15"/>
              </div>
              <div class="formSep">
                <label for="s_mailer">Tahun Lahir Wali</label><br>
                  <input type="date" class="span8" name="tahun_lahir_wali"  max= <?php echo date('Y-m-d'); ?>/>
              </div>
              <div class="formSep">
                <label for="s_mailer">Pendidikan Wali</label><br>
                <select name="pendidikan_wali" class="span6">
                  <option value="SD / Sederajat">SD / Sederajat</option>
                  <option value="SMP / Sederajat">SMP / Sederajat</option>
                  <option value="SMA / Sederajat">SMA / Sederajat</option>
                  <option value="D1">D1</option>
                  <option value="D2">D2</option>
                  <option value="D3">D3</option>
                  <option value="S1">S1</option>
                  <option value="S2">S2</option>
                  <option value="S3">S3</option>
                  <option value="Putus SD">Putus SD</option>
                  <option value="Putus SMP">Putus SMP</option>
                  <option value="Putus SMA">Putus SMA</option>
                </select>
              </div>
              <div class="formSep">
                <label for="s_mailer">Pekerjaan Wali</label><br>
                  <input type="text" class="span8" name="pekerjaan_wali" pattern="^[_0-9]{1,}$" maxlength="30" />
              </div>
              <div class="formSep">
                <label for="s_mailer">Penghasilan Wali</label><br>
                  <input type="text" class="span8" name="pengasilan_wali" pattern="^[_0-9]{1,}$" maxlength="15"/>
              </div>
              <div class="formSep">
                <label for="s_mailer">Rombel</label><br>
                  <input type="text" class="span8" name="rombel" pattern="^[_A-Z a-z 0-1 .\]{1,}$" maxlength="30" required/>
                <?php
                  $no = 0;
                    foreach ($identitas as $row):
                      $no=$no+1;?>
                  <input type="hidden" name="id_skolah" value="<?php echo $row->id_skolah; ?>">
                  <input type="hidden" name="th_ajaran" value="<?php echo $row->th_ajaran; ?>">
                <?php endforeach; ?>
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
