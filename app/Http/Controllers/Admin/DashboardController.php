<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class DashboardController extends Controller {

    public function index() {
        $this->data['menu'] = 'dashboard';
        return view('admin/pages/dashboard', $this->data);
    }
}
