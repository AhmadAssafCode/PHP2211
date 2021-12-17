#طباعة الاعداد الفردية والزوجية من 0-9
for x in range(10):
    if x%2==0:
        print(str(x) +" is even") 
    else:
    	print(str(x) +" is odd")
    	
#طباعة جدول الضرب لعدد ما يتم ادخاله من 1-9 مثال 5x1=5 5x2=10 5x3=15
#n=int(input("Enter a number:"))

#for i in range(1,10):
 #   print(str(n)+"x"+str(i)+"="+str(n*i))

 
n=int(input("Enter a number:"))
for i in range(1,n+1):# للأسطر
   for s in range(1,i+1):#للأعمدة
       print('*',end="")#طباعة نجم بعدد رقم الصف الحالي في نفس السطر  
   print('') # للنزول لسطر جديد كل سطر   
      
