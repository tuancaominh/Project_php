<?php

namespace App\Http\Controllers\admin;

use App\News;
use App\Http\Requests\NewsRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NewsController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public $uploadPath = 'public/images/news';

    public function index() {
        $news = News::paginate(10);
        $news->setPath(url('admin/news'));
        return view("admin.news.lists")->with("news", $news);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function beforeCreate() {
        return view('admin.news.create');
    }

    public function insertLocation() { // get max location 
        $news = News::all();
        if ($news->count() == 0) {
            return 1;
        } else {
            return $news->max('location') + 1;
        }
    }

    public function create(NewsRequest $request) {
        $requests = $request->all();
        $newsitem = new News;
        $newsitem->title = e(addslashes($requests['title']));
        $newsitem->content = e(addslashes($requests['content']));
        $newsitem->title_en = e(addslashes($requests['title_en']));
        $newsitem->content_en = e(addslashes($requests['content_en']));
        $newsitem->meta = e(addslashes($requests['meta']));
        $newsitem->meta_en = e(addslashes($requests['meta_en']));
        $newsitem->metadescript = e(addslashes($requests['metadescript']));
        $newsitem->metadescript_en = e(addslashes($requests['metadescript_en']));
        $newsitem->metakeyword = e(addslashes($requests['metakeyword']));
        $newsitem->metakeyword_en = e(addslashes($requests['metakeyword_en']));
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $fileName = $this->uploadPath . "/" . $this->getFileName($file);
            $newsitem->image = $fileName;
            $this->saveFile($file, $this->uploadPath, $fileName);
        }
        $newsitem->url = e($requests['url']);
        $newsitem->save();

        return redirect()->route('admin-news-create-get')->with('success', true);
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
        $news = new News;
        $newsedit = $news->find($id);
        return view("admin.news.edit")->with('news', $newsedit);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update(NewsRequest $request) {
        try {
            $requests = $request->all();
            if ($requests) {
                $newsitem = News::find($requests['id']);
                $newsitem->title = e(addslashes($requests['title']));
                $newsitem->content = e(addslashes($requests['content']));
                $newsitem->title_en = e(addslashes($requests['title_en']));
                $newsitem->content_en = e(addslashes($requests['content_en']));
                $newsitem->meta = e(addslashes($requests['meta']));
                $newsitem->meta_en = e(addslashes($requests['meta_en']));
                $newsitem->metadescript = e(addslashes($requests['metadescript']));
                $newsitem->metadescript_en = e(addslashes($requests['metadescript_en']));
                $newsitem->metakeyword = e(addslashes($requests['metakeyword']));
                $newsitem->metakeyword_en = e(addslashes($requests['metakeyword_en']));
                if ($request->hasFile('image')) {
                    $file = $request->file('image');
                    $fileName = $this->uploadPath . "/" . $this->getFileName($file);
                    $newsitem->image = $fileName;
                    $this->saveFile($file, $this->uploadPath, $fileName);
                }
                $newsitem->url = e($requests['url']);
                $newsitem->update();
                return redirect()->route('admin-news-index')->with("successedit", true);
            } else {
                return redirect()->route('admin-new-index');
            }
        } catch (Exception $ex) {
            return redirect()->route('admin-new-index');
        }
    }

    public function delete(Request $request) {
        $requests = $request->all();
        $new = News::find($requests['id']);
        $new->delete();
        return redirect()->route('admin-news-index')->with("successdelete", true);
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
