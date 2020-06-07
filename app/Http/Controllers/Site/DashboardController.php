<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;

class DashboardController extends Controller {

    public function index() {
        $this->data['menu'] = 'dashboard';
        return view('site/pages/home', $this->data);
    }
}
