
  <?php foreach($data_surat as $ds){?>  
<div class="ket_surat">
    <b> <p style="text-decoration:underline;"> SURAT KETERANGAN KELAHIRAN</p> </b>
    <span>Nomor : <?php echo $ds->nomor_surat?>/12/UC/SKKL/<?php echo date(Y)?></span>                           
</div>

<div class="isi_surat">
<p>
Geuchik Gampong Ulee Ceubrek Kecamatan Meurah Mulia Kabupaten Aceh Utara , dengan ini menerangkan bahwa :
</p>

<table class="data_surat" >
    <?php
        $where=array(
            'id' => $ds->istri_id
        );
        $id_suami = array('id'=>$ds->suami_id);
        $suami=$this->m_dah->edit_data($id_suami,'penduduk')->result();
        foreach($suami as $su){}
       
        $hari=date('D', strtotime($ds->tgl_lahir));
        $data_diri = $this->m_dah->edit_data($where,'penduduk')->result();
        foreach ($data_diri as $dr){
    ?>
    <tbody>
        <tr>
            <td>Hari/Tanggal </td>
            <td>:&nbsp;<?php echo $this->m_dah->format_hari($hari)?>, <?php echo $this->m_dah->format_tanggal(date('Y-m-d',strtotime($ds->tgl_lahir)))?></td>
        </tr>

        <tr>
            <td>Pukul</td>
            <td>:&nbsp;<?php echo date('H:i', strtotime($ds->tgl_lahir))?></td>
        </tr>

        <tr>
            <td>Tempat kelahiran&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
            <td>:&nbsp;<?php echo $ds->tmp_lahir?></td>
        </tr>

        
        <?php }?> 
    </tbody>
</table>
<!-- end tanggal kelahiran -->

<!-- ket kelahiran -->
<p>Telah <b>lahir</b> seorang anak:</p>
<table class="data_surat" style="margin-top:-15px!important">
  
    <tbody>
        <tr>
            <td>Bernama</td>
            <td>:&nbsp;<?php echo $ds->nama_lahir?></td>
        </tr>

        <tr>
            <td>Jenis Kelamin &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
            <td>:&nbsp;<?php echo $ds->kelamin?></td>
        </tr>

        <tr>
            <td>Anak Ke&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
            <td>:&nbsp;<?php echo $ds->nomor_anak?></td>
        </tr>

        
    </tbody>
</table>
<!-- end ket kelahiran -->

<!-- nama ortu -->
<p>Dari seorang ibu:</p>
<table class="data_surat" style="margin-top:-15px!important">
  
    <tbody>
        <tr>
            <td>Nama Lengkap&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
            <td>:&nbsp;<?php echo $dr->nama?></td>
        </tr>

        <tr>
            <td>NIK</td>
            <td>:&nbsp;<?php echo $dr->nik?></td>
        </tr>

        <tr>
        <?php 
           $lahir=new DateTime($dr->tgl_lahir); 
           $today=new DateTime();
           $umur = $today->diff($lahir);
        ?>
            <td>Umur&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
            <td>:&nbsp;<?php echo $umur->y ?>&nbsp;tahun</td>
        </tr>
        <tr>
            <td>Pekerjaan</td>
            <td>:&nbsp;<?php echo $dr->pekerjaan?></td>
        </tr>

        <tr>
            <td>Istri dari</td>
            <td>:&nbsp;<?php echo $su->nama?></td>
        </tr>

        <tr>
            <td>Alamat</td>
            <td>:&nbsp;Gampong Ulee Ceubrek</td>
        </tr>
        <tr>
            <td></td>
            <td>&nbsp;&nbsp;&nbsp;Kecamatan Meurah Mulia. Kabupaten Aceh Utara<td>
        </tr>
        
    </tbody>
</table>


<!-- end nama ortu -->


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