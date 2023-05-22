#!/bin/python3

import math
import os
import random
import re
import sys

#
# Complete the 'timeInWords' function below.
#
# The function is expected to return a STRING.
# The function accepts following parameters:
#  1. INTEGER h
#  2. INTEGER m
#

minutes = ['zero','one','two','three','four','five',
           'six','seven','eight','nine','ten',
           'eleven','twelve','thirteen','fourteen',
           'fifteen','sixteen','seventeen','eighteen',
           'nineteen','twenty','twenty one', 'twenty two',
           'twenty three','twenty four','twenty five',
           'twenty six','twenty seven','twenty eight',
           'twenty nine', 'thirty']
hours = ['one','two','three','four','five',
           'six','seven','eight','nine','ten',
           'eleven','twelve']

def minuteToWord(m):
    if m==1:
        return minutes[m] + ' minute'
    return minutes[m] + ' minutes'

def hourToWord(h):
    return hours[h-1]

def timeInWords(h, m):
    h = int(h)
    m = int(m)
    # Write your code here
    hour_txt = ' o\' clock'
    quarter_txt = 'quarter'
    half_txt = 'half'
    if m==0:
        return hourToWord(h) + hour_txt
    elif m==15:
        return quarter_txt + ' past ' + hourToWord(h)
    elif m==30:
        return half_txt + ' past ' + hourToWord(h)
    elif m==45:
        return quarter_txt + ' to ' + hourToWord(h+1)
    elif m<=30:
        return minuteToWord(m) + ' past ' + hourToWord(h)
    elif m>30:
        return minuteToWord(60-m) + ' to ' + hourToWord(h+1)


if __name__ == '__main__':
    fptr = open(os.environ['OUTPUT_PATH'], 'w')

    h = int(input().strip())

    m = int(input().strip())

    result = timeInWords(h, m)

    fptr.write(result + '\n')

    fptr.close()
