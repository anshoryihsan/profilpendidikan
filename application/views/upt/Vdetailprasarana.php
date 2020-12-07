
<!-- breadcrumbs -->
<div class="container">
  <ul id="breadcrumbs">
    <li><a href="<?php echo base_url();?>index.php/upt/home"><i class="icsw16-home"></i></a></li>
    <li><a href="javascript:history.back()">Kelola Profil Sekolah</i></a></li>
    <li><a href="#">Profil Sekolah</i></a></li>
    <li><span>Data Prasarana...</span></li>
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
          <?php foreach ($isiprofil as $row):?>
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
        <li><?php foreach ($isi as $row): endforeach;?><a href="<?=base_url();?>index.php/upt/PTK/detailptk?idnss=<?php echo $row->id_skolah; ?>" class="ptip_s" title="PTK">PTK</a></li>
        <li><?php foreach ($isi as $row): endforeach;?><a href="<?=base_url();?>index.php/upt/Peserta_didik/detailpesertadidik?idnss=<?php echo $row->id_skolah; ?>" class="ptip_s" title="Peserta Didik">Peserta Didik</a></li>
        <li class="active"><span class="ptip_s" title="Prasaana (active)">Prasarana</span></li>
        <!--[aktif]<li class="active"><span class="ptip_s" title="Statistics (active)"><i class="icsw16-graph"></i></span></li>-->
      </ul>
    </nav>
  </div>
</div>
<!-- main content -->
<div class="container">
  <div class="row-fluid">
    <div class="span12">
      <div class="w-box">
        <div class="w-box-header">
          <h4>Data Prasarana</h4>
        </div>
        <div class="w-box-content table-responsive">
          <a href="<?=base_url();?>index.php/upt/Prasarana/tambah_prasarana?idskolah=<?php echo $row->id_skolah?>"><center><input type="button" class="btn-link" name="" value="Tambah Prasarana"></center></a>
          <table  id="form" class="table table-striped table-bordered nowrap" cellspacing="0" width="100%">
            <thead>
              <tr>
                <th>No</th>
                <th>Jenis_prasarana</th>
                <th>Nama</th>
                <th>Panjang</th>
                <th>Lebar</th>
                <th>Status Kepemilikan</th>
                <th>Penutup Atap</th>
                <th>Rangka Atap</th>
                <th>Lisplang Talang</th>
                <th>Rangka Plafon</th>
                <th>Penutup Plafon</th>
                <th>Cat Plafon</th>
                <th>Kolom Ring Balok</th>
                <th>Bata Dinding</th>
                <th>Cat Dinding</th>
                <th>Kusen</th>
                <th>Daun Pintu</th>
                <th>Daun Jendela</th>
                <th>Struktur Bawah</th>
                <th>Penutup Lantai</th>
                <th>Pondasi</th>
                <th>Sloop</th>
                <th>Listrik</th>
                <th>Air Hujan Rambatan</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              <?php
              $no = 0;
                foreach ($isi as $row):
                  $no=$no+1;?>
              <tr>
              <td><?php echo $no; ?></td>
                <td><?php echo $row->jenis_prasarana; ?></td>
                <td><?php echo $row->nama; ?></td>
                <td><?php echo $row->panjang; ?></td>
                <td><?php echo $row->lebar; ?></td>
                <td><?php echo $row->status_kepemilikan; ?></td>
                <td><?php echo $row->penutup_atap; ?></td>
                <td><?php echo $row->rangka_atap; ?></td>
                <td><?php echo $row->lisplang_talang; ?></td>
                <td><?php echo $row->rangka_plafon; ?></td>
                <td><?php echo $row->penutup_plafon; ?></td>
                <td><?php echo $row->cat_plafon; ?></td>
                <td><?php echo $row->kolom_ringbalok; ?></td>
                <td><?php echo $row->bata_dinding; ?></td>
                <td><?php echo $row->cat_dinding; ?></td>
                <td><?php echo $row->kusen; ?></td>
                <td><?php echo $row->daun_pintu; ?></td>
                <td><?php echo $row->daun_jendela; ?></td>
                <td><?php echo $row->struktur_bawah; ?></td>
                <td><?php echo $row->penutup_lantai; ?></td>
                <td><?php echo $row->pondasi; ?></td>
                <td><?php echo $row->sloop; ?></td>
                <td><?php echo $row->listrik; ?></td>
                <td><?php echo $row->air_hujan_rambatan; ?></td>
                <td>
                  <div class="span3">
                    <a href="<?=base_url();?>index.php/upt/Prasarana/ubah?idprasarana=<?php echo $row->id_prasarana; ?>">
                      <input type="button" name="" value="Ubah">
                    </a>
                  </div>
                  <div class="span3">
                    <a href="<?=base_url();?>index.php/upt/Prasarana/delete?idprasarana=<?php echo $row->id_prasarana;?>&idskolah=<?php echo $row->id_skolah; ?>" onclick="return confirm ('Anda akan menghapus data <?php echo $row->nama;?> ?')">
                      <input type="button" name="" value="Hapus" class="btn-danger">
                    </a>
                  </div>
                </td>
          <?php endforeach; ?>
            </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  <div class="footer_space"></div>
</div>
