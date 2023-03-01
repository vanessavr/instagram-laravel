<x-guest-layout>
    <div class="flex flex-col items-center justify-center bg-gray-50">
        <div class="w-[60%] flex items-center justify-center">
            <div class="w-[40%] ml-3 flex flex-col">
                <div class="bg-white mt-4 p-8 border border-gray-300">
                    <div class="flex items-center justify-center my-4">
                        <a href="{{route('login')}}">
                            <img src="/images/instagram_logo.png" alt="" class="w-44">
                        </a>
                    </div>
                    <div class="text-center text-gray-500 font-extrabold">
                        Regístrate para ver fotos y vídeos de tus amigos.
                    </div>
                    <a  class="text-white bg-secondary rounded-md my-4 p-2 font-bold items-center justify-center mb-3 text-sm flex" href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="w-4 mr-2" style="fill: #fff"><!--! Font Awesome Pro 6.3.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M400 32H48A48 48 0 0 0 0 80v352a48 48 0 0 0 48 48h137.25V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.27c-30.81 0-40.42 19.12-40.42 38.73V256h68.78l-11 71.69h-57.78V480H400a48 48 0 0 0 48-48V80a48 48 0 0 0-48-48z"/></svg>
                        Iniciar sesión con Facebook
                    </a>

                    <div class="text-center text-gray-500 text-xl my-4">
                        o
                    </div>
    
                    <form action="{{route('register')}}" method="POST">
                        @csrf

                        <input type="text" id="phone_email" class="bg-gray-50 text-xs rounded border-gray-300 w-full mb-1" name="phone_email" placeholder="Número de móvil o correo electrónico">
                        @error('phone_email')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror

                        <input type="text" id="name" class="bg-gray-50 text-xs rounded border-gray-300 w-full mb-1"  name="name" placeholder="Nombre completo">
                        @error('name')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror

                        <input type="text" id="username" class="bg-gray-50 text-xs rounded border-gray-300 w-full mb-1"  name="username" placeholder="Nombre de usuario">
                        @error('username')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror

                        <input type="password" id="password" class="bg-gray-50 text-xs rounded border-gray-300 w-full mb-1"  name="password" placeholder="Contraseña">
                        @error('password')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror

                        <button type="submit" class="bg-primary text-white font-semibold p-2 rounded-lg w-full mt-4">Registrarte</button>
                    </form>
                    <div class="text-xs text-center mt-3 text-gray-500">
                        Es posible que los usuarios de nuestro servicio hayan subido tu información de contacto en Instagram.
                        <a href="#" class="text-blue-900">
                            Más información.
                        </a>
                    </div>
                    <div class="text-xs text-center mt-3 text-gray-500">
                        Al registrarte, aceptas nuestras <a href="#" class="text-blue-900">Condiciones.</a> nuestra <a href="#" class="text-blue-900">Política de privacidad</a> y nuestra <a href="#" class="text-blue-900">Política de cookies.</a>
                    </div>

                </div>

                <div class="bg-white p-5 mt-3 border border-gray-300">
                    <div class="text-center text-sm">
                        ¿Tienes una cuenta?  <a class="text-sky-500 text-center mb-3 text-sm" href="{{ route('login') }}">Entrar</a>
                    </div>

                </div>
                <div class="mt-5">
                    <div class="text-center mb-3 text-sm">
                        Descarga la aplicación 
                    </div>
                    <div class="flex items-center justify-center">
                        <img src="/images/google-play.png" class="w-[40%] object-contain mr-2" alt="">
                        <img src="/images/microsoft.png" class="w-[35%] object-contain" alt="">
                    </div>
                </div>
            
            </div>
        </div>

        <footer class="py-8 ">
            <div class="flex gap-4 text-xs">
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
