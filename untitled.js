$(function () {
	var inputFile = $('input[name=file]');
	var uploadURI = $('#form-upload').attr('action');
	var progressBar = $('#progress-bar');

	// listFilesOnServer();

	$('input[type="file"]').on('change', function() {
		var fd = new FormData();

		if(this.files[0].size > (4194304*10)){
			console.log('No larger than 4MB.');
			return false;
		}
		var file = this.files[0];
		console.log(file);
		fd.append('file', file);
		var sendData = fd;
		$.ajax({
			url: uploadURI,
			type: "POST",
			data: sendData,
			contentType: false,
			processData: false,
			xhr: function() {  // Custom XMLHttpRequest
	            // var myXhr = $.ajaxSettings.xhr();
	            // if(myXhr.upload){ // Check if upload property exists
	            //     myXhr.upload.addEventListener('progress',progressHandlingFunction, false); // For handling the progress of the upload
	            // }
	            // return myXhr;
	        },
			success: function(data, text, xhr) {
				console.log(data);
				console.log(text);
				console.log(xhr);
			},
			error: function(xhr, textStatus, error) {
				console.log(xhr);
				console.log(textStatus);
				console.log(error);
				// alert('Error contacting server. Please try again later..');
			}
		});

		// if (fileToUpload != 'undefined') {
		// 	var formData = new FormData();
		// 	formData.append('file', fileToUpload);

		// 	// now upload the file using $.ajax
		// 	$.ajax({
		// 		url: uploadURI,
		// 		type: 'post',
		// 		dataType: "json",
		// 		data: formData,
		// 		processData: false,
		// 		contentType: false,
		// 		success: function(data, text, xhr) {
		// 			console.log(data);
		// 			console.log(text);
		// 			console.log(xhr);
		// 		},
		// 		error: function(xhr, textStatus, error) {
		// 			console.log(xhr);
		// 			console.log(textStatus);
		// 			console.log(error);
		// 			alert('Error contacting server. Please try again later..');
		// 		}
		// 	});
		// }
	});

	// $('body').on('click', '.remove-file', function () {
	// 	var me = $(this);

	// 	$.ajax({
	// 		url: uploadURI,
	// 		type: 'post',
	// 		data: {file_to_remove: me.attr('data-file')},
	// 		success: function() {
	// 			me.closest('li').remove();
	// 		}
	// 	});

	// })

	// function listFilesOnServer () {
	// 	var items = [];
	// 	console.log('alex');

	// 	$.getJSON(uploadURI, function(data) {
	// 		$.each(data, function(index, element) {
	// 			items.push('<li class="list-group-item">' + element  + '<div class="pull-right"><a href="#" data-file="' + element + '" class="remove-file"><i class="glyphicon glyphicon-remove"></i></a></div></li>');
	// 		});
	// 		$('.list-group').html("").html(items.join(""));
	// 	});
	// }

	// $('body').on('change.bs.fileinput', function(e) {
	// 	$('.progress').hide();
	// 	progressBar.text("0%");
	// 	progressBar.css({width: "0%"});
	// });
});