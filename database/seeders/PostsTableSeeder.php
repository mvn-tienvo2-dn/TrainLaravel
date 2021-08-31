<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$data=[
    		[
    			'content'=>'Post1',
    			'user_id'=>'2'
    		],
    		[
    			'content'=>'Post2',
    			'user_id'=>'1'
    		],
    		[
    			'content'=>'Post3',
    			'user_id'=>'1'
    		],
    		[
    			'content'=>'Post4',
    			'user_id'=>'2'
    		],
    		[
    			'content'=>'Post5',
    			'user_id'=>'3'
    		],
    		[
    			'content'=>'Post6',
    			'user_id'=>'4'
    		],					
    	];
    	DB::table('posts')->insert($data);
    }
}
