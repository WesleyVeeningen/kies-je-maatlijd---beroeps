const items = Array.from(document.querySelectorAll('.item'));
const itemTekstArray = items.map(item => item.querySelector('.item-tekst').textContent.trim());
const itemPrijsArray = items.map(item => parseFloat(item.querySelector('.item-price').textContent));

let cart = JSON.parse(localStorage.getItem('cart')) || {};
let tekstbox = document.getElementById('winkelwagen');
let totaalPrijs = parseFloat(localStorage.getItem('totaalPrijs')) || 0;

function updateTotaalPrijs() {
  let newTotaalPrijs = 0;
  for (let id in cart) {
    let item = cart[id];
    newTotaalPrijs += item.quantity * item.price;
  }
  totaalPrijs = newTotaalPrijs;
  let totaalPrijsElement = document.getElementById('totaal-prijs');
  if (!totaalPrijsElement) {
    totaalPrijsElement = document.createElement('div');
    totaalPrijsElement.setAttribute('id', 'totaal-prijs');
    tekstbox.appendChild(totaalPrijsElement);
  }
  totaalPrijsElement.textContent = `Totaal: €${totaalPrijs.toFixed(2)}`;
  localStorage.setItem('totaalPrijs', totaalPrijs);
}

function aanklik(id) {
  if (cart.hasOwnProperty(id)) {
    cart[id].quantity += 1;
  } else {
    cart[id] = { quantity: 1, price: itemPrijsArray[id] };
  }

  let itemCount = cart[id].quantity;
  let itemText = itemTekstArray[id];
  let itemPrice = cart[id].price.toFixed(2);

  let existingItem = tekstbox.querySelector(`[data-id="${id}"]`);
  if (existingItem) {
    existingItem.textContent = `${itemCount} ${itemText}`;
  } else {
    let newItem = document.createElement('div');
    newItem.setAttribute('data-id', id);
    newItem.textContent = `${itemCount} ${itemText}`;
    tekstbox.appendChild(newItem);
  }

  updateTotaalPrijs();
  localStorage.setItem('cart', JSON.stringify(cart));
}

function verwijderen(id) {
  if (cart.hasOwnProperty(id)) {
    cart[id].quantity -= 1;
    let itemCount = cart[id].quantity;
    let itemText = itemTekstArray[id];
    let itemPrice = cart[id].price.toFixed(2);

    let existingItem = tekstbox.querySelector(`[data-id="${id}"]`);
    if (existingItem) {
      if (itemCount === 0) {
        existingItem.remove();
        delete cart[id];
      } else {
        existingItem.textContent = `${itemCount} ${itemText}`;
      }
    }

    updateTotaalPrijs();
    localStorage.setItem('cart', JSON.stringify(cart));
  }
}

// Add event listener to save cart and total price when page is unloaded
window.addEventListener('beforeunload', function() {
  localStorage.setItem('cart', JSON.stringify(cart));
  localStorage.setItem('totaalPrijs', totaalPrijs);
});

window.addEventListener('load', function() {
  cart = JSON.parse(localStorage.getItem('cart')) || {};
  totaalPrijs = parseFloat(localStorage.getItem('totaalPrijs')) || 0;

  // Update the cart and total price display
  for (let id in cart) {
    let item = cart[id];
    let itemCount = item.quantity;
    let itemText = itemTekstArray[id];
    let itemPrice = item.price.toFixed(2);

    let existingItem = tekstbox.querySelector(`[data-id="${id}"]`);
    if (existingItem) {
      existingItem.textContent = `${itemCount} ${itemText}`;
    } else {
      let newItem = document.createElement('div');
      newItem.setAttribute('data-id', id);
      newItem.textContent = `${itemCount} ${itemText}`;
      tekstbox.appendChild(newItem);
    }
  }

  updateTotaalPrijs();
});

