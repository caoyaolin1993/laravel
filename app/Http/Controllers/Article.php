<?php

namespace App\Http\controllers;

use App\Http\Models\ArticleModel;

class Article extends Controller
{
    // 列表
    public function index(ArticleModel $art)
    {
        // $result = $art->get()->all();

        // $result = $art->getRandow();
        $data = ['title' => 'aaaaa', 'content' => '当地时间2月23日,美国社交媒体公司脸书(Facebook)与澳大利亚政府的谈判取得突破,脸书将恢复有关澳大利亚的新闻页面,而澳大利亚政府也修改了部分法案。在本月早些时候,...百度快照'];

        $res = $art->where('id', 1)->first()->toArray();
        $data['user'] = ['uid' => 1, 'username' => 'cyl'];
        $data['score']  = 100;

        $data['article_list'] = $art->get()->toArray();
        
        return view('article/index', $data);
    }


    public function lists()
    {
    }
}
