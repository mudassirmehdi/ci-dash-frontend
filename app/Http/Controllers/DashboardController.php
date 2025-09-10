<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view("index");
    }

public function tokens()
    {
        return view("assign-tokens");
    }

    public function balance()
    {
        return view("balance");
    }

    public function blank()
    {
        return view("blank");
    }

    public function buy_token()
    {
        return view("buy-tokens");
    }

    public function password()
    {
        return view("change-password");
    }

    public function contact()
    {
        return view("contact");
    }


    public function cooperative()
    {
        return view("cooperative");
    }
    
    public function cui()
    {
        return view("cui-team");
    }

    public function faq()
    {
        return view("faqs");
    }

    public function funds()
    {
        return view("funds");
    }

    public function income()
    {
        return view("income");
    }

    public function invoices()
    {
        return view("invoices");
    }

    public function member()
    {
        return view("member-to-member-transfer");
    }

    public function my_tokens()
    {
        return view("my-tokens");
    }

    public function profile_overview()
    {
        return view("profile-overview");
    }

    public function profile_setting()
    {
        return view("profile-setting");
    }


    public function transactions()
    {
        return view("transactions");
    }


    public function withdraw_funds()
    {
        return view("withdraw-funds");
    }


    public function wpif_cooperative()
    {
        return view("wpif-cooperative");
    }

    public function wpif_cui_team()
    {
        return view("wpif-cui-team");
    }

}
