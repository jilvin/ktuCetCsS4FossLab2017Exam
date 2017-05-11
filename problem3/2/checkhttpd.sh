#!/bin/bash

#bash script to check if httpd is running on the system

#check for httpd server
ps -e -o comm --sort=comm | grep "httpd" -c | while read httpdreturn
do
	#echo "$httpdreturn"
	echo 0
done
