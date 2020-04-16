#!/usr/bin/env python

import serial
import time
import mysql.connector

ser = serial.Serial('/dev/ttyACM0', 9600)

while 1:
    try:
        ser_bytes = ser.readline()
        decoded_bytes = float(ser_bytes[0:len(ser_bytes)-2].decode("utf-8"))
        print(decoded_bytes)
        temp = decoded_bytes
        con = mysql.connector.connect('localhost','testaaja','projekti','mittari')
        with con:
            cursor = con.cursor()
            cursor.execute("INSERT INTO mittari VALUES (,(%f),'',''" %temp);
            con.commit()
            cursor.close()
    except:
        print("error")
