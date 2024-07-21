
# PHP Bootstrap Carousel Site

This project is a PHP site that showcases photos and videos in a responsive layout using Bootstrap 5, Slick, jQuery, MySQL, and MVC architecture.

## Features
- Responsive design using Bootstrap 5.
- Carousel on the homepage using images from the images src folder.
- Admin page to define slideshows/carousels with a sidebar for actions.
- Consistent fixed header/navigation across the site.

## Folder Structure
- `app`: Contains MVC architecture components (controllers, models, views).
- `config`: Configuration files.
- `public`: Public assets (CSS, images, JavaScript).
- `src`: Source files (images, JavaScript, SCSS).
- `views`: Twig template files.
- `webpack.config.js`: Webpack configuration.

## Pages
- Homepage: Follows the Bootstrap carousel example.
- Admin: Dashboard layout similar to the WordPress dashboard.

## Twig Templates
- `layout.html.twig`: Base layout template.
- `base.html.twig`: Extends layout with content blocks.
- `index.html.twig`: Homepage template extending base.
- `admin/index.html.twig`: Admin panel index template.
- `admin/create-slideshow.html.twig`: Admin form for creating slideshows.

## Webpack Configuration
- Compiles SCSS from `src/scss` to `public/css`.
- Bundles JavaScript from `src/js` to `public/js`.
- Copies images from `src/images` to `public/images`.

## MySQL Tables
- `admin`: Holds links for admin tasks.
- `carousels`: Stores carousel information.
- `images`: Stores image information.
- `tags`: Stores reusable tags.
- `carousel_tags`: Handles many-to-many relationships between carousels and tags.
- `image_tags`: Handles many-to-many relationships between images and tags.

## Dependencies
- Bootstrap 5
- Slick Carousel
- jQuery
- Webpack
- MiniCssExtractPlugin
- CopyWebpackPlugin

## Setup Instructions
1. Install dependencies: `composer install`, `npm install`.
2. Build assets: `npm run build`.
3. Run the PHP server and navigate to the homepage.
4. Import the SQL script to set up the database tables.
