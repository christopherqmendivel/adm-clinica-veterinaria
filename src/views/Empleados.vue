<template>
  <div>
    <h1>Empleados</h1>
    <table>
      <thead>
        <tr>
          <th>Nombre</th>
          <th>Apellido</th>
          <th>DNI</th>
          <th>Correo Electrónico</th>
          <th>Teléfono</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="empleado in empleados" :key="empleado.id">
          <td>{{ empleado.nombre }}</td>
          <td>{{ empleado.apellido }}</td>
          <td>{{ empleado.dni }}</td>
          <td>{{ empleado.correo_electronico }}</td>
          <td>{{ empleado.telefono }}</td>
        </tr>
      </tbody>
    </table>
  </div>
</template>

<script>
import axios from 'axios';

export default {
  name: 'AppEmpleados',
  data() {
    return {
      empleados: []
    };
  },
  created() {
    this.fetchEmpleados();
  },
  methods: {
    fetchEmpleados() {
      axios.get('http://127.0.0.1:8000/api/empleados')
        .then(response => {
          this.empleados = response.data;
        })
        .catch(error => {
          console.error('Error fetching empleados:', error);
        });
    }
  }
};
</script>

<style scoped>
/* Estilos específicos para la vista de Empleados */
table {
  width: 100%;
  border-collapse: collapse;
}

th, td {
  padding: 8px;
  text-align: left;
  border-bottom: 1px solid #ddd;
}

th {
  background-color: #f2f2f2;
}
</style>
