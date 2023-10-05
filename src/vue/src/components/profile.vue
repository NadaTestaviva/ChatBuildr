<!-- <template>
              <div class="frame-10">
            <div class="frame-11">
              <img class="vector" src="../img/vector-76.svg" />
              <div class="frame-12">
                <div class="save-button"><div class="text">Save Changes</div></div>
                <button class="cancel-button"><div class="text-wrapper-48">Cancel</div></button>
              </div>
              <div class="password">
                <div class="group">
                  <div class="text-wrapper-49">Current Password</div>
                  <div class="overlap-group">
                    <img class="key-undefined-glyph" src="../img/key-undefined-glyph-undefined-2.svg" />
                    <img class="frame-13" src="../img/frame-3.svg" />
                  </div>
                </div>
                <div class="group-2">
                  <div class="text-wrapper-49">New Password</div>
                  <div class="overlap-2">
                    <img class="key-undefined-glyph-2" src="../img/key-undefined-glyph-undefined.svg" />
                    <img class="frame-14" src="../img/frame-3.svg" />
                  </div>
                </div>
                <div class="group-3">
                  <div class="text-wrapper-50">Confirm New Password</div>
                  <div class="overlap-group-2">
                    <img class="key-undefined-glyph-3" src="../img/key-undefined-glyph-undefined-1.svg" />
                    <img class="frame-15" src="../img/frame-3.svg" />
                  </div>
                </div>
              </div>
              <div class="frame-16">
                <div class="location">
                  <div class="text-wrapper-51">Location</div>
                  <div class="overlap-group-2">
                    <img class="location-undefined" src="../img/location-undefined-glyph-undefined.svg" />
                  </div>
                </div>
                <div class="time-zone">
                  <div class="text-wrapper-51">Time Zone</div>
                  <div class="overlap-group-2">
                    <img class="clock-undefined" src="../img/clock-undefined-glyph-undefined.svg" />
                  </div>
                </div>
                <img class="vector-2" src="../img/vector-76.svg" />
              </div>
              <div class="frame-17">
                <img class="vector-3" src="../img/vector-76.svg" />
                <div class="overlap-3">
                  <div class="email-phone">
                    <div class="text-wrapper-52">Email Address</div>
                    <div class="overlap-group-3">
                      <img class="mail" src="../img/mail.svg" />
                      <div class="text-wrapper-53">User@email.com</div>
                    </div>
                    <div class="text-wrapper-54">Phone Number</div>
                    <div class="overlap-4"><img class="phone" src="../img/phone.svg" /></div>
                  </div>
                  <div class="text-wrapper-55">123456789</div>
                </div>
              </div>
              <div class="frame-18">
                <img class="vector-4" src="../img/vector-75-1.svg" />
                <div class="name">
                  <div class="text-wrapper-52">First Name</div>
                  <div class="overlap-group-3"><div class="text-wrapper-56">User</div></div>
                  <div class="text-wrapper-57">Last Name</div>
                  <div class="overlap-4"><div class="text-wrapper-58">Test</div></div>
                  <div class="text-wrapper-59">User Name</div>
                  <div class="overlap-group-4"><div class="text-wrapper-60">@usertest123</div></div>
                </div>
              </div>
              <div class="general-info-photo">
                <div class="text-wrapper-61">User Profile</div>
                <img class="vector-5" src="../img/vector-75.svg" />
                <div class="group-4">
                  <img class="group-5" src="../img/group-16.png" />
                  <div class="text-wrapper-62">User Test</div>
                  <div class="text-wrapper-63">@Usertest123</div>
                  <div class="text-wrapper-64">tel : 123456789</div>
                </div>
                <div class="row">
                  <div class="upload-photo"><div class="text-wrapper-65">Upload New Photo</div></div>
                  <div class="delete"><div class="text-wrapper-66">Delete</div></div>
                </div>
              </div>
            </div>
          </div>
</template> -->

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
      <div class="shadow sm:rounded-md sm:overflow-hidden">
        <!-- Survey Fields -->
        <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
          <!-- Image -->
          <div>
            <label class="block text-sm font-medium text-gray-700">
              Image
            </label>
            <div class="mt-1 flex items-center">
              <img
                v-if="model.image_url"
                :src="model.image_url"
                :alt="model.title"
                class="w-64 h-48 object-cover"
              />
              <span
                v-else
                class="flex items-center justify-center h-12 w-12 rounded-full overflow-hidden bg-gray-100"
              >
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  class="h-[80%] w-[80%] text-gray-300"
                  viewBox="0 0 20 20"
                  fill="currentColor"
                >
                  <path
                    fill-rule="evenodd"
                    d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm12 12H4l4-8 3 6 2-4 3 6z"
                    clip-rule="evenodd"
                  />
                </svg>
              </span>
              <button
                style="background-color: darkslateblue;color: white;"
                type="button"
                class="relative overflow-hidden ml-5 bg-white py-2 px-3 border border-gray-300 rounded-md shadow-sm text-sm leading-4 font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
              >
                <input
                  type="file"
                  @change="onImageChoose"
                  class="absolute left-0 top-0 right-0 bottom-0 opacity-0 cursor-pointer"
                />
                Upload New Photo
              </button>

              <button
                style="background-color: darkred;color: white;"
                type="button"
                class="relative overflow-hidden ml-5 bg-white py-2 px-3 border border-gray-300 rounded-md shadow-sm text-sm leading-4 font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
              >
                <input
                  type="file"
                  @change="onImageChoose"
                  class="absolute left-0 top-0 right-0 bottom-0 opacity-0 cursor-pointer"
                />
                Delete
              </button>
            </div>
          </div>
          <!--/ Image -->

          <!-- Title -->
          <div>
            <label for="title" class="block text-sm font-medium text-gray-700"
              >First Name</label
            >
            <input
              type="text"
              name="title"
              id="title"
              v-model="model.title"
              autocomplete="survey_title"
              class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
            />
          </div>

          <div>
            <label for="title" class="block text-sm font-medium text-gray-700"
              >Last Name</label
            >
            <input
              type="text"
              name="title"
              id="title"
              v-model="model.title"
              autocomplete="survey_title"
              class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
            />
          </div>
          <!--/ Title -->

          <div>
            <label for="title" class="block text-sm font-medium text-gray-700"
              >User Name</label
            >
            <input
              type="text"
              name="title"
              id="title"
              v-model="model.title"
              autocomplete="survey_title"
              class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
            />
          </div>
          <!--/ Title -->

          <div>
          <label for="title" class="block text-sm font-medium text-gray-700"
              >Email Address</label
            >
            <input
              type="text"
              name="title"
              id="title"
              v-model="model.title"
              autocomplete="survey_title"
              class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
            />
          </div>
          <!--/ Title -->

          <div>
          <label for="title" class="block text-sm font-medium text-gray-700"
              >Phone Number</label
            >
            <input
              type="text"
              name="title"
              id="title"
              v-model="model.title"
              autocomplete="survey_title"
              class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
            />
          </div>
          <!--/ Title -->

          <div>
          <label for="title" class="block text-sm font-medium text-gray-700"
              >Location</label
            >
            <input
              type="text"
              name="title"
              id="title"
              v-model="model.title"
              autocomplete="survey_title"
              class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
            />
          </div>
          <!--/ Title -->

          <div>
          <label for="title" class="block text-sm font-medium text-gray-700"
              >Timezone</label
            >
            <input
              type="text"
              name="title"
              id="title"
              v-model="model.title"
              autocomplete="survey_title"
              class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
            />
          </div>
          <!--/ Title -->

</div>

        <div class="px-4 py-12 bg-gray-50 text-right sm:px-6 " style ="display: flex;">
          <TButton style="  margin-right: 2em;">
            <SaveIcon class="w-5 h-5 mr-2" />
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

// Create empty survey
let model = ref({
  title: "",
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

function onImageChoose(ev) {
  const file = ev.target.files[0];

  const reader = new FileReader();
  reader.onload = () => {
    // The field to send on backend and apply validations
    model.value.image = reader.result;

    // The field to display here
    model.value.image_url = reader.result;
    ev.target.value = "";
  };
  reader.readAsDataURL(file);
}

function addQuestion(index) {
  const newQuestion = {
    id: uuidv4(),
    type: "text",
    question: "",
    description: null,
    data: {},
  };

  model.value.questions.splice(index, 0, newQuestion);
}

function deleteQuestion(question) {
  model.value.questions = model.value.questions.filter((q) => q !== question);
}

function questionChange(question) {
  // Important to explicitelly assign question.data.options, because otherwise it is a Proxy object
  // and it is lost in JSON.stringify()
  if (question.data.options) {
    question.data.options = [...question.data.options];
  }
  model.value.questions = model.value.questions.map((q) => {
    if (q.id === question.id) {
      return JSON.parse(JSON.stringify(question));
    }
    return q;
  });
}

/**
 * Create or update survey
 */
function saveSurvey() {
  let action = "created";
  if (model.value.id) {
    action = "updated";
  }
  store.dispatch("saveSurvey", { ...model.value }).then(({ data }) => {
    store.commit("notify", {
      type: "success",
      message: "The survey was successfully " + action,
    });
    router.push({
      name: "SurveyView",
      params: { id: data.data.id },
    });
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
