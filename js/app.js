$('#file-input').on('change',uploadimage);

/** Upload Image on Server */
function uploadimage(){
	var fd = new FormData(); 
	var files = $('#file-input')[0].files[0];
	fd.append('file', files); 
	console.log(files);
	$.ajax({ 
		url: 'upload.php', 
		type: 'post', 
		data: fd, 
		contentType: false, 
		processData: false, 
		success: function(response){ 
			if(response != 0){ 
				alert('Profile pic Updated'); 
                $('#profile_pic').attr('src','img/'+files.name);
			} 
			else{ 
				alert('file not uploaded'); 
			} 
		}, 
	}); 
}
$(document).ready(function () {
	$("#insertform").validate({
	submitHandler: function(form) {
	  form.submit();
	}
  });
  $("#search-Input").on("keyup", function () {
	var value = $(this).val().toLowerCase();
	$("#myTable tr").filter(function () {
		$(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
	});
});
});