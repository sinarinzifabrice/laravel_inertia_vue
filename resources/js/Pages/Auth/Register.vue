<script setup>
import {reactive} from 'vue';

// Define a reactive object to hold form data
const form = reactive({
    name: '',
    email: '',
    password: '',
    password_confirmation: '',
})

// Function to handle the form submission
const submit = () => {
    console.log(form);
}
</script>

<template>
    <!-- Dynamic page title based on the component name -->
    <Head :title= "` | ${$page.component}`" />

    <h1 class="title">Register a new account</h1>
    <div class="w-2/4 mx-auto"> 
        <form @submit.prevent="submit" >
            <div class="mb-6">
                <lable for="name">Name</lable>
                <input type="text" name="name" id="name" v-model="form.name">
            </div>
            <div class="mb-6">
                <lable for="email">Email</lable>
                <input type="email" name="email" id="email" v-model="form.email">
            </div>
            <div class="mb-6">
                <lable for="password">Password</lable>
                <input type="password" name="password" id="password" v-model="form.password">
            </div>
            <div class="mb-6">
                <lable for="password_confirmation">Confirm Password</lable>
                <input type="password" name="password_confirmation" id="password_confirmation" v-model="form.password_confirmation">
            </div>
            <div class="mb-6">
                <p class="text-slate-600 mb-2">Already have an account? <a href="#" class="text-link">Login</a></p>
                <button class="primary-btn">Register</button>
            </div>
           
        </form>
    </div>
    
</template>