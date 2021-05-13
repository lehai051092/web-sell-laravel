<?php

namespace App\Http\Controllers\Backend\Index;

use App\Http\Services\Backend\Index\UserAdminServiceInterface;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\View\View;

class IndexController extends Controller
{
    /**
     * @var UserAdminServiceInterface
     */
    protected $userAdminService;

    /**
     * IndexController constructor.
     * @param UserAdminServiceInterface $userAdminService
     */
    public function __construct(UserAdminServiceInterface $userAdminService)
    {
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
        return $this->userAdminService->checkUser($request);
    }

    /**
     * @return RedirectResponse
     */
    public function logoutDashboard(): RedirectResponse
    {
        return $this->userAdminService->logOut();
    }
}
