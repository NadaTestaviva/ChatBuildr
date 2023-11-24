<template>
  <PageComponent>
    <template v-slot:header>
      <div class="flex items-center justify-between">
        <h1 class="text-3xl font-bold text-gray-900">
          {{ route.params.id ? model.title : "User Profile" }}
        </h1>

        <div class="flex">
          <TButton v-if="model.slug" link :href="`/view/survey/${model.slug}`" target="_blank" class="mr-2">
            <ExternalLinkIcon class="w-5 h-5" />
            View Public link
          </TButton>
          <TButton v-if="route.params.id" color="red" @click="deleteSurvey()">
            <TrashIcon class="w-5 h-5 mr-2" />
            Delete
          </TButton>
        </div>
      </div>
    </template>
    <div v-if="surveyLoading" class="flex justify-center">Loading...</div>
    <form v-else @submit.prevent="saveSurvey" class="animate-fade-in-down">
      <div v-if="user" class="shadow sm:rounded-md sm:overflow-hidden">
        <!-- Survey Fields -->
        <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
          <!-- ID -->
          <input
              type="text"
              name="id"
              id="id"
              style="display: none;"
              v-model="user.id"
              autocomplete="user_id"
              class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
              required
            />
          
          <!-- Title -->
          <div>
            <label for="title" class="block text-sm font-medium text-gray-700"
              >Name*</label>
            <input
              type="text"
              name="name"
              id="name"
              v-model="user.name"
              autocomplete="user_name"
              class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
              required
            />
          </div>

          <div>
          <label for="title" class="block text-sm font-medium text-gray-700"
              >Email*</label
            >
            <input
              type="text"
              name="email"
              id="email"
              v-model="user.email"
              autocomplete="user_email"
              class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
              required  
            />
          </div>
          <!--/ Title -->

          <div>
          <label for="title" class="block text-sm font-medium text-gray-700"
              >Phone Number*</label
            >
            <input
              type="text"
              name="phone"
              id="phone"
              v-model="user.phone_number"
              autocomplete="user_phone"
              class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
              required
              />
          </div>
          <!--/ Title -->


          <div>
          <label for="title" class="block text-sm font-medium text-gray-700"
              >New Password</label
            >
            <input
              type="text"
              name="password"
              id="password"
              autocomplete="user_password"
              class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
            />
          </div>
          <!--/ Title -->

          <div>
          <label for="title" class="block text-sm font-medium text-gray-700"
              >Confirm Password</label
            >
            <input
              type="text"
              name="confirm_password"
              id="confirm_password"
              v-model="model.title"
              autocomplete="user_confirm_password"
              class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
            />
          </div>
          <!--/ Title -->

</div>

        <div class="px-4 py-12 bg-gray-50 text-right sm:px-6 " style ="display: flex;">
          <TButton style="  margin-right: 2em;">
            <SaveIcon @click="saveUserData" class="w-5 h-5 mr-2" />
            Save
          </TButton>

          <TButton>
            <SaveIcon class="w-5 h-5 mr-2" />
            Cancel
          </TButton>
        </div>
      </div>
    </form>
  </PageComponent>
</template>

<script setup>
import axios from 'axios';
import { v4 as uuidv4 } from "uuid";
import { computed, ref, watch } from "vue";
import { useRoute, useRouter } from "vue-router";
import { SaveIcon, TrashIcon, ExternalLinkIcon } from '@heroicons/vue/solid'
import store from "../store";
import PageComponent from "../components/PageComponent.vue";
import QuestionEditor from "../components/editor/QuestionEditor.vue";
import TButton from "../components/core/TButton.vue";

const router = useRouter();

const route = useRoute();

// Get survey loading state, which only changes when we fetch survey from backend
const surveyLoading = computed(() => store.state.currentSurvey.loading);
const user = computed(()=> store.state.user.data);
// Create empty survey
let model = ref({
  title: user.name,
  slug: "",
  status: false,
  description: null,
  image: null,
  image_url: null,
  expire_date: null,
  questions: [],
});

// Watch to current survey data change and when this happens we update local model
watch(
  () => store.state.currentSurvey.data,
  (newVal, oldVal) => {
    model.value = {
      ...JSON.parse(JSON.stringify(newVal)),
      status: !!newVal.status,
    };
  }
);

// If the current component is rendered on survey update route we make a request to fetch survey
if (route.params.id) {
  store.dispatch("getSurvey", route.params.id);
}


function saveUserData(){

}

/**
 * Create or update survey
 */
function saveSurvey(submitEvent) {
  const ID = submitEvent.target.elements.id.value
  const Username = submitEvent.target.elements.name.value
  const Email = submitEvent.target.elements.email.value
  const Phone = submitEvent.target.elements.phone.value
  const Password = submitEvent.target.elements.password.value
  const ConfirmPassword = submitEvent.target.elements.confirm_password.value

if(ConfirmPassword != Password)  
{   
  alert("Passwords did not match");  
  return;  
}

let formData = new FormData();
formData.append('id', ID);
formData.append('name',Username);
formData.append('email',Email);
formData.append('phone',Phone);
formData.append('password',Password);
formData.append('confirm_password',ConfirmPassword);
 

const url = "http://localhost:8000/user_edit";     
  axios
    .post(url,formData)
    .then(response => {
      console.log(response.data);
      window.location.reload();
    })
    .catch(error => {
      console.log(error)
    });
}

function deleteSurvey() {
  if (
    confirm(
      `Are you sure you want to delete this survey? Operation can't be undone!!`
    )
  ) {
    store.dispatch("deleteSurvey", model.value.id).then(() => {
      router.push({
        name: "Surveys",
      });
    });
  }
}
</script>

<style></style>
