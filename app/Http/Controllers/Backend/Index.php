<?php

namespace App\Http\Controllers\Backend;

use App\Services\Backend\Interfaces\UsersAdminServiceInterface;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\View\View;

class Index extends Controller
{
    /**
     * @var UsersAdminServiceInterface
     */
    protected $userAdminService;

    /**
     * IndexController constructor.
     * @param UsersAdminServiceInterface $userAdminService
     */
    public function __construct(
        UsersAdminServiceInterface $userAdminService
    ) {
        $this->userAdminService = $userAdminService;
    }

    /**
     * @return View
     */
    public function index(): View
    {
        return view('admin.index');
    }

    /**
     * @return View
     */
    public function showDashboard(): View
    {
        return view('admin.pages.dashboard');
    }

    /**
     * @param Request $request
     * @return RedirectResponse
     */
    public function loginDashBoard(Request $request): RedirectResponse
    {
        return $this->userAdminService->checkUserLogin($request);
    }

    /**
     * @return RedirectResponse
     */
    public function logoutDashboard(): RedirectResponse
    {
        return $this->userAdminService->logOut();
    }
}
