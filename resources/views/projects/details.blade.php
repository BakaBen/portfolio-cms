<x-layouts.app :title="__('Project')">
    <h2 class="text-2xl font-bold mb-4">Project Details</h2>

    <div class="space-y-4">
        <!-- Project Name -->
        <div class="flex flex-col">
            <label class="text-white text-lg">Project Name</label>
            <p class="mt-2 p-3 rounded-md bg-gray-700 text-white">{{ $project->name }}</p>
        </div>

        <!-- Project Description -->
        <div class="flex flex-col">
            <label class="text-white text-lg">Description</label>
            <p class="mt-2 p-3 rounded-md bg-gray-700 text-white">{{ $project->description }}</p>
        </div>

        <!-- Category -->
        <div class="flex flex-col">
            <label class="text-white text-lg">Category</label>
            <p class="mt-2 p-3 rounded-md bg-gray-700 text-white">{{ $project->category->name }}</p>
        </div>

        <!-- Thumbnail -->
        <div class="flex flex-col">
            <label class="text-white text-lg">Project Thumbnail</label>
            @if ($project->thumbnail)
                <img src="{{ asset('storage/' . $project->thumbnail) }}" class="mt-2 p-3 rounded-md max-w-full">
            @else
                <p class="mt-2 p-3 text-white">No thumbnail here</p>
            @endif
        </div>

        <div class="flex justify-end space-x-4">
            <!-- Edit Button -->
            <a href="{{ route('projects.edit', $project->id) }}" class="py-2 px-6 bg-blue-500 text-white rounded-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500">Edit</a>

            <!-- Delete Button -->
            <form action="{{ route('projects.destroy', $project->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="py-2 px-6 bg-red-500 text-white rounded-md hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-red-500">Delete</button>
            </form>
        </div>
    </div>
</x-layouts.app>