<!DOCTYPE html>
<html lang="ru">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Web-constructor</title>
    <style>
        textarea {
            width: 500px;
        }
    </style>
</head>
<body>
<center>
    <?php
    $borderStyle = "none";
    $borderSize = "3";
    $sizeType = "px";
    $width = "700";
    $height = "700";
    $hero = $_REQUEST["hero"];
    $antihero = $_REQUEST["antihero"];
    $where = $_REQUEST["where"];
    $when = $_REQUEST["when"];
    $secondhero = $_REQUEST["secondhero"];
    $headerFont = "Georgia";
    $textFont = "Georgia";
    $type = "px";
    $backgroundColor = "blanchedalmond";

    $text ="Жила-была ". $when."  ". $where." ". $hero.". Мать любила её без памяти, а ". $secondhero." и того больше. 

Сшила как-то раз ". $secondhero." шапочку красного цвета и так сильно она ей понравилась, что и снимать не хотелось. Всюду ходила ". $hero." в своей шапочке. <br/>

Раз испекла мама пирожки и говорит:<br/> 

- ". $secondhero." болеет, сходи-ка ты навести её. Да отнеси пирожки и горшочек масла. Смотри только в лесу не останавливайся и ни с кем не разговаривай. <br/>

". $hero." была послушной девочкой, она сейчас же собралась и отправилась. <br/>

Идёт ". $hero." по лесной тропинке и тут навстречу ей ". $antihero.". ". $antihero." хотел было её съесть, да побоялся, потому что поблизости был слышен стук дровосеков. Вот он и спрашивает:<br/> 

- Куда ты идёшь, ". $hero."? <br/>

Бедная ". $hero." забыла, что опасно в лесу останавливаться и разговаривать с незнакомцами, и отвечает ему: <br/>

- ". $secondhero." заболела, вот и иду к ней, чтобы пирожки да горшочек масла принести. <br/>

- А далеко живёт ". $secondhero."? - спрашивает ". $antihero.". <br/>

- Очень далеко! - отвечает ". $hero.": - вон за той мельницей, что виднеется на опушке леса; а там будет первый дом как войдёшь в деревню. <br/>

- Знаешь, - говорит ей ". $antihero.": - пойду-ка и я её навещу. - Я пойду этой дорогой, а ты ступай по той: посмотрим, кто из нас быстрее дойдёт. <br/>

И ". $antihero." бросился изо всех сил бежать по самой короткой дороге, а ". $hero." побрела неспеша по самой длинной. По пути она собирала букеты и напевала песенки. <br/>

Прибежал ". $antihero." первым. Постучался: <br/>

- Тук, тук. \n

- Кто там? \n

- Это я, ". $hero.", ". $hero.", - отвечал ". $antihero." тоненьким голоском: - принесла вам пирожки да горшочек масла. <br/>

". $secondhero." лежала в постели, потому что ей немного нездоровилось, и крикнула оттуда: <br/>

- Дёрни за верёвочку, дверь сама и откроется. <br/>

". $antihero." дёрнул за верёвочку, дверь открылась. Он бросился на старушку и разом проглотил её, потому что уже больше трёх дней ничего не кушал. <br/>

Потом он запер дверь, улегся в постель и стал поджидать. Через некоторое время  ". $hero." добрела до домика и постучалась: <br/>

- Тук, тук. <br/>

- Кто там? <br/>

Услышав грубый голос, ". $hero." сперва было испугалась, но подумав, что видимо у неё голос осип из-за болезни, отвечала: <br/>

- Это я,  ". $hero.", принесла вам пирожки да горшочек масла. <br/>

". $antihero." крикнул как-только мог тонким голосом: <br/>

- Дёрни за верёвочку, дверь сама и откроется. <br/>

". $hero." дёрнула за верёвочку, дверь открылась. Когда ". $hero." вошла, ". $antihero." закутался хорошенько в одеяло, чтоб она его не узнала, и говорит: <br/>

- Положи куда-нибудь пирожок да горшочек масла, и иди приляг со мною, отдохни с дороги. <br/>

". $hero." прилегла рядом и спрашивает: <br/>

-". $secondhero.", ". $secondhero.", а почему у тебя такие большие руки? <br/>

- Это, ". $hero.", чтобы покрепче тебя обнимать. <br/>

- ". $secondhero.", ". $secondhero.", а почему у тебя такие большие уши? <br/> 

- Это, ". $hero.", чтобы получше тебя слышать. <br/>

-". $secondhero.", ". $secondhero.", а почему у тебя такие большие глаза? <br/>

- Это, ". $hero.", чтобы получше тебя видеть. <br/>

-". $secondhero.", ". $secondhero.", а почему у тебя такие большие зубы? <br/> 

- А это, чтобы тебя съесть! <br/>

И с этими словами злой ". $antihero." проглотил её. Хорошо, что в ту пору в лесу работали дровосеки. Они услышали шум, вбежали в дом, убили его и освободили всех.";





    $header = "Новая сказка";

    $theStyle = "font-family: $textFont; width: $width$type; border-width: $borderSize$sizeType; border-style: $borderStyle; border-color: black;";

    print <<<STYLE
<body style="background-color: $backgroundColor;">
<h3 style="font-family: $headerFont;">$header</h3>
<p style = "$theStyle">$text</p>    
</body>
    
STYLE;
    ?>
</center>
</body>
</html>