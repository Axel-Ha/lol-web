## 1. Description  

Ce projet présente simplement les personnages disponibles au sein du jeu League of Legends.  
Toutes les informations de ces personnages sont dynamiquement récupérées depuis une API externe.  

## 2. Technologies
- PHP
- HTML/CSS
- Docker
- API de Riot Games (https://developer.riotgames.com/docs/lol)

## 3. Utilisation  
Il est possible de le lancer sous Docker.  
Pour lancer le projet :  
  - `docker build .`
  - `docker run -t lol-web .`
  - `docker run -p 20000:10000 -t lol-web .`
  - Ouvrir l'URL `localhost:20000`

## 4. Images  


## 4.1 Liste personnages    
![Liste personnages](Content/image/liste_personnages.png)  

## 4.2 Présentation personnage  
![Presentation personnage](Content/image/presentation_personnage.png)  
