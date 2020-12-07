
<!-- breadcrumbs -->
<div class="container">
    <ul id="breadcrumbs">
      <li><a href="<?php echo base_url();?>index.php/upt/home"><i class="icsw16-home"></i></a></li>
      <li><a href="#">Kelola Profil Sekolah</i></a></li>
      <li><a href="#">Profil Sekolah</i></a></li>
      <li><a href="#">Data PTK</i></a></li>
      <li><span>Tambah PTK...</span></li>
    </ul>
</div>
<!-- main content -->
<div class="container">
  <div class="row-fluid">
    <div class="span12">
      <div class="w-box w-box-blue">
        <div class="w-box-header">
          <h4>Tambah PTK</h4>
          <i class="icsw16-settings icsw16-white pull-right"></i>
        </div>
        <div class="w-box-content cnt_a">
          <div class="row-fluid">
            <form id="validate_field_types" data-toggle="validator" action="<?php echo base_url(). 'index.php/upt/PTK/createPTK'; ?>" method="post" >
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
                <label for="s_mailer">Tempat Lahir</label><br>
                  <input type="text" class="form-control span8" name="tempat_lahir" pattern="^[_A-Z a-z]{1,}$" maxlength="25" required />
              </div>
              <div class="formSep">
                <label for="s_mailer">Tanggal Lahir</label><br>
                <input type="date" class="span8" name="tanggal_lahir"  max= <?php echo date('Y-m-d'); ?> required/>
              </div>
              <div class="formSep">
                <label for="s_mailer">NIK</label><br>
                  <input type="text" class="form-control span8" name="nik" value="" pattern="^[0-9]{1,}$" maxlength="25"/>
              </div>
              <div class="formSep">
                <label for="s_mailer">NIP</label><br>
                  <input type="text" class="form-control span8" name="nip" value="" pattern="^[0-9]{1,}$" maxlength="25"/>
              </div>
              <div class="formSep">
                <label for="s_mailer">NUPTK</label><br>
                  <input type="text" class="form-control span8" name="nuptk" value="" pattern="^[0-9]{1,}$" maxlength="25"/>
              </div>
              <div class="formSep">
                <label for="s_mailer">Jenis PTK</label><br>
                <select name="jenis_ptk" class="span6" required>
                  <option value="Guru BK">Guru BK</option>
                  <option value="Guru Kelas">Guru Kelas</option>
                  <option value="Guru Mapel">Guru Mapel</option>
                  <option value="Tenaga Administrasi">Tenaga Administrasi Sekolah</option>
                  <option value="Penjaga Sekolah">Penjaga Sekolah</option>
                  <option value="Pesuruh/Office Boy">Pesuruh/Office Boy</option>
                </select>
              </div>
              <div class="formSep">
                <label for="s_mailer">Setatus Pegawai</label><br>
                <select name="setatus_pegawai" class="span6" required>
                  <option value="CPNS">CPNS</option>
                  <option value="PNS">PNS</option>
                  <option value="PNS Depag">PNS Depag</option>
                  <option value="PNS Diperbantukan">PNS Diperbantukan</option>
                  <option value="GTY/PTY">GTY/PTY</option>
                  <option value="Guru Honor Sekolah">Guru Honor Sekolah</option>
                  <option value="Tenaga Honor Sekolah">Tenaga Honor Sekolah</option>
                </select>
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
                <label for="s_mailer">Alamat</label><br>
                  <input type="text" class="span8" name="alamat" pattern="^[_A-Z a-z]{1,}$" maxlength="30" required/>
              </div>
              <div class="formSep">
                <label for="s_mailer">RT/RW</label><br>
                  <input type="text" class="span2" name="rt" pattern="^[_0-9]{1,}$" maxlength="3" required/> /
                  <input type="text" class="span2" name="rw" pattern="^[_0-9]{1,}$" maxlength="3" required/>
              </div>
              <div class="formSep">
                <label for="s_mailer">Dusun</label><br>
                  <input type="text" class="span8" name="dusun" pattern="^[_A-Z a-z]{1,}$" maxlength="25" />
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
                  <option value="kec. BatuJajar">Kec. BatuJajar</option>
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
                <label for="s_mailer">Nomor Telepon</label><br>
                  <input type="text" class="span8" name="nomor_telepon" pattern="^[_0-9]{1,}$" maxlength="15"/>
              </div>
              <div class="formSep">
                <label for="s_mailer">Nomor HP</label><br>
                  <input type="text" class="span8" name="nomor_hp"pattern="^[_0-9]{1,}$" maxlength="15"/>
              </div>
            </div>
            <div class="span6">
              <div class="formSep">
                <label for="s_mailer">Email</label><br>
                  <input type="email" class="span8" name="email" pattern="^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$" maxlength="50" />
              </div>
              <div class="formSep">
                <label for="s_mailer">SK CPNS</label><br>
                  <input type="text" class="span8" name="sk_cpns" pattern="^[_A-Z a-z 0-1 .\]{1,}$" maxlength="30" />
              </div>
              <div class="formSep">
                <label for="s_mailer">Tanggal CPNS</label><br>
                <input type="date" class="span8" name="tanggal_cpns"  max= <?php echo date('Y-m-d'); ?> />
              </div>
              <div class="formSep">
                <label for="s_mailer">SK Pengangkatan</label><br>
                <input type="text" class="span8" name="sk_pengangkatan"  pattern="^[_A-Z a-z 0-1 .\]{1,}$" maxlength="30" />
              </div>
              <div class="formSep">
                <label for="s_mailer">TMT Pengangkatan</label><br>
                <input type="date" class="span8" name="tmt_pengangkatan"  pattern="^[_A-Z a-z 0-1 .\]{1,}$" max= <?php echo date('Y-m-d'); ?> />
              </div>
              <div class="formSep">
                <label for="s_mailer">Lembaga</label><br>
                  <input type="text" class="span8" name="lembaga" pattern="^[_A-Z a-z]{1,}$" maxlength="30" required/>
              </div>
              <div class="formSep">
                <label for="s_mailer">Sumber Gaji</label><br>
                  <input type="text" class="span8" name="sumber_gaji" pattern="^[_A-Z a-z]{1,}$" maxlength="15" required/>
              </div>
              <div class="formSep">
                <label for="s_mailer">Nama Ibu Kandung</label><br>
                  <input type="text" class="span8" name="nama_ibu_kandung" pattern="^[_A-Z a-z]{1,}$" maxlength="25" />
              </div>
              <div class="formSep">
                <label for="s_mailer">Status Perkawinan</label><br>
                  <input type="text" class="span8" name="status_perkawinan" pattern="^[_A-Z a-z]{1,}$" maxlength="30" />
              </div>
              <div class="formSep">
                <label for="s_mailer">Nama Suami/Istri</label><br>
                  <input type="text" class="span8" name="nama_suami_istri" pattern="^[_a-znA-Z]{1,}$" maxlength="25" />
              </div>
              <div class="formSep">
                <label for="s_mailer">NIP Suami/Istri</label><br>
                  <input type="text" class="form-control span8" name="nip_suami_istri" value="" pattern="^[0-9]{1,}$" maxlength="25" />
              </div>
              <div class="formSep">
                <label for="s_mailer">Pekerjaan Suami/Istri</label><br>
                  <input type="text" class="span8" name="pekerjaan_suami_istri" pattern="^[_A-Z a-z]{1,}$" maxlength="30" required/>
              </div>
              <div class="formSep">
                <label for="s_mailer">TMT PNS</label><br>
                <input type="date" class="span8" name="tmt_pns"  pattern="^[_A-Z a-z]{1,}$" max= <?php echo date('Y-m-d'); ?> />
              </div>
              <div class="formSep">
                <label for="s_mailer">Lisensi Kepala Sekolah</label><br>
                <input type="text" class="span8" name="lisensi_kepala_sekolah"  pattern="^[_A-Z a-z 0-1 .\]{1,}$" maxlength="30" />
              </div>
              <div class="formSep">
                <label for="s_mailer">NPWP</label><br>
                <input type="text" class="span8" name="npwp"  pattern="^[_A-Z a-z 0-1 .\]{1,}$" maxlength="30" required/>
              </div>
              <div class="formSep">
                <label for="s_mailer">Pendidikan Terakhir</label><br>
                <select name="pendidikan_terakhir" class="span6" required>
                  <option value="SMA / Sederajat">SMA / Sederajat</option>
                  <option value="D1">D1</option>
                  <option value="D2">D2</option>
                  <option value="D3">D3</option>
                  <option value="S1">S1</option>
                  <option value="S2">S2</option>
                  <option value="S3">S3</option>
                </select>
              </div>
              <div class="formSep">
                <label for="s_mailer">Penugasan</label><br>
                <input type="text" class="span8" name="penugasan"  pattern="^[_A-Z a-z]{1,}$" maxlength="20" />
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
