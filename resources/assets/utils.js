import {ValidateException} from "./js/exceptions";

export function checkValidate (error, callback) {
    if (error instanceof ValidateException) {
        callback(error.errors)
    }
}

export function setToken(token)
{
    localStorage.setItem('accessToken', token)
}

export function getToken()
{
    return localStorage.getItem('accessToken')
}

export function deleteToken()
{
    localStorage.removeItem('accessToken')
}


export function bearerHeader()
{
    return {
        headers: {
            Authorization: 'Bearer ' + getToken()
        }
    }
}