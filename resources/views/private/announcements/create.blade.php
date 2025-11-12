<x-app-layout>
<div class="container mx-auto py-10">
    <h2 class="text-2xl font-bold mb-6">Create Announcement</h2>

    <form method="POST" action="{{ route('private.announcements.store') }}" class="space-y-6">
        @csrf

        <div>
            <label class="block mb-2 font-semibold">Title</label>
            <input name="title" type="text" class="w-full border rounded p-2" required>
        </div>

        <div>
            <label class="block mb-2 font-semibold">Content</label>
            <textarea name="content" rows="4" class="w-full border rounded p-2" required></textarea>
        </div>

        <div class="flex items-center">
            <input type="checkbox" name="is_active" value="1" checked class="mr-2">
            <label>Active</label>
        </div>

        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">Save</button>
    </form>
</div>
</x-app-layout>