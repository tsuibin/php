function rm6_u_en(str) {
	var e="", i=0;
	for(i=0;i<str.length;i++){
		if(str.charCodeAt(i)>=0&&str.charCodeAt(i)<=255){
			e=e+escape(str.charAt(i));
		}
		else{
			e=e+str.charAt(i);
		}
	}
	return e;
}

function rm6_g_sr()
{
	if (self.screen)
	{
		sr=screen.width+"x"+screen.height;
	}
	else
	if (self.java) {
		var j=java.awt.Toolkit.getDefaultToolkit();
		var s=j.getScreenSize();
		sr=s.width+"x"+s.height;
	}
	return sr;
}

function rm6_g_sc()
{
	var sc="";
	if (self.screen) {
		sc=screen.colorDepth+"-bit";
	} return sc;
}

function rm6_g_lg()
{
	var lg="";
	var n=navigator;
	if (n.language) {
		lg=n.language.toLowerCase();
	}
	else
	if (n.browserLanguage) {
		lg=n.browserLanguage.toLowerCase();
	}
	return lg;
}

function rm6_g_ag()
{
	var ag="";
	var n=navigator;

	if (n.userAgent) {
		ag = n.userAgent;
	}
	return ag;
}

function rm6_g_je() {
	var je="";
	var n=navigator;
	je = n.javaEnabled()?1:0;
	return je;
}

function rm6_g_fl()
{
	var f="",n=navigator;
	if (n.plugins && n.plugins.length) {
		for (var ii=0;ii<n.plugins.length;ii++) {
			if (n.plugins[ii].name.indexOf('Shockwave Flash')!=-1) {
				f=n.plugins[ii].description.split('Shockwave Flash ')[1];
					break;
			}
		}
	}
	else
	if (window.ActiveXObject) {
		for (var ii=10;ii>=2;ii--) {
			try {
				var fl=eval("new ActiveXObject('ShockwaveFlash.ShockwaveFlash."+ii+"');");
				if (fl) {
					f=ii + '.0'; break;
				}
		}
		catch(e) {
		}
	}
} 

return f;
}

function rm6_g_co(name) {
	var mn=name+"=";
	var b,e;
	var co=document.cookie;

	if (mn=="=") {
		return co;
	}
	b=co.indexOf(mn);
	if (b < 0) {
		return "";
	}
	e=co.indexOf(";", b+name.length);
	if (e < 0) {
		return co.substring(b+name.length + 1);
	}
	else {
		return co.substring(b+name.length + 1, e);
	}
}

function rm6_s_co(name,val,cotp) {
	var date=new Date;
	var year=date.getYear(); var hour=date.getHours(); if (cotp == 0) { document.cookie=name+"="+val+";"; } else if (cotp == 1) { year=year+10; date.setYear(year); document.cookie=name+"="+val+";expires="+date.toGMTString()+";"; } else if (cotp == 2) { hour=hour+1; date.setHours(hour); document.cookie=name+"="+val+";expires="+date.toGMTString()+";"; } } 

function rm6_g_so() {
	var so="";
	var n=navigator;

	if (n.appName) {
		so=n.appName;
	}

	return so;
}

function rm6_grm6m() {
	var date = new Date();
	var yy=date.getYear();
	var mm=date.getMonth();
	var dd=date.getDate();
	var hh=date.getHours();
	var ii=date.getMinutes();
	var ss=date.getSeconds();
	var i;
	var tm=0;

	for(i = 1970; i < yy; i++) {
		if ((i % 4 == 0 && i % 100 != 0) || (i % 100 == 0 && i % 400 == 0)) {
			tm=tm+31622400;
		}
		else
		{
			tm=tm+31536000;
		}
	}

	mm=mm+1;

	for(i = 1; i < mm; i++) {
		if (i == 1 || i == 3 || i == 5 || i == 7 || i == 8 || i == 10 || i == 12) {
			tm=tm+2678400;
		}
		else {
			if (i == 2) {
				if ((yy % 4 == 0 && yy % 100 != 0) || (yy % 100 == 0 && yy % 400 == 0)) {
					tm=tm+2505600;
				}
				else {
					tm=tm+2419200;
				}
			}
			else {
				tm=tm+2592000;
			}
		}
	}

	tm = tm +  (dd-1) * 86400;
	tm = tm +  hh * 3600;
	tm = tm +  ii * 60;
	tm = tm +  ss;

	return tm;
}

function rm6_g_ctm(str) {
	len=str.indexOf("_");
	str=str.substring(len+1);
	len=str.indexOf("_");
	str=str.substring(0,len);
	return parseInt(str, 10);
}

function $random(min, max){
	return Math.floor(Math.random() * (max - min + 1) + min);
}

function main() {
	var ipArr = ["122.70.135.84","122.70.135.85","122.70.135.87","122.70.135.88"] ;
	var rm6_ip = ipArr[$random(0,3)];
	var rm6_dest="/rm6_stat.do?";
	var rm6_usn="";
	var rm6_nuv=0;
	var rm6_uv ="";
	var rm6_ss ="";
	var rm6_ref="";
	var rm6_url="";
	var rm6_clr="";
	var rm6_scr="";
	var rm6_lng="";
	var rm6_agt="";
	var rm6_jav="";
	var rm6_flu="";
	var rm6_sof="";
	var rm6_cva="";
	var rm6_len=0;

	rm6_uv=rm6_g_co("rm6_stat_bck");
	if (rm6_uv=="") {
		rm6_nuv = 1;
		rm6_uv=String(Math.random())+String(Math.random());
		rm6_s_co("rm6_stat_bck", rm6_uv, 1);
	}

	rm6_usn=rm6_g_co("username");

	rm6_ss=rm6_g_co("rm6_stat_sck");

	if (rm6_ss=="") {
		rm6_ss=rm6_ip+"_"+rm6_grm6m()+"_"+String(Math.random())+String(Math.random());
		rm6_s_co("rm6_stat_sck", rm6_ss, 0);
	}
	else {
		if (rm6_grm6m() - rm6_g_ctm(rm6_ss) > rm6_expr_tm) {
			rm6_ss=rm6_ip+"_"+rm6_grm6m()+"_"+String(Math.random())+String(Math.random());
		}
		rm6_s_co("rm6_stat_sck", rm6_ss, 0);
	}

	rm6_usn=rm6_u_en(String(rm6_usn));

	rm6_cva=String(Math.random())+String(Math.random());

	rm6_len=rm6_ss.indexOf("_");
	rm6_ip=rm6_ss.substring(0,rm6_len);

	rm6_ss=rm6_ss.substring(rm6_len+1);

	rm6_ref=document.referrer;
	rm6_ref=rm6_u_en(String(rm6_ref));

	rm6_url=document.URL;
	rm6_url=rm6_u_en(String(rm6_url));

	rm6_clr=rm6_g_sc();
	rm6_clr=rm6_u_en(String(rm6_clr));

	rm6_scr=rm6_g_sr();
	rm6_scr=rm6_u_en(String(rm6_scr));

	rm6_lng=rm6_g_lg();
	rm6_lng=rm6_u_en(String(rm6_lng));

	rm6_agt=rm6_g_ag();
	rm6_agt=rm6_u_en(String(rm6_agt));

	rm6_jav=rm6_g_je();
	rm6_jav=rm6_u_en(String(rm6_jav));

	rm6_flu=rm6_g_fl();
	rm6_flu=rm6_u_en(String(rm6_flu));

	rm6_sof=rm6_g_so();
	rm6_sof=rm6_u_en(String(rm6_sof));

	rm6_dest="http://"+rm6_ip+rm6_dest+"uv="+rm6_uv+"&nuv="+rm6_nuv+"&usn="+rm6_usn+"&ss="+rm6_ss+"&ref="+rm6_ref+"&url="+rm6_url+"&nac="+rm6_sof+"&agt="+rm6_agt+"&clr="+rm6_clr+"&scr="+rm6_scr+"&lng="+rm6_lng+"&jav="+rm6_jav+"&flu="+rm6_flu+"&cnu="+rm6_cva;

	document.open();
	document.write("<script language=\"JavaScript\" type=\"text/javascript\" src=\""+rm6_dest+"\"></script>");
	document.close();
}

main();
