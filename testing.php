<? php

$ echo "<?php phpinfo(); ?>" | sudo tee /var/www/test.php
$ sudo chown www-data:www-data /var/www/test.php
$ sudo chmod 755 /var/www/test.php

?>
