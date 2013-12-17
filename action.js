
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

