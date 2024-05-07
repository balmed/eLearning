$(document).ready(function (){
$("#textarea").click(function (){
$("#none").show();})
$("#hhh").click(function (){
$("#none").hide();})
$("#div").click(function (){
var n=$(this).val();
$("#"+n).show();
});});
function smayli(a){
var msg=$(".balouk").val();
$(".balouk").val(msg+" "+a+" ");
$("#oubannou1").slideToggle(100);
}
function smailmessage(a){
if(a == "1"){
var po=$("#oubannou").position();
$("#oubannou1").css("right:"+(po.right-5));
$("#oubannou1").slideToggle(100);
}
else{
$("#sortpicture").click();
}}
function baloukchatimg(a){
    var file_data = $("#sortpicture").prop("files")[0];  
    var file= $("#sortpicture").prop("files")[0]['name']; 
    var form_data = new FormData();
    var extension = file.substr((file.lastIndexOf('.') + 1));
if (extension == 'jpg' || extension == 'jpeg' || extension == 'gif' || extension == 'png' || extension == 'bmp'){                
    form_data.append("file", file_data)                            
    $.ajax({
                url: "chat.php?id=img&ref="+a+"&nam="+file,
                dataType: 'script',
                cache: false,
                contentType: false,
                processData: false,
                data: form_data,                         
                type: 'post'
     });
    } else {
        alert('We only accept JPG, JPEG, PNG, GIF and BMP files');
    }
}
function fselect(a){
var b=$("#statutnow").val();
if(a == "1"){
	if(b == ""){
		$("#statutnow").val("img");
	}}
	
if(a == "2"){
		$("#statutnow").val("pdf");
		}
		
if(a == "3"){
	if(b == ""){
		$("#statutnow").val("vid");
	}else{
			if(b == "img"){
			$("#statutnow").val("vid");
			}
		
	}
}
}
function ayourload(){
location.reload();
}
function uploded(a){
//--------------------------------------------------------------------------------
var ex;
var suj=$("#textarea").val();
var b=$("#statutnow").val();

if(b == "pdf"){
	    var file=$("#file2").prop("files")[0]['name'];
	    var extension = file.substr((file.lastIndexOf('.') + 1));
    if (extension == 'pdf' || extension == 'doc' || extension == 'docx') {
			if (extension == 'pdf'){ex="pdf";}else{ex="docx";}
            var file_data = $("#file2").prop("files")[0];   
			var form_data = new FormData();                  
			form_data.append("pdf", file_data)                            
				$.ajax({
					url: "upload.php?ref="+a+"&suj="+suj+"&page="+a+"&ex="+ex+"&data=pdf",
					dataType: 'script',
					cache: false,
					contentType: false,
					processData: false,
					data: form_data,                         
					type: 'post',
					success: function(){
					$("#textarea").val("");$("#statutnow").val("");$("#statuenew").slideToggle(100);
					setTimeout("ayourload();",5000);}
				});  
    } else {
        alert('We only accept pdf, doc, docx');
    }
}else{

if(b == "vid"){
	    var file=$("#file3").prop("files")[0]['name'];
	    var extension = file.substr((file.lastIndexOf('.') + 1));
    if (extension == 'mp4') {
            var file_data = $("#file3").prop("files")[0];  
            $("#statuenew").slideToggle(100); 
			var form_data = new FormData();                  
			form_data.append("vid", file_data)                            
				$.ajax({
					url: "upload.php?ref="+a+"&suj="+suj+"&page="+a+"&data=vid",
					dataType: 'script',
					cache: false,
					contentType: false,
					processData: false,
					data: form_data,                         
					type: 'post',
					success: function(){
					$("#textarea").val("");
					setTimeout("ayourload();",3000);}});  
    } else {
        alert('We only accept mp4');
    }
}else{

if(b == "img"){
	    var file=$("#file1").prop("files")[0]['name'];
	    var extension = file.substr((file.lastIndexOf('.') + 1));
    if (extension == 'jpg' || extension == 'jpeg' || extension == 'gif' || extension == 'png' || extension == 'bmp'){
            var file_data = $("#file1").prop("files")[0];   
			var form_data = new FormData();                  
			form_data.append("img", file_data)                            
				$.ajax({
					url: "upload.php?ref="+a+"&suj="+suj+"&page="+a+"&data=img",
					dataType: 'script',
					cache: false,
					contentType: false,
					processData: false,
					data: form_data,                         
					type: 'post',
					success: function(){
					$("#textarea").val("");$("#statutnow").val("");$("#statuenew").slideToggle(100);
					setTimeout("ayourload();",5000);}	});  
    } else {
        alert('We only accept JPG, JPEG, PNG, GIF and BMP files');
    }


}else{
	if(suj != ""){
			$.ajax({
					url: "upload.php?ref="+a+"&suj="+suj+"&page="+a,                   
					type: 'post',
					success: function(){
					$("#textarea").val("");$("#statutnow").val("");$("#statuenew").slideToggle(100);
					setTimeout("ayourload();",5000);}});

}else{alert("text vide");}}}}
//------------------------------------------------------------------------------------
}


function not(){
var po=$("#not1").position();
$("#not").css("left",po.left,"top",po.top);
$("#messages").slideUp(100);
$("#not").slideToggle(100);
$("#ed").slideUp(100);
}
function selectionchoix(){
var a=$("#selectionchoix").val();

if(a == "2"){
	$("#choix3").hide();
	$("#choix4").hide();
	$("#choix5").hide();

}if(a == "3"){
	$("#choix3").show();
	$("#choix4").hide();
	$("#choix5").hide();
}if(a == "4"){
	$("#choix3").show();
	$("#choix4").show();
	$("#choix5").hide();
}if(a == "5"){
	$("#choix3").show();
	$("#choix4").show();
	$("#choix5").show();
}
}


function validerForm(a){
var msg=$(".balouk").val();
if(msg != ""){
	$.ajax({
				type: "POST",
				url: "chat.php?id=page&ref="+a+"&msg="+msg,
				success: function(){$(".balouk").val("");}

			});
			} 
}


function nouveauqcmchoix(){
	$.ajax({
				type: "POST",
				url: "qcm.php",
				data : "id=ns&q="+$("#qcmq").val()+"&n="+$("#selectionchoix").val()+"&c1="+$("#choiix1").val()+"&c2="+$("#choiix2").val()+"&c3="+$("#choiix3").val()+"&c4="+$("#choiix4").val()+"&c5="+$("#choiix5").val(),
				success: function(){alert("votre questionnaire est enregestrer");}
		});     location.reload();
}



function nqcm(){
$("#toutqcmvote").html('votre question :<textarea id="qcmq" style="min-width:210px;min-height:60px;max-width:210px;max-height:60px;border-color:#888;border:2px;" rows="2"></textarea>nombre des choix : <select onChange="selectionchoix()" id="selectionchoix" name="menu"><option>2</option><option>3</option><option>4</option><option>5</option></select><br><br>choix 1 : <input type="text" style="width:140px;height:20px;" id="choiix1"/><br>choix 2 : <input type="text" id="choiix2" style="width:140px;height:20px;" /><br><div id="choix3" style="display:none">choix 3 : <input type="text" id="choiix3" style="width:140px;height:20px;" /></div><div id="choix4" style="display:none">choix 4 : <input type="text" style="width:140px;height:20px;" id="choiix4" /></div><div id="choix5" style="display:none">choix 5 : <input type="text" style="width:140px;height:20px;"  id="choiix5"/></div><br><input type="button" value="Enregestrer" id="cache-lmerd" style="margin-left:30px" class="enregest" onclick="nouveauqcmchoix()" /><input type="button" id="cache-lmerd1" value="Annuler" class="annuler" onclick="location.reload()" />');
}

function selection(a){
$("#qcmcase1").hide();$("#qcmcase2").hide();$("#qcmcase3").hide();$("#qcmcase4").hide();$("#qcmcase5").hide();
		$.ajax({
				type: "POST",
				url: "qcm.php",
				data : "id=v&ref="+a,
				success: function(){alert("merci pour votre vote");}
		});     location.reload();
}


function tel(a,b) {
document.location = "pdf/"+a+"."+b;
}



function messages(){
var po=$("#messages1").position();
$("#messages").css("left",po.left,"top",po.top);
$("#messages").slideToggle(100);
$("#not").slideUp(100);
$("#ed").slideUp(100);
}

function uploadbiblioteque(){

	    var file=$("#bibliofile").prop("files")[0]['name'];
	    var extension = file.substr((file.lastIndexOf('.') + 1));
		    if (extension == 'pdf' || extension == 'doc' || extension == 'docx' || extension == 'ppt' || extension == 'pptx' || extension == 'xlsx') {
            var file_data = $("#bibliofile").prop("files")[0]; 
			var form_data = new FormData();                  
			form_data.append("filebiblio", file_data)                            
				        $.ajax({
					url: "cherchbiblio.php?ref=2&nom="+file,
					dataType: 'script',
					cache: false,
					contentType: false,
					processData: false,
					data: form_data,                         
					type: 'post',
					success: function(){alert("votre fichier a etait bien telecharger");}});  
   		     } else {
      				  alert('les fichier accept sont pdf,doc,docx,ppt,pptx,xlsx,');
  		     }


}

function uplbib(){
$("#bibliofile").click();
}
function openfile(a){
$("#file"+a).click();
}

function ed(){
var po=$("#ed1").position();
$("#ed").css("left",po.left,"top",po.top);
$("#ed").slideToggle(100);
$("#messages").slideUp(100);
$("#not").slideUp(100);
}

/*
var azerty = $("#nom-l").val();
var refresh = setInterval(function (){
$('#messages2').load('message.php?n='+azerty).fadeIn();}, 5000);
var refresh = setInterval(function (){
$('#ed2').load('ed.php?nom='+azerty).fadeIn();}, 5000);
var refresh = setInterval(function (){
$('#not2').load('not.php?nom='+azerty).fadeIn();}, 5000);
*/


function closechat1(){
$("#chatbox1").hide();
}



function pectur(a){
if(a==1){
$("#pecture1").click();
}else{
	    var file=$("#pecture1").prop("files")[0]['name'];
	    var extension = file.substr((file.lastIndexOf('.') + 1));
        if (extension == 'jpg' || extension == 'jpeg' || extension == 'png' || extension == 'bmp'){
            var file_data = $("#pecture1").prop("files")[0];   
			var form_data = new FormData();                  
			form_data.append("image", file_data)                            
				$.ajax({
					url: "photo.php",
					dataType: 'script',
					cache: false,
					contentType: false,
					processData: false,
					data: form_data,                         
					type: 'post',
					success: function(){ setTimeout("ayourload();",2000);}
				});  
    } else {
        alert('We only accept JPG, JPEG, PNG and BMP files');
    }
}}



function like(a,b){
		$.ajax({
				type: "POST",
				url: "avec.php",
				async: false,
				data : "id="+a+"&page="+b+"&ref="+b
		});
		$("#option"+a).hide();}
		
		
		
function dislike(a,b){
		$.ajax({
				type: "POST",
				url: "centre.php",
				async: false,
				data : "id="+a+"&page="+b+"&ref="+b
		});
		$("#option"+a).hide();}
		
		
function comment(a,b){
		var comment=$("#comment"+a+b).val();
		if(comment == ""){alert('commentaire vide');}else{
		$.ajax({
				type: "POST",
				url: "comment.php",
				async: false,
				data : "page="+a+"&ref="+b+"&comment="+comment
		});
		$("#comment"+a+b).val("");}
}


function delet(a,b){
action=confirm("Voulez-vous delete ce statut ?");
$("#statut-tout"+a+"ass"+b).slideUp(1800);
if(action){
		$.ajax({
				type: "POST",
				url: "delete.php",
				data : "ref="+a+"&stat="+b
		});

}}


function edite(a,b){
//alert($("#statut-text"+a+"-"+b).text());
$("#rechange").val($("#statut-text"+a+"-"+b).text());
$("#statut-tout"+a+"-"+b).html('<textarea id="textarea'+a+b+'" style="min-width:490px;min-height:90px;max-width:490px;max-height:90px;border-color:#FFF;border:0px;" id="textarea" name="sujet" rows="2">'+$("#statut-text"+a+"-"+b).text()+'</textarea><input type="button" value="Enregestrer" id="cache-lmerd1" class="enregest" onclick="regester('+a+','+b+')" /><input type="button" id="cache-lmerd" value="Annuler" class="annuler" onclick="location.reload()" /><img id="loadimg" style="display:none" src="./icon/loading.gif" /> ');
}


function regester(a,b){
		$("#cache-lmerd").hide();$("#cache-lmerd1").hide();$("#loadimg").show();
		$.ajax({
				type: "POST",
				url: "regester.php",
				data : "ref="+a+"&stat="+b+"&ensien="+$("#rechange").val()+"&statut="+$('#textarea'+a+b).val(),
		});
		$("#rechange").val("");setTimeout("ayourload();",2000);
}
function cbeblio(){
	if ($("#inputbiblio").val() != ""){
		var mot=$("#inputbiblio").val();
		$('#rbeblio').val("");
		$('#rbeblio').load('cherchbiblio.php?mot='+mot+'&ref=1').fadeIn();
		}
}
