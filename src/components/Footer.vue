<template>
    <footer>
      <p>&copy; {{ new Date().getFullYear() }} Clínica Veterinaria. Todos los derechos reservados.</p>
    </footer>
  </template>
  
  <script>
  export default {
    name: 'AppFooter'
  };
  </script>
  
  <style scoped>
  footer {
    background-color: #333;
    padding: 10px;
    color: white;
    text-align: center;
  }
  </style>
  