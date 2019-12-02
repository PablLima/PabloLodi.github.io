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