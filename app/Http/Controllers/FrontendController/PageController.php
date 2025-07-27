<?php

namespace App\Http\Controllers\FrontendController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    // About 
    public function about(){
        $bodyClass = 'page-wrapper';
        return view('frontend.pages.about', compact('bodyClass'));
    }
    // Faqs 
    public function faqs(){
        $bodyClass = 'page-wrapper';
        return view('frontend.pages.faqs', compact('bodyClass'));
    }
    // teamDetails 
    public function teamDetails(){
        $bodyClass = 'page-wrapper';
        return view('frontend.pages.teamDetails', compact('bodyClass'));
    }
    // Team 
    public function team(){
        $bodyClass = 'page-wrapper';
        return view('frontend.pages.team', compact('bodyClass'));
    }
    // Pricing 
    public function pricing(){
        $bodyClass = 'page-wrapper';
        return view('frontend.pages.pricing', compact('bodyClass'));
    }
    // Contact
    public function contact(){
        $bodyClass = 'page-wrapper';
        return view('frontend.pages.contact', compact('bodyClass'));
    }
    // Services 
    public function services(){
        $bodyClass = 'page-wrapper';
        return view('frontend.pages.services', compact('bodyClass'));
    }
    // servicesTwo 
    public function servicesTwo(){
        $bodyClass = 'page-wrapper';
        return view('frontend.pages.servicesTwo', compact('bodyClass'));
    }
    // serviceDetails 
    public function serviceDetails(){
        $bodyClass = 'page-wrapper';
        return view('frontend.pages.serviceDetails', compact('bodyClass'));
    }
    // shop 
    public function shop(){
        $bodyClass = 'page-wrapper';
        return view('frontend.pages.shop', compact('bodyClass'));
    }
    // productDetails 
    public function productDetails(){
        $bodyClass = 'page-wrapper';
        return view('frontend.pages.productDetails', compact('bodyClass'));
    }
    // cart 
    public function cart(){
        $bodyClass = 'page-wrapper';
        return view('frontend.pages.cart', compact('bodyClass'));
    }
    // checkout 
    public function checkout(){
        $bodyClass = 'page-wrapper';
        return view('frontend.pages.checkout', compact('bodyClass'));
    }
    // projects 
    public function projects(){
        $bodyClass = 'page-wrapper';
        return view('frontend.pages.projects', compact('bodyClass'));
    }
    // projectList 
    public function projectList(){
        $bodyClass = 'page-wrapper';
        return view('frontend.pages.projectList', compact('bodyClass'));
    }
    // projectGrid 
    public function projectGrid(){
        $bodyClass = 'page-wrapper';
        return view('frontend.pages.projectGrid', compact('bodyClass'));
    }
    // projectDetails 
    public function projectDetails(){
        $bodyClass = 'page-wrapper';
        return view('frontend.pages.projectDetails', compact('bodyClass'));
    }
    // blog 
    public function blog(){
        $bodyClass = 'page-wrapper';
        return view('frontend.pages.blog', compact('bodyClass'));
    }
    // blogStandard 
    public function blogStandard(){
        $bodyClass = 'page-wrapper';
        return view('frontend.pages.blogStandard', compact('bodyClass'));
    }
    // blogDetails 
    public function blogDetails(){
        $bodyClass = 'page-wrapper';
        return view('frontend.pages.blogDetails', compact('bodyClass'));
    }
    // errorPage 
    public function errorPage(){
        $bodyClass = 'page-wrapper';
        return view('frontend.pages.errorPage', compact('bodyClass'));
    }
}
