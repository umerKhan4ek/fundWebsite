<?php

namespace App\Http\Controllers;
use App\Models\Fund;
use App\Models\subscriber;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    function homepage(){
        $funds=Fund::all();
        return view('welcome')
        ->with('funds',$funds);
    }
    function fundpage($id){

        $SingleFund = Fund::find($id);
        return view('fundpage',compact('SingleFund'));
    }
    function index(){

        return view('admin.adminindex');
    }

    // function for extra inputs 
    public function editfund(Request $request, $id)
    {
        $fund = Fund::find($id);
        return view('admin.edit')->with('SingleFund',$fund);
    }

    public function storeEditableFunds(Request $request,$id)
    {
        //  dd($request->all());

        
        $this->validate($request,[
            'equity_sector' => 'required',
            'international_equilities' => 'required',
            'real_estate' => 'required',
            'commodities' => 'required',
            'cash_usd' => 'required',
            'north_america' => 'required',
            'asia' => 'required',
            'europe' => 'required',
            'ocinia' => 'required',
            'south_america' => 'required',
            'africa' => 'required',
            'small_cap' => 'required',
            'health_care' => 'required',
            'consumer_discretionary' => 'required',
            'asia_ex_japan' => 'required',
            'china_tech' => 'required',
            'emerging_market' => 'required',
            'global_ex_us__reits' => 'required',
            'precious_metals_gold' => 'required',
            '_cash' => 'required',
            'Image' => 'required'
            ]);

            $fund = Fund::find($id);

            // Image

            if( $request->hasFile('Image')){
                $file=$request->file('Image');
                $destinationPath = 'images/';
                $filename= time().$file->getClientOriginalName();
                $file->move($destinationPath,$filename);
            }

            $fund->equity_sector = $request['equity_sector'];
            $fund->international_equilities = $request['international_equilities'];
            $fund->real_estate = $request['real_estate'];
            $fund->commodities = $request['commodities'];
            $fund->cash_usd = $request['cash_usd'];
            $fund->north_america = $request['north_america'];
            $fund->asia = $request['asia'];
            $fund->europe = $request['europe'];
            $fund->ocinia = $request['ocinia'];
            $fund->south_america = $request['south_america'];
            $fund->africa = $request['africa'];
            $fund->small_cap = $request['small_cap'];
            $fund->health_care = $request['health_care'];
            $fund->consumer_discretionary = $request['consumer_discretionary'];
            $fund->asia_ex_japan = $request['asia_ex_japan'];
            $fund->china_tech = $request['china_tech'];
            $fund->emrging_market = $request['emerging_market'];
            $fund->global_ex_us__reits = $request['global_ex_us__reits'];
            $fund->precious_metals_gold = $request['precious_metals_gold'];
            $fund->_cash = $request['_cash'];
            $fund->image= $filename;



            $fund->save();

            return redirect()->route('fund')->with('msg','Successfully created Funds Details');


            // `international_equilities`, `real_state`, `commodities`, `cash`, `north_america`, `asia`, `europe`, `ocinia`, `south_america`, `africa`, 
            // dd($request->all());
        }


    function Funds(){
        $funds=Fund::all();
        return view('admin.Funds')
        ->with('funds',$funds);
    }


    public function addfund(Request $request)
    {
        # code...
        //return $request->all();
        $validator=$request->validate([
            'name'=>'required|max:40',
            'discription'=>'required',
            'logo'=>'required'
        ]);
        //logo save
        if( $request->hasFile('logo')){
            $file=$request->file('logo');
            $destinationPath = 'images/';
            $filename= time().$file->getClientOriginalName();
            $file->move($destinationPath,$filename);
        }
       

        $tbl=new Fund();
        $tbl->funds=$request->name;
        $tbl->discription=$request->discription;
        $tbl->logo=$filename;
        $tbl->save();
        return back()->with('msg','Funds Has been added');

    }
    public function deletefund($id)
    {
        # code...
       
       Fund::find($id)->delete();
        return back()->with('msg','Fund Removed successfully');
    }
    public function subsscribe(Request $request)
    {
        # code...
        //return $request->all();
        $validator=$request->validate([
            'email'=>'required|max:40|unique:subscribers',
        ]);
        $tbl=new subscriber();
        $tbl->Email=$request->email;
        $tbl->save();
        return back()->with('msg','Thanks For Subscribing');
    }
}
