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
    if($system_ids){
         foreach ($system_ids as $key => $system) {
        $term = get_term( $system );
        $system_name = $term->name;
        $system_link = get_term_link($system);
        echo "<li><a href='{$system_link}'>{$system_name}</a></li>";
        }
    } else {
        echo "<li>None listed</li>";        
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
    if($mics){
        foreach ($mics as $key => $mic) {
        $term = get_term( $mic );
        $mic_name = $term->name;
        $mic_link = get_term_link($mic);
        echo "<li><a href='{$mic_link}'>{$mic_name}</a></li>";
        }
    } else{
        echo "<li>None listed</li>";
    }
    
}

function dlinq_room_audio(){
    global $post;
    $speakers = get_field('speaker', $post->ID);
    if($speakers){
        foreach ($speakers as $key => $speaker) {
        $term = get_term( $speaker );
        $speaker_name = $term->name;
        $speaker_link = get_term_link($speaker);
        echo "<li><a href='{$speaker_link}'>{$speaker_name}</a></li>";
        }
    } else {
        echo "<li>None listed</li>";
    }
    
}

function dlinq_room_hardware(){
    global $post;
    $hardwares = get_field('additional_hardware', $post->ID);
    if($hardwares){
        foreach ($hardwares as $key => $hardware) {
        $term = get_term( $hardware );
        $hardware_name = $term->name;
        $hardware_link = get_term_link($hardware);
        echo "<li><a href='{$hardware_link}'>{$hardware_name}</a></li>";
        }
    } else {
        echo "<li>None listed</li>";
    }
     
}

