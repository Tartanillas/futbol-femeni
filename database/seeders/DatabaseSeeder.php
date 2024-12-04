<?php
namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Llamar otros seeders
        $this->call([
            EstadisSeeder::class,
            EquipsSeeder::class,
        ]);

        // Crear usuario único o actualizar si ya existe
        User::updateOrCreate(
            ['email' => 'test@example.com'], // Buscar por este email
            [
                'name' => 'Test User',
                'password' => bcrypt('password'), // Genera una contraseña segura
            ]
        );
    }
}
