<?php

namespace App\Http\Controllers\Backend;

use App\OrderDetail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;

class LeadController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index(Request $request)
    {
        $data = $request->all();

        $query = new OrderDetail;
        if($request->request_date && $request->request_date != ""){
            $date = date('Y-m-d',strtotime($request->request_date));
            $query = $query->whereRaw('DATE_FORMAT(created_at,"%Y-%m-%d") = "'.$date.'"');
        }
        $user = $query->orderby('id', 'DESC')->simplePaginate(50)->appends($data);
        return view('Backend.leads', compact('user','data'));
    }

    public function leadsdelete($id)
    {
        $order = OrderDetail::find($id);
        
        if(empty($order)){
            Session::flash('error'," Record not found! ");  
            return;
        }
        $order->delete();
        Session::flash('success'," Lead delete successfully ");  
        return;
    }
}
