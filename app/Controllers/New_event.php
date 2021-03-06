<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class New_event extends Controller
{
    public static function News($num)
    {
        $args = get_posts([
            'post_type' => 'new_events',
            'posts_per_page' => $num,
        ]);
        return array_map(function ($post) {
            return [
                'title' => apply_filters('get_the_title', $post->post_title),
                'content' => apply_filters('get_the_content', $post->post_content),
                'link' => get_permalink($post->ID),
                'flex' => get_field('description', $post->ID),
                'testing' => apply_filters('the_excerpt', get_field('description', $post->ID)),
                'testagain' => get_field('description', $post->ID)
            ];
        }, $args);
    }
}