p_show_page_trace=0|0; thinkphp_show_page_trace=0|0; pgv_pvi=7853127680; pgv_si=s799926272; thinkphp_show_page_trace=0|0; Hm_lvt_b393d153aeb26b46e9431fabaf0f6190=1562115140,1562200879,1562288851,1562547325; admin=admin; Hm_lpvt_b393d153aeb26b46e9431fabaf0f6190=1562664008',
  'accept-language' => 'zh-CN,zh;q=0.9',
  'accept-encoding' => 'gzip, deflate',
  'accept' => 'text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3',
  'user-agent' => 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/75.0.3770.100 Safari/537.36',
  'upgrade-insecure-requests' => '1',
  'cache-control' => 'max-age=0',
  'connection' => 'close',
  'host' => 'soxun.com',
)
[ info ] [ PARAM ] array (
  'link_id' => '4',
)
[ info ] [ DB ] INIT mysql
[ info ] [ VIEW ] E:\phpStudy\PHPTutorial\WWW\newadmin\application\soxun\view\link\edit.html [ array (
  0 => 'info',
) ]
[ sql ] [ DB ] CONNECT:[ UseTime:0.046003s ] mysql:host=172.168.10.73;port=3306;dbname=souxun;charset=utf8
[ sql ] [ SQL ] SHOW COLUMNS FROM `so_link` [ RunTime:0.049003s ]
[ sql ] [ SQL ] SELECT * FROM `so_link` WHERE  `link_id` = 4 LIMIT 1 [ RunTime:0.024001s ]
---------------------------------------------------------------
[2019-07-09T17:20:18+08:00] 127.0.0.1 POST soxun.com/soxun/apis/link_edit.html
[运行时间：0.295017s] [吞吐率：3.39req/s] [内存消耗：2,494.59kb] [文件加载：79]
[ info ] [ LANG ] E:\phpStudy\PHPTutorial\WWW\newadmin\thinkphp\lang\zh-cn.php
[ info ] [ ROUTE ] array (
)
[ info ] [ HEADER ] array (
  'cookie' => 'thinkphp_show_page_trace=0|0; pgv_pvi=7853127680; pgv_si=s799926272; thinkphp_show_page_trace=0|0; Hm_lvt_b393d153aeb26b46e9431fabaf0f6190=1562115140,1562200879,1562288851,1562547325; admin=admin; Hm_lpvt_b393d153aeb26b46e9431fabaf0f6190=1562664017',
  'accept-language' => 'zh-CN,zh;q=0.9',
  'accept-encoding' => 'gzip, deflate',
  'referer' => 'http://soxun.com/soxun/link/edit.html?link_id=4',
  'content-type' => 'application/x-www-form-urlencoded; charset=UTF-8',
  'user-agent' => 'Mozilla/5.0 (Windows 