<?php

namespace App\Http\Controllers;

use App\Models\Billboard;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class BillboardController extends Controller
{
    // Frontend Methods
    public function indexPublic(Request $request)
    {
        $query = Billboard::where('status', 'published');

        if ($request->filled('search')) {
            $query->where(function($q) use ($request) {
                $q->where('name', 'like', '%' . $request->search . '%')
                  ->orWhere('code', 'like', '%' . $request->search . '%');
            });
        }

        if ($request->filled('type') && $request->type !== 'all') {
            $query->where('type', $request->type);
        }

        $billboards = $query->get();
        return view('billboards.index', compact('billboards'));
    }

    public function showPublic($slug)
    {
        $billboard = Billboard::where('slug', $slug)->where('status', 'published')->firstOrFail();
        return view('billboards.show', compact('billboard'));
    }

    // Backend Methods (Admin)
    public function index()
    {
        $billboards = Billboard::all();
        return view('admin.billboards.index', compact('billboards'));
    }

    public function create()
    {
        return view('admin.billboards.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'code' => 'required|unique:billboards',
            'name' => 'required',
            'type' => 'required',
            'image_area' => 'nullable|image',
            'image_denah' => 'nullable|image',
        ]);

        $data = $request->all();
        $data['slug'] = Str::slug($request->name . '-' . $request->code);

        if ($request->hasFile('image_area')) {
            $data['image_area'] = $request->file('image_area')->store('billboards', 'public');
        }

        if ($request->hasFile('image_denah')) {
            $data['image_denah'] = $request->file('image_denah')->store('billboards', 'public');
        }

        Billboard::create($data);

        return redirect()->route('billboards.index')->with('success', 'Billboard created successfully.');
    }

    public function show(Billboard $billboard)
    {
        return view('admin.billboards.show', compact('billboard'));
    }

    public function edit(Billboard $billboard)
    {
        return view('admin.billboards.edit', compact('billboard'));
    }

    public function update(Request $request, Billboard $billboard)
    {
        $request->validate([
            'code' => 'required|unique:billboards,code,' . $billboard->id,
            'name' => 'required',
            'type' => 'required',
        ]);

        $data = $request->all();
        $data['slug'] = Str::slug($request->name . '-' . $request->code);

        if ($request->hasFile('image_area')) {
            if ($billboard->image_area) {
                Storage::disk('public')->delete($billboard->image_area);
            }
            $data['image_area'] = $request->file('image_area')->store('billboards', 'public');
        }

        if ($request->hasFile('image_denah')) {
            if ($billboard->image_denah) {
                Storage::disk('public')->delete($billboard->image_denah);
            }
            $data['image_denah'] = $request->file('image_denah')->store('billboards', 'public');
        }

        $billboard->update($data);

        return redirect()->route('billboards.index')->with('success', 'Billboard updated successfully.');
    }

    public function destroy(Billboard $billboard)
    {
        if ($billboard->image_area) {
            Storage::disk('public')->delete($billboard->image_area);
        }
        if ($billboard->image_denah) {
            Storage::disk('public')->delete($billboard->image_denah);
        }
        
        $billboard->delete();

        return redirect()->route('billboards.index')->with('success', 'Billboard deleted successfully.');
    }
}
