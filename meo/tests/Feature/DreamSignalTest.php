<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Tests\TestCase;

class DreamSignalTest extends TestCase
{
    use RefreshDatabase;

    public function test_home_page_loads(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
        $response->assertSee('DREAM SIGNAL');
    }

    public function test_upload_image_updates_character_profile(): void
    {
        Storage::fake('public');

        $this->seed();

        $file = UploadedFile::fake()->image('ming.png', 400, 400);

        $response = $this->postJson('/upload-image', [
            'image' => $file,
        ]);

        $response->assertStatus(200);
        $response->assertJsonPath('success', true);
        $this->assertNotNull(
            \App\Models\Character::query()->first()->image_path
        );
    }
}
