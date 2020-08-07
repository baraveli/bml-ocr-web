<template>
    <div class="flex flex-col justify-center mt-5">
        <div v-if="detectedText" class="container mx-auto">
            <div class="mb-5 flex justify-center">
                <div
                    class="bg-green-200 border border-green-200 text-green-800 p-1 rounded-lg relative"
                    role="alert"
                >
                    <span class="block sm:inline"
                        >Character Detection successful!</span
                    >
                </div>
            </div>
        </div>

        <div>
            <file-pond
                ref="pond"
                label-idle="Drop a Receipt..."
                v-bind:allow-multiple="false"
                accepted-file-types="image/jpeg, image/png"
            />

            <button
                type="button"
                @click="detect()"
                class="inline-flex items-center px-4 py-2 border border-transparent text-base leading-6 font-medium rounded-md text-white bg-green-600 hover:bg-green-500 focus:outline-none focus:border-green-700 focus:shadow-outline-green active:bg-green-700 transition ease-in-out duration-150"
            >
                <svg
                    v-if="loading"
                    class="animate-spin -ml-1 mr-3 h-5 w-5 text-white"
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                >
                    <circle
                        class="opacity-25"
                        cx="12"
                        cy="12"
                        r="10"
                        stroke="currentColor"
                        stroke-width="4"
                    ></circle>
                    <path
                        class="opacity-75"
                        fill="currentColor"
                        d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"
                    ></path>
                </svg>
                Detect
            </button>
        </div>

        <div class="rounded shadow mt-10" style="background-color: #F1F0EF;">
            <pre class="text-green-700" v-text="detectedText"></pre>
        </div>
    </div>
</template>

<script>
import vueFilePond from "vue-filepond";
import FilePondPluginFileValidateType from "filepond-plugin-file-validate-type";
import FilePondPluginImagePreview from "filepond-plugin-image-preview";
import FilePondPluginFileEncode from "filepond-plugin-file-encode";

const FilePond = vueFilePond(
    FilePondPluginFileValidateType,
    FilePondPluginFileEncode,
    FilePondPluginImagePreview
);

export default {
    data() {
        return {
            file: {
                name: "",
                data: ""
            },
            detectedText: "",
            loading: false
        };
    },

    methods: {
        detect: function() {
            let self = this;
            self.loading = true;
            self.file.name = self.$refs.pond.getFile().filename;
            self.file.data = self.$refs.pond
                .getFile()
                .getFileEncodeBase64String();

            axios
                .post("api/detect", self.file)
                .then(function(response) {
                    self.loading = false;
                    self.detectedText = response.data;
                })
                .catch(function(error) {
                    console.log(error);
                });
        }
    },

    components: {
        FilePond
    }
};
</script>

<style>
.animate-spin {
    -webkit-animation: spin 1s linear infinite;
    animation: spin 1s linear infinite;
}
</style>
