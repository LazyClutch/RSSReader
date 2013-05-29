/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
var xmlHttp;

function feedClicked(name) {
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
    alert(link);
    xmlHttp.onreadystatechange = stateChanged;
    xmlHttp.open("GET", link, true);
    xmlHttp.send(null);
}

function stateChanged() {
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
