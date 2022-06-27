<?php

namespace App\Http\Controllers;

use App\Models\Phone;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\User;

class PhoneController extends Controller
{
    public function showAsPhone()
    {
        return view ('addPhone');
    }

    public function addPhone (Request $request)
    {
        $phone = Phone::create (
            [
                'number' => $request->number,
                'user_id' => auth()->user()->id
            ]);
            return view ('showPhone', ['phone'=> $phone]);
    }
    public function showPhone (Request $request)
    {
        // dd(auth()->user()->id);

        $user = auth()->user();
        // dd($user->phone);
            return view ('showPhone', ['phone'=>$user->phone]);
    }
}
