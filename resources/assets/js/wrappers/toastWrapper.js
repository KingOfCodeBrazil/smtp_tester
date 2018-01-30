'use strict';

module.exports = {

    error: function( message, title ) {
        IziToast.error( {
            position: 'topRight',
            title: title || 'Error',
            message: message,
        } );
    },

    warning: function( message, title ) {
        IziToast.warning( {
            position: 'topRight',
            title: title || 'Warning',
            message: message,
        } );
    },

    success: function( message, title ) {
        IziToast.success( {
            position: 'topRight',
            title: title || 'Success',
            message: message,
        } );
    }

}