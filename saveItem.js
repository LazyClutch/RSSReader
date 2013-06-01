/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
var xmlHttp;
var selfNode;

function saveItem(node) {
    selfNode = node;
    var ns=node.parentNode.childNodes;
    
    var href,description;
    
    for (i = 0; i < ns.length; i++) {
        if (ns[i].nodeName === 'DIV') {
            description = ns[i].innerHTML;
        } else if(ns[i].nodeName === 'A'){
            href = ns[i].href;
        }
    }
}

