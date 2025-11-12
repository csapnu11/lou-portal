<x-app-layout>

@section('content')
<div class="container mx-auto py-10">
    <h2 class="text-2xl font-bold mb-6">Announcements</h2>

    <div class="grid gap-6">
        @foreach($announcements as $announcement)
        <div class="bg-white p-6 rounded shadow">
            <h3 class="text-xl font-semibold">{{ $announcement->title }}</h3>
            <p class="mt-2 text-gray-600">{{ $announcement->content }}</p>
        </div>
        @endforeach
    </div>
</div>
</x-app-layout>