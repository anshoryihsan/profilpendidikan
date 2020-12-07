
<!-- breadcrumbs -->
<div class="container">
  <ul id="breadcrumbs">
    <li><a href="<?php echo base_url();?>index.php/upt/home"><i class="icsw16-home"></i></a></li>
    <li><a href="javascript:history.back();">Kelola Profil Sekolah</i></a></li>
    <li><a href="#">Profil Sekolah</i></a></li>
    <li><span>Data peserta didik...</span></li>
  </ul>
</div>
<!-- main content -->
<div class="container">
  <div class="row-fluid">
    <div class="span12">
      <div class="w-box">
        <div class="w-box-header">
          <h4>Profil Sekolah</h4>
            <?php echo $this->session->flashdata('msg'); echo $this->session->flashdata('suksess'); ?>
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
        <li class="active"><span class="ptip_s" title="Peserta Didik (active)">Peserta Didik</span></li>
        <li><?php foreach ($isi as $row): endforeach;?><a href="<?=base_url();?>index.php/upt/Prasarana/detailprasarana?idnss=<?php echo $row->id_skolah; ?>" class="ptip_s" title="Peserta Didik">Prasarana</a></li>
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
          <h4>Data Peseta Didik</h4>
        </div>
        <div class="w-box-content table-responsive">
          <a href="<?=base_url();?>index.php/upt/Peserta_didik/tambah_peserta_didik?idskolah=<?php echo $row->id_skolah?>"><center><input type="button" class="btn-link" name="" value="Tambah Pesera Didik"></center></a>
          <table  id="form" class="table table-striped table-bordered nowrap" cellspacing="0" width="100%">
            <thead>
              <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Jenis Kelamin</th>
                <th>NIS</th>
                <th>NISN</th>
                <th>Tempat Lahir</th>
                <th>Tanggal Lahir</th>
                <th>Agama</th>
                <th>Kebutuhan Kusus</th>
                <th>Alamat</th>
                <th>RT</th>
                <th>RW</th>
                <th>Nama Dusun</th>
                <th>Desa/kelurahan</th>
                <th>Kode Pos</th>
                <th>Kecamatan</th>
                <th>Jenis Tinggal</th>
                <th>Alat Transportasi</th>
                <th>Nomor Telepon</th>
                <th>Nomor Handphone</th>
                <th>Email</th>
                <th>Terima KPS</th>
                <th>Nomor KPS</th>
                <th>Nama Ayah</th>
                <th>Tahun Lahir Ayah</th>
                <th>Pendidikan Ayah</th>
                <th>Pekerjaan Ayah</th>
                <th>Penghasilan Ayah</th>
                <th>Nama Ibu</th>
                <th>Tahun Lahir Ibu</th>
                <th>Pendidikan Ibu</th>
                <th>Pekerjaan Ibu</th>
                <th>Penghasilan Ibu</th>
                <th>Nama Wali</th>
                <th>Tahun Lahir Wali</th>
                <th>Pendidikan Wali</th>
                <th>Pekerjaan Wali</th>
                <th>Penghasilan Wali</th>
                <th>Rombel</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              <?php
              $no = 0;
                foreach ($isi as $row):
                  $no=$no+1;
              ?>

              <tr>
              <td><?php echo $no; ?> </td>
                <td><?php echo $row->nama; ?></td>
                <td><?php echo $row->jenis_kelamin; ?></td>
                <td><?php echo $row->nik; ?></td>
                <td><?php echo $row->nisn; ?></td>
                <td><?php echo $row->tempat_lahir; ?></td>
                <td><?php echo $row->tanggal_lahir; ?></td>
                <td><?php echo $row->agama; ?></td>
                <td><?php echo $row->kebutuhan_khusus; ?></td>
                <td><?php echo $row->alamat; ?></td>
                <td><?php echo $row->rt; ?></td>
                <td><?php echo $row->rw; ?></td>
                <td><?php echo $row->nama_dusun; ?></td>
                <td><?php echo $row->desa_kelurahan; ?></td>
                <td><?php echo $row->kode_pos; ?></td>
                <td><?php echo $row->kecamatan; ?></td>
                <td><?php echo $row->jenis_tinggal; ?></td>
                <td><?php echo $row->alat_transportasi; ?></td>
                <td><?php echo $row->nomor_telepon; ?></td>
                <td><?php echo $row->nomor_handphone; ?></td>
                <td><?php echo $row->email; ?></td>
                <td><?php echo $row->terima_kps; ?></td>
                <td><?php echo $row->nomor_kps; ?></td>
                <td><?php echo $row->nama_ayah; ?></td>
                <td><?php echo $row->tahun_lahir_ayah; ?></td>
                <td><?php echo $row->pendidikan_ayah; ?></td>
                <td><?php echo $row->pekerjaan_ayah; ?></td>
                <td><?php echo $row->penghasilan_ayah; ?></td>
                <td><?php echo $row->nama_ibu; ?></td>
                <td><?php echo $row->tahun_lahir_ibu; ?></td>
                <td><?php echo $row->pendidikan_ibu; ?></td>
                <td><?php echo $row->pekerjaan_ibu; ?></td>
                <td><?php echo $row->penghasilan_ibu; ?></td>
                <td><?php echo $row->nama_wali; ?></td>
                <td><?php echo $row->tahun_lahir_wali; ?></td>
                <td><?php echo $row->pendidikan_wali; ?></td>
                <td><?php echo $row->pekerjaan_wali; ?></td>
                <td><?php echo $row->pengasilan_wali; ?></td>
                <td><?php echo $row->rombel; ?></td>
                <td>
                    <div class="span3">
                      <a href="<?=base_url();?>index.php/upt/Peserta_didik/ubah?idpeserta=<?php echo $row->id_peserta; ?>">
                        <input type="button" name="" value="Ubah">
                      </a>
                    </div>
                    <div class="span3">
                      <a href="<?=base_url();?>index.php/upt/Peserta_didik/delete?idpeserta=<?php echo $row->id_peserta;?>&idskolah=<?php echo $row->id_skolah; ?>" onclick="return confirm ('Anda akan menghapus data <?php echo $row->nama;?> ?')">
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
