<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    private $tables = [
      'list tables here'
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        if (app()->environment() == 'production') {
            die("Not in production\n");
        }

        $this->cleanup();

        //$this->call(your_tables_here);

        Model::reguard();
    }

    /**
     * Clear out database tables
     *
     * @return void
     */
    private function cleanup()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0;');

        foreach($this->tables as $table) {
            DB::table($table)->truncate();
        }

        DB::statement('SET FOREIGN_KEY_CHECKS = 1;');
    }
}
