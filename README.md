## Utilisation

Tout d'abord, créer la bdd wefasion.
Modifier votre .env si il est nécessaire.
npm install.
faire php artisan migrate:fresh
puis php artisan db:seed
Il y aura une erreur à cause des clés primaires mais ça à bien fonctionné. je n'ai pas eu le temps à m'occuper de ce problème
Vous devriez être prêt à utiliser l'appli
bien sûr, il faut npm run dev ainsi que php artisan serve
Pour se connecter : admin@admin.com avec pour mdp : root
