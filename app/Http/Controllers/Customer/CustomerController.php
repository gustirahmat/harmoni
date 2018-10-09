<?php

namespace harmoniKarimunJawa\Http\Controllers\Customer;

use Illuminate\Http\Request;
use harmoniKarimunJawa\Http\Controllers\Controller;

class CustomerController extends Controller
{
    public function CustomerHome()
    {
    	return view('customer.welcome');
    }

    public function CustomerGallery()
    {
    	return view('customer.gallery');
    }

    public function CustomerBoatSchedule()
    {
    	return view('customer.boat-schedule');
    }

    public function CustomerAbout()
    {
    	return view('customer.about');
    }

    public function CustomerTestimony()
    {
    	return view('customer.testimony');
    }

    public function CustomerTnC()
    {
    	return view('customer.tnc');
    }
}
