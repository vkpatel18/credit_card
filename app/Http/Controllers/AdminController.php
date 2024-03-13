<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
   public function index()
   {
      return view('admin/index');
   }

   public function dashboard()
   {
      return view('admin.dashboard');
   }

   public function view_Credit_card_list()
   {
      return view('admin.creditcard');
   }

   public function credit_store_page()
   {
      return view('admin.creditcardstore');
   }
   
}
