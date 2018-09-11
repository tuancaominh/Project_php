function create_obj(){
	var browse = navigator.appName;
	if(browse == "Microsoft Internet Explorer"){
		obj = new ActiveXObject("XMLHTTP");
	}else{
		obj = new XMLHttpRequest();
	}
	return obj;
}

var http = create_obj();

function errors(name,pass){
	http.open("POST","ajax.php",true);
	http.setRequestHeader("Content-type","application/x-www-form-urlencoded");
	http.onreadystatechange = process;
	http.send("name="+name+"&pass="+pass);
}

function process(){
	if(http.readyState == 4 && http.status == 200){
		result = http.responseText;
		if(result == 1){
			window.location = "quantri.php";	
		}else{
			document.getElementById("errors").innerHTML = "Thông tin tài khoản không dúng";	
		}
	}
}