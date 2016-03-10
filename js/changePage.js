function changeSource(path){
	document.getElementById("iFrame1").src = path;
}

function changeInsideSource(path){
	window.parent.document.getElementById('iFrame1').src = path
}

function showIFrame() {  
 var iframe = document.getElementById("myiframe");  
 iframe.style.display="block";  
} 