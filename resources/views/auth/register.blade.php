<x-guest-layout>
   
<!-- Section: Design Block -->
<section class="text-center text-lg-start">
  <style>
    .cascading-right {
      margin-right: -50px;
    }

    @media (max-width: 991.98px) {
      .cascading-right {
        margin-right: 0;
      }
    }
  </style>

  <!-- Jumbotron -->
  <div class="container py-4">
    <div class="row g-0 align-items-center">
      <div class="col-lg-6 mb-5 mb-lg-0">
        <div class="card cascading-right" style="
            background: hsla(0, 0%, 100%, 0.55);
            backdrop-filter: blur(30px);
            ">
          <div class="card-body p-5 shadow-5 text-center">
            <h2 class="fw-bold mb-5">انشاء حساب جديد</h2>
            <form method="POST" action="{{ route('register') }}">
                 @csrf
              <!-- 2 column grid layout with text inputs for the first and last names -->
              <div class="row">
                <div class="form-outline mb-4">
                  
                     <x-input-label for="name" :value="__('الاسم')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
                  </div>
                
                
              </div>

              <!-- Email input -->
              <div class="form-outline mb-4">
                 <x-input-label for="email" :value="__('الايميل')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
              </div>

              <!-- Password input -->
              <div class="form-outline mb-4">
                 <x-input-label for="password" :value="__('كلمه السر')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
              </div>
              <div class="form-outline mb-4">
<input type="password" name="password_confirmation" class="block mt-1 w-full"
                    placeholder="تاكيد كلمه السر"><br>
                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
             </div>

              <!-- Submit button -->
             <div class=" mt-4">
           <div class="pr-5"> <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('لدي حساب بالفعل?') }}
            </a></div><br>

            <x-primary-button class="ml-4">
                {{ __(' انشاء حساب') }}
            </x-primary-button>
        </div>

            </form>
          </div>
        </div>
      </div>

      <div class="col-lg-6 mb-5 mb-lg-0">
        <img src="https://mdbootstrap.com/img/new/ecommerce/vertical/004.jpg" class="w-100 rounded-4 shadow-4"
          alt="" />
      </div>
    </div>
  </div>
  <!-- Jumbotron -->
</section>
<!-- Section: Design Block -->



</x-guest-layout>
