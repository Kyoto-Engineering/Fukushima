function setActiveStyleSheet(title) {
  var i, a, main;
  for(i=0; (a = document.getElementsByTagName("link")[i]); i++) {
    if(a.getAttribute("rel").indexOf("style") != -1 && a.getAttribute("title")) {
      a.disabled = true;
      if(a.getAttribute("title") == title) a.disabled = false;
    }
  }
}

function getActiveStyleSheet() {
  var i, a;
  for(i=0; (a = document.getElementsByTagName("link")[i]); i++) {
    if(a.getAttribute("rel").indexOf("style") != -1 && a.getAttribute("title") && !a.disabled) return a.getAttribute("title");
  }
  return null;
}

function getPreferredStyleSheet() {
  var i, a;
  for(i=0; (a = document.getElementsByTagName("link")[i]); i++) {
    if(a.getAttribute("rel").indexOf("style") != -1
       && a.getAttribute("rel").indexOf("alt") == -1
       && a.getAttribute("title")
       ) return a.getAttribute("title");
  }
  return null;
}

function createCookie(name,value,days) {
  if (days) {
    var date = new Date();
    date.setTime(date.getTime()+(days*24*60*60*1000));
    var expires = "; expires="+date.toGMTString();
  }
  else expires = "";
  document.cookie = name+"="+value+expires+"; path=/";
}

function readCookie(name) {
  var nameEQ = name + "=";
  var ca = document.cookie.split(';');
  for(var i=0;i < ca.length;i++) {
    var c = ca[i];
    while (c.charAt(0)==' ') c = c.substring(1,c.length);
    if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
  }
  return null;
}

function setActiveImage(title){
	if(title=="large"){
		document.write('<a href="javascript: void(0);" onclick="chimg(1,2,5);setActiveStyleSheet('+"'"+"small"+"'"+');location.reload(); return false;" onkeypress="chimg(1,2,5);setActiveStyleSheet('+"'"+"small"+"'"+');location.reload(); return false;" title="Small"><img src="share_img/small.gif" alt="Small" name="fontchimg2" width="20" height="20" border="0" /></a><a href="javascript: void(0);" onclick="chimg(1,3,4);setActiveStyleSheet('+"'"+"medium"+"'"+');location.reload(); return false;" onkeypress="chimg(1,3,4);setActiveStyleSheet('+"'"+"medium"+"'"+');location.reload(); return false;" title="Medium"><img src="share_img/medium.gif" alt="Medium" name="fontchimg3" width="20" height="20" border="0" /></a><a href="javascript: void(0);" onclick="chimg(0,3,5);setActiveStyleSheet('+"'"+"large"+"'"+');location.reload(); return false;" onkeypress="chimg(0,3,5);setActiveStyleSheet('+"'"+"large"+"'"+');location.reload(); return false;" title="Large"><img src="share_img/big_on.gif" alt="Large" name="fontchimg1" width="20" height="20" border="0" /></a>');
	}
	else if(title=="small"){
		document.write('<a href="javascript: void(0);" onclick="chimg(1,2,5);setActiveStyleSheet('+"'"+"small"+"'"+');location.reload(); return false;" onkeypress="chimg(1,2,5);setActiveStyleSheet('+"'"+"small"+"'"+');location.reload(); return false;" title="Small"><img src="share_img/small_on.gif" alt="Small" name="fontchimg2" width="20" height="20" border="0" /></a><a href="javascript: void(0);" onclick="chimg(1,3,4);setActiveStyleSheet('+"'"+"medium"+"'"+');location.reload(); return false;" onkeypress="chimg(1,3,4);setActiveStyleSheet('+"'"+"medium"+"'"+');location.reload(); return false;" title="Medium"><img src="share_img/medium.gif" alt="Medium" name="fontchimg3" width="20" height="20" border="0" /></a><a href="javascript: void(0);" onclick="chimg(0,3,5);setActiveStyleSheet('+"'"+"large"+"'"+');location.reload(); return false;" onkeypress="chimg(0,3,5);setActiveStyleSheet('+"'"+"large"+"'"+');location.reload(); return false;" title="Large"><img src="share_img/big.gif" alt="Large" name="fontchimg1" width="20" height="20" border="0" /></a>');
	}
	else if(title=="medium"){
		document.write('<a href="javascript: void(0);" onclick="chimg(1,2,5);setActiveStyleSheet('+"'"+"small"+"'"+');location.reload(); return false;" onkeypress="chimg(1,2,5);setActiveStyleSheet('+"'"+"small"+"'"+');location.reload(); return false;" title="Small"><img src="share_img/small.gif" alt="Small" name="fontchimg2" width="20" height="20" border="0" /></a><a href="javascript: void(0);" onclick="chimg(1,3,4);setActiveStyleSheet('+"'"+"medium"+"'"+');location.reload(); return false;" onkeypress="chimg(1,3,4);setActiveStyleSheet('+"'"+"medium"+"'"+');location.reload(); return false;" title="Medium"><img src="share_img/medium_on.gif" alt="Medium" name="fontchimg3" width="20" height="20" border="0" /></a><a href="javascript: void(0);" onclick="chimg(0,3,5);setActiveStyleSheet('+"'"+"large"+"'"+');location.reload(); return false;" onkeypress="chimg(0,3,5);setActiveStyleSheet('+"'"+"large"+"'"+');location.reload(); return false;" title="Large"><img src="share_img/big.gif" alt="Large" name="fontchimg1" width="20" height="20" border="0" /></a>');
	}
}

function chimg(num1,num2,num3){
	if(document.images['fontchimg1'].src == img[1].src){
		document.images['fontchimg1'].src = img[num1].src;
		document.images['fontchimg2'].src = img[num2].src;
		document.images['fontchimg3'].src = img[num3].src;
	} 
	else if(document.images['fontchimg2'].src == img[3].src){
		document.images['fontchimg1'].src = img[num1].src;
		document.images['fontchimg2'].src = img[num2].src;
		document.images['fontchimg3'].src = img[num3].src;
	}
	else if(document.images['fontchimg3'].src == img[5].src){
		document.images['fontchimg1'].src = img[num1].src;
		document.images['fontchimg2'].src = img[num2].src;
		document.images['fontchimg3'].src = img[num3].src;
	}
}

window.onload = function(e) {
  var cookie = readCookie("style");
  var title = cookie ? cookie : getPreferredStyleSheet();
  setActiveStyleSheet(title);
	
}

window.onunload = function(e) {
  var title = getActiveStyleSheet();
  createCookie("style", title, 365);
}


var img = new Array();
img[0] = new Image();
img[0].src = "share_img/big_on.gif";
img[1] = new Image();
img[1].src = "share_img/big.gif";
img[2] = new Image();
img[2].src = "share_img/small_on.gif";
img[3] = new Image();
img[3].src = "share_img/small.gif";
img[4] = new Image();
img[4].src = "share_img/medium_on.gif";
img[5] = new Image();
img[5].src = "share_img/medium.gif";

var cookie = readCookie("style");
var title = cookie ? cookie : getPreferredStyleSheet();
setActiveStyleSheet(title);


