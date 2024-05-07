function GlueVideoOn(id, src, autoplay){
	
	const player_clip = 'playerhtml5.png';

	if(autoplay=='undefined'){ autoplay = false; }

	var contener = document.getElementById(id);
	contener.style.overflow='hidden';
	contener.style.border = 'solid 1px #808080';
	
	contener.innerHTML = 
	'<div id="' + id + '_video_slice"><video id="' + id + '_video"></video></div>' +
	'<table id="' + id + '_controller" height="28" width="100%" cellspacing="0" cellpadding="0" border="0">'+
		'<tr height="3">' +
			'<td colspan="4"><div id="' + id + '_bartime" draggguable="false"><div id="' + id + '_bartimec"></div></div></td>' +
		'</tr>' +
		'<tr height="25" valign="top">' +
			'<td width="31"><div id="' + id + '_play" draggguable="false"></div></td>' + 
			'<td width="31"><div id="' + id + '_mute" draggguable="false"></div></td>' + 
			'<td width="31"><div id="' + id + '_volume" draggguable="false"></div><div id="' + id + '_volumecursor" draggguable="false"></div></td>' + 
			'<td align="right"><span id="' + id + '_timecontrol" draggguable="false"></span></td>' +
		'</tr>' +
	'</table>';
	
	// Injection du player Video HTML5
	var video_slice = document.getElementById(id + '_video_slice');
	video_slice.style.height = (contener.offsetHeight-30) + 'px';
	video_slice.style.overflow = 'hidden';
	video_slice.style.width = '100%';
	video_slice.style.backgroundColor='black';
	
	var video = document.getElementById(id + '_video');
	video.parent = contener;
	video.playing = autoplay;
	video.muted = false;
	// video.seeking = true;
	video.style.backgroundColor='black';
	video.style.position = 'relative';
	video.style.top = '0px';
	video.style.left = '0px';
	video.id = id + '_video';
	video.autobuffer = false;
	video.autoplay = autoplay;
	video.preload = 'auto';
	video.src = src;
	video.controls = false;
	
	// Injection du controller
	var controller = document.getElementById(id + '_controller');
	controller.absoluteleft = -1;
	controller.style.height = '28px';
	controller.style.backgroundImage = 'url("' + player_clip + '")';
	controller.style.backgroundRepeat = 'repeat-x';
	controller.style.backgroundPosition = '0px -22px';
	controller.video = video;
	
	var play = document.getElementById(id + '_play');		
	play.parent = video;
	play.style.height = '25px';
	play.style.width = '31px';
	play.style.backgroundImage = 'url("' + player_clip + '")';
	if(autoplay){
		play.style.backgroundPosition = '-62px 0px';
	} else {
		play.style.backgroundPosition = '0px 0px';
	}
	play.style.cursor = 'pointer';
	video._play = play;
	
	var mute = document.getElementById(id + '_mute');		
	mute.parent = video;
	mute.style.height = '25px';
	mute.style.width = '31px';
	mute.style.backgroundImage = 'url("' + player_clip + '")';
	mute.style.backgroundPosition = '-287px 0px';
	mute.style.cursor = 'pointer';	

	var volume = document.getElementById(id + '_volume');		
	volume.parent = video;
	volume.style.height = '25px';
	volume.style.width = '70px';
	volume.style.backgroundImage = 'url("' + player_clip + '")';
	volume.style.backgroundPosition = '-186px 0px';
	volume.style.cursor = 'pointer';	

	var volumecursor = document.getElementById(id + '_volumecursor');		
	volumecursor.parent = video;
	volumecursor.style.position = 'relative';
	volumecursor.style.top = '-22px';	
	volumecursor.style.left = '59px';	
	volumecursor.style.height = '17px';
	volumecursor.style.width = '7px';
	volumecursor.style.backgroundImage = 'url("' + player_clip + '")';
	volumecursor.style.backgroundPosition = '-388px -3px';
	volumecursor.style.cursor = 'pointer';	
	volumecursor.mousedowned = false;
	volumecursor.mousex = 0;
	controller.volumecursor = volumecursor;
	
	var bartime = document.getElementById(id + '_bartime');		
	bartime.parent = controller;
	bartime.style.height = '3px';
	bartime.style.width = '100%';
	bartime.style.backgroundColor = '#00264D';
	bartime.style.cursor = 'pointer';
	
	var bartimec = document.getElementById(id + '_bartimec');
	bartimec.style.height = '3px';
	bartimec.style.width = '0px';
	bartimec.style.backgroundColor = '#005FC0';
	bartime.bartimec = bartimec;
	video.bartimec = bartimec;
	
	var timecontrol = document.getElementById(id + '_timecontrol');		
	timecontrol.style.height = '25px';
	timecontrol.style.width = '70px';
	timecontrol.style.cursor = 'pointer';
	timecontrol.style.fontFamily = 'Arial';
	timecontrol.style.fontSize = '12px';
	timecontrol.style.lineHeight = '25px';
	timecontrol.style.padding = '0px 3px';
	timecontrol.nodisplaytime = false;
	video.timecontrol = timecontrol;
	
	// Controle du volume
	volumecursor.onmousedown = function(e){
		this.mousedowned = true;
	}
	controller.onmouseup = function(){
		this.volumecursor.mousedowned = false;
	}
	controller.onmousemove = function(e){
		if(this.volumecursor.mousedowned){
			var mousex = 0;
			var diffx = 0;
			var volume = 0;
			if(navigator.appName.substring(0,3) == "Net"){
				mousex = e.pageX;
			} else {
				mousex = event.x+document.body.scrollLeft;
			}
			if(this.volumecursor.mousex==0){ this.volumecursor.mousex=mousex; }
			diffx = mousex-this.volumecursor.mousex;
			volume = parseInt(this.volumecursor.style.left)+diffx;
			if(volume<3){ volume = 3; }
			if(volume>58){ volume = 58; }
			this.video.volume = ((volume-3)/55);
			this.volumecursor.style.left = volume + 'px';
			this.volumecursor.mousex=mousex;
		}
	}

	bartime.onmousemove = function(e){
		if(this.parent.absoluteleft==-1){
			var obj = this.parent;
			var abs_left = 0;
			if (obj.offsetParent) {
				do { abs_left += obj.offsetLeft; } while (obj = obj.offsetParent);
			}					
			this.parent.absoluteleft = abs_left;
		}
		var mousex = 0;
		var diffx = 0;
		if(navigator.appName.substring(0,3) == "Net"){
			mousex = e.pageX;
		} else {
			mousex = event.x+document.body.scrollLeft;
		}
		mousex -= this.parent.absoluteleft;
		diffx = mousex/this.parent.offsetWidth*this.parent.video.duration;
		this.parent.video.timecontrol.nodisplaytime = true;
		this.parent.video.timecontrol.innerHTML = this.parent.video.formattime(diffx) + ' / ' + this.parent.video.formattime(this.parent.video.duration);
	}
	bartime.onmouseout = function(){
		this.parent.video.timecontrol.nodisplaytime = false;
	}
	bartime.onclick = function(e){
		if(this.parent.absoluteleft==-1){
			var obj = this.parent;
			var abs_left = 0;
			if (obj.offsetParent) {
				do { abs_left += obj.offsetLeft; } while (obj = obj.offsetParent);
			}					
			this.parent.absoluteleft = abs_left;
		}
		var mousex = 0;
		var diffx = 0;
		if(navigator.appName.substring(0,3) == "Net"){
			mousex = e.pageX;
		} else {
			mousex = event.x+document.body.scrollLeft;
		}
		mousex -= this.parent.absoluteleft;
		diffx = mousex/this.parent.offsetWidth*this.parent.video.duration;
		this.parent.video.currentTime = diffx;
	}
	
	
	// Lecture de la vidéo
	video.formattime = function(time){
		var heures = parseInt(time/3600);
		var minutes = parseInt((time-heures*3600)/60);
		var secondes = parseInt(time-heures*3600-minutes*60);
		if(heures<10){ heures = '0'+heures; }
		if(minutes<10){ minutes = '0'+minutes; }
		if(secondes<10){ secondes = '0'+secondes; }
		return heures + ':' + minutes + ':' + secondes;
	}
	video.looping = function(){
		if(this.formattime(this.currentTime)==this.formattime(this.duration)){
			this.pause();
			this.currentTime = 0;
			this._play.style.backgroundPosition = '0px 0px';
			this.playing = false;					
			this.bartimec.style.width = '0px';
			if(!this.timecontrol.nodisplaytime){
				this.timecontrol.innerHTML = '00:00:00 / ' + this.formattime(this.duration);					
			}
		} else {
			this.bartimec.style.width = parseInt(this.currentTime/this.duration*this.width) + 'px';
			if(!this.timecontrol.nodisplaytime){
				this.timecontrol.innerHTML = this.formattime(this.currentTime) + ' / ' + this.formattime(this.duration);					
			}
		}
		setTimeout('document.getElementById(\'' + this.id + '\').looping();', 100);					
	}
	video.onloading = function(){
		if(this.readyState<2){
			this.timecontrol.innerHTML = 'Chargement en cours...';
			setTimeout('document.getElementById(\'' + this.id + '\').onloading();', 300);
		} else {
			var video_width = this.videoWidth;
			var video_height = this.videoHeight;
			var contener_width = this.parent.offsetWidth;
			var contener_height = this.parent.offsetHeight;
			// Ajustement de la dimension et de la position de la vidéo au conteneur
			if(video_width/contener_width>video_height/contener_height){
				this.width = contener_width-2;
				video_height = parseInt(contener_width/video_width*contener_height);
				this.style.top = parseInt(contener_height/2-video_height/2-15) + 'px';
				this.style.left = '0px';
			} else {
				this.height = contener_height-30;
				video_width = parseInt(video_height/contener_height*contener_width);
				this.width = video_width-2;
				this.style.top = '0px';
				this.style.left = parseInt(contener_width/2-video_width/2) + 'px';
			}					
			this.timecontrol.innerHTML = '00:00:00 / ' + this.formattime(this.duration);	
			this.looping();			
		}
	}

	
	// Controle de lecture
	video.oncanplay = function(){ }
	video.onwaiting = function(){ }
	video.onprogress = function(e){ }

	// Lire / Arreter la video
	play.onclick = function(){
		if(this.parent.playing){
			this.style.backgroundPosition = '-31px 0px';
			this.parent.pause();
			this.parent.playing = false;
		} else {
			this.style.backgroundPosition = '-93px 0px';
			this.parent.play();
			this.parent.playing = true;
		}
	}
	play.onmouseover = function(){
		if(this.parent.playing){
			this.style.backgroundPosition = '-93px 0px';
		} else {
			this.style.backgroundPosition = '-31px 0px';
		}
	}
	play.onmouseout = function(){
		if(this.parent.playing){
			this.style.backgroundPosition = '-62px 0px';
		} else {
			this.style.backgroundPosition = '0px 0px';
		}
	}

	// Silence
	mute.onclick = function(){
		if(this.parent.muted){
			this.style.backgroundPosition = '-155px 0px';
			this.parent.muted = false;
		} else {
			this.style.backgroundPosition = '-124px 0px';
			this.parent.muted = true;
		}
	}
	mute.onmouseover = function(){
		if(this.parent.muted){
			this.style.backgroundPosition = '-124px 0px';
		} else {
			this.style.backgroundPosition = '-155px 0px';
		}
	}
	mute.onmouseout = function(){
		if(this.parent.muted){
			this.style.backgroundPosition = '-256px 0px';
		} else {
			this.style.backgroundPosition = '-287px 0px';
		}
	}				
	
	// Controle de chargement
	video.onloading();
	
}