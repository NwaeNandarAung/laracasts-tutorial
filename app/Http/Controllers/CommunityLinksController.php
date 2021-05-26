<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CommunityLink;
use Auth;
use Illuminate\Support\Facades\Redirect;

class CommunityLinksController extends Controller
{
    public function index()
    {
        $links = CommunityLink::paginate(25);
        return view('community.index', compact('links'));
    }

    public function store(Request $request) 
    {
        CommunityLink::from(Auth::user())
                        ->contribute($request->all());
        return back();
    }
}
