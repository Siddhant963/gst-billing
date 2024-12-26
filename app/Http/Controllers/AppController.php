<?php

namespace App\Http\Controllers;
 
// this all the fasad of laravel 

use Illuminate\Http\Request;
use App\Models\Party; 
use Illuminate\Support\Facades\DB;
class AppController extends Controller
{
    public function index(){

























        

        // all the methord by the elocation ORM object relation model 

        
        // insert opstionone
        // $party = new Party ;
        // $party->full_name = "siddhant";
        // $party->address = "bhopal";
        // $party->email = "siddhant@gmail.com"; 
        // $party->save();

        // insert option two by array methord but when we use this methord we have to add all column in fillable column name in Model party.php file
        // $param = [
        //     "full_name" => "siddhant dubey",
        //     "address" => "uttarpradesh",
        //     "email" => "sid@gmail.com"
        // ];

        // retrive data form database 
        // all record 
        // $parties = Party::all();
        // dd($parties);

        // single record
        // $id = 10; 
        // $party = Party::find($id);
        // // dd($party);

        // single record by another column 
        // $party = Party::where('address' , 'bhopal')->get();
        // dd($party);


        // update record
        // $id = 1; 
        // $party = Party::find($id);
        // $party->full_name = "siddhant anil dubey";
        // $party->save();


        // delete record
        // $id = 2; 
        // $party = Party::find($id);
        // $party->delete();
       

        // Party::create($param);
        return "HELLO FROM CONTROLLER";

}

   public function about (){ 
    // return  view('welcome');
    // passing value controller to model 
    // by compat function
    // $name = "siddhant"; $age = 21 ; $city = "jabalpur";
    // return  view('welcome',compact('name' , 'age' , 'city')); 

    // by assosiative array 
    // return view('welcome', array(
    //    'name' => $name,
    //    'age' => $age,
    //    'city' => $city,

    // ));

    // passsing by with methord
    // return view('welcome')->with('name', $name)
    //                       ->with('age', $age)
    //                       ->with('city', $city);

    // passing by most popular methord withassosiative array  
    $data['name']  = "siddhant";
    $data['age']  = 21;
    $data['city']  = "bhopal";

    return view('welcome' , $data);

}
}

?>