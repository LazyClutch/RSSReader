/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
var xmlHttp;

function feedClicked(url){
    if(url.length == 0){
        document.getElementById("feed").innerHTML = "";
        return;
    }
    xmlHttp = GetXmlHttpObject();
    if(xmlHttp == null){
        alert("Your browser doesn't support AJAX");
    }
}

