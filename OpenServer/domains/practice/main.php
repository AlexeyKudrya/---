<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Practice </title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>
    
    <div class="flex-container">

        <div class="header">     
               <?php include 'logo.inc.php' ?>         
               <?php include 'menu.inc.php' ?>	   
        </div>       
     
        <div class="about_me">
         
          <h1>  <?php  echo $p  ?> </h1>

            <div class="data">

                <div class="myImg">
                    <a href="www.skillfactory.ru/"><img src="img/1.jpg" alt="skillfactory width="250" height="200"></a>                    
                </div>

                <div class="fullname">
                    <p> Меня зовут 
                    <?php echo $name, ' ', $surname . '<br>'; 
                          echo 'Я родился и вырос в городе', ' ', $city, ' ', '(это в Сибири, кто не знает)'; ?>                                      
                    </p>
                    <p> Мне
                    <?php  echo $age;   ?>          
                    лет </p>
                    <p> Я обучаюсь на курсе "Белый хакер" </p>
                    <p> Успел изучить основы нескольких языков </p>
                </div>

            </div>

            <div class="knowledge">                
                <?php  include 'knowledge.inc.php'; ?>
                <?php echo $object; ?> <br> <!--Выводим объявленную в knowledge.inc.php переменную-->            
                <?php echo gettype($object) ?> <br>
                <?php echo $c ?> <br>
            </div>

            <div class="article">
                <p class="text">
                    Здесь должен быть какой-то текст, но я вставлю таблицу.
                </p>
            </div>

            <h2>Критерии оценки выполненного задания</h2>
            <div class="table">
            <table border="1" align="center">
                <tr>
                    <td>Установлен локальный веб-сервер XAMMP</td>
                    <td style="color:green"><b>+</b></td>
                </tr>
                <tr>
                    <td>Cоздана папка с проектом в директории D:XAMPP/htdocs/OpenServer/domains/practice и все необходимые в этой папке файлы</td>
                    <td style="color:green"><b>+</b></td>
                </tr>
                <tr>
                    <td>В файле main.php создан тестовый код для вывода</td>
                    <td style="color:green"><b>+</b></td>
                </tr>
                <tr>
                    <td>Удалось запустить сервер и вывести в браузере тестовый код</td>
                    <td style="color:green"><b>+</b></td>
                </tr>
                <tr>
                    <td>Создана основная верстка и добавлены стили</td>
                    <td style="color:green"><b>+</b></td>
                </tr>
                <tr>
                    <td>Подключены дополнительные файлы и файлы с элементами кода</td>
                    <td style="color:green"><b>+</b></td>
                </tr>
                <tr>
                    <td>В файле index.php создана переменная со значением в виде строки — приветствие от автора страницы. Результат выведен в браузере</td>
                    <td style="color:green"><b>+</b></td>
                </tr>
                <tr>
                    <td>Выведено изображение на странице и в браузере</td>
                    <td style="color:green"><b>+</b></td>
                </tr>
                <tr>
                    <td>Созданы переменные со значением: имя, фамилия, возраст, город, результат кода выведен в браузере</td>
                    <td style="color:green"><b>+</b></td>
                </tr>
                <tr>
                    <td>Создан блок с классом knowledge и в нем продемонстрированы полученные знания</td>
                    <td style="color:green"><b>+</b></td>
                </tr>
                <tr>
                    <td>Продемонстрированы разные типы операций, способов вывода кода и также результаты выведены в браузере</td>
                    <td style="color:green"><b>+</b></td>
                </tr>
            </table>
            </div>
        </div>

            <?php include 'footer.inc.php' ?>

    </div>


</body>
</html>