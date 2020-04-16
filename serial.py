#!/usr/bin/env python

import serial

ser = serial.Serial/'/dev/ttyACM0', 9600)

while 1:
	try:
		a = ser.read()
		print(ord(a))
		exept:
			print"error"
