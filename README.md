# Laratify

Laratify is a Laravel 7 package which includes essential components to make creating forms, table and custom ui's for your laravel blade base application a breeze. \
**This package requires Node.js to be installed in order to run npm commands and It Uses TailwindCSS as It's UI CSS styles, and it's backed with AlpineJS as it's javascript reactive power.**

Useful links:

-   Support: [GitHub Issues](https://github.com/muhsenmaqsudi/laratify/issues)
-   Contribute: [GitHub Pulls](https://github.com/muhsenmaqsudi/laratify/pulls)

## Installation

Require Laratify:

    composer require muhsenmaqsudi/laratify

Publishing Vendor Assets

    php artisan vendor:publish --tag="laratify-config"
    php artisan vendor:publish --tag="laratify-views"


Add TailwindCSS & AlpineJS UI Preset Scaffolding

    php artisan laratify:ui

With Authentication Scaffolding

    php artisan laratify:ui --auth

Installing TailwindCSS & AlpineJS and compiling them

    npm install && npm run dev

## Laratify Components

Laratify offers useful components to make building your app ui fast & easy. See below examples of each component.

Available Colors:

All of the default TailwindCSS color pallets are available for all the components where color matters.

`Black, White, Gray, Red, Orange, Yellow, Green, Teal, Blue, Indigo, Purple & Pink`

All the colors except Black & White comes with a 100 to 900 color shades that you can use like this `{color-name}-{shade-no}`

Alert:

```blade
    <x-laratify-alert text-color="black"
                      bg-color="green-500">
        Your alert message goes here
    </x-laratify-alert>
```

Badge:

```blade
    <x-laratify-badge text-color="gray-700"
                      bg-color="teal-200"
                      rounded>
        Your text goes here
    </x-laratify-badge>
```

Button:

```blade
    <x-laratify-button variant="pink-500"
                       size="lg"
                       outline
                       rounded
                       :events="['onclick' => 'alert(\'clicked\')']"
>
        Button Title
    </x-laratify-button>
```

- Note: available sizes: 'sm', 'md', 'lg'

Input:

```blade
    <x-laratify-input name="email"
                      type="email"
                      label="Email:"
                      id="email_id"
                      placeholder="Enter your email"
                      :value="old('email', $data->email ?? '')">
    </x-laratify-input>
```

- for disabling the input set `disabled` attributes, for readonly input set `readonly` attribute**
```blade
    <x-laratify-input disabled readonly></x-laratify-input>
```

Checkbox:

```blade
    <x-laratify-checkbox name="terms"
                         label="accept terms & conditions"
                         checkbox-label="accept"
                         id="terms_id"
                         :value="old('terms', $data->terms ?? '')">
    </x-laratify-checkbox>
```

- for disabling the checkbox set `disabled` attributes \
- checkbox attributes should have `boolean` migration columns.

Select:

```blade
    <x-laratify-select name="option"
                       label="Option Label:"
                       first-option="Select your option"
                       :options="[1 => 'option1', 2 => 'option2']"
                       :value="old('option', $data->option ?? '')">
    </x-laratify-select>
```

-   if the options are an associative array, the keys are used as the labels and the values as the values. For sequential arrays, the values are used for both the labels and values.
-   :options="['option1', 'option2', 'option3']" => options with sequential array
-   :options="[1 => 'option1', 2 => 'option2']" => options with associate array

File:

```blade
    <x-laratify-file name="avatar"
                     id="upload"
                     label="Upload your avatar"
                     variant="indigo-500">
    </x-laratify-file>
```

Textarea:

```blade
    <x-laratify-textarea name="body"
                         label="Text Body:"
                         placeholder="Your text body goes here"
                         :value="old('body', $data->body ?? '')">
    </x-laratify-textarea>
```

Radios:

```blade
    <x-laratify-radios name="option"
                       :options="['option1', 'option2', 'option3']"
                       :value="old('option', $data->option ?? '')">
    </x-laratify-radios>
```

-   :options="['option1', 'option2', 'option3']" => options with sequential array
-   :options="[1 => 'option1', 2 => 'option2']" => options with associate array

Dropdown:

```blade
    <x-laratify-dropdown name="My Dropdown" :links="[
        'URL link' => '/auth/login', '|', 'Google' => 'https://google.com', 'Login' => 'login'
    ]"
                         bg-color="teal-500"
    >
    </x-laratify-dropdown>
```

- '|' is the separator in the drop down list, so use it when you want to separate links

Dialog:

```blade
    <x-laratify-dialog size="lg" scrollable no-transition no-header no-footer no-close close-title="Cancel" ok-title="Submit">
        <x-slot name="activator">
            <x-laratify-button :events="['click' => 'toggleDialog()']" variant="red-500" outline>Open Dialog</x-laratify-button>
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
            <x-laratify-button :events="['click' => 'toggleDialog()']" variant="green-500" rounded>Save</x-laratify-button>
        </x-slot>
    </x-laratify-dialog>
```

Tooltip:

```blade
    <x-laratify-button id="elButton">Element</x-laratify-button>
    <x-laratify-button id="idButton">Id</x-laratify-button>
    <x-laratify-tooltip content="Tooltip with id" placement="left" append-to="button" no-arrow />
    <x-laratify-tooltip content="Tooltip with element" placement="top-start" append-to="#idButton" />
```

Available placements:
 
- top, bottom, right, left, 
- {top,bottom,right,left}-start, {top,bottom,right,left}-end'

Note: **remember to put tooltip after the parent element**

Grids & Grid

```blade
    <x-laratify-grids :cols="['all' => 3, 'sm' => 2]" :rows="['all' => 5, 'md' => 3]" :gaps="['all'=> 2, 'md' => 20]">
        <x-laratify-grid :col-start="['all' => 1, 'md'=>2]" :col-end="['all' => 2, 'sm' => 1]" :row-start="['all' => 2, 'lg' => 4]" :row-end="['all' => 4]">
            <div class="h-full bg-blue-500">2</div>
        </x-laratify-grid>
        <x-laratify-grid>
            <div class="h-full bg-red-500">1</div>
        </x-laratify-grid>
        <x-laratify-grid>
            <div class="h-full bg-black">3</div>
        </x-laratify-grid>
        <x-laratify-grid>
            <div class="h-full bg-gray-500">4</div>
        </x-laratify-grid>
    </x-laratify-grids>
```

Container, Col & Row

```blade
    <x-laratify-container class="py-5">
        <x-laratify-row class="h-64 border border-2 border-blue-500" flex-dir="col" align="center" justify="end">
            <x-laratify-col class="px-8" cols="6" md="4" xl="4">
                <div class="text-center bg-blue-400 p-2">1</div>
            </x-laratify-col>
            <x-laratify-col cols="6" md="4" xl="4" order="first">
                <div class="text-center bg-green-300 p-2">2</div>
            </x-laratify-col>
            <x-laratify-col cols="6" md="4" xl="4" flex="grow">
                <div class="text-center bg-green-200 p-2">3</div>
            </x-laratify-col>
        </x-laratify-row>
        <x-laratify-row class="h-64 my-4 border border-2 border-blue-500" align="center" justify="center">
            <x-laratify-col cols="3">
                <div class="text-center bg-yellow-400 p-2">A</div>
            </x-laratify-col>
            <x-laratify-col cols="3" align-self="end">
                <div class="text-center bg-indigo-400 p-2">B</div>
            </x-laratify-col>
            <x-laratify-col cols="3">
                <div class="text-center bg-teal-400 p-2">C</div>
            </x-laratify-col>
        </x-laratify-row>
    </x-laratify-container>
```
- flex options: initial,1,auto,none,grow,grow-0,shrink,shrink-0,
- order options: 1,2,3,4,5,6,7,8,9,10,11,12, first,last,none
- align-self options: auto, start, center, end, stretch
- flex-dir options: row, row-reverse, col, col-reverse
- align option: stretch, start, center, end, baseline (flex's align-items)
- justify options: start, center, end, between, around
- align-content options: start, center, end, between, around

Card

```blade
    <x-laratify-container class="py-5">
        <x-laratify-row class="h-full my-4" wrap-cols>
            <x-laratify-col cols="full" sm="6" md="4" class="p-2" flex="shrink-0">
                <x-laratify-card title="Card Title" subtitle="Card Subtitle" title-class="text-center" subtitle-class="text-center">
                    <x-slot name="title">
                        <div class="text-blue-500">Card Title</div>
                    </x-slot>
                    <div class="text-sm leading-5 text-black px-4 py-5">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab asperiores cumque eos exercitationem
                        ipsam
                        quasi ratione? At consequatur deleniti exercitationem in labore laudantium odit quod repellat.
                        Deleniti
                        illo quod repellat.
                    </div>
                </x-laratify-card>
            </x-laratify-col>
            <x-laratify-col cols="full" sm="6" md="4" class="p-2" flex="shrink-0">
                <x-laratify-card title="Card Title" subtitle="Card Subtitle">
                    <div class="text-sm leading-5 text-gray-600 px-4 py-5">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab asperiores cumque eos exercitationem
                        ipsam
                        quasi ratione? At consequatur deleniti exercitationem in labore laudantium odit quod repellat.
                        Deleniti
                        illo quod repellat.
                    </div>
                </x-laratify-card>
            </x-laratify-col>
            <x-laratify-col cols="full" sm="6" md="4" class="p-2" flex="shrink-0">
                <x-laratify-card title="Card Title" subtitle="Card Subtitle">
                    <div class="text-sm leading-5 text-gray-600 px-4 py-5">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab asperiores cumque eos exercitationem
                        ipsam
                        quasi ratione? At consequatur deleniti exercitationem in labore laudantium odit quod repellat.
                        Deleniti
                        illo quod repellat.
                    </div>
                </x-laratify-card>
            </x-laratify-col>
        </x-laratify-row>
        
        <x-laratify-card title="Card Title" subtitle="Card Subtitle">
            <dl>
                <div class="bg-gray-100 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm leading-5 font-medium text-gray-500">
                        Full name
                    </dt>
                    <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
                        Muhsen Maqsudi
                    </dd>
                </div>
                <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm leading-5 font-medium text-gray-500">
                        Job Title
                    </dt>
                    <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
                        Backend Developer
                    </dd>
                </div>
            </dl>
        </x-laratify-card>
    </x-laratify-container>
```

Navbar

```blade
    <x-laratify-navbar :links="['URL link' => '/auth/login', 'Google' => 'https://google.com', 'Login' => 'login']">
        <x-slot name="logo">
            <img class="block lg:hidden h-8 w-auto"
                 src="https://tailwindui.com//img/logos/workflow-mark-on-dark.svg" alt=""/>
            <img class="hidden lg:block h-8 w-auto"
                 src="https://tailwindui.com/img/logos/workflow-logo-on-dark.svg" alt=""/>
        </x-slot>
        <x-slot name="profileDropdown">
            <a href="#"
               class="block px-4 py-2 text-sm leading-5 text-gray-700 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 transition duration-150 ease-in-out">Your
                Profile</a>
            <a href="#"
               class="block px-4 py-2 text-sm leading-5 text-gray-700 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 transition duration-150 ease-in-out">Settings</a>
            <a href="#"
               class="block px-4 py-2 text-sm leading-5 text-gray-700 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 transition duration-150 ease-in-out">Sign
                out</a>
        </x-slot>
    </x-laratify-navbar>
```

Table

```blade
    <x-laratify-table stripped hover 
        :columns="[
            'name' => 'Name',
            'title' => 'Title',
            'status' => 'Status',
            'role' => 'Role'
         ]"
        :rows="[
            [
                'id' => 1,
                'name' => 'Bernard Lane',
                'title' => 'Human Resources',
                'status' => 'Active',
                'role' => 'Owner'
            ],
            [
                'id' => 2,
                'name' => 'Muhsen Maqsudi',
                'title' => 'Backend Developer',
                'status' => 'Inactive',
                'role' => 'Admin'
            ],
            [
                'id' => 3,
                'name' => 'Muhsen Maqsudi',
                'title' => 'Backend Developer',
                'status' => 'Inactive',
                'role' => 'Admin'
            ],
         ]"
        :actions="[
                'show' => 'get_view_route_name',
                'edit' => 'get_edit_route_name',
                'delete' => 'get_edit_route_delete'
         ]"
         actions-custom-view="components.partials.my-action"
    >
    </x-laratify-table>
```

Tabs & Tab

```blade
    <x-laratify-tabs :navs="['first', 'second', 'third']">
        <x-laratify-tab id="first">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor odit rerum voluptatibus. Ad alias
            aperiam beatae culpa delectus, dolor eligendi ipsam minus necessitatibus nihil numquam odit provident ut
            vitae voluptatibus?
        </x-laratify-tab>
        <x-laratify-tab id="second">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi aperiam aut dicta dolore dolorem
            eligendi expedita in ipsa, ipsum labore maiores porro ratione rem rerum sed sit tempora velit
            voluptatum.
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae, commodi, delectus dicta dignissimos
            dolorum eaque error excepturi expedita nam neque non nulla praesentium quae quaerat quo rerum saepe
            veritatis, voluptatum.
        </x-laratify-tab>
        <x-laratify-tab id="third">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi aperiam aut dicta dolore dolorem
            eligendi expedita in ipsa, ipsum labore maiores porro ratione rem rerum sed sit tempora velit
            voluptatum.
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae, commodi, delectus dicta dignissimos
            dolorum eaque error excepturi expedita nam neque non nulla praesentium quae quaerat quo rerum saepe
            veritatis, voluptatum.
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. A, aliquam asperiores assumenda at corporis
            cum dolor ea id, impedit ipsa laborum nobis obcaecati ratione rem reprehenderit, unde voluptatem
            voluptatum. Quaerat!
        </x-laratify-tab>
    </x-laratify-tabs>
```

## Package Config

For publishing package's config file run the bellow command

    php artisan vendor:publish --tag="laratify-config"
    
```php
    // app/config.php
    return [
        'text-base-color' => 'white', // changing the app text base color
        'background-base-color' => 'blue-500' // changing the app background base color
    ];  
```

## Packages Used

Composer packages:
-   [laravel/ui](https://github.com/laravel/ui)

NPM packages:

-   [tailwindcss](https://www.npmjs.com/package/tailwindcss)
-   [@tailwindcss/custom-forms](https://www.npmjs.com/package/@tailwindcss/custom-forms)
-   [laravel-mix-purgecss](https://www.npmjs.com/package/laravel-mix-purgecss)
-   [laravel-mix-tailwind](https://www.npmjs.com/package/laravel-mix-tailwind)
-   [alpinejs](https://www.npmjs.com/package/alpinejs)
-   [tippyjs](https://github.com/atomiks/tippyjs)
