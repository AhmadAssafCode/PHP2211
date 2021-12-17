def evenOdd(n):
    if n%2==0:
        return "Tarneem"
     
    else:
        return "ODD"

def getMax(arr):
    mx=arr[0]
    for m in arr:
        if m>mx:
            mx=m
    return mx

x=int(input("ENTER AN INTEGER: "))

print(str(x) +" is "+ evenOdd(x))

myArray=[50,70,40,80,77,90,20]
Max=getMax(myArray)
print("The Max is "+ str(Max) )

    
