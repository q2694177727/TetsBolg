WW\newadmin\application\soxun\view\link\edit.html [ array (
  0 => 'info',
) ]
[ sql ] [ DB ] CONNECT:[ UseTime:0.061003s ] mysql:host=172.168.10.73;port=3306;dbname=souxun;charset=utf8
[ sql ] [ SQL ] SHOW COLUMNS FROM `so_link` [ RunTime:0.045003s ]
[ sql ] [ SQL ] SELECT * FROM `so_link` WHERE  `link_id` = 4 LIMIT 1 [ RunTime:0.018001s ]
---------------------------------------------------------------
[2019-07-09T17:20:05+08:00] 127.0.0.1 POST soxun.com/soxun/apis/link_add.html
[运行时间：0.525030s] [吞吐率：1.90req/s] [内存消耗：2,534.91kb] [文件加载：84]
[ info ] [ LANG ] E:\phpStudy\PHPTutorial\WWW\newadmin\thinkphp\lang\zh-cn.php
[ info ] [ ROUTE ] array (
)
[ info ] [ HEADER ] array (
  'cookie' => 'thinkphp_show_page_trace=0|0; pgv_pvi=7853127680; pgv_si=s799926272; thinkphp_show_page_trace=0|0; Hm_lvt_b393d153aeb26b46e9431fabaf0f6190=1562115140,1562200879,1562288851,1562547325; admin=admin; Hm_lpvt_b393d153aeb26b46e9431fabaf0f6190=1562663965',
  'accept-language' => 'zh-CN,zh;q=0.9',
  'accept-encoding' => 'gzip, deflate',
  'referer' => 'http://soxun.com/soxun/link/edit.html?link_id=4',
  'content-type' => 'application/x-www-