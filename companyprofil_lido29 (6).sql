-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 29 Des 2023 pada 00.33
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `companyprofil_lido29`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin_menu`
--

CREATE TABLE `admin_menu` (
  `id` int(11) NOT NULL,
  `nama` varchar(225) NOT NULL,
  `icon` varchar(225) NOT NULL,
  `url` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `admin_menu`
--

INSERT INTO `admin_menu` (`id`, `nama`, `icon`, `url`) VALUES
(1, 'Galeri', 'mdi mdi-folder-multiple-image link-icon', 'admin_menu/galeri');

-- --------------------------------------------------------

--
-- Struktur dari tabel `banner_img`
--

CREATE TABLE `banner_img` (
  `id` int(11) NOT NULL,
  `image` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `banner_img`
--

INSERT INTO `banner_img` (`id`, `image`) VALUES
(6, 'IL26WB.jpg'),
(7, 'U1B4I1.jpg'),
(9, 'L0DS8A.jpeg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `judul` varchar(225) NOT NULL,
  `isi_blog` text NOT NULL,
  `created_by` varchar(225) NOT NULL,
  `created_at` int(11) NOT NULL,
  `image` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `blog`
--

INSERT INTO `blog` (`id`, `judul`, `isi_blog`, `created_by`, `created_at`, `image`) VALUES
(5, 'Junior Web Developer1', '<p>Panggilan bagi kamu yang ingin menjadi bagian dari Kami Ethes Tech untuk kamu yang berkemauan tinggi untuk belajar Bersama kami ????</p>\r\n\r\n<p>Ayo daftarkan diri kamu sekarang juga, di program Internship untuk Junior Web Developer. ????????\\n\\nSyaratnya mudah kok :\\n1. Masih Menjalani Pendidikan Atau Sudah Lulus SMK/Diploma/Sarjana.\\n2. Sudah Memiliki Basic Skill di Bidang Pemrograman Website (PHP/HTML/CSS Javascript).\\n3. Mampu Bekerja Dalam Team.\\n4. Berkemauan Tinggi Untuk Belajar.\\n\\nMudah bukan buruan join deh !! ☝????☝????☝????\\n\\n✅ Untuk Pendaftarannya kamu Bisa Kirim CV kamu langsung ke Head Office Lido\\nGrosir Kandangan, Temanggung atau\\nKirim Email dengan CV ke rnd@ethes.tech\\n\\n✅ Kontak yang bisa dihubungi WA/TELEGRAM : 08112939780\\n\\n#lido #lido29 #lidogrosir #ethes #magelang #temanggung #wonosobo #semarang #lokertemanggung #lokermagelang #lokerjateng #lokerwonosobo #lokersemarang #disnaker\\n&#39; WHERE `blo[...]</p>\r\n', 'frina1', 1703576924, 'RZ1RA4.png'),
(6, 'Lagi lagi Lido Grosir ada Promo niiihhh', '<p><strong>Promo Lido Grosir kali ini setiap pembelian FLUFFY Baby Diapers isi 20 FREE 1 Hansanitizer</strong><br />\r\nPopok buat si kecil, jangan coba coba ya bundaa????<br />\r\n<br />\r\nFLUFFY certified lebih Lembut, Bebas Iritasi, 100% dari bahan yang aman untuk kulit si kecil<br />\r\n<em>Free handsanitizer BEBASKAN TANGAN BUNDA DARI KUMAN sebelum dan setelah gantiin popok</em>????<br />\r\n<br />\r\nBONUS TERBATAS, BELI SEKARANG JUGA<br />\r\nPromo tersedia di cabang Lido Grosir<br />\r\n???? Kandangan<br />\r\n???? Wonosobo<br />\r\n???? Kaloran<br />\r\n???? Borobudur<br />\r\n???? Sumowono<br />\r\n???? Tembarak<br />\r\n<br />\r\n<a href=\"https://www.instagram.com/explore/tags/lido/\">#lido</a> <a href=\"https://www.instagram.com/explore/tags/lido29/\">#lido29</a> <a href=\"https://www.instagram.com/explore/tags/lidogrosir/\">#lidogrosir</a> <a href=\"https://www.instagram.com/explore/tags/promolido/\">#promolido</a> <a href=\"https://www.instagram.com/explore/tags/promolidogrosir/\">#promolidogrosir</a> <a href=\"https://www.instagram.com/explore/tags/promo/\">#promo</a> <a href=\"https://www.instagram.com/explore/tags/fluffy/\">#fluffy</a> <a href=\"https://www.instagram.com/explore/tags/promofluffy/\">#promofluffy</a> <a href=\"https://www.instagram.com/explore/tags/lidokandangan/\">#lidokandangan</a> <a href=\"https://www.instagram.com/explore/tags/lidowonosobo/\">#lidowonosobo</a> <a href=\"https://www.instagram.com/explore/tags/lidokaloran/\">#lidokaloran</a> <a href=\"https://www.instagram.com/explore/tags/lidoborobudur/\">#lidoborobudur</a> <a href=\"https://www.instagram.com/explore/tags/lidosumowono/\">#lidosumowono</a> <a href=\"https://www.instagram.com/explore/tags/lidotembarak/\">#lidotembarak</a> <a href=\"https://www.instagram.com/explore/tags/temanggung/\">#temanggung</a> <a href=\"https://www.instagram.com/explore/tags/magelang/\">#magelang</a> <a href=\"https://www.instagram.com/explore/tags/semarang/\">#semarang</a> <a href=\"https://www.instagram.com/explore/tags/wonosobo/\">#wonosobo</a></p>\r\n', 'admin', 1703726570, 'AAW2JL.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `budaya`
--

CREATE TABLE `budaya` (
  `id` int(11) NOT NULL,
  `budaya` varchar(225) NOT NULL,
  `keterangan` text NOT NULL,
  `icon` varchar(225) NOT NULL,
  `image` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `budaya`
--

INSERT INTO `budaya` (`id`, `budaya`, `keterangan`, `icon`, `image`) VALUES
(1, 'LINCAH ( AGILE AND INNOVATIVE )', 'Kami bergerak mengikuti perubahan perilaku konsumen dan terus berproses menciptakan nilai kreasi untuk pelanggan.\n\n', 'bi bi-easel flex-shrink-0', 'features-2.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `busines_unit`
--

CREATE TABLE `busines_unit` (
  `id` int(11) NOT NULL,
  `badan_hukum` varchar(225) NOT NULL,
  `bisnis` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `busines_unit`
--

INSERT INTO `busines_unit` (`id`, `badan_hukum`, `bisnis`) VALUES
(1, 'FMCG1', 'CV Kukuh Tentrem Santoso\r\nCV Ponokawan Kukuh Rahardja\r\nCV Prameswari Dharma Daryono\r\nCV Ethes Widi Elfarin\r\nCV Rukun Kukuh Remboko'),
(3, 'Business Development', 'PT Ethes Teknologi Makmur\r\nCV Dagienks Seindo Berkarya\r\n'),
(5, 'Materials', 'CV Dewaruci Hutama\r\nPT Bimasuci Dagang Internasional\r\n');

-- --------------------------------------------------------

--
-- Struktur dari tabel `direksi`
--

CREATE TABLE `direksi` (
  `id` int(11) NOT NULL,
  `jabatan` varchar(225) NOT NULL,
  `nama_direksi` varchar(225) NOT NULL,
  `alamat` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `telepon` varchar(50) NOT NULL,
  `foto` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `direksi`
--

INSERT INTO `direksi` (`id`, `jabatan`, `nama_direksi`, `alamat`, `email`, `telepon`, `foto`) VALUES
(1, 'Direktur Operasional', 'Beni D Pridika', 'Jl. Contoh No. 123', 'john.doe@example.com', '123 456-7890', 'V41RBU.jpg'),
(3, 'Direktur Procurement & Purchase', 'Ronaldo Yefta', 'Jl. Contoh No. 123', 'admin@gmail.com', '123 456-7890', 'DGA6DC.jpg'),
(5, 'Direktur Finance', 'Eko Widiyanto', 'Jl. Contoh No. 123', 'super.admin@test.com', '09876546175642', 'team-3.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `distributor`
--

CREATE TABLE `distributor` (
  `id_distributor` int(11) NOT NULL,
  `distributor` varchar(225) NOT NULL,
  `produk` varchar(225) NOT NULL,
  `image` varchar(225) NOT NULL,
  `tittle` varchar(225) NOT NULL,
  `link` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `distributor`
--

INSERT INTO `distributor` (`id_distributor`, `distributor`, `produk`, `image`, `tittle`, `link`) VALUES
(4, 'LOVIAN.Inc', 'PELANGI Air Mineral', 'pelangi.jpeg', 'PELANGI Air Mineral', 'https://www.lovian.love/pelangi/'),
(5, 'PT Tays Bogainti SelarasMakanan', 'Makanan Ringan', 'trick.jpeg', 'Krakenz, TRICK', 'https://www.taysbakers.com/'),
(10, 'PT Aman Indah Makmur ', 'FLUFFY Diapers IDEAL ( Adult Diapers )', 'ideal1.jpg', 'Pamperses', 'https://aimindonesia.co.id/about.html');

-- --------------------------------------------------------

--
-- Struktur dari tabel `komisaris`
--

CREATE TABLE `komisaris` (
  `id` int(11) NOT NULL,
  `jabatan` varchar(225) NOT NULL,
  `nama_komisaris` varchar(225) NOT NULL,
  `alamat` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `telepon` varchar(50) NOT NULL,
  `image` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `komisaris`
--

INSERT INTO `komisaris` (`id`, `jabatan`, `nama_komisaris`, `alamat`, `email`, `telepon`, `image`) VALUES
(1, 'Dewan Komisaris', 'Bapak Suwahdi', 'Jl. Contoh No. 1234', 'admin@gmail.com', '0987643211446', 'team-1.jpg'),
(2, 'Dewan Komisaris', 'Ibu Miskiyah', 'Jl. Contoh No. 123', 'admin@gmail.com', '0987643211446', '9FNTR2.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kontak`
--

CREATE TABLE `kontak` (
  `id` int(11) NOT NULL,
  `alamat` text NOT NULL,
  `telepon` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `maps` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `offline_store`
--

CREATE TABLE `offline_store` (
  `id_store` int(11) NOT NULL,
  `nama_store` varchar(225) NOT NULL,
  `foto` varchar(225) NOT NULL,
  `link_alamat` varchar(225) NOT NULL,
  `outlet` varchar(225) NOT NULL,
  `alamat_outlet` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `offline_store`
--

INSERT INTO `offline_store` (`id_store`, `nama_store`, `foto`, `link_alamat`, `outlet`, `alamat_outlet`) VALUES
(10, 'Kandangan (LD 01)', 'breadcrumbs-bg.jpg', 'https://maps.app.goo.gl/E8YeFrMAfHw1P3et7', 'Lido Grosir Kandangan', 'Krajan, Kec. Kandangan, Kabupaten Temanggung, Jawa Tengah 56281'),
(11, 'Wonosobo (LD 02)', 'features-4.jpg', 'https://maps.app.goo.gl/KcbNRk2MWJLZDstu9', 'Lido Grosir Wonosobo', 'Jalan Mayjend. Bambang Sugeng &, Jl. Wonosobo - Purworejo, Rojoimo, Kec. Wonosobo, Kabupaten Wonosobo, Jawa Tengah 56316'),
(12, 'Kaloran (LD 03)', 'MCYGP0.jpg', 'https://maps.app.goo.gl/E7Rx1WU5WG4sg8X57', 'Lido Grosir Kaloran', 'Tegowanuh, Kec. Kaloran, Kabupaten Temanggung, Jawa Tengah 56282');

-- --------------------------------------------------------

--
-- Struktur dari tabel `organisasi`
--

CREATE TABLE `organisasi` (
  `id` int(11) NOT NULL,
  `nama_struktur` varchar(225) NOT NULL,
  `image` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `organisasi`
--

INSERT INTO `organisasi` (`id`, `nama_struktur`, `image`) VALUES
(1, 'Business Development Division1', 'auditor.jpg'),
(2, 'Business Development Division', 'struktur.png'),
(3, 'Business Development Division', 'D43EID.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `plan`
--

CREATE TABLE `plan` (
  `id` int(11) NOT NULL,
  `tahun` year(4) NOT NULL,
  `rencana` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `plan`
--

INSERT INTO `plan` (`id`, `tahun`, `rencana`) VALUES
(1, 2024, '15 Principle'),
(2, 2024, 'LIDO29 Omni Channel'),
(3, 2024, 'Rekonstruksi 3 Cabang'),
(5, 2024, 'LPK Pengembangan Teknologi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `role`
--

CREATE TABLE `role` (
  `as_id` int(11) NOT NULL,
  `role` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `role`
--

INSERT INTO `role` (`as_id`, `role`) VALUES
(1, 'Admin'),
(2, 'Kandidat');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sejarah`
--

CREATE TABLE `sejarah` (
  `id_sejarah` int(11) NOT NULL,
  `sejarah` text NOT NULL,
  `image` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `sejarah`
--

INSERT INTO `sejarah` (`id_sejarah`, `sejarah`, `image`) VALUES
(15, '<p><strong>Sejarah</strong></p>\r\n\r\n<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repellat nobis vitae dicta, inventore odio aspernatur ipsam at ea, voluptatum voluptates dolore a quisquam ratione aliquam? Ullam aperiam, enim maiores eligendi odit nemo soluta provident libero eveniet inventore atque amet doloribus maxime autem consequuntur delectus quam commodi <strong>dolorum neque. Adipisci eum tempore porro reiciendis commodi quisquam eligendi atque nisi aspernatur quidem ea, quis dolorem neque vero provident voluptates fuga placeat magnam, sapiente soluta? Omnis ad explicabo sint numquam provident quasi, animi deleniti, molestias quae quas distinctio tempora repudiandae veniam magnam placeat alias </strong>corporis error eos eum nam blanditiis autem. Reiciendis unde commodi excepturi molestias tempore sint eum, exercitationem iure dicta magnam quis sed amet! Odio commodi tempora assumee corrupti asperiores, dolores maxime nam, dicta tenetur incidunt neque dolorum nobis? Assumenda aperiam, voluptatem amet, minima officia nesciunt facilis mollitia quaerat porro nam inventore natus voluptatibus, distinctio ipsam ullam dicta maxime facere! Quasi perspiciatis fuga aperiam doloribus! Deserunt sint atque, corporis voluptate saepe, odit, vitae minus at inventore similique aperiam neque illum fuga.</p>\r\n', 'features-4.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `service`
--

CREATE TABLE `service` (
  `id_service` int(11) NOT NULL,
  `nama_layanan` varchar(225) NOT NULL,
  `deskripsi_layanan` text NOT NULL,
  `foto` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `service`
--

INSERT INTO `service` (`id_service`, `nama_layanan`, `deskripsi_layanan`, `foto`) VALUES
(35, 'Real Smile', 'Senyum nyata dan tulus', 'C8KG9I.jpg'),
(36, 'Respectful approach', 'Pendekatan dengan hangat', 'pendekatan.png'),
(41, 'Rapid Service', 'Pelayanan Cepat', 'LGBNZI.jpg'),
(42, 'Responsible', 'Bertanggung Jawab', 'RTLIXI.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `struktur_grup`
--

CREATE TABLE `struktur_grup` (
  `id` int(11) NOT NULL,
  `image` varchar(225) NOT NULL,
  `keterangan` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `struktur_grup`
--

INSERT INTO `struktur_grup` (`id`, `image`, `keterangan`) VALUES
(6, 'Z8ZBCP.png', 'FMCG');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tampilan`
--

CREATE TABLE `tampilan` (
  `id` int(11) NOT NULL,
  `text` varchar(225) NOT NULL,
  `sub_text` varchar(225) NOT NULL,
  `logo` varchar(225) NOT NULL,
  `logo_text` varchar(225) NOT NULL,
  `background` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tampilan`
--

INSERT INTO `tampilan` (`id`, `text`, `sub_text`, `logo`, `logo_text`, `background`) VALUES
(8, 'Selamat Datang di Lido 29', 'Belanja Bahagia | Hujan Point | Banjir Hadiah', '286BEZ.png', 'LIDO29', '286BEZ.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tentang`
--

CREATE TABLE `tentang` (
  `id_tentang` int(11) NOT NULL,
  `tentang` text NOT NULL,
  `image` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tentang`
--

INSERT INTO `tentang` (`id_tentang`, `tentang`, `image`) VALUES
(2, '<p>All editor features were divided into two main categories, available in the sidebar on the left:</p>\r\n\r\n<ul>\r\n	<li><strong>End-user Features</strong>&nbsp;&ndash; functionality that your users will see and use.</li>\r\n	<li><strong>Integration Features</strong>&nbsp;&ndash; more advanced stuff that a CKEditor 4 integrator might need.</li>\r\n</ul>\r\n\r\n<p>The samples are complemented with&nbsp;<a href=\"https://ckeditor.com/docs/ckeditor4/latest/features/index.html\">relevant documentation articles</a>&nbsp;which explain the features even more broadly &mdash; these are always available in the&nbsp;<strong>Documentation</strong>&nbsp;link next to the sample header. You can also find additional reading in the&nbsp;<strong>Related Features</strong>&nbsp;section down below the sample.</p>\r\n\r\n<p>Most importantly, though, you can view and copy the exact source code of each editor demo in the&nbsp;<strong>Get Sample Source Code</strong>&nbsp;section at the bottom of the sample pages. This code uses the&nbsp;<a href=\"https://cdn.ckeditor.com/\">CKEditor CDN</a>, so you can save it and run locally without the need to download CKEditor 4 itself!</p>\r\n', 'U9BFRC.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(225) NOT NULL,
  `nama` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `gambar` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL,
  `as_id` int(11) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `nama`, `email`, `gambar`, `password`, `as_id`, `date_created`) VALUES
(5, 'root', 'Asri', 'aseriwijayanti19@gmail.com', 'smile.jpg', '$2y$10$FJm/h4YDJZWPvmzWu8sX4OAKNxVLomhjmhQccQ14gYxlggGVDNuiW', 2, 1703247296),
(8, 'adminscomp', 'Admin Company', 'admin@gmail.com', 'smile.jpg', '$2y$10$durGaLaBif0/FRSRXaQSO.KmqUg6TETVagUeKyBxRbpnEc9OkLkt6', 1, 1703394913);

-- --------------------------------------------------------

--
-- Struktur dari tabel `visi_misi`
--

CREATE TABLE `visi_misi` (
  `id` int(11) NOT NULL,
  `visi` varchar(225) NOT NULL,
  `misi` text NOT NULL,
  `image` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `visi_misi`
--

INSERT INTO `visi_misi` (`id`, `visi`, `misi`, `image`) VALUES
(2, '<p>Menjadi perusahaan penyedia solusi kebutuhan masyarakat yang berskala nasional dengan mengedepankan teknologi informasi dan komunikasi yang cepat fokus dan fleksibel.</p>\r\n', '<p>1. Menghasilkan laba yang pantas untuk mendukung pengembangan perusahaan.</p>\r\n\r\n<p>2. Menyediakan berbagai jenis produk FMCG dan pendukungnya sebagai solusi yang sesuai dengan kebutuhan industri pemerintah dan masyarakat dengan mutu harga dan pasokan yang berdaya saing tinggi melalui pengelolaan terpercaya demi kepuasan pelanggan.</p>\r\n\r\n<p>3. Memberikan penghargaan kepada seluruh karyawan dan staf melalui pemberian kesejahteraan yang memadai dan kesempatan untuk pegembangan karir serta melakukan inovasi secara terus menerus.</p>\r\n\r\n<p>4. Menjalin kemitraan kerjasama dengan pemasok dan penyalur yang saling menguntungkan.</p>\r\n\r\n<p>5. Memberikan perhatian yang tulus kepada masyarakat melalui pemberdayaan pelatihan dan penciptaan lapangan kerja.</p>\r\n', 'ZQ3V1J.png');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin_menu`
--
ALTER TABLE `admin_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `banner_img`
--
ALTER TABLE `banner_img`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `budaya`
--
ALTER TABLE `budaya`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `busines_unit`
--
ALTER TABLE `busines_unit`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `direksi`
--
ALTER TABLE `direksi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `distributor`
--
ALTER TABLE `distributor`
  ADD PRIMARY KEY (`id_distributor`);

--
-- Indeks untuk tabel `komisaris`
--
ALTER TABLE `komisaris`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kontak`
--
ALTER TABLE `kontak`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `offline_store`
--
ALTER TABLE `offline_store`
  ADD PRIMARY KEY (`id_store`);

--
-- Indeks untuk tabel `organisasi`
--
ALTER TABLE `organisasi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `plan`
--
ALTER TABLE `plan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`as_id`);

--
-- Indeks untuk tabel `sejarah`
--
ALTER TABLE `sejarah`
  ADD PRIMARY KEY (`id_sejarah`);

--
-- Indeks untuk tabel `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`id_service`);

--
-- Indeks untuk tabel `struktur_grup`
--
ALTER TABLE `struktur_grup`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tampilan`
--
ALTER TABLE `tampilan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tentang`
--
ALTER TABLE `tentang`
  ADD PRIMARY KEY (`id_tentang`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `visi_misi`
--
ALTER TABLE `visi_misi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin_menu`
--
ALTER TABLE `admin_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `banner_img`
--
ALTER TABLE `banner_img`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `budaya`
--
ALTER TABLE `budaya`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `busines_unit`
--
ALTER TABLE `busines_unit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `direksi`
--
ALTER TABLE `direksi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `distributor`
--
ALTER TABLE `distributor`
  MODIFY `id_distributor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `komisaris`
--
ALTER TABLE `komisaris`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `kontak`
--
ALTER TABLE `kontak`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `offline_store`
--
ALTER TABLE `offline_store`
  MODIFY `id_store` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `organisasi`
--
ALTER TABLE `organisasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `plan`
--
ALTER TABLE `plan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `role`
--
ALTER TABLE `role`
  MODIFY `as_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `sejarah`
--
ALTER TABLE `sejarah`
  MODIFY `id_sejarah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `service`
--
ALTER TABLE `service`
  MODIFY `id_service` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT untuk tabel `struktur_grup`
--
ALTER TABLE `struktur_grup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tampilan`
--
ALTER TABLE `tampilan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `tentang`
--
ALTER TABLE `tentang`
  MODIFY `id_tentang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `visi_misi`
--
ALTER TABLE `visi_misi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
