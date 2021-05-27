<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CommunityLink;
use App\Models\CommunityLinkVote;

class VotesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function store(CommunityLink $link)
    {
        auth()->user()->toggleVoteFor($link);
        return back();
    }
}
