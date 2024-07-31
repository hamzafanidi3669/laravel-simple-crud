<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class traitementform extends Controller
{
    public function afficher(){
     $collection=DB::select("SELECT * from users") ;
     return view("afficher",["affich"=>$collection]); 
    }
    public function inserer(Request $r){
        DB::insert("INSERT into users(id,nom,prenom) values('$r->id','$r->nom','$r->prenom')");
        return redirect('afficher');


    }
    public function delete(Request $r){
        DB::delete("DELETE from users where id=$r->id");
        return redirect('afficher');
    }
    public function selectedit(Request $r){
        $var=DB::select("SELECT * from users where id=$r->id") ;
        return view("edit",['edit'=>$var]) ;
        // $oldid=$r->id; bghina njbdo dak l old wndwz lvariable lsavedata wlkin mymknsh
    }
    public function savedata(Request $r){
        // $r->id;
        // $r->nom ;
        // $r->prenom ;

        // $user=User::get()->where('id','=',$r->id);
        // $user->nom=$r->nom ;

        
        DB::update("update users set nom='$r->nom' ,prenom='$r->prenom' where id=$r->id");
        //db ila bghiti tmodifier l id maymknsh 3Lash ? 7tash katkun modifitih ufashj katgulih where id=$r->id makil9ahsh 7tash yallah dkheltih .ila kant shi methode nkhdmo b old wnew +oula khsni nl9a shi methode njbd beha dak l old id +wlmoshkila makhasksh dder disabled fle champ dyal id 7tash fash hna adder lih where id... b7ala makil9ahsh dnc khsna manderosh lih disabled uila modifia l id maghadduzsh la requette

        return Redirect('afficher');
    }

}
