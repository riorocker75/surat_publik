<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {

	function __construct(){
		parent::__construct();
		date_default_timezone_set('Asia/Jakarta');
		$this->load->helper('url');
		$this->load->helper('dah_helper');
		$this->load->library(array('session','form_validation','cart'));	
		$this->load->model('m_dah');
		if($this->session->userdata('status') != "login"){
			redirect(base_url().'xlog');
		}
	}	

	public function index(){
		$this->load->database();			
		
		$this->load->view('admin/v_header');
		$this->load->view('admin/v_index');
		$this->load->view('admin/v_footer');
	}

	function logout(){
		$this->session->sess_destroy();
		redirect(base_url());
	}


	function settings(){
		$this->load->database();
		$this->load->view('admin/v_header');
		$this->load->view('admin/v_settings');
		$this->load->view('admin/v_footer');
	}

	function settings_act(){
		$this->load->database();		
		$blog_name = $this->input->post('blog_name');
		$blog_description = $this->input->post('blog_description');	
		$blog_welcome = $this->input->post('blog_welcome');		

		$this->m_dah->update_data(array('option_name' => 'blog_name'),array('option_value' => $blog_name),'dah_options');
		$this->m_dah->update_data(array('option_name' => 'blog_description'),array('option_value' => $blog_description),'dah_options');
		$this->m_dah->update_data(array('option_name' => 'blog_welcome'),array('option_value' => $blog_welcome),'dah_options');

		$rand = rand();
		$config['upload_path'] = './dah_image/system/';
		$config['allowed_types'] = 'gif|jpg|png';				
		$config['file_name'] = $rand.'_'.$_FILES['blog_logo']['name'];				
		$this->load->library('upload', $config);

		if($_FILES['blog_logo']['name'] != ""){			
			if(!$this->upload->do_upload('blog_logo')){			
				$error = array('error' => $this->upload->display_errors());			
				$this->load->view('admin/v_header');
				$this->load->view('admin/v_settings',$error);
				$this->load->view('admin/v_footer');
			}else{
				$data = array('upload_data' => $this->upload->data());			
				$file_name = $data['upload_data']['file_name'];
				@chmod("./dah_image/system/" . $this->m_dah->get_option('blog_logo'), 0777);
				@unlink('./dah_image/system/' . $this->m_dah->get_option('blog_logo'));
				$this->m_dah->update_data(array('option_name' => 'blog_logo'),array('option_value' => $file_name),'dah_options');			
				redirect('admin/settings/?alert=setting-update');			
			}
		}else{			
			redirect('admin/settings/?alert=setting-update');			
		}		
	}

	// page
	function page(){		
		$this->load->database();		
		$data['page'] = $this->m_dah->get_data('dah_pages')->result();
		$this->load->view('admin/v_header');
		$this->load->view('admin/v_page',$data);
		$this->load->view('admin/v_footer');	
	}

	function page_add(){		
		$this->load->database();					
		$this->load->view('admin/v_header');
		$this->load->view('admin/v_page_add');
		$this->load->view('admin/v_footer');	
	}

	function page_add_act(){		
		$this->load->database();		
		$page_tittle = $this->input->post('page_tittle');
		$page_content = $this->input->post('page_content');
		$page_status = $this->input->post('save');
		$this->form_validation->set_rules('page_tittle','Page Tittle','required');
		if($this->form_validation->run() != true){
			$this->load->view('admin/v_header');
			$this->load->view('admin/v_page_add');
			$this->load->view('admin/v_footer');
		}else{			
			$url = create_slug($page_tittle);	

			// $w = array(
			// 	'page_tittle' => $page_tittle
			// 	);
			// $cek_sama = $this->m_dah->edit_data($w,'dah_pages')->num_rows();
			// if($cek_sama > 0){
			// 	$c = $cek_sama + 1;
			// 	$u = $url.$c;
			// }else{
			// 	$u = $url;
			// }

			$data = array(
				'page_tittle' => $page_tittle,
				'page_url' => $url,
				'page_content' => $page_content,
				'page_status' => $page_status
				);
			$this->m_dah->insert_data($data,'dah_pages');
			$id_terakhir = $this->db->insert_id();			

			// add cover image 
			if($_FILES['page_cover']['name'] == ""){				
				redirect(base_url().'admin/page/?alert=page-saved');
			}else{
				$config['upload_path'] = './dah_image/page/';
				$config['allowed_types'] = 'gif|jpg|png';				
				$this->load->library('upload', $config);
				$this->upload->do_upload('page_cover');
				$data = array('upload_data' => $this->upload->data());			
				$file_name = $data['upload_data']['file_name'];
				$this->m_dah->update_data(array('page_id' => $id_terakhir),array('page_cover' => $file_name),'dah_pages');			
				redirect(base_url().'admin/page/?alert=page-saved');	
			}
			// end add cover image			
		}			
	}

	function page_delete($id){
		$this->load->database();
		if($id == ""){
			redirect('admin/page');
		}else{
			$where = array(
				'page_id' => $id
				);

			$data = $this->m_dah->edit_data($where,'dah_pages')->row();
			@chmod("./dah_image/page/" . $data->page_cover, 0777);
			@unlink('./dah_image/page/' . $data->page_cover);

			$this->m_dah->delete_data($where,'dah_pages');
			redirect('admin/page/?alert=page-delete');
		}
	}

	function page_edit($id){
		$this->load->database();	
		if($id == ""){
			redirect('admin/pages');
		}else{			
			$where = array(
				'page_id' => $id
				);	
			$data['page'] = $this->m_dah->edit_data($where,'dah_pages')->result();			
			$this->load->view('admin/v_header');
			$this->load->view('admin/v_page_edit',$data);
			$this->load->view('admin/v_footer');
		}
	}

	function page_update(){		
		$this->load->database();		
		$page_id = $this->input->post('id');
		$page_tittle = $this->input->post('page_tittle');
		$page_content = $this->input->post('page_content');
		$page_status = $this->input->post('save');
		$where = array(
				'page_id' => $page_id
				);	
		$this->form_validation->set_rules('page_tittle','Page Tittle','required');
		if($this->form_validation->run() != true){			
			$data['page'] = $this->m_dah->edit_data($where,'dah_pages')->result();			
			$this->load->view('admin/v_header');
			$this->load->view('admin/v_page_edit',$data);
			$this->load->view('admin/v_footer');
		}else{			
			$url = create_slug($page_tittle);					
			$data = array(
				'page_tittle' => $page_tittle,
				'page_url' => $url,
				'page_content' => $page_content,
				'page_status' => $page_status
				);
			$this->m_dah->update_data($where,$data,'dah_pages');			
			// add cover image 
			if($_FILES['page_cover']['name'] == ""){				
				redirect(base_url().'admin/page/?alert=page-saved');
			}else{
				$config['upload_path'] = './dah_image/page/';
				$config['allowed_types'] = 'gif|jpg|png';				
				$this->load->library('upload', $config);
				$this->upload->do_upload('page_cover');
				$data = array('upload_data' => $this->upload->data());			
				$file_name = $data['upload_data']['file_name'];
				$this->m_dah->update_data(array('page_id' => $page_id),array('page_cover' => $file_name),'dah_pages');			
				redirect(base_url().'admin/page/?alert=page-saved');	
			}
			// end add cover image			
		}			
	}

	
	

	
	
	// end menu

	// user
	function users(){
		$this->load->database();
		$data['users'] = $this->m_dah->get_data('dah_users')->result();
		$this->load->view('admin/v_header');		
		$this->load->view('admin/v_users',$data);		
		$this->load->view('admin/v_footer');		
	}

	function user_add(){
		$this->load->database();		
		$this->load->view('admin/v_header');		
		$this->load->view('admin/v_users_add');		
		$this->load->view('admin/v_footer');		
	}

	function user_add_act(){
		$this->load->database();		
		$this->form_validation->set_rules('name','Name','required');
		$this->form_validation->set_rules('email','email','required');
		$this->form_validation->set_rules('username','username','required');
		$this->form_validation->set_rules('password','password','required');
		if($this->form_validation->run() == false){
			$this->load->view('admin/v_header');		
			$this->load->view('admin/v_users_add');		
			$this->load->view('admin/v_footer');
		}else{			
			$data = array(
				'user_name' => $this->input->post('name'),
				'user_email' => $this->input->post('email'),
				'user_login' => $this->input->post('username'),
				'user_pass' => md5($this->input->post('password')),
				'user_level' => $this->input->post('level'),
				'user_status' => $this->input->post('status')
				);
			$this->m_dah->insert_data($data,'dah_users');			
			redirect('admin/users/?alert=user-add');	
		}		
	}

	function cek_username_ajax(){
		$this->load->database();
		$val = $this->input->post('val');		
		echo $this->m_dah->edit_data(array('user_login' => $val),'user')->num_rows();
	}

	function cek_email_ajax(){
		$this->load->database();
		$val = $this->input->post('valemail');		
		echo $this->m_dah->edit_data(array('user_email' => $val),'user')->num_rows();
	}

	function user_edit($id){
		$this->load->database();	
		if($id == ""){
			redirect(base_url());
		}else{			
			$where = array(
				'user_id' => $id
				);				
			$data['user'] = $this->m_dah->edit_data($where,'user')->result();			
			$this->load->view('admin/v_header');
			$this->load->view('admin/v_users_edit',$data);
			$this->load->view('admin/v_footer');
		}
	}

	function user_update(){
		$this->load->database();		
		$id = $this->input->post('id');
		$this->form_validation->set_rules('user_login','Username','required');
		if($this->form_validation->run() == false){
			$where = array(
				'user_id' => $id
				);				
			$data['user'] = $this->m_dah->edit_data($where,'user')->result();			
			$this->load->view('admin/v_header');
			$this->load->view('admin/v_users_edit',$data);
			$this->load->view('admin/v_footer');
		}else{			
			$password = $this->input->post('password');
			$where = array(
				'user_id' => $id
				);
			if($password != ""){
				$data = array(
					'user_login' => $this->input->post('user_login'),
					'user_email' => $this->input->post('email'),
					'user_pass' => md5($password)
					);				
			}else{
				$data = array(
					'user_login' => $this->input->post('user_login'),
					'user_email' => $this->input->post('email')
				
					);		
			}			
			$this->m_dah->update_data($where,$data,'user');			
			redirect('admin/user_edit/'.$id.'/?alert=user-update');	
		}				
	}

	// end user

	
	function update_option(){
		$this->load->database();
		$option = $this->input->post('option');
		$value = $this->input->post('value');
		$where = array(
			'option_name' => $option
			);
		$data = array(
			'option_value' => $value
			);
		$this->m_dah->update_data($where,$data,'dah_options');
	}

	function update_sort_widget(){
		$this->load->database();

		$widget = $this->input->post('widget');
		$posisi = $this->input->post('posisi');	
				
		for($x=0;$x<count($widget);$x++){
			$where = array(
				'widget_position' => $posisi,
				'widget_id' => $widget[$x]
				);
			$data = array(
				'widget_sort' => $x
				);
			$this->m_dah->update_data($where,$data,'dah_widget');
		}
	}

	function update_sort_menu(){
		$this->load->database();		
		$menu = $this->input->post('menu');		
		$mother = $this->input->post('mother');

		$mother_tujuan = $this->input->post('mother_tujuan');						
		$selected = $this->input->post('selected');		
		$parent = $this->input->post('parent');		

		// pindah tempat
		$where_selected = array(
			'menu_id' => $selected
			);
		$update_parent = array(
			'menu_parent' => $parent,
			'menu_mother' => $mother_tujuan
			);
		$this->m_dah->update_data($where_selected,$update_parent,'dah_menu');
		$where_anak_parent = array(
			'menu_parent' => $selected
			);
		$update_anak_parent = array(
			'menu_mother' => $mother_tujuan
			);
		$this->m_dah->update_data($where_anak_parent,$update_anak_parent,'dah_menu');
		// pindah tempat

		// urutkan
		for($x=0;$x<count($menu);$x++){
			$where = array(
				'menu_mother' => $mother,
				'menu_id' => $menu[$x]
				);
			$data = array(
				'menu_sort' => $x
				);
			$this->m_dah->update_data($where,$data,'dah_menu');
		}
		// urutkan
		
	}
	/*
|---------------------------------
|	Bagian tambah data agama
|----------------------------------
*/

	function agama(){
		$this->load->database();
		
		$data['agama']=$this->m_dah->get_data('agama')->result();
		$this->load->view('admin/v_header');
		$this->load->view('admin/data_opsi/v_data_agama',$data);
		$this->load->view('admin/v_footer');
	}

	function agama_add(){
		$this->load->database();
		$this->form_validation->set_rules('agama','Agama','required');
		if($this->form_validation->run() != true){
			$data['agama'] = $this->m_dah->get_data('agama')->result();
			$this->load->view('admin/v_header');
			$this->load->view('admin/data_opsi/v_data_agama',$data);
			$this->load->view('admin/v_footer');
		}else{
			$agama = $this->input->post('agama');
			$data=array(
				'agama' => $agama
			);
			$this->m_dah->insert_data($data,'agama');
			redirect(base_url().'admin/agama?alert=add');
		}
	
	}

	function agama_edit($id){
		$this->load->database();

		if($id == ""){
			// redirect('admin/agama');
		}else{			
			$where = array(
				'id' => $id
				);	
			$data['edit'] = $this->m_dah->edit_data($where,'agama')->result();
			$data['agama']=$this->m_dah->get_data('agama')->result();

			$this->load->view('admin/v_header');
			$this->load->view('admin/data_opsi/v_edit_agama',$data);
			$this->load->view('admin/v_footer');
		}
		
	}
	function agama_update(){
		$this->load->database();
		$id = $this->input->post('id');
		$this->form_validation->set_rules('agama','agama','required');
		if($this->form_validation->run() != true){
			$where = array(
				'id' => $id
				);	
			$data['edit'] = $this->m_dah->edit_data($where,'agama')->result();
			$data['agama'] = $this->m_dah->get_data('agama')->result();
			$this->load->view('admin/v_header');
			$this->load->view('admin/data_opsi/v_edit_agama',$data);
			$this->load->view('admin/v_footer');
		}else{			
			$agama = $this->input->post('agama');
			$data = array(
				'agama' => $agama
				);
			
			$w = array(
				'id' => $id
				);
			$this->m_dah->update_data($w,$data,'agama');
			redirect(base_url().'admin/agama/?alert=update');
		}	
		
	}

	function agama_delete($id){
		$this->load->database();
		if($id == ""){
			redirect('admin/agama');
		}else{
			$wt = array(
				'id' => $id
				);
			$this->m_dah->delete_data($wt,'agama');
			
			redirect('admin/agama/?alert=delete');
		}
	}

/*
|---------------------------------
|	Bagian tambah data pendidikan
|----------------------------------
*/
function pendidikan(){
	$this->load->database();
	
	$data['pendidikan']=$this->m_dah->get_data('pendidikan')->result();
	$this->load->view('admin/v_header');
	$this->load->view('admin/data_opsi/v_data_pendidikan',$data);
	$this->load->view('admin/v_footer');
}

function pendidikan_add(){
	$this->load->database();
	$this->form_validation->set_rules('pendidikan','pendidikan','required');
	if($this->form_validation->run() != true){
		$data['pendidikan'] = $this->m_dah->get_data('pendidikan')->result();
		$this->load->view('admin/v_header');
		$this->load->view('admin/data_opsi/v_data_pendidikan',$data);
		$this->load->view('admin/v_footer');
	}else{
		$pendidikan = $this->input->post('pendidikan');
		$data=array(
			'pendidikan' => $pendidikan
		);
		$this->m_dah->insert_data($data,'pendidikan');
		redirect(base_url().'admin/pendidikan?alert=add');
	}

}

function pendidikan_edit($id){
	$this->load->database();

	if($id == ""){
		// redirect('admin/pendidikan');
	}else{			
		$where = array(
			'id' => $id
			);	
		$data['edit'] = $this->m_dah->edit_data($where,'pendidikan')->result();
		$data['pendidikan']=$this->m_dah->get_data('pendidikan')->result();

		$this->load->view('admin/v_header');
		$this->load->view('admin/data_opsi/v_edit_pendidikan',$data);
		$this->load->view('admin/v_footer');
	}
	
}
function pendidikan_update(){
	$this->load->database();
	$id = $this->input->post('id');
	$this->form_validation->set_rules('pendidikan','pendidikan','required');
	if($this->form_validation->run() != true){
		$where = array(
			'id' => $id
			);	
		$data['edit'] = $this->m_dah->edit_data($where,'pendidikan')->result();
		$data['pendidikan'] = $this->m_dah->get_data('pendidikan')->result();
		$this->load->view('admin/v_header');
		$this->load->view('admin/data_opsi/v_edit_pendidikan',$data);
		$this->load->view('admin/v_footer');
	}else{			
		$pendidikan = $this->input->post('pendidikan');
		$data = array(
			'pendidikan' => $pendidikan
			);
		
		$w = array(
			'id' => $id
			);
		$this->m_dah->update_data($w,$data,'pendidikan');
		redirect(base_url().'admin/pendidikan/?alert=update');
	}	
	
}

function pendidikan_delete($id){
	$this->load->database();
	if($id == ""){
		redirect('admin/pendidikan');
	}else{
		$wt = array(
			'id' => $id
			);
		$this->m_dah->delete_data($wt,'pendidikan');
		
		redirect('admin/pendidikan/?alert=delete');
	}
}

/*
|---------------------------------
|	Bagian tambah data pekerjaan
|----------------------------------
*/
function pekerjaan(){
	$this->load->database();
	
	$data['pekerjaan']=$this->m_dah->get_data('pekerjaan')->result();
	$this->load->view('admin/v_header');
	$this->load->view('admin/data_opsi/v_data_pekerjaan',$data);
	$this->load->view('admin/v_footer');
}

function pekerjaan_add(){
	$this->load->database();
	$this->form_validation->set_rules('pekerjaan','pekerjaan','required');
	if($this->form_validation->run() != true){
		$data['pekerjaan'] = $this->m_dah->get_data('pekerjaan')->result();
		$this->load->view('admin/v_header');
		$this->load->view('admin/data_opsi/v_data_pekerjaan',$data);
		$this->load->view('admin/v_footer');
	}else{
		$pekerjaan = $this->input->post('pekerjaan');
		$data=array(
			'pekerjaan' => $pekerjaan
		);
		$this->m_dah->insert_data($data,'pekerjaan');
		redirect(base_url().'admin/pekerjaan?alert=add');
	}

}

function pekerjaan_edit($id){
	$this->load->database();

	if($id == ""){
		// redirect('admin/pekerjaan');
	}else{			
		$where = array(
			'id' => $id
			);	
		$data['edit'] = $this->m_dah->edit_data($where,'pekerjaan')->result();
		$data['pekerjaan']=$this->m_dah->get_data('pekerjaan')->result();

		$this->load->view('admin/v_header');
		$this->load->view('admin/data_opsi/v_edit_pekerjaan',$data);
		$this->load->view('admin/v_footer');
	}
	
}
function pekerjaan_update(){
	$this->load->database();
	$id = $this->input->post('id');
	$this->form_validation->set_rules('pekerjaan','pekerjaan','required');
	if($this->form_validation->run() != true){
		$where = array(
			'id' => $id
			);	
		$data['edit'] = $this->m_dah->edit_data($where,'pekerjaan')->result();
		$data['pekerjaan'] = $this->m_dah->get_data('pekerjaan')->result();
		$this->load->view('admin/v_header');
		$this->load->view('admin/data_opsi/v_edit_pekerjaan',$data);
		$this->load->view('admin/v_footer');
	}else{			
		$pekerjaan = $this->input->post('pekerjaan');
		$data = array(
			'pekerjaan' => $pekerjaan
			);
		
		$w = array(
			'id' => $id
			);
		$this->m_dah->update_data($w,$data,'pekerjaan');
		redirect(base_url().'admin/pekerjaan/?alert=update');
	}	
	
}

function pekerjaan_delete($id){
	$this->load->database();
	if($id == ""){
		redirect('admin/pekerjaan');
	}else{
		$wt = array(
			'id' => $id
			);
		$this->m_dah->delete_data($wt,'pekerjaan');
		
		redirect('admin/pekerjaan/?alert=delete');
	}
}
/*
|---------------------------------
|	Bagian tambah data jabatan
|----------------------------------
*/
function jabatan(){
	$this->load->database();
	
	$data['jabatan']=$this->m_dah->get_data_desc('id','jabatan')->result();
	$this->load->view('admin/v_header');
	$this->load->view('admin/data_opsi/v_data_jabatan',$data);
	$this->load->view('admin/v_footer');
}

function jabatan_add(){
	$this->load->database();
	$this->form_validation->set_rules('jabatan','jabatan','required');
	if($this->form_validation->run() != true){
		$data['jabatan'] = $this->m_dah->get_data('jabatan')->result();
		$this->load->view('admin/v_header');
		$this->load->view('admin/data_opsi/v_data_jabatan',$data);
		$this->load->view('admin/v_footer');
	}else{
		$jabatan = $this->input->post('jabatan');
		$data=array(
			'jabatan' => $jabatan
		);
		$this->m_dah->insert_data($data,'jabatan');
		redirect(base_url().'admin/jabatan?alert=add');
	}

}

function jabatan_edit($id){
	$this->load->database();

	if($id == ""){
		// redirect('admin/jabatan');
	}else{			
		$where = array(
			'id' => $id
			);	
		$data['edit'] = $this->m_dah->edit_data($where,'jabatan')->result();
		$data['jabatan']=$this->m_dah->get_data('jabatan')->result();

		$this->load->view('admin/v_header');
		$this->load->view('admin/data_opsi/v_edit_jabatan',$data);
		$this->load->view('admin/v_footer');
	}
	
}
function jabatan_update(){
	$this->load->database();
	$id = $this->input->post('id');
	$this->form_validation->set_rules('jabatan','jabatan','required');
	if($this->form_validation->run() != true){
		$where = array(
			'id' => $id
			);	
		$data['edit'] = $this->m_dah->edit_data($where,'jabatan')->result();
		$data['jabatan'] = $this->m_dah->get_data('jabatan')->result();
		$this->load->view('admin/v_header');
		$this->load->view('admin/data_opsi/v_edit_jabatan',$data);
		$this->load->view('admin/v_footer');
	}else{			
		$jabatan = $this->input->post('jabatan');
		$data = array(
			'jabatan' => $jabatan
			);
		
		$w = array(
			'id' => $id
			);
		$this->m_dah->update_data($w,$data,'jabatan');
		redirect(base_url().'admin/jabatan/?alert=update');
	}	
	
}

function jabatan_delete($id){
	$this->load->database();
	if($id == ""){
		redirect('admin/jabatan');
	}else{
		$wt = array(
			'id' => $id
			);
		$this->m_dah->delete_data($wt,'jabatan');
		
		redirect('admin/jabatan/?alert=delete');
	}
}

/*
|---------------------------------
|	Bagian tambah data struktur Jabatan gampong
|----------------------------------
*/
function struktur_jabatan(){
	$this->load->database();
	$where=array(
		'jabatan_status' => 1
	);
	// $data['user']=$this->m_dah->get_data('user')->result();
	$data['penduduk']=$this->m_dah->get_data('penduduk')->result();
	$data['jabatan']=$this->m_dah->get_data('jabatan')->result();

	$data['pejabat']=$this->m_dah->edit_data($where,'user')->result();
	$this->load->view('admin/v_header');
	$this->load->view('admin/v_struktur_jab_data',$data);
	$this->load->view('admin/v_footer');
}

function struktur_jab_add(){
	$this->load->database();
	$this->form_validation->set_rules('id_penduduk','Nomor Penduduk','required');
	$this->form_validation->set_rules('jabatan','Jabatan','required');
	
	if($this->form_validation->run() != true){
		$where=array(
			'jabatan_status' => 1
		);
		$data['penduduk']=$this->m_dah->get_data('penduduk')->result();
		$data['jabatan']=$this->m_dah->get_data('jabatan')->result();
		$data['pejabat']=$this->m_dah->edit_data($where,'user')->result();
		$this->load->view('admin/v_header');
		$this->load->view('admin/v_struktur_jab_data',$data);
		$this->load->view('admin/v_footer');
	}else{
		$jabatan = $this->input->post('jabatan');
		$w=array(
			'penduduk_id' => $this->input->post('id_penduduk')
		);
		

		if($jabatan == 1){
			$data=array(
			'jabatan' => $jabatan,
			'jabatan_status' => 1,
			'user_lvl' => 'lurah'
			);
			$this->m_dah->update_data($w,$data,'user');

		}elseif($jabatan == 2){
			$data=array(
			'jabatan' => $jabatan,
			'jabatan_status' => 1,
			'user_lvl' => 'admin'
			);
			$this->m_dah->update_data($w,$data,'user');

		}else{
			$data=array(
			'jabatan' => $jabatan,
			'jabatan_status' => 1
			);
			$this->m_dah->update_data($w,$data,'user');
		}

		redirect(base_url().'admin/struktur_jabatan?alert=add');
	}

}

function struktur_jab_delete($id){
	$this->load->database();
	if($id == ""){
		redirect('admin/struktur_jabatan');
	}else{
		$w=array(
			'penduduk_id' =>$id
		);
		$data=array(
			'jabatan' => 0,
			'jabatan_status' => 0,
			'user_lvl' => "rakyat"
		);
		$this->m_dah->update_data($w,$data,'user');
		redirect('admin/struktur_jabatan/?alert=delete');
	}
}
/*
|---------------------------------
|	Bagian tambah data penduduk
|----------------------------------
*/
	function cek_nik_ajax(){
		$this->load->database();
		$val = $this->input->post('val');		
		echo $this->m_dah->edit_data(array('nik' => $val),'penduduk')->num_rows();
	}

	function penduduk(){
		$this->load->database();

		$data['penduduk']=$this->m_dah->get_data('penduduk')->result();
		$this->load->view('admin/v_header');
		$this->load->view('admin/v_data_penduduk',$data);
		$this->load->view('admin/v_footer');

	}

	
	function penduduk_add(){
		$this->load->database();
		$data['agama']=$this->m_dah->get_data('agama')->result();
		$data['pendidikan']=$this->m_dah->get_data('pendidikan')->result();
		$data['pekerjaan']=$this->m_dah->get_data('pekerjaan')->result();
		
		
		$this->load->view('admin/v_header');
		$this->load->view('admin/v_penduduk_add',$data);
		$this->load->view('admin/v_footer');

	}


	function penduduk_act(){
		$this->load->database();

		$this->form_validation->set_rules('nik','Nomor Induk Kependudukan','required|is_unique[penduduk.nik]|max_length[16]');
		$this->form_validation->set_rules('nama','Nama','required');
		
		if($this->form_validation->run() != true){
				$data['agama']=$this->m_dah->get_data('agama')->result();
				$data['pendidikan']=$this->m_dah->get_data('pendidikan')->result();
				$data['pekerjaan']=$this->m_dah->get_data('pekerjaan')->result();
				$this->load->view('admin/v_header');
				$this->load->view('admin/v_penduduk_add',$data);
				$this->load->view('admin/v_footer');
			// redirect(base_url().'admin/penduduk_add');
		}else{
		
			$data_pd=array(
				'nik' => $this->input->post('nik'),
				'nama' => $this->input->post('nama'),
				'nomor_kk' => $this->input->post('no_kk'),
				'tempat_lahir' => $this->input->post('tmpt_lhr'),
				'tgl_lahir' => $this->input->post('tgl_lhr'),
				'jenis_kelamin' => $this->input->post('jk'),
				'agama' => $this->input->post('agama'),
				'status_warga_negara' => $this->input->post('warga_negara'),
				'nama_ayah' => $this->input->post('nama_ayah'),
				'nama_ibu' => $this->input->post('nama_ibu'),
				'gol_darah' => $this->input->post('gol_darah'),
				'no_hp' => $this->input->post('no_hp'),
				'pendidikan' => $this->input->post('pendidikan'),
				'pekerjaan' => $this->input->post('pekerjaan'),
				'status_nikah' => $this->input->post('status_nikah'),
				'status_hub_keluarga' => $this->input->post('status_hub_keluarga'),
				'dusun' => $this->input->post('dusun'),
				'desa' => $this->input->post('desa'),
				'kecamatan' => "Meurah Mulia",
				'kabupaten' => "Aceh Utara",
				'provinsi' =>"Aceh",
				'kode_pos' => "24372"
				// 'alamat' => $this->input->post('alamat'),

			);
			$this->m_dah->insert_data($data_pd,'penduduk');

			$id_terakhir = $this->db->insert_id();
			$data_user=array(
				'penduduk_id' => $id_terakhir,
				'user_login' => $this->input->post('nik'),
				'user_pass' => md5($this->input->post('nik')),
				'user_name' => $this->input->post('nama'),
				'user_status' => 1,
				'user_lvl' => "rakyat"
			);

			$this->m_dah->insert_data($data_user,'user');
			redirect(base_url().'admin/penduduk/?alert=add');

		}
	}
	function penduduk_view($id){
		$this->load->database();
		if($id == ""){
			redirect(base_url().'admin/penduduk');
		}else{
			$where=array(
				'id'=> $id
			);
			$data['penduduk'] = $this->m_dah->edit_data($where,'penduduk')->result();
			$this->load->view('admin/v_header');
			$this->load->view('admin/v_penduduk_view',$data);
			$this->load->view('admin/v_footer');
		}
		
	}

	function penduduk_edit($id){
		$this->load->database();

		if($id == ""){
			redirect(base_url().'admin/penduduk');
		}else{
			$where=array(
				'id'=> $id
			);
			$data['agama']=$this->m_dah->get_data('agama')->result();
			$data['pendidikan']=$this->m_dah->get_data('pendidikan')->result();
			$data['pekerjaan']=$this->m_dah->get_data('pekerjaan')->result();
			$data['penduduk'] = $this->m_dah->edit_data($where,'penduduk')->result();
			$this->load->view('admin/v_header');
			$this->load->view('admin/v_penduduk_edit',$data);
			$this->load->view('admin/v_footer');
		}
	}
	function penduduk_update(){
		$this->load->database();		

		$id = $this->input->post('id');
		$this->form_validation->set_rules('nik','Nomor Induk Kependudukan','required|edit_unique[penduduk.nik.'.$id.']|max_length[16]');

		$this->form_validation->set_rules('nama','Nama','required');
		
		if($this->form_validation->run() != true){
			$where = array(
				'id' => $id
				);				
				$data['agama']=$this->m_dah->get_data('agama')->result();
				$data['pendidikan']=$this->m_dah->get_data('pendidikan')->result();
				$data['pekerjaan']=$this->m_dah->get_data('pekerjaan')->result();
				$data['penduduk'] = $this->m_dah->edit_data($where,'penduduk')->result();

				$this->load->view('admin/v_header');
				$this->load->view('admin/v_penduduk_edit',$data);
				$this->load->view('admin/v_footer');
			// redirect(base_url().'admin/penduduk_add');
		}else{
			$where = array(
				'id' => $id
				);	

			$data=array(
				'nik' => $this->input->post('nik'),
				'nama' => $this->input->post('nama'),
				'nomor_kk' => $this->input->post('no_kk'),
				'tempat_lahir' => $this->input->post('tmpt_lhr'),
				'tgl_lahir' => $this->input->post('tgl_lhr'),
				'jenis_kelamin' => $this->input->post('jk'),
				'agama' => $this->input->post('agama'),
				'status_warga_negara' => $this->input->post('warga_negara'),
				'nama_ayah' => $this->input->post('nama_ayah'),
				'nama_ibu' => $this->input->post('nama_ibu'),
				'gol_darah' => $this->input->post('gol_darah'),
				'no_hp' => $this->input->post('no_hp'),
				'pendidikan' => $this->input->post('pendidikan'),
				'pekerjaan' => $this->input->post('pekerjaan'),
				'status_nikah' => $this->input->post('status_nikah'),
				'status_hub_keluarga' => $this->input->post('status_hub_keluarga'),
				'kelurahan' => $this->input->post('kelurahan'),
				'dusun' => $this->input->post('dusun'),
				'desa' => $this->input->post('desa'),
				'kecamatan' => "Meurah Mulia",
				'kabupaten' => "Aceh Utara",
				'provinsi' =>"Aceh",
				'kode_pos' => "24372"
				// 'alamat' => $this->input->post('alamat'),

			);
			$this->m_dah->update_data($where,$data,'penduduk');
			redirect(base_url().'admin/penduduk/?alert=update');

		}
	}
	function penduduk_delete($id){
		$this->load->database();
		if($id == ""){
			redirect(base_url().'admin/penduduk');
		}else{
			$wt = array(
				'id' => $id
			);
			$wp = array(
				'penduduk_id' => $id
				);
			$this->m_dah->delete_data($wt,'penduduk');
			$this->m_dah->delete_data($wp,'user');
			
			redirect(base_url().'admin/penduduk/?alert=delete');
		}	
	}


	// end

/*
|----------------------------------------
|	Bagian ubah data penduduk dari rakyat
|----------------------------------------
*/	
	function data_pribadi($id){
		$this->load->database();
		
		if($id == ""){
			redirect(base_url());
		}else{
			$where = array(
				'id' => $this->session->userdata('penduduk_id')
			);				
				$data['agama']=$this->m_dah->get_data('agama')->result();
				$data['pendidikan']=$this->m_dah->get_data('pendidikan')->result();
				$data['pekerjaan']=$this->m_dah->get_data('pekerjaan')->result();
				$data['penduduk']=$this->m_dah->edit_data($where,'penduduk')->result();
			
			$this->load->view('admin/v_header');
			$this->load->view('user/v_data_pribadi',$data);
			$this->load->view('admin/v_footer');

		}
	}

	function data_pribadi_update(){
		$this->load->database();		

		$id = $this->input->post('id');
		$this->form_validation->set_rules('nik','Nomor Induk Kependudukan','required|edit_unique[penduduk.nik.'.$id.']|max_length[16]');
		$this->form_validation->set_rules('nama','Nama','required');
		
		if($this->form_validation->run() != true){
			$where = array(
				'id' => $id
				);				
				$data['agama']=$this->m_dah->get_data('agama')->result();
				$data['pendidikan']=$this->m_dah->get_data('pendidikan')->result();
				$data['pekerjaan']=$this->m_dah->get_data('pekerjaan')->result();
				$data['penduduk']=$this->m_dah->edit_data($where,'penduduk')->result();
				
				$this->load->view('admin/v_header');
				$this->load->view('user/v_data_pribadi',$data);
				$this->load->view('admin/v_footer');
			// redirect(base_url().'admin/penduduk_add');
		}else{
			$where = array(
				'id' => $id
				);	

			$data=array(
				'nik' => $this->input->post('nik'),
				'nama' => $this->input->post('nama'),
				'nomor_kk' => $this->input->post('no_kk'),
				'tempat_lahir' => $this->input->post('tmpt_lhr'),
				'tgl_lahir' => $this->input->post('tgl_lhr'),
				'jenis_kelamin' => $this->input->post('jk'),
				'agama' => $this->input->post('agama'),
				'status_warga_negara' => $this->input->post('warga_negara'),
				'nama_ayah' => $this->input->post('nama_ayah'),
				'nama_ibu' => $this->input->post('nama_ibu'),
				'gol_darah' => $this->input->post('gol_darah'),
				'no_hp' => $this->input->post('no_hp'),
				'pendidikan' => $this->input->post('pendidikan'),
				'pekerjaan' => $this->input->post('pekerjaan'),
				'status_nikah' => $this->input->post('status_nikah'),
				'status_hub_keluarga' => $this->input->post('status_hub_keluarga'),
				'dusun' => $this->input->post('dusun'),
				'desa' => $this->input->post('desa'),
				'kecamatan' => "Meurah Mulia",
				'kabupaten' => "Aceh Utara",
				'provinsi' =>"Aceh",
				'kode_pos' => "24372",
				// 'alamat' => $this->input->post('alamat')

			);
			$this->m_dah->update_data($where,$data,'penduduk');
			redirect(base_url().'admin/data_pribadi/'.$id.'/?alert=update');

		}
	}

/*
|---------------------------------
|	Bagian Umum
|----------------------------------
*/
function umum(){
	$this->load->database();
	// $this->db->group_by('nomor_kk');
	// $data['total']= $this->db->count_all('penduduk');
	$this->load->view('admin/v_header');
	$this->load->view('admin/data_opsi/v_umum',$data);
	$this->load->view('admin/v_footer');

}

function umum_edit(){
	$this->load->database();

	$this->load->view('admin/v_header');
	$this->load->view('admin/data_opsi/v_umum_edit');
	$this->load->view('admin/v_footer');

}

function umum_update(){
	$this->load->database();
	$umum=$this->input->post('umum');
	$this->m_dah->update_data(array('option_name' => 'umum'),array('option_value' => $umum),'dah_options');

	redirect(base_url().'admin/umum/?alert=update');

}
/*
|---------------------------------
|	Bagian Organisasi
|----------------------------------
*/

function struktur_organisasi(){
	$this->load->database();

	$this->load->view('admin/v_header');
	$this->load->view('admin/data_opsi/v_struktur_organisasi');
	$this->load->view('admin/v_footer');

}

function struktur_edit(){
	$this->load->database();

	$this->load->view('admin/v_header');
	$this->load->view('admin/data_opsi/v_struktur_edit');
	$this->load->view('admin/v_footer');

}

function struktur_update(){
	$this->load->database();
	$struktur=$this->input->post('struktur');
	$this->m_dah->update_data(array('option_name' => 'struktur'),array('option_value' => $struktur),'dah_options');

	redirect(base_url().'admin/struktur_organisasi/?alert=update');

}


/*
|---------------------------------
|	Bagian Pengembang
|----------------------------------
*/

function developer(){
	$this->load->database();

	$this->load->view('admin/v_header');
	$this->load->view('admin/data_opsi/v_pengembang');
	$this->load->view('admin/v_footer');

}

function developer_edit(){
	$this->load->database();

	$this->load->view('admin/v_header');
	$this->load->view('admin/data_opsi/v_pengembang_edit');
	$this->load->view('admin/v_footer');

}

function developer_update(){
	$this->load->database();
	$developer=$this->input->post('developer');
	

		$config['upload_path'] = './upload/foto/';
		$config['allowed_types'] = 'jpg|png|jpeg';
		$foto = "foto_dev";
		if($_FILES["foto_dev"]["name"]){
			$rand1=rand(1000,9999);
			$config['file_name'] = $rand1.'_'.$_FILES['foto_dev']['name'];				
			$this->load->library('upload', $config);
			$foto_dev = $this->upload->do_upload('foto_dev');
			if (!$foto_dev){
				$error = array('error' => $this->upload->display_errors());
			}else{
				$foto_dev = $this->upload->data("file_name");
				$data = array('upload_data' => $this->upload->data());
				$this->m_dah->update_data(array('option_name' => 'foto_dev'),array('option_value' => $foto_dev),'dah_options');			
			}
		
		}

	$this->m_dah->update_data(array('option_name' => 'pengembang'),array('option_value' => $developer),'dah_options');

	redirect(base_url().'admin/developer/?alert=update');

}

function hapus_foto_dev(){
	$this->load->database();
		$id = $this->input->post('id');
		$where = array(
			'option_id' => $id
			);
		$data = $this->m_dah->edit_data($where,'dah_options')->row();
		@chmod("./upload/foto/" . $data->option_value, 0777);
		@unlink('./upload/foto/' . $data->option_value);

		$update = array(
			'option_value' => ""
			);
		$this->m_dah->update_data($where,$update,'dah_options');
}
/*
|---------------------------------
|	Bagian Pelayanan Surat
|----------------------------------
*/
function pelayanan_surat(){
	$this->load->database();
	// $this->db->group_by('nomor_kk');
	// $data['total']= $this->db->count_all('penduduk');
	$this->load->view('admin/v_header');
	$this->load->view('admin/data_opsi/v_pelayanan_surat',$data);
	$this->load->view('admin/v_footer');

}

function pelayanan_surat_edit(){
	$this->load->database();

	$this->load->view('admin/v_header');
	$this->load->view('admin/data_opsi/v_pelayanan_surat_edit');
	$this->load->view('admin/v_footer');

}

function pelayanan_surat_update(){
	$this->load->database();
	$surat=$this->input->post('surat');
	$this->m_dah->update_data(array('option_name' => 'pelayanan_surat'),array('option_value' => $surat),'dah_options');

	redirect(base_url().'admin/pelayanan_surat/?alert=update');

}




/*
|---------------------------------
|	Bagian Surat Admin
|----------------------------------
*/

/*
|---------------------------------
|	Bagian Surat rakyat
|----------------------------------
*/

function sesi_surat(){
	$this->load->database();
	$id_penduduk=$this->session->userdata('penduduk_id');
	$data['surat']=$this->m_dah->get_data('jenis_surat')->result();	
	
	$data['surat_review']=$this->m_dah->pilih_surat($id_penduduk,'review','surat_mohon')->result();
	$data['surat_tolak']=$this->m_dah->pilih_surat($id_penduduk,'ditolak','surat_mohon')->result();
	$data['surat_terima']=$this->m_dah->pilih_surat($id_penduduk,'diterima','surat_mohon')->result();
	
	$data['total_terima']=$this->m_dah->pilih_surat($id_penduduk,'diterima','surat_mohon')->num_rows();
	$data['total_tolak']=$this->m_dah->pilih_surat($id_penduduk,'ditolak','surat_mohon')->num_rows();
	$data['total_review']=$this->m_dah->pilih_surat($id_penduduk,'review','surat_mohon')->num_rows();
	

	$this->load->view('admin/v_header');
	$this->load->view('admin/sesi_surat/surat_data',$data);
	$this->load->view('admin/v_footer');

}

function aju_surat_pengantar_ktp(){
	$this->load->database();

	$this->load->view('admin/v_header');
	$this->load->view('admin/sesi_surat/sr_pengantar_ktp',$data);
	$this->load->view('admin/v_footer');
}

function aju_surat_pengantar_kk(){
	$this->load->database();

	$this->load->view('admin/v_header');
	$this->load->view('admin/sesi_surat/sr_pengantar_kk',$data);
	$this->load->view('admin/v_footer');

}
	


function aju_surat_pindah(){
	$this->load->database();

	$this->load->view('admin/v_header');
	$this->load->view('admin/sesi_surat/sr_pengantar_pindah',$data);
	$this->load->view('admin/v_footer');

}

function aju_surat_ket_cerai(){
	$this->load->database();

	$this->load->view('admin/v_header');
	$this->load->view('admin/sesi_surat/sr_ket_cerai',$data);
	$this->load->view('admin/v_footer');

}

function aju_surat_ket_nikah(){
	$this->load->database();

	$this->load->view('admin/v_header');
	$this->load->view('admin/sesi_surat/sr_ket_nikah',$data);
	$this->load->view('admin/v_footer');

}


function aju_surat_ket_belum_nikah(){
	$this->load->database();

	$this->load->view('admin/v_header');
	$this->load->view('admin/sesi_surat/sr_ket_belum_nikah',$data);
	$this->load->view('admin/v_footer');

}


/*
|---------------------------------
|	Bagian Pelayanan Surat
|----------------------------------
*/

function permohonan_surat(){
	$this->load->database();
	if($this->session->userdata('level') != "admin"){
			redirect(base_url());
	}
	$wh=array(
		'status_surat' => "review"
	);
	$data['surat_mohon']=$this->m_dah->get_surat_order('review')->result();
	$data['surat_diterima']=$this->m_dah->get_surat_order('diterima')->result();
	$data['surat_ditolak']=$this->m_dah->get_surat_order('ditolak')->result();
	
	$data['total_terima']=$this->m_dah->get_surat_order('diterima')->num_rows();
	$data['total_tolak']=$this->m_dah->get_surat_order('ditolak')->num_rows();
	$data['total_review']=$this->m_dah->get_surat_order('review')->num_rows();
	
	$data['surat_lain']=$this->m_dah->get_surat_lain_order('review')->result();

	$this->load->view('admin/v_header');
	$this->load->view('admin/data_opsi/v_pengajuan_surat',$data);
	$this->load->view('admin/v_footer');

}

function arsip_surat(){
	$this->load->database();
	if($this->session->userdata('level') != "admin"){
			redirect(base_url());
	}
	$wh=array(
		'status_surat' => "review"
	);
	$data['surat_mohon']=$this->m_dah->get_surat_order('review')->result();
	$data['surat_diterima']=$this->m_dah->get_surat_order_fix('diterima')->result();
	$data['surat_ditolak']=$this->m_dah->get_surat_order('ditolak')->result();
	
	$data['total_terima']=$this->m_dah->get_surat_order('diterima')->num_rows();
	$data['total_tolak']=$this->m_dah->get_surat_order('ditolak')->num_rows();
	$data['total_review']=$this->m_dah->get_surat_order('review')->num_rows();
	
	$data['surat_lain_terima']=$this->m_dah->get_surat_lain_order('diterima')->result();
	$data['surat_lain_tolak']=$this->m_dah->get_surat_lain_order('ditolak')->result();

	$data['surat_lain_total_terima']=$this->m_dah->get_surat_lain_order('diterima')->num_rows();
	$data['surat_lain_total_tolak']=$this->m_dah->get_surat_lain_order('ditolak')->num_rows();
	
	$this->load->view('admin/v_header');
	$this->load->view('admin/data_opsi/v_arsip_surat',$data);
	$this->load->view('admin/v_footer');
}

function arsip_surat_lurah(){
	$this->load->database();
	if($this->session->userdata('level') != "lurah"){
			redirect(base_url());
	}
	$wh=array(
		'status_surat' => "review"
	);
	$data['surat_mohon']=$this->m_dah->get_surat_order('review')->result();
	$data['surat_diterima']=$this->m_dah->get_surat_order('diterima')->result();
	$data['surat_ditolak']=$this->m_dah->get_surat_order('ditolak')->result();
	
	$data['total_terima']=$this->m_dah->get_surat_order('diterima')->num_rows();
	$data['total_tolak']=$this->m_dah->get_surat_order('ditolak')->num_rows();
	$data['total_review']=$this->m_dah->get_surat_order('review')->num_rows();
	
	$data['surat_lain_terima']=$this->m_dah->get_surat_lain_order('diterima')->result();
	$data['surat_lain_tolak']=$this->m_dah->get_surat_lain_order('ditolak')->result();

	$data['surat_lain_total_terima']=$this->m_dah->get_surat_lain_order('diterima')->num_rows();
	$data['surat_lain_total_tolak']=$this->m_dah->get_surat_lain_order('ditolak')->num_rows();
	
	
	$this->load->view('admin/v_header');
	$this->load->view('admin/data_opsi/v_arsip_surat_lurah',$data);
	$this->load->view('admin/v_footer');
}
/*--------------------------
| update status surat
----------------------------*/
	function update_kk_baru($id){
		if($this->session->userdata('level') != "admin"){
			redirect(base_url());
		}
		$this->load->database();
	

		$where=array(
			'surat_mohon_id' =>	$id
		);

		$data['kk_baru']=$this->m_dah->edit_data($where,'sr_kk_baru')->result();
		
		$this->load->view('admin/v_header');
		$this->load->view('admin/review/rv_kk_baru',$data);
		$this->load->view('admin/v_footer');
	}

	function update_kk_baru_act(){
		$this->load->database();

		$surat_id= $this->input->post('surat_id');

		$where_s=array(
			'surat_mohon_id' => $surat_id
		);

		$ket_s= $this->input->post('ket_surat');
		$no_surat=$this->input->post('no_surat');


		if($this->input->post('tolak') != ""){
			$this->form_validation->set_rules('ket_surat','Keterangan diisi dengan alasan mengapa menolak permohonan', 'required');

			if($this->form_validation->run() != true){
				$data['kk_baru']=$this->m_dah->edit_data($where_s,'sr_kk_baru')->result();

				$this->load->view('admin/v_header');
				$this->load->view('admin/review/rv_kk_baru',$data);
				$this->load->view('admin/v_footer');
			}else{
				$data_surat_mohon =array(
					'syarat' =>  $ket_s,
					'status_surat' => "ditolak",	
					'notif' => 2	
				);

				$data_kk_baru=array(
					'status_surat' => "ditolak"
				);
				$this->m_dah->update_data($where_s,$data_surat_mohon,'surat_mohon');
				$this->m_dah->update_data($where_s,$data_kk_baru,'sr_kk_baru');
				redirect(base_url().'admin/permohonan_surat/?alert=update');
			}
		}

		if($this->input->post('setuju') != ""){
			$this->form_validation->set_rules('surat_id','Surat Id wajib ada', 'required');
			$this->form_validation->set_rules('no_surat','Nomor surat Wajib ada!!', 'required');
			if($this->form_validation->run() != true){
				$data['kk_baru']=$this->m_dah->edit_data($where_s,'sr_kk_baru')->result();
			
				$this->load->view('admin/v_header');
				$this->load->view('admin/review/rv_kk_baru',$data);
				$this->load->view('admin/v_footer');
	
			}else{
				$data_surat_mohon=array(
					'nomor_surat' => $no_surat,
					'tgl_surat' => date('Y-m-d'),
					'syarat' => $ket_s,
					'notif' => 2,
					'status_surat' => "diterima"
				);
	
				$data_kk_baru=array(
					'nomor_surat' => $no_surat,
					'tgl_disahkan' => date('Y-m-d'),
					'status_surat' => "diterima",
					'list_admin' => $this->input->post('list_admin')
				);
				$this->m_dah->update_data($where_s,$data_surat_mohon,'surat_mohon');
				$this->m_dah->update_data($where_s,$data_kk_baru,'sr_kk_baru');
				redirect(base_url().'admin/permohonan_surat/?alert=update');
				
			}
		}
		
	}

function delete_kk_baru($id){
	if($this->session->userdata('level') != "admin"){
		redirect(base_url());
	}
	$this->load->database();
		if($id == ""){
			redirect('base_url()');
		}else{
			$where = array(
				'surat_mohon_id' => $id
				);

			$data = $this->m_dah->edit_data($where,'sr_kk_baru')->row();
			// hapus di direktori upload/syarat

			@chmod("./upload/syarat/" . $data->ket_gk, 0777);
			@unlink('./upload/syarat/' . $data->ket_gk);

			@chmod("./upload/syarat/" . $data->foto_kopi_kk, 0777);
			@unlink('./upload/syarat/' . $data->foto_kopi_kk);

			@chmod("./upload/syarat/" . $data->foto_kopi_ktp, 0777);
			@unlink('./upload/syarat/' . $data->foto_kopi_ktp);

			@chmod("./upload/syarat/" . $data->foto_kopi_nikah, 0777);
			@unlink('./upload/syarat/' . $data->foto_kopi_nikah);

			@chmod("./upload/syarat/" . $data->foto_kopi_lahir, 0777);
			@unlink('./upload/syarat/' . $data->foto_kopi_lahir);


			// hapus di table 
		
			$this->m_dah->delete_data($where,'sr_kk_baru');
			//  hapus tabel surat_mohon

			$this->m_dah->delete_data($where,'surat_mohon');
			redirect('admin/permohonan_surat/?alert=post-delete');
		}
}

	// end buat kk baru

	function update_kk_tambah($id){
		if($this->session->userdata('level') != "admin"){
			redirect(base_url());
		}
		$this->load->database();
		
		$where=array(
			'surat_mohon_id' =>	$id
		);

		$data['kk_tambah']=$this->m_dah->edit_data($where,'sr_kk_tambah')->result();
		
		$this->load->view('admin/v_header');
		$this->load->view('admin/review/rv_kk_tambah',$data);
		$this->load->view('admin/v_footer');
	}

	function update_kk_tambah_act(){
		$this->load->database();

		$surat_id= $this->input->post('surat_id');

		$where_s=array(
			'surat_mohon_id' => $surat_id
		);

		$ket_s= $this->input->post('ket_surat');
		$no_surat=$this->input->post('no_surat');


		
		if($this->input->post('tolak') != ""){
			$this->form_validation->set_rules('ket_surat','Keterangan diisi dengan alasan mengapa menolak permohonan', 'required');

			if($this->form_validation->run() != true){
				$data['kk_tambah']=$this->m_dah->edit_data($where_s,'sr_kk_tambah')->result();

				$this->load->view('admin/v_header');
				$this->load->view('admin/review/rv_kk_tambah',$data);
				$this->load->view('admin/v_footer');
			}else{
				$data_surat_mohon =array(
					'syarat' =>  $ket_s,
					'status_surat' => "ditolak",	
					'notif' => 2	
				);

				$data_kk_tambah=array(
					'status_surat' => "ditolak"
				);
				$this->m_dah->update_data($where_s,$data_surat_mohon,'surat_mohon');
				$this->m_dah->update_data($where_s,$data_kk_tambah,'sr_kk_tambah');
				redirect(base_url().'admin/permohonan_surat/?alert=update');
			}
		}

		if($this->input->post('setuju') != ""){
			$this->form_validation->set_rules('surat_id','Surat Id wajib ada', 'required');
			$this->form_validation->set_rules('no_surat','Nomor surat Wajib ada!!', 'required');
			if($this->form_validation->run() != true){
				$data['kk_tambah']=$this->m_dah->edit_data($where_s,'sr_kk_tambah')->result();
			
				$this->load->view('admin/v_header');
				$this->load->view('admin/review/rv_kk_tambah',$data);
				$this->load->view('admin/v_footer');
	
			}else{
				$data_surat_mohon=array(
					'nomor_surat' => $no_surat,
					'tgl_surat' => date('Y-m-d'),
					'syarat' => $ket_s,
					'notif' => 2,
					'status_surat' => "diterima"
				);
	
				$data_kk_tambah=array(
					'nomor_surat' => $no_surat,
					'tgl_disahkan' => date('Y-m-d'),
					'status_surat' => "diterima"
				);
				$this->m_dah->update_data($where_s,$data_surat_mohon,'surat_mohon');
				$this->m_dah->update_data($where_s,$data_kk_tambah,'sr_kk_tambah');
				redirect(base_url().'admin/permohonan_surat/?alert=update');
				
			}
		}

		
	}

	function delete_kk_tambah($id){
		if($this->session->userdata('level') != "admin"){
			redirect(base_url());
		}
	$this->load->database();
		if($id == ""){
			redirect('base_url()');
		}else{
			$where = array(
				'surat_mohon_id' => $id
				);

			$data = $this->m_dah->edit_data($where,'sr_kk_tambah')->row();
			// hapus di direktori upload/syarat

			@chmod("./upload/syarat/" . $data->ket_gk, 0777);
			@unlink('./upload/syarat/' . $data->ket_gk);

			@chmod("./upload/syarat/" . $data->foto_kopi_kk, 0777);
			@unlink('./upload/syarat/' . $data->foto_kopi_kk);

			@chmod("./upload/syarat/" . $data->foto_kopi_lahir, 0777);
			@unlink('./upload/syarat/' . $data->foto_kopi_lahir);


			// hapus di table 
		
			$this->m_dah->delete_data($where,'sr_kk_tambah');
			//  hapus tabel surat_mohon

			$this->m_dah->delete_data($where,'surat_mohon');
			redirect('admin/permohonan_surat/?alert=post-delete');
		}
}

	// end buat tambah anggota kk 
	
	function update_kk_kurang($id){
		if($this->session->userdata('level') != "admin"){
			redirect(base_url());
		}
		$this->load->database();
		
		$where=array(
			'surat_mohon_id' =>	$id
		);

		$data['kk_kurang']=$this->m_dah->edit_data($where,'sr_kk_kurang')->result();
		
		$this->load->view('admin/v_header');
		$this->load->view('admin/review/rv_kk_kurang',$data);
		$this->load->view('admin/v_footer');
	}

	function update_kk_kurang_act(){

		$this->load->database();
		$surat_id= $this->input->post('surat_id');

		$where_s=array(
			'surat_mohon_id' => $surat_id
		);

		$ket_s= $this->input->post('ket_surat');
		$no_surat=$this->input->post('no_surat');


		
		if($this->input->post('tolak') != ""){
			$this->form_validation->set_rules('ket_surat','Keterangan diisi dengan alasan mengapa menolak permohonan', 'required');

			if($this->form_validation->run() != true){
				$data['kk_kurang']=$this->m_dah->edit_data($where_s,'sr_kk_kurang')->result();

				$this->load->view('admin/v_header');
				$this->load->view('admin/review/rv_kk_kurang',$data);
				$this->load->view('admin/v_footer');
			}else{
				$data_surat_mohon =array(
					'syarat' =>  $ket_s,
					'notif' => 2,
					'status_surat' => "ditolak"		
				);

				$data_kk_kurang=array(
					'status_surat' => "ditolak"
				);
				$this->m_dah->update_data($where_s,$data_surat_mohon,'surat_mohon');
				$this->m_dah->update_data($where_s,$data_kk_kurang,'sr_kk_kurang');
				redirect(base_url().'admin/permohonan_surat/?alert=update');
			}
		}

		if($this->input->post('setuju') != ""){
			$this->form_validation->set_rules('surat_id','Surat Id wajib ada', 'required');
			$this->form_validation->set_rules('no_surat','Nomor surat Wajib ada!!', 'required');
			if($this->form_validation->run() != true){
				$data['kk_kurang']=$this->m_dah->edit_data($where_s,'sr_kk_kurang')->result();
			
				$this->load->view('admin/v_header');
				$this->load->view('admin/review/rv_kk_kurang',$data);
				$this->load->view('admin/v_footer');
	
			}else{
				$data_surat_mohon=array(
					'nomor_surat' => $no_surat,
					'tgl_surat' => date('Y-m-d'),
					'syarat' => $ket_s,
					'notif' => 2,
					'status_surat' => "diterima"
				);
	
				$data_kk_kurang=array(
					'nomor_surat' => $no_surat,
					'tgl_disahkan' => date('Y-m-d'),
					'status_surat' => "diterima"
				);
				$this->m_dah->update_data($where_s,$data_surat_mohon,'surat_mohon');
				$this->m_dah->update_data($where_s,$data_kk_kurang,'sr_kk_kurang');
				redirect(base_url().'admin/permohonan_surat/?alert=update');
				
			}
		}
		
	}

function delete_kk_kurang($id){
	if($this->session->userdata('level') != "admin"){
		redirect(base_url());
	}
	$this->load->database();
		if($id == ""){
			redirect('base_url()');
		}else{
			$where = array(
				'surat_mohon_id' => $id
				);

			$data = $this->m_dah->edit_data($where,'sr_kk_kurang')->row();
			// hapus di direktori upload/syarat
			@chmod("./upload/syarat/" . $data->foto_kopi_kk, 0777);
			@unlink('./upload/syarat/' . $data->foto_kopi_kk);

			@chmod("./upload/syarat/" . $data->ket_meninggal, 0777);
			@unlink('./upload/syarat/' . $data->ket_meninggal);

			@chmod("./upload/syarat/" . $data->ket_pindah, 0777);
			@unlink('./upload/syarat/' . $data->ket_pindah);


			// hapus di table 
		
			$this->m_dah->delete_data($where,'sr_kk_kurang');
			//  hapus tabel surat_mohon

			$this->m_dah->delete_data($where,'surat_mohon');
			redirect('admin/permohonan_surat/?alert=post-delete');
		}
}


	// end kurangin anggota kk 

	function update_ktp_baru($id){
		if($this->session->userdata('level') != "admin"){
		redirect(base_url());
		}
		$this->load->database();

		$where=array(
			'surat_mohon_id' =>	$id
		);

		$data['ktp_baru']=$this->m_dah->edit_data($where,'sr_ktp_baru')->result();
		
		$this->load->view('admin/v_header');
		$this->load->view('admin/review/rv_ktp_baru',$data);
		$this->load->view('admin/v_footer');
		
	}

	function update_ktp_baru_act(){
		$this->load->database();
		$surat_id= $this->input->post('surat_id');

		$where_s=array(
			'surat_mohon_id' => $surat_id
		);

		$ket_s= $this->input->post('ket_surat');
		$no_surat=$this->input->post('no_surat');

		if($this->input->post('tolak') != ""){
			$this->form_validation->set_rules('ket_surat','Keterangan diisi dengan alasan mengapa menolak permohonan', 'required');

			if($this->form_validation->run() != true){
				$data['ktp_baru']=$this->m_dah->edit_data($where_s,'sr_ktp_baru')->result();

				$this->load->view('admin/v_header');
				$this->load->view('admin/review/rv_ktp_baru',$data);
				$this->load->view('admin/v_footer');
			}else{
				$data_surat_mohon =array(
					'syarat' =>  $ket_s,
					'notif' => 2,

					'status_surat' => "ditolak"		
				);

				$data_ktp_baru=array(
					'status_surat' => "ditolak"
				);
				$this->m_dah->update_data($where_s,$data_surat_mohon,'surat_mohon');
				$this->m_dah->update_data($where_s,$data_ktp_baru,'sr_ktp_baru');
				redirect(base_url().'admin/permohonan_surat/?alert=update');
			}
		}

		if($this->input->post('setuju') != ""){
			$this->form_validation->set_rules('surat_id','Surat Id wajib ada', 'required');
			$this->form_validation->set_rules('no_surat','Nomor surat Wajib ada!!', 'required');
			if($this->form_validation->run() != true){
				$data['ktp_baru']=$this->m_dah->edit_data($where_s,'sr_ktp_baru')->result();
			
				$this->load->view('admin/v_header');
				$this->load->view('admin/review/rv_ktp_baru',$data);
				$this->load->view('admin/v_footer');
	
			}else{
				$data_surat_mohon=array(
					'nomor_surat' => $no_surat,
					'tgl_surat' => date('Y-m-d'),
					'syarat' => $ket_s,
					'notif' => 2,

					'status_surat' => "diterima"
				);
	
				$data_ktp_baru=array(
					'nomor_surat' => $no_surat,
					'tgl_disahkan' => date('Y-m-d'),
					'status_surat' => "diterima"
				);
				$this->m_dah->update_data($where_s,$data_surat_mohon,'surat_mohon');
				$this->m_dah->update_data($where_s,$data_ktp_baru,'sr_ktp_baru');
				redirect(base_url().'admin/permohonan_surat/?alert=update');
				
			}
		}
		
	}


function delete_ktp_baru($id){
	if($this->session->userdata('level') != "admin"){
		redirect(base_url());
	}
	$this->load->database();
		if($id == ""){
			redirect('base_url()');
		}else{
			$where = array(
				'surat_mohon_id' => $id
				);

			$data = $this->m_dah->edit_data($where,'sr_ktp_baru')->row();
			// hapus di direktori upload/syarat
			@chmod("./upload/syarat/" . $data->foto_kopi_kk, 0777);
			@unlink('./upload/syarat/' . $data->foto_kopi_kk);

			@chmod("./upload/syarat/" . $data->ket_gk, 0777);
			@unlink('./upload/syarat/' . $data->ket_gk);

			@chmod("./upload/syarat/" . $data->foto_kopi_nikah, 0777);
			@unlink('./upload/syarat/' . $data->foto_kopi_nikah);

			@chmod("./upload/syarat/" . $data->foto_kopi_akta, 0777);
			@unlink('./upload/syarat/' . $data->foto_kopi_akta);

			// hapus di table 
		
			$this->m_dah->delete_data($where,'sr_ktp_baru');
			//  hapus tabel surat_mohon

			$this->m_dah->delete_data($where,'surat_mohon');
			redirect('admin/permohonan_surat/?alert=post-delete');
		}
}


	// end ktp baru status surat

	function update_ktp_hilang($id){
		if($this->session->userdata('level') != "admin"){
		redirect(base_url());
		}
		$this->load->database();

		$where=array(
			'surat_mohon_id' =>	$id
		);

		$data['ktp_hilang']=$this->m_dah->edit_data($where,'sr_ktp_hilang')->result();
		
		$this->load->view('admin/v_header');
		$this->load->view('admin/review/rv_ktp_hilang',$data);
		$this->load->view('admin/v_footer');
	}

	function update_ktp_hilang_act(){
		$this->load->database();
		$surat_id= $this->input->post('surat_id');

		$where_s=array(
			'surat_mohon_id' => $surat_id
		);

		$ket_s= $this->input->post('ket_surat');
		$no_surat=$this->input->post('no_surat');


		
		if($this->input->post('tolak') != ""){
			$this->form_validation->set_rules('ket_surat','Keterangan diisi dengan alasan mengapa menolak permohonan', 'required');

			if($this->form_validation->run() != true){
				$data['ktp_hilang']=$this->m_dah->edit_data($where_s,'sr_ktp_hilang')->result();

				$this->load->view('admin/v_header');
				$this->load->view('admin/review/rv_ktp_hilang',$data);
				$this->load->view('admin/v_footer');
			}else{
				$data_surat_mohon =array(
					'syarat' =>  $ket_s,
					'notif' => 2,

					'status_surat' => "ditolak"		
				);

				$data_ktp_hilang=array(
					'status_surat' => "ditolak"
				);
				$this->m_dah->update_data($where_s,$data_surat_mohon,'surat_mohon');
				$this->m_dah->update_data($where_s,$data_ktp_hilang,'sr_ktp_hilang');
				redirect(base_url().'admin/permohonan_surat/?alert=update');
			}
		}

		if($this->input->post('setuju') != ""){
			$this->form_validation->set_rules('surat_id','Surat Id wajib ada', 'required');
			$this->form_validation->set_rules('no_surat','Nomor surat Wajib ada!!', 'required');
			if($this->form_validation->run() != true){
				$data['ktp_hilang']=$this->m_dah->edit_data($where_s,'sr_ktp_hilang')->result();
			
				$this->load->view('admin/v_header');
				$this->load->view('admin/review/rv_ktp_hilang',$data);
				$this->load->view('admin/v_footer');
	
			}else{
				$data_surat_mohon=array(
					'nomor_surat' => $no_surat,
					'tgl_surat' => date('Y-m-d'),
					'syarat' => $ket_s,
					'notif' => 2,

					'status_surat' => "diterima"
				);
	
				$data_ktp_hilang=array(
					'nomor_surat' => $no_surat,
					'tgl_disahkan' => date('Y-m-d'),
					'status_surat' => "diterima"
				);
				$this->m_dah->update_data($where_s,$data_surat_mohon,'surat_mohon');
				$this->m_dah->update_data($where_s,$data_ktp_hilang,'sr_ktp_hilang');
				redirect(base_url().'admin/permohonan_surat/?alert=update');
				
			}
		}

	}



	function delete_ktp_hilang($id){
		if($this->session->userdata('level') != "admin"){
		redirect(base_url());
		}
			$this->load->database();
				if($id == ""){
					redirect('base_url()');
				}else{
					$where = array(
						'surat_mohon_id' => $id
						);

					$data = $this->m_dah->edit_data($where,'sr_ktp_hilang')->row();
					// hapus di direktori upload/syarat
					@chmod("./upload/syarat/" . $data->foto_kopi_kk, 0777);
					@unlink('./upload/syarat/' . $data->foto_kopi_kk);

					@chmod("./upload/syarat/" . $data->surat_hilang_polisi, 0777);
					@unlink('./upload/syarat/' . $data->surat_hilang_polisi);

					// hapus di table 
				
					$this->m_dah->delete_data($where,'sr_ktp_hilang');
					//  hapus tabel surat_mohon

					$this->m_dah->delete_data($where,'surat_mohon');
					redirect('admin/permohonan_surat/?alert=post-delete');
				}
		}



	// end ktp hilang status surat


	function update_akte_lahir($id){
		if($this->session->userdata('level') != "admin"){
		redirect(base_url());
		}
		$this->load->database();
		$where=array(
			'surat_mohon_id' =>	$id
		);

		$data['akte_lahir']=$this->m_dah->edit_data($where,'sr_akte_lahir')->result();
	
		$this->load->view('admin/v_header');
		$this->load->view('admin/review/rv_akte_lahir',$data);
		$this->load->view('admin/v_footer');
	}

	function update_akte_lahir_act(){
		$this->load->database();
		$surat_id= $this->input->post('surat_id');

		$where_s=array(
			'surat_mohon_id' => $surat_id
		);

		$ket_s= $this->input->post('ket_surat');
		$no_surat=$this->input->post('no_surat');


		
		if($this->input->post('tolak') != ""){
			$this->form_validation->set_rules('ket_surat','Keterangan diisi dengan alasan mengapa menolak permohonan', 'required');

			if($this->form_validation->run() != true){
				$data['akte_lahir']=$this->m_dah->edit_data($where_s,'sr_akte_lahir')->result();

				$this->load->view('admin/v_header');
				$this->load->view('admin/review/rv_akte_lahir',$data);
				$this->load->view('admin/v_footer');
			}else{
				$data_surat_mohon =array(
					'syarat' =>  $ket_s,
					'notif' => 2,

					'status_surat' => "ditolak"		
				);

				$data_jenis_surat=array(
					'status_surat' => "ditolak"
				);
				$this->m_dah->update_data($where_s,$data_surat_mohon,'surat_mohon');
				$this->m_dah->update_data($where_s,$data_jenis_surat,'sr_akte_lahir');
				redirect(base_url().'admin/permohonan_surat/?alert=update');
			}
		}

		if($this->input->post('setuju') != ""){
			$this->form_validation->set_rules('surat_id','Surat Id wajib ada', 'required');
			$this->form_validation->set_rules('no_surat','Nomor surat Wajib ada!!', 'required');
			if($this->form_validation->run() != true){
				$data['akte_lahir']=$this->m_dah->edit_data($where_s,'sr_akte_lahir')->result();
			
				$this->load->view('admin/v_header');
				$this->load->view('admin/review/rv_akte_lahir',$data);
				$this->load->view('admin/v_footer');
	
			}else{
				$data_surat_mohon=array(
					'nomor_surat' => $no_surat,
					'tgl_surat' => date('Y-m-d'),
					'syarat' => $ket_s,
					'notif' => 2,

					'status_surat' => "diterima"
				);
	
				$data_jenis_surat=array(
					'nomor_surat' => $no_surat,
					'tgl_disahkan' => date('Y-m-d'),
					'status_surat' => "diterima"
				);
				$this->m_dah->update_data($where_s,$data_surat_mohon,'surat_mohon');
				$this->m_dah->update_data($where_s,$data_jenis_surat,'sr_akte_lahir');
				redirect(base_url().'admin/permohonan_surat/?alert=update');
				
			}
		}
	}


	function delete_akte_lahir($id){
		if($this->session->userdata('level') != "admin"){
			redirect(base_url());
		}		
	$this->load->database();
		if($id == ""){
			redirect('base_url()');
		}else{
			$where = array(
				'surat_mohon_id' => $id
				);

			$data = $this->m_dah->edit_data($where,'sr_akte_lahir')->row();
			// hapus di direktori upload/syarat

			@chmod("./upload/syarat/" . $data->ket_gk, 0777);
			@unlink('./upload/syarat/' . $data->ket_gk);

			@chmod("./upload/syarat/" . $data->foto_kopi_ktp, 0777);
			@unlink('./upload/syarat/' . $data->foto_kopi_ktp);

			@chmod("./upload/syarat/" . $data->foto_kopi_kk, 0777);
			@unlink('./upload/syarat/' . $data->foto_kopi_kk);

			@chmod("./upload/syarat/" . $data->surat_lahir, 0777);
			@unlink('./upload/syarat/' . $data->surat_lahir);

			@chmod("./upload/syarat/" . $data->foto_kopi_nikah, 0777);
			@unlink('./upload/syarat/' . $data->foto_kopi_nikah);

			@chmod("./upload/syarat/" . $data->foto_kopi_ijazah, 0777);
			@unlink('./upload/syarat/' . $data->foto_kopi_ijazah);

			// hapus di table 
		
			$this->m_dah->delete_data($where,'sr_akte_lahir');
			//  hapus tabel surat_mohon

			$this->m_dah->delete_data($where,'surat_mohon');
			redirect('admin/permohonan_surat/?alert=post-delete');
		}
}

	// end akte lahir status surat

	function update_akte_mati($id){
		if($this->session->userdata('level') != "admin"){
		redirect(base_url());
		}
		$this->load->database();
		$where=array(
			'surat_mohon_id' =>	$id
		);

		$data['akte_mati']=$this->m_dah->edit_data($where,'sr_akte_mati')->result();

		$this->load->view('admin/v_header');
		$this->load->view('admin/review/rv_akte_mati',$data);
		$this->load->view('admin/v_footer');
	}
	
	function update_akte_mati_act(){
		$this->load->database();
		$surat_id= $this->input->post('surat_id');

		$where_s=array(
			'surat_mohon_id' => $surat_id
		);

		$ket_s= $this->input->post('ket_surat');
		$no_surat=$this->input->post('no_surat');


		if($this->input->post('tolak') != ""){
			$this->form_validation->set_rules('ket_surat','Keterangan diisi dengan alasan mengapa menolak permohonan', 'required');

			if($this->form_validation->run() != true){
				$data['akte_mati']=$this->m_dah->edit_data($where_s,'sr_akte_mati')->result();

				$this->load->view('admin/v_header');
				$this->load->view('admin/review/rv_akte_mati',$data);
				$this->load->view('admin/v_footer');
			}else{
				$data_surat_mohon =array(
					'syarat' =>  $ket_s,
					'notif' => 2,

					'status_surat' => "ditolak"		
				);

				$data_jenis_surat=array(
					'status_surat' => "ditolak"
				);
				$this->m_dah->update_data($where_s,$data_surat_mohon,'surat_mohon');
				$this->m_dah->update_data($where_s,$data_jenis_surat,'sr_akte_mati');
				redirect(base_url().'admin/permohonan_surat/?alert=update');
			}
		}

		if($this->input->post('setuju') != ""){
			$this->form_validation->set_rules('surat_id','Surat Id wajib ada', 'required');
			$this->form_validation->set_rules('no_surat','Nomor surat Wajib ada!!', 'required');
			if($this->form_validation->run() != true){
				$data['akte_mati']=$this->m_dah->edit_data($where_s,'sr_akte_mati')->result();
			
				$this->load->view('admin/v_header');
				$this->load->view('admin/review/rv_akte_mati',$data);
				$this->load->view('admin/v_footer');
	
			}else{
				$data_surat_mohon=array(
					'nomor_surat' => $no_surat,
					'tgl_surat' => date('Y-m-d'),
					'syarat' => $ket_s,
					'notif' => 2,

					'status_surat' => "diterima"
				);
	
				$data_jenis_surat=array(
					'nomor_surat' => $no_surat,
					'tgl_disahkan' => date('Y-m-d'),
					'status_surat' => "diterima"
				);
				$this->m_dah->update_data($where_s,$data_surat_mohon,'surat_mohon');
				$this->m_dah->update_data($where_s,$data_jenis_surat,'sr_akte_mati');
				redirect(base_url().'admin/permohonan_surat/?alert=update');
				
			}
		}
	}

	function delete_akte_mati($id){
		if($this->session->userdata('level') != "admin"){
		redirect(base_url());
		}
	$this->load->database();
		if($id == ""){
			redirect('base_url()');
		}else{
			$where = array(
				'surat_mohon_id' => $id
				);

			$data = $this->m_dah->edit_data($where,'sr_akte_mati')->row();
			// hapus di direktori upload/syarat

			@chmod("./upload/syarat/" . $data->ket_gk, 0777);
			@unlink('./upload/syarat/' . $data->ket_gk);

			@chmod("./upload/syarat/" . $data->sk_rs, 0777);
			@unlink('./upload/syarat/' . $data->sk_rs);

			@chmod("./upload/syarat/" . $data->foto_kopi_kk, 0777);
			@unlink('./upload/syarat/' . $data->foto_kopi_kk);

			@chmod("./upload/syarat/" . $data->foto_kopi_ktp, 0777);
			@unlink('./upload/syarat/' . $data->foto_kopi_ktp);


			// hapus di table 
		
			$this->m_dah->delete_data($where,'sr_akte_mati');
			//  hapus tabel surat_mohon

			$this->m_dah->delete_data($where,'surat_mohon');
			redirect('admin/permohonan_surat/?alert=post-delete');
		}
}


	// end akte mati status surat

	function update_pindah($id){
		if($this->session->userdata('level') != "admin"){
		redirect(base_url());
		}
		$this->load->database();
		$where=array(
			'surat_mohon_id' =>	$id
		);

		$data['ket_pindah']=$this->m_dah->edit_data($where,'sr_ket_pindah')->result();

		$this->load->view('admin/v_header');
		$this->load->view('admin/review/rv_ket_pindah',$data);
		$this->load->view('admin/v_footer');
	}

	function update_pindah_act(){
		$this->load->database();
		$surat_id= $this->input->post('surat_id');

		$where_s=array(
			'surat_mohon_id' => $surat_id
		);

		$ket_s= $this->input->post('ket_surat');
		$no_surat=$this->input->post('no_surat');


		if($this->input->post('tolak') != ""){
			$this->form_validation->set_rules('ket_surat','Keterangan diisi dengan alasan mengapa menolak permohonan', 'required');

			if($this->form_validation->run() != true){
				$data['ket_pindah']=$this->m_dah->edit_data($where_s,'sr_ket_pindah')->result();

				$this->load->view('admin/v_header');
				$this->load->view('admin/review/rv_ket_pindah',$data);
				$this->load->view('admin/v_footer');
			}else{
				$data_surat_mohon =array(
					'syarat' =>  $ket_s,
					'notif' => 2,

					'status_surat' => "ditolak"		
				);

				$data_jenis_surat=array(
					'status_surat' => "ditolak"
				);
				$this->m_dah->update_data($where_s,$data_surat_mohon,'surat_mohon');
				$this->m_dah->update_data($where_s,$data_jenis_surat,'sr_ket_pindah');
				redirect(base_url().'admin/permohonan_surat/?alert=update');
			}
		}

		if($this->input->post('setuju') != ""){
			$this->form_validation->set_rules('surat_id','Surat Id wajib ada', 'required');
			$this->form_validation->set_rules('no_surat','Nomor surat Wajib ada!!', 'required');
			if($this->form_validation->run() != true){
				$data['ket_pindah']=$this->m_dah->edit_data($where_s,'sr_ket_pindah')->result();
			
				$this->load->view('admin/v_header');
				$this->load->view('admin/review/rv_ket_pindah',$data);
				$this->load->view('admin/v_footer');
	
			}else{
				$data_surat_mohon=array(
					'nomor_surat' => $no_surat,
					'tgl_surat' => date('Y-m-d'),
					'syarat' => $ket_s,
					'notif' => 2,

					'status_surat' => "diterima"
				);
	
				$data_jenis_surat=array(
					'nomor_surat' => $no_surat,
					'tgl_disahkan' => date('Y-m-d'),
					'status_surat' => "diterima"
				);
				$this->m_dah->update_data($where_s,$data_surat_mohon,'surat_mohon');
				$this->m_dah->update_data($where_s,$data_jenis_surat,'sr_ket_pindah');
				redirect(base_url().'admin/permohonan_surat/?alert=update');
				
			}
		}

	}


	function delete_pindah($id){
	if($this->session->userdata('level') != "admin"){
	redirect(base_url());
	}
	$this->load->database();
		if($id == ""){
			redirect('base_url()');
		}else{
			$where = array(
				'surat_mohon_id' => $id
				);

			$data = $this->m_dah->edit_data($where,'sr_ket_pindah')->row();
			// hapus di direktori upload/syarat

			@chmod("./upload/syarat/" . $data->ket_gk, 0777);
			@unlink('./upload/syarat/' . $data->ket_gk);

			@chmod("./upload/syarat/" . $data->foto_kopi_kk, 0777);
			@unlink('./upload/syarat/' . $data->foto_kopi_kk);

			@chmod("./upload/syarat/" . $data->kk_asli, 0777);
			@unlink('./upload/syarat/' . $data->kk_asli);

			@chmod("./upload/syarat/" . $data->foto_kopi_ktp, 0777);
			@unlink('./upload/syarat/' . $data->foto_kopi_ktp);


			// hapus di table 
		
			$this->m_dah->delete_data($where,'sr_ket_pindah');
			//  hapus tabel surat_mohon

			$this->m_dah->delete_data($where,'surat_mohon');
			redirect('admin/permohonan_surat/?alert=post-delete');
		}
}

	// end pindah status surat

	function update_ket_miskin($id){
		if($this->session->userdata('level') != "admin"){
		redirect(base_url());
		}
		$this->load->database();

		$where=array(
			'surat_mohon_id' =>	$id
		);

		$data['ket_miskin']=$this->m_dah->edit_data($where,'sr_ket_miskin')->result();

		$this->load->view('admin/v_header');
		$this->load->view('admin/review/rv_ket_miskin',$data);
		$this->load->view('admin/v_footer');
	}

	function update_ket_miskin_act(){
		$this->load->database();

		$this->load->database();
		$surat_id= $this->input->post('surat_id');

		$where_s=array(
			'surat_mohon_id' => $surat_id
		);

		$ket_s= $this->input->post('ket_surat');
		$no_surat=$this->input->post('no_surat');


		if($this->input->post('tolak') != ""){
			$this->form_validation->set_rules('ket_surat','Keterangan diisi dengan alasan mengapa menolak permohonan', 'required');

			if($this->form_validation->run() != true){
				$data['ket_miskin']=$this->m_dah->edit_data($where_s,'sr_ket_miskin')->result();

				$this->load->view('admin/v_header');
				$this->load->view('admin/review/rv_ket_miskin',$data);
				$this->load->view('admin/v_footer');
			}else{
				$data_surat_mohon =array(
					'syarat' =>  $ket_s,
					'notif' => 2,

					'status_surat' => "ditolak"		
				);

				$data_jenis_surat=array(
					'status_surat' => "ditolak"
				);
				$this->m_dah->update_data($where_s,$data_surat_mohon,'surat_mohon');
				$this->m_dah->update_data($where_s,$data_jenis_surat,'sr_ket_miskin');
				redirect(base_url().'admin/permohonan_surat/?alert=update');
			}
		}

		if($this->input->post('setuju') != ""){
			$this->form_validation->set_rules('surat_id','Surat Id wajib ada', 'required');
			$this->form_validation->set_rules('no_surat','Nomor surat Wajib ada!!', 'required');
			if($this->form_validation->run() != true){
				$data['ket_miskin']=$this->m_dah->edit_data($where_s,'sr_ket_miskin')->result();
			
				$this->load->view('admin/v_header');
				$this->load->view('admin/review/rv_ket_miskin',$data);
				$this->load->view('admin/v_footer');
	
			}else{
				$data_surat_mohon=array(
					'nomor_surat' => $no_surat,
					'tgl_surat' => date('Y-m-d'),
					'syarat' => $ket_s,
					'notif' => 2,

					'status_surat' => "diterima"
				);
	
				$data_jenis_surat=array(
					'nomor_surat' => $no_surat,
					'tgl_disahkan' => date('Y-m-d'),
					'status_surat' => "diterima"
				);
				$this->m_dah->update_data($where_s,$data_surat_mohon,'surat_mohon');
				$this->m_dah->update_data($where_s,$data_jenis_surat,'sr_ket_miskin');
				redirect(base_url().'admin/permohonan_surat/?alert=update');
				
			}
		}

	}

function delete_ket_miskin($id){
	if($this->session->userdata('level') != "admin"){
		redirect(base_url());
	}
	$this->load->database();
		if($id == ""){
			redirect('base_url()');
		}else{
			$where = array(
				'surat_mohon_id' => $id
				);

			$data = $this->m_dah->edit_data($where,'sr_ket_miskin')->row();
			// hapus di direktori upload/syarat

			
			@chmod("./upload/syarat/" . $data->foto_kopi_kk, 0777);
			@unlink('./upload/syarat/' . $data->foto_kopi_kk);

			@chmod("./upload/syarat/" . $data->foto_kopi_ktp, 0777);
			@unlink('./upload/syarat/' . $data->foto_kopi_ktp);

			// hapus di table 
		
			$this->m_dah->delete_data($where,'sr_ket_miskin');
			//  hapus tabel surat_mohon

			$this->m_dah->delete_data($where,'surat_mohon');
			redirect('admin/permohonan_surat/?alert=post-delete');
		}
}

	// end ket_miskin status surat

	function update_ket_nikah($id){
		if($this->session->userdata('level') != "admin"){
		redirect(base_url());
		}
		$this->load->database();

		$where=array(
			'surat_mohon_id' =>	$id
		);

		$data['ket_nikah']=$this->m_dah->edit_data($where,'sr_ket_nikah')->result();

		$this->load->view('admin/v_header');
		$this->load->view('admin/review/rv_ket_nikah',$data);
		$this->load->view('admin/v_footer');
	}

	function update_ket_nikah_act(){
		$this->load->database();

		$surat_id= $this->input->post('surat_id');

		$where_s=array(
			'surat_mohon_id' => $surat_id
		);

		$ket_s= $this->input->post('ket_surat');
		$no_surat=$this->input->post('no_surat');


		if($this->input->post('tolak') != ""){
			$this->form_validation->set_rules('ket_surat','Keterangan diisi dengan alasan mengapa menolak permohonan', 'required');

			if($this->form_validation->run() != true){
				$data['ket_nikah']=$this->m_dah->edit_data($where_s,'sr_ket_nikah')->result();

				$this->load->view('admin/v_header');
				$this->load->view('admin/review/rv_ket_nikah',$data);
				$this->load->view('admin/v_footer');
			}else{
				$data_surat_mohon =array(
					'syarat' =>  $ket_s,
					'notif' => 2,

					'status_surat' => "ditolak"		
				);

				$data_jenis_surat=array(
					'status_surat' => "ditolak"
				);
				$this->m_dah->update_data($where_s,$data_surat_mohon,'surat_mohon');
				$this->m_dah->update_data($where_s,$data_jenis_surat,'sr_ket_nikah');
				redirect(base_url().'admin/permohonan_surat/?alert=update');
			}
		}

		if($this->input->post('setuju') != ""){
			$this->form_validation->set_rules('surat_id','Surat Id wajib ada', 'required');
			$this->form_validation->set_rules('no_surat','Nomor surat Wajib ada!!', 'required');
			if($this->form_validation->run() != true){
				$data['ket_nikah']=$this->m_dah->edit_data($where_s,'sr_ket_nikah')->result();
			
				$this->load->view('admin/v_header');
				$this->load->view('admin/review/rv_ket_nikah',$data);
				$this->load->view('admin/v_footer');
	
			}else{
				$data_surat_mohon=array(
					'nomor_surat' => $no_surat,
					'tgl_surat' => date('Y-m-d'),
					'syarat' => $ket_s,
					'notif' => 2,

					'status_surat' => "diterima"
				);
	
				$data_jenis_surat=array(
					'nomor_surat' => $no_surat,
					'tgl_disahkan' => date('Y-m-d'),
					'status_surat' => "diterima"
				);
				$this->m_dah->update_data($where_s,$data_surat_mohon,'surat_mohon');
				$this->m_dah->update_data($where_s,$data_jenis_surat,'sr_ket_nikah');
				redirect(base_url().'admin/permohonan_surat/?alert=update');
				
			}
		}

	}

	function delete_ket_nikah($id){
	if($this->session->userdata('level') != "admin"){
	redirect(base_url());
	}
	$this->load->database();
		if($id == ""){
			redirect('base_url()');
		}else{
			$where = array(
				'surat_mohon_id' => $id
				);

			$data = $this->m_dah->edit_data($where,'sr_ket_nikah')->row();
			// hapus di direktori upload/syarat

			
			@chmod("./upload/syarat/" . $data->foto_kopi_kk, 0777);
			@unlink('./upload/syarat/' . $data->foto_kopi_kk);

			@chmod("./upload/syarat/" . $data->ktp_suami, 0777);
			@unlink('./upload/syarat/' . $data->ktp_suami);

			@chmod("./upload/syarat/" . $data->ktp_istri, 0777);
			@unlink('./upload/syarat/' . $data->ktp_istri);

			@chmod("./upload/syarat/" . $data->buku_nikah, 0777);
			@unlink('./upload/syarat/' . $data->buku_nikah);

			// hapus di table 
		
			$this->m_dah->delete_data($where,'sr_ket_nikah');
			//  hapus tabel surat_mohon

			$this->m_dah->delete_data($where,'surat_mohon');
			redirect('admin/permohonan_surat/?alert=post-delete');
		}
}

	// end ket_nikah status surat

	function update_ket_belum_nikah($id){
		if($this->session->userdata('level') != "admin"){
		redirect(base_url());
		}
		$this->load->database();

		$where=array(
			'surat_mohon_id' =>	$id
		);

		$data['belum_nikah']=$this->m_dah->edit_data($where,'sr_belum_nikah')->result();

		$this->load->view('admin/v_header');
		$this->load->view('admin/review/rv_ket_nikah_b',$data);
		$this->load->view('admin/v_footer');
	}

	function update_ket_belum_nikah_act(){
		if($this->session->userdata('level') != "admin"){
		redirect(base_url());
		}
		$this->load->database();

		$surat_id= $this->input->post('surat_id');

		$where_s=array(
			'surat_mohon_id' => $surat_id
		);

		$ket_s= $this->input->post('ket_surat');
		$no_surat=$this->input->post('no_surat');


		if($this->input->post('tolak') != ""){
			$this->form_validation->set_rules('ket_surat','Keterangan diisi dengan alasan mengapa menolak permohonan', 'required');

			if($this->form_validation->run() != true){
				$data['belum_nikah']=$this->m_dah->edit_data($where_s,'sr_belum_nikah')->result();

				$this->load->view('admin/v_header');
				$this->load->view('admin/review/rv_ket_nikah_b',$data);
				$this->load->view('admin/v_footer');
			}else{
				$data_surat_mohon =array(
					'syarat' =>  $ket_s,
					'notif' => 2,

					'status_surat' => "ditolak"		
				);

				$data_jenis_surat=array(
					'status_surat' => "ditolak"
				);
				$this->m_dah->update_data($where_s,$data_surat_mohon,'surat_mohon');
				$this->m_dah->update_data($where_s,$data_jenis_surat,'sr_belum_nikah');
				redirect(base_url().'admin/permohonan_surat/?alert=update');
			}
		}

		if($this->input->post('setuju') != ""){
			$this->form_validation->set_rules('surat_id','Surat Id wajib ada', 'required');
			$this->form_validation->set_rules('no_surat','Nomor surat Wajib ada!!', 'required');
			if($this->form_validation->run() != true){
				$data['belum_nikah']=$this->m_dah->edit_data($where_s,'sr_belum_nikah')->result();
			
				$this->load->view('admin/v_header');
				$this->load->view('admin/review/rv_ket_nikah_b',$data);
				$this->load->view('admin/v_footer');
	
			}else{
				$data_surat_mohon=array(
					'nomor_surat' => $no_surat,
					'tgl_surat' => date('Y-m-d'),
					'syarat' => $ket_s,
					'notif' => 2,

					'status_surat' => "diterima"
				);
	
				$data_jenis_surat=array(
					'nomor_surat' => $no_surat,
					'tgl_disahkan' => date('Y-m-d'),
					'status_surat' => "diterima"
				);
				$this->m_dah->update_data($where_s,$data_surat_mohon,'surat_mohon');
				$this->m_dah->update_data($where_s,$data_jenis_surat,'sr_belum_nikah');
				redirect(base_url().'admin/permohonan_surat/?alert=update');
				
			}
		}

	}

	function delete_ket_belum_nikah($id){
		if($this->session->userdata('level') != "admin"){
		redirect(base_url());
		}
	$this->load->database();
		if($id == ""){
			redirect('base_url()');
		}else{
			$where = array(
				'surat_mohon_id' => $id
				);

			$data = $this->m_dah->edit_data($where,'sr_belum_nikah')->row();
			// hapus di direktori upload/syarat

			
			@chmod("./upload/syarat/" . $data->foto_kopi_kk, 0777);
			@unlink('./upload/syarat/' . $data->foto_kopi_kk);

			@chmod("./upload/syarat/" . $data->foto_kopi_ktp, 0777);
			@unlink('./upload/syarat/' . $data->foto_kopi_ktp);

			// hapus di table 
		
			$this->m_dah->delete_data($where,'sr_belum_nikah');
			//  hapus tabel surat_mohon

			$this->m_dah->delete_data($where,'surat_mohon');
			redirect('admin/permohonan_surat/?alert=post-delete');
		}
}

	// end ket_belum_nikah status surat

	function update_ket_cerai($id){
		if($this->session->userdata('level') != "admin"){
		redirect(base_url());
		}
		$this->load->database();

		$where=array(
			'surat_mohon_id' =>	$id
		);

		$data['ket_cerai']=$this->m_dah->edit_data($where,'sr_ket_cerai')->result();

		$this->load->view('admin/v_header');
		$this->load->view('admin/review/rv_ket_cerai',$data);
		$this->load->view('admin/v_footer');
	}
	function update_ket_cerai_act(){
		$this->load->database();

		$surat_id= $this->input->post('surat_id');

		$where_s=array(
			'surat_mohon_id' => $surat_id
		);

		$ket_s= $this->input->post('ket_surat');
		$no_surat=$this->input->post('no_surat');


		if($this->input->post('tolak') != ""){
			$this->form_validation->set_rules('ket_surat','Keterangan diisi dengan alasan mengapa menolak permohonan', 'required');

			if($this->form_validation->run() != true){
				$data['ket_cerai']=$this->m_dah->edit_data($where_s,'sr_ket_cerai')->result();

				$this->load->view('admin/v_header');
				$this->load->view('admin/review/rv_ket_cerai',$data);
				$this->load->view('admin/v_footer');
			}else{
				$data_surat_mohon =array(
					'syarat' =>  $ket_s,
					'notif' => 2,

					'status_surat' => "ditolak"		
				);

				$data_jenis_surat=array(
					'status_surat' => "ditolak"
				);
				$this->m_dah->update_data($where_s,$data_surat_mohon,'surat_mohon');
				$this->m_dah->update_data($where_s,$data_jenis_surat,'sr_ket_cerai');
				redirect(base_url().'admin/permohonan_surat/?alert=update');
			}
		}

		if($this->input->post('setuju') != ""){
			$this->form_validation->set_rules('surat_id','Surat Id wajib ada', 'required');
			$this->form_validation->set_rules('no_surat','Nomor surat Wajib ada!!', 'required');
			if($this->form_validation->run() != true){
				$data['ket_cerai']=$this->m_dah->edit_data($where_s,'sr_ket_cerai')->result();
			
				$this->load->view('admin/v_header');
				$this->load->view('admin/review/rv_ket_cerai',$data);
				$this->load->view('admin/v_footer');
	
			}else{
				$data_surat_mohon=array(
					'nomor_surat' => $no_surat,
					'tgl_surat' => date('Y-m-d'),
					'syarat' => $ket_s,
					'notif' => 2,

					'status_surat' => "diterima"
				);
	
				$data_jenis_surat=array(
					'nomor_surat' => $no_surat,
					'tgl_disahkan' => date('Y-m-d'),
					'status_surat' => "diterima"
				);
				$this->m_dah->update_data($where_s,$data_surat_mohon,'surat_mohon');
				$this->m_dah->update_data($where_s,$data_jenis_surat,'sr_ket_cerai');
				redirect(base_url().'admin/permohonan_surat/?alert=update');
				
			}
		}


	}

	function delete_ket_cerai($id){
		if($this->session->userdata('level') != "admin"){
		redirect(base_url());
		}
	$this->load->database();
		if($id == ""){
			redirect('base_url()');
		}else{
			$where = array(
				'surat_mohon_id' => $id
				);

			$data = $this->m_dah->edit_data($where,'sr_ket_cerai')->row();
			// hapus di direktori upload/syarat

			@chmod("./upload/syarat/" . $data->foto_kopi_kk, 0777);
			@unlink('./upload/syarat/' . $data->foto_kopi_kk);

			@chmod("./upload/syarat/" . $data->ktp_suami, 0777);
			@unlink('./upload/syarat/' . $data->ktp_suami);

			@chmod("./upload/syarat/" . $data->ktp_istri, 0777);
			@unlink('./upload/syarat/' . $data->ktp_istri);
			// hapus di table 
		
			$this->m_dah->delete_data($where,'sr_ket_cerai');
			//  hapus tabel surat_mohon

			$this->m_dah->delete_data($where,'surat_mohon');
			redirect('admin/permohonan_surat/?alert=post-delete');
		}
}

	// end ket_cerai status surat

/*--------------------------
|  end status surat
----------------------------*/


 // function viewfile(){
 //        $fname = $this->uri->segment(3);
 //        $tofile= realpath("upload/syarat/".$fname);
 //        header('Content-Type: application/pdf');
 //        readfile($tofile);
 //    }

 function viewfile(){
        $file='upload/syarat/pdfaja.pdf';
        // $filename='pdfaja.pdf';
        // $tofile= realpath("upload/syarat/".$fname);
        header('Content-Type: application/pdf');
        readfile($file);
	}
	
	function viewfile_pdf($id){
		$this->load->database();

        $file='upload/syarat/'.$id.'.pdf';
        // $filename='pdfaja.pdf';
        // $tofile= realpath("upload/syarat/".$fname);
        header('Content-Type: application/pdf');
        readfile($file);
	}
	
	
	function tes_x(){
		$this->load->database();
		// $no=0;
		// $datx= $this->m_dah->last_record_surat('surat_mohon','review')->result();
		// foreach($datx as $xs){}
		// $x3=str_pad($no, 3, '0', STR_PAD_LEFT);
		
		// if($xs->nomor_surat == ""){
		// 	$no++;
		// 	$xi=str_pad($no, 3, '0', STR_PAD_LEFT);
		// 	echo $xi;
		// }else{
			
		// 	$xi=str_pad(1, 3, '0', STR_PAD_LEFT);
		// 	$nb=$xs->nomor_surat + $xi;
		// 	echo str_pad($nb, 3, '0', STR_PAD_LEFT);
		// }

		$this->load->view('admin/v_header');
		$this->load->view('tes_x');

		$this->load->view('admin/v_footer');

	}




/*--------------------------
| bagian delete arsip surat
----------------------------*/
function delete_kk_baru_arsip($id){
	if($this->session->userdata('level') != "admin"){
		redirect(base_url());
	}
	$this->load->database();
		if($id == ""){
			redirect('base_url()');
		}else{
			$where = array(
				'surat_mohon_id' => $id
				);

			$data = $this->m_dah->edit_data($where,'sr_kk_baru')->row();
			// hapus di direktori upload/syarat

			@chmod("./upload/syarat/" . $data->ket_gk, 0777);
			@unlink('./upload/syarat/' . $data->ket_gk);

			@chmod("./upload/syarat/" . $data->foto_kopi_kk, 0777);
			@unlink('./upload/syarat/' . $data->foto_kopi_kk);

			@chmod("./upload/syarat/" . $data->foto_kopi_ktp, 0777);
			@unlink('./upload/syarat/' . $data->foto_kopi_ktp);

			@chmod("./upload/syarat/" . $data->foto_kopi_nikah, 0777);
			@unlink('./upload/syarat/' . $data->foto_kopi_nikah);

			@chmod("./upload/syarat/" . $data->foto_kopi_lahir, 0777);
			@unlink('./upload/syarat/' . $data->foto_kopi_lahir);


			// hapus di table 
		
			$this->m_dah->delete_data($where,'sr_kk_baru');
			//  hapus tabel surat_mohon

			$this->m_dah->delete_data($where,'surat_mohon');
			redirect('admin/arsip_surat/?alert=post-delete');
		}
}

function delete_kk_tambah_arsip($id){
		if($this->session->userdata('level') != "admin"){
			redirect(base_url());
		}
	$this->load->database();
		if($id == ""){
			redirect('base_url()');
		}else{
			$where = array(
				'surat_mohon_id' => $id
				);

			$data = $this->m_dah->edit_data($where,'sr_kk_tambah')->row();
			// hapus di direktori upload/syarat

			@chmod("./upload/syarat/" . $data->ket_gk, 0777);
			@unlink('./upload/syarat/' . $data->ket_gk);

			@chmod("./upload/syarat/" . $data->foto_kopi_kk, 0777);
			@unlink('./upload/syarat/' . $data->foto_kopi_kk);

			@chmod("./upload/syarat/" . $data->foto_kopi_lahir, 0777);
			@unlink('./upload/syarat/' . $data->foto_kopi_lahir);


			// hapus di table 
		
			$this->m_dah->delete_data($where,'sr_kk_tambah');
			//  hapus tabel surat_mohon

			$this->m_dah->delete_data($where,'surat_mohon');
			redirect('admin/arsip_surat/?alert=post-delete');
		}
}

function delete_kk_kurang_arsip($id){
	if($this->session->userdata('level') != "admin"){
		redirect(base_url());
	}
	$this->load->database();
		if($id == ""){
			redirect('base_url()');
		}else{
			$where = array(
				'surat_mohon_id' => $id
				);

			$data = $this->m_dah->edit_data($where,'sr_kk_kurang')->row();
			// hapus di direktori upload/syarat
			@chmod("./upload/syarat/" . $data->foto_kopi_kk, 0777);
			@unlink('./upload/syarat/' . $data->foto_kopi_kk);

			@chmod("./upload/syarat/" . $data->ket_meninggal, 0777);
			@unlink('./upload/syarat/' . $data->ket_meninggal);

			@chmod("./upload/syarat/" . $data->ket_pindah, 0777);
			@unlink('./upload/syarat/' . $data->ket_pindah);


			// hapus di table 
		
			$this->m_dah->delete_data($where,'sr_kk_kurang');
			//  hapus tabel surat_mohon

			$this->m_dah->delete_data($where,'surat_mohon');
			redirect('admin/arsip_surat/?alert=post-delete');
		}
}


function delete_ktp_baru_arsip($id){
	if($this->session->userdata('level') != "admin"){
		redirect(base_url());
	}
	$this->load->database();
		if($id == ""){
			redirect('base_url()');
		}else{
			$where = array(
				'surat_mohon_id' => $id
				);

			$data = $this->m_dah->edit_data($where,'sr_ktp_baru')->row();
			// hapus di direktori upload/syarat
			@chmod("./upload/syarat/" . $data->foto_kopi_kk, 0777);
			@unlink('./upload/syarat/' . $data->foto_kopi_kk);

			@chmod("./upload/syarat/" . $data->ket_gk, 0777);
			@unlink('./upload/syarat/' . $data->ket_gk);

			@chmod("./upload/syarat/" . $data->foto_kopi_nikah, 0777);
			@unlink('./upload/syarat/' . $data->foto_kopi_nikah);

			@chmod("./upload/syarat/" . $data->foto_kopi_akta, 0777);
			@unlink('./upload/syarat/' . $data->foto_kopi_akta);

			// hapus di table 
		
			$this->m_dah->delete_data($where,'sr_ktp_baru');
			//  hapus tabel surat_mohon

			$this->m_dah->delete_data($where,'surat_mohon');
			redirect('admin/arsip_surat/?alert=post-delete');
		}
}

function delete_ktp_hilang_arsip($id){
		if($this->session->userdata('level') != "admin"){
		redirect(base_url());
		}
			$this->load->database();
				if($id == ""){
					redirect('base_url()');
				}else{
					$where = array(
						'surat_mohon_id' => $id
						);

					$data = $this->m_dah->edit_data($where,'sr_ktp_hilang')->row();
					// hapus di direktori upload/syarat
					@chmod("./upload/syarat/" . $data->foto_kopi_kk, 0777);
					@unlink('./upload/syarat/' . $data->foto_kopi_kk);

					@chmod("./upload/syarat/" . $data->surat_hilang_polisi, 0777);
					@unlink('./upload/syarat/' . $data->surat_hilang_polisi);

					// hapus di table 
				
					$this->m_dah->delete_data($where,'sr_ktp_hilang');
					//  hapus tabel surat_mohon

					$this->m_dah->delete_data($where,'surat_mohon');
					redirect('admin/arsip_surat/?alert=post-delete');
				}
		}


function delete_akte_lahir_arsip($id){
		if($this->session->userdata('level') != "admin"){
			redirect(base_url());
		}		
	$this->load->database();
		if($id == ""){
			redirect('base_url()');
		}else{
			$where = array(
				'surat_mohon_id' => $id
				);

			$data = $this->m_dah->edit_data($where,'sr_akte_lahir')->row();
			// hapus di direktori upload/syarat

			@chmod("./upload/syarat/" . $data->ket_gk, 0777);
			@unlink('./upload/syarat/' . $data->ket_gk);

			@chmod("./upload/syarat/" . $data->foto_kopi_ktp, 0777);
			@unlink('./upload/syarat/' . $data->foto_kopi_ktp);

			@chmod("./upload/syarat/" . $data->foto_kopi_kk, 0777);
			@unlink('./upload/syarat/' . $data->foto_kopi_kk);

			@chmod("./upload/syarat/" . $data->surat_lahir, 0777);
			@unlink('./upload/syarat/' . $data->surat_lahir);

			@chmod("./upload/syarat/" . $data->foto_kopi_nikah, 0777);
			@unlink('./upload/syarat/' . $data->foto_kopi_nikah);

			@chmod("./upload/syarat/" . $data->foto_kopi_ijazah, 0777);
			@unlink('./upload/syarat/' . $data->foto_kopi_ijazah);

			// hapus di table 
		
			$this->m_dah->delete_data($where,'sr_akte_lahir');
			//  hapus tabel surat_mohon

			$this->m_dah->delete_data($where,'surat_mohon');
			redirect('admin/arsip_surat/?alert=post-delete');
		}
}

function delete_akte_mati_arsip($id){
		if($this->session->userdata('level') != "admin"){
		redirect(base_url());
		}
	$this->load->database();
		if($id == ""){
			redirect('base_url()');
		}else{
			$where = array(
				'surat_mohon_id' => $id
				);

			$data = $this->m_dah->edit_data($where,'sr_akte_mati')->row();
			// hapus di direktori upload/syarat

			@chmod("./upload/syarat/" . $data->ket_gk, 0777);
			@unlink('./upload/syarat/' . $data->ket_gk);

			@chmod("./upload/syarat/" . $data->sk_rs, 0777);
			@unlink('./upload/syarat/' . $data->sk_rs);

			@chmod("./upload/syarat/" . $data->foto_kopi_kk, 0777);
			@unlink('./upload/syarat/' . $data->foto_kopi_kk);

			@chmod("./upload/syarat/" . $data->foto_kopi_ktp, 0777);
			@unlink('./upload/syarat/' . $data->foto_kopi_ktp);


			// hapus di table 
		
			$this->m_dah->delete_data($where,'sr_akte_mati');
			//  hapus tabel surat_mohon

			$this->m_dah->delete_data($where,'surat_mohon');
			redirect('admin/arsip_surat/?alert=post-delete');
		}
}

function delete_pindah_arsip($id){
	if($this->session->userdata('level') != "admin"){
	redirect(base_url());
	}
	$this->load->database();
		if($id == ""){
			redirect('base_url()');
		}else{
			$where = array(
				'surat_mohon_id' => $id
				);

			$data = $this->m_dah->edit_data($where,'sr_ket_pindah')->row();
			// hapus di direktori upload/syarat

			@chmod("./upload/syarat/" . $data->ket_gk, 0777);
			@unlink('./upload/syarat/' . $data->ket_gk);

			@chmod("./upload/syarat/" . $data->foto_kopi_kk, 0777);
			@unlink('./upload/syarat/' . $data->foto_kopi_kk);

			@chmod("./upload/syarat/" . $data->kk_asli, 0777);
			@unlink('./upload/syarat/' . $data->kk_asli);

			@chmod("./upload/syarat/" . $data->foto_kopi_ktp, 0777);
			@unlink('./upload/syarat/' . $data->foto_kopi_ktp);


			// hapus di table 
		
			$this->m_dah->delete_data($where,'sr_ket_pindah');
			//  hapus tabel surat_mohon

			$this->m_dah->delete_data($where,'surat_mohon');
			redirect('admin/arsip_surat/?alert=post-delete');
		}
}

function delete_ket_miskin_arsip($id){
	if($this->session->userdata('level') != "admin"){
		redirect(base_url());
	}
	$this->load->database();
		if($id == ""){
			redirect('base_url()');
		}else{
			$where = array(
				'surat_mohon_id' => $id
				);

			$data = $this->m_dah->edit_data($where,'sr_ket_miskin')->row();
			// hapus di direktori upload/syarat

			
			@chmod("./upload/syarat/" . $data->foto_kopi_kk, 0777);
			@unlink('./upload/syarat/' . $data->foto_kopi_kk);

			@chmod("./upload/syarat/" . $data->foto_kopi_ktp, 0777);
			@unlink('./upload/syarat/' . $data->foto_kopi_ktp);

			// hapus di table 
		
			$this->m_dah->delete_data($where,'sr_ket_miskin');
			//  hapus tabel surat_mohon

			$this->m_dah->delete_data($where,'surat_mohon');
			redirect('admin/arsip_surat/?alert=post-delete');
		}
}

function delete_ket_nikah_arsip($id){
	if($this->session->userdata('level') != "admin"){
	redirect(base_url());
	}
	$this->load->database();
		if($id == ""){
			redirect('base_url()');
		}else{
			$where = array(
				'surat_mohon_id' => $id
				);

			$data = $this->m_dah->edit_data($where,'sr_ket_nikah')->row();
			// hapus di direktori upload/syarat

			
			@chmod("./upload/syarat/" . $data->foto_kopi_kk, 0777);
			@unlink('./upload/syarat/' . $data->foto_kopi_kk);

			@chmod("./upload/syarat/" . $data->ktp_suami, 0777);
			@unlink('./upload/syarat/' . $data->ktp_suami);

			@chmod("./upload/syarat/" . $data->ktp_istri, 0777);
			@unlink('./upload/syarat/' . $data->ktp_istri);

			@chmod("./upload/syarat/" . $data->buku_nikah, 0777);
			@unlink('./upload/syarat/' . $data->buku_nikah);

			// hapus di table 
		
			$this->m_dah->delete_data($where,'sr_ket_nikah');
			//  hapus tabel surat_mohon

			$this->m_dah->delete_data($where,'surat_mohon');
			redirect('admin/arsip_surat/?alert=post-delete');
		}
}

function delete_ket_belum_nikah_arsip($id){
		if($this->session->userdata('level') != "admin"){
		redirect(base_url());
		}
	$this->load->database();
		if($id == ""){
			redirect('base_url()');
		}else{
			$where = array(
				'surat_mohon_id' => $id
				);

			$data = $this->m_dah->edit_data($where,'sr_belum_nikah')->row();
			// hapus di direktori upload/syarat

			
			@chmod("./upload/syarat/" . $data->foto_kopi_kk, 0777);
			@unlink('./upload/syarat/' . $data->foto_kopi_kk);

			@chmod("./upload/syarat/" . $data->foto_kopi_ktp, 0777);
			@unlink('./upload/syarat/' . $data->foto_kopi_ktp);

			// hapus di table 
		
			$this->m_dah->delete_data($where,'sr_belum_nikah');
			//  hapus tabel surat_mohon

			$this->m_dah->delete_data($where,'surat_mohon');
			redirect('admin/arsip_surat/?alert=post-delete');
		}
}

function delete_ket_cerai_arsip($id){
		if($this->session->userdata('level') != "admin"){
		redirect(base_url());
		}
	$this->load->database();
		if($id == ""){
			redirect('base_url()');
		}else{
			$where = array(
				'surat_mohon_id' => $id
				);

			$data = $this->m_dah->edit_data($where,'sr_ket_cerai')->row();
			// hapus di direktori upload/syarat

			@chmod("./upload/syarat/" . $data->foto_kopi_kk, 0777);
			@unlink('./upload/syarat/' . $data->foto_kopi_kk);

			@chmod("./upload/syarat/" . $data->ktp_suami, 0777);
			@unlink('./upload/syarat/' . $data->ktp_suami);

			@chmod("./upload/syarat/" . $data->ktp_istri, 0777);
			@unlink('./upload/syarat/' . $data->ktp_istri);
			// hapus di table 
		
			$this->m_dah->delete_data($where,'sr_ket_cerai');
			//  hapus tabel surat_mohon

			$this->m_dah->delete_data($where,'surat_mohon');
			redirect('admin/arsip_surat/?alert=post-delete');
		}
}

/*--------------------------
|  end delete arsip surat
----------------------------*/
	

/*--------------------------
|  Buat Penambahan Surat
----------------------------*/

	function data_surat(){
		$this->load->database();
		if($this->session->userdata('level') != "admin"){
				redirect(base_url());
			}

		$data['surat']=$this->m_dah->get_data('jenis_surat')->result();
		$this->load->view('admin/v_header');
		$this->load->view('admin/tambah_surat/v_data_surat',$data);
		$this->load->view('admin/v_footer');
	}

	function tambah_surat(){
		$this->load->database();
		if($this->session->userdata('level') != "admin"){
				redirect(base_url().'admin/data_surat');
			}

		$this->load->view('admin/v_header');
		$this->load->view('admin/tambah_surat/v_tambah_surat');
		$this->load->view('admin/v_footer');
	}


	function tambah_surat_act(){
		$this->load->database();
		if($this->session->userdata('level') != "admin"){
				redirect(base_url());
			}
		$nama = $this->input->post('nama');
		$kode = $this->input->post('kode');
		$syarat = $this->input->post('syarat');
		$format = $this->input->post('format');


		$this->form_validation->set_rules('nama','Nama','required');
		$this->form_validation->set_rules('kode','Kode','required');
		

		if($this->form_validation->run() != true){
			redirect('admin/tambah_surat');
		}else{
			$data= array(
				'nama_surat' => $nama,
				'kode_surat' => $kode,
				'syarat_surat' => $syarat,
				'format_surat' =>$format
			);
			$this->m_dah->insert_data($data,'jenis_surat');
			redirect(base_url().'admin/data_surat');
		}
		
	}


	function tambah_surat_edit($id){
		$this->load->database();
		if($this->session->userdata('level') != "admin"){redirect(base_url());}
		
		if($id == ""){
			redirect('admin/data_surat');
		}else{			
			$where = array(
				'id' => $id
				);	
			$data['surat'] = $this->m_dah->edit_data($where,'jenis_surat')->result();
			if(count($data['surat']) > 0){
				$this->load->view('admin/v_header');
				$this->load->view('admin/tambah_surat/v_edit_surat',$data);
				$this->load->view('admin/v_footer');				
			}else{
				redirect(base_url().'admin/data_surat');				
			}
		}
		
	}

	function tambah_surat_update(){
		if($this->session->userdata('level') != "admin"){redirect(base_url());}

		$this->load->database();		
		$id = $this->input->post('id');
		$nama = $this->input->post('nama');
		$kode = $this->input->post('kode');
		$syarat = $this->input->post('syarat');
		$format = $this->input->post('format');

		$this->form_validation->set_rules('nama','Nama','required');
		$this->form_validation->set_rules('kode','Kode','required');

		if($this->form_validation->run() != true){
			redirect('admin/tambah_surat_edit/'.$id);
		}else{
			$where=array(
				'id' => $id
			);
			$data= array(
				'nama_surat' => $nama,
				'kode_surat' => $kode,
				'syarat_surat' => $syarat,
				'format_surat' =>$format
			);
			$this->m_dah->update_data($where,$data,'jenis_surat');			
			
			redirect(base_url().'admin/tambah_surat_edit/'.$id.'/?alert=update');
		}
		

	}

	// end tambah surat

	// update surat lain review

	function update_surat_lain($id){
		if($this->session->userdata('level') != "admin"){
			redirect(base_url());
		}
		$this->load->database();

		$where=array(
			'nomor_mohon_surat' =>	$id
		);

		$data['surat']=$this->m_dah->edit_data($where,'jenis_mohon')->result();
		
		$this->load->view('admin/v_header');
		$this->load->view('admin/review/rv_surat_lain',$data);
		$this->load->view('admin/v_footer');
	}

	function update_surat_lain_act(){
		if($this->session->userdata('level') != "admin"){
			redirect(base_url());
		}
		$this->load->database();

		$surat_id= $this->input->post('surat_id');

        $where_s=array(
            'nomor_mohon_surat' => $surat_id
        );

        $ket_s= $this->input->post('ket_surat');
        $no_surat=$this->input->post('no_surat');
        $format= $this->input->post('format');

        
        if($this->input->post('tolak') != ""){
            $this->form_validation->set_rules('ket_surat','Keterangan diisi dengan alasan mengapa menolak permohonan', 'required');

            if($this->form_validation->run() != true){
                redirect('admin/update_surat_lain/'.$surat_id);
            }else{
             
                $data_surat=array(
                    'status' => "ditolak"
                );
                $this->m_dah->update_data($where_s,$data_surat,'jenis_mohon');
                redirect(base_url().'admin/permohonan_surat/?alert=update');
            }
        }

        if($this->input->post('setuju') != ""){
            $this->form_validation->set_rules('surat_id','Surat Id wajib ada', 'required');
            $this->form_validation->set_rules('no_surat','Nomor surat Wajib ada!!', 'required');
            if($this->form_validation->run() != true){
                redirect('admin/update_surat_lain/'.$surat_id);
         
            }else{
         
                $data_lain=array(
                    'nomor_surat' => $no_surat,
                    'tgl_disahkan' => date('Y-m-d'),
                    'info' => $ket_s,
                    'format_surat' => $format,
                    'status' => "diterima"
                );
               
                $this->m_dah->update_data($where_s,$data_lain,'jenis_mohon');
                redirect(base_url().'admin/permohonan_surat/?alert=update');
                
            }
        }


	}	

		function delete_surat_lain($id){
		if($this->session->userdata('level') != "admin"){
			redirect(base_url());
			}
				$this->load->database();
			if($id == ""){
				redirect('base_url()');
			}else{
				$where = array(
				'nomor_mohon_surat' => $id
				);

			$data = $this->m_dah->edit_data($where,'jenis_mohon')->row();
			// hapus di direktori upload/syarat

			@chmod("./upload/syarat/" . $data->upload, 0777);
			@unlink('./upload/syarat/' . $data->upload);

			// hapus di table 
			$this->m_dah->delete_data($where,'jenis_mohon');
			//  hapus tabel surat_mohon

			redirect('admin/permohonan_surat/?alert=post-delete');
		}
      }










// end braket file admin.php
    
}