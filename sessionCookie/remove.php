<?php

    var_dump($_COOKIE);

    echo "I will remove the cookie";
    # to remove cookie
    setcookie("name", "", time()-3600, "/", "", 0);
    var_dump($_COOKIE);
