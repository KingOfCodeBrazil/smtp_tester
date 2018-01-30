'use strict';

class AxiosWrapper {

    constructor(toast, loader) {
        this.toast = toast;
        this.loader = loader;
    }

    post ( url, data, success, fail ) {
        this.request( 'post', url, data, success, fail );
    }

    put ( url, data, success, fail ) {
        this.request( 'put', url, data, success, fail );
    }

    get ( url, success, fail ) {
        this.request( 'get', url, {}, success, fail );
    }

    delete ( url, success, fail ) {
        this.request( 'delete', url, {}, success, fail );
    }

    request ( method = 'get', url, data, success, fail ) {

        if(this.loader) {
            this.loader.show();
        }

        axios( {
            method: method,
            url: url,
            data: data
        } )
        .then( ( response ) => {

            if(this.loader) {
                this.loader.hide();
            }

            if(success) success(response.data);

            if(response.data.message) {
                if(this.toast) {
                    this.toast.success(response.data.message);
                }
            }
        })
        .catch( ( errors ) => {
            if(this.loader) {
                this.loader.hide();
            }
            
            if(fail) fail(errors);
            this.catchErrors( errors );
        });
    }

    catchErrors ( error ) {
        let errorMessage = error.message;
        console.log(error, error.message);

        if (error.response) {
            errorMessage = (error.response.data.message) ? error.response.data.message : errorMessage;
            if(error.response.data.errors) {
                let allErrors = error.response.data.errors;
                
                // Loop the returned errors and show each message
                Object.keys(allErrors).map((errorsKey, index) => {
                    var errors = allErrors[errorsKey];
                    errors.forEach(errorMessage => {
                        this.toast.error(errorMessage);
                    });
                })
            }
        }

        if(this.toast) {
            this.toast.error(errorMessage);
        }
    }

}

module.exports = AxiosWrapper;