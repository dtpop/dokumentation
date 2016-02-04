cd "../$BOOK_VERSION/git.$BOOK_TYPE"

git fetch --all
git reset --hard
git pull
rm "./../$BOOK_TYPE" -f -r

../../node_modules/.bin/gitbook install
../../node_modules/.bin/gitbook build ./ "./../$BOOK_TYPE"

HOST="redaxo.org"
USER="107405-10-sascha"
PASSWD=""
FILE="./../$BOOK_VERSION-$BOOK_TYPE.zip"


echo "Datei wird gezipt ($FILE / ./../$BOOK_TYPE)"

rm $FILE
zip -r $FILE "./../$BOOK_TYPE"

echo 'Datei wird hochgeladen (redaxo.org)' 

ftp -n $HOST <<END_SCRIPT
quote USER $USER
quote PASS $PASSWD
put $FILE
quit
END_SCRIPT

rm $FILE
curl -u "USER:PASSWORD" "http://book.redaxo.org/update/index.php?version=$BOOK_VERSION&type=$BOOK_TYPE" \
