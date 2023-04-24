#!/bin/python3

import math
import os
import random
import re
import sys
from bisect import bisect


#
# Complete the 'climbingLeaderboard' function below.
#
# The function is expected to return an INTEGER_ARRAY.
# The function accepts following parameters:
#  1. INTEGER_ARRAY ranked
#  2. INTEGER_ARRAY player
#

def climbingLeaderboard(scores, player):
    # Write your code here
    ranks = []
    r=1
    for i in range(len(scores)):
        if i==0:
            ranks.append(1)
        elif scores[i]==scores[i-1]:
            ranks.append(r)
        else:
            r += 1
            ranks.append(r)
    scores.reverse()
    ranks.reverse()
    pRank = -1
    pScore = 0
    lastIdx = -1
    result = []
    for p in player:
        # player score
        pScore = p
        flg = False
        idx = bisect(scores, pScore)
        print("idex: {}".format(idx))
        if idx==len(scores):
            pRank = 1
        else:
            pRank = ranks[idx] + 1
        result.append(pRank)
    return result


if __name__ == '__main__':
    fptr = open(os.environ['OUTPUT_PATH'], 'w')

    ranked_count = int(input().strip())

    ranked = list(map(int, input().rstrip().split()))

    player_count = int(input().strip())

    player = list(map(int, input().rstrip().split()))

    result = climbingLeaderboard(ranked, player)

    fptr.write('\n'.join(map(str, result)))
    fptr.write('\n')

    fptr.close()
