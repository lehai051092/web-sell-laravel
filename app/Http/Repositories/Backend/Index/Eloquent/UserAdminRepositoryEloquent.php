<?php
declare(strict_types=1);

namespace App\Http\Repositories\Backend\Index\Eloquent;

use App\Http\Repositories\Backend\Index\UserAdminRepositoryInterface;
use App\Model\Backend\UserAdmin;
use Illuminate\Database\Query\Builder;
use Illuminate\Support\Facades\DB;

class UserAdminRepositoryEloquent implements UserAdminRepositoryInterface
{
    /**
     * @var UserAdmin
     */
    protected $userAdmin;

    /**
     * UserAdminRepositoryEloquent constructor.
     * @param UserAdmin $userAdmin
     */
    public function __construct(UserAdmin $userAdmin)
    {
        $this->userAdmin = $userAdmin;
    }

    /**
     * @return UserAdmin[]|\Illuminate\Database\Eloquent\Collection
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
        return DB::table('users_admin')
            ->where('admin_email', $email)
            ->where('admin_password', $password)->first();
    }
}
