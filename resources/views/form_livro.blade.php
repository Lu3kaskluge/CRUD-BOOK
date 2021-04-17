@include('templates.header')
    <main class="bg-gray-100 dark:bg-gray-800 rounded-2xl relative h-screen overflow-hidden relative">
        <div class="flex items-start justify-between">        
        
<div class="flex flex-col w-5/12 px-4 py-8 bg-white rounded-lg shadow dark:bg-gray-800 mx-auto">
    <div class="self-center mb-2 text-xl font-light text-gray-800 sm:text-2xl dark:text-white">{{ isset($livro->id) ? 'Editar' : 'Cadastrar'}} Livro</div>
    <div class="p-6 mt-8">
        <form action="{{ route((isset($livro->id) ? 'editar' : 'cadastro'), $livro->id ?? '')}}" method="POST">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="flex flex-col mb-2">
                <div class=" relative ">
                    <label for="titulo">Título</label>
                    <input type="text" required id="titulo" placeholder="Titulo" name="titulo" value="{{ $livro->titulo ?? '' }}" class=" rounded-lg border-transparent flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"/>
                    </div>
            </div>
            <div class="flex flex-col mb-2">
                <div class=" relative ">
                    <label for="isbn">ISBN</label>
                    <input type="text" required id="isbn" placeholder="ISBN" name="isbn" value="{{ $livro->isbn ?? '' }}" class=" rounded-lg border-transparent flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"/>
                </div>
            </div>
            <div class="flex flex-col mb-2">
                <div class=" relative ">
                    <label for="cat">Categoria</label>
                    <input type="text" required id="cat" placeholder="Categoria" name="categoria" value="{{ $livro->categoria ?? '' }}" class=" rounded-lg border-transparent flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"/>
                </div>
            </div>
            <div class="flex flex-col mb-2">
                <div class=" relative ">
                    <label for="autor">Autor</label>
                    <input type="text" required id="autor" placeholder="Autor" name="autor" value="{{ $livro->autor ?? '' }}" class=" rounded-lg border-transparent flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"/>
                </div>
            </div>
            <div class="flex flex-col mb-2">
                <div class=" relative ">
                    <label for="editora">Editora</label>
                    <input type="text" required id="editora" placeholder="Editora" name="editora" value="{{ $livro->editora ?? '' }}" class=" rounded-lg border-transparent flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"/>
                </div>
            </div>
            <div class="flex flex-col mb-2">
                <div class=" relative ">
                    <label for="edicao">Edição</label>
                    <input type="number" required id="edicao" placeholder="Edição" name="edicao" value="{{ $livro->edicao ?? '' }}" class=" rounded-lg border-transparent flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"/>
                </div>
            </div>
            <div class="flex flex-col mb-2">
                <div class=" relative ">
                    <label for="volume">Volume</label>
                    <input type="number" required id="volume" placeholder="Volume" name="volume" value="{{ $livro->volume ?? '' }}" class=" rounded-lg border-transparent flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"/>
                </div>
            </div>
            <div class="flex flex-col mb-2">
                <div class=" relative ">
                    <label for="paginas">Qtd. Páginas</label>
                    <input type="number" required id="paginas" placeholder="Qtd. Páginas" name="qtd_paginas" value="{{ $livro->qtd_paginas ?? '' }}" class=" rounded-lg border-transparent flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"/>
                </div>
            </div>
            <div class="flex flex-col mb-2">
                <div class=" relative ">
                    <label for="pub">Data Publicação</label>
                    <input type="date" required id="pub" placeholder="Data Publicação" name="data_pub" value="{{ $livro->data_pub ?? '' }}" class=" rounded-lg border-transparent flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"/>
                </div>
            </div>
            <div class="flex w-full my-4">
                <button type="submit" class="py-2 px-4 bg-purple-700 text-white text-center font-semibold shadow-md focus:outline-none rounded-lg ">
                    Salvar
                </button>
            </div>
        </form>
    </div>
    </div>
</div>
</main>

@include('templates.footer')