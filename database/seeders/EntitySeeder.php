<?php

namespace Database\Seeders;

use App\Models\Entity;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EntitySeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'type' => 'Flora',
                'common_name' => 'Rose',
                'local_name' => 'Mawar',
                'latin_name' => 'Rosa',
                'english_translation' => 'Rose',
                'biome' => 'Garden',
                'description' => 'Tulip (Tulipa) adalah tanaman berbunga indah yang sering dijumpai di taman-taman. Mereka memiliki bunga dengan berbagai warna yang cerah dan memikat. Tanaman tulip sering diasosiasikan dengan musim semi dan menjadi salah satu ikon taman bunga. Mereka datang dalam berbagai varietas dan memberikan keindahan taman yang tak tertandingi.',
                'quantity' => 100,
                'image_name' => 'rose.jpg',
                'image_path' => 'assets/img/',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'type' => 'Flora',
                'common_name' => 'Sunflower',
                'local_name' => 'Bunga Matahari',
                'latin_name' => 'Helianthus annuus',
                'english_translation' => 'Sunflower',
                'biome' => 'Fields',
                'description' => 'Sunflower (Bunga Matahari) adalah tanaman dengan bunga kuning cerah yang menghadap matahari. Mereka tumbuh subur di lahan pertanian dan sering digunakan dalam industri minyak biji bunga matahari. Bunga matahari melambangkan keceriaan dan energi positif.',
                'quantity' => 75,
                'image_name' => 'sunflower.jpg',
                'image_path' => 'assets/img/',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'type' => 'Flora',
                'common_name' => 'Tulip',
                'local_name' => 'Tulipan',
                'latin_name' => 'Tulipa',
                'english_translation' => 'Tulip',
                'biome' => 'Garden',
                'description' => 'Tulip (Tulipa) adalah tanaman berbunga indah yang sering dijumpai di taman-taman. Mereka memiliki bunga dengan berbagai warna yang cerah dan memikat. Tanaman tulip sering diasosiasikan dengan musim semi dan menjadi salah satu ikon taman bunga. Mereka datang dalam berbagai varietas dan memberikan keindahan taman yang tak tertandingi.',
                'quantity' => 50,
                'image_name' => 'tulip.jpg',
                'image_path' => 'assets/img/',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'type' => 'Fauna',
                'common_name' => 'Lion',
                'local_name' => 'Singa',
                'latin_name' => 'Panthera leo',
                'english_translation' => 'Lion',
                'biome' => 'Savannah',
                'description' => 'Singa (Panthera leo) adalah salah satu hewan paling ikonik di Afrika. Mereka adalah pemangsa besar yang tinggal di savana dan hutan Afrika. Singa jantan dikenal karena bulu lebat mereka, sementara singa betina biasanya lebih kecil. Singa sering digambarkan sebagai simbol kekuatan dan keindahan alam liar Afrika.',
                'quantity' => 10,
                'image_name' => 'lion.jpg',
                'image_path' => 'assets/img/',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'type' => 'Fauna',
                'common_name' => 'Elephant',
                'local_name' => 'Gajah',
                'latin_name' => 'Loxodonta africana',
                'english_translation' => 'Elephant',
                'biome' => 'African Savanna',
                'description' => 'Gajah (Loxodonta africana) adalah salah satu mamalia terbesar di dunia dan hewan darat terberat. Mereka dikenal dengan belalai mereka yang unik dan telinga yang lebar. Gajah hidup di berbagai habitat di Afrika dan merupakan hewan yang sangat sosial. Mereka sering dihormati dan dihargai di banyak budaya.',
                'quantity' => 15,
                'image_name' => 'elephant.jpg',
                'image_path' => 'assets/img/',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'type' => 'Fauna',
                'common_name' => 'Tiger',
                'local_name' => 'Harimau',
                'latin_name' => 'Panthera tigris',
                'english_translation' => 'Tiger',
                'biome' => 'Jungle',
                'description' => 'Harimau (Panthera tigris) adalah karnivora besar yang mendiami hutan dan hutan hujan di Asia. Mereka dikenal dengan corak belang mereka dan kemampuan berburu yang hebat. Harimau adalah predator puncak dan menjadi simbol kekuatan dan keindahan alam liar. Sayangnya, beberapa subspesies harimau sekarang terancam punah.',
                'quantity' => 5,
                'image_name' => 'tiger.jpg',
                'image_path' => 'assets/img/',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'type' => 'Fauna',
                'common_name' => 'Panda',
                'local_name' => 'Panda',
                'latin_name' => 'Ailuropoda melanoleuca',
                'english_translation' => 'Giant Panda',
                'biome' => 'Bamboo Forest',
                'description' => 'Panda raksasa (Ailuropoda melanoleuca) adalah spesies panda yang hidup di hutan bambu di Tiongkok. Mereka dikenal dengan bulu putih dan hitam mereka yang ikonik. Panda raksasa adalah hewan pemakan bambu yang langka dan terancam punah. Mereka adalah simbol pelestarian alam dan mendapat perhatian dunia.',
                'quantity' => 8,
                'image_name' => 'panda.jpg',
                'image_path' => 'assets/img/',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Tambahkan data lainnya sesuai kebutuhan Anda
        ];

        // Simpan data ke dalam tabel 'entities'
        foreach ($data as $item) {
            Entity::create($item);
        }
    }
}
