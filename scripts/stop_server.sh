#!/bin/bash
isExistApp=`pgrep apache2`
if [[ -n  $isExistApp ]]; then
   systemctl restart apache2
fi

