const path = require('path');
const MiniCssExtractPlugin = require("mini-css-extract-plugin");

module.exports = {
    resolve: {
        alias: {
            Fonts: path.resolve(__dirname, 'src/fonts/'),
            Images: path.resolve(__dirname, 'src/images/'),
            Scripts: path.resolve(__dirname, 'src/scripts/'),
        },
        extensions: ['.scss', '.js']
    },
    entry: {
        app: 'Scripts/app.js',
    },
    output: {
        path: path.resolve(__dirname, 'dist'),
        clean: true,
    },
    module: {
        rules: [
            {
                test: /\.(css)$/,
                use: [
                    MiniCssExtractPlugin.loader, 'css-loader'
                ]
            },
            {
                test: /\.(scss)$/,
                use: [
                    MiniCssExtractPlugin.loader, 'css-loader', 'sass-loader'
                ]
            },
            {
                test: /\.(png|svg|jpg|jpeg|gif|webp)$/i,
                type: 'asset/resource',
            },
            {
                test: /\.(woff|woff2|eot|ttf|otf)$/i,
                type: 'asset/resource',
            }
        ]
    },
    plugins: [new MiniCssExtractPlugin()],
};
