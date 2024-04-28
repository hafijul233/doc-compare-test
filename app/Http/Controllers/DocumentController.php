<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDocumentRequest;
use App\Http\Requests\UpdateDocumentRequest;
use App\Models\Document;
use Inertia\Inertia;

class DocumentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): \Inertia\Response
    {
        $documents = Document::orderBy('title')
            ->paginate(10)
            ->withQueryString()
            ->through(fn($document) => [
                'id' => $document->id,
                'title' => $document->title,
                'current' => $document->current_version,
                'status' => $document->status,
                'created_at' => $document->created_at,
                'updated_at' => $document->updated_at
            ]);

        return Inertia::render('Document/Index', compact('documents'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreDocumentRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Document $document)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDocumentRequest $request, Document $document)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Document $document)
    {
        //
    }
}
