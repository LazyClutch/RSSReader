/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

$(window).bind('resize',function() {
    var mbox=$('body,html').css({'overflow':'hidden'}).find('.itembox').css({'width':parseInt($(window).width()-260)+'px'});
    if($('#anymore_mid').length>0){
        mbox.css({'height':poH.view_height()-parseInt($('#sitefoot').outerHeight(true))+'px'});
    }else{
        mbox.css({'height':poH.view_height()+'px'}).find('#pagebox').css({'height':($('#pagerbox').length>0)?poH.view_height()-parseInt($('#pagerbox').outerHeight(true))+'px':'inherit'});
    }
});

function mouseOver() {
    var id = Math.ceil(Math.random() * 4);
    var logo = document.getElementById("logo");
    switch (id) {
        case 1:
            logo.src = "img/RSS_001.png";
            break;
        case 2:
            logo.src = "img/RSS_002.png";
            break;
        case 3:
            logo.src = "img/RSS_003.png";
            break;
        case 4:
            logo.src = "img/RSS_004.png";
            break;
        default:
            break;
    }
}

function mouseOut() {
    var id = Math.ceil(Math.random() * 4);
    var logo = document.getElementById("logo");
    switch (id) {
        case 1:
            logo.src = "img/RSS_001.png";
            break;
        case 2:
            logo.src = "img/RSS_002.png";
            break;
        case 3:
            logo.src = "img/RSS_003.png";
            break;
        case 4:
            logo.src = "img/RSS_004.png";
            break;
        default:
            break;
    }
}


function favMouseOver(){
    var favImg = document.getElementById("favImg");
    favImg.src = "img/favhover.png";
}

function favMouseOut(){
    var favImg = document.getElementById("favImg");
    favImg.src = "img/fav.png";
}

