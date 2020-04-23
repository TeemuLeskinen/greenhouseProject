import mysql.connector
import serial
import time
from time import sleep

ser = serial.Serial('/dev/ttyACM0', 9600)

cnx = mysql.connector.connect(user='testaaja', password='projekti',
                              host='localhost',
                              database='testdatabase')
try:
    raw = ser.readline()
    sleep(0.05)

    decodeSerial = raw.decode('utf-8').strip('\r\n')

    splitData = decodeSerial.split(',')

    temperature = splitData[0]
    luminousity = splitData[1]

    temp = float(temperature)
    lux = int(luminousity)

    cursor = cnx.cursor()

    lisaa_temp = ("INSERT INTO mittari "
                  "(user, temperature, luminousity) "
                  "VALUES (%s, %s, %s)")

    data_temp = ('TL', temp, lux)

    cursor.execute(lisaa_temp, data_temp)

    cnx.commit()

    cursor.close()
    cnx.close()

except:
    print("Error occured")
