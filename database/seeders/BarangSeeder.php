<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $barang = array(
            array('PRD001', 'Indomie', 'Makanan', 3000, 100),
            array('PRD002', 'Pocari Sweat', 'Minuman', 6000, 50),
            array('PRD003', 'Silverqueen', 'Snack', 12500, 45),
            array('PRD004', 'Sarden Goreng', 'Makanan', 10300, 30),
            array('PRD005', 'Kacang Koro', 'Snack', 7900, 45),
            array('PRD006', 'Piatos', 'Snack', 7500, 200),
            array('PRD007', 'Twistko', 'Snack', 5900, 150),
            array('PRD008', 'Tango Coklat', 'Snack', 23400, 25),
            array('PRD009', 'Susu Kental Manis', 'Minuman', 9000, 75),
            array('PRD010', 'Susu Ibu Hamil', 'Minuman', 9600, 40),
            array('PRD011', 'Coconnut Water', 'Minuman', 7500, 125),
            array('PRD012', 'Kopi Kapal Api', 'Minuman', 10000, 250),
            array('PRD013', 'Bakmi Mewah', 'Makanan', 11000, 55),
            array('PRD014', 'Bihun Beras', 'Makanan', 8600, 20),
            array('PRD015', 'La Fonte Spaghetti', 'Makanan', 8800, 60),
            array('PRD016', 'Masker 5Ply', 'Kebutuhan', 10900, 100),
            array('PRD017', 'Hand Sanitizer', 'Kebutuhan', 11100, 250),
            array('PRD018', 'Shampoo Hijab', 'Kebutuhan', 11500, 50),
            array('PRD019', 'Pisau Cukur', 'Kebutuhan', 8500, 35),
            array('PRD020', 'Sabun Muka Garnier', 'Kebutuhan', 24700, 150)
        );

        for($i = 0; $i < 20; $i++){
            DB::table('barangs')->insert([
                'kode_barang'       => $barang[$i][0],
                'nama_barang'       => $barang[$i][1],
                'kategori_barang'   => $barang[$i][2],
                'harga'             => $barang[$i][3],
                'qty'               => $barang[$i][4]
            ]);
        }
    }
}
