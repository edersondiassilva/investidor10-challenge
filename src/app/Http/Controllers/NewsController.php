<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreNewsRequest;
use App\Http\Requests\UpdateNewsRequest;
use App\Models\Category;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class NewsController extends Controller
{
    public function index(Request $request)
    {
        $categories = Category::orderBy('name')->get();

        $news = News::with('category')
            ->when($request->filled('title'), function ($query) use ($request) {
                $query->where('title', 'like', '%' . $request->title . '%');
            })
            ->when($request->filled('category_id'), function ($query) use ($request) {
                $query->where('category_id', $request->category_id);
            })
            ->latest()
            ->paginate(10)
            ->withQueryString();

        return view('news.index', compact('news', 'categories'));
    }

    public function create()
    {
        $categories = Category::orderBy('name')->get();

        return view('news.create', compact('categories'));
    }

    public function store(StoreNewsRequest $request)
    {
        News::create([
            'category_id' => $request->category_id,
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'content' => $request->content,
            'published_at' => $request->published_at,
        ]);

        return redirect()
            ->route('news.index')
            ->with('success', 'Notícia cadastrada com sucesso.');
    }

    public function show(News $news)
    {
        return redirect()->route('news.edit', $news);
    }

    public function edit(News $news)
    {
        $categories = Category::orderBy('name')->get();

        return view('news.edit', compact('news', 'categories'));
    }

    public function update(UpdateNewsRequest $request, News $news)
    {
        $news->update([
            'category_id' => $request->category_id,
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'content' => $request->content,
            'published_at' => $request->published_at,
        ]);

        return redirect()
            ->route('news.index')
            ->with('success', 'Notícia atualizada com sucesso.');
    }

    public function destroy(News $news)
    {
        $news->delete();

        return redirect()
            ->route('news.index')
            ->with('success', 'Notícia removida com sucesso.');
    }
}