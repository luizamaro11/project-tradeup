<script setup>
import { ref } from 'vue';
import InputCEP from './components/InputCEP.vue';
import MessageErro from './components/MessageErro.vue';
import InformationsCEP from './components/InformationsCEP.vue';

const zipcode = ref(null);
const error = ref(null);

const consultZipcode = async (cep) => {
  try {
    const url = `/api/zipcode?cep=${cep}`;
    const response = await fetch(url);

    const responseJson = await response.json();
    
    console.log(responseJson);

    if (!response.ok) {
      throw new Error(`${responseJson.error}`);
    }

    zipcode.value = responseJson;
    error.value = null;
  } catch (err) {
    error.value = err.message;
    zipcode.value = null;
  }
}
</script>

<template>
  <div>
      <InputCEP @consult="consultZipcode" />

      <MessageErro v-if="error" :message="error" />

      <InformationsCEP :data="zipcode" />
  </div>
</template>

<style scoped>
  div {
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    gap: 0.5rem;
  }

  div input {
    padding: 0.6em 1.2em;
    border-radius: 8px;
  }
</style>
