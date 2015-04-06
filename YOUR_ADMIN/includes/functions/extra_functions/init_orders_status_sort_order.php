<?php
if ($sniffer->field_exists (TABLE_ORDERS_STATUS, 'sort_order') === false) {
  $db->Execute("ALTER TABLE " . TABLE_ORDERS_STATUS . " ADD sort_order int(11) NOT NULL default '0'");

}