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
        <div id="navigation" name="navigation">
           <div class="logo">
                <a href="index.php"><img src="images/book_cherv.png" class="logo_img"></a>
           </div>
            <div style="display: flex;">
                <li class="list"><a href="about_us.php" class="about_us"> О нас</a> </li>
                <li class="list"><a href="#contact" class="contact"> Контакты</a> </li>
                <button class="list_button"><a href="signup.php" class="entry_link" >Регистрация</a></button>
            </div> 
        </div>
        <h1 class="our_book">Наши книги</h1>
        <div class="book_story">
            
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
                    <input type="text" class="price" placeholder="50 рублей"><br>
                    <input type="text" class="price" placeholder="5000 рублей"><br>   
                </div>
            </div>
            <div class="catalog">
                <ul class="list_book">
                    <li class="book_two"> </li> 
                    <li class="book_two"> </li> 
                    <li class="book_two"> </li>    
                    <li class="book_two"> </li> 
                    <li class="book_two"> </li> 
                    <li class="book_two"> </li> 
                    <li class="book_two"> </li> 
                    <li class="book_two"> </li> 
                    <li class="book_two"> </li> 
                    <li class="book_two"> </li> 
                    <li class="book_two"> </li> 
                    <li class="book_two"> </li> 
                </ul>    
            </div>
        </div>
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