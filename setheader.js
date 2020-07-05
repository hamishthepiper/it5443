
//Sets the current active window dynamically
var re = /\/(\w+)\.html$/;
let page = re.exec(window.location.pathname)

if (!page) { 
    document.getElementById("index").classList.add("active");
} else {
    document.getElementById(page[1]).classList.add("active");
}

