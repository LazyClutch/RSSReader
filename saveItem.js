
var xmlHttp;
var tipNode;

function saveItem(node) {
    var nodePa = node.parentNode;
    var ns = node.parentNode.childNodes;
    var innerHTML = "";
    var href, description, title;
    if (nodePa.nodeName === 'LI') {
        innerHTML += nodePa.innerHTML;
    }
    for (i = 0; i < ns.length; i++) {
        if (ns[i].nodeName === 'A') {
            href = ns[i].href;
            title = ns[i].innerHTML;
        } else if (ns[i].nodeName === 'SPAN') {
            tipNode = ns[i];
        }
    }
    xmlHttp = GetXmlHttpObject();
    if (xmlHttp == null) {
        alert("Your browser doesn't support AJAX!");
        return;
    }
    innerHTML = encodeURIComponent(innerHTML);
    href = encodeURIComponent(href);
    title = encodeURIComponent(title);
    var url = "saveItem.php";
    var link = "";
    link += "href=";
    link += href;
    link += "&description=";
    link += innerHTML;
    link += "&title="
    link += title;
    link += "&sid=";
    link += Math.random();
    xmlHttp.onreadystatechange = saveChanged;
    xmlHttp.open("POST", url, true);
    xmlHttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xmlHttp.send(link);
}

function EncodeUtf8(s1)
{
    var s = escape(s1);
    var sa = s.split("%");
    var retV = "";
    if (sa[0] != "")
    {
        retV = sa[0];
    }
    for (var i = 1; i < sa.length; i++)
    {
        if (sa[i].substring(0, 1) == "u")
        {
            retV += Hex2Utf8(Str2Hex(sa[i].substring(1, 5)));

        }
        else
            retV += "%" + sa[i];
    }

    return retV;
}

function saveChanged() {
    if (xmlHttp.readyState == 4 || xmlHttp.readyState == "complete")
    {
        tipNode.innerHTML = xmlHttp.responseText;
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

