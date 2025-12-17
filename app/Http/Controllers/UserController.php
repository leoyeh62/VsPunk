<?php

namespace App\Http\Controllers;

use App\Models\User;

class UserController extends Controller
{
    public function show($id)
    {
        $user = User::with([
            'mesArticles',
            'likes.rythme',
            'suivis',
            'suiveurs'
        ])->findOrFail($id);

        return view('user.show', compact('user'));
    }


}
