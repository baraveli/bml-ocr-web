<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BML OCR - BARAVELI</title>
    <link rel="stylesheet" href="/css/app.css">

</head>

<body>
    <div id="app">

        <div class="relative bg-gray-50 overflow-hidden">

            <div style="display: none;" class="absolute top-0 inset-x-0 p-2 md:hidden">
                <div class="rounded-lg shadow-md transition transform origin-top-right">
                    <div class="rounded-lg bg-white shadow-xs overflow-hidden">
                        <div class="px-5 pt-4 flex items-center justify-between">

                        </div>


                    </div>
                </div>
            </div>

            <div class="mt-10 mx-auto max-w-screen-xl px-4 sm:mt-12 sm:px-6 md:mt-16 lg:mt-20 xl:mt-28">
                <div class="text-center">
                    <h2
                        class="text-4xl tracking-tight leading-10 font-extrabold text-gray-900 sm:text-5xl sm:leading-none md:text-6xl">
                        BML OCR BY
                        <br class="xl:hidden" />
                        <span class="text-green-600">BARAVELI</span>
                    </h2>
                    <p
                        class="leading-7 mt-3 max-w-md mx-auto text-base text-gray-700 sm:text-lg md:mt-5 md:text-xl md:max-w-3xl">
                        Convert your BML receipt to a text response.
                    </p>

                    <a href="https://github.com/baraveli/bml-ocr-web">
                        <div class="flex justify-center mt-2">
                            <svg class="h-10 w-10" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M12 .5C5.37.5 0 5.78 0 12.292c0 5.211 3.438 9.63 8.205 11.188.6.111.82-.254.82-.567 0-.28-.01-1.022-.015-2.005-3.338.711-4.042-1.582-4.042-1.582-.546-1.361-1.335-1.725-1.335-1.725-1.087-.731.084-.716.084-.716 1.205.082 1.838 1.215 1.838 1.215 1.07 1.803 2.809 1.282 3.495.981.108-.763.417-1.282.76-1.577-2.665-.295-5.466-1.309-5.466-5.827 0-1.287.465-2.339 1.235-3.164-.135-.298-.54-1.497.105-3.121 0 0 1.005-.316 3.3 1.209.96-.262 1.98-.392 3-.398 1.02.006 2.04.136 3 .398 2.28-1.525 3.285-1.209 3.285-1.209.645 1.624.24 2.823.12 3.121.765.825 1.23 1.877 1.23 3.164 0 4.53-2.805 5.527-5.475 5.817.42.354.81 1.077.81 2.182 0 1.578-.015 2.846-.015 3.229 0 .309.21.678.825.56C20.565 21.917 24 17.495 24 12.292 24 5.78 18.627.5 12 .5z" fill="#212121"/></svg>
                      </div>
                    </a>
                   
                    <div>

                        <bml-ocr-component></bml-ocr-component>
                    </div>

                </div>
            </div>

            <div class="mt-8">
                <p class="text-center text-base leading-6 text-gray-700">
                  &copy; 2020 <a href="https://baraveli.xyz/" class="underline hover:text-gray-900">Baraveli</a> | <a href="https://github.com/baraveli/bml-ocr-web" class="underline hover:text-gray-900">Github</a> | Project by <a href="https://github.com/jinas123" class="underline hover:text-gray-900">Jinas</a> 
                </p>
              </div>
        </div>
    </div>






    <script src="/js/app.js"></script>
</body>

</html>