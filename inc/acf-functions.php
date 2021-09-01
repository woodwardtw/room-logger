<?php
/**
 * ACF 
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

function dlinq_room_system(){
    global $post;
    $system_ids = get_field('system', $post->ID);
    foreach ($system_ids as $key => $system) {
        $term = get_term( $system );
        $system_name = $term->name;
        $system_link = get_term_link($system);
        echo "<li><a href='{$system_link}'>{$system_name}</a></li>";
    }
}

function dlinq_room_system_details(){
    global $post;
    $details = get_field('system_detail', $post->ID);
    if($details){
        return "<div class='system-details'><h2>System Details</h2>{$details}</div>";
    }
}

function dlinq_room_mics(){
    global $post;
    $mics = get_field('mic', $post->ID);
    foreach ($mics as $key => $mic) {
        $term = get_term( $mic );
        $mic_name = $term->name;
        $mic_link = get_term_link($mic);
        echo "<li><a href='{$mic_link}'>{$mic_name}</a></li>";
    }
}

function dlinq_room_audio(){
    global $post;
    $speaker = get_field('speaker', $post->ID);
}

function dlinq_room_hardware(){
    global $post;
    $hardware = get_field('additional_hardware', $post->ID);
}

