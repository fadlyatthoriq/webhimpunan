<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Carousel;
use App\Models\About;
use App\Models\StrukturOrg;
use TCG\Voyager\Models\Post;

class IndexController extends Controller
{
    public function index (){

        $carousels = Carousel::orderBy('id')->get();

        $sejarah = About::where('id', 1)->get();
        $visimisi = About::where('id', 2)->get();

        $kajur = StrukturOrg::where('position', '=', 'Kepala Jurusan')->get();
        $pembina1 = StrukturOrg::where('position', '=', 'Pembina 1')->get();
        $pembina2 = StrukturOrg::where('position', '=', 'Pembina 2')->get();
        $kahim = StrukturOrg::where('position', '=', 'Ketua Himpunan')->get();
        $wakahim1 = StrukturOrg::where('position', '=', 'Wakil Ketua Himpunan 1')->get();
        $wakahim2 = StrukturOrg::where('position', '=', 'Wakil Ketua Himpunan 2')->get();
        $sekret1 = StrukturOrg::where('position', '=', 'Sekretaris 1')->get();
        $sekret2 = StrukturOrg::where('position', '=', 'Sekretaris 2')->get();
        $bendahara1 = StrukturOrg::where('position', '=', 'Bendahara 1')->get();
        $bendahara2 = StrukturOrg::where('position', '=', 'Bendahara 2')->get();
        $koorinfokom = StrukturOrg::where('position', '=', 'Koordinator Informasi dan Komunikasi')->get();
        $koorpemtek = StrukturOrg::where('position', '=', 'Koordinator Pengembangan Teknologi')->get();
        $koorkastrat = StrukturOrg::where('position', '=', 'Koordinator Kajian dan Riset Strategis')->get();
        $koordanus = StrukturOrg::where('position', '=', 'Koor Dana Usaha')->get();
        $koorhumas = StrukturOrg::where('position', '=', 'Koor Humas & Pengabdian Masyarakat')->get();
        $memberinfokom = StrukturOrg::where('position', '=', 'Anggota Informasi dan Komunikasi')->get();
        $memberpemtek = StrukturOrg::where('position', '=', 'Anggota Pengembangan Teknologi')->get();
        $memberdanus = StrukturOrg::where('position', '=', 'Anggota Dana Usaha')->get();
        $memberhumas = StrukturOrg::where('position', '=', 'Anggota Humas & Pengabdian Masyarakat')->get();
        $memberkastrat = StrukturOrg::where('position', '=', 'Anggota Kajian dan Riset Strategis')->get();

        $post = Post::get();


        return view('index', 
        compact('carousels', 'sejarah', 'visimisi', 'kajur', 'pembina1', 'pembina2', 'kahim', 'wakahim1', 'wakahim2', 'sekret1', 'sekret2', 'bendahara1', 'bendahara2', 'koorinfokom', 'koorpemtek', 'koorkastrat', 'koordanus', 'koorhumas', 'memberinfokom', 'memberpemtek', 'memberdanus', 'memberhumas', 'memberkastrat', 'post'));
    }
    
    public function showBySlug($slug)
    {
        $post = Post::where('slug', $slug)->firstOrFail();
        $show = Post::where('slug', $slug)->get();
        return view('posts.show', compact('post', 'show'));
    }

}
