<?php
declare(strict_types=1);

namespace App\Repositories\Backend\Eloquent;

use App\Model\Backend\UserAdmin;
use App\Repositories\Backend\Interfaces\UsersAdminRepositoryInterface;
use Illuminate\Database\Query\Builder;

class UsersAdminRepository implements UsersAdminRepositoryInterface
{
    /**
     * @var UserAdmin
     */
    protected $userAdmin;

    /**
     * UserAdminRepositoryEloquent constructor.
     * @param UserAdmin $userAdmin
     */
    public function __construct(
        UserAdmin $userAdmin
    ) {
        $this->userAdmin = $userAdmin;
    }

    /**
     * @return UsersAdminRepository[]|\Illuminate\Database\Eloquent\Collection
     */
    function getData()
    {
        return $this->userAdmin->all();
    }

    /**
     * @param $email
     * @param $password
     * @return \Illuminate\Database\Eloquent\Model|Builder|object|null
     */
    function isUser($email, $password)
    {
        return $this->userAdmin->where('admin_email', $email)->where('admin_password', $password)->first();
    }
}
