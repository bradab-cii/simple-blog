<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\UsersDataTable;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
  public function index(UsersDataTable $datatable)
  {
    return $datatable->render('admin.user.index');
  }
}
