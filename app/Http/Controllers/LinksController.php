<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LinksController extends Controller
{

    public function __construct()
    {
        // проверка на авторизованность
        $this->middleware('auth');

    }

    public function viewLaravel()
    {
        $allNotes = DB::table('notes')->where('category', 'laravel')->orderBy('created_at', 'desc')->get();

        foreach ($allNotes as $note) {
            $note->tags = explode(',', $note->tags);
        }

        return view('laravel', [
            'data' => $allNotes
        ]);
    }

    public function viewVue()
    {
        $allNotes = DB::table('notes')->where('category', 'vue')->orderBy('created_at', 'desc')->get();

        foreach ($allNotes as $note) {
            $note->tags = explode(',', $note->tags);
        }

        return view('vue', [
            'data' => $allNotes
        ]);
    }
}
