<?php defined('BASEPATH') or exit ('No direct script access allowed');

class C_login extends CI_Controller
{
    public function index(){
      $d['title'] = 'Masuk ke dalam dasboard executive &minus; anshoryihsan';
      $d['judul'] = 'login multi user CI & Mysql';
      $this->load->view('home',$d);
    }
    function masuk(){
      $email = $this->input->post('email');
      $password = $this->input->post('password');

      $cek = $this->M_login->cek($email, $password);
      if ($cek->num_rows()==1){
        foreach ($cek->result() as $data) {
          $sess_data['id_user']=$data->id_user;
          $sess_data['nama']=$data->nama;
          $sess_data['email']=$data->email;
          $sess_data['password']=$data->password;
          $sess_data['level']=$data->level;
          $sess_data['wilayah']=$data->wilayah;
          $sess_data['login_status']=TRUE;
          $this ->session->set_userdata($sess_data);
        }
        if($this->session->userdata('level')=='UPTD') {
          redirect('upt/home');
        }
        elseif ($this->session->userdata('level')=='Admin') {
          redirect('admin/home');
        }
        elseif ($this->session->userdata('level')=='Bag. Program') {
          redirect('masterdata/home');
        }
        elseif ($this->session->userdata('level')=='Kepala Dinas') {
          redirect('kepaladinas/home');
        }
      }
      else {
        $this->session->set_flashdata('pesan','<script>alert("Gagal Login: Cek username , password!")</script>');
			redirect('C_login');

      }
    }
  function keluar()
	{
		$this->session->sess_destroy();
		redirect('C_login');
	}
}

?>
