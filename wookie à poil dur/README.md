# wookie à poil dur

**Le génome du wookie à poil dur vient d'être séquencé.**

Malheureusement, le séquenceur est une merde monumentale, conçue par nul autre que l'empereur Palpatine, qui est connu pour concevoir des merdes. Demandez à Dark Vador. Je m'égare. Le séquenceur a donc sorti des séquences absolument riquiqui et inexploitables. Heureusement, vous êtes là.

Vous avez entendu parler d'une méthode hyper connue chez les bioinformaticiens : le graphe de De Bruijn.
Elle consiste à découper les reads (vous savez les petits cacas que le séquenceur de Palpy prend pour des séquences) en morceaux chevauchants de taille k (k-mers dans l'intimité) et à tracer un graphe qui relie deux k-mers s'ils coïncident sur k-1 bases, comme suit :

```
ATTGC-TTGCT-TGCTA-GCTAG (qui donnera à la fin ATTGCTAG)
```

et ainsi de suite. Vous voyez le topo. Ensuite, il faut reconstituer la séquence en parcourant le graphe, comme une fleur (ou un jedi, c selon vos goûts).

Par contre, Anakin Skywalker suggère une méthode un peu plus brutasse : un graphe qui répertorie directement les superpositions entre reads. En même temps, une méthode de brutasse, c'est bien Anakin, tiens. Tiens, d'ailleurs il a trouvé une séquence de 1023 bases.

Votre mission, si vous l'acceptez, est donc de faire triompher le côté clair de la force et de reconstituer la séquence du génome du wookie à poil dur à partir de ces petits cacas :

    AAAAACAAAAGAAAATAAAC
    AAGCAAAGGAAAGTAAA
    AAGTGAAGTTAATACAATAGAAT
    ACACGACACTACAGCACAGGACAGTACAT
    ACCTGACCTTACGAGACGATACGCCACGCG
    ACGCGACGCTACGGCACGGGACGGTAC
    AGACTATACTCCACTCGACTCT
    AGGCTAGGGCAGGGGAGGGTAGGTCAGGT
    AGTAGATCAGATGAGATTAGCATAGCCC
    ATTAGCATAGCCCAGCCGAGCCTAGCG
    ATTCAATTGAATTTACACCACACG
    CAACAGAACATAACCCAACCGA
    CAGTCGAGTCTAGTGCAGTGGAGTGTAGTTCAG
    CCATACCCCACCCGACCCTACC
    CCATGCGATGCTATGGCATGGGATGGTATGT
    CCTACCGCACCGGACCGTACCTCACCT
    CCTAGCGCAGCGGAGCGTAGCTCAGCTGAGCTTA
    CCTCCCGGCCCGTCCCTGCCCTTCCGCGCCGCTCC
    CGAACCTAACGCAACGGAAC
    CTTAAGACAAGAGAAGATAAGCC
    CTTTGCTTTTGGGGGTGGGTTGGTGTGGT
    GAACGTAACTCAACTGAACTTA
    GATATTATCCCATCCGATCCTATCGCATCGGAT
    GCTCCGGGCCGGTCCGTGCCGTTCCTCGCCT
    GCTGAGCTTAGGATAGGCCAGGCGAGGCT
    GGTACGTCACGTGACGTTACTAGACT
    GTAAATCAAATGAAATTAACACAACAG
    GTACATCACATGACATTACCAGACCATACC
    GTATGTCATGTGATGTTATTCCATT
    GTGTGGTTTGTGTTGTTTT
    TAAACCAAACGAAACTAAAGCA
    TAAGCCAAGCGAAGCTAAGG
    TAAGGCAAGGGAAGGTAAGTCAAGTGA
    TAGAATATAATCCAATCGAATCTAATGC
    TAGTTCAGTTGAGTTTATATCATATGATATTA
    TCAGGTGAGGTTAGTATAGTCCAG
    TCGCCTCTCCTGGCCTGTCCTTGCCTTTCGCG
    TCGGATCGTATCTCATCTGATCTTATGCCAT
    TCGTCTCGTGGCGTGTCGTTGCG
    TCTAATGCAATGGAATGTAATTCAA
    TCTACTGCACTGGACTGTACTTCACTTG
    TCTGGGCTGGTCTGTGCTGTTCTTGGCTTGTCTTTGCT
    TGTCGTTGCGTTTCTCTGCTCTTCTGGGC
    TTCCATTCGATTCTATTGCATTGGATTGTAT
    TTCGCGGCGCGTCGCTGCGCTTCGG
    TTCGGCTCGGGGCGGGTCGGTGCGGTTCGTCTCG
    TTGACTTTAGAGCAGAGGAGAGTAG
    TTGTATTTCATTTGATTTTCCCCCGCCCCTCCC

**Que la force soit avec vous !**

---

## Winners

Les gagnants du challenge de rapidité, dans l'ordre :

1. zigazou
2. moul

Anakin Skywalker (hors concours)
