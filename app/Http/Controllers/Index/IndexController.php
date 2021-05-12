<?php
declare(strict_types=1);

namespace App\Http\Controllers\Index;

use Illuminate\Routing\Controller as BaseController;

class IndexController extends BaseController
{
    public function index() {
        return view('frontend.index');
    }
}
