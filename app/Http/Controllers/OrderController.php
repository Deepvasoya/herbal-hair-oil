<?php

namespace App\Http\Controllers;

use App\OrderDetail;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    //
    public function userorder(Request $request)
    {
        $OrderDetail = new OrderDetail;
        $OrderDetail->amount = $request->lead_value;
        $OrderDetail->name = $request->name;
        $OrderDetail->contact_number = $request->phonenumber;
        $OrderDetail->address = $request->address;
        $OrderDetail->pincode = $request->zip;
        $OrderDetail->save();
    
        return redirect()->back();
    }
}
