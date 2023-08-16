#!/bin/python3

import math
import os
import random
import re
import sys

# Complete the sherlockAndAnagrams function below.
def sherlockAndAnagrams(s):
    d = {}
    for i in range(len(s)):
        current = ''
        for j in range(i, len(s)):
            t = list(current + s[j])
            t.sort()
            current = ''.join(t)
            if current in d:
                d[current] += 1
            else:
                d[current] = 1
    cnt=0
    for k in d:
        if d[k]>=2:
            cnt += int(d[k]*(d[k]-1)/2)
    return cnt

if __name__ == '__main__':
    fptr = open(os.environ['OUTPUT_PATH'], 'w')

    q = int(input())

    for q_itr in range(q):
        s = input()

        result = sherlockAndAnagrams(s)

        fptr.write(str(result) + '\n')

    fptr.close()
