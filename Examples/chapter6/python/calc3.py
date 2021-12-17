char=input("ENTER Operation Char +,-,*,/, OR e TO END: ")

while(char!='e'):
    a=int(input("ENTER FIRST NUMBER: "))
    b=int(input("ENTER SECOND NUMBER: "))
    c=0
    if(char=='+'):
        c=a+b
    elif(char=='-'):
        c=a-b
    elif(char=='*'):
        c=a*b
    elif(char=='/'):
        c=a/b

    print(str(a)+char+str(b)+"="+str(c))
    char=input("ENTER Operation Char +,-,*,/, OR e TO END: ") 
print("GOOD BYE!")
