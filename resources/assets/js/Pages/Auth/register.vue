<!--
  This example requires Tailwind CSS v2.0+

  This example requires some changes to your config:

  ```
  // tailwind.config.js
  module.exports = {
    // ...
    plugins: [
      // ...
      require('@tailwindcss/forms'),
    ],
  }
  ```
-->
<template>
  <div class="min-h-screen bg-white flex">
    <div class="flex-1 flex flex-col justify-center py-12 px-4 sm:px-6 lg:flex-none lg:px-20 xl:px-24">
      <div class="mx-auto w-full max-w-sm lg:w-96">
        <div>
          <img class="h-12 w-auto" src="https://tailwindui.com/img/logos/workflow-mark-indigo-600.svg" alt="Workflow" />
          <h2 class="mt-6 text-3xl font-extrabold text-gray-900">
            Register
          </h2>
        </div>

        <div class="mt-8">
          <div class="mt-6">
            <div class="space-y-6">
              <div>
                <label for="name" class="block text-sm font-medium text-gray-700">
                  Name
                </label>
                <div class="mt-1">
                  <input id="name" v-model="form.name" name="name" type="text" required="" class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" />
                </div>
              </div>

              <div>
                <label for="email" class="block text-sm font-medium text-gray-700">
                  Email address
                </label>
                <div class="mt-1">
                  <input id="email" v-model="form.email" name="email" type="email" autocomplete="email" required="" class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" />
                </div>
              </div>

              <div class="space-y-1">
                <label for="password" class="block text-sm font-medium text-gray-700">
                  Password
                </label>
                <div class="mt-1">
                  <input id="password" v-model="form.password" name="password" type="password" autocomplete="current-password" required="" class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" />
                </div>
              </div>

              <div class="space-y-1">
                <label for="password" class="block text-sm font-medium text-gray-700">
                  Password Confirm
                </label>
                <div class="mt-1">
                  <input id="password_confirmation" v-model="form.password_confirmation" name="password_confirmation" type="password" autocomplete="current-password" required="" class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" />
                </div>
              </div>

              <div class="flex flex-row-reverse items-center justify-between">
                <div class="text-sm">
                  <a href="/login" class="font-medium text-indigo-600 hover:text-indigo-500">
                    login
                  </a>
                </div>
              </div>

              <Validate :errors="validations" />

              <div>
                <button @click="handleSubmit" class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                  Register
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="hidden lg:block relative w-0 flex-1">
      <img class="absolute inset-0 h-full w-full object-cover" src="https://images.unsplash.com/photo-1505904267569-f02eaeb45a4c?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1908&q=80" alt="" />
    </div>
  </div>
</template>

<script>
import { reactive } from 'vue'
import http from '../../http.js';
import Validate from '../../components/Validate.vue'
import {ref} from "vue";
import {ValidateException} from "../../exceptions";
import {checkValidate, setToken, bearerHeader} from "../../../utils";
import {Inertia} from "@inertiajs/inertia";

export default {
  components: {
    Validate
  },
  setup(props) {
    const validations = ref([]);
    const form = reactive({
              name: '',
              email: '',
              password: '',
              password_confirmation: ''
    })
    return {
      form,
      validations,
      handleSubmit() {
          http.post('/register', form)
              .then(({accessToken}) => {
                setToken(accessToken)
                Inertia.get('/', {}, bearerHeader())
              })
              .catch(error => {
                checkValidate(error, errors => validations.value = errors)
              }
          );
      }
    }
  }
}
</script>
