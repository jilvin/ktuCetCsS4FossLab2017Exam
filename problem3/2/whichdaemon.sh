#!/bin/bash
#script to check if httpd and init are running on the system

#flagHttpd=0
#flagInit=0
#const=1

if [ $(./checkhttpd.sh) -gt 0 ]
then
	echo "This machine is running a webserver."
fi

