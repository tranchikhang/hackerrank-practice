#!/bin/python3

import math
import os
import random
import re
import sys

#
# Complete the 'minimumNumber' function below.
#
# The function is expected to return an INTEGER.
# The function accepts following parameters:
#  1. INTEGER n
#  2. STRING password
#

numbers = list("0123456789")
lower_case = list("abcdefghijklmnopqrstuvwxyz")
upper_case = list("ABCDEFGHIJKLMNOPQRSTUVWXYZ")
special_characters = list("!@#$%^&*()-+")

def minimumNumber(n, password):
    # Return the minimum number of characters to make the password strong
    password = list(password)
    has_num = 1
    has_lower_case = 1
    has_upper_case = 1
    has_special = 1
    for ch in password:
        if has_num == 1 and ch in numbers:
            has_num = 0
        if has_lower_case == 1 and ch in lower_case:
            has_lower_case = 0
        if has_upper_case == 1 and ch in upper_case:
            has_upper_case = 0
        if has_special == 1 and ch in special_characters:
            has_special = 0
    missing_char = has_num + has_lower_case + has_upper_case + has_special
    if n + missing_char < 6:
        return missing_char + 6 - missing_char - n
    return missing_char

if __name__ == '__main__':
    fptr = open(os.environ['OUTPUT_PATH'], 'w')

    n = int(input().strip())

    password = input()

    answer = minimumNumber(n, password)

    fptr.write(str(answer) + '\n')

    fptr.close()
