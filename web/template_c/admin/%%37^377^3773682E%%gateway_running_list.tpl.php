<?php /* Smarty version 2.6.18, created on 2014-04-23 12:36:49
         compiled from gateway_running_list.tpl */ ?>
<!doctype html public "-//w3c//dtd html 4.0 transitional//en">
<html>
<head>
<title>会话列表</title>
<meta name="generator" content="editplus">
<meta name="author" content="nuttycoder">
<link href="<?php echo $this->_tpl_vars['template_root']; ?>
/all_purpose_style.css" rel="stylesheet" type="text/css" />

<script src="./template/admin/cssjs/jscal2.js"></script>
<script src="./template/admin/cssjs/cn.js"></script>
<link type="text/css" rel="stylesheet" href="./template/admin/cssjs/jscal2.css" />
<link type="text/css" rel="stylesheet" href="./template/admin/cssjs/border-radius.css" />
</head>

<body>
<script>
function searchit(){
	document.search.action = "admin.php?controller=admin_session&action=gateway_running_list";
	document.search.action += "&addr="+document.search.ip.value;
	document.search.action += "&user="+document.search.username.value;
	document.search.action += "&luser="+document.search.luser.value;
	document.search.action += "&start1="+document.search.f_rangeStart.value;
	document.search.submit();
	//alert(document.search.action);
	//return false;
	return true;
}
</script>
<style type="text/css">
 

a {
    color: #003499;
    text-decoration: none;
}
 
a:hover {
    color: #000000;
    text-decoration: underline;
}
 

 
</style>
<td width="84%" align="left" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0" bgcolor="#F1F1F1"><tr><td valign="middle" class="hui_bj"><div class="menu">
<ul>
<li class="me_a"><img src="<?php echo $this->_tpl_vars['template_root']; ?>
/images/an1.jpg" align="absmiddle"/><a href="admin.php?controller=admin_session&action=gateway_running_list">SSH 实时监控</a><img src="<?php echo $this->_tpl_vars['template_root']; ?>
/images/an3.jpg" align="absmiddle"/></li>
<li class="me_b"><img src="<?php echo $this->_tpl_vars['template_root']; ?>
/images/an11.jpg" align="absmiddle"/><a href="admin.php?controller=admin_session&action=gateway_running_telnet">Telnet 实时监控</a><img src="<?php echo $this->_tpl_vars['template_root']; ?>
/images/an33.jpg" align="absmiddle"/></li>
<li class="me_b"><img src="<?php echo $this->_tpl_vars['template_root']; ?>
/images/an11.jpg" align="absmiddle"/><a href="admin.php?controller=admin_rdprun">RDP实时监控</a><img src="<?php echo $this->_tpl_vars['template_root']; ?>
/images/an33.jpg" align="absmiddle"/></li>
<li class="me_b"><img src="<?php echo $this->_tpl_vars['template_root']; ?>
/images/an11.jpg" align="absmiddle"/><a href="admin.php?controller=admin_vncrun">VNC实时监控</a><img src="<?php echo $this->_tpl_vars['template_root']; ?>
/images/an33.jpg" align="absmiddle"/></li>
<li class="me_b"><img src="<?php echo $this->_tpl_vars['template_root']; ?>
/images/an11.jpg" align="absmiddle"/><a href="admin.php?controller=admin_apppubrun">应用发布实时监控</a><img src="<?php echo $this->_tpl_vars['template_root']; ?>
/images/an33.jpg" align="absmiddle"/></li>
</ul>
</div></td></tr>
	<tr>
				<td colspan="7"  class="main_content" align="left">
服务器地址：<input type="text" name="ip"  size="13" align="top" class="wbk"/>
&nbsp;堡垒机用户：<input type="text" name="luser" size="13" class="wbk"/>
&nbsp;系统用户：<input type="text" name="username" size="13" class="wbk"/>
&nbsp;开始日期：<input type="text"  name="f_rangeStart" size="13" id="f_rangeStart" value="" class="wbk"/> 
<input type="button" onClick="changetype('timetype3')" id="f_rangeStart_trigger" name="f_rangeStart_trigger" value="选择时间" class="wbk">
&nbsp;<select  class="wbk"  id="app_act" style="display:none"><option value="applet" <?php if ($_SESSION['ADMIN_DEFAULT_CONTROL'] == 'applet'): ?>selected<?php endif; ?>>applet</option><option value="activeX" <?php if ($_SESSION['ADMIN_DEFAULT_CONTROL'] == 'activeX'): ?>selected<?php endif; ?>>activeX</option></select>&nbsp;&nbsp;<input type="submit" height="35" align="middle" onClick="return searchit();" border="0" value=" 确定 " class="bnnew2"/>
 <script type="text/javascript">
var cal = Calendar.setup({
    onSelect: function(cal) { cal.hide() },
    showTime: true
});
cal.manageFields("f_rangeStart_trigger", "f_rangeStart", "%Y-%m-%d %H:%M:%S");


</script>
					</td>
			</tr>

  <tr><td><table bordercolor="white" cellspacing="0" cellpadding="0" border="0" width="100%" class="BBtable" >
			
			<tr>               
				<th class="list_bg"  width="10%">运维用户</th>
				<th class="list_bg"  width="10%">真实姓名</th>
				<th class="list_bg"  width="10%">系统用户</th>
				<th class="list_bg"  width="10%">来源地址</th>
				<th class="list_bg"  width="10%">目标地址</th>
				<th class="list_bg"  width="10%">开始时间</th>
				<th class="list_bg"  width="15%">操作</th>
			</tr>
			<?php unset($this->_sections['t']);
$this->_sections['t']['name'] = 't';
$this->_sections['t']['loop'] = is_array($_loop=$this->_tpl_vars['allsession']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['t']['show'] = true;
$this->_sections['t']['max'] = $this->_sections['t']['loop'];
$this->_sections['t']['step'] = 1;
$this->_sections['t']['start'] = $this->_sections['t']['step'] > 0 ? 0 : $this->_sections['t']['loop']-1;
if ($this->_sections['t']['show']) {
    $this->_sections['t']['total'] = $this->_sections['t']['loop'];
    if ($this->_sections['t']['total'] == 0)
        $this->_sections['t']['show'] = false;
} else
    $this->_sections['t']['total'] = 0;
if ($this->_sections['t']['show']):

            for ($this->_sections['t']['index'] = $this->_sections['t']['start'], $this->_sections['t']['iteration'] = 1;
                 $this->_sections['t']['iteration'] <= $this->_sections['t']['total'];
                 $this->_sections['t']['index'] += $this->_sections['t']['step'], $this->_sections['t']['iteration']++):
$this->_sections['t']['rownum'] = $this->_sections['t']['iteration'];
$this->_sections['t']['index_prev'] = $this->_sections['t']['index'] - $this->_sections['t']['step'];
$this->_sections['t']['index_next'] = $this->_sections['t']['index'] + $this->_sections['t']['step'];
$this->_sections['t']['first']      = ($this->_sections['t']['iteration'] == 1);
$this->_sections['t']['last']       = ($this->_sections['t']['iteration'] == $this->_sections['t']['total']);
?>
			<tr <?php if ($this->_sections['t']['index'] % 2 == 0): ?>bgcolor="f7f7f7"<?php endif; ?>>
				<td><?php echo $this->_tpl_vars['allsession'][$this->_sections['t']['index']]['luser']; ?>
</td>
				<td><?php echo $this->_tpl_vars['allsession'][$this->_sections['t']['index']]['realname']; ?>
</td>
				<td><?php echo $this->_tpl_vars['allsession'][$this->_sections['t']['index']]['user']; ?>
</td>
				<td><?php echo $this->_tpl_vars['allsession'][$this->_sections['t']['index']]['cli_addr']; ?>
</td>
				<td><?php echo $this->_tpl_vars['allsession'][$this->_sections['t']['index']]['addr']; ?>
</td>
				<td><?php echo $this->_tpl_vars['allsession'][$this->_sections['t']['index']]['start']; ?>
</td>
				<td>
				<?php if ($this->_tpl_vars['allsession'][$this->_sections['t']['index']]['type'] != 'rdp'): ?><img src='<?php echo $this->_tpl_vars['template_root']; ?>
/images/delete_ico.gif' width=16 height='16' hspace='5' border='0' align='absmiddle'><a href="admin.php?controller=admin_session&action=cut_running&pid=<?php if ($this->_tpl_vars['allsession'][$this->_sections['t']['index']]['type'] == 'telnet'): ?><?php echo $this->_tpl_vars['allsession'][$this->_sections['t']['index']]['pid']; ?>
<?php else: ?><?php echo $this->_tpl_vars['allsession'][$this->_sections['t']['index']]['pid']; ?>
.<?php echo $this->_tpl_vars['allsession'][$this->_sections['t']['index']]['id']; ?>
<?php endif; ?>" >断开</a>
				| <img src="<?php echo $this->_tpl_vars['template_root']; ?>
/images/ico2.gif" width="16" height="16" align="absmiddle"><a  id="p_<?php echo $this->_tpl_vars['allsession'][$this->_sections['t']['index']]['sid']; ?>
" href="#" onClick="return go('admin.php?controller=admin_session&action=monitor&luser=<?php echo $this->_tpl_vars['allsession'][$this->_sections['t']['index']]['luser']; ?>
&tool=putty.Putty&pid=<?php if ($this->_tpl_vars['allsession'][$this->_sections['t']['index']]['type'] == 'telnet'): ?><?php echo $this->_tpl_vars['allsession'][$this->_sections['t']['index']]['pid']; ?>
<?php else: ?><?php echo $this->_tpl_vars['allsession'][$this->_sections['t']['index']]['pid']; ?>
.<?php echo $this->_tpl_vars['allsession'][$this->_sections['t']['index']]['sid']; ?>
<?php endif; ?>&type=gateway','p_<?php echo $this->_tpl_vars['allsession'][$this->_sections['t']['index']]['sid']; ?>
')" target="hide" >putty</a> | <a  id="c_<?php echo $this->_tpl_vars['allsession'][$this->_sections['t']['index']]['sid']; ?>
" href="#" onClick="return go('admin.php?controller=admin_session&action=monitor&luser=<?php echo $this->_tpl_vars['allsession'][$this->_sections['t']['index']]['luser']; ?>
&tool=securecrt.SecureCRT&pid=<?php if ($this->_tpl_vars['allsession'][$this->_sections['t']['index']]['type'] == 'telnet'): ?><?php echo $this->_tpl_vars['allsession'][$this->_sections['t']['index']]['pid']; ?>
<?php else: ?><?php echo $this->_tpl_vars['allsession'][$this->_sections['t']['index']]['pid']; ?>
.<?php echo $this->_tpl_vars['allsession'][$this->_sections['t']['index']]['sid']; ?>
<?php endif; ?>&type=gateway','c_<?php echo $this->_tpl_vars['allsession'][$this->_sections['t']['index']]['sid']; ?>
')" target="hide" >CRT</a>
				<?php else: ?>
				| <img src="<?php echo $this->_tpl_vars['template_root']; ?>
/images/036.gif" width="16" height="16" align="absmiddle"><a href='admin.php?controller=admin_session&action=monitor&pid=<?php echo $this->_tpl_vars['allsession'][$this->_sections['t']['index']]['pid']; ?>
&luser=<?php echo $this->_tpl_vars['allsession'][$this->_sections['t']['index']]['luser']; ?>
' target="hide">监控</a>
				<?php endif; ?>
				</td>
			</tr>
			<?php endfor; endif; ?>
			<tr>
				<td colspan="7" align="right">
					共<?php echo $this->_tpl_vars['command_num']; ?>
条  <?php echo $this->_tpl_vars['page_list']; ?>
  页次：<?php echo $this->_tpl_vars['curr_page']; ?>
/<?php echo $this->_tpl_vars['total_page']; ?>
页  <?php echo $this->_tpl_vars['items_per_page']; ?>
条日志/页  转到第<input name="pagenum" type="text" class="wbk" size="2" onKeyPress="if(event.keyCode==13) window.location='admin.php?controller=admin_session&action=gateway_running_list&page='+this.value;">页
				</td>
			</tr>
		</table>
	</td>
  </tr>
</table>
<script language="javascript">
function go(url,iid){
	var app_act = document.getElementById('app_act').options[document.getElementById('app_act').options.selectedIndex].value;
	var hid = document.getElementById('hide');
	document.getElementById(iid).href=url+'&app_act='+app_act;
	//alert(hid.src);
	<?php if ($this->_tpl_vars['logindebug']): ?>
	window.open(document.getElementById(iid).href);
<?php endif; ?>
	return true;	
}
<?php if ($this->_tpl_vars['member']['default_control'] == 0): ?>
if(navigator.userAgent.indexOf("MSIE")>0) {
    document.getElementById('app_act').options.selectedIndex = 1;
}
<?php elseif ($this->_tpl_vars['member']['default_control'] == 1): ?>
document.getElementById('app_act').options.selectedIndex = 0;
<?php elseif ($this->_tpl_vars['member']['default_control'] == 2): ?>
document.getElementById('app_act').options.selectedIndex = 1;
<?php endif; ?>
</script>

</body>
<iframe name="hide" height="0" frameborder="0" scrolling="no" id="hide"></iframe>
</html>

