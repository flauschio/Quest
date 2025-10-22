<?php

namespace App\Http\Controllers;

use App\Models\Quest;
use Illuminate\Http\Request;

class QuestController extends Controller
{
    public function index()
    {
        // route --> /quests/
        $quests = Quest::with('region')->orderBy('created_at', 'asc')->get();


        return view('quests.index', ["quests" => $quests]);
    }

    public function show($id)
    {
        // route --> /quests/{id}
        $quest = Quest::with('region')->findOrFail($id);

        return view('quests.show', ["quest" => $quest]);
    }

    public function create()
    {
        // route --> /quests/create
        return view('quests.create');
    }

    public function store(Request $request)
    {
        // route --> POST /quests
        // validate & save the new quest to the database
    }
}
