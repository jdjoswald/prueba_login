<?php

namespace App\Http\Controllers;

use App\Mail\confirmacion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Mail;

class loginController extends Controller
{
    //


    function logon(Request $req){

        //dd($req->input());

       //
        $count= DB::table('tbl_usuario')->where('password',md5($req->input('pass')))->where('correo',$req->input('user'))->count();
            if ($count==1){
                $query= DB::select("select *  from tbl_usuario where password='".md5($req->input('pass'))."' && correo= '".$req->input('user')."'");
                

                   
                    $req->session()->put('user', $req->input('user'));

                
            }
       return view('welcome',['query'=>$query]);
    
    }
    function create(Request $req){
        
        $vkey=md5(time().$req->input('user'));
        $pass=md5($req->input('pass'));
        //dd($req->input());

    $query= DB::table('tbl_usuario')->insert([
            'nombres'=>$req->input('nombres'),
            'apellidos'=>$req->input('apellidos'),
            'id_tipo'=>1,
            'correo'=>$req->input('user'),
            'confirmacion'=>0,
            'vkey'=>$vkey,
            'password'=>$pass
        ]);
        if($query){

           
            $correo=  new confirmacion($vkey);
           Mail::to($req->input('user'))->send($correo);
            
          




            echo'<script>
            alert("usuario creado porfavor confirme correo electronico");
            
            </script>';
        }
        else{
            echo'<script>
            alert("usuario no fue creado compruebe la informacion");
            
            </script>';
            return back();
        }
        return view('login');



    }
    function confirm($vkey){
        $query= DB::table('tbl_usuario')
        ->where('vkey',$vkey)
        ->update([
            
            'confirmacion'=>1,
            
            
        ]);
        if($query){
            echo'<script>
            alert("Correo confirmado");
            
            </script>';
            
        }

        return view('login');



    }
    
}


