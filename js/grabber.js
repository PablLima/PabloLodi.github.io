function grabber(){
    var div = document.getElementsByClassName("access");
    var elements = [];
    for (var i=0; i<div.length; i++) {
        for (var y=0; y<div[i].childNodes.length; y++) {
            var child = div[i].childNodes[y];
            if (child.nodeType == 1) {
                elements.push(child)      
            }
        }
    }
    count=0;
    elements.forEach((e) => {
        e.tabIndex=count
        e.addEventListener("focus",function(){
            var msg = new SpeechSynthesisUtterance(this.innerText);
            window.speechSynthesis.cancel();
            window.speechSynthesis.speak(msg);
        });
    })
}