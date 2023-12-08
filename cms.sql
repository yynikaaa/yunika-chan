-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 01 Des 2023 pada 07.25
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cms`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `caraousel`
--

CREATE TABLE `caraousel` (
  `id_caraousel` int(11) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `foto` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `caraousel`
--

INSERT INTO `caraousel` (`id_caraousel`, `judul`, `foto`) VALUES
(14, 'cara5', '20231201023114.jpg'),
(18, 'cara1', '20231201051423.jpg'),
(19, 'cara2', '20231201051436.jpg'),
(20, 'cara3', '20231201053006.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`) VALUES
(4, 'Informasi'),
(5, 'Sejarah'),
(6, 'Bahasa Jawa');

-- --------------------------------------------------------

--
-- Struktur dari tabel `konfigurasi`
--

CREATE TABLE `konfigurasi` (
  `id_konfigurasi` int(11) NOT NULL,
  `judul_website` varchar(200) NOT NULL,
  `profil_website` text NOT NULL,
  `instagram` varchar(100) NOT NULL,
  `tiktok` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `telegram` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `konfigurasi`
--

INSERT INTO `konfigurasi` (`id_konfigurasi`, `judul_website`, `profil_website`, `instagram`, `tiktok`, `email`, `alamat`, `telegram`) VALUES
(1, 'Bubbly', '<p>ℬubbly\r\nadalah sebuah website yang memuat sistem informasi tentang pembelajaran gabungan yang di kembangkan oleh siswa SMKN 2 KARANGANYAR kelas 11 RPL C</p>', 'https://www.instagram.com/yynika.aa/', 'https://www.tiktok.com/@scc.ziii', 'uswatunyunika@gmail.com', 'jaten', 'https://web.telegram.org/k/#@e');

-- --------------------------------------------------------

--
-- Struktur dari tabel `konten`
--

CREATE TABLE `konten` (
  `id_konten` int(11) NOT NULL,
  `judul` varchar(200) NOT NULL,
  `keterangan` text NOT NULL,
  `foto` varchar(50) NOT NULL,
  `slug` varchar(200) NOT NULL,
  `id_kategori` varchar(20) NOT NULL,
  `tanggal` date NOT NULL,
  `username` varchar(50) NOT NULL,
  `link` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `konten`
--

INSERT INTO `konten` (`id_konten`, `judul`, `keterangan`, `foto`, `slug`, `id_kategori`, `tanggal`, `username`, `link`) VALUES
(7, ' Kesadaran Nasionalisme', 'Kekalahan demi kekalahan yang dialami oleh para pejuang membuat beberapa kalangan sadar bahwa pentingnya suatu persatuan untuk dapat mengalahkan pihak kolonial.\r\n\r\nDi samping itu ketika memasuki awal tahun 1900-an banyak kaum cendekiawan yang sadar bahwa perjuangan untuk memerdekakan bangsa tidak hanya dapat dilakukan dengan perjuangan secara fisik tetapi dapat pula dilakukan dengan diplomasi.\r\n\r\nKesadaran ini merupakan awal munculnya kebangkitan nasional yang merupakan periode penting dalam perjuangan bangsa Indonesia untuk mencapai kemerdekaan dari penjajahan Belanda.\r\n\r\nBerikut adalah ringkasan sejarah kebangkitan nasional beserta organisasi yang lahir selama periode tersebut:\r\n\r\nAwal Kebangkitan Nasional (1908-1928)\r\nBudi Utomo (1908): Organisasi pertama yang didirikan oleh para intelektual Indonesia dengan tujuan memperbaiki pendidikan dan kesejahteraan masyarakat.\r\n\r\nSumpah Pemuda (1928)\r\nPersatuan Indonesia (PI): Organisasi yang didirikan oleh para pemuda yang menuntut persatuan dan kesatuan bangsa Indonesia.\r\n\r\nPergerakan Nasionalis (1928-1942)\r\nPartai Nasional Indonesia (PNI): Partai politik yang dipimpin oleh Soekarno dan Hatta, berjuang untuk kemerdekaan Indonesia.\r\n\r\nSelain organisasi yang disebutkan di atas masih banyak organisasi lain yang menandai kebangkitan nasional di Indonesia.', '20231015112845.jpg', '-Kesadaran-Nasionalisme', '5', '2023-10-15', 'yynika', ''),
(8, 'Masa Pendudukan Jepang', 'Pendudukan Jepang di Indonesia berlangsung antara tahun 1942 sampai dengan 1945. Meski singkat pendudukan Jepang ini membawa kerusakan yang luar biasa.\r\n\r\nJutaan penduduk Indonesia meregang nyawa akibat perbudakan yang dilakukan oleh pihak Jepang.\r\n\r\nNamun, di sisi lain datangnya Jepang ini membuat pemuda-pemuda Indonesia paham terhadap ilmu militer modern.\r\n\r\nPara pemuda Indonesia dilatih Jepang untuk menjadi tentara Jepang. Namun, di tengah jalan para pemuda ini melakukan pemberontakan yang membuat pihak Jepang kesusahan.\r\n\r\nDatangnya bangsa Jepang ini mulanya disambut dengan baik. Hal ini dikarenakan bangsa Jepang mengatakan kalau dirinya adalah saudara tua bangsa Indonesia yang akan membantu mengusir Belanda.\r\n\r\nJepang memang mengusir Belanda namun bukannya memberikan kemerdekaan kepada Indonesia melainkan malah melakukan penjajahan terhadap Indonesia.\r\n\r\nPendudukan Jepang di Indonesia berakhir ketika kota Hiroshima dan Nagasaki di bom atom oleh pihak Sekutu.\r\n\r\nSerangan mendadak ini membuat Jepang menyerah tanpa syarat kepada pihak Sekutu dan menjadi akhir dari pendudukan Jepang di Indonesia.', '20231015113101.jpg', 'Masa-Pendudukan-Jepang', '5', '2023-10-15', 'yynika', ''),
(9, 'Indonesia Merdeka', 'Setelah Jepang menyerah tanpa syarat pada tanggal 15 Agustus 1945, Indonesia memproklamasikan kemerdekaannya pada tanggal 17 Agustus 1945.\r\n\r\nPeristiwa Rengasdengklok\r\nPeristiwa ini terjadi tanggal 16 Agustus 1945, saat itu Soekarno, Hatta, dan beberapa tokoh lainnya ditangkap oleh beberapa pemuda dan dibawa ke Rengasdengklok, Jawa Barat.\r\n\r\nDi sana, para pemuda mendesak agar para tokoh-tokoh tersebut untuk segera memproklamasikan kemerdekaan Indonesia\r\n\r\nPerumusan teks proklamasi\r\nSetelah dibebaskan dari tahanan, Soekarno dan Hatta bersama-sama merumuskan teks proklamasi kemerdekaan Indonesia.\r\n\r\nPerumusan teks proklamasi ini dilakukan di kediaman Laksamana Maeda yang merupakan petinggi pasukan Jepang.\r\n\r\nHasil teks proklamasi yang dirumuskan ini diketik oleh Sayuti Melik. Sementara untuk proklamasi kemerdekaan Indonesia dipilih pada tanggal 17 Agustus 1945.\r\n\r\nSoekarno dan Hatta terpilih untuk memproklamasikan kemerdekaan Indonesia di depan rumah Soekarno di Jalan Pegangsaan Timur No. 56 Jakarta\r\n\r\nProklamasi kemerdekaan Indonesia menjadi tonggak sejarah penting dalam perjuangan bangsa Indonesia untuk merdeka dari penjajahan.\r\n\r\nMeskipun Indonesia telah memproklamasikan kemerdekaannya, perjuangan untuk mempertahankan kemerdekaan masih berlanjut.', '20231015113622.jpg', 'Indonesia-Merdeka', '5', '2023-10-15', 'yynika', ''),
(10, 'Perang Mempertahankan Kemerdekaan', 'Proklamasi bukan merupakan titik akhir perjuangan yang dilakukan bangsa Indonesia. Selepas memproklamasikan kemerdekaannya.\r\n\r\nKemerdekaan Indonesia terganggu oleh beberapa upaya yang dilakukan Belanda untuk kembali menjajah Indonesia.\r\n\r\nBelanda yang datang dengan menggandeng NICA benar-benar berhasrat untuk kembali menguasai Indonesia dengan cara militer.\r\n\r\nSontak saja tindakan Belanda ini membuat pejuang tanah air yang terdiri dari kalangan militer dan laskar-laskar rakyat geram.\r\n\r\nPertempuran pecah dimana-mana dan membuat puluhan atau bahkan ratusan ribu pejuang tanah air gugur,\r\n\r\nBeberapa pertempuran terkenal yang terjadi selepas Indonesia merdeka adalah pertempuran Surabaya, Bandung Lautan Api, Palagan Ambarawa dan lain-lain.\r\n\r\nBegitu dahsyatnya pertempuran-pertempuran ini sampai membuka mata dunia yang kemudian menggelar sejumlah perdamaian untuk mendamaikan Indonesia dan Belanda.\r\n\r\nSetelah melakukan berbagai perundingan, tercapailah suatu ketetapan yang mengharuskan Belanda angkat kaki dari Indonesia. Setelah itu Indonesia sepenuhnya menjadi bangsa yang merdeka dan berdaulat.', '20231015114103.jpg', 'Perang-Mempertahankan-Kemerdekaan', '5', '2023-10-15', 'yynika', ''),
(11, 'Imperialisme dan Kolonialisme', 'Bila dibandingkan dengan negara-negara lain Indonesia belum bisa dikatakan sebagai bangsa yang memiliki kemampuan kuat secara ekonomi dan benar-benar berdiri sebagai bangsa yang mandiri.\r\n\r\nGenerasi muda yang lebih mengagungkan budaya barat. Minimnya perasaan bangga yang dimiliki generasi muda untuk menjadi bangsa Indonesia merupakan salah satu dampak dari imperialisme dan kolonialisme bangsa barat yang belum sepenuhnya hilang.\r\n\r\nImperialisme dan kolonialisme bangsa eropa terhadap Indonesia sejak abad ke-17 telah merubah banyak hal dari tanah nusantara.\r\n\r\nDalam bab pertama ini akan membahas mengenai hilangnya kedaulatan bangsa-bangsa nusantara sejak adanya imperialisme dan kolonialisme yang dilakukan bangsa Eropa selama hampir 350 tahun.\r\n\r\nBangsa Eropa yang melakukan imperialisme dan kolonialisme di Indonesia antara lain Belanda, Inggris, dan Portugis.\r\n\r\nBangsa-bangsa ini mulanya datang untuk berdagang rempah-rempah. Seiring dengan berjalannya waktu.\r\n\r\nBangsa Eropa ini mulai memiliki keinginan untuk menguasai sejumlah wilayah di Indonesia dengan tujuan dapat memonopoli perdagangan rempah-rempah.\r\n\r\nSelain itu imperialisme dan kolonialisme bangsa Eropa ini juga untuk menerapkan semangat 3 G (gold, gospel, dan glory).\r\n\r\nDatangnya bangsa-bangsa Eropa ini juga merupakan awal mula penyebaran agama kristen di beberapa daerah di nusantara.\r\n\r\nPolitik devide et impera atau yang lebih dikenal dengan politik adu domba merupakan senjata ampuh bangsa Eropa untuk memecah-belah persatuan dan kesatuan kerajaan-kerajaan di Indonesia.\r\n\r\nTidak adanya persatuan dan kesatuan ini bangsa-bangsa Eropa tadi lebih mudah untuk melakukan imperialisme dan kolonialisme terhadap Indonesia.', '20231015114206.jpg', 'Imperialisme-dan-Kolonialisme', '5', '2023-10-15', 'yynika', ''),
(12, 'Perlawanan Terhadap Kolonialisme', '<p style=\"text-align: justify;\">Selama terjadi imperialisme dan kolonialisme yang dilakukan bangsa Eropa ini yang paling menderita adalah kalangan rakyat. Seiring dengan berjalannya waktu, pihak-pihak yang melakukan imperialisme dan kolonialisme semakin bertindak semena-mena. Perilaku inilah yang kemudian memicu timbullah perlawanan yang dimotori oleh para petinggi kerajaan, para pangeran, sampai kalangan biasa untuk mengusir</p>\r\n<p style=\"text-align: justify;\">&nbsp;</p>\r\n<p style=\"text-align: justify;\">&nbsp;</p>\r\n<p style=\"text-align: justify;\">&nbsp;</p>\r\n<p style=\"text-align: justify;\">&nbsp;</p>\r\n<p style=\"text-align: justify;\">&nbsp;</p>\r\n<p style=\"text-align: justify;\">penjajah dari tanah air. Beberapa pertempuran yang terkenal dan tercatat sejarah diantaranya adalah sebagai berikut. Perang Tondano Perang ini terjadi di kisaran abad 17 dan berakhir 19. Tokoh utama yang menggelorakan perang ini adalah seseorang bernama Tewu. Selama hampir 200 tahun masyarakat Minahasa berjuang bahu melawan penjajahan yang dilakukan Belanda. Meski telah melakukan perjuangan panjang. Sayangnya, kekuatan Belanda masih terlalu kuat sehingga pada kisaran tahun 1800-an perlawanan masyarakat Minahasa berhasil dipadamkan. Perlawanan di Maluku Pemimpin perang Maluku yang paling terkenal di abad 19 M adalah Kapitan Pattimura dan Martha Christina Tiyahahu.</p>\r\n<p style=\"text-align: justify;\">&nbsp;</p>\r\n<p style=\"text-align: justify;\">&nbsp;</p>\r\n<p style=\"text-align: justify;\">&nbsp;</p>\r\n<p style=\"text-align: justify;\">&nbsp;Semula perlawanan Kapitan Pattimura mampu membuat Belanda terdesak. Hal ini terjadi karena seluruh masyarakat Maluku bersatu melawan Belanda. Sayangnya, Belanda bertindak licik. Melalui politik adu domba dan melempar fitnah mampu merusak kesatuan pasukan Kapitan Pattimura. Puncaknya adalah saat seorang penghianat yang disusupkan pihak Belanda mampu menangkap Kapitan Pattimura dan beberapa petinggi lainnya. Setelah tertangkap, Kapitan Pattimura dan beberapa pemimpin pasukan lainnya dijatuhi hukuman gantung. Selepas gugurnya Kapitan Pattimura ini perlawanan yang dilakukan masyarakat Maluku dapat dipadamkan. Perang Padri Tokoh penting dalam perang ini adalah Tuanku Imam Bonjol. Perang ini awalnya terjadi karena perbedaan prinsip agama antara kaum Padri dan kaum Adat. Namun, perang ini kemudian berubah menjadi perlawanan melawan penjajahan Belanda. Perang ini berlangsung dari tahun 1803 sampai dengan tahun 1837. Akhir dari perang ini dikarenakan benteng Bonjol jatuh ke tangan Belanda dan Tuanku Imam Bonjol berhasil ditangkap dan diasingkan pihak Belanda. Perang Jawa Salah satu perang paling hebat yang pernah terjadi adalah</p>\r\n<p style=\"text-align: justify;\">&nbsp;perang Jawa yang digelorakan Pangeran Diponegoro. Dalam pertempuran yang terjadi kurang dari 5 tahun yakni antara 1830-1835 ini membuat Belanda mengalami kebangkrutan yang luar biasa. Selain itu adanya perang ini juga membuat jumlah penduduk laki-laki berkurang drastis karena banyak kaum laki-laki gugur dalam peperangan. Perang ini berakhir ketika Pangeran Diponegoro berhasil ditangkap dan diasing Belanda melalui siasat yang licik. Setelah Pangeran Diponegoro tertangkap dan diasingkan. Ditambah Belanda melakukan Selain perang-perang yang disebutkan di atas masih banyak peperangan hebat yang terjadi di sejumlah daerah seperti perang Bali yang digelorakan I Gusti Ketut Jelantik, perang Banjar yang digelorakan Pangeran Antasari dan beberapa perang lainnya. Secara garis besar perang-perang ini mengalami kegagalan karena sifatnya masih bersifat kedaerahan dan belum adanya persatuan secara menyeluruh. Tidak adanya persatuan secara menyeluruh ini memudahkan pihak Belanda/pihak kolonialisme menggunakan siasat devide et impera untuk memecah belah para pejuang tanah air.</p>', '20231015114345.jpg', 'Perlawanan-Terhadap-Kolonialisme', '5', '2023-10-15', 'yynika', ''),
(15, 'Kearifan Lokal Keris', '<p>https://docs.google.com/presentation/d/10_jsNT2y6CfzYQG1WqduIRPHCP8pMw2X/edit?usp=drive_link&amp;ouid=114628292429780393177&amp;rtpof=true&amp;sd=true</p>', '20231129121918.jpg', 'Kearifan-Lokal-Keris', '6', '2023-11-29', 'yynika', 'https://docs.google.com/presentation/d/10_jsNT2y6CfzYQG1WqduIRPHCP8pMw2X/edit?usp=drive_link'),
(16, 'Gethuk', '<p><span class=\"OYPEnA text-decoration-none text-strikethrough-none\">Gethuk iku panganan jajanan utawa kudhapan sing utamane digawe saka ketela pohung . Gethuk iku panganan sing gampang ditemoni ing Jawa Tengah lan Jawa Wetan. Gethuk ana kang digawe saka tela. Rasane uga bisa werna-werna. Ana sing rasa keju, coklat, vanila, stroberi. Saliyane iki ana uga gethuk lapis, tegese gethuk kang rasane wesrna-werna lan didadekake siji.</span> <span class=\"OYPEnA text-decoration-none text-strikethrough-none\">Tela kang dipilih kudune tela kang mempur lan ora njarot, ora ketuwan lan ora bongkreken. Biasane gethuk iki disajekake karo di tawurake parutan klapa enom ing nduwure.</span></p>', '20231130022235.jpg', 'Gethuk', '6', '2023-11-30', 'yynika', ''),
(17, 'Proklamasi Kemerdekaan ', '<p>Bertekuk lutut, golongan muda mendesak golongan tua untuk segera memproklamasikan kemerdekaan Indonesia. Namun golongan tua tidak ingin terburu-buru. Mereka tidak menginginkan terjadinya pertumpahan darah pada saat proklamasi. Konsultasi pun dilakukan dalam bentuk rapat PPKI. Golongan muda tidak menyetujui rapat itu, mengingat PPKI adalah sebuah badan yang dibentuk oleh Jepang. Mereka menginginkan kemerdekaan atas usaha bangsa kita sendiri, bukan pemberian Jepang.</p>\r\n<p>&nbsp;</p>\r\n<p>Soekarno dan Hatta mendatangi penguasa militer Jepang (Gunsei) untuk memperoleh konfirmasi di kantornya di Koningsplein (Medan Merdeka). Tapi kantor tersebut kosong.</p>\r\n<p>&nbsp;</p>\r\n<p>Soekarno dan Hatta bersama Soebardjo kemudian ke kantor Bukanfu, Laksamana Muda Maeda, di Jalan Medan Merdeka Utara (Rumah Maeda di Jl Imam Bonjol 1). Maeda menyambut kedatangan mereka dengan ucapan selamat atas keberhasilan mereka di Dalat. Sambil menjawab ia belum menerima konfirmasi serta masih menunggu instruksi dari Tokyo. Sepulang dari Maeda, Soekarno dan Hatta segera mempersiapkan pertemuan Panitia Persiapan Kemerdekaan Indonesia (PPKI) pada pukul 10 pagi 16 Agustus keesokan harinya di kantor Jalan Pejambon No 2 guna membicarakan segala sesuatu yang berhubungan dengan persiapan Proklamasi Kemerdekaan.</p>\r\n<p>&nbsp;</p>\r\n<p>Sehari kemudian, gejolak tekanan yang menghendaki pengambilalihan kekuasaan oleh Indonesia makin memuncak dilancarkan para pemuda dari beberapa golongan. Rapat PPKI pada 16 Agustus pukul 10 pagi tidak dilaksanakan karena Soekarno dan Hatta tidak muncul. Peserta BPUPKI Dalam perjalanan sejarah menuju kemerdekaan Indonesia, dr. Radjiman adalah satu-satunya orang yang terlibat secara akif dalam kancah perjuangan berbangsa dimulai dari munculnya Boedi Utomo sampai pembentukan BPUPKI. Manuvernya di saat memimpin Budi Utomo yang mengusulkan pembentukan milisi rakyat disetiap daerah di Indonesia (kesadaran memiliki tentara rakyat) dijawab Belanda dengan kompensasi membentuk Volksraad dan dr. Radjiman masuk di dalamnya sebagai wakil dari Boedi Utomo.</p>\r\n<p>&nbsp;</p>\r\n<p>Pada sidang BPUPKI pada 29 Mei 1945, ia mengajukan pertanyaan apa dasar negara Indonesia jika kelak merdeka? Pertanyaan ini dijawab oleh Bung Karno dengan Pancasila. Jawaban dan uraian Bung Karno tentang Pancasila sebagai dasar negara Indonesia ini kemudian ditulis oleh Radjiman selaku ketua BPUPKI dalam sebuah pengantar penerbitan buku Pancasila yang pertama tahun 1948 di Desa Dirgo, Kecamatan Widodaren, Kabupaten Ngawi. Terbongkarnya dokumen yang berada di Desa Dirgo, Kecamatan Widodaren, Kabupaten Ngawi ini menjadi temuan baru dalam sejarah Indonesia yang memaparkan kembali fakta bahwa Soekarno adalah Bapak Bangsa pencetus Pancasila.</p>\r\n<p>&nbsp;</p>\r\n<p>Pada tanggal 9 Agustus 1945 ia membawa Bung Karno dan Bung Hatta ke Saigon dan Da Lat untuk menemui pimpinan tentara Jepang untuk Asia Timur Raya terkait dengan pengeboman Hiroshima dan Nagasaki yang menyebabkan Jepang berencana menyerah tanpa syarat kepada Sekutu, yang akan menciptakan kekosongan kekuasaan di Indonesia. tidak tahu telah terjadi peristiwa Rengasdengklok.</p>', '20231130101731.jpg', 'Proklamasi-Kemerdekaan-', '5', '2023-11-30', 'yynika', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(70) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `password` varchar(200) NOT NULL,
  `level` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `username`, `nama`, `password`, `level`) VALUES
(1, 'yynika', 'yunika', 'd1e946f4e67db4b362ad23818a6fb78a', 'Admin'),
(2, 'kayyie', 'kay', '81dc9bdb52d04dc20036dbd8313ed055', 'Konstributor');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `caraousel`
--
ALTER TABLE `caraousel`
  ADD PRIMARY KEY (`id_caraousel`);

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indeks untuk tabel `konfigurasi`
--
ALTER TABLE `konfigurasi`
  ADD PRIMARY KEY (`id_konfigurasi`);

--
-- Indeks untuk tabel `konten`
--
ALTER TABLE `konten`
  ADD PRIMARY KEY (`id_konten`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `caraousel`
--
ALTER TABLE `caraousel`
  MODIFY `id_caraousel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `konfigurasi`
--
ALTER TABLE `konfigurasi`
  MODIFY `id_konfigurasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `konten`
--
ALTER TABLE `konten`
  MODIFY `id_konten` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
