# UNOWR

## Command lines 

### Lister les fichiers modifiés : 
```shell
git status
```

### Pousser les modifications locales sur Github : 

- Ajouter tous les fichiers : 
```shell
git add . 
```

- Puis commiter les fichiers sur Github : 
```shell
git commit -m “[description du commit]”
```

- Enfin :
```shell
git push
```

### Récupérer les modifications sur Github pour son local : 
```shell
git pull origin master
```

## Local iso production

### Récupérer la base de données
- Exporter la base de données de production.
- Remplacer les urls de prod par les urls locales dans le fichier .sql. 
- Importer le fichier .sql dans la base de données locale.

### Récupérer le code 
- Command git pull

### Récupérer les assets 
- Télécharger le dossier wp_content/uploads.

### Wp_config 

- Indiquer les infos locales
`
Ce fichier est propre à chaque environnement
`

## Déploiement
- Command line : 
``` shell 
git pull
```

- Connexion FTP 
- Déposer le ou les fichier(s) modifiés
