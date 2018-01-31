<?php
include "php/header.php";
?>

<div class="container">
    <div class="starter-template">
        <div id="error" class="message">
            <a id="close" title="Закрыть"  href="#" onClick="document.getElementById('error').setAttribute('style','display: none;');">&times;</a>
            <span>Внимание! </span><i class="appet"></i>
        </div>
        <div id="success" class="message">
            <a id="close" title="Закрыть"  href="#" onClick="document.getElementById('success').setAttribute('style','display: none;');">&times;</a>
            <span>Поздравляем! </span><i class="appet"></i>
        </div>
        <h1>Ajax</h1><br />
        <div class="block1">
            <label class="lab">Задача 1.Какого цвета елка?</label><br />
            <input name="otvet" type="text" value="" /> <br /><br />
            <input type="submit" name="enter" value="Ответить" />
        </div>
        <div class="block2">
            <label class="lab">Задача 2.Сколько будет 2+2*2?</label><br />
            <input name="otvet1" type="text" value="" /> <br /><br />
            <input type="submit" name="enter" value="Ответить" />
        </div>
        <div class="block3">
            <label class="lab">Задача 3.В парке поровну желтых и красных скамеек. Желтых 4. Сколько красных скамеек в парке?</label><br />
            <input name="otvet2" type="text" value="" /> <br /><br />
            <input type="submit" name="enter" value="Ответить" />
        </div>
    </div>
</div>

<?php
include "php/footer.php";
?>