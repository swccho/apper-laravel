<?php

namespace App\Http\Controllers;

//use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
//use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class FrontController extends BaseController
{
    public function home(Request $request)
    {
        return view('pages.home');
    }
    public function about(Request $request)
    {
        return view('pages.about');
    }
    public function contact(Request $request)
    {
        return view('pages.contact');
    }
    public function review(Request $request)
    {
        return view('pages.review');
    }
    public function faq(Request $request)
    {
        return view('pages.faq');
    }
    public function blog(Request $request)
    {
        return view('pages.blog-list');
    }
    public function singleBlog(Request $request)
    {
        return view('pages.blog-single');
    }
    public function signIn(Request $request)
    {
        return view('pages.sign-in');
    }
    public function signUp(Request $request)
    {
        return view('pages.sign-up');
    }
}
