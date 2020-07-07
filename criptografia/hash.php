<!DOCTYPE html>
<html>

<body>
    
<?php

    echo "<center><hr><b>md5</b><br>";
    echo "<p>Oi: ";
    echo md5('oi');
    echo "</p>";
    echo "<p>Pneumonoultramicroscopicsilicovolcanoconiosis: ";
    echo md5('Pneumonoultramicroscopicsilicovolcanoconiosis');
    echo "</p>";
    
    echo "<hr><b>sha1</b><br>";

    echo "<p>Oi: ";
    echo sha1('oi');
    echo "</p>";
    
    echo "<p>Pneumonoultramicroscopicsilicovolcanoconiosis: ";
    echo sha1('Pneumonoultramicroscopicsilicovolcanoconiosis');
    echo "</p><hr>";


    echo "<b>Password Hash</b><br>";
    echo "<p>Oi: ";
    echo password_hash('oi', PASSWORD_DEFAULT);
    echo "</p>";
    
    echo "<p>Pneumonoultramicroscopicsilicovolcanoconiosis: ";
    echo password_hash('Pneumonoultramicroscopicsilicovolcanoconiosis', PASSWORD_DEFAULT);
    echo "</p> <hr>";


    echo "</center>";
?>


</body>
</html>
