<?php

namespace Database\Seeders;

use App\Models\HavingClass;
use App\Models\Kelas;
use App\Models\Quiz;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        User::insert([
            [
                'name' => 'Dikhi Achmad Dani',
                'telp' => '089424535234',
                'jenis_kelamin' => 'L',
                'email' => 'dikia656@gmail.com',
                'password' => Hash::make('BetterOne'),
                'status' => 'admin',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Ratu',
                'telp' => '08224535234',
                'jenis_kelamin' => 'P',
                'email' => 'fed2@gmail.com',
                'password' => Hash::make('BetterOne'),
                'status' => 'pengajar',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'alifia',
                'telp' => '08922535234',
                'jenis_kelamin' => 'P',
                'email' => 'fed@gmail.com',
                'password' => Hash::make('BetterOne'),
                'status' => 'user',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);

        Kelas::insert([
            [
                'gambar' => 'banner.jpg',
                'nama_kelas' => 'Belajar PHP untuk Pemula',
                'deskripsi' => 'Berkenalan dengan php, bahasa program yang sangat populer yang digunakan pada bagian back-end...',
                'user_id' => '2',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'gambar' => 'banner.jpg',
                'nama_kelas' => 'Belajar PHP untuk Menengah',
                'deskripsi' => 'Berkenalan dengan php, bahasa program yang sangat populer yang digunakan pada bagian back-end...',
                'user_id' => '2',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'gambar' => 'banner.jpg',
                'nama_kelas' => 'Belajar PHP Advance',
                'deskripsi' => 'Berkenalan dengan php, bahasa program yang sangat populer yang digunakan pada bagian back-end...',
                'user_id' => '2',
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);

        Quiz::insert([
            [
                'pertanyaan' => 'sistem penyimpanan informasi data yang besar juga kompleks ?',
                'pilihan_1' => 'server',
                'pilihan_2' => 'hard disk',
                'pilihan_3' => 'RAM',
                'pilihan_4' => 'cloud',
                'jawaban_benar' => 'server',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'pertanyaan' => 'yang manakah media penyimpanan digital ?',
                'pilihan_1' => 'server',
                'pilihan_2' => 'dompet',
                'pilihan_3' => 'coin',
                'pilihan_4' => 'sandal',
                'jawaban_benar' => 'server',
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);
    }
}