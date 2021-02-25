<?php

namespace App\Http\Controllers;

use App\Helpers\Constant;
use App\Models\Article;
use App\Traits\ArticleTrait;
use App\Traits\UserTrait;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class ArticleController extends Controller
{
    use ArticleTrait;
    use UserTrait;

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $listArticle = $this->getListArticlePublished();
        $dataSliders  = collect($listArticle)->take(4)->all();
        return view('index', [
            'dataSliders' => $dataSliders,
            'listArticle' => $listArticle
        ]);
    }

    public function detail($id)
    {
        $detailArticle = $this->getDetailArticlePublished($id);
        // if(!$detailArticle){
        //     return redirect()->route('blxxog');
        // }
        return view('view', [
            'detailArticle' => $detailArticle,
        ]);
    }

    public function edit($id)
    {
        $detailArticle = $this->getDetailArticle($id);
        $listAuthor    = $this->getListUser();
        $newListAuthor = [];
        foreach ($listAuthor as $key => $value) {
            $newListAuthor[$value['id']] = $value['name']. " (". $value['type'] .")";
        }

        if(!$detailArticle){
            return redirect()->route('home');
        }
        return view('edit', [
            'detailArticle' => $detailArticle,
            'listAuthor' => $newListAuthor,
        ]);
    }

    public function create()
    {
        $listAuthor    = $this->getListUser();
        $newListAuthor = [];
        foreach ($listAuthor as $key => $value) {
            $newListAuthor[$value['id']] = $value['name']. " (". $value['type'] .")";
        }

        return view('create', [
            'listAuthor' => $newListAuthor
        ]);
    }

    public function changeStatus($id)
    {
        $detail = $this->getDetailArticleNoJoin($id);
        $detail->status = $detail->status == 1 ? 0 : 1;
        $detail->save();
        return redirect()->route('home');
    }

    public function delete($id)
    {
        $detail = $this->getDetailArticleNoJoin($id);
        $detail->delete();
        return redirect()->route('home');
    }

    public function insert(Request $request)
    {
        $model = new Article();
        $model->title = $request->title;
        $model->body = $request->body;
        $model->author_id = $request->author_id;
        $model->photo = $request->photo;
        $model->page_view = 0;
        $model->created_at = Carbon::now();
        $model->published_date = Carbon::now();
        $model->status = Constant::STATUS_UNPUBLISHED;
        $model->save();
        return redirect()->route('home');
    }

    public function update($id, Request $request)
    {
        $detailArticle = $this->getDetailArticle($id);
        if(!$detailArticle){
            return redirect()->route('home');
        }

        $detailArticle->title = $request->title;
        $detailArticle->body = $request->body;
        $detailArticle->author_id = $request->author_id;
        $detailArticle->photo = $request->photo;
        $detailArticle->save();
        return redirect()->route('home');
    }

    public function indexDashboard()
    {
        $listArticle = $this->getListArticle();
        return view('auth.list', [
            'listArticle' => $listArticle
        ]);
    }

}
