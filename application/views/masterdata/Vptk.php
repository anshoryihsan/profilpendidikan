<!-- breadcrumbs -->
<div class="container">
  <ul id="breadcrumbs">
    <li><a href="<?php echo base_url();?>index.php/masterdata/home"><i class="icsw16-home"></i></a></li>
    <li><a href="<?php echo base_url();?>index.php/masterdata/Identitas_sekolah">Data Sekolah</i></a></li>
    <li><a href="#">Profil Sekolah</i></a></li>
    <li><span>Data PTK...</span></li>
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
        <li class="active"><span class="ptip_s" title="PTK (active)">PTK</span></li>
        <li><?php foreach ($isi as $row): endforeach;?><a href="<?=base_url();?>index.php/masterdata/Peserta_didik/detailpesertadidik?idnss=<?php echo $row->id_skolah; ?>" class="ptip_s" title="Peserta Didik">Peserta Didik</a></li>
        <li><?php foreach ($isi as $row): endforeach;?><a href="<?=base_url();?>index.php/masterdata/Prasarana/detailprasarana?idnss=<?php echo $row->id_skolah; ?>" class="ptip_s" title="Peserta Didik">Prasarana</a></li>
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
          <h4>Data Pendidik dan Tetenaga Kependidikan</h4>
        </div>
        <div class="w-box-content table-responsive">
          <a href="<?=base_url();?>index.php/masterdata/PTK/tambah?idskolah=<?php echo $row->id_skolah?>"><center><input type="button" class="btn-link" name="" value="Tambah PTK"></center></a>
          <table  id="form" class="table table-striped table-bordered nowrap" cellspacing="0" width="100%">
            <thead>
              <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Jenis Kelamin</th>
                <th>Tempat Lahir</th>
                <th>Tanggal Lahir</th>
                <th>NIK</th>
                <th>NIP</th>
                <th>NUPTK</th>
                <th>Jenis PTK</th>
                <th>Setatus Pegawai</th>
                <th>Agama</th>
                <th>Alamat</th>
                <th>RT</th>
                <th>RW</th>
                <th>Dusun</th>
                <th>Desa/kelurahan</th>
                <th>Kode Pos</th>
                <th>Kecamatan</th>
                <th>Nomor Telepon</th>
                <th>Nomor Handphone</th>
                <th>Email</th>
                <th>SK CPNS</th>
                <th>Tanggal CPNS</th>
                <th>SK Pengangkatan</th>
                <th>TMT Pengangkatan</th>
                <th>Lembaga</th>
                <th>Sumber Gaji</th>
                <th>Nama Ibu Kandung</th>
                <th>Status Perkawinan</th>
                <th>Nama Suami/Istri</th>
                <th>NIP Suami/Istri</th>
                <th>Pekerjaan Suami/Istri</th>
                <th>TMT PNS</th>
                <th>Lisensi Kepala Sekolah</th>
                <th>NPWP</th>
                <th>Pendidikan Terakhir</th>
                <th>Penugasan</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $no = 0;
                foreach ($isi as $row):
                  $no=$no+1;?>
              <tr>
                <td><?php echo $no; ?></td>
                <td><?php echo $row->nama; ?></td>
                <td><?php echo $row->jenis_kelamin; ?></td>
                <td><?php echo $row->tempat_lahir; ?></td>
                <td><?php echo $row->tanggal_lahir; ?></td>
                <td><?php echo $row->nik; ?></td>
                <td><?php echo $row->nip; ?></td>
                <td><?php echo $row->nuptk; ?></td>
                <td><?php echo $row->jenis_ptk; ?></td>
                <td><?php echo $row->setatus_pegawai; ?></td>
                <td><?php echo $row->agama; ?></td>
                <td><?php echo $row->alamat; ?></td>
                <td><?php echo $row->rt; ?></td>
                <td><?php echo $row->rw; ?></td>
                <td><?php echo $row->dusun; ?></td>
                <td><?php echo $row->desa_kelurahan; ?></td>
                <td><?php echo $row->kode_pos; ?></td>
                <td><?php echo $row->kecamatan; ?></td>
                <td><?php echo $row->nomor_telepon; ?></td>
                <td><?php echo $row->nomor_hp; ?></td>
                <td><?php echo $row->email; ?></td>
                <td><?php echo $row->sk_cpns; ?></td>
                <td><?php echo $row->tanggal_cpns; ?></td>
                <td><?php echo $row->sk_pengangkatan; ?></td>
                <td><?php echo $row->tmt_pengangkatan; ?></td>
                <td><?php echo $row->lembaga; ?></td>
                <td><?php echo $row->sumber_gaji; ?></td>
                <td><?php echo $row->nama_ibu_kandung; ?></td>
                <td><?php echo $row->status_perkawinan; ?></td>
                <td><?php echo $row->nama_suami_istri; ?></td>
                <td><?php echo $row->nip_suami_istri; ?></td>
                <td><?php echo $row->pekerjaan_suami_istri; ?></td>
                <td><?php echo $row->tmt_pns; ?></td>
                <td><?php echo $row->lisensi_kepala_sekolah; ?></td>
                <td><?php echo $row->npwp; ?></td>
                <td><?php echo $row->pendidikan_terakhir; ?></td>
                <td><?php echo $row->penugasan; ?></td>
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
