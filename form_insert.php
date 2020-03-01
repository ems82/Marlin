
<form name="my_form" action="insert.php" method="post">



    <label>Имя: <br>
        <input type="text" name="name" placeholder="Введите название"><br>
    </label>


    <label>Описание: <br>
        <textarea name="description" placeholder="Введите краткое описание" cols="20" rows="8"></textarea><br>
    </label>


    <label>Полное описание: <br>
        <textarea name="full_description" placeholder="Введите полное описание" cols="20" rows="16"></textarea><br>
    </label>

    <label>Категория: <br>
        <select name="category">

                <option>легковой</option>
                <option>грузовой</option>
        </select>
    </label>

    <br>

    <label>Статус:
        <input type="checkbox" name="status" value = 1 />

    </label>

    <br>
    <input type="submit" name="done" value="send" style="margin-top: 5px;">


    <?php require('footer.php'); ?>
    
    
    
</form>