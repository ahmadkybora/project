<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Invoice;
use App\Order;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function invoices()
    {
        $invoices = Invoice::paginate(10);
        return view('admin.invoices.invoices')->with('invoices', $invoices);
    }

    public function invoicesPaid()
    {
        $invoices = Invoice::where('status', 0)->get();
        return view('admin.invoices.invoices')->with('invoices', $invoices);
    }

    public function invoicesUnpaid()
    {
        $invoices = Invoice::where('status', 1)->get();
        return view('admin.invoices.invoices')->with('invoices', $invoices);
    }

    public function ShowInvoice($id)
    {
        $invoice = Invoice::find($id);
        return view('admin.invoices.showInvoice')->with('invoice', $invoice);
    }

    public function orders()
    {
        $orders = Order::paginate(10);
        return view('admin.invoices.workers')->with('orders', $orders);
    }

    public function ordersPosted()
    {
        $orders = Order::where('status', 0)->get();
        return view('admin.invoices.workers')->with('orders', $orders);
    }

    public function ordersUnposted()
    {
        $orders = Order::where('status', 1)->get();
        return view('admin.invoices.workers')->with('orders', $orders);
    }

    public function showOrder($id)
    {
        $order = Order::find($id);
        return view('admin.invoices.showWork')->with('order', $order);
    }
}
