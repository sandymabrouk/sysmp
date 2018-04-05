function getJson(url){
		var xmlhttp = new XMLHttpRequest();
		xmlhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
				var myArr = JSON.parse(this.responseText);
				Result(myArr);
			}
		};
		xmlhttp.open("GET", url, true);
		xmlhttp.send();
	}
	


function Result(myresult) {
		console.log(myresult);
        var col = [];
        for (var i = 0; i < myresult.length; i++) {
            for (var key in myresult[i]) {
                if (col.indexOf(key) === -1) {
                    col.push(key);
                }
            }
        }

        var table = document.createElement("table");
		table = addAttribute(table, "class", "table table-hover table-bordered table-condensed table-striped");

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
                tabCell.innerHTML = myresult[i][col[j]];
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
