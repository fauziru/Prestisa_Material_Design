<?php

namespace App\Http\Controllers;
use App\Http\Middleware;
use Illuminate\Http\Request;
use Redirect,Response,DB,Config;
use App\modelcrud;
use App\modelorder;
use App\modelpurchase_order;
use Datatables;

class TabelOrderController extends Controller
{
    public function getData(){
        $order = DB::table('order')->where('customer_id','=',  auth()->user()->id)->select('*');
        return datatables()->of($order)
        ->editColumn('updated_at', 'edit.datatables.tabelOrder.updated_at')
        ->addColumn('action', 'edit.datatables.tabelPurchase.action')
        ->rawColumns(['updated_at','action'])
        ->addIndexColumn()
        ->toJson();

    }
}