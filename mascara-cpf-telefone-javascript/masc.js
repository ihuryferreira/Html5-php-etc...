function formataCpf(evt){
	vr = (navigator.appName == 'Netscape')?evt.target.value:evt.srcElement.value;
	if(vr.length == 3) vr = vr+".";
	if(vr.length == 7) vr = vr+".";
	if(vr.length == 11) vr = vr+"-";
  return vr;
}

function formataFone(evt){
	vr = (navigator.appName == 'Netscape')?evt.target.value:evt.srcElement.value;
	if(vr.length == 0) vr = vr+"(";
	if(vr.length == 3) vr = vr+")";
	if(vr.length == 9) vr = vr+"-";
  return vr;
}