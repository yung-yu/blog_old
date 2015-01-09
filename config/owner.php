<?php
/**
 * @author      OA Wu <comdan66@gmail.com>
 * @copyright   Copyright (c) 2014 OA Wu Design
 */

/* 網頁上方的導航 bar */
$_nav_items = array (
        // 'facebook' => array (
        //   'svg' => '<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="20" height="20" viewBox="0 0 20 20"><path d="M16.45 1.4h-12.9c-1.182 0-2.15 0.968-2.15 2.15v12.9c0 1.183 0.968 2.149 2.149 2.149h6.524v-6.167h-2.060v-2.686h2.060v-1.346c0-2.075 1.532-3.7 3.488-3.7h1.898v3.034h-1.699c-0.444 0-0.574 0.255-0.574 0.607v1.404h2.273v2.687h-2.273v6.168h3.263c1.183 0 2.149-0.967 2.149-2.149v-12.901c0.002-1.182-0.965-2.15-2.148-2.15z" fill="#000000"></path></svg>',
        //   'href' => 'https://www.facebook.com/comdan66',
        //   'title' => "oa's facebook",
        //   'target' => '_blank'
        //   ),
        
        
        );

/* 網頁右方的 widget */
$_pins = array (
    'owner_info' => array (
      'avatar' => 'https://graph.facebook.com/100000117171015/picture?width=100&height=100',
      'name'   => '李永裕（Andy）',
      'info_1' => 'yungyu405728@gmail.com',
      'info_2' => '職業: Android工程師',
      'info_3' => '生日: 1988/11/08'
      ),
    
    'githubbadge' => array (
      'title'   => "Andy's GitHub",
      'content' => '<iframe src="http://githubbadge.appspot.com/starbuilder" frameBorder="0"></iframe>'
      ),

    'tags' => array (
      'title'   => "Andy's Tags"
    )

    
  );
  /* 網頁下方的資訊 */
  $_footer = array (
    "title" => "Andy's Blog © 2015",
    'content' => "如有 <u>相關問題</u> 歡迎來信 <b>yungyu405728@gmail.com</b> "
  );

  /* 手機檢視 網頁上方的導航 bar */
  $_navbar_mobile = array (
    'title' => "Andy's blog",
    'avatar' => 'https://graph.facebook.com/100000117171015/picture?width=100&height=100',
  );

  /* 手機檢視 右邊選單 */
  $_mobile_right_slides = array (
    'info' =>  array (
      'title' => "Andy's Info",
      'items' => array (
        array ('value' => 'yungyu405728@gmail.com', 'class' => 'shimmer', 'link' => array ()),
        array ('value' => '職業: Android工程師', 'class' => 'shimmer', 'link' => array ()),
        array ('value' => '生日: 1988/11/08', 'class' => 'shimmer', 'link' => array ())
      )
    ),
    'other' => array (
      'tags' => array (
        'title' => "Andy's Tags",
      )
    )
    // ,
    // 'link' => array (
    //   'title' => "OA's Link",
    //   'items' => array (
    //     array (
    //       'value' => 'Facebook',
    //       'class' => '',
    //       'link' => array (
    //         'href' => 'https://www.facebook.com/comdan66',
    //         'title' => "oa's facebook",
    //         'target' => '_blank'
    //     )),
    //     array (
    //       'value' => 'GitHub',
    //       'class' => '',
    //       'link' => array (
    //         'href' => 'https://github.com/comdan66',
    //         'title' => "oa's github",
    //         'target' => '_blank'
    //     )),
    //     array (
    //       'value' => 'flickr',
    //       'class' => '',
    //       'link' => array (
    //         'href' => 'https://www.flickr.com/comdan66',
    //         'title' => "oa's flickr",
    //         'target' => '_blank'
    //     )),
    //     array (
    //       'value' => 'youtube',
    //       'class' => '',
    //       'link' => array (
    //         'href' => 'https://www.youtube.com/user/comdan66',
    //         'title' => "oa's youtube",
    //         'target' => '_blank'
    //     ))
    //   )
    // )
  );
