<?php

namespace App\Http\Controllers;

use App\Models\Campeign;
use Illuminate\Http\Request;

class CampeignController extends Controller
{
    public function _construct(){
        $this->middleware(["auth"]);
     }
    public function index(){
        $posts = Campeign::paginate(5);
        return view('campeigns.campeign', ['posts'=>$posts]);
    }

    public function addcampeign(){
        return view('campeigns.addcampeign');
    }
    
    public function store(Request $request){
        Campeign::create($request->all());
        return redirect('campeign');
    }
    

    public function viewcampeign($posts)
    
    {   $user = Campeign::find($posts);

        // dd($user);
        return view('campeigns.viewcampeign', ['posts'=>$user]);
    }

    public function pay(Request $request){
        // dd($request);
       $myPayment = new PayUnit(
        "f41b310f22617387d0c01f9f461b91dbf5bb54bd",
        "47c6ba11-3d5c-46af-ba29-79199c35fca0",
        "payunit_sand_TyHmv7QIe",
        "localhost://5000/campeign",
        "notifyUrl",
        "test",
        "You are about to pay for this transaction",
        "purchaseRef",
        "FCFA",
        "Yunweneric"
    );

    $myPayment->makePayment("$request->amount");
       
    }
}
