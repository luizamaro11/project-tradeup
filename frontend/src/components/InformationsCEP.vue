<script setup>
const props = defineProps({
  data: Object,
});
</script>

<template>
  <div class="informations_cep">
        <p>
          <strong>BAIRRO: </strong>
          <span v-if="data">{{ data.bairro }}</span>
        </p>
        <p>
          <strong>CEP: </strong>
          <span v-if="data">{{ data.cep }}</span>
        </p>
        <p>
          <strong>COMPLEMENTO: </strong>
          <span v-if="data">{{ data.complemento }}</span>
        </p>
        <p>
          <strong>DDD: </strong>
          <span v-if="data">{{ data.ddd }}</span>
        </p>
        <p>
          <strong>ESTADO: </strong>
          <span v-if="data">{{ data.estado }}</span>
        </p>
        <p>
          <strong>GIA: </strong>
          <span v-if="data">{{ data.gia }}</span>
        </p>
        <p>
          <strong>IBGE: </strong>
          <span v-if="data">{{ data.ibge }}</span>
        </p>
        <p>
          <strong>LOCALIDADE: </strong>
          <span v-if="data">{{ data.localidade }}</span>
        </p>
        <p>
          <strong>LOGRADOURO: </strong>
          <span v-if="data">{{ data.logradouro }}</span>
        </p>
        <p>
          <strong>REGIAO: </strong>
          <span v-if="data">{{ data.regiao }}</span>
        </p>
        <p>
          <strong>SIAFI: </strong>
          <span v-if="data">{{ data.siafi }}</span>
        </p>
        <p>
          <strong>UF: </strong>
          <span v-if="data">{{ data.uf }}</span>
        </p>
        <p>
          <strong>UNIDADE: </strong>
          <span v-if="data">{{ data.unidade }}</span>
        </p>
  </div>
</template>

<style scoped>
.informations_cep {
  background: #f1f5f9;
  width: 100%;
  border-radius: 8px;
  padding: 1rem;
  border: 1px solid #d1d5db;
}
.informations_cep p {
  margin: 0.5rem 0;
}
.informations_cep p span {
  font-size: 0.875rem;
  color: #475569;
}
</style>