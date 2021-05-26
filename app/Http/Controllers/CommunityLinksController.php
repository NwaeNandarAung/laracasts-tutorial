<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CommunityLink;
use App\Models\Channel;
use Auth;
use Illuminate\Support\Facades\Redirect;

class CommunityLinksController extends Controller
{
    public function index()
    {
        $links = CommunityLink::where('approved',1)->paginate(25);
        $channels = Channel::orderBy('title')->get();

        return view('community.index', compact('links','channels'));
    }

    public function store(Request $request) 
    {
        $this->validate($request, [
            'channel_id' => 'required|exists:channels,id',
            'title' => 'required',
            'link' => 'required|active_url|unique:community_links'
        ]);
        CommunityLink::from(Auth::user())
                        ->contribute($request->all());

        if(auth()->user()->isTrusted()) {
            return back()->with('success','Thanks for the contribution');
        } else {
            return back()->with('warning','Thanks, this contribution will be approved shortly');
        }
    }
}
