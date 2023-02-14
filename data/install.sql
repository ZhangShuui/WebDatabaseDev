-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- 主机： 127.0.0.1
-- 生成日期： 2023-02-12 18:24:15
-- 服务器版本： 10.4.22-MariaDB
-- PHP 版本： 8.0.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 数据库： `yii2advanced`
--

-- --------------------------------------------------------

--
-- 表的结构 `double_deathandhurt`
--

CREATE TABLE `double_deathandhurt` (
  `id` int(255) NOT NULL,
  `citizens_death` int(22) NOT NULL,
  `ukraine_death` int(22) NOT NULL,
  `russia_death` int(22) NOT NULL,
  `double_hurt` int(22) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- 转存表中的数据 `double_deathandhurt`
--

INSERT INTO `double_deathandhurt` (`id`, `citizens_death`, `ukraine_death`, `russia_death`, `double_hurt`) VALUES
(1, 7068, 61207, 21000, 100000);

-- --------------------------------------------------------

--
-- 表的结构 `expertviews`
--

CREATE TABLE `expertviews` (
  `id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 DEFAULT NULL,
  `content` text CHARACTER SET utf8mb4 DEFAULT NULL,
  `time` datetime DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- 转存表中的数据 `expertviews`
--

INSERT INTO `expertviews` (`id`, `name`, `content`, `time`) VALUES
(1, '古特雷斯 联合国秘书长', '和平前景继续减少，进一步升级和流血的可能性在不断增加。俄乌冲突进一步升级可能意味着世界正走向“更广泛的战争”。', '2023-02-12 18:05:57'),
(2, '科夫曼 CNA负责人', '德国坦克在内的西方坦克无法影响俄乌冲突的进程。与此同时，乌克兰已有数千辆坦克被毁。他总结说：“我不相信，西方坦克的质量先进俄罗斯坦克那么多，以至于可以改变战局。”', '2023-02-12 18:07:04'),
(3, '韦进深 副教授', '美国一面对乌克兰提供情报支持和军事援助，一面对俄罗斯加码制裁，事实上对俄乌局势和双方的立场和态度产生了关键性影响，在俄乌局势朝向长期性和复杂化发展中扮演了幕后推手的角色。', '2023-02-12 18:07:41'),
(4, '宋忠平 军事评论员', '目前的俄乌冲突局势有两个焦点：其一，俄罗斯借特别军事行动一周年之机发动一场新的进攻，似乎不可避免；其二，无论俄罗斯是否发动新的进攻，2月24日之后，俄乌冲突大概率会进入战略相持阶段。', '2023-02-12 18:08:14'),
(5, '吴黎明 新华社记者', '美国的军工复合体是这场冲突的直接受益者，并且长期从中牟利。冲突发生后，包括德国在内的一些欧洲国家大规模提升国防预算，增加从美国购买各种武器装备的投入，让美国军工企业乐开了花。', '2023-02-12 18:08:33');

-- --------------------------------------------------------

--
-- 表的结构 `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `content` varchar(255) CHARACTER SET utf8mb4 DEFAULT NULL,
  `user` varchar(255) CHARACTER SET utf8mb4 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- 表的结构 `friendlink`
--

CREATE TABLE `friendlink` (
  `id` int(11) NOT NULL,
  `url` varchar(255) CHARACTER SET utf8mb4 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- 表的结构 `leave_message`
--

CREATE TABLE `leave_message` (
  `id` int(11) NOT NULL,
  `user` varchar(255) CHARACTER SET utf8mb4 DEFAULT NULL,
  `time` datetime DEFAULT NULL,
  `content` text CHARACTER SET utf8mb4 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- 转存表中的数据 `leave_message`
--

INSERT INTO `leave_message` (`id`, `user`, `time`, `content`) VALUES
(1, 'zsr', '2023-02-12 18:02:16', '俄乌冲突是俄美矛盾激化、俄方对美反击的具体表现。无论是北约东扩，还是俄乌冲突，美国军火商都从中受益。美国军工复合体应对俄乌冲突爆发负责，因为军工复合体的利益追逐及其游说活动导致冷战后北约一再违反不再东扩的承诺。美国军工复合体的利益决定美国需要敌人，因此它总有动力在全球寻找新的敌人。\r\n'),
(2, 'zhr', '2023-02-12 18:02:54', '中国在外交上其实面临着一种被架空的状态，在俄乌冲突这件事上，我们一方面强调中国始终坚持尊重他国主权和领土完整的基本原则不会变，但另一方面，考虑到中俄两国的贸易以及军事战略关系，我们又拒绝使用“入侵”“吞并”等词语来形容俄罗斯对乌克兰的此次行动。\r\n'),
(3, 'zmx', '2023-02-12 18:03:17', '美国称霸世界一个屡试不爽的手段就是巧实力外交，借力打力！为了消耗俄罗斯，拉拢欧洲，解决国内经济不振，完成欧洲产业转移到美国，欧洲金钱流向美国…，看准了撬动这冲突之七寸，经过多年准备，一石多鸟策动了这场冲突。所以它不会全力支援乌克兰，也不会彻底灭了俄罗斯，一个和欧洲对立和打着的俄罗斯最有利于实现美国利益最大化。\r\n'),
(4, 'hsn\r\n', '2023-02-12 18:03:53', '半年以来，我们已经看到了太多决战式的战斗，基辅郊外俄军的突击受阻，顿巴斯地区乌军缠斗俄罗斯装甲集群，以及随后的马里乌波尔钢铁厂围城战以及卢甘斯克那场规模宏大的炮战，重火力对战必然会带来严重的伤亡，无论最后的赢家是谁，两国的平民百姓都是最大的输家。希望战争能早日结束！');

-- --------------------------------------------------------

--
-- 表的结构 `migration`
--

CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

--
-- 转存表中的数据 `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1498700036),
('m130524_201442_init', 1498700039);

-- --------------------------------------------------------

--
-- 表的结构 `np_article`
--

CREATE TABLE `np_article` (
  `id` int(11) NOT NULL COMMENT '自增',
  `titile` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- 表的结构 `np_article_title`
--

CREATE TABLE `np_article_title` (
  `tid` mediumint(9) NOT NULL COMMENT '自增id',
  `title` text NOT NULL COMMENT '标题'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='文章标题表' ROW_FORMAT=DYNAMIC;

--
-- 转存表中的数据 `np_article_title`
--

INSERT INTO `np_article_title` (`tid`, `title`) VALUES
(1, 'afdsadf');

-- --------------------------------------------------------

--
-- 表的结构 `np_frontsituation_article`
--

CREATE TABLE `np_frontsituation_article` (
  `id` int(11) NOT NULL,
  `tittle` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `time` datetime DEFAULT NULL ON UPDATE current_timestamp(),
  `writer` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `content` text CHARACTER SET utf8mb4 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- 转存表中的数据 `np_frontsituation_article`
--

INSERT INTO `np_frontsituation_article` (`id`, `tittle`, `time`, `writer`, `content`) VALUES
(2, '战场态势改变！俄在整个前线加大攻击，炸毁乌境内未来的北约基地', '2023-02-07 07:30:47', '国防时报排头兵', '目前，俄乌在巴赫穆特仍在激战，但局势越来越对乌克兰不利，乌总统泽连斯基也承认，局势正变得越来越艰难，他说，俄罗斯正在投入越来越多的力量来摧毁我们的防御。但这只是冰山一角。\r\n\r\n随着俄乌冲突周年的来临，俄军目前沿整个前线加大施压，除在顿涅茨克的巴赫穆特激战外，也在卢甘斯克与扎波罗热地区展开攻势。\r\n\r\n如今，巴赫穆特2条主要联外道路被切断，城内乌军补给困难。泽连斯基还称，俄军攻势另分别逼近巴赫穆特北面的利曼、西南面的布格列达尔。而随着俄军包围取得进展，乌军在乌东控制地区的风险也日益增加。'),
(4, '俄乌冲突352天：泽连斯基巡访欧洲求援，俄称在核电站应设安全区', '2023-02-11 08:53:00', '企鹅号', '俄乌冲突已持续352天,巴赫穆特区域战况依然激烈，市区东面俄军继续缓慢推进，北线的双方持续胶着，南线T0504公路是双方主要争夺的焦点。从最新的战斗图像来看，俄军距离公路最近只有500米，火力已经能够覆盖到该公路。顿涅茨克区域，俄军继续在阿夫迪夫卡、卡米扬卡、沃江涅、五一村、列夫里斯基和马林卡等区域向乌军阵地进攻，乌军表示俄军的攻势均被击退。库皮扬斯克方向，俄军继续在辛基夫卡周边区域与乌军展开交火，战线变化不大。乌军在克里米纳周边发起反击，并在部分区域将战线向东面推进了500-1000米，双方目前的交战区域有马卡伊夫卡、扬波里夫卡与库兹米夫卡等。'),
(5, '乌新兵前线存活不超4小时，俄有望全歼3万乌军，巴赫穆特乌军完了 ', '2023-02-11 15:04:00', '抵掌谈兵（搜狐）', '俄罗斯和乌克兰的冲突已经持续了数百天。从目前来看，俄军有望在不久的将来一举拿下巴赫穆特，甚至吃掉整个顿巴斯。毕竟目前乌军的三万主力被困在巴赫穆特，基本上没有办法逃出俄军的包围圈。\r\n虽然乌克兰军队此前曾向巴赫穆特派出大量新兵，但这些训练期极短、毫无经验的新兵在面对俄军高强度进攻时，存活时间不超过4个小时。面对这种情况，巴赫穆特的俄军基本取得了重大进展，甚至不打算释放3万乌克兰军队。或许它会选择消灭对面的乌克兰官兵。毕竟巴赫穆特的三万乌克兰军队还在幻想基辅会派援军，不会选择投降。\r\n不幸的是，乌克兰已经面临没有士兵可用的局面。再加上其他地区战事吃紧，救援行动没有多余的兵力。俄军之所以计划在这一带消灭3万乌克兰军队，是为将来攻占顿巴斯做准备。\r\n毕竟，如果俄军能消灭3万乌克兰军队的主力，对基辅来说相当于晴天霹雳，会大大降低乌克兰军队的战斗力。所以毫不夸张的说，巴赫穆特，经过俄乌几个月的对抗，随着俄军围攻的完成，已经从之前的对抗演变为歼灭战。也代表着俄军拿下顿巴斯门户地区巴赫穆特只是时间问题。'),
(6, '巴赫穆特战况转变，前线乌军几近崩溃，两个旅主动向俄军投降', '2023-02-03 10:41:24', '企鹅号', '乌军坚守巴赫穆特已经有数月时间，在这些时间里乌军士兵只有两种选择，一个是拼死抵抗成为烈士，另一个是进入俄军包围圈主动投降。如今，在巴赫穆特大部分的乌军已经成为后者，虽然还有少部分人还未进入俄军包围圈，可随着俄军切断乌军在巴赫穆特最后一条补给线，乌军士兵也就失去最后希望。没有补给提供，乌军士兵就将面临食物短缺、弹药不足等困境。\r\n因此，困在该地区的乌军士兵已经临近崩溃，为了保全性命一部分乌军士兵选择主动缴械投降。近期有消息传出，乌军在巴赫穆特第68旅、第126旅两支军队集体向俄罗斯军队投降。对于这个消息，目前乌方还并没有做出任何回应，大概不愿意将此件事情搬在台面上来讲。这两支部队并不是乌军手中王牌部队，而是动员士兵和有经验的老兵拼凑而成，他们的作战目的也很简单，就是守住自己阵地，抵抗俄军进攻。\r\n其实乌军成立类似于第68旅、第126旅这些部队，就是为了在战场上拖住俄军为后方士兵争取时间，说得不好听一点，就是乌军成立的“炮灰旅”。乌军派出这些部队对阵地进行防守，与俄军开展激烈争斗，在这些士兵无力抵抗时俄军力量也大大消耗。这时候，乌军就可以出动真正的精锐部队对阵地发起突击，最终阵地还是在自己手中。毫无疑问，这样的打法是在拿士兵性命当诱饵，而这些部队中很多人都是被强征入伍，而且在进入战场之前也没有进行充分的训练。');

-- --------------------------------------------------------

--
-- 表的结构 `np_globalsituation_article`
--

CREATE TABLE `np_globalsituation_article` (
  `id` int(11) NOT NULL,
  `tittle` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `time` datetime DEFAULT NULL ON UPDATE current_timestamp(),
  `writer` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `content` text CHARACTER SET utf8mb4 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- 转存表中的数据 `np_globalsituation_article`
--

INSERT INTO `np_globalsituation_article` (`id`, `tittle`, `time`, `writer`, `content`) VALUES
(1, '中国', '2023-02-12 17:55:57', '中国', '中华人民共和国政府表示，反对任何非法单边制裁。23日，中华人民共和国外交部发言人华春莹在例行记者会上说“我们认为制裁从来都不是解决问题的根本有效途径，中方一贯反对任何非法的单边制裁。”中国海关总署官网23日发布公告，允许俄罗斯全境小麦进口。3月2日，中国银行保险监督管理委员会主席郭树清表示，中国不赞成对俄罗斯进行金融制裁，而且也不会参与金融制裁，称单边制裁效果不佳且缺乏法律依据。\r\n'),
(2, '欧盟', '2023-02-12 17:59:46', '欧盟', '2023年2月24日上午，欧盟委员会主席乌尔苏拉·冯德莱恩宣布欧盟将采取大规模制裁措施。制裁针对技术转让、俄罗斯银行和俄罗斯资产。欧盟外交和安全政策高级代表何塞·博雷利·丰特列斯表示，俄罗斯将面临“前所未有的孤立”，因为欧盟将实施“（欧盟实施的）最严厉的一系列制裁措施”。他还说，“这是自二战以来欧洲最黑暗的时刻之一”。欧洲议会议长萝伯塔·梅措拉呼吁“立即、迅速、扎实和迅速地采取行动”，并将于3月1日召开了一次特别会议。\r\n'),
(3, '美国', '2023-02-12 18:00:44', '美国', '美国总统乔·拜登宣布限制四家俄罗斯银行，包括VEB.RF（英语：VEB.RF]]）银行，以及与普京关系密切的“腐败的亿万富翁们”。他提到将增加北约部队的部署，以帮助邻近的北约国家。4月20日，美国宣布对俄罗斯实施新一波经济制裁，其中包括40多个实体和个人以及一家虚拟货币采矿公司。 4月21日，美国宣布禁止俄罗斯船只入港。7月底，美国开始对570种俄罗斯商品征收进口关税。\r\n');

-- --------------------------------------------------------

--
-- 表的结构 `np_hurtanddeathsituation_article`
--

CREATE TABLE `np_hurtanddeathsituation_article` (
  `id` int(11) NOT NULL,
  `tittle` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `time` datetime DEFAULT NULL ON UPDATE current_timestamp(),
  `writer` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `content` text CHARACTER SET utf8mb4 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- 转存表中的数据 `np_hurtanddeathsituation_article`
--

INSERT INTO `np_hurtanddeathsituation_article` (`id`, `tittle`, `time`, `writer`, `content`) VALUES
(1, '乌军击退了俄军在七个定居点附近的袭击', '2023-02-12 18:44:05', '乌克兰武装部队总参谋部', '“在过去的 24 小时内，敌人对（乌克兰）领土进行了另一次大规模导弹袭击，发射了 106 枚导弹，特别是在民用基础设施上。敌人使用了 32 枚 S-300 防空导弹和 74 枚空基和海基巡航导弹，其中 61 枚被我们的防御者击落。此外，俄罗斯占领者发动了 59 次空袭，其中 28 次使用 Shahed-136 无人机。22架无人机被击落。此外，敌人使用多管火箭系统发动了 90 多次攻击。俄罗斯对整个乌克兰民用目标发动袭击的威胁仍然很高。”\r\n\r\n此外，尽管损失惨重，俄罗斯军队继续在库皮扬斯克、莱曼、巴赫穆特、阿夫迪夫卡和新帕夫利夫卡前线搞进攻行动。在过去的24小时内，大约1140名俄罗斯军事人员阵亡，俄军的9辆坦克和19个火炮系统被摧毁。');

-- --------------------------------------------------------

--
-- 表的结构 `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT 10,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- 转存表中的数据 `user`
--

INSERT INTO `user` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`) VALUES
(1, 'test', 'iDt58X3mZ2QE0WT8EkaJvBZc9Ls7gnRD', '$2y$13$eCrIrRSsvmOymZltn/t45edeqoY4iJOZWKSvIr27EZA2rVSZ3Sghe', NULL, 'test@test.com', 10, 1498700403, 1498700403),
(2, 'admin2', 'M1D6Va6h3aXHJPqMsI0a47b4wC6M_qdV', '$2y$13$zUSh3UMj0.Zj3JN2t57BGuj1GVbnRa5GIBupBPcBj/3IN4Mzu4zMK', NULL, 'admin2@admin.com', 10, 1499006323, 1499006323);

--
-- 转储表的索引
--

--
-- 表的索引 `double_deathandhurt`
--
ALTER TABLE `double_deathandhurt`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- 表的索引 `expertviews`
--
ALTER TABLE `expertviews`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- 表的索引 `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- 表的索引 `friendlink`
--
ALTER TABLE `friendlink`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- 表的索引 `leave_message`
--
ALTER TABLE `leave_message`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- 表的索引 `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`) USING BTREE;

--
-- 表的索引 `np_article`
--
ALTER TABLE `np_article`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- 表的索引 `np_article_title`
--
ALTER TABLE `np_article_title`
  ADD PRIMARY KEY (`tid`) USING BTREE;

--
-- 表的索引 `np_frontsituation_article`
--
ALTER TABLE `np_frontsituation_article`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- 表的索引 `np_globalsituation_article`
--
ALTER TABLE `np_globalsituation_article`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- 表的索引 `np_hurtanddeathsituation_article`
--
ALTER TABLE `np_hurtanddeathsituation_article`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- 表的索引 `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD UNIQUE KEY `username` (`username`) USING BTREE,
  ADD UNIQUE KEY `email` (`email`) USING BTREE,
  ADD UNIQUE KEY `password_reset_token` (`password_reset_token`) USING BTREE;

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `double_deathandhurt`
--
ALTER TABLE `double_deathandhurt`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- 使用表AUTO_INCREMENT `expertviews`
--
ALTER TABLE `expertviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- 使用表AUTO_INCREMENT `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- 使用表AUTO_INCREMENT `friendlink`
--
ALTER TABLE `friendlink`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- 使用表AUTO_INCREMENT `leave_message`
--
ALTER TABLE `leave_message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- 使用表AUTO_INCREMENT `np_article`
--
ALTER TABLE `np_article`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '自增';

--
-- 使用表AUTO_INCREMENT `np_article_title`
--
ALTER TABLE `np_article_title`
  MODIFY `tid` mediumint(9) NOT NULL AUTO_INCREMENT COMMENT '自增id', AUTO_INCREMENT=2;

--
-- 使用表AUTO_INCREMENT `np_frontsituation_article`
--
ALTER TABLE `np_frontsituation_article`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- 使用表AUTO_INCREMENT `np_globalsituation_article`
--
ALTER TABLE `np_globalsituation_article`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- 使用表AUTO_INCREMENT `np_hurtanddeathsituation_article`
--
ALTER TABLE `np_hurtanddeathsituation_article`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- 使用表AUTO_INCREMENT `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
