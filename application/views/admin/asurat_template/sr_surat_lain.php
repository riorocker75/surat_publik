<?php foreach($surat as $sr){}?>
<?php 
	$wu=array('id' => $sr->surat_id);
	$ops= $this->m_dah->edit_data($wu,'jenis_surat')->result();
	foreach ($ops as $op) {}
?>
<div class="ket_surat">
    <b> <p style="text-decoration:underline;text-transform: uppercase;"> <?php echo $op->nama_surat?>  </p> </b>
    <span>Nomor : <?php echo $sr->nomor_surat ?>/12/UC/<?php echo $op->kode_surat ?>/<?php echo date(Y)?></span>                           
</div>

<div class="isi_surat">
	<?php echo $sr->format_surat?>
</div>	


<div class="tanda_tangan" style="margin-top:30px">
    <p style="text-align:center;">
    Gampong Ulee Ceubrek, <?php echo $this->m_dah->format_tanggal(date('Y-m-d',strtotime($sr->tgl_disahkan)))?>
    </p>
    <p style="text-align:center;margin-top:-15px;">
    Geuchik Gampong Ulee Ceubrek
    </p>

    <p style="text-align:center;margin-top:75px;text-decoration:underline">
    <b>NASRUL FADHIL, ST</b> 
    </p>

</div>