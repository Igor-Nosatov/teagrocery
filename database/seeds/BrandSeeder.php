<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('brands')->insert([
            'name' => 'Basilur',
            'slug' => 'tea',
            'type_id' => '1',
            'code' => '1',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('brands')->insert([
            'name' => 'AHMAD',
            'slug' => 'tea',
            'type_id' => '1',
            'code' => '2',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('brands')->insert([
            'name' => 'Greenfield',
            'slug' => 'tea',
            'type_id' => '1',
            'code' => '3',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('brands')->insert([
            'name' => 'Gutenberg',
            'slug' => 'tea',
            'type_id' => '1',
            'code' => '4',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('brands')->insert([
            'name' => 'Battler',
            'slug' => 'tea',
            'type_id' => '1',
            'code' => '5',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('brands')->insert([
            'name' => 'Tess',
            'slug' => 'tea',
            'type_id' => '1',
            'code' => '6',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);






        DB::table('brands')->insert([
            'name' => 'Monomax',
            'slug' => 'sets',
            'type_id' => '6',
            'code' => '7',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('brands')->insert([
            'name' => 'Hyleys',
            'slug' => 'sets',
            'type_id' => '6',
            'code' => '8',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('brands')->insert([
            'name' => 'Battler',
            'slug' => 'sets',
            'type_id' => '6',
            'code' => '9',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('brands')->insert([
            'name' => 'Gutenberg',
            'slug' => 'sets',
            'type_id' => '6',
            'code' => '10',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);




        DB::table('brands')->insert([
            'name' => 'Barista Mio',
            'slug' => 'coffee',
            'type_id' => '3',
            'code' => '11',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('brands')->insert([
            'name' => 'Barista Art',
            'slug' => 'coffee',
            'type_id' => '3',
            'code' => '12',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('brands')->insert([
            'name' => 'Illy',
            'slug' => 'coffee',
            'type_id' => '3',
            'code' => '13',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('brands')->insert([
            'name' => 'Jardin',
            'slug' => 'coffee',
            'type_id' => '3',
            'code' => '14',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('brands')->insert([
            'name' => 'Jacobs',
            'slug' => 'coffee',
            'type_id' => '3',
            'code' => '15',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('brands')->insert([
            'name' => 'BUSHIDO',
            'slug' => 'coffee',
            'type_id' => '3',
            'code' => '16',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('brands')->insert([
            'name' => 'Lavazza',
            'slug' => 'coffee',
            'type_id' => '3',
            'code' => '17',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('brands')->insert([
            'name' => 'Fresco',
            'slug' => 'coffee',
            'type_id' => '3',
            'code' => '18',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);









        DB::table('brands')->insert([
            'name' => 'Lindt',
            'slug' => 'sweets',
            'type_id' => '2',
            'code' => '19',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('brands')->insert([
            'name' => 'CAVALIER',
            'slug' => 'sweets',
            'type_id' => '2',
            'code' => '20',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('brands')->insert([
            'name' => 'Nestle',
            'slug' => 'sweets',
            'type_id' => '2',
            'code' => '21',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('brands')->insert([
            'name' => 'Raffaello',
            'slug' => 'sweets',
            'type_id' => '2',
            'code' => '22',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('brands')->insert([
            'name' => 'Martelli',
            'slug' => 'sweets',
            'type_id' => '2',
            'code' => '23',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('brands')->insert([
            'name' => 'METRO',
            'slug' => 'sweets',
            'type_id' => '2',
            'code' => '24',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('brands')->insert([
            'name' => 'ALBENI',
            'slug' => 'sweets',
            'type_id' => '2',
            'code' => '25',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);






        DB::table('brands')->insert([
            'name' => 'PartyBon',
            'slug' => 'giftsbox',
            'type_id' => '7',
            'code' => '26',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('brands')->insert([
            'name' => 'Ahmad',
            'slug' => 'giftsbox',
            'type_id' => '7',
            'code' => '27',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('brands')->insert([
            'name' => ' Basilur',
            'slug' => 'giftsbox',
            'type_id' => '7',
            'code' => '28',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('brands')->insert([
            'name' => 'Mokka',
            'slug' => 'giftsbox',
            'type_id' => '7',
            'code' => '29',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('brands')->insert([
            'name' => 'Jacobsens',
            'slug' => 'giftsbox',
            'type_id' => '7',
            'code' => '30',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('brands')->insert([
            'name' => 'Chocmod',
            'slug' => 'giftsbox',
            'type_id' => '7',
            'code' => '31',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('brands')->insert([
            'name' => 'Lindt',
            'slug' => 'giftsbox',
            'type_id' => '7',
            'code' => '32',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);









        DB::table('brands')->insert([
            'name' => 'DELONGHI',
            'slug' => 'gifts',
            'type_id' => '4',
            'code' => '33',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('brands')->insert([
            'name' => 'ESSENZA',
            'slug' => 'gifts',
            'type_id' => '4',
            'code' => '34',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('brands')->insert([
            'name' => 'Lelit',
            'slug' => 'gifts',
            'type_id' => '4',
            'code' => '35',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('brands')->insert([
            'name' => ' Bialetti',
            'slug' => 'gifts',
            'type_id' => '4',
            'code' => '36',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);



        DB::table('brands')->insert([
            'name' => ' Bialetti',
            'slug' => 'tableware',
            'type_id' => '5',
            'code' => '37',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);



        

    }
}
