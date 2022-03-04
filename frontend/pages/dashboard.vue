<template>
	<div class=" p-5">
		<p class="text-2xl mb-3 font-bold">Dashboard</p>
		<p><b>User Name</b> : {{ $auth.user.name }}</p>
		<p><b>User Email</b> : {{ $auth.user.email }}</p>

		<div class="mt-5">
			<button type="button" class="bg-red-700 text-white rounded px-3 py-1" @click="logout">Logout</button>
		</div>
	</div>
</template>
<script>

	export default{
		middleware:'auth',

		methods:{
			async logout(){
				this.$nuxt.$loading.start();
				this.$auth.logout();
				this.$nuxt.$loading.finish();
				this.$router.push('/login');
			}
		}
	}
</script>