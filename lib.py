#coding=utf-8
import os
#打印订单数量
tmp='TM2353369196420632,TM2353382981938233,TM2353392778054544,TM2353404394450541,TM2353427184326644,TM2353438595061027,TM2353481974329836,TM2353495362464640,TM2353523997964036,TM2353566572067831,TM2353593969402934,TM2353607164309430,TM2353609160803126,TM2353623376825146,TM2353681585093645,TM2353682790181246,TM2353700780574028,TM2353705377556129,TM2353710386946746,TM2353714371403536,TM2353753370429226,TM2353759562908738,TM2353776560431042,TM2353809974727931,TM2353811386346434'
print len(tmp.split(','))

#调整编码、订单输出格式
tmp=open('e:\\product_code.txt','w')
with open('e:\\1.txt') as f:
	count=0
	for line in f:
		count+=1
		tmp.write(line.strip()+',')

tmp.close()
print count

#订单写入excel文件中
import xlwt
from random import randint
fr=open('1.txt')
with open('tmp.txt','w') as f:
	for i in range(300):
		f.write(fr.readline())

wbk=xlwt.Workbook()
sheet=wbk.add_sheet('111',cell_overwrite_ok=True)
with open('tmp.txt') as f:
	for no,line in enumerate(f):
		sheet.write(no,0,line.strip())
		sheet.write(no,1,randint(0,200))
wbk.save('order.xls')

#去除空行
fb=open('e:\\a.txt','wb')
with open('e:\\my_files\\aa','rb')as f:
	for line in f:
		if line.strip()=='':
			continue
		fb.write(line)
fb.close()

#处理价格有效小数位数
def handle_price(price):
	price_str=str(price)[::-1]
	for index,i in enumerate(price_str):
		if i!='0':
			return price_str[index:][::-1].strip('.')

print handle_price(0.000100)

#数字三位分节法
#方法1
def handle_money(money):
	# money_dec=str(money).split('.')[-1]
	money_int=str(money).split('.')[0][::-1]
	money=''
	for i in range(0,len(money_int),3):
		money+=money_int[i:i+3]+','
	return money[::-1].strip(',')

print handle_money(34223)
#方法2--较麻烦
def handle_money(money):
    money_int=str(money).split('.')[0][::-1]
    result=''
    for index in range(len(money_int)):
        if not index%3:
            result+=money_int[index:index+3]+','
    return result.strip(',')[::-1]

#数据库操作+excel文件
import MySQLdb
import random
from openpyxl import Workbook

conn=MySQLdb.connect(
	host='192.168.90.207',
	port=3306,
	user='9drug_test',
	passwd='Sx*30EE#&2rf',
	db='appOms1')

cur=conn.cursor()
select="SELECT GOODS_NO,GOODS_NO_69 FROM goods LIMIT 550"
select_test="SELECT * FROM student"

insert="INSERT student(name,class,age) VALUES(%s,%s,%s)"

#新建excel文件
wb=Workbook()
ws=wb.active
ws.title='DataTest'
ws.append(['GOODS_NO','GOODS_NO_69'])

#新增数据
for i in range(30):
	name=random.choice(['Tom','Lily','One','Jack'])
	cla=random.choice(['1-2','2-3','3-4','4-5','5-6'])
	age=str(random.randint(5,40))
	cur.execute(insert,(name,cla,age))

#删除数据
delete="DELETE FROM student WHERE name='Jack'"
cur.execute(delete)

#更新数据
update="UPDATE student SET class='三年二班' WHERE name='Tom'"
cur.execute(update)

#查询数据500条，写入excel文件，测试数据
num=cur.execute(select)
datas=cur.fetchmany(500)
for data in datas:
	ws.append(data)
wb.save('e:\\test_data.xlsx')
#关闭数据库链接
cur.close()
conn.commit()
conn.close()

#修改图片尺寸大小
from PIL import Image
import os
def do_resize(filepath,part_size=(750,212),percent=0.5):
	img=Image.open(filepath)
	# img_size=img.size
	w,h=img.size
	print img_size
	# img1=img.resize(map(lambda x:int(x*percent) ,img_size))
	# img1.resize(w/2,h/2)
	img1=img.resize(part_size)

	print img1.size
	new_file=os.path.splitext(filepath)[0]+'_copy.png'
	img1.save(new_file)

do_resize(r'C:\Users\Administrator\Desktop\banner\0001.png')

#生成验证码图片
from PIL import Image
from PIL import ImageFilter
from PIL import ImageDraw, ImageFont
import os
import random
import string
# 随机字母:
def rndChar():
    return random.choice(string.letters+string.digits)

# 随机颜色1:
def rndColor():
    return (random.randint(64, 255), random.randint(64, 255), random.randint(64, 255))

# 随机颜色2:
def rndColor2():
    return (random.randint(32, 127), random.randint(32, 127), random.randint(32, 127))

# 240 x 60:
width = 60 * 4
height = 60
image = Image.new('RGB', (width, height), (255, 255, 255))
# 创建Font对象:
font = ImageFont.truetype('Arial.ttf', 36)
# 创建Draw对象:
draw = ImageDraw.Draw(image)
# 填充每个像素:
for x in range(width):
    for y in range(height):
        draw.point((x, y), fill=rndColor())
# 输出文字:
for t in range(4):
    draw.text((60 * t + 10, 10), rndChar(), font=font, fill=rndColor2())
# 模糊:
image = image.filter(ImageFilter.GaussianBlur)
image.save('code.jpg', 'jpeg')