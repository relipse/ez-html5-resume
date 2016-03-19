#!/bin/bash
NAME="jimkinsman"
FROM_BASE="/root/util/web/resume"
TO_BASE="/home/sharpmailer/public_html"

#first copy all the config files
rsync -vai --exclude=.git/ --exclude=public_html/ $FROM_BASE/ $TO_BASE/
rsync -vai $FROM_BASE/config $TO_BASE/resume
#then copy public_html to jimkinsman and rsync it
cp -r $FROM_BASE/public_html $FROM_BASE/$NAME
rsync -vai $FROM_BASE/$NAME $TO_BASE/resume
rm -rf $FROM_BASE/$NAME 
