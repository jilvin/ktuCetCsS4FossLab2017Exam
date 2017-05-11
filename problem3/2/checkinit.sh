#!/bin/bash
#script to check if init is running on the system

#check for init process
ps -e -o comm --sort=comm | grep "init" -c | while read initreturn
do
echo $initreturn
done

