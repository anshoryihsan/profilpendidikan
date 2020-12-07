
    <!-- breadcrumbs -->
    <div class="container">
      <ul id="breadcrumbs">
        <li><a href="<?php echo base_url();?>index.php/masterdata/home"><i class="icsw16-home"></i></a></li>
        <li><a href="#)">Data Sekolah</i></a></li>
        <li><a href="#">Profil Sekolah</i></a></li>
      </ul>
    </div>
    <!-- main content -->
    <div class="container">
      <div class="row-fluid">
        <div class="span12">
          <div class="w-box">
            <div class="w-box-header">
              <h4>Profil Sekolah</h4>
                <i class="icsw16-folder icsw16-white pull-right"></i>
            </div>
            <div class="w-box-content cnt_a user_profile">
              <div class="row-fluid">
              <?php foreach ($isi as $row):?>
                <div class="span4"><br/><br/><br/><br/><br/>
                  <h3 class="page-header" ><strong><?php echo $row->nama_sekolah;?></strong><br/>
                    <small>
                      <font class="small">
                        <i class="glyphicon glyphicon-road"></i>
                        <label><?php echo $row->alamat;?></label>
                        <label>Rt.<?php echo $row->rt;?></label>
                        <label>Rw.<?php echo $row->rw;?></label>
                        <label><?php echo $row->kecamatan;?></label>
                        <label><?php echo $row->propinsi;?></label>
                        <label>(<?php echo $row->kode_pos;?>)</label>
                      </font>
                    </small>
                  </h3>
                </div>
                <div class="span4">
                  <p class="formSep"><small class="muted">NSS :</small> <?php echo $row->nss;?></p>
                  <p class="formSep"><small class="muted">NPSN :</small> <?php echo $row->npsn;?></p>
                  <p class="formSep"><small class="muted">Status Sekolah :</small> <?php echo $row->status_sekolah;?></p>
                  <p class="formSep"><small class="muted">Nomor Telepon :</small> <?php echo $row->no_telepon;?></p>
                  <p class="formSep"><small class="muted">Nomor Fax :</small> <?php echo $row->no_fax;?></p>
                  <p class="formSep"><small class="muted">Email :</small> <?php echo $row->email;?></p>
                  <p class="formSep"><small class="muted">Website :</small> <?php echo $row->website;?></p>
                  <p class="formSep"><small class="muted">SK Pendirian Sekolah :</small> <?php echo $row->sk_pendirian_sekolah;?></p>
                  <p class="formSep"><small class="muted">Tanggal SK Pendirian :</small> <?php echo $row->tanggal_sk_pendirian;?></p>
                  <!--<p class="formSep"><small class="muted">Signature:</small> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce id dui et elit laoreet mattis. Ut pellentesque sollicitudin velit et rutrum. Morbi massa massa, tincidunt vel condimentum in, porta id quam. Ut sit amet libero eget risus ullamcorper hendrerit. Quisque sit amet dui mi.</p>-->
                </div>
                <div class="span4">
                  <p class="formSep"><small class="muted">SK Izin Operasional :</small> <?php echo $row->sk_izin_operasional;?></p>
                  <p class="formSep"><small class="muted">Tanggal SK Izin Operasional :</small> <?php echo $row->tanggal_sk_izin_operasional;?></p>
                  <p class="formSep"><small class="muted">SK Akreditasi :</small> <?php echo $row->sk_akreditasi;?></p>
                  <p class="formSep"><small class="muted">Tanggal Sk Akreditasi :</small> <?php echo $row->tanggal_sk_akreditasi;?></p>
                  <p class="formSep"><small class="muted">Nama Bank :</small> <?php echo $row->nama_bank;?></p>
                  <p class="formSep"><small class="muted">Cabang/KCP/Unit :</small> <?php echo $row->cabang_kcp_unit;?></p>
                  <p class="formSep"><small class="muted">Nomor Rekening :</small> <?php echo $row->nomor_rekening;?></p>
                  <p class="formSep"><small class="muted">Rekening Atas Nama :</small> <?php echo $row->rekening_atas_nama;?></p>
                  <p class="formSep"><small class="muted">Nama Kepala Sekolah :</small> <?php echo $row->nama_kepala_sekolah;?></p>
                  <!--<p class="formSep"><small class="muted">Signature:</small> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce id dui et elit laoreet mattis. Ut pellentesque sollicitudin velit et rutrum. Morbi massa massa, tincidunt vel condimentum in, porta id quam. Ut sit amet libero eget risus ullamcorper hendrerit. Quisque sit amet dui mi.</p>-->
                </div>
              <?php endforeach ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- menu sekolah -->
    <div class="container">
      <div class="">
        <nav class="nav-icons">
          <ul>
            <li><?php foreach ($isi as $row): endforeach;?><a href="<?=base_url();?>index.php/masterdata/PTK/detailptk?idnss=<?php echo $row->id_skolah; ?>" class="ptip_s" title="PTK">PTK</a></li>
            <li><?php foreach ($isi as $row): endforeach;?><a href="<?=base_url();?>index.php/masterdata/Peserta_didik/detailpesertadidik?idnss=<?php echo $row->id_skolah; ?>" class="ptip_s" title="Peserta Didik">Peserta Didik</a></li>
            <li><?php foreach ($isi as $row): endforeach;?><a href="<?=base_url();?>index.php/masterdata/Prasarana/detailprasarana?idnss=<?php echo $row->id_skolah; ?>" class="ptip_s" title="Peserta Didik">Prasarana</a></li>
            <!--[aktif]<li class="active"><span class="ptip_s" title="Statistics (active)"><i class="icsw16-graph"></i></span></li>-->
          </ul>
        </nav>
      </div>
    </div>
    <!-- main content -->


    <div class="footer_space"></div>
