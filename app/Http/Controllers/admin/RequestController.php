<?php

namespace App\Http\Controllers\admin;

use App\Order;
use App\Request;
use App\Http\Controllers\Controller;

//use Illuminate\Http\Request;

class RequestController extends Controller
{
    public function requests()
    {
        $requests = Request::paginate(10);
        return view('admin.invoices.requests')->with('requests', $requests);
    }

    public function request()
    {
        $requests = Request::where('status', 0)->get();
        return view('admin.invoices.requests')->with('requests', $requests);
    }

    public function noRequest()
    {
        $requests = Request::where('status', 1)->get();
        return view('admin.invoices.requests')->with('requests', $requests);
    }

    public function requestWorker($id)
    {
        $req = Request::find($id);
        $orders = Order::with('request')->where('r_id', $id)->get();
        return view('admin.invoices.requestWorker')->with('orders', $orders)->with('req', $req);
    }

    public function totalPrice($id)
    {
        $req = Request::find($id);
        $req->qty = request('qty');
        $req->totalPrice = request('totalPrice');
        $req->save();

        return redirect()->back();
    }
}
