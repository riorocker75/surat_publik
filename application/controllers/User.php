<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Controller {

	function __construct(){
		parent::__construct();
		date_default_timezone_set('Asia/Jakarta');

		$this->load->helper(array('url','dah_helper'));
		$this->load->model('m_dah');
		$this->load->library(array('user_agent','cart','form_validation','session'));
		if($this->session->userdata('status') != "login"){
			redirect(base_url());
		}
	}

	public function index(){
		$this->load->database();

	}

	function user_logout(){
		$this->session->sess_destroy();
		redirect(base_url());
	}

	function user_profil(){
		$this->load->database();
		$id = $this->session->userdata('user_id');
		$w = array(
			'id' => $id
			);
		$data['profil'] = $this->m_dah->edit_data($w,'user')->result();
		$this->load->view('cms/header');
		$this->load->view('cms/user_profil',$data);
		$this->load->view('cms/footer');
	}

	function edit_profil(){
		if($this->session->userdata('user_status') != "login"){
			redirect(base_url());
		}
		$this->load->database();
		$id = $this->session->userdata('user_id');
		$w = array(
			'id' => $id
			);
		$data['profil'] = $this->m_dah->edit_data($w,'user')->result();
		$this->load->view('cms/header');
		$this->load->view('cms/user_edit_profil',$data);
		$this->load->view('cms/footer');
	}

	function user_edit_profil_act(){
		if($this->session->userdata('user_status') != "login"){
			redirect(base_url());
		}

		$this->load->database();
		$id = $this->session->userdata('user_id');
		$nama = $this->input->post('nama');
		$email = $this->input->post('email');
		$alamat = $this->input->post('alamat');
		$provinsi = $this->input->post('provinsi');
		$kota = $this->input->post('kota');
		$kecamatan = $this->input->post('kecamatan');
		$kodepos = $this->input->post('kodepos');
		$telp = $this->input->post('telp');

		$this->form_validation->set_rules('nama','Nama','required');
		$this->form_validation->set_rules('email', 'Email','trim|required');
		$this->form_validation->set_rules('alamat','Alamat','required');
		$this->form_validation->set_rules('provinsi','provinsi','required');
		$this->form_validation->set_rules('kota','kota','required');
		$this->form_validation->set_rules('kecamatan','kecamatan','required');
		$this->form_validation->set_rules('kodepos','kodepos','required|is_numeric');
		$this->form_validation->set_rules('telp','telpon','required');

		if($this->form_validation->run()==false){
			$w = array(
				'id' => $id
				);
			$data['profil'] = $this->m_dah->edit_data($w,'user')->result();
			$this->load->view('cms/header');
			$this->load->view('cms/user_edit_profil',$data);
			$this->load->view('cms/footer');
		}else{
			$w = array(
				'id' => $id
				);
			$data = array(
				'nama' => $nama,
				'alamat' => $alamat,
				'provinsi' => $provinsi,
				'email' => $email,
				'telp' => $telp,
				'kota' => $kota,
				'kecamatan' => $kecamatan,
				'kodepos' => $kodepos
				);
			$this->m_dah->update_data($w,$data,'user');
			redirect(base_url().'user/?alert=update');
		}
	}


/*
-------------------------
Arsip surat
------------------------
*/

function arsip_surat(){
	$this->load->database();
	$id_penduduk=$this->session->userdata('penduduk_id');

	$data['surat_review']=$this->m_dah->pilih_surat($id_penduduk,'review','surat_mohon')->result();
	$data['surat_tolak']=$this->m_dah->pilih_surat($id_penduduk,'ditolak','surat_mohon')->result();
	$data['surat_terima']=$this->m_dah->pilih_surat_fix($id_penduduk,'diterima','surat_mohon')->result();
	
	$data['total_terima']=$this->m_dah->pilih_surat($id_penduduk,'diterima','surat_mohon')->num_rows();
	$data['total_tolak']=$this->m_dah->pilih_surat($id_penduduk,'ditolak','surat_mohon')->num_rows();
	$data['total_review']=$this->m_dah->pilih_surat($id_penduduk,'review','surat_mohon')->num_rows();
	

	$data['surat_lain']=$this->m_dah->pilih_surat_lain_semua($id_penduduk,'jenis_mohon')->result();

	
	$data['surat_lain_review']=$this->m_dah->pilih_surat_lain($id_penduduk,'review','jenis_mohon')->result();
	$data['surat_lain_tolak']=$this->m_dah->pilih_surat_lain($id_penduduk,'ditolak','jenis_mohon')->result();
	$data['surat_lain_terima']=$this->m_dah->pilih_surat_lain($id_penduduk,'diterima','jenis_mohon')->result();
	
	$data['total_lain_terima']=$this->m_dah->pilih_surat_lain($id_penduduk,'diterima','jenis_mohon')->num_rows();
	$data['total_lain_tolak']=$this->m_dah->pilih_surat_lain($id_penduduk,'ditolak','jenis_mohon')->num_rows();
	$data['total_lain_review']=$this->m_dah->pilih_surat_lain($id_penduduk,'review','jenis_mohon')->num_rows();
	
	$this->load->view('admin/v_header');
	$this->load->view('admin/data_opsi/v_arsip_user',$data);
	$this->load->view('admin/v_footer');	
}



/*
-------------------------
Pengajuan surat kk Baru
------------------------
*/
function mohon_kk_baru(){
	$this->load->database();
	$data['penduduk']=$this->m_dah->get_data('penduduk')->result();
	$id_user=$this->session->userdata('penduduk_id');
	
	$where_user=array(
		'id' => $id_user
	);
	$data['data_diri']=$this->m_dah->edit_data($where_user,'penduduk')->result();

	$this->load->view('admin/v_header');
	$this->load->view('admin/sesi_surat/x_kk_baru',$data);
	$this->load->view('admin/v_footer');

}	

function act_kk_baru(){
	$this->load->database();

	$nama_nik=$this->input->post('nama_nik');
	$no_kk=$this->input->post('no_kk');
	$kepala_keluarga=$this->input->post('kepala_keluarga');
	$jumlah_anggota=$this->input->post('jumlah_anggota');

	$id_user=$this->session->userdata('penduduk_id');

	$rand = rand(10000,99999);

	$jenis_surat="SK3B";
	$surat_mohon="SK3B-".$rand;

		$data_sr= array(
			'no_kk_lama' => $no_kk,
			'kepala_keluarga' => $kepala_keluarga,
			'list_anggota' => $nama_nik,
			'jlh_anggota' =>$jumlah_anggota,

			'penduduk_id' => $id_user,
			'tgl_diajukan' => date('Y-m-d'),
			'surat_mohon_id' => $surat_mohon,
			'status_surat' => "review"
		);
		$this->m_dah->insert_data($data_sr,'sr_kk_baru');
		$id_terakhir = $this->db->insert_id();			

		$data_sm= array(
			'penduduk_id' => $id_user,
			'tgl_diajukan' => date('Y-m-d'),
			'surat_mohon_id' => $surat_mohon,
			'jenis_surat' => $jenis_surat,
			'notif' => 1,
			'ket_surat' => "Pengajuan Pembuatan Kartu Keluarga Baru",
			'status_surat' => "review"
		);
		$this->m_dah->insert_data($data_sm,'surat_mohon');

		$config['upload_path'] = './upload/syarat/';
		$config['allowed_types'] = 'jpg|png|jpeg|pdf';
		$this->form_validation->set_rules('foto_kk', 'Foto Copy KK', 'required');
		
		if($_FILES["foto_kk"]["name"]){
			$rand1=rand(1000,9999);
			$config['file_name'] = $rand1.'_'.$_FILES['foto_kk']['name'];				
			$this->load->library('upload', $config);
			$foto_kk = $this->upload->do_upload('foto_kk');
			if (!$foto_kk){
				$error = array('error' => $this->upload->display_errors());
			}else{
				$foto_kk = $this->upload->data("file_name");
				$data = array('upload_data' => $this->upload->data());
				$this->m_dah->update_data(array('id' => $id_terakhir),array('foto_kopi_kk' => $foto_kk),'sr_kk_baru');			
			}
		
		}

	// end fotocopy kk

	if($_FILES["ktp"]["name"]){
			$rand2=rand(10000,99999);
			$config['file_name'] = $rand2.'_'.$_FILES['ktp']['name'];				
			$this->upload->initialize($config); //wajib di inisiasi ini kalau untuk mulitple upload file
			
			$ktp = $this->upload->do_upload('ktp');
			if (!$ktp){
				$error = array('error' => $this->upload->display_errors());
			}else{
				$ktp = $this->upload->data("file_name");
				$data = array('upload_data' => $this->upload->data());
				$this->m_dah->update_data(array('id' => $id_terakhir),array('foto_kopi_ktp' => $ktp),'sr_kk_baru');			
			}
	
		}

	// end fotocopy ktp

	if($_FILES["buku_nikah"]["name"]){
			$rand2=rand(10000,99999);
			$config['file_name'] = $rand2.'_'.$_FILES['buku_nikah']['name'];				
			$this->upload->initialize($config); //wajib di inisiasi ini kalau untuk mulitple upload file
			
			$buku_nikah = $this->upload->do_upload('buku_nikah');
			if (!$buku_nikah){
				$error = array('error' => $this->upload->display_errors());
			}else{
				$buku_nikah = $this->upload->data("file_name");
				$data = array('upload_data' => $this->upload->data());
				$this->m_dah->update_data(array('id' => $id_terakhir),array('foto_kopi_nikah' => $buku_nikah),'sr_kk_baru');			
			}
	
		}

	// end fotocopy buku Nikah	

	if($_FILES["akte_lahir"]["name"]){
		$rand2=rand(10000,99999);
		$config['file_name'] = $rand2.'_'.$_FILES['akte_lahir']['name'];				
		$this->upload->initialize($config); //wajib di inisiasi ini kalau untuk mulitple upload file
		
		$akte_lahir = $this->upload->do_upload('akte_lahir');
		if (!$akte_lahir){
			$error = array('error' => $this->upload->display_errors());
		}else{
			$akte_lahir = $this->upload->data("file_name");
			$data = array('upload_data' => $this->upload->data());
			$this->m_dah->update_data(array('id' => $id_terakhir),array('foto_kopi_lahir' => $akte_lahir),'sr_kk_baru');			
		}
	
	}

	redirect(base_url().'admin/sesi_surat/?alert=terkirim');

	// end fotocopy Akte lahir




}

/*
-----------------------------------
Pengajuan surat kk tambah  keluarga
-----------------------------------
*/
function mohon_kk_tambah(){
	$this->load->database();
	$data['penduduk']=$this->m_dah->get_data('penduduk')->result();
	$id_user=$this->session->userdata('penduduk_id');
	
	$data['agama']=$this->m_dah->get_data('agama')->result();
	$data['pendidikan']=$this->m_dah->get_data('pendidikan')->result();
	$data['pekerjaan']=$this->m_dah->get_data('pekerjaan')->result();
		
	$where_user=array(
		'id' => $id_user
	);
	$data['data_diri']=$this->m_dah->edit_data($where_user,'penduduk')->result();

	$this->load->view('admin/v_header');
	$this->load->view('admin/sesi_surat/x_kk_tambah',$data);
	$this->load->view('admin/v_footer');
}

function act_kk_tambah(){
	$this->load->database();

	$nama=$this->input->post('nama');
	$nik=$this->input->post('nik');
	$jk=$this->input->post('jk');
	$tmp_lhr=$this->input->post('tmp_lhr');

	$tgl_lhr=$this->input->post('tgl_lhr');
	$agama=$this->input->post('agama');
	$pendidikan=$this->input->post('pendidikan');
	$pekerjaan=$this->input->post('pekerjaan');
	$status_nikah=$this->input->post('status_nikah');
	$hub_kel=$this->input->post('hub_kel');


	$no_kk=$this->input->post('no_kk');
	$kepala_keluarga=$this->input->post('kepala_keluarga');

	$id_user=$this->session->userdata('penduduk_id');

	$rand = rand(1000,9999);

	$jenis_surat="SKPnAKK";
	$surat_mohon="SKPnAKK-".$rand;

		$data_pd=array(
			'nama' => $nama,
			'nik' => $nik,
			'nomor_kk' => $no_kk,
			'jenis_kelamin' => $jk,
			'tempat_lahir' => $tmp_lhr,
			'tgl_lahir' => $tgl_lhr,
			'agama' => $agama,
			'pendidikan' => $pendidikan,
			'pekerjaan' => $pekerjaan,
			'status_nikah' => $status_nikah,
			'status_hub_keluarga' => $hub_kel

		);
		$this->m_dah->insert_data($data_pd,'penduduk');
		$id_last_pend = $this->db->insert_id();	

		$data_us=array(
			'penduduk_id' => $id_last_pend,
			'user_lvl' => "rakyat",
			'user_status' => "1",
			'user_login' => $nik,
			'user_name' => $nama,
			'user_pass' => md5($nik)
		);	
		$this->m_dah->insert_data($data_us,'user');


		$data_sr= array(
			'no_kk' => $no_kk,
			'kpl_keluarga' => $kepala_keluarga,
			'anggota_id' => $id_last_pend,

			'penduduk_id' => $id_user,
			'tgl_diajukan' => date('Y-m-d'),
			'surat_mohon_id' => $surat_mohon,
			'status_surat' => "review"
		);
		$this->m_dah->insert_data($data_sr,'sr_kk_tambah');
		$id_terakhir = $this->db->insert_id();			

		$data_sm= array(
			'penduduk_id' => $id_user,
			'tgl_diajukan' => date('Y-m-d'),
			'surat_mohon_id' => $surat_mohon,
			'jenis_surat' => $jenis_surat,
			'notif' => 1,
			'ket_surat' => "Pengajuan Penambahan Anggota Kartu Keluarga",
			'status_surat' => "review"
		);
		$this->m_dah->insert_data($data_sm,'surat_mohon');

		$config['upload_path'] = './upload/syarat/';
		$config['allowed_types'] = 'jpg|png|jpeg|pdf';
		$this->form_validation->set_rules('foto_kk', 'Foto Copy KK', 'required');
		
		if($_FILES["foto_kk"]["name"]){
			$rand1=rand(1000,9999);
			$config['file_name'] = $rand1.'_'.$_FILES['foto_kk']['name'];				
			$this->load->library('upload', $config);
			$foto_kk = $this->upload->do_upload('foto_kk');
			if (!$foto_kk){
				$error = array('error' => $this->upload->display_errors());
			}else{
				$foto_kk = $this->upload->data("file_name");
				$data = array('upload_data' => $this->upload->data());
				$this->m_dah->update_data(array('id' => $id_terakhir),array('foto_kopi_kk' => $foto_kk),'sr_kk_tambah');			
			}
		
		}

	// end fotocopy kk

	if($_FILES["akte_lahir"]["name"]){
		$rand2=rand(10000,99999);
		$config['file_name'] = $rand2.'_'.$_FILES['akte_lahir']['name'];				
		$this->upload->initialize($config); //wajib di inisiasi ini kalau untuk mulitple upload file
		
		$akte_lahir = $this->upload->do_upload('akte_lahir');
		if (!$akte_lahir){
			$error = array('error' => $this->upload->display_errors());
		}else{
			$akte_lahir = $this->upload->data("file_name");
			$data = array('upload_data' => $this->upload->data());
			$this->m_dah->update_data(array('id' => $id_terakhir),array('foto_kopi_lahir' => $akte_lahir),'sr_kk_tambah');			
			redirect(base_url().'admin/sesi_surat/?alert=terkirim');
		}
	
	}

	// end fotocopy Akte lahir


}

/*
-----------------------------------
Pengajuan surat kk kurang keluarga
-----------------------------------
*/
function mohon_kk_kurang(){
	$this->load->database();
	$data['penduduk']=$this->m_dah->get_data('penduduk')->result();
	$id_user=$this->session->userdata('penduduk_id');
	
	$where_user=array(
		'id' => $id_user
	);
	$data['data_diri']=$this->m_dah->edit_data($where_user,'penduduk')->result();

	$this->load->view('admin/v_header');
	$this->load->view('admin/sesi_surat/x_kk_kurang',$data);
	$this->load->view('admin/v_footer');
}

function act_kk_kurang(){
	$this->load->database();

	$nama_keluar=$this->input->post('nama_keluar');
	$no_kk=$this->input->post('no_kk');
	$kepala_keluarga=$this->input->post('kepala_keluarga');

	$id_user=$this->session->userdata('penduduk_id');

	$rand = rand(1000,9999);

	$jenis_surat="SKPgAKK";
	$surat_mohon="SKPgAKK-".$rand;

		$data_sr= array(
			'no_kk' => $no_kk,
			'kpl_keluarga' => $kepala_keluarga,
			'anggota_id' => $nama_keluar,

			'penduduk_id' => $id_user,
			'tgl_diajukan' => date('Y-m-d'),
			'surat_mohon_id' => $surat_mohon,
			'status_surat' => "review"
		);
		$this->m_dah->insert_data($data_sr,'sr_kk_kurang');
		$id_terakhir = $this->db->insert_id();			

		$data_sm= array(
			'penduduk_id' => $id_user,
			'tgl_diajukan' => date('Y-m-d'),
			'notif' => 1,
			'surat_mohon_id' => $surat_mohon,
			'jenis_surat' => $jenis_surat,
			'ket_surat' => "Pengajuan Pengurangan Anggota Kartu Keluarga",
			'status_surat' => "review"
		);
		$this->m_dah->insert_data($data_sm,'surat_mohon');

		
		$config['upload_path'] = './upload/syarat/';
		$config['allowed_types'] = 'jpg|png|jpeg|pdf';
		$this->form_validation->set_rules('foto_kk', 'Foto Copy KK', 'required');
		
		if($_FILES["foto_kk"]["name"]){
			$rand1=rand(1000,9999);
			$config['file_name'] = $rand1.'_'.$_FILES['foto_kk']['name'];				
			$this->load->library('upload', $config);
			$foto_kk = $this->upload->do_upload('foto_kk');
			if (!$foto_kk){
				$error = array('error' => $this->upload->display_errors());
			}else{
				$foto_kk = $this->upload->data("file_name");
				$data = array('upload_data' => $this->upload->data());
				$this->m_dah->update_data(array('id' => $id_terakhir),array('foto_kopi_kk' => $foto_kk),'sr_kk_kurang');			
			}
		
		}
	// end fotocopy KK

	
	if($_FILES["ket_mati"]["name"]){
		$rand2=rand(10000,99999);
		$config['file_name'] = $rand2.'_'.$_FILES['ket_mati']['name'];				
		$this->upload->initialize($config); //wajib di inisiasi ini kalau untuk mulitple upload file
		
		$ket_mati = $this->upload->do_upload('ket_mati');
		if (!$ket_mati){
			$error = array('error' => $this->upload->display_errors());
		}else{
			$ket_mati = $this->upload->data("file_name");
			$data = array('upload_data' => $this->upload->data());
			$this->m_dah->update_data(array('id' => $id_terakhir),array('ket_meninggal' => $ket_mati),'sr_kk_kurang');			
			// redirect(base_url().'admin/sesi_surat/?alert=terkirim');
		}
	
	}

	// end ket mati

	
	if($_FILES["ket_pindah"]["name"]){
		$rand2=rand(10000,99999);
		$config['file_name'] = $rand2.'_'.$_FILES['ket_pindah']['name'];				
		$this->upload->initialize($config); //wajib di inisiasi ini kalau untuk mulitple upload file
		
		$ket_pindah = $this->upload->do_upload('ket_pindah');
		if (!$ket_pindah){
			$error = array('error' => $this->upload->display_errors());
		}else{
			$ket_pindah = $this->upload->data("file_name");
			$data = array('upload_data' => $this->upload->data());
			$this->m_dah->update_data(array('id' => $id_terakhir),array('ket_pindah' => $ket_pindah),'sr_kk_kurang');			
			// redirect(base_url().'admin/sesi_surat/?alert=terkirim');
		}
	
	}
	// end ket pindah
	
	redirect(base_url().'admin/sesi_surat/?alert=terkirim');

}

// end mohon kk kurang


/*
-------------------------
Pengajuan surat Ktp Baru
------------------------
*/
function mohon_ktp_baru(){
	$this->load->database();
	$data['penduduk']=$this->m_dah->get_data('penduduk')->result();
	$id_user=$this->session->userdata('penduduk_id');
	
	$where_user=array(
		'id' => $id_user
	);
	$data['data_diri']=$this->m_dah->edit_data($where_user,'penduduk')->result();

	$this->load->view('admin/v_header');
	$this->load->view('admin/sesi_surat/x_ktp_baru',$data);
	$this->load->view('admin/v_footer');
}

function act_ktp_baru(){
	$this->load->database();
	$id_user=$this->session->userdata('penduduk_id');

	$rand = rand(1000,9999);
	
	$ayah=$this->input->post('ayah');
	$ibu=$this->input->post('ibu');

	$jenis_surat="SKKTPB";
	$surat_mohon="SKKTPB-".$rand;

		$data_sr= array(
			'nama_ayah' => $ayah,
			'nama_ibu' => $ibu,

			'penduduk_id' => $id_user,
			'tgl_diajukan' => date('Y-m-d'),
			'surat_mohon_id' => $surat_mohon,
			'status_surat' => "review"
		);
		$this->m_dah->insert_data($data_sr,'sr_ktp_baru');
		$id_terakhir = $this->db->insert_id();			

		$data_sm= array(
			'penduduk_id' => $id_user,
			'surat_mohon_id' => $surat_mohon,
			'tgl_diajukan' => date('Y-m-d'),
			'notif' => 1,

			'jenis_surat' => $jenis_surat,
			'ket_surat' => "Pengajuan Pembuatan KTP Baru",
			'status_surat' => "review"
		);
		$this->m_dah->insert_data($data_sm,'surat_mohon');


					$config['upload_path'] = './upload/syarat/';
					$config['allowed_types'] = 'jpg|png|jpeg|pdf';
					$this->form_validation->set_rules('foto_kk', 'Foto Copy KK', 'required');
					
					if($_FILES["foto_kk"]["name"]){
						$rand1=rand(1000,9999);
						$config['file_name'] = $rand1.'_'.$_FILES['foto_kk']['name'];				
						$this->load->library('upload', $config);
        				$foto_kk = $this->upload->do_upload('foto_kk');
						if (!$foto_kk){
							$error = array('error' => $this->upload->display_errors());
						}else{
							$foto_kk = $this->upload->data("file_name");
							$data = array('upload_data' => $this->upload->data());
							$this->m_dah->update_data(array('id' => $id_terakhir),array('foto_kopi_kk' => $foto_kk),'sr_ktp_baru');			
						}
					
					}
				// end fotocopy KK


					if($_FILES["surat_nikah"]["name"]){
						$rand2=rand(10000,99999);
						$config['file_name'] = $rand2.'_'.$_FILES['surat_nikah']['name'];				
						$this->upload->initialize($config); //wajib di inisiasi ini kalau untuk mulitple upload file
						
        				$surat_nikah = $this->upload->do_upload('surat_nikah');
						if (!$surat_nikah){
							$error = array('error' => $this->upload->display_errors());
						}else{
							$surat_nikah = $this->upload->data("file_name");
							$data = array('upload_data' => $this->upload->data());
							$this->m_dah->update_data(array('id' => $id_terakhir),array('foto_kopi_nikah' => $surat_nikah),'sr_ktp_baru');			
							// redirect(base_url().'admin/sesi_surat/?alert=terkirim');
						}
					
					}
				
				// end surat nikah

					if($_FILES["akte_lahir"]["name"]){
						$rand2=rand(10000,99999);
						$config['file_name'] = $rand2.'_'.$_FILES['akte_lahir']['name'];				
						$this->upload->initialize($config); //wajib di inisiasi ini kalau untuk mulitple upload file
						
        				$akte_lahir = $this->upload->do_upload('akte_lahir');
						if (!$akte_lahir){
							$error = array('error' => $this->upload->display_errors());
						}else{
							$akte_lahir = $this->upload->data("file_name");
							$data = array('upload_data' => $this->upload->data());
							$this->m_dah->update_data(array('id' => $id_terakhir),array('foto_kopi_akta' => $akte_lahir),'sr_ktp_baru');			
							redirect(base_url().'admin/sesi_surat/?alert=terkirim');
						}
					
					}
				
				// end akte lahir


}

/*
-------------------------
Pengajuan surat Ktp Hilang
------------------------
*/
		function mohon_ktp_hilang(){
			$this->load->database();
			$data['penduduk']=$this->m_dah->get_data('penduduk')->result();
			$id_user=$this->session->userdata('penduduk_id');
			
			$where_user=array(
				'id' => $id_user
			);
			$data['data_diri']=$this->m_dah->edit_data($where_user,'penduduk')->result();

			$this->load->view('admin/v_header');
			$this->load->view('admin/sesi_surat/x_ktp_hilang',$data);
			$this->load->view('admin/v_footer');

		}	

		
		function act_ktp_hilang(){
			$this->load->database();
			$id_user=$this->session->userdata('penduduk_id');
		
				// $where_user=array(
				// 	'id' => $id_user
				// );
				// $data['data_diri']=$this->m_dah->edit_data($where_user,'penduduk')->result();
				// $this->load->view('admin/v_header');
			 	// $this->load->view('admin/sesi_surat/x_ktp_hilang',$data);
		     	// $this->load->view('admin/v_footer');
			
				$rand = rand(1000,9999);
				
				
				$jenis_surat="SKK";
				$surat_mohon="SKK-".$rand;

					$data_sr= array(
						'penduduk_id' => $id_user,
						'tgl_ajukan' => date('Y-m-d'),
						'surat_mohon_id' => $surat_mohon,
						'status_surat' => "review"
					);
					$this->m_dah->insert_data($data_sr,'sr_ktp_hilang');
					$id_terakhir = $this->db->insert_id();			

					$data_sm= array(
						'penduduk_id' => $id_user,
						'surat_mohon_id' => $surat_mohon,
						'tgl_diajukan' => date('Y-m-d'),
						'notif' => 1,

						'jenis_surat' => $jenis_surat,
						'ket_surat' => "Pengajuan KTP Hilang",
						'status_surat' => "review"
					);
					$this->m_dah->insert_data($data_sm,'surat_mohon');


/* 
---------------------------
	mulai insert syarat surat
-----------------------------
*/					
					$config['upload_path'] = './upload/syarat/';
					$config['allowed_types'] = 'jpg|png|jpeg|pdf';
					$this->form_validation->set_rules('foto_kk', 'Foto Copy KK', 'required');
					
					if($_FILES["foto_kk"]["name"]){
						$rand1=rand(1000,9999);
						$config['file_name'] = $rand1.'_'.$_FILES['foto_kk']['name'];				
						$this->load->library('upload', $config);
        				$foto_kk = $this->upload->do_upload('foto_kk');
						if (!$foto_kk){
							$error = array('error' => $this->upload->display_errors());
						}else{
							$foto_kk = $this->upload->data("file_name");
							$data = array('upload_data' => $this->upload->data());
							$this->m_dah->update_data(array('id' => $id_terakhir),array('foto_kopi_kk' => $foto_kk),'sr_ktp_hilang');			
						}
					
					}
				// end fotocopy KK

					if($_FILES["surat_hilang"]["name"]){
						$rand2=rand(10000,99999);
						$config['file_name'] = $rand2.'_'.$_FILES['surat_hilang']['name'];				
						$this->upload->initialize($config); //wajib di inisiasi ini kalau untuk mulitple upload file
						
        				$surat_hilang = $this->upload->do_upload('surat_hilang');
						if (!$surat_hilang){
							$error = array('error' => $this->upload->display_errors());
						}else{
							$surat_hilang = $this->upload->data("file_name");
							$data = array('upload_data' => $this->upload->data());
							$this->m_dah->update_data(array('id' => $id_terakhir),array('surat_hilang_polisi' => $surat_hilang),'sr_ktp_hilang');			
							redirect(base_url().'admin/sesi_surat/?alert=terkirim');
						}
					
					}
				
				// end surat hilang 

				// end else validation	
		}

// end ktp hilang


/*
-------------------------
Pengajuan surat Akte Lahir
------------------------
*/
function mohon_akte_lahir(){
	$this->load->database();
	$data['penduduk']=$this->m_dah->get_data('penduduk')->result();
	$id_user=$this->session->userdata('penduduk_id');
	
	$where_user=array(
		'id' => $id_user
	);
	$data['data_diri']=$this->m_dah->edit_data($where_user,'penduduk')->result();

	$this->load->view('admin/v_header');
	$this->load->view('admin/sesi_surat/x_akte_lahir',$data);
	$this->load->view('admin/v_footer');

}


function act_akte_lahir(){
	$this->load->database();
	$id_user=$this->session->userdata('penduduk_id');

	
	$tgl=$this->input->post('tgl_lahir');
	$jam=$this->input->post('jam_lahir');
	$tgl_lahir=$tgl." ".$jam;

	$tempat_lahir=$this->input->post('tempat_lahir');
	$nama_lahir=$this->input->post('nama_lahir');
	$jk=$this->input->post('jk');
	$anak_ke=$this->input->post('anak_ke');

	$nik_istri=$this->input->post('nik_istri');
	$nik_suami=$this->input->post('nik_suami');



		$rand = rand(1000,9999);
		
		$jenis_surat="SKKL";
		$surat_mohon="SKKL-".$rand;

			$data_sr= array(
				'tgl_lahir' => $tgl_lahir,
				'tmp_lahir' => $tempat_lahir,
				'nama_lahir' => $nama_lahir,
				'kelamin' => $jk,
				'nomor_anak' => $anak_ke,
				'istri_id' => $nik_istri,
				'suami_id' => $nik_suami,
				'tgl_ajukan' => date('Y-m-d'),
				'surat_mohon_id' => $surat_mohon,
				'status_surat' => "review"
			);
			$this->m_dah->insert_data($data_sr,'sr_akte_lahir');
			$id_terakhir = $this->db->insert_id();			

			$data_sm= array(
				'penduduk_id' => $id_user,
				'surat_mohon_id' => $surat_mohon,
				'tgl_diajukan' => date('Y-m-d'),
				'notif' => 1,

				'jenis_surat' => $jenis_surat,
				'ket_surat' => "Pengajuan Pembuatan Akte Kelahiran",
				'status_surat' => "review"
			);
			$this->m_dah->insert_data($data_sm,'surat_mohon');


/* 
---------------------------
mulai insert syarat surat
-----------------------------
*/					
			$config['upload_path'] = './upload/syarat/';
			$config['allowed_types'] = 'jpg|png|jpeg|pdf';
			$this->form_validation->set_rules('foto_kk', 'Foto Copy KK', 'required');
			
			if($_FILES["ktp"]["name"]){
				$rand1=rand(1000,9999);
				$config['file_name'] = $rand1.'_'.$_FILES['ktp']['name'];				
				$this->load->library('upload', $config);
				$ktp = $this->upload->do_upload('ktp');
				if (!$ktp){
					$error = array('error' => $this->upload->display_errors());
				}else{
					$ktp = $this->upload->data("file_name");
					$data = array('upload_data' => $this->upload->data());
					$this->m_dah->update_data(array('id' => $id_terakhir),array('foto_kopi_ktp' => $ktp),'sr_akte_lahir');			
				}
			
			}
		
		// end fotocopy ktp kedua orang tua

		if($_FILES["foto_kopi_kk"]["name"]){
			$rand3=rand(100000,999999);
			$config['file_name'] = $rand3.'_'.$_FILES['foto_kopi_kk']['name'];				
			$this->upload->initialize($config); //wajib di inisiasi ini kalau untuk mulitple upload file
			
			$foto_kopi_kk = $this->upload->do_upload('foto_kopi_kk');
			if (!$foto_kopi_kk){
				$error = array('error' => $this->upload->display_errors());
			}else{
				$foto_kopi_kk = $this->upload->data("file_name");
				$data = array('upload_data' => $this->upload->data());
				$this->m_dah->update_data(array('id' => $id_terakhir),array('foto_kopi_kk' => $foto_kopi_kk),'sr_akte_lahir');			
				// redirect(base_url().'admin/sesi_surat/?alert=saved');
			}
		
		}
	
	// end fotocopy kk

	
	if($_FILES["ket_lahir"]["name"]){
		$rand4=rand(1000000,9999999);
		$config['file_name'] = $rand4.'_'.$_FILES['ket_lahir']['name'];				
		$this->upload->initialize($config); //wajib di inisiasi ini kalau untuk mulitple upload file
		
		$ket_lahir = $this->upload->do_upload('ket_lahir');
		if (!$ket_lahir){
			$error = array('error' => $this->upload->display_errors());
		}else{
			$ket_lahir = $this->upload->data("file_name");
			$data = array('upload_data' => $this->upload->data());
			$this->m_dah->update_data(array('id' => $id_terakhir),array('surat_lahir' => $ket_lahir),'sr_akte_lahir');			
			// redirect(base_url().'admin/sesi_surat/?alert=saved');
		}
	
	}

// end surat keterangan lahir

if($_FILES["buku_nikah"]["name"]){
	$rand5=rand(1000,9999);
	$config['file_name'] = $rand5.'_'.$_FILES['buku_nikah']['name'];				
	$this->upload->initialize($config); //wajib di inisiasi ini kalau untuk mulitple upload file
	
	$buku_nikah = $this->upload->do_upload('buku_nikah');
	if (!$buku_nikah){
		$error = array('error' => $this->upload->display_errors());
	}else{
		$buku_nikah = $this->upload->data("file_name");
		$data = array('upload_data' => $this->upload->data());
		$this->m_dah->update_data(array('id' => $id_terakhir),array('foto_kopi_nikah' => $buku_nikah),'sr_akte_lahir');			
		// redirect(base_url().'admin/sesi_surat/?alert=saved');
	}

}

// end buku nikah


if($_FILES["ijazah"]["name"]){
	$rand6=rand(10000000,99999999);
	$config['file_name'] = $rand6.'_'.$_FILES['ijazah']['name'];				
	$this->upload->initialize($config); //wajib di inisiasi ini kalau untuk mulitple upload file
	
	$ijazah = $this->upload->do_upload('ijazah');
	if (!$ijazah){
		$error = array('error' => $this->upload->display_errors());
	}else{
		$ijazah = $this->upload->data("file_name");
		$data = array('upload_data' => $this->upload->data());
		$this->m_dah->update_data(array('id' => $id_terakhir),array('foto_kopi_ijazah' => $ijazah),'sr_akte_lahir');			
		// redirect(base_url().'admin/sesi_surat/?alert=saved');
	}

}

// end buku ijazah lahir
redirect(base_url().'admin/sesi_surat/?alert=terkirim');


	
}
// end akte lahir

/*
-----------------------------------
Pengajuan surat Akte Kematian
-----------------------------------
*/
function mohon_akte_mati(){
	$this->load->database();
	$data['penduduk']=$this->m_dah->get_data('penduduk')->result();
	$id_user=$this->session->userdata('penduduk_id');
	
	$where_user=array(
		'id' => $id_user
	);
	$data['data_diri']=$this->m_dah->edit_data($where_user,'penduduk')->result();

	$this->load->view('admin/v_header');
	$this->load->view('admin/sesi_surat/x_akte_mati',$data);
	$this->load->view('admin/v_footer');
}

function act_akte_mati(){
	$this->load->database();

	$id_user=$this->session->userdata('penduduk_id');

	
	$tgl=$this->input->post('tgl_mati');
	$jam=$this->input->post('jam_mati');
	$tgl_mati=$tgl." ".$jam;
	
	
	$nama_mati=$this->input->post('nama_mati');
	$tempat_mati=$this->input->post('tempat_mati');
	$sebab_mati=$this->input->post('sebab_mati');

	$nama_pelapor=$this->input->post('nama_pelapor');
	$hub_pelapor=$this->input->post('hub_pelapor');

		$rand = rand(1000,9999);
		
		$jenis_surat="SKM";
		$surat_mohon="SKM-".$rand;

			$data_sr= array(
				'penduduk_id' => $nama_pelapor,
				
				'tgl_mati' => $tgl_mati,
				'nama_mati' => $nama_mati,
				'sebab_mati' =>$sebab_mati,
				'tempat_mati' => $tempat_mati,
				'hub_pelapor' => $hub_pelapor,

				'tgl_diajukan' => date('Y-m-d'),
				'surat_mohon_id' => $surat_mohon,
				'status_surat' => "review"
			);
			$this->m_dah->insert_data($data_sr,'sr_akte_mati');
			$id_terakhir = $this->db->insert_id();			

			$data_sm= array(
				'penduduk_id' => $nama_pelapor,
				'surat_mohon_id' => $surat_mohon,
				'tgl_diajukan' => date('Y-m-d'),
				'notif' => 1,

				'jenis_surat' => $jenis_surat,
				'ket_surat' => "Pengajuan Pembuatan Akte Meninggal Dunia",
				'status_surat' => "review"
			);
			$this->m_dah->insert_data($data_sm,'surat_mohon');


/* 
---------------------------
mulai insert syarat surat
-----------------------------
*/					
		$config['upload_path'] = './upload/syarat/';
		$config['allowed_types'] = 'jpg|png|jpeg|pdf';

	

		if($_FILES["ket_mati"]["name"]){
			$rand2=rand(10000,99999);
			$config['file_name'] = $rand2.'_'.$_FILES['ket_mati']['name'];				
			$this->load->library('upload', $config);
			
			$ket_mati = $this->upload->do_upload('ket_mati');
			if (!$ket_mati){
				$error = array('error' => $this->upload->display_errors());
			}else{
				$ket_mati = $this->upload->data("file_name");
				$data = array('upload_data' => $this->upload->data());
				$this->m_dah->update_data(array('id' => $id_terakhir),array('sk_rs' => $ket_mati),'sr_akte_mati');			
				// redirect(base_url().'admin/sesi_surat/?alert=saved');
			}
		
		}
	
		// end keteranagan rumah sakit

		if($_FILES["ktp"]["name"]){
			$rand2=rand(10000,99999);
			$config['file_name'] = $rand2.'_'.$_FILES['ktp']['name'];				
			$this->upload->initialize($config); //wajib di inisiasi ini kalau untuk mulitple upload file
			
			$ktp = $this->upload->do_upload('ktp');
			if (!$ktp){
				$error = array('error' => $this->upload->display_errors());
			}else{
				$ktp = $this->upload->data("file_name");
				$data = array('upload_data' => $this->upload->data());
				$this->m_dah->update_data(array('id' => $id_terakhir),array('foto_kopi_ktp' => $ktp),'sr_akte_mati');			
				// redirect(base_url().'admin/sesi_surat/?alert=saved');
			}
		
		}
	
		// end foto Kopi KTP

		if($_FILES["foto_kk"]["name"]){
			$rand2=rand(10000,99999);
			$config['file_name'] = $rand2.'_'.$_FILES['foto_kk']['name'];				
			$this->upload->initialize($config); //wajib di inisiasi ini kalau untuk mulitple upload file
			
			$foto_kk = $this->upload->do_upload('foto_kk');
			if (!$foto_kk){
				$error = array('error' => $this->upload->display_errors());
			}else{
				$foto_kk = $this->upload->data("file_name");
				$data = array('upload_data' => $this->upload->data());
				$this->m_dah->update_data(array('id' => $id_terakhir),array('foto_kopi_kk' => $foto_kk),'sr_akte_mati');			
				// redirect(base_url().'admin/sesi_surat/?alert=saved');
			}
		
		}
	
		// end kk

		redirect(base_url().'admin/sesi_surat/?alert=terkirim');

}
// end akte kematian


function mohon_ket_pindah(){
	$this->load->database();
	$data['penduduk']=$this->m_dah->get_data('penduduk')->result();
	$id_user=$this->session->userdata('penduduk_id');
	
	$where_user=array(
		'id' => $id_user
	);
	$data['data_diri']=$this->m_dah->edit_data($where_user,'penduduk')->result();

	$this->load->view('admin/v_header');
	$this->load->view('admin/sesi_surat/x_ket_pindah',$data);
	$this->load->view('admin/v_footer');
}


function act_mohon_pindah(){
	$this->load->database();

	$id_user=$this->session->userdata('penduduk_id');

	$desa=$this->input->post('desa');
	$kabupaten=$this->input->post('kabupaten');
	$kecamatan=$this->input->post('kecamatan');

	$alasan=$this->input->post('alasan');
	$anggota=$this->input->post('anggota');



		$rand = rand(1000,9999);
		
		$jenis_surat="SKPP";
		$surat_mohon="SKPP-".$rand;

			$data_sr= array(
				'penduduk_id' => $id_user,
				'desa' =>$desa,
				'kecamatan' =>$kecamatan,
				'kabupaten' =>$kabupaten,
				'alasan_pindah' =>$alasan,
				'anggota' =>$anggota,

				'tgl_diajukan' => date('Y-m-d'),
				'surat_mohon_id' => $surat_mohon,
				'status_surat' => "review"
			);
			$this->m_dah->insert_data($data_sr,'sr_ket_pindah');
			$id_terakhir = $this->db->insert_id();			

			$data_sm= array(
				'penduduk_id' => $id_user,
				'surat_mohon_id' => $surat_mohon,
				'tgl_diajukan' => date('Y-m-d'),
				'notif' => 1,

				'jenis_surat' => $jenis_surat,
				'ket_surat' => "Pengajuan Pembuatan Keterangan Pindah Penduduk",
				'status_surat' => "review"
			);
			$this->m_dah->insert_data($data_sm,'surat_mohon');


			/* 
---------------------------
mulai insert syarat surat
-----------------------------
*/					
		$config['upload_path'] = './upload/syarat/';
		$config['allowed_types'] = 'jpg|png|jpeg|pdf';

		if($_FILES["foto_kk"]["name"]){
			$rand1=rand(1000,9999);
			$config['file_name'] = $rand1.'_'.$_FILES['foto_kk']['name'];				
			$this->load->library('upload', $config);
			$foto_kk = $this->upload->do_upload('foto_kk');
			if (!$foto_kk){
				$error = array('error' => $this->upload->display_errors());
			}else{
				$foto_kk = $this->upload->data("file_name");
				$data = array('upload_data' => $this->upload->data());
				$this->m_dah->update_data(array('id' => $id_terakhir),array('foto_kopi_kk' => $foto_kk),'sr_ket_pindah');			
			}

		}


		// edn fotokopi kk

		if($_FILES["kk_asli"]["name"]){
			$rand2=rand(10000,99999);
			$config['file_name'] = $rand2.'_'.$_FILES['kk_asli']['name'];				
			$this->upload->initialize($config); //wajib di inisiasi ini kalau untuk mulitple upload file
			
			$kk_asli = $this->upload->do_upload('kk_asli');
			if (!$kk_asli){
				$error = array('error' => $this->upload->display_errors());
			}else{
				$kk_asli = $this->upload->data("file_name");
				$data = array('upload_data' => $this->upload->data());
				$this->m_dah->update_data(array('id' => $id_terakhir),array('kk_asli' => $kk_asli),'sr_ket_pindah');			
				// redirect(base_url().'admin/sesi_surat/?alert=saved');
			}
		
		}

		// edn kk asli

		if($_FILES["ktp"]["name"]){
			$rand2=rand(10000,99999);
			$config['file_name'] = $rand2.'_'.$_FILES['ktp']['name'];				
			$this->upload->initialize($config); //wajib di inisiasi ini kalau untuk mulitple upload file
			
			$ktp = $this->upload->do_upload('ktp');
			if (!$ktp){
				$error = array('error' => $this->upload->display_errors());
			}else{
				$ktp = $this->upload->data("file_name");
				$data = array('upload_data' => $this->upload->data());
				$this->m_dah->update_data(array('id' => $id_terakhir),array('foto_kopi_ktp' => $ktp),'sr_ket_pindah');			
				// redirect(base_url().'admin/sesi_surat/?alert=saved');
			}
		
		}

		// edn ktp
				redirect(base_url().'admin/sesi_surat/?alert=terkirm');
}


function mohon_surat_miskin(){
	$this->load->database();

	$data['penduduk']=$this->m_dah->get_data('penduduk')->result();
	$id_user=$this->session->userdata('penduduk_id');
	
	$where_user=array(
		'id' => $id_user
	);
	$data['data_diri']=$this->m_dah->edit_data($where_user,'penduduk')->result();


	$this->load->view('admin/v_header');
	$this->load->view('admin/sesi_surat/x_ket_miskin',$data);
	$this->load->view('admin/v_footer');
}

function act_surat_miskin(){
	$this->load->database();

	$id_user=$this->session->userdata('penduduk_id');

	$ayah=$this->input->post('ayah');
	$ibu=$this->input->post('ibu');
	
	$rand = rand(1000,9999);
		
	$jenis_surat="SKKM";
	$surat_mohon="SKKM-".$rand;

		$data_sr= array(
			'penduduk_id' => $id_user,
			'nama_ayah'=> $ayah,
			'nama_ibu'=> $ibu,
			'tgl_diajukan' => date('Y-m-d'),
			'surat_mohon_id' => $surat_mohon,
			'status_surat' => "review"
		);
		$this->m_dah->insert_data($data_sr,'sr_ket_miskin');
		$id_terakhir = $this->db->insert_id();			

		$data_sm= array(
			'penduduk_id' => $id_user,
			'surat_mohon_id' => $surat_mohon,
			'tgl_diajukan' => date('Y-m-d'),
			'notif' => 1,

			'jenis_surat' => $jenis_surat,
			'ket_surat' => "Pengajuan Pembuatan Keterangan Kurang Mampu",
			'status_surat' => "review"
		);
		$this->m_dah->insert_data($data_sm,'surat_mohon');


			
		$config['upload_path'] = './upload/syarat/';
		$config['allowed_types'] = 'jpg|png|jpeg|pdf';
		$this->form_validation->set_rules('foto_kk', 'Foto Copy KK', 'required');
		
		if($_FILES["foto_kk"]["name"]){
			$rand1=rand(1000,9999);
			$config['file_name'] = $rand1.'_'.$_FILES['foto_kk']['name'];				
			$this->load->library('upload', $config);
			$foto_kk = $this->upload->do_upload('foto_kk');
			if (!$foto_kk){
				$error = array('error' => $this->upload->display_errors());
			}else{
				$foto_kk = $this->upload->data("file_name");
				$data = array('upload_data' => $this->upload->data());
				$this->m_dah->update_data(array('id' => $id_terakhir),array('foto_kopi_kk' => $foto_kk),'sr_ket_miskin');			
			}
		
		}
	// end fotocopy KK

		if($_FILES["ktp"]["name"]){
			$rand2=rand(10000,99999);
			$config['file_name'] = $rand2.'_'.$_FILES['ktp']['name'];				
			$this->upload->initialize($config); //wajib di inisiasi ini kalau untuk mulitple upload file
			
			$ktp = $this->upload->do_upload('ktp');
			if (!$ktp){
				$error = array('error' => $this->upload->display_errors());
			}else{
				$ktp = $this->upload->data("file_name");
				$data = array('upload_data' => $this->upload->data());
				$this->m_dah->update_data(array('id' => $id_terakhir),array('foto_kopi_ktp' => $ktp),'sr_ket_miskin');			
				redirect(base_url().'admin/sesi_surat/?alert=terkirim');
			}
		
		}
	
	// end Ktp
}
// end mohon surat ket miskin

// start mohon surat ket nikah
function mohon_surat_ket_nikah(){
	$this->load->database();


	$data['penduduk']=$this->m_dah->get_data('penduduk')->result();
	$id_user=$this->session->userdata('penduduk_id');
	
	$where_user=array(
		'id' => $id_user
	);
	$data['data_diri']=$this->m_dah->edit_data($where_user,'penduduk')->result();


	$this->load->view('admin/v_header');
	$this->load->view('admin/sesi_surat/x_ket_nikah',$data);
	$this->load->view('admin/v_footer');
}

function act_surat_ket_nikah(){
	$this->load->database();

	$id_user=$this->session->userdata('penduduk_id');

	$suami=$this->input->post('suami');
	$istri=$this->input->post('istri');
	
	$rand = rand(1000,9999);
		
	$jenis_surat="SKSM";
	$surat_mohon="SKSM-".$rand;

		$data_sr= array(
			'penduduk_id' => $id_user,
			'suami_id'=> $suami,
			'istri_id'=> $istri,
			'tgl_diajukan' => date('Y-m-d'),
			'surat_mohon_id' => $surat_mohon,
			'status_surat' => "review"
		);
		$this->m_dah->insert_data($data_sr,'sr_ket_nikah');
		$id_terakhir = $this->db->insert_id();			

		$data_sm= array(
			'penduduk_id' => $id_user,
			'surat_mohon_id' => $surat_mohon,
			'tgl_diajukan' => date('Y-m-d'),
			'notif' => 1,

			'jenis_surat' => $jenis_surat,
			'ket_surat' => "Pengajuan Pembuatan Keterangan Sudah Menikah",
			'status_surat' => "review"
		);
		$this->m_dah->insert_data($data_sm,'surat_mohon');

		$config['upload_path'] = './upload/syarat/';
		$config['allowed_types'] = 'jpg|png|jpeg|pdf';
		$this->form_validation->set_rules('foto_kk', 'Foto Copy KK', 'required');
		
		if($_FILES["foto_kk"]["name"]){
			$rand1=rand(1000,9999);
			$config['file_name'] = $rand1.'_'.$_FILES['foto_kk']['name'];				
			$this->load->library('upload', $config);
			$foto_kk = $this->upload->do_upload('foto_kk');
			if (!$foto_kk){
				$error = array('error' => $this->upload->display_errors());
			}else{
				$foto_kk = $this->upload->data("file_name");
				$data = array('upload_data' => $this->upload->data());
				$this->m_dah->update_data(array('id' => $id_terakhir),array('foto_kopi_kk' => $foto_kk),'sr_ket_nikah');			
			}
		
		}
	// end fotocopy KK

		if($_FILES["ktp_suami"]["name"]){
			$rand2=rand(10000,99999);
			$config['file_name'] = $rand2.'_'.$_FILES['ktp_suami']['name'];				
			$this->upload->initialize($config); //wajib di inisiasi ini kalau untuk mulitple upload file
			
			$ktp_suami = $this->upload->do_upload('ktp_suami');
			if (!$ktp_suami){
				$error = array('error' => $this->upload->display_errors());
			}else{
				$ktp_suami = $this->upload->data("file_name");
				$data = array('upload_data' => $this->upload->data());
				$this->m_dah->update_data(array('id' => $id_terakhir),array('ktp_suami' => $ktp_suami),'sr_ket_nikah');			
				// redirect(base_url().'admin/sesi_surat/?alert=terkirim');
			}
		
		}
	
	// end Ktp suami

		if($_FILES["ktp_istri"]["name"]){
			$rand2=rand(10000,99999);
			$config['file_name'] = $rand2.'_'.$_FILES['ktp_istri']['name'];				
			$this->upload->initialize($config); //wajib di inisiasi ini kalau untuk mulitple upload file
			
			$ktp_istri = $this->upload->do_upload('ktp_istri');
			if (!$ktp_istri){
				$error = array('error' => $this->upload->display_errors());
			}else{
				$ktp_istri = $this->upload->data("file_name");
				$data = array('upload_data' => $this->upload->data());
				$this->m_dah->update_data(array('id' => $id_terakhir),array('ktp_istri' => $ktp_istri),'sr_ket_nikah');			
				// redirect(base_url().'admin/sesi_surat/?alert=terkirim');
			}
		
		}
	
	// end Ktp istri

		if($_FILES["buku_nikah"]["name"]){
			$rand2=rand(10000,99999);
			$config['file_name'] = $rand2.'_'.$_FILES['buku_nikah']['name'];				
			$this->upload->initialize($config); //wajib di inisiasi ini kalau untuk mulitple upload file
			
			$buku_nikah = $this->upload->do_upload('buku_nikah');
			if (!$buku_nikah){
				$error = array('error' => $this->upload->display_errors());
			}else{
				$buku_nikah = $this->upload->data("file_name");
				$data = array('upload_data' => $this->upload->data());
				$this->m_dah->update_data(array('id' => $id_terakhir),array('buku_nikah' => $buku_nikah),'sr_ket_nikah');			
				redirect(base_url().'admin/sesi_surat/?alert=terkirim');
			}
		
		}
	
	// end Buku Nikah

}


// end surat sudah nikah

// start surat belum menikah
function mohon_surat_belum_menikah(){
	$this->load->database();

	$data['penduduk']=$this->m_dah->get_data('penduduk')->result();
	$id_user=$this->session->userdata('penduduk_id');
	
	$where_user=array(
		'id' => $id_user
	);
	$data['data_diri']=$this->m_dah->edit_data($where_user,'penduduk')->result();


	$this->load->view('admin/v_header');
	$this->load->view('admin/sesi_surat/x_ket_belum_nikah',$data);
	$this->load->view('admin/v_footer');
}

function act_surat_belum_nikah(){
	$this->load->database();

	$id_user=$this->session->userdata('penduduk_id');

	
	$rand = rand(1000,9999);
		
	$jenis_surat="SKBM";
	$surat_mohon="SKBM-".$rand;

		$data_sr= array(
			'penduduk_id' => $id_user,
		
			'tgl_diajukan' => date('Y-m-d'),
			'surat_mohon_id' => $surat_mohon,
			'status_surat' => "review"
		);
		$this->m_dah->insert_data($data_sr,'sr_belum_nikah');
		$id_terakhir = $this->db->insert_id();			

		$data_sm= array(
			'penduduk_id' => $id_user,
			'surat_mohon_id' => $surat_mohon,
			'tgl_diajukan' => date('Y-m-d'),
			'notif' => 1,

			'jenis_surat' => $jenis_surat,
			'ket_surat' => "Pengajuan Pembuatan Keterangan Belum Menikah",
			'status_surat' => "review"
		);
		$this->m_dah->insert_data($data_sm,'surat_mohon');


			
		$config['upload_path'] = './upload/syarat/';
		$config['allowed_types'] = 'jpg|png|jpeg|pdf';
		$this->form_validation->set_rules('foto_kk', 'Foto Copy KK', 'required');
		
		if($_FILES["foto_kk"]["name"]){
			$rand1=rand(1000,9999);
			$config['file_name'] = $rand1.'_'.$_FILES['foto_kk']['name'];				
			$this->load->library('upload', $config);
			$foto_kk = $this->upload->do_upload('foto_kk');
			if (!$foto_kk){
				$error = array('error' => $this->upload->display_errors());
			}else{
				$foto_kk = $this->upload->data("file_name");
				$data = array('upload_data' => $this->upload->data());
				$this->m_dah->update_data(array('id' => $id_terakhir),array('foto_kopi_kk' => $foto_kk),'sr_belum_nikah');			
			}
		
		}
	// end fotocopy KK

		if($_FILES["ktp"]["name"]){
			$rand2=rand(10000,99999);
			$config['file_name'] = $rand2.'_'.$_FILES['ktp']['name'];				
			$this->upload->initialize($config); //wajib di inisiasi ini kalau untuk mulitple upload file
			
			$ktp = $this->upload->do_upload('ktp');
			if (!$ktp){
				$error = array('error' => $this->upload->display_errors());
			}else{
				$ktp = $this->upload->data("file_name");
				$data = array('upload_data' => $this->upload->data());
				$this->m_dah->update_data(array('id' => $id_terakhir),array('foto_kopi_ktp' => $ktp),'sr_belum_nikah');			
				redirect(base_url().'admin/sesi_surat/?alert=terkirim');
			}
		
		}
	
	// end Ktp
}

// end mohon keteragan belum menikah


function mohon_surat_ket_cerai(){
	$this->load->database();

	$data['penduduk']=$this->m_dah->get_data('penduduk')->result();
	$id_user=$this->session->userdata('penduduk_id');
	
	$where_user=array(
		'id' => $id_user
	);
	$data['data_diri']=$this->m_dah->edit_data($where_user,'penduduk')->result();


	$this->load->view('admin/v_header');
	$this->load->view('admin/sesi_surat/x_ket_cerai',$data);
	$this->load->view('admin/v_footer');
}

function act_surat_ket_cerai(){
	$this->load->database();

	$id_user=$this->session->userdata('penduduk_id');

	$pertama=$this->input->post('pertama');
	$kedua=$this->input->post('kedua');
	
	$rand = rand(1000,9999);
		
	$jenis_surat="SKB";
	$surat_mohon="SKB-".$rand;

		$data_sr= array(
			'penduduk_id' => $id_user,
			'pertama_id'=> $pertama,
			'kedua_id'=> $kedua,
			'tgl_diajukan' => date('Y-m-d'),
			'surat_mohon_id' => $surat_mohon,
			'status_surat' => "review"
		);
		$this->m_dah->insert_data($data_sr,'sr_ket_cerai');
		$id_terakhir = $this->db->insert_id();			

		$data_sm= array(
			'penduduk_id' => $id_user,
			'surat_mohon_id' => $surat_mohon,
			'tgl_diajukan' => date('Y-m-d'),
			'notif' => 1,

			'jenis_surat' => $jenis_surat,
			'ket_surat' => "Pengajuan Pembuatan Keterangan Bercerai",
			'status_surat' => "review"
		);
		$this->m_dah->insert_data($data_sm,'surat_mohon');

		$config['upload_path'] = './upload/syarat/';
		$config['allowed_types'] = 'jpg|png|jpeg|pdf';
		$this->form_validation->set_rules('foto_kk', 'Foto Copy KK', 'required');
		
		if($_FILES["foto_kk"]["name"]){
			$rand1=rand(1000,9999);
			$config['file_name'] = $rand1.'_'.$_FILES['foto_kk']['name'];				
			$this->load->library('upload', $config);
			$foto_kk = $this->upload->do_upload('foto_kk');
			if (!$foto_kk){
				$error = array('error' => $this->upload->display_errors());
			}else{
				$foto_kk = $this->upload->data("file_name");
				$data = array('upload_data' => $this->upload->data());
				$this->m_dah->update_data(array('id' => $id_terakhir),array('foto_kopi_kk' => $foto_kk),'sr_ket_cerai');			
			}
		
		}
	// end fotocopy KK

		if($_FILES["ktp_suami"]["name"]){
			$rand2=rand(10000,99999);
			$config['file_name'] = $rand2.'_'.$_FILES['ktp_suami']['name'];				
			$this->upload->initialize($config); //wajib di inisiasi ini kalau untuk mulitple upload file
			
			$ktp_suami = $this->upload->do_upload('ktp_suami');
			if (!$ktp_suami){
				$error = array('error' => $this->upload->display_errors());
			}else{
				$ktp_suami = $this->upload->data("file_name");
				$data = array('upload_data' => $this->upload->data());
				$this->m_dah->update_data(array('id' => $id_terakhir),array('ktp_suami' => $ktp_suami),'sr_ket_cerai');			
				// redirect(base_url().'admin/sesi_surat/?alert=terkirim');
			}
		
		}
	
	// end Ktp suami

		if($_FILES["ktp_istri"]["name"]){
			$rand2=rand(10000,99999);
			$config['file_name'] = $rand2.'_'.$_FILES['ktp_istri']['name'];				
			$this->upload->initialize($config); //wajib di inisiasi ini kalau untuk mulitple upload file
			
			$ktp_istri = $this->upload->do_upload('ktp_istri');
			if (!$ktp_istri){
				$error = array('error' => $this->upload->display_errors());
			}else{
				$ktp_istri = $this->upload->data("file_name");
				$data = array('upload_data' => $this->upload->data());
				$this->m_dah->update_data(array('id' => $id_terakhir),array('ktp_istri' => $ktp_istri),'sr_ket_cerai');			
				redirect(base_url().'admin/sesi_surat/?alert=terkirim');
			}
		
		}
	
	// end Ktp istri


}

// end surat bercerai





/* 
++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
							akhir dari Permohonan Surat
++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
*/

/* 
---------------------
Lihat permohonan surat
---------------------
*/

function lihat_kk_baru($id){
	$this->load->database();
	$where=array(
		'surat_mohon_id' =>	$id
	);

	$data['kk_baru']=$this->m_dah->edit_data($where,'sr_kk_baru')->result();
	
	$this->load->view('admin/v_header');
	$this->load->view('admin/lihat/lh_kk_baru',$data);
	$this->load->view('admin/v_footer');
}

function lihat_kk_tambah($id){
	$this->load->database();
	$where=array(
		'surat_mohon_id' =>	$id
	);

	$data['kk_tambah']=$this->m_dah->edit_data($where,'sr_kk_tambah')->result();
	
	$this->load->view('admin/v_header');
	$this->load->view('admin/lihat/lh_kk_tambah',$data);
	$this->load->view('admin/v_footer');
}

function lihat_kk_kurang($id){
	$this->load->database();
	$where=array(
		'surat_mohon_id' =>	$id
	);

	$data['kk_kurang']=$this->m_dah->edit_data($where,'sr_kk_kurang')->result();
	
	$this->load->view('admin/v_header');
	$this->load->view('admin/lihat/lh_kk_kurang',$data);
	$this->load->view('admin/v_footer');
}



function lihat_ktp_baru($id){
	$this->load->database();
	$where=array(
		'surat_mohon_id' =>	$id
	);

	$data['ktp_baru']=$this->m_dah->edit_data($where,'sr_ktp_baru')->result();
	
	$this->load->view('admin/v_header');
	$this->load->view('admin/lihat/lh_ktp_baru',$data);
	$this->load->view('admin/v_footer');
}

function lihat_ktp_hilang($id){
	$this->load->database();

	$where=array(
		'surat_mohon_id' =>	$id
	);

	$data['ktp_hilang']=$this->m_dah->edit_data($where,'sr_ktp_hilang')->result();
	
	$this->load->view('admin/v_header');
	$this->load->view('admin/lihat/lh_ktp_hilang',$data);
	$this->load->view('admin/v_footer');

}

function lihat_akte_lahir($id){
	$this->load->database();

	$where=array(
		'surat_mohon_id' =>	$id
	);

	$data['akte_lahir']=$this->m_dah->edit_data($where,'sr_akte_lahir')->result();
	
	$this->load->view('admin/v_header');
	$this->load->view('admin/lihat/lh_akte_lahir',$data);
	$this->load->view('admin/v_footer');
}

function lihat_akte_mati($id){
	$this->load->database();
	$where=array(
		'surat_mohon_id' =>	$id
	);

	$data['akte_mati']=$this->m_dah->edit_data($where,'sr_akte_mati')->result();
	
	$this->load->view('admin/v_header');
	$this->load->view('admin/lihat/lh_akte_mati',$data);
	$this->load->view('admin/v_footer');
}

function lihat_pindah($id){
	$this->load->database();
	$where=array(
		'surat_mohon_id' =>	$id
	);

	$data['ket_pindah']=$this->m_dah->edit_data($where,'sr_ket_pindah')->result();
	
	$this->load->view('admin/v_header');
	$this->load->view('admin/lihat/lh_ket_pindah',$data);
	$this->load->view('admin/v_footer');
}

function lihat_ket_miskin($id){
	$this->load->database();
	$where=array(
		'surat_mohon_id' =>	$id
	);

	$data['ket_miskin']=$this->m_dah->edit_data($where,'sr_ket_miskin')->result();
	
	$this->load->view('admin/v_header');
	$this->load->view('admin/lihat/lh_ket_miskin',$data);
	$this->load->view('admin/v_footer');
}

function lihat_ket_nikah($id){
	$this->load->database();
	$where=array(
		'surat_mohon_id' =>	$id
	);

	$data['ket_nikah']=$this->m_dah->edit_data($where,'sr_ket_nikah')->result();
	
	$this->load->view('admin/v_header');
	$this->load->view('admin/lihat/lh_ket_nikah',$data);
	$this->load->view('admin/v_footer');
}

function lihat_ket_belum_nikah($id){
	$this->load->database();
	$where=array(
		'surat_mohon_id' =>	$id
	);

	$data['belum_nikah']=$this->m_dah->edit_data($where,'sr_belum_nikah')->result();
	
	$this->load->view('admin/v_header');
	$this->load->view('admin/lihat/lh_ket_nikah_b',$data);
	$this->load->view('admin/v_footer');
}

function lihat_ket_cerai($id){
	$this->load->database();
	$where=array(
		'surat_mohon_id' =>	$id
	);

	$data['ket_cerai']=$this->m_dah->edit_data($where,'sr_ket_cerai')->result();
	
	$this->load->view('admin/v_header');
	$this->load->view('admin/lihat/lh_ket_cerai',$data);
	$this->load->view('admin/v_footer');
}


function tester(){

	$this->load->view('admin/v_header');
	$this->load->view('tester');

	$this->load->view('admin/v_footer');

}

function tes_jam(){
	$this->load->database();
	$tgl=$this->input->post('tgl');
	$jam=$this->input->post('jam');

	$hasil =$tgl." ".$jam;

	$data=array(
		'tgl'=> $hasil
	);

	$this->m_dah->insert_data($data,'tes_in');

	redirect(base_url().'user/tester');

}


// update_notif user

function update_notif($id){
	 $this->load->database();
	
	$where=array(
		'penduduk_id' => $id
	);
	$data=array(
		'notif' => 3
	);

	$this->m_dah->update_data($where,$data,'surat_mohon');
}


function mohon_surat($id){
 	$this->load->database();
 	$where = array(
	'id' => $id
	);
 	$data['penduduk']=$this->m_dah->get_data('penduduk')->result();
	
	$id_user=$this->session->userdata('penduduk_id');
	$where_user=array(
		'id' => $id_user
	);
	$data['data_diri']=$this->m_dah->edit_data($where_user,'penduduk')->result();

	
    $data['surat'] = $this->m_dah->edit_data($where,'jenis_surat')->result();

	$this->load->view('admin/v_header');
	$this->load->view('admin/mohon_surat/v_aju_surat',$data);
	$this->load->view('admin/v_footer');
}

function mohon_surat_act(){
 	$this->load->database();
	$id_user=$this->session->userdata('penduduk_id');

	$rand = rand(1000,9999);
	
	$kode_surat=$this->input->post('kode_surat');
	$id_surat=$this->input->post('id_surat');

	$kode_mohon=$kode_surat."-".$rand;


	$data_sr= array(
		'penduduk_id' => $id_user,
		'surat_id' => $id_surat,
		'kode_surat' => $kode_surat,
		'tgl_ajukan' => date('Y-m-d'),
		'nomor_mohon_surat' => $kode_mohon,
		'status' => "review"
	);
	$this->m_dah->insert_data($data_sr,'jenis_mohon');
	$id_terakhir = $this->db->insert_id();	

	$config['upload_path'] = './upload/syarat/';
	$config['allowed_types'] = 'jpg|png|jpeg|pdf';
	if($_FILES["upload"]["name"]){
		$rand1=rand(1000,9999);
		$config['file_name'] = $rand1.'_'.$_FILES['upload']['name'];				
		$this->load->library('upload', $config);
		$upload = $this->upload->do_upload('upload');
		if (!$upload){
			$error = array('error' => $this->upload->display_errors());
		}else{
			$upload = $this->upload->data("file_name");
			$data = array('upload_data' => $this->upload->data());
			$this->m_dah->update_data(array('id' => $id_terakhir),array('upload' => $upload),'jenis_mohon');			
		}
	
	}

	redirect(base_url().'admin/sesi_surat/?alert=terkirim');

}

function lihat_surat_lain($id){
	$this->load->database();
	$id_user=$this->session->userdata('penduduk_id');
	$where=array(
		'nomor_mohon_surat' =>	$id
	);

	$data['surat']=$this->m_dah->edit_data($where,'jenis_mohon')->result();
	
	$this->load->view('admin/v_header');
	$this->load->view('admin/lihat/lh_surat_lain',$data);
	$this->load->view('admin/v_footer');
}

















}
