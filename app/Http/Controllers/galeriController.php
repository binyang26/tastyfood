<?php

namespace App\Http\Controllers;

use App\Models\Galeri;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;


class galeriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        Paginator::useBootstrap();
        $data = Galeri::orderBy('created_at', 'desc')->paginate(6);
        return view('admin.galeri.index')->with('data', $data);
        
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return View('admin.galeri.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->hasFile('image')) {
            $pathGambar = public_path() . '/gambar-Berita';
            $namaGambar = $request->file('image')->getClientOriginalName();

            if (file_exists($pathGambar . '/' . $namaGambar)) {
                // Jika gambar dengan nama yang sama sudah ada, gunakan nama gambar yang ada
            } else {
                $request->file('image')->move($pathGambar, $namaGambar);
            }
        }
        $data = [
            'image'=>$namaGambar
        ];
        Galeri::create($data);
        return redirect()->to('admin/galeri')->with('success','Data Berhasil ditambahkan');
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
        $data = Galeri::where('id',$id)->first();
        return view('admin.galeri.update')->with('data',$data);
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
    
        Galeri::where('id', $id)->update($data);
    
        return redirect()->to('admin/galeri')->with('success', 'Data berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $galeri = Galeri::find($id);
        $galeri->delete();    
        return redirect()->to('admin/galeri')->with('success', 'Data berhasil dihapus');
    }
}
