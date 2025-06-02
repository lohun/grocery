<?php

namespace Database\Seeders;

use App\Models\Unit;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UnitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $units = collect([
            [
                'name' => 'Bottle(s)',
                'slug' => 'bottle',
                'short_code' => 'bt'
            ],
            [
                'name' => 'Box',
                'slug' => 'box',
                'short_code' => 'bx'
            ],
            [
                'name' => 'Piece(s)',
                'slug' => 'piece',
                'short_code' => 'pc'
            ],
            [
                'name' => 'Packet(s)',
                'slug' => 'packet',
                'short_code' => 'pkt'
            ],
            [
                'name' => 'Kilogram(s)',
                'slug' => 'kilogram',
                'short_code' => 'kg'
            ],
            
        ]);

        $units->each(function ($unit){
            Unit::insert($unit);
        });
    }
}
