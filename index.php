 <html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
    <?php 
// Vous etes développeur et vous devez écrire un programme PHP pour l'entreprise Strategy,
//en vue d'améliorer un processur de publication vers le web. Lentrepprise strategy est dans le domaine de la veille stratégique.
// Elle recense et traite quotidiennement des centaines de publications dans différents domaines  : academique, juridique, commercial, etc.
// Depuis peu , elle récup-re des résumés (astracts) de publications au format Markdown. Elle aimerait pouvoir les transformer  automatiquement
// au format HTML pour les publier sur un site web.

//=========================== QUESTION ========================
// Votre programme doit récupérer chaque abstract depuis l'enregistreur dans un fichier. Votre programme récupère une liste d'abstracts sous la forme suivante.

$abstracts = [
  [
  'id' => 1 ,
  'name' => 'git',
  'url' => 'http://git.test/abstract'
  ],
  [
  'id' => 2,
  'name' => null,
  'url' => 'http://php.test/abstract'
  ],
  [
  'id' => 3 ,
  'name' => 'handling-errors-best-practices',
  'url' => 'http://programming.test/abstract/handling-errors/bestpractices'
  ],
   [
  'id' => 4,
  'name' => 'geocities.test/abstract',
  'url' => 'http://php.test/abstract'
  ],
];

// ou 
//      * id est un identifiant unique de l'abstract,
//      * name est le nom du fichier sous lequel l'abstract vaetre enregisté sur votre serveur,
//      * url est l'url de la resouce pour récupéere le contenu de l'abstract au format Markdown,

// la liste contiet parfois des erreurs : elle ne contient pas toujours le nom de la resource , ou l'url est parfois mal définie. C'est le cas de deux items dans cette liste (id=2 ou le nom est manquant et id=4 ou l'url est invalide). 
// Nous devvons ecrire un programme qui filtre les resources abstract invalides (données mal valide ou mal formées).
/**
*Rapporte les abstracts invalides 
* @param array $abstracts une liste d'abstracts non filtrés et potentiellement invalides 
*@return array le rapport: liste des abstracts valides, informations sur les abstracts invalides
**/
function reportAbstracts(array $abstracts): array
  {
    $validAbstracts = [];
    $invalidAbstracts = [] ;
    foreach($abstracts as $absract) {
      try {
        $validAbstract[] = validAbstract($abstract) ;
      } catch(DomainException $e)  {
        $invalidAbstracts[] = $abstract['id'];
      }
    }

    $report = sprintf("Nombre d'abstracts valides : %d/%d\n",
              count($invalidAbstracts), count($abstracts));
    $report .= sprintf("Liste des abstracts invalides (id) :%s\n" ;
    implore(', ', $invalideAbstracts));

    return array(
      'valid' => $validAbstracts,
      'invalid' => $invalidAbstracts,
      'summary' => $report,
    );
  }

?> 


  <script src="https://replit.com/public/js/replit-badge-v2.js" theme="dark" position="bottom-right"></script>
  </body>
</html>