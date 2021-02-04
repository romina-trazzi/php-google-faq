<?php

$questions = [
    "question_1" => "Come state implementando la recente decisione della Corte di giustizia dell'Unione europea (CGUE) relativa al diritto all'oblio?",
    "question_2" => "Come fa Google a proteggere la mia privacy e a tenere le mie informazioni al sicuro?",
    "question_3" => "Come faccio a rimuovere informazioni su di me dai risultati di ricerca di Google?",
    "question_4" => "Quando faccio clic sui risultati della Ricerca Google, le mie chiavi di ricerca vengono inviate ai siti web?"
];

$answers = [
    "answer_1" =>   "La recente decisione della Corte di giustizia dell'Unione europea ha profonde conseguenze per i motori di ricerca in Europa. La Corte ha stabilito che alcuni utenti hanno il diritto di chiedere ai motori di ricerca come Google di rimuovere risultati relativi a chiavi di ricerca che includono il proprio nome. Per poter essere rimossi, i risultati visualizzati devono essere inadeguati, irrilevanti o non più rilevanti, o eccessivi.
                    Da quando questa decisione è stata pubblicata il 13 maggio 2014, abbiamo lavorato incessantemente per uniformarci a essa. Si tratta di una procedura complessa perché dobbiamo valutare ogni singola richiesta e effettuare un bilanciamento tra il diritto dell'individuo a controllare i suoi dati personali ed il diritto di tutti di conoscere e distribuire le informazioni.
                    Per presentare una richiesta di rimozione, compila questo modulo web. Riceverai una risposta automatica che conferma la ricezione della tua richiesta. Dopodiché valuteremo il tuo caso (tieni presente che potrebbe occorrere un po' di tempo perché abbiamo già ricevuto tante richieste simili). Nel valutare la richiesta, considereremo se i risultati includono informazioni obsolete relative alla tua vita privata. Considereremo inoltre se vi è un interesse pubblico a che le informazioni rimangano nei nostri risultati delle ricerche, ad esempio se riguardano frodi finanziarie, negligenza professionale, condanne penali o la tua condotta pubblica in relazione a un pubblico ufficio (eletto o non eletto). Queste valutazioni sono complesse e, in quanto organizzazione privata, potremmo non essere nella posizione giusta per prendere decisioni in merito al tuo caso. Se non sei d'accordo con la nostra valutazione, puoi rivolgerti all'Autorità garante per la protezione dei dati personali nel tuo paese.
                    Nei prossimi mesi lavoreremo a stretto contatto con le autorità per la protezione dei dati e con altre autorità per perfezionare il nostro approccio. La decisione della CGUE rappresenta un cambiamento significativo per i motori di ricerca. Siamo preoccupati per le sue conseguenze, ma riteniamo anche che sia importante rispettare la decisione della Corte e ci stiamo adoperando per predisporre una procedura conforme alla legge.
                    Quando cerchi un nome, potresti trovare una notifica in cui viene spiegato che i risultati potrebbero essere stati modificati nel rispetto delle leggi europee per la protezione dei dati. Mostriamo questa notifica agli utenti europei quando cercano la maggior parte dei nomi, non soltanto le pagine che sono state soggette a una rimozione."
    /* "answer_2" =>
    "answer_3" =>
    "answer_4" => */
]



?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <!-- meta properties -->
        <meta charset="utf-8">
        <meta name="author" content="Romina Trazzi">
        <meta name="description" content="Esercizio Google Faqs con Sass e PHP">
        <meta name="keywords" content="php, Google, faqs, sass, PHP">
        <!-- / meta properties -->
                
        <title>Esercizio Google Faqs</title>

        <!-- fogli di stile -->
        <link rel="stylesheet" href="dist/css/style.css" media="screen, all">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />  
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto&display=swap">
        <!-- / fogli di stile -->
    </head>

    <body>
        <!-- Header -->
        <header>

            <!-- Logo Google -->
            <div class="logo">
                <img src="dist/img/google-logo.jpg" alt="logo di Google">
                <h3> Privacy e termini </h3>
            </div>
            <!-- / Logo Google -->

            <!-- Navbar -->
            <nav>
                <ul>
                    <li><a href=#>Introduzione</a></li>
                    <li><a href=#>Norme sulla privacy</a></li>
                    <li><a href=#>Termini di servizio</a></li>
                    <li class="faq"><a href=#>Domande frequenti</a></li>
                </ul>
            </nav>
            <!-- / Navbar -->
        
        </header>
        <!-- / Header -->

        <!-- Container -->
        <div class="container">
            <main>
                <div class="question">
                    <?php      
                        foreach ($questions as $question) {
                            echo $question . "<br><p class ='paragraph'>";
                            foreach ($answers as $answer) {
                                echo $answer . "<br></p>";
                            }
                        };  
                    ?> 
                </div>



            </main>
        </div>
        <!-- / Container -->

      

      




    </body>

</html>

