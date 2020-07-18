<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Page</title>
        <link rel="shortcut icon" href="public\icons\title.ico" type="image/x-icon">

        <link rel="stylesheet" type="text/css" href="public/css/page.css">
    </head>
    <body>
    <div>
        <form action="#">
            <fieldset>
                <legend><h3>Registration:</h3></legend>
                <label for="fname">First name:</label>
                <input type="text" id="fname" name="fname"><br><br>
                <label for="lname">Last name:</label>
                <input type="text" id="lname" name="lname"><br><br>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email"><br><br>
                <label for="birthday">Birthday:</label>
                <input type="date" id="birthday" name="birthday"><br><br>
                <input type="submit" value="Submit">
            </fieldset>
        </form>
    </div>

    <div>
        <p>My favorite color is <del>blue</del> <ins>red</ins>!</p>
    </div>


    <div>
        <p>The meter element is used to display a gauge:</p>

        <label for="disk_c">Disk usage C:</label>
        <meter id="disk_c" value="2" min="0" max="10">2 out of 10</meter><br>

        <label for="disk_d">Disk usage D:</label>
        <meter id="disk_d" value="0.6">60%</meter>
    </div>
    <hr>
    <div>

    </div>
    <hr>
    <div>
        <label for="cars">Choose a car:</label>
        <select  name="cars" id="cars">
            <optgroup label="Swedish Cars">
                <option value="volvo">Volvo</option>
                <option value="saab">Saab</option>
            </optgroup>
            <optgroup label="German Cars">
                <option value="mercedes">Mercedes</option>
                <option value="audi">Audi</option>
            </optgroup>
        </select>
    </div>
    <hr>
    <div>
        <form oninput="x.value=parseInt(a.value)+parseInt(b.value)">
            <input type="range" id="a" value="0">
            +<input type="number" id="b" value="25">
            =<output name="x" for="a b"></output>
        </form>
    </div>
    <hr>
    <div>
        <label for="file">Downloading progress:</label>
        <progress id="file" value="65" max="100"> 32% </progress>
    </div>
    <hr>

    <div>
        <ruby>
            dccdssd <rt> sdfff </rt>
        </ruby>
    </div>
    <hr>

    <div>
        <h1>The sub and sup elements</h1>
        <p>This text contains <sup>superscript</sup> text.</p>
        <p>This text contains <sub>subscript</sub> text.</p>
    </div>
    <hr>

    <div>
        <svg width="100" height="100">
            <circle cx="50" cy="50" r="40" stroke="green" stroke-width="2" fill="yellow" />
        </svg>
    </div>
    <hr>


   <div class="newspaper">
        <p>Что такое Lorem Ipsum?

            Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века. В то время некий безымянный печатник создал большую коллекцию размеров и форм шрифтов, используя Lorem Ipsum для распечатки образцов. Lorem Ipsum не только успешно пережил без заметных изменений пять веков, но и перешагнул в электронный дизайн. Его популяризации в новое время послужили публикация листов Letraset с образцами Lorem Ipsum в 60-х годах и, в более недавнее время, программы электронной вёрстки типа Aldus PageMaker, в шаблонах которых используется Lorem Ipsum.
            Почему он используется?

            Давно выяснено, что при оценке дизайна и композиции читаемый текст мешает сосредоточиться. Lorem Ipsum используют потому, что тот обеспечивает более или менее стандартное заполнение шаблона, а также реальное распределение букв и пробелов в абзацах, которое не получается при простой дубликации "Здесь ваш текст.. Здесь ваш текст.. Здесь ваш текст.." Многие программы электронной вёрстки и редакторы HTML используют Lorem Ipsum в качестве текста по умолчанию, так что поиск по ключевым словам "lorem ipsum" сразу показывает, как много веб-страниц всё ещё дожидаются своего настоящего рождения. За прошедшие годы текст Lorem Ipsum получил много версий. Некоторые версии появились по ошибке, некоторые - намеренно (например, юмористические варианты).

            Откуда он появился?

            Многие думают, что Lorem Ipsum - взятый с потолка псевдо-латинский набор слов, но это не совсем так. Его корни уходят в один фрагмент классической латыни 45 года н.э., то есть более двух тысячелетий назад. Ричард МакКлинток, профессор латыни из колледжа Hampden-Sydney, штат Вирджиния, взял одно из самых странных слов в Lorem Ipsum, "consectetur", и занялся его поисками в классической латинской литературе. В результате он нашёл неоспоримый первоисточник Lorem Ipsum в разделах 1.10.32 и 1.10.33 книги "de Finibus Bonorum et Malorum" ("О пределах добра и зла"), написанной Цицероном в 45 году н.э. Этот трактат по теории этики был очень популярен в эпоху Возрождения. Первая строка Lorem Ipsum, "Lorem ipsum dolor sit amet..", происходит от одной из строк в разделе 1.10.32

            Классический текст Lorem Ipsum, используемый с XVI века, приведён ниже. Также даны разделы 1.10.32 и 1.10.33 "de Finibus Bonorum et Malorum" Цицерона и их английский перевод, сделанный H. Rackham, 1914 год.
        </p>
   </div>
        <p>
            <img src="public\icons\title.ico" alt="Изображение" title="Подсказка" />
            <br>
            <details>
                <summary>Epcot Center</summary>
                <p>Epcot is a theme park at <mark>Walt Disney World Resort</mark> featuring exciting attractions, international pavilions, award-winning fireworks and seasonal special events.</p>
                <a href="mailto:myrusakov@gmail.com">Написать</a>
            </details>

        </p>

    <p>dffffffffffffff<br>
        dfgdfgdfgdfgdfgdffffffffffffff<br>
        dfgdfgdfgdfgdfgdffffffffffffff<br>
        dfgdfgdfgdfgdfgdffffffffffffff<br>
        dfgdfgdfgdfgdfg</p><p>dffffffffffffff<br>
        dfgdfgdfgdfgdfgdffffffffffffff<br>
        dfgdfgdfgdfgdfgdffffffffffffff<br>
        dfgdfgdfgdfgdfgdffffffffffffff<br>
        dfgdfgdfgdfgdfg</p><p>dffffffffffffff<br>
        dfgdfgdfgdfgdfgdffffffffffffff<br>
        dfgdfgdfgdfgdfgdffffffffffffff<br>
        dfgdfgdfgdfgdfgdffffffffffffff<br>
        dfgdfgdfgdfgdfg</p><p>dffffffffffffff<br>
        dfgdfgdfgdfgdfgdffffffffffffff<br>
        dfgdfgdfgdfgdfgdffffffffffffff<br>
        dfgdfgdfgdfgdfgdffffffffffffff<br>
        dfgdfgdfgdfgdfg</p><p>dffffffffffffff<br>
        dfgdfgdfgdfgdfgdffffffffffffff<br>
        dfgdfgdfgdfgdfgdffffffffffffff<br>
        dfgdfgdfgdfgdfgdffffffffffffff<br>
        dfgdfgdfgdfgdfg</p><p>dffffffffffffff<br>
        dfgdfgdfgdfgdfgdffffffffffffff<br>
        dfgdfgdfgdfgdfgdffffffffffffff<br>
        dfgdfgdfgdfgdfgdffffffffffffff<br>
        dfgdfgdfgdfgdfg</p><p>dffffffffffffff<br>
        dfgdfgdfgdfgdfgdffffffffffffff<br>
        dfgdfgdfgdfgdfgdffffffffffffff<br>
        dfgdfgdfgdfgdfgdffffffffffffff<br>
        dfgdfgdfgdfgdfg</p><p>dffffffffffffff<br>
        dfgdfgdfgdfgdfgdffffffffffffff<br>
        dfgdfgdfgdfgdfgdffffffffffffff<br>
        dfgdfgdfgdfgdfgdffffffffffffff<br>
        dfgdfgdfgdfgdfg</p><p>dffffffffffffff<br>
        dfgdfgdfgdfgdfgdffffffffffffff<br>
        dfgdfgdfgdfgdfgdffffffffffffff<br>
        dfgdfgdfgdfgdfgdffffffffffffff<br>
        dfgdfgdfgdfgdfg</p><p>dffffffffffffff<br>
        dfgdfgdfgdfgdfgdffffffffffffff<br>
        dfgdfgdfgdfgdfgdffffffffffffff<br>
        dfgdfgdfgdfgdfgdffffffffffffff<br>
        dfgdfgdfgdfgdfg</p><p>dffffffffffffff<br>
        dfgdfgdfgdfgdfgdffffffffffffff<br>
        dfgdfgdfgdfgdfgdffffffffffffff<br>
        dfgdfgdfgdfgdfgdffffffffffffff<br>
        dfgdfgdfgdfgdfg</p><p>dffffffffffffff<br>
        dfgdfgdfgdfgdfgdffffffffffffff<br>
        dfgdfgdfgdfgdfgdffffffffffffff<br>
        dfgdfgdfgdfgdfgdffffffffffffff<br>
        dfgdfgdfgdfgdfg</p><p>dffffffffffffff<br>
        dfgdfgdfgdfgdfgdffffffffffffff<br>
        dfgdfgdfgdfgdfgdffffffffffffff<br>
        dfgdfgdfgdfgdfgdffffffffffffff<br>
        dfgdfgdfgdfgdfg</p><p>dffffffffffffff<br>
        dfgdfgdfgdfgdfgdffffffffffffff<br>
        dfgdfgdfgdfgdfgdffffffffffffff<br>
        dfgdfgdfgdfgdfgdffffffffffffff<br>
        dfgdfgdfgdfgdfg</p><p>dffffffffffffff<br>
        dfgdfgdfgdfgdfgdffffffffffffff<br>
        dfgdfgdfgdfgdfgdffffffffffffff<br>
        dfgdfgdfgdfgdfgdffffffffffffff<br>
        dfgdfgdfgdfgdfg</p>
    </body>

</html>