#!/bin/python3

import math
import os
import random
import re
import sys

#
# Complete the 'biggerIsGreater' function below.
#
# The function is expected to return a STRING.
# The function accepts STRING w as parameter.
#

def biggerIsGreater(w):
    # Write your code here
    w = list(w)
    w.reverse()
    right = -1
    for i in range(len(w) - 1):
        if ord(w[i]) > ord(w[i+1]):
            right = i + 1
            break
    if right == -1:
        return "no answer"
    left = 10000
    for i in range(0, right):
        if ord(w[i]) > ord(w[right]):
            left = i
            break
    # swap
    w[left], w[right] = w[right], w[left]
    left_over = w[right:]
    to_reverse = w[0:right]
    to_reverse.reverse()
    res = to_reverse + left_over
    res.reverse()
    return "".join(res)

if __name__ == '__main__':
    fptr = open(os.environ['OUTPUT_PATH'], 'w')

    T = int(input().strip())

    for T_itr in range(T):
        w = input()

        result = biggerIsGreater(w)

        fptr.write(result + '\n')

    fptr.close()
