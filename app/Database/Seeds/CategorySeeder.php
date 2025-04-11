<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class CategorySeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'name' => 'Pendidikan',
                'createdAt' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Seni',
                'createdAt' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Teknologi',
                'createdAt' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Lingkungan',
                'createdAt' => date('Y-m-d H:i:s')
            ]
        ];

        $this->db->table('category')->insertBatch($data);
        
        // Add some initial chat messages
        $chatData = [
            [
                'category_id' => 2, // Seni
                'name' => 'Mayang',
                'content' => 'Halo semua! Apa pendapat kalian tentang kegiatan seni di sekolah?',
                'createdAt' => date('Y-m-d H:i:s', strtotime('-1 hour'))
            ],
            [
                'category_id' => 2, // Seni
                'name' => 'Jhon Doe',
                'content' => 'Saya rasa kegiatan seni sangat penting untuk perkembangan kreativitas anak.',
                'createdAt' => date('Y-m-d H:i:s', strtotime('-59 minutes'))
            ],
            [
                'category_id' => 2, // Seni
                'name' => 'Anonym',
                'content' => 'Setuju! Kegiatan seni juga bisa membantu anak mengekspresikan diri mereka.',
                'createdAt' => date('Y-m-d H:i:s', strtotime('-58 minutes'))
            ],
            [
                'category_id' => 2, // Seni
                'name' => 'Prof. Ahmad',
                'content' => 'Penelitian menunjukkan bahwa seni berperan penting dalam pengembangan kognitif dan emosional siswa. Seni tidak hanya tentang kreativitas, tetapi juga mengasah pemecahan masalah.',
                'createdAt' => date('Y-m-d H:i:s', strtotime('-45 minutes'))
            ],
            [
                'category_id' => 2, // Seni
                'name' => 'Jhon Doe',
                'content' => 'Menarik! Apakah ada bukti konkret bagaimana seni mempengaruhi nilai akademik?',
                'createdAt' => date('Y-m-d H:i:s', strtotime('-42 minutes'))
            ],
            [
                'category_id' => 1, // Pendidikan
                'name' => 'Alex',
                'content' => 'Bagaimana menurut kalian tentang sistem pendidikan jarak jauh?',
                'createdAt' => date('Y-m-d H:i:s', strtotime('-2 hours'))
            ],
            [
                'category_id' => 1, // Pendidikan
                'name' => 'Diana',
                'content' => 'Menurut saya, sistem pendidikan jarak jauh memiliki kelebihan dan kekurangan. Fleksibilitas waktu sangat membantu, tapi interaksi langsung dengan guru berkurang.',
                'createdAt' => date('Y-m-d H:i:s', strtotime('-110 minutes'))
            ],
            [
                'category_id' => 3, // Teknologi
                'name' => 'Budi',
                'content' => 'Ada yang sudah mencoba implementasi AI dalam pembelajaran?',
                'createdAt' => date('Y-m-d H:i:s', strtotime('-3 hours'))
            ],
            [
                'category_id' => 3, // Teknologi
                'name' => 'Santi',
                'content' => 'Saya sudah mencoba beberapa tools berbasis AI untuk membantu siswa dalam pembelajaran matematika. Hasilnya cukup menjanjikan!',
                'createdAt' => date('Y-m-d H:i:s', strtotime('-170 minutes'))
            ],
            [
                'category_id' => 4, // Lingkungan
                'name' => 'Rudi',
                'content' => 'Bagaimana cara mengajarkan anak-anak tentang pentingnya menjaga lingkungan?',
                'createdAt' => date('Y-m-d H:i:s', strtotime('-4 hours'))
            ],
            [
                'category_id' => 4, // Lingkungan
                'name' => 'Lina',
                'content' => 'Saya biasanya mengajak anak-anak untuk kegiatan menanam pohon dan membersihkan lingkungan sekitar. Dengan praktek langsung, mereka jadi lebih paham.',
                'createdAt' => date('Y-m-d H:i:s', strtotime('-230 minutes'))
            ]
        ];
        
        $this->db->table('chat')->insertBatch($chatData);
    }
}