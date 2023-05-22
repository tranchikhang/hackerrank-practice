#!/bin/python3

import math
import os
import random
import re
import sys

#
# Complete the 'minimumDistances' function below.
#
# The function is expected to return an INTEGER.
# The function accepts INTEGER_ARRAY a as parameter.
#

def minimumDistances(a):
    # Write your code here
    m = 9999999
    d = {}
    for i in range(0, len(a)):
        if a[i] in d:
            d[a[i]].append(i)
        else:
            d[a[i]] = [i]
    print(d)
    for key in d:
        if len(d[key])==2:
            t = abs(d[key][0] - d[key][1])
            if t<m:
                m = t
    if m == 9999999:
        return -1
    return m

if __name__ == '__main__':
    fptr = open(os.environ['OUTPUT_PATH'], 'w')

    n = int(input().strip())

    a = list(map(int, input().rstrip().split()))

    result = minimumDistances(a)

    fptr.write(str(result) + '\n')

    fptr.close()
