<?php
/**
 * 
 * @authors Your Name (you@example.org)
 * @date    2018-06-27 20:29:46
 * @version $Id$
 */

//載入小明與小華寫的檔案，因為使用了命名空間，所以同樣的 class 名稱不會造成衝突
include_once("sample_a.php");
include_once("sample_b.php");


//一、
// 使用 a\man 並取別名為 a_man。當然也可以不使用 as 來取別名。
use a\man as a_man;
 
// 使用別名叫做 a_man 底下的類別 hello
echo a_man\hello::get(); // 輸出 a\man hello::get()
echo "\n";
 
echo a_man\byebye::get(); // 輸出 a\man byebye::get()
echo "\n"; 
 
// 二、
use a\woman as a_wonan;
echo a_wonan\hello::get(); // 輸出 a\woman hello::get()
echo "\n";
 
// 三、
use b\man as b_man;
echo b_man\hello::get(); // 輸出 b\man hello::get()
echo "\n";
 
// 四、
use b\woman as b_woman;
echo b_woman\hello::get(); // 輸出 b\woman hello::get()
echo "\n";