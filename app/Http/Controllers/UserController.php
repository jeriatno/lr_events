<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\User;
use App\Events\UserNewEvent;
use Illuminate\Http\Request;
use App\Transformers\UserTransformer;

class UserController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function store(Request $request)
    {
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->save();

        //Memanggil Event
        event(new UserNewEvent($user));

        return redirect()->back();
    }
}
