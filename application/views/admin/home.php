<!-- breadcrumbs -->
<div class="container">
    <ul id="breadcrumbs">
      <li><a href="<?php echo base_url();?>index.php/admin/home"><i class="icsw16-home"></i></a></li>
        <li><span>Daftar Pengguna...</span></li>
    </ul>
</div>
        <!-- main content -->
            <div class="container">
                <div class="row-fluid">
                    <div class="span12">
                        <div class="w-box">
                            <div class="w-box-header">
                                <h4>Daftar Pengguna</h4>
                                <i class="icsw16-user-2 icsw16-white pull-right"></i>
                            </div>
                            <div class="w-box-content cnt_a">
                                <div class="slidewrap">
                                    <ul class="slider" id="sliderName">
                                      <div>
                                        <a href="<?php echo site_url(); ?>/admin/home/tambahuser/ ">
                                        <input type="button" class="btn-small btn-info" name="" value="Tambah pengguna">
                                          </a>
                                      </div>
                                      <p><?=$this->session->flashdata('pesan')?></p>
                                      <div id="tabeluser">
                                        <table class="table table-bordered">
                                          <thead>
                                            <tr>
                                              <th id="autoUpdate">Nomor</th>
                                              <th>Nama</th>
                                              <th>E-Mail</th>
                                              <th>Password</th>
                                              <th>Bagian</th>
                                              <th>wilayah</th>
                                              <th>Aksi</th>
                                            </tr>
                                          </thead>
                                          <tbody>
                                            <?php
                                              $no=0;
                                              foreach ($isi as $row) :
                                                $no=$no+1;
                                            ?>

                                            <tr>
                                              <td id="autoUpdate"><?php echo $no; ?></td>
                                              <td><?php echo $row->nama; ?></td>
                                        			<td><?php echo $row->email; ?></td>
                                        			<td><?php echo $row->password; ?></td>
                                              <td><?php echo $row->level; ?></td>
                                              <td><?php echo $row->wilayah; ?></td>
                                              <td>
                                                <a href="<?=base_url();?>index.php/admin/home/ubah?uid=<?php echo $row->id_user; ?>">
                                                  <input type="button" class="btn-small btn-link" name="" value="ubah">
                                                </a>

                                                <a href="<?=base_url();?>index.php/admin/home/delete?uid=<?php echo $row->id_user; ?>" onclick="return confirm ('Menghapus <?php echo $row->nama;?>?')">
                                                  <input type="button" class="btn-smaall btn-danger" name="" value="hapus">
                                                </a>
                                              </td>
                                            <?php endforeach?>
                                          </tr>
                                          </tbody>
                                        </table>
                                      </div>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <div class="footer_space"></div>
        </div>
