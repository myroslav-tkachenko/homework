<?php
include_once __DIR__ . '/../vendor/autoload.php';
include_once __DIR__ . '/../core/functions.php';

use Monolog\Logger;
use Monolog\Handler\StreamHandler;
$log = new Logger('name');
$log->pushHandler(new StreamHandler('log/info.log', Logger::INFO));


$sql = "INSERT IGNORE INTO rss (title, link, description, pub_date) VALUES (?, ?, ?, ?)";



$stmt = pdodb()->prepare($sql);

$feed = new SimplePie();
$feed->enable_cache(false);

$feed->set_feed_url('https://rss.unian.net/site/news_ukr.rss');
$feed->init();

$items = $feed->get_items();

//sprosit ne zapisana li v bd ssilka na satiyu
$checklinksql = "SELECT * FROM `rss` WHERE `link` = ?";
//podgotovit zapros
$checklink = pdodb()->prepare($checklinksql);



$count = 0;
foreach ($items as $item) {
    try {
        //print_r('<pre>'.(__FILE__).':'.(__LINE__).'<hr />'.print_r( $item, true).'</pre>');
        $checklink->execute([
           $item->get_link(),
        ]);
        $checklink->rowCount();
        print_r('<pre>'.(__FILE__).':'.(__LINE__).'<hr />'.print_r( $checklink->rowCount(), true).'</pre>');
        if ($checklink->rowCount() == 0){
            $stmt->execute([
                $item->get_title(),
                $item->get_link(),
                $item->get_description(),
                $item->get_date("Y-m-d H:i:s"),
            ]);

        }



    } catch (PDOException $e) {
        echo ' failed: ' . $e->getMessage();
    }

}$count++;
$log->info($count."dobavil");
?>

