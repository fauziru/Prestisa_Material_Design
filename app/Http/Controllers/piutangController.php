<?php

namespace App\Http\Controllers;
use App\Http\Middleware;
use Illuminate\Http\Request;
use Redirect,Response,DB,Config;
use App\modelcrud;
use App\modelorder;
use App\modelpurchase_order;
use Datatables;
class piutangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        return view('pages.piutang');  //
    }

    //ajax components
    public function card_C(Request $req){
        $data_pu = DB::table('order')->where('customer_id','=',  auth()->user()->id)->paginate(6);
        if ($req->ajax()) {
           $view = view('components.card_piutang', compact('data_pu'))->render();
           return response()->json(['html'=>$view]);
        }
    }

    public function detail($id){
        $data_pu = DB::table('order')->where('id','=', $id)->get();
        return response()->json($data_pu);
    }
}