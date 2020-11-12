function box_mess() {

    var img = document.getElementById('img');

    var box_mess = document.getElementById('box_mess');

    if (img.style.display == "none")

    {
        img.style.display = "block";
        box_mess.style.display="none";
    } else {
        img.style.display = "none";
        box_mess.style.display = "block";

    }

}