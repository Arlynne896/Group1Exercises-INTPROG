<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Coffee Mate</title>
    <link rel="stylesheet" href="mate.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <header>
        <div class="logo">
            <h1>Coffee Mate</h1>
        </div>
        <nav>
            <ul>
                <li><a href="#home">Home</a></li>
                <li><a href="#menu">Menu</a></li>
                <li><a href="#about">About Us</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </nav>
    </header>
    
    <section id="home" class="banner">
    <img src="mate.png" alt="Coffee Mate" class="logo-image">
    <div class="banner-content">
        <h2>Welcome to Coffee Mate</h2>
        <p>Your cozy corner for the best coffee in town!</p>
    </div>
    <div style="text-align: center; margin-top: 20px;">
        <a href="index.html" class="back-button"><i class="fas fa-arrow-left"></i> Go Back</a>
    </div>

    </section>

    <section id="menu">
        <h2>Our Menu</h2>
        <div class="menu-items">
            <div class="menu-item">
                <img src="spanish.png" alt="Spanish" style="width: 50%; height: 150px; margin-left: 60px; object-fit: cover; border-radius: 8px; margin-bottom: 15px;">
                <h3>Spanish Latte</h3>
                <div class="item">
                    <span><strong>Spanish Latte</strong></span>
                    <span>₱89</span>
                </div>
            </div>
            <div class="menu-item">
                <img src="mac.png" alt="Caramel" style="width: 50%; height: 160px; margin-left: 60px; object-fit: cover; border-radius: 8px; margin-bottom: 15px">
                <h3>Caramel Macchiatto</h3>
                <div class="item">
                    <span><strong>Caramel Macchiatto</strong></span>
                    <span>₱89</span>
                </div>
            </div>
            <div class="menu-item">
                <img src="red.png" alt="Velvet" style="width: 50%; height: 180px; margin-left: 60px; object-fit: cover; border-radius: 5px; margin-bottom: 15px">
                <h3>Red Velvet</h3>
                <div class="item">
                    <span><strong>Red Velvet</strong></span>
                    <span>₱149</span>
                </div>
            </div>
            <div class="menu-item">
                <img src="blck.png" alt="Black" style="width: 50%; height: 150px; margin-left: 60px; object-fit: cover; border-radius: 5px; margin-bottom: 15px">
                <h3>Americano</h3>
                <div class="item">
                    <span><strong>Americano</strong></span>
                    <span>₱79</span>
                </div>
            </div>
            <div class="menu-item">
                <img src="cap.png" alt="Cappuccino" style="width: 50%; height: 130px; margin-left: 60px; object-fit: cover; border-radius: 5px; margin-bottom: 15px">
                <h3>Cappuccino</h3>
                <div class="item">
                    <span><strong>Cappuccino</strong></span>
                    <span>₱99</span>
                </div>
            </div>
            <div class="menu-item">
                <img src="choco.png" alt="Choco" style="width: 50%; height: 185px; margin-left: 60px; object-fit: cover; border-radius: 5px; margin-bottom: 15px">
                <h3>Choco Coffee</h3>
                <div class="item">
                    <span><strong>Choco Coffee</strong></span>
                    <span>₱110</span>
                </div>
            </div>
            </div>
            <button id="orderBtn" class="cta-button">Order Now</button>
        </section>

    <section id="about">
        <h2>About Us</h2>
        <p>At Coffee Mate, we pride ourselves on serving high-quality coffee and homemade pastries in a welcoming environment. Whether you're here for a quick pick-me-up or a leisurely afternoon, our cozy café has something for everyone.</p>
    </section>

    <section id="contact">
        <h2>Contact Us</h2>
        <form action="#" method="POST">
            <label for="name">Your Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Your Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="message">Your Message:</label>
            <textarea id="message" name="message" rows="4" required></textarea>

            <button type="submit">Send Message</button>
        </form>
    </section>

    <footer>
        <p>&copy; 2024 Coffee Mate. All Rights Reserved.</p>
    </footer>
    <div id="orderModal" class="modal">
        <div class="modal-content">
            <span class="close-btn">&times;</span>
            <h2>Order Your Coffee</h2>
            <form id="orderForm">
                <label for="coffee">Choose Your Coffee:</label>
                <select id="coffee" name="coffee" required>
                    <option value="spanish">Spanish Latte</option>
                    <option value="caramel">Caramel Macchiato</option>
                    <option value="redvelvet">Red Velvet</option>
                    <option value="americano">Americano</option>
                    <option value="cappuccino">Cappuccino</option>
                    <option value="choco">Choco Coffee</option>
                </select>

                <label for="quantity">Quantity:</label>
                <input type="number" id="quantity" name="quantity" min="1" value="1" required>

                <button type="submit">Place Order</button>
            </form>
        </div>
    </div>

    <script>
        var modal = document.getElementById("orderModal");
        var btn = document.getElementById("orderBtn");
        var span = document.getElementsByClassName("close-btn")[0];

        btn.onclick = function() {
            modal.style.display = "block";
        }
        span.onclick = function() {
            modal.style.display = "none";
        }
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    </script>
</body>
</html>

