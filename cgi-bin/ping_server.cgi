#!/bin/bash

echo "Content-type: text/html"
echo ""

echo "<html><head><title> Ping Server </title></head>"
echo "<body>"
echo "<p> Servidor de Ping</p>"
echo "<hr>"

URL=$(echo "$QUERY_STRING" | sed 's/^."url_form=\([^&]*\).*/\1/p')

echo $URL

echo "<hr>"
echo "<pre>"
ping -c5 $URL
# echo "$(ping -c5 $URL)"
echo "</pre>"
echo "<hr>"
echo "</body></html>"
