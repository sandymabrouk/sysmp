
function addCourses(){
	
	var number_of_semesters = document.getElementById("number_of_semesters").value;
	alert(number_of_semesters);
}

$('#number_of_semesters').change(function(event) {
	var number_of_semesters = $('#number_of_semesters').val();
	//alert(number_of_semesters);
	
	$("#courses_group div").remove();
	$("#courses_group hr").remove();
	 for (var i = 0; i < number_of_semesters; i++) 
    {
		var design = '<hr><div class="form-group"><label for="number_of_semesters">- Semester '+(i+1)+'</label></div>';
		design += '<div class="form-group">'+
				'<div class="form-row">'+
				  '<div class="col-md-6">'+
					'<label >Course title</label>'+
					'<input class="form-control" name="course[]" type="text" required>'+
				  '</div>'+
				  '<div class="col-md-6">'+
					'<label >By professor</label>'+
					'<select id="select_professor" name="professor[]" class="form-control"><option value="">---</option></select>'+
				  '</div>'+
				'</div>'+
			  '</div>'+
			  '<div class="form-group">'+
				'<div class="form-row">'+
				  '<div class="col-md-6">'+
					'<input class="form-control" name="course[]" type="text" required>'+
				  '</div>'+
				  '<div class="col-md-6">'+
					'<select id="select_professor" name="professor[]" class="form-control"><option value="">---</option></select>'+
				  '</div>'+
				'</div>'+
			  '</div>'+
			  '<div class="form-group">'+
				'<div class="form-row">'+
				  '<div class="col-md-6">'+
					'<input class="form-control" name="course[]" type="text" required>'+
				  '</div>'+
				  '<div class="col-md-6">'+
					'<select id="select_professor" name="professor[]" class="form-control"><option value="">---</option></select>'+
				  '</div>'+
				'</div>'+
			  '</div>'+
			  '<div class="form-group">'+
				'<div class="form-row">'+
				  '<div class="col-md-6">'+
					'<input class="form-control" name="course[]" type="text" required>'+
				  '</div>'+
				  '<div class="col-md-6">'+
					'<select id="select_professor" name="professor[]" class="form-control"><option value="">---</option></select>'+
				  '</div>'+
				'</div>'+
			  '</div>';
			  
		$('#courses_group').append(design);
	}
	$('#courses_group').append('<hr>');
	
});

function getJson(url){
	var xmlhttp = new XMLHttpRequest();
	xmlhttp.onreadystatechange = function() {
	if (this.readyState == 4 && this.status == 200) {
			var myArr = JSON.parse(this.responseText);
			addToSelect(myArr);
				
		}
	};
	xmlhttp.open("GET", url, true);
	xmlhttp.send();
}
	
function addToSelect(r){
	options = '<option value="%data1%">%data2%</option>';
	for (i=0;i<r.length;i++){
		rr = document.getElementsByName("professor[]");
		for (ii=0;ii<rr.length;ii++){
			rr[ii].innerHTML = rr[ii].innerHTML + options.replace("%data1%",r[i]["professor_email"]).replace("%data2%",r[i]["name"]);
		}
	}
}
	
