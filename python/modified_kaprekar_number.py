#!/bin/python3

import math
import os
import random
import re
import sys

#
# Complete the 'kaprekarNumbers' function below.
#
# The function accepts following parameters:
#  1. INTEGER p
#  2. INTEGER q
#

def kaprekarNumbers(p, q):
    # Write your code here
    result = []
    for i in range(p, q+1):
        if (i==1):
            result.append(i)
            continue
        d = len(str(i))
        square = str(i**2)
        if len(square) == 1:
            continue
        square_length = len(square)
        right = square[-d:]
        left = square[:(square_length-d)]
        if (int(right) + int(left) == i):
            result.append(i)
    if len(result):
        print(*result)
    else:
        print("INVALID RANGE")

if __name__ == '__main__':
    p = int(input().strip())

    q = int(input().strip())

    kaprekarNumbers(p, q)
