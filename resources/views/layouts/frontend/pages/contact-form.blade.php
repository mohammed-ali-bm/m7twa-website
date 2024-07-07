@extends('layouts.frontend.app')



@section('content')
</div>


<div class="page-container">
    <div class="py-12 app-layout">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
    
                    <h2 class="main-title">تواصل معنا</h2>
            
    
                
                    
                            <div class="page-content">
                           
                                <x-splade-form>

                                    <div class="input-item">
                                        <x-splade-input name="name" label="{{ __('all.name') }}" required />
                                    </div>
                            
                                    <div class="input-item">
                                        <x-splade-input  type="number" name="mobile" label="{{ __('all.phone') }}"  required/>
                                    </div>
                            
                            
                                    <div class="input-item">
                                        <x-splade-input  type="email" name="email" label="{{ __('all.email') }}" />
                                    </div>
                            
                            
                                    <div class="input-item">
                                        <x-splade-textarea name="message" label="{{ __('all.message') }}" autosize required />
                                    </div>
                            
                            
                                    <div class="input-item">
                                        <x-splade-submit label="{{ __('all.submit') }}" :spinner="true" class="primary-button" />
                                    </div>
                                </x-splade-form>

                            </div>
                  
                    
                  
    
                        </div>
    
    
                    </div>
    
    
    
                </div>
            </div>
</div>






      
@endsection