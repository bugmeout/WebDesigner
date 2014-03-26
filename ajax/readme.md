# ajax exercise note #

**You must add onreadystatechange statement,or you ajax will fail.**

		function loadXMLDoc () {
		xmlhttp= new XMLHttpRequest();
		xmlhttp.onreadystatechange=function(){
	if (xmlhttp.readyState==4 && xmlhttp.status==200){
    document.getElementById("myDiv").innerHTML +=xmlhttp.responseText;
    		}
		}
		xmlhttp.open("GET","fix.php?name="+document.getElementsByTagName('input')[0].value,true);
		xmlhttp.send();
		// document.getElementById('myDiv').innerHTML =xmlhttp.responseText;
	}