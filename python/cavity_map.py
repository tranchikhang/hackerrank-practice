#!/bin/python3

import math
import os
import random
import re
import sys

#
# Complete the 'cavityMap' function below.
#
# The function is expected to return a STRING_ARRAY.
# The function accepts STRING_ARRAY grid as parameter.
#

def cavityMap(grid):
    new_grid = grid.copy()
    # Write your code here
    for j in range(1, len(grid)-1):
        arr = grid[j]
        for i in range(1, len(arr)-1):
            if arr[i] > grid[j-1][i] and arr[i] > grid[j][i+1] and arr[i] > grid[j+1][i] and arr[i] > grid[j][i-1]:
                temp = list(new_grid[j])
                temp[i] = 'X'
                new_grid[j] = "".join(temp)
    return new_grid
                
            

if __name__ == '__main__':
    fptr = open(os.environ['OUTPUT_PATH'], 'w')

    n = int(input().strip())

    grid = []

    for _ in range(n):
        grid_item = input()
        grid.append(grid_item)

    result = cavityMap(grid)

    fptr.write('\n'.join(result))
    fptr.write('\n')

    fptr.close()
