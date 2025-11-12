<x-app-layout>


<div class="container mx-auto py-10">
    <div class="flex justify-between items-center mb-6">
        <h2 class="text-2xl font-bold">Manage Announcements</h2>
        <a href="{{ route('private.announcements.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded">Create</a>
    </div>

    <table class="min-w-full bg-white shadow rounded">
        <thead class="bg-gray-100 text-gray-600 uppercase text-sm">
            <tr>
                <th class="py-3 px-4 text-left">Title</th>
                <th class="py-3 px-4 text-left">Active</th>
                <th class="py-3 px-4 text-right">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($announcements as $announcement)
            <tr class="border-t">
                <td class="py-3 px-4">{{ $announcement->title }}</td>
                <td class="py-3 px-4">{{ $announcement->is_active ? 'Yes' : 'No' }}</td>
                <td class="py-3 px-4 text-right">
                    <form method="POST" action="{{ route('private.announcements.destroy', $announcement) }}">
                        @csrf @method('DELETE')
                        <button type="submit" class="text-red-500 hover:underline">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>


</x-app-layout>