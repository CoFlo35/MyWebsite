$(document).ready(function(){
	
	
	$("#LinkedIn").click(function(){
		window.open("https://www.linkedin.com/in/colin-flood-2219b1198/",'_blank');
	});
	
	$("#Email").click(function(event){
		var email = 'colinflood35@gmail.com';
		//liam.hoffman99@gmail.com
        var subject = '';
        var emailBody = '';
        document.location = "mailto:"+email+"?subject="+subject+"&body="+emailBody;
	});
	
	$("#Handshake").click(function(){
		window.open("https://app.joinhandshake.com/stu/users/17965705",'_blank');
	});
	
})