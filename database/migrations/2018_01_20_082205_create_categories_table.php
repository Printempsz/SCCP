<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('categories');
            $table->integer('type');
        });
        DB::table('categories')->insert([
           [
               'categories' => '手机相关',
               'type' => '1',
           ],
            [
                'categories' => '电脑相关',
                'type' => '1',
            ],
            [
                'categories' => '相机相关',
                'type' => '1',
            ],
            [
                'categories' => '平板电脑相关',
                'type' => '1',
            ],
            [
                'categories' => '音频相关',
                'type' => '1',
            ],
            [
                'categories' => '其他数码产品',
                'type' => '1',
            ],
            [
                'categories' => '男鞋',
                'type' => '2',
            ],
            [
                'categories' => '女鞋',
                'type' => '2',
            ],
            [
                'categories' => '男装',
                'type' => '2',
            ],
            [
                'categories' => '女装',
                'type' => '2',
            ],
            [
                'categories' => '其他男服饰',
                'type' => '2',
            ],
            [
                'categories' => '其他女服饰',
                'type' => '2',
            ]
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categories');
    }
}
