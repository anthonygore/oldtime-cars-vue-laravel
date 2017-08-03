let initialState = JSON.parse(window.__INITIAL_STATE__);
import axios from 'axios';

let getData = function(to) {
  return new Promise((resolve, reject) => {
    let useApi = to.path !== initialState.path;
    if (useApi) {
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
      next(vm => vm.setData(data))
    });
  }
};
