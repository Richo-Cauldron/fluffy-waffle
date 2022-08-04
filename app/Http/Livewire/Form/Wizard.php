<?php

namespace App\Http\Livewire\Form;

use App\Models\Product;
use Livewire\Component;

class Wizard extends Component
{
    public $currentStep = 1;

    public $product_title, $product_valued_min, $product_valued_max, $product_ticketed_sale_price, 
            $product_details, $product_type, $search_reference, $product_brand, $brand_type = "";

    public $product_types = [
        'Clothing',
        'Accessories',
        'Shoes',
        'Homewares',
        'Toys',
        'Books',
        'Linen',
        'Miscellaneous'
    ];

    public $successMsg = '';

    // =====================================================

    public function render()
    {
        return view('livewire.form.wizard');
    }

    public function firstStepSubmit()
    {

        $validatedData = $this->validate([
            'product_type' => 'required',
            'product_brand' => 'required',
            'brand_type' => 'required'
        ]);
        // dd($validatedData);
        $this->currentStep = 2;
    }

    public function secondStepSubmit()
    {
        $validatedData = $this->validate([
            'product_valued_min' => 'required_if:product_valued_max,=,null',
            'product_valued_max' => 'required_if:product_valued_min,=,null',
            'product_ticketed_sale_price' => 'required'
        ]);
//   'detail' => 'required',
        $this->currentStep = 3;
    }

    public function thirdStepSubmit()
    {
        $validatedData = $this->validate([
            'product_details' => 'required',
            'search_reference' => 'nullable'
        ]);
        // dd($validatedData);

        $this->currentStep = 4;
    }

    public function fourthStepSubmit()
    {
        // $validatedData = $this->validate([
        //     'product_details' => 'required',
        //     'search_reference' => 'nullable'
        // ]);
        // dd($validatedData);

        $this->currentStep = 5;
    }



    public function submitForm()
    {
        Product::create([
            'name' => $this->name,
            'price' => $this->price,
            'detail' => $this->detail,
        ]);
  
        $this->successMsg = 'Product successfully created.';
  
        $this->clearForm();
  
        $this->currentStep = 1;
    }

    public function back($step)
    {
        $this->currentStep = $step;    
    }

    public function clearForm()
    {
        $this->name = '';
        $this->price = '';
        $this->detail = '';
    }
}
