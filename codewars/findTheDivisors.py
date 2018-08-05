def divisors(integer):
    divisors = []
    for i in range(integer):
        if i > 1 and integer % i == 0:
            divisors.append(i)
    if len(divisors) == 0:
        return str(integer) + " is prime"
    return divisors
