#!/bin/bash

cd $(dirname $0)

old_db=app.sqlite3.$(( $(date +%Y) - 1 ))
new_db=app.sqlite3.$(date +%Y)

cp $old_db $new_db

sqlite3 $new_db <<- EOL
	UPDATE kit SET deposit_in    = 0;
	UPDATE kit SET deposit_out   = 0;
	UPDATE kit SET handed_out    = 0;
	UPDATE kit SET handed_in     = 0;
	UPDATE kit SET ready_current = ready_next;
	UPDATE kit SET ready_next    = 0;
EOL

exit $?
