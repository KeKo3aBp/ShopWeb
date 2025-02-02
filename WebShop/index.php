<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Онлайн-платформа продаж</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    // db_config.php
    $servername = "127.0.0.1:3306"; // Или IP-адрес сервера MySQL
    $username = "root";
    $password = "root";
    $dbname = "webshop";

    $conn = null; // Объявляем $conn вне try-catch
    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        // Устанавливаем режим ошибок PDO в исключения
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }

    ?>
    <header>
        <div class="container">
            <h1>Мой онлайн-магазин</h1>
            <nav>
                <a href="#">Главная</a>
                <a href="products.html">Товары</a>
                <a href="about.html">О нас</a>
                <a href="profile.html" id="profile-link">Личный кабинет</a>
                <a href="cart.html">Корзина (<span id="cart-count">0</span>)</a>
            </nav>
        </div>
    </header>

    <main>
        <section id="hero">
            <div class="container">
                <h2>Добро пожаловать в наш магазин!</h2>
                <p>Лучшие товары по лучшим ценам.</p>
                <a href="#" class="button" id="hero-button">Смотреть товары</a>
            </div>
        </section>

        <section id="products">
            <div class="container">
                <h2>Наши товары</h2>
                <div class="product-grid">
                    <div class="product">
                        <img src="product1.jpg" alt="Товар 1">
                        <h3>Товар 1</h3>
                        <p>Описание товара 1. Краткое описание.</p>
                        <span class="price">$29.99</span>
                        <button class="add-to-cart" data-product-id="1">В корзину</button>
                    </div>
                    <div class="product">
                        <img src="product2.jpg" alt="Товар 2">
                        <h3>Товар 2</h3>
                        <p>Описание товара 2. Краткое описание.</p>
                        <span class="price">$49.99</span>
                        <button class="add-to-cart" data-product-id="2">В корзину</button>
                    </div>
                     <div class="product">
                        <img src="product3.jpg" alt="Товар 3">
                         <h3>Товар 3</h3>
                        <p>Описание товара 3. Краткое описание.</p>
                        <span class="price">$19.99</span>
                        <button class="add-to-cart" data-product-id="3">В корзину</button>
                    </div>
                </div>
            </div>
        </section>

        <section id="about">
            <div class="container">
                <h2>О нас</h2>
                <p>Информация о вашем магазине.</p>
            </div>
        </section>
          <section id="login-modal" class="modal">
             <div class="modal-content">
                 <span class="close-button">&times;</span>
                   <h2>Вход/Регистрация</h2>
                 <div id="login-form">
                     <label for="email">Email:</label>
                     <input type="email" id="email" required>
                       <label for="password">Пароль:</label>
                     <input type="password" id="password" required>
                      <label for="name">Имя:</label>
                      <input type="text" id="name">
                     <button id="login-button">Войти</button>
                     <button id="register-button">Зарегистрироваться</button>
                  </div>
              </div>
         </section>

         <section id="cart-modal" class="modal">
             <div class="modal-content">
                <span class="close-button">&times;</span>
                  <h2>Корзина</h2>
                 <div id="cart-items"></div>
                  <div id="cart-total">Итого: $0.00</div>
                 <button id="checkout-button">Оформить заказ</button>
              </div>
          </section>
    </main>

    <footer>
        <div class="container">
           <p>&copy; 2024 Мой магазин. Все права защищены.</p>
        </div>
    </footer>

  <script src="script.js"></script>
</body>
</html>