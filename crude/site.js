
function changeLanguage() {
var selectedLanguage = document.getElementById("language-selector").value;
switch (selectedLanguage) {
case "en":
  window.location.href = "https://www.hamk.fi/?lang=en";
  document.getElementById("container").style.backgroundColor = "white"; // change background color to white
  break;
case "sv":
  window.location.href = "https://www.hamk.fi/?lang=sv";
  document.getElementById("container").style.backgroundColor = "blue"; // change background color to blue
  break;
case "fi":
  window.location.href = "https://www.hamk.fi/?lang=fi";
  document.getElementById("container").style.backgroundColor = "green"; // change background color to green
  break;
default:
  break;
}
}

<noscript>
    To view the page's content you need to enable javascript
</noscript>
