<x-guest-layout>
    <div class="bg-white p-4 border-b border-gray-300 ">
        <a href="{{route('login')}}">
            <img src="/images/instagram_logo.png" alt="" class="w-24 ml-[17%]">
        </a>
    </div>
    
    <div class="flex flex-col items-center justify-center bg-gray-50">
        <div class="w-[60%] flex items-center justify-center">
            <div class="w-[45%] ml-3 flex flex-col">
                <div class="bg-white mt-4 p-8 border border-gray-300">
                    <div class="flex items-center justify-center my-4">
                        <img src="/images/candado.png" alt="" class="w-24">
                    </div>
                    <div class="text-center text-gray-900 font-extrabold">
                        ¿Tienes problemas para entrar?
                    </div>

                    <div class="text-center text-gray-500 text-sm my-4">
                        Introduce tu correo electrónico, número de teléfono o nombre de usuario y te enviaremos un enlace para que vuelvas a entrar en tu cuenta.
                    </div>
                    
                    <form>
                        <input type="text" id="fname" class="bg-gray-50 text-xs rounded border-gray-300 w-full mb-1" name="fname" placeholder="Correo electrónico, télefono o nombre de usuario">
                        <input type="submit" value="Enviar enlace de acceso" class="bg-primary text-white text-sm font-semibold p-2 rounded-lg w-full mt-4">
                    </form>

                    <a href="#" class="text-blue-900 text-center my-4 block text-xs">
                        ¿No puedes cambiar la contraseña?
                    </a>
                    <div class="text-center text-gray-500 text-xl my-4">
                        o
                    </div>

                    <a href="{{route('register')}}" class="text-center block font-bold text-sm mt-4 mb-10">
                        Crear cuenta nueva
                    </a>

                </div>

                <div class="bg-gray-50 p-3 border-r border-l border-b border-gray-300 ">
                    <a href="{{route('login')}}" class="text-center block font-bold text-sm">
                        Volver al inicio de sesión
                    </a>
                    
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
