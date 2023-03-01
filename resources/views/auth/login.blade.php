<x-guest-layout>
    <div class="h-screen flex flex-col items-center justify-center bg-gray-50">
        <div class="h-[80%] w-[60%] flex">
            <div class="w-1/2 flex items-start justify-center">
                <img src="/images/instagram_login.png" alt="alternatetext" class="w-[90%] object-contain">
            </div>
            <div class="w-1/2 ml-3 flex flex-col">
                <div class="w-[80%] bg-white mt-4 p-8 border border-gray-300">
                    <div class="flex items-center justify-center mb-8">
                        <img src="/images/instagram_logo.png" alt="" class="w-48">
                    </div>
                    
                    <form action="{{route('login')}}" method="POST">
                        @csrf
                        <input type="text" id="email" class="bg-gray-50 text-xs rounded border-gray-300 w-full mb-1" name="email" placeholder="Teléfono, usuario o correo electrónico">
                        <input type="password" id="password" class="bg-gray-50 text-xs rounded border-gray-300 w-full"  name="password" placeholder="Contraseña">
                        <input type="submit" value="Entrar" class="bg-primary text-white font-semibold p-2 rounded-lg w-full mt-4">
                    </form>

                    <div class="text-center text-gray-500 text-xl my-4">
                        o
                    </div>
                    <a class="text-blue-900 font-bold items-center justify-center mb-3 text-sm flex" href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="w-4 mr-2 text-blue-900" style="fill: #1e3a91"><!--! Font Awesome Pro 6.3.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M400 32H48A48 48 0 0 0 0 80v352a48 48 0 0 0 48 48h137.25V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.27c-30.81 0-40.42 19.12-40.42 38.73V256h68.78l-11 71.69h-57.78V480H400a48 48 0 0 0 48-48V80a48 48 0 0 0-48-48z"/></svg>
                        Iniciar sesión con Facebook
                    </a>
                    <a class="text-blue-900 block text-center text-sm" href="{{route('password.request')}}">¿Has olvidado la contraseña?</a>

                </div>

                <div class="w-[80%] bg-white p-5 mt-3 border border-gray-300">
                    <div class="text-center">
                        ¿No tienes una cuenta?  <a class="text-sky-500 font-bold  text-center mb-3 text-sm" href="{{ route('register') }}">Regístrate</a>
                    </div>

                </div>
                <div class="w-[80%] mt-5">
                    <div class="text-center mb-3">
                        Descarga la aplicación 
                    </div>
                    <div class="flex items-center justify-center">
                        <img src="/images/google-play.png" class="w-[40%] object-contain mr-2" alt="">
                        <img src="/images/microsoft.png" class="w-[35%] object-contain" alt="">
                    </div>
                </div>
            </div>
        </div>

        <footer>
            <div class="flex gap-4">
                <a class="text-gray-400 block text-center text-sm" href="#">Meta</a>
                <a class="text-gray-400 block text-center text-sm" href="#">Información</a>
                <a class="text-gray-400 block text-center text-sm" href="#">Blog</a>
                <a class="text-gray-400 block text-center text-sm" href="#">Empleo</a>
                <a class="text-gray-400 block text-center text-sm" href="#">Ayuda</a>
                <a class="text-gray-400 block text-center text-sm" href="#">API</a>
                <a class="text-gray-400 block text-center text-sm" href="#">Privacidad</a>
                <a class="text-gray-400 block text-center text-sm" href="#">Condiciones</a>
                <a class="text-gray-400 block text-center text-sm" href="#">Cuentas destacadas</a>
                <a class="text-gray-400 block text-center text-sm" href="#">Ubicaciones</a>
                <a class="text-gray-400 block text-center text-sm" href="#">Instagram lite</a>
                <a class="text-gray-400 block text-center text-sm" href="#">Subir contactos y personas no usuarias</a>
            </div>
            <div class="flex text-gray-400 text-sm items-center justify-center mt-3">
                <div class="mr-4">
                Español (España)
                </div>
                <div>
                    © {{ date('Y') }} Instagram from Meta
                </div>
            </div>
        </footer>
    </div>
</x-guest-layout>