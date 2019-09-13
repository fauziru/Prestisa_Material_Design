<?php
namespace App\Http\Controllers;
use App\Http\Middleware;
use Illuminate\Http\Request;
use Redirect,Response,DB,Config;
use App\modelcrud;
use App\modelorder;
use App\modelpurchase_order;
//use Doku;

class paymentController extends Controller
{

    public function index(){
        return view('pages.tespayment');
    }

    public function virtual_account_bri(Reques $req){

        date_default_timezone_set('Asia/Jakarta');
        Doku_Initiate::$sharedKey = //<Put Your Shared Key Here>;
        Doku_Initiate::$mallId = //<Put Your Merchant Code Here>;

        $params = array('amount' => $_POST['amount'], 
                        'invoice' => $_POST['trans_id'],
                         'currency' => $_POST['currency']);
        
        $words = Doku_Library::doCreateWords($params);
        
        $customer = array('name' => 'TEST NAME',
                          'data_phone' => '08121111111',
                          'data_email' => 'test@test.com', 
                          'data_address' => 'bojong gede #1 08/01');

        $dataPayment = array('req_mall_id' => $_POST['mall_id'], 
                             'req_chain_merchant' => $_POST['chain_merchant'],
                             'req_amount' => $params['amount'],
                             'req_words' => $words,
                             'req_trans_id_merchant' => $_POST['trans_id'],
                             'req_purchase_amount' => $params['amount'],
                             'req_request_date_time' => date('YmdHis'),
                             'req_session_id' => sha1(date('YmdHis')),
                             'req_email' => $customer['data_email'],
                             'req_name' => $customer['name'],
                             'req_basket' => 'sayur,10000.00,1,10000.00;',
                             'req_address' => 'Jl Kembang 1 No 5 Cilandak Jakarta',
                             'req_mobile_phone' => '081987987999',
                             'req_expiry_time' => '360');

        $response = Doku_Api::doGeneratePaycode($dataPayment);
        if($response->res_response_code == '0000'){
                return 'echo <p>GENERATE SUCCESS -- </p>';
        }else{
                return 'echo <p>GENERATE FAILED -- </p>';
        }
    }
}
