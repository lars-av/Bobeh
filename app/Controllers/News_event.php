<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class News_event extends Controller
{
    public static function news($num)
    {
        $args = get_posts([
            'post_type' => 'new_events',
            'posts_per_page' => $num,
        ]);
        return array_map(function ($post) {
            return [
                'title' => apply_filters('get_the_title', $post->post_title),
                'content' => apply_filters('get_the_content', $post->post_content),
                'link' => get_permalink($post->ID)
            ];
        }, $args);
    }
}
