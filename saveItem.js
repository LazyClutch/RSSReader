/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
var xmlHttp;
var selfNode;

function saveItem(node) {
    selfNode = node;
    var ns=node.parentNode.childNodes;
    var innerHTML = "";
    var href,description,title;
    
    for (i = 0; i < ns.length; i++) {
        if (ns[i].nodeName === 'DIV') {
            innerHTML += ns[i].innerHTML;
        } else if(ns[i].nodeName === 'A'){
            href = ns[i].href;
            title = ns[i].innerHTML;
        }
    }
    xmlHttp = GetXmlHttpObject();
    if (xmlHttp == null) {
        alert("Your browser doesn't support AJAX!");
        return;
    }
    innerHTML = escape(innerHTML);
    innerHTML = escape(innerHTML);
    href = escape(href);
    title = escape(title);
    var link = "saveItem.php";
    link += "?href=";
    link += href;
    link += "&description=";
    link += innerHTML;
    link += "&title="
    link += title;
    link += "&sid=";
    link += Math.random();
    xmlHttp.onreadystatechange = addChanged;
    xmlHttp.open("GET", link, true);
    xmlHttp.send(null);
}

function EncodeUtf8(s1)
{
      var s = escape(s1);
      var sa = s.split("%");
      var retV ="";
      if(sa[0] != "")
      {
         retV = sa[0];
      }
      for(var i = 1; i < sa.length; i ++)
      {
           if(sa[i].substring(0,1) == "u")
           {
               retV += Hex2Utf8(Str2Hex(sa[i].substring(1,5)));
              
           }
           else retV += "%" + sa[i];
      }
     
      return retV;
}

function addChanged() {
    if (xmlHttp.readyState == 4 || xmlHttp.readyState == "complete")
    {
        document.getElementById("feedTip").innerHTML = xmlHttp.responseText;
        var val = document.getElementById("feedTip").innerHTML;
        alert(val);
        if(val == "订阅成功"){
            window.location.reload(window.location.href);
        }
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

