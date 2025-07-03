<x-layouts.app :title="__('Projects')">
    <form action="{{ route('projects.update', $project->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        
        <div class="space-y-4">
            <!-- Project Name -->
            <div class="flex flex-col">
                <label for="name" class="text-white text-lg">Project Name</label>
                <input type="text" name="name" id="name" value="{{ $project->name }}" class="mt-2 p-3 rounded-md bg-gray-700 text-white focus:outline-none focus:ring-2 focus:ring-blue-500" required>
            </div>

            <!-- Project Description -->
            <div class="flex flex-col">
                <label for="description" class="text-white text-lg">Description</label>
                <textarea name="description" id="description" rows="4" class="mt-2 p-3 rounded-md bg-gray-700 text-white focus:outline-none focus:ring-2 focus:ring-blue-500" required>{{ $project->description }}</textarea>
            </div>

            <!-- Category -->
            <div class="flex flex-col">
                <label for="category_id" class="text-white text-lg">Category</label>
                <select name="category_id" id="category_id" class="mt-2 p-3 rounded-md bg-gray-700 text-white focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}" @if($category->id == $project->category_id) selected @endif>{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>

            <!-- Thumbnail -->
            <div class="mb-4">
                <label for="thumbnail">Thumbnail:</label>
                <input type="file" name="thumbnail" id="thumbnail" class="block w-full">
                @if($project->thumbnail)
                    <img src="{{ asset('storage/' . $project->thumbnail) }}" alt="Current thumbnail" class="mt-2 h-24">
                @endif
            </div>

            <!-- Submit Button -->
            <div class="flex justify-end">
                <button type="submit" class="py-2 px-6 bg-blue-500 text-white rounded-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500">Save Changes</button>
            </div>
        </div>
    </form>
</x-layouts.app>