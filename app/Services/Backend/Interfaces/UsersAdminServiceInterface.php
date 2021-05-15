<?php
declare(strict_types=1);

namespace App\Services\Backend\Interfaces;

interface UsersAdminServiceInterface
{
    function getData();

    function checkUserLogin($request);

    function logOut();
}
