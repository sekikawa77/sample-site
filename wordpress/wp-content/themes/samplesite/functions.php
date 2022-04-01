<?php

add_action('init', 'custom_post_type');

function custom_post_type() {
    register_post_type('news',
        array(
            'label' => 'お知らせ',
            'public' => true,
            'has_archive' => true,
            'supports' => array('title', 'editor'),
        )
    );

    register_taxonomy(
        'news_cate',
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
            'supports' => array('title')
        )
    );

    register_taxonomy(
        'case-cate',
        'case'
    );

    register_post_type('column',
        array(
            'label' => 'コラム',
            'public' => true,
            'hierarchical' => true,
            'has_archive' => true,
            'supports' => array('title')
        )
    );

    register_taxonomy(
        'column-cate',
        'column',
        array(
            'label' => 'カテゴリー',
            'public' => true,
            'hierarchical' => true,
        )
    );

    register_post_type('event',
        array(
            'label' => 'セミナー／イベント',
            'public' => true,
            'hierarchical' => true,
            'has_archive' => true,
            'supports' => array('title')
        )
    );

    register_taxonomy(
        'event-cate',
        'event'
    );
};
