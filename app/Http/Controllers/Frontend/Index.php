<?php
declare(strict_types=1);

namespace App\Http\Controllers\Frontend;

use Illuminate\Routing\Controller as BaseController;

class Index extends BaseController
{
    public function index() {
        return view('frontend.index');
    }
}
