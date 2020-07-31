minlength="16" maxlength="16" 
type="text" pattern="\d*"

oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"

$this->form_validation->set_rules('no_kk','Nomor Kartu Keluarga','required|max_length[16]|min_length[16]');

$this->m_dah->cek_wn($pdk->status_warga_negara)

