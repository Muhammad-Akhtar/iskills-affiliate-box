<?php
require_once('../../../../wp-load.php');

if(isset($_GET['ids'])){
    $ids = $_GET['ids'];
    $redirectUrl = $_GET['adminUrl'];
    process_bulk_delete($ids, $redirectUrl);
}

function process_bulk_delete($ids, $adminUrl){
    global $wpdb;
    $items = count($ids);
    $table_name = $wpdb->prefix . 'posts'; 
    if (is_array($ids)) $ids = implode(',', $ids);
        if (!empty($ids)) {
            $wpdb->query("DELETE FROM $table_name WHERE ID IN($ids)");
        }
    $response = $adminUrl."&action=delete&ids=".$items;
    echo json_encode($response);
}
