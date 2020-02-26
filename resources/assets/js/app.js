// jquery && bootstrap
try {
  window.$ = window.jQuery = require('jquery');

  require('bootstrap');
} catch (e) {
}

//fullpage
require('../plugins/fullpage/js/jquery.fullPage');

// vue
window.Vue = require('vue')

// lodash
window._ = require('lodash')

// iview
import iView from 'view-design'

Vue.use(iView)

// axios
// import axios from 'axios'
window.axios = require('axios');
axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest'

let token = document.head.querySelector('meta[name="csrf-token"]')

if (token) {
  axios.defaults.headers.common['X-CSRF-TOKEN'] = token.content

  Vue.prototype.$csrf_token = token.content
}

iView.LoadingBar.config({
  height: 3
})

axios.interceptors.request.use((config) => {
  iView.LoadingBar.start()

  return config
}, function (error) {
  return Promise.reject(error)
})

axios.interceptors.response.use((response) => {
  iView.LoadingBar.finish()

  return response
}, function (error) {
  if (error.response.status === 419) {
    window.location.reload()
  } else {
    iView.LoadingBar.error()

    let msg = _.defaultTo(error.response.data.message) || _.defaultTo(error.response.statusText) || error.response.status

    iView.Message.error(msg)
  }

  return Promise.reject(error)
})

Vue.prototype.$http = axios

// CDN
Vue.prototype.$cdn = process.env.MIX_APP_CDN

// components
require('./components')

// admin
require('./admin')

// home
require('./home')

// app
const app = new Vue({
  el: '#app'
})
