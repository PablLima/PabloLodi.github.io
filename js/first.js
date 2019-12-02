function toggleHidden() {
    var y = document.getElementsByClassName("teste");
    for(let x of y) {
      if (x.style.display === "block") {
        x.style.display = "none";
      } else {
        x.style.display = "block";
      }
    }
  }

//   function reloadAjax($url) {
//     var req = new XMLHttpRequest();
//     req.open("GET", $url, true);
//     req.send();
//     req.onreadystatechange = function() {
//         if (this.readyState == 4 && this.status == 200) {
//             if(this.responseText != ""){ // retornou algo
//                 document.getElementsByTagName('main').innerHTML = this.responseText;
//             }
//         }
//     }
// }