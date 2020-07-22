<form action="<?php echo base_url().'user/tes_jam'?>" method="post">

<div class="form-group">
<label for="">Tanggal Lahir</label>
<input type="date" class="form-control form-control-user" value="<?php echo date('Y-m-d')?>" name="tgl">

</div>
<div class="form-group">
<label for="">Jam Kelahiran</label>
<input type="time" class="form-control form-control-user" value="<?php echo date('H:i:s')?>" name="jam">

</div>
<button type="submit">kirim</button>
</form>