<?php
namespace app\Controller;
require_once dirname(__FILE__,2) .'/models/cnxDb.php';

class SecurityController{
    
function registrationAction()
{
    require_once dirname(__FILE__, 3) . '/views/registration/register.php';
}
function loginAction()
{
    require_once dirname(__FILE__, 3) . '/views/security/login.php';
}
}