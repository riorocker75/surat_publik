<input type="file" id="file_1" name="fileku"> 
<input type="button" id="i_submit" value="Submit">
    <br>
<img src="" width="200" style="display:none;" />
        <br>
<div class="file_show" id="file_show_1"></div>

<!-- <a href="" onclick="window.open('blob:http://localhost/353fcc93-8660-4cd6-a664-2285a4811e72','popup','width=600,height=600,scrollbars=no,resizable=no'); return false;"><img src="blob:http://localhost/353fcc93-8660-4cd6-a664-2285a4811e72" style="width:62px; height:62px"><br>Preview File:<br></a> -->

<script>


	$('#file_1').change( function(event) {
		var tmppath = URL.createObjectURL(event.target.files[0]);
	    // $("img").fadeIn("fast").attr('src',URL.createObjectURL(event.target.files[0]));

	    var open="window.open('"+tmppath+"','popup','width=600,height=600,scrollbars=no,resizable=no');return false;";
	    

    	var extensi=file_1.value.split('.')[1];

    	switch(extensi.toLowerCase()){
    		case "jpg":case "png":case "jpeg":
	    	$("#file_show_1").html("<a onclick="+open+"><img src='"+tmppath+"' style='width:62px; height:62px'><br>Preview File<br></a>");
     		break;

     		case "pdf":
	    	$("#file_show_1").html("<a onclick="+open+"><i class='fas fa-file-pdf' style='font-size:62px;color:#D81F28'></i><br>Preview File<br></a>");
     		break;

     		default:
     		$("#ext").html("extension nya: halu");	
    	}	

});


</script>

