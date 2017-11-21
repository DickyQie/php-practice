<?php


/*****
 * 1：第一个文件有命名空间，第二个没有
 */
/*
const USER=1;

function getInfo(){
    echo "<br>noe2";
}
*/

/*****
 * 2：第二个文件有命名空间，第一个没有
 */

namespace bj;
const USER=1;

function getInfo(){
    echo "<br>noe2";
}