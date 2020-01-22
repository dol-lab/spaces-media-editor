import Vue from 'vue'
import App from './App.vue'
import { __, _x, _n, _nx, sprintf } from "@wordpress/i18n"

Vue.config.productionTip = false

Vue.mixin(
	{
		methods: {
			__,
			_x,
			_n,
			_nx,
			sprintf
		}
	}
);

/* eslint-disable no-new */
new Vue(
	{
		el: '#spaces-media-editor',
		render: h => h( App )
	}
)
