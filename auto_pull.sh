#!/bin/bash

cd /data/www/test/HTML5

/usr/bin/git pull origin master 2>>error.log

echo '生产环境更新完毕'
