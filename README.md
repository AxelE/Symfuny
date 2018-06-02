# Projet symfuny

[![License: MIT](https://img.shields.io/badge/License-MIT-blue.svg)](https://opensource.org/licenses/MIT)

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

Cependant, la modification ne se fait pas en base; donc je fait la commande :

php bin/console do:sc:up --force

Test de la commande pour générer des pages pour Create Read Update Delete le User

php bin/console make:crud Product

le résultat est moche mais concluant : http://127.0.0.1:8000/user/
