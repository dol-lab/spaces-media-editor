<template>
	<div class="media-title">
    <label for="media-title">{{ __( "Title", "spaces-media-editor" ) }}</label>
	<input v-model="mediaTitle" type="text" id="media-title" required />
	<p>Media title is: {{ mediaTitle }}</p>
	</div>
</template>

<script>
    export default {
        name: "Title",

		data() {
        	return {
        		mediaTitle: 'Add your title here'
			}
		}
    }
</script>

<style scoped>

</style>
