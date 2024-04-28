<?php

namespace Database\Seeders;


use App\Models\DocumentUser;
use App\Models\DocumentVersion;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use \Illuminate\Database\Console\Seeds\WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(300)
            ->state(new Sequence(
                ['status' => \App\Enums\UserStatus::Active->value],
                ['status' => \App\Enums\UserStatus::Inactive->value],
            ))
            ->create();

        \App\Models\User::factory()
            ->create([
                'name' => 'Super Admin',
                'username' => 'superadmin',
                'email' => 'superadmin@gmail.com',
                'password' => 'superadmin'
            ]);

        \App\Models\Document::factory(500)
            ->state(new Sequence(
                ['status' => \App\Enums\DocumentStatus::Active->value],
                ['status' => \App\Enums\DocumentStatus::Inactive->value],
            ))
            ->has(DocumentVersion::factory(5)
                ->sequence(fn(Sequence $sequence) => ['version' => $sequence->index]),
                'versions')
//            ->has(DocumentUser::factory(7), 'users')
            ->create();

        \App\Models\Document::factory(700)
            ->state(new Sequence(
                ['status' => \App\Enums\DocumentStatus::Active->value],
                ['status' => \App\Enums\DocumentStatus::Inactive->value],
            ))
            ->has(DocumentVersion::factory(5)
                ->sequence(fn(Sequence $sequence) => ['version' => $sequence->index]),
                'versions')
//            ->has(DocumentUser::factory(7), 'users')
            ->create();
    }
}
