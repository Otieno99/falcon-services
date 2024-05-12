<?php 
require_once "header.html";
?>

<h3 class="abt">Terms and conditions</h3>
<rec>
                <?php
                require_once "include/privacy.inc.php";

                if (empty($results)){
                    echo "<div>";
                    echo "UNABLE TO LOAD DOCUMENT!";
                    echo "<div>";

                } else {
                    foreach($results as $row);
                    echo "<div>";
                    echo "$row";
                echo "</div>";

                }

                ?>
</rec>

<br>
<br>
