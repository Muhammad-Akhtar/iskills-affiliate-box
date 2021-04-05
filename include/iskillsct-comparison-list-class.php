<?php

// Custom Post for comparison Tables
require plugin_dir_path( __FILE__ ) . 'iskillsct-comparison-list-crud.php';


if (!class_exists('WP_List_Table')) {
    require_once(ABSPATH . 'wp-admin/includes/class-wp-list-table.php');
}


// Class starts
class Custom_Table_Comparison_List_Table extends WP_List_Table
 { 
    function __construct()
    {
        global $status, $page;

        parent::__construct(array(
            'singular' => 'comparison',
            'plural'   => 'comparisons',
        ));
    }

    function column_default($item, $column_name)
    {
        return $item[$column_name];
    }


    function column_shortcode($item)
    {
        return '<strong>' . $item['shortcode'] . '</strong>';
    }


    function column_post_title($item)
    {        
        $actions = array(
            'edit' => sprintf('<a href="?page=iskills_comparison_table&tab=edit&id=%s">%s</a>', $item['ID'], __('Edit', 'iskills')),
            'delete' => sprintf('<a href="?page=%s&tab=all_tables&action=delete&id=%s">%s</a>', $_REQUEST['page'], $item['ID'], __('Delete', 'iskills')),
        );

        return sprintf('%s %s',
            $item['post_title'],
            $this->row_actions($actions)
        );
    }


    function column_cb($item)
    {
        return sprintf(
            '<input type="checkbox" name="id[]" value="%s" />',
            $item['ID']
        );
    }

    function get_columns()
    {
        $columns = array(
            'cb' => '<input type="checkbox" />', 
            'post_title'      => __('Title', 'iskills'),
            'shortcode'  => __('Shortcode', 'iskills'),
            
        );
        return $columns;
    }

    function get_sortable_columns()
    {
        $sortable_columns = array(
            'post_title'      => __('Title', 'iskills'),
            // 'shortcode'  => __('Shortcode', 'iskills'),
        );
        return $sortable_columns;
    }

    // function get_bulk_actions()
    // {
    //     $actions = array(
    //         'delete' => 'Delete'
    //     );
    //     return $actions;
    // }

    function process_bulk_action()
    {
        global $wpdb;
        $table_name = $wpdb->prefix . 'posts'; 
        if ('delete' === $this->current_action()) { 
            $ids = isset($_REQUEST['id']) ? $_REQUEST['id'] : array();
            if (is_array($ids)) $ids = implode(',', $ids);
            if (!empty($ids)) {
                $wpdb->query("DELETE FROM $table_name WHERE ID IN($ids)");
            }
        }
    }

    function prepare_items()
    {
        global $wpdb;
        $table_name = $wpdb->prefix . 'posts'; 

        $per_page = 10; 

        $columns = $this->get_columns();
        $hidden = array();
        $sortable = $this->get_sortable_columns();
        
        $this->_column_headers = array($columns, $hidden, $sortable);
       
        $this->process_bulk_action();

        $total_items = $wpdb->get_var("SELECT COUNT(ID) FROM $table_name WHERE `post_type`='iskillsct'");


        $paged = isset($_REQUEST['paged']) ? max(0, intval($_REQUEST['paged'] - 1) * 10) : 0;
        $orderby = (isset($_REQUEST['orderby']) && in_array($_REQUEST['orderby'], array_keys($this->get_sortable_columns()))) ? $_REQUEST['orderby'] : 'ID';
        $order = (isset($_REQUEST['order']) && in_array($_REQUEST['order'], array('asc', 'desc'))) ? $_REQUEST['order'] : 'asc';

        $this->items = $wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name WHERE `post_type`='iskillsct' ORDER BY $orderby $order LIMIT %d OFFSET %d", $per_page, $paged), ARRAY_A);
        
        foreach($this->items as $key => $item){
            $ID = $item['ID'];
            $shortcode = "[iskillsct id=".$ID." /]";  
            $this->items[$key]['shortcode'] = $shortcode;
        }

        

        $this->set_pagination_args(array(
            'total_items' => $total_items, 
            'per_page' => $per_page,
            'total_pages' => ceil($total_items / $per_page) 
        ));
    }
}

// function iskills_admin_menu()
// {
//     add_menu_page(__('comparison', 'iskills'), __('comparison', 'iskills'), 'activate_plugins', 'comparison', 'iskills_comparison_tables_handler');
//     add_submenu_page('comparison', __('comparison', 'iskills'), __('comparison', 'iskills'), 'activate_plugins', 'comparison', 'iskills_comparison_tables_handler');
   
//     add_submenu_page('comparison', __('Add new', 'iskills'), __('Add new', 'iskills'), 'activate_plugins', 'comparison_form', 'iskills_comparisons_form_page_handler');
// }

// add_action('admin_menu', 'iskills_admin_menu');

function iskills_validate_comparison_table($item)
{
    $messages = array();

    if (empty($item['name'])) $messages[] = __('Name is required', 'iskills');
    if (empty($item['lastname'])) $messages[] = __('Last Name is required', 'iskills');
    if (!empty($item['email']) && !is_email($item['email'])) $messages[] = __('E-Mail is in wrong format', 'iskills');
    if(!empty($item['phone']) && !absint(intval($item['phone'])))  $messages[] = __('Phone can not be less than zero');
    if(!empty($item['phone']) && !preg_match('/[0-9]+/', $item['phone'])) $messages[] = __('Phone must be number');
    

    if (empty($messages)) return true;
    return implode('<br />', $messages);
}
// end of Custom Post for comparison Tables 