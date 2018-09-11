<?php

namespace App\Http\Controllers\admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Category;
use App\Menu;
use App\Http\Requests\CategoryRequest;
use Illuminate\Http\Request;

class CategoryController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index() {
        $categorys = Category::paginate(10);
        $categorys->setPath(url('admin/category'));
        return view("admin.category.lists")->with("categorys", $categorys);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function beforeCreate() {
        return view('admin.category.create');
    }

    public function insertLocation() { // get max location 
        $categorys = Category::all();
        if ($categorys->count() == 0) {
            return 1;
        } else {
            return $categorys->max('location') + 1;
        }
    }

    public function create(CategoryRequest $request) {
        $requests = $request->all();
        $category = new Category;
        $category->name = e(addslashes($requests['name']));
        $category->description = e(addslashes($requests['description']));
        $category->name_en = e(addslashes($requests['name_en']));
        $category->description_en = e(addslashes($requests['description_en']));
        $category->location = $this->insertLocation();
        $category->url = e($requests['url']);
        $category->save();
        return redirect()->route('admin-category-create-get')->with('success', true);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store() {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id) {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id) {
        $category = new Category;
        $categoryedit = $category->find($id);
        return view("admin.category.edit")->with('category', $categoryedit);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update(CategoryRequest $request) {
        try {
            $requests = $request->all();
            if ($requests) {
                $category = Category::find($requests['id']);
                $category->name = e(addslashes($requests['name']));
                $category->description = e(addslashes($requests['description']));
                $category->url = e(addslashes($requests['url']));
                $category->name_en = e(addslashes($requests['name_en']));
                $category->description_en = e(addslashes($requests['description_en']));
                $category->update();
                return redirect()->route('admin-category-index')->with("successedit", true);
            } else {
                return redirect()->route('admin-category-index');
            }
        } catch (Exception $ex) {
            return redirect()->route('admin-category-index');
        }
    }

    public function delete(Request $request) {
        $requests = $request->all();
        $category = Category::find($requests['id']);
        $category->delete();
        return redirect()->route('admin-category-index')->with("successdelete", true);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id) {
        //
    }

}
