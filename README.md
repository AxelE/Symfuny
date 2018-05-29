# Projet symfuny

## Informations

This is a fun project of Symfony 4

## RTFM

Read the documentation at https://symfony.com/doc

## What I do ?

composer create-project symfony/website-skeleton symfuny

Run the application:
    1. Change to the project directory
    2. Execute the php -S 127.0.0.1:8000 -t public command;
    3. Browse to the http://localhost:8000/ URL.


php bin/console make:controller

1) Forum
2) Highlights
3) Partner
4) Recrutement

Modifier le .env avec le lien vers ma base

Créer la bdd:

php bin/console doctrine:database:create

Créer mon entité User avec un Name et un Role

php bin/console make:entity

php bin/console make:migration

Puis ajouter un email à ce même user avec les même commandes