def my_function(fname,sname):
  print("Hello "+fname+' '+sname)


var1=''
while var1!='-1':
    var1=input("Enter your first name please:")
    if var1=='-1':
        break
    var2=input("Enter your second name please:")

    my_function(var1,var2)
print("Good bye")


