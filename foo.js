var myArray = document.getElementsByTagName("link");
for (var i in myArray) {
    var hrefFragment = myArray[i].getAttribute("href").slice(-31);
    if ( hrefFragment !== "/only-admin-style.css?ver=1.0.0" ) {
        myArray[i].setAttribute("href", "");
    }
}
