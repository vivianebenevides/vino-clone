<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Type;

class TypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Type::create(['id' => 1, 'type' => 'Vin Blanc']);
        Type::create(['id' => 2, 'type' => 'Vin Rouge']);
        Type::create(['id' => 3, 'type' => 'Vin Rosé']);
    }
}
