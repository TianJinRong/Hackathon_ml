<?php
/**
 * 接口用于清空用户清单
 */
$result_path = '../data/result.txt';
$user_list_path = '../data/userlist.txt';

file_put_contents($user_list_path, json_encode([]));
file_put_contents($result_path, json_encode([]));