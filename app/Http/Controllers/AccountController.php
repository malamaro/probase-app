<?php

namespace App\Http\Controllers;

use App\Models\Account;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function create(Request $request)
    {
        return 'Hello World';
    }

    public function delete(Request $request)
    {
        # code...
    }

    public function update(Request $request)
    {
        # code...
    }

    public function balance($id)
    {
        $account = Account::find($id);

        return response()->json($account);
    }
}
