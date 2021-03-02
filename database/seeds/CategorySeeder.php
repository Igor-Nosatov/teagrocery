<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'name' => 'Чай листовой',
            'slug' => 'tea',
            'type_id'=> '1',
            'code' => '1',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('categories')->insert([
            'name' => 'Подарочный чай',
            'slug' => 'tea',
            'type_id'=> '1',
            'code' => '2',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('categories')->insert([
            'name' => 'Развесной чай',
            'slug' => 'tea',
            'type_id'=> '1',
            'code' => '4',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('categories')->insert([
            'name' => 'Чай для офиса и дома',
            'slug' => 'tea',
            'type_id'=> '1',
            'code' => '5',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);



        DB::table('categories')->insert([
            'name' => 'Шоколад',
            'slug' => 'sweets',
            'type_id'=> '2',
            'code' => '6',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('categories')->insert([
            'name' => 'Конфеты',
            'slug' => 'sweets',
            'type_id'=> '2',
            'code' => '7',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('categories')->insert([
            'name' => 'Печенье',
            'slug' => 'sweets',
            'type_id'=> '2',
            'code' => '8',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('categories')->insert([
            'name' => 'Батончики',
            'slug' => 'sweets',
            'type_id'=> '2',
            'code' => '9',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);



        DB::table('categories')->insert([
            'name' => 'Молотый кофе',
            'slug' => 'coffee',
            'type_id'=> '3',
            'code' => '10',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('categories')->insert([
            'name' => 'Кофе в зернах',
            'slug' => 'coffee',
            'type_id'=> '3',
            'code' => '11',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('categories')->insert([
            'name' => 'Растворимый кофе',
            'slug' => 'coffee',
            'type_id'=> '3',
            'code' => '12',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('categories')->insert([
            'name' => 'Подарочный кофе',
            'slug' => 'coffee',
            'type_id'=> '3',
            'code' => '13',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);



        DB::table('categories')->insert([
            'name' => 'Капсульные кофеварки',
            'slug' => 'gifts',
            'type_id'=> '4',
            'code' => '14',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('categories')->insert([
            'name' => 'Рожковые кофеварки',
            'slug' => 'gifts',
            'type_id'=> '4',
            'code' => '15',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('categories')->insert([
            'name' => 'Кофемолки',
            'slug' => 'gifts',
            'type_id'=> '4',
            'code' => '16',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('categories')->insert([
            'name' => 'Чайники',
            'slug' => 'gifts',
            'type_id'=> '4',
            'code' => '17',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);



        DB::table('categories')->insert([
            'name' => 'Термопосуда',
            'slug' => 'tableware',
            'type_id'=> '5',
            'code' => '18',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('categories')->insert([
            'name' => 'Френч-пресс',
            'slug' => 'tableware',
            'type_id'=> '5',
            'code' => '19',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);


        DB::table('categories')->insert([
            'name' => 'Gift Box',
           'slug' => 'sets',
            'type_id'=> '6',
            'code' => '20',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('categories')->insert([
            'name' => 'Подарки на Новый Год',
           'slug' => 'sets',
            'type_id'=> '6',
            'code' => '21',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('categories')->insert([
            'name' => 'Подарочные корзины',
           'slug' => 'sets',
            'type_id'=> '6',
            'code' => '22',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('categories')->insert([
            'name' => 'Сладкий Новый Год',
           'slug' => 'sets',
            'type_id'=> '6',
            'code' => '23',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);





        DB::table('categories')->insert([
            'name' => 'Подарочные корзины',
            'slug' => 'giftsbox',
            'type_id'=> '7',
            'code' => '24',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('categories')->insert([
            'name' => 'Подарочные боксы',
            'slug' => 'giftsbox',
            'type_id'=> '7',
            'code' => '25',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }
}
