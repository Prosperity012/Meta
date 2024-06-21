document.getElementById('read-more').addEventListener('click', function() {
    window.location.href = 'shop.php';
});
let currentIndex = 0;
const slides = document.querySelectorAll('.carousel-inner img');

function showSuggestions() {
    const input = document.getElementById('searchInput');
    const filter = input.value.toLowerCase();
    const suggestions = document.getElementById('searchSuggestions');
    const suggestionItems = ['Product 1', 'Product 2', 'Product 3', 'Product 4']; // Example suggestions

    suggestions.innerHTML = '';
    if (filter.length > 0) {
        const filteredSuggestions = suggestionItems.filter(item => item.toLowerCase().includes(filter));
        filteredSuggestions.forEach(item => {
            const div = document.createElement('div');
            div.textContent = item;
            div.onclick = () => {
                input.value = item;
                suggestions.style.display = 'none';
            };
            suggestions.appendChild(div);
        });
        suggestions.style.display = 'block';
    } else {
        suggestions.style.display = 'none';
    }
}

function nextSlide() {
    currentIndex = (currentIndex + 1) % slides.length;
    document.getElementById('carouselInner').style.transform = `translateX(-${currentIndex * 100}%)`;
}

function prevSlide() {
    currentIndex = (currentIndex - 1 + slides.length) % slides.length;
    document.getElementById('carouselInner').style.transform = `translateX(-${currentIndex * 100}%)`;
}

function validateLoginForm() {
    const email = document.getElementById('email').value;
    const password = document.getElementById('password').value;

    if (email === "" || password === "") {
        alert("All fields must be filled out");
        return false;
    }
    return true;
}

document.addEventListener("DOMContentLoaded", function() {
    loadCart();

    let cart = [];

    function addToCart(productName, price) {
        const product = { name: productName, price: price };
        cart.push(product);
        displayCart();
        saveCart();
    }
    
    function displayCart() {
        const cartList = document.getElementById('cartList');
        cartList.innerHTML = '';
        let total = 0;
        cart.forEach((product, index) => {
            cartList.innerHTML += `<li>${product.name} - R${product.price.toFixed(2)} <button onclick="removeFromCart(${index})">Remove</button></li>`;
            total += product.price;
        });
        document.getElementById('totalPrice').innerText = `Total: R${total.toFixed(2)}`;
    }
    
    function removeFromCart(index) {
        cart.splice(index, 1);
        displayCart();
        saveCart();
    }
    
    function checkout() {
        sessionStorage.setItem('cart', JSON.stringify(cart));
        window.location.href = 'checkout.php';
    }
    
    function saveCart() {
        fetch('save_cart.php', {
            method: 'POST',
            headers: { 'Content-Type': 'application/json' },
            body: JSON.stringify({ cart: cart })
        });
    }
})    
