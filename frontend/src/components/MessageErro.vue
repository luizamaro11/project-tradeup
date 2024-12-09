<script setup>
const props = defineProps({
  message: String,
});
</script>

<template>
  <p class="error">{{ message }}</p>
</template>

<style scoped>
.error {
  border: 1px solid #b91c1c;
  border-radius: 8px;
  width: 100%;
  text-align: left;
  padding: 1rem;
}
</style>