<?php namespace Bsbvolmachten\Verzekeringen\Updates;

use Bsbvolmachten\Verzekeringen\Models\Iconen;
use October\Rain\Database\Updates\Seeder;

class SeedIconenTables extends Seeder
{
    public function run()
    {
        Iconen::create([
            'name' => 'Auto',
            'slug' => 'fa-car',
        ]);
        Iconen::create([
            'name' => 'Bank (Gebouw)',
            'slug' => 'fa-bank',
        ]);
        Iconen::create([
            'name' => 'Bedrijfspand',
            'slug' => 'fa-building',
        ]);
        Iconen::create([
            'name' => 'Euroteken',
            'slug' => 'fa-eur',
        ]);
        Iconen::create([
            'name' => 'Fiets',
            'slug' => 'fa-bicycle',
        ]);
        Iconen::create([
            'name' => 'Hart',
            'slug' => 'fa-heart',
        ]);
        Iconen::create([
            'name' => 'Huis',
            'slug' => 'fa-home',
        ]);
        Iconen::create([
            'name' => 'Krant',
            'slug' => 'fa-newspaper-o',
        ]);
        Iconen::create([
            'name' => 'Medkit',
            'slug' => 'fa-medkit',
        ]);
        Iconen::create([
            'name' => 'Motor',
            'slug' => 'fa-motorcycle',
        ]);
        Iconen::create([
            'name' => 'Paraplu',
            'slug' => 'fa-umbrella',
        ]);
        Iconen::create([
            'name' => 'Plus(ziekenhuis)',
            'slug' => 'fa-plus',
        ]);
        Iconen::create([
            'name' => 'Pootafdruk',
            'slug' => 'fa-paw',
        ]);
        Iconen::create([
            'name' => 'Rolstoel',
            'slug' => 'fa-wheelchair',
        ]);
        Iconen::create([
            'name' => 'Schip',
            'slug' => 'fa-ship',
        ]);
        Iconen::create([
            'name' => 'Slot',
            'slug' => 'fa-lock',
        ]);
        Iconen::create([
            'name' => 'Smartphone',
            'slug' => 'fa-mobile',
        ]);
        Iconen::create([
            'name' => 'Student afstudeer hoed',
            'slug' => 'fa-graduation-cap',
        ]);
        Iconen::create([
            'name' => 'Vliegtuig',
            'slug' => 'fa-plane',
        ]);
        Iconen::create([
            'name' => 'Voetbal',
            'slug' => 'fa-futbol-o',
        ]);
    }
}