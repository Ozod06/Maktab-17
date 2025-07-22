<?php

namespace App\Http\Controllers;

use App\Mail\Message;
use App\Models\Classroom;
use App\Models\Club;
use App\Models\Director;
use App\Models\Employee;
use App\Models\Gallery;
use App\Models\Infografik;
use App\Models\Position;
use App\Models\Post;
use App\Models\Resourse;
use App\Models\Statistic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class FrontController extends Controller
{
    public function index(){
        // Bitta statistikani olish (eng oxirgi yoki birinchi)
        $statistic = Statistic::latest()->first();

        // Agar bo'sh bo'lsa, default qiymat qo'yish mumkin
        if (!$statistic) {
            $statistic = (object)[
                'sinflar_soni' => 0,
                'oquvchilar_soni' => 0,
                'oqituvchilar_soni' => 0,
                'bitiruvchilar_soni' => 0,
            ];
        }

        $posts = Post::latest()->take(6)->get(); // Oxirgi 6 ta post
        return view('section.index', compact('statistic', 'posts'));
    }

    public function rekvizit(){
        return view('section.rekvizit');
    }

    public function contact(){
        return view('section.contact');
    }

    public function education()
    {
        $smena1 = Classroom::where('smena', 1)->get();
        $smena2 = Classroom::where('smena', 2)->get();
        return view('section.education', compact('smena1', 'smena2'));
    }


    public function educationDetail($id){
        $detail = Club::findOrFail($id);
        return view('section.educationDetail', compact('detail'));
    }


    public function faq(){
        return view('section.faq');
    }

    public function gallery(){
        $galleries = Gallery::all(); // Barcha rasmlarni olish
        return view('section.gallery', compact('galleries'));
    }

    public function infoGrafika(){
        $infografiks = Infografik::latest()->take(3)->get();
        return view('section.infoGrafika', compact('infografiks'));
    }

    public function director()
    {
        // Directorni olish (misol uchun birinchi direktor)
        $director = Director::with('position')->first();
        // Zam direktorning pozitsiyasini olish
        $zamPosition = Position::where('name_uz', 'Ma\'naviyatchi')->first(); // yoki ->where('name_uz', 'Zam direktor')

        $zamDirector = null;
        if ($zamPosition) {
            $zamDirector = Director::with('position')->where('position_id', $zamPosition->id)->first();
        }

        // Agar direktor topilmasa, fallback qo‘yish mumkin:
        if (!$director) {
            abort(404, 'Director not found');
        }

        return view('section.director', compact('director', 'zamDirector'));
    }


    public function directorDetail($id = null)
    {
        $id = request('id');
        $director = Director::with('position')->findOrFail($id);

        // Agar bu direktor "Ma'naviyatchi" bo'lsa, shunda chiqaramiz
        $zamDirector = null;
        if ($director->position && $director->position->name_uz === "Ma'naviyatchi") {
            $zamDirector = $director;
        }

        return view('section.directorDetail', compact('director', 'zamDirector'));
    }


    public function newsDetail(){
        return view('section.newsDetail');
    }

    public function schoolNews(){
        $posts = Post::latest()->take(3)->get();
        return view('section.schoolNews',compact('posts'));
    }

    public function schoolRules(){
        return view('section.schoolRules');
    }

    public function schoolTask(){
        return view('section.schoolTask');
    }

    public function search(){
        return view('section.search');
    }

    public function stateSymbol(){
        return view('section.stateSymbol');
    }

    public function teachers(){
        $employees = Employee::with(['position', 'empcategory']) // 'category' emas, 'empcategory'
        ->whereHas('empcategory', function ($query) {
            $query->where('name_uz', '!=', 'Rahbariyat');  // Rahbariyat emaslarni olamiz
        })
            ->get()
            ->groupBy(fn($item) => $item->empcategory ? $item->empcategory->name_uz : 'Boshqa toifa');



        return view('section.teachers', compact('employees'));
    }

    public function usefulResourse(){

        $resourse = Resourse::all(); // yoki kerakli resourseni olasiz
        return view('section.usefulResourse', compact('resourse'));
    }

    public function usefulResursDetail($id){

        $resourse = Resourse::findOrFail($id);
        return view('section.usefulResursDetail', compact('resourse'));
    }

    public function smenaOne() {
        $classrooms = Classroom::where('smena', 1)->get();

        return view('section.smenaOne', compact('classrooms'));
    }
    public function smenaTwo()
    {
        $classrooms = Classroom::where('smena', 2)->get();
        return view('section.smenaTwo', compact('classrooms'));
    }
    public function additionallesson()
    {
        $classrooms = Classroom::where('smena', 3)->get(); // Qo'shimcha darslar
        $educationDetails = Club::all(); // To‘garaklar (club)

        return view('section.additionallesson', compact('classrooms', 'educationDetails'));
    }

    public function sendEmail(Request $request)
    {

         $data = $request->all();

         Mail::to('ozod80785@gmail.com')->send(new Message($data));
         return redirect()->route('contact')->with('success', 'Good job');
    }



}
