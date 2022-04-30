<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class TodoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('todos')->insert([
            'name'=>"Todo",
            'title'=>'初めてのTodo',
            'body'=>'たのしみたのしみたのしみたのしみ',
        ]);
    }
}
