#!/bin/bash

echo "Content-type: text/html"
echo ""
echo "Listagem<br>"
URL=$(echo "$QUERY_STRING" | sed 's/^."url_form=\([^&]*\).*/\1/p')
echo "<pre>"
ls $URL
echo "</pre>"
echo "</body></html>"
