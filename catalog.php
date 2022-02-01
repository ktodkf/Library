<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8" />
        <title class="title">Книжный червь | Книжный онлайн-магазин</title>
        <link rel="stylesheet" type="text/css" href="style/style_main.css">
        <link rel="stylesheet" type="text/css" href="style/style.css">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,600,600i,700,700i&display=swap&subset=cyrillic-ext" rel="stylesheet">
        <script src="js/index.js"></script>
        <script src="js/script.js"></script>   
    </head>
    <body>
        <div id="navigation_catalog" name="navigation">
           <div class="logo">
                <a href="index.php"><img src="images/book_cherv.png" class="logo_img"></a>
           </div>
            <div style="display: flex;">
                <li class="list"><a href="about_us.php" class="about_us"> О нас</a> </li>
                <li class="list"><a href="contact.php" class="contact"> Контакты</a> </li>
                <li class="list"><a href="shopping_cart.html" class="cart"> Корзина</a> </li> 
                <button class="list_button"><a href="signup.php" class="entry_link" >Регистрация</a></button>
            </div> 
        </div>
        <h1 class="our_book">Наши книги</h1>
        <div class="catalog_book">
            <div class="filter">
                <span>Фильтры</span>  <br>
                <select class="filter_book">
                    <option>Все книги</option>
                    <option>Историческая литература</option>
                    <option>Научная литреатура</option>
                    <option>Драмы</option>
                    <option>Приключения</option>
                </select>                        
                <br>
                <span>Цена</span> 
                <div>
                    <input type="text" class="price" name="price_from" placeholder="50 рублей"><br>
                    <input type="text" class="price" name="price_to" placeholder="5000 рублей"><br>   
                </div>
                <button class="apply"> Применить </button>
            </div>
            <div class="book_story">
                <?php
                    $link = mysqli_connect("localhost", "root", "", "library");
                    $images = mysqli_query($link, "SELECT * FROM `books`");
                ?>
                <?php 
                    while ($result = mysqli_fetch_assoc($images))
                    {
                        ?>
                            <div class="block_book_catalog"><img class="book_catalog" src="books_image/<?php echo $result['image']; ?>.jpg"><br>
                                <p class="price_catalog"> <?php echo $result['cost']; ?> руб. </p>
                                <button class="book_button_catalog" >Купить</button>
                            <p class="book_title_catalog"> <?php echo $result['title']; ?></p> </div>

                        
                        <?php
                    }
                ?> 
            </div>
        </div>
    <footer class="footer_catalog">
        <div class="footer_catalog_div">
            <div >
                <p class="list_footer_name_catalog">Издательство "Книжный червь"</p>
                <div>
                    <li class="list_footer_catalog">Адрес: Республика Марий Эл,</li>
                    <li class="list_footer_catalog">город Йошкар-Ола</li>
                    <li class="list_footer_catalog">test@my.com</li>
                    <li class="list_footer_catalog">12345678910</li>
                </div>
            </div>
            <div>
                <p class="list_footer_name_catalog">Магазин</p>
                <div>
                    <li class="list_footer_catalog">Часто задаваемые вопросы</li>
                    <li class="list_footer_catalog">Обмен и возврат</li>
                    <li class="list_footer_catalog">Способы оплаты</li>
                    <li class="list_footer_catalog">Доставка</li>
                </div>
            </div>
            <div>
                <p class="list_footer_name_catalog">Социальные сети</p>
                <div>
                    <li class="list_footer_catalog">Facebook</li>
                    <li class="list_footer_catalog">Twitter</li>
                    <li class="list_footer_catalog">Instagram</li>
                    <li class="list_footer_catalog">Pinterest</li>
                </div>
            </div>
        </div>
    </footer>    
    </body>
</html>