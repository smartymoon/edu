import axios from "axios";

const service = axios.create();

service.interceptors.response.use(
    response => {
        if (response.status === 200) {
            return Promise.resolve(response);
        } else {
            return Promise.reject(response);
        }
    },
    error => {
        if (error.response.status) {
            if (error.response.status === '422') {
                return Promise.reject(error.response);
            }
            return Promise.reject(error.response);
        }
    }
)