<template>
  <div class="content">
	<div class="container">
		<h3>Employees</h3>
	</div>
    <user-component></user-component>
	<hire-form></hire-form>
  </div>  
</template>

<script>
  //import your components here
import UserComponent from './components/UserComponent.vue';
import HireForm from './components/HireForm.vue';
  export default {
  	
    components: {
      'user-component': UserComponent,
      'hire-form' : HireForm
    }
    
 }   
</script>