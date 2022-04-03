<?php
$writer = '';
$main_title = '';
$title = $main_title.' '.$writer;
include('./../app/_header.php');
?>
<link rel="stylesheet" href=<?php echo $path . "/css/dogma.css"?>>
<main>
<h1 class="title"><?php echo $main_title ?></h1>
    <h2 class="author"><?php echo $writer ?></h2>
    <br>
    <p class="box2">

    </p>
</main>
<?php
include('./../app/_footer.php');