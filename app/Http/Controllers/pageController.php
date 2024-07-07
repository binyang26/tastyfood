<?php

namespace App\Http\Controllers;
use App\Models\Berita;
use App\Models\Galeri;
use App\Models\Contact;
use App\Models\Tentang;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;

class pageController extends Controller
{
    public function home()
    {
        $beritaData = Berita::get(); // Data berita
        $galeriData = Galeri::get(); // Data galeri
        $contact = Contact::get();
    
        return view('page.home', compact('beritaData', 'galeriData', 'contact'));
    }
    
    
    public function tentang()
    {
        $data = Tentang::get();
        $contact = Contact::get();
        return view('page.tentang', compact('data', 'contact')
        )->with('title', 'TENTANG KAMI');
    }
    

    public function berita()
    {
        Paginator::useBootstrap();
        $data = Berita::paginate(8);
        $contact = Contact::get();
        
        return view('page.berita', compact('data', 'contact'))->with('title', 'BERITA TERKINI');
    }

    public function galeri()
    {
        Paginator::useBootstrap();
        $data = Galeri::paginate(13);
        $contact = Contact::get();
        
        return view('page.galeri', compact('data', 'contact'))->with('title', 'GALERI KAMI');
    }

    public function kontak()
    {
        $data = Contact::get();
        $contact = Contact::get();
        
        return view('page.kontak', compact('data', 'contact'))->with('title', 'KONTAK KAMI');
    }
    

    public function kirim(Request $request){
        $request->validate([
            'subject' => 'required',
            'name' => 'required',
            'email' => 'required',
            'message' => 'required',
            'nomor' => 'required',
        ]);

        $subject = $request->input('subject');
        $name = $request->input('name');
        $email = $request->input('email');
        $message = $request->input('message');
        $nomor = $request->input('nomor');

        $whatsappMessage = "Subject: $subject\nNama : $name\nEmail: $email\nPesan :$message";

        $whatsappLink = "https://api.whatsapp.com/send?phone=$nomor&text=". urlencode($whatsappMessage);

        return redirect()->away($whatsappLink);
    }

    public function singlepage($id)
    {
        $data = Berita::find($id);
        $contact = Contact::get();
        
        return view('page.singlepage', [
            "title" => $id,
            'data' => $data,
            'contact' => $contact
        ]);
    }
    


}




