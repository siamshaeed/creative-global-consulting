<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = [
            [
                'id'            => 1,
                'name'          => 'Story',
                'status'        => 1,
                'created_at'    => '2022-10-16 13:52:12',
                'updated_at'    => '2022-10-16 13:52:12',
            ],
            [
                'id'            => 2,
                'name'          => 'poem',
                'status'        => 0,
                'created_at'    => '2022-10-16 13:52:12',
                'updated_at'    => '2022-10-16 13:52:12',
            ],
            [
                'id'            => 3,
                'name'          => 'History',
                'status'        => 0,
                'created_at'    => '2022-10-16 13:52:12',
                'updated_at'    => '2022-10-16 13:52:12',
            ],
            [
                'id'            => 4,
                'name'          => 'News',
                'status'        => 1,
                'created_at'    => '2022-10-16 13:52:12',
                'updated_at'    => '2022-10-16 13:52:12',
            ],
        ];
        Category::insert($category);
    }
}
