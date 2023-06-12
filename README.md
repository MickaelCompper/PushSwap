# PushSwap
test algorithmique réalisé en cours


• Le programme doit afficher la série d’opérations qui permettent de trier cette liste. Au tout début, lb est vide, et la doit contenir un certain nombre de ombres positifs ou négatifs. L’objectif du programme est de trier la en ordre croissant (du plus petit au plus grand).

• Pour cela, vous n’aurez accès qu’aux opérations suivantes :
1. sa : échange les positions des deux premiers éléments de la (rien ne se produit s’il n’y a pas assez d’éléments).
2. sb : échange les positions des deux premiers éléments de lb (rien ne se produit s’il n’y a pas assez d’éléments).
3. sc : sa et sb en même temps.
4. pa : prend le premier élément de lb et le place à la première position de la (rien ne se produit si lb est vide).
5. pb : prend le premier élément de la et le place à la première position de lb (rien ne se produit si la est vide).
6. ra : fait une rotation de la vers le début. (le premier élément devient le dernier)
7. rb : fait une rotation de lb vers le début (le premier élément devient le dernier).
8. rr : ra et rb en même temps.
9. rra : fait une rotation de la vers la fin. (le dernier élément devient le premier).
10. rrb : fait une rotation de lb vers la fin. (le dernier élément devient le premier).
11. rrr : rra et rrb en même temps.
