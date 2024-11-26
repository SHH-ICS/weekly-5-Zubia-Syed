def calculatePi(digits):
    result = sum(4 * (-1) ** i / (2 * i + 1) for i in range(digits))
    return result

number_of_digits = int(input("Enter iteration number: ")) 
pi = calculatePi(number_of_digits)  
print(pi)

