
  <?php foreach($data_surat as $ds){?>  
<div class="ket_surat">
    <b> <p style="text-decoration:underline;"> SURAT KETERANGAN KARTU KELUARGA BARU  </p> </b>
    <span>Nomor : <?php echo $ds->nomor_surat?>/12/UC/SK3B/<?php echo date(Y)?></span>                           
</div>

<div class="isi_surat">
<p>
Geuchik Gampong Ulee Ceubrek Kecamatan Meurah Mulia Kabupaten Aceh Utara , dengan ini menerangkan bahwa :
</p>

<?php
    $where=array('id' => $ds->kepala_keluarga);
    $kpl_ja= $this->m_dah->edit_data($where, 'penduduk')->result();
    foreach ($kpl_ja as $kp) {}
?>
<table class="data_surat">
    <tbody>
        <tr>
            <td>Nama </td>
            <td>:&nbsp;<?php echo $kp->nama?></td>
        </tr>

        <tr>
            <td>NIK</td>
            <td>:&nbsp;<?php echo $kp->nik?></td>
        </tr>

        <tr>
            <td>No. KK Lama&nbsp;&nbsp;&nbsp;&nbsp;</td>
            <td>:&nbsp;<?php echo $ds->no_kk_lama?></td>
        </tr>

        <tr>
            <td>Alamat</td>
            <td>:&nbsp;Gampong Ulee Ceubrek</td>
        </tr>
        
        <tr>
            <td></td>
            <td>&nbsp;&nbsp;Kecamatan Meurah Mulia. Kabupaten Aceh Utara<td>
        </tr>

        <tr>
            <td>Jumlah Anggota Keluarga &nbsp;&nbsp;&nbsp;&nbsp;</td>
            <td>:&nbsp;<?php echo $ds->jlh_anggota?></td>
        </tr>
     
   </tbody>      
</table>
<div style="display: inline-block;padding-left: 1.14cm; display: flex;">
    Nama dan NIK Anggota <label style="margin-left:37px">:</label >
   <span style="margin-top: -15px;margin-left: -20px"><?php echo $ds->list_admin?></span> 
</div>

<p style="margin-top:25px">
Benar yang tersebut namanya diatas penduduk Gampong Ulee Ceubrek Kecamatan Meurah Mulia Kabupaten Aceh Utara, dan benar ianya ingin membuat <b>baru</b> Kartu Keluarga (KK).
</p>

<p style="margin-top:25px">
Demikian surat keterangan ini kami perbuat dengan sebenarnya agar dapat dipergunakan seperlunya. 
</p>

<div class="tanda_tangan" style="margin-top:20px">
    <p style="text-align:center;">
    Gampong Ulee Ceubrek, <?php echo $this->m_dah->format_tanggal(date('Y-m-d',strtotime($ds->tgl_disahkan)))?>
    </p>
    <p style="text-align:center;margin-top:-15px;">
    Geuchik Gampong Ulee Ceubrek
    </p>

    <p style="text-align:center;margin-top:75px;text-decoration:underline">
    <b>NASRUL FADHIL, ST</b> 
    </p>

</div>
</div>

  <?php }?>