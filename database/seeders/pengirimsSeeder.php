<?php

namespace Database\Seeders;
use App\Models\pengirims;
use Illuminate\Database\Seeder;

class pengirimsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pengirim1 = new pengirims();
        $pengirim1->id_supplier = '12345';
        $pengirim1->nama_pengirim='Mega';
        $pengirim1->alamat_pengirim='Jln.Muhammad Meang';
        $pengirim1->nama_instansi='Cerdrawasih';
        $pengirim1->save();

        $pengirim2 = new pengirims();
        $pengirim2->id_supplier = '1234567';
        $pengirim2->nama_pengirim='Jesi';
        $pengirim2->alamat_pengirim='Jln.Melati';
        $pengirim2->nama_instansi='Undana';
        $pengirim2->save();


    }
}
