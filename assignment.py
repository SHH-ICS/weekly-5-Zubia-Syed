def calculatePi(digits):
  result = 0
  return result
number_of_digits = input(int(input("enter iteration number: ")))
pi = sum(4 * (-1) ** i / (2 * i + 1) for i in range(number_of_digits))
print(calculatePi(number_of_digits))
