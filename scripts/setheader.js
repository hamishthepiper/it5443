//Sets the current active window dynamically using RegEx to grab the page name
var re = /\/(\w+)\.php$/;
let page = re.exec(window.location.pathname)

if (!page) { 
    // The RegEx expression won't grab the root "/" reliably, so this is the default setting
    document.getElementById("index").classList.add("active");
} else {
    document.getElementById(page[1]).classList.add("active");
}

