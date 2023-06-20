<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post; 
use Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;
use Symfony\Component\HttpFoundation\RedirectResponse;



class PostController extends Controller
{
    public function index()
    {
        $posts = Post::with('user')->get();
        return view('post.posts', ['posts' => $posts]);
    }

   public function create()
   {
       return view('post.create');
   }
   
   public function store(Request $request)
   {

    $request->validate([
        'sop' => 'max:2048|mimes:pdf,doc,docx|nullable',
        'tampilan' => 'max:2048|mimes:pdf,doc,docx|nullable',
        'rapat' => 'max:2048|mimes:pdf,doc,docx|nullable',
        'nomor_wa' => 'numeric',
    ],
        ['nomor_wa'=> 'Nomor harus angka',]
        );
 
       $post = new Post;
   
       $post->nama_apk = $request->nama_apk;
       $post->versi = $request->versi;
       $post->nomor_sk = $request->nomor_sk;
       $post->tahun_sk = $request->tahun_sk;
       $post->kondisi = $request->input('kondisi');
       $post->alasan = $request->input('alasan');
       $post->nama_admin = $request->nama_admin;
       $post->nomor_wa = $request->nomor_wa;
       $post->email = $request->email;
    //    $post->body = $request->body;
       $post->jumlah_pengguna = $request->jumlah_pengguna;
       $post->alamat_web = $request->alamat_web;
       $post->jenis_layanan = $request->input('jenis_layanan');
       $post->pemilik = $request->input('pemilik');
       $post->uraian = $request->input('uraian');
       $post->bug = $request->bug;
       $post->pelatihan = $request->pelatihan;
       $post->kendala = $request->kendala;
       $post->user_id = Auth::user()->id;

       // Mendapatkan file yang diunggah dari form
        $uploadedFilesop = $request->file('sop');
        $uploadedFiletampilan = $request->file('tampilan');
        $uploadedFilerapat = $request->file('rapat');
        if ($uploadedFilesop !== null) {
        // Menyimpan file ke server
        $originalName = $uploadedFilesop->getClientOriginalName();
        $path = $uploadedFilesop->storeAs('public/gambar-sop', $originalName);
        $post->sop = $originalName;
        $post->sop = $path;
        $post->save();
       }else{
        $post->sop = "Tidak Ada File";
        $post->sop = null;
        $post->save();
       }

       if ($uploadedFiletampilan !== null) {
        // Menyimpan file ke server
        $originalName = $uploadedFiletampilan->getClientOriginalName();
        $path = $uploadedFiletampilan->storeAs('public/gambar-tampilan', $originalName);
        $post->sop = $originalName;
        $post->sop = $path;
        $post->save();
       }else{
        $post->sop = "Tidak Ada File";
        $post->sop = null;
        $post->save();
       }

       if ($uploadedFilerapat !== null) {
        // Menyimpan file ke server
        $originalName = $uploadedFilerapat->getClientOriginalName();
        $path = $uploadedFilerapat->storeAs('public/gambar-rapat', $originalName);
        $post->sop = $originalName;
        $post->sop = $path;
        $post->save();
       }else{
        $post->sop = "Tidak Ada File";
        $post->sop = null;
        $post->save();
       }

       $post->save();

       return back();

    //    return redirect()->route('posts/create')->with('message', 'Success'); 

   }

   /**
     * show
     *
     * @param  mixed $id
     * @return View
     */
    public function show(string $id): View
    {
        $post = Post::find($id);

    return view('post.show', compact('post'));
    }

    // use App\Models\User
// ...

public function destroy($id)
{
    $post = Post::find($id);

    if ($post) {
        $post->delete();

        return redirect()->route('dasboard')->with('success', 'User deleted successfully.');
    } else {
        return redirect()->route('dasboard')->with('error', 'User not found.');
    }
}


}