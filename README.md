# Laravel Componel

Laravel Componel is a Laravel 7 package which includes essential components to make creating forms, table and custom ui's for your laravel blade base application a breeze. \
**This package requires Node.js to be installed in order to run npm commands and It Uses TailwindCSS as It's UI CSS styles, and it's backed with AlpineJS as it's javascript reactive power.**

Useful links:

-   Support: [GitHub Issues](https://github.com/muhsenmaqsudi/laravel-componel/issues)
-   Contribute: [GitHub Pulls](https://github.com/muhsenmaqsudi/laravel-componel/pulls)

## Installation

Require LaravelComponel:

    composer require muhsenmaqsudi/laravel-componel

Add TailwindCSS & AlpineJS UI Preset Scaffolding

    php artisan componel:ui

With Authentication Scaffolding

    php artisan componel:ui --auth

Installing TailwindCSS & AlpineJS and compiling them

    npm install
    npm run dev

## Laravel Componel Components

Laravel Compnel offers useful components to make building your app ui fast & easy. See below examples of each component.

Available Colors:

All of the default TailwindCSS color pallets are available for all the components where color matters.

`Black, White, Gray, Red, Orange, Yellow, Green, Teal, Blue, Indigo, Purple & Pink`

All the colors except Black & White comes with a 100 to 900 color shades that you can use like this `{color-name}-{shade-no}`

Alert:

    <x-componel-alert text-color="red-500"
                      bg-color="yellow-500">
        Your alert message goes here
    </x-componel-alert>

Badge:

    <x-componel-badge text-color="gray-800"
                      bg-color="blue-400"
                      rounded>
        Your text goes here
    </x-componel-badge>

Button:

    <x-componel-button variant="pink-500"
                       size="lg"
                       outline
                       rounded>
        Button Title
    </x-componel-button>

**Note: available sizes: ['sm', 'md', 'lg']**

Input:

    <x-componel-input name="email"
                      type="email"
                      label="Email:"
                      id="email_id"
                      placeholder="Enter your email"
                      :value="old('email', $data->email ?? '')"
                      disabled
                      readonly>
    </x-componel-input>

Checkbox:

    <x-componel-checkbox name="terms"
                         label="accept terms & conditions"
                         checkbox-label="accept"
                         id="terms_id"
                         :value="old('terms', $data->terms ?? '')"
                         disabled>
    </x-componel-checkbox>

**Note: checkbox attributes should have `boolean` migration columns.**

Select:

    <x-componel-select name="option"
                        label="Option Label:"
                        first-option="Select your option"
                        :options="[1 => 'option1', 2 => 'option2']"
                        :value="old('option', $data->option ?? '')"
    >
    </x-componel-select>

-   Note: if the options are an associative array, the keys are used as the labels and the values as the values. For sequential arrays, the values are used for both the labels and values.
-   :options="['option1', 'option2', 'option3']" => options with sequential array
-   :options="[1 => 'option1', 2 => 'option2']" => options with associate array

File:

    <x-componel-file name="avatar"
                     id="upload"
                     label="Upload your avatar"
                     variant="teal-500">
    </x-componel-file>

Textarea:

    <x-componel-textarea name="body"
                         label="Text Body:"
                         placeholder="Your text body goes here"
                         :value="old('body', $data->body ?? '')">
    </x-componel-textarea>

Radios:

    <x-componel-radios name="option"
                       :options="['option1', 'option2', 'option3']"
                       :value="old('option', $data->option ?? ''">
    </x-componel-radios>

-   :options="['option1', 'option2', 'option3']" => options with sequential array
-   :options="[1 => 'option1', 2 => 'option2']" => options with associate array

## Packages Used

Composer packages:

NPM packages:

-   [tailwindcss](https://www.npmjs.com/package/tailwindcss)
-   [@tailwindcss/custom-forms](https://www.npmjs.com/package/@tailwindcss/custom-forms)
-   [laravel-mix-purgecss](https://www.npmjs.com/package/laravel-mix-purgecss)
-   [laravel-mix-tailwind](https://www.npmjs.com/package/laravel-mix-tailwind)
-   [alpinejs](https://www.npmjs.com/package/alpinejs)
