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
                'messageable_id' => 1,
                'message' => 'Impedit pariatur repudiandae doloribus tempora animi atque et.',
                'seen' => false,
                'created_at' => '2021-10-21 08:32:40',
                'updated_at' => '2021-10-21 08:32:40',
            ),
            1 => 
            array (
                'id' => 2,
                'messageable_type' => 'App\\Teacher',
                'messageable_id' => 1,
                'message' => 'Optio dolorem adipisci aliquam perferendis qui velit.',
                'seen' => false,
                'created_at' => '2021-10-21 08:32:40',
                'updated_at' => '2021-10-21 08:32:40',
            ),
            2 => 
            array (
                'id' => 3,
                'messageable_type' => 'App\\Teacher',
                'messageable_id' => 1,
                'message' => 'Quo ullam tenetur aliquid distinctio odit.',
                'seen' => false,
                'created_at' => '2021-10-21 08:32:40',
                'updated_at' => '2021-10-21 08:32:40',
            ),
            3 => 
            array (
                'id' => 4,
                'messageable_type' => 'App\\Teacher',
                'messageable_id' => 1,
                'message' => 'Magni totam nobis recusandae qui maiores.',
                'seen' => false,
                'created_at' => '2021-10-21 08:32:40',
                'updated_at' => '2021-10-21 08:32:40',
            ),
            4 => 
            array (
                'id' => 5,
                'messageable_type' => 'App\\Teacher',
                'messageable_id' => 1,
                'message' => 'Adipisci blanditiis accusantium sed qui laborum aspernatur aperiam.',
                'seen' => false,
                'created_at' => '2021-10-21 08:32:40',
                'updated_at' => '2021-10-21 08:32:40',
            ),
            5 => 
            array (
                'id' => 6,
                'messageable_type' => 'App\\Teacher',
                'messageable_id' => 1,
                'message' => 'Eligendi corrupti consequatur fugiat maiores.',
                'seen' => false,
                'created_at' => '2021-10-21 08:32:40',
                'updated_at' => '2021-10-21 08:32:40',
            ),
            6 => 
            array (
                'id' => 7,
                'messageable_type' => 'App\\Teacher',
                'messageable_id' => 1,
                'message' => 'Dicta velit maxime nihil pariatur et aut.',
                'seen' => false,
                'created_at' => '2021-10-21 08:32:40',
                'updated_at' => '2021-10-21 08:32:40',
            ),
            7 => 
            array (
                'id' => 8,
                'messageable_type' => 'App\\Teacher',
                'messageable_id' => 1,
                'message' => 'Et explicabo quae non provident.',
                'seen' => false,
                'created_at' => '2021-10-21 08:32:40',
                'updated_at' => '2021-10-21 08:32:40',
            ),
            8 => 
            array (
                'id' => 9,
                'messageable_type' => 'App\\Teacher',
                'messageable_id' => 1,
                'message' => 'Mollitia et inventore voluptatum.',
                'seen' => false,
                'created_at' => '2021-10-21 08:32:40',
                'updated_at' => '2021-10-21 08:32:40',
            ),
            9 => 
            array (
                'id' => 10,
                'messageable_type' => 'App\\Teacher',
                'messageable_id' => 1,
                'message' => 'Sit nisi ullam ut aliquam maiores tempora doloribus.',
                'seen' => false,
                'created_at' => '2021-10-21 08:32:40',
                'updated_at' => '2021-10-21 08:32:40',
            ),
            10 => 
            array (
                'id' => 11,
                'messageable_type' => 'App\\Student',
                'messageable_id' => 1,
                'message' => 'A ducimus vel corporis.',
                'seen' => false,
                'created_at' => '2021-10-21 08:32:40',
                'updated_at' => '2021-10-21 08:32:40',
            ),
            11 => 
            array (
                'id' => 12,
                'messageable_type' => 'App\\Student',
                'messageable_id' => 1,
                'message' => 'Deserunt explicabo consequatur ullam velit corporis laudantium commodi.',
                'seen' => false,
                'created_at' => '2021-10-21 08:32:40',
                'updated_at' => '2021-10-21 08:32:40',
            ),
            12 => 
            array (
                'id' => 13,
                'messageable_type' => 'App\\Student',
                'messageable_id' => 1,
                'message' => 'Distinctio doloribus molestiae ipsam odio occaecati.',
                'seen' => false,
                'created_at' => '2021-10-21 08:32:40',
                'updated_at' => '2021-10-21 08:32:40',
            ),
            13 => 
            array (
                'id' => 14,
                'messageable_type' => 'App\\Student',
                'messageable_id' => 1,
                'message' => 'Nisi voluptas quod ipsam quae et expedita at.',
                'seen' => false,
                'created_at' => '2021-10-21 08:32:40',
                'updated_at' => '2021-10-21 08:32:40',
            ),
            14 => 
            array (
                'id' => 15,
                'messageable_type' => 'App\\Student',
                'messageable_id' => 1,
                'message' => 'Omnis id omnis magni deleniti recusandae tempore.',
                'seen' => false,
                'created_at' => '2021-10-21 08:32:40',
                'updated_at' => '2021-10-21 08:32:40',
            ),
            15 => 
            array (
                'id' => 16,
                'messageable_type' => 'App\\Student',
                'messageable_id' => 1,
                'message' => 'Ut nemo ducimus eius officia dolorem sit atque.',
                'seen' => false,
                'created_at' => '2021-10-21 08:32:40',
                'updated_at' => '2021-10-21 08:32:40',
            ),
            16 => 
            array (
                'id' => 17,
                'messageable_type' => 'App\\Student',
                'messageable_id' => 1,
                'message' => 'Enim dolore rerum quo consequatur atque.',
                'seen' => false,
                'created_at' => '2021-10-21 08:32:40',
                'updated_at' => '2021-10-21 08:32:40',
            ),
            17 => 
            array (
                'id' => 18,
                'messageable_type' => 'App\\Student',
                'messageable_id' => 1,
                'message' => 'Provident officiis et aut minima aperiam voluptatum et.',
                'seen' => false,
                'created_at' => '2021-10-21 08:32:40',
                'updated_at' => '2021-10-21 08:32:40',
            ),
            18 => 
            array (
                'id' => 19,
                'messageable_type' => 'App\\Student',
                'messageable_id' => 1,
                'message' => 'Ex laborum expedita labore maiores commodi minus vitae.',
                'seen' => false,
                'created_at' => '2021-10-21 08:32:40',
                'updated_at' => '2021-10-21 08:32:40',
            ),
            19 => 
            array (
                'id' => 20,
                'messageable_type' => 'App\\Student',
                'messageable_id' => 1,
                'message' => 'Laborum repudiandae optio aut perferendis sapiente dicta eius.',
                'seen' => false,
                'created_at' => '2021-10-21 08:32:40',
                'updated_at' => '2021-10-21 08:32:40',
            ),
            20 => 
            array (
                'id' => 21,
                'messageable_type' => 'App\\Teacher',
                'messageable_id' => 2,
                'message' => 'Id voluptatum consequuntur qui voluptatem sed.',
                'seen' => false,
                'created_at' => '2021-10-21 08:32:40',
                'updated_at' => '2021-10-21 08:32:40',
            ),
            21 => 
            array (
                'id' => 22,
                'messageable_type' => 'App\\Teacher',
                'messageable_id' => 2,
                'message' => 'Magni consequatur accusantium ea.',
                'seen' => false,
                'created_at' => '2021-10-21 08:32:40',
                'updated_at' => '2021-10-21 08:32:40',
            ),
            22 => 
            array (
                'id' => 23,
                'messageable_type' => 'App\\Teacher',
                'messageable_id' => 2,
                'message' => 'Pariatur qui dolor eius quae.',
                'seen' => false,
                'created_at' => '2021-10-21 08:32:40',
                'updated_at' => '2021-10-21 08:32:40',
            ),
            23 => 
            array (
                'id' => 24,
                'messageable_type' => 'App\\Teacher',
                'messageable_id' => 2,
                'message' => 'Odit placeat omnis facere et.',
                'seen' => false,
                'created_at' => '2021-10-21 08:32:40',
                'updated_at' => '2021-10-21 08:32:40',
            ),
            24 => 
            array (
                'id' => 25,
                'messageable_type' => 'App\\Teacher',
                'messageable_id' => 2,
                'message' => 'Molestias laboriosam dolor aliquam aut quaerat tempora.',
                'seen' => false,
                'created_at' => '2021-10-21 08:32:40',
                'updated_at' => '2021-10-21 08:32:40',
            ),
            25 => 
            array (
                'id' => 26,
                'messageable_type' => 'App\\Teacher',
                'messageable_id' => 2,
                'message' => 'Odio et ratione ipsa at dignissimos.',
                'seen' => false,
                'created_at' => '2021-10-21 08:32:40',
                'updated_at' => '2021-10-21 08:32:40',
            ),
            26 => 
            array (
                'id' => 27,
                'messageable_type' => 'App\\Teacher',
                'messageable_id' => 2,
                'message' => 'Qui et deleniti aliquid delectus recusandae nihil est.',
                'seen' => false,
                'created_at' => '2021-10-21 08:32:40',
                'updated_at' => '2021-10-21 08:32:40',
            ),
            27 => 
            array (
                'id' => 28,
                'messageable_type' => 'App\\Teacher',
                'messageable_id' => 2,
                'message' => 'Dolorem accusantium saepe vel optio.',
                'seen' => false,
                'created_at' => '2021-10-21 08:32:40',
                'updated_at' => '2021-10-21 08:32:40',
            ),
            28 => 
            array (
                'id' => 29,
                'messageable_type' => 'App\\Teacher',
                'messageable_id' => 2,
                'message' => 'Dolores quos molestiae modi quas est dolorum.',
                'seen' => false,
                'created_at' => '2021-10-21 08:32:40',
                'updated_at' => '2021-10-21 08:32:40',
            ),
            29 => 
            array (
                'id' => 30,
                'messageable_type' => 'App\\Teacher',
                'messageable_id' => 2,
                'message' => 'Consequuntur labore dignissimos minus eligendi distinctio temporibus.',
                'seen' => false,
                'created_at' => '2021-10-21 08:32:40',
                'updated_at' => '2021-10-21 08:32:40',
            ),
            30 => 
            array (
                'id' => 31,
                'messageable_type' => 'App\\Student',
                'messageable_id' => 2,
                'message' => 'Sapiente officia sunt tempora nihil quaerat.',
                'seen' => false,
                'created_at' => '2021-10-21 08:32:40',
                'updated_at' => '2021-10-21 08:32:40',
            ),
            31 => 
            array (
                'id' => 32,
                'messageable_type' => 'App\\Student',
                'messageable_id' => 2,
                'message' => 'Assumenda ipsum harum mollitia minus culpa possimus dolorum dolores.',
                'seen' => false,
                'created_at' => '2021-10-21 08:32:40',
                'updated_at' => '2021-10-21 08:32:40',
            ),
            32 => 
            array (
                'id' => 33,
                'messageable_type' => 'App\\Student',
                'messageable_id' => 2,
                'message' => 'Vel temporibus maxime aperiam unde consequuntur est.',
                'seen' => false,
                'created_at' => '2021-10-21 08:32:40',
                'updated_at' => '2021-10-21 08:32:40',
            ),
            33 => 
            array (
                'id' => 34,
                'messageable_type' => 'App\\Student',
                'messageable_id' => 2,
                'message' => 'Voluptates officiis ea sint nulla beatae sed.',
                'seen' => false,
                'created_at' => '2021-10-21 08:32:40',
                'updated_at' => '2021-10-21 08:32:40',
            ),
            34 => 
            array (
                'id' => 35,
                'messageable_type' => 'App\\Student',
                'messageable_id' => 2,
                'message' => 'Quis ratione velit et corporis ipsa esse ut.',
                'seen' => false,
                'created_at' => '2021-10-21 08:32:40',
                'updated_at' => '2021-10-21 08:32:40',
            ),
            35 => 
            array (
                'id' => 36,
                'messageable_type' => 'App\\Student',
                'messageable_id' => 2,
                'message' => 'Ut hic recusandae odio beatae.',
                'seen' => false,
                'created_at' => '2021-10-21 08:32:40',
                'updated_at' => '2021-10-21 08:32:40',
            ),
            36 => 
            array (
                'id' => 37,
                'messageable_type' => 'App\\Student',
                'messageable_id' => 2,
                'message' => 'Explicabo consequatur eveniet harum consequatur tempora adipisci velit.',
                'seen' => false,
                'created_at' => '2021-10-21 08:32:40',
                'updated_at' => '2021-10-21 08:32:40',
            ),
            37 => 
            array (
                'id' => 38,
                'messageable_type' => 'App\\Student',
                'messageable_id' => 2,
                'message' => 'Aut atque numquam et repellendus nihil adipisci amet non.',
                'seen' => false,
                'created_at' => '2021-10-21 08:32:40',
                'updated_at' => '2021-10-21 08:32:40',
            ),
            38 => 
            array (
                'id' => 39,
                'messageable_type' => 'App\\Student',
                'messageable_id' => 2,
                'message' => 'Et aut nam nam sunt cupiditate.',
                'seen' => false,
                'created_at' => '2021-10-21 08:32:40',
                'updated_at' => '2021-10-21 08:32:40',
            ),
            39 => 
            array (
                'id' => 40,
                'messageable_type' => 'App\\Student',
                'messageable_id' => 2,
                'message' => 'Exercitationem et accusantium quasi omnis corporis numquam eum.',
                'seen' => false,
                'created_at' => '2021-10-21 08:32:40',
                'updated_at' => '2021-10-21 08:32:40',
            ),
            40 => 
            array (
                'id' => 41,
                'messageable_type' => 'App\\Teacher',
                'messageable_id' => 3,
                'message' => 'Repellat corporis facilis sit ea.',
                'seen' => false,
                'created_at' => '2021-10-21 08:32:40',
                'updated_at' => '2021-10-21 08:32:40',
            ),
            41 => 
            array (
                'id' => 42,
                'messageable_type' => 'App\\Teacher',
                'messageable_id' => 3,
                'message' => 'Dolores esse fugit reprehenderit eligendi et et.',
                'seen' => false,
                'created_at' => '2021-10-21 08:32:40',
                'updated_at' => '2021-10-21 08:32:40',
            ),
            42 => 
            array (
                'id' => 43,
                'messageable_type' => 'App\\Teacher',
                'messageable_id' => 3,
                'message' => 'Iste aliquam ea et suscipit voluptate nihil et.',
                'seen' => false,
                'created_at' => '2021-10-21 08:32:40',
                'updated_at' => '2021-10-21 08:32:40',
            ),
            43 => 
            array (
                'id' => 44,
                'messageable_type' => 'App\\Teacher',
                'messageable_id' => 3,
                'message' => 'Voluptates autem repellat aut.',
                'seen' => false,
                'created_at' => '2021-10-21 08:32:40',
                'updated_at' => '2021-10-21 08:32:40',
            ),
            44 => 
            array (
                'id' => 45,
                'messageable_type' => 'App\\Teacher',
                'messageable_id' => 3,
                'message' => 'Ea vitae occaecati autem voluptatem rerum.',
                'seen' => false,
                'created_at' => '2021-10-21 08:32:40',
                'updated_at' => '2021-10-21 08:32:40',
            ),
            45 => 
            array (
                'id' => 46,
                'messageable_type' => 'App\\Teacher',
                'messageable_id' => 3,
                'message' => 'Numquam vel quod qui sed.',
                'seen' => false,
                'created_at' => '2021-10-21 08:32:40',
                'updated_at' => '2021-10-21 08:32:40',
            ),
            46 => 
            array (
                'id' => 47,
                'messageable_type' => 'App\\Teacher',
                'messageable_id' => 3,
                'message' => 'Doloremque voluptas accusantium nisi perspiciatis ad.',
                'seen' => false,
                'created_at' => '2021-10-21 08:32:40',
                'updated_at' => '2021-10-21 08:32:40',
            ),
            47 => 
            array (
                'id' => 48,
                'messageable_type' => 'App\\Teacher',
                'messageable_id' => 3,
                'message' => 'Doloremque voluptatem esse adipisci voluptate quaerat doloribus quis.',
                'seen' => false,
                'created_at' => '2021-10-21 08:32:40',
                'updated_at' => '2021-10-21 08:32:40',
            ),
            48 => 
            array (
                'id' => 49,
                'messageable_type' => 'App\\Teacher',
                'messageable_id' => 3,
                'message' => 'Dolorem debitis ea et at.',
                'seen' => false,
                'created_at' => '2021-10-21 08:32:40',
                'updated_at' => '2021-10-21 08:32:40',
            ),
            49 => 
            array (
                'id' => 50,
                'messageable_type' => 'App\\Teacher',
                'messageable_id' => 3,
                'message' => 'Officiis placeat enim adipisci rerum qui id non quaerat.',
                'seen' => false,
                'created_at' => '2021-10-21 08:32:40',
                'updated_at' => '2021-10-21 08:32:40',
            ),
            50 => 
            array (
                'id' => 51,
                'messageable_type' => 'App\\Student',
                'messageable_id' => 3,
                'message' => 'Saepe quam vel quia.',
                'seen' => false,
                'created_at' => '2021-10-21 08:32:40',
                'updated_at' => '2021-10-21 08:32:40',
            ),
            51 => 
            array (
                'id' => 52,
                'messageable_type' => 'App\\Student',
                'messageable_id' => 3,
                'message' => 'Aspernatur rerum ut quidem vitae.',
                'seen' => false,
                'created_at' => '2021-10-21 08:32:40',
                'updated_at' => '2021-10-21 08:32:40',
            ),
            52 => 
            array (
                'id' => 53,
                'messageable_type' => 'App\\Student',
                'messageable_id' => 3,
                'message' => 'Reprehenderit dolor dolorum quis sunt et quis.',
                'seen' => false,
                'created_at' => '2021-10-21 08:32:40',
                'updated_at' => '2021-10-21 08:32:40',
            ),
            53 => 
            array (
                'id' => 54,
                'messageable_type' => 'App\\Student',
                'messageable_id' => 3,
                'message' => 'Enim quia at et minus eveniet repellendus.',
                'seen' => false,
                'created_at' => '2021-10-21 08:32:40',
                'updated_at' => '2021-10-21 08:32:40',
            ),
            54 => 
            array (
                'id' => 55,
                'messageable_type' => 'App\\Student',
                'messageable_id' => 3,
                'message' => 'Est non dolorem impedit fuga non.',
                'seen' => false,
                'created_at' => '2021-10-21 08:32:40',
                'updated_at' => '2021-10-21 08:32:40',
            ),
            55 => 
            array (
                'id' => 56,
                'messageable_type' => 'App\\Student',
                'messageable_id' => 3,
                'message' => 'Asperiores consequuntur ea tenetur et nesciunt blanditiis et libero.',
                'seen' => false,
                'created_at' => '2021-10-21 08:32:40',
                'updated_at' => '2021-10-21 08:32:40',
            ),
            56 => 
            array (
                'id' => 57,
                'messageable_type' => 'App\\Student',
                'messageable_id' => 3,
                'message' => 'Provident sint ut laboriosam pariatur.',
                'seen' => false,
                'created_at' => '2021-10-21 08:32:40',
                'updated_at' => '2021-10-21 08:32:40',
            ),
            57 => 
            array (
                'id' => 58,
                'messageable_type' => 'App\\Student',
                'messageable_id' => 3,
                'message' => 'Dolor distinctio esse ipsam dolores hic.',
                'seen' => false,
                'created_at' => '2021-10-21 08:32:40',
                'updated_at' => '2021-10-21 08:32:40',
            ),
            58 => 
            array (
                'id' => 59,
                'messageable_type' => 'App\\Student',
                'messageable_id' => 3,
                'message' => 'Molestias consectetur doloribus est deleniti maxime voluptas.',
                'seen' => false,
                'created_at' => '2021-10-21 08:32:40',
                'updated_at' => '2021-10-21 08:32:40',
            ),
            59 => 
            array (
                'id' => 60,
                'messageable_type' => 'App\\Student',
                'messageable_id' => 3,
                'message' => 'Reprehenderit commodi quidem quasi neque eos quas quia.',
                'seen' => false,
                'created_at' => '2021-10-21 08:32:40',
                'updated_at' => '2021-10-21 08:32:40',
            ),
            60 => 
            array (
                'id' => 61,
                'messageable_type' => 'App\\Teacher',
                'messageable_id' => 4,
                'message' => 'Ea dicta velit alias et voluptatem corporis.',
                'seen' => false,
                'created_at' => '2021-10-21 08:32:40',
                'updated_at' => '2021-10-21 08:32:40',
            ),
            61 => 
            array (
                'id' => 62,
                'messageable_type' => 'App\\Teacher',
                'messageable_id' => 4,
                'message' => 'Qui sapiente quaerat voluptatem in beatae.',
                'seen' => false,
                'created_at' => '2021-10-21 08:32:40',
                'updated_at' => '2021-10-21 08:32:40',
            ),
            62 => 
            array (
                'id' => 63,
                'messageable_type' => 'App\\Teacher',
                'messageable_id' => 4,
                'message' => 'Voluptatem natus error aperiam molestias magni sed tempore.',
                'seen' => false,
                'created_at' => '2021-10-21 08:32:40',
                'updated_at' => '2021-10-21 08:32:40',
            ),
            63 => 
            array (
                'id' => 64,
                'messageable_type' => 'App\\Teacher',
                'messageable_id' => 4,
                'message' => 'Vel minima consequatur aperiam.',
                'seen' => false,
                'created_at' => '2021-10-21 08:32:40',
                'updated_at' => '2021-10-21 08:32:40',
            ),
            64 => 
            array (
                'id' => 65,
                'messageable_type' => 'App\\Teacher',
                'messageable_id' => 4,
                'message' => 'Repellendus accusamus molestiae rerum officiis.',
                'seen' => false,
                'created_at' => '2021-10-21 08:32:40',
                'updated_at' => '2021-10-21 08:32:40',
            ),
            65 => 
            array (
                'id' => 66,
                'messageable_type' => 'App\\Teacher',
                'messageable_id' => 4,
                'message' => 'Numquam quam maxime consequuntur possimus.',
                'seen' => false,
                'created_at' => '2021-10-21 08:32:40',
                'updated_at' => '2021-10-21 08:32:40',
            ),
            66 => 
            array (
                'id' => 67,
                'messageable_type' => 'App\\Teacher',
                'messageable_id' => 4,
                'message' => 'Aliquid natus et ex similique dolorum iusto autem et.',
                'seen' => false,
                'created_at' => '2021-10-21 08:32:40',
                'updated_at' => '2021-10-21 08:32:40',
            ),
            67 => 
            array (
                'id' => 68,
                'messageable_type' => 'App\\Teacher',
                'messageable_id' => 4,
                'message' => 'Praesentium ut et ad quia hic.',
                'seen' => false,
                'created_at' => '2021-10-21 08:32:40',
                'updated_at' => '2021-10-21 08:32:40',
            ),
            68 => 
            array (
                'id' => 69,
                'messageable_type' => 'App\\Teacher',
                'messageable_id' => 4,
                'message' => 'Ex nemo non eos.',
                'seen' => false,
                'created_at' => '2021-10-21 08:32:40',
                'updated_at' => '2021-10-21 08:32:40',
            ),
            69 => 
            array (
                'id' => 70,
                'messageable_type' => 'App\\Teacher',
                'messageable_id' => 4,
                'message' => 'Quia odit ut ducimus quia beatae libero.',
                'seen' => false,
                'created_at' => '2021-10-21 08:32:40',
                'updated_at' => '2021-10-21 08:32:40',
            ),
            70 => 
            array (
                'id' => 71,
                'messageable_type' => 'App\\Student',
                'messageable_id' => 4,
                'message' => 'Sed ea et suscipit.',
                'seen' => false,
                'created_at' => '2021-10-21 08:32:40',
                'updated_at' => '2021-10-21 08:32:40',
            ),
            71 => 
            array (
                'id' => 72,
                'messageable_type' => 'App\\Student',
                'messageable_id' => 4,
                'message' => 'Facilis aut quod id aspernatur quia.',
                'seen' => false,
                'created_at' => '2021-10-21 08:32:40',
                'updated_at' => '2021-10-21 08:32:40',
            ),
            72 => 
            array (
                'id' => 73,
                'messageable_type' => 'App\\Student',
                'messageable_id' => 4,
                'message' => 'Earum nihil corporis quasi est sit voluptatum.',
                'seen' => false,
                'created_at' => '2021-10-21 08:32:40',
                'updated_at' => '2021-10-21 08:32:40',
            ),
            73 => 
            array (
                'id' => 74,
                'messageable_type' => 'App\\Student',
                'messageable_id' => 4,
                'message' => 'Et ipsam consequatur voluptatem commodi minima aliquam non.',
                'seen' => false,
                'created_at' => '2021-10-21 08:32:40',
                'updated_at' => '2021-10-21 08:32:40',
            ),
            74 => 
            array (
                'id' => 75,
                'messageable_type' => 'App\\Student',
                'messageable_id' => 4,
                'message' => 'Velit aut dolor omnis cupiditate id.',
                'seen' => false,
                'created_at' => '2021-10-21 08:32:40',
                'updated_at' => '2021-10-21 08:32:40',
            ),
            75 => 
            array (
                'id' => 76,
                'messageable_type' => 'App\\Student',
                'messageable_id' => 4,
                'message' => 'Aut qui aut ipsam dicta veniam quia.',
                'seen' => false,
                'created_at' => '2021-10-21 08:32:40',
                'updated_at' => '2021-10-21 08:32:40',
            ),
            76 => 
            array (
                'id' => 77,
                'messageable_type' => 'App\\Student',
                'messageable_id' => 4,
                'message' => 'Eius ipsum voluptatem rerum ullam qui et.',
                'seen' => false,
                'created_at' => '2021-10-21 08:32:40',
                'updated_at' => '2021-10-21 08:32:40',
            ),
            77 => 
            array (
                'id' => 78,
                'messageable_type' => 'App\\Student',
                'messageable_id' => 4,
                'message' => 'Consequatur atque dolorem ab reprehenderit ea nulla.',
                'seen' => false,
                'created_at' => '2021-10-21 08:32:40',
                'updated_at' => '2021-10-21 08:32:40',
            ),
            78 => 
            array (
                'id' => 79,
                'messageable_type' => 'App\\Student',
                'messageable_id' => 4,
                'message' => 'Possimus et labore non consequatur ducimus sunt maxime.',
                'seen' => false,
                'created_at' => '2021-10-21 08:32:40',
                'updated_at' => '2021-10-21 08:32:40',
            ),
            79 => 
            array (
                'id' => 80,
                'messageable_type' => 'App\\Student',
                'messageable_id' => 4,
                'message' => 'Ea molestiae eius quas excepturi.',
                'seen' => false,
                'created_at' => '2021-10-21 08:32:40',
                'updated_at' => '2021-10-21 08:32:40',
            ),
            80 => 
            array (
                'id' => 81,
                'messageable_type' => 'App\\Teacher',
                'messageable_id' => 5,
                'message' => 'Aliquam fugit et atque eum.',
                'seen' => false,
                'created_at' => '2021-10-21 08:32:40',
                'updated_at' => '2021-10-21 08:32:40',
            ),
            81 => 
            array (
                'id' => 82,
                'messageable_type' => 'App\\Teacher',
                'messageable_id' => 5,
                'message' => 'At molestias eum culpa consequatur delectus ipsum eum.',
                'seen' => false,
                'created_at' => '2021-10-21 08:32:40',
                'updated_at' => '2021-10-21 08:32:40',
            ),
            82 => 
            array (
                'id' => 83,
                'messageable_type' => 'App\\Teacher',
                'messageable_id' => 5,
                'message' => 'Reprehenderit quibusdam dolores quae et reiciendis est.',
                'seen' => false,
                'created_at' => '2021-10-21 08:32:40',
                'updated_at' => '2021-10-21 08:32:40',
            ),
            83 => 
            array (
                'id' => 84,
                'messageable_type' => 'App\\Teacher',
                'messageable_id' => 5,
                'message' => 'Quas repellendus explicabo quo.',
                'seen' => false,
                'created_at' => '2021-10-21 08:32:40',
                'updated_at' => '2021-10-21 08:32:40',
            ),
            84 => 
            array (
                'id' => 85,
                'messageable_type' => 'App\\Teacher',
                'messageable_id' => 5,
                'message' => 'Aperiam odit fugiat dolorum eius et voluptatibus necessitatibus esse.',
                'seen' => false,
                'created_at' => '2021-10-21 08:32:40',
                'updated_at' => '2021-10-21 08:32:40',
            ),
            85 => 
            array (
                'id' => 86,
                'messageable_type' => 'App\\Teacher',
                'messageable_id' => 5,
                'message' => 'Voluptatem eum saepe et quia dolorum quis.',
                'seen' => false,
                'created_at' => '2021-10-21 08:32:40',
                'updated_at' => '2021-10-21 08:32:40',
            ),
            86 => 
            array (
                'id' => 87,
                'messageable_type' => 'App\\Teacher',
                'messageable_id' => 5,
                'message' => 'Adipisci et autem incidunt itaque voluptas.',
                'seen' => false,
                'created_at' => '2021-10-21 08:32:40',
                'updated_at' => '2021-10-21 08:32:40',
            ),
            87 => 
            array (
                'id' => 88,
                'messageable_type' => 'App\\Teacher',
                'messageable_id' => 5,
                'message' => 'Qui autem explicabo dolores similique unde temporibus.',
                'seen' => false,
                'created_at' => '2021-10-21 08:32:40',
                'updated_at' => '2021-10-21 08:32:40',
            ),
            88 => 
            array (
                'id' => 89,
                'messageable_type' => 'App\\Teacher',
                'messageable_id' => 5,
                'message' => 'Ut nulla iusto aut ratione dolores.',
                'seen' => false,
                'created_at' => '2021-10-21 08:32:40',
                'updated_at' => '2021-10-21 08:32:40',
            ),
            89 => 
            array (
                'id' => 90,
                'messageable_type' => 'App\\Teacher',
                'messageable_id' => 5,
                'message' => 'Autem doloribus unde voluptatem qui.',
                'seen' => false,
                'created_at' => '2021-10-21 08:32:40',
                'updated_at' => '2021-10-21 08:32:40',
            ),
            90 => 
            array (
                'id' => 91,
                'messageable_type' => 'App\\Student',
                'messageable_id' => 5,
                'message' => 'Aut et necessitatibus ullam reiciendis quia unde.',
                'seen' => false,
                'created_at' => '2021-10-21 08:32:40',
                'updated_at' => '2021-10-21 08:32:40',
            ),
            91 => 
            array (
                'id' => 92,
                'messageable_type' => 'App\\Student',
                'messageable_id' => 5,
                'message' => 'Impedit qui sunt aut.',
                'seen' => false,
                'created_at' => '2021-10-21 08:32:40',
                'updated_at' => '2021-10-21 08:32:40',
            ),
            92 => 
            array (
                'id' => 93,
                'messageable_type' => 'App\\Student',
                'messageable_id' => 5,
                'message' => 'Deleniti eveniet optio velit aliquam omnis ex dolorum.',
                'seen' => false,
                'created_at' => '2021-10-21 08:32:40',
                'updated_at' => '2021-10-21 08:32:40',
            ),
            93 => 
            array (
                'id' => 94,
                'messageable_type' => 'App\\Student',
                'messageable_id' => 5,
                'message' => 'Ullam et repellendus ut nisi dolorem ea.',
                'seen' => false,
                'created_at' => '2021-10-21 08:32:40',
                'updated_at' => '2021-10-21 08:32:40',
            ),
            94 => 
            array (
                'id' => 95,
                'messageable_type' => 'App\\Student',
                'messageable_id' => 5,
                'message' => 'Consequuntur natus sit dolores pariatur pariatur.',
                'seen' => false,
                'created_at' => '2021-10-21 08:32:40',
                'updated_at' => '2021-10-21 08:32:40',
            ),
            95 => 
            array (
                'id' => 96,
                'messageable_type' => 'App\\Student',
                'messageable_id' => 5,
                'message' => 'Ipsum aperiam quibusdam quos dicta quas placeat.',
                'seen' => false,
                'created_at' => '2021-10-21 08:32:40',
                'updated_at' => '2021-10-21 08:32:40',
            ),
            96 => 
            array (
                'id' => 97,
                'messageable_type' => 'App\\Student',
                'messageable_id' => 5,
                'message' => 'Quia et iste ut quo culpa ullam sapiente.',
                'seen' => false,
                'created_at' => '2021-10-21 08:32:40',
                'updated_at' => '2021-10-21 08:32:40',
            ),
            97 => 
            array (
                'id' => 98,
                'messageable_type' => 'App\\Student',
                'messageable_id' => 5,
                'message' => 'Aliquid illum molestiae dolor omnis commodi repudiandae.',
                'seen' => false,
                'created_at' => '2021-10-21 08:32:40',
                'updated_at' => '2021-10-21 08:32:40',
            ),
            98 => 
            array (
                'id' => 99,
                'messageable_type' => 'App\\Student',
                'messageable_id' => 5,
                'message' => 'Mollitia dolore dolores veniam sit architecto quae ex excepturi.',
                'seen' => false,
                'created_at' => '2021-10-21 08:32:40',
                'updated_at' => '2021-10-21 08:32:40',
            ),
            99 => 
            array (
                'id' => 100,
                'messageable_type' => 'App\\Student',
                'messageable_id' => 5,
                'message' => 'Delectus non deleniti quia.',
                'seen' => false,
                'created_at' => '2021-10-21 08:32:40',
                'updated_at' => '2021-10-21 08:32:40',
            ),
            100 => 
            array (
                'id' => 101,
                'messageable_type' => 'App\\Teacher',
                'messageable_id' => 6,
                'message' => 'Eveniet rerum sed aut molestiae ut.',
                'seen' => false,
                'created_at' => '2021-10-21 08:32:40',
                'updated_at' => '2021-10-21 08:32:40',
            ),
            101 => 
            array (
                'id' => 102,
                'messageable_type' => 'App\\Teacher',
                'messageable_id' => 6,
                'message' => 'Eos reiciendis non assumenda.',
                'seen' => false,
                'created_at' => '2021-10-21 08:32:40',
                'updated_at' => '2021-10-21 08:32:40',
            ),
            102 => 
            array (
                'id' => 103,
                'messageable_type' => 'App\\Teacher',
                'messageable_id' => 6,
                'message' => 'Possimus error ea ut nihil incidunt maiores.',
                'seen' => false,
                'created_at' => '2021-10-21 08:32:40',
                'updated_at' => '2021-10-21 08:32:40',
            ),
            103 => 
            array (
                'id' => 104,
                'messageable_type' => 'App\\Teacher',
                'messageable_id' => 6,
                'message' => 'Est earum assumenda totam cupiditate aliquam sint ea.',
                'seen' => false,
                'created_at' => '2021-10-21 08:32:40',
                'updated_at' => '2021-10-21 08:32:40',
            ),
            104 => 
            array (
                'id' => 105,
                'messageable_type' => 'App\\Teacher',
                'messageable_id' => 6,
                'message' => 'Quis sequi fuga et eveniet ut.',
                'seen' => false,
                'created_at' => '2021-10-21 08:32:40',
                'updated_at' => '2021-10-21 08:32:40',
            ),
            105 => 
            array (
                'id' => 106,
                'messageable_type' => 'App\\Teacher',
                'messageable_id' => 6,
                'message' => 'Rem enim quidem et hic consectetur enim amet.',
                'seen' => false,
                'created_at' => '2021-10-21 08:32:40',
                'updated_at' => '2021-10-21 08:32:40',
            ),
            106 => 
            array (
                'id' => 107,
                'messageable_type' => 'App\\Teacher',
                'messageable_id' => 6,
                'message' => 'Quidem iure sed et vero qui expedita cum.',
                'seen' => false,
                'created_at' => '2021-10-21 08:32:40',
                'updated_at' => '2021-10-21 08:32:40',
            ),
            107 => 
            array (
                'id' => 108,
                'messageable_type' => 'App\\Teacher',
                'messageable_id' => 6,
                'message' => 'Esse rem explicabo quibusdam odit adipisci aliquam.',
                'seen' => false,
                'created_at' => '2021-10-21 08:32:40',
                'updated_at' => '2021-10-21 08:32:40',
            ),
            108 => 
            array (
                'id' => 109,
                'messageable_type' => 'App\\Teacher',
                'messageable_id' => 6,
                'message' => 'Non qui facilis non.',
                'seen' => false,
                'created_at' => '2021-10-21 08:32:40',
                'updated_at' => '2021-10-21 08:32:40',
            ),
            109 => 
            array (
                'id' => 110,
                'messageable_type' => 'App\\Teacher',
                'messageable_id' => 6,
                'message' => 'Odio tempore accusamus porro dolorem consectetur pariatur maiores.',
                'seen' => false,
                'created_at' => '2021-10-21 08:32:40',
                'updated_at' => '2021-10-21 08:32:40',
            ),
            110 => 
            array (
                'id' => 111,
                'messageable_type' => 'App\\Student',
                'messageable_id' => 6,
                'message' => 'Hic ut fuga omnis ducimus ea.',
                'seen' => false,
                'created_at' => '2021-10-21 08:32:40',
                'updated_at' => '2021-10-21 08:32:40',
            ),
            111 => 
            array (
                'id' => 112,
                'messageable_type' => 'App\\Student',
                'messageable_id' => 6,
                'message' => 'Aliquid alias unde eaque odio dolorum perspiciatis.',
                'seen' => false,
                'created_at' => '2021-10-21 08:32:40',
                'updated_at' => '2021-10-21 08:32:40',
            ),
            112 => 
            array (
                'id' => 113,
                'messageable_type' => 'App\\Student',
                'messageable_id' => 6,
                'message' => 'Ex deserunt commodi possimus culpa.',
                'seen' => false,
                'created_at' => '2021-10-21 08:32:40',
                'updated_at' => '2021-10-21 08:32:40',
            ),
            113 => 
            array (
                'id' => 114,
                'messageable_type' => 'App\\Student',
                'messageable_id' => 6,
                'message' => 'Alias neque placeat laboriosam nobis quis.',
                'seen' => false,
                'created_at' => '2021-10-21 08:32:40',
                'updated_at' => '2021-10-21 08:32:40',
            ),
            114 => 
            array (
                'id' => 115,
                'messageable_type' => 'App\\Student',
                'messageable_id' => 6,
                'message' => 'Nobis impedit ullam quaerat architecto.',
                'seen' => false,
                'created_at' => '2021-10-21 08:32:40',
                'updated_at' => '2021-10-21 08:32:40',
            ),
            115 => 
            array (
                'id' => 116,
                'messageable_type' => 'App\\Student',
                'messageable_id' => 6,
                'message' => 'Dolorem tenetur eligendi ut maxime alias similique.',
                'seen' => false,
                'created_at' => '2021-10-21 08:32:40',
                'updated_at' => '2021-10-21 08:32:40',
            ),
            116 => 
            array (
                'id' => 117,
                'messageable_type' => 'App\\Student',
                'messageable_id' => 6,
                'message' => 'Iste molestiae atque error odit labore at qui.',
                'seen' => false,
                'created_at' => '2021-10-21 08:32:40',
                'updated_at' => '2021-10-21 08:32:40',
            ),
            117 => 
            array (
                'id' => 118,
                'messageable_type' => 'App\\Student',
                'messageable_id' => 6,
                'message' => 'Veniam quasi modi assumenda.',
                'seen' => false,
                'created_at' => '2021-10-21 08:32:40',
                'updated_at' => '2021-10-21 08:32:40',
            ),
            118 => 
            array (
                'id' => 119,
                'messageable_type' => 'App\\Student',
                'messageable_id' => 6,
                'message' => 'Cupiditate distinctio at ut cupiditate dolorum ullam.',
                'seen' => false,
                'created_at' => '2021-10-21 08:32:40',
                'updated_at' => '2021-10-21 08:32:40',
            ),
            119 => 
            array (
                'id' => 120,
                'messageable_type' => 'App\\Student',
                'messageable_id' => 6,
                'message' => 'Tenetur voluptatem maxime quisquam non.',
                'seen' => false,
                'created_at' => '2021-10-21 08:32:40',
                'updated_at' => '2021-10-21 08:32:40',
            ),
            120 => 
            array (
                'id' => 121,
                'messageable_type' => 'App\\Teacher',
                'messageable_id' => 7,
                'message' => 'Consectetur ut sequi dignissimos et.',
                'seen' => false,
                'created_at' => '2021-10-21 08:32:40',
                'updated_at' => '2021-10-21 08:32:40',
            ),
            121 => 
            array (
                'id' => 122,
                'messageable_type' => 'App\\Teacher',
                'messageable_id' => 7,
                'message' => 'Perspiciatis laborum dolore doloribus aut nam quae voluptatibus.',
                'seen' => false,
                'created_at' => '2021-10-21 08:32:40',
                'updated_at' => '2021-10-21 08:32:40',
            ),
            122 => 
            array (
                'id' => 123,
                'messageable_type' => 'App\\Teacher',
                'messageable_id' => 7,
                'message' => 'Quo maxime soluta non perferendis aliquid magni.',
                'seen' => false,
                'created_at' => '2021-10-21 08:32:40',
                'updated_at' => '2021-10-21 08:32:40',
            ),
            123 => 
            array (
                'id' => 124,
                'messageable_type' => 'App\\Teacher',
                'messageable_id' => 7,
                'message' => 'Earum quis non voluptatem.',
                'seen' => false,
                'created_at' => '2021-10-21 08:32:40',
                'updated_at' => '2021-10-21 08:32:40',
            ),
            124 => 
            array (
                'id' => 125,
                'messageable_type' => 'App\\Teacher',
                'messageable_id' => 7,
                'message' => 'Animi harum tenetur beatae accusamus voluptates.',
                'seen' => false,
                'created_at' => '2021-10-21 08:32:40',
                'updated_at' => '2021-10-21 08:32:40',
            ),
            125 => 
            array (
                'id' => 126,
                'messageable_type' => 'App\\Teacher',
                'messageable_id' => 7,
                'message' => 'Cum eum provident quas vitae.',
                'seen' => false,
                'created_at' => '2021-10-21 08:32:40',
                'updated_at' => '2021-10-21 08:32:40',
            ),
            126 => 
            array (
                'id' => 127,
                'messageable_type' => 'App\\Teacher',
                'messageable_id' => 7,
                'message' => 'Quidem voluptas natus eveniet.',
                'seen' => false,
                'created_at' => '2021-10-21 08:32:40',
                'updated_at' => '2021-10-21 08:32:40',
            ),
            127 => 
            array (
                'id' => 128,
                'messageable_type' => 'App\\Teacher',
                'messageable_id' => 7,
                'message' => 'Porro culpa at dicta atque voluptas aperiam veritatis.',
                'seen' => false,
                'created_at' => '2021-10-21 08:32:40',
                'updated_at' => '2021-10-21 08:32:40',
            ),
            128 => 
            array (
                'id' => 129,
                'messageable_type' => 'App\\Teacher',
                'messageable_id' => 7,
                'message' => 'Et officiis suscipit est eum dolores ipsum non.',
                'seen' => false,
                'created_at' => '2021-10-21 08:32:40',
                'updated_at' => '2021-10-21 08:32:40',
            ),
            129 => 
            array (
                'id' => 130,
                'messageable_type' => 'App\\Teacher',
                'messageable_id' => 7,
                'message' => 'Alias magnam mollitia asperiores maiores.',
                'seen' => false,
                'created_at' => '2021-10-21 08:32:40',
                'updated_at' => '2021-10-21 08:32:40',
            ),
            130 => 
            array (
                'id' => 131,
                'messageable_type' => 'App\\Student',
                'messageable_id' => 7,
                'message' => 'Autem pariatur quo maxime.',
                'seen' => false,
                'created_at' => '2021-10-21 08:32:40',
                'updated_at' => '2021-10-21 08:32:40',
            ),
            131 => 
            array (
                'id' => 132,
                'messageable_type' => 'App\\Student',
                'messageable_id' => 7,
                'message' => 'Consequatur natus ut nostrum et.',
                'seen' => false,
                'created_at' => '2021-10-21 08:32:40',
                'updated_at' => '2021-10-21 08:32:40',
            ),
            132 => 
            array (
                'id' => 133,
                'messageable_type' => 'App\\Student',
                'messageable_id' => 7,
                'message' => 'Voluptatibus porro molestias quidem nam similique doloribus.',
                'seen' => false,
                'created_at' => '2021-10-21 08:32:40',
                'updated_at' => '2021-10-21 08:32:40',
            ),
            133 => 
            array (
                'id' => 134,
                'messageable_type' => 'App\\Student',
                'messageable_id' => 7,
                'message' => 'Vitae animi voluptates excepturi aspernatur repudiandae rerum quia.',
                'seen' => false,
                'created_at' => '2021-10-21 08:32:40',
                'updated_at' => '2021-10-21 08:32:40',
            ),
            134 => 
            array (
                'id' => 135,
                'messageable_type' => 'App\\Student',
                'messageable_id' => 7,
                'message' => 'Voluptates nam minus voluptas.',
                'seen' => false,
                'created_at' => '2021-10-21 08:32:40',
                'updated_at' => '2021-10-21 08:32:40',
            ),
            135 => 
            array (
                'id' => 136,
                'messageable_type' => 'App\\Student',
                'messageable_id' => 7,
                'message' => 'Ea magnam distinctio similique error laboriosam ipsum delectus.',
                'seen' => false,
                'created_at' => '2021-10-21 08:32:40',
                'updated_at' => '2021-10-21 08:32:40',
            ),
            136 => 
            array (
                'id' => 137,
                'messageable_type' => 'App\\Student',
                'messageable_id' => 7,
                'message' => 'Sequi cumque autem et.',
                'seen' => false,
                'created_at' => '2021-10-21 08:32:40',
                'updated_at' => '2021-10-21 08:32:40',
            ),
            137 => 
            array (
                'id' => 138,
                'messageable_type' => 'App\\Student',
                'messageable_id' => 7,
                'message' => 'Dolor libero et placeat suscipit ipsa.',
                'seen' => false,
                'created_at' => '2021-10-21 08:32:40',
                'updated_at' => '2021-10-21 08:32:40',
            ),
            138 => 
            array (
                'id' => 139,
                'messageable_type' => 'App\\Student',
                'messageable_id' => 7,
                'message' => 'Error et quo voluptas rerum nobis voluptas voluptate.',
                'seen' => false,
                'created_at' => '2021-10-21 08:32:40',
                'updated_at' => '2021-10-21 08:32:40',
            ),
            139 => 
            array (
                'id' => 140,
                'messageable_type' => 'App\\Student',
                'messageable_id' => 7,
                'message' => 'Est odio blanditiis culpa laudantium enim dolorum.',
                'seen' => false,
                'created_at' => '2021-10-21 08:32:40',
                'updated_at' => '2021-10-21 08:32:40',
            ),
            140 => 
            array (
                'id' => 141,
                'messageable_type' => 'App\\Teacher',
                'messageable_id' => 8,
                'message' => 'Repudiandae non maiores aut necessitatibus.',
                'seen' => false,
                'created_at' => '2021-10-21 08:32:40',
                'updated_at' => '2021-10-21 08:32:40',
            ),
            141 => 
            array (
                'id' => 142,
                'messageable_type' => 'App\\Teacher',
                'messageable_id' => 8,
                'message' => 'Quis iusto enim totam eius non voluptatum iusto.',
                'seen' => false,
                'created_at' => '2021-10-21 08:32:40',
                'updated_at' => '2021-10-21 08:32:40',
            ),
            142 => 
            array (
                'id' => 143,
                'messageable_type' => 'App\\Teacher',
                'messageable_id' => 8,
                'message' => 'Ducimus veniam incidunt quo itaque.',
                'seen' => false,
                'created_at' => '2021-10-21 08:32:40',
                'updated_at' => '2021-10-21 08:32:40',
            ),
            143 => 
            array (
                'id' => 144,
                'messageable_type' => 'App\\Teacher',
                'messageable_id' => 8,
                'message' => 'Nemo qui et dicta placeat perspiciatis.',
                'seen' => false,
                'created_at' => '2021-10-21 08:32:40',
                'updated_at' => '2021-10-21 08:32:40',
            ),
            144 => 
            array (
                'id' => 145,
                'messageable_type' => 'App\\Teacher',
                'messageable_id' => 8,
                'message' => 'Quidem enim aperiam quo vel ea.',
                'seen' => false,
                'created_at' => '2021-10-21 08:32:40',
                'updated_at' => '2021-10-21 08:32:40',
            ),
            145 => 
            array (
                'id' => 146,
                'messageable_type' => 'App\\Teacher',
                'messageable_id' => 8,
                'message' => 'Ducimus asperiores facilis earum deleniti ut qui ducimus.',
                'seen' => false,
                'created_at' => '2021-10-21 08:32:40',
                'updated_at' => '2021-10-21 08:32:40',
            ),
            146 => 
            array (
                'id' => 147,
                'messageable_type' => 'App\\Teacher',
                'messageable_id' => 8,
                'message' => 'Eum nisi ut ducimus molestiae maxime.',
                'seen' => false,
                'created_at' => '2021-10-21 08:32:40',
                'updated_at' => '2021-10-21 08:32:40',
            ),
            147 => 
            array (
                'id' => 148,
                'messageable_type' => 'App\\Teacher',
                'messageable_id' => 8,
                'message' => 'Necessitatibus quo aperiam eaque sequi aut et magnam ea.',
                'seen' => false,
                'created_at' => '2021-10-21 08:32:40',
                'updated_at' => '2021-10-21 08:32:40',
            ),
            148 => 
            array (
                'id' => 149,
                'messageable_type' => 'App\\Teacher',
                'messageable_id' => 8,
                'message' => 'Porro in quis laudantium corrupti minus molestiae.',
                'seen' => false,
                'created_at' => '2021-10-21 08:32:40',
                'updated_at' => '2021-10-21 08:32:40',
            ),
            149 => 
            array (
                'id' => 150,
                'messageable_type' => 'App\\Teacher',
                'messageable_id' => 8,
                'message' => 'Et recusandae ipsa totam id dolor.',
                'seen' => false,
                'created_at' => '2021-10-21 08:32:40',
                'updated_at' => '2021-10-21 08:32:40',
            ),
            150 => 
            array (
                'id' => 151,
                'messageable_type' => 'App\\Student',
                'messageable_id' => 8,
                'message' => 'Ex quo quia qui repellat rerum et.',
                'seen' => false,
                'created_at' => '2021-10-21 08:32:40',
                'updated_at' => '2021-10-21 08:32:40',
            ),
            151 => 
            array (
                'id' => 152,
                'messageable_type' => 'App\\Student',
                'messageable_id' => 8,
                'message' => 'Dolore autem in et numquam.',
                'seen' => false,
                'created_at' => '2021-10-21 08:32:40',
                'updated_at' => '2021-10-21 08:32:40',
            ),
            152 => 
            array (
                'id' => 153,
                'messageable_type' => 'App\\Student',
                'messageable_id' => 8,
                'message' => 'Exercitationem illum numquam ratione aut nostrum illum ex.',
                'seen' => false,
                'created_at' => '2021-10-21 08:32:40',
                'updated_at' => '2021-10-21 08:32:40',
            ),
            153 => 
            array (
                'id' => 154,
                'messageable_type' => 'App\\Student',
                'messageable_id' => 8,
                'message' => 'Cum enim libero et distinctio.',
                'seen' => false,
                'created_at' => '2021-10-21 08:32:40',
                'updated_at' => '2021-10-21 08:32:40',
            ),
            154 => 
            array (
                'id' => 155,
                'messageable_type' => 'App\\Student',
                'messageable_id' => 8,
                'message' => 'Alias at quia occaecati pariatur ut.',
                'seen' => false,
                'created_at' => '2021-10-21 08:32:40',
                'updated_at' => '2021-10-21 08:32:40',
            ),
            155 => 
            array (
                'id' => 156,
                'messageable_type' => 'App\\Student',
                'messageable_id' => 8,
                'message' => 'Nostrum nihil sunt voluptatem tempore ipsum velit.',
                'seen' => false,
                'created_at' => '2021-10-21 08:32:40',
                'updated_at' => '2021-10-21 08:32:40',
            ),
            156 => 
            array (
                'id' => 157,
                'messageable_type' => 'App\\Student',
                'messageable_id' => 8,
                'message' => 'Adipisci est enim dolor tempora.',
                'seen' => false,
                'created_at' => '2021-10-21 08:32:40',
                'updated_at' => '2021-10-21 08:32:40',
            ),
            157 => 
            array (
                'id' => 158,
                'messageable_type' => 'App\\Student',
                'messageable_id' => 8,
                'message' => 'Ipsa eligendi rerum suscipit recusandae voluptatem temporibus cupiditate.',
                'seen' => false,
                'created_at' => '2021-10-21 08:32:40',
                'updated_at' => '2021-10-21 08:32:40',
            ),
            158 => 
            array (
                'id' => 159,
                'messageable_type' => 'App\\Student',
                'messageable_id' => 8,
                'message' => 'Ab eum delectus et soluta qui.',
                'seen' => false,
                'created_at' => '2021-10-21 08:32:40',
                'updated_at' => '2021-10-21 08:32:40',
            ),
            159 => 
            array (
                'id' => 160,
                'messageable_type' => 'App\\Student',
                'messageable_id' => 8,
                'message' => 'Sed asperiores enim sapiente voluptatem.',
                'seen' => false,
                'created_at' => '2021-10-21 08:32:40',
                'updated_at' => '2021-10-21 08:32:40',
            ),
            160 => 
            array (
                'id' => 161,
                'messageable_type' => 'App\\Teacher',
                'messageable_id' => 9,
                'message' => 'Fuga ut nesciunt eos labore quo aut minus.',
                'seen' => false,
                'created_at' => '2021-10-21 08:32:40',
                'updated_at' => '2021-10-21 08:32:40',
            ),
            161 => 
            array (
                'id' => 162,
                'messageable_type' => 'App\\Teacher',
                'messageable_id' => 9,
                'message' => 'Ipsa aut eos et.',
                'seen' => false,
                'created_at' => '2021-10-21 08:32:40',
                'updated_at' => '2021-10-21 08:32:40',
            ),
            162 => 
            array (
                'id' => 163,
                'messageable_type' => 'App\\Teacher',
                'messageable_id' => 9,
                'message' => 'Deserunt atque repellat perspiciatis enim est vel quisquam.',
                'seen' => false,
                'created_at' => '2021-10-21 08:32:40',
                'updated_at' => '2021-10-21 08:32:40',
            ),
            163 => 
            array (
                'id' => 164,
                'messageable_type' => 'App\\Teacher',
                'messageable_id' => 9,
                'message' => 'Iste est molestias id ut consequuntur veniam possimus.',
                'seen' => false,
                'created_at' => '2021-10-21 08:32:40',
                'updated_at' => '2021-10-21 08:32:40',
            ),
            164 => 
            array (
                'id' => 165,
                'messageable_type' => 'App\\Teacher',
                'messageable_id' => 9,
                'message' => 'Officia ut nisi repellendus saepe sed iusto.',
                'seen' => false,
                'created_at' => '2021-10-21 08:32:40',
                'updated_at' => '2021-10-21 08:32:40',
            ),
            165 => 
            array (
                'id' => 166,
                'messageable_type' => 'App\\Teacher',
                'messageable_id' => 9,
                'message' => 'Aut illum sint aperiam ut quisquam.',
                'seen' => false,
                'created_at' => '2021-10-21 08:32:40',
                'updated_at' => '2021-10-21 08:32:40',
            ),
            166 => 
            array (
                'id' => 167,
                'messageable_type' => 'App\\Teacher',
                'messageable_id' => 9,
                'message' => 'Repellendus tenetur doloremque nulla vel sit et.',
                'seen' => false,
                'created_at' => '2021-10-21 08:32:40',
                'updated_at' => '2021-10-21 08:32:40',
            ),
            167 => 
            array (
                'id' => 168,
                'messageable_type' => 'App\\Teacher',
                'messageable_id' => 9,
                'message' => 'Sunt omnis doloremque et eum qui nulla.',
                'seen' => false,
                'created_at' => '2021-10-21 08:32:40',
                'updated_at' => '2021-10-21 08:32:40',
            ),
            168 => 
            array (
                'id' => 169,
                'messageable_type' => 'App\\Teacher',
                'messageable_id' => 9,
                'message' => 'Voluptas incidunt quis dolores eum ratione aut quos.',
                'seen' => false,
                'created_at' => '2021-10-21 08:32:40',
                'updated_at' => '2021-10-21 08:32:40',
            ),
            169 => 
            array (
                'id' => 170,
                'messageable_type' => 'App\\Teacher',
                'messageable_id' => 9,
                'message' => 'Ducimus explicabo qui et magnam.',
                'seen' => false,
                'created_at' => '2021-10-21 08:32:40',
                'updated_at' => '2021-10-21 08:32:40',
            ),
            170 => 
            array (
                'id' => 171,
                'messageable_type' => 'App\\Student',
                'messageable_id' => 9,
                'message' => 'Voluptas tenetur fugit iste nisi ea.',
                'seen' => false,
                'created_at' => '2021-10-21 08:32:40',
                'updated_at' => '2021-10-21 08:32:40',
            ),
            171 => 
            array (
                'id' => 172,
                'messageable_type' => 'App\\Student',
                'messageable_id' => 9,
                'message' => 'Consequatur mollitia quo ut aut dolor deserunt qui.',
                'seen' => false,
                'created_at' => '2021-10-21 08:32:40',
                'updated_at' => '2021-10-21 08:32:40',
            ),
            172 => 
            array (
                'id' => 173,
                'messageable_type' => 'App\\Student',
                'messageable_id' => 9,
                'message' => 'Est excepturi et velit alias iusto.',
                'seen' => false,
                'created_at' => '2021-10-21 08:32:40',
                'updated_at' => '2021-10-21 08:32:40',
            ),
            173 => 
            array (
                'id' => 174,
                'messageable_type' => 'App\\Student',
                'messageable_id' => 9,
                'message' => 'Eaque officia error nulla dolores perspiciatis officia enim.',
                'seen' => false,
                'created_at' => '2021-10-21 08:32:40',
                'updated_at' => '2021-10-21 08:32:40',
            ),
            174 => 
            array (
                'id' => 175,
                'messageable_type' => 'App\\Student',
                'messageable_id' => 9,
                'message' => 'A laboriosam perspiciatis quasi est.',
                'seen' => false,
                'created_at' => '2021-10-21 08:32:40',
                'updated_at' => '2021-10-21 08:32:40',
            ),
            175 => 
            array (
                'id' => 176,
                'messageable_type' => 'App\\Student',
                'messageable_id' => 9,
                'message' => 'Voluptatem et sit commodi facilis.',
                'seen' => false,
                'created_at' => '2021-10-21 08:32:40',
                'updated_at' => '2021-10-21 08:32:40',
            ),
            176 => 
            array (
                'id' => 177,
                'messageable_type' => 'App\\Student',
                'messageable_id' => 9,
                'message' => 'Ea hic incidunt et qui aut.',
                'seen' => false,
                'created_at' => '2021-10-21 08:32:40',
                'updated_at' => '2021-10-21 08:32:40',
            ),
            177 => 
            array (
                'id' => 178,
                'messageable_type' => 'App\\Student',
                'messageable_id' => 9,
                'message' => 'Sapiente et rem hic qui quis dolorem neque tenetur.',
                'seen' => false,
                'created_at' => '2021-10-21 08:32:40',
                'updated_at' => '2021-10-21 08:32:40',
            ),
            178 => 
            array (
                'id' => 179,
                'messageable_type' => 'App\\Student',
                'messageable_id' => 9,
                'message' => 'Dolores eos enim doloribus voluptas adipisci illo debitis.',
                'seen' => false,
                'created_at' => '2021-10-21 08:32:40',
                'updated_at' => '2021-10-21 08:32:40',
            ),
            179 => 
            array (
                'id' => 180,
                'messageable_type' => 'App\\Student',
                'messageable_id' => 9,
                'message' => 'Voluptas unde aliquid repellendus aut earum.',
                'seen' => false,
                'created_at' => '2021-10-21 08:32:40',
                'updated_at' => '2021-10-21 08:32:40',
            ),
            180 => 
            array (
                'id' => 181,
                'messageable_type' => 'App\\Teacher',
                'messageable_id' => 10,
                'message' => 'Ut libero enim omnis quo voluptatem et voluptatem.',
                'seen' => false,
                'created_at' => '2021-10-21 08:32:40',
                'updated_at' => '2021-10-21 08:32:40',
            ),
            181 => 
            array (
                'id' => 182,
                'messageable_type' => 'App\\Teacher',
                'messageable_id' => 10,
                'message' => 'Illum sed ex quaerat molestiae optio placeat tempore.',
                'seen' => false,
                'created_at' => '2021-10-21 08:32:40',
                'updated_at' => '2021-10-21 08:32:40',
            ),
            182 => 
            array (
                'id' => 183,
                'messageable_type' => 'App\\Teacher',
                'messageable_id' => 10,
                'message' => 'Et itaque repellat sint sunt soluta modi accusamus.',
                'seen' => false,
                'created_at' => '2021-10-21 08:32:40',
                'updated_at' => '2021-10-21 08:32:40',
            ),
            183 => 
            array (
                'id' => 184,
                'messageable_type' => 'App\\Teacher',
                'messageable_id' => 10,
                'message' => 'Laborum est corrupti nobis corrupti suscipit ullam.',
                'seen' => false,
                'created_at' => '2021-10-21 08:32:40',
                'updated_at' => '2021-10-21 08:32:40',
            ),
            184 => 
            array (
                'id' => 185,
                'messageable_type' => 'App\\Teacher',
                'messageable_id' => 10,
                'message' => 'Eos consectetur quis sunt hic aut.',
                'seen' => false,
                'created_at' => '2021-10-21 08:32:40',
                'updated_at' => '2021-10-21 08:32:40',
            ),
            185 => 
            array (
                'id' => 186,
                'messageable_type' => 'App\\Teacher',
                'messageable_id' => 10,
                'message' => 'Mollitia sit id provident quod porro hic.',
                'seen' => false,
                'created_at' => '2021-10-21 08:32:40',
                'updated_at' => '2021-10-21 08:32:40',
            ),
            186 => 
            array (
                'id' => 187,
                'messageable_type' => 'App\\Teacher',
                'messageable_id' => 10,
                'message' => 'Eligendi sed tempora doloremque repellendus qui quod quam mollitia.',
                'seen' => false,
                'created_at' => '2021-10-21 08:32:40',
                'updated_at' => '2021-10-21 08:32:40',
            ),
            187 => 
            array (
                'id' => 188,
                'messageable_type' => 'App\\Teacher',
                'messageable_id' => 10,
                'message' => 'Possimus fugiat sit harum ipsa.',
                'seen' => false,
                'created_at' => '2021-10-21 08:32:40',
                'updated_at' => '2021-10-21 08:32:40',
            ),
            188 => 
            array (
                'id' => 189,
                'messageable_type' => 'App\\Teacher',
                'messageable_id' => 10,
                'message' => 'Quo adipisci et adipisci cupiditate qui ut.',
                'seen' => false,
                'created_at' => '2021-10-21 08:32:40',
                'updated_at' => '2021-10-21 08:32:40',
            ),
            189 => 
            array (
                'id' => 190,
                'messageable_type' => 'App\\Teacher',
                'messageable_id' => 10,
                'message' => 'Modi quis ea exercitationem quos vitae aliquam sed.',
                'seen' => false,
                'created_at' => '2021-10-21 08:32:40',
                'updated_at' => '2021-10-21 08:32:40',
            ),
            190 => 
            array (
                'id' => 191,
                'messageable_type' => 'App\\Student',
                'messageable_id' => 10,
                'message' => 'Sit qui est nihil ab id cumque placeat corrupti.',
                'seen' => false,
                'created_at' => '2021-10-21 08:32:40',
                'updated_at' => '2021-10-21 08:32:40',
            ),
            191 => 
            array (
                'id' => 192,
                'messageable_type' => 'App\\Student',
                'messageable_id' => 10,
                'message' => 'Autem unde ut ut voluptatem qui.',
                'seen' => false,
                'created_at' => '2021-10-21 08:32:40',
                'updated_at' => '2021-10-21 08:32:40',
            ),
            192 => 
            array (
                'id' => 193,
                'messageable_type' => 'App\\Student',
                'messageable_id' => 10,
                'message' => 'Dolorem voluptates molestias et atque non sed.',
                'seen' => false,
                'created_at' => '2021-10-21 08:32:40',
                'updated_at' => '2021-10-21 08:32:40',
            ),
            193 => 
            array (
                'id' => 194,
                'messageable_type' => 'App\\Student',
                'messageable_id' => 10,
                'message' => 'Ad vitae delectus a nisi corrupti laborum.',
                'seen' => false,
                'created_at' => '2021-10-21 08:32:40',
                'updated_at' => '2021-10-21 08:32:40',
            ),
            194 => 
            array (
                'id' => 195,
                'messageable_type' => 'App\\Student',
                'messageable_id' => 10,
                'message' => 'Tempora mollitia et nobis illum beatae.',
                'seen' => false,
                'created_at' => '2021-10-21 08:32:40',
                'updated_at' => '2021-10-21 08:32:40',
            ),
            195 => 
            array (
                'id' => 196,
                'messageable_type' => 'App\\Student',
                'messageable_id' => 10,
                'message' => 'Molestiae voluptatem ut laboriosam vitae.',
                'seen' => false,
                'created_at' => '2021-10-21 08:32:40',
                'updated_at' => '2021-10-21 08:32:40',
            ),
            196 => 
            array (
                'id' => 197,
                'messageable_type' => 'App\\Student',
                'messageable_id' => 10,
                'message' => 'Nihil est nesciunt rerum placeat.',
                'seen' => false,
                'created_at' => '2021-10-21 08:32:40',
                'updated_at' => '2021-10-21 08:32:40',
            ),
            197 => 
            array (
                'id' => 198,
                'messageable_type' => 'App\\Student',
                'messageable_id' => 10,
                'message' => 'Reprehenderit perspiciatis soluta similique similique ullam.',
                'seen' => false,
                'created_at' => '2021-10-21 08:32:40',
                'updated_at' => '2021-10-21 08:32:40',
            ),
            198 => 
            array (
                'id' => 199,
                'messageable_type' => 'App\\Student',
                'messageable_id' => 10,
                'message' => 'Omnis quisquam eligendi a quibusdam consequuntur necessitatibus labore.',
                'seen' => false,
                'created_at' => '2021-10-21 08:32:40',
                'updated_at' => '2021-10-21 08:32:40',
            ),
            199 => 
            array (
                'id' => 200,
                'messageable_type' => 'App\\Student',
                'messageable_id' => 10,
                'message' => 'Explicabo aliquam inventore harum voluptatum sequi vero in.',
                'seen' => false,
                'created_at' => '2021-10-21 08:32:40',
                'updated_at' => '2021-10-21 08:32:40',
            ),
        ));
        
        
    }
}