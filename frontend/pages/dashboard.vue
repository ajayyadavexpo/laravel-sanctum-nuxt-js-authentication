<template>
	<div class="font-bold p-5">
		Dashboard : {{ $auth.user.name }}, Email : {{ $auth.user.email }}

		<div>
			<button type="button" class="bg-red-700 text-white rounded p-3" @click="logout">Logout</button>
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