def nb_year(p0, percent, aug, p):
    count = 0
    while p0 < p:
        pop = p0 + p0 * (percent/100) + aug
        p0 = pop
        ###this is kinda gross...should have just done something like###
        ### p0 += p0 * percent/100 + aug ####
        count += 1
    return count
