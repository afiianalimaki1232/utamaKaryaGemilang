<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BerandaController extends Controller
{
        public function index() {
        $bahan = [
            ['title' => 'Proyek 1', 'category' => 'Rumah', 'image' => 'proyek19.webp'],
            ['title' => 'Proyek 2', 'category' => 'Rumah', 'image' => 'proyek20.jpeg'],
            ['title' => 'Proyek 3', 'category' => 'Rumah', 'image' => 'proyek21.jpeg'],
            ['title' => 'Proyek 4', 'category' => 'Rumah', 'image' => 'proyek22.jpeg'],
            ['title' => 'Proyek 5', 'category' => 'Rumah', 'image' => 'proyek23.jpeg'],
            ['title' => 'Proyek 6', 'category' => 'Rumah', 'image' => 'proyek24.webp'],
            ['title' => 'Proyek 7', 'category' => 'Rumah', 'image' => 'proyek25.jpg'],
            ['title' => 'Proyek 8', 'category' => 'Rumah', 'image' => 'proyek26.jpg'],
            ['title' => 'Proyek 10', 'category' => 'Rumah', 'image' => 'proyek27.jpg'],
            ['title' => 'Proyek 12', 'category' => 'Rumah', 'image' => 'proyek29.jpg'],
            ['title' => 'Proyek 13', 'category' => 'Rumah', 'image' => 'proyek30.jpg'],
            ['title' => 'Proyek 14', 'category' => 'Rumah', 'image' => 'proyek31.jpeg'],
            ['title' => 'Proyek 15', 'category' => 'Rumah', 'image' => 'proyek32.jpg'],
            ['title' => 'Proyek 2', 'category' => 'Rumah', 'image' => 'proyek2.jpeg'],
            ['title' => 'Proyek 3', 'category' => 'Rumah', 'image' => 'proyek3.jpeg'],
            ['title' => 'Proyek 4', 'category' => 'Rumah', 'image' => 'proyek10.jpg'],
            ['title' => 'Proyek 7', 'category' => 'Rumah', 'image' => 'proyek4.jpeg'],
            ['title' => 'Proyek 8', 'category' => 'Rumah', 'image' => 'proyek5.jpeg'],
            ['title' => 'Proyek 9', 'category' => 'Rumah', 'image' => 'proyek6.jpeg'],
            ['title' => 'Proyek 10', 'category' => 'Rumah', 'image' => 'proyek13.jpg'],
            ['title' => 'Proyek 13', 'category' => 'Rumah', 'image' => 'proyek16.jpg'], 
            ['title' => 'Proyek 14', 'category' => 'Rumah', 'image' => 'proyek8.jpeg'],
            ['title' => 'Proyek 15', 'category' => 'Rumah', 'image' => 'proyek9.jpeg'],
            ['title' => 'Proyek 2', 'category' => 'Rumah', 'image' => 'proyek33.jpg'],
            ['title' => 'Proyek 3', 'category' => 'Rumah', 'image' => 'proyek34.webp'],
            ['title' => 'Proyek 4', 'category' => 'Rumah', 'image' => 'proyek35.webp'],
            ['title' => 'Proyek 7', 'category' => 'Rumah', 'image' => 'proyek36.jpeg'],
            ['title' => 'Proyek 8', 'category' => 'Rumah', 'image' => 'proyek37.jpeg'],
            ['title' => 'Proyek 9', 'category' => 'Rumah', 'image' => 'proyek39.jpeg'],
            ['title' => 'Proyek 10', 'category' => 'Rumah', 'image' => 'proyek40.jpg'],
        ];
        
        return view('welcome', compact('bahan'));
    }
    public function layanan() {
        return view('layanan');
    }
    public function tentang() {
        return view('tentang');
    }
    public function produk() {
        $bahan = [
            ['title' => 'Railling Tangga Kaca','harga' => 'Rp. 1.799.000', 'category' => 'Railling', 'image' => 'railing-tangga.jpg'],
            ['title' => 'Kanopi Spandek Baja Ringan', 'harga' => 'Rp. 350.000', 'category' => 'Kanopi', 'image' => 'Kanopi-Spandek-Baja Ringan2.jpg'],
            ['title' => 'Kitchen Set HPL', 'harga' => 'Rp. 1.950.000', 'category' => 'Kitchen', 'image' => 'kitchenSetHPL.jpg'],
            ['title' => 'Kitchen Set ACP', 'harga' => 'Rp. 1.499.000', 'category' => 'Kitchen', 'image' => 'kitchenSetACP.jpeg'],
            ['title' => 'Pagar', 'harga' => 'Rp. 950.000', 'category' => 'Lainnya', 'image' => 'A2.jpg'],
            ['title' => 'Gerbang', 'harga' => 'Rp. 750.000', 'category' => 'Gerbang', 'image' => 'Gerbang-Industrial.jpg'],
            ['title' => 'Gerbang Plat Besi', 'harga' => 'Rp. 800.000', 'category' => 'Gerbang', 'image' => 'Gerbang-Plat-Besi.PNG'],
            ['title' => 'Pintu Harmonika', 'harga' => 'Rp. 900.000', 'category' => 'Lainnya', 'image' => 'pintu-harmonika.png'],
            ['title' => 'Railing Tangga Minimalis', 'harga' => 'Rp. 599.000', 'category' => 'Railling', 'image' => 'Railling-Tangga-Minimalis.jpg'],
            ['title' => 'Rolling Door', 'harga' => 'Rp. 750.000', 'category' => 'Lainnya', 'image' => '7.jpg'],
            ['title' => 'Railing Tangga Cutting Laser', 'harga' => 'Rp. 900.000', 'category' => 'Railling', 'image' => 'Railing-Tangga-Cutting-Laser.jpg'],
            ['title' => 'Tralis Jendela', 'harga' => 'Rp. 750.000', 'category' => 'Lainnya', 'image' => 'tralis2.jpg'],
            ['title' => 'Billboard', 'harga' => 'Rp. 2.700.000', 'category' => 'Lainnya', 'image' => 'billboard.jpg'],
            ['title' => 'Gerbang', 'harga' => 'Rp. 650.000', 'category' => 'Gerbang', 'image' => 'gerbang1.jpg'],
            ['title' => 'Pintu', 'harga' => 'Rp. 650.000', 'category' => 'Lainnya', 'image' => 'gerbang2.jpg'],
            ['title' => 'Pintu', 'harga' => 'Rp. 650.000', 'category' => 'Lainnya', 'image' => 'gerbang3.jpg'],
            ['title' => 'Gerbang', 'harga' => 'Rp. 650.000', 'category' => 'Gerbang', 'image' => 'gerbang5.jpg'],
            ['title' => 'Railing', 'harga' => 'Rp. 900.000', 'category' => 'Railling', 'image' => 'railling1.jpg'],
            ['title' => 'Railing', 'harga' => 'Rp. 900.000', 'category' => 'Railling', 'image' => 'railling2.jpg'],
            ['title' => 'Railing', 'harga' => 'Rp. 900.000', 'category' => 'Railling', 'image' => 'railling3.jpg'],
            ['title' => 'Railing', 'harga' => 'Rp. 900.000', 'category' => 'Railling', 'image' => 'railling4.jpg'],
            ['title' => 'Neon Box', 'harga' => 'Rp. 3.500.000 - Rp. 5.000.000', 'category' => 'Lainnya', 'image' => 'neon-box.jpg'],
            ['title' => 'Plafond', 'harga' => 'Rp.120.000 - Rp. 300.000', 'category' => 'Lainnya', 'image' => 'plafond.jpg'],
            ['title' => 'Rangka Atap Baja Ringan', 'harga' => 'Rp. 175.000', 'category' => 'Lainnnya', 'image' => 'rangka-atap.jpeg'],
            ['title' => 'CCTV', 'harga' => 'Rp- 1.500.000 - Rp. 3.000.000', 'category' => 'Lainnya', 'image' => 'cctv.jpg'],
            ['title' => 'Konstruksi Baja', 'harga' => 'Rp. 2.000.000 - Rp. 3.000.000', 'category' => 'Lainnya', 'image' => 'Konstruksi-BajaWF2.jpg'],
            ['title' => 'Gerbang Motif Kayu', 'harga' => 'Rp. 750.000', 'category' => 'Gerbang', 'image' => 'Gerbang-Motif-Kayu.jpeg'],
            ['title' => 'Gerbang Cutting Lasser', 'harga' => 'Rp. 999.000', 'category' => 'Gerbang', 'image' => 'Gerbang-Cutting-Lasser.jpeg'],
            ['title' => 'Railing Tangga Industrial', 'harga' => 'Rp. 700.000', 'category' => 'Railling', 'image' => 'railingTanggaIndustrial.jpg'],
            ['title' => 'Tralis Pintu - (Minimal 2 PLong)', 'harga' => 'Rp. 1.500.000', 'category' => 'Lainnya', 'image' => 'tralisPintu2.jpg'],
            ['title' => 'Gerbang Minimalis', 'harga' => 'Rp. 650.000', 'category' => 'Gerbang', 'image' => 'gerbangMinimalis.jpeg'],
            ['title' => 'Backdrop TV', 'harga' => 'Rp. 1.599.000', 'category' => 'Lainnya', 'image' => 'backdrop-tv.jpg'],
            ['title' => 'Railling Stainless Kaca', 'harga' => 'Rp. 1.599.000', 'category' => 'Railling', 'image' => 'Railling-Stainless-Kaca.jpg'],
            ['title' => 'Kanopi Alderon', 'harga' => 'Rp. 800.000', 'category' => 'Kanopi', 'image' => 'kanopiAlderon.jpg'],
            ['title' => 'Kabinet Bawah Tangga', 'harga' => 'Rp. 1.800.000', 'category' => 'Lainnya', 'image' => 'lemariBawahTangga.jpg'],
            ['title' => 'Kanopi Membran', 'harga' => 'Rp. 800.000 - Rp. 1.500.000', 'category' => 'Kanopi', 'image' => 'Kanopi-Membran.jpg'],
            ['title' => 'Kanopi Polycarbonat', 'harga' => 'Rp. 800.000', 'category' => 'Kanopi', 'image' => 'Kanopi-Polycarbonat.jpg'],
            ['title' => 'Kanopi Solar Flat', 'harga' => 'Rp. 850.000', 'category' => 'Kanopi', 'image' => 'Kanopi-Solar-Flat.jpg'],
            ['title' => 'Kanopi Spandek Rangka Galvanis', 'harga' => 'Rp. 450.000', 'category' => 'Kanopi', 'image' => 'Kanopi-Spandek-Rangka-Galvanis.jpg'],
            ['title' => 'Kanopi Membrane', 'harga' => 'Rp. 450.000', 'category' => 'Kanopi', 'image' => 'kanopi-membrane.jpg'],
            ['title' => 'Kanopi', 'harga' => 'Rp. 450.000', 'category' => 'Kanopi', 'image' => 'Kanopi1.jfif'],
            ['title' => 'Kitchen Set', 'harga' => 'Rp. 450.000', 'category' => 'Lainnya', 'image' => 'KitchenSet.jpeg'],
            ['title' => 'Gerbang', 'harga' => 'Rp. 750.000', 'category' => 'Gerbang', 'image' => 'pagar.jpg'],
            ['title' => 'Gerbang', 'harga' => 'Rp. 750.000', 'category' => 'Gerbang', 'image' => 'pagar1.jpg'],
            ['title' => 'Gerbang', 'harga' => 'Rp. 750.000', 'category' => 'Gerbang', 'image' => 'pagar2.jpeg'],
            ['title' => 'Rangka Atap', 'harga' => 'Rp. 175.000', 'category' => 'Lainnnya', 'image' => 'RangkaAtap2.jfif'],
            ['title' => 'Rangka Atap', 'harga' => 'Rp. 175.000', 'category' => 'Lainnnya', 'image' => 'RangkaAtap4.jpeg'],
            ['title' => 'Atap Kaca', 'harga' => 'Rp. 175.000', 'category' => 'Lainnnya', 'image' => 'AtapKaca.jpeg'],
            ['title' => 'Roster Beton Minimalis', 'harga' => 'Rp. 175.000', 'category' => 'Lainnnya', 'image' => 'RosterBetonMinimalis.jfif'],
            ['title' => 'Railing Tangga', 'harga' => 'Rp. 700.000', 'category' => 'Railling', 'image' => 'RaillingTangga1.jfif'],
            ['title' => 'Railing Balkon', 'harga' => 'Rp. 700.000', 'category' => 'Railling', 'image' => 'RaillingBalkon3.jfif'],
        ];
        return view('product', compact('bahan'));
    }
    public function contractor() {
        $bahan = [
            ['title' => 'Rumah Lantai 2', 'category' => 'Rumah', 'image' => 'proyek33.jpg'],
            ['title' => 'Rumah Lantai 2', 'category' => 'Rumah', 'image' => 'proyek34.webp'],
            ['title' => 'Rumah Lantai 1', 'category' => 'Rumah', 'image' => 'proyek35.webp'],
            ['title' => 'Rumah Lantai 1', 'category' => 'Rumah', 'image' => 'proyek37.jpeg'],
            ['title' => 'Rumah Lantai 1', 'category' => 'Rumah', 'image' => 'proyek40.jpg'],
            ['title' => 'Renovasi Rumah', 'category' => 'Renovasi', 'image' => 'Renovasi-Rumah1.jpg'],
            ['title' => 'Renovasi Rumah',  'category' => 'Renovasi', 'image' => 'Renovasi-Rumah2.jpg'],
            ['title' => 'Rumah Toko 2 Lantai', 'category' => 'Ruko', 'image' => 'Ruko-2Lantai.jpeg'],
            ['title' => 'Rumah Toko 1 Lantai', 'category' => 'Ruko', 'image' => 'ruko1Lantai.jpeg'],
            ['title' => 'Rumah',  'category' => 'Rumah', 'image' => 'Rumah1.jpg'],
            ['title' => 'Rumah', 'category' => 'Rumah', 'image' => 'Rumah2.jpg'],
            ['title' => 'Rumah Lantai 1',  'category' => 'Rumah', 'image' => 'RumahLT1.jpg'],
            ['title' => 'Rumah Lantai 1',  'category' => 'Rumah', 'image' => 'rumah1Lantai1.png'],
            ['title' => 'Rumah Lantai 1',  'category' => 'Rumah', 'image' => 'rumah1Lantai2.jpeg'],
            ['title' => 'Rumah Lantai 2', 'category' => 'Rumah', 'image' => 'RumahLT2-2.jpg'],
            ['title' => 'Rumah Lantai 2', 'category' => 'Rumah', 'image' => 'rumahLantai2.jpeg'],
            ['title' => 'Rumah Lantai 2', 'category' => 'Rumah', 'image' => 'proyek19.webp'],
            ['title' => 'Rumah Lantai 2', 'category' => 'Rumah', 'image' => 'proyek20.jpeg'],
            ['title' => 'Rumah Lantai 2', 'category' => 'Rumah', 'image' => 'proyek21.jpeg'],
            ['title' => 'Rumah Lantai 2', 'category' => 'Rumah', 'image' => 'proyek22.jpeg'],
            ['title' => 'Rumah Lantai 2', 'category' => 'Rumah', 'image' => 'proyek23.jpeg'],
            ['title' => 'Rumah Lantai 2', 'category' => 'Rumah', 'image' => 'proyek24.webp'],
            ['title' => 'Rumah Lantai 2', 'category' => 'Rumah', 'image' => 'proyek25.jpg'],
            ['title' => 'Rumah Lantai 2', 'category' => 'Rumah', 'image' => 'proyek26.jpg'],
            ['title' => 'Rumah Lantai 2', 'category' => 'Rumah', 'image' => 'RumahLantai2-1.jpeg'],
            ['title' => 'Rumah Lantai 2', 'category' => 'Rumah', 'image' => 'RumahLantai2-2.jpeg'],
            ['title' => 'Rumah Minimalis', 'category' => 'Rumah', 'image' => 'RumahMinimalis2Lantai.jfif'],
        ];
        return view('kontraktor', compact('bahan'));
    }
}
