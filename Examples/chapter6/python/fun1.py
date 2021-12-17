def my_function(name):
  print("Hello "+name)

my_function("Ahmad")
my_function("Khalil")
my_function("Noor")
var1="Aseel"
my_function(var1)
var1="Tarneem"
my_function(var1)

while var1!=-1:
    var1=input("Enter your name please:")
    if var1=="-1":
        break
   
    my_function(var1)
print("Good Bye")
