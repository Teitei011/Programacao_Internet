#!/bin/bash

#Faça um contador de visitas na página. #TODO
echo "Content-type: text/html"
echo ""
echo "Quantidade de pessoas que visitaram esse site:"

pessoas="$(tail -n 1 pessoas.txt)"
echo $pessoas
# Agora aumentando para +1
pessoas1=$((pessoas+1))
echo $pessoas1 > pessoas.txt


echo "<hr>"


echo "</body></html>"
