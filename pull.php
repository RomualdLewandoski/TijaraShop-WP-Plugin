<?php
echo shell_exec("cd /opt/lampp/htdocs/wp-content/plugins/TijaraShop && /usr/bin/git fetch --all && /usr/bin/git reset --hard origin/master && /usr/bin/git pull 2>&1 && chmod -R 777 /opt/lampp/htdocs");
