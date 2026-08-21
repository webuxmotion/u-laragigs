<?php

namespace Database\Seeders;

use App\Models\Listing;
use App\Models\Test;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
  use WithoutModelEvents;

  /**
   * Seed the application's database.
   */
  public function run(): void
  {
    // User::factory(10)->create();

    // User::factory()->create([
    //     'name' => 'Test User',
    //     'email' => 'test@example.com',
    // ]);

    Listing::create(
      [
        'title' => 'Laravel Senior Developer',
        'tags' => 'laravel, javascript, vue, mysql',
        'company' => 'Cyberdyne Systems',
        'location' => 'Austin, TX',
        'email' => 'careers@cyberdyne.io',
        'website' => 'https://cyberdyne.io',
        'description' => 'We are seeking an experienced Laravel engineer to lead the development of our core enterprise platforms. You will design scalable database schemas, optimize API query performance, and mentor junior team members. Strong knowledge of architectural patterns and automated testing with Pest or PHPUnit is required.'
      ]
    );

    Listing::create(
      [
        'title' => 'Full-Stack Engineer',
        'tags' => 'laravel, livewire, alpinejs, tailwind',
        'company' => 'Umbrella Corp',
        'location' => 'Remote, US',
        'email' => 'hr@umbrellacorp.com',
        'website' => 'https://umbrellacorp.com',
        'description' => 'Join our product team to build and maintain user-facing applications using the TALL stack. You will be responsible for creating interactive dashboards, integrating third-party payment gateways, and ensuring seamless state management between frontend and backend components.'
      ]
    );

    Listing::factory(20)->create();

    Test::factory(5)->create();
  }
}
