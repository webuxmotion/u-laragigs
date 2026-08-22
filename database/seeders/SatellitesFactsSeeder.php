<?php

namespace Database\Seeders;

use App\Models\SatellitesFact;
use Illuminate\Database\Seeder;

class SatellitesFactsSeeder extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run(): void
  {
    $satellitesFacts = [
      [
        'title' => "The Moon is a satellite",
        'description' => "By definition, a satellite is any object orbiting a planet or star. This includes natural satellites like Earth's Moon and Jupiter's massive moon Ganymede."
      ],
      [
        'title' => "They travel at 28,800 km/h",
        'description' => "Satellites in Low Earth Orbit (LEO) zip around the planet at roughly 8 kilometers per second. This speed allows them to complete a full orbit in just 90 minutes."
      ],
      [
        'title' => "They don't use fuel to fly",
        'description' => "Once an artificial satellite is launched into its designated orbit, its momentum matches the pull of Earth's gravity, allowing it to maintain its path without burning any fuel."
      ],
      [
        'title' => "They wear real gold",
        'description' => "Satellites are wrapped in multi-layer insulation blankets that contain vaporized gold or aluminum. This shiny layer protects delicate instruments from extreme space temperatures."
      ],
      [
        'title' => "Vanguard-1 is the ultimate survivor",
        'description' => "Launched by the USA in March 1958, Vanguard-1 is the oldest man-made satellite still in space. Though it stopped transmitting in 1964, it remains in orbit today."
      ],
      [
        'title' => "The ISS is the largest by far",
        'description' => "The International Space Station (ISS) is a massive habitable satellite roughly the size of a soccer field. It had to be launched in pieces and assembled directly in space."
      ],
      [
        'title' => "Geostationary satellites \"freeze\" in place",
        'description' => "Satellites parked in Geostationary Orbit (GEO) match Earth's precise rotational speed at 35,786 km directly above the equator. Because they match Earth's spin, they look perfectly still from the ground."
      ],
      [
        'title' => 'They have precise "parking spots"',
        'description' => 'Space is vast, but optimal orbits are limited. Satellite operators must coordinate with global agencies to book specific orbital "slots" to avoid crashing into one another.'
      ],
      [
        'title' => 'They "wobble" and need corrections',
        'description' => 'Gravitational pulls from the Moon and Sun cause satellites to slowly drift out of position. Operators must execute occasional bursts of propulsion, a process called "station keeping," to push them back into place.'
      ],
      [
        'title' => 'They end their lives in two ways',
        'description' => 'When fuel for station keeping runs out, dead satellites are either directed to burn up harmlessly in Earth\'s atmosphere, or they use their final fuel to push themselves higher into a distant "graveyard orbit".'
      ],
    ];
    
    foreach ($satellitesFacts as $fact) {
      SatellitesFact::create($fact);
    }
  }
}
