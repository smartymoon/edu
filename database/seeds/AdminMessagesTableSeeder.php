<?php

use Illuminate\Database\Seeder;

class AdminMessagesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('admin_messages')->delete();
        
        \DB::table('admin_messages')->insert(array (
            0 => 
            array (
                'id' => 1,
                'messageable_type' => 'App\\Teacher',
                'messageable_id' => 0,
                'message' => 'Ratione quisquam dolorem quae nisi repellat nemo.',
                'seen' => false,
                'created_at' => '2021-10-19 07:38:02',
                'updated_at' => '2021-10-19 07:38:02',
            ),
            1 => 
            array (
                'id' => 2,
                'messageable_type' => 'App\\Teacher',
                'messageable_id' => 0,
                'message' => 'Est et harum est atque qui voluptates adipisci.',
                'seen' => false,
                'created_at' => '2021-10-19 07:38:02',
                'updated_at' => '2021-10-19 07:38:02',
            ),
            2 => 
            array (
                'id' => 3,
                'messageable_type' => 'App\\Teacher',
                'messageable_id' => 0,
                'message' => 'Illo provident minus qui suscipit.',
                'seen' => false,
                'created_at' => '2021-10-19 07:38:02',
                'updated_at' => '2021-10-19 07:38:02',
            ),
            3 => 
            array (
                'id' => 4,
                'messageable_type' => 'App\\Teacher',
                'messageable_id' => 0,
                'message' => 'Occaecati praesentium nulla unde tempore voluptas minus sequi.',
                'seen' => false,
                'created_at' => '2021-10-19 07:38:02',
                'updated_at' => '2021-10-19 07:38:02',
            ),
            4 => 
            array (
                'id' => 5,
                'messageable_type' => 'App\\Teacher',
                'messageable_id' => 0,
                'message' => 'Praesentium perspiciatis deleniti id molestias adipisci animi.',
                'seen' => false,
                'created_at' => '2021-10-19 07:38:02',
                'updated_at' => '2021-10-19 07:38:02',
            ),
            5 => 
            array (
                'id' => 6,
                'messageable_type' => 'App\\Teacher',
                'messageable_id' => 0,
                'message' => 'Expedita quis et dolorem totam ducimus.',
                'seen' => false,
                'created_at' => '2021-10-19 07:38:02',
                'updated_at' => '2021-10-19 07:38:02',
            ),
            6 => 
            array (
                'id' => 7,
                'messageable_type' => 'App\\Teacher',
                'messageable_id' => 0,
                'message' => 'Quo dicta unde enim in dolores minus debitis.',
                'seen' => false,
                'created_at' => '2021-10-19 07:38:02',
                'updated_at' => '2021-10-19 07:38:02',
            ),
            7 => 
            array (
                'id' => 8,
                'messageable_type' => 'App\\Teacher',
                'messageable_id' => 0,
                'message' => 'Et quo dolor nesciunt qui quis esse non.',
                'seen' => false,
                'created_at' => '2021-10-19 07:38:02',
                'updated_at' => '2021-10-19 07:38:02',
            ),
            8 => 
            array (
                'id' => 9,
                'messageable_type' => 'App\\Teacher',
                'messageable_id' => 0,
                'message' => 'Aut repellendus ut consectetur soluta reprehenderit recusandae.',
                'seen' => false,
                'created_at' => '2021-10-19 07:38:02',
                'updated_at' => '2021-10-19 07:38:02',
            ),
            9 => 
            array (
                'id' => 10,
                'messageable_type' => 'App\\Teacher',
                'messageable_id' => 0,
                'message' => 'Dignissimos quae voluptatem odit praesentium.',
                'seen' => false,
                'created_at' => '2021-10-19 07:38:02',
                'updated_at' => '2021-10-19 07:38:02',
            ),
            10 => 
            array (
                'id' => 11,
                'messageable_type' => 'App\\Student',
                'messageable_id' => 0,
                'message' => 'Ullam sit perspiciatis illo dolor veritatis.',
                'seen' => false,
                'created_at' => '2021-10-19 07:38:02',
                'updated_at' => '2021-10-19 07:38:02',
            ),
            11 => 
            array (
                'id' => 12,
                'messageable_type' => 'App\\Student',
                'messageable_id' => 0,
                'message' => 'Qui aperiam qui aspernatur beatae doloremque reprehenderit rerum molestiae.',
                'seen' => false,
                'created_at' => '2021-10-19 07:38:02',
                'updated_at' => '2021-10-19 07:38:02',
            ),
            12 => 
            array (
                'id' => 13,
                'messageable_type' => 'App\\Student',
                'messageable_id' => 0,
                'message' => 'Asperiores debitis non deleniti velit odit.',
                'seen' => false,
                'created_at' => '2021-10-19 07:38:02',
                'updated_at' => '2021-10-19 07:38:02',
            ),
            13 => 
            array (
                'id' => 14,
                'messageable_type' => 'App\\Student',
                'messageable_id' => 0,
                'message' => 'Quae adipisci beatae odio vero est.',
                'seen' => false,
                'created_at' => '2021-10-19 07:38:02',
                'updated_at' => '2021-10-19 07:38:02',
            ),
            14 => 
            array (
                'id' => 15,
                'messageable_type' => 'App\\Student',
                'messageable_id' => 0,
                'message' => 'Impedit voluptas unde fugit quam odio.',
                'seen' => false,
                'created_at' => '2021-10-19 07:38:02',
                'updated_at' => '2021-10-19 07:38:02',
            ),
            15 => 
            array (
                'id' => 16,
                'messageable_type' => 'App\\Student',
                'messageable_id' => 0,
                'message' => 'Sint laudantium error corrupti nobis omnis et.',
                'seen' => false,
                'created_at' => '2021-10-19 07:38:02',
                'updated_at' => '2021-10-19 07:38:02',
            ),
            16 => 
            array (
                'id' => 17,
                'messageable_type' => 'App\\Student',
                'messageable_id' => 0,
                'message' => 'Natus in voluptatum consequatur voluptatem cupiditate voluptas quibusdam.',
                'seen' => false,
                'created_at' => '2021-10-19 07:38:02',
                'updated_at' => '2021-10-19 07:38:02',
            ),
            17 => 
            array (
                'id' => 18,
                'messageable_type' => 'App\\Student',
                'messageable_id' => 0,
                'message' => 'Voluptatibus dicta et ex ipsa mollitia labore magni.',
                'seen' => false,
                'created_at' => '2021-10-19 07:38:02',
                'updated_at' => '2021-10-19 07:38:02',
            ),
            18 => 
            array (
                'id' => 19,
                'messageable_type' => 'App\\Student',
                'messageable_id' => 0,
                'message' => 'Non occaecati deserunt molestias consectetur et.',
                'seen' => false,
                'created_at' => '2021-10-19 07:38:02',
                'updated_at' => '2021-10-19 07:38:02',
            ),
            19 => 
            array (
                'id' => 20,
                'messageable_type' => 'App\\Student',
                'messageable_id' => 0,
                'message' => 'Sit magnam ratione quod autem.',
                'seen' => false,
                'created_at' => '2021-10-19 07:38:02',
                'updated_at' => '2021-10-19 07:38:02',
            ),
            20 => 
            array (
                'id' => 21,
                'messageable_type' => 'App\\Teacher',
                'messageable_id' => 1,
                'message' => 'Ducimus debitis illo iste et.',
                'seen' => false,
                'created_at' => '2021-10-19 07:38:02',
                'updated_at' => '2021-10-19 07:38:02',
            ),
            21 => 
            array (
                'id' => 22,
                'messageable_type' => 'App\\Teacher',
                'messageable_id' => 1,
                'message' => 'Hic doloremque ut similique sint vel omnis.',
                'seen' => false,
                'created_at' => '2021-10-19 07:38:02',
                'updated_at' => '2021-10-19 07:38:02',
            ),
            22 => 
            array (
                'id' => 23,
                'messageable_type' => 'App\\Teacher',
                'messageable_id' => 1,
                'message' => 'Voluptas nisi pariatur quia tenetur dolor corrupti nostrum.',
                'seen' => false,
                'created_at' => '2021-10-19 07:38:02',
                'updated_at' => '2021-10-19 07:38:02',
            ),
            23 => 
            array (
                'id' => 24,
                'messageable_type' => 'App\\Teacher',
                'messageable_id' => 1,
                'message' => 'Aut laboriosam in debitis debitis distinctio eos inventore aut.',
                'seen' => false,
                'created_at' => '2021-10-19 07:38:02',
                'updated_at' => '2021-10-19 07:38:02',
            ),
            24 => 
            array (
                'id' => 25,
                'messageable_type' => 'App\\Teacher',
                'messageable_id' => 1,
                'message' => 'Cupiditate et et sed sunt aut veritatis in.',
                'seen' => false,
                'created_at' => '2021-10-19 07:38:02',
                'updated_at' => '2021-10-19 07:38:02',
            ),
            25 => 
            array (
                'id' => 26,
                'messageable_type' => 'App\\Teacher',
                'messageable_id' => 1,
                'message' => 'Magni at ab ullam aliquam voluptates corrupti totam amet.',
                'seen' => false,
                'created_at' => '2021-10-19 07:38:02',
                'updated_at' => '2021-10-19 07:38:02',
            ),
            26 => 
            array (
                'id' => 27,
                'messageable_type' => 'App\\Teacher',
                'messageable_id' => 1,
                'message' => 'Ducimus dolorum ad illum qui velit soluta dolorum.',
                'seen' => false,
                'created_at' => '2021-10-19 07:38:02',
                'updated_at' => '2021-10-19 07:38:02',
            ),
            27 => 
            array (
                'id' => 28,
                'messageable_type' => 'App\\Teacher',
                'messageable_id' => 1,
                'message' => 'Culpa provident qui nihil asperiores non nostrum totam.',
                'seen' => false,
                'created_at' => '2021-10-19 07:38:02',
                'updated_at' => '2021-10-19 07:38:02',
            ),
            28 => 
            array (
                'id' => 29,
                'messageable_type' => 'App\\Teacher',
                'messageable_id' => 1,
                'message' => 'Laudantium placeat magni quas incidunt consequatur.',
                'seen' => false,
                'created_at' => '2021-10-19 07:38:02',
                'updated_at' => '2021-10-19 07:38:02',
            ),
            29 => 
            array (
                'id' => 30,
                'messageable_type' => 'App\\Teacher',
                'messageable_id' => 1,
                'message' => 'Eveniet autem doloremque eveniet distinctio ut quis voluptatem.',
                'seen' => false,
                'created_at' => '2021-10-19 07:38:02',
                'updated_at' => '2021-10-19 07:38:02',
            ),
            30 => 
            array (
                'id' => 31,
                'messageable_type' => 'App\\Student',
                'messageable_id' => 1,
                'message' => 'Ipsa inventore dolores aut repellat et quisquam laborum.',
                'seen' => false,
                'created_at' => '2021-10-19 07:38:02',
                'updated_at' => '2021-10-19 07:38:02',
            ),
            31 => 
            array (
                'id' => 32,
                'messageable_type' => 'App\\Student',
                'messageable_id' => 1,
                'message' => 'Quaerat id enim non sed.',
                'seen' => false,
                'created_at' => '2021-10-19 07:38:02',
                'updated_at' => '2021-10-19 07:38:02',
            ),
            32 => 
            array (
                'id' => 33,
                'messageable_type' => 'App\\Student',
                'messageable_id' => 1,
                'message' => 'Id in sed dolorum nobis magnam fuga.',
                'seen' => false,
                'created_at' => '2021-10-19 07:38:02',
                'updated_at' => '2021-10-19 07:38:02',
            ),
            33 => 
            array (
                'id' => 34,
                'messageable_type' => 'App\\Student',
                'messageable_id' => 1,
                'message' => 'Rem et optio veniam dolore doloribus.',
                'seen' => false,
                'created_at' => '2021-10-19 07:38:02',
                'updated_at' => '2021-10-19 07:38:02',
            ),
            34 => 
            array (
                'id' => 35,
                'messageable_type' => 'App\\Student',
                'messageable_id' => 1,
                'message' => 'Temporibus reiciendis qui voluptas eum.',
                'seen' => false,
                'created_at' => '2021-10-19 07:38:02',
                'updated_at' => '2021-10-19 07:38:02',
            ),
            35 => 
            array (
                'id' => 36,
                'messageable_type' => 'App\\Student',
                'messageable_id' => 1,
                'message' => 'Optio voluptatibus molestiae beatae ratione.',
                'seen' => false,
                'created_at' => '2021-10-19 07:38:02',
                'updated_at' => '2021-10-19 07:38:02',
            ),
            36 => 
            array (
                'id' => 37,
                'messageable_type' => 'App\\Student',
                'messageable_id' => 1,
                'message' => 'Consequatur voluptas voluptatem aspernatur voluptatem error.',
                'seen' => false,
                'created_at' => '2021-10-19 07:38:02',
                'updated_at' => '2021-10-19 07:38:02',
            ),
            37 => 
            array (
                'id' => 38,
                'messageable_type' => 'App\\Student',
                'messageable_id' => 1,
                'message' => 'Sit et laborum dolor.',
                'seen' => false,
                'created_at' => '2021-10-19 07:38:02',
                'updated_at' => '2021-10-19 07:38:02',
            ),
            38 => 
            array (
                'id' => 39,
                'messageable_type' => 'App\\Student',
                'messageable_id' => 1,
                'message' => 'Corporis nisi tempora ipsam velit facere est.',
                'seen' => false,
                'created_at' => '2021-10-19 07:38:02',
                'updated_at' => '2021-10-19 07:38:02',
            ),
            39 => 
            array (
                'id' => 40,
                'messageable_type' => 'App\\Student',
                'messageable_id' => 1,
                'message' => 'Delectus sint quia quae debitis magni.',
                'seen' => false,
                'created_at' => '2021-10-19 07:38:02',
                'updated_at' => '2021-10-19 07:38:02',
            ),
            40 => 
            array (
                'id' => 41,
                'messageable_type' => 'App\\Teacher',
                'messageable_id' => 2,
                'message' => 'Illo qui nihil sit eum earum sit minus quos.',
                'seen' => false,
                'created_at' => '2021-10-19 07:38:02',
                'updated_at' => '2021-10-19 07:38:02',
            ),
            41 => 
            array (
                'id' => 42,
                'messageable_type' => 'App\\Teacher',
                'messageable_id' => 2,
                'message' => 'Tenetur beatae omnis officiis aut est labore.',
                'seen' => false,
                'created_at' => '2021-10-19 07:38:02',
                'updated_at' => '2021-10-19 07:38:02',
            ),
            42 => 
            array (
                'id' => 43,
                'messageable_type' => 'App\\Teacher',
                'messageable_id' => 2,
                'message' => 'Quo nihil non perferendis qui molestias dolorem qui.',
                'seen' => false,
                'created_at' => '2021-10-19 07:38:02',
                'updated_at' => '2021-10-19 07:38:02',
            ),
            43 => 
            array (
                'id' => 44,
                'messageable_type' => 'App\\Teacher',
                'messageable_id' => 2,
                'message' => 'Vel reprehenderit et voluptatibus quia amet est.',
                'seen' => false,
                'created_at' => '2021-10-19 07:38:02',
                'updated_at' => '2021-10-19 07:38:02',
            ),
            44 => 
            array (
                'id' => 45,
                'messageable_type' => 'App\\Teacher',
                'messageable_id' => 2,
                'message' => 'Corrupti esse rerum architecto reiciendis et fugit.',
                'seen' => false,
                'created_at' => '2021-10-19 07:38:02',
                'updated_at' => '2021-10-19 07:38:02',
            ),
            45 => 
            array (
                'id' => 46,
                'messageable_type' => 'App\\Teacher',
                'messageable_id' => 2,
                'message' => 'Saepe commodi corporis labore autem voluptas.',
                'seen' => false,
                'created_at' => '2021-10-19 07:38:02',
                'updated_at' => '2021-10-19 07:38:02',
            ),
            46 => 
            array (
                'id' => 47,
                'messageable_type' => 'App\\Teacher',
                'messageable_id' => 2,
                'message' => 'Sunt maiores non nesciunt ut et sunt tenetur.',
                'seen' => false,
                'created_at' => '2021-10-19 07:38:02',
                'updated_at' => '2021-10-19 07:38:02',
            ),
            47 => 
            array (
                'id' => 48,
                'messageable_type' => 'App\\Teacher',
                'messageable_id' => 2,
                'message' => 'Dolor ipsam sit quia enim accusamus.',
                'seen' => false,
                'created_at' => '2021-10-19 07:38:02',
                'updated_at' => '2021-10-19 07:38:02',
            ),
            48 => 
            array (
                'id' => 49,
                'messageable_type' => 'App\\Teacher',
                'messageable_id' => 2,
                'message' => 'Dolorem molestias illo quam molestiae.',
                'seen' => false,
                'created_at' => '2021-10-19 07:38:02',
                'updated_at' => '2021-10-19 07:38:02',
            ),
            49 => 
            array (
                'id' => 50,
                'messageable_type' => 'App\\Teacher',
                'messageable_id' => 2,
                'message' => 'Pariatur delectus enim eius quos quod.',
                'seen' => false,
                'created_at' => '2021-10-19 07:38:02',
                'updated_at' => '2021-10-19 07:38:02',
            ),
            50 => 
            array (
                'id' => 51,
                'messageable_type' => 'App\\Student',
                'messageable_id' => 2,
                'message' => 'Eum provident eos sunt et.',
                'seen' => false,
                'created_at' => '2021-10-19 07:38:02',
                'updated_at' => '2021-10-19 07:38:02',
            ),
            51 => 
            array (
                'id' => 52,
                'messageable_type' => 'App\\Student',
                'messageable_id' => 2,
                'message' => 'Quia accusantium alias necessitatibus porro unde.',
                'seen' => false,
                'created_at' => '2021-10-19 07:38:02',
                'updated_at' => '2021-10-19 07:38:02',
            ),
            52 => 
            array (
                'id' => 53,
                'messageable_type' => 'App\\Student',
                'messageable_id' => 2,
                'message' => 'Totam vel voluptates expedita hic est delectus maiores unde.',
                'seen' => false,
                'created_at' => '2021-10-19 07:38:02',
                'updated_at' => '2021-10-19 07:38:02',
            ),
            53 => 
            array (
                'id' => 54,
                'messageable_type' => 'App\\Student',
                'messageable_id' => 2,
                'message' => 'Aut sunt et odit error et.',
                'seen' => false,
                'created_at' => '2021-10-19 07:38:02',
                'updated_at' => '2021-10-19 07:38:02',
            ),
            54 => 
            array (
                'id' => 55,
                'messageable_type' => 'App\\Student',
                'messageable_id' => 2,
                'message' => 'Iusto nulla enim non culpa aut.',
                'seen' => false,
                'created_at' => '2021-10-19 07:38:02',
                'updated_at' => '2021-10-19 07:38:02',
            ),
            55 => 
            array (
                'id' => 56,
                'messageable_type' => 'App\\Student',
                'messageable_id' => 2,
                'message' => 'Velit et ut qui atque accusamus cum nihil.',
                'seen' => false,
                'created_at' => '2021-10-19 07:38:02',
                'updated_at' => '2021-10-19 07:38:02',
            ),
            56 => 
            array (
                'id' => 57,
                'messageable_type' => 'App\\Student',
                'messageable_id' => 2,
                'message' => 'Eveniet libero a sunt cum quaerat assumenda illum.',
                'seen' => false,
                'created_at' => '2021-10-19 07:38:02',
                'updated_at' => '2021-10-19 07:38:02',
            ),
            57 => 
            array (
                'id' => 58,
                'messageable_type' => 'App\\Student',
                'messageable_id' => 2,
                'message' => 'Nesciunt iure qui laudantium praesentium.',
                'seen' => false,
                'created_at' => '2021-10-19 07:38:02',
                'updated_at' => '2021-10-19 07:38:02',
            ),
            58 => 
            array (
                'id' => 59,
                'messageable_type' => 'App\\Student',
                'messageable_id' => 2,
                'message' => 'Beatae voluptatem voluptatem eos pariatur et error.',
                'seen' => false,
                'created_at' => '2021-10-19 07:38:02',
                'updated_at' => '2021-10-19 07:38:02',
            ),
            59 => 
            array (
                'id' => 60,
                'messageable_type' => 'App\\Student',
                'messageable_id' => 2,
                'message' => 'Reiciendis voluptatibus atque velit et qui officiis atque excepturi.',
                'seen' => false,
                'created_at' => '2021-10-19 07:38:02',
                'updated_at' => '2021-10-19 07:38:02',
            ),
            60 => 
            array (
                'id' => 61,
                'messageable_type' => 'App\\Teacher',
                'messageable_id' => 3,
                'message' => 'Voluptatem perferendis sit exercitationem.',
                'seen' => false,
                'created_at' => '2021-10-19 07:38:02',
                'updated_at' => '2021-10-19 07:38:02',
            ),
            61 => 
            array (
                'id' => 62,
                'messageable_type' => 'App\\Teacher',
                'messageable_id' => 3,
                'message' => 'Iste consectetur culpa mollitia nesciunt dignissimos.',
                'seen' => false,
                'created_at' => '2021-10-19 07:38:02',
                'updated_at' => '2021-10-19 07:38:02',
            ),
            62 => 
            array (
                'id' => 63,
                'messageable_type' => 'App\\Teacher',
                'messageable_id' => 3,
                'message' => 'Repudiandae ad qui iste deleniti soluta ipsa architecto.',
                'seen' => false,
                'created_at' => '2021-10-19 07:38:02',
                'updated_at' => '2021-10-19 07:38:02',
            ),
            63 => 
            array (
                'id' => 64,
                'messageable_type' => 'App\\Teacher',
                'messageable_id' => 3,
                'message' => 'Voluptatem eos quod ipsam harum libero dolorum.',
                'seen' => false,
                'created_at' => '2021-10-19 07:38:02',
                'updated_at' => '2021-10-19 07:38:02',
            ),
            64 => 
            array (
                'id' => 65,
                'messageable_type' => 'App\\Teacher',
                'messageable_id' => 3,
                'message' => 'Voluptatem debitis quia ratione sunt alias.',
                'seen' => false,
                'created_at' => '2021-10-19 07:38:02',
                'updated_at' => '2021-10-19 07:38:02',
            ),
            65 => 
            array (
                'id' => 66,
                'messageable_type' => 'App\\Teacher',
                'messageable_id' => 3,
                'message' => 'Deserunt ab quibusdam temporibus eos dolorem repellendus.',
                'seen' => false,
                'created_at' => '2021-10-19 07:38:02',
                'updated_at' => '2021-10-19 07:38:02',
            ),
            66 => 
            array (
                'id' => 67,
                'messageable_type' => 'App\\Teacher',
                'messageable_id' => 3,
                'message' => 'Deserunt velit et ab blanditiis deserunt inventore quisquam.',
                'seen' => false,
                'created_at' => '2021-10-19 07:38:02',
                'updated_at' => '2021-10-19 07:38:02',
            ),
            67 => 
            array (
                'id' => 68,
                'messageable_type' => 'App\\Teacher',
                'messageable_id' => 3,
                'message' => 'Non totam aliquid animi atque.',
                'seen' => false,
                'created_at' => '2021-10-19 07:38:02',
                'updated_at' => '2021-10-19 07:38:02',
            ),
            68 => 
            array (
                'id' => 69,
                'messageable_type' => 'App\\Teacher',
                'messageable_id' => 3,
                'message' => 'Nemo eos ut porro.',
                'seen' => false,
                'created_at' => '2021-10-19 07:38:02',
                'updated_at' => '2021-10-19 07:38:02',
            ),
            69 => 
            array (
                'id' => 70,
                'messageable_type' => 'App\\Teacher',
                'messageable_id' => 3,
                'message' => 'Est voluptatem culpa eum dolorem.',
                'seen' => false,
                'created_at' => '2021-10-19 07:38:02',
                'updated_at' => '2021-10-19 07:38:02',
            ),
            70 => 
            array (
                'id' => 71,
                'messageable_type' => 'App\\Student',
                'messageable_id' => 3,
                'message' => 'Id rerum facilis voluptatibus perspiciatis quis dolorem exercitationem culpa.',
                'seen' => false,
                'created_at' => '2021-10-19 07:38:02',
                'updated_at' => '2021-10-19 07:38:02',
            ),
            71 => 
            array (
                'id' => 72,
                'messageable_type' => 'App\\Student',
                'messageable_id' => 3,
                'message' => 'Tempore facere sint veniam mollitia quae.',
                'seen' => false,
                'created_at' => '2021-10-19 07:38:02',
                'updated_at' => '2021-10-19 07:38:02',
            ),
            72 => 
            array (
                'id' => 73,
                'messageable_type' => 'App\\Student',
                'messageable_id' => 3,
                'message' => 'Fugiat quia quasi provident quia.',
                'seen' => false,
                'created_at' => '2021-10-19 07:38:02',
                'updated_at' => '2021-10-19 07:38:02',
            ),
            73 => 
            array (
                'id' => 74,
                'messageable_type' => 'App\\Student',
                'messageable_id' => 3,
                'message' => 'Accusantium maxime enim non qui architecto omnis.',
                'seen' => false,
                'created_at' => '2021-10-19 07:38:02',
                'updated_at' => '2021-10-19 07:38:02',
            ),
            74 => 
            array (
                'id' => 75,
                'messageable_type' => 'App\\Student',
                'messageable_id' => 3,
                'message' => 'Iusto fugiat id soluta libero.',
                'seen' => false,
                'created_at' => '2021-10-19 07:38:02',
                'updated_at' => '2021-10-19 07:38:02',
            ),
            75 => 
            array (
                'id' => 76,
                'messageable_type' => 'App\\Student',
                'messageable_id' => 3,
                'message' => 'In in quam impedit praesentium quidem minima officiis eum.',
                'seen' => false,
                'created_at' => '2021-10-19 07:38:02',
                'updated_at' => '2021-10-19 07:38:02',
            ),
            76 => 
            array (
                'id' => 77,
                'messageable_type' => 'App\\Student',
                'messageable_id' => 3,
                'message' => 'Harum inventore eum illum deleniti voluptates ut optio nesciunt.',
                'seen' => false,
                'created_at' => '2021-10-19 07:38:02',
                'updated_at' => '2021-10-19 07:38:02',
            ),
            77 => 
            array (
                'id' => 78,
                'messageable_type' => 'App\\Student',
                'messageable_id' => 3,
                'message' => 'Ipsa numquam deleniti vitae dolore sunt quam quia.',
                'seen' => false,
                'created_at' => '2021-10-19 07:38:02',
                'updated_at' => '2021-10-19 07:38:02',
            ),
            78 => 
            array (
                'id' => 79,
                'messageable_type' => 'App\\Student',
                'messageable_id' => 3,
                'message' => 'Ab est dignissimos cupiditate veniam sed.',
                'seen' => false,
                'created_at' => '2021-10-19 07:38:02',
                'updated_at' => '2021-10-19 07:38:02',
            ),
            79 => 
            array (
                'id' => 80,
                'messageable_type' => 'App\\Student',
                'messageable_id' => 3,
                'message' => 'Iusto ut omnis cumque eligendi corporis.',
                'seen' => false,
                'created_at' => '2021-10-19 07:38:02',
                'updated_at' => '2021-10-19 07:38:02',
            ),
            80 => 
            array (
                'id' => 81,
                'messageable_type' => 'App\\Teacher',
                'messageable_id' => 4,
                'message' => 'Quibusdam eaque commodi autem reprehenderit ipsa aut rerum.',
                'seen' => false,
                'created_at' => '2021-10-19 07:38:02',
                'updated_at' => '2021-10-19 07:38:02',
            ),
            81 => 
            array (
                'id' => 82,
                'messageable_type' => 'App\\Teacher',
                'messageable_id' => 4,
                'message' => 'Ipsam corrupti id corrupti aperiam non.',
                'seen' => false,
                'created_at' => '2021-10-19 07:38:02',
                'updated_at' => '2021-10-19 07:38:02',
            ),
            82 => 
            array (
                'id' => 83,
                'messageable_type' => 'App\\Teacher',
                'messageable_id' => 4,
                'message' => 'Et ea earum ea.',
                'seen' => false,
                'created_at' => '2021-10-19 07:38:02',
                'updated_at' => '2021-10-19 07:38:02',
            ),
            83 => 
            array (
                'id' => 84,
                'messageable_type' => 'App\\Teacher',
                'messageable_id' => 4,
                'message' => 'Ipsa quo quia quasi.',
                'seen' => false,
                'created_at' => '2021-10-19 07:38:02',
                'updated_at' => '2021-10-19 07:38:02',
            ),
            84 => 
            array (
                'id' => 85,
                'messageable_type' => 'App\\Teacher',
                'messageable_id' => 4,
                'message' => 'Ea nisi reiciendis aut ratione et quia.',
                'seen' => false,
                'created_at' => '2021-10-19 07:38:02',
                'updated_at' => '2021-10-19 07:38:02',
            ),
            85 => 
            array (
                'id' => 86,
                'messageable_type' => 'App\\Teacher',
                'messageable_id' => 4,
                'message' => 'Optio sunt veritatis veniam in sit assumenda.',
                'seen' => false,
                'created_at' => '2021-10-19 07:38:02',
                'updated_at' => '2021-10-19 07:38:02',
            ),
            86 => 
            array (
                'id' => 87,
                'messageable_type' => 'App\\Teacher',
                'messageable_id' => 4,
                'message' => 'Ducimus nulla eligendi sapiente.',
                'seen' => false,
                'created_at' => '2021-10-19 07:38:02',
                'updated_at' => '2021-10-19 07:38:02',
            ),
            87 => 
            array (
                'id' => 88,
                'messageable_type' => 'App\\Teacher',
                'messageable_id' => 4,
                'message' => 'Deserunt sunt quo sit.',
                'seen' => false,
                'created_at' => '2021-10-19 07:38:02',
                'updated_at' => '2021-10-19 07:38:02',
            ),
            88 => 
            array (
                'id' => 89,
                'messageable_type' => 'App\\Teacher',
                'messageable_id' => 4,
                'message' => 'Sed sint ipsam inventore est quod ullam.',
                'seen' => false,
                'created_at' => '2021-10-19 07:38:02',
                'updated_at' => '2021-10-19 07:38:02',
            ),
            89 => 
            array (
                'id' => 90,
                'messageable_type' => 'App\\Teacher',
                'messageable_id' => 4,
                'message' => 'A ducimus qui corporis aut.',
                'seen' => false,
                'created_at' => '2021-10-19 07:38:02',
                'updated_at' => '2021-10-19 07:38:02',
            ),
            90 => 
            array (
                'id' => 91,
                'messageable_type' => 'App\\Student',
                'messageable_id' => 4,
                'message' => 'Neque aut voluptas eius expedita nihil blanditiis.',
                'seen' => false,
                'created_at' => '2021-10-19 07:38:02',
                'updated_at' => '2021-10-19 07:38:02',
            ),
            91 => 
            array (
                'id' => 92,
                'messageable_type' => 'App\\Student',
                'messageable_id' => 4,
                'message' => 'Et dolore dolores amet voluptatem.',
                'seen' => false,
                'created_at' => '2021-10-19 07:38:02',
                'updated_at' => '2021-10-19 07:38:02',
            ),
            92 => 
            array (
                'id' => 93,
                'messageable_type' => 'App\\Student',
                'messageable_id' => 4,
                'message' => 'Qui fuga eveniet voluptates illo vel a in.',
                'seen' => false,
                'created_at' => '2021-10-19 07:38:02',
                'updated_at' => '2021-10-19 07:38:02',
            ),
            93 => 
            array (
                'id' => 94,
                'messageable_type' => 'App\\Student',
                'messageable_id' => 4,
                'message' => 'Temporibus rerum quia voluptatem dolor ut autem recusandae.',
                'seen' => false,
                'created_at' => '2021-10-19 07:38:02',
                'updated_at' => '2021-10-19 07:38:02',
            ),
            94 => 
            array (
                'id' => 95,
                'messageable_type' => 'App\\Student',
                'messageable_id' => 4,
                'message' => 'Molestiae nulla pariatur nostrum.',
                'seen' => false,
                'created_at' => '2021-10-19 07:38:02',
                'updated_at' => '2021-10-19 07:38:02',
            ),
            95 => 
            array (
                'id' => 96,
                'messageable_type' => 'App\\Student',
                'messageable_id' => 4,
                'message' => 'Quo mollitia saepe id.',
                'seen' => false,
                'created_at' => '2021-10-19 07:38:02',
                'updated_at' => '2021-10-19 07:38:02',
            ),
            96 => 
            array (
                'id' => 97,
                'messageable_type' => 'App\\Student',
                'messageable_id' => 4,
                'message' => 'Eum aut quia quia eum eaque quia.',
                'seen' => false,
                'created_at' => '2021-10-19 07:38:02',
                'updated_at' => '2021-10-19 07:38:02',
            ),
            97 => 
            array (
                'id' => 98,
                'messageable_type' => 'App\\Student',
                'messageable_id' => 4,
                'message' => 'Quisquam ipsum odit autem enim.',
                'seen' => false,
                'created_at' => '2021-10-19 07:38:02',
                'updated_at' => '2021-10-19 07:38:02',
            ),
            98 => 
            array (
                'id' => 99,
                'messageable_type' => 'App\\Student',
                'messageable_id' => 4,
                'message' => 'Commodi rerum sit ut a eaque reiciendis consequatur corrupti.',
                'seen' => false,
                'created_at' => '2021-10-19 07:38:02',
                'updated_at' => '2021-10-19 07:38:02',
            ),
            99 => 
            array (
                'id' => 100,
                'messageable_type' => 'App\\Student',
                'messageable_id' => 4,
                'message' => 'Ut vel nemo earum.',
                'seen' => false,
                'created_at' => '2021-10-19 07:38:02',
                'updated_at' => '2021-10-19 07:38:02',
            ),
            100 => 
            array (
                'id' => 101,
                'messageable_type' => 'App\\Teacher',
                'messageable_id' => 5,
                'message' => 'Ex quis est illum reiciendis repellendus qui officiis soluta.',
                'seen' => false,
                'created_at' => '2021-10-19 07:38:02',
                'updated_at' => '2021-10-19 07:38:02',
            ),
            101 => 
            array (
                'id' => 102,
                'messageable_type' => 'App\\Teacher',
                'messageable_id' => 5,
                'message' => 'Corporis dolorem consequuntur sint placeat.',
                'seen' => false,
                'created_at' => '2021-10-19 07:38:02',
                'updated_at' => '2021-10-19 07:38:02',
            ),
            102 => 
            array (
                'id' => 103,
                'messageable_type' => 'App\\Teacher',
                'messageable_id' => 5,
                'message' => 'Ea reiciendis eum porro sunt sed neque rerum.',
                'seen' => false,
                'created_at' => '2021-10-19 07:38:02',
                'updated_at' => '2021-10-19 07:38:02',
            ),
            103 => 
            array (
                'id' => 104,
                'messageable_type' => 'App\\Teacher',
                'messageable_id' => 5,
                'message' => 'Non et qui magni eos fuga.',
                'seen' => false,
                'created_at' => '2021-10-19 07:38:02',
                'updated_at' => '2021-10-19 07:38:02',
            ),
            104 => 
            array (
                'id' => 105,
                'messageable_type' => 'App\\Teacher',
                'messageable_id' => 5,
                'message' => 'Quis autem voluptatem repellat.',
                'seen' => false,
                'created_at' => '2021-10-19 07:38:02',
                'updated_at' => '2021-10-19 07:38:02',
            ),
            105 => 
            array (
                'id' => 106,
                'messageable_type' => 'App\\Teacher',
                'messageable_id' => 5,
                'message' => 'Enim eligendi est quam ut temporibus.',
                'seen' => false,
                'created_at' => '2021-10-19 07:38:02',
                'updated_at' => '2021-10-19 07:38:02',
            ),
            106 => 
            array (
                'id' => 107,
                'messageable_type' => 'App\\Teacher',
                'messageable_id' => 5,
                'message' => 'Recusandae voluptatem itaque minima nobis illum iste.',
                'seen' => false,
                'created_at' => '2021-10-19 07:38:02',
                'updated_at' => '2021-10-19 07:38:02',
            ),
            107 => 
            array (
                'id' => 108,
                'messageable_type' => 'App\\Teacher',
                'messageable_id' => 5,
                'message' => 'Ad aspernatur unde sequi occaecati.',
                'seen' => false,
                'created_at' => '2021-10-19 07:38:02',
                'updated_at' => '2021-10-19 07:38:02',
            ),
            108 => 
            array (
                'id' => 109,
                'messageable_type' => 'App\\Teacher',
                'messageable_id' => 5,
                'message' => 'Ea nam sunt veniam doloribus placeat nisi at dolores.',
                'seen' => false,
                'created_at' => '2021-10-19 07:38:02',
                'updated_at' => '2021-10-19 07:38:02',
            ),
            109 => 
            array (
                'id' => 110,
                'messageable_type' => 'App\\Teacher',
                'messageable_id' => 5,
                'message' => 'Aut incidunt magni sequi repudiandae.',
                'seen' => false,
                'created_at' => '2021-10-19 07:38:02',
                'updated_at' => '2021-10-19 07:38:02',
            ),
            110 => 
            array (
                'id' => 111,
                'messageable_type' => 'App\\Student',
                'messageable_id' => 5,
                'message' => 'Qui est qui voluptas cupiditate qui.',
                'seen' => false,
                'created_at' => '2021-10-19 07:38:02',
                'updated_at' => '2021-10-19 07:38:02',
            ),
            111 => 
            array (
                'id' => 112,
                'messageable_type' => 'App\\Student',
                'messageable_id' => 5,
                'message' => 'A id cupiditate quisquam quas minus itaque harum.',
                'seen' => false,
                'created_at' => '2021-10-19 07:38:02',
                'updated_at' => '2021-10-19 07:38:02',
            ),
            112 => 
            array (
                'id' => 113,
                'messageable_type' => 'App\\Student',
                'messageable_id' => 5,
                'message' => 'Rerum quos accusantium ab possimus eligendi vel ut.',
                'seen' => false,
                'created_at' => '2021-10-19 07:38:02',
                'updated_at' => '2021-10-19 07:38:02',
            ),
            113 => 
            array (
                'id' => 114,
                'messageable_type' => 'App\\Student',
                'messageable_id' => 5,
                'message' => 'Optio porro quos ratione neque debitis autem nulla.',
                'seen' => false,
                'created_at' => '2021-10-19 07:38:02',
                'updated_at' => '2021-10-19 07:38:02',
            ),
            114 => 
            array (
                'id' => 115,
                'messageable_type' => 'App\\Student',
                'messageable_id' => 5,
                'message' => 'Dolore labore dolores quod non et exercitationem et est.',
                'seen' => false,
                'created_at' => '2021-10-19 07:38:02',
                'updated_at' => '2021-10-19 07:38:02',
            ),
            115 => 
            array (
                'id' => 116,
                'messageable_type' => 'App\\Student',
                'messageable_id' => 5,
                'message' => 'Qui sed ea voluptas praesentium.',
                'seen' => false,
                'created_at' => '2021-10-19 07:38:02',
                'updated_at' => '2021-10-19 07:38:02',
            ),
            116 => 
            array (
                'id' => 117,
                'messageable_type' => 'App\\Student',
                'messageable_id' => 5,
                'message' => 'Unde quia repudiandae mollitia dicta vel deleniti.',
                'seen' => false,
                'created_at' => '2021-10-19 07:38:02',
                'updated_at' => '2021-10-19 07:38:02',
            ),
            117 => 
            array (
                'id' => 118,
                'messageable_type' => 'App\\Student',
                'messageable_id' => 5,
                'message' => 'Ipsam atque aspernatur perferendis omnis eius ut laudantium et.',
                'seen' => false,
                'created_at' => '2021-10-19 07:38:02',
                'updated_at' => '2021-10-19 07:38:02',
            ),
            118 => 
            array (
                'id' => 119,
                'messageable_type' => 'App\\Student',
                'messageable_id' => 5,
                'message' => 'Voluptatibus minus similique qui id.',
                'seen' => false,
                'created_at' => '2021-10-19 07:38:02',
                'updated_at' => '2021-10-19 07:38:02',
            ),
            119 => 
            array (
                'id' => 120,
                'messageable_type' => 'App\\Student',
                'messageable_id' => 5,
                'message' => 'Error mollitia praesentium est.',
                'seen' => false,
                'created_at' => '2021-10-19 07:38:02',
                'updated_at' => '2021-10-19 07:38:02',
            ),
            120 => 
            array (
                'id' => 121,
                'messageable_type' => 'App\\Teacher',
                'messageable_id' => 6,
                'message' => 'Eos voluptatem laborum sequi aliquid error.',
                'seen' => false,
                'created_at' => '2021-10-19 07:38:02',
                'updated_at' => '2021-10-19 07:38:02',
            ),
            121 => 
            array (
                'id' => 122,
                'messageable_type' => 'App\\Teacher',
                'messageable_id' => 6,
                'message' => 'Cupiditate fugit vitae fugit vel nostrum ad quidem.',
                'seen' => false,
                'created_at' => '2021-10-19 07:38:02',
                'updated_at' => '2021-10-19 07:38:02',
            ),
            122 => 
            array (
                'id' => 123,
                'messageable_type' => 'App\\Teacher',
                'messageable_id' => 6,
                'message' => 'Quas architecto veritatis id voluptatem fuga totam praesentium ipsa.',
                'seen' => false,
                'created_at' => '2021-10-19 07:38:02',
                'updated_at' => '2021-10-19 07:38:02',
            ),
            123 => 
            array (
                'id' => 124,
                'messageable_type' => 'App\\Teacher',
                'messageable_id' => 6,
                'message' => 'Sint sed sed sed reprehenderit corrupti facere.',
                'seen' => false,
                'created_at' => '2021-10-19 07:38:02',
                'updated_at' => '2021-10-19 07:38:02',
            ),
            124 => 
            array (
                'id' => 125,
                'messageable_type' => 'App\\Teacher',
                'messageable_id' => 6,
                'message' => 'Nobis hic eum animi rerum voluptatem.',
                'seen' => false,
                'created_at' => '2021-10-19 07:38:02',
                'updated_at' => '2021-10-19 07:38:02',
            ),
            125 => 
            array (
                'id' => 126,
                'messageable_type' => 'App\\Teacher',
                'messageable_id' => 6,
                'message' => 'Omnis aut doloremque nesciunt dolore.',
                'seen' => false,
                'created_at' => '2021-10-19 07:38:02',
                'updated_at' => '2021-10-19 07:38:02',
            ),
            126 => 
            array (
                'id' => 127,
                'messageable_type' => 'App\\Teacher',
                'messageable_id' => 6,
                'message' => 'Voluptas error voluptas voluptates a nesciunt neque et.',
                'seen' => false,
                'created_at' => '2021-10-19 07:38:02',
                'updated_at' => '2021-10-19 07:38:02',
            ),
            127 => 
            array (
                'id' => 128,
                'messageable_type' => 'App\\Teacher',
                'messageable_id' => 6,
                'message' => 'Quasi ducimus ipsam autem earum.',
                'seen' => false,
                'created_at' => '2021-10-19 07:38:02',
                'updated_at' => '2021-10-19 07:38:02',
            ),
            128 => 
            array (
                'id' => 129,
                'messageable_type' => 'App\\Teacher',
                'messageable_id' => 6,
                'message' => 'Possimus rerum doloremque magni sit perspiciatis suscipit.',
                'seen' => false,
                'created_at' => '2021-10-19 07:38:02',
                'updated_at' => '2021-10-19 07:38:02',
            ),
            129 => 
            array (
                'id' => 130,
                'messageable_type' => 'App\\Teacher',
                'messageable_id' => 6,
                'message' => 'Et recusandae unde optio facilis quia.',
                'seen' => false,
                'created_at' => '2021-10-19 07:38:02',
                'updated_at' => '2021-10-19 07:38:02',
            ),
            130 => 
            array (
                'id' => 131,
                'messageable_type' => 'App\\Student',
                'messageable_id' => 6,
                'message' => 'Et repellat fugit id ducimus nisi consequatur cupiditate ex.',
                'seen' => false,
                'created_at' => '2021-10-19 07:38:02',
                'updated_at' => '2021-10-19 07:38:02',
            ),
            131 => 
            array (
                'id' => 132,
                'messageable_type' => 'App\\Student',
                'messageable_id' => 6,
                'message' => 'At molestias reiciendis repudiandae similique magnam pariatur alias.',
                'seen' => false,
                'created_at' => '2021-10-19 07:38:02',
                'updated_at' => '2021-10-19 07:38:02',
            ),
            132 => 
            array (
                'id' => 133,
                'messageable_type' => 'App\\Student',
                'messageable_id' => 6,
                'message' => 'Dolores nemo magnam nesciunt harum fugit commodi nihil animi.',
                'seen' => false,
                'created_at' => '2021-10-19 07:38:02',
                'updated_at' => '2021-10-19 07:38:02',
            ),
            133 => 
            array (
                'id' => 134,
                'messageable_type' => 'App\\Student',
                'messageable_id' => 6,
                'message' => 'Incidunt earum officia molestiae laboriosam.',
                'seen' => false,
                'created_at' => '2021-10-19 07:38:02',
                'updated_at' => '2021-10-19 07:38:02',
            ),
            134 => 
            array (
                'id' => 135,
                'messageable_type' => 'App\\Student',
                'messageable_id' => 6,
                'message' => 'Officia minus ad fugiat unde veritatis quis.',
                'seen' => false,
                'created_at' => '2021-10-19 07:38:02',
                'updated_at' => '2021-10-19 07:38:02',
            ),
            135 => 
            array (
                'id' => 136,
                'messageable_type' => 'App\\Student',
                'messageable_id' => 6,
                'message' => 'Aut omnis voluptatem explicabo nihil.',
                'seen' => false,
                'created_at' => '2021-10-19 07:38:02',
                'updated_at' => '2021-10-19 07:38:02',
            ),
            136 => 
            array (
                'id' => 137,
                'messageable_type' => 'App\\Student',
                'messageable_id' => 6,
                'message' => 'Quidem et eum provident aut ad voluptas voluptas.',
                'seen' => false,
                'created_at' => '2021-10-19 07:38:02',
                'updated_at' => '2021-10-19 07:38:02',
            ),
            137 => 
            array (
                'id' => 138,
                'messageable_type' => 'App\\Student',
                'messageable_id' => 6,
                'message' => 'Et nulla ut sapiente excepturi doloribus.',
                'seen' => false,
                'created_at' => '2021-10-19 07:38:02',
                'updated_at' => '2021-10-19 07:38:02',
            ),
            138 => 
            array (
                'id' => 139,
                'messageable_type' => 'App\\Student',
                'messageable_id' => 6,
                'message' => 'Suscipit illum ex nihil eius facilis aut.',
                'seen' => false,
                'created_at' => '2021-10-19 07:38:02',
                'updated_at' => '2021-10-19 07:38:02',
            ),
            139 => 
            array (
                'id' => 140,
                'messageable_type' => 'App\\Student',
                'messageable_id' => 6,
                'message' => 'Sit non quam ea ex sit.',
                'seen' => false,
                'created_at' => '2021-10-19 07:38:02',
                'updated_at' => '2021-10-19 07:38:02',
            ),
            140 => 
            array (
                'id' => 141,
                'messageable_type' => 'App\\Teacher',
                'messageable_id' => 7,
                'message' => 'Ut vero ut numquam sequi et.',
                'seen' => false,
                'created_at' => '2021-10-19 07:38:02',
                'updated_at' => '2021-10-19 07:38:02',
            ),
            141 => 
            array (
                'id' => 142,
                'messageable_type' => 'App\\Teacher',
                'messageable_id' => 7,
                'message' => 'Adipisci et repellendus consequuntur rerum ad quia in asperiores.',
                'seen' => false,
                'created_at' => '2021-10-19 07:38:02',
                'updated_at' => '2021-10-19 07:38:02',
            ),
            142 => 
            array (
                'id' => 143,
                'messageable_type' => 'App\\Teacher',
                'messageable_id' => 7,
                'message' => 'Et animi possimus officia nisi.',
                'seen' => false,
                'created_at' => '2021-10-19 07:38:02',
                'updated_at' => '2021-10-19 07:38:02',
            ),
            143 => 
            array (
                'id' => 144,
                'messageable_type' => 'App\\Teacher',
                'messageable_id' => 7,
                'message' => 'Aut ipsa aperiam est doloribus id.',
                'seen' => false,
                'created_at' => '2021-10-19 07:38:02',
                'updated_at' => '2021-10-19 07:38:02',
            ),
            144 => 
            array (
                'id' => 145,
                'messageable_type' => 'App\\Teacher',
                'messageable_id' => 7,
                'message' => 'Accusantium illum officia exercitationem rerum accusamus.',
                'seen' => false,
                'created_at' => '2021-10-19 07:38:02',
                'updated_at' => '2021-10-19 07:38:02',
            ),
            145 => 
            array (
                'id' => 146,
                'messageable_type' => 'App\\Teacher',
                'messageable_id' => 7,
                'message' => 'In totam eligendi ut nisi.',
                'seen' => false,
                'created_at' => '2021-10-19 07:38:02',
                'updated_at' => '2021-10-19 07:38:02',
            ),
            146 => 
            array (
                'id' => 147,
                'messageable_type' => 'App\\Teacher',
                'messageable_id' => 7,
                'message' => 'Quidem enim iste est veniam ad ipsam.',
                'seen' => false,
                'created_at' => '2021-10-19 07:38:02',
                'updated_at' => '2021-10-19 07:38:02',
            ),
            147 => 
            array (
                'id' => 148,
                'messageable_type' => 'App\\Teacher',
                'messageable_id' => 7,
                'message' => 'Sunt consequatur debitis rerum recusandae officiis nobis vel.',
                'seen' => false,
                'created_at' => '2021-10-19 07:38:02',
                'updated_at' => '2021-10-19 07:38:02',
            ),
            148 => 
            array (
                'id' => 149,
                'messageable_type' => 'App\\Teacher',
                'messageable_id' => 7,
                'message' => 'Modi libero quod ipsa modi dolores dolor quam id.',
                'seen' => false,
                'created_at' => '2021-10-19 07:38:02',
                'updated_at' => '2021-10-19 07:38:02',
            ),
            149 => 
            array (
                'id' => 150,
                'messageable_type' => 'App\\Teacher',
                'messageable_id' => 7,
                'message' => 'Ut expedita repellendus ut minus.',
                'seen' => false,
                'created_at' => '2021-10-19 07:38:02',
                'updated_at' => '2021-10-19 07:38:02',
            ),
            150 => 
            array (
                'id' => 151,
                'messageable_type' => 'App\\Student',
                'messageable_id' => 7,
                'message' => 'Eum neque asperiores maxime aliquid quidem odio minus dolor.',
                'seen' => false,
                'created_at' => '2021-10-19 07:38:02',
                'updated_at' => '2021-10-19 07:38:02',
            ),
            151 => 
            array (
                'id' => 152,
                'messageable_type' => 'App\\Student',
                'messageable_id' => 7,
                'message' => 'Possimus nisi magni qui sunt dicta praesentium illum.',
                'seen' => false,
                'created_at' => '2021-10-19 07:38:02',
                'updated_at' => '2021-10-19 07:38:02',
            ),
            152 => 
            array (
                'id' => 153,
                'messageable_type' => 'App\\Student',
                'messageable_id' => 7,
                'message' => 'In fugit ipsum suscipit.',
                'seen' => false,
                'created_at' => '2021-10-19 07:38:02',
                'updated_at' => '2021-10-19 07:38:02',
            ),
            153 => 
            array (
                'id' => 154,
                'messageable_type' => 'App\\Student',
                'messageable_id' => 7,
                'message' => 'Cumque culpa quidem officia iusto quia.',
                'seen' => false,
                'created_at' => '2021-10-19 07:38:02',
                'updated_at' => '2021-10-19 07:38:02',
            ),
            154 => 
            array (
                'id' => 155,
                'messageable_type' => 'App\\Student',
                'messageable_id' => 7,
                'message' => 'Architecto corporis cum est architecto sint qui perferendis.',
                'seen' => false,
                'created_at' => '2021-10-19 07:38:02',
                'updated_at' => '2021-10-19 07:38:02',
            ),
            155 => 
            array (
                'id' => 156,
                'messageable_type' => 'App\\Student',
                'messageable_id' => 7,
                'message' => 'Ut consequatur voluptatum aliquid nam dolore.',
                'seen' => false,
                'created_at' => '2021-10-19 07:38:02',
                'updated_at' => '2021-10-19 07:38:02',
            ),
            156 => 
            array (
                'id' => 157,
                'messageable_type' => 'App\\Student',
                'messageable_id' => 7,
                'message' => 'Consequatur assumenda est molestiae quaerat ut eum doloribus consequuntur.',
                'seen' => false,
                'created_at' => '2021-10-19 07:38:02',
                'updated_at' => '2021-10-19 07:38:02',
            ),
            157 => 
            array (
                'id' => 158,
                'messageable_type' => 'App\\Student',
                'messageable_id' => 7,
                'message' => 'Ut et quis debitis aut velit rerum.',
                'seen' => false,
                'created_at' => '2021-10-19 07:38:02',
                'updated_at' => '2021-10-19 07:38:02',
            ),
            158 => 
            array (
                'id' => 159,
                'messageable_type' => 'App\\Student',
                'messageable_id' => 7,
                'message' => 'Sit minima laborum impedit ut possimus consectetur natus.',
                'seen' => false,
                'created_at' => '2021-10-19 07:38:02',
                'updated_at' => '2021-10-19 07:38:02',
            ),
            159 => 
            array (
                'id' => 160,
                'messageable_type' => 'App\\Student',
                'messageable_id' => 7,
                'message' => 'Eligendi blanditiis corporis dolores similique pariatur reprehenderit.',
                'seen' => false,
                'created_at' => '2021-10-19 07:38:02',
                'updated_at' => '2021-10-19 07:38:02',
            ),
            160 => 
            array (
                'id' => 161,
                'messageable_type' => 'App\\Teacher',
                'messageable_id' => 8,
                'message' => 'Consequatur in odit delectus et excepturi.',
                'seen' => false,
                'created_at' => '2021-10-19 07:38:02',
                'updated_at' => '2021-10-19 07:38:02',
            ),
            161 => 
            array (
                'id' => 162,
                'messageable_type' => 'App\\Teacher',
                'messageable_id' => 8,
                'message' => 'Doloremque aut nisi quae est voluptas perferendis quibusdam.',
                'seen' => false,
                'created_at' => '2021-10-19 07:38:02',
                'updated_at' => '2021-10-19 07:38:02',
            ),
            162 => 
            array (
                'id' => 163,
                'messageable_type' => 'App\\Teacher',
                'messageable_id' => 8,
                'message' => 'Quo quaerat harum qui dolores beatae.',
                'seen' => false,
                'created_at' => '2021-10-19 07:38:02',
                'updated_at' => '2021-10-19 07:38:02',
            ),
            163 => 
            array (
                'id' => 164,
                'messageable_type' => 'App\\Teacher',
                'messageable_id' => 8,
                'message' => 'Eum qui inventore voluptas unde ipsum est iusto iure.',
                'seen' => false,
                'created_at' => '2021-10-19 07:38:02',
                'updated_at' => '2021-10-19 07:38:02',
            ),
            164 => 
            array (
                'id' => 165,
                'messageable_type' => 'App\\Teacher',
                'messageable_id' => 8,
                'message' => 'Et doloremque expedita expedita quidem ut beatae fugiat eligendi.',
                'seen' => false,
                'created_at' => '2021-10-19 07:38:02',
                'updated_at' => '2021-10-19 07:38:02',
            ),
            165 => 
            array (
                'id' => 166,
                'messageable_type' => 'App\\Teacher',
                'messageable_id' => 8,
                'message' => 'Architecto voluptatem temporibus sunt et totam.',
                'seen' => false,
                'created_at' => '2021-10-19 07:38:02',
                'updated_at' => '2021-10-19 07:38:02',
            ),
            166 => 
            array (
                'id' => 167,
                'messageable_type' => 'App\\Teacher',
                'messageable_id' => 8,
                'message' => 'Ipsam corporis modi placeat aspernatur ducimus esse.',
                'seen' => false,
                'created_at' => '2021-10-19 07:38:02',
                'updated_at' => '2021-10-19 07:38:02',
            ),
            167 => 
            array (
                'id' => 168,
                'messageable_type' => 'App\\Teacher',
                'messageable_id' => 8,
                'message' => 'Repellat similique et sunt nihil eum ut.',
                'seen' => false,
                'created_at' => '2021-10-19 07:38:02',
                'updated_at' => '2021-10-19 07:38:02',
            ),
            168 => 
            array (
                'id' => 169,
                'messageable_type' => 'App\\Teacher',
                'messageable_id' => 8,
                'message' => 'Vel est et eligendi porro dolores reiciendis.',
                'seen' => false,
                'created_at' => '2021-10-19 07:38:02',
                'updated_at' => '2021-10-19 07:38:02',
            ),
            169 => 
            array (
                'id' => 170,
                'messageable_type' => 'App\\Teacher',
                'messageable_id' => 8,
                'message' => 'Blanditiis in nobis aut expedita omnis et laudantium.',
                'seen' => false,
                'created_at' => '2021-10-19 07:38:02',
                'updated_at' => '2021-10-19 07:38:02',
            ),
            170 => 
            array (
                'id' => 171,
                'messageable_type' => 'App\\Student',
                'messageable_id' => 8,
                'message' => 'Qui est pariatur qui est.',
                'seen' => false,
                'created_at' => '2021-10-19 07:38:02',
                'updated_at' => '2021-10-19 07:38:02',
            ),
            171 => 
            array (
                'id' => 172,
                'messageable_type' => 'App\\Student',
                'messageable_id' => 8,
                'message' => 'Odio et aspernatur fugit quo.',
                'seen' => false,
                'created_at' => '2021-10-19 07:38:02',
                'updated_at' => '2021-10-19 07:38:02',
            ),
            172 => 
            array (
                'id' => 173,
                'messageable_type' => 'App\\Student',
                'messageable_id' => 8,
                'message' => 'Id voluptatem ut sunt sapiente molestias illo quibusdam.',
                'seen' => false,
                'created_at' => '2021-10-19 07:38:02',
                'updated_at' => '2021-10-19 07:38:02',
            ),
            173 => 
            array (
                'id' => 174,
                'messageable_type' => 'App\\Student',
                'messageable_id' => 8,
                'message' => 'Quia ea itaque possimus commodi veritatis officia molestiae.',
                'seen' => false,
                'created_at' => '2021-10-19 07:38:02',
                'updated_at' => '2021-10-19 07:38:02',
            ),
            174 => 
            array (
                'id' => 175,
                'messageable_type' => 'App\\Student',
                'messageable_id' => 8,
                'message' => 'Tenetur dolorem qui deserunt suscipit nam voluptas quis accusamus.',
                'seen' => false,
                'created_at' => '2021-10-19 07:38:02',
                'updated_at' => '2021-10-19 07:38:02',
            ),
            175 => 
            array (
                'id' => 176,
                'messageable_type' => 'App\\Student',
                'messageable_id' => 8,
                'message' => 'Quae dolorem ullam earum numquam quisquam placeat quidem.',
                'seen' => false,
                'created_at' => '2021-10-19 07:38:02',
                'updated_at' => '2021-10-19 07:38:02',
            ),
            176 => 
            array (
                'id' => 177,
                'messageable_type' => 'App\\Student',
                'messageable_id' => 8,
                'message' => 'Est quos quo reprehenderit ducimus aut.',
                'seen' => false,
                'created_at' => '2021-10-19 07:38:02',
                'updated_at' => '2021-10-19 07:38:02',
            ),
            177 => 
            array (
                'id' => 178,
                'messageable_type' => 'App\\Student',
                'messageable_id' => 8,
                'message' => 'Assumenda qui repellendus qui dolores iure eligendi.',
                'seen' => false,
                'created_at' => '2021-10-19 07:38:02',
                'updated_at' => '2021-10-19 07:38:02',
            ),
            178 => 
            array (
                'id' => 179,
                'messageable_type' => 'App\\Student',
                'messageable_id' => 8,
                'message' => 'Voluptatibus reiciendis voluptates dolores at qui consectetur atque.',
                'seen' => false,
                'created_at' => '2021-10-19 07:38:02',
                'updated_at' => '2021-10-19 07:38:02',
            ),
            179 => 
            array (
                'id' => 180,
                'messageable_type' => 'App\\Student',
                'messageable_id' => 8,
                'message' => 'Voluptatem sapiente quia dolorem incidunt.',
                'seen' => false,
                'created_at' => '2021-10-19 07:38:02',
                'updated_at' => '2021-10-19 07:38:02',
            ),
            180 => 
            array (
                'id' => 181,
                'messageable_type' => 'App\\Teacher',
                'messageable_id' => 9,
                'message' => 'Aut voluptas suscipit cumque accusamus.',
                'seen' => false,
                'created_at' => '2021-10-19 07:38:02',
                'updated_at' => '2021-10-19 07:38:02',
            ),
            181 => 
            array (
                'id' => 182,
                'messageable_type' => 'App\\Teacher',
                'messageable_id' => 9,
                'message' => 'Officia laborum earum velit quod illo.',
                'seen' => false,
                'created_at' => '2021-10-19 07:38:02',
                'updated_at' => '2021-10-19 07:38:02',
            ),
            182 => 
            array (
                'id' => 183,
                'messageable_type' => 'App\\Teacher',
                'messageable_id' => 9,
                'message' => 'Aliquam consequatur iste omnis modi officiis sed.',
                'seen' => false,
                'created_at' => '2021-10-19 07:38:02',
                'updated_at' => '2021-10-19 07:38:02',
            ),
            183 => 
            array (
                'id' => 184,
                'messageable_type' => 'App\\Teacher',
                'messageable_id' => 9,
                'message' => 'Impedit deleniti id maiores eaque doloremque voluptates.',
                'seen' => false,
                'created_at' => '2021-10-19 07:38:02',
                'updated_at' => '2021-10-19 07:38:02',
            ),
            184 => 
            array (
                'id' => 185,
                'messageable_type' => 'App\\Teacher',
                'messageable_id' => 9,
                'message' => 'Assumenda nihil ut iste amet in nulla.',
                'seen' => false,
                'created_at' => '2021-10-19 07:38:02',
                'updated_at' => '2021-10-19 07:38:02',
            ),
            185 => 
            array (
                'id' => 186,
                'messageable_type' => 'App\\Teacher',
                'messageable_id' => 9,
                'message' => 'Corrupti ipsa et illum voluptates sequi non eius.',
                'seen' => false,
                'created_at' => '2021-10-19 07:38:02',
                'updated_at' => '2021-10-19 07:38:02',
            ),
            186 => 
            array (
                'id' => 187,
                'messageable_type' => 'App\\Teacher',
                'messageable_id' => 9,
                'message' => 'Nostrum sapiente sapiente sapiente voluptatem qui doloribus.',
                'seen' => false,
                'created_at' => '2021-10-19 07:38:02',
                'updated_at' => '2021-10-19 07:38:02',
            ),
            187 => 
            array (
                'id' => 188,
                'messageable_type' => 'App\\Teacher',
                'messageable_id' => 9,
                'message' => 'At consectetur consequatur voluptate.',
                'seen' => false,
                'created_at' => '2021-10-19 07:38:02',
                'updated_at' => '2021-10-19 07:38:02',
            ),
            188 => 
            array (
                'id' => 189,
                'messageable_type' => 'App\\Teacher',
                'messageable_id' => 9,
                'message' => 'Sequi dolor veniam qui eum.',
                'seen' => false,
                'created_at' => '2021-10-19 07:38:02',
                'updated_at' => '2021-10-19 07:38:02',
            ),
            189 => 
            array (
                'id' => 190,
                'messageable_type' => 'App\\Teacher',
                'messageable_id' => 9,
                'message' => 'Commodi et sed dolorum molestiae id at dolore.',
                'seen' => false,
                'created_at' => '2021-10-19 07:38:02',
                'updated_at' => '2021-10-19 07:38:02',
            ),
            190 => 
            array (
                'id' => 191,
                'messageable_type' => 'App\\Student',
                'messageable_id' => 9,
                'message' => 'Necessitatibus tempore pariatur hic quo rerum quibusdam.',
                'seen' => false,
                'created_at' => '2021-10-19 07:38:02',
                'updated_at' => '2021-10-19 07:38:02',
            ),
            191 => 
            array (
                'id' => 192,
                'messageable_type' => 'App\\Student',
                'messageable_id' => 9,
                'message' => 'Et enim ducimus voluptatum nesciunt nostrum nisi veniam beatae.',
                'seen' => false,
                'created_at' => '2021-10-19 07:38:02',
                'updated_at' => '2021-10-19 07:38:02',
            ),
            192 => 
            array (
                'id' => 193,
                'messageable_type' => 'App\\Student',
                'messageable_id' => 9,
                'message' => 'Cumque necessitatibus perferendis rerum non officia harum.',
                'seen' => false,
                'created_at' => '2021-10-19 07:38:02',
                'updated_at' => '2021-10-19 07:38:02',
            ),
            193 => 
            array (
                'id' => 194,
                'messageable_type' => 'App\\Student',
                'messageable_id' => 9,
                'message' => 'Inventore ut eveniet iure praesentium.',
                'seen' => false,
                'created_at' => '2021-10-19 07:38:02',
                'updated_at' => '2021-10-19 07:38:02',
            ),
            194 => 
            array (
                'id' => 195,
                'messageable_type' => 'App\\Student',
                'messageable_id' => 9,
                'message' => 'Et molestiae quidem inventore.',
                'seen' => false,
                'created_at' => '2021-10-19 07:38:02',
                'updated_at' => '2021-10-19 07:38:02',
            ),
            195 => 
            array (
                'id' => 196,
                'messageable_type' => 'App\\Student',
                'messageable_id' => 9,
                'message' => 'Temporibus culpa eum nesciunt qui asperiores fuga.',
                'seen' => false,
                'created_at' => '2021-10-19 07:38:02',
                'updated_at' => '2021-10-19 07:38:02',
            ),
            196 => 
            array (
                'id' => 197,
                'messageable_type' => 'App\\Student',
                'messageable_id' => 9,
                'message' => 'Autem cumque omnis consequatur odit adipisci expedita recusandae.',
                'seen' => false,
                'created_at' => '2021-10-19 07:38:02',
                'updated_at' => '2021-10-19 07:38:02',
            ),
            197 => 
            array (
                'id' => 198,
                'messageable_type' => 'App\\Student',
                'messageable_id' => 9,
                'message' => 'Vitae vel et culpa nostrum in et nihil.',
                'seen' => false,
                'created_at' => '2021-10-19 07:38:02',
                'updated_at' => '2021-10-19 07:38:02',
            ),
            198 => 
            array (
                'id' => 199,
                'messageable_type' => 'App\\Student',
                'messageable_id' => 9,
                'message' => 'Est temporibus totam qui qui est.',
                'seen' => false,
                'created_at' => '2021-10-19 07:38:02',
                'updated_at' => '2021-10-19 07:38:02',
            ),
            199 => 
            array (
                'id' => 200,
                'messageable_type' => 'App\\Student',
                'messageable_id' => 9,
                'message' => 'Molestiae accusantium deleniti deleniti reprehenderit.',
                'seen' => false,
                'created_at' => '2021-10-19 07:38:02',
                'updated_at' => '2021-10-19 07:38:02',
            ),
            200 => 
            array (
                'id' => 201,
                'messageable_type' => 'App\\Teacher',
                'messageable_id' => 10,
                'message' => 'Quia sed voluptas repudiandae et animi.',
                'seen' => false,
                'created_at' => '2021-10-19 07:38:02',
                'updated_at' => '2021-10-19 07:38:02',
            ),
            201 => 
            array (
                'id' => 202,
                'messageable_type' => 'App\\Teacher',
                'messageable_id' => 10,
                'message' => 'Distinctio sit distinctio praesentium doloribus quo molestiae.',
                'seen' => false,
                'created_at' => '2021-10-19 07:38:02',
                'updated_at' => '2021-10-19 07:38:02',
            ),
            202 => 
            array (
                'id' => 203,
                'messageable_type' => 'App\\Teacher',
                'messageable_id' => 10,
                'message' => 'Eius perferendis id ut delectus.',
                'seen' => false,
                'created_at' => '2021-10-19 07:38:02',
                'updated_at' => '2021-10-19 07:38:02',
            ),
            203 => 
            array (
                'id' => 204,
                'messageable_type' => 'App\\Teacher',
                'messageable_id' => 10,
                'message' => 'Non non qui ut et et qui.',
                'seen' => false,
                'created_at' => '2021-10-19 07:38:02',
                'updated_at' => '2021-10-19 07:38:02',
            ),
            204 => 
            array (
                'id' => 205,
                'messageable_type' => 'App\\Teacher',
                'messageable_id' => 10,
                'message' => 'Fuga enim ipsam possimus quisquam.',
                'seen' => false,
                'created_at' => '2021-10-19 07:38:02',
                'updated_at' => '2021-10-19 07:38:02',
            ),
            205 => 
            array (
                'id' => 206,
                'messageable_type' => 'App\\Teacher',
                'messageable_id' => 10,
                'message' => 'Eligendi cupiditate provident et dolore dignissimos.',
                'seen' => false,
                'created_at' => '2021-10-19 07:38:02',
                'updated_at' => '2021-10-19 07:38:02',
            ),
            206 => 
            array (
                'id' => 207,
                'messageable_type' => 'App\\Teacher',
                'messageable_id' => 10,
                'message' => 'Aut itaque eveniet ut voluptas hic totam adipisci.',
                'seen' => false,
                'created_at' => '2021-10-19 07:38:02',
                'updated_at' => '2021-10-19 07:38:02',
            ),
            207 => 
            array (
                'id' => 208,
                'messageable_type' => 'App\\Teacher',
                'messageable_id' => 10,
                'message' => 'In sunt labore nobis laboriosam eum eos.',
                'seen' => false,
                'created_at' => '2021-10-19 07:38:02',
                'updated_at' => '2021-10-19 07:38:02',
            ),
            208 => 
            array (
                'id' => 209,
                'messageable_type' => 'App\\Teacher',
                'messageable_id' => 10,
                'message' => 'Quisquam ab fuga et.',
                'seen' => false,
                'created_at' => '2021-10-19 07:38:02',
                'updated_at' => '2021-10-19 07:38:02',
            ),
            209 => 
            array (
                'id' => 210,
                'messageable_type' => 'App\\Teacher',
                'messageable_id' => 10,
                'message' => 'Dolorum delectus ab sapiente quod.',
                'seen' => false,
                'created_at' => '2021-10-19 07:38:02',
                'updated_at' => '2021-10-19 07:38:02',
            ),
            210 => 
            array (
                'id' => 211,
                'messageable_type' => 'App\\Student',
                'messageable_id' => 10,
                'message' => 'Numquam ab consequuntur soluta ratione ut laboriosam blanditiis.',
                'seen' => false,
                'created_at' => '2021-10-19 07:38:02',
                'updated_at' => '2021-10-19 07:38:02',
            ),
            211 => 
            array (
                'id' => 212,
                'messageable_type' => 'App\\Student',
                'messageable_id' => 10,
                'message' => 'Voluptatibus esse rerum porro enim praesentium.',
                'seen' => false,
                'created_at' => '2021-10-19 07:38:02',
                'updated_at' => '2021-10-19 07:38:02',
            ),
            212 => 
            array (
                'id' => 213,
                'messageable_type' => 'App\\Student',
                'messageable_id' => 10,
                'message' => 'Totam harum sed architecto occaecati.',
                'seen' => false,
                'created_at' => '2021-10-19 07:38:02',
                'updated_at' => '2021-10-19 07:38:02',
            ),
            213 => 
            array (
                'id' => 214,
                'messageable_type' => 'App\\Student',
                'messageable_id' => 10,
                'message' => 'Nulla rerum et nobis laudantium optio qui est unde.',
                'seen' => false,
                'created_at' => '2021-10-19 07:38:02',
                'updated_at' => '2021-10-19 07:38:02',
            ),
            214 => 
            array (
                'id' => 215,
                'messageable_type' => 'App\\Student',
                'messageable_id' => 10,
                'message' => 'Iusto incidunt voluptates ad deleniti esse velit.',
                'seen' => false,
                'created_at' => '2021-10-19 07:38:02',
                'updated_at' => '2021-10-19 07:38:02',
            ),
            215 => 
            array (
                'id' => 216,
                'messageable_type' => 'App\\Student',
                'messageable_id' => 10,
                'message' => 'Nisi dolores vero alias et.',
                'seen' => false,
                'created_at' => '2021-10-19 07:38:02',
                'updated_at' => '2021-10-19 07:38:02',
            ),
            216 => 
            array (
                'id' => 217,
                'messageable_type' => 'App\\Student',
                'messageable_id' => 10,
                'message' => 'Est dolore non sequi est.',
                'seen' => false,
                'created_at' => '2021-10-19 07:38:02',
                'updated_at' => '2021-10-19 07:38:02',
            ),
            217 => 
            array (
                'id' => 218,
                'messageable_type' => 'App\\Student',
                'messageable_id' => 10,
                'message' => 'Ut et nisi eos excepturi quis rerum voluptatibus.',
                'seen' => false,
                'created_at' => '2021-10-19 07:38:02',
                'updated_at' => '2021-10-19 07:38:02',
            ),
            218 => 
            array (
                'id' => 219,
                'messageable_type' => 'App\\Student',
                'messageable_id' => 10,
                'message' => 'Possimus dolorum ratione est enim.',
                'seen' => false,
                'created_at' => '2021-10-19 07:38:02',
                'updated_at' => '2021-10-19 07:38:02',
            ),
            219 => 
            array (
                'id' => 220,
                'messageable_type' => 'App\\Student',
                'messageable_id' => 10,
                'message' => 'Quis ipsa in autem asperiores aut natus.',
                'seen' => false,
                'created_at' => '2021-10-19 07:38:02',
                'updated_at' => '2021-10-19 07:38:02',
            ),
        ));
        
        
    }
}