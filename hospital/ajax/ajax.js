function creater_obj(){
	var browse = navigator.appName;
	if(browse == "Microsoft Internet EXplorer"){
		obj = new ActiveXObject("XMLHTTP");	
	}else{
		obj = new XMLHttpRequest();	
	}
	return obj;		
}
var http = creater_obj();

function getbacsy(id){
		http.open("GET","process.php?val="+id,true);
		http.onreadystatechange = response;
		http.send(null);
}
function response(){
	if(http.readyState == 4 && http.status ==200){
		result = http.responseText;
		document.getElementById("bacsys").innerHTML = result;	
	}	
}