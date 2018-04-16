//Seif Elsallamy
function op(name, path, value, text){ //usage : id > the id of select tag to put options on; path> path to the file containing the json; value> what to put from json response to value attribute of option tag; text> what to put from json response to appear to the user in option tag. 
		var xmlhttp = new XMLHttpRequest(); // xmlhttp request to get external file
		xmlhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
				data = '<option value="%DATA1%">%DATA2%</option>'; // string of data to edit
				options = '';
				var myArr = JSON.parse(this.responseText); // looping through returned json response
				for (var i=0; i<myArr.length; i++ ){
					option = data.replace("%DATA1%",myArr[i][value]).replace("%DATA2%",myArr[i][text]); // replacing the %DATA% with real values then adding them to options string
					options = options + option;
				}
				
				selects = document.getElementsByName(name); // setting the options to select tag
				
				for (var n=0; n<selects.length; n++){
					selects[n].innerHTML = options;
				}
			}
		};
		xmlhttp.open("GET", path, true); // getting the json response 
		xmlhttp.send();
}

//example op("select_tag_name", "json/response.php", "response_value_name", "response_text_name");