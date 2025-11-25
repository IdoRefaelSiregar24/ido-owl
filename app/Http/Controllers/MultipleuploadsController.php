<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MultipleUploads;

class MultipleuploadsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('multipleuploads');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */

    public function store(Request $request)
    {
        $request->validate([
            'filename' => 'required',
            'filename.*' => 'mimes:doc,docx,pdf,jpg,jpeg,png|max:2000',
            'ref_table' => 'required',
            'ref_id' => 'required|integer'
        ]);

        if ($request->hasFile('filename')) {
            $files = [];

            foreach ($request->file('filename') as $file) {
                $filename = time() . '-' . str_replace(' ', '-', $file->getClientOriginalName());
                $file->move(public_path('uploads'), $filename);

                $files[] = [
                    'filename' => $filename,
                    'ref_table' => $request->ref_table,
                    'ref_id' => $request->ref_id,
                    'created_at' => now(),
                    'updated_at' => now(),
                ];
            }

            MultipleUploads::insert($files);

            return back()->with('success', 'File berhasil di-upload');
        }

        return back()->with('error', 'Gagal upload file');
    }



    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $file = MultipleUploads::findOrFail($id);

        // Hapus file fisik
        if (file_exists(public_path('uploads/' . $file->filename))) {
            unlink(public_path('uploads/' . $file->filename));
        }

        $file->delete();

        return back()->with('success', 'File berhasil dihapus');
    }

}
