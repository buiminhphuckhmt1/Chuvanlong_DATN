-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 24, 2023 at 02:30 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `odfs_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `category_list`
--

CREATE TABLE `category_list` (
  `id` int NOT NULL,
  `name` text NOT NULL,
  `description` text NOT NULL,
  `status` int NOT NULL DEFAULT '1',
  `delete_flag` tinyint(1) NOT NULL DEFAULT '0',
  `date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_updated` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `category_list`
--

INSERT INTO `category_list` (`id`, `name`, `description`, `status`, `delete_flag`, `date_created`, `date_updated`) VALUES
(1, 'PHP', 'PHP is an open-source server-side scripting language that many devs use for web development. It is also a general-purpose language that you can use to make lots of projects, including Graphical User Interfaces (GUIs).', 1, 0, '2023-05-22 10:02:41', '2023-05-23 00:20:37'),
(2, 'VB.NET', 'Visual Basic, originally called Visual Basic .NET, is a multi-paradigm, object-oriented programming language, implemented on .NET, Mono, and the .NET Framework. Microsoft launched VB.NET in 2002 as the successor to its original Visual Basic language.', 1, 0, '2022-05-16 10:03:27', '2022-05-16 10:03:27'),
(3, 'Python', 'Python is a high-level, interpreted, general-purpose programming language. Its design philosophy emphasizes code readability with the use of significant indentation. Python is dynamically-typed and garbage-collected.', 1, 0, '2022-05-16 10:03:48', '2022-05-16 10:03:48'),
(4, 'JavaScript', 'JavaScript, often abbreviated JS, is a programming language that is one of the core technologies of the World Wide Web, alongside HTML and CSS. Over 97% of websites use JavaScript on the client side for web page behavior, often incorporating third-party libraries.', 1, 0, '2022-05-16 10:04:11', '2022-05-16 10:04:11'),
(10, 'Jquery', 'a', 1, 0, '2023-05-10 19:47:04', '2023-05-10 19:47:04'),
(11, 'android', 'a', 1, 0, '2023-05-10 19:47:16', '2023-05-10 19:47:16'),
(12, 'ios', 'a', 1, 0, '2023-05-10 19:47:23', '2023-05-10 19:47:23');

-- --------------------------------------------------------

--
-- Table structure for table `comment_list`
--

CREATE TABLE `comment_list` (
  `id` int NOT NULL,
  `user_id` int DEFAULT NULL,
  `post_id` int DEFAULT NULL,
  `comment` text NOT NULL,
  `date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `comment_list`
--

INSERT INTO `comment_list` (`id`, `user_id`, `post_id`, `comment`, `date_created`) VALUES
(26, 12, 13, '<p>test</p>', '2023-05-11 23:44:12'),
(28, 14, 12, '<p>If you want to see what is run in the database use&nbsp;<code>dd(DB::getQueryLog())</code>&nbsp;to see what queries were run.</p>\r\n<p>Try this</p>\r\n<pre class=\"default s-code-block\"><code class=\"hljs language-css\">BookingDates::<span class=\"hljs-built_in\">where</span>(<span class=\"hljs-string\">\'email\'</span>, Input::<span class=\"hljs-built_in\">get</span>(<span class=\"hljs-string\">\'email\'</span>))\r\n    -&gt;<span class=\"hljs-built_in\">orWhere</span>(<span class=\"hljs-string\">\'name\'</span>, <span class=\"hljs-string\">\'like\'</span>, <span class=\"hljs-string\">\'%\'</span> . Input::<span class=\"hljs-built_in\">get</span>(<span class=\"hljs-string\">\'name\'</span>) . <span class=\"hljs-string\">\'%\'</span>)-&gt;<span class=\"hljs-built_in\">get</span>();</code></pre>', '2023-05-12 01:23:07'),
(29, 14, 13, '<p>There\'s an easier way that doesn\'t require you to go into the options tag:</p>\r\n<pre class=\"lang-js s-code-block\"><code class=\"hljs language-javascript\">$(<span class=\"hljs-string\">\"div.id_100 select\"</span>).<span class=\"hljs-title function_\">val</span>(<span class=\"hljs-string\">\"val2\"</span>);\r\n</code></pre>\r\n<p>Check out this&nbsp;<a href=\"http://api.jquery.com/val/\" rel=\"noreferrer\">jQuery method</a>.</p>\r\n<p><em><strong>Note</strong></em>: The above code does not trigger the change event. You need to call it like this for full compatibility:</p>\r\n<pre class=\"lang-js s-code-block\"><code class=\"hljs language-javascript\">$(<span class=\"hljs-string\">\"div.id_100 select\"</span>).<span class=\"hljs-title function_\">val</span>(<span class=\"hljs-string\">\"val2\"</span>).<span class=\"hljs-title function_\">change</span>();</code></pre>', '2023-05-12 01:24:43'),
(30, 12, 15, '<p>You just need to store the user\'s progress inside a variable and then reference it when you need it. There are many ways to go about it. One is shown here: create an array and store the milestones in it (like \'<code>p1</code>\' for when they click the&nbsp;<code>p1 button</code>&nbsp;or \'<code>p2</code>\' etc). Then when they click the corresponding&nbsp;<code>menu button</code>, just test for the milestone variable as shown. I show an alert so you can see it checking, but the alert isn\'t neccesary. I also didn\'t have access to the&nbsp;<code>transition</code>&nbsp;function in the code so I put a placeholder function for that - just ignore it in your own code.</p>\r\n<p>&nbsp;</p>\r\n<div class=\"snippet\" data-lang=\"js\" data-hide=\"false\" data-console=\"true\" data-babel=\"false\">\r\n<div class=\"snippet-code\">\r\n<pre class=\"snippet-code-js lang-js s-code-block\"><code class=\"hljs language-javascript\"><span class=\"hljs-keyword\">let</span> completedArr = []\r\n<span class=\"hljs-keyword\">let</span> <span class=\"hljs-title function_\">transition</span> = () =&gt; {} <span class=\"hljs-comment\">// don\'t use this, just to prevent errors in the example</span>\r\n\r\n$(<span class=\"hljs-string\">\'.menu1-button\'</span>).<span class=\"hljs-title function_\">click</span>(<span class=\"hljs-keyword\">function</span>() {\r\n  <span class=\"hljs-title function_\">transition</span>(<span class=\"hljs-string\">\".page-study\"</span>, <span class=\"hljs-string\">\"fade\"</span>);\r\n});\r\n\r\n$(<span class=\"hljs-string\">\'.menu2-button\'</span>).<span class=\"hljs-title function_\">click</span>(<span class=\"hljs-keyword\">function</span>() {\r\n  <span class=\"hljs-keyword\">if</span> (!completedArr.<span class=\"hljs-title function_\">includes</span>(<span class=\"hljs-string\">\'p1\'</span>)) <span class=\"hljs-keyword\">return</span> <span class=\"hljs-title function_\">alert</span>(<span class=\"hljs-string\">\"not availabled yet\"</span>);\r\n <span class=\"hljs-title function_\">transition</span>(<span class=\"hljs-string\">\".page-multiple-choice\"</span>, <span class=\"hljs-string\">\"fade\"</span>);\r\n});\r\n\r\n$(<span class=\"hljs-string\">\'.menu3-button\'</span>).<span class=\"hljs-title function_\">click</span>(<span class=\"hljs-keyword\">function</span>() {\r\n  <span class=\"hljs-keyword\">if</span> (!completedArr.<span class=\"hljs-title function_\">includes</span>(<span class=\"hljs-string\">\'p2\'</span>)) <span class=\"hljs-keyword\">return</span> <span class=\"hljs-title function_\">alert</span>(<span class=\"hljs-string\">\"not availabled yet\"</span>);\r\n  <span class=\"hljs-title function_\">transition</span>(<span class=\"hljs-string\">\".page-circuit\"</span>, <span class=\"hljs-string\">\"fade\"</span>);\r\n});\r\n\r\n\r\n<span class=\"hljs-comment\">// --------------------------- Study Page -------------------------------------</span>\r\n\r\n$(<span class=\"hljs-string\">\'.p1-button\'</span>).<span class=\"hljs-title function_\">click</span>(<span class=\"hljs-keyword\">function</span>() {\r\n  <span class=\"hljs-keyword\">if</span> (!completedArr.<span class=\"hljs-title function_\">includes</span>(<span class=\"hljs-string\">\'p1\'</span>)) completedArr.<span class=\"hljs-title function_\">push</span>(<span class=\"hljs-string\">\'p1\'</span>)\r\n  <span class=\"hljs-title function_\">transition</span>(<span class=\"hljs-string\">\".page-multiple-choice\"</span>, <span class=\"hljs-string\">\"push-left\"</span>);\r\n});\r\n\r\n$(<span class=\"hljs-string\">\'.p2-button\'</span>).<span class=\"hljs-title function_\">click</span>(<span class=\"hljs-keyword\">function</span>() {\r\n  <span class=\"hljs-keyword\">if</span> (!completedArr.<span class=\"hljs-title function_\">includes</span>(<span class=\"hljs-string\">\'p2\'</span>)) completedArr.<span class=\"hljs-title function_\">push</span>(<span class=\"hljs-string\">\'p2\'</span>)\r\n  <span class=\"hljs-title function_\">transition</span>(<span class=\"hljs-string\">\".page-circuit\"</span>, <span class=\"hljs-string\">\"push-right\"</span>);\r\n});\r\n\r\n$(<span class=\"hljs-string\">\'.p-menu-button\'</span>).<span class=\"hljs-title function_\">click</span>(<span class=\"hljs-keyword\">function</span>() {\r\n  <span class=\"hljs-title function_\">transition</span>(<span class=\"hljs-string\">\".page-menu\"</span>, <span class=\"hljs-string\">\"fade\"</span>);\r\n});</code></pre>\r\n<pre class=\"snippet-code-html lang-html s-code-block\"><code class=\"hljs language-xml\"><span class=\"hljs-tag\">&lt;<span class=\"hljs-name\">script</span> <span class=\"hljs-attr\">src</span>=<span class=\"hljs-string\">\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js\"</span>&gt;</span><span class=\"hljs-tag\">&lt;/<span class=\"hljs-name\">script</span>&gt;</span>\r\n<span class=\"hljs-tag\">&lt;<span class=\"hljs-name\">button</span> <span class=\"hljs-attr\">class</span>=<span class=\"hljs-string\">\'p1-button\'</span>&gt;</span>p1-button<span class=\"hljs-tag\">&lt;/<span class=\"hljs-name\">button</span>&gt;</span>\r\n<span class=\"hljs-tag\">&lt;<span class=\"hljs-name\">button</span> <span class=\"hljs-attr\">class</span>=<span class=\"hljs-string\">\'p2-button\'</span>&gt;</span>p2-button<span class=\"hljs-tag\">&lt;/<span class=\"hljs-name\">button</span>&gt;</span>\r\n<span class=\"hljs-tag\">&lt;<span class=\"hljs-name\">button</span> <span class=\"hljs-attr\">class</span>=<span class=\"hljs-string\">\'p3-button\'</span>&gt;</span>p3-button<span class=\"hljs-tag\">&lt;/<span class=\"hljs-name\">button</span>&gt;</span>\r\n\r\n<span class=\"hljs-tag\">&lt;<span class=\"hljs-name\">hr</span>&gt;</span>\r\n<span class=\"hljs-tag\">&lt;<span class=\"hljs-name\">button</span> <span class=\"hljs-attr\">class</span>=<span class=\"hljs-string\">\'menu1-button\'</span>&gt;</span>menu1-button<span class=\"hljs-tag\">&lt;/<span class=\"hljs-name\">button</span>&gt;</span>\r\n<span class=\"hljs-tag\">&lt;<span class=\"hljs-name\">button</span> <span class=\"hljs-attr\">class</span>=<span class=\"hljs-string\">\'menu2-button\'</span>&gt;</span>menu2-button<span class=\"hljs-tag\">&lt;/<span class=\"hljs-name\">button</span>&gt;</span>\r\n<span class=\"hljs-tag\">&lt;<span class=\"hljs-name\">button</span> <span class=\"hljs-attr\">class</span>=<span class=\"hljs-string\">\'menu3-button\'</span>&gt;</span>menu3-button<span class=\"hljs-tag\">&lt;/<span class=\"hljs-name\">button</span>&gt;</span> </code></pre>\r\n</div>\r\n</div>', '2023-05-12 01:27:50');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(2, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(3, '2023_10_12_100000_create_password_reset_tokens_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_reset_tokens`
--

INSERT INTO `password_reset_tokens` (`email`, `token`, `created_at`) VALUES
('longbep2003@gmail.com', 'NP8ilz6SQsIfwU2FyzVploh5U2GEnxZ3bWqmbcq5GUMo38yfHMkCQaLF03SoXIcC', '2023-05-09 12:55:48'),
('longbep2003@gmail.com', 'Ea0Th45W0pJLtcKLRZtMfnaF2QJP92Uf8AK8ImyPJdxUacutUI5KRGVssrlU2Qln', '2023-05-09 12:56:03'),
('longbep2003@gmail.com', 'd5ppOuVPMRXgYK4RRAa9UwdTdUuW11qN06Y5afz7iaDZjz01Mqao41kguoDEwGTl', '2023-05-09 12:56:12'),
('longbep2003@gmail.com', 'Ng0g8R8immGtGLUPwvN97HXrhUI21aH8nxYjdB5aWNC89sAk8bY8CDDvKGxTtC6S', '2023-05-09 12:56:18'),
('longbep2003@gmail.com', 'koKghDBWWf1LpuhJxlgPUNe3qGb8zOlyWDtm7GzRxa3tCjmXTwv9gVuyQ7e76NqV', '2023-05-09 12:58:08'),
('longbep20032309@gmail.com', 'IHVEd2bBO0t4B2sGdG1gVEDw96ykalHjCaikkfpnIvzhKzakkUFXP519BkRjFf3n', '2023-05-09 13:04:52'),
('longbep20032309@gmail.com', 'c0j1BNSIprxm2PPTwz1trzStUJZGSY252KYdvoQjBh0m7JRZW6MPvFzJbgYspJ0s', '2023-05-09 13:04:56'),
('longbep2003@gmail.com', '6WkZNsAUck3imNsQDgvwBlZ2K1syGyCx6Q543WVRKAZnChF7LCiaqNQ4202pPBur', '2023-05-09 13:05:40'),
('longbep2003@gmail.com', '37M7NljOy83khhK3QGuCGBB3f6zgENAMacL5ubcVy3jjQhDi1RC7t2gJ4A1iSVW7', '2023-05-09 13:08:09'),
('longbep2003@gmail.com', 'TbX72zgfRWXh44w8UYOBXCwNfEJuNpbv8z4IpodraKqVPUTT6wsrxaOorMpAuVnU', '2023-05-09 13:08:40'),
('longbep2003@gmail.com', 'racxxxFTsepRAoDmQa6fN9Lkuy97Jr4bC43RtAcMDmU7wpzysImRJoict0gjc9de', '2023-05-09 13:11:18'),
('longbep2003@gmail.com', 'XPbGLUpSKSoofM7tOZUAvYSqvhfaYg8hYQwg8RVrk6vUHOwA6TnzTaNuDYpnUvm3', '2023-05-09 13:23:59'),
('longbep2003@gmail.com', 'jUEiJ5IaUYcY8cZS0hqCo3U9Tq4WcVKmjrrYFL5pSEGLplEISMotwcoQcQWUpsnK', '2023-05-09 13:26:07'),
('longbep2003@gmail.com', 'HVwO70Bc9OebyuhpqjnDtZZr4UmXEgGMF4vjiYg2cy4vgnQ3jT9mPbY4msfTZ4ly', '2023-05-09 13:31:58'),
('longbep2003@gmail.com', 'CUT7TkrD1YbdPnZRqgGJ8XElUuHgEkXQcpPuedygW6W7ShgRWLsQc6P6jG0OmHag', '2023-05-09 13:36:10');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `post_list`
--

CREATE TABLE `post_list` (
  `id` int NOT NULL,
  `user_id` int NOT NULL,
  `category_id` int NOT NULL,
  `title` text NOT NULL,
  `content` text NOT NULL,
  `description` text NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `delete_flag` tinyint(1) NOT NULL DEFAULT '0',
  `date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_updated` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `follow` tinyint(1) NOT NULL DEFAULT '0',
  `view_count` int NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `post_list`
--

INSERT INTO `post_list` (`id`, `user_id`, `category_id`, `title`, `content`, `description`, `status`, `delete_flag`, `date_created`, `date_updated`, `updated_at`, `follow`, `view_count`) VALUES
(12, 1, 1, 'Laravel-5 lấy cơ sở dữ liệu từ bảng', '<pre>\r\n<code>BookingDates::where(&#39;email&#39;, Input::get(&#39;email&#39;))-&gt;orWhere(&#39;name&#39;, &#39;like&#39;, Input::get(&#39;name&#39;))-&gt;get()\r\n</code></pre>\r\n\r\n<p>Tuy nhi&ecirc;n, orWhere trường dữ liệu like dường như kh&ocirc;ng khớp với bất kỳ kết quả n&agrave;o. M&atilde; đ&oacute; tạo ra điều g&igrave; về c&aacute;c c&acirc;u lệnh MySQL?</p>\r\n\r\n<p>T&ocirc;i đang cố gắng thử truy vấn bằng đoạn m&atilde; như sau:</p>\r\n\r\n<pre>\r\n<code>select * from booking_dates where email=&#39;my@email.com&#39; or name like &#39;%John%&#39;</code></pre>', 'Tôi đang sử dụng đoạn code dưới đây để lấy một số kết quả từ cơ sở dữ liệu bằng Laravel 5.', 1, 0, '2023-05-11 13:08:37', '2023-05-20 12:26:44', '2023-05-20 05:26:44', 0, 190),
(13, 1, 1, 'Cài đăt selected option trong form với laravel', '<pre>\r\n<code>&lt;select name=&quot;myselect&quot; id=&quot;myselect&quot;&gt;\r\n &lt;option value=&quot;1&quot;&gt;Item 1&lt;/option&gt;\r\n &lt;option value=&quot;2&quot; selected=&#39;selected&#39;&gt;Item 2&lt;/option&gt;\r\n</code></pre>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>l&agrave;m như thế n&agrave;o để thực hiện n&oacute; ở trong Laravel</p>', 'Tôi cần đưa ra select option như đoạn mã html này:', 1, 0, '2023-05-11 18:58:21', '2023-05-20 08:10:36', '2023-05-20 08:10:36', 0, 8),
(14, 1, 3, 'Làm cách nào để bỏ qua một số dòng mã nhất định để di chuyển ngược lên trong vòng lặp While', '<div class=\"js-post-body s-prose\">\r\n<pre>\r\n<code>choice_loop = &#39;yes&#39;\r\n    while choice_loop == &#39;yes&#39;:\r\n\r\n        # Taking main_inp (this is choice between calculator or unit converter)\r\n\r\n        # Nested While loop for making repeated use of a single operation possible\r\n        sub_loop = &#39;yes&#39;\r\n        while sub_loop == &#39;yes&#39;:\r\n\r\n                    # here sub_inp is taken (this is choice between some different types of calculators)\r\n                    # rest of my text based calculator here\r\n\r\n                    elif sub_inp == &#39;Go Back&#39;:\r\n                        # HERE IS THE PROBLEM/ISSURE, What should I do here to skip the code below to directly go back to taking main_inp above ??\r\n                    \r\n                    # Internal While loop repeater\r\n                    internal_loop = inputYesNo(f&#39;\\nDo you want to conduct {sub_inp} again ? [Yes/No]:  &#39;)\r\n                    if internal_loop == &#39;yes&#39;:\r\n                        print()\r\n                        continue\r\n                    else:\r\n                        break\r\n\r\n# After many lines of text based unit converter (its same as the calculator section above but just with diff operations)\r\n# at the end this also has a internal_loop and after this whole loop ends sub_loop runs\r\n\r\n            # Sub While loop repeater\r\n            sub_loop = inputYesNo(f&#39;\\nDo you want to conduct an operation in the {main_inp} Category? [Yes/No]: &#39;)\r\n            if sub_loop == &#39;yes&#39;:\r\n                print()\r\n                continue\r\n            else:\r\n                break\r\n\r\n        # Main While loop repeater:\r\n        choice_loop = inputYesNo(&#39;\\nDo you want to access another Category ? [Yes/No]: &#39;)\r\n        if choice_loop == &#39;yes&#39;:\r\n            continue\r\n        else:\r\n            break # Code ends here\r\n\r\n# I need a way to skip internal and sub loop to directly go back to main loop if user chooses to go back (if they choose a option by mistake)\r\n\r\n</code></pre>\r\n\r\n<p>T&ocirc;i chưa cung cấp m&atilde; đầy đủ v&igrave; n&oacute; d&agrave;i hơn 400 d&ograve;ng...</p>\r\n\r\n<p>T&ocirc;i đ&atilde; l&ecirc;n kế hoạch t&igrave;m hiểu PySide6 v&agrave; tạo biểu mẫu n&agrave;y ở dạng GUI chỉ để t&igrave;m hiểu GUI nhưng hiện tại h&atilde;y gi&uacute;p t&ocirc;i giải quyết vấn đề n&agrave;y!</p>\r\n\r\n<p>T&ocirc;i đ&atilde; cố gắng nghĩ ra điều g&igrave; đ&oacute; nhưng kh&ocirc;ng gặp may, tho&aacute;t () tho&aacute;t () ngắt tiếp tục. T&ocirc;i kh&ocirc;ng sử dụng ch&uacute;ng đ&uacute;ng c&aacute;ch để đạt được mục ti&ecirc;u cuối c&ugrave;ng của m&igrave;nh</p>\r\n</div>\r\n\r\n<div class=\"mb12 mt24\">\r\n<div class=\"d-flex fd-column gs4 gsy post-taglist\">\r\n<div class=\"d-flex fw-wrap ps-relative\">\r\n<ul>\r\n	<li>&nbsp;</li>\r\n</ul>\r\n</div>\r\n</div>\r\n</div>', 'lưu ý: Tôi đang sử dụng module pyinputplus... đây là một dự án phụ mà tôi đã làm việc một thời gian chỉ để giải trí\r\n\r\nGo to he \'elif sub_inp == \'Go Back\':\' line, I need to skip the rest of the code and come back to the start of the main while loop if user chooses Go Back', 1, 0, '2023-05-12 01:02:49', '2023-05-20 08:20:26', '2023-05-20 01:20:26', 0, 5),
(15, 1, 10, 'làm cách nào để khóa nội dung cho đến khi một nút cụ thể được nhấn trên hoạt ảnh css bằng jquery?', '<p>Đ&acirc;y l&agrave; đoạn code HTML:</p>\r\n\r\n<pre>\r\n<code>&lt;!doctype html&gt;\r\n&lt;html lang=&quot;en&quot;&gt;\r\n    &lt;head&gt;\r\n        &lt;meta charset=&quot;UTF-8&quot;&gt;\r\n        &lt;title&gt;Meltdown&lt;/title&gt;\r\n\r\n        &lt;!-- makes browsers render all elements more consistently. Similar to a CSS reset file --&gt;\r\n        &lt;link rel=&quot;stylesheet&quot; href=&quot;css/normalize.css&quot;&gt;\r\n\r\n        &lt;!-- the main style sheet you should edit --&gt;  \r\n        &lt;link rel=&quot;stylesheet&quot; href=&quot;css/style.css&quot;&gt; \r\n\r\n        &lt;!-- link to PT-Sans font from google fonts --&gt; \r\n        &lt;link href=&#39;http://fonts.googleapis.com/css?family=PT+Sans&#39; rel=&#39;stylesheet&#39; type=&#39;text/css&#39;&gt;\r\n\r\n        &lt;!-- link to local version of jQuery --&gt; \r\n        &lt;script src=&quot;js/jquery-1.11.0.min.js&quot;&gt;&lt;/script&gt;\r\n\r\n        &lt;!-- Link to javascript file  --&gt; \r\n        &lt;script src=&quot;js/script.js&quot;&gt;&lt;/script&gt;\r\n\r\n        &lt;!-- Link to JQuery Library and UI  --&gt;\r\n        &lt;script type=&quot;text/javascript&quot; src=&quot;https://ajax.googleapis.com/ajax/libs/jquery/1.5.0/jquery.min.js&quot;&gt;&lt;/script&gt;\r\n        &lt;script type=&quot;text/javascript&quot; src=&quot;https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.9/jquery-ui.min.js&quot;&gt;&lt;/script&gt;\r\n        \r\n\r\n        &lt;meta name=&quot;apple-mobile-web-app-capable&quot; content=&quot;yes&quot;&gt;\r\n\r\n    \r\n    &lt;/head&gt;\r\n    &lt;body&gt;\r\n        &lt;!-- main page wrap for the interactive --&gt;\r\n        &lt;div id=&quot;main-container&quot;&gt; \r\n\r\n            &lt;!-- container for all the individual pages --&gt;\r\n            &lt;div class=&quot;pages&quot;&gt;\r\n                &lt;!-- ========================= INTRO =========================== --&gt;\r\n\r\n                &lt;div class=&quot;page-intro current&quot;&gt;\r\n                        &lt;!--HOME PAGE--&gt;\r\n\r\n                        &lt;div class=&quot;home-page&quot;&gt;\r\n                            &lt;div id=&quot;home-img&quot;&gt;&lt;/div&gt;\r\n                            \r\n                            &lt;div id=&quot;volume-slider&quot;&gt;\r\n                                &lt;input type=&quot;range&quot; min=&quot;0&quot; max=&quot;100&quot; value=&quot;50&quot; class=&quot;slider&quot;&gt;\r\n                              &lt;/div&gt;\r\n                                            &lt;!--Trees--&gt;\r\n                \r\n                            &lt;div class=&quot;tree&quot;&gt;&lt;/div&gt;\r\n                            &lt;div class=&quot;tree2&quot;&gt;&lt;/div&gt;\r\n                            &lt;div class=&quot;tree3&quot;&gt;&lt;/div&gt;\r\n                \r\n                                            &lt;!--Title--&gt;\r\n                \r\n                                &lt;div class=&quot;title&quot;&gt;&lt;/div&gt;\r\n                \r\n                                            &lt;!--Steam--&gt;\r\n                \r\n                            &lt;div class=&quot;steam&quot;&gt;&lt;/div&gt;\r\n                \r\n                                            &lt;!--Interacables--&gt;\r\n                \r\n                            &lt;div class=&quot;intro-button&quot;&gt;START&lt;/div&gt;\r\n                \r\n                                            &lt;!--Introduction--&gt;\r\n                \r\n                            &lt;div class=&quot;nuclear-icon&quot;&gt;&lt;/div&gt;\r\n                            &lt;div class=&quot;nuclear-icon-two&quot;&gt;&lt;/div&gt;\r\n                \r\n                    &lt;/div&gt;\r\n                &lt;/div&gt;\r\n                &lt;!-- ========================= MENU =========================== --&gt;\r\n\r\n                &lt;div class=&quot;page-menu&quot;&gt;\r\n                    &lt;h1&gt;Main Menu&lt;/h1&gt;\r\n                    &lt;div class=&quot;menu1-button button&quot;&gt;\r\n                        Start study now!\r\n                    &lt;/div&gt;\r\n                    &lt;div class=&quot;menu2-button button&quot; disabled&gt;\r\n                        Multiple choice!\r\n                    &lt;/div&gt;\r\n                    &lt;div class=&quot;menu3-button button&quot; disabled&gt;\r\n                        Fix the circuit!\r\n                    &lt;/div&gt;\r\n                &lt;/div&gt; &lt;!-- menu page --&gt;\r\n\r\n                &lt;!-- ========================= OTHER PAGES =========================== --&gt;\r\n                \r\n                &lt;div class=&quot;page-study&quot;&gt;\r\n                    &lt;h1&gt;Learning the basics&lt;/h1&gt;\r\n                    &lt;div class=&quot;p1-button button&quot;&gt;\r\n                        Multiple choice!\r\n                    &lt;/div&gt;\r\n                    &lt;div class=&quot;text-box box1&quot;&gt;\r\n                        &lt;h1&gt;Key points&lt;/h1&gt;\r\n                        &lt;ul&gt;\r\n                            &lt;li&gt;Circuit diagrams are used to show how electrical &lt;span class=&quot;important&quot;&gt;components&lt;/span&gt; are connected in a &lt;span class=&quot;important&quot;&gt;circuit.&lt;/span&gt;&lt;/li&gt;\r\n                            &lt;li&gt;Individual circuit components are represented using circuit symbols.&lt;/li&gt;\r\n                            &lt;li&gt;Ammeters are used to measure the &lt;span class=&quot;important&quot;&gt;current&lt;/span&gt; flowing through components. Voltmeters are used to measure the &lt;span class=&quot;important&quot;&gt;potential difference&lt;/span&gt; across components.&lt;/li&gt;\r\n                        &lt;/ul&gt;\r\n                    &lt;/div&gt;\r\n                    &lt;div class=&quot;text-box box2&quot;&gt;\r\n                        &lt;h2&gt;Circuit symbols&lt;/h2&gt;\r\n                        &lt;p&gt;Electrical components, like motors and lamps, can be connected together to form a circuit.&lt;/p&gt;\r\n                        &lt;p&gt;A circuit diagram shows how the components are connected.&lt;/p&gt;\r\n                        &lt;p&gt;straight lines to show the wires andcircuit symbols to represent each component.&lt;/p&gt;\r\n                    &lt;/div&gt;\r\n                    &lt;button class=&quot;reveal-more&quot;&gt;Click me!&lt;/button&gt;\r\n                    &lt;div class=&quot;text-box box3&quot;&gt;\r\n                        &lt;h1&gt;Cells&lt;/h1&gt;\r\n                        &lt;p&gt;Cells provide the energy for many electrical devices to function - like torches, mobile phones and laptops. Cells come in different sizes and shapes.&lt;/p&gt;\r\n                        &lt;p&gt;The most common type of cell is the electrochemical cell which uses chemical reactions to transfer energy.&lt;/p&gt;\r\n                    &lt;/div&gt;\r\n                    &lt;div class=&quot;text-box box4&quot;&gt;\r\n                        &lt;h2&gt;Potential Difference&lt;/h2&gt;\r\n                        &lt;p&gt;Potential difference is the amount of energy transferred by each unit of charge passing between two points of a circuit.&lt;/p&gt;\r\n                        &lt;p&gt;The unit of potential difference is the volt. The symbol for volts is V. A potential difference of 1.5 volts can be written as 1.5 V.&lt;/p&gt;\r\n                        &lt;p&gt;Potential difference is also commonly called &#39;voltage&#39;.&lt;/p&gt;\r\n                    &lt;/div&gt;\r\n                    &lt;button class=&quot;continue-button&quot;&gt;Next&lt;/button&gt;\r\n                    &lt;div class=&quot;p-menu-button button&quot;&gt;\r\n                        Go back to menu\r\n                    &lt;/div&gt;\r\n                &lt;/div&gt;\r\n\r\n                &lt;!-- Multiple Choice Page --&gt;\r\n\r\n                &lt;div class=&quot;page-multiple-choice&quot;&gt;\r\n                    &lt;div id=&quot;beginning-screen-quiz&quot;&gt;\r\n                        &lt;h1 id=&quot;heading-quiz&quot;&gt;Oh no! it looks like you have been locked out of the computer system. You will have to take this quiz in order to regain access, you must get a score of 60 in order to bypass the security system.&lt;/h1&gt;\r\n                        &lt;button id=&quot;start-button-quiz&quot;&gt;Hack into security&lt;/button&gt;\r\n                    &lt;/div&gt;\r\n                    &lt;h1&gt;Multiple Choice Quiz&lt;/h1&gt;\r\n                    &lt;div class=&quot;p2-button button&quot;&gt;\r\n                        Fix the circuit\r\n                    &lt;/div&gt;\r\n                    &lt;div class=&quot;p-menu-button button&quot;&gt;\r\n                        Go back to menu\r\n                    &lt;/div&gt;\r\n                    &lt;div id=&quot;wrapper&quot;&gt;\r\n                        &lt;div id=&quot;question&quot;&gt;Sample question here&lt;/div&gt;\r\n                        &lt;div id=&quot;answersAndFeedback&quot;&gt;\r\n                            &lt;div id=&quot;answer1&quot; class=&quot;answer-box&quot;&gt;Answer 1&lt;/div&gt;\r\n                            &lt;div id=&quot;answer2&quot; class=&quot;answer-box&quot;&gt;Answer 2&lt;/div&gt;\r\n                            &lt;div id=&quot;answer3&quot; class=&quot;answer-box&quot;&gt;Answer 3&lt;/div&gt;\r\n                            &lt;div id=&quot;feedback&quot; class=&quot;hidden&quot;&gt;Feedback goes here&lt;/div&gt;\r\n                        &lt;/div&gt;\r\n                        &lt;div class=&quot;score&quot;&gt;0&lt;/div&gt;\r\n                        &lt;div id=&quot;next-btn&quot; class=&quot;hidden&quot;&gt;next&lt;/div&gt;\r\n                        &lt;div id=&quot;game-over&quot; class=&quot;hidden&quot;&gt;Congratulations! Continue to the next page!&lt;/div&gt;\r\n                    &lt;/div&gt;\r\n                &lt;/div&gt;\r\n\r\n                &lt;!-- Circuit Page --&gt;\r\n\r\n                &lt;div class=&quot;page-circuit&quot;&gt;\r\n                    &lt;div id=&quot;beginning-screen&quot;&gt;\r\n                        &lt;h1 id=&quot;heading&quot;&gt;Quickly, the reactor has blown a circuit. You are the last chance at saving this power plant, in order to save us all, you have to correctly place all the symbols in the correct slots.&lt;/h1&gt;\r\n                        &lt;button id=&quot;start-button&quot;&gt;Save the Power Plant&lt;/button&gt;\r\n                      &lt;/div&gt;\r\n                    &lt;h1 id=&quot;circuit-text&quot;&gt;Fix the circuit&lt;/h1&gt;  \r\n                    &lt;div class=&quot;p-menu-button button&quot;&gt;\r\n                        Go back to menu\r\n                    &lt;/div&gt;\r\n                    &lt;div class=&quot;container&quot;&gt;\r\n                        &lt;img id=&quot;drag1&quot; src=&quot;img/voltmeter.svg&quot; alt=&quot;Draggable Image 1&quot;&gt;\r\n                        &lt;img id=&quot;drag2&quot; src=&quot;img/fixed-resistor.svg&quot; alt=&quot;Draggable Image 2&quot;&gt;\r\n                        &lt;div id=&quot;drop&quot;&gt;Drop Here&lt;/div&gt;\r\n                      &lt;/div&gt;\r\n                      &lt;div class=&quot;container2&quot;&gt;\r\n                        &lt;img id=&quot;drag3&quot; src=&quot;img/bulb.svg&quot; alt=&quot;Draggable Image 1&quot;&gt;\r\n                        &lt;img id=&quot;drag4&quot; src=&quot;img/variable-resistor.svg&quot; alt=&quot;Draggable Image 2&quot;&gt;\r\n                        &lt;div id=&quot;drop2&quot;&gt;Drop Here&lt;/div&gt;\r\n                      &lt;/div&gt;\r\n                      &lt;div class=&quot;container3&quot;&gt;\r\n                        &lt;img id=&quot;drag5&quot; src=&quot;img/battery.svg&quot; alt=&quot;Draggable Image 1&quot;&gt;\r\n                        &lt;img id=&quot;drag6&quot; src=&quot;img/closed-switch.svg&quot; alt=&quot;Draggable Image 2&quot;&gt;\r\n                        &lt;div id=&quot;drop3&quot;&gt;Drop Here&lt;/div&gt;\r\n                      &lt;/div&gt;\r\n                      &lt;div class=&quot;incomplete-circuit&quot;&gt;\r\n                      &lt;/div&gt;\r\n                      &lt;div id=&quot;end-screen&quot;&gt;\r\n                        &lt;h1 id=&quot;heading&quot;&gt;Congratulations, you have finished, you have saved the power plant from exploding! You are a Hero!&lt;/h1&gt;\r\n                        &lt;button id=&quot;back-to-start-button&quot;&gt;Back to Start&lt;/button&gt;\r\n                      &lt;/div&gt;                      \r\n                &lt;/div&gt;\r\n                \r\n\r\n            &lt;/div&gt; &lt;!-- end of pages --&gt;\r\n\r\n            &lt;!-- add any containers here that you don&#39;t want to animate when pages transition --&gt;\r\n            &lt;div class=&quot;persistent-stuff&quot;&gt;\r\n            &lt;/div&gt;\r\n        &lt;/div&gt; &lt;!-- end of main container --&gt;\r\n    &lt;/body&gt;\r\n&lt;/html&gt;\r\n</code></pre>\r\n\r\n<p>so I wanted&nbsp;<code>&lt;div class=&quot;menu2-button button&quot;&gt;Multiple choice!&lt;/div&gt;</code>&nbsp;to be locked until the person has gone through the work on the&nbsp;<code>&lt;div class=&quot;page-study&quot;&gt;</code>&nbsp;and pressed the&nbsp;<code>&lt;div class=&quot;p1-button button&quot;&gt;Multiple choice!&lt;/div&gt;</code>. then I also wanted the same with&nbsp;<code>&lt;div class=&quot;menu3-button button&quot;&gt;Fix the circuit!&lt;/div&gt;</code>&nbsp;until the button on&nbsp;<code>&lt;div class=&quot;page-multiple-choice&quot;&gt;</code>&nbsp;was pressed which is&nbsp;<code>&lt;div class=&quot;p2-button button&quot;&gt;Fix the circuit&lt;/div&gt;</code>.</p>\r\n\r\n<p>here are the current functions that are affillated with these elements.</p>\r\n\r\n<pre>\r\n<code>    // --------------------------- Menu Page -------------------------------------\r\n\r\n    $(&#39;.menu1-button&#39;).click(function(){\r\n        transition(&quot;.page-study&quot;,&quot;fade&quot;);\r\n    });\r\n\r\n    $(&#39;.menu2-button&#39;).click(function(){\r\n        transition(&quot;.page-multiple-choice&quot;,&quot;fade&quot;);\r\n    });\r\n\r\n    $(&#39;.menu3-button&#39;).click(function(){\r\n        transition(&quot;.page-circuit&quot;,&quot;fade&quot;);\r\n    });\r\n  \r\n\r\n    // --------------------------- Study Page -------------------------------------\r\n\r\n    $(&#39;.p1-button&#39;).click(function(){\r\n        transition(&quot;.page-multiple-choice&quot;,&quot;push-left&quot;);\r\n    });\r\n\r\n    $(&#39;.p2-button&#39;).click(function(){\r\n        transition(&quot;.page-circuit&quot;,&quot;push-right&quot;);\r\n    });\r\n\r\n    $(&#39;.p-menu-button&#39;).click(function(){\r\n        transition(&quot;.page-menu&quot;,&quot;fade&quot;);\r\n    });\r\n</code></pre>\r\n\r\n<p>bất kỳ trợ gi&uacute;p n&agrave;o cũng sẽ được đ&aacute;nh gi&aacute; rất cao v&igrave; đ&acirc;y l&agrave; một trong những điều quan trọng cuối c&ugrave;ng t&ocirc;i cần ho&agrave;n th&agrave;nh để ho&agrave;n th&agrave;nh n&oacute; :)</p>\r\n\r\n<p>T&ocirc;i đ&atilde; thử th&ecirc;m một lớp v&agrave;o n&uacute;t của .disabled, lớp n&agrave;y c&oacute; onclick=false được &aacute;p dụng cho n&oacute; v&agrave; sau đ&oacute; l&agrave; một lớp .enable c&oacute; onclick=true tr&ecirc;n c&aacute;c n&uacute;t, nhưng cuối c&ugrave;ng n&oacute; đ&atilde; chặn t&ocirc;i nhấn bất kỳ n&uacute;t n&agrave;o đ&atilde; c&oacute; tr&ecirc;n m&agrave;n h&igrave;nh.</p>', 'Vì vậy, tôi đang tạo ý tưởng trò chơi cho một nhiệm vụ và tôi muốn khóa các nút menu chính thứ 2 và thứ 3 cho đến khi chúng hoàn thành trò chơi theo thứ tự, chỉ để buộc thêm một chút cấu trúc vào cách mọi người sẽ sử dụng hoạt ảnh/trò chơi, chúng tôi đang sử dụng hoạt hình css, vì vậy mọi thứ đều nằm trên tài liệu html một trang và một tệp js.', 1, 0, '2023-05-01 01:04:30', '2023-05-20 08:14:07', '2023-05-20 08:14:07', 0, 4);

-- --------------------------------------------------------

--
-- Table structure for table `system_info`
--

CREATE TABLE `system_info` (
  `id` int NOT NULL,
  `meta_field` text NOT NULL,
  `meta_value` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `system_info`
--

INSERT INTO `system_info` (`id`, `meta_field`, `meta_value`) VALUES
(1, 'name', 'Online Discussion Forum Site'),
(6, 'short_name', 'ODFS - PHP'),
(11, 'logo', 'uploads/logo.png?v=1652665183'),
(13, 'user_avatar', 'uploads/user_avatar.jpg'),
(14, 'cover', 'uploads/cover.png?v=1652665183');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `firstname` varchar(250) NOT NULL,
  `middlename` text,
  `lastname` varchar(250) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `avatar` text,
  `last_login` datetime DEFAULT NULL,
  `type` tinyint(1) NOT NULL DEFAULT '0',
  `date_added` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_updated` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci COMMENT='2';

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `middlename`, `lastname`, `email`, `username`, `password`, `avatar`, `last_login`, `type`, `date_added`, `date_updated`) VALUES
(1, 'Adminstrator', NULL, 'Admin', 'admin@gmail.com', 'admin', '$2y$10$5tqxpYhFK5crRsdlTbMfYu2Sw.G.gVQ4g/TRV9py0y27DKxeywrxS', 'logo.png', NULL, 1, '2021-01-20 14:02:37', '2023-05-22 21:14:57'),
(4, 'Mark', NULL, 'Cooper', 'markmcooper@gmail.com', 'mcooper', '$2y$10$U3a3CYkLBL9dyi/3jiPtWOzP/iqqBgFW7j6b2IwgPhaHorxKTK166', 'bright Pixar art girl European appearance playing .jpg', NULL, 2, '2022-05-16 10:12:15', '2023-05-09 23:53:28'),
(6, 'Nguyễn', 'Văn', 'An', 'nva@gmail.com', 'nva@gmail.com', '$2y$10$hVPOfNy4BDTjXkQvXPeY6.gXuSUfYxIrYvVP7rNM4h2veCsBkgRY.', 'logo.png', NULL, 2, '2023-04-21 19:47:15', '2023-05-09 23:54:36'),
(7, 'Nguyễn', 'Văn', 'Công', 'nvc@gmail.com', 'nvc@gmail.com', '$2y$10$BVlTpqMwHhCMxdSkErHAY.cSm.KxLLlQ4H/Ah4xqdsLdRtP3oa78O', 'logo.png', NULL, 2, '2023-05-01 19:40:29', '2023-05-09 23:55:19'),
(8, 'Chu', 'Văn', 'Tuấn', 'cvt@gmail.com', 'tuan', '$2y$10$oFelR7Y5hM8TXwtixExXVe9JBnGkdhtI9zZRHRybCBwyQH9ri2Xgm', 'logo.png', NULL, 2, '2023-05-05 16:14:57', '2023-05-09 23:55:54'),
(11, 'Nguyen', 'Văn', 'Long', 'longbep20032309@gmail.com', 'longadmin', '$2y$10$PD0AhFyNeQ/9.T8lnjWgd.qXdGNvUeV9VbjGaS8sOg.70Thb9Hn6K', 'logo.png', NULL, 2, '2023-05-08 21:43:03', '2023-05-09 23:51:33'),
(12, 'Chu', 'Văn', 'Long', 'longbep2003@gmail.com', 'adminlong', '$2y$10$6ILfqDuqly4oWoMK3Y27L.auPJOHsjdRPWuZn605pPkjk3324V7uS', 'logo.png', NULL, 1, '2023-05-08 21:44:40', '2023-05-13 22:30:57'),
(14, 'Nguyễn', 'Văn', 'Nam', 'nguyenvannam@gmail.com', 'nvnam', '$2y$10$lZvXhgcosqZZKV9DuPErMuzMfWcS8T2L2sZIXbFn9uBv7UNmnGWmi', 'logo.png', NULL, 2, '2023-05-09 23:37:01', '2023-05-09 23:37:01'),
(15, 'Nguyễn', 'Văn', 'Hưng', 'nvhung@gmail.com', 'nvhung', '$2y$10$nUST2Mo988CMP/TnCvjY1eqmOY.9hh393rOdQklpcmF61uFLeGkzm', 'a nerdy boy in a hoodie is programming at a comput.jpg', NULL, 2, '2023-05-09 23:39:03', '2023-05-09 23:39:03'),
(16, 'Ninh', 'Văn', 'Đinh', 'nvdinh@gmail.com', 'nvdinh', '$2y$10$Vgh379tThRu3LXMbjn5GAuColdP/MJrujg.2720zW.ITlAKfkHArK', 'a nerdy boy in a hoodie is programming at a comput.jpg', NULL, 2, '2023-05-09 23:50:11', '2023-05-10 01:02:24'),
(17, 'Nguyễn', 'Hải', 'Đăng', 'nhd@gmail.com', 'nhdang', '$2y$10$l4FAT.elAZUl5AiAvhaEpeNdgreBZ.MTa1Q0iOnQpmRoG7YRp0GJW', 'a nerdy boy in a hoodie is programming at a comput.jpg', NULL, 2, '2023-05-10 01:01:12', '2023-05-11 11:03:18'),
(22, 'Lê', 'Văn', 'Tuyên', 'tuyên@gmail.com', 'tuyên123', '$2y$10$.t8qi.LYaiRuQubuWeudaO9nRPYV2Ixv3qU4pqIOK2GSMvL72uce6', 'pngegg.png', NULL, 2, '2023-05-19 22:32:24', '2023-05-19 22:36:32');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category_list`
--
ALTER TABLE `category_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comment_list`
--
ALTER TABLE `comment_list`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `post_id` (`post_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD KEY `password_reset_tokens_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `post_list`
--
ALTER TABLE `post_list`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `system_info`
--
ALTER TABLE `system_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category_list`
--
ALTER TABLE `category_list`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `comment_list`
--
ALTER TABLE `comment_list`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `post_list`
--
ALTER TABLE `post_list`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `system_info`
--
ALTER TABLE `system_info`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comment_list`
--
ALTER TABLE `comment_list`
  ADD CONSTRAINT `post_id_fk_cl` FOREIGN KEY (`post_id`) REFERENCES `post_list` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `user_id_fk_cl` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `post_list`
--
ALTER TABLE `post_list`
  ADD CONSTRAINT `category_id_fk_tl` FOREIGN KEY (`category_id`) REFERENCES `category_list` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `user_id_fk_tl` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
