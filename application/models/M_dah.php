<?php 
class M_dah extends CI_Model{
	// general

	// ini untuk menampilkan data berdasarkan kondisi id
	function edit_data($where,$table){
		return $this->db->get_where($table,$where);
	}

	// ini untuk menampilkan data berdasarkan kondisi id dengan order data
	function edit_data_order($where,$table,$column,$order){
		$this->db->order_by($column, $order);
		return $this->db->get_where($table,$where);
	}


// untuk dapatkan total kk melalui penduduk berdasarkan nomorkk
	function get_total_kk(){
	
		$this->db->select('nomor_kk, count(*)');
		$this->db->group_by('nomor_kk');
		$this->db->get('penduduk');
		echo $this->db->count_all_results();
	}

	// ini untuk menampilkan data
	function get_data($table){
		return $this->db->get($table);
	}

	// ini untuk menampilkan data secara desc

	function get_data_desc($id,$table){
		$this->db->order_by($id, 'desc');
		return $this->db->get($table);
	}

	// ini untuk simpan data
	function insert_data($data,$table){
		$this->db->insert($table,$data);
	}

	// ini untuk update data
	function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}

	// ini untuk hapus data
	function delete_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}	

	// ini untuk menampilkan data secara orderby

	function get_data_order($order,$column,$table){
		$this->db->order_by($column, $order); 
		return $this->db->get($table);
	}

	// ini untuk menampilkan data secara tergroup

	function get_group($table,$group){
		return $this->db->query("select * from $table group by $group");
	}

	// untuk bagian option buat pengaturan
	function get_option($option_name){		
		$query = $this->db->query("select option_value from dah_options where option_name='$option_name'")->row();
		return $query->option_value;
	}

	// query untuk detail penduduk
	function get_penduduk_user($id_penduduk){
		return $this->db->query("select * from user,penduduk where user.penduduk_id=penduduk.id and user.penduduk_id='$id_penduduk'");
	
	}

	// query untuk jabatan
	function get_jabatan_user($id_jabatan){
		return $this->db->query("select * from user,jabatan where user.jabatan=jabatan.id and user.jabatan='$id_jabatan'");
	
	}
	
	function jenis_kelamin($kelamin){
		switch($kelamin){
			case"pria":
				echo "Laki-laki";
			break;
			case"wanita":
				echo "Perempuan";
			break;
			default:
				echo"tidak ada kelamin banci";
			break;

		}
	}
	// format kelamin
	// koding untuk mengganti bulan default ke bahasa indonesia
	function format_tanggal($tanggal){
		$bulan = array (
			1 =>   'Januari',
			'Februari',
			'Maret',
			'April',
			'Mei',
			'Juni',
			'Juli',
			'Agustus',
			'September',
			'Oktober',
			'November',
			'Desember'
		);
		$pecahkan = explode('-', $tanggal);
		return $pecahkan[2] . ' ' . $bulan[ (int)$pecahkan[1] ] . ' ' . $pecahkan[0];
	}

	function format_hari($hari){

		switch($hari){
			case 'Sun':
				$hari_ini = "Minggu";
			break;
	 
			case 'Mon':			
				$hari_ini = "Senin";
			break;
	 
			case 'Tue':
				$hari_ini = "Selasa";
			break;
	 
			case 'Wed':
				$hari_ini = "Rabu";
			break;
	 
			case 'Thu':
				$hari_ini = "Kamis";
			break;
	 
			case 'Fri':
				$hari_ini = "Jumat";
			break;
	 
			case 'Sat':
				$hari_ini = "Sabtu";
			break;
			
			default:
				$hari_ini = "Tidak di ketahui";		
			break;
		}
		return  $hari_ini ;
	}	

		// Koding untuk preview page persyaratan
	function preview_file($nama_file){ /*ini menggunakanan paramerter $nama_file*/
		$url_sh=substr($nama_file,0,-4);
		$url_klik= base_url().'upload/syarat/'.$nama_file;
		$url_pdf=base_url().'admin/viewfile_pdf/'.$url_sh;
		
		$link_image="window.open('".$url_klik."','popup','width=600,height=600,scrollbars=no,resizable=no'); return false;";
		$link_pdf="window.open('".$url_pdf."','popup','width=600,height=600,scrollbars=no,resizable=no'); return false;";

		$file_path = pathinfo(base_url().'upload/syarat/'.$nama_file);
		switch(strtolower($file_path['extension'])){
			case"jpg":case"png":case"jpeg":
				echo '
				<a href="" onclick="'.$link_image.'">';
				echo "<img src='$url_klik' style='width:62px; height:62px'><br/>";
				echo "Preview File:&nbsp;".$nama_file."</br>";
				echo "</a>";
			break;
			case"pdf":
				echo '
				<a href="" onclick="'.$link_pdf.'">';
				
				echo "<i class='fas fa-file-pdf' style='font-size:62px;color:#D81F28'></i><br/>";
				echo "Preview File:&nbsp;".$nama_file."</br>";
				echo "</a>";
			break;	
			default:
			echo "File tidak ditemukan";
			break;	

		}
	}

	// end preview file


	// ini query untuk dapat last record data
	function last_record($table){
		return $this->db->query("select *from $table ORDER BY id DESC LIMIT 1;");
	}

	// ini query untuk dapat last record surat
	function last_record_surat($table,$status){
		return $this->db->query("select *from $table where status_surat='$status' ORDER BY nomor_surat DESC LIMIT 1");
	}

	// untu pnomoran surat secara otomatis
	function auto_nomor_surat($nomor){
		$no= 0;
		if($nomor == ""){
			$no++;
			$xi=str_pad($no,3,'0', STR_PAD_LEFT);
			echo trim($xi);
		}else{
			$xi=str_pad(1, 3, '0', STR_PAD_LEFT);
			$nb=$nomor + $xi;
			echo str_pad($nb, 3, '0', STR_PAD_LEFT);
		}
	}

	// menampilkan surat secara limitasi yang ditampilkan misal hanya menampilkan data cuma 20 saja
	function get_surat_limit($status,$limit){
		$this->db->limit($limit);
		$this->db->order_by('id', 'desc');
		$this->db->where(array('status_surat'=> $status));
		return $this->db->get('surat_mohon');
	}
	// sama dengan get_data cuma ini lebih spesifik ke surat_mohon
	function get_surat($limit){
		$this->db->limit($limit);
		$this->db->order_by('id', 'desc');
		return $this->db->get('surat_mohon');
	}
	// sama dengan get_data cuma ini lebih spesifik ke surat_mohon dan di order

	function get_surat_order($status){
		$this->db->order_by('id', 'desc');
		$this->db->where(array('status_surat'=> $status));
		return $this->db->get('surat_mohon');
	}
	// sama dengan get_data cuma ini lebih spesifik ke surat_mohon berdsarkan  nomor_surat
	function get_surat_order_fix($status){
		$this->db->order_by('nomor_surat', 'desc');
		$this->db->where(array('status_surat'=> $status));
		return $this->db->get('surat_mohon');
	}

	// khusu untuk surat_lain(tambahan surat)
	function pilih_surat_limit($id_penduduk,$limit,$table){
		$this->db->limit($limit);
		$this->db->order_by('id', 'desc');
		$where="penduduk_id='$id_penduduk'";
		$this->db->where($where);
		return $this->db->get($table);
	}

	// unutk pilih surat  berdasarkan penduduk_id 
	function pilih_surat($id_penduduk,$status,$table){
		return $this->db->query("select * from $table where penduduk_id='$id_penduduk' and status_surat='$status' order by id desc");
	}

	// unutk pilih surat  berdasarkan penduduk_id 

	function pilih_surat_fix($id_penduduk,$status,$table){
		return $this->db->query("select * from $table where penduduk_id='$id_penduduk' and status_surat='$status' order by nomor_surat desc");
	}

	// unutk pilih surat lain berdasarkan penduduk_id  untuk di admin

	function pilih_surat_lain($id_penduduk,$status,$table){
		return $this->db->query("select * from $table where penduduk_id='$id_penduduk' and status='$status' order by id desc");
	}

	// unutk pilih surat lain berdasarkan penduduk_id 

	function pilih_surat_lain_semua($id_penduduk,$table){
		return $this->db->query("select * from $table where penduduk_id='$id_penduduk' order by id desc");
	}

	// unutk menmpilkan surt lain di orderby

	function get_surat_lain_order($status){
		$this->db->order_by('id', 'desc');
		$this->db->where(array('status'=> $status));
		return $this->db->get('jenis_mohon');
	}

	function jenis_surat_user($jenis,$surat_mohon_id){
		
		$link_sk3b=base_url().'user/lihat_kk_baru/'.$surat_mohon_id;
		$link_skpnakk=base_url().'user/lihat_kk_tambah/'.$surat_mohon_id;
		$link_skpgakk=base_url().'user/lihat_kk_kurang/'.$surat_mohon_id;
		
		$link_skktpb=base_url().'user/lihat_ktp_baru/'.$surat_mohon_id;
		$link_skk=base_url().'user/lihat_ktp_hilang/'.$surat_mohon_id;

		$link_skkl=base_url().'user/lihat_akte_lahir/'.$surat_mohon_id;
		$link_skm=base_url().'user/lihat_akte_mati/'.$surat_mohon_id;
		
		$link_skpp=base_url().'user/lihat_pindah/'.$surat_mohon_id;
		$link_skkm=base_url().'user/lihat_ket_miskin/'.$surat_mohon_id;
		$link_sksm=base_url().'user/lihat_ket_nikah/'.$surat_mohon_id;
		$link_skbm=base_url().'user/lihat_ket_belum_nikah/'.$surat_mohon_id;
		$link_skb=base_url().'user/lihat_ket_cerai/'.$surat_mohon_id;


		switch($jenis){
			case "SK3B":
			echo "<a href='$link_sk3b'><i class='fa fa-eye' aria-hidden='true'></i></a>";	
			break;

			case "SKPnAKK":
			echo "<a href='$link_skpnakk'><i class='fa fa-eye' aria-hidden='true'></i></a>";	
			break;

			case "SKPgAKK":
			echo "<a href='$link_skpgakk'><i class='fa fa-eye' aria-hidden='true'></i></a>";	
			break;

			case "SKKTPB":
			echo "<a href='$link_skktpb'><i class='fa fa-eye' aria-hidden='true'></i></a>";	
			break;

			case "SKK":
			echo "<a href='$link_skk'><i class='fa fa-eye' aria-hidden='true'></i></a>";	
			break;
			
			case "SKKL":
			echo "<a href='$link_skkl'><i class='fa fa-eye' aria-hidden='true'></i></a>";	
			break;

			case "SKM":
			echo "<a href='$link_skm'><i class='fa fa-eye' aria-hidden='true'></i></a>";	
			break;

			case "SKPP":
			echo "<a href='$link_skpp'><i class='fa fa-eye' aria-hidden='true'></i></a>";	
			break;

			case "SKKM":
			echo "<a href='$link_skkm'><i class='fa fa-eye' aria-hidden='true'></i></a>";	
			break;

			case "SKSM":
			echo "<a href='$link_sksm'><i class='fa fa-eye' aria-hidden='true'></i></a>";	
			break;

			case "SKBM":
			echo "<a href='$link_skbm'><i class='fa fa-eye' aria-hidden='true'></i></a>";	
			break;

			case "SKB":
			echo "<a href='$link_skb'><i class='fa fa-eye' aria-hidden='true'></i></a>";	
			break;

			// tambahin lagi disini 
			default:
			echo "tidak ada jenis surat tersebut";
			break;	

		}
		// end switch
		
	}

	function jenis_surat_admin($jenis,$surat_mohon_id){
		
		$link_sk3b=base_url().'admin/update_kk_baru/'.$surat_mohon_id;
		$link_skpnakk=base_url().'admin/update_kk_tambah/'.$surat_mohon_id;
		$link_skpgakk=base_url().'admin/update_kk_kurang/'.$surat_mohon_id;
		
		$link_skktpb=base_url().'admin/update_ktp_baru/'.$surat_mohon_id;
		$link_skk=base_url().'admin/update_ktp_hilang/'.$surat_mohon_id;

		$link_skkl=base_url().'admin/update_akte_lahir/'.$surat_mohon_id;
		$link_skm=base_url().'admin/update_akte_mati/'.$surat_mohon_id;
		$link_skpp=base_url().'admin/update_pindah/'.$surat_mohon_id;
		$link_skkm=base_url().'admin/update_ket_miskin/'.$surat_mohon_id;
		$link_sksm=base_url().'admin/update_ket_nikah/'.$surat_mohon_id;
		$link_skbm=base_url().'admin/update_ket_belum_nikah/'.$surat_mohon_id;
		$link_skb=base_url().'admin/update_ket_cerai/'.$surat_mohon_id;

		switch($jenis){

			case "SK3B":
			echo "<a title='lihat pengaju surat' href='$link_sk3b'><i class='fa fa-eye' aria-hidden='true'></i></a>";	
			break;

			case "SKPnAKK":
			echo "<a title='lihat pengaju surat' href='$link_skpnakk'><i class='fa fa-eye' aria-hidden='true'></i></a>";	
			break;

			case "SKPgAKK":
			echo "<a title='lihat pengaju surat' href='$link_skpgakk'><i class='fa fa-eye' aria-hidden='true'></i></a>";	
			break;

			case "SKKTPB":
			echo "<a title='lihat pengaju surat' href='$link_skktpb'><i class='fa fa-eye' aria-hidden='true'></i></a>";	
			break;

			case "SKK":
			echo "<a title='lihat pengaju surat' href='$link_skk'><i class='fa fa-eye' aria-hidden='true'></i></a>";	
			break;
			
			case "SKKL":
			echo "<a title='lihat pengaju surat' href='$link_skkl'><i class='fa fa-eye' aria-hidden='true'></i></a>";	
			break;

			case "SKM":
			echo "<a title='lihat pengaju surat' href='$link_skm'><i class='fa fa-eye' aria-hidden='true'></i></a>";	
			break;

			case "SKPP":
			echo "<a title='lihat pengaju surat' href='$link_skpp'><i class='fa fa-eye' aria-hidden='true'></i></a>";	
			break;

			case "SKKM":
			echo "<a title='lihat pengaju surat' href='$link_skkm'><i class='fa fa-eye' aria-hidden='true'></i></a>";	
			break;

			case "SKSM":
			echo "<a title='lihat pengaju surat' href='$link_sksm'><i class='fa fa-eye' aria-hidden='true'></i></a>";	
			break;

			case "SKBM":
			echo "<a title='lihat pengaju surat' href='$link_skbm'><i class='fa fa-eye' aria-hidden='true'></i></a>";	
			break;

			case "SKB":
			echo "<a title='lihat pengaju surat' href='$link_skb'><i class='fa fa-eye' aria-hidden='true'></i></a>";	
			break;

			// tambahin lagi disini 
			default:
			echo "tidak ada jenis surat tersebut";
			break;	

		}
		// end switch	
	}


// start delete surat

	function delete_surat_admin($jenis,$surat_mohon_id){

		$yakin = "'Apa anda yakin akan menghapus data ini ?'";
		$konfirmasi='onclick="return confirm('.$yakin.')"';
		
		$link_sk3b=base_url().'admin/delete_kk_baru/'.$surat_mohon_id;
		$link_skpnakk=base_url().'admin/delete_kk_tambah/'.$surat_mohon_id;
		$link_skpgakk=base_url().'admin/delete_kk_kurang/'.$surat_mohon_id;
		
		$link_skktpb=base_url().'admin/delete_ktp_baru/'.$surat_mohon_id;
		$link_skk=base_url().'admin/delete_ktp_hilang/'.$surat_mohon_id;

		$link_skkl=base_url().'admin/delete_akte_lahir/'.$surat_mohon_id;
		$link_skm=base_url().'admin/delete_akte_mati/'.$surat_mohon_id;
		$link_skpp=base_url().'admin/delete_pindah/'.$surat_mohon_id;
		$link_skkm=base_url().'admin/delete_ket_miskin/'.$surat_mohon_id;
		$link_sksm=base_url().'admin/delete_ket_nikah/'.$surat_mohon_id;
		$link_skbm=base_url().'admin/delete_ket_belum_nikah/'.$surat_mohon_id;
		$link_skb=base_url().'admin/delete_ket_cerai/'.$surat_mohon_id;

		switch($jenis){

			case "SK3B":
			echo "<a title='hapus ajuan surat' href='$link_sk3b' $konfirmasi><i class='fa fa-trash' aria-hidden='true'></i></a>";	
			break;

			case "SKPnAKK":
			echo "<a title='hapus ajuan surat' href='$link_skpnakk' $konfirmasi><i class='fa fa-trash' aria-hidden='true'></i></a>";	
			break;

			case "SKPgAKK":
			echo "<a title='hapus ajuan surat' href='$link_skpgakk' $konfirmasi><i class='fa fa-trash' aria-hidden='true'></i></a>";	
			break;

			case "SKKTPB":
			echo "<a title='hapus ajuan surat' href='$link_skktpb' $konfirmasi><i class='fa fa-trash' aria-hidden='true'></i></a>";	
			break;

			case "SKK":
			echo "<a title='hapus ajuan surat' href='$link_skk' $konfirmasi><i class='fa fa-trash' aria-hidden='true'></i></a>";	
			break;
			
			case "SKKL":
			echo "<a title='hapus ajuan surat' href='$link_skkl' $konfirmasi><i class='fa fa-trash' aria-hidden='true'></i></a>";	
			break;

			case "SKM":
			echo "<a title='hapus ajuan surat' href='$link_skm' $konfirmasi><i class='fa fa-trash' aria-hidden='true'></i></a>";	
			break;

			case "SKPP":
			echo "<a title='hapus ajuan surat' href='$link_skpp' $konfirmasi><i class='fa fa-trash' aria-hidden='true'></i></a>";	
			break;

			case "SKKM":
			echo "<a title='hapus ajuan surat' href='$link_skkm' $konfirmasi><i class='fa fa-trash' aria-hidden='true'></i></a>";	
			break;

			case "SKSM":
			echo "<a title='hapus ajuan surat' href='$link_sksm' $konfirmasi><i class='fa fa-trash' aria-hidden='true'></i></a>";	
			break;

			case "SKBM":
			echo "<a title='hapus ajuan surat' href='$link_skbm' $konfirmasi><i class='fa fa-trash' aria-hidden='true'></i></a>";	
			break;

			case "SKB":
			echo "<a title='hapus ajuan surat' href='$link_skb' $konfirmasi><i class='fa fa-trash' aria-hidden='true'></i></a>";	
			break;

			// tambahin lagi disini 
			default:
			echo "tidak ada jenis surat tersebut";
			break;	

		}
		// end switch	
	}

// delete surat arsip
function delete_surat_admin_arsip($jenis,$surat_mohon_id){

		$yakin = "'Apa anda yakin akan menghapus data ini ?'";
		$konfirmasi='onclick="return confirm('.$yakin.')"';
		
		$link_sk3b=base_url().'admin/delete_kk_baru_arsip/'.$surat_mohon_id;
		$link_skpnakk=base_url().'admin/delete_kk_tambah_arsip/'.$surat_mohon_id;
		$link_skpgakk=base_url().'admin/delete_kk_kurang_arsip/'.$surat_mohon_id;
		
		$link_skktpb=base_url().'admin/delete_ktp_baru_arsip/'.$surat_mohon_id;
		$link_skk=base_url().'admin/delete_ktp_hilang_arsip/'.$surat_mohon_id;

		$link_skkl=base_url().'admin/delete_akte_lahir_arsip/'.$surat_mohon_id;
		$link_skm=base_url().'admin/delete_akte_mati_arsip/'.$surat_mohon_id;
		$link_skpp=base_url().'admin/delete_pindah_arsip/'.$surat_mohon_id;
		$link_skkm=base_url().'admin/delete_ket_miskin_arsip/'.$surat_mohon_id;
		$link_sksm=base_url().'admin/delete_ket_nikah_arsip/'.$surat_mohon_id;
		$link_skbm=base_url().'admin/delete_ket_belum_nikah_arsip/'.$surat_mohon_id;
		$link_skb=base_url().'admin/delete_ket_cerai_arsip/'.$surat_mohon_id;

		switch($jenis){

			case "SK3B":
			echo "<a title='hapus ajuan surat' href='$link_sk3b' $konfirmasi><i class='fa fa-trash' aria-hidden='true'></i></a>";	
			break;

			case "SKPnAKK":
			echo "<a title='hapus ajuan surat' href='$link_skpnakk' $konfirmasi><i class='fa fa-trash' aria-hidden='true'></i></a>";	
			break;

			case "SKPgAKK":
			echo "<a title='hapus ajuan surat' href='$link_skpgakk' $konfirmasi><i class='fa fa-trash' aria-hidden='true'></i></a>";	
			break;

			case "SKKTPB":
			echo "<a title='hapus ajuan surat' href='$link_skktpb' $konfirmasi><i class='fa fa-trash' aria-hidden='true'></i></a>";	
			break;

			case "SKK":
			echo "<a title='hapus ajuan surat' href='$link_skk' $konfirmasi><i class='fa fa-trash' aria-hidden='true'></i></a>";	
			break;
			
			case "SKKL":
			echo "<a title='hapus ajuan surat' href='$link_skkl' $konfirmasi><i class='fa fa-trash' aria-hidden='true'></i></a>";	
			break;

			case "SKM":
			echo "<a title='hapus ajuan surat' href='$link_skm' $konfirmasi><i class='fa fa-trash' aria-hidden='true'></i></a>";	
			break;

			case "SKPP":
			echo "<a title='hapus ajuan surat' href='$link_skpp' $konfirmasi><i class='fa fa-trash' aria-hidden='true'></i></a>";	
			break;

			case "SKKM":
			echo "<a title='hapus ajuan surat' href='$link_skkm' $konfirmasi><i class='fa fa-trash' aria-hidden='true'></i></a>";	
			break;

			case "SKSM":
			echo "<a title='hapus ajuan surat' href='$link_sksm' $konfirmasi><i class='fa fa-trash' aria-hidden='true'></i></a>";	
			break;

			case "SKBM":
			echo "<a title='hapus ajuan surat' href='$link_skbm' $konfirmasi><i class='fa fa-trash' aria-hidden='true'></i></a>";	
			break;

			case "SKB":
			echo "<a title='hapus ajuan surat' href='$link_skb' $konfirmasi><i class='fa fa-trash' aria-hidden='true'></i></a>";	
			break;

			// tambahin lagi disini 
			default:
			echo "tidak ada jenis surat tersebut";
			break;	

		}
		// end switch	
	}


// end delete surat

	// start print surat
	function print_surat($jenis,$surat_mohon_id){
		
		$link_sk3b=base_url().'cetak/cetak_kk_baru/'.$surat_mohon_id;
		$link_skpnakk=base_url().'cetak/cetak_kk_tambah/'.$surat_mohon_id;
		$link_skpgakk=base_url().'cetak/cetak_kk_kurang/'.$surat_mohon_id;
		
		$link_skktpb=base_url().'cetak/cetak_ktp_baru/'.$surat_mohon_id;
		$link_skk=base_url().'cetak/cetak_ktp_hilang/'.$surat_mohon_id;

		$link_skkl=base_url().'cetak/cetak_akte_lahir/'.$surat_mohon_id;
		$link_skm=base_url().'cetak/cetak_akte_mati/'.$surat_mohon_id;
		$link_skpp=base_url().'cetak/cetak_pindah/'.$surat_mohon_id;
		$link_skkm=base_url().'cetak/cetak_ket_miskin/'.$surat_mohon_id;
		$link_sksm=base_url().'cetak/cetak_ket_nikah/'.$surat_mohon_id;
		$link_skbm=base_url().'cetak/cetak_ket_belum_nikah/'.$surat_mohon_id;
		$link_skb=base_url().'cetak/cetak_ket_cerai/'.$surat_mohon_id;

		switch($jenis){

			case "SK3B":
			echo "<a title='print surat' target='_blank' href='$link_sk3b'><i class='fa fa-print'></i></a>";	
			break;

			case "SKPnAKK":
			echo "<a title='print surat' target='_blank' href='$link_skpnakk'><i class='fa fa-print'></i></a>";	
			break;

			case "SKPgAKK":
			echo "<a title='print surat' target='_blank' href='$link_skpgakk'><i class='fa fa-print'></i></a>";	
			break;

			case "SKKTPB":
			echo "<a title='print surat' target='_blank' href='$link_skktpb'><i class='fa fa-print'></i></a>";	
			break;

			case "SKK":
			echo "<a title='print surat' target='_blank' href='$link_skk'><i class='fa fa-print'></i></a>";	
			break;
			
			case "SKKL":
			echo "<a title='print surat' target='_blank' href='$link_skkl'><i class='fa fa-print'></i></a>";	
			break;

			case "SKM":
			echo "<a title='print surat' target='_blank' href='$link_skm'><i class='fa fa-print'></i></a>";	
			break;

			case "SKPP":
			echo "<a title='print surat' target='_blank' href='$link_skpp'><i class='fa fa-print'></i></a>";	
			break;

			case "SKKM":
			echo "<a title='print surat' target='_blank' href='$link_skkm'><i class='fa fa-print'></i></a>";	
			break;

			case "SKSM":
			echo "<a title='print surat' target='_blank' href='$link_sksm'><i class='fa fa-print'></i></a>";	
			break;

			case "SKBM":
			echo "<a title='print surat' target='_blank' href='$link_skbm'><i class='fa fa-print'></i></a>";	
			break;

			case "SKB":
			echo "<a title='print surat' target='_blank' href='$link_skb'><i class='fa fa-print'></i></a>";	
			break;

			// tambahin lagi disini 
			default:
			echo "tidak ada jenis surat tersebut";
			break;	

		}
		// end switch	
	}

	// end print surat


// start cek notif 

// untuk cek notif dari setiap role
	function cek_notif_user($id,$status){
		return $this->db->query("select * from surat_mohon where penduduk_id='$id' and notif='$status' order by id desc");
	}

	function cek_dusun($nama_dusun){

		switch ($nama_dusun) {
			case "buloh":
				echo "Bak Buloh";
				break;
			case "dikulam":
				echo "Tgk Dikulam";
				break;
			case "lampoh":
				echo "Lampoh Kubu";
				break;
			default:
				echo "";
				break;
		}
	}


function status_keluarga($nama){
	switch ($nama) {
			case "kepala":
				echo "Kepala Keluarga";
				break;
			case "istri":
				echo "Istri";
				break;
			case "anak":
				echo "Anak";
				break;
			case "menantu":
				echo "Menantu";
				break;
			case "cucu":
				echo "Cucu";
				break;
			case "orangtua":
				echo "Orangtua";
				break;	
			case "mertua":
				echo "Mertua";
				break;
			case "famili":
				echo "Famili Lain";
				break;
			case "pembantu":
				echo "Pembantu";
				break;
			case "lain":
				echo "Lainya";
				break;				
			default:
				echo "tidak ada status hub keluarga";
				break;
	}
}


// menampilkan total penduduk berdasarkan jenis kelamin
function penduduk_dif_total($status_kel){
	return $this->db->query("select *from penduduk where jenis_kelamin='$status_kel' ");
}

// ini utnuk total jumlah kk 
function kk_total($status_kel){
	return $this->db->query("select *from penduduk where status_hub_keluarga='$status_kel' ");
}

// klasifikasi jumlah perdusun
function dusun_total($dusun){
	return $this->db->query("select *from penduduk where dusun='$dusun' ");
}

// jumlah dusun berdasrkan jenis kelamin

function dusun_total_jk($dusun,$status){
	return $this->db->query("select *from penduduk where dusun='$dusun'and jenis_kelamin='$status' ");
}

// total dusun
function kk_dusun_total($dusun,$status_kel){
	return $this->db->query("select *from penduduk where dusun='$dusun' and status_hub_keluarga='$status_kel' ");
}



function status_login($nama){
	switch ($nama) {
		case "lurah":
			echo "Geuchik";
			break;
		case "rakyat":
			echo "Penduduk";
			break;
		case "admin":
			echo "Admin";
			break;	

		default:
		echo "Tidak ada di list";
			break;
	}
}


function status_surat_lain($status){
	switch ($status) {
		case 'review':
			echo "
				<label class='labil labil-order'>Review</label>
			";
			break;
		case 'diterima':

		echo "
				<label class='labil labil-success'>Selesai</label>
			";

		case 'ditolak':
		break;
		echo "
				<label class='labil labil-danger'>Ditolak</label>
			";
			break;
		default:
			echo "tidak dikenali";
			break;
	}
}

function cek_wn($status){
	switch ($status) {
		case 'wni':
			echo "Warga Negara Indonesia (WNI)";
			break;
		case 'wna':
			echo "Warga Negara Asing (WNA)";
			break;
		default:
			# code...
			break;
	}
}

	function cek_nikah($status){
		switch ($status) {
			case 'menikah':
				echo "Kawin";
				break;
			case 'belum_menikah':
				echo "Belum Kawin";
				break;	
			case 'cerai_hidup':
				echo "Cerai Hidup";
				break;
			case 'cerai_mati':
				echo "Cerai Mati";
				break;
			default:
				# code...
				break;
		}
	}

	function status_darah($status){
		switch ($status) {
			case 'a':
				echo "Golongan Darah (A)";
				break;
			case 'b':
				echo "Golongan Darah (B)";
				break;	
			case 'ab':
				echo "Golongan Darah (AB)";
				break;
			case 'o':
				echo "Golongan Darah (O)";
				break;
			default:
				# code...
				break;
		}
	}

}
?>