class ExtendableError extends Error {
    constructor(message) {
        super(message);
        this.name = this.constructor.name;
        if (typeof Error.captureStackTrace === 'function') {
            Error.captureStackTrace(this, this.constructor);
        } else {
            this.stack = (new Error(message)).stack;
        }
    }
}

class ValidateException extends ExtendableError {
    constructor(errors) {
        super('There are errors with your submission');
        this.errors = errors
    }
}

export {
    ValidateException
}