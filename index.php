<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <title class="title">Книжный червь | Книжный онлайн-магазин</title>
    <link rel="stylesheet" type="text/css" href="style/style_main.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,600,600i,700,700i&display=swap&subset=cyrillic-ext" rel="stylesheet">
    <script src="js/index.js"></script>
    <script src="js/script.js"></script>   

</head>
<body>
    <div id="navigation" name="navigation">
       <div class="logo">
            <a href="#navigation"><img src="images/book_cherv.png" class="logo_img"></a>
       </div>

        <div style="display: flex;">
            <li class="list"><a href="catalog.php" class="shop"> Магазин</a></li>
            <li class="list"><a href="about_us.php" class="about_us"> О нас</a> </li>
            <li class="list"><a href="contact.php" class="contact"> Контакты</a> </li>
            <button class="list_button"><a href="signup.php" class="entry_link" >Регистрация</a></button>
        </div> 
        
    </div>
    <img class="background" src="images/background.jpeg">
        
    <div> 
        <h2 class="name_best_one">Бестселлеры</h2>
        <div class="block_book_category">
            <?php
                $link = mysqli_connect("localhost", "root", "", "library");
                $images = mysqli_query($link, "SELECT * FROM `books` ORDER BY rating DESC LIMIT 5");
             ?>
            <div class="book_one_block">
                <?php 
                    while ($result = mysqli_fetch_assoc($images))
                    {
                        ?>
                        <div class="block_book"><img class="book_one" src="books_image/<?php echo $result['image']; ?>.jpg"><br><button class="book_button">Купить</button>
                        <p class="book_title"><?php echo $result['title']; ?></p></div>
                        <?php
                    }
                ?>
            </div>
        </div>
             
        <h2 class="name_best_month">В этом месяце</h2>
        <h1 class="name_best_rec">РЕКОМЕНДОВАНО</h1>
        <div class="block_book_category">
            <?php
                $link = mysqli_connect("localhost", "root", "", "library");
                $images = mysqli_query($link, "SELECT * FROM `books` ORDER BY id_book DESC LIMIT 5");
             ?>
            <div class="book_one_block">
                <?php 
                    while ($result = mysqli_fetch_assoc($images))
                    {
                        ?>
                        <div class="block_book"><img class="book_one" src="books_image/<?php echo $result['image']; ?>.jpg"><br><button class="book_button">Купить</button>
                        <p class="book_title"><?php echo $result['title']; ?></p></div>
                        <?php
                    }
                ?>
            </div>
        </div>

        <h1 class="name_best_month"> Вы можете прочитать<br> историю о нас</h1>
        <button class="button_read"><a href="about_us.php">Читать</a></button>
    </div>
    <div class="background_blue" ></div>
    <footer>
        <div class="footer">
            <div >
                <p class="list_footer_name">Издательство "Книжный червь"</p>
                <div>
                    <li class="list_footer">Адрес: Республика Марий Эл,</li>
                    <li class="list_footer">город Йошкар-Ола</li>
                    <li class="list_footer">test@my.com</li>
                    <li class="list_footer">12345678910</li>
                </div>
            </div>
            <div>
                <p class="list_footer_name">Магазин</p>
                <div>
                    <li class="list_footer">Часто задаваемые вопросы</li>
                    <li class="list_footer">Обмен и возврат</li>
                    <li class="list_footer">Способы оплаты</li>
                    <li class="list_footer">Доставка</li>
                </div>
            </div>
            <div>
                <p class="list_footer_name">Социальные сети</p>
                <div>
                    <li class="list_footer">Facebook</li>
                    <li class="list_footer">Twitter</li>
                    <li class="list_footer">Instagram</li>
                    <li class="list_footer">Pinterest</li>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>