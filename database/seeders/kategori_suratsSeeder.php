<?php

namespace Database\Seeders;
use App\Models\kategori_surats;
use Illuminate\Database\Seeder;

class kategori_suratsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $kategori1= new kategori_surats();
        $kategori1->id_kategori ='123';
        $kategori1->nama_kategori='lamaran';
        $kategori1->keterangan='Ini merupakan surat lamaran';
        $kategori1->save();



    }
}
