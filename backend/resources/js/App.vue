<template>
  <div>
    <main>
        <RouterView />
    </main>
  </div>
</template>

<script>
import ExampleComponent from './components/ExampleComponent.vue'
export default {
  components: {
    ExampleComponent
  }
}
</script>