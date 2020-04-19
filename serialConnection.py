import mysql.connector
import serial
import time

ser = serial.Serial('/dev/ttyACM0', 9600)

cnx = mysql.connector.connect(user='testaaja', password='projekti',
                              host='localhost',
                              database='testdatabase')


ser_bytes = ser.readline()
decoded_bytes = float(ser_bytes[0:len(ser_bytes)-2].decode("utf-8"))

cursor = cnx.cursor()

lisaa_temp = ("INSERT INTO mittari "
               "(user, temperature) "
               "VALUES (%s, %s)")

data_temp = ('TL', float(decoded_bytes))

cursor.execute(lisaa_temp, data_temp)

cnx.commit()

cursor.close()
cnx.close()

