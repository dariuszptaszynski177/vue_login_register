<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function getLoggedUser(Request $request)
    {
        try {
            return User::GetLogged($request);
        } catch (Exception $e) {
            $error = Tools::GetErrorDetails($e);
            return response()->json( $error->json_array, $error->code );
        }
    }
}
