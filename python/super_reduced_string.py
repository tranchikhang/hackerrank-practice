#!/bin/python3

import math
import os
import random
import re
import sys

#
# Complete the 'superReducedString' function below.
#
# The function is expected to return a STRING.
# The function accepts STRING s as parameter.
#

def superReducedString(s):
    # Write your code here
    s = list(s)
    for i in range(len(s) - 1):
        if i+1<len(s) and s[i] == s[i+1]:
            new_str = s[0:i] + s[i+2:]
            s = superReducedString(new_str)
    if len(s) == 0:
        return "Empty String"
    return "".join(s)
        

if __name__ == '__main__':
    fptr = open(os.environ['OUTPUT_PATH'], 'w')

    s = input()

    result = superReducedString(s)

    fptr.write(result + '\n')

    fptr.close()
