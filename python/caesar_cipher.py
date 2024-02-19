#!/bin/python3

import math
import os
import random
import re
import sys

#
# Complete the 'caesarCipher' function below.
#
# The function is expected to return a STRING.
# The function accepts following parameters:
#  1. STRING s
#  2. INTEGER k
#

def caesarCipher(s, k):
    # Write your code here
    a_val = 97
    z_val = 122
    res = []
    s = list(s)
    for ch in s:
        val = ch.lower() if ch.isupper() else ch

        if ord(val) >= a_val and ord(val) <= z_val:
            new_val = ord(val) + k
            while new_val > z_val:
                new_val = new_val - z_val + a_val - 1
            new_val = chr(new_val)
            val = new_val.upper() if ch.isupper() else new_val
            res.append(val)
        else:
            res.append(ch)
    return "".join(res)

if __name__ == '__main__':
    fptr = open(os.environ['OUTPUT_PATH'], 'w')

    n = int(input().strip())

    s = input()

    k = int(input().strip())

    result = caesarCipher(s, k)

    fptr.write(result + '\n')

    fptr.close()
