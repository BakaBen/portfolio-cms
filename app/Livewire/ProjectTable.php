<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Project;

class ProjectTable extends Component
{
    use WithPagination;

    public $sortBy = 'created_at';
    public $sortDirection = 'desc';

    // Method to render the table with pagination
    public function render()
    {
        $projects = Project::with('category')
            ->orderBy($this->sortBy, $this->sortDirection)
            ->paginate(10);

        return view('projects.index', compact('projects'));
    }

    // Method to handle sorting
    public function sort($column)
    {
        if ($this->sortBy === $column) {
            $this->sortDirection = $this->sortDirection === 'asc' ? 'desc' : 'asc';
        } else {
            $this->sortBy = $column;
            $this->sortDirection = 'asc';
        }
    }
}
