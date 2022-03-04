<template>
	<!-- component -->
<div class="flex items-center justify-center">
    <div class="w-full max-w-md">
      <form class="bg-white shadow-lg rounded px-12 pt-6 pb-8 mb-4" ref="registerform" @submit.prevent="register">
        <!-- @csrf -->
        <div
          class="text-gray-800 text-2xl flex justify-center border-b-2 py-2 mb-4"
        >
           Register
        </div>
        <div class="mb-4">
          <label
            class="block text-gray-700 text-sm font-normal mb-2"
            for="username"
          >
            Name
          </label>
          <input
            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
            name="name"
            type="text"
            required
            autofocus
            placeholder="Name"
          />

          <label
            class="block text-gray-700 text-sm font-normal mb-2"
            for="username"
          >
            Email
          </label>
          <input
            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
            name="email"
            type="email"
            required
            autofocus
            placeholder="Email"
          />
        </div>
        
        <div class="mb-6">
          <label
            class="block text-gray-700 text-sm font-normal mb-2"
            for="password"
          >
            Password
          </label>
          <input
            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"
            type="password"
            placeholder="Password"
            name="password"
            required
            autocomplete="current-password"
          />
        </div>
        <div class="flex items-center justify-between">
          <button class="px-4 py-2 rounded text-white inline-block shadow-lg bg-blue-500 hover:bg-blue-600 focus:bg-blue-700" type="submit">Sign Up</button>
          <a
            class="inline-block align-baseline font-normal text-sm text-blue-500 hover:text-blue-800"
            href="#"
          >
            Forgot Password?
          </a>
        </div>
      </form>
      <p class="text-center text-gray-500 text-xs">
      </p>
    </div>
  </div>
</template>
<script>
	export default{
		auth:'guest',
		mounted(){
			this.$axios.$get('/sanctum/csrf-cookie');
		},
		methods:{
			register(){
				try{
					const formData = new FormData(this.$refs.registerform);
          this.$axios.post('/register',formData).then(res=>{
  					this.$auth.loginWith('laravelSanctum',{data:formData});
  					console.log('user login');
  					this.$router.push({
  						path:'/',
  					});
          })
				}catch(err){
					console.log(err);
				}
			}
		}
	}
</script>