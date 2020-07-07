#!/bin/bash
echo "Content-type:text/html"
echo ""
echo '<hr>'
echo 'Processor Usage: <br>'
echo "$(top)"
echo '<hr>'
