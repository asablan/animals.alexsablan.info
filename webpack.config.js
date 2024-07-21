const path = require('path');
const MiniCssExtractPlugin = require('mini-css-extract-plugin');
const CopyWebpackPlugin = require('copy-webpack-plugin');

module.exports = {
    entry: {
        main: './src/scss/main.scss',
        app: './src/js/app.js',
        homepage: './src/js/pages/homepage.js'
    },
    output: {
        filename: 'js/[name].js',
        path: path.resolve(__dirname, 'public'),
        clean: {
            keep: /index\.php|\.htaccess|glide\.php/,
        },
    },
    module: {
        rules: [
            {
                test: /\.scss$/,
                use: [
                    MiniCssExtractPlugin.loader,
                    'css-loader',
                    'sass-loader'
                ]
            },
            {
                test: /\.(png|jpe?g|gif)$/i,
                type: 'asset/resource',
                generator: {
                    filename: 'images/[name][ext][query]'
                }
            }
        ]
    },
    plugins: [
        new MiniCssExtractPlugin({
            filename: 'css/[name].css'
        }),
        new CopyWebpackPlugin({
            patterns: [
                { from: 'src/images', to: 'images' },
                { from: 'public/index.php', to: '.', force: true },
                { from: 'public/.htaccess', to: '.', force: true },
                { from: 'public/glide.php', to: '.', force: true }
            ]
        })
    ],
    devtool: 'source-map'
};
