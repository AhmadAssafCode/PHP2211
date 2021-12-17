marks=[70,80,55,40,92,75,86,93,46,88]

#1
print("q1")
print(marks)
print("-----------")
#2
print("q2")
print(marks[2])
print(marks[5])
print("-----------")

#3
print("q3")
for m in marks:
    print(m)
print("-----------")
#4
print("q4")
marks.pop(3)
marks.pop(5)
print(marks)
print("-----------")
#5
print("q5")
marks.append(77)
marks.append(41)
print(marks)
print("-----------")
#6
print("q6")
print(len(marks))
print("-----------")
#7
print("q7")
sm=0
for m in marks:
    sm=sm+m
print("The Sum="+str(sm)) 
print("-----------")
#8
print("q8")
avg=sm/len(marks)
print("The Average="+str(avg)) 
print("-----------")
#9
print("q9")
mx=0
for m in marks:
   if(m>mx):
       mx=m
print("The Max="+str(mx)) 
print("-----------")
#10
print("q10")
mn=marks[0]
for m in marks:
   if(m<mn):
       mn=m
print("The Min="+str(mn)) 
print("-----------")





