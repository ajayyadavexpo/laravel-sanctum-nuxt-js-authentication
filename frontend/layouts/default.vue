<template>
	<div>
		<div class="p-4 bg-gray-600 text-white">
			<NuxtLink to='/' class="p-2 bg-green-600 text-white rounded">Home</NuxtLink>

			<NuxtLink to='/login' class="p-2 bg-green-600 text-white rounded" v-if="!$auth.loggedIn">Login</NuxtLink>

			<NuxtLink to='/register' class="p-2 bg-green-600 text-white rounded" v-if="!$auth.loggedIn">Register</NuxtLink>

			<NuxtLink to='/dashboard' class="p-2 bg-green-600 text-white rounded" 
				v-if="$auth.loggedIn">Dashboard</NuxtLink>
			

		</div>
		<Nuxt />
	</div>
</template>
<script>
	export default{
		auth:false
	}
</script>