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