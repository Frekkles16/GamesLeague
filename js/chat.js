var id = 2;
function mensajes() {
    // firebase.database().ref("Mensajes/" + id).set({
    //     uid: id,
    //     mensaje:{
    //         "m1": {"texto":  document.getElementById("mensaje").value}
    //     }
    // });
    var postListRef = firebase.database().ref('Mensajes');
    var newPostRef = postListRef.push();
    newPostRef.set({
        "mensaje": document.getElementById("mensaje").value,
        "autor": "yo"
    });
}
;
function mostrarDatos() {
    firebase.database().ref("Mensajes").on('child_added', function (snapshot) {
        var mensa = snapshot.val();
        if (mensa.autor == 'yo') {
            $("#chatmio").append("<p>" + mensa.mensaje + "</p>");
        }
        else {
            $("#chatsuyo").append("<p>" + mensa.mensaje + "</p>");
        }
    });
}
