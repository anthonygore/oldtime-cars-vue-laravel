import axios from 'axios';

let getData = function(to) {
  return new Promise((resolve, reject) => {
    let initialState = JSON.parse(window.__INITIAL_STATE__) || {};
    if (!initialState.path || to.path !== initialState.path) {
      axios.get(`/api${to.path}`).then(({ data }) => {
        resolve(data);
      })
    } else {
      resolve(initialState);
    }
  });
};

export default {
  beforeRouteEnter (to, from, next) {
    getData(to).then((data) => {
      next(vm => Object.assign(vm.$data, data))
    });
  }
};
