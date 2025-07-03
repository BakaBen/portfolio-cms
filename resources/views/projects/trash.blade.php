<x-layouts.app :title="__('Projects')">
    <h2 class="text-2xl font-bold mb-4">Trash</h2>

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
                                <form action="{{ route('projects.restore', $project->id) }}" method="POST" class="inline">
                                    @csrf
                                    <button type="submit" class="text-green-500 hover:underline">
                                        <flux:icon.arrow-left-start-on-rectangle />
                                    </button>
                                </form>
                                <form action="{{ route('projects.force-delete', $project->id) }}" method="POST" class="inline">
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