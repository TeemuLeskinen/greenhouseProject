#!/usr/bin/env python

import serial
import time
import mysql.connector

ser = serial.Serial('/dev/ttyACM0', 9600)
cnx = mysql.connector.connect(user='testaaja', password='projekti',
                              host='localhost', database='testdatabase')

ser_bytes = ser.readline()
decoded_bytes = float(ser_bytes[0:len(ser_bytes)-2].decode("utf-8"))
temp = decoded_bytes
temperature = ser.readline()

cursor = cnx.cursor()

add_temperature = ("INSERT INTO mittari"
                   "(temperature)"
                   "VALUES (%s)")
data_temperature = (float(temperature))

cursor.execute(add_temperature, data_temperature)
cnx.commit()

cursor.close()
cnx.close()

