<template>
  <div>
    <div class="font-bold p-5 text-gray-600">

      Home Page User <p v-if="$auth.loggedIn"> : {{ $auth.user }}</p>
    </div>
  </div>
</template>

<script>
export default {
  auth:'guest',
  name: 'IndexPage'
}
</script>
