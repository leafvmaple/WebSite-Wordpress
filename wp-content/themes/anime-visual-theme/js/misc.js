//Say
//Begin area1
function showTalkArea() { //DOM
if (document.getElementById){
document.getElementById('say').style.display='inline';
}else{
if (document.layers){ //NS4
document.say.display='inline';
}
else { //IE4
document.all.say.style.display='inline';
}
}
}
//hide
function hideTalkArea() { //DOM
if (document.getElementById){
document.getElementById('say').style.display='none';
}else{
if (document.layers){ //NS4
document.say.display='none';
}
else { //IE4
document.say.hmenu.style.display='none';
}
}
}



//Begin area2
function showTalkArea2() { //DOM
if (document.getElementById){
document.getElementById('say2').style.display='inline';
}else{
if (document.layers){ //NS4
document.say2.display='inline';
}
else { //IE4
document.all.say2.style.display='inline';
}
}
}
//hide
function hideTalkArea2() { //DOM
if (document.getElementById){
document.getElementById('say2').style.display='none';
}else{
if (document.layers){ //NS4
document.say2.display='none';
}
else { //IE4
document.say2.hmenu.style.display='none';
}
}
}


//Begin area3
function showTalkArea3() { //DOM
if (document.getElementById){
document.getElementById('say3').style.display='inline';
}else{
if (document.layers){ //NS4
document.say3.display='inline';
}
else { //IE4
document.all.say3.style.display='inline';
}
}
}
//hide
function hideTalkArea3() { //DOM
if (document.getElementById){
document.getElementById('say3').style.display='none';
}else{
if (document.layers){ //NS4
document.say3.display='none';
}
else { //IE4
document.say3.hmenu.style.display='none';
}
}
}



//Clear
//Script by http://www.java-Scripts.net and http://wsabstract.com
 function doClear(theText) {
     if (theText.value == theText.defaultValue) {
         theText.value = ""
     }
 }