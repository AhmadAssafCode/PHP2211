
PI=3.14
char=''
while(char!='e'):
    char=input("Enter a Raduis of a Circle or e to end: ")
    if (char=='e'):
        break
    R=int(char)
    A=R*R*PI
    C=2*R*PI
    print("Circle Area= "+str(A))
    print("محيط الدائرة= "+str(C))
    
print("Good Bye!")



##PI=3.14
##R=0
##while(R!=-1):
##    R=int(input("Enter a Raduis of a Circle or -1 to end: "))
##    A=R*R*PI
##    print("Circle Area= "+str(A))
##   
##print("Good Bye!")
##                               

    
