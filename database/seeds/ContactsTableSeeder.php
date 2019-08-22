<?php

use Illuminate\Database\Seeder;

class ContactsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = factory(App\User::class)->create();
        $this->command->info('User created!');
        gc_collect_cycles();

        factory(App\Contact::class, 45)->create(['user_id' => $user->id]);
    }
}
