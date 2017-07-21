# wp-react-skeleton
A bare bones theme for serving a React app through WordPress

This WordPress theme does one thing, and one thing only: serves a React app through WordPress' index.php. Great for if you're using the JSON API to buils a simple app with content powered by WordPress.

## Installation Instructions

1. Clone this repository in your `themes` directory:
`git clone https://github.com/gopperman/wp-react-skeleton.git`

2. Bootstrap your React app. Use [https://github.com/facebookincubator/create-react-app](create-react-app) or your favorite scaffolding to generate an app inside your `wp-react-skeleton-folder`:
```
cd wp-react-skeleton
npm i -g create-react-app
create-react-app app
```

3. Get coding!

4. Compile your app using `npm run build`

5. In `app/package.json`, edit "homepage" to be the url of your app's static build