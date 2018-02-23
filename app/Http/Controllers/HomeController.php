<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\View\View;
use App\Subscriber;
use App\User;

use Session;
//use Illuminate\Session\Store as SessionStore;
use Maatwebsite\Excel\Facades\Excel;
use DateTime;
use Yajra\Datatables\Facades\Datatables;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }
	public function getDashboard(Request $request)
	{
		$data['page'] = 'Dashboard';
		$user_id=Auth::user()->id;
		$data['user_info'] = User::where('id', $user_id)->get()->toArray();
		$data['sess'] = $request->session()->all();
		return view('index',$data);
	}
	public function getSubscriber(Request $request)
	{
		$data['sess']=array();
		$data['page'] = 'Subscriber';
		$user_id=Auth::user()->id;
		$data['subscriber'] = Subscriber::where('status', 1)->get();
		//dd($data['subscriber']);
		return view('subscriber_list',$data);
	}
	public function postSubscriber(Request $request)
	{
		$this->validate($request, [
            'mob_no' => 'required',
            'name' => 'required',
            'balance' => 'required'
        ]);
		$arr=[
		'mob_no' => $request->input('mob_no'),
		'name' => $request->input('name'),
		'balance' => $request->input('balance'),
		'status' => 1 
		];
		
		Subscriber::insert($arr);
		return redirect()->route('subscriber');
		
	}
			
	
}
