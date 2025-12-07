<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Content;

class PagesController extends Controller
{
    public function index()
    {
        $pageTitle = 'Dashboard';
        $pageDescription = 'Some description for the page';

        return view('front-end.index');
    }

    public function about()
    {
        return view('front-end.about');
    }

    public function blog()
    {        
        $pageTitle = 'Universitas Negeri Jakarta - Web Prosedur Alat Dasar';
        $blog = Content::where('page', 'blog')->where('content_type', 'blog')->first();

        return view('front-end.blog', compact('pageTitle' ,'blog'));
    }

    public function blog_detail($slug)
    {
        $blog   = Content::where('slug', $slug)->first();
        $recommend = Content::where('slug', '!=', $slug)->limit(2)->get(['slug', 'title', 'body','created_at']);

        return view('front-end.blog_detail', compact('blog', 'recommend'));
    }

    public function blog_category($category)
    {
        $blog   = Content::where('category', $category)->get();

        return view('front-end.blog', compact('blog'));
    }
}
