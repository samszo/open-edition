<?php
$GLOBALS['visiteur_session']['id_auteur'] = 2;
$GLOBALS['visiteur_session']['nom'] = 'ghislain';
$GLOBALS['visiteur_session']['bio'] = '';
$GLOBALS['visiteur_session']['email'] = 'guyghislain60@gmail.com';
$GLOBALS['visiteur_session']['nom_site'] = '';
$GLOBALS['visiteur_session']['url_site'] = '';
$GLOBALS['visiteur_session']['login'] = 'ghislain';
$GLOBALS['visiteur_session']['statut'] = '0minirezo';
$GLOBALS['visiteur_session']['webmestre'] = 'oui';
$GLOBALS['visiteur_session']['maj'] = '2016-05-03 14:56:15';
$GLOBALS['visiteur_session']['pgp'] = '';
$GLOBALS['visiteur_session']['en_ligne'] = '2016-05-03 14:56:15';
$GLOBALS['visiteur_session']['prefs'] = array (
  'couleur' => 1,
  'display' => 2,
  'display_navigation' => 'navigation_avec_icones',
  'display_outils' => 'oui',
  'cnx' => 'perma',
);
$GLOBALS['visiteur_session']['source'] = 'spip';
$GLOBALS['visiteur_session']['lang'] = '';
$GLOBALS['visiteur_session']['appartenance'] = 'Université Paris 8, Saint-Denis';
$GLOBALS['visiteur_session']['composition'] = '';
$GLOBALS['visiteur_session']['composition_lock'] = '0';
$GLOBALS['visiteur_session']['auth'] = 'spip';
$GLOBALS['visiteur_session']['cookie'] = 'oui';
$GLOBALS['visiteur_session']['hash_env'] = '69e391f80f5a3dbbf2f3e22caa579166';
$GLOBALS['visiteur_session']['ip_change'] = true;
$GLOBALS['visiteur_session']['date_session'] = 1462279489;
$GLOBALS['visiteur_session']['quand'] = '2016-05-03 14:56:15';
$GLOBALS['visiteur_session']['restreint'] = array (
);
$GLOBALS['visiteur_session']['constructeur_formulaire_champs_extras_spip_rubriques'] = array (
  0 => 
  array (
    'options' => 
    array (
      'nom' => 'img_1',
      'label' => 'Image 1',
      'restrictions' => 
      array (
        'secteurs' => '',
        'branches' => '',
        'voir' => 
        array (
          'auteur' => '',
        ),
        'modifier' => 
        array (
          'auteur' => 'admin',
        ),
      ),
      'sql' => 'text DEFAULT \'\' NOT NULL',
      'rechercher_ponderation' => '2',
    ),
    'identifiant' => '@56f92078b8ed4',
    'saisie' => 'selecteur_document',
  ),
  1 => 
  array (
    'options' => 
    array (
      'nom' => 'img_2',
      'label' => 'Image 2',
      'restrictions' => 
      array (
        'secteurs' => '',
        'branches' => '',
        'voir' => 
        array (
          'auteur' => '',
        ),
        'modifier' => 
        array (
          'auteur' => 'admin',
        ),
      ),
      'sql' => 'text DEFAULT \'\' NOT NULL',
      'rechercher_ponderation' => '2',
    ),
    'identifiant' => '@56f921b75a911',
    'saisie' => 'selecteur_document',
  ),
  2 => 
  array (
    'options' => 
    array (
      'nom' => 'type_rubrique',
      'label' => 'Type de rubrique',
      'datas' => 'numero|Numéro
revue|Revue
numero_special|Numéro spécial',
      'restrictions' => 
      array (
        'secteurs' => '',
        'branches' => '',
        'voir' => 
        array (
          'auteur' => '',
        ),
        'modifier' => 
        array (
          'auteur' => 'admin',
        ),
      ),
      'sql' => 'text DEFAULT \'\' NOT NULL',
      'rechercher_ponderation' => '2',
    ),
    'identifiant' => '@56e6a209c7eed',
    'saisie' => 'selection',
  ),
  3 => 
  array (
    'options' => 
    array (
      'nom' => 'issn',
      'label' => 'ISSN',
      'placeholder' => '0000-0000',
      'explication' => 'Exemple : 1234-123X',
      'type' => 'text',
      'maxlength' => '9',
      'afficher_si' => '@type_rubrique@=="revue"',
      'size' => '40',
      'autocomplete' => 'defaut',
      'restrictions' => 
      array (
        'secteurs' => '',
        'branches' => '',
        'voir' => 
        array (
          'auteur' => '',
        ),
        'modifier' => 
        array (
          'auteur' => 'admin',
        ),
      ),
      'sql' => 'text DEFAULT \'\' NOT NULL',
      'rechercher' => 'on',
      'rechercher_ponderation' => '2',
    ),
    'identifiant' => '@56e6960358921',
    'saisie' => 'input',
  ),
  4 => 
  array (
    'options' => 
    array (
      'nom' => 'acronyme',
      'label' => 'Acronyme',
      'type' => 'text',
      'maxlength' => '20',
      'afficher_si' => '@type_rubrique@=="revue"',
      'size' => '40',
      'autocomplete' => 'defaut',
      'restrictions' => 
      array (
        'secteurs' => '',
        'branches' => '',
        'voir' => 
        array (
          'auteur' => '',
        ),
        'modifier' => 
        array (
          'auteur' => 'admin',
        ),
      ),
      'sql' => 'text DEFAULT \'\' NOT NULL',
      'rechercher' => 'on',
      'rechercher_ponderation' => '2',
    ),
    'identifiant' => '@56f91422636bb',
    'saisie' => 'input',
  ),
  5 => 
  array (
    'options' => 
    array (
      'nom' => 'redac_chef',
      'label' => 'Rédacteurs en chef',
      'placeholder' => '<strong>Un auteur </strong> <br>
Son appartenance <br>',
      'explication' => 'S\'affiche dans la liste des revues sur la page des domaines.',
      'afficher_si' => '@type_rubrique@=="revue"',
      'rows' => '5',
      'cols' => '40',
      'restrictions' => 
      array (
        'secteurs' => '',
        'branches' => '',
        'voir' => 
        array (
          'auteur' => '',
        ),
        'modifier' => 
        array (
          'auteur' => '',
        ),
      ),
      'sql' => 'text DEFAULT \'\' NOT NULL',
      'rechercher_ponderation' => '2',
    ),
    'identifiant' => '@57289a30d5dca',
    'saisie' => 'textarea',
  ),
  6 => 
  array (
    'options' => 
    array (
      'nom' => 'dom_p',
      'label' => 'Domaine principal',
      'explication' => 'Choisissez le domaine principal. Cochez une seule case.',
      'id_groupe' => '1',
      'obligatoire' => 'on',
      'restrictions' => 
      array (
        'secteurs' => '',
        'branches' => '',
        'voir' => 
        array (
          'auteur' => '',
        ),
        'modifier' => 
        array (
          'auteur' => 'admin',
        ),
      ),
      'sql' => 'text DEFAULT \'\' NOT NULL',
      'rechercher_ponderation' => '2',
    ),
    'identifiant' => '@572207dda14b7',
    'saisie' => 'mot',
  ),
);
?>
