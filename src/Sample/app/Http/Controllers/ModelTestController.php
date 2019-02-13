<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\HassyadaiUser;

class ModelTestController extends Controller
{
    public function index(Request $req)
    {
        $userData = HassyadaiUser::all();
        //
        // dd($userData);

        return view('users/index', ['userData' => $userData]);
    }

    public function create()
    {
        return view('users/create');
    }

    public function edit($id)
    {
        //dd($id);

        $user = HassyadaiUser::findOrFail($id);
        // dd($user);

        // $user =  HassyadaiUser::where('id', $id)->get();
        // dd($user);


        // return view('users/edit');
        return view('users/edit', ['user' => $user]);
    }


    public function store(Request $request)
    {
        //データを登録する(create)
        $hassyadaiUser = new HassyadaiUser;
        $hassyadaiUser->name = $request->user_name;
        $hassyadaiUser->email = $request->user_email;
        $hassyadaiUser->save();

        return redirect("/");

        // $params = $request->validate([
        //     'name' => 'required|max:50',
        //     'email' => 'required|max:2000',
        // ]);
        //
        // User::create($params);

    }

    public function update(Request $request)
    {
        // dd("ここはupdate");

        //更新データ設定
        $updateData = [
            'name' => $request->user_name,
            'email' => $request->user_email,
        ];

        // dd(HassyadaiUser::where('id', $request->id)->get());

        // // これだと全ユーザーのデータが更新される
        // HassyadaiUser::all()->update($updateData);


        //データ更新
        HassyadaiUser::where('id', $request->id)
            ->update($updateData);

        return redirect("/");
    }

    public function delete(Request $request)
    {
        // dd($request->id);

        //データ削除
        HassyadaiUser::destroy($request->id);

        return redirect("/");
    }

    public function getDelete($id)
    {
        //データ削除
        HassyadaiUser::destroy($id);

        return redirect("/");
    }

    public function copy(Request $req)
    {
        // dd($req->id);

        $data = HassyadaiUser::find($req->id)->replicate();
        $data->name = $data->name . '_copy';
        $data->email = $data->email . '_copy';
        unset($data->created_at);
        unset($data->updated_at);
        $data->save();

        return redirect("/");

        //
        // $userData = HassyadaiUser::all();
        // //
        // // dd($userData);
        //
        // return view('users/index', ['userData' => $userData]);
    }


}
