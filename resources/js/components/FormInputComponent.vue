<template>
    
    <v-text-field
          v-model="firstName"
          :rules="rules"
          label="الإسم"
        ></v-text-field>
  </template>
  <script>
    export default {
      data: () => ({
        firstName: '',
        rules: [
          value => {
            if (value) return true
  
            return 'هذا الحقل مطلوب'
          },
        ],
      }),
    }
  </script>