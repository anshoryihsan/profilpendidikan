
<?php
  $user_level = $this->session->userdata('level');
  $status = $this->session->userdata('login_status');
  if($user_level!="UPTD" && $status!==false){
    redirect(base_url());
  }
?>
<!-- breadcrumbs -->
  <div class="container">
    <ul id="breadcrumbs">
      <li><a href="<?php echo base_url();?>index.php/upt/home"><i class="icsw16-home"></i></a></li>
    </ul>
  </div>
<!-- main content -->

<?php
$tgl=date("Y");
$as = strtotime('1 year', strtotime($tgl));
$as = date('Y', $as);
//echo $as;

?>
<?php
$bulan=date("m");
$taun=date("Y");
if ($bulan < 7) {
  $smester="Genap";
  $ajaran = strtotime('-1 year', strtotime($taun));
  $ajaran = date('Y', $ajaran);
  $smt = "$ajaran / $taun $smester";
}
else {
  $smester="Ganjil";
  $ajaran = strtotime('1 year', strtotime($taun));
  $ajaran = date('Y', $ajaran);
  $smt = "$taun / $ajaran $smester";
}
//echo $smt;
?>
  <div class="container">
    <div class="row-fluid">
      <div class="col-md-4 col-md-offset-4">
        <div class="w-box w-box-blue">
          <div class="w-box-header">
            <h4>silahkan pilih file dan upload</h4>
          <i class="icsw16-cloud-upload icsw16-white pull-right"></i>
          </div>
          <div class="w-box-content cnt_a">
            <form role="form" action="<?php echo base_url();?>index.php/upt/home/bacaexcel" method="post" enctype="multipart/form-data">
              <?php echo $this->session->flashdata('msg'); echo $this->session->flashdata('suksess'); ?>
              <div class="control-group">
                <input  type="file" name="file" value="" required>
              </div>
              <div class="control-group">
                <input type="submit" name="" value="upload" class="col-md-offset-9 btn-beoro-3">
              </div>
              </center>
            </form>
          </div>
        </div>
      </div>
      <div class="span7">
        <div class="blog_content pull-left" id="n_combobox">
        </div>
      </div>
    </div>
    <div class="footer_space"></div>
  </div>
