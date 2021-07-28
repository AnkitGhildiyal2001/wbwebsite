<?php


namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\SubjectChapterTable;
use Session;


class ChaptersController extends Controller
{
    public function index()
    {
        $chapters = DB::table('subject_chapters')->get();
        return view('Chapters.view_all_chapters')->with('chapters',$chapters);
    }
    public function viewChapter($id)
    {
        $chapter = DB::table('subject_chapters')->where('id',$id)->first();
        return  view('Chapters.ViewChapter')->with('chapter',$chapter);
    }
    public function viewQuiz($id)
    {
        $quizzes = DB::table("quizzes")->where('chapter_id',$id)->get();
        return view('Chapters.viewQuiz')->with('quizzes',$quizzes);
    }

    public function testForm(Request $request)
    {

        $chapters = DB::table('subject_chapters')->get();
    }
}