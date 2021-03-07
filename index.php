<?php
$name = "Sarvar Abdullaev";
$age = 35;
$isMale = TRUE;

$shoppingList = array("bread", "milk", "eggs", "apples");
?>
<?php
include("header.php");
?>

<!-- content area -->
<p>
    <a href="about.php">About Me</a>
<dl>
    <dt>Name:</dt>
    <dd><?php print $name ?></dd>

    <dt>Age:</dt>
    <dd><?= "My age is $age y.o." ?></dd>

    <dt>Is Male:</dt>
    <dd><?= gettype($isMale) ?></dd>
</dl>
</p>
<h2>Shopping List</h2>
<p>
<ul>
    <?php foreach ($shoppingList as $item) { ?>
        <li>
            <?= $item ?>
        </li>
    <?php } ?>
</ul>
</p>

<?php
$files = glob("*.txt");
foreach ($files as $file) {
    $filename = basename($file);
    ?>
    <p><a href="<?= $file ?>"><?= $filename ?></a></p>
<?php } ?>


<?php
$lines = file("poem.txt");
foreach ($lines as $line) {
    ?>
    <p><?= $line ?></p>
<?php } ?>

<?php
    $content = file_get_contents("poem.txt");
    $content = strrev($content);
    file_put_contents("poem.txt",$content);
?>

<?php
include("footer.php");
?>



