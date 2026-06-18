function openProduct(productID){
    window.location.href = "product.html?id=" + productID;
}









// Change quantity (+ / -)
function changeQty(button, change) {
    const cartItem = button.closest(".cart-item");
    const qtySpan = cartItem.querySelector(".qty");

    let qty = parseInt(qtySpan.innerText);
    qty += change;

    if (qty < 1) qty = 1;

    qtySpan.innerText = qty;

    updateTotal();
}

// Calculate total price
function updateTotal() {
    let total = 0;

    document.querySelectorAll(".cart-item").forEach(item => {
        const price = parseInt(item.getAttribute("data-price"));
        const qty = parseInt(item.querySelector(".qty").innerText);
        const checked = item.querySelector(".cart-check").checked;

        if (checked) {
            total += price * qty;
        }
    });

    document.getElementById("totalAmount").innerText =
        "Rs. " + total.toLocaleString();
}

// Recalculate when checkbox is clicked
document.querySelectorAll(".cart-check").forEach(check => {
    check.addEventListener("change", updateTotal);
});

// Initial calculation
updateTotal();





function checkout() {
    let totalText = document.getElementById("totalAmount").innerText;

    if (totalText === "Rs. 0") {
        alert("Your cart is empty!");
        return;
    }

    alert("Checkout successful!\nTotal Amount: " + totalText);

    // OPTIONAL: reset cart quantities
    document.querySelectorAll(".cart-item").forEach(item => {
        item.querySelector(".qty").innerText = 1;
        item.querySelector(".cart-check").checked = false;
    });

    updateTotal();
}



// Load users from localStorage
let users = JSON.parse(localStorage.getItem("users")) || [];

// Show register form
function showRegister() {
    document.getElementById("loginForm").classList.add("hidden");
    document.getElementById("registerForm").classList.remove("hidden");
}

// Show login form
function showLogin() {
    document.getElementById("registerForm").classList.add("hidden");
    document.getElementById("loginForm").classList.remove("hidden");
}



// Register user
document.getElementById("registerForm")?.addEventListener("submit", function (e) {
    e.preventDefault();

    let name = regName.value;
    let email = regEmail.value;
    let password = regPassword.value;

    let exists = users.find(u => u.email === email);
    if (exists) {
        alert("Account already exists. Please login.");
        showLogin();
        return;
    }

    users.push({ name, email, password });
    localStorage.setItem("users", JSON.stringify(users));

    alert("Account created successfully!");
    showLogin();
});





// Login user
document.getElementById("loginForm")?.addEventListener("submit", function (e) {
    e.preventDefault();

    let email = loginEmail.value;
    let password = loginPassword.value;

    let user = users.find(
        u => u.email === email && u.password === password
    );

    if (user) {
        alert("Welcome " + user.name);
        localStorage.setItem("loggedInUser", JSON.stringify(user));
        window.location.href = "account.html";

    } else {
        alert("Invalid email or password");
    }
});




// Contact form submission
document.getElementById("contactForm")?.addEventListener("submit", function (e) {
    e.preventDefault();

    let name = document.getElementById("name").value.trim();
    let email = document.getElementById("email").value.trim();
    let subject = document.getElementById("subject").value.trim();
    let message = document.getElementById("message").value.trim();

    if (!name || !email || !subject || !message) {
        alert("Please fill in all fields.");
        return;
    }

    alert("Thank you, " + name + ". Your message has been sent!");
    this.reset();
});



function filterProducts(category, clickedButton) {
    let products = document.querySelectorAll(".product-card");
    let buttons = document.querySelectorAll(".filter-btn");

    // Remove active class from all buttons
    buttons.forEach(btn => btn.classList.remove("active"));

    // Add active class to clicked button
    clickedButton.classList.add("active");

    // Show / hide products
    products.forEach(product => {
        if (category === "all") {
            product.style.display = "block";
        } else if (product.classList.contains(category)) {
            product.style.display = "block";
        } else {
            product.style.display = "none";
        }
    });
}

document.querySelectorAll('.category-nav a').forEach(link => {
    link.addEventListener('click', function (e) {
        e.preventDefault();
        document.querySelector(this.getAttribute('href'))
            .scrollIntoView({ behavior: 'smooth' });
    });
});




function changeQty(button, change) {
    let qtySpan = button.parentElement.querySelector(".qty");
    let qty = parseInt(qtySpan.innerText);

    qty = qty + change;
    if (qty < 1) qty = 1;

    qtySpan.innerText = qty;
    calculateTotal();
}

function calculateTotal() {
    let items = document.querySelectorAll(".cart-item");
    let total = 0;

    items.forEach(item => {
        let price = parseInt(item.getAttribute("data-price"));
        let qty = parseInt(item.querySelector(".qty").innerText);
        let checked = item.querySelector(".cart-check").checked;

        if (checked) {
            total += price * qty;
        }
    });

    document.getElementById("totalAmount").innerText = "Rs. " + total;
}

// Calculate on page load
document.addEventListener("DOMContentLoaded", calculateTotal);







let images = ["img1.jpg","img2.jpg","img3.jpg","img4.jpg","img5.jpg","img6.jpg","img7.jpg","img8.jpg","img9.jpg","img10.jpg"];
let i = 0;

function changeSlide(){
    document.getElementById("slide").src = "images/" + images[i];
    i++;
    if(i == images.length){ i = 0; }
}

setInterval(changeSlide, 3000); // 3 seconds



// Example alert when user clicks tools
document.querySelectorAll(".tool").forEach(tool=>{
    tool.onclick = () => alert("Feature coming soon!");
});



document.querySelector("form").addEventListener("submit", function(e){
    alert("Message Sent Successfully!");
});
