@extends('admin.layout')

@section('content')
<div class="px-4 sm:px-0 mb-8">
    <h3 class="text-2xl leading-6 font-heading font-medium text-gray-900">Add New Billboard</h3>
</div>

<div class="bg-white shadow overflow-hidden sm:rounded-md border border-border-main p-6">
    <form action="{{ route('billboards.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <!-- Code -->
            <div>
                <label class="block text-sm font-medium text-gray-700">Code</label>
                <input type="text" name="code" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-primary focus:border-primary sm:text-sm" required placeholder="e.g. BB-02">
            </div>

            <!-- Type -->
            <div>
                <label class="block text-sm font-medium text-gray-700">Type</label>
                <select name="type" class="mt-1 block w-full bg-white border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-primary focus:border-primary sm:text-sm" required>
                    <option value="Billboard">Billboard</option>
                    <option value="Semi Billboard">Semi Billboard</option>
                    <option value="Baliho">Baliho</option>
                </select>
            </div>

            <!-- Name -->
            <div class="md:col-span-2">
                <label class="block text-sm font-medium text-gray-700">Name / Location</label>
                <input type="text" name="name" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-primary focus:border-primary sm:text-sm" required placeholder="e.g. BILLBOARD JL. GATOT SUBROTO SIMP. BARAT">
            </div>

            <!-- Size -->
            <div>
                <label class="block text-sm font-medium text-gray-700">Size</label>
                <input type="text" name="size" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-primary focus:border-primary sm:text-sm" placeholder="e.g. 6 m x 12 m">
            </div>

            <!-- Orientation -->
            <div>
                <label class="block text-sm font-medium text-gray-700">Orientation</label>
                <input type="text" name="orientation" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-primary focus:border-primary sm:text-sm" placeholder="e.g. Vertikal">
            </div>
            
            <!-- Maps Link -->
            <div class="md:col-span-2">
                <label class="block text-sm font-medium text-gray-700">Google Maps Link</label>
                <input type="url" name="maps_link" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-primary focus:border-primary sm:text-sm" placeholder="https://maps.app.goo.gl/...">
            </div>

            <!-- Keterangan -->
            <div class="md:col-span-2">
                <label class="block text-sm font-medium text-gray-700">Keterangan</label>
                <textarea name="keterangan" rows="3" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-primary focus:border-primary sm:text-sm"></textarea>
            </div>

            <!-- Spesifikasi -->
            <div class="md:col-span-2">
                <label class="block text-sm font-medium text-gray-700">Spesifikasi</label>
                <textarea name="spesifikasi" rows="3" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-primary focus:border-primary sm:text-sm"></textarea>
            </div>

            <!-- Traffic Weekly -->
            <div class="md:col-span-2">
                <h4 class="text-sm font-medium text-gray-700 mb-2">Traffic Weekly</h4>
                <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                    <div>
                        <label class="block text-xs text-gray-500">Motor</label>
                        <input type="number" name="traffic_weekly_motor" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 sm:text-sm">
                    </div>
                    <div>
                        <label class="block text-xs text-gray-500">Mobil</label>
                        <input type="number" name="traffic_weekly_mobil" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 sm:text-sm">
                    </div>
                    <div>
                        <label class="block text-xs text-gray-500">Bus/Van</label>
                        <input type="number" name="traffic_weekly_bus" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 sm:text-sm">
                    </div>
                    <div>
                        <label class="block text-xs text-gray-500">Truk</label>
                        <input type="number" name="traffic_weekly_truk" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 sm:text-sm">
                    </div>
                </div>
            </div>

            <!-- Traffic Monthly -->
            <div class="md:col-span-2">
                <h4 class="text-sm font-medium text-gray-700 mb-2">Traffic Monthly</h4>
                <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                    <div>
                        <label class="block text-xs text-gray-500">Motor</label>
                        <input type="number" name="traffic_monthly_motor" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 sm:text-sm">
                    </div>
                    <div>
                        <label class="block text-xs text-gray-500">Mobil</label>
                        <input type="number" name="traffic_monthly_mobil" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 sm:text-sm">
                    </div>
                    <div>
                        <label class="block text-xs text-gray-500">Bus/Van</label>
                        <input type="number" name="traffic_monthly_bus" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 sm:text-sm">
                    </div>
                    <div>
                        <label class="block text-xs text-gray-500">Truk</label>
                        <input type="number" name="traffic_monthly_truk" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 sm:text-sm">
                    </div>
                </div>
            </div>

            <!-- Image Area -->
            <div>
                <label class="block text-sm font-medium text-gray-700">Image Area (Foto Billboard)</label>
                <input type="file" name="image_area" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 sm:text-sm">
            </div>

            <!-- Image Denah -->
            <div>
                <label class="block text-sm font-medium text-gray-700">Image Denah (Peta Lokasi)</label>
                <input type="file" name="image_denah" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 sm:text-sm">
            </div>

            <!-- Status -->
            <div>
                <label class="block text-sm font-medium text-gray-700">Status</label>
                <select name="status" class="mt-1 block w-full bg-white border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-primary focus:border-primary sm:text-sm">
                    <option value="published">Published</option>
                    <option value="draft">Draft</option>
                </select>
            </div>
        </div>

        <div class="mt-6">
            <button type="submit" class="w-full inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-primary hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary">
                Save Billboard
            </button>
        </div>
    </form>
</div>
@endsection
