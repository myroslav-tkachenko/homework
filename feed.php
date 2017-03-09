<?php
include_once __DIR__ . '/../core/functions.php';




if ($res = pdodb()->query("SELECT COUNT(id) FROM rss ")){
    if ($res->fetchColumn() > 0) {
        foreach (pdodb()->query("SELECT * FROM `rss`")as $row){

            ?>
<div class="panel panel-primary">
    <div class="panel-heading">
        <h3 class="panel-title"><?php echo $row['title']?></h3>
    </div>
    <div class="panel-body"><?php echo $row['description']?><?php echo $row['pub_date']?></div>
    <div class="panel-footer"><a href="<?php echo$row['link']?>">Посмотреть новость</a></div>
</div>
            <?php

        }

    }  else {
        print "Нет строк соответствующих запросу.";
    }
}

?>



<?php
