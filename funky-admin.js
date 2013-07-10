var myArray = document.getElementsByTagName("link");
for (var i in myArray) {
    if ( myArray[i].getAttribute("href").slice(-25) !== "funky-admin.css?ver=1.0.0" ) {
        if ( myArray[i].getAttribute("href").slice(-28) !== "original-admin.css?ver=1.0.0" ) {
            myArray[i].setAttribute("href", "");
        }
    }
}
