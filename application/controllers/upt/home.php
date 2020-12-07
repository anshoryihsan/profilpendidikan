<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
//panggil library spout
	require_once APPPATH.'/third_party/spout/src/Spout/Autoloader/autoload.php';
		use Box\Spout\Reader\ReaderFactory;
		use Box\Spout\Common\Type;

class home extends CI_Controller {
	function __construct() 	{
		parent::__construct();
		//Panggil Model
		$this->load->model('upt/mhome');
	}
	public function index() {
		$bntk = $this->input->post('bentuk_pndidikan');
		$thn = $this->input->post('smt');
		$sess_wilayah = $this->session->userdata('wilayah');
		$data['isi'] = $this->mhome->dataidentitas($sess_wilayah);

		$this->load->view('upt/header',$data);
		$this->load->view('upt/vhome',$data);
		$this->load->view('upt/footer',$data);
	}//endfunction index
	public function bacaexcel() {
		//buat taun ajaran & id
		$ns = $this->input->post('nss');
		$taun=date("Y");
		$bulan=date("m");
		if ($bulan < 7) {
		  $smester="Genap";
		  $ajaran = strtotime('-1 year', strtotime($taun));
		  $ajaran = date('Y', $ajaran);
		  $smt = "$ajaran / $taun $smester";
			$cd = "gp$taun";
		}
		else {
		  $smester="Ganjil";
		  $ajaran = strtotime('1 year', strtotime($taun));
		  $ajaran = date('Y', $ajaran);
		  $smt = "$taun / $ajaran $smester";
			$cd = "gp$taun";
		}
		//$id="$cd$ns";
		$a="$cd";
		if (!empty($_FILES['file']['name'])) {
			//cekformatfile
			$pathinfo = pathinfo($_FILES["file"]["name"]);
			// cek file extension xlsx, xls dan juga cek file yang tidak kosong
			if (($pathinfo['extension']=='xlsx' || $pathinfo['extension']=='xls') && $_FILES['file']['size']>0)	{

				//temporary file_name
				$inputFileName = $_FILES['file']['tmp_name'];
				//bacaflieexcel dengan objek readfactory
				$reader = ReaderFactory::create(Type::XLSX);
				//openfile
				$reader->open($inputFileName);
				$reader->setShouldFormatDates(true); // this is to be able to copy dates

				foreach ($reader->getsheetIterator() as $sheetIndex => $sheet) {
					if ($sheet->getName() === 'Identitas Sekolah' ) {
						foreach ($sheet->getRowIterator() as $row) {

							$sembunyikan =$row[0];
							if ($sembunyikan === 'Identitas Sekolah :' || $sembunyikan === ':') {
								continue;
							}
							else {
								$b = $row[3];
								$id="$a$b";
								$data = array(
									"id_skolah" => $id,
									"nama_sekolah" => $row[1],
									"nss" => $row[2],
									"npsn" => $row[3],
									"status_sekolah" => $row[4],
									"bentuk_pndidikan" => $row[5],
									"alamat" => $row[6],
									"rt" => $row[7],
									"rw" => $row[8],
									"nama_dusun" => $row[9],
									"desa_kelurahan" => $row[10],
									"kode_pos" => $row[11],
									"kecamatan" => $row[12],
									"kabupaten_kota" => $row[13],
									"propinsi" => $row[14],
									"no_telepon" => $row[15],
									"no_fax" => $row[16],
									"email" => $row[17],
									"website" => $row[18],
									"sk_pendirian_sekolah" => $row[19],
									"tanggal_sk_pendirian" => $row[20],
									"sk_izin_operasional" => $row[21],
									"tanggal_sk_izin_operasional" => $row[22],
									"sk_akreditasi" => $row[23],
									"tanggal_sk_akreditasi" => $row[24],
									"nama_bank" => $row[25],
									"cabang_kcp_unit" => $row[26],
									"nomor_rekening" => $row[27],
									"rekening_atas_nama" => $row[28],
									"nama_kepala_sekolah" => $row[29],
									"th_ajaran" => $smt
								);
									$this->db->from('tb_peserta_didik')->where('id_skolah',$id);
							    $query = $this->db->get();
							    if ($query->num_rows() > 0) {
										$this->session->set_flashdata('msg','<script>alert("Maaf terdapat duplikat data: Mohon cek file yang anda upload!")</script>');
										//<div class="alert alert-error span12"><a data-dismiss="alert" class="close">×</a><strong>Lorem ipsum!</strong> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris vitae tristique erat.</div>
							    	redirect('upt/home');
							    }
									else {
 									$this->mhome->input_data_identitas_sekolah($data);
									}
							}
							break;
						}
					}
					if ($sheet->getName() === 'Data PTK') {
						foreach ($sheet->getRowIterator() as $sheetIndex => $row) {

							$sembunyikan = $row[0];
							if ($sembunyikan === 'Pendidik dan Tenaga Kependidikan :' || $sembunyikan === 'Nama') {
								continue;
							}
							else{
								$data = array(
									"nama" => $row[0],
									"jenis_kelamin" => $row[1],
									"tempat_lahir" => $row[2],
									"tanggal_lahir" => $row[3],
									"nik" => $row[4],
									"nip" => $row[5],
									"nuptk" => $row[6],
									"jenis_ptk" => $row[7],
									"setatus_pegawai" => $row[8],
									"agama" => $row[9],
									"alamat" => $row[10],
									"rt" => $row[11],
									"rw" => $row[12],
									"dusun" => $row[13],
									"desa_kelurahan" => $row[14],
									"kode_pos" => $row[15],
									"kecamatan" => $row[16],
									"nomor_telepon" => $row[17],
									"nomor_hp" => $row[18],
									"email" => $row[19],
									"sk_cpns" => $row[20],
									"tanggal_cpns" => $row[21],
									"sk_pengangkatan" => $row[22],
									"tmt_pengangkatan" => $row[23],
									"lembaga" => $row[24],
									"sumber_gaji" => $row[25],
									"nama_ibu_kandung" => $row[26],
									"status_perkawinan" => $row[27],
									"nama_suami_istri" => $row[28],
									"nip_suami_istri" => $row[29],
									"pekerjaan_suami_istri" => $row[30],
									"tmt_pns" => $row[31],
									"lisensi_kepala_sekolah" => $row[32],
									"npwp" => $row[33],
									"pendidikan_terakhir" => $row[34],
									"penugasan" => $row[35],
									"id_skolah" => $id,
									"th_ajaran" => $smt,
								);
							$this->mhome->input_data_ptk($data);
							}
						}
					}
					if ($sheet->getName() === 'Data Peserta Didik') {
						foreach ($sheet->getRowIterator() as $sheetIndex => $row) {

							$sembunyikan = $row[0];
							if ($sembunyikan === 'Data Peserta Didik :' || $sembunyikan === 'Nama') {
								continue;
							}
							else{
								$data = array(
									"nama" => $row[0],
									"jenis_kelamin" => $row[1],
									"nik" => $row[2],
									"nisn" => $row[3],
									"tempat_lahir" => $row[4],
									"tanggal_lahir" => $row[5],
									"agama" => $row[6],
									"kebutuhan_khusus" => $row[7],
									"alamat" => $row[8],
									"rt" => $row[9],
									"rw" => $row[10],
									"nama_dusun" => $row[11],
									"desa_kelurahan" => $row[12],
									"kode_pos" => $row[13],
									"kecamatan" => $row[14],
									"jenis_tinggal" => $row[15],
									"alat_transportasi" => $row[16],
									"nomor_telepon" => $row[17],
									"nomor_handphone" => $row[18],
									"email" => $row[19],
									"terima_kps" => $row[20],
									"nomor_kps" => $row[21],
									"nama_ayah" => $row[22],
									"tahun_lahir_ayah" => $row[23],
									"pendidikan_ayah" => $row[24],
									"pekerjaan_ayah" => $row[25],
									"penghasilan_ayah" => $row[26],
									"nama_ibu" => $row[27],
									"tahun_lahir_ibu" => $row[28],
									"pendidikan_ibu" => $row[29],
									"pekerjaan_ibu" => $row[30],
									"penghasilan_ibu" => $row[31],
									"nama_wali" => $row[32],
									"tahun_lahir_wali" => $row[33],
									"pendidikan_wali" => $row[34],
									"pekerjaan_wali" => $row[35],
									"pengasilan_wali" => $row[36],
									"rombel" => $row[37],
									"id_skolah" => $id,
									"th_ajaran" => $smt,
								);
							}
							$this->mhome->input_data_peserta_didik($data);
						}

					}
					if ($sheet->getName() === 'Data Prasarana') {
						foreach ($sheet->getRowIterator() as $sheetIndex => $row) {
							$sembunyikan = $row[0];
							if ($sembunyikan === 'Data Prasarana :' || $sembunyikan === 'Jenis Prasarana' || $sembunyikan === '* Nilai yang tercantum diatas adalah bobot kerusakan prasarana tersebut' ) {
								continue;
							}
							else {
								$data = array(
									"jenis_prasarana" => $row[0],
									"nama" => $row[1],
									"panjang" => $row[2],
									"lebar" => $row[3],
									"status_kepemilikan" => $row[4],
									"penutup_atap" => $row[5],
									"rangka_atap" => $row[6],
									"lisplang_talang" => $row[7],
									"rangka_plafon" => $row[8],
									"penutup_plafon" => $row[9],
									"cat_plafon" => $row[10],
									"kolom_ringbalok" => $row[11],
									"bata_dinding" => $row[12],
									"cat_dinding" => $row[13],
									"kusen" => $row[14],
									"daun_pintu" => $row[15],
									"daun_jendela" => $row[16],
									"struktur_bawah" => $row[17],
									"penutup_lantai" => $row[18],
									"pondasi" => $row[19],
									"sloop" => $row[20],
									"listrik" => $row[21],
									"air_hujan_rambatan" => $row[22],
									"id_skolah" => $id,
									"th_ajaran" => $smt,
								);
							}
							$this->mhome->input_data_prasarana($data);
						}
						break;
					}
				}//endforenc
				$reader->close();
				echo "Peak memory:", (memory_get_peak_usage(true) / 1024 / 1024), " MB" ,"<br>";
			}//endifextension
			$this->session->set_flashdata('suksess','<script>alert("Suksess: data berhasil di simpan!")</script>');
			redirect('upt/home');
		}//endifcekfile
		else
		{
			redirect('upt/home');
		}

	}//endfunction
}//endclass
?>
