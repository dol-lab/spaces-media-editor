<template>
	<div class="media-title">
    <label for="media-title">{{ __( "Entry Title", "spaces-media-editor" ) }}</label>
	<input v-model.trim="mediaTitle" type="text" id="media-title" required />
	</div>
</template>

<script>
    export default {
        name: "Title",

		data() {
        	return {
        		mediaTitle: ''
			}
		}
    }
</script>

<style scoped>

</style>
