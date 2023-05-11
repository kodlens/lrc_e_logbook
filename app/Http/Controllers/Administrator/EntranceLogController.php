<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\EntranceLog;

class EntranceLogController extends Controller
{
    //
    public function index(){
        return view('administrator.entrance-log');
    }

    public function getData(Request $req){
        $sort = explode('.', $req->sort_by);

        $data = EntranceLog::where('fullname', 'like', $req->fullname . '%')
            ->orderBy($sort[0], $sort[1])
            ->paginate($req->perpage);

        return $data;
    }
}
