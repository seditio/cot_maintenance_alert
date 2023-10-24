<?php
/* ====================
[BEGIN_COT_EXT]
Hooks=admin.home
[END_COT_EXT]
==================== */

/**
* Maintenance Alert Plugin
*
* @package maintenance_alert
* @author Dmitri Beliavski
* @copyright (c) 2023 seditio.by
*/

defined('COT_CODE') or die('Wrong URL');

if (Cot::$cfg['maintenance']) {
  include_once cot_langfile('maintenance_alert', 'plug');
  cot_message('maintenance_alert_warning', 'warning');
}
