<?php namespace App\Http\Controllers\admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Menu;
use App\Http\Requests\MenuRequest;
use Illuminate\Http\Request;

class MenuController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
            $menus=Menu::paginate(2);
            $menus->setPath(url('admin/menu'));          
            return view("admin.menu.lists")->with("menus",$menus);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
        public function beforeCreate()
        {
            return view('admin.menu.create')->with('success',false);
        }
        
        public function insertLocation() // get max location 
        {
            $menus= Menu::all();
            
            if($menus->count()==0)
            {
                return 1;
            }else
            {
                return $menus->max('location')+1; 
            }
        }

	public function create(MenuRequest $request)
	{
                    
                    $requests=$request->all();
                    $menu=new Menu;
                    $menu->name=addslashes($requests['name']);
                    $menu->description=  addslashes($requests['description']);
                    $menu->location = $this->insertLocation();
                    $menu->save();
                    return view('admin.menu.create')->with('success',true);      
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
        
        
        
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
        

	public function edit($id)
	{
            $menu=new Menu;
            $menuedit=$menu->find($id);
            return view("admin.menu.edit")->with('menu',$menuedit);
	}
        
	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(MenuRequest $request)
	{
            try {
                
                $requests=$request->all();
                if($requests)
                {
                    $menu=Menu::find($requests['id']);
                    $menu->name=addslashes($requests['name']);
                    $menu->description=addslashes($requests['description']);
                    $menu->update();
                    return redirect()->route('admin-menu-index')->with("successedit",true);
                }else
                {                 
                    return redirect()->route('admin-menu-index');
                }
            } catch (Exception $ex) {
                return redirect()->route('admin-menu-index');
            }          
	}
        public function delete($id)
        {
            $menu= Menu::find($id);
            $menu->delete();
            return redirect()->route('admin-menu-index')->with("successdelete",true);
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
