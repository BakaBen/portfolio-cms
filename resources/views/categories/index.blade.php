<x-layouts.app :title="__('Categories')">
    <div class="flex justify-between">
        <h2 class="text-2xl font-bold mb-4">Categories</h2>
        <a href="{{ route('categories.create') }}" class="flex px-6 py-2 text-sm items-center text-white bg-transparent border border-white hover:bg-white hover:text-black transition rounded-md">Add Category</a>
    </div>

    <table class="mt-6 w-full text-left table-auto">
        <thead>
            <tr>
                <th class="px-4 py-2 text-sm text-gray-400">Name</th>
                <th class="px-4 py-2 text-sm text-gray-400">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($categories as $category)
                <tr>
                    <td class="px-4 py-2 text-white">{{ $category->name }}</td>
                    <td class="flex flex-row gap-2 px-4 py-2">
                        <form action="{{ route('categories.destroy', $category->id) }}" method="POST" class="inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="flex px-6 py-2 text-sm text-red-700 bg-transparent border border-red-700 hover:bg-red-700 hover:text-white transition rounded-md">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</x-layouts.app>