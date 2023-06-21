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
        $posts = Post::latest()->paginate(5);
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
        'nomor_wa' => 'numeric|min:10',
        'uraian' => 'nullable',
    ],
        [
            'nomor_wa'=> 'Nomor harus angka',
        
        
        ]);

        if ($request->hasFile('sop')) {
            $file = $request->file('sop');
    
            // Lakukan operasi yang sesuai dengan file yang diunggah
            $filename = $file->getClientOriginalName();
            $file->storeAs('public/gambar-sop', $filename); // Simpan file ke direktori "uploads"
    
            // return "File uploaded successfully!";
        }

        if ($request->hasFile('tampilan')) {
            $file = $request->file('tampilan');
    
            // Lakukan operasi yang sesuai dengan file yang diunggah
            $filename = $file->getClientOriginalName();
            $file->storeAs('public/gambar-tampilan', $filename); // Simpan file ke direktori "uploads"
    
            // return "File uploaded successfully!";
        }
        

        if ($request->hasFile('rapat')) {
            $file = $request->file('rapat');
    
            // Lakukan operasi yang sesuai dengan file yang diunggah
            $filename = $file->getClientOriginalName();
            $file->storeAs('public/gambar-rapat', $filename); // Simpan file ke direktori "uploads"
    
            // return "File uploaded successfully!";
        }

       $post = new Post;
   
       $post->sop = $request->sop;
       $post->tampilan = $request->tampilan;
       $post->rapat = $request->rapat;
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

       $post->save();

       return back();

    //    return redirect()->route('posts/create')->with('message', 'Success'); 

   }

   public function show($id)
{
    $post = Post::find($id);
    if (!$post) {
        return redirect()->back()->with('error', 'Post not found');
    }
    return view('post.show', ['post' => $post]);
}

   public function edit($id)
    {
        $post = Post::find($id);
        if (!$post) {
            return redirect()->back()->with('error', 'Post not found');
        }

        // Implementasikan logika untuk tampilan edit post
        return view('post.edit', compact('post'));
    }

    public function update(Request $request, $id)
    {
        $post = Post::find($id);
        if (!$post) {
            return redirect()->back()->with('error', 'Post not found');
        }

        $request->validate([
            'sop' => 'max:2048|mimes:pdf,doc,docx|nullable',
            'tampilan' => 'max:2048|mimes:pdf,doc,docx|nullable',
            'rapat' => 'max:2048|mimes:pdf,doc,docx|nullable',
            'nomor_wa' => 'numeric',
            'uraian' => 'nullable',
        ], ['nomor_wa' => 'Nomor harus angka',]);

        if ($request->hasFile('sop')) {

            //upload new image
            $file = $request->file('sop');
            $filename = $file->getClientOriginalName();
            $file->storeAs('public/gambar-sop', $filename); // Simpan file ke direktori "pos"

            //delete old image
            Storage::delete('public/gambar-sop/'.$post->sop);

            //update post with new image
            $post->update([
                'sop'     => $file->hashName(),
                // 'nama_opd'     => $request->nama_opd,
                // 'nama_apk'   => $request->nama_apk
            ]);

        }

        if ($request->hasFile('tampilan')) {

            //upload new image
            $file = $request->file('tampilan');
            $filename = $file->getClientOriginalName();
            $file->storeAs('public/gambar-tampilan', $filename); // Simpan file ke direktori "pos"

            //delete old image
            Storage::delete('public/gambar-tampilan/'.$post->tampilan);

            //update post with new image
            $post->update([
                'tampilan'     => $file->hashName(),
                // 'nama_opd'     => $request->nama_opd,
                // 'nama_apk'   => $request->nama_apk
            ]);

        }

        if ($request->hasFile('rapat')) {

            //upload new image
            $file = $request->file('rapat');
            $filename = $file->getClientOriginalName();
            $file->storeAs('public/gambar-rapat', $filename); // Simpan file ke direktori "pos"

            //delete old image
            Storage::delete('public/gambar-rapat/'.$post->rapat);

            //update post with new image
            $post->update([
                'rapat'     => $file->hashName(),
                // 'nama_opd'     => $request->nama_opd,
                // 'nama_apk'   => $request->nama_apk
            ]);

        }

        $post->sop = $request->sop;
        $post->tampilan = $request->tampilan;
        $post->rapat = $request->rapat;
        $post->nama_apk = $request->nama_apk;
        $post->versi = $request->versi;
        $post->nomor_sk = $request->nomor_sk;
        $post->tahun_sk = $request->tahun_sk;
        $post->kondisi = $request->input('kondisi');
        $post->alasan = $request->input('alasan');
        $post->nama_admin = $request->nama_admin;
        $post->nomor_wa = $request->nomor_wa;
        $post->email = $request->email;
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
        // $uploadedFilesop = $request->file('sop');
        // $uploadedFiletampilan = $request->file('tampilan');
        // $uploadedFilerapat = $request->file('rapat');

        // if ($uploadedFilesop !== null) {
            // Menghapus file lama jika ada
            // if ($post->sop !== null) {
            //     Storage::delete('public/gambar-sop/' . $post->sop);
            // }

            // Menyimpan file baru ke server
        //     $originalName = $uploadedFilesop->getClientOriginalName();
        //     $path = $uploadedFilesop->storeAs('public/gambar-sop', $originalName);
        //     $post->sop = $originalName;
        //     $post->sop_path = $path;
        // }

        // if ($uploadedFiletampilan !== null) {
            // Menghapus file lama jika ada
            // if ($post->tampilan !== null) {
            //     Storage::delete('public/gambar-tampilan/' . $post->tampilan);
            // }

            // Menyimpan file baru ke server
        //     $originalName = $uploadedFiletampilan->getClientOriginalName();
        //     $path = $uploadedFiletampilan->storeAs('public/gambar-tampilan', $originalName);
        //     $post->tampilan = $originalName;
        //     $post->tampilan_path = $path;
        // }

        // if ($uploadedFilerapat !== null) {
            // Menghapus file lama jika ada
            // if ($post->rapat !== null) {
            //     Storage::delete('public/gambar-rapat/' . $post->rapat);
            // }

            // Menyimpan file baru ke server
        //     $originalName = $uploadedFilerapat->getClientOriginalName();
        //     $path = $uploadedFilerapat->storeAs('public/gambar-rapat', $originalName);
        //     $post->rapat = $originalName;
        //     $post->rapat_path = $path;
        // }

        $post->save();

        return back();
    }

    public function destroy($id)
    {
        $post = Post::find($id);
        if (!$post) {
            return redirect()->back()->with('error', 'Post not found');
        }

        // Menghapus file terkait jika ada
        if ($post->sop !== null) {
            Storage::delete('public/gambar-sop/' . $post->sop);
        }

        if ($post->tampilan !== null) {
            Storage::delete('public/gambar-tampilan/' . $post->tampilan);
        }

        if ($post->rapat !== null) {
            Storage::delete('public/gambar-rapat/' . $post->rapat);
        }

        $post->delete();

        return redirect()->back()->with('success', 'Post deleted successfully');
    }



}