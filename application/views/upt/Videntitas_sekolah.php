
<!-- breadcrumbs -->
<div class="container">
    <ul id="breadcrumbs">
      <li><a href="<?php echo base_url();?>index.php/upt/home"><i class="icsw16-home"></i></a></li>
      <li><a href="#">Kelola Profil Sekolah</i></a></li>
    </ul>
</div>
<!-- main content -->
<div class="container">
  <div class="row-fluid">
    <div class="span12 blog_page">
        <div class="blog_content">
          <table  id="form" class="table table-striped table-bordered nowrap" cellspacing="0" width="100%">
            <thead>
              <tr>
                <th>No</th>
                <th>Nama Sekolah</th>
                <th>NSS</th>
                <th>NPSN</th>
                <th>Status Sekolah</th>
                <th>Bentuk Pendidikan</th>
                <th>Alamat</th>
                <th>Rt</th>
                <th>Rw</th>
                <th>Nama Dusun</th>
                <th>Desa/Kelurahan</th>
                <th>Kode Pos</th>
                <th>Kecamatan</th>
                <th>Kabupaten Kota</th>
                <th>Propinsi</th>
                <th>No Telepon</th>
                <th>No Fax</th>
                <th>Email</th>
                <th>Website</th>
                <th>SK Pendirian Sekolah</th>
                <th>Tanggal SK Pendirian</th>
                <th>SK Izin Oprasional</th>
                <th>Tanggal SK Izin Operasional</th>
                <th>SK Akreditasi</th>
                <th>Tanggal Sk Akreditasi</th>
                <th>Nama Bank</th>
                <th>Cabang/KCP/Unit</th>
                <th>Nomor Rekening</th>
                <th>Reening Atas Nama</th>
                <th>Nama Kepala Sekolah</th>
                <th>aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $no = 0;
                foreach ($isi as $row):
                  $no=$no+1;
              ?>

              <tr>
                <td><?php echo $no; ?></td>
                <td>
                  <a href="<?=base_url();?>index.php/upt/Profil/profilsekolah?idnss=<?php echo $row->id_skolah; ?> ">
                  <?php echo $row->nama_sekolah; ?>

                  </a>
                </td>
                <td><?php echo $row->nss; ?></td>
                <td><?php echo $row->npsn; ?></td>
                <td><?php echo $row->status_sekolah; ?></td>
                <td><?php echo $row->bentuk_pndidikan; ?></td>
                <td><?php echo $row->alamat; ?></td>
                <td><?php echo $row->rt; ?></td>
                <td><?php echo $row->rw; ?></td>
                <td><?php echo $row->nama_dusun; ?></td>
                <td><?php echo $row->desa_kelurahan; ?></td>
                <td><?php echo $row->kode_pos; ?></td>
                <td><?php echo $row->kecamatan; ?></td>
                <td><?php echo $row->kabupaten_kota; ?></td>
                <td><?php echo $row->propinsi ; ?></td>
                <td><?php echo $row->no_telepon ; ?></td>
                <td><?php echo $row->no_fax; ?></td>
                <td><?php echo $row->email; ?></td>
                <td><?php echo $row->website; ?></td>
                <td><?php echo $row->sk_pendirian_sekolah; ?></td>
                <td><?php echo $row->tanggal_sk_pendirian; ?></td>
                <td><?php echo $row->sk_izin_operasional; ?></td>
                <td><?php echo $row->tanggal_sk_izin_operasional; ?></td>
                <td><?php echo $row->sk_akreditasi; ?></td>
                <td><?php echo $row->tanggal_sk_akreditasi; ?></td>
                <td><?php echo $row->nama_bank; ?></td>
                <td><?php echo $row->cabang_kcp_unit; ?></td>
                <td><?php echo $row->nomor_rekening; ?></td>
                <td><?php echo $row->rekening_atas_nama; ?></td>
                <td><?php echo $row->nama_kepala_sekolah; ?></td>
                <td>
                  <a href="<?=base_url();?>index.php/upt/Profil/profilsekolah?idnss=<?php echo $row->id_skolah; ?> ">
                    <input type="button" name="" value="Detail"></a>
                  </a>
                  <a href="<?=base_url();?>index.php/upt/Identias_sekolah/ubah?ididentitas=<?php echo $row->id_skolah; ?>">
                    <input type="button" name="" value="Ubah"></a>

                  <a href="<?=base_url();?>index.php/upt/Identias_sekolah/delete?ididentitas=<?php echo $row->id_skolah; ?>" onclick="return confirm ('Seluruh data PTK, Peserta Didik dan Prasarana <?php echo $row->nama_sekolah;?> akan terhapus. Apakah anda ingin menghapus data sekolah <?php echo $row->nama_sekolah;?> ?')">
                    <input type="button" name="" value="Hapus" class="btn-danger">
                  </a>
          <?php endforeach; ?>
                </td>
            </tr>
            </tbody>
          </table>
        </div>
    </div>
  </div>
  <div class="footer_space"></div>
</div>
