<?php

require_once dirname(__FILE__,2) .'/models/cnxDb.php';

function pageAccueil()
{
    require_once dirname(__FILE__,3) . '/views/home.php';
}