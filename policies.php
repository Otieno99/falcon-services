<?php 
require_once "header.html";
?>

<h3 class="abt">Privacy policies</h3>
<rec>
                <?php
                require_once "include/privacy.inc.php";

                if (empty($results)){
                    echo "<div>";
                    echo "UNABLE TO LOAD DOCUMENT!";
                    echo "<div>";

                } else {
                    echo "<div>";
                    echo $results;
                echo "</div>";

                }

                ?>
</rec>

