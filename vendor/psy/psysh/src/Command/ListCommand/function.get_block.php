<?php
 /**
 * $Author: 91736 $
 * ============================================================================
 * 91736����get_block������Ƭ
 * ��վ��ַ: http://www.91736.com
 * ����PHP�������¼��http://bbs.91736.com
 * ============================================================================
*/
function smarty_function_get_block($params,&$smarty){
	$mysql=new mysql();
	extract($params);
	
	if(!isset($tag))
		return "";
		
	$rs=$mysql->get_one("select * from `".DB_PRE."block` where `tag`='{$tag}'");

	print $rs['content'];
}
?>