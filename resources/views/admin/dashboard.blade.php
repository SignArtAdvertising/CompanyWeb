@extends('admin.layout')

@section('content')
<div class="px-4 sm:px-0 mb-8">
    <h3 class="text-2xl leading-6 font-heading font-medium text-gray-900">Dashboard</h3>
    <p class="mt-1 max-w-2xl text-sm text-gray-500">Overview of website metrics.</p>
</div>

<div class="grid grid-cols-1 gap-5 sm:grid-cols-3">
    <!-- Total Billboards -->
    <div class="bg-white overflow-hidden shadow rounded-lg border border-border-main">
        <div class="p-5">
            <div class="flex items-center">
                <div class="flex-shrink-0">
                    <!-- Icon -->
                    <svg class="h-6 w-6 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                    </svg>
                </div>
                <div class="ml-5 w-0 flex-1">
                    <dl>
                        <dt class="text-sm font-medium text-gray-500 truncate">Total Billboards</dt>
                        <dd>
                            <div class="text-lg font-medium text-gray-900">{{ $billboardCount ?? 0 }}</div>
                        </dd>
                    </dl>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
