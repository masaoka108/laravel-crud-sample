<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\HassyadaiUser;

class ModelTestController extends Controller
{
    public function index(Request $req)
    {
        $userData = HassyadaiUser::all();

        return view('users/index', ['userData' => $userData]);
    }

    public function create()
    {
        return view('users/create');
    }

    public function edit($id)
    {

        $user = HassyadaiUser::findOrFail($id);;

        return view('users/edit', ['user' => $user]);
    }


    public function store(Request $request)
    {
        //データを登録する(create)
        $hassyadaiUser = new HassyadaiUser;
        $hassyadaiUser->name = $request->user_name;
        $hassyadaiUser->email = $request->user_email;
        // $hassyadaiUser->del_flg = 0;
        $hassyadaiUser->save();

        return redirect("/model/test");
    }

    public function update(Request $request)
    {
        //データ更新
        HassyadaiUser::where('id', $request->id)
            ->update([
                'name' => $request->user_name,
                'email' => $request->user_email,
            ]);

        return redirect("/");
    }

}
