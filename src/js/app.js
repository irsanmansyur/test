// You can specify which plugins you need
import { Tooltip, Toast, Popover } from 'bootstrap';

window._ = require('lodash');

try {
  window.$ = window.jQuery = require('jquery');

} catch (e) { }

window.axios = require('axios');

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';