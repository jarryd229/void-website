var _____WB$wombat$assign$function_____ = function(name) {return (self._wb_wombat && self._wb_wombat.local_init && self._wb_wombat.local_init(name)) || self[name]; };
if (!self.__WB_pmw) { self.__WB_pmw = function(obj) { this.__WB_source = obj; return this; } }
{
  let window = _____WB$wombat$assign$function_____("window");
  let self = _____WB$wombat$assign$function_____("self");
  let document = _____WB$wombat$assign$function_____("document");
  let location = _____WB$wombat$assign$function_____("location");
  let top = _____WB$wombat$assign$function_____("top");
  let parent = _____WB$wombat$assign$function_____("parent");
  let frames = _____WB$wombat$assign$function_____("frames");
  let opener = _____WB$wombat$assign$function_____("opener");

window.onload = loadup;

function loadup() {
 //css :hover only works on <a href> tags.. ie5/6
 //:. manually change style on li:mouseover
 printPage();
 jsEnabled();
}

function printPage() {
 var printPage = document.getElementById('print');
 var printPage2 = document.getElementById('print2');

 if (printPage) {
  printPage.onclick = function () {
   window.print();
  }

  printPage2.onclick = function () {
   window.print();
  }

  //printPage.style.display = 'block';
  printPage.style.display = 'inline';
  printPage2.style.display = 'inline';
 }
}
//return array of classes by name
function getElementsByClassName(oElm, strTagName, strClassName){
    var arrElements = (strTagName == "*" && oElm.all)? oElm.all : oElm.getElementsByTagName(strTagName);
    var arrReturnElements = new Array();
    strClassName = strClassName.replace(/\-/g, "\\-");
    var oRegExp = new RegExp("(^|\\s)" + strClassName + "(\\s|$)");
    var oElement;
    for(var i=0; i<arrElements.length; i++){
        oElement = arrElements[i];
        if(oRegExp.test(oElement.className)){
            arrReturnElements.push(oElement);
        }
    }
    return (arrReturnElements)
}

function jsEnabled() {
 var tabberTabs = getElementsByClassName(document, "div", "tabberTabs");
 var assetBottom = getElementsByClassName(document, "div", "assetBottom");

 for(i=0;i<tabberTabs.length;i++) {
  tabberTabs[i].getElementsByTagName('h2')[0].style.textAlign = 'center';
 }

 for(i=0;i<assetBottom.length;i++) {
  assetBottom[i].style.display = 'block';
 }

}

// end of file!

 }

/*
     FILE ARCHIVED ON 23:36:35 May 21, 2009 AND RETRIEVED FROM THE
     INTERNET ARCHIVE ON 04:22:13 Feb 12, 2024.
     JAVASCRIPT APPENDED BY WAYBACK MACHINE, COPYRIGHT INTERNET ARCHIVE.

     ALL OTHER CONTENT MAY ALSO BE PROTECTED BY COPYRIGHT (17 U.S.C.
     SECTION 108(a)(3)).
*/
/*
playback timings (ms):
  RulesEngine.query: 17.797
  PetaboxLoader3.datanode: 12.73
*/