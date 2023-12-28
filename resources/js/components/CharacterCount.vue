<script>
export default {
    data() {
        return {
            msg: "",
            count: 0,
        }
    }
}
</script>

<template>
  <div class="mb-4">
    <h2 class="mb-4 text-xl font-bold">Character Count: {{ msg.length }}</h2>

    <textarea class="w-full border border-purple-700 shadow rounded px-3 py-2" v-model="msg" name="" id=""
      rows="10"></textarea>
  </div>
</template>
