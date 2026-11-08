<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BukuController extends Controller
{
    private $daftarBuku = [
        [
            "id"=> "1",
            'judul' => 'Belajar PHp'
        ],
        [
            'id'=> '2',
            'judul' => 'Apa Aja'
        ]
    ];

    public function index()
    {
        $daftarBuku = $this->daftarBuku;
        return view('buku.index', compact('daftarBuku'));
    }

    // Add the missing show method
    public function show($id)
    {
        // Search for the book with the matching ID
        $buku = collect($this->daftarBuku)->firstWhere('id', $id);

        // Abort with a 404 page if the book ID is not found
        if (!$buku) {
            abort(404);
        }

        return view('buku.show', compact('buku'));
    }
}