/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

var xmlHttp;

function getFav(node) {
    var list = document.getElementById("nav").childNodes;
    for (var i = 0; i < list.length; i++) {
        if (list[i].nodeName === 'LI') {
            list[i].className = "menu-item";
        }
    }

    xmlHttp = GetXmlHttpObject();
    if (xmlHttp == null) {
        alert("Your browser doesn't support AJAX!");
        return;
    }
    var link = "getFav.php";
    xmlHttp.onreadystatechange = getChanged;
    xmlHttp.open("GET", link, true);
    xmlHttp.send(null);
}

function getChanged() {
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

