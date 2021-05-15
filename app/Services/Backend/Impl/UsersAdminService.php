<?php
declare(strict_types=1);

namespace App\Services\Backend\Impl;

use App\Repositories\Backend\Interfaces\UsersAdminRepositoryInterface;
use App\Services\Backend\Interfaces\UsersAdminServiceInterface;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Session;

class UsersAdminService implements UsersAdminServiceInterface
{
    /**
     * @var UsersAdminRepositoryInterface
     */
    protected $userAdminRepository;

    /**
     * UserAdminServiceImpl constructor.
     * @param UsersAdminRepositoryInterface $userAdminRepository
     */
    public function __construct(
        UsersAdminRepositoryInterface $userAdminRepository
    ) {
        $this->userAdminRepository = $userAdminRepository;
    }

    /**
     * @return mixed
     */
    function getData()
    {
        return $this->userAdminRepository->getData();
    }

    /**
     * @param $request
     * @return RedirectResponse
     */
    function checkUserLogin($request): RedirectResponse
    {
        $user = $this->userAdminRepository->isUser($request->admin_email, md5($request->admin_password));

        if ($user) {
            Session::put('admin_name', $user->admin_name);
            Session::put('admin_id', $user->admin_id);

            return redirect()->route('backend.dashboard');
        } else {
            Session::put('message', "Re-enter email and password!!! Something went wrong.");
            return redirect()->route('backend.index');
        }
    }


    /**
     * @return RedirectResponse
     */
    function logOut(): RedirectResponse
    {
        Session::put('admin_name', null);
        Session::put('admin_id', null);
        return redirect()->route('backend.index');
    }
}
