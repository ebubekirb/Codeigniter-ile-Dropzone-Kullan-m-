Dropzone.autoDiscover = false;

$(function(){

	var myDropzone = new Dropzone("#dropForm");

	myDropzone.on("complete", function(file){

		var img = "<img src='http://localhost/CodeIgniter/drop/uploads/" + file.name + "'/>";

		var tr = "<tr><td>" + img + "</td><td>" + file.name + "</td></tr>";

		$(".table tbody").append(tr);

	})

})