<template>
	<div id="spaces-media-editor">
    	<h2>{{ __( "New entry for the media library", "spaces-media-editor" ) }}</h2>
	  	<Title />
  	</div>
</template>

<script>
	import Title from './component/Title.vue'

	export default {

  		name: 'App',

		components: {
  			Title
		}
	}
</script>

<style>

</style>
