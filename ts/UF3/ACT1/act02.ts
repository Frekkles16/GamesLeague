function allowDrop(ev) {
  ev.preventDefault();
}

function drag(ev) {
  ev.dataTransfer.setData("text", ev.target.id);


}

function drop(ev) {

  ev.preventDefault();
  var data = ev.dataTransfer.getData("text");
  document.getElementById("grande").src = document.getElementById(data).src;
  document.getElementById("foto1").setAttribute("style", "width: 50px; opacity: 100%");
  document.getElementById("foto2").setAttribute("style", "width: 50px; opacity: 100%");
  document.getElementById("foto3").setAttribute("style", "width: 50px; opacity: 100%");
  document.getElementById(data).setAttribute("style", "width: 50px; opacity: 20%");
}