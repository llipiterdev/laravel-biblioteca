<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->truncate_tables([
            'rol',
            'permiso'
        ]);
        // $this->call(UsersTableSeeder::class);
        $this->call(rolTableSeeder::class);
        $this->call(PermisoTableSeeder::class);

    }

    protected function truncate_tables(array $tables)
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0;');
        foreach ($tables as $table) {
            DB::table($table)->truncate();
        }
        DB::statement('SET FOREIGN_KEY_CHECKS = 1;');
    }
}
