<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class ArticleController extends Controller
{
    public function readArticlePage()
    {
        $articles = Article::all();
        return view('admin.article.index', compact('articles'));
    }

    public function createArticlePage()
    {
        return view('admin.article.create');
    }

    public function storeArticle(Request $request)
    {
        try {
            if ($request->hasFile('image')) {
                $filenameWithExt = $request->file('image')->getClientOriginalName();
                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                $extension = $request->file('image')->getClientOriginalExtension();
                $fileNameToStore = $filename . '_' . time() . '.' . $extension;
                $request->file('image')->storeAs('public/article', $fileNameToStore);
            } else
                $fileNameToStore = 'dummy.png';
            Article::create([
                'title' => $request->title,
                'author' => $request->author,
                'description' => $request->description,
                'image' => $fileNameToStore
            ]);
        } catch (\Exception $e) {
            $eMessage = 'Add Article - User: ' . Auth::user()->id . ', error: ' . $e->getMessage();
            Log::emergency($eMessage);
            return redirect()->back()->with('error', 'Whoops, something error!');
        }

        return redirect('/admin/article')->with('message', 'success');
    }

    public function getArticle($id)
    {
        try {
            $article = Article::find($id);
        } catch (Exception $e) {
            return response()->json(['message' => $e->getMessage()], $e->getCode());
        }

        return response()->json($article);
    }

    public function updateArticle(Request $request)
    {
        try {
            Article::find($request->id)->update([
                'title' => $request->title,
                'author' => $request->author,
                'description'  =>  $request->description,
                'created_at'    =>  $request->created_at,
                'updated_at'    =>  $request->created_at,
            ]);
        } catch (\Exception $e) {
            $eMessage = 'update article - User: ' . Auth::user()->id . ', error: ' . $e->getMessage();
            Log::emergency($eMessage);
            return redirect()->back()->with('error', 'Whoops, something error!');
        }
        return redirect()->back()->with('message', 'success');
    }

    public function deleteArticle(Request $request)
    {
        try {
            $article = Article::where('id', $request->id);
            if ($article->image != 'dummy.png')
                Storage::delete('public/article/' . $article->image);
            $article->delete();
        } catch (\Exception $e) {
            $eMessage = 'delete article - User: ' . Auth::user()->id . ', error: ' . $e->getMessage();
            Log::emergency($eMessage);
            return redirect()->back()->with('error', 'Whoops, something error!');
        }
        return redirect()->back()->with('message', 'success');
    }

    public function exportArticle()
    {
        try {
            $headers = [
                'Cache-Control'       => 'must-revalidate, post-check=0, pre-check=0',
                'Content-type'        => 'text/csv',
                'Content-Disposition' => 'attachment; filename=Duacare-Artikel.csv',
                'Expires'             => '0',
                'Pragma'              => 'public'
            ];

            $list = Article::all()->toArray();

            # add headers for each column in the CSV download
            array_unshift($list, array_keys($list[0]));

            $callback = function () use ($list) {
                $FH = fopen('php://output', 'w');
                foreach ($list as $row) {
                    fputcsv($FH, $row);
                }
                fclose($FH);
            };

            return new StreamedResponse($callback, 200, $headers);
        } catch (\Exception $e) {
            $eMessage = 'Export Article - User: ' . Auth::user()->id . ', error: ' . $e->getMessage();
            Log::emergency($eMessage);
            return redirect()->back()->with('error', 'Whoops, something error!');
        }
    }
}
