<?php
 session_start();
    $allowed_lang= array('en','fr');
    $_SESSION['language'] = 'en';
    if(isset($_GET['language']) && in_array($_GET['language'], $allowed_lang)){
        $_SESSION['language'] = $_GET['language'];
    }
  $lang = array(
    'fr' => array(
        'nav1' => 'Accueil',
        'nav2' => 'A propos',
        'nav3' => 'Expériences',
        'nav4' => 'Projets',
        'nav5' => 'Contact',
        'greeting' => 'DEVELOPPEUSE WEB',
        'download' => 'TELECHARGER CV',
        'service' => 'Connaissez-Moi',
        'aboutme' => 'Meryeme, une jeune fille de BenGuerir, agée de 22 ans. Passionée par la Rondonnée.',
        'aboutme2' => 'Actuellement je suis en 1ère année autant qu\'une développeuse apprenante à Youcode, et j\'espère bien devenir une collaboratrice dans ce domaine.',
        'formt' => 'Expériences et Formations',
        'date' => 'Octobre 2018 - Present',
        'formt1' => '1ére année en Developpement Web',
        'date2' => 'Septembre 2017 - Juin 2018',
        'formt2' => 'Licence en Sciences de la Vie et de l’Univers.',
        'date3' => 'Septembre 2015 - Juin 2017',
        'formt3' => 'DTS; Diplôme de Technicien Spécialisé en Géologie Appliquée.',
        'formt4' => 'Baccalauréat Sciences Mathématique A',
        'projet' => 'Les Projets Réalisés',
        'nav6' => 'Tous',
        'nav7' => 'Projet CV',
        'nav8' => 'Projet SITE',
        'nav9' => 'Ateliers CSS',
        'nav10' => 'Ateliers JS',
        'nav11' => 'Projet CAPGEMINI',
        'contact' => 'Contactez-Moi',
        'phone' => 'Numéro de Téléphone',
        'media' => 'Réseaux Sociaux',
        'send' => 'Envoyer',
        
        




    ),
'en' => array(
        'nav1' => 'Home',
        'nav2' => 'About',
        'nav3' => 'Experiences',
        'nav4' => 'Projects',
        'nav5' => 'Contact',
        'greeting' => 'WEB DEVELOPER ',
        'download' => 'DOWNLOAD CV',
        'service' => 'About Me',
        'aboutme' => 'Meryeme, I am a young girl from BenGuerir, I am 22 years old. Passionate about hiking.',
        'aboutme2' => 'Currently I am in first year as much as a beginner developer at Youcode, and I hope to become a collaborator in this field.',
        'formt' => 'Experiences et Formations',
        'date' => 'October 2018 - Now',
        'formt1' => '1st year in Web Development',
        'date2' => 'September 2017 - June 2018',
        'formt2' => 'Licence in Life Sciences and Universe.',
        'date3' => 'September 2015 - June 2017',
        'formt3' => 'DTS; Diploma of Specialized Technician in Applied Geology.',
        'formt4' => 'Baccalaureate Mathematical Sciences A',
        'projet' => 'My Projects ',
        'nav6' => 'All',
        'nav7' => 'Project CV',
        'nav8' => 'Project SITE',
        'nav9' => 'Ateliers CSS',
        'nav10' => 'Ateliers JS',
        'nav11' => 'Project CAPGEMINI',
        'contact' => 'Contact Me',
        'phone' => 'Phone number',
        'media' => 'Social media',
        'send' => 'Send',


    ),
)

?>
