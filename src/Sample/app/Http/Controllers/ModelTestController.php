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

    public function edit(Request $request, $id)
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

        return redirect("/");
    }

    public function update(Request $request)
    {
        //更新データ設定
        $updateData = [
            'name' => $request->user_name,
            'email' => $request->user_email,
        ];

        //データ更新
        HassyadaiUser::where('id', $request->id)
            ->update($updateData);

        return redirect("/");
    }

    public function delete(Request $request)
    {
        //データ削除
        HassyadaiUser::destroy($request->delId);

        return redirect("/");
    }

}
