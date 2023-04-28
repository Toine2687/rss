<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../public/assets/css/style.css">
</head>

<body>
    <!-- <div class="thirdContainer"> -->
    <div class="fullWidthContainer">
        <?php
        $testxml = simplexml_load_file('https://www.01net.com/actualites/feed/');
        foreach ($testxml->channel->item as $item) {
            $newDate = new DateTime($item->pubDate);
            $fmtDate = new IntlDateFormatter('fr_FR');
            $fmtDate->setPattern('EEEE F LLLL yyyy à HH:mm');
            echo '
                <div class="article">
                    <h2><a href="' . $item->link . '">' . $item->title . '</a></h2>
                    <p class="date">' . $fmtDate->format($newDate) . '</p>
                    <p class="description">' . $item->description . '</p>
                    <p class="link"><i><a href="' . $item->link . '">Lire la suite...</a></i></p>
                </div>';
        } ?>
    </div>
</body>

</html>