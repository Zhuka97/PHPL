<?php

setcookie('test', 'My Value', time()+3600);
echo $_COOKIE['test'];

