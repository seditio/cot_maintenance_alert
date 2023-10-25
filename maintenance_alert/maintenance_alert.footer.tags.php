<?php
/* ====================
[BEGIN_COT_EXT]
Hooks=footer.tags
[END_COT_EXT]
==================== */

defined('COT_CODE') or die('Wrong URL');

if (Cot::$cfg['maintenance'] && Cot::$env['location'] != 'login') {
  include_once cot_langfile('maintenance_alert', 'plug');
  $tt = new XTemplate(cot_tplfile('maintenance_alert', 'plug', 'true'));
  $tt->assign('MA_URL', cot_url('admin', 'm=config&n=edit&o=core&p=security'));
  $tt->parse();
  empty(Cot::$out['footer_rc']) && Cot::$out['footer_rc'] = '';
  Cot::$out['footer_rc'] .= $tt->text();
}
