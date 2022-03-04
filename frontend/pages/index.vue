<template>
  <div>
    Home Page User : {{ $auth.user }}
  </div>
</template>

<script>
export default {
  auth:'guest',
  name: 'IndexPage'
}
</script>
