<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
Use App\User;
use Illuminate\Support\Facades\Auth;
use Hash;
use Input;
use Session;
class CustomersController extends Controller
{
    	public function index()
	{
		// $users = DB::table('hoadon')->get();
		// print_r($users);
		return view('front.registration.formcs');
		//
	}
	public function login()
	{

			return view('front.registration.login');
			//dd($request);
	}
	public function postlogin(request $request)
	{
		//'regex:/(^([a-zA-Z]+)(\d+)?$)/u'

			$v= $this->validate($request, [
            'email' => 'required',
            'password' => 'required|min:6|max:20'
        	],
            [
            	'email.required' => 'メール を 記入してください',
            	'password.required' => '',
            	'password.min' => 'password tren 6 ki tu',
            	'password.max' => 'password duoi 20 ky tu'
    			]);

			$dataAttempt = array(
            'email' => $request->email,
            'password' => $request->password
        );
				if(Auth::attempt($dataAttempt))
					{
						
						return redirect('apply')->with('alert','dang nhap thanh cong');
					}
					else
					{
						return redirect('login')->with('alert','Dang nhap khong thanh cong');
					}


	}
	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create(Request $request)
	{

		// $data=['hoten'=>'cao minh tuan'];
		//     	Mail::send('tuancaominh008@gmail.com',$data,function($msg){
		//     		$msg->from('tuancaominh008@gmail.com');
		//     		$msg->to('tuancaominh008@gmail.com')->subject('Day la mail tui');

		//     	});


			$v= $this->validate($request, [
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|max:20',
            'confirm_password' => 'required|same:password',
            'ck' => 'required'
        	],
            [
            	'email.required' => 'メール を 記入してください',
            	'email.email'   => 'mail dang nhap khong dung',
            	'password.required' => 'mail khong duoc bo trong',
            	'password.min' => 'password tren 6 ki tu',
            	'password.max' => 'password duoi 20 ky tu',
            	'confirm_password.required' => 'confirm password khong duoc bo trong',
            	'confirm_password.same' => 'confirm password va password  mat khong khong phu hop',
            	'ck.required' => 'vui long check nhe'
    			]);
				//	$request->session()->flash('status', 'Task was successful!');
				//$request->session()->put('email', $request->email);
				if(Session::has('email'))
				{   
					$request->session()->flush();
				}
				session(['email' => $request->email,'password'=>$request->password]);
				//$request->session()->keep([$request->name, $request->email]);

		    	// $user=new User;
		    	// $user->name='No';
		    	// $user->email=$request->email;
		    	// $user->password=Hash::make($request->password);
		    	// $user->remember_token=$request->_token;
		    	// $user->save();
		    	return view('front.registration.confirmregis');
		    	//return redirect('apply')->with('alert','chao vao trang apply');

	}
	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
				$user=new User;
		    	$user->name='No';
		    	$user->email=$request->email;
		    	$user->password=Hash::make($request->password);

		    	$user->remember_token=$request->_token;
		    	$user->save();
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function confirmgmail($token)
	{
		$user=User::where('remember_token',$token)->first();
		if(!is_null($user))
		{

			$user->hieuluc=1;
			$user->remember_token='';
			$user->save();
			return redirect('login')->with('alert','Your activation is complete');
		}
		return redirect('login')->with('alert','something went wrong');
	}
	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}
}
