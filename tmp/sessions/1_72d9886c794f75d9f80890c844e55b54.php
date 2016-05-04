<?php
$GLOBALS['visiteur_session']['id_auteur'] = 1;
$GLOBALS['visiteur_session']['nom'] = 'samszo';
$GLOBALS['visiteur_session']['bio'] = '';
$GLOBALS['visiteur_session']['email'] = 'samszon@gmail.com';
$GLOBALS['visiteur_session']['nom_site'] = '';
$GLOBALS['visiteur_session']['url_site'] = '';
$GLOBALS['visiteur_session']['login'] = 'samszo';
$GLOBALS['visiteur_session']['statut'] = '0minirezo';
$GLOBALS['visiteur_session']['webmestre'] = 'oui';
$GLOBALS['visiteur_session']['maj'] = '2016-04-30 11:15:42';
$GLOBALS['visiteur_session']['pgp'] = '';
$GLOBALS['visiteur_session']['en_ligne'] = '2016-04-30 11:15:42';
$GLOBALS['visiteur_session']['prefs'] = array (
  'couleur' => 1,
  'display' => 2,
  'display_navigation' => 'navigation_avec_icones',
  'display_outils' => 'oui',
  'cnx' => 'perma',
);
$GLOBALS['visiteur_session']['source'] = 'spip';
$GLOBALS['visiteur_session']['lang'] = '';
$GLOBALS['visiteur_session']['appartenance'] = '';
$GLOBALS['visiteur_session']['auth'] = 'spip';
$GLOBALS['visiteur_session']['cookie'] = 'oui';
$GLOBALS['visiteur_session']['hash_env'] = 'e9b6b3c10b80e88ec63107feebfae17f';
$GLOBALS['visiteur_session']['ip_change'] = true;
$GLOBALS['visiteur_session']['date_session'] = 1461919415;
$GLOBALS['visiteur_session']['quand'] = '2016-04-30 11:15:42';
$GLOBALS['visiteur_session']['restreint'] = array (
);
$GLOBALS['visiteur_session']['constructeur_formulaire_champs_extras_spip_articles'] = array (
  0 => 
  array (
    'options' => 
    array (
      'nom' => 'doi',
      'label' => 'DOI',
      'type' => 'text',
      'maxlength' => '50',
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
    'identifiant' => '@56e003cd976d3',
    'saisie' => 'input',
  ),
  1 => 
  array (
    'options' => 
    array (
      'nom' => 'dom_p',
      'label' => 'Le domaine principal',
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
          'auteur' => '',
        ),
      ),
      'sql' => 'text DEFAULT \'\' NOT NULL',
      'rechercher_ponderation' => '2',
    ),
    'identifiant' => '@570b706fc877b',
    'saisie' => 'mot',
  ),
);
$GLOBALS['visiteur_session']['constructeur_formulaire_champs_extras_spip_auteurs'] = array (
  0 => 
  array (
    'options' => 
    array (
      'nom' => 'appartenance',
      'label' => 'Appartenance',
      'explication' => 'Par exemple : Université Paris 8, Saint-Denis',
      'type' => 'text',
      'maxlength' => '90',
      'size' => '40',
      'autocomplete' => 'defaut',
      'restrictions' => 
      array (
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
      'rechercher_ponderation' => '1',
    ),
    'identifiant' => '@5703b89feb531',
    'saisie' => 'input',
  ),
);
$GLOBALS['visiteur_session']['composition'] = '';
$GLOBALS['visiteur_session']['composition_lock'] = '0';
$GLOBALS['visiteur_session']['svp_admin_plugin_voir'] = 'actif';
?>
