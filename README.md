# Laravel Componel

Laravel Componel is a Laravel 7 package which includes essential components to make creating forms, table and custom ui's for your laravel blade base application a breeze. \
**This package requires Node.js to be installed in order to run npm commands and It Uses TailwindCSS as It's UI CSS styles, and it's backed with AlpineJS as it's javascript reactive power.**

Useful links:

-   Support: [GitHub Issues](https://github.com/muhsenmaqsudi/laravel-componel/issues)
-   Contribute: [GitHub Pulls](https://github.com/muhsenmaqsudi/laravel-componel/pulls)

## Installation

Require LaravelComponel:

    composer require muhsenmaqsudi/laravel-componel

Publishing Vendor Assets

    php artisan vendor:publish --tag="componel-config"
    php artisan vendor:publish --tag="componel-views"


Add TailwindCSS & AlpineJS UI Preset Scaffolding

    php artisan componel:ui

With Authentication Scaffolding

    php artisan componel:ui --auth

Installing TailwindCSS & AlpineJS and compiling them

    npm install && npm run dev

## Laravel Componel Components

Laravel Componel offers useful components to make building your app ui fast & easy. See below examples of each component.

Available Colors:

All of the default TailwindCSS color pallets are available for all the components where color matters.

`Black, White, Gray, Red, Orange, Yellow, Green, Teal, Blue, Indigo, Purple & Pink`

All the colors except Black & White comes with a 100 to 900 color shades that you can use like this `{color-name}-{shade-no}`

Alert:

```blade
    <x-componel-alert text-color="black"
                      bg-color="green-500">
        Your alert message goes here
    </x-componel-alert>
```

Badge:

```blade
    <x-componel-badge text-color="gray-700"
                      bg-color="teal-200"
                      rounded>
        Your text goes here
    </x-componel-badge>
```

Button:

```blade
    <x-componel-button variant="pink-500"
                       size="lg"
                       outline
                       rounded
                       :events="['onclick' => 'alert(\'clicked\')']"
>
        Button Title
    </x-componel-button>
```

- Note: available sizes: 'sm', 'md', 'lg'

Input:

```blade
    <x-componel-input name="email"
                      type="email"
                      label="Email:"
                      id="email_id"
                      placeholder="Enter your email"
                      :value="old('email', $data->email ?? '')">
    </x-componel-input>
```

- for disabling the input set `disabled` attributes, for readonly input set `readonly` attribute**
```blade
    <x-componel-input disabled readonly></x-componel-input>
```

Checkbox:

```blade
    <x-componel-checkbox name="terms"
                         label="accept terms & conditions"
                         checkbox-label="accept"
                         id="terms_id"
                         :value="old('terms', $data->terms ?? '')">
    </x-componel-checkbox>
```

- for disabling the checkbox set `disabled` attributes \
- checkbox attributes should have `boolean` migration columns.

Select:

```blade
    <x-componel-select name="option"
                       label="Option Label:"
                       first-option="Select your option"
                       :options="[1 => 'option1', 2 => 'option2']"
                       :value="old('option', $data->option ?? '')">
    </x-componel-select>
```

-   if the options are an associative array, the keys are used as the labels and the values as the values. For sequential arrays, the values are used for both the labels and values.
-   :options="['option1', 'option2', 'option3']" => options with sequential array
-   :options="[1 => 'option1', 2 => 'option2']" => options with associate array

File:

```blade
    <x-componel-file name="avatar"
                     id="upload"
                     label="Upload your avatar"
                     variant="indigo-500">
    </x-componel-file>
```

Textarea:

```blade
    <x-componel-textarea name="body"
                         label="Text Body:"
                         placeholder="Your text body goes here"
                         :value="old('body', $data->body ?? '')">
    </x-componel-textarea>
```

Radios:

```blade
    <x-componel-radios name="option"
                       :options="['option1', 'option2', 'option3']"
                       :value="old('option', $data->option ?? '')">
    </x-componel-radios>
```

-   :options="['option1', 'option2', 'option3']" => options with sequential array
-   :options="[1 => 'option1', 2 => 'option2']" => options with associate array

Dropdown:

```blade
    <x-componel-dropdown name="My Dropdown" :links="[
        'URL link' => '/auth/login', '|', 'Google' => 'https://google.com', 'Login' => 'login'
    ]"
                         bg-color="teal-500"
    >
    </x-componel-dropdown>
```

- '|' is the separator in the drop down list, so use it when you want to separate links

Dialog:

```blade
        <x-componel-dialog size="lg" scrollable no-transition no-header no-footer no-close close-title="Cancel" ok-title="Submit">
            <x-slot name="activator">
                <x-componel-button :events="['click' => 'toggleDialog()']" variant="red-500" outline>Open Dialog</x-componel-button>
            </x-slot>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad architecto aut enim eos error eveniet explicabo
            ipsa ipsam laudantium minima nisi obcaecati omnis quam qui reprehenderit sapiente sunt, tenetur veniam.
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet blanditiis deserunt, dolore harum maxime nam
            nulla quasi voluptate? Adipisci error illum laudantium magnam praesentium quibusdam sit ut. Dolor, dolore,
            rem.
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi aperiam, autem corporis deserunt dolores ea
            eligendi et impedit magni mollitia natus necessitatibus odio quae recusandae reiciendis sunt suscipit vel
            voluptas?
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium alias, aspernatur atque aut
            consequuntur cumque deleniti distinctio dolorum et facere fugit iusto labore maxime nemo quam quas
            repellendus, reprehenderit voluptatibus!

            <x-slot name="footer">
                <x-componel-button :events="['click' => 'toggleDialog()']" variant="green-500" rounded>Save</x-componel-button>
            </x-slot>
        </x-componel-dialog>
```


## Package Config

For publishing package's config file run the bellow command

    php artisan vendor:publish --tag="componel-config"
    
```php
    // app/config.php
    return [
        'text-base-color' => 'white', // changing the app text base color
        'background-base-color' => 'blue-500' // changing the app background base color
    ];  
```

## Packages Used

Composer packages:

NPM packages:

-   [tailwindcss](https://www.npmjs.com/package/tailwindcss)
-   [@tailwindcss/custom-forms](https://www.npmjs.com/package/@tailwindcss/custom-forms)
-   [laravel-mix-purgecss](https://www.npmjs.com/package/laravel-mix-purgecss)
-   [laravel-mix-tailwind](https://www.npmjs.com/package/laravel-mix-tailwind)
-   [alpinejs](https://www.npmjs.com/package/alpinejs)
