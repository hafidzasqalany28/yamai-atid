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
                'common_name' => 'Bunga kamboja',
                'local_name' => 'Kamboja',
                'latin_name' => 'Plumeria',
                'english_translation' => 'Tumbuhan Berbunga',
                'biome' => 'Tropis',
                'description' => 'Bunga kamboja (Plumeria) adalah tumbuhan berbunga dengan bunga yang harum dan indah. Mereka sering ditemukan di daerah tropis dan digunakan dalam berbagai upacara dan kebun. Bunga kamboja dikenal akan keharumannya yang memikat.',
                'quantity' => 100,
                'image_name' => 'kamboja.jpg',
                'image_path' => 'assets/img/',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'type' => 'Flora',
                'common_name' => 'Bunga dolar',
                'local_name' => 'Dolar',
                'latin_name' => 'Eucalyptus globulus',
                'english_translation' => 'Tumbuhan Berbunga',
                'biome' => 'Hutan',
                'description' => 'Bunga dolar (Eucalyptus globulus) adalah pohon besar dengan daun berbentuk mata uang. Mereka tumbuh di hutan-hutan dan memiliki aroma segar yang khas. Pohon ini sering digunakan dalam industri kayu dan minyak esensial.',
                'quantity' => 75,
                'image_name' => 'dolar.jpeg',
                'image_path' => 'assets/img/',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'type' => 'Flora',
                'common_name' => 'Bunga thailand',
                'local_name' => 'Thailand',
                'latin_name' => 'Ixora coccinea',
                'english_translation' => 'Tumbuhan Berbunga',
                'biome' => 'Subtropis',
                'description' => 'Bunga thailand (Ixora coccinea) adalah tumbuhan berbunga dengan bunga yang cerah dan indah. Mereka sering ditemukan di daerah subtropis dan tropis. Bunga thailand memiliki berbagai warna yang memikat.',
                'quantity' => 50,
                'image_name' => 'thailand.jpeg',
                'image_path' => 'assets/img/',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'type' => 'Flora',
                'common_name' => 'Bongsao kamboja',
                'local_name' => 'Bongsao',
                'latin_name' => 'Catharanthus roseus',
                'english_translation' => 'Tumbuhan Berbunga',
                'biome' => 'Tropis',
                'description' => 'Bongsao kamboja (Catharanthus roseus) adalah tumbuhan berbunga yang sering ditemukan di daerah tropis. Mereka memiliki bunga yang indah dan sering digunakan dalam pengobatan tradisional.',
                'quantity' => 100,
                'image_name' => 'bongsao-kamboja.jpeg',
                'image_path' => 'assets/img/',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'type' => 'Flora',
                'common_name' => 'Kamboja pengantin',
                'local_name' => 'Kamboja pengantin',
                'latin_name' => 'Stephanotis floribunda',
                'english_translation' => 'Tumbuhan Berbunga',
                'biome' => 'Tropis',
                'description' => 'Kamboja pengantin (Stephanotis floribunda) adalah tumbuhan berbunga yang sering digunakan dalam rangkaian pengantin. Mereka memiliki bunga yang indah dan harum.',
                'quantity' => 75,
                'image_name' => 'kamboja-pengantin.jpeg',
                'image_path' => 'assets/img/',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'type' => 'Flora',
                'common_name' => 'Siklok',
                'local_name' => 'Siklok',
                'latin_name' => 'Cyclamen',
                'english_translation' => 'Tumbuhan Berbunga',
                'biome' => 'Hutan',
                'description' => 'Siklok (Cyclamen) adalah tumbuhan berbunga dengan bunga yang cantik. Mereka sering ditemukan di hutan-hutan dan dataran tinggi. Siklok memiliki berbagai varietas dengan warna bunga yang beragam.',
                'quantity' => 60,
                'image_name' => 'siklok.jpeg',
                'image_path' => 'assets/img/',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'type' => 'Flora',
                'common_name' => 'Bugonvil / Bunga kertas',
                'local_name' => 'Bugonvil / Bunga kertas',
                'latin_name' => 'Bougainvillea',
                'english_translation' => 'Tumbuhan Berbunga',
                'biome' => 'Subtropis',
                'description' => 'Bugonvil (Bougainvillea) adalah tumbuhan berbunga dengan bunga yang menarik perhatian. Mereka sering ditemukan di daerah subtropis dan tropis. Bugonvil memiliki bunga yang cerah dan tahan lama.',
                'quantity' => 90,
                'image_name' => 'bugonvil.jpeg',
                'image_path' => 'assets/img/',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'type' => 'Flora',
                'common_name' => 'Miana',
                'local_name' => 'Miana',
                'latin_name' => 'Ipomoea batatas',
                'english_translation' => 'Tumbuhan Berbunga',
                'biome' => 'Tropis',
                'description' => 'Miana (Ipomoea batatas) adalah tumbuhan yang sering dijadikan sebagai sumber makanan. Mereka memiliki akar yang enak dimakan dan sering digunakan dalam berbagai hidangan.',
                'quantity' => 80,
                'image_name' => 'miana.jpeg',
                'image_path' => 'assets/img/',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'type' => 'Flora',
                'common_name' => 'Anggin / Paring',
                'local_name' => 'Anggin / Paring',
                'latin_name' => 'Piper betle',
                'english_translation' => 'Tumbuhan Berdaun Lebar',
                'biome' => 'Tropis',
                'description' => 'Anggin / Paring (Piper betle) adalah tumbuhan dengan daun lebar yang sering digunakan dalam tradisi lokal, terutama dalam menyajikan sirih. Daun ini memiliki rasa pedas dan digunakan dalam berbagai upacara adat.',
                'quantity' => 70,
                'image_name' => 'anggin.jpeg',
                'image_path' => 'assets/img/',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'type' => 'Flora',
                'common_name' => 'Lida mertua',
                'local_name' => 'Lida mertua',
                'latin_name' => 'Bryophyllum pinnatum',
                'english_translation' => 'Tumbuhan Berdaun Lebar',
                'biome' => 'Subtropis',
                'description' => 'Lida mertua (Bryophyllum pinnatum) adalah tumbuhan berdaun lebar yang memiliki daun beranak dan sering ditemukan di daerah subtropis. Mereka tahan kekeringan dan sering digunakan dalam tanaman hias.',
                'quantity' => 60,
                'image_name' => 'lida-mertua.jpeg',
                'image_path' => 'assets/img/',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'type' => 'Flora',
                'common_name' => 'Hanjuang',
                'local_name' => 'Hanjuang',
                'latin_name' => 'Colocasia esculenta',
                'english_translation' => 'Tumbuhan Berdaun Lebar',
                'biome' => 'Tropis',
                'description' => 'Hanjuang (Colocasia esculenta) adalah tumbuhan berdaun lebar yang biasanya digunakan sebagai sumber makanan. Umbi dari tumbuhan ini sering diolah menjadi berbagai hidangan lezat.',
                'quantity' => 50,
                'image_name' => 'hanjuang.jpeg',
                'image_path' => 'assets/img/',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'type' => 'Flora',
                'common_name' => 'Bayam Malabar',
                'local_name' => 'Bayam Malabar',
                'latin_name' => 'Basella alba',
                'english_translation' => 'Tumbuhan Berdaun Lebar',
                'biome' => 'Tropis',
                'description' => 'Bayam Malabar (Basella alba) adalah tumbuhan berdaun lebar yang sering digunakan dalam masakan. Daunnya memiliki rasa yang segar dan sering digunakan dalam hidangan sayuran.',
                'quantity' => 70,
                'image_name' => 'bayam.jpeg',
                'image_path' => 'assets/img/',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'type' => 'Flora',
                'common_name' => 'Sri rejeki',
                'local_name' => 'Sri rejeki',
                'latin_name' => 'Dracaena sanderiana',
                'english_translation' => 'Tumbuhan Ciri Khusus',
                'biome' => 'Tropis',
                'description' => 'Sri rejeki (Dracaena sanderiana) adalah tumbuhan dengan ciri khusus yang sering dianggap sebagai tanda keberuntungan. Mereka sering dijadikan tanaman hias dalam pot air dan dianggap membawa keberuntungan.',
                'quantity' => 30,
                'image_name' => 'sri-rejeki.jpeg',
                'image_path' => 'assets/img/',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'type' => 'Fauna',
                'common_name' => 'Ikan Arwana',
                'local_name' => 'Ikan Arwana',
                'latin_name' => 'Arowana',
                'english_translation' => 'Pisces',
                'biome' => 'Air Tawar',
                'description' => 'Ikan Arwana adalah salah satu ikan air tawar yang terkenal dengan keindahan sisiknya. Mereka sering dianggap sebagai ikan yang membawa keberuntungan dan kekayaan dalam budaya beberapa negara di Asia.',
                'quantity' => 1,
                'image_name' => 'arwana.jpg',
                'image_path' => 'assets/img/',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'type' => 'Fauna',
                'common_name' => 'Ikan Olip atau Gabus',
                'local_name' => 'Ikan Olip atau Gabus',
                'latin_name' => 'Channa spp.',
                'english_translation' => 'Pisces',
                'biome' => 'Air Tawar',
                'description' => 'Ikan Olip atau Gabus adalah ikan air tawar yang banyak ditemukan di berbagai perairan. Mereka dikenal dengan gigi dan mulutnya yang tajam. Ikan ini sering dijadikan target para pemancing.',
                'quantity' => '25',
                'image_name' => 'olip-gabus.jpg',
                'image_path' => 'assets/img/',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'type' => 'Fauna',
                'common_name' => 'Ikan Mujair',
                'local_name' => 'Ikan Mujair',
                'latin_name' => 'Oreochromis mossambicus',
                'english_translation' => 'Pisces',
                'biome' => 'Air Tawar',
                'description' => 'Ikan Mujair adalah ikan air tawar yang populer di budidaya perikanan. Mereka dikenal dengan daging putih dan lezat. Ikan ini sering dijadikan hidangan dalam masakan lokal.',
                'quantity' => 1,
                'image_name' => 'mujair.jpg',
                'image_path' => 'assets/img/',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'type' => 'Fauna',
                'common_name' => 'Ikan Betik',
                'local_name' => 'Ikan Betik',
                'latin_name' => 'Osphronemus goramy',
                'english_translation' => 'Pisces',
                'biome' => 'Air Tawar',
                'description' => 'Ikan Betik adalah ikan air tawar yang dikenal dengan ukuran besar dan bentuknya yang menarik. Mereka dikenal d
        ```engan rasa daging yang lezat.',
                'quantity' => 1,
                'image_name' => 'betik.jpg',
                'image_path' => 'assets/img/',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'type' => 'Fauna',
                'common_name' => 'Kasuari',
                'local_name' => 'Kasuari',
                'latin_name' => 'Casuarius spp.',
                'english_translation' => 'Reptilia',
                'biome' => 'Hutan Hujan',
                'description' => 'Kasuari adalah burung besar yang mendiami hutan hujan di Papua dan sekitarnya. Mereka dikenal dengan ciri khas lehernya yang panjang dan warna cerah pada kulit kepala. Kasuari adalah salah satu burung terbesar di dunia.',
                'quantity' => 3,
                'image_name' => 'kasuari.jpg',
                'image_path' => 'assets/img/',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'type' => 'Fauna',
                'common_name' => 'Buaya',
                'local_name' => 'Buaya',
                'latin_name' => 'Crocodylus spp.',
                'english_translation' => 'Reptilia',
                'biome' => 'Air Tawar',
                'description' => 'Buaya adalah reptil besar yang mendiami perairan tawar dan sekitarnya. Mereka dikenal dengan gigi tajam dan kemampuan berburu yang hebat. Buaya sering dianggap sebagai predator puncak di habitatnya.',
                'quantity' => 2,
                'image_name' => 'buaya.jpeg',
                'image_path' => 'assets/img/',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'type' => 'Fauna',
                'common_name' => 'Biawak',
                'local_name' => 'Biawak',
                'latin_name' => 'Varanus spp.',
                'english_translation' => 'Reptilia',
                'biome' => 'Beragam',
                'description' => 'Biawak adalah reptil yang termasuk dalam keluarga Varanidae. Mereka mendiami berbagai habitat, termasuk hutan, gurun, dan savana. Biawak dikenal dengan tubuh panjang dan lidah bercabang.',
                'quantity' => 1,
                'image_name' => 'biawak.jpg',
                'image_path' => 'assets/img/',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'type' => 'Fauna',
                'common_name' => 'Iguana',
                'local_name' => 'Iguana',
                'latin_name' => 'Iguana spp.',
                'english_translation' => 'Reptilia',
                'biome' => 'Hutan Hujan',
                'description' => 'Iguana adalah reptil herbivora yang mendiami hutan hujan Amerika Tengah dan Selatan. Mereka dikenal dengan kulit bersisik dan warna yang cerah. Iguana sering dijadikan hewan peliharaan.',
                'quantity' => 1,
                'image_name' => 'iguana.jpg',
                'image_path' => 'assets/img/',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'type' => 'Fauna',
                'common_name' => 'Kura-Kura',
                'local_name' => 'Kura-Kura',
                'latin_name' => 'Testudines spp.',
                'english_translation' => 'Reptilia',
                'biome' => 'Beragam',
                'description' => 'Kura-Kura adalah reptil yang terkenal dengan cangkang pelindungnya. Mereka mendiami berbagai habitat, baik darat maupun air. Kura-Kura sering dianggap sebagai simbol ketahanan dan umur panjang.',
                'quantity' => 8,
                'image_name' => 'kura-kura.jpg',
                'image_path' => 'assets/img/',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'type' => 'Fauna',
                'common_name' => 'Angsa',
                'local_name' => 'Angsa',
                'latin_name' => 'Cygnus spp.',
                'english_translation' => 'Aves',
                'biome' => 'Air Tawar',
                'description' => 'Angsa adalah burung air yang dikenal dengan leher panjang dan warna putihnya yang elegan. Mereka sering ditemukan di danau dan sungai-sungai. Angsa sering dianggap sebagai simbol keindahan dan kemurnian.',
                'quantity' => 1,
                'image_name' => 'angsa.jpg',
                'image_path' => 'assets/img/',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'type' => 'Fauna',
                'common_name' => 'Ayam',
                'local_name' => 'Ayam',
                'latin_name' => 'Gallus gallus domesticus',
                'english_translation' => 'Aves',
                'biome' => 'Beragam',
                'description' => 'Ayam adalah burung unggas yang sering dijinakkan dan dipelihara oleh manusia. Mereka memiliki berbagai jenis dan warna bulu. Ayam sering dijadikan sumber daging dan telur dalam makanan manusia.',
                'quantity' => 5,
                'image_name' => 'ayam.jpg',
                'image_path' => 'assets/img/',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'type' => 'Fauna',
                'common_name' => 'Merpati',
                'local_name' => 'Merpati',
                'latin_name' => 'Columba livia',
                'english_translation' => 'Aves',
                'biome' => 'Beragam',
                'description' => 'Merpati adalah burung yang mendiami berbagai habitat, termasuk perkotaan. Mereka dikenal dengan kemampuan terbang dan orientasi yang baik. Merpati sering dijadikan simbol perdamaian dan kebebasan.',
                'quantity' => 6,
                'image_name' => 'merpati.jpg',
                'image_path' => 'assets/img/',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'type' => 'Fauna',
                'common_name' => 'Burung Kakatua',
                'local_name' => 'Burung Kakatua',
                'latin_name' => 'Cacatua spp.',
                'english_translation' => 'Aves',
                'biome' => 'Hutan dan Pulau Tropis',
                'description' => 'Burung Kakatua adalah burung yang dikenal dengan paruh lengkung dan bulu yang cerah. Mereka mendiami hutan dan pulau tropis di berbagai belahan dunia. Burung Kakatua sering dijadikan hewan peliharaan.',
                'quantity' => 6,
                'image_name' => 'kakatua.jpg',
                'image_path' => 'assets/img/',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'type' => 'Fauna',
                'common_name' => 'Burung Elang',
                'local_name' => 'Burung Elang',
                'latin_name' => 'Aquila spp.',
                'english_translation' => 'Aves',
                'biome' => 'Beragam',
                'description' => 'Burung Elang adalah pemangsa yang dikenal dengan kekuatan dan kemampuan terbang tinggi. Mereka mendiami berbagai habitat, termasuk pegunungan dan dataran tinggi. Burung Elang sering dianggap sebagai simbol kebebasan dan kekuatan.',
                'quantity' => 2,
                'image_name' => 'elang.jpg',
                'image_path' => 'assets/img/',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'type' => 'Fauna',
                'common_name' => 'Elang Laut / Kidap',
                'local_name' => 'Elang Laut / Kidap',
                'latin_name' => 'Haliaeetus spp.',
                'english_translation' => 'Aves',
                'biome' => 'Perairan',
                'description' => 'Elang Laut atau Kidap adalah burung pemangsa yang mendiami wilayah perairan. Mereka dikenal dengan kepala putih dan ekor yang kuat. Elang Laut sering ditemukan di sepanjang pantai dan pulau-pulau kecil.',
                'quantity' => 3,
                'image_name' => 'elanglist.jpg',
                'image_path' => 'assets/img/',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'type' => 'Fauna',
                'common_name' => 'Rusa',
                'local_name' => 'Rusa',
                'latin_name' => 'Cervidae spp.',
                'english_translation' => 'Mamalia',
                'biome' => 'Hutan dan Pegunungan',
                'description' => 'Rusa adalah mamalia herbivora yang sering ditemukan di hutan dan pegunungan. Mereka dikenal dengan tanduk yang tumbuh pada hewan jantan. Rusa sering dianggap sebagai simbol alam dan keindahan.',
                'quantity' => 20,
                'image_name' => 'rusa.jpg',
                'image_path' => 'assets/img/',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'type' => 'Fauna',
                'common_name' => 'Kangguru',
                'local_name' => 'Kangguru',
                'latin_name' => 'Macropus spp.',
                'english_translation' => 'Mamalia',
                'biome' => 'Padang Rumput dan Gurun',
                'description' => 'Kangguru adalah mamalia yang berasal dari Australia. Mereka dikenal dengan lompatan panjang mereka dan kantong di perut betina untuk membawa bayi. Kangguru sering dianggap sebagai simbol Australia.',
                'quantity' => 23,
                'image_name' => 'kangguru.jpg',
                'image_path' => 'assets/img/',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'type' => 'Fauna',
                'common_name' => 'Kuskus',
                'local_name' => 'Kuskus',
                'latin_name' => 'Phalangeridae spp.',
                'english_translation' => 'Mamalia',
                'biome' => 'Hutan Tropis',
                'description' => 'Kuskus adalah mamalia marsupial yang mendiami hutan tropis di Papua dan sekitarnya. Mereka dikenal dengan ekor yang panjang dan cangkang lemak di punggung mereka. Kuskus sering dianggap sebagai hewan endemik di daerah tersebut.',
                'quantity' => 3,
                'image_name' => 'kuskus.jpg',
                'image_path' => 'assets/img/',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'type' => 'Fauna',
                'common_name' => 'Kelinci',
                'local_name' => 'Kelinci',
                'latin_name' => 'Oryctolagus cuniculus',
                'english_translation' => 'Mamalia',
                'biome' => 'Beragam',
                'description' => 'Kelinci adalah mamalia herbivora yang sering dijumpai di berbagai habitat, dari hutan hingga padang rumput. Mereka dikenal dengan telinga panjang dan reproduksi yang cepat. Kelinci sering dijadikan hewan peliharaan dan juga sebagai sumber daging.',
                'quantity' => 6,
                'image_name' => 'kelinci.jpg',
                'image_path' => 'assets/img/',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];
        foreach ($data as $item) {
            Entity::create($item);
        }
    }
}
