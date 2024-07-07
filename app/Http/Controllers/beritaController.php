<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;
use Illuminate\Pagination\Paginator;
class beritaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        Paginator::useBootstrap();
        $katakunci = $request->katakunci;
        $jumlahbaris = 5;
        if(strlen($katakunci)){
            $data = Berita::where('id','like',"%$katakunci%")
                ->orWhere('title','like',"%$katakunci%")
                ->orWhere('isi','like',"%$katakunci%")
                ->paginate($jumlahbaris);
        }else{
            
            $data = Berita::orderBy('id', 'desc')->paginate($jumlahbaris);
        }
        return view('admin.berita.data')->with('data',$data);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return View('admin.berita.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
{

    $validatedData = $request->validate([
        'title' => 'required',
        'isi' => 'required',
        'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
    ], [
        'title.required' => 'Judul harus diisi.',
        'isi.required' => 'Isi berita harus diisi.',
        'image.required' => 'Gambar berita harus diunggah.',
        'image.image' => 'File harus berupa gambar.',
        'image.mimes' => 'Format gambar harus jpeg, png, jpg, atau gif.',
        'image.max' => 'Ukuran gambar tidak boleh lebih dari 2MB.',
    ]);
    
    $namaGambar = null;
    if ($request->hasFile('image')) {
        $pathGambar = public_path() . '/gambar-Berita';
        $namaGambar = $request->file('image')->getClientOriginalName();

        if (file_exists($pathGambar . '/' . $namaGambar)) {
            
        } else {
            $request->file('image')->move($pathGambar, $namaGambar);
        }
    }

    $data = [
        'id' => $request->id,
        'title' => $request->title,
        'isi' => $request->isi,
        'image' => $namaGambar,
    ];

    Berita::create($data);
    return redirect()->to('/admin/berita')->with('success','Data Berhasil ditambahkan');
}

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Berita::where('id',$id)->first();
        return view('admin.berita.update')->with('data',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = [
            'title' => $request->title,
            'isi' => $request->isi,
        ];
    
        if ($request->hasFile('image')) {
            $pathGambar = public_path() . '/gambar-Berita';
            $namaGambar = $request->file('image')->getClientOriginalName();
    
            if (file_exists($pathGambar . '/' . $namaGambar)) {

            } else {
                $request->file('image')->move($pathGambar, $namaGambar);
            }
            $data['image'] = $namaGambar;
        }
    
        Berita::where('id', $id)->update($data);
    
        return redirect()->to('admin/berita')->with('success', 'Data berhasil diperbarui');
    }
    
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $berita = Berita::find($id);

        $berita->delete();
        return redirect()->to('admin/berita')->with('success', 'Data berhasil dihapus');
    }
    
}
