function describeStar() {
    var description = document.getElementsByClassName("description");
    var button = document.getElementsByClassName("button");
    for (let i = 0; i <= button.length; i++) {
        button[i].onclick = show;

        function show() {
            if (description[i].style.display === "contents") {
                description[i].style.display = "none";
            } else {
                description[i].style.display = "contents";
            }
        };
    }
}