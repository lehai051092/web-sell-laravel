<?php
declare(strict_types=1);

namespace App\Http\Services\Backend\Index;

interface UserAdminServiceInterface
{
    function getData();

    function checkUser($request);

    function logOut();
}
