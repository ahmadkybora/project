<?php

namespace App\Http\Controllers\api;

use App\Address;
use App\Http\Controllers\Controller;
use App\invoice;
use App\order;
use App\station;
use App\User;
use App\workerstation;
use App\Workstation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class orderController extends Controller
{
    public function register_order(Request $request)
    {
        $seed = str_split('0123456789'); // and any other characters
        shuffle($seed); // probably optional since array_is randomized; this may be redundant
        $rand = '';
        foreach (array_rand($seed, 3) as $k) $rand .= $seed[$k];

        $v = Verta();
        $date = $v->format('Y/m/d');
        $time = $v->format('H:i');
        $address = new Address();
        $address = new Address();
        $address->u_id = Auth::id();
        $address->name = "شهر من";
        $address->lat = $request->input("lat");
        $address->lng = $request->input("lng");
        $address->address = $request->input("address");
        $address->save();
        foreach ($request->input("workers") as $wid) {
            $workerstation = Workstation::where("w_id", $wid)->first();
            $order = new order();
            $order->w_id = $wid;
            $order->e_id = Auth::id();
            $order->i_id = 0;
            $order->s_id = $workerstation->s_id;
            $order->a_id = $address->id;
            $order->price = 1234;
            $order->date = $date;
            $order->startTime = $time;
            $order->endTime = $time;
            $order->status = 0;
            $order->r_id = 0;
            $order->save();
            Workstation::where('w_id', $wid)
                ->update(['status' => 2]); // suspend
        }
        $workers = Order::with("worker")->where("i_id", 0)->where("e_id", Auth::id())->get();
        return [
            'success' => true,
            'message' => "با موفقیت ثبت شد",
            'data' => $workers
        ];
    }

    public function order_delete_worker(Request $request)
    {
        $o = order::where("id", $request->input("id"))->first();
        $order = order::where("id", $request->input("id"));
        $order->delete();

        workerstation::where('u_id', $o->w_id)
            ->update(['status' => 1]); // active
        return [
            'success' => true,
            'message' => "با موفقیت حذف شد",
            'data' => ""
        ];
    }

    public function generateInvoice()
    {
        $seed = str_split('0123456789'); // and any other characters
        shuffle($seed); // probably optional since array_is randomized; this may be redundant
        $rand = '';
        foreach (array_rand($seed, 3) as $k) $rand .= $seed[$k];

        $v = Verta();
        $date = $v->format('Y/m/d');
        $time = $v->format('H:i');

        $invoice = new Invoice();
        $invoice->e_id = Auth::id();
        $invoice->code = "please wait for generate";
        $invoice->date = $date;
        $invoice->time = $time;
        $invoice->status = 0;
        $invoice->save();

        $i = Invoice::find($invoice->id);
        $i->code = $invoice->id . Auth::id() . $rand;
        $i->save();

        $i = Invoice::find($invoice->id);


        Order::where('e_id', Auth::id())->where("i_id", 0)
            ->update(['i_id' => $i->id]);

        $orders = Order::where("e_id", Auth::id())->get();
        return [
            'success' => true,
            'message' => "با موفقیت ایجاد شد",
            'data' => ["orders" => $orders, "invoice" => $i]
        ];

    }

    public function getInvoices()
    {
        $invoices = Invoice::where("e_id", Auth::id())->get();
        return [
            'success' => true,
            'message' => "با موفقیت ایجاد شد",
            'data' => $invoices
        ];
    }

    public function getWorkersInvoice(Request $request)
    {
        $workers = Order::with("worker")->where("i_id", $request->input("id"))->get();
        return [
            'success' => true,
            'message' => "با موفقیت ایجاد شد",
            'data' => $workers
        ];
    }
}
