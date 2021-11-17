<?php 
  // incluí rotas padrões na API
  include __DIR__ . '/api/default.php';

  // incluí rota de Usuários
  include __DIR__ . '/api/users.php';

  // incluí rota de Medalhas
  include __DIR__ . '/api/medals.php';

  // incluí rota de Pontos
  include __DIR__ . '/api/points.php';
  
  // incluí rota de Categorias
  include __DIR__ . '/api/category.php';

?>