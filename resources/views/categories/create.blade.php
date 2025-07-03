<x-layouts.app :title="__('Category')">
    <h2 class="text-2xl font-bold mb-4">Add Category</h2>

    @if(session('message'))
        <div class="mt-4 text-green-500">{{ session('message') }}</div>
    @endif
        <form action="{{ url('/categories') }}" method="POST" class="mt-6">
            @csrf
            <div class="mb-4">
                <label for="name" class="block text-sm text-gray-400">Category Name</label>
                <input type="text" id="name" name="name" class="mt-2 w-full p-2 rounded-md bg-transparent text-white border border-gray-600">
            </div>
            <button type="submit" class="flex px-6 py-2 text-white bg-transparent border border-white hover:bg-white hover:text-black transition rounded-md">Add Category</button>
        </form>
        
</x-layouts.app>