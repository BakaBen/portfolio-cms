<x-layouts.app :title="__('Projects')">
    <div class="flex justify-between mb-4">
        <h2 class="text-2xl font-bold mb-4">Projects</h2>

        <div class="flex items-center space-x-2 rtl:space-x-reverse">
            <a href="{{ route('projects.create') }}" class="flex px-6 py-2 text-sm text-white bg-transparent border border-white hover:bg-white hover:text-black transition rounded-md">Add Project</a>
        </div>
    </div>

    <div class="overflow-x-auto rounded-md">
        <table class="min-w-full table-auto text-left text-sm border-collapse">
            <thead>
                <tr class="bg-transparent border border-white rounded-md text-white">
                    <th class="px-4 py-2">Date</th>
                    <th class="px-4 py-2">Project Name</th>
                    <th class="px-4 py-2">Category</th>
                    <th class="px-4 py-2">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($projects as $project)
                    <tr class="border-b">
                        <td class="px-4 py-2">{{ $project->created_at->format('d-m-Y') }}</td>
                        <td class="px-4 py-2">{{ $project->name }}</td>
                        <td class="px-4 py-2">{{ $project->category->name }}</td>
                        <td class="px-4 py-2">
                            <div class="flex flex-row gap-2">
                                <a href="{{ route('projects.show', $project) }}" class="text-blue-500 hover:underline">
                                    <flux:icon.eye />
                                </a>
                                <a href="{{ route('projects.edit', $project) }}" class="text-green-500 hover:underline">
                                    <flux:icon.pencil-square />
                                </a>
                                <form action="{{ route('projects.destroy', $project) }}" method="POST" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-500 hover:underline">
                                        <flux:icon.trash />
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</x-layouts.app>