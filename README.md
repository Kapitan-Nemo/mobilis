# Mobilis WordPress Plugin


![Mobilis In Mobile](images/mobilis-in-mobili.png)


Mobilis is a WordPress plugin boilerplate for development using Vue 3, Vite, TypeScript, and Tailwind CSS. It provides a convenient starting point for developing WordPress plugins with a modern JavaScript stack.

You can run development and build scripts to work on the Vue application and compile it into a WordPress plugin. The plugin includes a simple Vue component that you can use as a starting point for your own development.

## Features

- Vue 3 for building user interfaces
- Vite for a fast and lean development experience
- TypeScript for static type checking
- Tailwind CSS for utility-first CSS styling

## Project Structure

- `src/`: Contains the Vue application source code
- `includes/`: Contains PHP files for WordPress plugin functionality
- `public/`: Public assets for the plugin
- `mobilis.php`: The main PHP file for the WordPress plugin

## Development

To start the development server:

```sh
npm run dev
```

## Building the Application

To build the application for production, you can use the build script provided in the `package.json` file. Here's the command to do it:

```sh
npm run build
```

# Vue 3 + TypeScript + Vite

This template should help get you started developing with Vue 3 and TypeScript in Vite. The template uses Vue 3 `<script setup>` SFCs, check out the [script setup docs](https://v3.vuejs.org/api/sfc-script-setup.html#sfc-script-setup) to learn more.

## Recommended Setup

- [VS Code](https://code.visualstudio.com/) + [Vue - Official](https://marketplace.visualstudio.com/items?itemName=Vue.volar) (previously Volar) and disable Vetur

- Use [vue-tsc](https://github.com/vuejs/language-tools/tree/master/packages/tsc) for performing the same type checking from the command line, or for generating d.ts files for SFCs.
