<?php

namespace App\Http\Controllers;
use App\Http\Middleware;
use Illuminate\Http\Request;
use Redirect,Response,DB,Config;
use App\modelcrud;
use App\modelorder;
use App\modelpurchase_order;
use Datatables;

class TabelPurchaseController extends Controller
{
    public function getData(){
        $purchase_order = DB::table('order')->where('customer_id','=',  auth()->user()->id)->join('purchase_order','order.id','=','purchase_order.order_id')->select('purchase_order.*','order.order_number')->get();
        
        return datatables()->of($purchase_order)
        ->editColumn('order_number', 'edit.datatables.tabelPurchase.order_number')
        ->addColumn('action', 'edit.datatables.tabelPurchase.action')
        ->rawColumns(['order_number','action'])
        ->addIndexColumn()
        ->toJson();

    }
}