/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

var xmlHttp;
function feedClicked(name, selNode) {

    var nodes = selNode.parentNode.childNodes;
    for (var i = 0; i < nodes.length; i++) {
        if (nodes[i].nodeName === 'LI') {
            if (nodes[i] === selNode) {
                nodes[i].className = "current-menu-item";
            } else {
                nodes[i].className = "menu-item";
            }
        }
    }

    if (name.length == 0) {
        document.getElementById("feed").innerHTML = "";
        return;
    }
    xmlHttp = GetXmlHttpObject();
    if (xmlHttp == null) {
        alert("Your browser doesn't support AJAX!");
        return;
    }
    var link = "feed.php";
    link += "?name=";
    link += name;
    link += "&sid=";
    link += Math.random();
    xmlHttp.onreadystatechange = requestChanged;
    xmlHttp.open("GET", link, true);
    xmlHttp.send(null);
}

function requestChanged() {
    if (xmlHttp.readyState == 4 || xmlHttp.readyState == "complete")
    {
        document.getElementById("feed").innerHTML = xmlHttp.responseText;
    }
}

function GetXmlHttpObject() {
    var xmlHttp = null;
    try
    {
        // Firefox, Opera 8.0+, Safari
        xmlHttp = new XMLHttpRequest();
    }
    catch (e)
    {
        // Internet Explorer
        try
        {
            xmlHttp = new ActiveXObject("Msxml2.XMLHTTP");
        }
        catch (e)
        {
            xmlHttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
    }
    return xmlHttp;
}
