function validateForm() {
    var type = document.forms["myForm"]["type"].value;
    var titre = document.forms["myForm"]["titre"].value;
    var image = document.forms["myForm"]["image"].value;
    var description = document.forms["myForm"]["description"].value;
    if (type == "") {
        document.getElementById("type").innerHTML = "type est obligatoire";
        return false;
    }
    if (titre == "") {
        document.getElementById("titre").innerHTML = "titre est obligatoire";
        return false;
    }
    if (image == "") {
        document.getElementById("image").innerHTML = "image est obligatoire";
        return false;
    }
    if (description == "") {
        document.getElementById("description").innerHTML = "description est obligatoire";
        return false;
    }
}
