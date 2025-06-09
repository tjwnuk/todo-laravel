<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class TodoItemsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $now = Carbon::now();

        DB::table('todo_items')->insert([
            [
                'user_id' => 1,
                'name' => 'Zaplanuj wakacje',
                'description' => 'Zarezerwuj hotel i bilety lotnicze na urlop',
                'priority' => 'medium',
                'status' => 'to-do',
                'deadline' => '2025-06-03',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'user_id' => 1,
                'name' => 'Oddaj raport kwartalny',
                'description' => 'Przygotuj i prześlij raport do działu finansów',
                'priority' => 'high',
                'status' => 'in progress',
                'deadline' => '2025-06-05',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'user_id' => 1,
                'name' => 'Przegląd samochodu',
                'description' => 'Umów przegląd techniczny i wymianę oleju',
                'priority' => 'medium',
                'status' => 'to-do',
                'deadline' => '2025-06-07',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'user_id' => 1,
                'name' => 'Spotkanie z klientem',
                'description' => 'Spotkanie online z klientem ABC w sprawie nowego projektu',
                'priority' => 'high',
                'status' => 'to-do',
                'deadline' => '2025-06-10',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'user_id' => 1,
                'name' => 'Zaktualizuj CV',
                'description' => 'Dodaj nowe doświadczenia zawodowe i projekty',
                'priority' => 'low',
                'status' => 'to-do',
                'deadline' => '2025-06-12',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'user_id' => 1,
                'name' => 'Zakupy domowe',
                'description' => 'Kup artykuły spożywcze i środki czystości',
                'priority' => 'low',
                'status' => 'done',
                'deadline' => '2025-06-14',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'user_id' => 1,
                'name' => 'Trening biegowy',
                'description' => 'Planowany bieg 10 km w parku',
                'priority' => 'medium',
                'status' => 'to-do',
                'deadline' => '2025-06-16',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'user_id' => 1,
                'name' => 'Webinar branżowy',
                'description' => 'Udział w webinarze o nowych technologiach IT',
                'priority' => 'medium',
                'status' => 'to-do',
                'deadline' => '2025-06-20',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'user_id' => 1,
                'name' => 'Zakończ projekt X',
                'description' => 'Dokończ implementację i testy końcowe',
                'priority' => 'high',
                'status' => 'in progress',
                'deadline' => '2025-06-24',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'user_id' => 1,
                'name' => 'Wizyta u dentysty',
                'description' => 'Kontrola i czyszczenie zębów',
                'priority' => 'medium',
                'status' => 'to-do',
                'deadline' => '2025-06-28',
                'created_at' => $now,
                'updated_at' => $now,
            ],
        ]);
    }
}
