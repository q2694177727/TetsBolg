Hm_lpvt_b393d153aeb26b46e9431fabaf0f6190=1562662326',
  'accept-language' => 'zh-CN,zh;q=0.9',
  'accept-encoding' => 'gzip, deflate',
  'referer' => 'http://soxun.com/soxun/link/index.html?page=1',
  'accept' => 'text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3',
  'user-agent' => 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/75.0.3770.100 Safari/537.36',
  'upgrade-insecure-requests' => '1',
  'cache-control' => 'max-age=0',
  'connection' => 'close',
  'host' => 'soxun.com',
)
[ info ] [ PARAM ] array (
  'page' => '1',
)
[ info ] [ DB ] INIT mysql
[ info ] [ VIEW ] E:\phpStudy\PHPTutorial\WWW\newadmin\application\soxun\view\link\index.html [ array (
  0 => 'data',
) ]
[ sql ] [ DB ] CONNECT:[ UseTime:0.061003s ] mysql:host=172.168.10.73;port=3306;dbname=souxun;charset=utf8
[ sql ] [ SQL ] SHOW COLUMNS FROM `so_link` [ RunTime:0.050003s ]
[ sql ] [ SQL ] SELECT * FROM `so_link` ORDER BY `sort` ASC [ RunTime:0.037002s ]
---------------------------------------------------------------
[2019-07-09T17:13:13+08:00] 127.0.0.1 POST soxun.com/soxun/apis/link_del_all.html
[运行时间：0.144008s] [吞吐率：6.94req/s] [内存消耗：2,581.97kb] [文件加载：81]
[ info ] [ LANG ] E:\phpStudy\PHPTutorial\WWW\newadmin\thinkphp\lang\zh-cn.php
[ info ] [ ROUTE ] array (
)
[ info ] [ HEADER ] array (
  'cookie' => 'thinkphp_show_page_trace=0|0; pgv_pvi=7853127680; pgv_si=s799926272; thinkphp_show_page_trace=0|0; Hm_lvt_b393d153aeb26b46e9431fabaf0f6190=1562115140,1562200879,1562288851,1562547325; admin=admin; Hm_lpvt_b393d153aeb26b46e9431fabaf0f6190=1562662326',
  'accept-language' => 'zh-CN,zh;q=0.9',
  'accept-encoding' => 'gzip, deflate',
  'referer' => 'http://soxun.com/soxun/link/index.html?page=1',
  'content-type' => 'application/x-www-form-urlencoded; charset=UTF-8',
  'user-agent' => 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/75.0.3770.100 Safari/537.36',
  'x-requested-with' => 'XMLHttpRequest',
  'origin' => 'http://soxun.com',
  'accept' => '*/*',
  'content-length' => '42',
  'connection' => 'close',
  'host' => 'soxun.com',
)
[ info ] [ PARAM ] array (
  'ids' => '要删除的id',
)
[ info ] [ DB ] INIT mysql
[ sql ] [ DB ] CONNECT:[ UseTime:0.032002s ] mysql:host=172.168.10.73;port=3306;dbname=souxun;charset=utf8
[ sql ] [ SQL ] SHOW COLUMNS FROM `so_link` [ RunTime:0.046002s ]
[ sql ] [ SQL ] SELECT * FROM `so_link` WHERE  `link_id` = 要删除的id [ RunTime:0.019001s ]
---------------------------------------------------------------
[2019-07-09T17:13:14+08:00] 127.0.0.1 GET soxun.com/soxun/link/index.html?page=1
[运行时间：0.166010s] [吞吐率：6.02req/s] [内存消耗：2,641.02kb] [文件加载：85]
[ info ] [ LANG ] E:\phpStudy\PHPTutorial\WWW\newadmin\thinkphp\lang\zh-cn.php
[ info ] [ ROUTE ] array (
)
[ info ] [ HEADER ] array (
  'cookie' => 'thinkphp_show_page_trace=0|0; thinkphp_show_page_trace=0|0; pgv_pvi=7853127680; pgv_si=s799926272; thinkphp_show_page_trace=0|0; Hm_lvt_b393d153aeb26b46e9431fabaf0f6190=1562115140,1562200879,1562288851,1562547325; admin=admin; Hm_lpvt_b393d153aeb26b46e9431fabaf0f6190=1562662326',
  'accept-language' => 'zh-CN,zh;q=0.9',
  'accept-encoding' => 'gzip, deflate',
  'referer' => 'http://soxun.com/soxun/link/index.html?page=1',
  'accept' => 'text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3',
  'user-agent' => 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/75.0.3770.100 Safari/537.36',
  'upgrade-insecure-requests' => '1',
  'cache-control' => 'max-age=0',
  'connection' => 'close',
  'host' => 'soxun.com',
)
[ info ] [ PARAM ] array (
  'page' => '1',
)
[ info ] [ DB ] INIT mysql
[ info ] [ VIEW ] E:\phpStudy\PHPTutorial\WWW\newadmin\application\soxun\view\link\index.html [ array (
  0 => 'data',
) ]
[ sql ] [ DB ] CONNECT:[ UseTime:0.045002s ] mysql:host=172.168.10.73;port=3306;dbname=souxun;charset=utf8
[ sql ] [ SQL ] SHOW COLUMNS FROM `so_link` [ RunTime:0.056003s ]
[ sql ] [ SQL ] SELECT * FROM `so_link` ORDER BY `sort` ASC [ RunTime:0.032002s ]
---------------------------------------------------------------
[2019-07-09T17:13:26+08:00] 127.0.0.1 GET soxun.com/soxun/link/index.html?page=1
[运行时间：0.186010s] [吞吐率：5.38req/s] [内存消耗：2,773.32kb] [文件加载：87]
[ info ] [ LANG ] E:\phpStudy\PHPTutorial\WWW\newadmin\thinkphp\lang\zh-cn.php
[ info ] [ ROUTE ] array (
)
[ info ] [ HEADER ] array (
  'cookie' => 'thinkphp_show_page_trace=0|0; thinkphp_show_page_trace=0|0; pgv_pvi=7853127680; pgv_si=s799926272; thinkphp_show_page_trace=0|0; Hm_lvt_b393d153aeb26b46e9431fabaf0f6190=1562115140,1562200879,1562288851,1562547325; admin=admin; Hm_lpvt_b393d153aeb26b46e9431fabaf0f6190=1562662326',
  'accept-language' => 'zh-CN,zh;q=0.9',
  'accept-encoding' => 'gzip, deflate',
  'referer' => 'http://soxun.com/soxun/link/index.html?page=1',
  'accept' => 'text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3',
  'user-agent' => 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/75.0.3770.100 Safari/537.36',
  'upgrade-insecure-requests' => '1',
  'cache-control' => 'max-age=0',
  'connection' => 'close',
  'host' => 'soxun.com',
)
[ info ] [ PARAM ] array (
  'page' => '1',
)
[ info ] [ DB ] INIT mysql
[ info ] [ VIEW ] E:\phpStudy\PHPTutorial\WWW\newadmin\application\soxun\view\link\index.html [ array (
  0 => 'data',
) ]
[ sql ] [ DB ] CONNECT:[ UseTime:0.047003s ] mysql:host=172.168.10.73;port=3306;dbname=souxun;charset=utf8
[ sql ] [ SQL ] SHOW COLUMNS FROM `so_link` [ RunTime:0.076004s ]
[ sql ] [ SQL ] SELECT * FROM `so_link` ORDER BY `sort` ASC [ RunTime:0.027002s ]
---------------------------------------------------------------
[2019-07-09T17:13:29+08:00] 127.0.0.1 POST soxun.com/soxun/apis/link_del_all.html
[运行时间：0.473027s] [吞吐率：2.11req/s] [内存消耗：2,546.37kb] [文件加载：81]
[ info ] [ LANG ] E:\phpStudy\PHPTutorial\WWW\newadmin\thinkphp\lang\zh-cn.php
[ info ] [ ROUTE ] array (
)
[ info ] [ HEADER ] array (
  'cookie' => 'thinkphp_show_page_trace=0|0; pgv_pvi=7853127680; pgv_si=s799926272; thinkphp_show_page_trace=0|0; Hm_lvt_b393d153aeb26b46e9431fabaf0f6190=1562115140,1562200879,1562288851,1562547325; admin=admin; Hm_lpvt_b393d153aeb26b46e9431fabaf0f6190=1562662326',
  'accept-language' => 'zh-CN,zh;q=0.9',
  'accept-encoding' => 'gzip, deflate',
  'referer' => 'http://soxun.com/soxun/link/index.html?page=1',
  'content-type' => 'application/x-www-form-urlencoded; charset=UTF-8',
  'user-agent' => 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/75.0.3770.100 Safari/537.36',
  'x-requested-with' => 'XMLHttpRequest',
  'origin' => 'http://soxun.com',
  'accept' => '*/*',
  'content-length' => '5',
  'connection' => 'close',
  'host' => 'soxun.com',
)
[ info ] [ PARAM ] array (
  'ids' => '1',
)
[ info ] [ DB ] INIT mysql
[ sql ] [ DB ] CONNECT:[ UseTime:0.040003s ] mysql:host=172.168.10.73;port=3306;dbname=souxun;charset=utf8
[ sql ] [ SQL ] SHOW COLUMNS FROM `so_link` [ RunTime:0.047002s ]
[ sql ] [ SQL ] SELECT * FROM `so_link` WHERE  `link_id` = 1 [ RunTime:0.041003s ]
[ sql ] [ SQL ] DELETE FROM `so_link` WHERE  `link_id` = 1 [ RunTime:0.038002s ]
---------------------------------------------------------------
[2019-07-09T17:13:30+08:00] 127.0.0.1 GET soxun.com/soxun/link/index.html?page=1
[运行时间：0.171010s] [吞吐率：5.85req/s] [内存消耗：2,640.52kb] [文件加载：85]
[ info ] [ LANG ] E:\phpStudy\PHPTutorial\WWW\newadmin\thinkphp\lang\zh-cn.php
[ info ] [ ROUTE ] array (
)
[ info ] [ HEADER ] array (
  'cookie' => 'thinkphp_show_page_trace=0|0; thinkphp_show_page_trace=0|0; pgv_pvi=7853127680; pgv_si=s799926272; thinkphp_show_page_trace=0|0; Hm_lvt_b393d153aeb26b46e9431fabaf0f6190=1562115140,1562200879,1562288851,1562547325; admin=admin; Hm_lpvt_b393d153aeb26b46e9431fabaf0f6190=1562662326',
  'accept-language' => 'zh-CN,zh;q=0.9',
  'accept-encoding' => 'gzip, deflate',
  'referer' => 'http://soxun.com/soxun/link/index.html?page=1',
  'accept' => 'text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3',
  'user-agent' => 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/75.0.3770.100 Safari/537.36',
  'upgrade-insecure-requests' => '1',
  'cache-control' => 'max-age=0',
  'connection' => 'close',
  'host' => 'soxun.com',