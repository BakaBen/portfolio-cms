<x-layouts.app :title="__('Project')">
    <h2 class="text-2xl font-bold mb-4">Create New Project</h2>

    <form action="{{ route('projects.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="space-y-4">
            <!-- Project Name -->
            <div class="flex flex-col">
                <label for="name" class="text-white text-lg">Project Name</label>
                <input type="text" name="name" id="name" class="mt-2 p-3 rounded-md bg-transparant border border-white text-white focus:outline-none focus:ring-2 focus:ring-white" placeholder="Enter project name" required>
                @error('name')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <!-- Project Description -->
            <div class="flex flex-col">
                <label for="description" class="text-white text-lg">Description</label>
                <textarea name="description" id="description" rows="4" class="mt-2 p-3 rounded-md bg-transparant border border-white text-white focus:outline-none focus:ring-2 focus:ring-white" placeholder="Enter project description" required></textarea>
                @error('description')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <!-- Category -->
            <div class="flex flex-col">
                <label for="category_id" class="text-white text-lg">Category</label>
                <select name="category_id" id="category_id" class="mt-2 p-3 rounded-md bg-transparant border border-white text-white focus:outline-none focus:ring-2 focus:ring-white" required>
                    <div class="text-black">
                            <option value="">Select category</option>
                            <!-- Assuming categories are passed from the controller -->
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                    </div>   
                </select>
                @error('category_id')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <!-- Thumbnail -->
            <div class="flex flex-col">
                <label for="thumbnail" class="text-white text-lg">Project Thumbnail</label>
                <input type="file" name="thumbnail" id="thumbnail" class="mt-2 p-3 rounded-md bg-transparant border border-white text-white focus:outline-none focus:ring-2 focus:ring-white">
                @error('thumbnail')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <!-- Submit Button -->
            <div class="flex justify-end">
                <button type="submit" class="mt-4 py-2 px-6 bg-transparant border border-white text-white rounded-md hover:bg-white hover:text-black transition focus:outline-none focus:ring-2 text-sm">Create Project</button>
            </div>
        </div>
    </form>

</x-layouts.app>
