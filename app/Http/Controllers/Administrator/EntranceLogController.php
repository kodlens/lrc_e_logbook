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


        $startDate = date('Y-m-d', strtotime($req->start));
        $endDate = date('Y-m-d', strtotime($req->end));



        $data = EntranceLog::where('fullname', 'like', $req->fullname . '%')
            ->whereBetween('date_entry', [$startDate, $endDate])
            ->orderBy($sort[0], $sort[1])
            ->paginate($req->perpage);
        return $data;
    }


    public function printPreview(Request $req){

        $startDate = date('Y-m-d', strtotime($req->start));
        $endDate = date('Y-m-d', strtotime($req->end));

        $data = EntranceLog::where('fullname', 'like', $req->fullname . '%')
            ->whereBetween('date_entry', [$startDate, $endDate])
            ->orderBy('date_entry', 'desc')
            ->paginate($req->perpage);

        return view('administrator.entrance-logs-print-preview')
            ->with('data', $data);
    }
}
