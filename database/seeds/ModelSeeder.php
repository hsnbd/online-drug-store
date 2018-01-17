<?php

use Illuminate\Database\Seeder;
use App\Disease;
use App\User;
use App\Unit;
use App\Power;
use App\Rating;
use App\Comment;
use App\Remedy;
use App\Generic;
use App\Category;
use App\Medicine;
use App\Shipping;
use App\Supplier;
use App\WatchList;
use App\SaleDetail;
use App\SubCategory;

class ModelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Category::class, 10)->create();
        factory(SubCategory::class, 30)->create();
        factory(Disease::class, 10)->create();
        factory(Generic::class, 10)->create();
        factory(Power::class, 10)->create();
        factory(Unit::class, 10)->create();
        factory(Medicine::class, 300)->create();
        factory(User::class, 10)->create();
        // factory(Rating::class, 50)->create();
        // factory(Comment::class, 30)->create();
        factory(WatchList::class, 20)->create();
        factory(Remedy::class, 80)->create();
        factory(Shipping::class, 30)->create();
        factory(SaleDetail::class, 40)->create();
        factory(Supplier::class, 40)->create();
    }
}
