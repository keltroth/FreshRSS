<?php

return array(
	'api' => array(
		'documentation' => 'Copier l’URL suivante dans l’outil qui utilisera l’API.',
		'title' => 'API',	// TODO - Translation
	),
	'bookmarklet' => array(
		'documentation' => 'Glisser ce bouton dans la barre des favoris ou cliquer droit dessus et choisir "Enregistrer ce lien". Ensuite, cliquer sur le bouton "S’abonner" sur les pages auxquelles vous voulez vous abonner.',
		'label' => 'S’abonner',
		'title' => 'Bookmarklet',
	),
	'category' => array(
		'add' => 'Ajouter une catégorie',
		'archiving' => 'Archivage',
		'empty' => 'Catégorie vide',
		'information' => 'Informations',
		'new' => 'Nouvelle catégorie',
		'position' => 'Position d’affichage',
		'position_help' => 'Pour contrôler l’ordre de tri des catégories',
		'title' => 'Titre',
		'_' => 'Catégorie',
	),
	'feed' => array(
		'add' => 'Ajouter un flux RSS',
		'advanced' => 'Avancé',
		'archiving' => 'Archivage',
		'auth' => array(
			'configuration' => 'Identification',
			'help' => 'La connexion permet d’accéder aux flux protégés par une authentification HTTP.',
			'http' => 'Authentification HTTP',
			'password' => 'Mot de passe HTTP',
			'username' => 'Identifiant HTTP',
		),
		'clear_cache' => 'Toujours vider le cache',
		'css_help' => 'Permet de récupérer les flux tronqués (attention, demande plus de temps !)',
		'css_path' => 'Sélecteur CSS des articles sur le site d’origine',
		'description' => 'Description',
		'empty' => 'Ce flux est vide. Veuillez vérifier qu’il est toujours maintenu.',
		'error' => 'Ce flux a rencontré un problème. Veuillez vérifier qu’il est toujours accessible puis actualisez-le.',
		'filteractions' => array(
			'help' => 'Écrivez une recherche par ligne.',
			'_' => 'Filtres d’action',
		),
		'information' => 'Informations',
		'keep_min' => 'Nombre minimum d’articles à conserver',
		'maintenance' => array(
			'clear_cache' => 'Vider le cache',
			'clear_cache_help' => 'Supprime le cache de ce flux.',
			'reload_articles' => 'Recharger les articles',
			'reload_articles_help' => 'Recharge les articles et récupère le contenu complet si un sélecteur est défini.',
			'title' => 'Maintenance',
		),
		'moved_category_deleted' => 'Lors de la suppression d’une catégorie, ses flux seront automatiquement classés dans <em>%s</em>.',
		'mute' => 'muet',
		'no_selected' => 'Aucun flux sélectionné.',
		'number_entries' => '%d articles',
		'priority' => array(
			'archived' => 'Ne pas afficher (archivé)',
			'main_stream' => 'Afficher dans le flux principal',
			'normal' => 'Afficher dans sa catégorie',
			'_' => 'Visibilité',
		),
		'selector_preview' => array(
			'show_raw' => 'Afficher le code source',
			'show_rendered' => 'Afficher le contenu',
		),
		'show' => array(
			'all' => 'Montrer tous les flux',
			'error' => 'Montrer seulement les flux en erreur',
		),
		'showing' => array(
			'error' => 'Montre seulement les flux en erreur',
		),
		'ssl_verify' => 'Vérification sécurité SSL',
		'stats' => 'Statistiques',
		'think_to_add' => 'Vous pouvez ajouter des flux.',
		'timeout' => 'Délai d’attente en secondes',
		'title' => 'Titre',
		'title_add' => 'Ajouter un flux RSS',
		'ttl' => 'Ne pas automatiquement rafraîchir plus souvent que',
		'url' => 'URL du flux',
		'validator' => 'Vérifier la validité du flux',
		'website' => 'URL du site',
		'websub' => 'Notification instantanée par WebSub',
	),
	'firefox' => array(
		'documentation' => 'Suivre les étapes décrites <a href="https://developer.mozilla.org/en-US/Firefox/Releases/2/Adding_feed_readers_to_Firefox#Adding_a_new_feed_reader_manually">ici</a> pour ajouter FreshRSS à la liste des lecteurs de flux dans Firefox.',
		'obsolete_63' => 'À partir de la version 63, Firefox ne supporte plus l’ajout de services d’abonnements.',
		'title' => 'Lecteur de flux dans Firefox',
	),
	'import_export' => array(
		'export' => 'Exporter',
		'export_labelled' => 'Exporter les articles étiquetés',
		'export_opml' => 'Exporter la liste des flux (OPML)',
		'export_starred' => 'Exporter les favoris',
		'feed_list' => 'Liste des articles de %s',
		'file_to_import' => 'Fichier à importer<br />(OPML, JSON ou ZIP)',
		'file_to_import_no_zip' => 'Fichier à importer<br />(OPML ou JSON)',
		'import' => 'Importer',
		'starred_list' => 'Liste des articles favoris',
		'title' => 'Importer / exporter',
	),
	'menu' => array(
		'bookmark' => 'S’abonner (bookmark FreshRSS)',
		'import_export' => 'Importer / exporter',
		'subscription_management' => 'Gestion des abonnements',
		'subscription_tools' => 'Outils d’abonnement',
	),
	'title' => array(
		'feed_management' => 'Gestion des flux RSS',
		'subscription_tools' => 'Outils d’abonnement',
		'_' => 'Gestion des abonnements',
	),
);
