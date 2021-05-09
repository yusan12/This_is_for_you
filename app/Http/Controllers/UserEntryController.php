<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UserEntry;

class UserEntryController extends Controller
{
    function index(){
		$entry_list = UserEntry::where("id", ">", 2)->get();
dump($entry_list);
	}

    function detail($id){
		$item = UserEntry::find($id);
		return view("user_entry_detail", ["item" => $item]);
	}
}
