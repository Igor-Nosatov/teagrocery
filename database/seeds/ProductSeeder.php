<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class ProductSeeder extends Seeder
{

    public function run()
    {
        DB::table('products')->insert([
            'name' => 'Чай Basilur "Frosty Afternoon" черный, картонная упаковка 100 гр.',
            'title' => 'frosty-afternoon',
            'code'=> '87000',
            'price' => '20.90',
            'img' => '75.png',
            'description' => 'Чай черный цейлонский байховый крупнолистовой с незабываемым ароматом маракуйи и апельсина.',
            'brand_id' => '1',
            'type_id'=> '1',
            'slug' => 'tea',
            'category_id' => '1',
          
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('products')->insert([
            'name' => 'Чай Basilur "Winter Tea" черный, картонная упаковка 100 гр.',
            'title' => 'winter-tea',
            'code'=> '87000',
            'price' => '12.90',
            'img' => '76.jpg',
            'description' => 'Крупнолистовой цейлонский чай в сочетании с ароматом и ягодами клюквы. Легкий аромат и мягкий вкус.',
            'brand_id' => '1',
            'type_id'=> '1',
            'slug' => 'tea',
            'category_id' => '1',
          
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('products')->insert([
            'name' => 'Чай Basilur "Raspberry & Rosehip" "Малина и шиповник" черный, картонная упаковка 100 гр.',
            'title' => 'raspberry-rosehip',
            'code'=> '87000',
            'price' => '23.90',
            'img' => '77.png',
            'description' => 'Вкуснейший черный чай с натуральными кусочками шиповника и ароматом малины.',
            'brand_id' => '1',
            'type_id'=> '1',
            'slug' => 'tea',
            'category_id' => '1',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('products')->insert([
            'name' => 'Чай Basilur "Strawberry & Kiwi" "Клубника и киви" черный, картонная упаковка 100 гр.',
            'title' => 'strawberry-kiwi',
            'code'=> '87000',
            'price' => '25.90',
            'img' => '78.png',
            'description' => '',
            'brand_id' => '1',
            'type_id'=> '1',
            'slug' => 'tea',
            'category_id' => '1',
          
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('products')->insert([
            'name' => 'Чай Basilur "Lemon & Lime" черный, картонная упаковка 100 гр.',
            'title' => 'lemon-lime',
            'code'=> '87000',
            'price' => '22.90',
            'img' => '79.png',
            'description' => 'Идеальное сочетание элитных сортов чёрного цейлонского чая с нежным вкусом лимона и лайма.',
            'brand_id' => '3',
            'type_id'=> '1',
            'slug' => 'tea',
            'category_id' => '1',
          
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('products')->insert([
            'name' => 'Чай Basilur "Uva" "Лист Цейлона Ува" черный, картонная упаковка 100 гр.',
            'title' => 'uva',
            'code'=> '87000',
            'price' => '18.90',
            'img' => '80.png',
            'description' => 'Черный цейлонский чай обладает выраженным богатым ароматом, мягким и потрясающим вкусом. ',
            'brand_id' => '1',
            'type_id'=> '1',
            'slug' => 'tea',
            'category_id' => '1',
          
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        
        
        
        
        DB::table('products')->insert([
            'name' => 'Чай Basilur "Art of Basilur" Волшебные фрукты. Вишня и черешня',
            'title' => 'art-basilur',
            'code'=> '87000',
            'price' => '20.90',
            'img' => '81.jpg',
            'description' => 'Оригинальная линейка Art of Basilur от Basilur.
        
            Вместе с потрясающим чаем в комплекте идет дизайнерская вазочка из натурального дерева!
        
            Чай чёрный цейлонский байховый листовой с кусочками вишни, лепестками василька и ароматом черешни.',
            'brand_id' => '1',
            'type_id'=> '1',
            'slug' => 'tea',
            'category_id' => '1',
          
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('products')->insert([
            'name' => 'Чай Tess Подарочный набор с кружкой Tea Bag Collection',
            'title' => 'bag-collection',
            'code'=> '87000',
            'price' => '12.90',
            'img' => '82.png',
            'description' => 'Состав набора:
        
            - керамическая кружка
        
            -Pleasure 25 пак.
        
            -Earl grey 25 пак.
        
            -Breakfast 25 пак.
        
            -Thyme 25 пак.',
            'brand_id' => '6',
            'type_id'=> '1',
            'slug' => 'tea',
            'category_id' => '2',
          
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('products')->insert([
            'name' => 'Чай AHMAD Классическая коллекция чая 120 г. (картон)',
            'title' => 'classic-ahmad',
            'code'=> '87000',
            'price' => '23.90',
            'img' => '83.jpg',
            'description' => 'Классическая коллекция включает в себя 6 видов чая:
            • Английский Завтрак: любимый чай англичан;
            • Эрл Грей: английское изящество в самом лучшем его проявлении;
            • Английский No.1: восхитительный чай на все случаи жизни;
            • Английский Полдник: смесь отборных чаев с ноткой бергамота;
            • Дарджилинг: яркий вкус «шампанского среди чаев»;
            • Цейлонский чай: золотистый настой и неповторимый вкус.',
            'brand_id' => '3',
            'type_id'=> '1',
            'slug' => 'tea',
            'category_id' => '2',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('products')->insert([
            'name' => 'Чай Greenfield Подарочный набор в пирамидках с керамической кружкой',
            'title' => 'gift-greenfield',
            'code'=> '87000',
            'price' => '25.90',
            'img' => '84.png',
            'description' => 'Коллекция любимого чая в пирамидках с фирменной кружкой.
            В состав набора входят:
            - Кружка керамическая с логотипом 300 мл
            - Mint and Chocolate 20 шт
            - Sicilian Citrus 20 шт
            - Redberry Crumble 20 шт
            - Rich Ceylon 20 шт',
            'brand_id' => '2',
            'type_id'=> '1',
            'slug' => 'tea',
            'category_id' => '2',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('products')->insert([
            'name' => 'Чай Greenfield "Purple Lavender" черный. ж/б (100 гр.)',
            'title' => 'purple-lavender-greenfield',
            'code'=> '87000',
            'price' => '22.90',
            'img' => '85.jpg',
            'description' => 'Листовой черный чай в элегантной баночке с дивным ароматом лаванды станет отличным презентом по поводу и без.',
            'brand_id' => '3',
            'type_id'=> '1',
            'slug' => 'tea',
            'category_id' => '2',
          
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('products')->insert([
            'name' => 'Чай "Yunnan Mist" Ahmad, коллекция "Fine Tea", в жестяной банке, 100 гр.',
            'title' => 'ahmad-mist',
            'code'=> '87000',
            'price' => '18.90',
            'img' => '86.png',
            'description' => 'Чай "Yunnan Mist" Ahmad из коллекции "Fine Tea".
        
            Китайский чай провинции Юньнань тонизирует и бодрит, обладает уникальным пикантным вкусом и «дымным» ароматом.',
            'brand_id' => '2',
            'type_id'=> '1',
            'slug' => 'tea',
            'category_id' => '2',
        
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        
        
        
        DB::table('products')->insert([
            'name' => 'Чай Gutenberg чёрный ароматизированный Саусеп',
            'title' => 'sausep-gutenberg',
            'code'=> '87000',
            'price' => '20.90',
            'img' => '87.jpg',
            'description' => 'Ароматизированный чай на основе черного.',
            'brand_id' => '4',
            'type_id'=> '1',
            'slug' => 'tea',
            'category_id' => '3',
          
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('products')->insert([
            'name' => 'Чайный напиток Gutenberg Айболит',
            'title' => 'aibolit-gutenberg',
            'code'=> '87000',
            'price' => '12.90',
            'img' => '88.jpg',
            'description' => 'Чайный напиток.',
            'brand_id' => '4',
            'type_id'=> '1',
            'slug' => 'tea',
            'category_id' => '3',
          
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('products')->insert([
            'name' => 'Чай Gutenberg зеленый ароматизированный Пасхальный',
            'title' => 'pasha-gutenberg',
            'code'=> '87000',
            'price' => '23.90',
            'img' => '89.jpg',
            'description' => 'Чайный напиток.',
            'brand_id' => '4',
            'type_id'=> '1',
            'slug' => 'tea',
            'category_id' => '3',
        
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('products')->insert([
            'name' => 'Китайский элитный чай Gutenberg Чунь Ми (Чжень Мэй)',
            'title' => 'chyn-me-gutenberg',
            'code'=> '87000',
            'price' => '25.90',
            'img' => '90.jpg',
            'description' => 'Чайный напиток.',
            'brand_id' => '4',
            'type_id'=> '1',
            'slug' => 'tea',
            'category_id' => '3',
        
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('products')->insert([
            'name' => 'Чай Gutenberg черный ароматизированный Масала',
            'title' => 'masala-gutenberg',
            'code'=> '87000',
            'price' => '22.90',
            'img' => '91.jpg',
            'description' => 'Чайный напиток.',
            'brand_id' => '4',
            'type_id'=> '1',
            'slug' => 'tea',
            'category_id' => '3',
        
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('products')->insert([
            'name' => 'Чайный напиток Gutenberg Пуддинг',
            'title' => 'pudding-gutenberg',
            'code'=> '87000',
            'price' => '18.90',
            'img' => '92.jpg',
            'description' => 'Чайный напиток.',
            'brand_id' => '4',
            'type_id'=> '1',
            'slug' => 'tea',
            'category_id' => '3',
          
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('products')->insert([
            'name' => 'Холодный Чай Ahmad «Персик и маракуйя» черный 20 пак.',
            'title' => 'peach-ahmad',
            'code'=> '87000',
            'price' => '20.90',
            'img' => '93.jpg',
            'description' => 'Новый, восхитительный способ  прохладительного напитка. Черный чай со вкусом спелого персика и тропической маракуйи.
        
            Это отличная альтернатива безалкогольным напиткам.
        
            Способ приготовления:1 пакетик чая,холодная вода,время заваривание менее 5 минут.',
            'brand_id' => '2',
            'type_id'=> '1',
            'slug' => 'tea',
            'category_id' => '4',
        
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('products')->insert([
            'name' => 'Холодный Чай Ahmad «Манго и личи» зеленый 20 пак.',
            'title' => 'mango-ahmad',
            'code'=> '87000',
            'price' => '12.90',
            'img' => '94.jpg',
            'description' => 'Новый, восхитительный способ  прохладительного напитка. Зеленый чай со вкусом тропического Манго и личи.
        
            Это отличная альтернатива безалкогольным напиткам.
        
            Способ приготовления:1 пакетик чая,холодная вода,время заваривание менее 5 минут.',
            'brand_id' => '2',
            'type_id'=> '1',
            'slug' => 'tea',
            'category_id' => '4',
        
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('products')->insert([
            'name' => 'Чай Greenfield "Coconut Ice" черный (20 пир.)',
            'title' => 'coconut-ice',
            'code'=> '87000',
            'price' => '23.90',
            'img' => '95.jpg',
            'description' => 'Новая лимитированная коллекция Чай Greenfield "Coconut Ice" (20 пир.). Черный чай, в состав которого входит: кокосовая стружка, лист мяты, лепестки незабудки. Необыкновенный аромат чая поднимет настроение и оставит приятное послевкусие.',
            'brand_id' => '3',
            'type_id'=> '1',
            'slug' => 'tea',
            'category_id' => '4',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('products')->insert([
            'name' => 'Чай Greenfield "Berry Gelato" черный (20 пир.)',
            'title' => 'berry-gelato-greenfield',
            'code'=> '87000',
            'price' => '25.90',
            'img' => '96.jpg',
            'description' => 'Новая лимитированная коллекция Чай Greenfield "Berry Gelato" черный (20 пир.)
            Черный чай, в состав которого входит: листочки черной смородины, измельченные ягоды спелой малины и листья мяты.',
            'brand_id' => '3',
            'type_id'=> '1',
            'slug' => 'tea',
            'category_id' => '4',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('products')->insert([
            'name' => 'Холодный Чай Ahmad «Лимон и мята» зеленый 20 пак.',
            'title' => 'lemon-ahmad',
            'code'=> '87000',
            'price' => '22.90',
            'img' => '97.png',
            'description' => '',
            'brand_id' => '2',
            'type_id'=> '1',
            'slug' => 'tea',
            'category_id' => '4',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('products')->insert([
            'name' => 'Холодный Чай Ahmad «Лимон и мята» зеленый 20 пак.',
            'title' => 'lemon-mint-ahmad',
            'code'=> '87000',
            'price' => '18.90',
            'img' => '98.jpg',
            'description' => 'Новый, восхитительный способ  прохладительного напитка. Зеленый чай со вкусом лимона и маты.
        
            Это отличная альтернатива безалкогольным напиткам.
        
            Способ приготовления:1 пакетик чая,холодная вода,время заваривание менее 5 минут.',
            'brand_id' => '2',
            'type_id'=> '1',
            'slug' => 'tea',
            'category_id' => '4',
        
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);





        DB::table('products')->insert([
            'name' => 'Кофе Barista Mio "Для чашки" 250 гр молотый',
            'title' => 'barista-mio-cup',
            'code'=> '12000',
            'price' => '20.90',
            'img' => '1.jpg',
            'description' => 'Многогранный
            вкус и аромат достигается благодаря превосходному бленду арабики и робусты в идеальной пропорции.',
            'brand_id' => '11',
           'slug' => 'coffee',
            'type_id'=> '3',
            'category_id' => '9',
        
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('products')->insert([
            'name' => 'Кофе Barista Mio "Эспрессо" 250 гр молотый',
            'title' => 'barista-mio-esspreso',
            'code'=> '12000',
            'price' => '12.90',
            'img' => '2.jpg',
            'description' => 'Колумбийский купаж арабики и робусты с нотами шоколада и ореха. Итальянская темная обжарка.',
            'brand_id' => '11',
           'slug' => 'coffee',
            'type_id'=> '3',
            'category_id' => '9',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('products')->insert([
            'name' => 'Кофе Barista Art "Бленд №1" 250 гр молотый',
            'title' => 'barista-blend-one',
            'code'=> '12000',
            'price' => '23.90',
            'img' => '3.png',
            'description' => 'Изысканный бленд 100% арабики из
            Колумбии, Танзании и Руанды. Утонченный цветочный аромат с нежной ягодно-цитрусовой кислинкой',
            'brand_id' => '12',
           'slug' => 'coffee',
            'type_id'=> '3',
            'category_id' => '9',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('products')->insert([
            'name' => 'Кофе Barista Art "Бленд №2" 250 гр молотый',
            'title' => 'barista-blend-two',
            'code'=> '12000',
            'price' => '25.90',
            'img' => '4.jpg',
            'description' => 'Купаж сортов арабики из Бурунди, Эфиопии и Бразилии в дуэте с темной обжаркой придают невероятный шоколадно-ореховый вкус с приятной горчинкой.',
            'brand_id' => '12',
           'slug' => 'coffee',
            'type_id'=> '3',
            'category_id' => '9',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('products')->insert([
            'name' => 'Кофе Barista Art "Бленд №3" 250 гр молотый',
            'title' => 'barista-blend-three',
            'code'=> '12000',
            'price' => '22.90',
            'img' => '5.jpg',
            'description' => 'Изысканный бленд 100% арабики из Колумбии, Танзании и Руанды. Утонченный цветочный аромат с нежной ягодно-цитрусовой кислинкой',
            'brand_id' => '12',
           'slug' => 'coffee',
            'type_id'=> '3',
            'category_id' => '9',
        
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('products')->insert([
            'name' => 'Кофе Barista Art "Бленд №4" 250 гр молотый',
            'title' => 'barista-blend-four',
            'code'=> '12000',
            'price' => '18.90',
            'img' => '6.jpg',
            'description' => 'Изысканный бленд 100% арабики из Колумбии, Танзании и Руанды. Утонченный цветочный аромат с нежной ягодно-цитрусовой кислинкой',
            'brand_id' => '12',
           'slug' => 'coffee',
            'type_id'=> '3',
            'category_id' => '9',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        
        
        
        DB::table('products')->insert([
            'name' => 'Кофе в зернах Illy моноарабика Бразилия в ж/б 250 гр',
            'title' => 'illy-brasil',
            'code'=> '12000',
            'price' => '20.90',
            'img' => '7.jpeg',
            'description' => 'Арабика из Бразилии имеет насыщенный аромат.
            Нежный шоколадный оттенок удачно выделяется нотками карамели и хлеба. 100% арабика разных сортов.',
            'brand_id' => '13',
           'slug' => 'coffee',
            'type_id'=> '3',
            'category_id' => '10',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('products')->insert([
            'name' => 'Кофе в зернах Illy моноарабика Эфиопия в ж/б 250 гр',
            'title' => 'illy-ethiopia',
            'code'=> '12000',
            'price' => '12.90',
            'img' => '8.jpg',
            'description' => '100% арабика разных сортов. Кофе с мягким и незабываемым ароматом с цветочными нотками жасмина и легким цитрусовым послевкусием. Упаковка очень удобна при использовании в автоматических кофеварках. Контейнер для кофе рассчитан на 250-300 гр.',
            'brand_id' => '13',
           'slug' => 'coffee',
            'type_id'=> '3',
            'category_id' => '10',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('products')->insert([
            'name' => 'Кофе в зернах Illy моноарабика Гватемала в ж/б 250 гр',
            'title' => 'illy-guatemala-small',
            'code'=> '12000',
            'price' => '23.90',
            'img' => '9.jpg',
            'description' => 'Насыщенный аромат кофе с нотками шоколада, карамели, цитрусовых и меда. Зерна имеют среднюю степень обжарки. 100% арабика разных сортов. Упаковка очень удобна при использовании
             в автоматических кофеварках. Контейнер для кофе рассчитан на 250-300 гр.',
            'brand_id' => '13',
           'slug' => 'coffee',
            'type_id'=> '3',
            'category_id' => '10',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('products')->insert([
            'name' => 'Кофе в зернах Illy моноарабика Гватемала в ж/б 350 гр',
            'title' => 'illy-guatemala-big',
            'code'=> '12000',
            'price' => '25.90',
            'img' => '10.jpg',
            'description' => 'Насыщенный аромат кофе с нотками шоколада, карамели, цитрусовых и меда. Зерна имеют среднюю степень обжарки. 100% арабика разных сортов. Упаковка очень удобна при использовании в автоматических кофеварках. Контейнер для кофе рассчитан на 250-300 гр.',
            'brand_id' => '13',
           'slug' => 'coffee',
            'type_id'=> '3',
            'category_id' => '10',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('products')->insert([
            'name' => 'Кофе в зернах Illy "Medium Roast" средняя степень обжарки 3 кг',
            'title' => 'illy-medium-roast',
            'code'=> '12000',
            'price' => '22.90',
            'img' => '11.png',
            'description' => 'Смесь из девяти лучших сортов высокогорной отборной арабики. Знаменитый сорт Сантос - основа кофейной смеси. Средняя степень обжарки. Кофе имеет нежный вкус. Присутствует легкая горчинка и фруктовые нотки с ароматом миндаля.',
            'brand_id' => '13',
           'slug' => 'coffee',
            'type_id'=> '3',
            'category_id' => '10',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('products')->insert([
            'name' => 'Кофе в зернах Illy "Dark Roast" степень обжарки темная 3 кг',
            'title' => 'illy-dark-roast',
            'code'=> '12000',
            'price' => '18.90',
            'img' => '12.jpg',
            'description' => '9 сортов 100% арабики, собранной на лучших плантациях Южной и Центральной Америки, Индии и Африки. Темная обжарка добавляет в послевкусие легкую пикантную горчинку.',
            'brand_id' => '13',
           'slug' => 'coffee',
            'type_id'=> '3',
            'category_id' => '10',
        
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        
        
        
        
        DB::table('products')->insert([
            'name' => 'Kофе Jardin "Guatemala Atitlan" 95гр. растворимый (стекло)',
            'title' => 'jardin-guatemala-atitlan',
            'code'=> '12000',
            'price' => '20.90',
            'img' => '13.jpg',
            'description' => 'Кофе отличается легкой сладостью с фруктовыми нотками.',
            'brand_id' => '14',
           'slug' => 'coffee',
            'type_id'=> '3',
            'category_id' => '11',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('products')->insert([
            'name' => 'Kофе Jardin "Kenya Kilimanjaro" 95гр. растворимый (стекло)',
            'title' => 'jardin-kenya-kilimanjaro',
            'code'=> '12000',
            'price' => '12.90',
            'img' => '14.png',
            'description' => 'Кофе отличается цитрусовым ароматом и сладковатым послевкусием.',
            'brand_id' => '14',
           'slug' => 'coffee',
            'type_id'=> '3',
            'category_id' => '11',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('products')->insert([
            'name' => 'Кофе Jacobs Gold, растворимый, стекло, 95 гр',
            'title' => 'jacobs-gold',
            'code'=> '12000',
            'price' => '23.90',
            'img' => '15.png',
            'description' => 'Сублимированный растворимый кофе с мягким вкусом и ароматом настоящего свежеобжаренного зерна.',
            'brand_id' => '15',
           'slug' => 'coffee',
            'type_id'=> '3',
            'category_id' => '11',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('products')->insert([
            'name' => 'Кофе Jacobs Monarch Decaff, растворимый, стекло, 95 гр',
            'title' => 'jacobs-monarch-decaff',
            'code'=> '12000',
            'price' => '25.90',
            'img' => '16.jpg',
            'description' => 'Растворимый Jacobs Monarch без кофеина - это наслаждение любимым напитком даже поздно вечером! ;)',
            'brand_id' => '15',
           'slug' => 'coffee',
            'type_id'=> '3',
            'category_id' => '11',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('products')->insert([
            'name' => 'Кофе BUSHIDO Red Katana 100г растворимый стекло',
            'title' => 'bushido-red-katana',
            'code'=> '12000',
            'price' => '22.90',
            'img' => '17.jpg',
            'description' => '100% натуральный сублимированный кофе высшего качества.
             Обладает оригинальным вкусом, крепким винным ароматом и долгим послевкусием.',
            'brand_id' => '16',
           'slug' => 'coffee',
            'type_id'=> '3',
            'category_id' => '11',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('products')->insert([
            'name' => 'Кофе BUSHIDO Black Katana 100г растворимый стекло',
            'title' => 'bushido-black-katana',
            'code'=> '12000',
            'price' => '18.90',
            'img' => '18.jpg',
            'description' => '100% натуральный сублимированный растворимый кофе, приготовлен из зерен, обжаренных на раскаленных углях из Центральной и Южной Америки. Кофе крепкий, плотный, с хорошим вкусовым балансом. Отличается терпкостью и горьковатым вкусом.
            Bushido - кофе премиум класса!',
            'brand_id' => '16',
           'slug' => 'coffee',
            'type_id'=> '3',
            'category_id' => '11',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        
        
        
        DB::table('products')->insert([
            'name' => 'Кофе Lavazza "Espresso" 250гр. молотый (жесть)',
            'title' => 'lavazza-espresso',
            'code'=> '12000',
            'price' => '20.90',
            'img' => '19.jpg',
            'description' => 'Смесь тщательно подобранных зерен 100% Арабики с лучших плантаций Центральной Америки и Африки. Кофе имеет тонкий аромат и изумительный вкус.
            Высший сорт. Средняя степень обжарки. Для бытового использования (турка, кофемашина).',
            'brand_id' => '17',
           'slug' => 'coffee',
            'type_id'=> '3',
            'category_id' => '9',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('products')->insert([
            'name' => 'Кофе Lavazza "Qualita Oro" 250гр. молотый (жесть)',
            'title' => 'lavazza-qualita-oro',
            'code'=> '12000',
            'price' => '12.90',
            'img' => '20.jpg',
            'description' => 'Высококачественная смесь престижных сортов Арабики из Центральной и Южной Америки, знаменитых своим непревзойденным, изысканным ароматом. Характерная черта смеси - легкая сладость в сочетании с приятной кислинкой, что создает вкус, наполненный гармонии. ',
            'brand_id' => '17',
           'slug' => 'coffee',
            'type_id'=> '3',
            'category_id' => '10',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('products')->insert([
            'name' => 'Кофе Lavazza "Club" 250гр. молотый (жесть)',
            'title' => 'lavazza-club',
            'code'=> '12000',
            'price' => '23.90',
            'img' => '21.jpg',
            'description' => 'Lavazza Club - 100% арабика, для поклонников классики. Мягкий, насыщенно ароматный купаж. Умеренно крепкий и ароматный кофе для истинных ценителей.
             Идеален для приготовления в гейзерных кофеварках (мокка). Низкое содержание кофеина. ',
            'brand_id' => '17',
           'slug' => 'coffee',
            'type_id'=> '3',
            'category_id' => '11',
        
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('products')->insert([
            'name' => 'Кофе Lavazza "Crema e Gusto" 250гр. молотый',
            'title' => 'lavazza-crema-gusto"',
            'code'=> '12000',
            'price' => '25.90',
            'img' => '22.jpg',
            'description' => 'Средне-тонкий помол. Смесь из сильно обжаренных сортов Арабики и Робусты, является идеальной основой для приготовления каппучино, кофе-латте, кофе-гляссе. Этот кофе очень популярен в Италии.
             Lavazza CREMA e GUSTO отличается шоколадным вкусом и неповторимым ароматом.',
            'brand_id' => '17',
           'slug' => 'coffee',
            'type_id'=> '3',
            'category_id' => '12',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('products')->insert([
            'name' => 'Кофе Lavazza "Qualita Rossa" 250гр. молотый (ж/б)',
            'title' => 'lavazza-qualita-rossa',
            'code'=> '12000',
            'price' => '22.90',
            'img' => '23.jpg',
            'description' => 'Зерна африканской робусты дают крепость и шоколадный аромат, а высокогорная Арабика выражается в нежном аромате',
            'brand_id' => '17',
           'slug' => 'coffee',
            'type_id'=> '3',
            'category_id' => '9',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('products')->insert([
            'name' => 'Подарочный набор Fresco "Verona" с кружкой',
            'title' => 'fresco-verona',
            'code'=> '12000',
            'price' => '18.90',
            'img' => '24.jpg',
            'description' => 'В подарочный набор входят:
            - кофе растворимый Fresco "Verona", 95 гр, стеклянная банка
            - кружка стеклянная 200 мл',
            'brand_id' => '18',
           'slug' => 'coffee',
            'type_id'=> '3',
            'category_id' => '9',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        
        DB::table('products')->insert([
            'name' => 'Шоколад Lindt "Excellence" Горький 85% какао, 100 гр',
            'title' => 'lindt-excellence-bitter',
            'code'=> '13000',
            'price' => '40.90',
            'img' => '25.jpg',
            'description' => 'Восхитительный швейцарский горький шоколад с содержанием какао не менее 85%.',
            'brand_id' => '19',
            'slug' => 'sweets',
            'type_id'=> '2',
            'category_id' => '5',
        
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('products')->insert([
            'name' => 'Шоколад Lindt "Excellence" Темный с апельсином, 100 гр',
            'title' => 'lindt-excellence-dark',
            'code'=> '13000',
            'price' => '12.90',
            'img' => '26.jpg',
            'description' => 'Восхитительный швейцарский темный шоколад с кусочками апельсина и обжаренным миндалем.',
            'brand_id' => '19',
            'slug' => 'sweets',
            'type_id'=> '2',
            'category_id' => '5',
        
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('products')->insert([
            'name' => 'Шоколад Lindt "Excellence" Темный с перцем Чили, 100 гр',
            'title' => 'lindt-excellence-dark-cayen',
            'code'=> '13000',
            'price' => '23.90',
            'img' => '27.jpg',
            'description' => 'Пикантный темный шоколад с экстрактом перца Чили не оставит равнодушным даже самого строгого гурмана и подарит яркие эмоции всем ценителям.',
            'brand_id' => '19',
            'slug' => 'sweets',
            'type_id'=> '2',
            'category_id' => '5',
        
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('products')->insert([
            'name' => 'Бельгийский горький шоколад без сахара с кофе и стевией CAVALIER 85 гр.',
            'title' => 'cavalier-bitter',
            'code'=> '13000',
            'price' => '25.90',
            'img' => '28.jpg',
            'description' => 'Бельгийский горький шоколад без сахара с лесными ягодами и стевией.',
            'brand_id' => '20',
            'slug' => 'sweets',
            'type_id'=> '2',
            'category_id' => '5',
        
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('products')->insert([
            'name' => 'Бельгийский горький шоколад без сахара с лесными ягодами и стевией CAVALIER 85 гр.',
            'title' => 'cavalier-bitter-forest-berries',
            'code'=> '13000',
            'price' => '22.90',
            'img' => '29.jpg',
            'description' => 'Бельгийский горький шоколад без сахара с лесными ягодами и стевией.',
            'brand_id' => '20',
            'slug' => 'sweets',
            'type_id'=> '2',
            'category_id' => '5',
        
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('products')->insert([
            'name' => 'Шоколад «Nestle» молочный пористый, 82 гр',
            'title' => 'porous-milk-chocolate',
            'code'=> '13000',
            'price' => '18.90',
            'img' => '30.jpg',
            'description' => 'ЗАКАЗ ОТ 1 УПАКОВКИ (23 шт)',
            'brand_id' => '21',
            'slug' => 'sweets',
            'type_id'=> '2',
            'category_id' => '5',
        
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('products')->insert([
            'name' => 'Шоколад «Nestle» темный с миндалем, 90 гр',
            'title' => 'dark-chocolate-with-almonds',
            'code'=> '13000',
            'price' => '22.90',
            'img' => '31.jpg',
            'description' => 'ЗАКАЗ ОТ 1 УПАКОВКИ (20 шт)',
            'brand_id' => '21',
            'slug' => 'sweets',
            'type_id'=> '2',
            'category_id' => '5',
        
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('products')->insert([
            'name' => 'Шоколад «Nestle» молочный с миндалем и изюмом 90 гр',
            'title' => 'milk-chocolate-almonds-raisins',
            'code'=> '13000',
            'price' => '18.90',
            'img' => '32.jpg',
            'description' => '',
            'brand_id' => '21',
            'slug' => 'sweets',
            'type_id'=> '2',
            'category_id' => '5',
        
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        
        
        
        
        
        DB::table('products')->insert([
            'name' => 'Конфеты Raffaello кокосовые с цельным миндалем 150 гр. Т15х6 (картон)',
            'title' => 'sweets-whole-almonds',
            'code'=> '13000',
            'price' => '20.90',
            'img' => '33.jpg',
            'description' => 'Изысканные конфеты с цельным миндалем, посыпанные кокосовой стружкой.',
            'brand_id' => '22',
            'slug' => 'sweets',
            'type_id'=> '2',
            'category_id' => '6',
        
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('products')->insert([
            'name' => 'Конфеты Raffaello кокосовые с цельным миндалем 100 гр. (тортик)',
            'title' => 'sweets-whole-almonds',
            'code'=> '13000',
            'price' => '12.90',
            'img' => '34.jpg',
            'description' => 'Рафаэлло Конфеты 100 гр. кокосовые с цельным миндалем (тортик).
            Состав: сушеная кокосовая стружка, растительные жиры, сахар, орехи миндаля сладкого, сухое обезжиренное молоко, сухая молочная сыворотка, мука пшеничная, тапиоковый крахмал, эмульгатор: лецитины, ароматизаторы, разрыхлитель: гидрокарбонат натрия, соль.',
            'brand_id' => '22',
            'slug' => 'sweets',
            'type_id'=> '2',
            'category_id' => '6',
        
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('products')->insert([
            'name' => 'Конфеты RAFFAELLO T4*4*16 40 гр.',
            'title' => 'sweets-raffaello',
            'code'=> '13000',
            'price' => '23.90',
            'img' => '35.jpg',
            'description' => 'Raffaello — это хрустящая конфета, покрытая кокосовой стружкой, с нежным кремом и целым миндальным орехом внутри. Прекрасный подарок, который поможет показать самые глубокие, нежные чувства к любимому человеку.
        
            Состав: сушеная кокосовая стружка 25.5%, растительные жиры, сахар, миндаль 8.4%, сухое обезжиренное молоко, сухая молочная сыворотка, мука пшеничная, тапиоковый крахмал, эмульгатор: лецитины, ароматизаторы, разрыхлитель: гидрокарбонат натрия, соль
        
            Содержит орехи, молоко, злаки, содержащие глютен, сою и продукты их переработки. Без ГМО.
        
            Питательная ценность на 100 г продукта: белки 7.2 г, углеводы 38.3 г, жиры 48.6 г
            Энергетическая ценность на 100 г продукта: 2629 кДж / 628 ккал',
            'brand_id' => '22',
            'slug' => 'sweets',
            'type_id'=> '2',
            'category_id' => '6',
        
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('products')->insert([
            'name' => 'Конфеты Raffaello кокосовые с цельным миндалем Т24х6 240 гр. (cундук)',
            'title' => 'sweets-whole-almonds-box',
            'code'=> '13000',
            'price' => '25.90',
            'img' => '36.jpg',
            'description' => 'Изысканные конфеты с цельным миндалем, посыпанные кокосовой стружкой.',
            'brand_id' => '22',
            'slug' => 'sweets',
            'type_id'=> '2',
            'category_id' => '6',
        
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('products')->insert([
            'name' => 'Конфеты Raffaello кокосовые с цельным миндалем 240 гр. Т24х6 (плоская)',
            'title' => 'sweets-whole-almonds-plain',
            'code'=> '13000',
            'price' => '22.90',
            'img' => '37.png',
            'description' => 'Изысканные конфеты с цельным миндалем, посыпанные кокосовой стружкой.',
            'brand_id' => '4',
            'slug' => 'sweets',
            'type_id'=> '2',
            'category_id' => '6',
        
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('products')->insert([
            'name' => 'Конфеты Raffaello 40 гр. кокосовые с цельным миндалем Т4 х12 (звезда).',
            'title' => 'sweets-whole-almonds-star',
            'code'=> '13000',
            'price' => '18.90',
            'img' => '38.jpg',
            'description' => 'Конфеты Raffaello 40 гр. кокосовые с цельным миндалем Т4 х12 (звезда).',
            'brand_id' => '22',
            'slug' => 'sweets',
            'type_id'=> '2',
            'category_id' => '6',
        
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        
        
        
        
        
        DB::table('products')->insert([
            'name' => 'Печенье "ЛАЗАНУШКИ" 1,7 кг покрыто безе и декорировано натуральным соком',
            'title' => 'meringue-cookies-natural-juice',
            'code'=> '13000',
            'price' => '20.90',
            'img' => '39.jpg',
            'description' => 'Печенье покрыто безе и декорировано натуральным соком',
            'brand_id' => '23',
            'slug' => 'sweets',
            'type_id'=> '2',
            'category_id' => '7',
        
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('products')->insert([
            'name' => 'Печенье "МАРТЕЛИ" 2 кг в виде "сеточки", пропитанное медовым спиртом',
            'title' => 'cookies-martelli',
            'code'=> '13000',
            'price' => '12.90',
            'img' => '40.png',
            'description' => 'Печенье "МАРТЕЛИ" в виде "сеточки", пропитанное медовым спиртом',
            'brand_id' => '23',
            'slug' => 'sweets',
            'type_id'=> '2',
            'category_id' => '7',
        
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('products')->insert([
            'name' => 'Печенье "ПОЛОНЕЗ" 2 кг молочный вкус с кукурузными палочками',
            'title' => 'cookies-polonez',
            'code'=> '13000',
            'price' => '23.90',
            'img' => '41.png',
            'description' => 'Печенье "ПОЛОНЕЗ" с молочным вкусом с кукурузными палочками',
            'brand_id' => '23',
            'slug' => 'sweets',
            'type_id'=> '2',
            'category_id' => '7',
        
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('products')->insert([
            'name' => 'Печенье "МАРИШЕЛЬ" 2 кг с ярким сливочным вкусом, сверху покрыто сахарным сиропом',
            'title' => 'cookies-marishell',
            'code'=> '13000',
            'price' => '25.90',
            'img' => '42.png',
            'description' => 'Печенье с ярким сливочным вкусом, сверху покрыто сахарным сиропом',
            'brand_id' => '23',
            'slug' => 'sweets',
            'type_id'=> '2',
            'category_id' => '7',
        
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('products')->insert([
            'name' => 'Печенье "ГАРИБАЛЬДИ" 3 кг с большим количеством калиброванного изюма',
            'title' => 'cookies-garibaldi',
            'code'=> '13000',
            'price' => '22.90',
            'img' => '43.png',
            'description' => 'Печенье с большим количеством калиброванного изюма',
            'brand_id' => '23',
            'slug' => 'sweets',
            'type_id'=> '2',
            'category_id' => '7',
        
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('products')->insert([
            'name' => 'Печенье Grona Грона Лазанушки 400 гр',
            'title' => 'cookies-grona',
            'code'=> '13000',
            'price' => '18.90',
            'img' => '44.jpg',
            'description' => 'Неповторимое слоеное печенье, покрытое безе и декорированное натуральным соком.',
            'brand_id' => '23',
            'slug' => 'sweets',
            'type_id'=> '2',
            'category_id' => '7',
        
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        
        
        
        DB::table('products')->insert([
            'name' => 'Батончик "METRO"25 гр.x24x6 с карамелью и нугой, покрытый молочным шоколадом',
            'title' => 'bar-metro-25',
            'code'=> '13000',
            'price' => '20.90',
            'img' => '45.png',
            'description' => 'Батончик "METRO" с карамелью и нугой, покрытый молочным шоколадом',
            'brand_id' => '24',
            'slug' => 'sweets',
            'type_id'=> '2',
            'category_id' => '8',
        
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('products')->insert([
            'name' => 'Батончик Фруктово-ореховый "Клюква-Тыквенные семечки" (Иммунитет) 45 гр',
            'title' => 'bar-cranberry-pumpkin-seeds',
            'code'=> '13000',
            'price' => '12.90',
            'img' => '46.jpg',
            'description' => 'Батончик Фруктово-ореховый "Клюква-Тыквенные семечки" (Иммунитет) 45 гр',
            'brand_id' => '24',
            'slug' => 'sweets',
            'type_id'=> '2',
            'category_id' => '8',
        
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('products')->insert([
            'name' => 'Батончик Фруктово-ореховый "Миндаль-Яблоко-Корица" (Интеллект) 45 гр',
            'title' => 'bar-almond-apple-cinnamon',
            'code'=> '13000',
            'price' => '23.90',
            'img' => '47.jpg',
            'description' => 'Батончик Фруктово-ореховый "Миндаль-Яблоко-Корица" (Интеллект) 45 гр
            Заказ от 1 упаковки',
            'brand_id' => '24',
            'slug' => 'sweets',
            'type_id'=> '2',
            'category_id' => '8',
        
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('products')->insert([
            'name' => 'Батончик "ALBENI" 25 гр. 1 штука (24 шт. в блоке) с карамелью и печеньем, покрытый молочным шоколадом',
            'title' => 'bar-albeni-caramel',
            'code'=> '13000',
            'price' => '25.90',
            'img' => '48.png',
            'description' => '',
            'brand_id' => '25',
            'slug' => 'sweets',
            'type_id'=> '2',
            'category_id' => '8',
        
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('products')->insert([
            'name' => 'Батончик "ALBENI" 40 гр. 1 штука (24 шт. в блоке) с карамелью и печеньем, покрытый молочным шоколадом',
            'title' => 'bar-albeni-milk',
            'code'=> '13000',
            'price' => '22.90',
            'img' => '49.png',
            'description' => '',
            'brand_id' => '25',
            'slug' => 'sweets',
            'type_id'=> '2',
            'category_id' => '8',
        
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('products')->insert([
            'name' => 'Батончик "ALBENI" 47 гр. 1 штука (18 шт. в блоке) с карамелью и печеньем, покрытый молочным шоколадом',
            'title' => 'bar-albeni-mix',
            'code'=> '13000',
            'price' => '18.90',
            'img' => '50.png',
            'description' => 'Батончик «ALBENI» с карамелью и печеньем, покрытый молочным шоколадом.',
            'brand_id' => '25',
            'slug' => 'sweets',
            'type_id'=> '2',
            'category_id' => '8',
        
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        
        
        
        
        
        
        
        DB::table('products')->insert([
            'name' => 'Кофеварка капсульная NESPRESSO DELONGHI EXPERT EN 350 G',
            'title' => 'expert-en',
            'code'=> '23499',
            'price' => '28.90',
            'img' => '107.jpg',
            'description' => 'Капсульная кофеварка Expert EN 350 – это настоящее воплощение современных технологий в уникальном дизайнерском решении.
            Важно! В настоящее время в Республике Беларусь отсутствует возможность подключения кофеварки к приложению Nespresso. Прибор можно полноценно использовать без доступа к приложению.
            Кофеварка обеспечивает максимальное давление 19 бар для идеальной экстракции кофе и создания превосходной пенки crema с плотной текстурой. Теперь ценители бодрящего напитка смогут насладиться 100% натуральным молотым кофе редких сортов, приготовленным
             с учетом индивидуальных предпочтений: от температурного режима до объема чашки.',
            'slug' => 'gifts',
            'type_id'=> '4',
            'category_id' => '14',
      
            'brand_id'=>'33',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('products')->insert([
            'name' => 'Кофеварка капсульная NESPRESSO ESSENZA MINI D30 MATTE BLACK',
            'title' => 'nespresso-essenz-mini-d30',
            'code'=> '23419',
            'price' => '8.65',
            'img' => '108.png',
            'description' => 'Капсульная кофемашина Nespresso Essenza Mini D30 Matte Black характеризуется высокой мощностью, равной 1310 Вт, и давлением 19 бар, поэтому оптимально подходит для заваривания эспрессо и лунго. В конструкции есть резервуар для воды объемом 0,6 л, который при необходимости можно снять. Модель характеризуется длительным сроком службы, в том числе за счет корпуса, изготовленного из качественного, устойчивого к износу пластика. Особое отверстие для сетевого шнура,
             предусмотренное в устройстве, создает удобство при хранении и транспортировке.',
            'slug' => 'gifts',
            'type_id'=> '4',
            'category_id' => '14',
      
            'brand_id'=>'34',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('products')->insert([
            'name' => 'Кофеварка капсульная NESPRESSO ESSENZA MINI C30 GREY',
            'title' => 'nespresso-essenz-mini',
            'code'=> '23418',
            'price' => '12.32',
            'img' => '109.png',
            'description' => '',
            'slug' => 'gifts',
            'type_id'=> '4',
            'category_id' => '14',
      
            'brand_id'=>'34',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('products')->insert([
            'name' => 'Кофеварка капсульная NESPRESSO DELONGHI LATTISSIMA ONE EN 500.BW',
            'title' => 'lattissima-one-en',
            'code'=> '23417',
            'price' => '34.23',
            'img' => '110.jpg',
            'description' => 'Эргономичная и стильная капсульная кофемашина Lattissima One EN 500 подойдет для любого интерьера. Благодаря большому количеству поддерживаемых рецептов представленная модель способна угодить даже самому взыскательному ценителю. Максимальное давление составляет 19 бар, благодаря этому вкус и аромат приготовленного кофе будут особенно богатыми и насыщенными. Наличие встроенного автоматического капучинатора позволяет взбить насыщенную молочную пенку,
             высоту которой можно отрегулировать. ',
            'slug' => 'gifts',
            'type_id'=> '4',
            'category_id' => '14',
      
            'brand_id'=>'33',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
      
      
      
        DB::table('products')->insert([
            'name' => 'Кофеварка рожковая Lelit PL042EMI Anita',
            'title' => 'lelit-anita',
            'code'=> '23416',
            'price' => '28.90',
            'img' => '111.jpg',
            'description' => 'Полуавтоматическая кофемашина Lelit Anita PL042EM предназначена для приготовления эспрессо и капучино . Кнопки и решетка выполнены
            из нержавеющей стали, которая гарантирует длительные и высокие эксплуатационные качества.',
            'slug' => 'gifts',
            'type_id'=> '4',
            'category_id' => '14',
      
            'brand_id'=>'35',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('products')->insert([
            'name' => 'Кофеварка рожковая LELIT MARA PL62X',
            'title' => 'lelit-mara',
            'code'=> '23415',
            'price' => '8.65',
            'img' => '112.jpg',
            'description' => 'Рожковая кофеварка LELIT Mara PL62X предназначена для приготовления эспрессо и капучино в кофейнях, ресторанах и барах, в офисах и отелях, а также предприятиях общественного питания.
             Корпус ЛЕЛИТ Мара ПЛ62Икс выполнен из матовой нержавеющей стали, внутренние трубы – из меди.',
            'slug' => 'gifts',
            'type_id'=> '4',
            'category_id' => '14',
      
            'brand_id'=>'35',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('products')->insert([
            'name' => 'Кофеварка рожковая Lelit PL042TEMD Anita',
            'title' => 'lelit-anita-pl',
            'code'=> '23414',
            'price' => '12.32',
            'img' => '113.jpg',
            'description' => 'LELIT представляет линию профессиональных рожковых эспрессо-кофемашин со встроенной кофемолкой 38 мм с коническими жерновами (ресурс 500 кг) и микрометрической регулировкой, позволяющих получать
            великолепный вкусный и ароматный кофе с великолепной крема-пенкой из свежемолотого кофе!',
            'slug' => 'gifts',
            'type_id'=> '4',
            'category_id' => '14',
      
            'brand_id'=>'35',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('products')->insert([
            'name' => 'Кофеварка рожковая Lelit PL41TEM Anna',
            'title' => 'lelit-anna-pl14',
            'code'=> '23413',
            'price' => '34.23',
            'img' => '114.jpg',
            'description' => 'Полуавтоматическая кофемашина Lelit Anna PL41TEM предназначена для приготовления эспрессо и капучино. Овальные переключатели рычаги и решетка выполнены из нержавеющей стали, которая гарантирует длительные и высокие эксплуатационные качества.',
            'slug' => 'gifts',
            'type_id'=> '4',
            'category_id' => '14',
      
            'brand_id'=>'35',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
      
      
      
      
      
        DB::table('products')->insert([
            'name' => 'Кофемолка-lelit PL043 Fred',
            'title' => 'lelit Fred',
            'code'=> '23412',
            'price' => '28.90',
            'img' => '115.jpg',
            'description' => 'Кофемолка Lelit Fred PL043MMI  корпус, контейнер выдачи кофе, поддержка портафильтра и включатель помола выполнены из нержавеющей стали, контейнер – из высококачественной пластмассы, которая гарантирует длительные и высокие эксплуатационные качества.',
            'slug' => 'gifts',
            'type_id'=> '4',
            'category_id' => '15',
      
            'brand_id'=>'35',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('products')->insert([
            'name' => 'Кофемолка DELONGHI Dedica KG 521.M',
            'title' => 'delonghi-dedica',
            'code'=> '23411',
            'price' => '8.65',
            'img' => '116.jpg',
            'description' => 'Высококачественная жерновая кофемолка в стиле эспрессо кофеварок Помол возможен как в контейнер, так и непосредственно в рожок (портафильтр) в комплекте!
            Жернова стальные, конические; плавная настройка, 18 значений степени помола.
            На 2,1″ дисплее отображается помол и количество смолотых чашек, подсветка синяя.
            Кофемолка сама определит, сколько кофе необходимо приготовить и даже распознает, какой резервуар для кофе вставлен в разъем сейчас. ',
            'slug' => 'gifts',
            'type_id'=> '4',
            'category_id' => '15',
      
            'brand_id'=>'33',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('products')->insert([
            'name' => 'Кофемолка DELONGHI Dedica KG 520.M',
            'title' => 'delonghi-dedica-520',
            'code'=> '23411',
            'price' => '12.32',
            'img' => '117.jpg',
            'description' => 'DeLonghi KG 520.M обеспечивает равномерный и качественны помол кофейных зерен. Ее прочные металлические жернова отлично справляются с поставленной задачей. Вместимость прозрачного контейнера для хранения зерен составляет 350 гр., 18 значений помола',
            'slug' => 'gifts',
            'type_id'=> '4',
            'category_id' => '15',
      
            'brand_id'=>'33',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('products')->insert([
            'name' => 'Кофемолка Bialetti ручная чёрная',
            'title' => 'manual-coffee-grinder-black',
            'code'=> '23410',
            'price' => '34.23',
            'img' => '118.jpg',
            'description' => 'Удобная и стильная ручная кофемолка от Биалетти. Керамические жернова, регулировка степени помола от крупного до самого мелкого. Для этого необходимо сверху раскрутить и снять ручку и зажим, далее повернуть колесико по часовой стрелке для мелкого помола или против часовой – для крупного. На бункере для молотого кофе нанесена шкала,  позволяющая точно определить сколько кофе нужно смолоть для вашей кофеварки – 1, 3 или 6 чашек.',
            'slug' => 'gifts',
            'type_id'=> '4',
            'category_id' => '15',
      
            'brand_id'=>'36',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
      
      
      
      
        DB::table('products')->insert([
            'name' => 'Чайник BIALETTI стальной',
            'title' => 'steel-kettle',
            'code'=> '23420',
            'price' => '28.90',
            'img' => '119.jpg',
            'description' => 'Чайник стальной Bialetti 1л имеет оптимальный литраж и современный дизайн. Специальный носик -гусиная шея гарантирует медленный и постоянный поток воды для идеального настоя.',
            'slug' => 'gifts',
            'type_id'=> '4',
            'category_id' => '16',
      
            'brand_id'=>'36',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('products')->insert([
            'name' => 'Чайник DELONGHI Argento KBX 2016 W',
            'title' => 'steel-kettle-argento',
            'code'=> '23421',
            'price' => '8.65',
            'img' => '120.jpg',
            'description' => 'Электрический чайник KBX 2016 W1 оснащен трехуровневой системой безопасности, автоматическое выключение: в момент закипания воды, при снятии его с основания и при отсутствии воды в чайнике.',
            'slug' => 'gifts',
            'type_id'=> '4',
            'category_id' => '16',
      
            'brand_id'=>'33',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('products')->insert([
            'name' => 'Чайник DELONGHI Argento KBX 2016.BK',
            'title' => 'steel-kettle-argento-bk',
            'code'=> '23422',
            'price' => '12.32',
            'img' => '121.jpg',
            'description' => 'Электрический чайник KBX 2016 BK оснащен трехуровневой системой безопасности, автоматическое выключение:
             в момент закипания воды, при снятии его с основания и при отсутствии воды в чайнике.',
            'slug' => 'gifts',
            'type_id'=> '4',
            'category_id' => '16',
      
            'brand_id'=>'33',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('products')->insert([
            'name' => 'Чайник DELONGHI Active Line KBLA 2000 R',
            'title' => 'steel-kettle-activ',
            'code'=> '23423',
            'price' => '34.23',
            'img' => '122.jpg',
            'description' => 'Вода достигает своего кипячения за несколько минуты, так как внутри прибора есть интегрированный нагревательный элемент дискового типа. Малые габариты чайника позволяют нагреть за несколько минут до одного литра воды. Также имеется поворотная основа, одинаково удобная как для правой руки, так и для левой. Благодаря не скользящим ножкам чайника,
             устройство можно поставить на глянцевую поверхность без страха, что он упадет.',
            'slug' => 'gifts',
            'type_id'=> '4',
            'category_id' => '16',
      
            'brand_id'=>'33',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        




        DB::table('products')->insert([
            'name' => 'Термобутылка Bialetti красная, 750мл',
            'title' => 'thermal-bottle-bialetti-red',
            'code'=> '234234',
            'price' => '20.90',
            'img' => '123.jpg',
            'description' => 'Соблюдение водного режима – один из залогов хорошего самочувствия. Обычно температура воды в бутылке сильно зависит от внешней температуры. Теперь не нужно беспокоиться,
             что вода остынет или, наоборот, нагреется (а ведь летом так хочется, чтобы вода освежала!).',
            'brand_id' => '37',
            'slug' => 'tableware',
            'type_id'=> '5',
            'category_id' => '17',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('products')->insert([
            'name' => 'Термос Bialetti тёмно-серый, 460мл',
            'title' => 'thermal-bottle-bialetti-grey',
            'code'=> '2342',
            'price' => '12.90',
            'img' => '124.jpg',
            'description' => 'Стильный термос Bialetti из нержавеющей стали. Компактный эргономичный дизайн, не занимает много места.
            Преимущества этого термоса: двойная стенка, плотно закрывающаяся крышка предотвращает проливание, удобная чашка.',
            'brand_id' => '37',
            'slug' => 'tableware',
            'type_id'=> '5',
            'category_id' => '18',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('products')->insert([
            'name' => 'Термокружка Bialetti тёмно-серая, 550мл',
            'title' => 'thermal-bottle-bialetti-grey-550',
            'code'=> '23423',
            'price' => '23.90',
            'img' => '125.jpg',
            'description' => 'Удобный и практичный спутник любого кофемана. Термокружка Bialetti сохранит ваш кофе горячим до 12 часов, а благодаря стильному графитовому цвету она прекрасно впишется практически в любой стиль.',
            'brand_id' => '37',
            'slug' => 'tableware',
            'type_id'=> '5',
            'category_id' => '3',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        
        
        
        DB::table('products')->insert([
            'name' => 'Френч-пресс Bialetti Signature, 1,5 литра',
            'title' => 'french-press-bialetti-signature',
            'code'=> '234223',
            'price' => '25.90',
            'img' => '126.jpg',
            'description' => 'Строгий элегантный силуэт, эстетичность материалов и лёгкость в обращении – всё это делает Bialetti Signature настоящим Джеймсом Бондом среди френч-прессов.
            Корпус френч-пресса выполнен из боросиликатного стекла и высококачественной нержавеющей стали, что обеспечивает безопасность и долговечность. А фирменная гравировка Bialetti символизирует причастность к богатой итальянской кофейной традиции.',
            'brand_id' => '37',
            'slug' => 'tableware',
            'type_id'=> '5',
            'category_id' => '4',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('products')->insert([
            'name' => 'Френч-пресс Bialetti Signature , 350мл',
            'title' => 'french-press-bialetti-signature-350',
            'code'=> '2342',
            'price' => '22.90',
            'img' => '127.jpg',
            'description' => 'Строгий элегантный силуэт, эстетичность материалов и лёгкость в обращении – всё это делает Bialetti Signature настоящим Джеймсом Бондом среди френч-прессов.
            Корпус френч-пресса выполнен из боросиликатного стекла и высококачественной нержавеющей стали, что обеспечивает безопасность и долговечность. А фирменная
            гравировка Bialetti символизирует причастность к богатой итальянской кофейной традиции.',
            'brand_id' => '37',
            'slug' => 'tableware',
            'type_id'=> '5',
            'category_id' => '17',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('products')->insert([
            'name' => 'Френч-пресс Bialetti Preziosa, 1л',
            'title' => 'french-press-bialetti-preziosa',
            'code'=> '43523',
            'price' => '18.90',
            'img' => '128.jpg',
            'description' => 'Preziosa в переводе с итальянского означает «драгоценная» – вы полюбите этот френч-пресс с первой заварки, ведь он сочетает в себе простоту использования, благородство материалов и фирменный стиль Bialetti.
            Корпус френч-пресса выполнен из боросиликатного стекла и высококачественной нержавеющей стали, что обеспечивает безопасность и долговечность. А вырезка
             в виде знаменитого «человечка с усами» символизирует причастность к богатой итальянской кофейной традиции.',
            'brand_id' => '37',
            'slug' => 'tableware',
            'type_id'=> '5',
            'category_id' => '17',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);



        




        DB::table('products')->insert([
            'name' => 'Чай Battler "Золотой слон", черный листовой FBOP, 250 гр',
            'title' => 'gold-battler',
            'code'=> '213123',
            'price' => '20.90',
            'img' => '99.jpg',
            'description' => 'Чай черный Battler "Elephant Gold" (Золотой Слон) FBOP- Цейлонский чистый среднелистовой чай, обладает ароматным вкусом.',
            'brand_id' => '9',
            'slug' => 'sets',
            'type_id'=>'6',
            'category_id' => '22',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('products')->insert([
            'name' => 'Чай чёрный крупнолистовой "Monomax чай" 80 г (картон)',
            'title' => 'monomax-black-tea',
            'code'=> '213198',
            'price' => '12.90',
            'img' => '100.png',
            'description' => 'Высококачественный сорт цейлонского среднелистового черного чая с плантаций, расположенных на высокогорьях Шри-Ланки. Напиток обладает насыщенным вкусом и ярким ароматом. Такой купаж идеально подойдёт ценителям классического терпкого вкуса чая. Хорошо взбодрит и зарядит позитивом.',
            'brand_id' => '7',
           'slug' => 'sets',
           'type_id'=>'6',
            'category_id' => '22',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        
        
        DB::table('products')->insert([
            'name' => 'Чай Battler Черный "Апельсин и Корица", 100 гр, ж/б',
            'title' => 'orange-battler',
            'code'=> '870709',
            'price' => '20.90',
            'img' => '101.jpg',
            'description' => 'Приятный, освежающий купаж черного чая с цитрусовыми нотами и сладким вкусом корицы',
            'brand_id' => '9',
           'slug' => 'sets',
           'type_id'=>'6',
            'category_id' => '21',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('products')->insert([
            'name' => 'Чай подарочный Hyleys "For you" "Весенний букет" чёрный 75 гр.',
            'title' => 'spring-hyleys',
            'code'=> '456453',
            'price' => '12.90',
            'img' => '102.png',
            'description' => 'Чай черный цейлонский среднелистовой, лепестки гибискуса (каркаде), измельченные плоды шиповника, лепестки календулы, ароматизаторы персика и ванили.',
            'brand_id' => '8',
           'slug' => 'sets',
           'type_id'=>'6',
            'category_id' => '21',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        
        
        DB::table('products')->insert([
            'name' => 'Чай Gutenberg ароматизированный зеленый с черным Волшебная Луна',
            'title' => 'magic-moon-gutenberg',
            'code'=> '345323',
            'price' => '20.90',
            'img' => '103.jpg',
            'description' => 'Ароматизированный чай на смешанной основе.',
            'brand_id' => '10',
            'slug' => 'sets',
            'type_id'=>'6',
            'category_id' => '20',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('products')->insert([
            'name' => 'Чай Gutenberg ароматизированный зеленый с черным Идеал',
            'title' => 'black-ideal-gutenberg',
            'code'=> '544234',
            'price' => '12.90',
            'img' => '104.jpg',
            'description' => 'Ароматизированный чай на смешанной основе.',
            'brand_id' => '10',
           'slug' => 'sets',
           'type_id'=>'6',
            'category_id' => '20',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        
        
        
        DB::table('products')->insert([
            'name' => 'Gutenberg Китайский элитный чай Те Гуань Инь Ван (категория А)',
            'title' => 'guan-gutenberg',
            'code'=> '2342123',
            'price' => '20.90',
            'img' => '105.jpg',
            'description' => ' Необычайно вкусный полуферментированный чай, в переводе с китайского означающий "Железная Бодхисатва". Вкус его очень тонкий, а аромат нежно-цветочный.',
            'brand_id' => '10',
           'slug' => 'sets',
           'type_id'=>'6',
            'category_id' => '19',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('products')->insert([
            'name' => 'Gutenberg Китайский элитный чай Те Гуань Инь (Высшей категории)',
            'title' => 'elite-gutenberg',
            'code'=> '456342',
            'price' => '12.90',
            'img' => '106.jpg',
            'description' => ' Необычайно вкусный полуферментированный чай, в переводе с китайского означающий "Железная Бодхисатва". Вкус его очень тонкий, а аромат нежно-цветочный.',
            'brand_id' => '10',
            'slug' => 'sets',
            'type_id'=>'6',
            'category_id' => '19',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);







        DB::table('products')->insert([
            'name' => 'Подарочный набор № 26',
            'title' => 'gift-number-26',
            'code'=> '98000',
            'price' => '20.90',
            'img' => '51.jpg',
            'description' => 'В комплект входит:
        
            - Сироп monin "Лесной орех" 0,25л
        
            - Кофе Paulig "President" 250 гр. молотый
        
            - Шоколад "Ritter Sport" молочный с лесным орехом, 100 гр
        
            - Коробка подарочная
        
            - Декор',
            'slug' => 'giftsbox',
            'type_id'=>'7',
            'brand_id' => '26',
            'category_id' => '24',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('products')->insert([
            'name' => 'Подарочный набор № 5',
            'title' => 'gift-number-5',
            'code'=> '98000',
            'price' => '12.90',
            'img' => '52.jpg',
            'description' => 'В комплект входит:
        
            -  Кофе молотый Illy "Medium Roast" средняя обжарка в ж/б 125  гр.
        
            -  Чай Ahmad "Classic Tea Selection" черный 20 пак.
        
            -  Сироп Monin "Ваниль" 0,25 л
        
            -  Декоративная новогодняя шишка
        
            -  Декоративный апельсин
        
            - Коробка подарочная
        
            - Декор',
            'slug' => 'giftsbox',
            'type_id'=>'7',
            'brand_id' => '26',
            'category_id' => '24',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('products')->insert([
            'name' => 'Подарочный набор №16',
            'title' => 'gift-number-16',
            'code'=> '98000',
            'price' => '23.90',
            'img' => '53.jpg',
            'description' => 'В комплект входит:
        
            - Шоколадное жевательное драже с лакрицей "Mild&Sweet" ANTHON BERG 150 гр.
        
            - сироп Monin " Ваниль" 0,25 л
        
            -  Кофе молотый Illy "Medium Roast" средняя обжарка в ж/б 125г.
        
            - Коробка подарочная
        
            - Декор
            ',
            'slug' => 'giftsbox',
            'type_id'=>'7',
            'brand_id' => '26',
            'category_id' => '23',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('products')->insert([
            'name' => 'Подарочный набор № 27',
            'title' => 'gift-number-27',
            'code'=> '98000',
            'price' => '25.90',
            'img' => '54.jpg',
            'description' => 'В комплект входит:
        
            - Шоколад Schogetten DARK Chocolate темный 100 г.
        
            - Кофе Mövenpick "Der Himmlische" молотый 250 гр
        
            - Коробка подарочная
        
            - Декор',
            'slug' => 'giftsbox',
            'type_id'=>'7',
            'brand_id' => '26',
            'category_id' => '24',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('products')->insert([
            'name' => 'Подарочный набор № 6',
            'title' => 'gift-number-6',
            'code'=> '98000',
            'price' => '22.90',
            'img' => '55.jpg',
            'description' => 'В комплект входит:
        
            -  "BUCHERON MINI" горький шоколад с миндалем и апельсином в картоне 171 гр.
        
            -  Чай  LANCASTER Каркаде с вишней в жестяной банке 75 гр.
        
            -  Чай "LANCASTER" зеленый листовой молочный улун с малиной в жестяной банке 75 гр.
        
            - Декоративная  веточка
        
            - Коробка подарочная
        
            - Декор',
            'slug' => 'giftsbox',
            'type_id'=>'7',
            'brand_id' => '26',
            'category_id' => '23',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('products')->insert([
            'name' => 'Подарочный набор № 17',
            'title' => 'gift-number-17',
            'code'=> '98000',
            'price' => '18.90',
            'img' => '56.jpg',
            'description' => 'В комплект входит:
        
            -  Кофе Lavazza "Qualita Oro" 250гр. молотый (жесть)
        
            - Набор конфет Ferrero Collection 172,2 гр. шоколадный набор Т15х6
        
            - сироп Monin Амарето  0,25 л
        
            - Коробка подарочная
        
            - Декор',
            'slug' => 'giftsbox',
            'type_id'=>'7',
            'brand_id' => '26',
            'category_id' => '23',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        
        
        
        
        
        DB::table('products')->insert([
            'name' => 'Чайный набор AHMAD Tea Chest Four',
            'title' => 'teat-set-chest-four',
            'code'=> '98000',
            'price' => '20.90',
            'img' => '57.jpg',
            'description' => 'Чайная шкатулка содержит 4 вида чая по 10 пакетиков в фольге:
            - Эрл Грей
            - Английский Завтрак
            - Дарджилинг
            - Английский чай No.1',
            'slug' => 'giftsbox',
            'type_id'=>'7',
            'brand_id' => '27',
            'category_id' => '24',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('products')->insert([
            'name' => 'Новогодний шар AHMAD Английский чай N 1, листовой, 30 гр.',
            'title' => 'christmas-ball-ahmad',
            'code'=> '98000',
            'price' => '12.90',
            'img' => '58.jpg',
            'description' => 'Новогодний шар AHMAD Английский чай N 1, листовой, 30 гр.',
            'slug' => 'giftsbox',
            'type_id'=>'7',
            'brand_id' => '27',
            'category_id' => '24',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('products')->insert([
            'name' => 'Новогодний Шар AHMAD Эрл Грей, листовой, 30 гр.',
            'title' => 'christmas-ball-ahmad-early-grey',
            'code'=> '98000',
            'price' => '23.90',
            'img' => '59.jpg',
            'description' => 'Серебряный шар AHMAD Эрл Грей, листовой, 30 гр.',
            'slug' => 'giftsbox',
            'type_id'=>'7',
            'brand_id' => '27',
            'category_id' => '23',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('products')->insert([
            'name' => 'Новогодний шар AHMAD Английский Завтрак, листовой, 30 гр.',
            'title' => 'christmas-ball-ahmad-breakfast',
            'code'=> '98000',
            'price' => '25.90',
            'img' => '60.jpg',
            'description' => 'Бронзовый шар AHMAD Английский Завтрак, листовой, 30 гр.',
            'slug' => 'giftsbox',
            'type_id'=>'7',
            'brand_id' => '27',
            'category_id' => '24',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('products')->insert([
            'name' => 'Чай AHMAD Чайная шкатулка Белая "Tea Keeper", чайный набор 80 пакетов, 8*10*2 гр.',
            'title' => 'tea-box-white-tea-keeper"',
            'code'=> '98000',
            'price' => '22.90',
            'img' => '61.jpg',
            'description' => 'Коллекция черного и зеленого чая
            Состав:
            • Летний чабрец
            • Эрл Грей
            • Зеленый чай
            • Черный чай с черносливом
            • Английский завтрак
            • Зеленый чай с лимоном и лаймом
            • Черный чай "Клубничный крем"
            • Молочный улун
            • Черный чай с яблоком и мятой
            • Цейлонский чай
            ',
            'slug' => 'giftsbox',
            'type_id'=>'7',
            'brand_id' => '27',
            'category_id' => '23',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('products')->insert([
            'name' => 'Чай черный "Basilur" Winter Berries с малиной, 100 гр, ж/б',
            'title' => 'basilur-winter-berries',
            'code'=> '98000',
            'price' => '18.90',
            'img' => '62.jpg',
            'description' => '',
            'slug' => 'giftsbox',
            'type_id'=>'7',
            'brand_id' => '28',
            'category_id' => '24',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        
        
        DB::table('products')->insert([
            'name' => 'Подарочная корзина №1',
            'title' => 'basket-number-1',
            'code'=> '98000',
            'price' => '20.90',
            'img' => '63.jpg',
            'description' => 'В комплект входит:
        
            -  Кофе в зернах Lavazza "Espresso" 250 гр.
        
            - Кофе натуральный Egoist Noir зерно 250 гр.
        
            - Кофе жаренный в зернах Gimoka "Nero Gran Gala" 250 гр.
        
            - Кофе в зернах Illy blend INTENSO темной обжарки 250 гр.
        
            -  BUCHERON горький шоколад с клюквой,клубникой и фисташками в картоне 100 гр.
        
            - BUCHERON горький шоколад с фисташками 100 гр. жесть
        
            - SWISS ORIGINAL горький шоколад с кайенским перцем 100 гр.
        
            - SWISS ORIGINAL горький шоколад с морской солью 100 гр.
        
            -  SWISS ORIGINAL горький шоколад 100 гр.5',
            'slug' => 'giftsbox',
            'type_id'=>'7',
            'brand_id' => '29',
            'category_id' => '24',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        
        
        
        DB::table('products')->insert([
            'name' => 'Подарочная корзина № 2',
            'title' => 'basket-number-2',
            'code'=> '98000',
            'price' => '12.90',
            'img' => '64.jpg',
            'description' => 'В комплект входит:
            Сироп Monin "Лесной орех" Фундук 0,25 мл
        
            Фруктовое ассорти № 4 чернослив, курага, яблоко, вишня без косточки 230 гр.
        
            Фруктовое ассорти № 6 дыня, киви, вишня без косточки 230 гр.
        
            Фруктовое ассорти № 2 финик, груша, яблоко, вишня без косточки и кумкват 230 гр.
        
            Кофе Minges Origins Peru Hochland Brasil, 250 гр.',
            'slug' => 'giftsbox',
            'type_id'=>'7',
            'brand_id' => '29',
            'category_id' => '23',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('products')->insert([
            'name' => 'Подарочная корзина № 3',
            'title' => 'basket-number-3',
            'code'=> '98000',
            'price' => '23.90',
            'img' => '65.jpg',
            'description' => 'В комплект входит:
        
            - Чай Greenfield "Chocolate Toffee" черный (25 пак.)
        
            - Чай Greenfield "Christmas Mystery" черный (25 пак.)
        
            - Кофе BUSHIDO Original 100г растворимый стекло
        
            - Чай "LANCASTER" черный листовой с ароматом манго в жестяной банке 75 гр
        
            - Кофе Mövenpick "Der Himmlische" 250 гр молотый
        
            - Шоколад Merci "Finest Selection" 250 гр. (горький)',
            'slug' => 'giftsbox',
            'type_id'=>'7',
            'brand_id' => '29',
            'category_id' => '23',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('products')->insert([
            'name' => 'Подарочная корзина № 4',
            'title' => 'basket-number-4',
            'code'=> '98000',
            'price' => '25.90',
            'img' => '66.jpg',
            'description' => 'В комплект входит:
        
            - SWISS ORIGINAL горький шоколад с кайенским перцем, 100 гр
        
            - SWISS ORIGINAL горький шоколад с морской солью, 100 гр
        
            - SWISS ORIGINAL горький шоколад с кусочками апельсина, 100 гр
        
            - Шоколад "Chateau" Kaffee Sahne, белый + кофейный, 200 гр
        
            - Шоколад "Chateau" Herbe Sahne, темный, 200 гр
        
            - Шоколад Schogetten Dark Chocolate, темный, 100 гр
        
            - Шоколад "Ritter Sport" Темный с лесным орехом, 100 гр
        
            - BUCHERON горький шоколад с фундуком 100 гр. жесть
        
            - BUCHERON горький шоколад с фисташками 100 гр. жесть 180*82
        
            - Фруктовое ассорти № 6 дыня, киви, вишня без косточки 230 гр.
        
            - Набор конфет Ferrero Collection 172,2 гр
        
            - Конфеты Французские трюфели "Marc de Champagne" в мет. банке CHOCOLAT MATHEZ SAS 200 гр',
            'slug' => 'giftsbox',
            'type_id'=>'7',
            'brand_id' => '29',
            'category_id' => '23',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('products')->insert([
            'name' => 'Подарочная корзина № 5',
            'title' => 'basket-number-5',
            'code'=> '98000',
            'price' => '22.90',
            'img' => '66.jpg',
            'description' => 'В комплект входит:
        
            - Конфеты АВК "Королевский шарм" со сливочной начинкой
        
            - Шоколад "Chateau" Kaffee Sahne, белый + кофейный, 200 гр
        
            - Чай Lipton "Orange Jaipur" черный (20 пир.)
        
            - Сироп "Ваниль", ТМ "Sweet Madam" 0.7 л
        
            - Кофе Paulig "New York", 400 гр, зерно',
            'slug' => 'giftsbox',
            'type_id'=>'7',
            'brand_id' => '29',
            'category_id' => '23',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('products')->insert([
            'name' => 'Подарочная корзина № 6',
            'title' => 'basket-number-6',
            'code'=> '98000',
            'price' => '18.90',
            'img' => '66.jpg',
            'description' => 'В комплект входит:
        
            - BUCHERON горький шоколад с фундуком 100 гр. жесть
        
            - Кофе Paulig "Havana" 400 гр зерно
        
            - Кофе Paulig "Paris" 400 гр зерно
        
            - Конфеты Raffaello кокосовые с цельным миндалем 150 гр
        
            - Кофе в зернах Illy blend INTENSO темной обжарки 250 гр
        
            - Сироп DaVinci "Шоколад" 1 л',
            'slug' => 'giftsbox',
            'type_id'=>'7',
            'brand_id' => '29',
            'category_id' => '23',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        
        
        
        
        DB::table('products')->insert([
            'name' => 'Рождественское сахарное печенье Jacobsens "Nostalgic Santa Cookies Box", 150 гр',
            'title' => 'jacobsens-nostalgic-santa-cookies-box',
            'code'=> '98000',
            'price' => '20.90',
            'img' => '69.jpg',
            'description' => 'Невероятно вкусное сдобное сливочное печенье в яркой рождественской упаковке.',
            'slug' => 'giftsbox',
            'type_id'=>'7',
            'brand_id' => '30',
            'category_id' => '23',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('products')->insert([
            'name' => 'Рождественское сливочное печенье Jacobsens "Currier&Ives", 340 гр',
            'title' => 'jacobsens-currier-ives',
            'code'=> '98000',
            'price' => '12.90',
            'img' => '70.jpg',
            'description' => 'Рассыпчатое сливочное ассорти от Jacobsens Bakery.
            Оригинальная подарочная упаковка делает это печенье незаменимым подарком как коллеге по работе, так и любимой бабушке!',
            'slug' => 'giftsbox',
            'type_id'=>'7',
            'brand_id' => '30',
            'category_id' => '24',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('products')->insert([
            'name' => 'Французские трюфели в какао Chocmod, 500 гр',
            'title' => 'chmod-truffles',
            'code'=> '98000',
            'price' => '23.90',
            'img' => '71.jpg',
            'description' => 'Настоящие французские трюфели с какао-посыпкой в праздничной металлической коробочке.',
            'slug' => 'giftsbox',
            'type_id'=>'7',
            'brand_id' => '31',
            'category_id' => '24',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('products')->insert([
            'name' => 'Шоколадное ассорти Lindt "Weihnachtsmarkt Praline", 130 гр',
            'title' => 'lindt-weihnachtsmarkt-praline',
            'code'=> '98000',
            'price' => '25.90',
            'img' => '72.jpg',
            'description' => 'Нежнейшее ассорти из пралине с различными начинками: ваниль, корица, марципан и печенье.',
            'slug' => 'giftsbox',
            'type_id'=>'7',
            'brand_id' => '32',
            'category_id' => '24',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('products')->insert([
            'name' => 'Рождественское сливочное печенье Peter Rabbit, 400 гр',
            'title' => 'peterrabbit',
            'code'=> '98000',
            'price' => '22.90',
            'img' => '73.jpg',
            'description' => 'Невероятно нежное сливочное печенье от датского бренда Jacobsens Bakery',
            'slug' => 'giftsbox',
            'type_id'=>'7',
            'brand_id' => '32',
            'category_id' => '23',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('products')->insert([
            'name' => 'Шоколадные конфеты "Рождественский календарь Teddy", 172 гр',
            'title' => 'teddy',
            'code'=> '98000',
            'price' => '18.90',
            'img' => '74.jpg',
            'description' => 'Сладкий адвент-календарь с швейцарским молочным шоколадом.s',
            'slug' => 'giftsbox',
            'type_id'=>'7',
            'brand_id' => '32',
            'category_id' => '24',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
    }
}
