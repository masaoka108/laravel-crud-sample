<?php
namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class HassyadaiUser extends Model
{
    //これは自動的にモデルの複数形になるので実際、指定しなくてもOKではある。
    protected $table = 'hassyadai_users';

    //保存する時に値を用意しなくていい項目
    protected $guarded = array('id');

    //updated_at,created_atを無効化する
    // public $timestamps = false;

}
