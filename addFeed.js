/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

var xmlHttp;

function addFeed() {
    var addr = document.getElementById("feedAddr").value;
    var name = document.getElementById("feedName").value;
    if (addr.length == 0) {
        document.getElementById("feedTip").innerHTML = "Invalid Feed";
        return;
    } else if(name.length == 0){
        alert("请输入一个名字");
        return;
    }
    xmlHttp = GetXmlHttpObject();
    if (xmlHttp == null) {
        alert("Your browser doesn't support AJAX!");
        return;
    }
    //addr = encodeURIComponent(addr);
    var link = "addFeed.php";
    link += "?link=";
    link += addr;
    link += "&name=";
    link += name;
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

