<?php
exec('cd /home/azureuser/src/test-repo; bash /home/azureuser/src/test-repo/build.sh', $ret);
var_dump($ret);
