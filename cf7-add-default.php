<?php
/*
Plugin Name: CF7 Add Default
Description: Contact Form 7 の初期値を GET パラメータから設定する
Version: 0.1
Author: s.ashikawa
*/

/**
 * cf7-add-default.php
 *
 * @package WordPress
 * @subpackage CF7 Add Default
 * @copyright Copyright (c) 2014, infobahn inc.
 */

/**
 * フォームの値を設定
 * 
 * @param array $tag フォームの設定データ
 * @return array
 */
function wpcf7_add_default($tag) {

    if ($_SERVER['REQUEST_METHOD'] !== 'GET') {
        return $tag;
    }

    $params = $_GET;

    foreach ($params as $key => $value) {
        // タグ名と一致している GET パラメータを探す
        if ($tag['name'] !== $key) {
            continue;
        }
        // ショートタグ内の default 値を優先
        foreach ($tag['options'] as $i => $option) {
            if (strpos($option, 'default:') === 0) {
                return $tag;
            }
        }
        // GET の値を default パラメータに設定
        $tag['options'][] = "default:$value";
    }

    return $tag;
}
add_filter('wpcf7_form_tag', 'wpcf7_add_default');
