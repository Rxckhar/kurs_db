<?php

namespace App\Http\Controllers;
use App\Models\RealUser;
use Illuminate\Http\Request;
class RealUserController extends Controller
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
        $show = RealUser::all();
        return response() -> json($show);
    }
    public function addUser(Request $request){
        $add = new RealUser();
        $add -> nam = $request -> input('nam');
        $add -> dilivery_address = $request -> input('dilivery_address');
        $add -> email = $request -> input('email');
        $add -> save();
        return response() -> json($add);
    }
    public function getId($id){
        $show = RealUser::find($id);
        return response() -> json($show);
    }
    public function delete($id){
        $show = RealUser::find($id);
        $show -> delete();
        return response() -> json([
            "data" => [
                "code" => 200,
                "message" => "ВСЕ УДАЛИЛОСЬ, ХАРООООш"
            ]
        ]);
    }
    public function edit(Request $request, $id){
        $add -> nam = $request -> input('nam');
        $add -> dilivery_address = $request -> input('dilivery_address');
        $add -> email = $request -> input('email');
        $add -> save();
        return response() -> json($add);
    }
    //
}
