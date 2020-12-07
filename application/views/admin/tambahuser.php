
<!-- breadcrumbs -->
<div class="container">
    <ul id="breadcrumbs">

      <li><a href="<?php echo base_url();?>index.php/admin/home"><i class="icsw16-home"></i></a></li>
      <li><a href="javascript:history.back();">Data Pengguna</i></a></li>
        <li><span>Tambah Pengguna...</span></li>

    </ul>
</div>
<!-- main content -->
<div class="container">
  <div class="row-fluid">
    <div class="col-md-5 col-md-offset-3">
      <div class="w-box w-box-blue">
        <div class="w-box-header">
          <h4>Tambah Pengguna</h4>
          <i class="icsw16-settings icsw16-white pull-right"></i>
        </div>
        <div class="w-box-content cnt_a">
          <div class="row-fluid">
            <form id="validate_field_types" data-toggle="validator" action="<?php echo base_url(). 'index.php/admin/home/tambah'; ?>" method="post" >
            <div class="span12">
              <div class="formSep">
                <label for="s_mailer">Nama pengguna</label><br>
                  <input type="text" class="form-control span8" name="nama" pattern="^[_A-Z a-z]{1,}$" maxlength="25" required/>
              </div>
              <div class="formSep">
                <label for="s_mailer">Email</label><br>
                <input type="text" name="email" class="form-control span8" pattern="^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$" required>
              </div>
              <div class="formSep">
                <label for="s_mailer">Password</label><br>
                <input type="password" name="password" class="form-control span8" pattern="^[_A-Z a-z 0-9]{1,}$" maxlength="25" required><br/>
              </div>
              <div class="formSep">
                <label for="s_mailer">Bagian</label><br>
                <select name="level" required>
                  <option>Admin</option>
                  <option>Kepala Dinas</option>
                  <option>UPTD</option>
                  <option>Bag. Program</option>
                </select>
              </div>
              <div class="formSep">
                <label for="s_mailer">Wilayah</label><br>
                <select name="wilayah"  required>
                  <option value="Dinas Pendidikan KBB">Dinas Pendidikan KBB</option>
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
