<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class userController extends Controller
{
    function select(){
        $jsonData=DB::select('select * from user where name=?',['Mituhn']);
       $jsonString= json_encode($jsonData);
        $selectdata=json_decode( $jsonString);
        return view('select',compact('selectdata'));
    }

   
    function insertData(Request $req){
        $name=$req->input('name');
        $email=$req->input('email');
        $db=DB::insert('INSERT INTO `user` (`name`,`email`) VALUES (?,?)',[$name,$email]);
        if ($db==true) {
            return "success";
            # code...
        }
        else {
            return "failed";
        }


    }
    function deleteData(Request $req){
        $id=$req->input('id');
        $db=DB::delete('DELETE FROM `user` where `id` =?',[$id]);
        if($db==true){
            return "success";
        } else {
            return "false";
        }

    }
    function updateData(Request $req){
        
        $name=$req->input('name');
        $email=$req->input('email');
        $id=$req->input('id');
        $db=DB::update('UPDATE `user` SET `name`=?,`email`=? WHERE `id`=?',[$name,$email,$id]);
        if($db==true){
            return "success";
        } else {
            return "false";
        }

    }
}
