<?php

declare(strict_types=1);

namespace App\Repositories\Backend\Interfaces;

interface UsersAdminRepositoryInterface
{
    function getData();

    function isUser($email, $password);
}
