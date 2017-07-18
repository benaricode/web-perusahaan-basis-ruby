Rails.application.routes.draw do

  
   root :to => 'home#index'




     get 'about' => 'about#index'

     get 'contact' => 'contact#index'

      get 'blog' => 'blog#index'


end
