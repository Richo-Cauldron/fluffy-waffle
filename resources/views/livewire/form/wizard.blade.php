<div>
    <h1 class="text-4xl text-center mb-4">Add Product Wizard</h1>
    @if(!empty($successMsg))  
        <div class="p-4 mb-4 text-sm text-green-700 bg-green-100 rounded-lg dark:bg-green-200 dark:text-green-800" role="alert">
            <span class="font-medium">{{ $successMsg }}</span> 
        </div>
    @endif 
    <!-- Wizard Progress Bar -->
    <div class="table relative w-full mb-8">
        <div class="table-row">
            <div class="text-center relative table-cell">
                <a href="#step-1" type="button"
                    class=" {{ $currentStep != 1 ? 'text-white bg-blue-400 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800' : 'text-white bg-green-400 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 focus:outline-none dark:focus:ring-green-800' }}">1</a>
                <p>Product Type</p>
            </div>
            <div class="text-center relative table-cell">
                <a href="#step-2" type="button"
                class=" {{ $currentStep != 2 ? 'text-white bg-blue-400 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800' : 'text-white bg-green-400 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 focus:outline-none dark:focus:ring-green-800' }}">2</a>
                <p>Product Value</p>
            </div>
            <div class="text-center relative table-cell">
                <a href="#step-3" type="button"
                   class=" {{ $currentStep != 3 ? 'text-white bg-blue-400 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800' : 'text-white bg-green-400 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 focus:outline-none dark:focus:ring-green-800' }}"
                    disabled="disabled">3</a>
                <p>Product Details</p>
            </div>
            <div class="text-center relative table-cell">
                <a href="#step-4" type="button"
                    class=" {{ $currentStep != 4 ? 'text-white bg-blue-400 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800' : 'text-white bg-green-400 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 focus:outline-none dark:focus:ring-green-800' }}">4</a>
                <p>Product Image</p>
            </div>
            <div class="text-center relative table-cell">
                <a href="#step-5" type="button"
                   class=" {{ $currentStep != 5 ? 'text-white bg-blue-400 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800' : 'text-white bg-green-400 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 focus:outline-none dark:focus:ring-green-800' }}"
                    disabled="disabled">5</a>
                <p>Product Save</p>
            </div>
        </div>
    </div>

    <!-- Wizard Step 1 - Product Type -->
    <div class=" {{ $currentStep != 1 ? 'hidden' : '' }}" id="step-1">
        <p class="text-3xl font-semi-bold mb-6">Product Research Results</p>
        <div class="mb-3">
            <x-label for="product_type">Product Type:</x-label>
            <select wire:model="product_type" class="w-full rounded-md shadow border-gray-300 focus:border-blue-300  focus:ring-blue-200 focus:ring-opacity-50 focus:ring-1" id="product_type">
                <option>Select Type</option>
                @foreach($product_types as $type)
                    <option value="{{ $type }}">{{ $type }}</option>
                @endforeach
            </select>
            @error('product_type') <span class="error text-red-500">*{{ $message }}</span> @enderror
        </div>
        <div class="mb-3">
            <x-label for="product_brand">Product Brand:</x-label>
            <x-input type="text" wire:model="product_brand" class="w-full text-gray-700 focus:shadow-outline focus:ring-1" id="product_brand" />
            @error('product_brand') <span class="error text-red-500">*{{ $message }}</span> @enderror
        </div>
        <div class="mb-3">
            <x-label for="brand_type">Product Brand Type:</x-label>
            <x-input type="text" wire:model="brand_type" class="w-full text-gray-700 focus:shadow-outline focus:ring-1" id="brand_type" />
            @error('brand_type') <span class="error text-red-500">*{{ $message }}</span> @enderror
        </div>
        <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none  dark:focus:ring-blue-800" wire:click="firstStepSubmit" type="button">Next</button>
    </div>

    <!-- Wizard Step 2 - Product Value -->
    <div class=" {{ $currentStep != 2 ? 'hidden' : '' }}" id="step-2">
        <div class="mb-3">
            <x-label for="product_valued_min">Product Valued Minimum Price:</x-label>
            <div class="flex">
                <span class="mt-1 p-1 text-gray-600">$</span>
                <x-input type="number" min="0" wire:model="product_valued_min" class="w-full text-gray-700 focus:shadow-outline focus:ring-1" id="product_valued_min"/>
            </div>
            @error('product_valued_min') <span class="error text-red-500">*{{ $message }}</span> @enderror
        </div>
        <div class="mb-3">
            <x-label for="product_valued_max">Product Valued Maximum Price:</x-label>
            <div class="flex">
                <span class="mt-1 p-1 text-gray-600">$</span>
                <x-input type="number" min="0" wire:model="product_valued_max" class="w-full text-gray-700 focus:shadow-outline focus:ring-1" id="product_valued_max" />
            </div>
            @error('product_valued_max') <span class="error text-red-500">*{{ $message }}</span> @enderror
        </div>
        <div class="mb-3">
            <x-label for="product_ticketed_sale_price">Product Ticketed Sale Price:</x-label>
            <div class="flex">
                <span class="mt-1 p-1 text-gray-600">$</span>
                <x-input type="number" min="0" wire:model="product_ticketed_sale_price" class="w-full text-gray-700 focus:shadow-outline focus:ring-1" id="product_ticketed_sale_price" />
            </div>
            @error('product_ticketed_sale_price') <span class="error text-red-500">*{{ $message }}</span> @enderror
        </div>
        <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none  dark:focus:ring-blue-800" wire:click="secondStepSubmit" type="button">Next</button>
        <button class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-8 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900" type="button" wire:click="back(1)">Back</button>
    </div>

    <!-- Wizard Step 3 - Product Details & Search Reference-->
    <div class="row setup-content {{ $currentStep != 3 ? 'hidden' : '' }}" id="step-3">
        <div class="col-md-12">
            <p class="text-3xl font-semi-bold my-6"> Step 3</p>
            <div class="mb-4">
                <label class="block text-gray-700 text-smdm font-semi-bold mb-2" for="product_details">Product Details:</label>
                <x-textarea wire:model="product_details" id="product_details">
                </x-textarea>
                @error('product_details') <span class="error text-red-500">*{{ $message }}</span> @enderror
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-smdm font-semi-bold mb-2" for="search_reference">Search Reference:</label>
                <x-input type="text" wire:model="search_reference" class="w-full text-gray-700 focus:shadow-outline focus:ring-1" id="search_reference"/>
                @error('search_reference') <span class="error text-red-500">*{{ $message }}</span> @enderror
            </div>
            <button class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none  dark:focus:ring-blue-800" type="button"
                wire:click="thirdStepSubmit">Next</button>
            <button class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-8 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900" type="button" wire:click="back(1)">Back</button>
        </div>
    </div>

    <!-- Wizard Step 4 - Product Image -->
    <div class="{{ $currentStep != 4 ? 'hidden' : '' }}" id="step-4">
        <p>image upload from image-upload-test.test</p>
        <button class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none  dark:focus:ring-blue-800" type="button"
        wire:click="fourthStepSubmit">Next</button>
        <button class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-8 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900" type="button" wire:click="back(1)">Back</button>
    </div>

    <!-- Wizard Step 5 - Product Save -->
   <div class="{{ $currentStep != 5 ? 'hidden' : '' }}" id="step-5">
        <div class="col-md-12">
        <p class="text-3xl font-semi-bold my-6"> Step 3</p>
            <table class="table">
                
                <tr>
                    <td>Product Department:</td>
                    <td class="text-center"><strong>{{$product_type}}</strong></td>
                </tr>
                <tr>
                    <td>Product Brand:</td>
                    <td class="text-center"><strong>{{$product_brand}}</strong></td>
                </tr>
                <tr>
                    <td>Product Brand Type:</td>
                    <td><strong>{{$brand_type}}</strong></td>
                </tr>
                <tr>
                    <td>Product Valued Minimum Price:</td>
                    <td><strong>{{$product_valued_min}}</strong></td>
                </tr>
                <tr>
                    <td>Product Valued Maximum Price:</td>
                    <td><strong>{{$product_valued_max}}</strong></td>
                </tr>
                <tr>
                    <td>Product Ticketed Sale Price:</td>
                    <td><strong>{{$product_ticketed_sale_price}}</strong></td>
                </tr>
                <tr>
                    <td>Product Details:</td>
                    <td><strong>{{$product_details}}</strong></td>
                </tr>
                <tr>
                    <td>Product Search Reference:</td>
                    <td><strong>{{$search_reference}}</strong></td>
                </tr>
                <tr>
                    <td>Product Image File:</td>
                    <td><strong>imageFile.jpg</strong></td>
                </tr>

            </table>
            <button class="text-white bg-blgreenue-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 focus:outline-none  dark:focus:ring-green-800" wire:click="submitForm" type="button">Finish!</button>
            <button class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-8 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900" type="button" wire:click="back(2)">Back</button>
        </div>
    </div> 
</div>