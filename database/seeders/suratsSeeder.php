<?php

namespace Database\Seeders;
use App\Models\surats;
use Illuminate\Database\Seeder;

class suratsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $surat1 = new surats();
        $surat1->id_surat='01';
        $surat1->nomor_surat='786/BI/2021';
        $surat1->judul_surat='Surat Lamaran1';
        $surat1->id_kategori='123';
        $surat1->id_supplier='1234567';
        $surat1->save();

        $surat2 = new surats();
        $surat2->id_surat='02';
        $surat2->nomor_surat='787/BI/2021';
        $surat2->judul_surat='Surat Lamaran2';
        $surat2->id_kategori='123';
        $surat2->id_supplier='12345';
        $surat2->save();
    }
}
