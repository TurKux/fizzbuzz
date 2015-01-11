
# by @TurKux

for n in range(1, 101):
    if not (n % 15):
            print("FizzBuzz")
    elif not n % 3:
        print("Fizz")
    elif not n % 5:
        print("Buzz")
    else:
        print(n)
