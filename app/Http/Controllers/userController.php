<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;

/*@section('scripts')
<script>
function listaUsuarios(){
    $.ajax({
        type: "GET",
        url:  "showUsuarios.php",
        datatype: "json",
        success: function(response){
            return response;
            //console.log(response.users);
        }
    });
}
</script> 
@endsection*/
class userController extends Controller
{
    public function index(){

        $users = user::all(); //DB::table('users')->get();

        return view('usuarios')->with('usuarios',$users);
    }

    public function listausuarios(){
        $lusers = user::all();
        
        return response()->json([
            'users'=>$lusers,
        ]);

        //return listaUsuarios();

    }
        
}

