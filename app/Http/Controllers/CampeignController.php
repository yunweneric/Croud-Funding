<?php

namespace App\Http\Controllers;

use App\Models\Campeign;
use App\Models\Donation;
use Illuminate\Http\Request;
use App\Models\PayUnit;

class CampeignController extends Controller
{
    public function _construct(){
        $this->middleware(["auth"]);
     }
    public function index(){
        $posts = Campeign::paginate(5);
        return view('campeigns.campeign', ['posts'=>$posts]);
    }
    public function dash(){
        $posts = Campeign::paginate(5);
        $donations = Donation::paginate(5);
        return view('dashboard', ['posts'=>$posts, 'donations'=>$donations]);
    }

    public function addcampeign(){
        return view('campeigns.addcampeign');
    }
    
    public function store(Request $request){
        Campeign::create($request->all());
        return redirect('campeign');
    }
    public function thanks(Request $request){
        return view('thanks');
    }
    

    public function viewcampeign($posts)
    
    {   $user = Campeign::find($posts);
        return view('campeigns.viewcampeign', ['posts'=>$user]);
    }
   
    public function pay(Request $request){
        // $donation = Campeign::find($id);
        // Donation::create([
        //     'amount' => $request->amount,
        //     'body' => $donation->body,
        //     'donatorname' => $donation->donatorname,
        //     'cname' =>$donation->cname,
        // ]);
       $myPayment = new PayUnit(
        "f41b310f22617387d0c01f9f461b91dbf5bb54bd",
        "47c6ba11-3d5c-46af-ba29-79199c35fca0",
        "payunit_sand_TyHmv7QIe",
        "http://127.0.0.1:8000/thanks",
        "",
        "test",
        "description",
        "",
        "XAF",
        "Yunweneric"
        );
        $myPayment->makePayment("$request->amount");
    }
}
