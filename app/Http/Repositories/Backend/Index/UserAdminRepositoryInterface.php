<?php

declare(strict_types=1);

namespace App\Http\Repositories\Backend\Index;

interface UserAdminRepositoryInterface
{
    function getData();

    function isUser($email, $password);
}
