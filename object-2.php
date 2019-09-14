<?php
    $title = 'A Programming Question';
    $question = 'I\'m having trouble displaying a JavaScript alert.';
    $description = 'I think I\'m using the correct function, but I can\'t figure out what\'s wrong. Could you point me in the right direction?';
    $code = '&lt;ul&gt;
        item 1
        item 2
        item 3
    &lt;/ul&gt;';
    $date = 'January 15, 2018';
?>

<!DOCTYPE html>
<html>
    <head>
        <title><?php echo $title; ?></title>
    </head>
    <body>


        <h1><?php echo $question; ?></h1>
        <p><?php echo $description; ?></p>
        <pre>
            <?php echo $code; ?>
        </pre>
        <p>Question Date: <?php echo $date; ?></p>
    </body>
</html>