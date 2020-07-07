#!/bin/bash
echo "Content-type: text/html"
echo ""
echo "<br>" 
echo "lista de usuarios conectados no sistema <br>"
echo "<pre>"
who
echo "</pre>"
echo "<hr>"
echo "<hr>"

echo "Listagens de usuarios<br>"
echo "<pre>"
ls / -al
echo "</pre>"
