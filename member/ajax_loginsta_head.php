<?php
/**
 * @version        $Id: ajax_loginsta.php 1 8:38 2010年7月9日Z tianya $
 * @package        DedeCMS.Member
 * @copyright      Copyright (c) 2007 - 2010, DesDev, Inc.
 * @license        http://help.dedecms.com/usersguide/license.html
 * @link           http://www.dedecms.com
 */
define('AJAXLOGIN', TRUE);

require_once(dirname(__FILE__)."/config.php");
AjaxHead();
if($myurl == '') exit('');

$uid  = $cfg_ml->M_LoginID;

!$cfg_ml->fields['face'] && $face = ($cfg_ml->fields['sex'] == '女')? 'dfgirl' : 'dfboy';
$facepic = empty($face)? $cfg_ml->fields['face'] : $GLOBALS['cfg_memberurl'].'/templets/images/'.$face.'.png';
?>
<div class="userinfo">
    <script type="text/javascript">
    var now=(new Date()).getHours();
    if(now>0&&now<=6){
        document.write("午夜好，");
    }else if(now>6&&now<=11){
        document.write("早上好，");
    }else if(now>11&&now<=14){
        document.write("中午好，");
    }else if(now>14&&now<=18){
        document.write("下午好，");
    }else{
        document.write("晚上好，");
    }
    </script>
    你好：<strong><?php echo $cfg_ml->M_UserName; ?></strong>，欢迎登录
    <a href="<?php echo $cfg_memberurl; ?>/index.php?uid=<?php echo $uid ?>">我的主页</a>
						| 
						<a href="<?php echo $cfg_memberurl; ?>/index.php">会员中心</a>
						|<a href="<?php echo $cfg_memberurl; ?>/edit_space_info.php" target="_blank">空间管理</a> | 
     <a href="<?php echo $cfg_memberurl; ?>/index_do.php?fmdo=login&dopost=exit">退出登录</a> 
</div><!-- /userinfo -->