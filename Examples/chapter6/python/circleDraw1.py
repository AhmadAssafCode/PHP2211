# draw color filled circle in turtle

import turtle


def drawCirce():

  # creating turtle pen
  t = turtle.Turtle()

  # taking input for the radius of the circle
  r = int(input("Enter the radius of the circle: "))

  # taking the input for the color
  col = input("Enter the color name or hex value of color(# RRGGBB): ")

  # set the fillcolor
  t.fillcolor(col)

  # start the filling color
  t.begin_fill()

  # drawing the circle of radius r
  t.circle(r)

  # ending the filling of the color
  t.end_fill()

x=0
while(x!=4):
  print("Enter 1 to draw circle ")
  print("Enter 2 to draw Rectangle ")
  print("Enter 3 to draw Triangle ")
  print("Enter 4 to Exit ")
  x=int(input("Enter Your Choice"))

  if x==1:
    drawCirce()
  elif x==2:
    drawRectangle()
  elif x==4:
    break
  else:
    print("Wrong choice")
  
print("good bye")
    
  


  
