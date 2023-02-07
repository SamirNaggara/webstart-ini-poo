<?php 

// id, taille, vitesse_max, prenom, note_general

class JoueurFoot
{
    // Une class contient des attributs. Des attributs sont des propriétés propres à l'objet qui sera créé
    // Chaque objet aura alors ses propres caractéristiques


    // il existe des niveaux d'accessiblités des variables
        // public -> Accessible à tout le monde
        // privé -> Accessible uniquement dans la class en cours
        // protected -> Accesible uniquement dans la class en cours ET dans ses classes filles

    // Une variable static appartient à la classe, et non à l'objet
    // C'est à dire qu'il ne varie pas d'un objet à l'autre.
    // Donc il appartient à la class et non à l'objet, il sera donc appelé différent
    // (En utilisant l'opérateur de résolution de portée :: sur le nom de la class ou sur "self" si on est dans la classe)
    // La première fois, il est égal à 0

    
    public static $nombreJoueurTotal = 0;

    private $taille;
    public $vitesseMax;
    public $prenom;
    public $noteGeneral;

    // Le constructeur est une méthode magique qui est appelé automatiquement à chaque fois qu'un nouvel objet est instancié
    // Donc, lorsque l'on utilise le mot clef "new"
    // On utilise généralement le construction pour affecté le propriété de l'objet
    public function __construct($prenom, $taille, $vitesseMax, $noteGeneral)
    {
        echo "Un nouvel objet vient d'être créé<br>";

        // Ici on attribue la prenom envoyé lors de l'intanciation à l'objet qui vient d'être créé.
        $this->prenom = $prenom;

        // Pour la taille, on fait la meme chose, mais de manière protégée.
        // La taille n'est pas accessible de l'exterieur de la classe sauf en passant par les getter et les setters
        if (!$this->setTaille($taille))
        {
            throw new Exception("La taille n'est pas valide !");
        }
        $this->vitesseMax = $vitesseMax;
        $this->noteGeneral = $noteGeneral;

        // On veut incrementer le nombreJoueurTotal à chaque nouvel création d'un objet
        // Comme on ne peut pas appeler nombreJoueurTotal sur l'objet en cours (this)
        // Alors, on l'appelle sur la class en cours (self)
        // Quand on appel une propriété ou une méthode STATIQUE, on ne le fait pas sur un objet, mais sur la class elle même
        // DONC $this ne fonctionne pas, il faut utiliser self
        self::$nombreJoueurTotal = self::$nombreJoueurTotal + 1;
    }


    // Chaque class contient ses propres méthodes.
    // Les méthodes pourront être utilisées sur les objets une fois qu'ils ont été instanciées
    // Avec l'opérateur -> (ex $zizou->getName)
    // Si on veut appelé l'objet en cours dans une méthode, on utilise le mot clef $this
    // $this fait référence à l'objet en cours (parfois $zizou, parfois $mbappe, etc...)

    // Ceci est un getter pour récupérer la taille de l'objet en cours
    public function getTaille()
    {
        return $this->taille;
    }

    public function getTailleEnMetre()
    {
        return $this->taille/100;
    }

    // Ceci est un setter pour modifier la taille de l'objet en cours
    public function setTaille(int $taille) : bool
    {
        if ($taille >= 300 || $taille <= 100)
        {
            return false;
        }
        $this->taille = $taille;
        return true;
    }

    // Cette fonction permet de modifier le nombre total de joueur
    // C'est donc une fonction static, car elle est ratachée à la classe, et non à un objet en particulier
    public static function setNombreJoueurTotal($total)
    {
        self::$nombreJoueurTotal = $total;
    }

}