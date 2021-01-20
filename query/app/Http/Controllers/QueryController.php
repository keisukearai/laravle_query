<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class QueryController extends Controller {

    public function index() {
        // $res = DB::select('select * from user where id = ?', [1]);
        $res = DB::select('select p.p_id, p.p_name, u.name from product p left outer join user u on p.id = u.id order by p.p_id ', []);

        // dd($res);
        return view('index')->with('res', $res);
    }
}
