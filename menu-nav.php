<?php

$pages = [
    'home' => $_CONFIG['url'],
    'journal' => $_CONFIG['url'] . 'journal',
    'tris' =>  $_CONFIG['url'] . 'tris'
];

?>

<nav>
    <ul>
        <?php
            foreach ($pages as $name => $link) {
                echo '<li> <a href="'.$link.'">'.$name.'</a></li>';
            }
        ?>
    </ul>
</nav>