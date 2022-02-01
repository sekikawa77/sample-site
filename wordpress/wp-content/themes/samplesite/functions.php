<?php

add_action('init', 'custom_post_type');

function custom_post_type() {
    register_post_type('news',
        array(
            'label' => 'お知らせ',
            'public' => true,
            'hierarchical' => true,
            'has_archive' => true,
            'supports' => array('title', 'editor', 'thumbnail')
        )
    );

    register_taxonomy(
        'news-cate',
        'news',
        array(
            'label' => 'カテゴリー',
            'public' => true,
            'hierarchical' => true,
        )
    );

    register_post_type('case',
        array(
            'label' => '事例',
            'public' => true,
            'hierarchical' => true,
            'has_archive' => true,
            'supports' => array('title', 'editor', 'thumbnail')
        )
    );

    register_taxonomy(
        'case-cate',
        'case'
    );
};