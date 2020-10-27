<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request; 
use App\Model\User;
use App\Traits\ApiResponse;
use DB;
Class UserController extends Controller {    
    use ApiResponse;
    private $request;

    public function __construct(Request $request){        
        $this->request = $request;    
    }
    public function getUsers(){        
        $users = DB::connection('mysql')
        ->select ("Select * from tbluser");        
        return response()->json($users, 200);  
    } }