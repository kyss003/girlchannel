-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 28, 2022 at 03:14 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `girl_channel`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `title`) VALUES
(1, '恋愛・結婚', 'ガールズちゃんねるの恋愛に関するトピックを集めたページです。気になるみんなのリアルな恋愛事情や恋バナトピがたくさん。女性同士で一緒に盛り上がりましょう。'),
(2, '美容・コスメ', 'ガールズちゃんねるのコスメなど美容に関するトピックを集めたページです。みんながオススメする美容の情報交換をしたり、コスメを見せ合ってトレンドをつかんじゃおう！'),
(3, 'ファッション', 'ガールズちゃんねるのファッションに関するトピックを集めたページです。流行のファッションや服装の相談トピが満載です。'),
(4, '髪型', 'ガールズちゃんねるの大人な話題を集めたページです。匿名だから言い合える、みんなのリアルな話をのぞき見ちゃいましょう・・・！'),
(5, '大人', 'ガールズちゃんねるの大人な話題を集めたページです。匿名だから言い合える、みんなのリアルな話をのぞき見ちゃいましょう・・・！'),
(6, '芸能人', 'ガールズちゃんねるの芸能人ゴシップに関するトピックを集めたページです。芸能人のニュースやスキャンダルについて語り合ったり、みんながどう思っているかのぞいてみましょう。'),
(7, '料理・食べ物', 'ガールズちゃんねるの料理・食べ物に関するトピックを集めたページです。今夜の料理のレシピ、外食、お菓子、ファストフード…グルメの話題で盛り上がろう。'),
(8, 'ダイエット', 'ガールズちゃんねるのダイエットに関するトピックを集めたページです。みんなが試したダイエット方法について情報収集・意見交換しちゃいましょう。'),
(9, '家族・子育て', 'ガールズちゃんねるの家族や子育てに関するトピックを集めたページです。育児や家族のことなど、リアルな女性の意見が見れちゃいます。'),
(10, '医療・健康', 'ガールズちゃんねるの医療・健康に関するトピックを集めたページです。気になる健康のことはもちろん、医療費や保険のリアルな話題も覗き見できるかも？'),
(11, '生活', 'ガールズちゃんねるの生活に関するトピックを集めたページです。家事、ローン、ライフスタイルの話題も、匿名だからリアルな意見が見つかるかも。'),
(12, '仕事', 'ガールズちゃんねるの仕事に関するトピックを集めたページです。仕事やキャリアなど、ビジネスについての女性ならではのリアルな情報交換ができちゃいます。'),
(13, '実況', 'ガールズちゃんねるの実況のトピックを集めたページです。ドラマやバラエティ番組など、テレビを見ながら意見交換して盛り上がりましょう！'),
(14, 'テレビ・CM', 'ガールズちゃんねるのテレビ番組・CMのトピックを集めたページです。女性ならではの共感できるコメントがたくさん！お気に入りのテレビ番組や、CM について語りましょう。'),
(15, 'ドラマ・映画', 'ガールズちゃんねるのドラマ・映画に関するトピックを集めたページです。おすすめのドラマ・映画や感想について女性目線の情報を収集したり、意見交換できちゃいます。'),
(16, 'マンガ・アニメ・本', 'ガールズちゃんねるのマンガ・アニメに関するトピックを集めたページです。旬なマンガやアニメ、みんなのおすすめの本などを話し合いましょう！'),
(17, '音楽', 'ガールズちゃんねるの音楽に関するトピックを集めたページです。あの大物歌手の新作や、ちょっとマイナーなアーティストのことも好きなだけおしゃべりできます。'),
(18, '画像', 'ガールズちゃんねるの画像・写真に関するトピックを集めたページです。おもしろ画像や癒される写真を見て、貼って、楽しみましょう！'),
(19, 'ニュース', 'ガールズちゃんねるのニュースに関するトピックを集めたページです。世の中を表すあらゆるニュースの話題についてみんなの意見がまるわかり。'),
(20, '政治・経済', 'ガールズちゃんねるの政治・経済に関するトピックを集めたページです。社会派な話題も匿名だからみんなの本音を知れるかも。'),
(21, 'スポーツ', 'ガールズちゃんねるのスポーツに関するトピックを集めたページです。サッカーや野球の試合観戦やスポーツ選手のニュースなど、スポーツやアウトドアを語りましょう！'),
(22, 'IT・インターネット', 'ガールズちゃんねるのIT・インターネットに関するトピックを集めたページです。最新のスマホ機種のことやおすすめのアプリのことを情報交換してみませんか。'),
(23, '犬・猫・動物', 'ガールズちゃんねるの犬・猫・動物に関するトピックを集めたページです。癒される犬猫の話題からペットの飼育まで動物に関するトピがたくさん。'),
(24, '質問・雑談', 'ガールズちゃんねるの質問・雑談トピックを集めたページです。あるあるネタや雑談トピでまったり暇つぶししてみませんか。');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` varchar(3000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `topic_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `image`, `link`, `content`, `created_at`, `updated_at`, `topic_id`) VALUES
(1, '1642670613.jpeg', NULL, 'test commennt', '2022-01-20 09:23:33', '2022-01-20 09:23:33', 1),
(2, NULL, NULL, 'test comment\r\ntest br', '2022-01-21 02:08:48', '2022-01-21 02:08:48', 2),
(3, NULL, NULL, 'test 2', '2022-01-21 08:58:27', '2022-01-21 08:58:27', 1),
(4, NULL, NULL, 'test 3', '2022-01-21 08:58:34', '2022-01-21 08:58:34', 1),
(5, NULL, NULL, 'test 4', '2022-01-21 08:58:42', '2022-01-21 08:58:42', 2),
(6, '1642990615.jpeg', NULL, 'test comment 2\r\ntest br', '2022-01-24 02:16:55', '2022-01-24 02:16:55', 1),
(7, '1642992696.jpeg', NULL, 'test', '2022-01-24 02:51:36', '2022-01-24 02:51:36', 2);

-- --------------------------------------------------------

--
-- Table structure for table `comment_relies`
--

CREATE TABLE `comment_relies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` varchar(3000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `comment_id` bigint(20) UNSIGNED DEFAULT NULL,
  `topic_id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comment_relies`
--

INSERT INTO `comment_relies` (`id`, `image`, `link`, `content`, `created_at`, `updated_at`, `comment_id`, `topic_id`) VALUES
(1, '1642670638.jpeg', NULL, 'test rely', '2022-01-20 09:23:58', '2022-01-20 09:23:58', 1, NULL),
(2, NULL, NULL, 'test rely 2', '2022-01-20 10:25:22', '2022-01-20 10:25:22', 1, NULL),
(3, NULL, NULL, 'test rely', '2022-01-24 02:15:07', '2022-01-24 02:15:07', 1, NULL),
(4, NULL, NULL, 'test rely 3', '2022-01-24 02:16:22', '2022-01-24 02:16:22', 1, NULL),
(5, NULL, NULL, 'test rely 3', '2022-01-25 07:15:42', '2022-01-25 07:15:42', 3, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `keywords`
--

CREATE TABLE `keywords` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `keywords`
--

INSERT INTO `keywords` (`id`, `name`) VALUES
(1, 'ジャニーズWEST'),
(2, '不倫'),
(3, '福袋'),
(4, 'AAA'),
(5, 'モテ'),
(6, '恋愛'),
(7, '吉澤ひとみ'),
(8, '福士蒼汰'),
(9, '高橋一生'),
(10, 'ジャニーズ'),
(11, '不思議'),
(12, 'ざわちん'),
(13, '桃'),
(14, 'ファッション'),
(15, 'イケメン'),
(16, '秋篠宮'),
(17, 'DA PUMP'),
(18, '嵐'),
(19, '田中圭'),
(20, '整形'),
(21, 'あいのり'),
(22, 'M-1グランプリ'),
(23, '妊娠'),
(24, '秋篠宮さま');

-- --------------------------------------------------------

--
-- Table structure for table `like_dislikes`
--

CREATE TABLE `like_dislikes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `topic_id` int(10) UNSIGNED DEFAULT NULL,
  `comment_id` int(10) UNSIGNED DEFAULT NULL,
  `comment_rely_id` int(10) UNSIGNED DEFAULT NULL,
  `like` smallint(6) NOT NULL DEFAULT 0,
  `dislike` smallint(6) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `like_dislikes`
--

INSERT INTO `like_dislikes` (`id`, `topic_id`, `comment_id`, `comment_rely_id`, `like`, `dislike`, `created_at`, `updated_at`) VALUES
(1, 1, NULL, NULL, 1, 0, '2022-01-25 07:31:56', '2022-01-25 07:31:56'),
(2, 1, NULL, NULL, 0, 1, '2022-01-25 07:32:05', '2022-01-25 07:32:05'),
(3, NULL, 1, NULL, 1, 0, '2022-01-25 07:35:47', '2022-01-25 07:35:47'),
(4, NULL, NULL, 1, 0, 1, '2022-01-25 07:35:49', '2022-01-25 07:35:49'),
(5, NULL, 3, NULL, 1, 0, '2022-01-25 07:39:25', '2022-01-25 07:39:25'),
(6, NULL, 4, NULL, 1, 0, '2022-01-26 02:17:25', '2022-01-26 02:17:25'),
(7, NULL, 1, NULL, 0, 1, '2022-01-26 02:17:32', '2022-01-26 02:17:32');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(2, '2021_12_22_074020_create_keywords_table', 1),
(3, '2021_12_22_074135_create_categories_table', 1),
(4, '2021_12_22_074156_create_topics_table', 1),
(5, '2021_12_22_074212_create_comments_table', 1),
(6, '2022_01_10_112755_create_like_dislikes_table', 1),
(7, '2022_01_19_101123_create_comment_relies_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `topics`
--

CREATE TABLE `topics` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_content` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` varchar(3000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `keyword_id` bigint(20) UNSIGNED DEFAULT NULL,
  `category_id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `topics`
--

INSERT INTO `topics` (`id`, `image`, `image_content`, `title`, `link`, `content`, `created_at`, `updated_at`, `keyword_id`, `category_id`) VALUES
(1, '1642670584.jpeg', '1642670584.jpeg', '専業主婦のストレスあるある', NULL, '旦那がテレワークでずっと家にいること', '2022-01-20 09:23:04', '2022-01-20 09:23:04', 2, 1),
(2, '1642730825.jpeg', '1642730825.jpeg', '【実況・感想】ぐるナイゴチ新メンバー発表SP 天然⁉イケメン＆勝負師？美女に高畑充希大興奮', NULL, 'ノブじゃ！いきなり２万５千円超高額ゴチじゃ！天然イケメン㊙マスクで早速参戦＆ギターが趣味クール美女参戦にまっすー唖然？金メダリスト須﨑＆乙黒と対決\r\n\r\n実況しましょう！', '2022-01-21 02:07:05', '2022-01-21 02:07:05', 4, 2),
(3, '1642730868.jpeg', NULL, '離婚家庭に10万円給付検討　岸田首相、参院代表質問', NULL, '　岸田文雄首相は２０日の参院本会議での代表質問で、１８歳以下の子どもを対象にした１０万円相当給付に関し、離婚などで受け取れなかったひとり親家庭への支給を検討するよう自治体に要請すると表明した。', '2022-01-21 02:07:48', '2022-01-21 02:07:48', 1, 3),
(6, '1642992514.jpeg', '1642992514.jpeg', '【live situation/impression】the nonfiction in the case of her who wants to get married - the marriage drifting record of corona evil - part 2', NULL, 'i want to get married... minami, 31, who is \"married\" shakes between two men ... we\'re going to date each other and finally make a decision... minami takes action to infuriate advisers...', '2022-01-24 02:48:34', '2022-01-24 02:48:34', 3, 1),
(7, '1642994209.jpeg', '1642994209.jpeg', '【実況・感想】真犯人フラグ#13', NULL, '毒を飲まされ倒れた凌介の運命は！？バタコの正体を暴こうと動き出す警察と瑞穂たち。バタコの写真を見た篤斗は思いがけない反応で！？\r\n\r\n実況しましょう！', '2022-01-24 03:16:49', '2022-01-24 03:16:49', 2, 2),
(8, '1643164581.jpeg', NULL, '「ゆとりがなくなってきた」「価格が安いことが最重要」先進国ニッポンのあまりに悲惨な暮らしぶり', NULL, '【現在の暮らし向き（1年前対比）】\r\n\r\n2021年6月\r\n「ゆとりが出てきた」5.3%\r\n「どちらとも言えない」56.4%\r\n「ゆとりがなくなってきた」37.3%\r\n\r\n2021年9月\r\n「ゆとりが出てきた」6.8%\r\n「どちらとも言えない」55.5%\r\n「ゆとりがなくなってきた」36.3%\r\n\r\n2021年12月\r\n「ゆとりが出てきた」5.8%\r\n「どちらとも言えない」55.5%\r\n「ゆとりがなくなってきた」40.0%\r\n\r\n【今後1年間、商品やサービスを選ぶ際に特に重視すること／複数回答可】カッコ内は2021年6月・9月・12月の回答割合\r\n\r\n1位　価格が安い（51.4%・47.9%・49.4%）\r\n2位　安全性が高い（44.3%・45.7%・43.1%）\r\n3位　信頼性が高い（40.6%・38.6%・40.4%）\r\n4位　長く使える（38.7%・39.8%・38.3%）\r\n5位　機能が良い（32.1%・33.7%・32.9%）\r\n\r\n安ければ安いほど良い……は当然の心理といえますが、現在、世界的にインフレが進んでいます。日本も例外ではありません。円安も進む今、日銀の黒田東彦総裁は「物価上昇は一時的」とコメントしていますが、はたして。', '2022-01-26 02:36:21', '2022-01-26 02:36:21', 1, 2),
(9, '1643284042.png', NULL, 'test', NULL, 'test', '2022-01-27 11:47:22', '2022-01-27 11:47:22', 3, 8);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comments_topic_id_foreign` (`topic_id`);

--
-- Indexes for table `comment_relies`
--
ALTER TABLE `comment_relies`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comment_relies_comment_id_foreign` (`comment_id`),
  ADD KEY `comment_relies_topic_id_foreign` (`topic_id`);

--
-- Indexes for table `keywords`
--
ALTER TABLE `keywords`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `like_dislikes`
--
ALTER TABLE `like_dislikes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `topics`
--
ALTER TABLE `topics`
  ADD PRIMARY KEY (`id`),
  ADD KEY `topics_category_id_foreign` (`category_id`),
  ADD KEY `topics_keyword_id_foreign` (`keyword_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `comment_relies`
--
ALTER TABLE `comment_relies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `keywords`
--
ALTER TABLE `keywords`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `like_dislikes`
--
ALTER TABLE `like_dislikes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `topics`
--
ALTER TABLE `topics`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_topic_id_foreign` FOREIGN KEY (`topic_id`) REFERENCES `topics` (`id`);

--
-- Constraints for table `comment_relies`
--
ALTER TABLE `comment_relies`
  ADD CONSTRAINT `comment_relies_comment_id_foreign` FOREIGN KEY (`comment_id`) REFERENCES `comments` (`id`),
  ADD CONSTRAINT `comment_relies_topic_id_foreign` FOREIGN KEY (`topic_id`) REFERENCES `topics` (`id`);

--
-- Constraints for table `topics`
--
ALTER TABLE `topics`
  ADD CONSTRAINT `topics_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`),
  ADD CONSTRAINT `topics_keyword_id_foreign` FOREIGN KEY (`keyword_id`) REFERENCES `keywords` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
