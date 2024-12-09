<script setup>
const emit = defineEmits(['consult']);
</script>

<template>
  <div class="consult">
    <h3>Consultar CEP</h3>
    <input 
      type="number" 
      placeholder="CEP" 
      @input="$emit('consult', $event.target.value)" 
    />
  </div>
</template>

<style scoped>
.consult {
  display: flex;
  flex-direction: row;
  align-items: center;
  gap: 1rem;
}
.consult input {
  padding: 0.6em 1.2em;
  border-radius: 8px;
}
</style>
