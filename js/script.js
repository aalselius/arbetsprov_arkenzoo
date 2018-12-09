/* Background image for start page */
/* Randomly from Unsplash */

function randomImg() {
    document.getElementById('randomBackground').style.backgroundImage = 'url("https://source.unsplash.com/random/"';
}

randomImg();


/* Slide in function for messages */

function addContentStyle(i) {
    var content = document.getElementsByClassName('content');
    content[i].style.left=5+'%';
    content[i].style.top=i*100+'px';
}

function addContentClass() {
    var content = document.getElementsByClassName('content');
    var i;
    for (i = 0; i < content.length; i++) {
        (function(i) {
            setTimeout(function() {
                addContentStyle(i);
            }, 300*i);
        })(i);        
    }
}

setTimeout(function(){
    addContentClass();
}, 300);







