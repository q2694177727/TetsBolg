/*
 Navicat Premium Data Transfer

 Source Server         : 本地
 Source Server Type    : MySQL
 Source Server Version : 50717
 Source Host           : localhost:3306
 Source Schema         : test_com

 Target Server Type    : MySQL
 Target Server Version : 50717
 File Encoding         : 65001

 Date: 27/02/2020 17:22:20
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for article
-- ----------------------------
DROP TABLE IF EXISTS `article`;
CREATE TABLE `article`  (
  `article_id` int(11) NOT NULL AUTO_INCREMENT,
  `article_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL COMMENT '文章名称',
  `article_easy` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL COMMENT '简介',
  `article_content` longtext CHARACTER SET utf8 COLLATE utf8_general_ci COMMENT '文章内容',
  `createtime` datetime(0) DEFAULT NULL COMMENT '创建时间',
  `article_type_id` int(11) DEFAULT NULL COMMENT '类型',
  `article_img` text CHARACTER SET utf8 COLLATE utf8_general_ci COMMENT '封面',
  `now_read_time` datetime(0) DEFAULT NULL COMMENT '最后一个人读取时间',
  PRIMARY KEY (`article_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of article
-- ----------------------------
INSERT INTO `article` VALUES (1, '关于having与where的使用', 'having与where尽管都是数据查找后的筛选步骤，但实际使用情况却截然不同', '简单描述：需要查询一个数量count，于是做分组查询后，发现有的数据没有过滤掉，于是就想加上过滤条件，就在group by后边写了where ，发现不好使，直接就报错了，查了一下，where只能写在group by前边，要想在后边加限制条件，应该使用having关键字\r\n\r\n直接放结果：\r\n\r\n先说一下聚合函数：\r\n\r\n　　count(a):遇到每个元素 a就加1\r\n\r\n　　其他的还有：\r\n\r\n　　MAX(a)和MIN(a)：分别记录迄今为止见到的任意元素在属性a上的最大值或最小值，如果遇到了，就替换掉。\r\n\r\n　　sum(a)：如果a不为null，则将值累加到输出值上\r\n\r\n　　AVG(a)：计算出sum和count，然后相除\r\n\r\n通常通过group by来比较where 和 having。这里说的是通常，并不是说having必须和group by连用，下面会进行说明\r\n\r\n先来一条sql：\r\n\r\nselect sum(score) from student where gender=\'boy\' group by name having sum(score)>210;\r\n其次我们经常写的sql 就是 select count(a),sum(b) ....from tableName where .... 聚合函数都是在where 条件之前的，说明聚合函数的执行级别高于where\r\n\r\n然后where 子句的作用是在对查询结果进行分组前，将不符合where条件的行去掉，也就是在分组之前过滤数据，条件中不能包含聚和函数，使用where条件限制特定的行。 \r\n\r\n最后having 子句的作用是筛选满足条件的组，即在分组之后过滤数据，条件中经常包含聚合函数，使用having 条件过滤特定的组，也可以使用多个分组标准进行分组。\r\n\r\n总之一条sql中有where having group by的时候，顺序是 where  group by having\r\n\r\n \r\n\r\nwhere和having都可以使用的场景：\r\n    select price,name from goods where price > 100\r\n    select price,name from goods having price > 100\r\n说明：having可用的前提是已经筛选出了price字段，在这种情况下和where的效果是等效的，But如果没有select price 就会报错！！因为having是从前筛选的字段再筛选，而where是从数据表中的字段直接进行的筛选的。\r\n\r\n只可以用where，不可以用having的情况\r\n    select name from goods where price> 100\r\n    select name from goods having price> 100 //报错！！！因为select没有筛选出price 字段，having不能用,而where是对表进行检索price。100\r\n只可以用having，不可以用where情况   参考博客:https://www.cnblogs.com/xuchao0506/p/9766234.html\r\n查询每种id 商品价格的平均值，获取平均价格大于100元的商品信息\r\n\r\n    select id, avg(price) as agprice from goods group by id having agprice > 100\r\n    select id, avg(price) as agprice from goods where agprice>100 group by id //报错！！因为from goods这表里面没有agprice这个字段  ', '2020-02-26 17:23:48', 1, NULL, '2020-02-27 16:51:49');
INSERT INTO `article` VALUES (2, '查找并删除数组中的一个键值', 'php删除数组中指定值的元素的几种方法', '一、利用foreach和unset()函数删除数组中的特定元素foreach($array as $k=>$v){\r\nif($v == \'day\'){\r\nunset($array[$k]):\r\n}\r\n}unset()函数即删除指定的数组值。二、利用array_flip()函数和unset()函数删除数组中的特定值$arr = array_flip($arr);\r\nunset($arr[\'world\']);\r\n$arr = array_flip($arr);\r\nprint_r($arr);array_flip()是一个反转函数，将数组原来的键名变为键值，把键值变为键名，这样上面的操作就很容易理解了。三、利用array_search()和unset()函数删除数组中的特定值if(($key = array_search(\'day\',$arr))){\r\nunset($arr[$key]);\r\n}array_search() 函数与 in_array() 一样，在数组中查找一个键值。如果找到了该值，匹配元素的键名会被返回。如果没找到，则返回 false。四、array_splice()函数可以与unset()函数起到相同作用if(($key = array_search(\'day\',$arr))){\r\narray_splice($arr, $key,1);\r\n}array_splice()有四个参数，用法请看这里。五、array_unique()让这个特定值在数组中一个不留注意：上面的所有操作只是删除了数组中第一个和你给定的值相同的元素，之后的元素即使和你给定的值相等，却没有被删除！\r\n\r\n在进行上面所有的代码操作之前，先进行array_unique($array)的操作，将数组中的重复值进行合并删除，再进行上面的删除，让数组中的重复值一个不留。六、只删除特定值对应的键值，不动其他值五中导致删除特定值的同时，也将其他无关的值合并了，那么不要动其他值怎么办？重复执行上面一~四的操作即可，获取数组长度，用一个for循环即可，当然这是最笨的办法~~获取数组长度的函数是count($arr)for(count($arr))if($key = array_search(\'day\',$arr))array_splice($arr,$key,1);参考地址:http://www.utubon.com/post/705.html', '2020-02-27 17:09:30', 2, NULL, '2020-02-27 17:09:36');
INSERT INTO `article` VALUES (3, 'Laravel配置全局公共函数的方法步骤', 'Laravel不自带全局函数的文件,只能自己手动添加', '前言\r\n\r\n在laravel项目开发中，经常使用到公共函数，那如何在laravel配置全局公共函数呢？？下面话不多说了，来一起看看详细的介绍吧\r\n\r\n方法如下\r\n\r\n在Laravel项目中我们常常需要定义一些全局的公共函数，通常我们会将这些公共函数定义在一个单独的文件里，如helpers.php中。我们在app目录下创建一个名为helpers.php的文件(app/helpers.php)，并编辑其内容如下:\r\n\r\n \r\n\r\n复制代码\r\n/**\r\n * 字符串两次md5加密\r\n * @param $str 要加密的字符串\r\n */\r\nfunction double_md5($str) {\r\n \r\n return md5(md5(trim($str)));\r\n}\r\n复制代码\r\n \r\n\r\n \r\n\r\n该函数返回对一个字符串进行两次md5加密后返回的字符串。要让应用能够正确找到 helpers.php 文件，还要修改项目根目录下 composer.json 的 autoload 配置：\r\n\r\n \r\n\r\n复制代码\r\n\"autoload\": {\r\n  \"classmap\": [\r\n   \"database/seeds\",\r\n   \"database/factories\"\r\n  ],\r\n  \"psr-4\": {\r\n   \"App\\\\\": \"app/\"\r\n  },\r\n  \"files\": [\r\n   \"app/helpers.php\"\r\n  ]\r\n },\r\n复制代码\r\n \r\n\r\n在 autoload 配置项的 files 数组中指定要被加载的文件/文件夹。修改完成后记得运行 composer dump-autoload 确保让修改生效：\r\n\r\ncomposer dump-autoload\r\n# 或\r\ncomposer dumpautoload\r\n \r\n\r\n \r\n现在 helpers.php 中的所有函数都会载入到自动加载器中，你可以在你项目的代码中使用helpers.php文件中定义的函数了。参考：https://www.cnblogs.com/jasonLiu2018/p/11770121.html', '2020-02-27 17:19:38', 3, NULL, '2020-02-27 17:19:42');

-- ----------------------------
-- Table structure for article_type
-- ----------------------------
DROP TABLE IF EXISTS `article_type`;
CREATE TABLE `article_type`  (
  `article_type_id` int(11) NOT NULL AUTO_INCREMENT,
  `article_type_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL COMMENT '类型名称',
  PRIMARY KEY (`article_type_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of article_type
-- ----------------------------
INSERT INTO `article_type` VALUES (1, '数据库基础');
INSERT INTO `article_type` VALUES (2, 'PHP基础');
INSERT INTO `article_type` VALUES (3, 'Laravel学习');

SET FOREIGN_KEY_CHECKS = 1;
