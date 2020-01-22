<template>
	<div class="media-file-upload">
		<label for="pond">{{__( 'Upload a file', 'spaces-media-editor' )}}</label>
		<file-pond
			name="test"
			ref="pond"
			:label-idle="__( 'Drop file here...', 'spaces-media-editor' )"
			v-bind:allow-multiple="false"
			accepted-file-types="image/jpeg, image/png, application/pdf,"
			server="/api"
			v-bind:files="myFiles"
			v-on:init="handleFilePondInit"/>
	</div>
</template>

<script>

	import vueFilePond from 'vue-filepond';

	import 'filepond/dist/filepond.min.css';

	const FilePond = vueFilePond();

    export default {
        name: "FileUpload",

		data: function() {
			return { myFiles: [] };
		},
		methods: {
			handleFilePondInit: function() {
				console.log('FilePond has initialized');

				// FilePond instance methods are available on `this.$refs.pond`
			}
		},
		components: {
			FilePond
		}
    }
</script>

<style scoped>

</style>
