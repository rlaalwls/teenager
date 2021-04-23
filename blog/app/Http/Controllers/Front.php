<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use App\Classes\CommonFunction;
use App\Classes\PagingFunction;
use App\Admin;
use App\User;
use Auth;
use DB;
use App\Classes\jsonRPCClient;

class Front extends Controller

{
    
    public function main(Request $request){
        
        $return_list = array();

        return view('index', $return_list);
    }

    public function introduction(Request $request){

        $return_list = array();

        $view_url = '';
        
       
        if($request->segment(2) == 'greeting'){
            $view_url .= '/introduction/greeting';
        }
        if($request->segment(2) == 'history'){
            $view_url .= '/introduction/history';
        }
        if($request->segment(2) == 'organization'){
            $view_url .= '/introduction/organization';
        }
        if($request->segment(2) == 'member'){
            $view_url .= '/introduction/member';
        }
     
        return view('sub/'.$view_url, $return_list);
    }

    public function activity(Request $request){

        $return_list = array();

        $view_url = '';
        
       
        if($request->segment(2) == 'gallery'){
            $view_url .= '/activity/gallery';
        }
     
        return view('sub/'.$view_url, $return_list);
    }

    public function noti(Request $request){

        $return_list = array();

        $view_url = '';
        
       
        if($request->segment(2) == 'sponsor'){
            $view_url .= '/noti/sponsor';
        }
     
        return view('sub/'.$view_url, $return_list);
    }


    public function board_list(Request $request){

        $return_list = array();
     
        return view('inc/board_list', $return_list);
    }
    public function board_view(Request $request){

        $return_list = array();

        return view('inc/board_view', $return_list);
    }

  
}
?>