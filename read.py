f = open('simple.txt','r')
message = f.read()
y=message.split("\n")
a=[]
b=[]
c=[]
for x in y:
    try:
        p=x.split(";")
        a.append(p[0])
        b.append(p[1])
        c.append(p[2])
    except IndexError:
        a.append("")
        b.append("")
        c.append("")
        
import MySQLdb

# Open database connection
db = MySQLdb.connect("localhost","root","12345678","dwm_database" )

# prepare a cursor object using cursor() method
cursor = db.cursor()
fmt = '%s %s %s'

#print(fmt % ('Assignment', 'Grade', 'Yo'))

#    print name,grade,yo,"\n"
for i, (name, grade, yo) in enumerate(zip(a,b,c)):
    sql="INSERT INTO `tbl_hindi`(`word`, `meaning1`, `meaning2`) VALUES ('"+a[i]+"',N'"+b[i]+"','"+c[i]+"')"
    try:
    # Execute the SQL command
       cursor.execute(sql)
    # Commit your changes in the database
       db.commit()
    except:
    # Rollback in case there is any error
        sent = "INSERT INTO `tbl_hindi`(`word`, `meaning1`, `meaning2`) VALUES ('__',N'__','__')"
        cursor.execute(sent)
        db.commit
db.close()
