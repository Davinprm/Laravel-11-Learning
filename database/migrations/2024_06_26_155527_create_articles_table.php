<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->string('title');

            // $table->unsignedBigInteger('author_id');


            // id on users table has ID which same as unsignedBigInterger so we have to match it to make author id become foreign key
            // $table->foreign('author_id')->references('id')->on('users');
            // connect author id to id on users's table

            // same like code format above
            $table->foreignId('author_id')->constrained(
                // create foreign key column on curent id
                table: 'users',
                // specifies d table that d foreign key in the current table should reference to users table.
                indexName: 'article_author_id'
                // specifies name of d index that will be created for d foreign key
            );

            $table->string('slug')->unique();
            // unique func to make slug key has not be d same with others
            $table->text('article');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('articles');
    }
};