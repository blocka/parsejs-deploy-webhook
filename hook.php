<?php
$_POST = json_decode($_POST['payload'],true);
$ref = $_POST['ref'];
$branch = explode('/',$ref)[2];
$repo = 'git@github.com:'.$_POST['repository']['organization'].'/'.$_POST['repository']['name'];

$dir = "{$_POST['repository']['name']}-$branch";
$cmd = ("git clone $repo $dir; cd $dir; git fetch; git reset --hard origin/$branch; parse deploy $branch");

echo $cmd;

system($cmd);
