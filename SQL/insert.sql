INSERT INTO authors(name) VALUES ('Федор Достоевский'), ('Михаил Булгаков'), ('Александр Пушкин'), ('Александр Дюма'), 
('Эрих Мария Ремарк'),('Артур Конан Дойль'), ('Виктор Гюго'), ('Жюль Верн'), ('Эрнест Хемингуэй'), ('Агата Кристи'), 
('Марк Твен'), ('Николай Носов'), ('Максим Горький'), ('Василий Шукшин'), ('Джордж Оруэлл'), ('Рэй Брэдбери'), 
('Александр Куприн'), ('Фрэнсис Скотт Фицджеральд'), ('Оскар Уайльд'), ('Антуан де Сент-Экзюпери'), ('Иван Бунин');


INSERT INTO books(title, cost) VALUES ('Собачье сердце. Повести', 511), ('Мастер и Маргарита', 1355), 
('Белая гвардия', 511), ('Преступление и наказание', 211), ('Идиот', 177), ('Братья Карамазовы', 468), 
('Евгений Онегин', 286), ('Дубровский', 172), ('Капитанская дочка. Повести', 318), ('Стихотворения', 418),
('Стихи детям (ил. В. Канивца)', 435), ('Три мушкетера', 193), ('Граф Монте-Кристо. Том 1', 1356),
('Граф Монте-Кристо. Том 2', 1418), ('Королева Марго', 365), ('Жизнь взаймы', 514), 
('Лучшие расследования Шерлока Холмса: Приключения Шерлока Холмса', 169), ('Затерянный мир: в адаптации', 109), 
('Знак четырех = The Sign of the Four', 119), ('Собор Парижской Богоматери', 1778), ('Человек, который смеется', 219), 
('Гаврош', 90), ('Вокруг света в восемьдесят дней. Двадцать тысяч лье под водой', 199), ('Дети капитана Гранта', 365), 
('Пятнадцатилетний капитан', 393), ('Таинственный остров', 393), ('Из пушки на Луну. Вокруг Луны', 321), 
('Прощай, оружие! По ком звонит колокол', 159), ('Почему не Эванс?', 181), ('Объявлено убийство', 159), 
('Лощина', 159), ('Эркюль Пуаро и Путаница в Гриншоре', 159), ('Рождество Эркюля Пуаро', 159), 
('Приключения Гекльберри Финна', 416), ('Приключения Тома Сойера', 324), ('Принц и нищий', 177), 
('Никогда не спорьте с идиотами!', 144), ('Приключения Незнайки и его друзей. Незнайка в Солнечном городе', 827), 
('Фантазеры', 434), ('Незнайка на Луне', 1214), ('Живая шляпа', 392), ('Сказки', 45), ('Старуха Изергиль', 75), 
('Детство', 177), ('На дне', 151), ('Полное собрание рассказов в одном томе', 10), ('Калина красная', 146), 
('1984', 206), ('Скотный двор', 196), ('451 градус по Фаренгейту', 249), ('Вино из одуванчиков', 148), 
('Марсианские хроники', 538), ('Мы – плотники незримого собора', 155), ('Белый пудель', 144), ('В Крыму', 149), 
('Гранатовый браслет. Темные аллеи', 119), ('Я за тебя умру', 538), ('Ночь нежна', 450), ('Великий Гэтсби', 450), 
('Кошмарный парнишка', 34), ('Полное собрание сочинений в одном томе', 746), ('Портрет Дориана Грея', 237), 
('Маленький принц. Планета людей', 511), ('Ночной полет. Военный летчик', 499), ('Цитадель', 149)


INSERT INTO ganres(name) VALUES ('Абсурд'), ('Автобиография'), ('Альтернативная история'), ('Антиутопия'),
('Биография'), ('Боевик'), ('Вестерн'), ('Военный'), ('Воспитание детей'), ('Героика'), ('Готика'), 
('Детектив'), ('Документальный'), ('Драма'), ('Ирония'), ('Искусство'), ('Исторический'), ('Киберпанк'), 
('Контркультура'), ('Космическая опера'), ('Криминал'), ('Кулинария'), ('Любовный роман'), ('Мелодрама'), 
('Мистика'), ('Мифы и легенды'), ('Научная фантастика'), ('Нуар'), ('Пародия'), ('Повесть'),  ('Политика'), ('Приключения'), 
('Про животных'), ('Психологический'), ('Путешествия'), ('Реализм'), ('Роман'), ('Роман в стихах'), ('Самосовершенствование'), ('Сатира'), 
('Сентиментальный'), ('Социальный'), ('Стихотворения') ,('Сюрреализм'), ('Трагедия'), ('Трагикомедия'), ('Триллер'), ('Ужасы/Хоррор'), 
('Утопия'), ('Фантастика'), ('Философия'), ('Фэнтези'), ('Экономика'), ('Эпический'), ('Эротика'), ('Юмор'), ('Проза'), 
('Сказка'), ('Рассказ'), ('Классика');

INSERT INTO books_authors(id_book, id_author) VALUES (1, 2), (2, 2), (3, 2), (4, 1), (5, 1), (6, 1), (7, 3), 
(8, 3), (9, 3), (10, 3), (11, 3), (12, 4), (13, 4), (14, 4), (15, 4), (16, 5), (18, 6), (19, 6), (20, 7), 
(21, 7), (22, 7), (23, 8), (24, 8), (25, 8), (26, 8), (27, 8), (28, 9), (29, 10), (30, 10), (31, 10), 
(32, 10), (33, 10), (34, 11), (35, 11), (36, 11), (37, 11), (38, 12), (39, 12), (40, 12), (41, 12), (42, 12), 
(43, 13), (44, 13), (45, 13), (47, 14), (48, 15), (49, 15), (50, 16), (51, 16), (52, 16), (53, 16), (54, 17), 
(55, 17), (56, 17), (56, 21), (57, 18), (58, 18), (59, 18), (60, 18), (62, 19), (63, 20), (64, 20), (65, 20);

INSERT INTO books_ganres(id_ganre, id_book) VALUES (1, 30), (2, 37), (3, 37), (4, 37), (5, 37), (6, 37), (7, 38), 
(8, 37), (9, 37), (10, 43), (11, 43), (12, 32), (12, 17), (13, 32), (13, 17), (14, 32), (14, 17), (15, 17), (16, 57), 
(18, 27), (19, 12), (20, 37), (21, 17), (22, 57), (23, 27), (23, 32), (24, 37), (24, 32), (25, 37), (25, 32), 
(26, 32), (27, 32), (28, 37), (29, 37), (30, 12), (31, 37), (32, 12), (33, 37), (34, 32), (34, 56), (35, 32), 
(35, 56), (36, 17), (37, 51), (38, 37), (38, 58), (39, 32), (40, 58), (40, 32), (41, 59), (42, 58), (43, 59), 
(44, 30), (45, 14), (47, 57), (48, 4), (48, 37), (49, 30), (50, 37), (50, 4), (51, 30), (51, 36), (52, 37), (53, 37),
(54, 57), (55, 60), (56, 30), (57, 57), (57, 60), (58, 57), (58, 60), (59, 37), (60, 37), (62, 37), 
(63, 60), (63, 57), (63, 32), (64, 37), (65, 60), (65, 57);