<?php
include "header.php";
  $user_level = $this->session->userdata('level');
  $status = $this->session->userdata('login_status');

  if($user_level!="admin" && $status!==false){
    redirect(base_url());
  }
?>
  <!-- breadcrumbs -->
            <div class="container">
                <ul id="breadcrumbs">
                    <li><a href="javascript:void(0)"><i class="icsw16-table"></i></a></li>
                    <li><a href="javascript:void(0)">Content</a></li>
                    <li><a href="javascript:void(0)">Article: Lorem ipsum dolor...</a></li>
                    <li><a href="javascript:void(0)">Comments</a></li>
                </ul>
            </div>
    <!-- main content -->
        <div class="container">
            <div class="row-fluid">
                <div class="span4">
                    <div class="w-box">
                        <div class="w-box-header">
                            <h4>Tambah User</h4>
                            <i class="icsw16-user-2 icsw16-white pull-right"></i>
                        </div>
                        <div class="w-box-content" method="post" action="<?php echo site_url();?>/admin/home/tambah">
                          <form id="validate_field_types">
                            <div class="formSep">
                              <table>
                                <tr>
                                  <td><label>Nama pengguna</label></td>
                                  <td>&middot; </td>
                                  <td><input type="text" value="" name="nama" placeholder="Nama Pengguna" title="Masukkan Nama" required/>
                                </tr>
                                <tr>
                                  <td>&middot;</td>
                                </tr>
                                <tr>
                                  <td><label>Email</label></td>
                                  <td>&middot; </td>
                                  <td><input type="text" name="email" placeholder="Email" pattern="^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$" required></td>
                                </tr>
                                <tr>
                                  <td>&middot;</td>
                                </tr>
                                <tr>
                                  <td><label>Password</label></td>
                                  <td>&middot; </td>
                                  <td><input type="password" name="password" placeholder="Password" required><br/></td>
                                </tr>
                                <tr>
                                  <td>&middot;</td>
                                </tr>
                                <tr>
                                  <td><label>Bagian</label></td>
                                  <td>&middot; </td>
                                  <td><input type="text" name="bagian" placeholder="bagian" required><br/></td>
                                </tr>
                                <tr>
                                  <td>&middot;</td>
                                </tr>
                                <tr>
                                  <td><label>Wilayah</label></td>
                                  <td>&middot; </td>
                                  <td>
                                    <select class="form-control" name="wilayah" required>
                                      <option value="" selected="pilih"></option>
                                      <option value="Dinas Pendidikan KBB">Dinas Pendidikan KBB</option>
                                      <option value="Padalarang">Padalarang</option>
                                      <option value="Ngamprah">Ngamprah</option>
                                      <option value="Batu Jajar">Batu Jajar</option>
                                     </select>
                                   </td>
                                </tr>
                                <tr>
                                  <td><input type="submit" class="btn-success" value="Simpan"/></td></form>
                                  <td><form method="post" action="<?php echo site_url(); ?>/admin/home/">
                                  <td><input class="btn-danger" type="submit" name="simpan" id="btn2" value="Batal"/></td>
                          </form></td>
                                </tr>
                              </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <div class="footer_space"></div>
    </div>
<!-- footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="span5">
                    <div>&copy; Your Company 2012</div>
                </div>
            </div>
        </div>
    </footer>
</body>
