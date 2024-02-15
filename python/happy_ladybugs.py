#!/bin/python3

import math
import os
import random
import re
import sys

#
# Complete the 'happyLadybugs' function below.
#
# The function is expected to return a STRING.
# The function accepts STRING b as parameter.
#

def happyLadybugs(b):
    # Write your code here
    underscore_cnt = 0
    char_cnt = {}
    if len(b) == 1 and b != "_":
        return "NO"
    for i in range(len(b)):
        char = b[i]
        if char == "_":
            underscore_cnt += 1
        else:
            if char in char_cnt:
                char_cnt[char] += 1
            else:
                char_cnt[char] = 1
    if underscore_cnt == len(b):
        return "YES"
    if underscore_cnt == 0:
        if len(char_cnt.keys()) == 1 and len(b) != 1:
            return "YES"
        if len(b) == 2 and b[0]!=b[1]:
            return "NO"
        for i in range(1, len(b)):
            if i != len(b) - 1:
                if b[i] != b[i-1] and b[i] != b[i+1]:
                    return "NO"
            elif b[i-1] != b[i]:
                return "NO"
        return "YES"
    for k, v in char_cnt.items():
        if v == 1:
            return "NO"
    return "YES"

if __name__ == '__main__':
    fptr = open(os.environ['OUTPUT_PATH'], 'w')

    g = int(input().strip())

    for g_itr in range(g):
        n = int(input().strip())

        b = input()

        result = happyLadybugs(b)

        fptr.write(result + '\n')

    fptr.close()
