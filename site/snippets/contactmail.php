You have received a new message, here are the details:
----
Name: <?= $fullName ?>
Email: <?= $emailAddress ?>
City of residence: <?= $cityOfResidence ?>
Contact number: <?= $contactNumber ?>
Message: <?= $message ?>



<?php
    echo '<a href="' . htmlspecialchars("/siguientepagina.php?etapa=23&datos=") . '">'."\n";
?>