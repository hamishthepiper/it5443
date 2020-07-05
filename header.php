<?php
echo '<div class="navbar"> <!--https://www.w3schools.com/howto/howto_js_topnav.asp-->
<a id="home" href="index.html">Home</a>
<a id="about" href="about.html">About</a>
<a id="resources" href="resources.html">Resources</a>
<a id="apply" href="apply.html">Apply!</a>
</div> 

<div class="header-title">
Center for Applied Research in Information Technology
</div>

<a href="https://ccse.kennesaw.edu/it" target="_blank">
<img class="header-logo" src="images/navbar_logo.png">
</a>
<script>
//Sets the current active window dynamically
var re = /\/(\w+)\.html/;
var page = re.exec(window.location.pathname)
console.log(page[1])
if (!page) {
    id = home
} else {
    id = page[1]
}
document.getElementById(id).classList.add("active");
</script>';
?>