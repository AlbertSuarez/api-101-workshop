#!/usr/bin/env bash

AMOUNT="$1"

for i in $(seq 1 $AMOUNT)
do
    RESPONSE=$(curl --silent -X GET https://uinames.com/api/)
    
    NAME=$(echo $RESPONSE | jq '.name')
    SURNAME=$(echo $RESPONSE | jq '.surname')
    GENDER=$(echo $RESPONSE | jq '.gender')
    REGION=$(echo $RESPONSE | jq '.region')

    SENTENCE="A $GENDER from $REGION called $NAME $SURNAME"
    echo $SENTENCE
done