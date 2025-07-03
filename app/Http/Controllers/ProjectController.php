<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\Storage;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = Project::with('category')->latest()->paginate(10);
        return compact('projects');
    }

    public function profile()
    {
        $data = $this->index();
        return view('welcome', $data);
    }

    public function projectSet()
    {
        $data = $this->index();
        return view('projects.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('projects.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
        'name' => 'required',
        'description' => 'required',
        'category_id' => 'required|exists:categories,id',
        'thumbnail' => 'nullable|image|max:2048'
        ]);

        if ($request->hasFile('thumbnail')) {
            // Menyimpan file dan mendapatkan path-nya
            $thumbnail = $request->file('thumbnail')->store('thumbnails', 'public');
            $data['thumbnail'] = $thumbnail;  // Menyimpan path file ke variabel data
        }

        Project::create($data);

        return redirect()->route('projects.index')->with('success', 'Project created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        $project = Project::findOrFail($project->id);
        return view('projects.details', compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        $project = Project::findOrFail($project->id);
        $categories = Category::all();
        return view('projects.edit', compact('project', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Project $project)
    {
        $data = $request->validate([
        'name' => 'required',
        'description' => 'required',
        'category_id' => 'required|exists:categories,id',
        'thumbnail' => 'image|max:2048'
        ]);

        if ($request->hasFile('thumbnail')) {
            // Hapus thumbnail lama jika ada
            if ($project->thumbnail && Storage::disk('public')->exists($project->thumbnail)) {
                Storage::disk('public')->delete($project->thumbnail);
            }

            // Simpan thumbnail baru
            $data['thumbnail'] = $request->file('thumbnail')->store('thumbnails', 'public');
        }


        $project->update($data);

        return redirect()->route('projects.index')->with('success', 'Project updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        $project = Project::findOrFail($project->id);
        $project->delete();

        return redirect()->route('projects.index')->with('success', 'Project deleted successfully');
    }
}
