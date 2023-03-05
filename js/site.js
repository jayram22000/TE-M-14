// function for changing languages
function changeLanguage() {
  var selectedLanguage = document.getElementById("language-selector").value;

  switch (selectedLanguage) {
    case "en":
      window.location.href = "https://www.hamk.fi/?lang=en";
      document.getElementById("container").style.backgroundColor = "white";
      break;
    case "sv":
      window.location.href = "https://www.hamk.fi/?lang=sv";
      document.getElementById("container").style.backgroundColor = "blue";
      break;
    case "fi":
      window.location.href = "https://www.hamk.fi/?lang=fi";
      document.getElementById("container").style.backgroundColor = "green";
      break;
    default:
      break;
  }
}
  let cartItems = [];

  function addToCart(itemName, itemPrice) {
    cartItems.push({ name: itemName, price: itemPrice });
    updateCart();
  }

  function updateCart() {
    let cartContainer = document.getElementById("cart-container");
    cartContainer.innerHTML = "";
    let total = 0;
    cartItems.forEach((item) => {
      let itemDiv = document.createElement("div");
      itemDiv.innerText = item.name + " - €" + item.price;
      cartContainer.appendChild(itemDiv);
      total += parseFloat(item.price);
    });
    let totalDiv = document.createElement("div");
    totalDiv.innerText = "Total: €" + total.toFixed(2);
    cartContainer.appendChild(totalDiv);
  }
