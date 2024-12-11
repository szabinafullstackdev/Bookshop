<?php
/*
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Author;

class AuthorController extends Controller
{
    public function index()
    {

        $authors = Author::all();
        return view('authors.index', compact('authors'));
    }

    public function create()
    {

        return view('authors.create');
    }

    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        Author::create($request->all());

        return redirect()->route('authors.index')->with('success', 'Author created successfully.');
    }

    public function show($id)
    {

        $author = Author::find($id);
        return view('authors.show', compact('author'));
    }

    public function edit($id)
    {
 
        $author = Author::find($id);
        return view('authors.edit', compact('author'));
    }

    public function update(Request $request, $id)
    {

        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $author = Author::find($id);
        $author->update($request->all());

        return redirect()->route('authors.index')->with('success', 'Author updated successfully.');
    }

    public function destroy($id)
    {

        $author = Author::find($id);
        $author->delete();

        return redirect()->route('authors.index')->with('success', 'Author deleted successfully.');
    }
}
*/
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Author;

class AuthorController extends Controller
{
    public function index()
    {
        $authors = Author::all();
        return view('authors.index', compact('authors'));
    }

    public function create()
    {
        return view('authors.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        Author::create($request->all());
        return redirect()->route('authors.index')->with('success', 'Author created successfully.');
    }

    public function show($id)
    {
        $author = Author::findOrFail($id);
        return view('authors.show', compact('author'));
    }

    public function edit($id)
    {
        $author = Author::findOrFail($id);
        return view('authors.edit', compact('author'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $author = Author::findOrFail($id);
        $author->update($request->all());
        return redirect()->route('authors.index')->with('success', 'Author updated successfully.');
    }

    public function destroy($id)
    {
        $author = Author::findOrFail($id);
        $author->delete();
        return redirect()->route('authors.index')->with('success', 'Author deleted successfully.');
    }
}
