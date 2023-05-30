const myText = "let myPresentation = '' Je m'appelle Rayan et j'ai 20 ans. Je suis actuellement en fin de BTS Services Informatiques aux Organisations (SIO). Mon parcours scolaire a commencé avec un Baccalauréat en Sciences et Technologies du Management et de la Gestion (STMG) avec une spécialisation en Ressources Humaines. Cependant, j'ai rapidement réalisé que ma passion se trouvait dans le domaine de l'informatique. Depuis mon enfance, j'ai développé un amour profond pour l'informatique. J'ai toujours été fasciné par les possibilités infinies qu'offre ce domaine en termes de créativité, d'innovation et de résolution de problèmes. Mon rêve ultime est de créer ma propre entreprise dans l'industrie du jeu vidéo, car je suis passionné par cet univers en constante évolution. Au cours de mon BTS SIO, j'ai acquis des compétences techniques solides dans les domaines de la gestion des systèmes d'information, de la programmation et du développement de logiciels. J'ai également eu l'occasion de travailler sur des projets concrets, ce qui m'a permis de développer mes compétences en collaboration, en gestion de projet et en résolution de problèmes. Je suis une personne motivée, curieuse et persévérante. J'aime relever de nouveaux défis et je suis constamment à la recherche de moyens d'améliorer mes compétences techniques et mon expertise dans le domaine de l'informatique. Mon objectif à court terme est de trouver un emploi qui me permettra de mettre en pratique mes connaissances et mes compétences tout en continuant à apprendre et à évoluer professionnellement. À long terme, je souhaite utiliser cette expérience pour développer mon entreprise dans le secteur du jeu vidéo, en créant des expériences interactives uniques et captivantes pour les joueurs du monde entier. Je suis convaincu que ma passion, ma détermination et mes compétences techniques me permettront de réussir dans le domaine de l'informatique et de réaliser mes aspirations professionnelles. Je suis ouvert aux opportunités et prêt à relever de nouveaux défis pour atteindre mes objectifs. ''; ";
let myIndex = 0;
let myTimer;
let divText = document.querySelector('.text-inner');

function writeMyText() {
    if (myIndex < myText.length) {
        divText.innerHTML += myText.charAt(myIndex);
        myIndex++;
        myTimer = setTimeout(writeMyText, 50);
    }
}
setTimeout(writeMyText, 4000);