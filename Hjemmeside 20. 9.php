<!-- Instruktion til webbrowser om at vi kører HTML5 -->
<!DOCTYPE html>

<!-- html starter og slutter hele dokumentet / lang=da: Fortæller siden er på dansk -->
<html lang="da">

<!-- I <head> har man opsætning - det ser brugeren ikke, men det fortæller noget om siden -->
<head>
    <!-- Sætter tegnsætning til utf-8 som bl.a. tillader danske bogstaver -->
    <meta charset="utf-8">

    <!-- Titel som ses oppe i browserens tab mv. -->
    <title>Magical Objekts</title>

    <!-- Metatags der fortæller at søgemaskiner er velkomne, hvem der udgiver siden og copyright information -->
    <meta name="robots" content="All">
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="Information om copyright">

    <!-- Sikrer man kan benytte CSS ved at tilkoble en CSS fil -->
    <link href="css/styles.css" rel="stylesheet" type="text/css">
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>


    <!-- Sikrer den vises korrekt på mobil, tablet mv. ved at tage ift. skærmstørrelse - bliver brugt til responsive websider -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>



<!-- i <body> har man alt indhold på siden som brugeren kan se -->
<body class="bg-baggrund">
<!-- Her skal sidens indhold ligge -->

<nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Magical objects</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">

                <li class="nav-item">
                    <a href="#Marauder's Map" class="nav-link">Marauder's Map</a>
                </li>

                <li class="nav-item">
                    <a href="#The Mirror of Erised" class="nav-link">The Mirror of Erised</a>
                </li>

                <li class="nav-item">
                    <a href="#Marvolo Gaunt's Ring" class="nav-link">Marvolo Gaunt's Ring</a>
                </li>

                <li class="nav-item">
                    <a href="#The Deathly Hallows" class="nav-link">The Deathly Hallows</a>
                </li>

                <li class="nav-item">
                    <a href="#The Philosopher's Stone" class="nav-link">The Philosopher's Stone</a>
                </li>

                <li class="nav-item">
                    <a href="#todo" class="nav-link">To do list</a>
                </li>

            </ul>
        </div>
    </div>
</nav>

<div class="container-xxl">
    <br><br>
    <h2 id="Marauder's Map">Marauder's Map</h2>
    <br>
    <p>"The Marauder's Map is a magical map of Hogwarts"</p>
    <br>
    <p>The Marauder's Map is a magical map of Hogwarts created by Remus Lupin, Peter Pettigrew, Sirius Black <br>
        and James Potter (respectively nicknamed "Moony", "Wormtail", "Padfoot", and "Prongs") while they were students at Hogwarts.

        In Harry Potter and the Prisoner of Azkaban,<br> Fred and George Weasley give the map to Harry so he can travel to
        Hogsmeade through a hidden passageway.
        The twins had previously stolen the map from a drawer in Filch's office that contained dangerous confiscated objects;
        it is revealed by Lupin that Filch probably knew what it was but not how to work it. Snape later finds the
        map in Harry's possession and tries to force it to reveal its secrets, but the map insults him.
        Lupin, the Defence Against the Dark Arts teacher at the time, is called upon to investigate this "dark object",
        and confiscates it to keep Harry safe. Later he returns it to Harry after resigning his post at Hogwarts.
        From then on, the map becomes one of Harry's most useful tools in his ongoing adventures.

        When not in use, the Map is simply a blank piece of parchment. It can be activated by pointing a wand at it and
        saying, "I solemnly swear that I am up to no good",
        at which point the message "Messrs. Moony, Wormtail, Padfoot and Prongs, purveyors of aids to
        magical mischief-makers, are proud to present the Marauder's Map" appears, along with a detailed layout of Hogwarts.
        The map is restored to its original blank state by saying "Mischief managed".</p>
    <img src="Images/Maradurs%20Map.jpg">

    <br><br>
    <h2 id="The Mirror of Erised">The Mirror of Erised</h2>
    <br>
    <p>The "Mirror of Desire."</p>
    <br>
    <p>The Mirror of Erised is a mystical mirror discovered by Harry in an abandoned classroom in Philosopher's Stone.
        On it is inscribed "erised stra ehru oyt ube cafru oyt on wohsi". When mirrored and correctly spaced, this reads
        "I show not your face but your heart's desire." As "erised" reversed is "desire," it is the "Mirror of Desire."
        Harry, upon encountering the Mirror, can see his parents, as well as what appears to be a crowd of relatives.
        The last thing Harry saw in the mirror was Voldemort defeated.


        Ron sees himself as Head Boy and Quidditch Captain holding the House Cup, revealing his wish to escape from
        the shadow of his highly successful older brothers. Dumbledore cautions Harry that the Mirror gives neither
        knowledge nor truth, merely showing the viewer's deepest desire, and that men have wasted their lives away before
        it, entranced by what they see.

        Dumbledore claims to see himself holding a pair of socks he always wanted, telling Harry that "one can never have
        enough socks," and lamenting that he did not receive any for Christmas, since people will insist on giving him books.
        However, Harry suspects that this is not true. J. K Rowling has stated that what he really sees is his entire
        family alive, well and happy together again, much like Harry.</p>
    <img src="Images/Mirror%20of%20Erised.jpg">

    <br><br>
    <h2 id="Marvolo Gaunt's Ring">Marvolo Gaunt's Ring</h2>
    <br>
    <p>"Tom Riddle's grandfarther's ring"</p>
    <br>
    <p>Tom Riddle created his second Horcrux using a ring owned by his maternal grandfather, Marvolo Gaunt,
        during the summer before his sixth year as a student at Hogwarts, when he was fifteen years old.
        The murder that created the Horcrux was that of his father. The ring is introduced during the fourth chapter
        of Half-Blood Prince, having already been destroyed by Albus Dumbledore.

        In a Pensieve memory, it is revealed that Riddle had taken the gold ring, which has a black stone inscribed
        with a magical symbol, from his uncle Morfin Gaunt, whom he had framed for the murder of his Muggle father
        and grandparents by altering his uncle's memories. Riddle wears the ring while still a student at Hogwarts,
        but eventually hides it in the house where the Gaunt family had lived. It remains hidden under the floorboards,
        placed in a golden box and protected by several enchantments, until Dumbledore finds it during the summer break
        between the events of Order of the Phoenix and Half-Blood Prince. Dumbledore destroys the second Horcrux
        with Godric Gryffindor's sword, but, as revealed in Harry Potter and the Deathly Hallows, he also recognizes
        the stone in the ring as the Resurrection Stone, one of the three Deathly Hallows.</p>
    <img src="Images/ring.jpg">

    <br><br>
    <h2 id="The Deathly Hallows">The Deathly Hallows</h2>
    <br>
    <p>"Three magical items, that combined makes one "The Master of Death" <br> (The Elder Wand, Invisibility cloak and The Resurrection Stone"</p>
    <br>
    <p>The Deathly Hallows are three magical objects that are the focus of Harry Potter and the Deathly Hallows
        – the Elder Wand, the Resurrection Stone, and the Cloak of Invisibility.
        When owned by one person, they are said to give mastery over death. The objects are generally remembered
        only as part of a wizard's fairy tale called The Tale of the Three Brothers, and have become mythological
        over time, but a small number of wizards including Dumbledore still believe in their existence and seek them.
        According to J. K. Rowling, the story about how these objects came into existence is based upon Geoffrey Chaucer's
        The Pardoner's Tale.

        According to the tale, three brothers evaded Death, who gave them a choice of anything they wanted.
        The first brother chose a wand that could not be defeated in battle, the second brother asked for a way to
        bring back someone from the dead, and the third brother selected a cloak that made the wearer invisible, even to Death himself.
        Eventually, the first brother was killed, the second committed suicide, and finally, the third brother
        made Death a friend and gave the cloak to his son. The story is generally believed to refer to the
        Peverell brothers centuries ago, although very few actually believe the story to be fully true.
        Dumbledore believed that the Peverells were simply particularly powerful and ingenious wizard inventors.
        The sign of the Deathly Hallows had also been adopted as a personal symbol by dark wizard Gellert Grindelwald;
        therefore many wizards, such as Viktor Krum, mistakenly understood it to be a symbol of dark magic.</p>
    <img src="Images/Elder%20Wand.jpg">
    <img src="Images/Cloak_of_Invisibility.jpg">
    <img src="Images/ring.jpg">

    <br><br>
    <h2 id="The Philosopher's Stone">The Philosopher's Stone</h2>
    <br>
    <p>"A magical stone owned by Nicolas Flamel"</p>
    <br>
    <p>Based upon the ancient alchemical idea of the philosopher's stone, the stone is owned by Nicolas Flamel
        and first mentioned in Harry Potter and the Philosopher's Stone. The stone is legendary in that it changes
        all metals to gold, and can be used to brew a potion called the Elixir of Life, making the drinker immortal.
        The Philosopher's Stone is seen only in the first and last book, although it is referenced several times throughout the series.
        It was destroyed at the end of the first book by Dumbledore with Flamel's agreement.

        In the American version, this stone is called the sorcerer's stone.</p>
    <img src="Images/Philosopher's%20stone.jpg">


</div>

<!-- Her skal sidens indhold ligge -->
<div class="container card mt-3" id="todo">
    <div class="row">
        <h2>To Do List</h2>
        <div class="form-floating">
            <input type="text" class="form-control" id="toDoInput" placeholder="">
            <label for="floatingInput">To Do Item</label>
        </div>
        <button id="addBtn" class="btn btn-primary mt-2">Add</button>
    </div>
    <div class="row p-3">
        <ol id="toDoList">
            <li>Derp</li>
        </ol>
    </div>
</div>

<script>
    const addBtn = document.getElementById('addBtn');
    addBtn.addEventListener('click', () => {
        const toDoInput = document.getElementById('toDoInput');
        const li = document.createElement("li");
        const txt = document.createTextNode(toDoInput.value);
        li.appendChild(txt);
        if (toDoInput === '') {
            alert("You must write something!");
        } else {
            document.getElementById("toDoList").appendChild(li);
        }
        toDoInput.value = "";
    })
</script>
</body>
</html>
