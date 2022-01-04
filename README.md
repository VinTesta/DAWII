# DAWII
A project to my development
- The project need the htaccess
- #habilitando a reescrita---------------------------------------------------------
  RewriteEngine On

  #AWS
  #RewriteCond %{SERVER_PORT} 80
  #RewriteRule ^(.*)$ http://localhost/dawii_vintesta/ [R,L]

  RewriteRule    ^home/?$    views/home-page.php    [QSA,NC,L]
  RewriteRule    ^cadastro-usuario/?$    views/formulario-cadastro-cliente.php    [QSA,NC,L]
