Oggi facciamo la nostra prima vera interazione con il database utilizzando l’ORM di Laravel.

 - Create un nuovo progetto Laravel 9 (o clonate il template fatto in classe).

 - tramite **phpMyAdmin** create un nuovo database (scegliete liberamente il nome del DB).

 - Importate nel vostro database la tabella **movies** in allegato.

 - inserite le vostre credenziali per il database nel file **.env** (se il progetto è stato clonato
 duplicate il file .env.exemple, lo rinominate in .env, generate la chiave e impostate le credenziali).

 - Create un model Movie '**php artisan make:model Movie**'.

 - Create un controller che gestirà la rotta '**/**'  (**php artisan make:controller Guest/PageController**).

 - All’interno della funzione **index()** del controller, recuperate tutti i film dal database e passateli alla view, che quindi li visualizzerà a schermo, tramite delle card.


**BONUS:**

 - Create altre rotte filtrando i dati come preferite.

 - Create una pagina di dettaglio. La pagina di dettaglio riceve dinamicamente l’ID del movie, esegue la query in base all’ID ricevuto e stampa il singolo elemento. Il link alla pagina di dettaglio sarà presente nell’elenco dei film.
