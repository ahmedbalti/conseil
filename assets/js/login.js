function validateForm() {
    var name = document.forms["myform"]["name"].value;
    var password = document.forms["myform"]["password"].value;

    if (name == "") {
        document.getElementById("name").innerHTML = "entrez votre nom";
        return false;
    }
    if (password == "") {
        document.getElementById("password").innerHTML = "entrez votre mot de passe";
        return false;
    }


}
