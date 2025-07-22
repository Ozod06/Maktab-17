<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\EmployeeController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\PositionController;
use App\Http\Controllers\Admin\EmpCategoryController;
use App\Http\Controllers\Admin\DirectorController;
use App\Http\Controllers\Admin\StatisticsController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\ResourseController;
use App\Http\Controllers\Admin\InfografikController;
use App\Http\Controllers\Admin\GalleryController;
use App\Http\Controllers\Admin\ClubController;
use App\Http\Controllers\ClassroomController;
use App\Http\Controllers\ClassroomFrontController;
use App\Http\Controllers\SearchController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App;
use App\Models\Post;
use App\Http\Controllers\FrontController;
use App\Http\Middleware\SetLocale;



Route::get('/lang/{locale}', function ($locale) {
    $availableLocales = ['uz', 'ru'];
    if (in_array($locale, $availableLocales)) {
        session(['lang' => $locale]);
        app()->setLocale($locale);
    }
    return redirect()->back();
});
Route::get('/test', function () {
    App::setLocale('uz');
    return __('message.teachers');
});

Route::middleware([SetLocale::class])->group(function () {
    Route::get('/', function () {
        return view('welcome');
    });

Route::get('/',[FrontController::class,'index'])->name('index');
Route::get('/rekvizit',[FrontController::class,'rekvizit'])->name('rekvizit');
Route::get('/contact',[FrontController::class,'contact'])->name('contact');
Route::get('/education',[FrontController::class,'education'])->name('education');
Route::get('/educationDetail/{id}', [FrontController::class, 'educationDetail'])->name('educationDetail');
Route::get('/faq',[FrontController::class,'faq'])->name('faq');
Route::get('/gallery',[FrontController::class,'gallery'])->name('gallery');
Route::get('/infoGrafika',[FrontController::class,'infoGrafika'])->name('infoGrafika');
Route::get('/director',[FrontController::class,'director'])->name('director');
Route::get('/directorDetail',[FrontController::class,'directorDetail'])->name('directorDetail');
Route::get('/newsDetail',[FrontController::class,'newsDetail'])->name('newsDetail');
Route::get('/schoolNews',[FrontController::class,'schoolNews'])->name('schoolNews');
Route::get('/schoolRules',[FrontController::class,'schoolRules'])->name('schoolRules');
Route::get('/schoolTask',[FrontController::class,'schoolTask'])->name('schoolTask');
Route::get('/search',[FrontController::class,'search'])->name('search');
Route::get('/stateSymbol',[FrontController::class,'stateSymbol'])->name('stateSymbol');
Route::get('/teachers',[FrontController::class,'teachers'])->name('teachers');
Route::get('/usefulResourse',[FrontController::class,'usefulResourse'])->name('usefulResourse');
Route::get('/usefulResursDetail/{id}',[FrontController::class,'usefulResursDetail'])->name('usefulResursDetail');
Route::get('/smenaOne',[FrontController::class,'smenaOne'])->name('smenaOne');
Route::get('/smenaTwo',[FrontController::class,'smenaTwo'])->name('smenaTwo');
Route::get('/additionallesson',[FrontController::class,'additionallesson'])->name('additionallesson');
Route::get('/post/{id}', [FrontController::class, 'show'])->name('post.show');
Route::get('/news/detail/{id}', [PostController::class, 'newsDetail'])->name('news.detail');
Route::get('/search', [SearchController::class, 'search'])->name('search');
Route::post('/sendEmail', [FrontController::class, 'sendEmail'])->name('sendEmail');
Route::get('/rahbariyat', [DirectorController::class, 'director'])->name('director.index');
Route::get('/rahbariyat/{id}', [DirectorController::class, 'detail'])->name('director.show');
Route::get('/educationDetail/{id}', [ClubController::class, 'show'])->name('educationDetail');
Route::get('/club-detail/{id}', [FrontController::class, 'educationDetail'])->name('club.detail');






    Route::get('/class-schedule/{id}', [ClassroomFrontController::class,'show'])->name('class.show');

Route::get('/news/{id}', function ($id) {
    $post = Post::findOrFail($id);
    return view('section.newsDetail', compact('post'));
})->name('news.show');
Route::get('/test404', function () {
    abort(404);
});



Route::prefix('admin')->middleware('auth')->name('admin.')->group(function(){
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->middleware(['auth', 'verified'])->name('dashboard');
    Route::resource('employee', EmployeeController::class);
    Route::resource('category', CategoryController::class);
    Route::resource('position', PositionController::class);
    Route::resource('empcategory', EmpCategoryController::class);
    Route::resource('director', DirectorController::class);
    Route::resource('statistic', StatisticsController::class);
    Route::resource('post', PostController::class);
    Route::resource('resourse', ResourseController::class);
    Route::resource('infografik', InfografikController::class);
    Route::resource('classroom', ClassroomController::class);
    Route::resource('gallery', GalleryController::class);
    Route::resource('club', ClubController::class);

});
});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
