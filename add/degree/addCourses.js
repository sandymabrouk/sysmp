
function addCourses(){
	
	var number_of_terms = document.getElementById("number_of_terms").value;
	alert(number_of_terms);
}

$('#number_of_terms').change(function(event) {
	var number_of_terms = $('#number_of_terms').val();
	//alert(number_of_terms);
	
	$("#courses_group div").remove();
	$("#courses_group hr").remove();
	 for (var i = 0; i < number_of_terms; i++) 
    {
		var design = '<hr><div class="form-group"><label for="number_of_terms">- Round '+(i+1)+'</label></div>';
		
		design += '<div class="form-group">'+
						'<div class="form-row">'+
						  '<div class="col-md-6">'+
							'<label >Start Date</label>'+
							'<input class="form-control" name="start_date[]" type="date" required>'+
						  '</div>'+
						  '<div class="col-md-6">'+
							'<label >End Date</label>'+
							'<input class="form-control" name="end_date[]" type="date" required>'+
						  '</div>'+
						'</div>'+
				  '</div>';
		  
		design += '<div class="form-group">'+
				'<div class="form-row">'+
				  '<div class="col-md-6">'+
					'<label >Course 1</label>'+
					'<input class="form-control" name="course1[]" type="text" required>'+
				  '</div>'+
				  '<div class="col-md-6">'+
					'<label >Dr.</label>'+
					'<select name="professor1[]" class="form-control">'+
					'</select>'+
					'<!--<input class="form-control" name="course1[]" type="text" required>-->'+
				  '</div>'+
				  '<div class="col-md-6">'+
					'<label >Course 2</label>'+
					'<input class="form-control" name="course2[]" type="text" required>'+
				  '</div>'+
				  '<div class="col-md-6">'+
					'<label >Dr.</label>'+
					'<select name="professor2[]" class="form-control">'+
					'</select>'+
					'<!--<input class="form-control" name="course1" type="text" required>-->'+
				  '</div>'+
				'</div>'+
			  '</div>';
			  
		$('#courses_group').append(design);
	}
	$('#courses_group').append('<hr>');
	op('professor1[]','../../json/professors.php','professor_email','name'); op('professor2[]','../../json/professors.php','professor_email','name');
	
});