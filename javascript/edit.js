function getJson(url, action){
		var xmlhttp = new XMLHttpRequest();
		xmlhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
				var myArr = JSON.parse(this.responseText);
				for (i=0; i<myArr.length;i++){
					myArr[i]["Edit"] = "Edit";
				}
				Result(myArr, action);
			}
		};
		xmlhttp.open("GET", url, true);
		xmlhttp.send();
	}
	


function Result(myresult, action) {
		console.log(myresult);
        var col = [];
        for (var i = 0; i < myresult.length; i++) {
            for (var key in myresult[i]) {
                if (col.indexOf(key) === -1) {
                    col.push(key); //append array keys to col array
					
                }
            }
        }

        var table = document.createElement("table");
		table = addAttribute(table, "class", "table table-hover table-bordered table-condensed table-striped c");
			
			var tr = table.insertRow(-1);                   

        for (var i = 0; i < col.length; i++) {
            var th = document.createElement("th");
            th.innerHTML = col[i];
			tr.appendChild(th);
        }
			
		
			
        for (var i = 0; i < myresult.length; i++) {
			
            tr = table.insertRow(-1);
			
            for (var j = 0; j < col.length; j++) {
                var tabCell = tr.insertCell(-1);
				
				if (col[j] === "Edit"){
				
				input = document.createElement("input");
				input = addAttribute(input, "name", col[j]);
				input = addAttribute(input, "value", myresult[i][col[j]]);
				input = addAttribute(input, "form", myresult[i][col[0]]);
				input = addAttribute(input, "type", "submit");
				
				input = addAttribute(input, "class", "btn btn-primary");
				
				tabCell.appendChild(input);
				
				
				
				
				} else if (j === 0){
				
				input = document.createElement("input");
				input = addAttribute(input, "name", col[j]);
				input = addAttribute(input, "value", myresult[i][col[j]]);
				input = addAttribute(input, "form", myresult[i][col[0]]);
				input = addAttribute(input, "readonly", "");

				input = addAttribute(input, "class", "form-control");
				
				tabCell.appendChild(input);
				
				form = document.createElement("form");
				form = addAttribute(form, "id", myresult[i][col[0]]);
				form = addAttribute(form, "action", action);
				form = addAttribute(form, "method", "POST");
				tabCell.appendChild(form);
					
				} else {
				
				input = document.createElement("input");
				input = addAttribute(input, "name", col[j]);
				
				input = addAttribute(input, "value", myresult[i][col[j]]);
				input = addAttribute(input, "form", myresult[i][col[0]]);
				
				input = addAttribute(input, "class", "form-control");
				
				
				
				
				
				
                
				tabCell.appendChild(input);
				}
            }
        }

        var divContainer = document.getElementById("showData");
        divContainer.innerHTML = "";
        divContainer.appendChild(table);
}


function addAttribute(element, att, value){
att = document.createAttribute(att);
att.value = value;
element.setAttributeNode(att);
return element;
}

