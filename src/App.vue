<!-- Ejemplo de vista en Vue.js -->
<template>
  <div>
    <h1>{{ titulo }}</h1>
    <p>{{ descripcion }}</p>
  </div>
</template>

<script>
export default {
  data() {
    return {
      titulo: 'Bienvenido a la Clínica',
      descripcion: 'Gestiona tus pacientes de manera eficiente.'
    };
  }
}
</script>

<style scoped>
/* Estilos específicos para este componente */
h1 {
  color: #333;
}
</style>
