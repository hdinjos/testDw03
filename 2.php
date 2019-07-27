<?php

function cekEmail($email) {
    if (!filter_var($email,FILTER_VALIDATE_EMAIL)) {
        echo "invalid";
    }else {
        echo "valid";
    }
}

function cekPasswd($passwd) {
    if (!preg_match("/^[A-Za-z0-9]*$/",$passwd) || strlen($passwd) <= 7) {
        echo "invalid";
    }else {
        echo "valid";
    }

}

function cekUname($uname) {
    if (!preg_match("/^[a-z]*$/",$uname) || strlen($uname) <= 7) {
        echo "invalid";
    }else {
        echo "valid";
    }
}
echo "validasi username: ";
cekUname("jotqjjdj");
echo "<br/>";

echo "validasi password: ";
cekPasswd("df39e30Fu3");
echo "<br/>";

echo "validasi email: ";
cekEmail("jag@gmail.com");

?>