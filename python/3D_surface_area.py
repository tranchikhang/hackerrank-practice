#!/bin/python3

import math
import os
import random
import re
import sys

#
# Complete the 'surfaceArea' function below.
#
# The function is expected to return an INTEGER.
# The function accepts 2D_INTEGER_ARRAY A as parameter.
#

def surfaceArea(A):
    # Write your code here
    h = len(A)
    w = len(A[0])
    total = 0
    # top and bottom
    total += w*h*2
    # front and bakc
    front = 0
    back = 0
    left = 0
    right = 0
    for i in range(h):
        for j in range(0, w):
            #  calculate left
            if i==0:
                left += A[0][j]
            else:
                left += max(0, A[i][j] - A[i-1][j])
            
            # calculate right
            if i == h-1:
                right += A[i][j]
            else:
                right += max(0, A[i][j] - A[i+1][j])
            
            # calculate front and back
            if j==0:
                # first block, add to front value
                front += A[i][0]
            else:
                front += max(0, A[i][j] - A[i][j-1])
            if j==w-1:
                # last block, add to back value
                back += A[i][j]
            else:
                back += max(0, A[i][j] - A[i][j+1])
    
    total += front + back + left + right
    return total

if __name__ == '__main__':
    fptr = open(os.environ['OUTPUT_PATH'], 'w')

    first_multiple_input = input().rstrip().split()

    H = int(first_multiple_input[0])

    W = int(first_multiple_input[1])

    A = []

    for _ in range(H):
        A.append(list(map(int, input().rstrip().split())))

    result = surfaceArea(A)

    fptr.write(str(result) + '\n')

    fptr.close()
