<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pagesController extends Controller
{


    public function index(){
    	$title='SeedsLab';
    	// return view('pages.index', compact('title'));
    	return view('pages.index')->with('title', $title);
    }

    // public function about(){
    // 	$title='About Us';
    // 	return view('pages.about')->with('title', $title);
    // }

    // public function services(){
    // 	$data = array(
    // 		'title' => 'Services',
    // 		'services' => ['Web Design', 'Programming', 'SEO']
    // 		);
    // 	return view('pages.services')->with($data);
    // }

    public function publication(){
        $title = 'SEEDS';
        return view('pages.publication')->with('title', $title);
    }

    // public function research(){
    //     $title = 'Research Project';
    //     return view('pages.ResearchProj')->with('title', $title);
    // }

    // public function people(){
    //     $title = 'People';
    //     return view('pages.people')->with('title', $title);
    // }
    public function contact(){
        $title = 'Contact';
        return view('pages.contact')->with('title', $title);
    }

}
