-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 13 Des 2023 pada 15.05
-- Versi server: 10.4.25-MariaDB
-- Versi PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `talasgo`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_artikel`
--

CREATE TABLE `tbl_artikel` (
  `id` int(10) NOT NULL,
  `judulartikel` varchar(50) NOT NULL,
  `isiartikel` text NOT NULL,
  `tanggalpublish` datetime NOT NULL,
  `penulis` varchar(10) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_artikel`
--

INSERT INTO `tbl_artikel` (`id`, `judulartikel`, `isiartikel`, `tanggalpublish`, `penulis`, `gambar`) VALUES
(1, 'Pengenalan Talas Bogor', 'Talas bogor ternyata memiliki banyak jenisnya dan memiliki ciri khasnya masing-masing. Berikut ini akan saya tunjukan beberapa jenis talas bogor yang saya tanam di belakang rumah.\r\n\r\nTalas Pratama: talas bogor jenis ini ada juga yang meyebut dengan jenis talas bogor jepang putih. Batang pohon memeiliki warna yang hijau muda dengan ujung batang dekat daun gradasi warna merah. Ubinya memiliki ciri khas putih ke merah-merahan.\r\n\r\nTalas Gambir: talas bogor jenis gambir mirip dengan jenis talas bentul. Mungkin hanya sebutan nama daerah, bisa dikatakan sedikit perbedaan. Talas gambir memiliki batang hijau tua dengan variasi serat ungu memanjang dari batang pohon ke batang bagian daun. Talas ini adalah povorit saya, warna umbinya kuning berbeda dengan talas pratama yang memilki warna kemerah-merahan.\r\n\r\nTalas Ketan : talas ketan memiliki warna batang hijau rata dari pangkal sampai ujung daun. Umbinya warna putih sedikit kuning. Umbinya lengket seperti beras ketan dengan wangi pandan.\r\n\r\nTalas jepang merah : talas bogor jenis jepang merah memiliki ciri khas seluruh batang pohonnya berwarna merah keungu-unguan rata dari pangkal batang sampai daun. Daunnya pun dominan warna merah keungu-unguan.\r\n\r\nTalas pontianak : talas ini cukup terkenal dan rasanya enak. Talas pontianak memeiliki batang yang berwarna ungu dipangkal batang dan gradasi ke pangkal daun menjadi hijau tua. Warna umum dari talas pontianak ini ungu dan hijau gelap. Ubinya berwarna putih dan merah keungu-unguan pada bagian pangkal batang.', '2023-11-01 00:45:00', 'Admin', '6547d4b0780a1.png'),
(2, 'Teknik Budidaya Tanaman Talas (Colocasia esculenta', 'Teknik Penyemaian Bibit\r\nPenanaman talas sangat mudah dilakukan hanya memerlukan ketekunan dan keterampilan sederhana. Pertama persiapkan bibit yang berasal dari tunas atau umbi. Bila bibit diambil dari tunas, maka tunas itu diperoleh dari talas yang telah berumur 5-7 bulan, yaitu tunas kedua dan dan ketiga. Bila bibit berasal dari umbi, sebaiknya dipilih bagian umbi yang dekat titik tumbuh, kemudian iris dan tinggalkan satu mata bakal tunas. Umbi yang diiris dianginkan dulu dan waktu disemaikan lapisan bagian dalam irisan dilapisi abu. Baru setelah berdaun 2-3 lembar, umbi siap ditanam pada tanah yang telah diolah sampai gembur, dengan jarak tanam 75 x 75 cm dan dalam 30 cm. Pengaturan jarak tanam tergantung dari varietas dan ukuran tanaman. Talas biasanya ditanam dalam dua baris di bedengan selebar 1,2 m, dengan jarak 45 cm di dalam baris.\r\n\r\nPemindahan Bibit\r\nPemindahan bibit dapat dilakukan setelah tunas diperoleh dari talas yang telah berumur 5-7 bulan, yaitu tunas kedua dan dan ketiga. Kalau bibit dari umbi, yaitu setelah umbi berdaun 2-3 lembar, umbi siap ditanam pada tanah yang telah diolah sampai gembur, Tanaman talas ditanam dengan jarak 50 x 40 cm, dengan lahan talas yang dibentuk berbaris dengan bedengan, dimana dalam 1 bedengan terdapat 2 baris talas yang masing-masing baris berjumlah 37 tanaman talas.\r\n\r\nSistem Tumpang Sari\r\nPenanaman talas terdapat beberapa petani yang tertarik dalam melakukan sistem tumpang sari dengan jagung dan bengkuang. Hal ini dilakukan untuk mengefisiensi lahan yang mereka miliki sehingga dapat menghasilkan uang terlebih dahulu dari hasil panen jagung ataupun bengkuang selagi menunggu waktu panen talas sekitar 5-7 bulan. Sesuai literatur Suminarti (2009), talas sebagai salah satu tanaman yang ditumpangsarikan ini karena umbi talas berpotensi sebagai sumber karbohidrat yang sehat dan aman. Tingkat keamanan dan kesehatan dari umbi tersebut terletak pada rendahnya kandungan karbohidrat, pati, maupun gula reduksi yang terdapat dalam umbi tersebut jika dibandingkan dengan umbi ubi jalar, ubi kayu, umbi bentol, umbi mbothe maupun beras giling.\r\n\r\nPemeliharaan\r\nDalam pemeliharaan talas yang dilakukan para petani di desa situ gede menggunakan pupuk urea, KCL, dan NPK sebagai pemenuhan nutrisi bagi pertumbuhan talas dengan intensitas yang berbeda. Petani juga menggunakan furadan sebagai perlindungan hama di dalam tanah agar umbi talas tidak diserang oleh serangga dalam tanah, serta pada talas yang masih berusia muda digunakan pupuk ZA untuk membantu pertumbuhan talas. Rasio pupuk yang digunakan adalah urea 25 kg, KCL 25 kg, furadan 2,5 kg untuk luas lahan 650 m2. Pemberian pupuk dilakukan sebanyak 3 kali selama masa penanaman dengan cara membuat lubang disamping kanan tanaman talas dengan jarak 30 cm dari talas untuk mencegah akar dan umbi talas tidak terkena efek panas dari pupuk. Dilakukan penyemprotan insektisida pada daun talas sebanyak 2 kali pada bulan ke-3 dan pada bulan ke-6 untuk menghindari daun talas dimakan oleh belalang yang dapat berefek.\r\n\r\nHama yang Menyerang Tanaman Talas di Situgede dan Upaya Pengendalian\r\nHama utama yang menyerang pertanaman talas di Situgede adalah belalang (Oxya sp.), dimana menimbulkan gejala berupa daun berlubang. Hal ini mengakibatkan fontosintesis terganggu. Hama yang sudah diketahui menyerang tanaman talas di beberapa pulau di Samudra Pasifik diantaranya adalah Hippotion calerio, Oxya sp., Empoasca sp., dan Spodoptera litura (Carmichael et al. 2008). Hampir semua petani di Situgede, mengendalikan serangan hama belalang (Oxya sp.) dengan menggunakan insektisida. Berdasarkan konsep pengendalian hama terpadu (PHT) ditekankan bahwa pengendalian hama selayaknya dapat dilakukan secara hayati dengan memanfaatkan musuh alami salah satunya adalah predator yang telah ada di lahan pertanaman. Predator pada pertanaman talas sangat beragam dan dapat dimanfaatkan untuk menekan populasi hama.', '2023-11-01 00:48:00', 'Haifa, dkk', '6547d632c1447.png'),
(3, '8 Cara Menanam Talas Agar Hasil Melimpah', 'Jika kita memiliki tujuan menjual talas, maka pembudidayaan talas dilakukan dalam skala besar agar didapat keuntungan yang banyak. Maka dari itulah kita harus mengetahui cara menanam talas yang benar terlebih dahulu. Pada postingan kali ini akan kami bahas mengenai cara menanam talas. Cara menanam talas ialah serangkaian kegiatan membudidayakan talas dari tahap awal pembibitan hingga panen. Nah untuk anda yang ingin mengetahui cara menanam talas yang benar berikut kami sajikan tata cara menanam talas sebagai panduan anda.\r\n\r\n1. Persiapan Lahan\r\nPersiapan lahan dilakukan untuk menyiapkan lahan tanam agar memenuhi kriteria lahan tanam yang baik untuk talas. Lahan tanam yang baik untuk talas sebenarnya disesuaikan dengan jenis talasnya. Namun meski demikian ada beberapa kriteria tanah yang berlaku secara umum untuk menanam talas yaitu :\r\n\r\n- Tanah harus terpapar sinar matahari langsung minimal 5-6 jam per hari\r\n- Dekat dengan sumber air\r\n- Tanahnya gembur\r\n\r\nSetelah anda menemukan lahan yang cocok maka lakukan persiapan  dengan cara menebang tanaman yang mengganggu cahaya dan membersihkan pula tanaman liar atau gulma pengganggu. Setelah itu lanjut ke tahap selanjutnya.\r\n\r\n2. Penggemburan Tanah\r\nCara menanam talas yang selanjutnya adalah melakukan penggemburan tanah. Penggemburan tanah bertujuan untuk meratakan kandungan unsur hara dalam tanah juga untuk membantu perakaran tanaman. Pada tanaman talas, tanah yang gembur akan memudahkan perkembangan umbi sehingga ukuran umbi bisa jauh lebih besar, Anda bisa melakukan penggemburan dengan menggunakan cangkul atau mesin bajak modern.\r\n\r\n3. Pemberian Pupuk Dasar\r\nAgar kandungan unsur hara dalam tanah tetap terjaga selama masa tanam hingga panen, maka pemberian pupuk dasar perlu dilakukan. Pupuk yang digunakan adalah pupuk organik seperti pupuk kandang atau pupuk kompos. Usahakan jangan menggunakan pupuk kimia seperti npk, za, Tsp dll. Hal ini bertujuan untuk menjaga rasa dari talas tersebut. Talas yang menggunakan pupuk kimia cenderung kurang enak rasanya bila dikonsumsi. Pemberian pupuk dasar dilakukan dengan cara tanah yang sudah gembur ditaburi pupuk organik lalu dicampur rata. Tidak perlu dibuat bedengan untuk tanaman talas.\r\n\r\n4. Pembibitan Talas\r\nAnda bisa melakukan 2 cara untuk membibit talas pertama melalui tunas dan yang kedua melalui umbi. Jika melalui tunas maka ambillah tunas kedua atau ketiga yang tumbuh dari talas berusia 5-7 bulan. Namun jika melalui umbi maka berikutlah tata caranya :\r\n\r\n- Ambil umbi talas berukuran besar dan jika perlu maka dari bibit tanaman yang subur dan sehat.\r\n- Potong pendek – pendek terutama bagian yang disisakan ada mata tunasnya.\r\n- Taburi bagian umbi yang diiris menggunakan abu kemudian tanam pada polybag terlebih dahulu.\r\n- Usahakan agar bagian mata terlihat muncul ke atas untuk memudahkan tumbu tunas talas.\r\n- Jaga agar tanah dalam polibag basah, dan setelah tunas tumbuh sekitar  5-10 cm maka bibit talas siap dipindah ke lahan tanam yang telah dipersiapkan sebelumnya.\r\n\r\n5. Penanaman Bibit Talas\r\nDalam menanam bibit talas pada lahn tanam sebaiknya mengikuti langkah-langkah berikut ini\r\n\r\n- Pemindahan bibit sebaiknya dilakukan pada sore hari untuk menghindari tanaman layu di terik siang.\r\n- Gali lubang tanam sedalam yang diperlukan yaitu umbi terkubur dan menyisakan tunas yang muncul diatas permukaan tanah.\r\n- Pastikan plastik polibag sudah dilepas\r\n- Segera sirami bibit yang baru ditanam\r\n\r\n6. Perawatan Bibit Talas\r\nPenyiangan Rumput:\r\nPenyiangan dilakukan agar rumput dan tanaman liar tidak mencuri nutrisi dari lahan tanam talas. Lakukan penyiangan secara rutin termasuk memangkas dan membuang daun talas yang mati / kering.\r\n\r\nPenyiraman:\r\nPenyiraman pada talas sebenarnya tidak perlu dilakukan sering-sering kecuali pada jenis talas air. Pastikan saja tanahnya basah dan cukup air agar tanaman tumbuh subur tidak kekeringan. Anda cukup menggunakan gembor untuk menyiraminya\r\n\r\nPenggundukan Tanah Sekitar Akar:\r\nJika sudah terlihat muncul tunas- tunas baru maka gemburkan tanah sekitar tanaman kemudian kumpulkan sekitar tanaman agar tanahnya meninggi dibanding tanah sekitar. Ini akan membuat umbi lebih besar.\r\n\r\nPenanggulangan Hama:\r\nHama talas yang paling utama adalah serangga dan larva bawah tanah seperti uret dan orong-orong. Namun bagi yang menanam talas di dekat area hutan pegunungan biasanya juga ada serangan celeng (babi hutan dan tikus ). Nah untuk mengatasi hama ini maka anda memerlukan pestisida.\r\n\r\nUtuk hama uret dan orong-orong anda dapat menggunakan bubuk insektisida tabur yang ditaburkan ditanah bersama pupuk dasar sewaktu mengolah tanah. Sedangkan untuk mengatasi hama babi dan tikus maka gunakan peragkap atau racun babi/tikus yang ada di toko pertanian.\r\n\r\nKiranya hanya itu yang perlu anda lakukan untuk merawat talas. Sebenarnya anda boleh saja menambahkan pupuk kimia seperti NPK untuk memperbesar ukuran umbi, namun seperti yang sudah kami katakan diatas bahwa penggunaan pupuk kimia kan mengurangi rasa enak dari talas tersebut. Pilihan ada di tangan anda.\r\n\r\n7. Panen Talas\r\nTalas bogor biasanya dipanen saat berusia 7 – 10 bulan. Namun ada juga yang mengundurkan hingga satu tahun agar ukuran umbi semakin besar. Biasanya itu dijual untuk tujuan diolah menjadi tepung. Namun untuk tujuan dimakan langsung biasanya talas yang ukurannya masih sedang yaitu pada kisaran usia 7 bulan karena rasanya masih enak. Anda bisa memilih waktu panen berdasarkan tujuan dari costumer anda.\r\n\r\nPanen talas sendiri dibedakan menjadi dua yakni yang sekali panen habis atau yang disisakan tunasnya. Cara memanennya pun cukup mudah. Anda bisa mengikuti langkah-langkah berikut ini :\r\n- Gali umbi talas yang hendak dipanen lalu cabut bersama pohonnya.\r\n- Buang daun dan pelepah talas lalu sisakan sepanjang kira-kira 20 cm dari umbi.\r\n- Bersihkan serabut akar dan tanah di sekitar umbi talas\r\n- Simpan umbi talas\r\n\r\nKini umbi talas siap dijual. Umbi talas tergolong awet disimpan dalam beberapa waktu. Maka dari itu anda tak perlu khawatir jika menyimpan umbi talas dengan tujuan menunggu harga naik terlebih dahulu.', '2023-11-02 00:54:00', 'aburamai15', '6547d77250534.png'),
(4, 'Strategi Tepat Kendalikan Hama Talas Beneng', '&lt;p&gt;Diversifikasi pangan sebagai salah satu target capaian di Kementerian Pertanian. Sumberdaya hayati yang melimpah merupakan peluang dalam keberhasilan program diversifikasi pangan. Budidaya talas beneng sebagai bahan pangan lokal sudah selayaknya terus digalakkan. Namun serangan hama dan penyakit masih menjadi kendala dalam budi daya dan pengendalian yang tepat merupakan hal yang perlu dilakukan. Pengendalian hama dan penyakit pada budi daya Talas Beneng dapat dilakukan secara sederhana. Apabila budi daya dilakukan secara polikultur dan konvensional dengan input bahan kimia yang minim, akan terbentuk pengendalian secara alamiah. Hal ini dapat terjadi karena keragaman spesies yang lebih tinggi sehingga jejaring rantai makanan lebih kompleks. Siklus ini menjadi penyangga terbaik untuk keberlanjutan suatu ekosistem yang stabil, sehingga keberadaan hama potensial masih dapat dikendalikan oleh musuh alami. Namun sebaliknya apabila usaha budi daya dilaksanakan secara monokultur, dalam areal yang luas serta membutuhkan input bahan kimia untuk mamacu produksi, maka risiko serangan hama dan penyakit akan lebih besar. Kondisi ini memerlukan pengendalian secara intensif dan terpadu.&lt;/p&gt;\r\n&lt;p&gt;Strategi pengendalian hama dan penyakit melalui konsep pengendalian hama terpadu (PHT), yaitu dengan melaksanakan budi daya tanaman sehat, melalui monitoring secara berkala satu seminggu sekali, serta pengendalian kultur teknis, fisik, hayati/biologi. Penggunaan pestisida kimia dapat dilakukan jika diperlukan untuk meminimalisir dampak negatif pada lingkungan dan kesehatan manusia.&lt;/p&gt;\r\n&lt;p&gt;&lt;strong&gt;Pengendalian kultur teknis&lt;/strong&gt;&amp;nbsp;adalah pengendalian yang terkait dengan tahapan budi daya yang baik. Pupuk organik matang, benih yang sehat, pengaturan jarak tanam, pengendalian gulma, drainase, dan penentuan waktu panen harus diperhatikan dengan baik. Penggunaan pupuk organik akan meningkatkan keragaman dan kelimpahan mikroba tanah yang baik bagi tanaman. Selain itu, penggunaan benih yang sehat dan tidak terinfeksi penyakit serta tidak terinfestasi hama juga penting dalam budi daya tanaman yang sehat.&lt;/p&gt;\r\n&lt;p&gt;&lt;strong&gt;Pengendalian secara fisik dan mekanik&lt;/strong&gt;&amp;nbsp;merupakan pengendalian yang paling sederhana jika populasi hama dan penyakit masih rendah. Pemungutan telur, ulat, maupun penangkapan hama dapat dilakukan secara manual atau dengan alat seperti perangkap. Hama yang tertangkap selanjutnya dibunuh dan sisa tanaman yang terserang maupun serasahnya dibakar.&lt;/p&gt;\r\n&lt;p&gt;&lt;strong&gt;Pengendalian biologi atau hayati&lt;/strong&gt;&amp;nbsp;dengan memanfaatkan musuh alami atau agens hayati. Selain itu dengan pemanfaatan bahan kimia dari tumbuhan untuk mengendalikan hama maupun penyakit. Biopestisida yang mudah diracik sendiri dapat berasal dari biji dan daun tanaman seperti sirsak, srikaya, dan mindi, Penggunaan agens hayati seperti cendawan entomopatogen Beauveria bassiana, Metarhizium, dan virus NPV dapat mengendalikan ulat grayak. Sedangkan penggunaan&amp;nbsp;&lt;em&gt;Trichoderma spp&lt;/em&gt;. dapat mengendalikan penyakit tular tanah seperti rebah kecambah, busuk akar, dan layu.&lt;/p&gt;\r\n&lt;p&gt;&lt;strong&gt;Pengendalian kimia&lt;/strong&gt;&amp;nbsp;menggunakan bahan aktif pestisida sintetis merupakan alternatif pengendalian terakhir jika terjadi ledakan hama dan penyakit. Penggunaan pestisida kimia harus mengikuti kaidah 6 tepat yaitu tepat sasaran, jenis, dosis dan konsentrasi, cara, waktu, dan mutu. Informasi mengenai pestisida yang tepat dapat ditemukan pada label kemasan yang memuat informasi bahan aktif, cara kerja, komoditas, sasaran hama dan penyakit, dosis dan konsentrasi, serta volume semprot.&lt;/p&gt;\r\n&lt;p&gt;Dalam rangka mencapai hasil panen yang maksimal, pengendalian kultur teknis dan pengendalian secara fisik dan hayati harus diutamakan. Sedangkan pengendalian kimia harus digunakan hanya sebagai alternatif pengendalian terakhir. (DA&amp;rsquo;23)&lt;/p&gt;\r\n&lt;p style=&quot;line-height: 1;&quot;&gt;&lt;strong&gt;Sumber:&lt;/strong&gt;&lt;/p&gt;\r\n&lt;p style=&quot;line-height: 1;&quot;&gt;Petunjuk Teknis Budidaya dan Pengolahan Talas Varietas Beneng/ Pepi Nur Susilawati, Zuraida Yursak, Sri Kurniawati, Andy Saryoko; Jakarta: BPTP Banten, 2021.&lt;/p&gt;', '2023-11-04 01:01:00', 'Info Liter', '6547d89f59fc7.png'),
(5, 'Resep Praktik Membuat Bolu Kukus Talas', '&lt;p&gt;Dalam dunia kuliner Indonesia, keberagaman rasa kue tradisional selalu menjadi daya tarik tersendiri. Salah satu kreasi menarik yang akan kita bahas kali ini adalah &quot;Bolu Kukus Talas.&quot; Kombinasi lembutnya bolu kukus dengan aroma khas talas akan memberikan sentuhan berbeda pada sajian kue yang biasa. Simaklah resep praktis berikut untuk menciptakan bolu kukus talas yang lezat dan memikat selera. Dengan bahan-bahan sederhana dan langkah-langkah yang mudah, Anda dapat menikmati sensasi cita rasa yang unik dalam setiap gigitannya. Mari kita mulai petualangan memasak dan menciptakan kenangan manis bersama bolu kukus talas ini!&lt;/p&gt;\r\n&lt;h3&gt;Bahan-Bahan&lt;/h3&gt;\r\n&lt;ul&gt;\r\n&lt;li id=&quot;ingredient_67122310&quot; class=&quot;py-sm border-b last:border-0 border-cookpad-gray-300 border-dashed&quot;&gt;\r\n&lt;div&gt;&lt;bdi class=&quot;font-semibold&quot;&gt;125 gr&lt;/bdi&gt;&amp;nbsp;tepung ketan&lt;/div&gt;\r\n&lt;/li&gt;\r\n&lt;li id=&quot;ingredient_67122311&quot; class=&quot;py-sm border-b last:border-0 border-cookpad-gray-300 border-dashed&quot;&gt;\r\n&lt;div&gt;&lt;bdi class=&quot;font-semibold&quot;&gt;24 gr&lt;/bdi&gt;&amp;nbsp;tepung beras&lt;/div&gt;\r\n&lt;/li&gt;\r\n&lt;li id=&quot;ingredient_67122312&quot; class=&quot;py-sm border-b last:border-0 border-cookpad-gray-300 border-dashed&quot;&gt;\r\n&lt;div&gt;&lt;bdi class=&quot;font-semibold&quot;&gt;70 ml&lt;/bdi&gt;&amp;nbsp;air hangat&lt;/div&gt;\r\n&lt;/li&gt;\r\n&lt;li id=&quot;ingredient_67122313&quot; class=&quot;py-sm border-b last:border-0 border-cookpad-gray-300 border-dashed&quot;&gt;\r\n&lt;div&gt;&lt;bdi class=&quot;font-semibold&quot;&gt;1 sdt&lt;/bdi&gt;&amp;nbsp;pasta talas&lt;/div&gt;\r\n&lt;/li&gt;\r\n&lt;li id=&quot;ingredient_67122314&quot; class=&quot;py-sm border-b last:border-0 border-cookpad-gray-300 border-dashed&quot;&gt;\r\n&lt;div&gt;&lt;bdi class=&quot;font-semibold&quot;&gt;1/4 sdt&lt;/bdi&gt;&amp;nbsp;garam&lt;/div&gt;\r\n&lt;/li&gt;\r\n&lt;li id=&quot;ingredient_67122315&quot; class=&quot;py-sm border-b last:border-0 border-cookpad-gray-300 border-dashed&quot;&gt;\r\n&lt;div&gt;&lt;bdi class=&quot;font-semibold&quot;&gt;1 keping&lt;/bdi&gt;&amp;nbsp;gula merah (me : diameter 5 cm), potong kecil-kecil&lt;/div&gt;\r\n&lt;/li&gt;\r\n&lt;li id=&quot;ingredient_67122316&quot; class=&quot;py-sm border-b last:border-0 border-cookpad-gray-300 border-dashed&quot;&gt;\r\n&lt;div&gt;&lt;bdi class=&quot;font-semibold&quot;&gt;50 gr&lt;/bdi&gt;&amp;nbsp;kelapa parut&lt;/div&gt;\r\n&lt;/li&gt;\r\n&lt;li id=&quot;ingredient_67122317&quot; class=&quot;py-sm border-b last:border-0 border-cookpad-gray-300 border-dashed&quot;&gt;\r\n&lt;div&gt;&lt;bdi class=&quot;font-semibold&quot;&gt;1/2 sdt&lt;/bdi&gt; vanili bubuk&lt;/div&gt;\r\n&lt;/li&gt;\r\n&lt;/ul&gt;\r\n&lt;h3&gt;Cara Membuat&lt;/h3&gt;\r\n&lt;ul&gt;\r\n&lt;li&gt;Persiapkan semua bahan yang diperlukan untuk membuat kue ini.&lt;/li&gt;\r\n&lt;li&gt;Campur semua bahan kecuali pasta talas. Gunakan mixer dengan kecepatan tinggi selama kurang lebih 15-20 menit hingga adonan menjadi kental dan mengembang dengan sempurna.&lt;/li&gt;\r\n&lt;li&gt;Bagi adonan menjadi dua bagian. Satu bagian tambahkan pasta talas secukupnya, sementara satu bagian lainnya biarkan tanpa warna.&lt;/li&gt;\r\n&lt;li&gt;Siapkan cetakan dan alasi dengan paper cup. Tuangkan adonan bergantian ke dalam cetakan sampai penuh.&lt;/li&gt;\r\n&lt;li&gt;Kukus adonan dalam kukusan yang sebelumnya sudah dipanaskan, jangan lupa tutupnya dilapisi kain atau serbet. Kukus selama 20 menit dan beri jarak agar kue mekar dengan sempurna.&lt;/li&gt;\r\n&lt;/ul&gt;', '2023-11-06 01:08:00', 'Asnida Ria', '6547db3078c60.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_komentar`
--

CREATE TABLE `tbl_komentar` (
  `id_komentar` int(11) NOT NULL,
  `id_users` int(11) NOT NULL,
  `id_artikel` int(11) NOT NULL,
  `isi` text NOT NULL,
  `tanggalkomentar` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_komentar`
--

INSERT INTO `tbl_komentar` (`id_komentar`, `id_users`, `id_artikel`, `isi`, `tanggalkomentar`) VALUES
(18, 4, 4, 'Yang bener belum ada yang berkomentar?\r\n', '2023-11-13 15:37:25'),
(19, 19, 3, 'ini komentar dari ben', '2023-11-13 21:01:02'),
(20, 19, 3, 'yess', '2023-11-13 21:01:42'),
(21, 4, 5, 'halo saya kelompok 2', '2023-11-20 15:15:12'),
(22, 4, 5, 'saya izin memberikan komentar terkait artikel di atas...', '2023-11-20 15:19:44'),
(23, 39, 5, 'hai brok', '2023-11-20 16:54:00'),
(24, 21, 2, 'bagus artikel nya', '2023-11-21 15:19:11'),
(26, 21, 5, 'mantap.. tutorialnya sangat mudah dipahami👍', '2023-11-24 12:33:21');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pemetaan`
--

CREATE TABLE `tbl_pemetaan` (
  `id` int(100) NOT NULL,
  `productname` varchar(200) NOT NULL,
  `manufacturername` varchar(255) NOT NULL,
  `manufacturerbrand` varchar(15) NOT NULL,
  `longitude` varchar(255) NOT NULL,
  `latitude` varchar(255) NOT NULL,
  `linkname` varchar(1000) NOT NULL,
  `jamname` varchar(50) NOT NULL,
  `kotakecamatanname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_pemetaan`
--

INSERT INTO `tbl_pemetaan` (`id`, `productname`, `manufacturername`, `manufacturerbrand`, `longitude`, `latitude`, `linkname`, `jamname`, `kotakecamatanname`) VALUES
(5, 'Lapis Talas Sangkuriang cabang Stasiun Bogor', ' Jl. St. Bogor, RT.04/RW.06, Cibogor, Kecamatan Bogor Tengah, Kota Bogor, Jawa Barat 16124', '1500262', '106.79098264969653', '-6.593982890800828, ', 'https://www.google.com/maps/dir//CQ4R%2B998+Lapis+Talas+Sangkuriang+cabang+Stasiun+Bogor,+Jl.+St.+Bogor,+RT.04%2FRW.06,+Cibogor,+Kecamatan+Bogor+Tengah,+Kota+Bogor,+Jawa+Barat+16124/@-6.5940921,106.7896576,18z/data=!4m8!4m7!1m0!1m5!1m1!1s0x2e69c5b6f3efce67:0xd919c692a4f6bc47!2m2!1d106.7909809!2d-6.5941007?entry=ttu', '06.00-20.00', 'Bogor,Bogor Tengah'),
(7, 'Kukus talas bigor', 'Jl. Ahmad Sobana, RT.03/RW.07, Tegal Gundil, Kec. Bogor Utara, Kota Bogor, Jawa Barat 16152', '082311313304', '106.81380880939794', '-6.582572061821245', 'https://www.google.com/maps/dir//CR87%2BXG7+Kukus+talas+bigor,+Jl.+Ahmad+Sobana,+RT.03%2FRW.07,+Tegal+Gundil,+Kec.+Bogor+Utara,+Kota+Bogor,+Jawa+Barat+16152/@-6.5829435,106.8131687,18.88z/data=!4m8!4m7!1m0!1m5!1m1!1s0x2e69c5474fab3ab5:0xad0f254a5ce79636!2m2!1d106.8138078!2d-6.5825795?entry=ttu', '07.00 - 18.00', 'Bogor, Bogor Utara'),
(8, 'Rumah Talas Bogor - Lapis Talas &amp; Pusat Oleh Oleh Khas Bogor', 'Jalan Raya Pajajaran No.77C Tegallega Kecamatan Bogor Tengah, RT.04/RW.05, Baranangsiang, Terminal, Bogor City, West Java 16129', '08118496117', '106.80613550702492', '-6.603123693249631', 'https://www.google.com/maps/dir//Rumah+Talas+Bogor+-+Lapis+Talas+%26+Pusat+Oleh+Oleh+Khas+Bogor,+Front+of,+Jalan+Raya+Pajajaran+No.77C+Tegallega+Kecamatan+Bogor+Tengah,+RT.04%2FRW.05,+Baranangsiang,+Terminal,+Bogor+City,+West+Java+16129/@-6.6031157,106.804848,18z/data=!4m8!4m7!1m0!1m5!1m1!1s0x2e69c5dcb3aaa1b1:0xc2b3340cf684b362!2m2!1d106.8061399!2d-6.6031157?entry=ttu', '07.00 - 22.00', 'Bogor, Bogor Tengah'),
(11, 'Talas Kukus Khas Bogor', 'Jl. Achmad Sobana No.73, RT.01/RW.02, Tegal Gundil, Kec. Bogor Utara, Kota Bogor, Jawa Barat 16152', '082311313307', '106.81292231284957', '-6.581166367147421', 'https://www.google.com/maps/dir//Talas+Kukus+Khas+Bogor,+Jl.+Achmad+Sobana+No.73,+RT.01%2FRW.02,+Tegal+Gundil,+Kec.+Bogor+Utara,+Kota+Bogor,+Jawa+Barat+16152/@-6.5825149,106.8106719,17.06z/data=!4m17!1m8!3m7!1s0x2e69c429591229cf:0x96ae9a6f461da752!2sTalas+Kukus+Khas+Bogor!8m2!3d-6.5811177!4d106.8129548!15sCgV0YWxhc1oHIgV0YWxhc5IBE211cnRhYmFrX3Jlc3RhdXJhbnTgAQA!16s%2Fg%2F11g86n36jq!4m7!1m0!1m5!1m1!1s0x2e69c429591229cf:0x96ae9a6f461da752!2m2!1d106.8129422!2d-6.5811504?entry=ttu', '09.00 - 18.00', 'Bogor, Bogor Utara'),
(12, 'Toko Lapis Talas Bogor Aida', 'Gedung Alumni IPB, Jl. Raya Pajajaran No.54 Samping Terminal Damri Baranangsiang, RT.04/RW.05, Tegallega, Kecamatan Bogor Tengah, Kota Bogor, Jawa Barat 16128', '087843210415', '106.80608800955387', '-6.602604701563343', 'https://www.google.com/maps/dir//Toko+Lapis+Talas+Bogor+Aida,+Gedung+Alumni+IPB,+Jl.+Raya+Pajajaran+No.54+Samping+Terminal+Damri+Baranangsiang,+RT.04%2FRW.05,+Tegallega,+Kecamatan+Bogor+Tengah,+Kota+Bogor,+Jawa+Barat+16128/@-6.6024304,106.8054333,20.11z/data=!4m8!4m7!1m0!1m5!1m1!1s0x2e69c42370296ec3:0x149d277b91fe5948!2m2!1d106.8060884!2d-6.6026048?entry=ttu', '07.00 - 20.00', 'Bogor, Bogor Tengah'),
(13, 'Kue Talas Bogor Muara Sari', 'VIII No.10, Sel., Jl. Lolongok, RT.05/RW.05, Empang, Kec. Bogor Sel., Kota Bogor, Jawa Barat 16132', '085714184174', '106.79699369508025', '-6.612191598275753', 'https://www.google.com/maps/dir//Kue+Talas+Bogor+Muara+Sari,+VIII+No.10,+Sel.,+Jl.+Lolongok,+RT.05%2FRW.05,+Empang,+Kec.+Bogor+Sel.,+Kota+Bogor,+Jawa+Barat+16132/@-6.6124473,106.7944467,17.47z/data=!4m8!4m7!1m0!1m5!1m1!1s0x2e69c5eb777650af:0xbc875234da62109c!2m2!1d106.7969957!2d-6.6121896?entry=ttu', '08.00 - 18.00', 'Bogor, Bogor Selatan'),
(14, 'Kukus talas kang uliiih', 'Jl. Achmad Sobana Jl. Bangbarung Raya, RT.01/RW.07, Tegal Gundil, Kec. Bogor Utara, Kota Bogor, Jawa Barat 16152', '089525817436', '106.81552699401485', '-6.582102207925252', 'https://www.google.com/maps/dir//CR98%2B562+Kukus+talas+kang+uliiih,+Jl.+Achmad+Sobana+Jl.+Bangbarung+Raya,+RT.01%2FRW.07,+Tegal+Gundil,+Kec.+Bogor+Utara,+Kota+Bogor,+Jawa+Barat+16152/@-6.5821539,106.8150385,19.83z/data=!4m8!4m7!1m0!1m5!1m1!1s0x2e69c509093f16cf:0x899e827bc6054d5c!2m2!1d106.8155272!2d-6.5821035?entry=ttu', '08.00 - 08.00', 'Bogor, Bogor Utara'),
(15, 'Rumah Talas Bogor - Lapis Talas & Pusat Oleh Oleh Khas Bogor', 'Jl. Raya Pajajaran No.102, Bantarjati, Kec. Bogor Utara, Kota Bogor, Jawa Barat 16153', '08118496117', '106.80778147171984', '-6.573750114517899', 'https://www.google.com/maps/dir//Rumah+Talas+Bogor+-+Lapis+Talas+%26+Pusat+Oleh+Oleh+Khas+Bogor,+Jl.+Raya+Pajajaran+No.102,+Bantarjati,+Kec.+Bogor+Utara,+Kota+Bogor,+Jawa+Barat+16153/@-6.6019878,106.7624792,13z/data=!4m8!4m7!1m0!1m5!1m1!1s0x2e69c5c3530fd837:0xafaa22f4fec2c1ba!2m2!1d106.8077993!2d-6.5737303?entry=ttu', '07.00 - 22.00', 'Bogor, Bogor Utara'),
(16, 'Lapis Bogor Sangkuriang - Toko Resmi Sudirman', 'Jl. Jend. Sudirman No.22.c, RT.01/RW.04, Sempur, Kecamatan Bogor Tengah, Kota Bogor, Jawa Barat 16124', '0211500262', '106.79704224042642', '-6.5872911247163906', 'https://www.google.com/maps/dir//Lapis+Bogor+Sangkuriang+-+Toko+Resmi+Sudirman,+Jl.+Jend.+Sudirman+No.22.c,+RT.01%2FRW.04,+Sempur,+Kecamatan+Bogor+Tengah,+Kota+Bogor,+Jawa+Barat+16124/@-6.5873857,106.7640343,14z/data=!4m8!4m7!1m0!1m5!1m1!1s0x2e69c5cad5ecd42b:0x924253247013fea7!2m2!1d106.7972011!2d-6.5873874?entry=ttu', '06.00 - 22.00', 'Bogor, Bogor Tengah'),
(17, 'Talas kukus mr.koboy', 'Jl. Suryakencana No.253, RT.01/RW.02, Gudang, Kecamatan Bogor Tengah, Kota Bogor, Jawa Barat 16126', '082115937473', '106.80354138734046', '-6.608760786530071', 'https://www.google.com/maps/dir//Talas+kukus+mr.koboy,+Jl.+Suryakencana+No.253,+RT.01%2FRW.02,+Gudang,+Kecamatan+Bogor+Tengah,+Kota+Bogor,+Jawa+Barat+16126/@-6.6088238,106.7760862,14z/data=!4m8!4m7!1m0!1m5!1m1!1s0x2e69c5976a771d73:0x39a2cccd35257c4f!2m2!1d106.803578!2d-6.608825?entry=ttu', '09.00 - 17.00', 'Bogor, Bogor Tengah'),
(18, 'Talas Kukus Aneka Rasa', 'Jl. Nasional 11, RT.03/RW.04, Baranangsiang, Kec. Bogor Tim., Kota Bogor, Jawa Barat 16143', '08118496117', '106.8130723594081', '-6.613096318393674', 'https://www.google.com/maps/dir//Talas+Kukus+Aneka+Rasa,+Jl.+Nasional+11,+RT.03%2FRW.04,+Baranangsiang,+Kec.+Bogor+Tim.,+Kota+Bogor,+Jawa+Barat+16143/@-6.6090326,106.8038875,14.7z/data=!4m8!4m7!1m0!1m5!1m1!1s0x2e69c5a187905b85:0xeed02160c8addb68!2m2!1d106.813155!2d-6.6130089?entry=ttu', '07.00 - 22.00', 'Bogor, Bogor Timur'),
(19, 'Talas Ketan Kukus By VhiQha Cab Bogor', 'Jl. Sholeh Iskandar Blok, Jl. Pangkalan Raya No.34, RT.02/RW.02, Cibuluh, Kec. Bogor Utara, Kota Bogor, Jawa Barat 16151', '085759492124', '106.80837136416442', '-6.564001830621911', 'https://www.google.com/maps/dir//Talas+Ketan+Kukus+By+VhiQha+Cab+Bogor,+Jl.+Sholeh+Iskandar+Blok,+Jl.+Pangkalan+Raya+No.34,+RT.02%2FRW.02,+Cibuluh,+Kec.+Bogor+Utara,+Kota+Bogor,+Jawa+Barat+16151/@-6.5640068,106.7996059,16z/data=!4m8!4m7!1m0!1m5!1m1!1s0x2e69c5264663671d:0x1f9112d10398dc7e!2m2!1d106.8084146!2d-6.5640062?entry=ttu', '07.00 - 22.00', 'Bogor, Bogor Utara'),
(20, 'Talas kukus sukasari BAENG (pinggir x one)', 'Jl. Siliwangi, RT.02/RW.02, Sukasari, Kec. Bogor Tim., Kota Bogor, Jawa Barat 16133', '085888804122', '106.81127952391536', '-6.6170212976232134', 'https://www.google.com/maps/dir//9RM6%2B5GC+Talas+kukus+sukasari+BAENG+(pinggir+x+one),+Jl.+Siliwangi,+RT.02%2FRW.02,+Sukasari,+Kec.+Bogor+Tim.,+Kota+Bogor,+Jawa+Barat+16133/@-6.6170673,106.8038598,16z/data=!4m8!4m7!1m0!1m5!1m1!1s0x2e69c5dfe0af9ce5:0xa4001aea3bf13cbe!2m2!1d106.811263!2d-6.6170674?entry=ttu', '14.00 - 21.30', 'Bogor, Bogor Timur'),
(21, 'Alek pisang dan talas bogor', 'Jl. Siliwangi No.23, RT.01/RW.04, Sukasari, Kec. Bogor Sel., Kota Bogor, Jawa Barat 16134', '083807046829', '106.81098367365533', '-6.616833492104012, ', 'https://www.google.com/maps/dir//Alek+pisang+dan+talas+bogor,+Jl.+Siliwangi+No.23,+RT.01%2FRW.04,+Sukasari,+Kec.+Bogor+Sel.,+Kota+Bogor,+Jawa+Barat+16134/@-6.6157921,106.809685,17.76z/data=!4m8!4m7!1m0!1m5!1m1!1s0x2e69c54f5fcc7aa1:0xebb8d3a96f2dbdd0!2m2!1d106.8109817!2d-6.6168249?entry=ttu', '06.00-20.00', 'Bogor, Bogor Timur'),
(22, 'Lapis Bogor Sangkuriang - Toko Resmi Jalan Baru', 'Jl. Sholeh Iskandar No.18B, RT.01/RW.10, Kedungbadak, Kec. Tanah Sereal, Kota Bogor, Jawa Barat 16164', '08111500262', '106.79436338517952', '-6.561677521094256, ', 'https://www.google.com/maps/dir//Lapis+Bogor+Sangkuriang+-+Toko+Resmi+Jalan+Baru,+Jl.+Sholeh+Iskandar+No.18B,+RT.01%2FRW.10,+Kedungbadak,+Kec.+Tanah+Sereal,+Kota+Bogor,+Jawa+Barat+16164/@-6.5626318,106.7908568,16.2z/data=!4m8!4m7!1m0!1m5!1m1!1s0x2e69c419fd39e97f:0x2e644c415fbe3bd5!2m2!1d106.794388!2d-6.5616891?entry=ttu', '06.00 - 22.00', 'Bogor, Tanah Sereal'),
(24, 'Toko Talas Sekolah Vokasi IPB', 'Sekolah Vokasi IPB', '08123333', '106.80611479388853', '-6.589251159497706', 'https://www.google.com/maps/dir//Sekolah+Vokasi+Institut+Pertanian+Bogor,+Jl.+Kumbang+No.14,+RT.02%2FRW.06,+Babakan,+Kecamatan+Bogor+Tengah,+Kota+Bogor,+Jawa+Barat+16128/@-6.5892185,106.8059555,21z/data=!4m8!4m7!1m0!1m5!1m1!1s0x2e69c5d2e602b501:0x25a12f0f97fac4ee!2m2!1d106.8061148!2d-6.5892505?entry=ttu', '08.00 - 16.00', 'Bogor, Bogor Tengah');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_produk`
--

CREATE TABLE `tbl_produk` (
  `id_produk` int(10) NOT NULL,
  `id_users` int(11) NOT NULL,
  `nama_produk` varchar(50) NOT NULL,
  `harga` varchar(50) NOT NULL,
  `deskripsi_produk` text NOT NULL,
  `stok` int(11) NOT NULL,
  `kategori` varchar(100) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `gambar_path` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_produk`
--

INSERT INTO `tbl_produk` (`id_produk`, `id_users`, `nama_produk`, `harga`, `deskripsi_produk`, `stok`, `kategori`, `gambar`, `gambar_path`) VALUES
(1, 39, 'Buah Talas', 'Rp12.000/Kg', 'Terjamin kualitas dan kesegarannya. Dibudidayakan dengan cinta dan perhatian, talas siap untuk menjadi bahan utama dalam hidangan.', 99, 'Buah Talas', 'buahtalas.jpg', ''),
(6, 39, 'Lapis Bunder', 'Rp38.000', 'Nikmati kelezatan tradisional dengan Lapis Bunder, lapis legit yang lembut dan manis, dijamin memanjakan lidah dalam setiap gigitan.', 12, 'Kue', '654a94700d1d3.png', ''),
(7, 39, 'Es Taro', 'Rp8.500', 'Es Taro Seger adalah pilihan sempurna untuk meredakan dahaga. Dengan rasa taro yang autentik, ini adalah minuman penyegar yang tak tertandingi.', 50, 'Minuman', '654a94b71328d.png', ''),
(8, 39, 'Keripik Talas', 'Rp20.000', 'Camilan sehat dan renyah yang cocok untuk semua kesempatan. Dibuat dari talas segar, keripik ini  memberikan rasa yang gurih dan kaya serat.', 12, 'Belum Siap', '654b2848355e5.png', ''),
(9, 39, 'Lapis Bogor', 'Rp36.000', 'Lapisan tipis yang lembut dan rasa manis yang khas, membuat Lapis Bogor menjadi cemilan semua orang yang tak tergantikan.', 5, 'Kue', '654b561fb0f9f.png', ''),
(10, 39, 'Macaroon', 'Rp15.000', 'Macaroon nomor 1 se-Jabodetabek!', 2, 'Kue', '654b5717cdb5b.png', ''),
(11, 39, 'Lapis Coklat', 'Rp32.000', 'Lapis Bogor dengan taburan coklat krimi yang anggun dan menawan hati.', 10, 'Kue', '654b58f71f47b.png', ''),
(12, 23, 'Keripik Talas Pak Ijrew', 'Rp7.777', 'Keripik yang tidak keras, pas untuk ngemil di saat hujan tiba.', 90, 'Makanan', '654b59a3da8eb.png', ''),
(13, 23, 'Talas Pak Husnik', 'Rp9.800/Kg', 'Tidak perlu deskripsi untuk mendeskripsikan talas yang segar dan tidak ada busuk sama sekali ini. Dijamin 99,99% talas dalam performa terbaiknya!', 20, 'Buah Talas', '654b5a2ede293.png', ''),
(14, 23, 'Benih Talas', 'Rp5.500', 'Benih talas terbaik!', 17, 'Benih Talas', '654b5a95c7dc9.png', ''),
(15, 23, 'Tanaman Hias Talasss', 'Rp18.500', 'Tanaman hias cocok buat kamu yang butuh penghias ruangan yang tidak hanya bagus tapi bermanfaat untuk kesehatan.', 33, 'Tanaman hias', '654b5ae33cfe5.png', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_testimoni`
--

CREATE TABLE `tbl_testimoni` (
  `id_testimoni` int(11) NOT NULL,
  `id_users` int(11) NOT NULL,
  `testimoniweb` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_testimoni`
--

INSERT INTO `tbl_testimoni` (`id_testimoni`, `id_users`, `testimoniweb`) VALUES
(26, 20, 'halo saya kucing'),
(31, 20, 'Saya david'),
(32, 21, 'halo gaes..'),
(33, 21, 'asdasdas'),
(34, 21, 'sayang'),
(35, 21, 'Wah.. website TalasGO sangat informatif sekali, sangat membantu saya sebagai masyarakat umum dalam budidaya talas.. terima kasih TalasGO!');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_ulasan`
--

CREATE TABLE `tbl_ulasan` (
  `id_ulasan` int(11) NOT NULL,
  `id_users` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `isi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_ulasan`
--

INSERT INTO `tbl_ulasan` (`id_ulasan`, `id_users`, `id_produk`, `isi`) VALUES
(1, 21, 13, 'asd'),
(2, 20, 13, 'emang sejak kapan husnik jualan talas?wkwkwk\r\n'),
(3, 20, 13, 'adas'),
(4, 20, 13, 'sasd'),
(5, 20, 13, 'sfsd'),
(6, 20, 13, 'asd'),
(10, 21, 15, 'oi\r\n'),
(11, 21, 7, 'hai'),
(12, 21, 15, 'toko ini biasa aja'),
(13, 39, 15, 'hoy\r\n'),
(14, 21, 6, 'wah.. lapis bundernya enak bangetsss'),
(15, 19, 6, 'enak dan lembut nih kuenya, cocok dijadikan sebagai oleh-oleh..'),
(16, 43, 6, 'lapis bunder yang ini beda sih sumpah! enak banget gaes🤤'),
(17, 39, 11, 'coklatnya melimpahhhh... maknyoss!'),
(18, 43, 11, 'cocok buat dijadikan oleh-oleh👍'),
(19, 21, 15, 'hai tanaman hias!');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id_users` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role` varchar(7) NOT NULL,
  `nomorwa` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id_users`, `name`, `email`, `username`, `password`, `role`, `nomorwa`) VALUES
(4, 'Kelompok2', 'kelompok2@gmail.com', 'kelompok2', '202cb962ac59075b964b07152d234b70', 'admin', ''),
(16, 'Husnik', 'husniii@gmail.com', 'husn', '698d51a19d8a121ce581499d7b701668', 'User', ''),
(17, 'kibar', 'kibar@gmail.com', 'kibar', '202cb962ac59075b964b07152d234b70', 'User', ''),
(19, 'ben', 'ben@gmail.com', 'ben', '202cb962ac59075b964b07152d234b70', 'User', ''),
(20, 'kucing', 'kucing@gmail.com', 'kucing', '202cb962ac59075b964b07152d234b70', 'User', ''),
(21, 'boy', 'boy@gmail.com', 'boy', '202cb962ac59075b964b07152d234b70', 'User', ''),
(23, 'as', 'as@gmail.com', 'as', '202cb962ac59075b964b07152d234b70', 'Penjual', ''),
(24, 'aa', 'aa@gmail.com', 'aa', '4124bc0a9335c27f086f24ba207a4912', 'Penjual', ''),
(38, 'david', 'david@gmail.com', 'david', '202cb962ac59075b964b07152d234b70', 'Penjual', ''),
(39, 'dapid', 'dapid@gmail.com', 'dapid', '202cb962ac59075b964b07152d234b70', 'Penjual', '6282269075325'),
(42, 'Bennefit', 'bennefit.19@gmail.com', 'Ben', '0b14e0c0b7c3e08de0e751551c2a8160', 'Penjual', '6282269075325'),
(43, 'bennefit', 'bennefit.19@gmail.com', 'bennefit', '202cb962ac59075b964b07152d234b70', 'User', '');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_artikel`
--
ALTER TABLE `tbl_artikel`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_komentar`
--
ALTER TABLE `tbl_komentar`
  ADD PRIMARY KEY (`id_komentar`),
  ADD KEY `id_users` (`id_users`),
  ADD KEY `id_artikel` (`id_artikel`);

--
-- Indeks untuk tabel `tbl_pemetaan`
--
ALTER TABLE `tbl_pemetaan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_produk`
--
ALTER TABLE `tbl_produk`
  ADD PRIMARY KEY (`id_produk`),
  ADD KEY `id_users` (`id_users`);

--
-- Indeks untuk tabel `tbl_testimoni`
--
ALTER TABLE `tbl_testimoni`
  ADD PRIMARY KEY (`id_testimoni`),
  ADD KEY `id_users` (`id_users`);

--
-- Indeks untuk tabel `tbl_ulasan`
--
ALTER TABLE `tbl_ulasan`
  ADD PRIMARY KEY (`id_ulasan`),
  ADD KEY `id_users` (`id_users`),
  ADD KEY `id_produk` (`id_produk`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_users`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_artikel`
--
ALTER TABLE `tbl_artikel`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT untuk tabel `tbl_komentar`
--
ALTER TABLE `tbl_komentar`
  MODIFY `id_komentar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT untuk tabel `tbl_pemetaan`
--
ALTER TABLE `tbl_pemetaan`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT untuk tabel `tbl_produk`
--
ALTER TABLE `tbl_produk`
  MODIFY `id_produk` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=191;

--
-- AUTO_INCREMENT untuk tabel `tbl_testimoni`
--
ALTER TABLE `tbl_testimoni`
  MODIFY `id_testimoni` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT untuk tabel `tbl_ulasan`
--
ALTER TABLE `tbl_ulasan`
  MODIFY `id_ulasan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id_users` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tbl_komentar`
--
ALTER TABLE `tbl_komentar`
  ADD CONSTRAINT `tbl_komentar_ibfk_1` FOREIGN KEY (`id_users`) REFERENCES `users` (`id_users`),
  ADD CONSTRAINT `tbl_komentar_ibfk_2` FOREIGN KEY (`id_artikel`) REFERENCES `tbl_artikel` (`id`);

--
-- Ketidakleluasaan untuk tabel `tbl_produk`
--
ALTER TABLE `tbl_produk`
  ADD CONSTRAINT `tbl_produk_ibfk_1` FOREIGN KEY (`id_users`) REFERENCES `users` (`id_users`);

--
-- Ketidakleluasaan untuk tabel `tbl_testimoni`
--
ALTER TABLE `tbl_testimoni`
  ADD CONSTRAINT `tbl_testimoni_ibfk_1` FOREIGN KEY (`id_users`) REFERENCES `users` (`id_users`);

--
-- Ketidakleluasaan untuk tabel `tbl_ulasan`
--
ALTER TABLE `tbl_ulasan`
  ADD CONSTRAINT `tbl_ulasan_ibfk_1` FOREIGN KEY (`id_users`) REFERENCES `users` (`id_users`),
  ADD CONSTRAINT `tbl_ulasan_ibfk_2` FOREIGN KEY (`id_produk`) REFERENCES `tbl_produk` (`id_produk`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
