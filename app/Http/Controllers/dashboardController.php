<?php

namespace App\Http\Controllers;
use App\Http\Middleware;
use Illuminate\Http\Request;
use Redirect,Response,DB,Config;
use App\modelcrud;
use App\modelorder;
use App\modelpurchase_order;
use Datatables;

class dashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\View\View
     */
    public function index(){
        return view('pages.dashboard');
    }


    public function menuBar()
    {
        
        $labels = ['Piutang','Riwayat Order','Order','Profile','Pengaturan','Lainya'];
        $ikons = ['Ecommerce-07','Ecommerce-28','Ecommerce-26','Ecommerce-30','Ecommerce-02','Ecommerce-15'];
        $links = ['piutang','riwayat','order','profile.edit','pengaturan','home'];
        $imb = [];
        $counter = 0;
        foreach ($labels as $label)
        {
            $imb[] = [
                'mt' => $label,
                'mikon' => $ikons[$counter],
                'mlink' => $links[$counter]
            ];
            $counter = $counter + 1;
        }
        $imb = json_encode($imb);
        //$data = DB::table('order')->where('customer_id','=',  auth()->user()->id)->join('purchase_order','order.id','=','purchase_order.order_id')->select('purchase_order.*','order.order_number')->get();
        $view = view('components.menuBar')->with('imb', json_decode($imb, true))->render();
        return response()->json(['html'=>$view]);
        //return view('components.menuBar')->with('imb', json_decode($imb, true));
            //return response()->json($data2);
            //return $imb;
            //return response()->json($imb);
    }
}
