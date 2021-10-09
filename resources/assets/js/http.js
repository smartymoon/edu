import axios from "axios";
import { ValidateException } from "./exceptions";

const service = axios.create();

service.interceptors.response.use(
    response => {
        if (response.status === 200) {
            return Promise.resolve(response.data);
        } else {
            return Promise.reject(response);
        }
    },
    error => {
        if (error.response.status) {
            if (error.response.status === 422) {
                const errors = [];
                for (let field in error.response.data.errors) {
                    for (let message of error.response.data.errors[field]) {
                        errors.push(message)
                    }
                }
                return Promise.reject(new ValidateException(errors));
            }
            return Promise.reject(error.response);
        }
    }
)

export default service;