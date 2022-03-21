const path = require('path');

module.exports = {
    resolve: {
        alias: {
            '@': path.resolve('resources/js'),
            '@asset': path.resolve('public'),
        },
    },
};
