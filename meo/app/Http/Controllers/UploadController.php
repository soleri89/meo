<?php

namespace App\Http\Controllers;

use App\Models\Character;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\ValidationException;

class UploadController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'image' => ['required', 'image', 'mimes:jpg,jpeg,png,webp,avif', 'max:2048'],
        ]);

        $file = $validated['image'];

        $mime = $file->getMimeType();
        $allowed = ['image/jpeg', 'image/png', 'image/webp', 'image/avif'];

        if (!in_array($mime, $allowed, true)) {
            throw ValidationException::withMessages([
                'image' => ['Unsupported image type.'],
            ]);
        }

        $image = $file->storeAs('images', $this->safeFileName($file), 'public');

        $character = Character::ensureDefault();
        $character->update([
            'image_path' => $image,
        ]);

        return response()->json([
            'success' => true,
            'message' => 'UPLOAD COMPLETE',
            'path' => Storage::disk('public')->url($image),
        ]);
    }

    protected function safeFileName($file): string
    {
        $original = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
        $safeBase = preg_replace('/[^A-Za-z0-9_-]+/', '-', strtolower($original));
        $safeBase = trim($safeBase, '-');

        return ($safeBase ?: 'ming') . '-' . uniqid() . '.' . $file->getClientOriginalExtension();
    }
}
