
  <?php foreach($data_surat as $ds){?>  
  <?php
    $where=array(
        'id' => $ds->penduduk_id
    );
    $nama_mati = array('id'=>$ds->nama_mati);
    $yang_mati=$this->m_dah->edit_data($nama_mati,'penduduk')->result();
    foreach($yang_mati as $ym){}
   
    $hari=date('D', strtotime($ds->tgl_mati));
    $data_diri = $this->m_dah->edit_data($where,'penduduk')->result();  
  ?>
<div class="ket_surat">
    <b> <p style="text-decoration:underline;"> SURAT KETERANGAN MENINGGAL</p> </b>
    <span>Nomor : <?php echo $ds->nomor_surat?>/12/UC/SKM/<?php echo date(Y)?></span>                           
</div>

<div class="isi_surat">
<p>
Geuchik Gampong Ulee Ceubrek Kecamatan Meurah Mulia Kabupaten Aceh Utara , dengan ini menerangkan bahwa :
</p>



<!-- data yang meninggal -->
<table class="data_surat" style="margin-top:-15px!important;padding-right:0!important">
  
    <tbody>
        <tr>
            <td>Nama Lengkap &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
            <td>:&nbsp;<?php echo $ym->nama?></td>
        </tr>

        <tr>
            <td>NIK</td>
            <td>:&nbsp;<?php echo $ym->nik?></td>
        </tr>

        <tr>
       
            <td>Tempat/ Tgl. lahir</td>
            <td>:&nbsp;<?php echo $ym->tempat_lahir ?>&nbsp;/ <?php echo date('d-m-Y',strtotime($ym->tgl_lahir))?></td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td>:&nbsp;<?php echo $this->m_dah->jenis_kelamin($ym->jenis_kelamin)?></td>
        </tr>

        <tr>
            <td>Agama</td>
            <td>:&nbsp;<?php echo $ym->agama?></td>
        </tr>

        <tr>
            <td>Alamat</td>
            <td>:&nbsp;Gampong Ulee Ceubrek</td>
        </tr>
        <tr>
            <td></td>
            <td>&nbsp;&nbsp;Kecamatan Meurah Mulia. Kabupaten Aceh Utara<td>
        </tr>
        
    </tbody>
</table>

<p>
Benar yang tersebut namanya di atas adalah Penduduk Gampong Ulee Ceubrek Kecamatan Meurah Mulia Kabupaten Aceh Utara dan benar ianya telah <b>Meninggal Dunia</b> pada :
</p>
<!-- end meninggal -->



<table class="data_surat" >
    <?php foreach ($data_diri as $dr){?>
    <tbody>
        <tr>
            <td>Hari/Tanggal </td>
            <td>:&nbsp;<?php echo $this->m_dah->format_hari($hari)?>, <?php echo $this->m_dah->format_tanggal(date('Y-m-d',strtotime($ds->tgl_mati)))?></td>
        </tr>

        <tr>
            <td>Pukul</td>
            <td>:&nbsp;<?php echo date('H:i', strtotime($ds->tgl_mati))?></td>
        </tr>

        <tr>
            <td>Penyebab</td>
            <td>:&nbsp;<?php echo $ds->sebab_mati?></td>

        </tr>

        <tr>
            <td>Bertempat di&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
            <td>:&nbsp;<?php echo $ds->tempat_mati?></td>
        </tr>

        
        <?php }?> 
    </tbody>
</table>
<!-- end tanggal kelahiran -->

<!-- ket kelahiran -->
<p>Surat keterangan ini dibuat berdasarkan laporan dari:</p>
<table class="data_surat" style="margin-top:-15px!important">
  
    <tbody>
        <tr>
            <td>Nama</td>
            <td>:&nbsp;<?php echo $dr->nama?></td>
        </tr>

        <tr>
            <td>NIK </td>
            <td>:&nbsp;<?php echo $dr->nik?></td>
        </tr>

        <tr>
            <td>Hubungan dengan Alm/Almh&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
            <td>:&nbsp;<?php echo $ds->hub_pelapor?></td>
        </tr>

        
    </tbody>
</table>
<!-- end ket kelahiran -->









<p style="margin-top:25px">
Demikian surat keterangan ini kami perbuat dengan sebenarnya agar dapat dipergunakan seperlunya. 
</p>

<div class="tanda_tangan" style="margin-top:15px!important">
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