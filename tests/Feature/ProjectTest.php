<?php

namespace Tests\Feature;

use App\Models\Project;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Auth;
use Tests\TestCase;

class ProjectTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_home_page_redered_successfulty()
    {

        $user = User::factory()->create(['id' => 2]);
        Auth::login($user);

        $response = $this->get('/');

        $response->assertStatus(200);
        $response->assertSee("all");
    }
}
