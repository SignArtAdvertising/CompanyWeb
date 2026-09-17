@extends('admin.layout')

@section('content')
<div class="px-4 sm:px-0 mb-8 flex justify-between items-center">
    <div>
        <h3 class="text-2xl leading-6 font-heading font-medium text-gray-900">Billboards</h3>
        <p class="mt-1 max-w-2xl text-sm text-gray-500">Manage all billboards.</p>
    </div>
    <a href="{{ route('billboards.create') }}" class="inline-flex items-center px-4 py-2 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-primary hover:bg-red-700">
        Add New Billboard
    </a>
</div>

@if (session('success'))
<div class="mb-4 bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative">
    <span class="block sm:inline">{{ session('success') }}</span>
</div>
@endif

<div class="bg-white shadow overflow-hidden sm:rounded-md border border-border-main">
    <ul class="divide-y divide-gray-200">
        @forelse($billboards as $item)
        <li>
            <div class="block hover:bg-gray-50 px-4 py-4 sm:px-6">
                <div class="flex items-center justify-between">
                    <p class="text-sm font-medium text-primary truncate">
                        {{ $item->code }} - {{ $item->name }}
                    </p>
                    <div class="ml-2 flex-shrink-0 flex">
                        <p class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full {{ $item->status === 'published' ? 'bg-green-100 text-green-800' : 'bg-yellow-100 text-yellow-800' }}">
                            {{ ucfirst($item->status) }}
                        </p>
                    </div>
                </div>
                <div class="mt-2 sm:flex sm:justify-between">
                    <div class="sm:flex">
                        <p class="flex items-center text-sm text-gray-500">
                            <span class="mr-2">{{ $item->type }}</span> | 
                            <span class="ml-2">{{ $item->size }}</span>
                        </p>
                    </div>
                    <div class="mt-2 flex items-center text-sm text-gray-500 sm:mt-0 space-x-2">
                        <a href="{{ route('billboards.edit', $item->id) }}" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                        <form action="{{ route('billboards.destroy', $item->id) }}" method="POST" class="inline-block" onsubmit="return confirm('Are you sure?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-600 hover:text-red-900">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
        </li>
        @empty
        <li class="px-4 py-4 sm:px-6 text-sm text-gray-500">No billboards found.</li>
        @endforelse
    </ul>
</div>
@endsection
