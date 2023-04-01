<?php

namespace App\Http\Controllers;
use App\Models\Pc;
use Illuminate\Http\Request;
class PcController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }
    public function showAll(){
        $show = Pc::all();
        return response() -> json($show);
    }

    public function addPc(Request $request){
        $add = new Pc();
        $add -> gpu = $request -> input('gpu');
        $add -> cpu = $request -> input('cpu');
        $add -> ram = $request -> input('ram');
        $add -> hdd = $request -> input('hdd');
        $add -> sdd = $request -> input('sdd');
        $add -> motherboard = $request -> input('motherboard');
        $add -> power_supply = $request -> input('power_supply');
        $add -> cooler = $request -> input('cooler');
        $add -> comp_case = $request -> input('comp_case');
        $add -> image = $request -> input('image');
        $add -> price = $request -> input('price');
        $add -> save();
        return response() -> json($add);
    }
    public function getId($id){
        $show = Pc::find($id);
        return response() -> json($show);
    }
    public function delete($id){
        $show = Pc::find($id);
        $show -> delete();
        return response() -> json([
            "data" => [
                "code" => 200,
                "message" => "ВСЕ УДАЛИЛОСЬ, ХАРООООш"
            ]
        ]);
    }
    public function edit(Request $request, $id){
        $add = Pc::find($id);
        $add -> gpu = $request -> input('gpu');
        $add -> cpu = $request -> input('cpu');
        $add -> ram = $request -> input('ram');
        $add -> hdd = $request -> input('hdd');
        $add -> sdd = $request -> input('sdd');
        $add -> motherboard = $request -> input('motherboard');
        $add -> power_supply = $request -> input('power_supply');
        $add -> cooler = $request -> input('cooler');
        $add -> comp_case = $request -> input('copm_case');
        $add -> image = $request -> input('image');
        $add -> price = $request -> input('price');
        $add -> save();
        return response() -> json($add);
    }

}
