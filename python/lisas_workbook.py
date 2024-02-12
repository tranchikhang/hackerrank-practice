#!/bin/python3

import math
import os
import random
import re
import sys

#
# Complete the 'workbook' function below.
#
# The function is expected to return an INTEGER.
# The function accepts following parameters:
#  1. INTEGER n
#  2. INTEGER k
#  3. INTEGER_ARRAY arr
#

def workbook(n, k, arr):
    # Write your code here
    cnt = 0
    total_page = 0
    # loop through chapters
    for problems in arr:
        page_count = int(problems/k)
        if problems % k > 0:
            page_count += 1
        for i in range(0, page_count):
            min_val = i*k + 1
            max_val = (i+1)*k
            if max_val > problems:
                max_val = problems
            total_page += 1
            if min_val <= total_page and total_page <= max_val:
                cnt += 1
    return cnt
        

if __name__ == '__main__':
    fptr = open(os.environ['OUTPUT_PATH'], 'w')

    first_multiple_input = input().rstrip().split()

    n = int(first_multiple_input[0])

    k = int(first_multiple_input[1])

    arr = list(map(int, input().rstrip().split()))

    result = workbook(n, k, arr)

    fptr.write(str(result) + '\n')

    fptr.close()
