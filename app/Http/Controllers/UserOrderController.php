<?php

namespace App\Http\Controllers;
use App\Models\UserOrder;
use Illuminate\Http\Request;
class UserOrderController extends Controller
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
        $show = UserOrder::all();
        return response() -> json($show);
    }
    public function addOrder(Request $request){
        $add = new UserOrder();
        $add -> user_id = $request -> input('user_id');
        $add -> pc_id = $request -> input('pc_id');
        $add -> save();
        return response() -> json($add);
    }
    public function getId($id){
        $show = UserOrder::find($id);
        return response() -> json($show);
    }
    public function delete($id){
        $show = UserOrder::find($id);
        $show -> delete();
        return response() -> json([
            "data" => [
                "code" => 200,
                "message" => "ВСЕ УДАЛИЛОСЬ, ХАРООООш"
            ]
        ]);
    }
    public function edit(Request $request, $id){
        $show = UserOrder::find($id);
        $show -> user_id = $request -> input('user_id');
        $show -> pc_id = $request -> input('pc_id');
        $show -> save();
        return response() -> json($show);
    }
    //
}
