<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cetak extends CI_Controller {

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

 function cetak_kk_baru($id){
        $this->load->database();

        if($id === ""){
            redirect(base_url().'admin');
        }else{          
            $where = array(
                'surat_mohon_id' => $id
             ); 
            $data['surat_mohon'] = $this->m_dah->edit_data($where,'surat_mohon')->result();
            $data['data_surat']=$this->m_dah->edit_data($where,'sr_kk_baru')->result();
            $this->load->view('admin/asurat_template/header_surat');
            $this->load->view('admin/asurat_template/sr_pengantar_kk_baru',$data);
            $this->load->view('admin/asurat_template/footer_surat');
        }
    }
    function cetak_kk_tambah($id){
        $this->load->database();

        if($id === ""){
            redirect(base_url().'admin');
        }else{          
            $where = array(
                'surat_mohon_id' => $id
             ); 
            $data['surat_mohon'] = $this->m_dah->edit_data($where,'surat_mohon')->result();
            $data['data_surat']=$this->m_dah->edit_data($where,'sr_kk_tambah')->result();
            $this->load->view('admin/asurat_template/header_surat');
            $this->load->view('admin/asurat_template/sr_pengantar_kk_tambah',$data);
            $this->load->view('admin/asurat_template/footer_surat');
        }
    }

    function cetak_kk_kurang($id){
        $this->load->database();

        if($id === ""){
            redirect(base_url().'admin');
        }else{          
            $where = array(
                'surat_mohon_id' => $id
             ); 
            $data['surat_mohon'] = $this->m_dah->edit_data($where,'surat_mohon')->result();
            $data['data_surat']=$this->m_dah->edit_data($where,'sr_kk_kurang')->result();
            $this->load->view('admin/asurat_template/header_surat');
            $this->load->view('admin/asurat_template/sr_pengantar_kk_kurang',$data);
            $this->load->view('admin/asurat_template/footer_surat');
        }
    }


    function cetak_ktp_baru($id){
        $this->load->database();

        if($id === ""){
            redirect(base_url().'admin');
        }else{          
            $where = array(
                'surat_mohon_id' => $id
             ); 
            $data['surat_mohon'] = $this->m_dah->edit_data($where,'surat_mohon')->result();
            $data['data_surat']=$this->m_dah->edit_data($where,'sr_ktp_baru')->result();
            $this->load->view('admin/asurat_template/header_surat');
            $this->load->view('admin/asurat_template/sr_pengantar_ktp_baru',$data);
            $this->load->view('admin/asurat_template/footer_surat');
        }
    }

    function cetak_ktp_hilang($id){
        $this->load->database();

        if($id === ""){
            redirect(base_url().'admin');
        }else{			
            $where = array(
                'surat_mohon_id' => $id
             );	
            $data['surat_mohon'] = $this->m_dah->edit_data($where,'surat_mohon')->result();
            $data['data_surat']=$this->m_dah->edit_data($where,'sr_ktp_hilang')->result();
            $this->load->view('admin/asurat_template/header_surat');
            $this->load->view('admin/asurat_template/sr_pengantar_ktp_hilang',$data);
            $this->load->view('admin/asurat_template/footer_surat');
        }
    }

    function cetak_akte_lahir($id){
        $this->load->database();

        if($id === ""){
            redirect(base_url().'admin');
        }else{			
            $where = array(
                'surat_mohon_id' => $id
             );	
            $data['surat_mohon'] = $this->m_dah->edit_data($where,'surat_mohon')->result();
            $data['data_surat']=$this->m_dah->edit_data($where,'sr_akte_lahir')->result();
            $this->load->view('admin/asurat_template/header_surat');
            $this->load->view('admin/asurat_template/sr_pengantar_akte_lahir',$data);
            $this->load->view('admin/asurat_template/footer_surat');
        }
    }

    function cetak_akte_mati($id){
        $this->load->database();

        if($id === ""){
            redirect(base_url().'admin');
        }else{			
            $where = array(
                'surat_mohon_id' => $id
             );	
            $data['surat_mohon'] = $this->m_dah->edit_data($where,'surat_mohon')->result();
            $data['data_surat']=$this->m_dah->edit_data($where,'sr_akte_mati')->result();
            $this->load->view('admin/asurat_template/header_surat');
            $this->load->view('admin/asurat_template/sr_pengantar_akte_mati',$data);
            $this->load->view('admin/asurat_template/footer_surat');
        }
    }

    function cetak_pindah($id){
        $this->load->database();

        if($id === ""){
            redirect(base_url().'admin');
        }else{			
            $where = array(
                'surat_mohon_id' => $id
             );	
            $data['surat_mohon'] = $this->m_dah->edit_data($where,'surat_mohon')->result();
            $data['data_surat']=$this->m_dah->edit_data($where,'sr_ket_pindah')->result();
            $this->load->view('admin/asurat_template/header_surat');
            $this->load->view('admin/asurat_template/sr_pengantar_pindah',$data);
            $this->load->view('admin/asurat_template/footer_surat');
        }
    }

    function cetak_ket_miskin($id){
        $this->load->database();

        if($id === ""){
            redirect(base_url().'admin');
        }else{			
            $where = array(
                'surat_mohon_id' => $id
             );	
            $data['surat_mohon'] = $this->m_dah->edit_data($where,'surat_mohon')->result();
            $data['data_surat']=$this->m_dah->edit_data($where,'sr_ket_miskin')->result();
            $this->load->view('admin/asurat_template/header_surat');
            $this->load->view('admin/asurat_template/sr_ket_miskin',$data);
            $this->load->view('admin/asurat_template/footer_surat');
        }
    }


 function cetak_ket_nikah($id){
        $this->load->database();

        if($id === ""){
            redirect(base_url().'admin');
        }else{          
            $where = array(
                'surat_mohon_id' => $id
             ); 
            $data['surat_mohon'] = $this->m_dah->edit_data($where,'surat_mohon')->result();
            $data['data_surat']=$this->m_dah->edit_data($where,'sr_ket_nikah')->result();
            $this->load->view('admin/asurat_template/header_surat');
            $this->load->view('admin/asurat_template/sr_ket_nikah',$data);
            $this->load->view('admin/asurat_template/footer_surat');
        }
    }

    function cetak_ket_belum_nikah($id){
        $this->load->database();

        if($id === ""){
            redirect(base_url().'admin');
        }else{			
            $where = array(
                'surat_mohon_id' => $id
             );	
            $data['surat_mohon'] = $this->m_dah->edit_data($where,'surat_mohon')->result();
            $data['data_surat']=$this->m_dah->edit_data($where,'sr_belum_nikah')->result();
            $this->load->view('admin/asurat_template/header_surat');
            $this->load->view('admin/asurat_template/sr_ket_belum_nikah',$data);
            $this->load->view('admin/asurat_template/footer_surat');
        }
    }

     function cetak_ket_cerai($id){
        $this->load->database();

        if($id === ""){
            redirect(base_url().'admin');
        }else{          
            $where = array(
                'surat_mohon_id' => $id
             ); 
            $data['surat_mohon'] = $this->m_dah->edit_data($where,'surat_mohon')->result();
            $data['data_surat']=$this->m_dah->edit_data($where,'sr_ket_cerai')->result();
            $this->load->view('admin/asurat_template/header_surat');
            $this->load->view('admin/asurat_template/sr_ket_cerai',$data);
            $this->load->view('admin/asurat_template/footer_surat');
        }
    }


         function cetak_surat_lain($id){
        $this->load->database();

        if($id === ""){
            redirect(base_url().'admin');
        }else{          
            $where = array(
                'nomor_mohon_surat' => $id
             ); 
            $data['surat'] = $this->m_dah->edit_data($where,'jenis_mohon')->result();
            $this->load->view('admin/asurat_template/header_surat');
            $this->load->view('admin/asurat_template/sr_surat_lain',$data);
            $this->load->view('admin/asurat_template/footer_surat');
        }
    }







}   