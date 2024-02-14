#!/bin/python3

import math
import os
import random
import re
import sys

#
# Complete the 'strangeCounter' function below.
#
# The function is expected to return a LONG_INTEGER.
# The function accepts LONG_INTEGER t as parameter.
#

def strangeCounter(t):
    # Write your code here
    start_val = 3
    min_time = 1
    max_time = 3
    if t <= 3:
        return 4 - t
    while True:
        start_val = start_val*2
        min_time = max_time + 1
        max_time = min_time + start_val - 1
        if min_time <= t and t <= max_time:
            return max_time + 1 - t
            break

if __name__ == '__main__':
    fptr = open(os.environ['OUTPUT_PATH'], 'w')

    t = int(input().strip())

    result = strangeCounter(t)

    fptr.write(str(result) + '\n')

    fptr.close()
