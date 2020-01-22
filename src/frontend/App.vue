<template>
	<div id="spaces-media-editor">
    	<h2>{{ __( "New entry for the media library", "spaces-media-editor" ) }}</h2>
	  	<Title />
		<FileUpload />
  	</div>
</template>

<script>
	import Title from './component/Title.vue'
	import FileUpload from "./component/FileUpload.vue";

	export default {

  		name: 'App',

		components: {
  			Title,
			FileUpload
		}
	}
</script>

<style>

</style>
