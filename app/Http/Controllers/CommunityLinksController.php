<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CommunityLink;
use App\Models\CommunityLinkVote;
use App\Models\Channel;
use Auth;
use Illuminate\Support\Facades\Redirect;
use App\Exceptions\CommunityLinkAlreadySubmitted;

class CommunityLinksController extends Controller
{
    public function index(Channel $channel = null)
    {
        $links = CommunityLink::with('votes')->forChannel($channel)
                ->where('approved',1)
                ->latest('updated_at')
                ->paginate(3);

        $channels = Channel::orderBy('title')->get();

        return view('community.index', compact('links','channels','channel'));
    }

    public function store(Request $request) 
    {
        $this->validate($request, [
            'channel_id' => 'required|exists:channels,id',
            'title' => 'required',
            'link' => 'required|active_url'
        ]);

        try {
            CommunityLink::from(Auth::user())->contribute($request->all(), $this);

            if(auth()->user()->isTrusted()) {
                return back()->with('success','Thanks for the contribution');
            } else {
                return back()->with('warning','Thanks, this contribution will be approved shortly');
            }
        } catch(CommunityLinkAlreadySubmitted $e) {
            return back()->with("warning","That link has already been submitted. We'll instead bump the timestamp and bring that link back to the top, Thanks!");
        }
    }
}
