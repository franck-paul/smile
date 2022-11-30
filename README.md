# Thème Smile pour Dotclear 2

Thème pour [Dotclear 2](https://fr.dotclear.org/) adapté du l'éponyme thème Smile développé pour Wordpress par Stephen Dickinson ([Steve's Space](https://stephencottontail.wordpress.com/)).

## Résumé

-   Thème Smile pour Dotclear 2 (**2.7 minimum**)
-   [Démo et téléchargement](https://themes.dotaddict.org/galerie-dc2/details/smile)
-   [Sources, bugs, …](https://bitbucket.org/franckpaul/smile)
-   Auteur : [Franck Paul](https://open-time.net/)
-   Dépendance(s) :
    -   [Dotclear 2.7](https://bitbucket.org/dotclear/dotclear)
    -   jQuery 1.11.1 : voir les paramètres du blog

## Description

![Aperçu](https://media.dotaddict.org/pda/tdc2/smile/smile.jpg)

Ce thème est mono-colonne (les widgets sont positionnés en bas de la page), responsive et utilise le jeu de template dotty.

## Plugins tiers

Ce thème prend d'ores et déjà en charge les plugins [contactMe](https://plugins.dotaddict.org/dc2/details/contactMe), [series](https://plugins.dotaddict.org/dc2/details/series) et [gravatar](https://plugins.dotaddict.org/dc2/details/gravatar).

Pour le plugin Gravatar, il faut, une fois ce dernier activé pour le blog :

-   Désactiver l'insertion automatique pour les billets et les commentaires
-   Définir la taille de l'image pour les commentaires à 64 pixels
-   Supprimer (ou mettre en commentaire) les éventuels styles

## Compilation Sass

Dans le répertoire principal :

    sass --watch ./sass:./

## History

-   1.0 Initial release
-   1.1 Switch from currywurst to dotty templateset and remove outline:none; from CSS — a11y matters
