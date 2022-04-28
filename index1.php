<?php
//connection de la base de donnee
$bdd = new PDO('mysql:host=localhost;dbname=lecteurfluxrss;charset=utf8', 'root', '');
$rss_link = "https://www.lemonde.fr/rss/en_continu.xml";
$rss_load = simplexml_load_file($rss_link);
foreach ($rss_load->channel->item as $item) {
    // echo$item ->title."<br>";}
?>
    <a href="<?= $item->link ?>"><span class="title"><?= $item->title ?></span></a>
    <br>
    <spam class="description"><?= $item->description ?></spam><br>
<?php
}
?>