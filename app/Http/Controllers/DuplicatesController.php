<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class DuplicatesController extends Controller
{
    public function index(Request $request)
    {
        $members = DB::select( DB::raw("
        SELECT member.* FROM members AS member JOIN 
      (SELECT memb.last_name, memb.first_name, COUNT(*) 
       FROM members memb 
       WHERE memb.last_name != '' AND memb.first_name != '' 
       GROUP BY memb.last_name, memb.first_name
       HAVING COUNT(*) > 1
      ) AS name 
     WHERE member.last_name =  name.last_name AND member.first_name = name.first_name
     
     union 
     SELECT member.* FROM members AS member JOIN 
      (SELECT memb.prefix, memb.phone, COUNT(*) 
       FROM members memb 
       WHERE memb.prefix != '' AND memb.phone != '' 
       GROUP BY memb.phone, memb.prefix 
       HAVING COUNT(*) > 1
      ) AS phone
     WHERE member.prefix =  phone.prefix AND member.phone = phone.phone
     
     union 
     SELECT member.* FROM members AS member JOIN 
      (SELECT memb.email, COUNT(*) 
       FROM members memb 
       WHERE memb.email != '' 
       GROUP BY memb.email
       HAVING COUNT(*) > 1
      ) AS mail 
     WHERE member.email =  mail.email
   order by phone"));
     return view('pages.index2',compact('members'));
    }
    
}

